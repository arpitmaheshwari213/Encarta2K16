<?php
include_once 'header.php';
array_walk($_POST, 'trim');

if(isset($_POST['user_signup'])) {
	$database = new Database;
	$_POST['email'] = strtolower($_POST['email']);
	$database->query("SELECT email FROM users WHERE email = :email");
	$database->bind(":email", $_POST['email']);
	$database->execute();
	$temp = $database->single();
	if($database->rowCount() > 0) {
		alert("<center><strong>Failure!</strong> This email is already registered.</center>", "danger");
	}
	else {
		$code    = getToken(32);
		$from    = "noreply@csembm.in";
        $to      = $_POST['email'];
        $subject = 'Signup | Verification';
        $message = 'Thanks for signing up!

Your account has been created, you need to verify your email before you can login.

Please click this link to activate your account:
http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/verify.php?code='.$code.'&email='.$_POST['email'].'

Thanks!
';
        $headers = "From: $from \r\n";
        $headers .= "Reply-To: $from \r\n";
        $headers .= "Return-Path: $from\r\n";
        $headers .= "X-Mailer: PHP \r\n";
		if(mail($to,$subject,$message,$headers))
        {
			$database->query("INSERT INTO users(name, college, branch, sem, mobile, email, password, code)
			                  VALUES (:name, :college, :branch, :sem, :mobile, :email, :password, :code)");
			$database->bind(":name", $_POST['name']);
			$database->bind(":college", $_POST['college']);
			$database->bind(":branch", $_POST['branch']);
			$database->bind(":sem", $_POST['sem']);
			$database->bind(":mobile", $_POST['mobile']);
			$database->bind(":email", $_POST['email']);
			$database->bind(":password", $_POST['password']);
			$database->bind(":code", $code);
			try {
				$database->execute();
				if($database->rowCount() > 0){
					alert("<center><strong>Success!</strong> User was registered successfully! An activation link has been sent to your mail id.</center>");
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
			alert('<center>Error sending email! Please try again.</center>', "danger");
		}
	}
}
?>

<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<p style="text-align: center;">You are already Logged in! <a href="logout.php">Log out</a></p>
			</div>
		</div>
	</div>
<?php }
else { ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-offset-1 col-sm-offset-4 col-sm-4 col-xs-10" style="margin-top:50px;margin-bottom:50px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<p class="panel-title" style="text-align: center; font-size: 36px; line-height: 1.5;">
					<i class="material-icons" style="font-size: 48px;">create</i><br>
					Register</p>
				</div>
				<div class="panel-body">
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" style="margin-top: 12px;">
						<div class="form-group label-floating">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">person</i></span>
								<label for="name" class="control-label">Name</label>
								<input class="form-control" type="text" name="name" maxlength="60" required autofocus>
							</div>
						</div>
						<div class="form-group label-floating">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">school</i></span>
								<label for="phone_no" class="control-label">College</label>
								<input class="form-control" type="text" name="college" maxlength="100" required>
							</div>
						</div>
						<div class="form-group label-floating">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">class</i></span>
								<label for="phone_no" class="control-label">Branch</label>
								<input class="form-control" type="text" name="branch" maxlength="255" required>
							</div>
						</div>
						<div class="form-group label-floating">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">library_books</i></span>
								<label for="phone_no" class="control-label">Current Semester</label>
								<input class="form-control" type="number" name="sem" min="1" max="8" required>
							</div>
						</div>
						<div class="form-group label-floating">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">smartphone</i></span>
								<label for="mobile" class="control-label">Mobile Number</label>
								<input class="form-control" type="text" name="mobile" pattern="0?\d{10}" required>
								<p class="help-block">This must be a 10 digit mobile number</p>
							</div>
						</div>
						<div class="form-group label-floating">
							<div class="input-group margin-bottom-sm">
								<span class="input-group-addon"><i class="material-icons">email</i></span>
								<label for="email" class="control-label">Email</label>
								<input class="form-control" type="email" name="email" maxlength="255" pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)" required>
								<!-- <p class="help-block">Enter a valid email address</p> -->
							</div>
						</div>
						<div class="form-group label-floating">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">vpn_key</i></span>
								<label for="password" class="control-label">Password</label>
								<input class="form-control" type="password" name="password" maxlength="60" required>
							</div>
						</div>
						<button type="submit" class="btn btn-success pull-right" name="user_signup" style="transition: all .25s;">Sign Up!</button>
					</form>
					<div class="clearfix"></div>
					<div>
						<p style="text-align: center;">Already have an account? <a href="login.php" style="color: #2196f3;"> Login</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
