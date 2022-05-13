<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASSWORD', 'admin123');
define('DB_NAME', 'feedback_db');

// create the db connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// check if the db connected or refuse
if ($conn->connect_error) {
	die('Connection failed' . $conn->connect_error);
}