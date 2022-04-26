<?php
$fruits = ['apple', 'orange', 'banana', 'pear'];

// get length
echo "you have " . count($fruits) . " fruits";

echo "<br />";

// search array
var_dump(in_array('apple', $fruits));

// add to array
$fruits[] = 'grape';

echo "<br />";

array_push($fruits, 'berry', 'strawberry', 'mango');

// add to array to beginning of index
array_unshift($fruits, 'dragon fruit');

print_r($fruits);

echo "<br />";

// remove from the array from the end of the index
array_pop($fruits);

print_r($fruits);

echo "<br />";

// remove from the array from the beginning of the index
array_shift($fruits);

print_r($fruits);

echo "<br />";

// remove from the array from the specific index
unset($fruits[3]);

print_r($fruits);

echo "<br />";

// split the array as 2 chunks
$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);

echo "<br />";

// concat the array
$arr_one = [1, 2, 3, 4];
$arr_two = [5, 6, 7, 8];

$arr_three = array_merge($arr_one, $arr_two);

// spread operator
$arr_four = [...$arr_one, ...$arr_two];

print_r($arr_three);
echo "<br />";

print_r($arr_four);
echo "<br />";

// combine array
$a = ['green', 'yellow', 'red'];
$b = ['avocado', 'banana', 'apple'];

$c = array_combine($a, $b);

print_r($c);
echo "<br />";

// get keys in array
$keys = array_keys($c);

print_r($keys);
echo "<br />";

// get values in array
$values = array_values($c);

print_r($values);
echo "<br />";

// flip the array
$flipped = array_flip($c);

print_r($flipped);
echo "<br />";

// range number
$range_number = range(2, 30);

print_r($range_number);
echo "<br />";

// range number with step
$range_number_with_step = range(2, 30, 2);

print_r($range_number_with_step);
echo "<br />";

// mapping the array
$new_number = array_map(fn ($number) => "Number: {$number} <br />", $range_number);

print_r($new_number);
echo "<br />";

// filtering the array
$lessThanTen = array_filter($range_number, fn ($number) => $number <= 20);

print_r($lessThanTen);
echo "<br />";

// reducing the array
$sum = array_reduce($range_number, fn ($carry, $number) => $carry + $number);

print_r($sum);
echo "<br />";