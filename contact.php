<?php include 'includes/header.inc.php'; ?>


<h2>Contact Us!</h2>
<img class="img" src="images/thumbs/tat12.jpg" alt="">
<section id="form">
	<form action="submit.php" method="POST">
		<input type="text" name="fname" placeholder="First Name">
		<input type="text" name="lname" placeholder="Last Name">
		<input type="email" name="email" placeholder="Email Address">
		<textarea name="comments" id="comments" cols="30" rows="10" placeholder="Comments"></textarea>
		<button type="submit">Submit</button>
	</form>
</section>

<?php include 'includes/footer.inc.php'; ?>