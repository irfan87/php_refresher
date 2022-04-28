<?php
if (isset($_POST['submit'])) {
	$allowed_ext = ['png', 'jpeg', 'jpg', 'gif'];

	if (!empty($_FILES['upload']['name'])) {
		$file_name = $_FILES['upload']['name'];
		$file_type = $_FILES['upload']['type'];
		$file_tmp = $_FILES['upload']['tmp_name'];
		$file_size = $_FILES['upload']['size'];

		$destination_path = getcwd() . DIRECTORY_SEPARATOR;

		// $target_dir = "uploads/{$file_name}";

		// if the folder is not exists
		if (!file_exists('uploads/')) {
			mkdir('uploads', 0777, true);
		}

		$target_dir = $destination_path . 'uploads/' . basename($file_name);

		// get the extensions of the uploading files
		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));

		// validate file extendsions
		if (in_array($file_ext, $allowed_ext)) {
			if ($file_size <= 1000000) {
				move_uploaded_file($file_tmp, $target_dir);

				$message = '<p style="color: green;">File successfully uploaded!</p>';
			} else {
				$message = '<p style="color: red;">The file is too large</p>';
			}
		} else {
			$message = '<p style="color: red;">Invalid file type</p>';
		}
	} else {
		$message = '<p style="color: red;">Please choose a file</p>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload</title>
</head>

<body>
	<?php echo $message ?? null; ?>
	<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
		Select image to upload:
		<br>
		<input type="file" name="upload">
		<br>
		<input type="submit" value="Submit" name="submit">
	</form>
</body>

</html>