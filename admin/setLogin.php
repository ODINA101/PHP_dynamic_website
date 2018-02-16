<?php

session_start();

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 10);
ini_set('session.gc_maxlifetime', 3000);


if(isset($_GET['name'])) {


 
  $_SESSION['name'] = $_GET['name'];
  header("Location:../"); 

}

 




?>