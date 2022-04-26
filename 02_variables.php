<?php
/*
		PHP DATA TYPES:
			String   - Series of characters surrounded by quotes
			Integer  - Whole numbers
			Float    - Decimal numbers
			Boolean  - true or false
			Array    - Special variable, which can hold more than one value
			Object   - A class
			NULL     - Empty variables
			Resource - Special variable that holds a resource

		VARIABLE RULES:
			-> Variables must be prefixed with $
			-> Variables must start with a letter or the underscore character
			-> Variables can't start with a number
			-> Variables can only contain alpha-numeric characters and underscore (A-z, 0-9, _)
			-> Variables are case-sensitive ($name and $NAME are two different variables)
	*/

$name = 'irfan'; // string
$age = 35; // integer
$is_in_relationship = true; // boolean
$cash_in_hand = 2.20; // float

// echo "My name is {$name}, and I am {$age} years old.";

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
echo "<br />";
echo DB_NAME;