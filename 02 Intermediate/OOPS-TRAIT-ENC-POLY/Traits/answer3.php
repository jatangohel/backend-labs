<!-- Create the following traits: -->
<!-- “Animals” with a method log($msg) -->
<!-- “Help” with a method careForAnimals($msg); -->
<!-- Use the traits inside the class “Human”. -->
<?php
trait Animals{
 function log($msg) {
 echo $msg;
 }
}
trait Help{
 function careForAnimals($msg) {
   echo $msg;
 }
}
 class Human{
  use Animals, Help;
   public function __construct()
   {
       $this->log("We are Living Organisms like humans");
       $this->careForAnimals("Animals Can't communicate, but they want to Survive");
   }
}
$animals=new Human();
?>
