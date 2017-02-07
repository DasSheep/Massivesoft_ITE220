<!DOCTYPE html>
<html>
	<head>
		<title>Cart	|	Massivesoft</title>
		<?php include 'header.php';?>
	</head>
	<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
		<?php
			include 'productsList.php';
echo"		<div class='container'>
				<div class='col jumbotron'>
				<div class='simpleCart_items'></div>
				</div>
			</div>
";
		?>
		<a href='javascript:history.go(-1)'><---Back</a>
		<?php include 'footer.php';?>
	</body>
</html>
