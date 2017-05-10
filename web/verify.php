<?php
include_once 'header.php';

if(isset($_GET['code']) && isset($_GET['email']))
{
	$code = trim($_GET['code']);
	$email = trim($_GET['email']);
	$database = new Database;
	$database->query("SELECT email, code, active FROM users WHERE email = :email");
	$database->bind(":email", $email);
	$database->execute();
	if($database->rowCount() == 0) {
		alert("<center><strong>Failure!</strong> Invalid Link</center>", "danger");
	}
	else {
		$row = $database->single();
		if($row['active']){
			alert("<center><strong>Sorry!</strong> Your email is already activated</center>", "danger");
		}
		else {
			if($code == $row['code']){
				$database->query("UPDATE users SET active=1 WHERE email = :email");
				$database->bind(":email", $email);
				try {
					$database->execute();
					if($database->rowCount() > 0){
						alert("<center><strong>Success!</strong> Your Account is Now Activated. You can now login".'<a href="login.php" style="color: teal;">'." here</a>.</center>");
					}
					else {
						alert("<center><strong>Failure!</strong> An unexpected error occurred.</center>", "danger");
					}
				}
				catch(PDOException $e){
					alert('<center><strong>Failure!</strong> An error occurred. '.$e->getMessage().'.</center>', "danger");
				}
			}
			else {
				alert("<center><strong>Failure!</strong> Invalid Link</center>", "danger");
			}
		}
	}
}
?>
