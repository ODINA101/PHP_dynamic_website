<?php
session_start();

require("../database.php");

  class editGallery extends database {
   
      function get() {
    $conn = new PDO("mysql:host=$this->servername;charset=utf8;dbname=$this->db", $this->username, $this->password);

      $sql = "SELECT * FROM photos ORDER BY id DESC";


      $response = $conn->query($sql);



      foreach($response as $row) {
          echo '<div class="row"><div class="card" style="width: 20rem;">
          <img class="card-img-top" src="./uploads/'.$row['photo'].'" alt="Card image cap">
          <div class="card-block">
            <a href="?deletePhotoId=1" class="btn btn-primary" >წაშლა</a>
          </div>
        </div>
                                     
        </div>
    </div>
';
      }
    }
}

$getData = new editGallery();
$getData->get();




?>