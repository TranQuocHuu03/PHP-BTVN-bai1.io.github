<?php
class Employee {
    // properties
    public $name;
    public $address;
    public $email;
    public $phone;
    // constructor
    function __construct($name, $address, $email, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
    }
    // method to display employee information
    function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Address: " . $this->address . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Phone: " . $this->phone . "<br>";
    }
}
class Customer extends Employee {
    // constructor
    function __construct($name, $address, $email, $phone) {
        parent::__construct($name, $address, $email, $phone);
    }
}
// create an employee object
$employee = new Employee("Huu", "101B Le Huu Trac", "huu.tran24@Student.passerellesnumeiques.org", "5555555555");
// display employee information
echo "Thông tin của nhân viên:<br>";
$employee->displayInfo();
// create a customer object
$customer = new Customer("Di", "101B Le Huu Trac", "di.ho24@Student.passerellesnumeiques.org", "6666666666");
// display customer information
echo "<br>Thông tin của khách hàng:<br>";
$customer->displayInfo();
?>