<?php

namespace src\Manager\Spreadsheet;


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
        $this->validate();

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
            die('file not found!');
        }
        if (!isset($f['file'])) {
            die('File not found!');
        }

        if ($ext = pathinfo($f['file']['name'], PATHINFO_EXTENSION)) {
            if (in_array($ext, ['xlsx'])) {
                die('Invalid File Type!');
            }
        }
        return true;
    }
}