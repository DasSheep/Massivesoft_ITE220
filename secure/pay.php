<!DOCTYPE html>
<html>
	<head>
		<title>Pay	|	Massivesoft</title>
		<?php include '../include/header.php';															//Created by Trin 	[Payment Page]
		?>
	</head>
	<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
		<?php include '../productsList.php';?>
		<div class='container'>
			<div class='row'>
				<div class='col-xs jumbotron mx-auto'>
					<h3>Grand Total:<div class='simpleCart_grandTotal'></div></h3>
					<span class='badge badge-pill badge-default'>I can't do payment yet :c</span>
					<a style='text-align:center;' type='button' class='btn btn-info btn-block' href='javascript:history.go(-1)' data-toggle='tooltip' data-placement='bottom' title='Continue Shopping'><i class='fa fa-arrow-left' aria-hidden='true'></i></a>
				</div>
			</div>
		</div>
		<?php include '../include/footer.php';?>
	</body>
</html>
