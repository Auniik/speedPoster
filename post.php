<?php


//use src\Manager\Action\PersistController;
use src\Manager\Spreadsheet\SpreadSheetManager;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    throw new Exception;
}

require 'vendor/autoload.php';
require 'src/Helpers/file.php';


ini_set('log_errors',1);
ini_set('error_log','./src/tmp/log.log');

$xlsx = new SpreadSheetManager($_FILES);
$rows = $xlsx->parse();
//json_logger($rows);
//(new PersistController($rows))->handle();

$data = json_encode($rows);
//echo "Data generated... \n";


$logger_file = __DIR__ . DIRECTORY_SEPARATOR . 'script.js';
$injector_file = __DIR__ . DIRECTORY_SEPARATOR . 'injector.js';

$injector_script = file_get_contents($injector_file);

$iterator = isset($_POST['iterator_start']) ? $_POST['iterator_start'] - 1 : 0;

$script = "const data = $data;\n call_r_insert($iterator); \n $injector_script";

file_put_contents($logger_file, $script);
echo $script;