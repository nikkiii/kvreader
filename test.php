<?php
require_once "kvreader.php";

$raw = array(
	'Test' => array(
		'key' => 'value'
	)
);

$reader = new KVReader();

//Writing test
$data = $reader->write($raw);

//Reading test
$recon = $reader->read($data);

//Compare them
$diff = array_diff($raw, $recon);
if(empty($diff)) {
	echo 'Test passed.' . PHP_EOL;
} else {
	echo 'Test failed!' . PHP_EOL . 'Data:' . PHP_EOL;
	print_r($diff);
}