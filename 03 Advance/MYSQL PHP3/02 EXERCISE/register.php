<?php
include_once("includes/header.php");
include_once("includes/database.php");
include_once(“includes.mail.php”);
if(isset($_POST['register'])){
    $email=htmlspecialchars($_POST['email']);
    $select_email_query = "SELECT email FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $select_email_query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   if(mysqli_num_rows($result)==1){
        if(htmlspecialchars($row['email'])==$email){
       echo "Sorry...This email already exist..";
   }
}else{
    $username=htmlspecialchars($_POST['uname']);
    $password=htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT));
       echo "can be registered";
       $insert_query="INSERT INTO users(email, userName, userPassword) VALUES ('$email','$username','$password');";
       $query = mysqli_query($connect,$insert_query );
      // echo $username." ".$password." ".$email;
       if($query){
       echo "User Registered.";
   }else{
       echo "error";
   }
   }
}
?>
<div class="container">
<form method="post" action="register.php">
<div class="form-group">
    <label for="uname">User Name</label>
    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="register" class="btn btn-primary">Register</button>
</form>
</div>
<?php
include_once("includes/footer.php");
