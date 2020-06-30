<!-- Create a Login Form and when the login is successful it
should redirect to the dashboard page with a message ‘ Welcome , user’.
Include ‘view’ in the dashboard page which should redirect to display Student Profile.
‘Logout’ to destroy the session. -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
   <form class ="form" action="login.php"  method="post">
       <div class="form-group">
       <label for="email">Email</label>
       <input type="email" class="form-control" name="email">
       </div>
       <div class="form-group">
       <label for="password">Password</label>
       <input type="password" class="form-control" name="password">
       </div>
       <button type="submit" class="btn btn-primary">Submit</button>
       <p class="link">Don't have an Account??<a href="login.php">Signup Now!</a></p>
   </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
if(isset($_POST['email'])
   &&isset($_POST['password'])){
       $email=$_POST['email'];
       $password=$_POST['password'];
       $connect=mysqli_connect("localhost","root","root","MCIT") or die("Error connecting");
       $sql="SELECT * FROM Student WHERE email='$email' && password='$password';";
       $result=mysqli_query($connect,$sql) or die(mysql_error());
       $rows=mysqli_num_rows($result);
       if($rows==1){
           $_SESSION['email']=$email;
           header("Location:dashboard.php");
       }
       else{
           echo 'Incorrect username/password';
       }
   }
?>
