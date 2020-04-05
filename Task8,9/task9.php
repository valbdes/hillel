<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

$csv = file(__DIR__ . '/cats.csv');

function getCsvArray(array $file_array)
{
    for ($i = 0; $i < count($file_array); $i++) {
        yield '<pre>'. print_r(explode(',', $file_array[$i]),true) . '</pre>';
    }
}
$generator = getCsvArray($csv);

foreach ($generator as $key => $line) {
    print_r($line);
}