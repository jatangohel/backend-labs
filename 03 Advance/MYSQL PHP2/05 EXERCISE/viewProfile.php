<!-- Write a PHP script to display the Student Profile.
Also include a link to ‘updateProfile’ to update the user details. -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Profile</title>
</head>
<body>
<a href="dashboard.php">Back to Dashboard</a>
<br>
<br>
<br>
<table border=1 style="border:'border-collapse'">
<thead>
<tr>
<td> Student ID </td>
<td> First Name </td>
<td> Last Name </td>
<td> Email
<td>Course</td>
<td>City</td>
<td> Address </td>
<td> Phone </td>
</tr>
</thead>
<?php
include("session.php");
$user=$_SESSION['email'];
$connect=mysqli_connect("localhost","root","root","MCIT") or die("Error Connecting");
$sql="SELECT student_id,firstname,lastname,email,course_name,city,address,phonenumber FROM Student WHERE email='$user';";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result))
{
       $student_id=$row['student_id'];
       $fname=$row['firstname'];
       $lname=$row['lastname'];
       $email=$row['email'];
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
           <td>$email</td>
           <td>$cname</td>
           <td>$city</td>
           <td>$address</td>
           <td>$phone</td>
       </tr>
       </tbody>";
}
?>
</table>
<a href="updateProfile.php">Update Profile</p>
</body>
</html>
