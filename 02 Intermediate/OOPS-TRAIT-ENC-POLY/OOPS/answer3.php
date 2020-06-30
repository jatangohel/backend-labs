<!-- Create an Employee class which contains a protected ‘name’ field and the child class has the encapsulated field  ‘salary’.
Display the Employee name and Salary. -->
<?php
class Employee
{
    protected $empName;
    public function __construct($name)
    {
        $this->empName = $name;
    }
}
class Salary extends Employee
{
    private $empSalary;
    public function __construct($name, $salary)
    {
        $this->empName   = $name;
        $this->empSalary = $salary;
    }
    public function display()
    {
        echo "The Employee name is " . $this->empName . " and his salary is   " . $this->empSalary;
    }
}
$employee = new Salary("Vishwa", '5000');
$employee->display();
?>
