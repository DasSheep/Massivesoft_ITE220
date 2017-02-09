<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us	|	Massivesoft</title>
    <?php include 'include/header.php';?>
	</head>
	<body style="background-color:#f9f9f9 ; font-family: 'Source Sans Pro', sans-serif;">
  <?php include 'user.php';
        include 'include/socialtab.php';
  ?>
      	<div class="container">
          <div class="col-14"><img src="/Massivesoft/content/img/Massivesoft_logo_b.png" class="img-fluid" alt="Massivesoft_Logo">
        </div><br>
        <ul class="nav nav-pills nav-fill nav-justified">
  				      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
  				      <li class="nav-item"><a class="nav-link" href="">Shop</a></li>
                <li class="nav-item"><a class="nav-link active" href="aboutus.php">About Us</a></li>
        </ul><hr>
			    <h1 class="heading--large">Help and Support</h1>
			 	<div class="grid-unit">
			 		<img src="/Massivesoft/content/img/contact.jpg" class="img-fluid" alt="Responsive image">
			 	</div>
        <div class="grid-row column-3 info-box">
          <div class="grid-unit">
            <h4>Contact Us</h4>
            <ul>
	             <li><p>Massivesoft Store Sales and Customer Support:<br>Call 1-877-696-7786</p></li>
	             <li><p>Technical Support:<br>Call 1-877-696-7786</p></li>
	             <li><p>Massivesoft Direct for Businesses and Large Orders:<br>Call 1-866-425-4709</p></li>
	             <li><p>Massivesoft products bought elsewhere and online Answer Desk:<br>Call 1-800-642-7676</p></li>
            </ul>
          </div>
        </div><hr>
        <div class="alert alert-danger" role="alert">
	        <h4 style =" color: darkblue ">If you would like to send us a message, please use the form below. We look forward to hearing from you!</h4>
        </div>
        <div class='row'>
          <div class='col jumbotron'>
            <h2 style="color : black">Contact Form</h2>
            <form method="post" class="form">
              <p class="name">
                <label for="name">Name</label><br/>
                <input type="text" name="name" class="form-control" id="name" placeholder="Bill Gates..." />
              </p>
              <p class="email">
                <label for="email">Email</label><br/>
                <input type="text" name="email" class="form-control" id="email" placeholder="mail@example.com" />
              </p>
              <p class="company">
                <label for="web">Company Name</label><br/>
                <input type="text" name="company" class="form-control" id="company" placeholder="Company.co"/>
              </p>    
              <p class="text">
                <label for="web" style="width: 100">Message</label><br/>
                <textarea name="message" class="form-control" placeholder="Free Feel to send us message" /></textarea>
              </p>
              <p class="submit">
                <input type="submit" name="send_data" value="Send" />
              </p></b>
            </form>
          </div>
        </div>
    </div>
  <?php include 'include/footer.php';?>
  </body>
</html>
<?php 
  	if(isset($_POST['send_data'])){
  		global $con;
  		$name=$_POST['name'];
  		$email=$_POST['email'];
  		$company=$_POST['company'];
  		$message=$_POST['message'];

  		$query = "insert into contact (name, email, companyname, message) values ('$name','$email','$company','$message')";
  		$result = $db->query($query);

if ($result) {
	echo "<script>alert('Thanks for your info');</script>";
	echo "<script>window.open<'contactus.php','_self'></script>";
}
  	}

?>
 


