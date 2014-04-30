<?php include "includes/header.inc.php"; ?>

<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST['fname'])) {
			echo "<h2>Thank you, Anonymous, for your comments.</h2>";
		} else {
			echo "<h2>Thank you, " . $_POST['fname'] . ", for your comments.</h2>";
		}
		} else {
			echo "<h2>You are not allowed to be here.</h2>";
		} 
?>


<?php include "includes/footer.inc.php"; ?>