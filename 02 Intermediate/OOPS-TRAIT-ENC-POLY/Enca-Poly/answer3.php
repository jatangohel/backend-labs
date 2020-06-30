<!-- How method overloading can be achieved in PHP? Try to implement overloading for the second question. -->
<?php
class Contact{

   function __call($function_name,$arg){
       if($function_name=='createContact'){
           switch(count($arg)){
               case 1:
                   return " Name: " .$arg[0];
               case 2:
                   return "Name:" .$arg[0]." ".$arg[1];
               case 3:
                   return "Name:" .$arg[0]."    ".$arg[1]."  " .$arg[2];
           }
       }
   }
}
$contact=new Contact;
echo ($contact->createContact('Paul','5463473483','473874934'));
?>