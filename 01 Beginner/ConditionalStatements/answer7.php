<!-- Write a PHP Script to display the following pattern. -->
<?php
for($i=1;$i<=4;$i++){
    for($j=1;$j<=4;$j++){
        if($i==1||$j==1||$i==4||$j==4){
            echo "*";
        }
        else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>
