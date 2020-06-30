<!-- Create a cookie which counts the number of visits of a page. -->
<?php
if(isset($_COOKIE['visitor_count'])){
$visitor_count=$_COOKIE['visitor_count'];
$visitor_count++;
setcookie('visitor_count',$visitor_count, time()+3600);
}else{
    setcookie('visitor_count',1,time()+3600);
}
echo "You have visited this page ".$_COOKIE['visitor_count'].' times';
?>
