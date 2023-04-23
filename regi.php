<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha3-dist\bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-6.4.0-web (1)\fontawesome-free-6.4.0-web/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="row col-lg-12  alert alert-dark">
		<div class="col-lg-4">
			<h3>Beauty Salon Booking system</h3>
			
		</div>
		<center>
			<a href="index.php" class="btn btn-primary ">home</a>&nbsp &nbsp 
			<a href="#" class="btn btn-primary">about us</a>&nbsp &nbsp 
			<a href="services.php" class="btn btn-primary">services</a>&nbsp &nbsp
			<a href="#" class="btn btn-primary">contact</a>&nbsp &nbsp &nbsp &nbsp 
			<a href="#" class="btn btn-primary">admin</a>
		</center>
	</div>
	<div class="row mt-0">
	<div class="col-lg-4" >
		
	</div>
	<div class="col-lg-4 ">
		
	</div>
	<div class="col-lg-4 ">
		<form >
			<input type="search" name="find" placeholder="enter here to search">
			<input type="submit" name="find" value="search" class="btn btn-danger">

		</form>
	</div>
	<br><br>
<div class="row">
	<div class="col-lg-3">
		<a href="index.php" class="btn btn-secondary"><label>back to home</label></a>
	</div>

	<center><div class="col-lg-6 btn btn-primary">
		<u><i><h3>fill this form to register your salon</h3></i></u>
		<form method="POST" enctype="multipart/form-data">
			<label>enter salon name</label><input type="text" name="sname" class="form-control">
			<label>enter salon owner</label><input type="text" name="sowner" class="form-control">
			<label>enter salon location</label><input type="text" name="slocation" class="form-control">
			<label>upload salon picture</label><input type="file" name="pic" class="form-control">
			<label>enter service provided</label><input type="text" name="service" class="form-control">
			<label>enter your contact</label><input type="text" name="contact" class="form-control">
			<label>enetr minimum amount paid in your salon</label><input type="number" name="pay" class="form-control">
			<input type="submit" name="send" value="register"class="form-control btn btn-success">
			<input type="reset" name="cancel" value="cancel"class="form-control btn btn-danger">
		</form>
	</div></center>
	
</div>
	<div class="row btn col-lg-12 btn-dark" >
		<div class="col-lg-4 btn ">
			<h3 style="color: white;">follow us on:</h3>
			<a href="https://www.facebook.com/"><i class="far fa-facebook">&nbsp facebook</i></a>
			<a href="#"><i class="fa fa-whatsapp">&nbsp whatsapp</i></a>
			<a href="https://www.youtube.com/"><i class="far fa-youtube">&nbsp youtube</i></a>
			
		</div>
		<div class="col-lg-4 btn ">
			<h3 style="color: white;">here for you</h3>
			<p style="color: white;">copy&copy by felix developer <i class="fa fa-user"></i></p>
			<p style="color: white;">Kn450 kigali</p>
			<p style="color: white;">along kigali-mukoto road</p>


		</div>
		

	</div>
</body>
</html>
