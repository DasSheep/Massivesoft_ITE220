<!DOCTYPE html>
<html>
  <head>
	 <title>Home  | Massivesoft</title>
   <?php include 'include/header.php';?>
  </head>
<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
<?php include 'user.php';?>
	<div class="container">
		<div class="col-14"><img src="/Massivesoft/content/img/Massivesoft_logo_b.png" class="img-fluid" alt="Massivesoft_Logo"></div><br>
    <div class="col">
      <ul class="nav nav-pills nav-fill nav-justified">
  			<li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
  			<li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
  			<li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
		  </ul><hr>
    </div>
    <div class="col">
      <h1>Welcome to Massivesoft Homepage!</h1><br>
    </div>
    <div class="col-fluid">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" style="margin: 0 auto;" src="http://placehold.it/1000x400"  alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h3>First slide label</h3>
              <p>Are you expecting something here?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" style="margin: 0 auto;" src="http://placehold.it/1000x400"  alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second slide label</h3>
              <p>There's nothing here either.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" style="margin: 0 auto;" src="http://placehold.it/1000x400"  alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third slide label</h3>
              <p>Nope.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>
  <?php include 'include/footer.php';?>
</body>
</html>