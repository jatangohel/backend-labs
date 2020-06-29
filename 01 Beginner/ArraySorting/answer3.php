<!-- Display the marks of the students of the given array in descending order of values, and display it in a HTML table.
$marks=["John"=>"34","Kyle"=>"78","Smith"=>"90","Ram"=>"56"]; -->

<?php
$marks=["John"=>"34","Kyle"=>"78","Smith"=>"90","Ram"=>"56"];
arsort($marks);
//$cols=4;
echo "<table border=\"2\" cellpadding=\"10\">";
foreach($marks as $key=>$row) {
    echo "<tr>";
    echo "<td>$key </td>";
    echo "<td>$row</td>";
    }
    echo "</tr>";
echo "</table>";
?>

