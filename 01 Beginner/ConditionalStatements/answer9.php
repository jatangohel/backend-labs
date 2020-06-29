<!-- Write a PHP script to display even numbers in the given array. -->
<?php
$numbers = [31,90,100,56,30,76,45,23,75,54,67,80,85];
// TODO: Print odd numbers only
$i = 0;
while( $i < count( $numbers ) )
{
    $number = $numbers[ $i ];
    $i+=1;

    if( $number % 2 !== 0 )
        continue;

    echo "$number\n";
}
?>
