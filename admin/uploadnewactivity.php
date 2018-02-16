 


<?php

if(isset($_POST['saxeli'])) {
    echo $_POST['des'];

    }



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
 
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "მხოლოდ ფოტოს ატვირთვაა ნებადართული";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";






 
require('./database.php');
$database = new database();
$servername = $database->servername;
$username =$database->username;
$password = $database->password;


try {
    $conn = new PDO("mysql:host=$servername;dbname=$this->db;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // use exec() because no results are returned
 




          if(isset($_GET["logout"])) {
            if($_GET["logout"] == "true"){
                
              $_SESSION['email'] = "";
               $_SESSION['pass'] = "";
               header("Location:index.php");
            }             
          }



          $name = $_POST['saxeli'];
          $des = $_POST['des'];
          $photoName = basename( $_FILES["fileToUpload"]["name"]);
                /////////////////////upload to mysql////////////////
               $sql = "INSERT INTO posts (name,des,photo) VALUES ('$name','$des','$photoName')";
               $conn->query($sql);
        
               header("Location:activities.php");


 


    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


 

        ////////////////////////////////////////////////////
    } else {
        echo "ფოტოს ატვირთვა ვერ მოხერხდა";
    }
}
 

?>