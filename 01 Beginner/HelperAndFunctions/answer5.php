<!-- Write a PHP script that asks the user for a number and check whether the given number is prime or not. -->
<?php
if(isset($_POST['submit'])){
    $number=$_POST['primeNumber'];
    for ($i = 2; $i <= $number-1; $i++) {
        if ($number % $i == 0) {
        $value= true;
        }
  }
}
if(isset($value) && $value){
    echo "Not a prime number";
}
else{
    echo "Prime Number";
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
<form method="post" action="">
    <label for="primeNumber">Enter a number:
    <input type="number" name="primeNumber"><br>
    <input type="submit" name="submit" value="prime or not">
</body>
</html>
