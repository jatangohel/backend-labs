<?php
/* These are our valid username and passwords */
$user_name = "test1";
$user_password = "test123";
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username']==$user_name && $_POST['password']==$user_password) {
        echo "Welcome";
        echo "<br>";
        echo $_COOKIE['username'];
        //print_r($_COOKIE);
    }
    else {
        header('Location: index.html');
    }
}
else{
    header('Location: index.html');
}
?>
