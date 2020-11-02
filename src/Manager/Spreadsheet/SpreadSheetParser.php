<?php


namespace src\Manager\Spreadsheet;


class SpreadSheetParser
{
    public function handle(array $rows)
    {
        $callback = fn ($row, $i)  =>  array_map( function ($elem, $k) use ($i) {
            if ($k == 1) {
                return $this->parseDate($elem, $i);
            }
            return $elem;

        }, $row, array_keys($row));

        return array_map($callback, $rows, array_keys($rows));
    }

    public function parseDate(string $date, $i)
    {
        $data = file_get_contents(base_path('src') . 'config.json');
        $iterable = json_decode($data);

        foreach ($iterable->range as $v) {
            if ($i >= $v->start && $i <= $v->end) {
                return $v->date;
            }
            return $iterable->default_date;
        }
        return $date;
    }

}