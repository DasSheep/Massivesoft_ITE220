<!DOCTYPE html>
<html>
  <head>
    <title>Login  | Massivesoft</title>
    <?php include '../include/header.php';															//Created by Trin	[Login Page]
    ?>
  </head>
<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
<?php 																								
require_once('config.php');
if( $user->is_logged_in() ){ header('Location: ../index.php'); } 									//If already logged in, go to homepage.
if(isset($_POST['submit']))	{
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($user->login($username,$password)){ 															//If login is valid
		$_SESSION['username'] = $username;															//Set session username
		header('Location: ../index.php');															//And return to homepage.
		exit;
	} else {$error[] = 'Wrong username or password or your account has not been activated.';}		//Error
							}
	?>
<div class="container">
	<div class="row jumbotron">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Login</h2>
				<p>No account? <a href='register.php'>Register</a></p>
				<hr>
<?php 																								//Error checking.
				if(isset($error)){
					foreach($error as $error){
						echo "<div class='alert alert-danger alert-dismissable' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>".$error."</div>";
					}
				}
				if(isset($_GET['action'])){															//check the action returned from register
					switch ($_GET['action']) {
						case 'active':
							echo "<div class='alert alert-success alert-dismissable' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>Your account is now active you may now log in.</div>";
							break;}
				}
?>																									
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
			<hr><br><a class='btn-sm btn-info' href='../index.php' data-toggle='tooltip' data-placement='top' title='Go Back'><i class='fa fa-arrow-left' aria-hidden='true'></i></a>
		</div>
	</div>
</div>
</div>
<?php include '../include/footer.php';?>
</body>
</html>
