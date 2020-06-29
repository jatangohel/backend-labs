<!-- Write a PHP script using functions and extract the first character of the string and display in Uppercase. -->
<?php
function upperCase($str){

    $result=" ";
    $removingFirstCharacter;

$strArray=explode(" ",$str);

for($i=0;$i<count($strArray);$i++){
        $ch = ord($strArray[$i]);
       //$first_char=$strArray[$i][0];
if($strArray[$i][0]>='a' && $strArray[$i][0]<='z'){

   $result=chr($ch-32);

           echo $result."\n";

       }
       else{
           $result=$strArray[$i];
           echo $result."\n";
       }

    }
}
echo upperCase("united states of america");

?>
