<!-- Write a PHP script to Print the Following Pattern. -->
<?php
for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= 6 - $i; $j++) {
    echo "*";
    }
    for ($k = 1; $k < $i; $k++) {
        echo "&nbsp;&nbsp&nbsp;";
        }
        for ($j = 1; $j <= 6 - $i; $j++) {
            echo "*";
            }
        echo "<br>";

}
?>