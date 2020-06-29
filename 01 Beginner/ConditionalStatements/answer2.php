<!-- Write a switch case that gives a message, about the temperature: -->

<?php
$temperature=-30;
switch($temperature){
case '-10':
    echo "The weather is not so cool";
break;
case '-20':
    echo "The weather is moderate";
break;
case '-5':
    echo "The weather is breezy";
break;
case '-30':
    echo "The weather is so cool cover yourself";
break;
default:
    echo "You are free from winter";
}
?>
