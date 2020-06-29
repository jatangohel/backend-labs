<!-- Write a php script to count the length of the string without using any built-in functions. -->
<?php
function strlength($str){
$i=0;
while(isset($str[$i])){
    $i++;
}
echo "The length of the string is:" . $i ."<br>";
}
strlength("Good Morning");
strlength("All good things happens to me");
?>
