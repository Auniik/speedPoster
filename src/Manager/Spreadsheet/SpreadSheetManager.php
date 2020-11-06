<?php

namespace src\Manager\Spreadsheet;


use Exception;
use SimpleXLSX;

class SpreadSheetManager
{
    private array $f;

    public function __construct(array $fileInfo)
    {
        $this->f = $fileInfo;
    }

    public function parse()
    {
        $rows = $this->toArray();

        return (new SpreadSheetParser)->handle($rows);
    }

    public function toArray()
    {
        $file = $this->save();

        if ( $xlsx = SimpleXLSX::parse($file) ) {
            $rows = $xlsx->rows();
             if ( count($rows) ) {
                 unlink($file);
                 return $rows;
             }
        }

        return SimpleXLSX::parseError();
    }

    public function save()
    {
        try { $this->validate(); } catch (Exception $e) {
            echo json_encode([
                'status' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
            exit(412);
        }

        $uploadFile = base_path('src/tmp') . date('dmyhis'). basename($this->f['file']['name']);

        if (move_uploaded_file($this->f['file']['tmp_name'], $uploadFile)) {
            return $uploadFile;
        }

        die('Something wrong with upload!');
    }

    public function validate()
    {
        $f = $this->f;

        if (!count($f)) {
            throw new Exception('File not found!', 422);
        }
        if (!isset($f['file'])) {
            throw new Exception('Invalid file!', 422);
        }

        if ($ext = pathinfo($f['file']['name'], PATHINFO_EXTENSION)) {
            if (!in_array($ext, ['xlsx'])) {
                throw new Exception('Invalid file type!', 422);
            }
        }
        return true;
    }
}