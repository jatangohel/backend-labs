<!-- Write a php script to extract the “gold” element from the following array.

 $colors=array(
    array(
        "red",
        "yellow"
    ),
    array(
        "green"
        ,array(
            "black"
        )),
    array(
        "grey",
        array("pink"),
        array("gold"))

); -->
<?php
$colors=array(
    array(
        "red",
        "yellow"
    ),
    array(
        "green"
        ,array(
            "black"
        )),
    array(
        "grey",
        array("pink"),
        array("gold"))
);
echo "The element is " . $colors[2][2][0];
?>
