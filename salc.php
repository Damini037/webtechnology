<!---exp5.2--->
<?php
class Employee {
    private $firstName;
    private $lastName;
    private $monthlySalary;

    public function __construct($firstName, $lastName, $monthlySalary) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->setMonthlySalary($monthlySalary);
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setMonthlySalary($monthlySalary) {
        $this->monthlySalary = ($monthlySalary > 0) ? $monthlySalary : 0.0;
    }

    public function getMonthlySalary() {
        return $this->monthlySalary;
    }

    public function getYearlySalary() {
        return $this->monthlySalary * 12;
    }

    public function giveRaise() {
        $this->monthlySalary *= 1.1;
    }
}

// Initialize variables


// Test application with user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $monthlySalary = $_POST["monthlySalary"];

    // Create Employee object
    $employee1 = new Employee($firstName, $lastName, $monthlySalary);
}

// Display each employee's yearly salary
if ($employee1) {
    echo "Yearly Salary for {$employee1->getFirstName()} {$employee1->getLastName()}: $" . $employee1->getYearlySalary() . "<br>";

    // Give each employee a 10% raise
    $employee1->giveRaise();

    // Display each employee's yearly salary again
    echo "<br>After 10% Raise:<br>";
    echo "Yearly Salary for {$employee1->getFirstName()} {$employee1->getLastName()}: $" . $employee1->getYearlySalary() . "<br>";
}
?>

