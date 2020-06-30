<!-- Write a PHP program to append two files in another file. -->
<?php
$file1=fopen("file1.txt","a+");
$file2=file_get_contents("passage.txt");
fwrite($file1,$file2);
?>
