<?php
define ("HOST_NAME", "localhost");
define ("HOST_USER", "root");
define ("HOST_PASSWORD", "");
define ("DB_NAME", "register_db");
$connect = mysqli_connect(HOST_NAME, HOST_USER, HOST_PASSWORD);
if (!$connect) {
   die('Server connection error: \n: ' . mysql_error());
}
$createdbifnotexists_query="CREATE DATABASE IF NOT EXISTS register_db;";

$create_db_query = mysqli_query($connect, $createdbifnotexists_query);
if (!$create_db_query) {
   die('Database creation error \n: ' . mysqli_error());
}
mysqli_close($connect);
$connect = mysqli_connect(HOST_NAME, HOST_USER, HOST_PASSWORD, DB_NAME);
$createtable_query = "CREATE TABLE Users (userId int(10) AUTO_INCREMENT PRIMARY KEY, userName varchar(255), userPassword varchar(255), email varchar(255));";
$create_table_query = mysqli_query($connect, $createtable_query);
if (!$createtable_query) {
   die('Table Users creation error\n: ' . mysqli_error());
}
