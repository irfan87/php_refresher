<?php
$myString = 'ahmad irfan mohammad shukri';
$myStringUC = 'AHMAD IRFAN MOHAMMAD SHUKRI';
$greetings = 'Hello World';

// get the length of a string
echo strlen($myString);

echo "<br />";

// find the position of the first occurance of a substring in a string
echo strpos($myString, 'm');
echo "<br />";

// find the position of the last occurance of a substring in a string
echo strrpos($myString, 'h');
echo "<br />";

// reverse the string from the actual string
echo strrev($myString);
echo "<br />";

// convert all characters to lowercase
echo strtolower($myStringUC);
echo "<br />";

// convert all charactes to uppercase
echo strtoupper($myString);
echo "<br />";

// uppercase the first character of each word
echo ucwords($myString);
echo "<br />";

// string replace
echo str_replace('world', 'everyone', $greetings);
echo "<br />";

// return portion of a string specified by the offset and length
echo substr($myString, 0, 5);
echo "<br />";
echo substr($myString, 4);
echo "<br />";

// NOTE: THE SYNTAX BELOW ONLY WORK ON PHP 8 AND LATER
// string starts with
// $validate_string_starts_with = str_starts_with($greetings, 'Hello') ? 'yes' : null;

// echo $validate_string_starts_with;

// echo "<br />";

// $validate_string_ends_with = str_ends_with($greetings, 'ld') ? 'yes' : null;

// echo $validate_string_ends_with;

// echo "<br />";

// escaping html from getting injection
$strings2 = '<h1>hello</h1>';
echo htmlspecialchars($strings2);

echo "<br />";

printf('%s likes to %s', 'Irfan', 'code');
echo "<br />";
printf('1+1=%d', 1 + 1);
echo "<br />";
printf('2.12 / 3.2 = %f', 2.12 / 3.2);