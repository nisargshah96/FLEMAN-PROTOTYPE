<?php
	session_start();
	if(isset($_REQUEST["id"])){
	$_SESSION["id"] = $_REQUEST["id"];}
    ?>
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
			require("../html/navbar.html");
        ?>
<section class="container-fluid">
	<?php
		$error_in_data=array();
		if(isset($_REQUEST["submit"]))
		{
			check_data();
			if(count($error_in_data)!=0)
			{
				error_fun();
				welcome_fun();
			}
			else{
				login_success();
			}
		}
		else{
			welcome_fun();
		}
		
		function check_data()
		{
			global $error_in_data;
			if($_REQUEST["id"] == "" )
			{
				$error_in_data[] = "<font style='red'> ID Field cannot be empty. </font>";
			}
			if($_REQUEST["pass"] == "")
			{
				$error_in_data[] = "<font style='red'> Password Field cannot be empty. </font>";
			}
			else if($_REQUEST["id"]!= "" && $_REQUEST["pass"]!= ""){
				if($_REQUEST["id"]=="nisargshah@gmail.com")
					{
						if($_REQUEST["pass"]=="asdfghjkl")
						{
						
						}
						else{
							$error_in_data[] = "<font style='red'>Invalid UserID or Password</font>";
						}
					}
				else{
					$error_in_data[] = "<font style='red'>Invalid UserID or Password</font>";
				}
			}
		}
		
		function error_fun()
		{
			global $error_in_data;
			foreach($error_in_data as $error)
			{
				echo "$error" . "<br/>";
			}
		}
		
		function login_success(){
			header("location:loginsuccess.php");
		}
		
		function welcome_fun()
		{
			echo "<form action='$_SERVER[PHP_SELF]' method='POST'>";
			$login_id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : "";
			$password = "";
			echo "<h2><label>User ID:</label>";
			echo "<input type='email' class='form-control' name='id' autocomplete='on' value='".$login_id."'required/><br/>";
			echo "<label>Password:</label>";
			echo "<input type='password' name='pass' class='form-control' maxlength='40' value='".$password."' required/>";
			echo "</h2>";
			?>
			<input type="submit" class="btn btn-primary" value="LogIn" name="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="reset" class="btn btn-primary" value="Reset Credentials" name="reset"/><br/><br/>
		<?php
			echo "</form>";
		}
		?>
    </section>
    
    <?php
			require("../html/footer.html");
		?>
	</body>
</html>