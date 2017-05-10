<?php
include_once 'header.php';
array_walk($_POST, 'trim');

if(isset($_POST['forgot_pass'])) {
	$database = new Database;
	$email = strtolower($_POST['email']);
	$database->query("SELECT id, name, email, password FROM users WHERE email = :email");
	$database->bind(":email", $email);
	$database->execute();
	if($database->rowCount() == 0) {
		alert("<center><strong>Failure!</strong> This email is not registered.</center>", "danger");
	}
	else {
		$row = $database->single();
		$pass = $row['password'];
		$name = $row['name'];
		$encid = "ENC16".str_pad($row['id'], 4, '0', STR_PAD_LEFT);
		
		$from    = "noreply@csembm.in";
        $to      = $_POST['email'];
        $subject = 'Login Credentials';
        $message = "Hi $name,

You recently requested your login details. You can login using the following:

-----------------------------------------------------------------
Username: $email
Password: $pass
Encarta ID: $encid
-----------------------------------------------------------------

Thanks!
";
		$headers = "From: $from \r\n";
	    $headers .= "Reply-To: $from \r\n";
	    $headers .= "Return-Path: $from\r\n";
	    $headers .= "X-Mailer: PHP \r\n";
		if(mail($to,$subject,$message,$headers))
	    {
			alert("<center><strong>Success!</strong> Your credentials have been sent to your email id.</center>");
		}
		else {
			alert("<center><strong>Failure!</strong> There was an error sending the mail. Please try again later.</center>", "danger");
		}
	}
}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-offset-1 col-sm-offset-4 col-sm-4 col-xs-10" style="margin-top:50px;margin-bottom:50px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<p class="panel-title" style="text-align: center; font-size: 36px; line-height: 1.5;">
					<i class="material-icons" style="font-size: 48px;">lock</i><br>
					FORGOT PASSWORD</p>
				</div>
				<div class="panel-body">
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" style="margin-top: 12px;">
						<div class="form-group label-floating">
							<div class="input-group margin-bottom-sm">
								<span class="input-group-addon"><i class="material-icons">email</i></span>
								<label for="email" class="control-label">Email</label>
								<input class="form-control" type="email" name="email" maxlength="255" pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)" required>
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-danger btn-raised btn-block" name="forgot_pass">Send</button>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
					<div style="margin-top: 30px;">
						<p style="text-align: center;">Remember your password? <a href="login.php" style="color: #2196f3;"> Login</a><br />
						                               Need an account?<a href="signup.php" style="color: #2196f3;"> Register</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
