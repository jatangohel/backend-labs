<?php
$servername= "localhost";
$user="root";
$password="root";
$database_name="MCIT";
$connect=mysqli_connect($servername,$user,$password,$database_name);
if(!$connect){
   die('Connection error:' .mysqli_connect_error());
}
$insert_values="INSERT INTO Instructor
(instructor_id,firstname,lastname,coursename,prograname,phonenumver)
VALUES(
   1,
   'Sylvia',
   'Trook',
   'Web Development',
   'PHP',
   5146784321
   );";
$insert_values="INSERT INTO Instructor
(instructor_id,firstname,lastname,coursename,prograname,phonenumver)
VALUES(
   2,
   'Sylvia',
   'Trook',
   'Web Development',
   'PHP',
   5146784321
   );";
$insert_values="INSERT INTO Instructor
(instructor_id,firstname,lastname,coursename,prograname,phonenumver)
VALUES(
   3,
   'Maria',
   'Garcia',
   'Web Development',
   'Javascript',
   5147891236
   );";
$insert_values="INSERT INTO Instructor
(instructor_id,firstname,lastname,coursename,prograname,phonenumver)
VALUES(
   4,
   'David',
   'Smith',
   'Business Intelligence',
   'SQL',
   5149015678
   );";
$insert_values_query=mysqli_query($connect,$insert_values);
if($insert_values_query){
   echo "Values Inserted into table";
}
else{
   echo "Error" .$insert_values ."<br>" .mysqli_error($connect);
}
?>
