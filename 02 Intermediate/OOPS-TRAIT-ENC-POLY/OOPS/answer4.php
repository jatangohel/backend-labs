<!-- Create an abstract class “Student” which has an abstract method “studentDetails()” and encapsulate field ‘firstname’ and ‘lastname’.Inherit the details in the child class “Schools”
which has encapsulated ‘course name’,’hours’,’fees’. Display all the details of the Student. -->
<?php
abstract class Student
{
    private $firstName;
    private $lastName;

    abstract public function studentDetails();

    public function setFirstName($fname)
    {
        $this->firstName = $fname;

    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setLastName($lname)
    {
        $this->lastName = $lname;
    }
    public function getLastName()
    {
        return $this->lastName;
    }

}
class Schools extends Student
{
    private $courseName;
    private $hours;
    private $fees;

    public function __construct($fname, $lname)
    {
        $this->firstName = $fname;
        $this->lastName  = $lname;
    }
    public function studentDetails()
    {

        echo "Name:" . $this->firstName . " " . $this->lastName;
        echo "<br>";
        echo "Course:" . $this->courseName . "<br>";
        echo "Number of Hours:" . $this->hours . "<br>";
        echo "Total Tuition Fees:" . $this->fees . "<br>";
        echo "<br>";


    }
    public function setCourseName($cName)
    {
        $this->courseName = $cName;
    }
    public function setHours($hours)
    {
        $this->hours = $hours;
    }
    public function setFees($fees)
    {
        $this->fees = $fees;
    }
    public function getCourseName()
    {
        return $this->courseName;
    }
    public function getHours()
    {
        return $this->hours;
    }
    public function getFees()
    {
        return $this->fees;
    }

}
$student = new Schools("Nancy", "Pelosi");
$student->setCourseName("Java");
$student->setHours("300");
$student->setFees("12000$");
$student->studentDetails();

$student = new Schools("Manav", "Gupta");
$student->setCourseName("Web Development");
$student->setHours("500");
$student->setFees("12000$");
$student->studentDetails();
?>
