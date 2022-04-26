<?php
/*
		For Loop:
			for(initialize; condition; increment) {
				code to be executed;
			}
	*/

echo "<h3>For loop</h3>";

for ($i = 1; $i <= 10; $i++) {
	echo "Number {$i} <br />";
}

/*
	While Loop:
		while(condition){
			code to be executed
		}

	warning: 
	while loop will cause the infinity loop, and it may crash your machine memory. 
	to avoid that, always incremented the value inside the while loop body.
*/

$i = 1;

echo "<h3>While Loop</h3>";

while ($i <= 10) {
	echo "Number: {$i} <br />";
	$i++;
}

/* 
	Do..While loop:
		do {
			code to be executed
		} while(conditions);

	note: do..while loop will always execute the block of code once, even if the condition is false
	warning:
	to avoid the infinity loop, always incremented the value inside the do body.
*/

$i = 1;

echo "<h3>Do..While Loop</h3>";

do {
	echo "Number: {$i} <br />";
	$i++;
} while ($i <= 10);

/*
	Foreach loop
		foreach($array as $value) {
			code to be executed
		}
*/

$posts = ['first post', 'second post', 'third post', 'fourth post'];

echo "<h3>Foreach Loop (without index)</h3>";

foreach ($posts as $post) {
	echo "{$post} <br />";
}

echo "<h3>Foreach Loop (with index)</h3>";

foreach ($posts as $index => $post) {
	echo $index + 1 . " - " . $post . "<br />";
}

echo "<br /> <br />";

$persons = [
	'first_name' => 'ahmad irfan',
	'last_name' => 'mohammad shukri',
	'email' => 'irfanshukri203@gmail.com',
];

foreach ($persons as $key => $value) {
	echo "{$key} - {$value}<br />";
}