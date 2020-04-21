<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Cancellation</title>
		<link rel="stylesheet" href="../css/navpad.css"/>
	</head>
	<body>
		<?php
			require("../html/navbarafterlogin.html");
		?>
		<div class="media container">
        <div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Booking Confirmation ID</span>
						</div>
					  	<input type="text" class="form-control" autofocus>
                </div>
</div><br>
<div class="input-group container">
					<input type="submit" name="submit" value="Search" class="btn btn-primary" onclick="">
				</div><br>
                <h2>Here the information fetched from the database about the Booking ID will be displayed and the booking can be cancelled if required.</h2>
        <?php
			require("../html/footer.html");
		?>
	</body>
</html>