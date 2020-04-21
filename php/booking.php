<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script type="text/javascript" src="../script/return location.js"></script>
		<title>Booking</title>
		<link rel="stylesheet" href="../css/navpad.css"/>
	</head>
	<body>
		<?php
			require("../html/navbarafterlogin.html");
		?>
		<div class="media container">
  			<div class="media-body">
			<form method="POST" action="selectloc.php">
			    <p>
			    	<h2>Make Reservations</h2>
			    </p>
			    <div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Rental Date & Time</span>
						</div>
					  	<input type="Date" class="form-control" disabled>
					  	<input type="Time" class="form-control" disabled>
				</div><br>
				<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Return Date & Time</span>
						</div>
					  	<input type="Date" class="form-control" autofocus>
					  	<input type="Time" class="form-control">
				</div><br>
				<div class="input-group">
				  	<div class="input-group-append">
				    	<button class="btn btn-outline-secondary" type="button" aria-haspopup="true" aria-expanded="false">Enter Airport Code / City / State
				    	<input list="airport-code" name="airport-code" disabled>
				      			<datalist id="airport-code">
				      				<option value="101">Pune, Maharashtra</option>
				      				<option value="102">Delhi, Delhi</option>
				      				<option value="103">Mumbai, Maharashtra</option>
				      				<option value="104">Bengluru, Karnataka</option>
				      			</datalist></button>
				  	</div>
				</div><br>
				<input type="checkbox" name="return-loc" onchange="returnloc()" value="return-loc"/><label>I may return it to a different location.</label>
				<div class="input-group" id="pass" style="visibility:hidden">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary" type="button" aria-haspopup="true" aria-expanded="false">Enter Airport Code / City / State
					<input list="airport-code" name="airport-code">
					<datalist id="airport-code">
			  			<option value="101">Pune, Maharashtra</option>
			  			<option value="102">Delhi, Delhi</option>
			 			<option value="103">Mumbai, Maharashtra</option>
			 			<option value="104">Bengluru, Karnataka</option>
		  			</datalist>
	  				</button>
					  </div>
				</div><br>
				<div class="input-group">
					<input type="submit" name="submit" value="Continue Booking" class="form-control">
				</div><br>
			</form>
		</div>
			<img src="../images/image1.jpg" width="250" class="align-self-center mr-3 ml-3" alt="...">
		</div>
		<?php
			require("../html/footer.html");
		?>
	</body>
</html>