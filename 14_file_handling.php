<?php
/*
		File Handling
		- is the ability to read and write files on the server.
		- PHP built in functions for reading and writing files.
	*/

$files = 'extras_one/users.txt';

if (!file_exists($files)) {
	// echo readfile($files);
	$handleFile = fopen($files, 'w') or die('Unable to open the file');
	$content = "Irfan" . PHP_EOL . "Ivy";

	fwrite($handleFile, $content);

	fclose($handleFile);
} else {
	$handleFile = fopen($files, 'r') or die('Unable to open the file');
	$content = fread($handleFile, filesize($files));

	fclose($handleFile);

	echo $content;
}