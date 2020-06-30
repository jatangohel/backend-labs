<!-- Create a class “Welcome” which should display “Welcoming students to MCIT” inherited the class by “Orientation” and display a message of orientation.
Make use of traits and create two traits of  “Instructors” and “HelpCentre” each has a method ‘message()’. Use traits and display all the messages. -->
<?php
trait Instructors{
    public function message(){
        echo "We are here to help you in academics"."\n";
        echo "<br>";
    }
}
trait HelpCenter{
    public function message(){
        echo "For any queries or enquries register in the helpcenter and create a ticket" ."<br>";
    }
}
class Welcome{

    public function greetStudents(){
        echo "Welcome to Montreal College IT" ."<br>";
    }
}
class Orientation extends Welcome{

    use Instructors, HelpCenter{
        Instructors::message insteadOf HelpCenter;
        HelpCenter::message as Hmessage;

    }

    public function start(){

        echo "It's a great honour to meet all the students in MCIT"."<br>";
    }
}
$orientation=new Orientation();
$orientation->greetStudents();
$orientation->start();
$orientation->message();
$orientation->Hmessage();
?>
