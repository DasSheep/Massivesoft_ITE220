<!DOCTYPE html>
<html>
  <head>
	 <title>Home  | Massivesoft</title>
   <?php include 'header.php';?>
  </head>
<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
  <div class="col">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p style='text-align:middle;'>Some stuff will also go here aswell,  Check out the <strong><a href="shop.php">Shop</a></strong> page in the meantime...</p>
    </div>
  </div>
	<div class="container">
		<div class="col-14"><img src="/Massivesoft/content/img/Massivesoft_logo_b.png" class="img-fluid" alt="Massivesoft_Logo"></div><br>
    <div class="col">
      <ul class="nav nav-pills nav-fill nav-justified">
  			<li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
  			<li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
  			<li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
		  </ul><hr>
    </div>
    <div class="col">
      <h1>Welcome to Massivesoft Homepage!</h1><br>
    </div>
    <div class="col-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" style="margin: 0 auto;" src="http://placehold.it/1000x400"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" style="margin: 0 auto;" src="http://placehold.it/1000x400"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" style="margin: 0 auto;" src="http://placehold.it/1000x400"  alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>