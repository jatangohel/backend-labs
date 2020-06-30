<?php
$servername="localhost";
$user="root";
$password="root";
$db_name="MCIT";
$connect=mysqli_connect($servername,$user,$password,$db_name);
if(!$connect){
   die("Connection Error:" .mysqli_connect_error());
}
$create_table="CREATE TABLE Instructor
(
   instructor_id int,
   firstname varchar(50),
   lastname varchar(50),
   coursename varchar(50),
   prograname varchar(30),
   phonenumver varchar(11)
);";
$create_table_query=mysqli_query($connect,$create_table);
if($create_table_query){
   echo "Instructor Table is created";
}
else{
   echo "Error in creating table:" .mysqli_error($connect);
}
?>
