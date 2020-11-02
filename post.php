<?php


use src\Manager\Spreadsheet\SpreadSheetManager;
use src\Utils\RequestSanitizer;

require 'vendor/autoload.php';
require 'src/Helpers/file.php';

$xlsx = new SpreadSheetManager($_FILES);

var_dump($xlsx->parse());

//$request = new RequestSanitizer($_POST);
//
//var_dump($request->parse());