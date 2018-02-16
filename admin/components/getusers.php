<?php

require('../database.php');


class getUsers extends database {
function __construct() {
    $conn = new PDO("mysql:host=$this->servername;charset=utf8;dbname=$this->db", $this->username, $this->password);

    $sql = "SELECT * FROM users ORDER BY id DESC";
    $res = $conn->query($sql);

     foreach($res as $row) {
         echo '<div class="card"><div class="header">
         <h4 class="title">'.$row["name"].'  ||   '.$row["email"].'</h4></div>
     </div>
    ';
     }


}



}


$getUsers = new getUsers();


?>