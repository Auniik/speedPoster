<?php


namespace src\Manager\Spreadsheet;


class SpreadSheetParser
{
    protected static array $attributes = [
        'record_no', 'policy_date', 'policy_no', 'medical_card_no', 'first_name', 'last_name',
        'city', 'state', 'phone', 'martial_status', 'general_practitioner_code', 'hospital_claim_days',
        'paid_amount', 'net_amount'
    ];
    protected $config;

    protected static array $stringParser = [
        'A' => 8,
        'a' => 0,
        'B' => 8,
        'b' => 6,
        'C' => 0,
        'c' => 0,
        'D' => 0,
        'd' => 0,
        'E' => 8,
        'f' => 1,
        'g' => 8,
        'G' => 0,
        'H' => 8,
        'h' => 6,
        'I' => 1,
        'i' => 1,
        'j' => 1,
        'l' => 1,
        'o' => 0,
        'O' => 0,
        'p' => 0,
        'q' => 9,
        's' => 5,
        'S' => 5,
        'T' => 7,
        't' => 1,
        'x' => 8,
        'X' => 8,
        'Z' => 7,
        'z' => 7
    ];

    public function handle(array $rows)
    {
        $this->getConfig();

        $callback = fn ($row, $i)  =>  array_merge(
            [
                '_token' => "",
                'save' => ""
            ],
            ...array_map( function ($elem, $k) use ($i) {
                $identity = $i + 1;
                if ($k == 1) {
                    return [
                        self::$attributes[$k] => $this->parseDate($elem, $identity)
                    ];
                }
                if (in_array($k, [13, 12])) {
                    return [
                        self::$attributes[$k] => $this->parseInteger($elem)
                    ];
                }
                return [
                    self::$attributes[$k] => $this->parseString($elem)
                ];

            }, $row, array_keys($row))
        );

        return array_map($callback, $rows, array_keys($rows));
    }

    public function parseDate(string $date, $i)
    {
        $configs = $this->config;

        foreach ($configs->ranges as $v) {

            if (($i >= $v->start) && ($i <= $v->end)) {
                $date =  $v->date;
            }

        }
        return $date;
    }

    private function parseInteger($elem)
    {
        if (is_string($elem)) {
            return strtr($elem, self::$stringParser);
        }

        if (!trim($elem)) {
            return 0;
        }

        return $elem;
    }

    private function parseString($elem)
    {
        $data = trim(preg_replace('/[^a-zA-Z0-9_ -]/s','',$elem));
        if (!$data) {
            return 0;
        }

        if ($data == 'Triple') {
            return 'Married';
        }

        return $data;
    }

    public function getConfig()
    {
        if ($_POST['input_type'] == 'manual') {
            $this->getManualConfig();
        }

        if ($_POST['input_type'] == 'json') {
            $this->getJSONConfig($_POST['json_input']);
        }

    }

    public function getJSONConfig($data)
    {
        $range = "{
            \"ranges\": $data
        }";
        $this->config = json_decode($range);
    }
    public function getManualConfig()
    {
        $array = [
            'ranges' => []
        ];
        foreach ($_POST['start'] as $k => $value) {
            array_push($array['ranges'], (object)[
                'start' => $value, 'end' => $_POST['end'][$k], 'date' => $_POST['date'][$k]
            ]);
        }

        $this->config =  (object)$array;
    }

}