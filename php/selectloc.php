<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Select Location</title>
		<link rel="stylesheet" href="../css/navpad.css"/>
	</head>
	<body>
		<?php
			require("../html/navbar.html");
        ?>
      <div class="media container"> 
       <form method="POST" action="selectvehicle.php">
			    <p>
			    	<h2>Select Location</h2>
                </p>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Some Address 1</label>
                </div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">Some Address 2</label>
</div><br>
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