<!-- Write a PHP script using functions to reverse the string without using built-in functions. -->
<?php
function reverseString($str){
    $lengthOfTheString=strlen($str);
    $result=" ";
    for($i=$lengthOfTheString;$i>=0;$i--){
        $result=$str[$i];
        echo $result;
    }
   /* $i=0;
    while($str[$i]!=" "){
        $i++;
    }
return $i;*/
}
echo reverseString("hello");
?>
