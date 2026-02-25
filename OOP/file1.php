<?php
file_put_contents('file1.txt', 'Aashish');


$file =fopen('file1.txt', 'a');
fwrite($file, 'Hello world!');
fclose($file);


?>