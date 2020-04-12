<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
$pattern = '/^[0-9]{1,5}$/';
$reg = '/\s{2,}/';
$reg2 = ' ';

$text = 'Hello  world?How  are     you need  back    up';

$ready = preg_replace($reg,$reg2,$text);
echo $ready . '<br>';
   
$index_string = file_get_contents(__DIR__ . '/index.html');



$str = '/<[a-z]+(\s+[a-z]+=[\'|"].+[\'|"])*>(.*)<\/[a-z]+>/mu';
$str1 = '/<title>(.+)<\/title>/mu';
preg_match_all($str1, $index_string, $matches);


echo '<pre>'. print_r($matches[1][0],true)  . '</pre>';

// strval($index_string);
// $str = '/<[a-z]+(\s+[a-z]+=[\'|"].+[\'|"])*>.*<\/[a-z]+>/mu';
// $str1 = '/<[a-z]+>[a-zA-Z]<\/[a-z]+>/mu';
// $str2 = '/[a-zA-Z]+/mu';
// preg_match_all($str, $index_string, $matches, PREG_PATTERN_ORDER);
// $whatinside = $matches[0];
// preg_match_all($str2,$whatinside,$match,PREG_SET_ORDER);
// echo print_r($match[0],true);

// echo '<pre>'. print_r($matches[0],true)  . '</pre>';
