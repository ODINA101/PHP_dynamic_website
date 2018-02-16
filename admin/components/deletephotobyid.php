<?php


class deletePhotoById extends database {

function __construct($id) {
    $conn = new PDO("mysql:host=$this->servername;charset=utf8;dbname=$this->db", $this->username, $this->password);
 
$sql = "DELETE FROM photos WHERE id='$id'";
$conn->query($sql);
header("Location:gallery.php");

}

}
 








?>