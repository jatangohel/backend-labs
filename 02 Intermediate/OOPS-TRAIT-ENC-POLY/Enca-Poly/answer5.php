<!-- Create a box class which has the properties of color,weight.
Add encapsulated fields of redballs,whiteballs and blackballs. And display the weight,color and different types of balls in each box. -->
<?php
class Box{
   public $weight;
   public $color;
   private $redBalls;
   private $whiteBalls;
   private $blackBalls;
   public function setRedBalls($redballs){
       $this->redBalls=$redballs;
   }
   public function setWhiteBalls($whiteballs){
       $this->whiteBalls=$whiteballs;
   }
   public function setBlackBalls($blackballs){
       $this->blackBalls=$blackballs;
   }
   public function getRedBalls(){
       return $this->redBalls;
   }
   public function getWhiteBalls(){
       return $this->whiteBalls;
   }
   public function getBlackBalls(){
       return $this->blackBalls;
   }
   public function insidetheBox(){
       echo "In the  ". $this->color. "box with a weight of  ". $this->weight.   "  there are, ". $this->redBalls. " red " .$this->whiteBalls. " white ".$this->blackBalls." black balls " ."<br>";
   }
}
class Box1 extends Box{
   public function __construct(){
       parent::setRedBalls('10');
       parent::setWhiteBalls('7');
       parent::setBlackBalls('5');
   }
}
class Box2 extends Box{
   public function __construct(){
       parent::setRedBalls('15');
       parent::setWhiteBalls('3');
       parent::setBlackBalls('10');
   }
   }
$box1=new Box1();
$box1->weight='1kg';
$box1->color="grey";
$box1->insidetheBox();
$box2=new Box2();
$box2->weight='1.5kg';
$box2->color='brown';
$box2->insidetheBox();
?>
