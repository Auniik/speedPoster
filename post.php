<?php


use src\Manager\Action\PersistController;
use src\Manager\Spreadsheet\SpreadSheetManager;

require 'vendor/autoload.php';
require 'src/Helpers/file.php';



$xlsx = new SpreadSheetManager($_FILES);
$rows = $xlsx->parse();
json_logger($rows);
(new PersistController($rows))->handle();