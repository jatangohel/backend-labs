<!-- Create an Interface with name ‘burger’ commits all the classes that implement it to define an abstract method with the name of ‘HowToMakeBurger()’.
Create classes “UniBurger” and “BurgerKing” where they have their own Ingredients and display them with the interface. -->
<?php
interface burger
{
    public function HowToMakeBurger();
    public function header();
}
class UniBurger implements Burger
{
    private $ingredients = array();

    public function __construct($data)
    {
        $this->ingredients = $data;
    }
    public function HowToMakeBurger()
    {
        return $this->ingredients;
    }
    public function header()
    {
        echo "Uniburger Ingredients:" . "\n";
    }
}
class BurgerKing implements Burger
{
    private $ingredients = array();

    public function __construct($values)
    {
        $this->ingredients = $values;
    }
    public function HowToMakeBurger()
    {
        return $this->ingredients;

    }
    public function header()
    {
        echo "BurgerKing Ingredients:" . "\n";
    }
}
$data      = array(
    "Bread",
    "Tomato",
    "Lettuce",
    "Pickels",
    "Hotpepper",
    "UniSauce",
    "Meat"
);
$uniburger = new UniBurger($data);
$uniburger->header();

foreach ($uniburger->HowToMakeBurger() as $value) {
    echo $value . "\n";

}

$values     = array(
    "Bread",
    "Tomato",
    "Ketchup",
    "Meat"
);
$burgerking = new BurgerKing($values);
$burgerking->header();

foreach ($burgerking->HowToMakeBurger() as $val) {
    echo $val . "\n";

}
?>
