<?php

if (isset($_POST['submit'])) {
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
	$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
	$hometown = filter_input(INPUT_POST, 'hometown', FILTER_SANITIZE_SPECIAL_CHARS);

	// $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
	// $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
	// $hometown = filter_var($_POST['hometown'], FILTER_SANITIZE_SPECIAL_CHARS);
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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