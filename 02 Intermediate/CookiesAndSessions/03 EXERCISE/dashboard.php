<?php
   session_start();
if(isset($_SESSION['username'])){
    echo "Welcome";
    echo "<br>";
    echo $_SESSION['username'];
}
else{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Dashboard Page</title>
</head>
<body>
    <h1>Welcome to the home page</h1>
</body>
</html>
