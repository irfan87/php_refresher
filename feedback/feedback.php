<?php include 'includes/header.php' ?>
<?php
// fetch the information from our database
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<h2>Past Feedback</h2>
<?php if (empty($feedback)) : ?>
<p class="lead mt3">
	There is no feedback
</p>
<?php endif ?>

<?php foreach ($feedback as $itemFeedback) : ?>
<div class="card my-3 w-75">
	<div class="card-body text-center">
		<?php echo $itemFeedback['body'] ?>
		<div class="text-secondary mt-2">
			<small>by <?php echo $itemFeedback['name'] ?>
				<?php echo date_format(new DateTime($itemFeedback['date']), 'F dS, Y') ?></small>
		</div>
	</div>
</div>
<?php endforeach ?>



<?php include 'includes/footer.php' ?>