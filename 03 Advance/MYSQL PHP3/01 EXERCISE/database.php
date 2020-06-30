<!-- Create a database and create a user table and include 'name' column. -->
<?php
$servername="localhost";
$username="root";
$password="";
$dbName="users_db"
$connect = mysqli_connect($servername, $username, $password);
if (!$connect) {
   die('Server connection error: \n: ' . mysql_error());
}
$createDatabase="CREATE DATABASE IF NOT EXISTS users_db";
$db_query=mysqli_query($connect,$createDatabase)
if(!$db_query){
    die("Database creation Error " . mysqli_error());
}
mysqli_close($connect);
$connect=mysqli_connect($servername,$username,$password,$dbName);
$create_table="CREATE TABLE users(name varchar(255));"
$create_table_query=mysqli_query($connect,$create_table);
if(!$create_table_query){
    die("Table creation error " .mysqli_error());
}
?>
