<?php
include "secure/config.php";
if( $user->is_logged_in() ){ 
	$dispName = ucfirst($_SESSION['username']);
echo "		
			<div class='page-header'>
				<div class='input-group-sm'>
					<div class='btn-toolbar pull-right'>
			    		<span class='input-group-addon'>Welcome back, ".$dispName."</span>
			    		<span class='input-group-btn'><a href='secure/logout.php' class='btn btn-danger' role='button'>Logout</a></span>
					</div>
				</div>
			</div>

			";
}else{
echo "		
			<div class='page-header'>
				<div class='input-group-sm'>
					<div class='btn-toolbar pull-right' style='font-size:50%;'>
			    		<span class='input-group-btn'><a href='secure/login.php' class='btn btn-success' role='button'>Login</a></span>
			    		<span class='input-group-btn'><a href='secure/register.php' class='btn btn-info' role='button'>Register</a></span>
					</div>
				</div>
			</div>

			";

} 

?>