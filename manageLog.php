  <?php
 
 session_start();

  require('./admin/database.php');


  class manageLog extends database {
         

 




 function isLogged() {
  $conn = new PDO("mysql:host=$this->servername;charset=utf8;dbname=$this->db", $this->username, $this->password);




  // set the PDO error mode to exception





			if(isset($_SESSION['email']))   {
        
 
	$email1 = $_SESSION['email'];
  $pass1 = $_SESSION['pass'];
	$sql1 = "SELECT * FROM admin WHERE email='$email1' AND pass='$pass1'";
	  $res1 = $conn->query($sql1);


	  if($res1->fetchColumn() > 0) {
		header("Location:admin/activities.php");
		   
	  }else {
      $userLogin = "SELECT * FROM users WHERE email='$email1' AND password='$pass1'";
      $respons = $conn->query($userLogin);
       
            
     
         if($respons->fetchColumn() > 0) {
            
            echo '<li class="nav-item">
            <img src="img/user.png" alt="" class="profileImage">
           </li> ';
           echo '<form action="" method="POST"><li class="nav-item">
           <button  id="logbtn" name="logout">logout</button>
           </li></form>
           ';
        $ph = $conn->query($userLogin);
        foreach($ph as $ro) {
          echo "<script>localStorage.setItem('photo','img/user.png');</script>";

        }
         
        }else{



            echo '<li class="nav-item">
            <img src="img/user.png"  id="kaka" class="profileImage">
           </li> ';
           echo '<form action=""  method="POST"><li class="nav-item">
           <button  id="logbtn" name="logout">logout</button>
           </li></form>
           '; 
      }
    }
    
    }else{
      if(isset($_SESSION['name'])) {
           $lc = "?logout=true";
            echo '<li class="nav-item">
            <img src=""  id="kaka" class="profileImage">
           </li> ';
           echo '<form action=""  method="POST"><li class="nav-item">
           <button  id="logbtn" onclick="location.href='.$lc.'" name="logout">logout</button>
           </li></form>
           '; 
           
           echo '<script>
          
console.log("test");
         kaka.src = localStorage.getItem("photo");
          
           </script>';

          }else{
    $loc = "location.href='./admin'";
          
          echo '<li class="nav-item">
          <button  id="logbtn" onclick="'.$loc.'">login</button>
          </li>
          ';
        }

    }

	 




}



public function getGallery() {
  $conn = new PDO("mysql:host=$this->servername;charset=utf8;dbname=$this->db", $this->username, $this->password);
   

  $sqlget= "SELECT * FROM photos";
  
  $responses = $conn->query($sqlget);
  
  
  foreach($responses as $res) {
    $photoloc = "./admin/uploads/".$res['photo'];
    
  
  echo '<div class="col-lg-4 col-sm-6">
  <a class="portfolio-box" href="'.$photoloc.'">
    <img class="img-fluid" src="'.$photoloc.'" style="height:300px">
    <div class="portfolio-box-caption">
      <div class="portfolio-box-caption-content">
        <div class="project-category text-faded">
          <p class="name1" style="font-weight: 400;">ჩვენი პროექტები</p>
        </div>
        <div class="project-name">
           <p class="name1"> '.$res['name'].'</p>
        </div>
      </div>
    </div>
  </a>
  </div>';
  
  }
  }












  public function getposts() {
  $conn = new PDO("mysql:host=$this->servername;charset=utf8;dbname=$this->db", $this->username, $this->password);
    
    $sqlget= "SELECT * FROM posts ORDER BY id DESC";

$responses = $conn->query($sqlget);


foreach($responses as $res) {
  $photoloc = "admin/uploads/".$res['photo'];
  

echo ' 
<div class="container py-3">
  <div class="card" style="padding:5px;height:auto">
    <div class="row ">
      <div class="col-md-4">
          <img src="'.$photoloc.'" class="w-100" style="height:100%;width:100%" >
        </div>
        <div class="col-md-8 px-3">
          <div class="card-block px-3">
            <h4 class="card-title" style="font-family: fontSecond">'.$res["name"].'</h4>
            <p class="card-text" id="verylongText'.$res["id"].'">'.$res["des"].'</p>
            <a href="singlePost.php?id='.$res["id"].'" class="btn btn-primary" style="font-family: fontFirst; font-size: 25px;">სრულად</a>
          </div>
        </div>
        <script>
        var str = document.getElementById("verylongText'.$res["id"].'");
        console.log(str);
        
        if(str.innerHTML.length > 30) {
          
          str.innerHTML = str.innerHTML.substring(0,200);
          str.innerHTML = str.innerHTML + "...";
        }
        
        
        
        </script>
      </div>
    </div>
  </div>
</div>
 
';
$_SESSION["postname"] = $res["name"];

}
  }
  

public function checkPhotoId() {
  $conn = new PDO("mysql:host=$this->servername;charset=utf8;dbname=$this->db", $this->username, $this->password);
  
  if(isset($_GET['id'])) {
    $idk = $_GET['id'];
         $getCurrentInfo = "SELECT * FROM posts WHERE id=".$idk."";
           $resi = $conn->query($getCurrentInfo);
foreach($resi as $row) {
$imgloc = "./admin/uploads/".$row['photo'];
$nm = $row['name'];
$des = $row['des'];
echo '  <img class="card-img-top" src="'.$imgloc.'" alt="Card image cap">
<div class="card-block">
<h4 class="card-title">'.$nm.'</h4>
<p class="card-text">'.$row["des"].'</p>
';
      }
           
   }else{
     echo "<center><h1>გვერდი არ არსებობს</h1></center>";
   }
}

}
?>

