<!-- Alter the table of  ‘Student’ in “MYSQL with PHP’ and add columns ‘email’ and ‘Password’ fields. Set the data for both of the columns.
Add the ‘email’ after ‘lastname’ column and ‘password’ after ‘email’ column. -->
<?php
$servername= "localhost";
$user="root";
$password="root";
$database_name="MCIT";
$connect=mysqli_connect($servername,$user,$password,$database_name);
if(!$connect){
   die('Connection error:' .mysqli_connect_error());
}
$results=mysqli_query($connect,
"ALTER TABLE Student ADD password VARCHAR(10) NOT NULL AFTER email"
);
if($results){
   echo "Column added Successfully";
}
else{
   die("Error in creating the column:" .mysqli_error($connect));
 }
