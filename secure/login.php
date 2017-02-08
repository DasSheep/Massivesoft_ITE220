<!DOCTYPE html>
<html>
  <head>
    <title>Login  | Massivesoft</title>
    <?php include '../include/header.php';?>
  </head>
<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
<?php
//include config
require_once('config.php');
//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: ../index.php'); } 
//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: ../index.php');
		exit;
	} else {
		$error[] = 'Wrong username or password or your account has not been activated.';
	}
}//end if submit 
?>
<div class="container">
	<div class="row jumbotron">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Login</h2>
				<p>No account? <a href='register.php'>Register</a></p>
				<hr>
				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}
				if(isset($_GET['action'])){

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<div class='alert alert-success' role='alert'>Your account is now active you may now log in.</div>";
							break;
					}
				}
				?>
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
			<br><a href='../index.php'><-- Go Back</a>
		</div>
	</div>



</div>

  </div>
  <?php include '../include/footer.php';?>
</body>
</html>
