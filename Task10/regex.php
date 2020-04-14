<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
//**1. Написать регулярку для проверки Является ли строка числом, длиной до 5 цифр */
$pattern = '/^[0-9]{1,5}$/';
$string = '12343335';
$result = preg_match($pattern, $string);
if($result){
    echo 'Correct string' . '<br>';
}else{
    echo 'Incorrect string' . '<br>';
}
 
//**2. Заменить все повторяющиеся пробелы в тексте на один */
$patt = '/\s{2,}/';
$rep = ' ';
$text = 'Hello  world!How  are     you .Everething is      fine     ?need  back    up?';
$ready = preg_replace($patt,$rep,$text);
echo $ready . '<br>'; 
//**3. Найти текст, заключенный в какой-то тег, например <TITLE> ... </TITLE> из HTML-файла и вывести данный текст */ 
$indexString = file_get_contents(__DIR__ . '/index.html');
$pat = '/<title>(.+)<\/title>/mu';
preg_match_all($pat, $indexString, $matches);
echo '<pre>'. print_r($matches[1][0],true)  . '</pre>';