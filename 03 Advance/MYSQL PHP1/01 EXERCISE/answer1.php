<!-- Create a connection to your XAMPP SQL using PHP Script and create a database with the name ‘MCIT’. -->
<?php
define ("HOST_NAME", "localhost");
define("HOST_USER","root");
define("HOST_PASSWORD","root");
define("DB_NAME","MCIT");
$connect=mysqli_connect(HOST_NAME,HOST_USER,HOST_PASSWORD);
if(!$connect){
   die('Connection error:' .mysql_error());
}
$createdatabse='CREATE DATABASE IF NOT EXISTS MCIT';
$connect_db=mysqli_query($connect,$createdatabse);
if(!$connect_db){
   die('Database Creation Error' .mysqli_error());
}
mysqli_close($connect);
?>
