<?php
$values=array(1,2,3,4,5,6,7,8,9,10);

echo "<br>";
for($no=0;$no<sizeof($values);$no++){
    if($no==sizeof($values)-1){
        echo "$values[$no]";    }
        else{     echo "$values[$no]-";
         }
        }
?>