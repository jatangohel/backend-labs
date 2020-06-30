<!-- Write a PHP Script to update the user details and up on successful update navigate to viewProfile.php -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<form method="post" action="">
   <table border=1 style="border:'border-collapse'">
   <thead>
<td> Student ID </td>
<td> First Name </td>
<td> Last Name </td>
<td> Email</td>
<td> Password </td>
<td>Course</td>
<td>City</td>
<td> Address </td>
<td> Phone </td>
</thead>
<?php
include("session.php");
$user=$_SESSION['email'];
$connect=mysqli_connect("localhost","root","root","MCIT") or die("Error Connecting");
$sql="SELECT student_id,firstname,lastname,email,password,course_name,city,address,phonenumber FROM Student WHERE email='$user';";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result)){
       $student_id=$row['student_id'];
       $fname=$row['firstname'];
       $lname=$row['lastname'];
       $email=$row['email'];
       $password=$row['password'];
       $cname=$row['course_name'];
       $city=$row['city'];
       $address=$row['address'];
       $phone=$row['phonenumber'];
}
?>
<tbody>
<tr>
   <td><input type="number" class="form-control" name="student_id" value="<?=$student_id?>"required autofocus></td>
   <td><input type="text" class="form-control" name="firstname" value="<?=$fname?>" required autofocus></td>
   <td><input type="text" class="form-control" name="lastname" value="<?=$lname?>" required autofocus></td>
   <td><input type="email" class="form-control" name="email" value="<?=$email?>" required autofocus></td>
   <td><input type="password" class="form-control" name="password" value="<?=$password?>" required autofocus></td>
   <td><input type="text" class="form-control" name="coursename" value="<?=$cname?>" required autofocus></td>
   <td><input type="text" class="form-control" name="city" value="<?=$city?>" required autofocus><? $city ?></td>
   <td><input type="text" class="form-control" name="address" value="<?=$address?>" required autofocus></td>
   <td><input type="number" class="form-control" name="phonenumber" value="<?=$phone?>" required autofocus></td>
</tr>
</tbody>
</table>
<div style="text-align: center;">
       <input type="submit" value="update" name="save">
</div>
</form>
</body>
</html>
<?php
if(isset($_POST['save'])){
   $student_id=$_POST['student_id'];
   $fname=$_POST['firstname'];
   $lname=$_POST['lastname'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $cname=$_POST['coursename'];
   $city=$_POST['city'];
   $address=$_POST['address'];
   $phone=$_POST['phonenumber'];
   $update_details="UPDATE Student SET student_id=$student_id,
                                       firstname='$fname',
                                       lastname='$lname',
                                       email='$email',
                                       password='$password',
                                       course_name='$cname',
                                       city='$city',
                                       address='$address',
                                       phonenumber='$phone'
                   WHERE email='$user';";
   $update_details_query=mysqli_query($connect,$update_details);
   if($update_details_query){
       header("Location:viewProfile.php");
   }
   else{
       echo "Error:" .mysqli_error($connect);
   }
}
?>
