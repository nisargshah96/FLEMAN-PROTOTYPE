<!DOCTYPE html>
    <html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Home</title>
		<link rel="stylesheet" href="../css/navpad.css"/>
	</head>
	<body>
		<?php
			require("../html/navbarafterlogin.html");
        ?>
      <fieldset> 
      <legend align="center"></legend>
      <form action="" method="post">
      <div class="form-group">
      <div class="form-group col-md-6">
            <label for="Booking Confirmation No">Booking Confirmation No</label>
            <input type="text" class="form-control" required>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Vehicle Reg No">Vehicle Reg No</label>
            <input type="ext" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"required >
        </div>
        </div>

        <div class="form-group">
           <div class="form-group col-md-6">
           <label>Car Status</label>
            <textarea rows="5" cols="50"></textarea>
            </div>
        </div><br>
        <div class="form row">
            <label>Fuel Status</label>
             <label>1/4</label>
             <input type="radio" name="fuelstatus" value="1/4" required><br>
             <label>1/2</label>
             <input type="radio" name="fuelstatus" value="1/2" required><br>
             <label>3/4</label>
             <input type="radio" name="fuelstatus" value="3/4" required><br>
             <label>Full</label>
             <input type="radio" name="fuelstatus" value="Full" required><br>

        </div>
               <div class="form-row">
             <div class="col-md-6 mb-6">
               <button type="submit" class="btn btn-primary my-1">Submit</button>
                 <button type="reset" class="btn btn-primary my-1">Clear</button>
            </div>
        </div>

  


      </fieldset>
      <?php
			require("../html/footer.html");
		?>
	</body>
</html>