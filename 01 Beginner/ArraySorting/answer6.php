<!-- Sort the given array in  ascending order and display the elements of an array with a list.
$fruits=array(
"Apple",
"Mango",
"Pineapple",
"Watermelon",
"Kiwi",
"Banana"
); -->
<?php
$fruits=array(
"Apple",
"Mango",
"Pineapple",
"Watermelon",
"Kiwi",
"Banana"
);
$x=count($fruits);
sort($fruits);
echo "<ul>";
for($i=0;$i<=$x-1;$i++){
    echo "<li>$fruits[$i]</li>";
}
?>
