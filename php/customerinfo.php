<!DOCTYPE html>
    <html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Customer Information</title>
		<link rel="stylesheet" href="../css/navpad.css"/>
	</head>
	<body>
		<?php
			require("../html/navbar.html");
        ?>
  <div class ="form-row container">
      <div class="col">
  <div class="form-group">
            <label for="inputAddress">Membership No</label>
            <input type="text" class="form-control" id="inputAddress">
      <div class="form-column">
        <label for="password">Password</label>
            <input type="text" class="form-control" required>
            <button type="submit" class="btn btn-primary my-1">Go</button>
            </div></div>
            <fieldset>
        <legend align="center">Your Booking</legend>
        <form action="cnfbooking.php" method="POST">
        <div class="form-group">
            <label for="pick=up">Pick-up</label>
            <input type="text" class="form-control" id="pick-up" placeholder="Pick-up Date & Time" disabled>
        </div>
        <div class="form-group">
            <label for="pick=up at">Pick-up at</label>
            <input type="text" class="form-control" id="pick-up at" placeholder="Pick-up Venue" disabled>
        </div>
        <div class="form-group">
            <label for="return">Return</label>
            <input type="text" class="form-control" id="return" placeholder="Return Date & Time" disabled>
        </div>
        <div class="form-group">
            <label for="return at">Return at</label>
            <input type="text" class="form-control" id="return at" placeholder="Return Venue" disabled><br>
            <a href="home.php" class="btn btn-secondary btn-md active" role="button" aria-pressed="true">Modify</a><br>
       <div class="form-group">
            <label for="Vehicle Selection">Vehicle Selection</label>
            <input type="text" class="form-control" id="Vehicle Selection"><br>
            <a href="home.php" class="btn btn-secondary btn-md active" role="button" aria-pressed="true">Modify</a><br>
       <div class="form-group">
            <label for="GPS Navigation">GPS Navigation</label>
            <input type="text" class="form-control" id="GPS Navigation"><br>
            <a href="home.php" class="btn btn-secondary btn-md active" role="button" aria-pressed="true">Modify</a><br>
    
        </div>
        </div>
    </div>
  </div>
</form>
</fieldset>

<div class="col">
  <form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="validationDefault01">Renter's Name</label>
            <input type="text" class="form-control" placeholder="Renter's Name" autofocus>
        </div>
        <div class="col">
            <label for="validationDefault01">Last Name</label>
            <input type="text" class="form-control" placeholder="Last name">
        </div>
    </div><br>
        <div class="form-group">
            <label for="inputAddress">Address1</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="house no ,area etc">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="city,state,country">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id=validationDefault03" placeholder="Email">
        </div><br>
       
        <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationDefault03">City</label>
            <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationDefault04">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>Uttar Pradesh</option>
                <option>Maharastra</option>
                <option>Gujrat</option>
                <option>Karnataka</option>
                <option>Tamil Naidu</option>
                <option>Kerela</option>
                <option>Kolkata</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationDefault05">Pincode</label>
            <input type="text" class="form-control" id="validationDefault05" placeholder="pincode"pattern="[1-9]{1}[0-9]{5}" maxlength="6" required>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="homephone">Home Phone</label>
            <input type="tel" class="form-control"placeholder="Home Phone no"pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"required maxlength="12" >
        </div>
        <div class="form-group col-md-6">
            <label for="mobilenumber">Mobile Number</label>
            <input type="tel" class="form-control"placeholder="Mobile Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"required maxlength="12">
        </div>
    </div>
     
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="Local drivinglicense">Local Driving License</label>
            <input type="text" class="form-control" id="validationDefault03" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </div>
       
        <div class="form-row">
        <div class="col-md-6 mb-6">
            <label for="IDP#">IDP#</label>
            <input type="text" class="form-control" id="validationDefault03" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </div>
      </div><br>
      </div>
       <div class="form-group">
       <div class="col-md-6 mb-6">
            <label for="Issued By">Issued By</label>
            <input type="date" class="form-control" id="validationDefault03" required>
        </div><br>
        <div class="form-group">
        <div class="col-md-6 mb-6">
            <label for="Issued By">Valid Upto</label>
            <input type="date" class="form-control" id="validationDefault03"  min="1950-01-01" max="2030-12-31" required>
        </div><br>
        <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="passportno">Passport Number</label>
            <input type="text" class="form-control" id="validationDefault03" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validupto">Valid Upto</label>
            <input type="date" class="form-control" id="validationDefault05" min="1950-01-01" max="2030-12-31" required>
        </div>
        </div>
        <div class="form-row">
        <div class="col-md-6 mb-6">
            <label for="issuedby">Issued By</label>
            <input type="text" class="form-control" id="validationDefault04"required>
        </div>
        <div class="col-md-6 mb-6">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="validationDefault05">
        </div>
        </div>
        <div class="form-group">
        <div class="col-md-6 mb-6">
            <label for="dateofbirth">Date of Birth</label>
            <input type="date" class="form-control" id="validationDefault05" min="1930-12-31" max="2002-12-31" required>
        </div>
        </div>
        <div class="form-row">
        <div class="col-md-6 mb-6">
        <button type="submit" class="btn btn-primary my-1">Submit</button>
            <button type="reset" class="btn btn-primary my-1">Clear</button>
            </div>
        </div>
    </div>
</div>
    </form>
</div>
</div>
<?php
			require("../html/footer.html");
		?>
	</body>
</html>