<!DOCTYPE html>
<html>
	<head>
		<title>Online Shop	|	Massivesoft</title>
		<?php include 'include/header.php';															                                //Created by Trin 	[Shop Page]
		?>
	</head>
	<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
  <?php include 'user.php';?>
		<div class="container">
			<div class="col-14"><img src="/Massivesoft/content/img/Massivesoft_logo_b.png" class="img-fluid" alt="Massivesoft_Logo"></div><br>
			<ul class="nav nav-pills nav-fill nav-justified">
  				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
  				<li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
  				<li class="nav-item"><a class="nav-link active" href="#">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
			</ul><hr>
		</div>
<?php 			include 'productsList.php';															                                //Include products list array.
echo "	<div class='container-fluid jumbotron'>
			<div class='well well-sm'>
				<h1 style='text-align:left;float:left;'>Online Store</h1>";
				if( $user->is_logged_in() ){														                                    //If logged in.
				$dispName = ucfirst($_SESSION['username']);											                            //Get username and capitalize first letter.
echo "			<h3 style='float:right;'>Hello ".$dispName." !</h3>";}								                  //Display formatted username.	
				else{																				                                                //If not logged in.
echo "			<h3 style='float:right;'>Howdy Stranger!</h3>";}									                      //Show stranger.
echo"			<br><br>
				<p style='text-align:right;'><i class='fa fa-shopping-cart' aria-hidden='true'></i> item(s): <a href='cart.php'><span class='simpleCart_quantity'></p></a>
				<a href='javascript:;'' class='simpleCart_empty'><p style='text-align:right;'>Clear Cart</p></a> 
			</div>
			<div class='card-group'>";
				for ($i=0 ; $i < sizeof($product); $i++) 											                              //Get loop number from product array size.
          		{ 																					                                          //Display product.
echo " 			<div class='col center-block'>    
              		<div class='card simpleCart_shelfItem' style='width: 21rem;'>
                		<div class='card-header'><span class='badge badge-pill badge-default'>".$product[$i][1]."</span></div>
                  		<img class='card-img-top img-fluid' src='".$product[$i][3]."' alt='".$product[$i][2]."'>
                  		<div class='card-block'>
                   			<h3 class='card-title item_name'>".$product[$i][0]."</h3>
                   			<p class='card-text'>".$product[$i][4]."</p>
                   			<h3 style='text-align: right;''><span class='badge badge-pill badge-default'><span class='item_price'>$".$product[$i][5]."</span></span></h3>
                  		</div>
							<div class='card-footer'>
								<form class='form-inline' action='cart.php' method='GET'>
                        			<div class='form-group-sm col'>
                          				<label class='sr-only'>Amount</label>
                          				<div class='input-group'>
                                    <div for='Quantity' class='input-group-addon'>Quantity</div>
                             				<input name='prodAmount' value='1' type='number' class='form-control item_Quantity' id='Amount' placeholder='1'>
                              			<span class='input-group-btn'>
                                      <a href='javascript:;'' class='btn btn-success item_add' data-toggle='tooltip' data-placement='top' title='Add to cart'><i class='fa fa-shopping-cart' aria-hidden='true'></i></a>
                                    </span>
                          				</div>
                        			</div>
                    			</form>
                    		</div>
                		</div><br>
              		</div>";
          			};
echo "        
            </div>";?>
        </div>
	<?php include 'include/footer.php';?>
	</body>
</html>
<script type="text/javascript"> </script>
