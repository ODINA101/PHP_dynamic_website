
<?php

session_start();
include('./database.php');
$database = new database();
$servername = $database->servername;
$username =$database->username;
$password = $database->password;
$db = $database->db;


 






if(isset($_GET["logout"])) {
        
    session_destroy();
       header("Location:index.php");
                 
  }
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // use exec() because no results are returned
	

			  
		  $email = $_SESSION['email'];
          $pass = $_SESSION['pass'];



echo '......';


                    $sql = "SELECT * FROM admin WHERE email='$email' AND pass='$pass'";

			$res = $conn->query($sql);
			if($res->fetchColumn() > 0) {
				 
			}else {
				 
                echo 'arawsworia';
				header("Location:index.php");
                
			}


    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null; 

 



?>