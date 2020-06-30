<!-- Create a countdown timer in Php using mktime. And display it in days. -->
<?php
// create a time in the future using mktime()
$sale_end=mktime(0,0,0,2,3,2020);
// get the current time
date_default_timezone_set("America/Toronto");
$current_time=time();
// find the difference between the future and current time
$time_left=$sale_end-$current_time;
//divide the difference by the number of seconds in min/hour/day/month
$left_time_in_days=$time_left/86400;
//display the time - cast it to integer
echo "The sale ends in ".(int)$left_time_in_days. ' days';
?>
