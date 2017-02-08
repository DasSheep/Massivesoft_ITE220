<?php require('config.php');																		//Created by Trin 	[Logout handler]

//logout
$user->logout(); 

//logged in return to index page
header('Location: ../index.php');
exit;
?>