<?php
/*
	Object Oriented Programming (OOP)

	From PHP5 onwards, we can write PHP code in either a procedural or object oriented way.
	OOP consists of classes that can hold "properties" and "methods", Objects can be created 
	from classes.
*/

class User
{
	// properties are attributes that belongs to this class

	/*
		Access Modifier: public, protected, private
		1.) public 		-> can be accessed from anywhere
		2.) protected -> can only be accessed from inside the class and by inheriting classes
		3.) private 	-> can only be accesed from inside the class
	*/

	public $name;
	public $email;
	public $password;

	// a constructor is a function / methods that run when an object is created
	public function __construct($name, $email, $password)
	{
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
	}

	// method is a function that belongs to the class
	// function set_name($name)
	// {
	// 	$this->name = $name;
	// }

	// function get_name()
	// {
	// 	return $this->name;
	// }
}

// instantiate a user object
$user = new User("john", "john@test.com", "1234");
$user1 = new User("jane", "jane@test.com", "1234");

echo "Username: {$user->name}<br />Email: {$user->email}<br />Password: {$user->password}<br />";

echo "<br />";

echo "Username: {$user1->name}<br />Email: {$user1->email}<br />Password: {$user->password}<br />";

// inheritance
class Employee extends User
{
	public function __construct($name, $email, $password, $title)
	{
		// inherite from the parent class
		parent::__construct($name, $email, $password);

		$this->title = $title;
	}

	public function get_title()
	{
		return $this->title;
	}
}

$newEemployee = new Employee('Sara', 'sara@test.com', '1234', 'Manager');

$employee_name = $newEemployee->name;
$employee_email = $newEemployee->email;
$employee_password = $newEemployee->password;
$employee_title = $newEemployee->get_title();

$new_employee_information = "<h2>New Employee Information</h2>Name: {$employee_name}<br />Title: {$employee_title}<br />Email: {$employee_email}<br />Password: {$employee_password}<br /><br />";

echo $new_employee_information;