<?php
$sql="UPDATE Student SET password='user123' WHERE student_id=20190657;";
$update_query=mysqli_query($connect,$sql);
if($update_query){
echo "Update Successful";
}
else{
   die('Error:' .mysqli_error($connect));
}
?>
