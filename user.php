<?php 																								//Created by Trin 	[Login Handler]
include "secure/config.php";																		
if( $user->is_logged_in() ){ 																		//If logged in show Welcome back and logout bttn.
	$dispName = ucfirst($_SESSION['username']);														//Get display name from capitalizing first letter of username.
echo "		
			<div class='row'>
				<div class='col'>
					<div class='input-group-sm'>
						<div class='btn-toolbar pull-right'>
				    		<span class='input-group-addon'>Welcome back, ".$dispName."</span>
				    		<span class='input-group-btn'><a href='secure/logout.php' class='btn btn-danger' role='button'>Logout</a></span>
						</div>
					</div>
				</div>
			</div>

			";
}else{																								//If not logged in Show login/regis bttn.
echo "
			<div class='row'>
				<div class='col'>		
					<div class='input-group-sm'>
						<div class='btn-toolbar pull-right'>
				    		<span class='input-group-btn'><a href='secure/login.php' class='btn btn-success' role='button'>Login</a></span>
				    		<span class='input-group-btn'><a href='secure/register.php' class='btn btn-info' role='button'>Register</a></span>
						</div>
					</div>
				</div>
			</div>

			";

} 

?>