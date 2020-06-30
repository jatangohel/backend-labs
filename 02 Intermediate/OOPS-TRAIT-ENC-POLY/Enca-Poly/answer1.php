<!-- Write a PHP Program with the following classes:
	Person:
		Firstname
		Lastname
		Age
		Address
		Designation
	Employee:
		Inherit the Person class and include an ID for the Employee and and their manager ID’s
	Manager:
		Inherit the Person class and include an employee id for the manager.
Create 2 Employee objects with Manager ID’s and two Manager Objects. -->
<?php
class Person{
   public $firstname;
   public $lastname;
   public $age;
   public $address;
   public $designation;
   public function __construct($fname,$lname,$age,$address,$designation){
       $this->firstname=$fname;
       $this->lastname=$lname;
       $this->age=$age;
       $this->address=$address;
       $this->designation=$designation;
}
}
class Employee extends Person{
   public $empid;
   public $mgrid;
   public function __construct($fname,$lname,$age,$address,$designation,$empid){
       parent::__construct($fname,$lname,$age,$address,$designation);
       $this->empid=$empid;
   }
   public function employeeDetails($mgr){
       $this->mgrid=$mgr;
       echo "Employee ID: " . $this->empid;
       echo "<br>";
       echo "Name:" . $this->firstname . " " .$this->lastname . "<br>";
       echo "Address: " .$this->address ."<br>";
       echo "Manager ID:" . $this->mgrid ."<br>";
       echo "Designation: " .$this->designation ."<br>";
       echo "<br>";
}
}
class Manager extends Person{
   public $empid;
   public function __construct($fname,$lname,$age,$address,$designation,$empid){
       parent::__construct($fname,$lname,$age,$address,$designation);
       $this->empid=$empid;
   }
   public function employeeDetails(){
       echo "Employee ID: " . $this->empid;
       echo "<br>";
       echo "Name:" . $this->firstname . " " .$this->lastname . "<br>";
       echo "Address: " .$this->address ."<br>";
       echo "Designation: " .$this->designation ."<br>";
       echo "<br>";
      }
}
$personAsEmployee1=new Employee("Rose","Mary","25","2150 Rue henri Monreal QC","1","SQL Developer");
$personAsEmployee1->employeeDetails("5");
$personAsEmployee2=new Employee("John","Smith","20","3180 St Paul Laval,QC","2","Analyst");
$personAsEmployee2->employeeDetails("4");
$personAsManager1=new Manager("Shravan","Kumar","30","2125 north east Montreal QC","1","Head of Frontend Team");
$personAsManager1->employeeDetails();
$personAsManager2=new Manager("Ophiele","Mars","24","10750 M.Wilson Montreal QC","2","Head of Data Team");
$personAsManager2->employeeDetails();
?>
