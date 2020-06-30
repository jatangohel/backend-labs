<!-- write a php program with a method overriding which overrides the user current address to new address. -->
<?php
class CurrentAddress{
   public function userAddress(){
       echo "The Current Address of the User" ."<br>";
   }
   public function address($location){
       echo $location."<br>";
       echo "<br>";
   }
}
class NewAddress extends CurrentAddress{

   public function userAddress(){
       echo "The New Address of the User" ."<br>";
   }
   public function address($location){
       echo $location."<br>";
   }
}
$currentAddress=new CurrentAddress();
$currentAddress->userAddress();
$currentAddress->address('1234 Clock Tower,WT4YR6,New York,USA');
$newAddress=new NewAddress();
$newAddress->userAddress();
$newAddress->address('7812 St.Henri,E34Y67,Florida,USA');
?>
