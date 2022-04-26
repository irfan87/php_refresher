<?php
// simple array
$numbers = [1, 2, 3, 4];
$fruits = array('apple', 'orange', 'pear', 'mango');

print_r($numbers);
echo "<br />";
print_r($fruits);
echo "<br />";
echo $fruits[2];

// associative array
$colors = [
	1 => 'red',
	2 => 'blue',
	3 => 'green',
	4 => 'yellow',
];

echo "<br />";
print_r($colors);
echo "<br />";
// echo $colors[1];

$hex = [
	'red' => '#f00',
	'green' => '#0f0',
	'blue' => '#00f',
];

echo $hex['red'];
echo "<br />";

$person = [
	'first_name' => 'irfan',
	'last_name' => 'shukri',
	'email' => 'irfanshukri203@gmail.com'
];

echo $person['first_name'];
echo "<br />";

// or combined it as a full information
$first_name = $person['first_name'];
$last_name = $person['last_name'];
$email = $person['email'];

$uc_first_name = ucfirst($first_name);
$uc_last_name = ucfirst($last_name);


$user_info = "First Name: {$uc_first_name}<br />Last Name: {$uc_last_name}<br />Email: {$person['email']}";

echo "<br />";
echo "<h2>User Information</h2>";
echo $user_info;
echo "<br />";

// multi-dimensional array
$people = [
	$person,
	[
		'first_name' => 'ivy',
		'last_name' => 'chi ying',
		'email' => 'violet_kim_01@gmail.com'
	], [
		'first_name' => 'john',
		'last_name' => 'doe',
		'email' => 'john@gmail.com'
	], [
		'first_name' => 'jane',
		'last_name' => 'doe',
		'email' => 'jane@gmail.com'
	]
];

echo "<br />";
echo "json encode: <br />";
var_dump(json_encode($people));
echo "<br />";

echo "<br />";
echo "json decode: <br />";
$user = '{"first_name": "aziz", "last_name": "sattar", "email": "aziz@test.com"}';
$user_profile = json_decode($user);
var_dump($user_profile);

$first_name_one = $user_profile->{'first_name'};
$last_name_one = $user_profile->{'last_name'};
$email = $user_profile->{'email'};

$uc_first_name_one = ucfirst($first_name_one);
$uc_last_name_one = ucfirst($last_name_one);

$combined_name_as_fullname = "{$uc_first_name_one} {$uc_last_name_one}";

$user_one_full_info = "Fullname: ${combined_name_as_fullname}<br />Email: {$email}";

echo "<br /><br />";
echo $user_one_full_info;