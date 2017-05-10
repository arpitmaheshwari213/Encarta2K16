<?php
require 'header.php';
array_walk($_POST, 'trim');
if(isset($_POST['user_login'])) {
	$database = new Database;
	$_POST['email'] = strtolower($_POST['email']);
	$database->query("SELECT name,password,id, active FROM users WHERE email = :email");
	$database->bind(":email", $_POST['email']);
	$pass = $database->single();
	if($database->rowCount() <= 0){
		alert('<center><strong>Failure!</strong> This email is not registered.</center>', "danger");
	}
	else {
		if ($_POST['password'] == $pass['password']) {
			if($pass['active'])
			{
				// "User successfully logged in";
				$_SESSION['logged_in'] = true;
				$_SESSION['name'] = $pass['name'];
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['id'] = $pass['id'];
				$_SESSION['encid'] = "ENC16".str_pad($pass['id'], 4, '0', STR_PAD_LEFT);
				alert('<center>User successfully logged in. Redirecting.</center>');
		        echo '<meta http-equiv="refresh" content="1.5;profile.php">';
				$redirecting=true;
			}
			else {
				alert('<center><strong>Failure!</strong> Your account is not activated. Please check your mail.</center>', "danger");
			}
		}
		else {
			alert('<center><strong>Failure!</strong> The password entered is incorrect.</center>', "danger");
		}
	}
}

?>


<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true && !isset($redirecting)) {
	alert('<center>You are already Logged in! <a href="logout.php" style="color: teal;">Log out</a></center>');
}
else { ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-offset-1 col-sm-offset-4 col-sm-4 col-xs-10" style="margin-top:50px;margin-bottom:50px;">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<p class="panel-title" style="text-align: center; font-size: 36px; line-height: 1.5;">
						<i class="material-icons" style="font-size: 48px;">school</i><br>
						SIGN IN</p>
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
							<div class="form-group label-floating">
								<div class="input-group">
									<span class="input-group-addon"><i class="material-icons">vpn_key</i></span>
									<label for="password" class="control-label">Password</label>
									<input class="form-control" type="password" name="password" maxlength="60" required>
								</div>
							</div>
							<button type="submit" class="btn btn-success pull-right" name="user_login">Sign In</button>
						</form>
						<div class="clearfix"></div>
						<div>
							<p style="text-align: center;">Don't have and account yet?<a href="signup.php" style="color: #2196f3;"> Register</a><br />
														  <a href="forgot_pass.php" style="color: #2196f3;">Forgot password?</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
