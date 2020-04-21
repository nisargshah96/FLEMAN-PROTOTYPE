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
        <form action="addon.php">
<table cellspacing="30">
<thead><tr>
<th style="font-size:30px">car</th><th style="font-size:30px">car type</th><th style="font-size:30px" colspan="3">base rate</th><th></th>
</tr>
<tr valign="top" align="left">
<td></td><td></td><th style="font-size:20px">Daily</th><th style="font-size:20px">Weekly</th><th style="font-size:20px">Monthly</th>
</tr>
</thead>
<tr>
<td><img src="../images/swift.jpg" align="left" height="75" width="75"/></td><td>small car</td><td>$12.00</td><td>$79.00</td><td>$310.00</td>
<td><input type="radio" name="luxary" required>Swift</td></tr>
<tr>
<td><img src="../images/compact.jpg" align="left" height="75" width="75"/></td><td>compact car</td><td>$18</td><td>$120</td><td>$500.00</td>
<td><input type="radio" name="luxary" />Compact</td></tr>
<td><img src="../images/innova.jpg" align="left" height="75" width="75"/></td><td>prime car</td><td>$99.99</td><td>$999.99</td><td>$2000.00</td>
<td><input type="radio" name="luxary" />Innova</td></tr>
<td><img src="../images/cobalt.jpg" align="left" height="75" width="75"/></td><td>intermediate car</td><td>$99.99</td><td>$999.99</td><td>$2000.00</td>
<td><input type="radio" name="luxary" />Cobalt</td></tr>
</table><br>
<div class="input-group">
                    <input type="submit" class="btn btn-primary name="submit" value="Continue Booking" class="form-control">&nbsp
                    <a href="home.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
				</div>
</form>
</div>
<?php
			require("../html/footer.html");
		?>
	</body>
</html>