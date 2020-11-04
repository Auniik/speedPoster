<?php


use src\Manager\Action\PersistController;
use src\Manager\Spreadsheet\SpreadSheetManager;

require 'vendor/autoload.php';
require 'src/Helpers/file.php';



$xlsx = new SpreadSheetManager($_FILES);
$rows = $xlsx->parse();
//json_logger($rows);
//(new PersistController($rows))->handle();

$data = json_encode($rows);
echo "Data generated... \n";


$logger_file = __DIR__ . DIRECTORY_SEPARATOR . 'script.js';

$script = "const data = $data; \n call_r_insert();
	function call_r_insert(i = 0) {
	    let serial = Number(i) + 1;
		if (i === data.length) { return; }
		if (Object.keys(data[i]).length) {
			$.post('insert.php', data[i]).done(function( response ) {
				console.log('Success: ' +  serial)
				call_r_insert(serial)
            }).catch(function (response) {
				console.log('Failed for ' + serial + ' Response: ' + response);
		    });
        } else {
            console.log('Data not found for: ' + serial )
        }
	}";

file_put_contents($logger_file, $script);
echo "Script generated...";