<?php 																								//Created by Trin 	[DB connector and config]
ob_start();
session_start();
date_default_timezone_set('Asia/Bangkok');															//DB credentials !CHANGE IF NEW HOST!
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','Massivesoft');
define('DIR','localhost');
define('SITEEMAIL','trintin7@gmail.com');
try {																								//Establish DB connection.
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {																			//Throws DB error if any.
    echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'.$e->getMessage().'</div>';
    exit;
}
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>