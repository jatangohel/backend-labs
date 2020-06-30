<!-- Write a PHP program of creating a contact number with Method Overloading.
Create a contact number for a person with Single Phone Number
And create  a Contact number for a person with two Phone numbers. -->

<!-- Note:PHP doesn't support method overloading, you migh see warnings in your output-->
<?php
class Contact{
   public function createContact(){
       echo "Create contact numbers";
   }
}
class ContactWithOneNumber extends Contact{

   public function createContact($name,$firstnum,$secondnum){

       echo "  Name:   " .$name . "<br>". "  FirstNumber  " .$firstnum . "<br>". " SecondNumber ".$secondnum. "<br>";
   }
}
class ContactWithTwoNumbers extends Contact{

   public function createContact($name,$number){

       echo "Name:" .$name. "<br>"." Number:".$number;

   }
}
$cotactwithOneNumber=new ContactWithOneNumber();
$cotactwithOneNumber->createContact('Paul','5463473483','473874934');
$contactwithTwoNumbers=new ContactWithTwoNumbers();
$contactwithTwoNumbers->createContact('Swan','84759454508');
?>
