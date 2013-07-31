<?php
require_once "kvreader2.php";

$raw = array
(
    'BAILOPAN' => array
    (
        'auth' => 'steam',
        'identity' => 'STEAM_0:1:16',
        'flags' => 'abcdef',
        'group' => array
        (
            0 => 'Reserved',
            1 => 'Root'
        )
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
	print_r($data);
} else {
	echo 'Test failed!' . PHP_EOL . 'Data:' . PHP_EOL;
	print_r($diff);
}