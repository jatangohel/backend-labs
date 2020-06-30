<!-- Write a php script with the concept of encapsulation for the following classes:
Restaurant
Kitchen
Using the above classes, create a program where restaurant and kitchen work together to make a “Recipe of the day”. Identify the properties for both the classes. -->
<?php
class Restaurant{
   public $recipeName="Latin Soap";
   public $price='30$';
   protected $ingredients=[
       "tomatoes",
       "milk",
       "vinegar",
       "onions"
   ];
   public function recipeOftheDay(){
       echo "Create an Encapsulation concept for Kitchen and Restaurant Team to make a Recipe of The Day"."<br>";
   }
}
class Kitchen extends Restaurant{
   public function howtoMakeRecipeoftheDay($process){
       echo "We need ". implode(',',$this->ingredients). "to make the recipe of the day" ."<br>". $process;
}
}
$kitchen=new Kitchen();
$kitchen->recipeOftheDay();
$kitchen->howtoMakeRecipeoftheDay('Boil the tomatos and add all other ingredients, store in the freezer and add milk and heat it before serving to the customer,give nachos with avocados and salad.');
?>
