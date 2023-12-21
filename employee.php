<?php
class Employee {
    public $id;
    public $name;
    public $designation;
    public $salary;

    public function __construct($id, $name, $designation, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->designation = $designation;
        $this->salary = $salary;
    }

    public function displayEmployee() {
        echo "Employee id: " . $this->id . "\n";
        echo "Employee name: " . $this->name . "\n";
        echo "Employee designation: " . $this->designation . "\n";
        echo "Employee salary: " . $this->salary . "\n";
    }
}

// Creating object of Employee class
$employee1 = new Employee(1, "John Doe", "Software Engineer", 80000);

// Calling displayEmployee method
$employee1->displayEmployee();
?>