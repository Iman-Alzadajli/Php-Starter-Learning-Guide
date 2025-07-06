<?php
// =====================================
//  Object Oriented Programming by Iman
// =====================================

/* --- Object Oriented Programming (OOP) in PHP --- */

/*
  OOP helps organize code by using:
  - Classes: templates that define properties (data) and methods (functions)
  - Objects: actual instances created from classes

  Key points:
  - Properties: variables inside classes
  - Methods: functions inside classes
  - Constructor: special method that runs automatically when an object is created, to set initial values
  - Access modifiers:
    * public: accessible anywhere
    * private: accessible only inside the class
    * protected: accessible inside the class and subclasses
  - Inheritance: child classes can reuse and extend parent classes
*/

// Define a User class with properties and methods
class User {
  // Properties of the User class
  public $name;
  public $email;
  public $password;

  // Constructor method: runs when a new User object is created
  public function __construct($name, $email, $password) {
    $this->name = $name;         // Assign the passed name to this object's name property
    $this->email = $email;       // Assign the passed email
    $this->password = $password; // Assign the passed password
  }

  // Method to set/change the user's name
  public function set_name($name) {
    $this->name = $name;
  }

  // Method to get/retrieve the user's name
  public function get_name() {
    return $this->name;
  }
}

// Create two User objects (instances)
$user1 = new User('Joe', 'joe@gmail.com', '123456');
$user2 = new User('John', 'john@gmail.com', '654321');



// Define an Employee class that inherits from User
class Employee extends User {
  public $title; // New property for job title

  // Constructor method for Employee class
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password); // Call User constructor to set name, email, password
    $this->title = $title;                         // Set the title specific to Employee
  }

  // Method to get the employee's job title
  public function get_title() {
    return $this->title;
  }
}

// Create an Employee object with all required data
$employee1 = new Employee('Sara', 'sara@gmail.com', '123456', 'Manager');

/
