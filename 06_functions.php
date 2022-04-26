<?php
$y = 15;

function tryScope()
{
	// global allowed us to fetch outside variable into our functions
	global $y;

	echo $y;
}

function registerUser()
{
	echo "User registered";
}

function registerUserWithEmail($email)
{
	echo "{$email} registered";
}

function sumNumber($num1, $num2)
{
	return $num1 + $num2;
}

function sumNumber_1($num1 = 0, $num2 = 0)
{
	return $num1 + $num2;
}

tryScope();

echo "<br />";

registerUser();

echo "<br />";

registerUserWithEmail('irfanshukri203@gmail.com');

echo "<br />";

$result = sumNumber(1, 2);

echo "Sum Result of 1 + 2: {$result}";

echo "<br />";

$result = sumNumber_1(2, 3);

if ($result !== 0) {
	echo "Sum Result: {$result} <br />";
} else {
	echo "no values <br />";
}

echo "<br />";

$substract = function ($n1 = 0, $n2 = 0) {
	return $n1 - $n2;
};

$sub_result = $substract(15, 2);

if ($sub_result !== 0) {
	echo "Substract Result: {$result} <br />";
} else {
	echo "no values <br />";
}

echo "<br />";

$multiply = fn ($n1, $n2) => $n1 * $n2;

$multiplyResult = $multiply(2, 1);

echo "Multiply Result: {$multiplyResult}";