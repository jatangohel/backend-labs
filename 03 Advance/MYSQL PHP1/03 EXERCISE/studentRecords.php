<!-- Insert Multiple values into Student and Instructor tables. -->

<?php
$servername= "localhost";
$user="root";
$password="root";
$database_name="MCIT";
$connect=mysqli_connect($servername,$user,$password,$database_name);
if(!$connect){
   die('Connection error:' .mysqli_connect_error());
}
$insert_values="INSERT INTO Student
(student_id,firstname,lastname,course_name,city,address,phonenumber)
VALUES(
   20190236,
   'Justin',
   'Tradeau',
   'Web Development',
   'Montreal',
   '2125 Rue st henri Montreal',
   514456789
   );";
$insert_values="INSERT INTO Student
(student_id,firstname,lastname,course_name,city,address,phonenumber)
VALUES(
   20190237,
   'Don',
   'Funk',
   'Business Intelligence',
   'Laval',
   '2371 St catherine Laval',
   514782567
   );";
$insert_values.="INSERT INTO Student
(student_id,firstname,lastname,course_name,city,address,phonenumber)
VALUES(
   20190238,
   'John',
   'Paul',
   'Digital Marketing',
   'Montreal',
   '1075 Rue sherbroke Montreal',
   514678123
   );";
$insert_values.="INSERT INTO Student
(student_id,firstname,lastname,course_name,city,address,phonenumber)
VALUES(
   20190239,
   'Sara',
   'Davis',
   'Big Data',
   'Ontario',
   '2120 Rue st marc Ontario',
   514780123
   );";
$insert_values_query=mysqli_multi_query($connect,$insert_values);
if($insert_values_query){
   echo "Values Inserted into table";
}
else{
   echo "Error" .$insert_values ."<br>" .mysqli_error($connect);
}
?>
