<!-- Create a form for the Students table with all the columns as form fields.The form should also contain a link to login page. -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Students Registration</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>
<body>
<h4> Student Registration</h4>
<div class="container">
<form action="index.php" method="post">
 <div class="form-group">
   <label for="studentid">Student ID</label>
   <input type="number" class="form-control" name="student_id">
 </div>
 <div class="form-group">
   <label for="firstname">First Name</label>
   <input type="text" class="form-control" name="fname">
 </div>
 <div class="form-group">
   <label for="lastname">Last Name</label>
   <input type="text" class="form-control" name="lname">
 </div>
 <div class="form-group">
   <label for="email">Email</label>
   <input type="email" class="form-control" name="email">
 </div>
 <div class="form-group">
   <label for="password">Password</label>
   <input type="password" class="form-control" name="password">
 </div>
 <div class="form-group">
   <label for="course">Course</label>
   <input type="text" class="form-control" name="course">
 </div>
 <div class="form-group">
   <label for="city">City</label>
   <input type="text" class="form-control" name="city">
 </div>
 <div class="form-group">
   <label for="address">Address</label>
   <input type="text" class="form-control" name="address">
 </div>
 <div class="form-group">
   <label for="phonenumber">Phone Number</label>
   <input type="number" class="form-control" name="phonenumber">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 <p class="link">Already have an account??<a href="login.php">Login here</a></p>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(
   isset($_POST['student_id'])
                 &&isset($_POST['fname'])
                 &&isset($_POST['lname'])
                 &&isset($_POST['email'])
                 &&isset($_POST['password'])
                 &&isset($_POST['course'])
                 &&isset($_POST['city'])
                 &&isset($_POST['address'])
                 &&isset($_POST['phonenumber'])
                 ){
                   $id=$_POST['student_id'];
                   $firstname=$_POST['fname'];
                   $lastname=$_POST['lname'];
                   $email=$_POST['email'];
                   $password=$_POST['password'];
                   $course=$_POST['course'];
                   $city=$_POST['city'];
                   $address=$_POST['address'];
                   $phonenumber=$_POST['phonenumber'];
                   $connect=mysqli_connect("localhost","root","root","MCIT") or die('Error connecting');
                   $insert_values="INSERT INTO Student
                   (student_id,firstname,lastname,email,password,course_name,city,address,phonenumber)
                   VALUES($id,'$firstname','$lastname','$email','$password','$course','$city','$address','$phonenumber');";
                   $insert_query=mysqli_query($connect,$insert_values);
                   if($insert_query){
                     echo "Registration Successfull";
                   }
                   else{
                     echo "Please enter all the fields";
                   }
}
