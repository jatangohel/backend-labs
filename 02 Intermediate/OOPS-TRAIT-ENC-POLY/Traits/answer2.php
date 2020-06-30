<!-- Using the concept of traits, Create two traits “myBirthdayDay” , “NextYear” and place one trait inside of another trait. Display your Birthday day using “myBirthdayDay” trait.
And the next year birthday days using “NextYear”. -->
<?php
trait Day{

    public function myBirthdayDay(){
        $d=strtotime("14th May 2020");
       $day=date('l',$d);
       echo "This year my Birthday is going to be on:" .$day ."<br>";
    }
}
trait NextYear{
    use Day;
    public function nextBirthdayDay(){
        echo "The Next year Birthday Days:"."<br>";
        $startDate=strtotime("14th May 2020");
        $endDate=strtotime("+2 years",$startDate);
        while($startDate<$endDate){
            echo date("Y",$startDate) ."-" . date("l",$startDate)."<br>";
            $startDate=strtotime("+1 year",$startDate);
        }
    }
}
Class Present{
    use NextYear;
}
$present=new Present();
$present->myBirthdayDay();
$present->nextBirthdayDay();
?>
