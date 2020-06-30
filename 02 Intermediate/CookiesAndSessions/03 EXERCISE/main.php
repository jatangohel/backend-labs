<?php
session_start();    //session start
if(!isset($_SESSION['username']))     //if session not found redirect to homepage
{
header('location:index.php');
}
else{
echo $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Page</title>
</head>
<body>
</body>
</html>
