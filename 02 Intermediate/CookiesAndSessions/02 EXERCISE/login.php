<?php
$user_name="test1";
$user_password="test123";
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username']==$user_name && $_POST['password']==$user_password){
        if(isset($_POST['rememberme'])){
            setcookie('username', $_POST['username'], time()+86400, '/');
            setcookie('password', $_POST['password'], time()+86400, '/');
        }
        else{
            setcookie('username', $_POST['username'], false,'/');
            setcookie('password', $_POST['password'], false, '/');
        }
        header("location:validating.php");
}
    else {
        echo 'Username/Password Invalid';
    }
}
else
    {
        echo 'Fill the details';
    }
?>
