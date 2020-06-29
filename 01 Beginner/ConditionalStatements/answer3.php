<!-- Write a PHP script using else if conditions to calculate your age. -->

<?php
$birthYear = '1995-02-19';
 $dob = explode("-",$birthYear);
 $year = $dob[0];
 $month = $dob[1];
 $date = $dob[2];
 $difference = date("Y") - $year;
//echo $rage;
 if(date("m")<$month)
 {
 echo "Your age is:" . ($difference-=1);
 }
 elseif((date("m")==$month)&&(date("d")<$date))
 {
    echo "Your age is:" . ($difference-=1);
 }
 elseif((date("m")==$month)&&(date("d")==$date)){
     echo "Your age is:" . $difference;
 }
?>
