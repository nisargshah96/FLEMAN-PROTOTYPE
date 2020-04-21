<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Modify/Cancel Bookings</title>
		<link rel="stylesheet" href="../css/navpad.css"/>
	</head>
	<body>
		<?php
			require("../html/navbar.html");
        ?>
        
        <div class="container" style="margin-top:60px">
        <form>
  <div class="form-group">
    <label>Enter your Booking Confirmation No.</label>
    <input type="text" class="form-control" placeholder="Enter your Booking Confirmation No. here">
  </div>
  <button type="submit" class="btn btn-primary" onsubmit="">Submit to Modify/Cancel</button>
</form>
        </div>
        
        <?php
        require("../html/footer.html");
    ?>
</body>
</html>