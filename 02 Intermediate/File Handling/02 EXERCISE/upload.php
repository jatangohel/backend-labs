<?php
$file=$_FILES['file'];
$dir="uploads/". basename($_FILES['file']['name']);
$file_extension=strtolower(pathinfo($dir,PATHINFO_EXTENSION));
//check if file extension is allowed by us
$uploadOk = 1;
if(isset($_POST['upload'])){
 if($file_extension === "docx" || $file_extension === "pdf"){
    move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);
    echo "You Resume was Submitted";
    $uploadOk = 1;
 }
 else{
    echo "File type not supported";
    $uploadOk = 0;
}
}
