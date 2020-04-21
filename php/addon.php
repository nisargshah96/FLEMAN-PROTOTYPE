<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Select Vehicle</title>
		<link rel="stylesheet" href="../css/navpad.css"/>
	</head>
	<body>
		<?php
			require("../html/navbar.html");
		?>
		<div class="media container">
        <form action="customerinfo.php">
<table cellspacing="50">
<tr><td><input type="checkbox" name="1" value"Gps"/>Gps Navigation System</td>
<td>$10.00/day</td></tr>
<tr>
<td><input type="checkbox" name="2" value"camping"/>Camping kit</td>
<td>$30.00/day</td></tr>
<tr>
<td><input type="checkbox" name="3" value"camping"/>Child seats</td>
<td>$2.00/day(For additional seat. 1 seat free)</td></tr>
</table><br>
<div class="input-group">
                    <input type="submit" class="btn btn-primary name="submit" value="Continue Booking" class="form-control">&nbsp
                    <a href="home.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
				</div><br>
</form>
</div>
<?php
			require("../html/footer.html");
		?>
	</body>
</html>