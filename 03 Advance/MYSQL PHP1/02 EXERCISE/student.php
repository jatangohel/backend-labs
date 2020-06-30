<!-- Create Tables ‘Student’ and ‘Instructor’.
Student with following columns:
            Student_id,
            Firstname,
            Lastname,
            Course_name,
            City,
            Address,
            Phone number;
Instructor with following columns:
		Instructor_id,
		Firstname,
		Lastname,
		Coursename,
		Programname,
        phonenumber; -->
        <?php
$servername="localhost";
$user="root";
$password="root";
$database_name="MCIT";
$connect=mysqli_connect($servername,$user,$password,$database_name);
if(!$connect){
 die("Connection Error:" .mysqli_connect_error());
}
$create_table="CREATE TABLE Student
(
 student_id int,
 firstname varchar(50),
 lastname varchar(50),
 course_name varchar(30),
 city varchar(20),
 address varchar(255),
 phonenumber varchar(10)
 );";
$create_table_query=mysqli_query($connect,$create_table);
if($create_table_query){
 echo "Student table is created";
}
else{
 die("Error in creating the table:" .mysqli_error($connect));
}
?>
