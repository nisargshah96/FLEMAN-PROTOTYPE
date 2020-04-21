<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Confirm Booking</title>
		<link rel="stylesheet" href="../css/navpad.css"/>
	</head>
	<body>
		<?php
			require("../html/navbar.html");
		?>
		<div class="media container">
        <form action="thankyou.php">
            <p>
                <h1>Here we'll have all the information of the user ongoing with the booking to be verified by him/her.</h1>
</p>
<div class="input-group">
                    <input type="submit" class="btn btn-primary name="submit" value="Confirm" class="form-control">&nbsp
                    <a href="home.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modify</a>
				</div><br>
</form>
</div>
<?php
			require("../html/footer.html");
		?>
	</body>
</html>
