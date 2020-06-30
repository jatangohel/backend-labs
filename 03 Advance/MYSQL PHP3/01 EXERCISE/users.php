<?php
include_once("includes/header.php");
include_once("includes/database.php");
if(isset($_POST['add'])){
    $user=htmlspecialchars($_POST['uname']);
    $insert="INSERT INTO users(name) VALUES('$uname)";
    $insert_query=mysqli_query($connect,$insert);
    if($insert_query){
        echo "User Added";
    }
    else{
        echo "Error " . $insert_query ."<br>" . mysqli_error();
    }
}
?>
<div class="container">
<form method="post" action="users.php">
<div class="form-group">
    <label for="uname">User Name</label>
    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name">
    </div>
  <button type="submit" name="add" class="btn btn-primary">Add User</button>
  </form>
  </div>
  <?
  include_once("includes/header.php");
  ?>
