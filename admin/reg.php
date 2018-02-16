<?php
session_start();

require('./database.php');
$database = new database();
$servername = $database->servername;
$username =$database->username;
$password = $database->password;
$db = $database->db;



try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // use exec() because no results are returned

	

			if(isset($_SESSION['email']))   {
	$email1 = $_SESSION['email'];
	$pass1 = $_SESSION['pass'];
	$sql1 = "SELECT * FROM admin WHERE email='$email1' AND pass='$pass1'";
	  $res1 = $conn->query($sql1);


	  if($res1->fetchColumn() > 0) {
		header("Location:home.php");
		;
		   
	  }else {
	

	  }

	}
          if(isset($_POST["loginbtn"])) {
			  /////////////////////////////////////////////////////////////
		  $email = $_POST['email'];
		  $pass = $_POST['pass'];
		  $name = $_POST['name'];
			$sql3 = "SELECT * FROM users WHERE email='$email'";
			$ress = $conn->query($sql3);

           if($ress->fetchColumn() > 0) {
		echo "<script>alert('ეს პიროვნება უკვე დარეგისტრირებულია');</script>";
		
		   }else{
			$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$pass') ";
			$conn->query($sql);
			$_SESSION['email'] = $email;
			$_SESSION['pass'] = $pass;
			$_SESSION['photo'] = "default";
			header("Location:../");
			
		   }



		 
		   
        



			 
				



			}else {
			//	$userLogin = "SELECT * FROM users WHERE email='$email1' AND pass='$pass1'";
			//	$respons = $conn->query($userLogin);
         //  if($respons->fetchColumn() > 0) {
     //   header("Location:../");
		 //  }else{		
			 
			
 
		   }
		 
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>










<!DOCTYPE html>
<html lang="en">
<head>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
	<title>რეგისტრაცია</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						რეგისტრაცია
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" placeholder="სახელი">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="ელფოსტა">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "შეავსეთ პაროლის ველი">
						<input class="input100" type="password" name="pass" placeholder="პაროლი">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name="loginbtn" class="login100-form-btn" type="submit">
					დარეგისტრირება
						</button>
					</div>

					<div class="text-center p-t-12">
						<a href="index.php">შესვლა</a>
						 
						 
					</div>

					 
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
 

</body>
</html>
