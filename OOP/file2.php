<?php
$content= file_get_contents('file1.txt');
echo $content;
echo "<br>";

$lines = file('file1.txt');
echo $lines[0], $lines[1];
echo "<br>";

$file=fopen('file1.txt', 'r');
$content=fread($file, filesize('file1.txt'));
fclose($file);
echo $content;
?>