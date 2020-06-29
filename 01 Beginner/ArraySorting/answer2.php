<!-- Write a php script to convert the given string into an array and style each element with respective colors elements.

$colleges="Montreal,CEGEP,Matrix,Lasalle";
$colors=array("blue","green","pink","yellow"); -->

<?php
$colleges="Montreal,CEGEP,Matrix,Lasalle";
//echo $colleges[0];
$colleges_str=explode(',', $colleges);
$color=array("blue","green","pink","yellow");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<p style="color:<?php echo $color[0] ?>"> <?php echo $colleges_str[0]?></p>
<p style="color:<?php echo $color[1] ?>"> <?php echo $colleges_str[1]?></p>
<p style="color:<?php echo $color[2] ?>"> <?php echo $colleges_str[2]?></p>
<p style="color:<?php echo $color[3] ?>"> <?php echo $colleges_str[3]?></p>
</head>
<body>
</body>
</html>