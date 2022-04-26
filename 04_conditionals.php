<?php
/* 
		Operators in PHP
			(<) 		less than
			(>) 		greater than
			(<=) 		less than or equal to
			(>=) 		greater than or equal to
			(==) 		equal to
			(===) 	identical to
			(!=) 		not equal to
			(!==) 	not identical to
	*/

/*
		If statements:

		if(conditional) {
			code to be executed if condition is true
		}
	*/

$age = 20;

if ($age >= 18) {
	echo 'You are old enough to vote';
} else {
	echo 'You are not old enough to vote';
}

$current_date_and_time = date("F j h:i:s");
echo "<br />";
echo "it is {$current_date_and_time} <br />";

if ($current_date_and_time < 12) {
	echo "Good morning!!!";
} else if ($current_date_and_time < 17) {
	echo "Good afternoon!!";
} else {
	echo "Good Night!!!";
}

echo "<br />";

$posts = ['First Post'];

// if (!empty($posts)) {
// 	echo $posts[0];
// } else {
// 	echo "no posts";
// }

echo "<br />";

// $searchPosts = !empty($posts) ? $posts[0] : "no posts";
$searchPosts = $posts[0] ?? 'No posts';

echo $searchPosts;
echo "<br /><br />";

$favColor = 'pink';

switch ($favColor) {
	case 'red':
		echo "your favorite color is red";
		break;
	case 'blue':
		echo "your favorite color is blue";
		break;
	case 'green':
		echo "your favorite color is green";
		break;
	default:
		echo "your favorite color is not in the colors list";
		break;
}