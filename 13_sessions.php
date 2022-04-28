<?php
/*
		SESSIONS
		- are a way to store information (in variables) to be used accross multiple pages
		- unlike cookies, sessions are stored on the server
	*/

session_start();

if (isset($_POST['submit'])) {
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

	// for the password, we don't need to sanitize
	$password = $_POST['password'];

	if ($username == 'john' && $password == 'password') {
		$_SESSION['username'] = $username;

		header('Location: /extras/dashboard.php');
	} else {
		echo 'Incorrect credentials';
	}
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<div>
		<label for="username">Username</label>
		<input type="text" name="username">
	</div>
	<div>
		<label for="password">Password</label>
		<input type="password" name="password">
	</div>
	<input type="submit" value="submit" name="submit">
</form>