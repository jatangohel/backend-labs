<!-- Select the ‘Student’ table and display all the records in a table form. -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Details</title>
</head>
<body>
<div class="col-sm-10">
<table border='1' style=”’border:border-collapse’”;>
<thead>
<tr>
<td> Student ID </td>
<td> First Name </td>
<td> Last Name </td>
<td>Course</td>
<td>City</td>
<td> Address </td>
<td> Phone </td>
</tr>
</thead>
<?php
$servername="localhost";
$user="root";
$password="root";
$database_name="MCIT";
$connect=mysqli_connect($servername,$user,$password,$database_name);
if(!$connect){
   die("Connection error" .mysqli_connect_error());
}
$select_records="SELECT
   student_id,
   firstname,
   lastname,
   course_name,
   city,
   address,
   phonenumber
FROM
   Student";
$select_records_query=mysqli_query($connect,$select_records);
   while($row=mysqli_fetch_assoc($select_records_query)){
       $student_id=$row['student_id'];
       $fname=$row['firstname'];
       $lname=$row['lastname'];
       $cname=$row['course_name'];
       $city=$row['city'];
       $address=$row['address'];
       $phone=$row['phonenumber'];
       echo "
       <tbody>
       <tr>
           <td>$student_id</td>
           <td>$fname</td>
           <td>$lname</td>
           <td>$cname</td>
           <td>$city</td>
           <td>$address</td>
           <td>$phone</td>
       </tr>
       </tbody>";
   }
mysqli_close($connect);
?>
</table>
</div>
</body>
</html>
