<!-- Write a InstructorDetails Class following the structure -->
<!-- InstructorDetails:
private $instructorName;
private $totalHours;
private $programName;
private $courseName;
display() -->
<!-- Encapsulate all its attributes
The display method should print information. -->
<!-- Write a subclass and name it Web, this class must be a subclass of the Course class -->
<!-- Web -->
<!-- Write a constructor for the WebCourse class, with no parameters, call the super() method and set the value of the inherited instructor name to ”Ratan” and coursename to “PHP” -->
<!-- Write a subclass and name it BI, this class must also be a subclass of the Course class -->
<!-- BI -->
<!-- Write a constructor for the BICourse class, with no parameters, call the super() method and  set the value of the inherited instructor name to ”Falvenio” and coursename to “JS” -->
<!-- Create 2 different objects, based on the classes Web and BI and set all its attributes except for the instructor name and course name. -->
<?php
class InstructorDetails{
    private $instructorName;
    private $totalHours;
    private $programName;
    private $courseName;

    public function setName($name){
        $this->instructorName=$name;

    }
    public function setHours($hours){
        $this->totalHours=$hours;
    }
    public function setProgram($program){
        $this->programName=$program;
    }
    public function setCourseName($course){
        $this->courseName=$course;
    }
    public function getName(){
        return $this->instructorName;
    }
    public function getHours(){
       return $this->hours;
    }
    public function getProgram(){
        return$this->programName;
    }
    public function getCourseName(){
       return  $this->courseName;
    }
    public function display(){
        echo "The instructor  ".$this->instructorName ."  working for  " .$this->totalHours ."  in  " .$this->programName . "  Program   " . "   teaching  " .$this->courseName;
        echo "<br>";

    }

}
class Web extends InstructorDetails{

    public function __construct(){
        parent::setName('Ratan');
        parent::setCourseName('PHP');
        }
}
class BI extends InstructorDetails{

    public function __construct(){
        parent::setName('Falvenio');
        parent::setCourseName('JS');
        }

}
$instructor= new Web();
$instructor->setHours(10);
$instructor->setProgram("Web Development");
$instructor->display();
$instructor1= new BI();
$instructor1->setHours(10);
$instructor1->setProgram("Web and Digital Marketing");
$instructor1->display();
?>
