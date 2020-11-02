<?php


namespace src\Manager\Action;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class PersistController
{
    private array $rows;
    private string $url = 'http://firstbd.test/test.php';

    public function __construct(array $rows)
    {
        $this->rows = $rows;
    }

    public function handle()
    {
//        var_dump($this->rows);
//        die();

        set_time_limit(600);

        $client = new Client();

        $logger_file = base_path("src/tmp") . "error_logs.txt";

        foreach ($this->rows as $k => $row) {
            ++$k;
            try {
                $response = $client->post($this->url, [
                    'form_params' => $row
                ]);
                $body = $response->getBody();
                $status = $response->getStatusCode();

                $log = "[" . date('Y-m-d h:i:s'). "] $k - Status: Success, Code: $status " .  PHP_EOL;

                        var_dump($body->getContents());
//        die();
                echo $log;

                if ($status > 200) {
                    file_put_contents($logger_file, $log, FILE_APPEND);
                }

            } catch (GuzzleException $e) {
                $logger_file = base_path("src/tmp/error_logs.txt");

                file_put_contents($logger_file, $e->getTraceAsString(), FILE_APPEND);
            }

//            usleep(100000);

        }

    }
}