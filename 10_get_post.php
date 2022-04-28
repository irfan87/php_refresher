<?php
/*
		$_GET and $_POST Superglobals
		- We can pass the data through urls and forms using the $_GET and $_POST superglobals
	*/

// echo $_GET['name'];
// echo $_GET['age'];
// echo $_GET['hometown'];

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$age = $_POST['age'];
	$hometown = $_POST['hometown'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name={$name}&age={$age}&hometown={$hometown}">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<div>
		<label for="name">Name</label>
		<input type="text" name="name" id="name">
	</div>
	<div>
		<label for="age">Age</label>
		<input type="number" name="age" id="age">
	</div>
	<div>
		<label for="hometown">Hometown</label>
		<input type="text" name="hometown" id="hometown">
	</div>
	<input type="submit" value="submit" name="submit">
</form>
<div>
	<h2>User Information</h2>
	<div>
		<label for="name">Name</label>
		<strong id="name"><?= $name; ?></strong>
	</div>
	<div>
		<label for="age">Age</label>
		<strong id="age"><?= $age; ?></strong>
	</div>
	<div>
		<label for="hometown">Hometown</label>
		<strong id="hometown"><?= $hometown; ?></strong>
	</div>
</div>