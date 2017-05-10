<?php
require 'header.php';
if(!isset($_SESSION['logged_in'])) {
	header("Location: login.php");
	exit();
}
?>

<div class="container-fluid">
	<div class="row" style="margin-top: 20vh;">
		<div class="col-sm-offset-1 col-sm-10 col-md-offset-3 col-md-6">
			<div class="jumbotron">
				<h2>Hi <?php echo $_SESSION['name']; ?>,</h2>
				<p>Your Encarta ID is <?php echo $_SESSION['encid']; ?>. Please provide this at the desk to complete your registration.</p>
			</div>
		</div>
	</div>
</div>
