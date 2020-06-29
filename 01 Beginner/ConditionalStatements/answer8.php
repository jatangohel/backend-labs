<!-- Write a PHP script to display the following pattern. -->
<?php
for($row=7;$row>=1;$row--){
   for($column=7;$column>$row;$column--){
       echo "&nbsp;&nbsp;";
    }
    for($star=1;$star<=$row;$star++){
        echo "*";
    }
 echo "<br>";
}
?>
