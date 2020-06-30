<!-- Create a “Username” and “Confirm Password” for the above form,
and validate the “Password” with the “Confirm Password”. -->
<?php
require_once("includes/header.php");
$email="";
$password="";
$success="";
$confirmPassword="";
$username="";
$errors=array("username"=>"","email"=>"", "password"=>"","confirm_password"=>"");
if(isset($_POST['submit'])){
  $username=htmlspecialchars($_POST['username']);
    if(empty($username)){
            // if there is no data
            $errors["username"]= "Invalid! Please enter a User name!";
    }else{
            // if there is data
            //validation continued
            if(preg_match("/[^a-zA-z\s]/", $username)){
                $errors['username']= "Invalid! Please enter only alpha and spaces";
            }
    }
  $email=htmlspecialchars($_POST['email']);
  if(empty($email)){
      // if there is no data
      $errors['email']= "Invalid! Please enter a email id!";
  }else{
      // if there is data
      //validation continued
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $errors['email']= "Invalid! Please enter a valid email id";
      }
  }
  $password=htmlspecialchars($_POST['password']);
  if(empty($password)){
    $errors["password"]="Please enter a Password";
  }
  else{
    if(strlen($password)<6){
      $errors["password"]="Password must be of min 6 characters";
    }
    else if(!preg_match('/\d/', $password)){
      $errors["password"]="password must contain a digit";
    }
    else if(!preg_match('/[^A-Za-z0-9]/',$password)){
      $errors["password"]="Password must contain a speacial character";
    }
    else{
      $confirmPassword=htmlspecialchars($_POST['confirmpassword']);
      if(empty($confirmPassword)){
        $errors["confirm_password"]="Password can't be empty";
      }
      else if($password!==$confirmPassword){
        $errors["confirm_password"]="Password doesn't match, enter again";
      }
      else{
        $success="Valid";
      }
    }
  }
}
?>
<div>
<form method="post" action="index.php">
<h2 class="form-title" align="center">Create account</h2>
<div class="form-group">
      <label for="validationDefault01">User name</label>
      <input type="text" name="username" class="form-control" id="validationDefault01">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div>
  <?php echo $errors["email"] ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div>
  <?php echo $errors["password"] ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword1">
  </div>
  <div>
  <?php echo $errors["confirm_password"] ?>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
 require_once("includes/footer.php");
?>
