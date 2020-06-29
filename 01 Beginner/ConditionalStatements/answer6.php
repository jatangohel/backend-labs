<!-- Write a PHP script to display the layout of the chessboard. -->
<?php
echo "<table width=\"300px\" cellpadding=\"20px\">";
for($row=1;$row<=10;$row++){
    echo "<tr>";
    for($column=1;$column<=10;$column++){
        $rowColumn=$row+$column;
        if($rowColumn%2==0)
        {
            echo "<td height=10px width=10px bgcolor=#ffffff></td>";
        }
        else
        {
            echo "<td height=10px width=10px bgcolor=#000000></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>

