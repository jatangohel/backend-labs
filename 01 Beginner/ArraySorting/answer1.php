<!-- Write a PHP script to sort the marks of the students from Highest to the least. -->

<?php
$total_marks_students="67,89,45,90,76,68,32,59";
$total_array=explode(',',$total_marks_students);
rsort($total_array);
for ($i=0; $i< 5; $i++){
    echo '<span style="color:blue">'. $total_array[$i]."  "  . '</span>';
}
?>