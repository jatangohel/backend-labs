<!-- Create a session for the above login page and perform the same thing, with only sessions. -->
<?php
session_start();
if(isset($_POST['submit'])){
$username='test1';
$password='test123';
if($_POST['username']==$username && $_POST['password']==$password)
{
$_SESSION['username']=$username;
header('location:dashboard.php');
}
else
{
$error="Incorrect username or Password";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if(isset($error)){ echo $error; } ?>
    <form method="post" name="loginauth" target="_self">
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="password" name="password" placeholder="Enter Your password">
    <br>
    <input type="submit" name="submit" value="submit">
    </body>
</html>
