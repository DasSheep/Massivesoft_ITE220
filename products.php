<!DOCTYPE html>
<html>
  <head>
    <title>Products  | Massivesoft</title>
    <?php include 'header.php';?>
  </head>
<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
<?php include 'productsList.php'; ?>
	<div class="container">
		<div class="col-14"><img src="/Massivesoft/content/img/Massivesoft_logo_b.png" class="img-fluid" alt="Massivesoft_Logo"></div><br>
    <ul class="nav nav-pills nav-fill nav-justified">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
      <li class="nav-item"><a class="nav-link active" href="#">Products</a></li>
      <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
		</ul><hr>
    </div>
<?php echo "  
      <div class='container-fluid'>
        <h1 style='text-align:left;'>Products</h1>
        <div class='card-group'>";
          for ($i=0 ; $i < sizeof($product); $i++) 
                { 
echo "    <div class='col center-block'>    
            <div class='card' style='width: 21rem;'>
              <div class='card-header'><span class='badge badge-pill badge-default'>".$product[$i][1]."</span></div>
                <img class='card-img-top img-fluid' src='".$product[$i][3]."' alt='".$product[$i][2]."'>
                <div class='card-block'>
                  <h3 class='card-title'>".$product[$i][0]."</h3>
                  <p class='card-text'>".$product[$i][4]."</p>
                </div>
                <div class='card-footer'>
                  <h3 style='text-align: right;''>$".$product[$i][5]."</h3>
                </div>
              </div><br>
            </div>";
                };
echo "        
        </div>";?>
      </div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>
