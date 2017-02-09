<!DOCTYPE html>
<html>
	<head>
		<title>Cart	|	Massivesoft</title>
		<?php include 'include/header.php';															//Created by Trin 	[Cart Page]
		?>
	</head>
	<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
		<?php
			include 'productsList.php';
echo"		<div class='container'>
				<div class='col jumbotron'>
				<h1><span style='font-size:100px;'><i class='fa fa-shopping-cart' aria-hidden='true'></span></i>Cart</h1>
				</div>
				<div class='row'>
					<div class='col'>
						<div class='simpleCart_items'></div><br>
						<h3 style='text-align:right;'>Grand Total: <span class='badge badge-pill badge-default'><div class='simpleCart_grandTotal'></div></span> </h3>
					</div>
				</div>
				<hr>
				<div class='row'>
					<div class='col'>
						<a style='text-align:center;' type='button' class='btn-lg btn-info btn-block' href='javascript:history.go(-1)' data-toggle='tooltip' data-placement='top' title='Continue Shopping'><i class='fa fa-arrow-left' aria-hidden='true'></i></a>
					</div>
					<div class='col'>
						<a style='text-align:center;' type='button' class='btn-lg btn-warning btn-block simpleCart_empty' href='javascript:;' data-toggle='tooltip' data-placement='top' title='Clear Cart'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
					</div>
					<div class='col'>
						<a style='text-align:center;' type='button' class='btn-lg btn-success btn-block' href='secure/pay.php' data-toggle='tooltip' data-placement='top' title='Pay Now'><i class='fa fa-usd' aria-hidden='true'></i></a>
					</div>
				</div><hr>
			</div>
			
";
		?>
			<script type="text/javascript">simpleCart({
	    cartColumns: [
	        { attr: "name" , label: "Product Name" } ,
	        { attr: "price" , label: "Price", view: 'currency' } ,
	        { view: "decrement" , label: false , text: "<a style='text-align:center;' type='button' class='btn-sm btn-danger simpleCart_decrement' data-toggle='tooltip' data-placement='top' title='Decrease' href='javascript:;'><i class='fa fa-minus text-white' aria-hidden='true'></i></a>" } ,
	        { attr: "quantity" , label: "Quantity" } ,
	        { view: "increment" , label: false , text: "<a style='text-align:center;' type='button' class='btn-sm btn-success simpleCart_increment' data-toggle='tooltip' data-placement='top' title='Increase' href='javascript:;'><i class='fa fa-plus text-white' aria-hidden='true'></i></a>" } ,
	        { attr: "total" , label: "Sub Total", view: 'currency' } ,
	        { view: "remove" , text: "<a style='text-align:center;' type='button' class='btn-sm btn-warning simpleCart_remove' data-toggle='tooltip' data-placement='top' title='Remove from cart' href='javascript:;'><i class='fa fa-times' aria-hidden='true'></i></a>" , label: false }
	    ]
		});
	</script>
		<?php include 'include/footer.php';?>
	</body>

</html>
