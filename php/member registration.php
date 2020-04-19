<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit="no" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="../css/navpad.css"/>
</head>
<body>
   
        <?php
			require("../html/navbar.html");
        ?>
<div class="container">
<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="validationDefault01">First name</label>
            <input type="text" class="form-control" placeholder="First name" autofocus>
        </div>
        <div class="col">
            <label for="validationDefault01">Last name</label>
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
            <label for="drivinglicense">Driving License</label>
            <input type="text" class="form-control" id="validationDefault03" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="issuedby">Issued By</label>
            <input type="text" class="form-control" id="validationDefault04"required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validupto">Valid Upto</label>
            <input type="date" class="form-control" id="validationDefault05" min="1950-01-01" max="2030-12-31" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="passportno">Passport Number</label>
            <input type="text" class="form-control" id="validationDefault03" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="issuedby">Issued By</label>
            <input type="text" class="form-control" id="validationDefault04"required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validupto">Valid Upto</label>
            <input type="date" class="form-control" id="validationDefault05" min="1950-01-01" max="2030-12-31" required>
        </div>
    </div>
        
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="validationDefault03" required  placeholder="Email">
        </div>
        <div class="col-md-3 mb-3">
            <label for="addharno">Addhar Number</label>
            <input type="text" class="form-control" id="validationDefault04"pattern="[1-9]{1}[0-9]{9}" maxlength="10" required  placeholder="addhar no">
        </div>
        <div class="col-md-3 mb-3">
            <label for="dateofbirth">Date of Birth</label>
            <input type="date" class="form-control" id="validationDefault05" min="1930-12-31" max="2002-12-31" required>
        </div>
    </div>
           <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Prefferd Car</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                <option selected>Choose...</option>
                <option value="1">Audi</option>
                <option value="2">Bmw</option>
                <option value="3">Mercedes</option>
                <option value="4">Honda</option>
                <option value="5">Hundai</option>
                <option value="6">Suzuki</option>
                <option value="7">Kia</option>
            </select>
            <button type="submit" class="btn btn-primary my-1">Submit</button>
            <button type="reset" class="btn btn-primary my-1">Clear</button>

  
                    
        </form>
        </div>
        <?php
        require("../html/footer.html");
        ?>

</body>
</html>