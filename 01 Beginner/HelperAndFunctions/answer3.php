<!-- Write a PHP script using functions and convert the first character of the string to lowercase and display the entire string. -->
<?php
function lowerCase($str){
    $result=" ";
    $removingFirstCharacter;
$strArray=explode(" ",$str);
for($i=0;$i<count($strArray);$i++){
        $ch = ord($strArray[$i]);
       //$first_char=$strArray[$i][0];
if($strArray[$i][0]>='A' && $strArray[$i][0]<='Z'){
    $removingFirstCharacter=ltrim($strArray[$i],$strArray[$i][0]);
    $result=chr($ch+32);
           echo $result.$removingFirstCharacter ."\n";
       }
       else{
           $result=$strArray[$i];
           echo $result."\n";
       }
    }
}
echo lowerCase("Montreal College Of Information Technology");
?>
