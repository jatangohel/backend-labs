<!-- Write a Php script to extract a particular string from the given string. -->
<?php
if (preg_match('/[^\w]Technology/', 'Montreal College of Information Technology')){
    echo "Found the Match";
}
else{
    "Not Found the match";
}
?>
