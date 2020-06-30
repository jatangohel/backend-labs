<!-- Create a class Employee with the following fields and create get and set methods and display the Employee
details with the number of working days.
Private $firstName;
Private $lastName;
Public $dateofJoining; -->

<?php
class Employee
{
    private $firstName;
    private $lastName;
    public $dateOfJoining;
    public function __construct($joinedDate)
    {
        $this->dateOfJoining = $joinedDate;
    }
    public function setFirstName($fName)
    {
        $this->firstName = $fName;
        echo "Fist Name:" . $fName;
        echo "<br>";
    }
    public function setLastName($lName)
    {
        $this->lastName = $lName;
        echo "Last Name:" . $lName;
        echo "<br>";
    }
    public function setCurrentDate($cureentDate)
    {
        $this->currentDate = $cureentDate;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function workingDays()
    {
        $numberOfDays = strtotime($this->dateOfJoining) - strtotime($this->currentDate);
        return abs(round($numberOfDays / 86400));
    }
}
$employee = new Employee('1-01-2019');
$employee->setFirstName("John");
$employee->setLastName("Paul");
$employee->setCurrentDate('1-04-2019');
echo "The number of working days is" . $employee->workingDays();
?>
