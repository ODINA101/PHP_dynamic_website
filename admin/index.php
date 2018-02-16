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
		header("Location:activities.php");
		;
		   
	  }else {
	

	  }

	}
          if(isset($_POST["loginbtn"])) {
			  
		  $email = $_POST['email'];
		  $pass = $_POST['pass'];
		  
		   $sql = "SELECT * FROM admin WHERE email='$email' AND pass='$pass'";
			$res = $conn->query($sql);
			if($res->fetchColumn() > 0) {
				echo 'sworia';
				$_SESSION['email'] = $email;
				$_SESSION['pass'] = $pass;
				header("Location:activities.php");
			}else {
				$userLogin = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
				$respons = $conn->query($userLogin);
          
			
           if($respons->fetchColumn() > 0) {
			$_SESSION['email'] = $email;
			$_SESSION['pass'] = $pass;
			$_SESSION['photo'] = "default";

			$respons = $conn->query($userLogin);
          
			foreach($respons as $res) {

				$_SESSION['name'] = $res['name'];
				
			}
			
        header("Location:../");
		   }else{		  



				echo '
				<div id="snackbar">ელფოსტა ან პაროლი არასწორია.</div>
				<script>showSnack();
				function showSnack() {
				  var x = document.getElementById("snackbar");
							x.className = "show";
							setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
				  }
					  </script>';
		   }
			}


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
    logoutn-width: 250px;
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
	<title>შესვლა</title>
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
						შესვლა
					</span>

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
							ავტორიზაცია
						</button>
						</div>
						<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="location.href='../'" type="button">
							უკან
						</button>
					</div>

					<div class="container-login100-form-btn">
					<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ka_GE/sdk.js#xfbml=1&version=v2.11&appId=1626683167424060&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
					<fb:login-button 
            scope="public_profile,email"
            onlogin="checkLoginState();">
                     </fb:login-button>
					 

</div>

					<div class="text-center p-t-12">
						<span class="txt1">
						<a href="reg.php">რეგისტრაცია</a>
						</span>
						 
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
 

<script>
jQuery(($)=>{

});
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1626683167424060',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.11'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));



   function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

   



function statusChangeCallback(res) {
console.log(res);


if(res.status == "connected") {
	FB.api('/me', {fields: 'first_name,picture'}, function(response) {
  console.log(response);
 
 
   location.href="setLogin.php?name=" + response.first_name + "&photo=" + response.picture.data.url; 
   localStorage.setItem("photo",response.picture.data.url);
 


});
}

}
</script>