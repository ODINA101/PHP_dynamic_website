<!DOCTYPE html>
<html lang="ka">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>360 გრადუსი</title>
<link rel="shortcut icon" type="image/jpg" href="../webSite/img/portfolio/favicon.jpg">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBY4tNdhs1KTXO4jhPF-OOTZiwWc3rdc_M",
    authDomain: "deg-ab181.firebaseapp.com",
    databaseURL: "https://deg-ab181.firebaseio.com",
    projectId: "deg-ab181",
    storageBucket: "deg-ab181.appspot.com",
    messagingSenderId: "697918232170"
  };
  firebase.initializeApp(config);
</script>
  </head>

  <body id="page-top" class="body1">

    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
     <img src="img/portfolio/Logo.Png" class="logo" onclick='location.href = "index.php"'>
      <div class="container">


       


        <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" id="menu" >
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">მთავარი</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="actions.php">აქტივობები</a>
            </li>
            <li class="nav-item" id="DropDown">
              <a class="nav-link js-scroll-trigger" href="#"> სერვისი</a>

              <ul class="dropDown">
                <li class="dropItem" onclick='location.href = "gallery.php"'>გალერეა</li>
                <li class="dropItem" onclick='location.href = "partniors.php"'>პარტნიორები</li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php">კონტაქტი</a>
            </li>
            <?php
            require('./manageLog.php');
            
            $loginManager = new manageLog();
            $loginManager->isLogged();
            if(isset($_GET['logout'])) {
              echo "<script>localStorage.clear();</script>";
              header("Location:index.php");
            }
            if(isset($_POST['logout'])) {
              session_destroy();
              header("Location:index.php");
            }
            ?>
            
          </ul>
        </div>
      </div>
    </nav>
<center>

  <section>
  <div class="container py-3">

<div class="card" style="width: 80%;">
  <div class="card-body">
    <h5 class="card-title">ჩვენი მთავარი პარტნიორი</h5>
   
    <p class="card-text" style="font-family: fontSecond; font-size: 18px;">ჩვენი მთავარი პარტნიორია გერმანიის ფედერაციული რესპუბლიკის ქ. თბილისის საელჩო</p>
   
  </div>
</div>





  <br><br>

<div class="card" style="width: 80%;">
  <div class="card-body">
    <h5 class="card-title">ჩვენი პარტნიორები</h5>
   
    <p class="card-text"><ul class="list-group" id="list-groupale">
 <style>.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}</style>
    <div class="loader"></div>

</ul></p>
<br>
    <h5 class="card-title">ჩვენი მხარდამჭერები</h5>
<ul class="list-group">
  
<li class="list-group-item " >საქართველოს განათლებისა და მეცნიერების სამინისტრო</li>
  <li class="list-group-item">საქართველოს გარემოს დაცვითი ზედამხედველობის სამინისტრო</li>

</ul>
<script>
    var ref = firebase.database().ref().child("partners");

var ORGrow = ``;

ref.on("value",(snap)=>{
    ORGrow = ``;
snap.forEach((snaprow)=>{
    ORGrow = `   <li class="list-group-item">${snaprow.val().name}</li>` + ORGrow;
   

});


$("#list-groupale").html(ORGrow);
});


</script>

  </div>
</div>


</div>
</section>

</center>



        <!--   FOOTER START================== --> 
<footer class="footer">
    <div class="container">
        <div class="row">
        <div class="col-sm-3">
            <h4 class="title">ჩვენს შესახებ</h4>
            <p>ორგანიზაცია "360 გრადუსი" ჩამოყალიბდა 2015 წელს.მისი მთავარი მიზანია ხაშურის და გორის რაიონებში სამოქალაქო პრობლემების აღმოფხვრა.ჩვენი ორგანიზაცია აქტიურად მონაწილოებს სხვავასხვა პროექტებში.</p>
         
        </div>
        <div class="col-sm-3">
            <h4 class="title">მენიუ</h4>
            <span class="acount-icon">          
            <a href="index.php"><i class="fa fa-home" aria-hidden="true" style=" "></i> მთავარი</a>
            <a href="actions.php"><i class="fa fa-users" aria-hidden="true"></i>აქტივობები</a>
            <a><i class="fa fa-user" aria-hidden="true"></i> სერვისი </a> <p style="margin:0px; padding: 0px; cursor: pointer;" onclick="location.href = 'gallery.php'">გალერია</p>
              <p style="margin:0px; padding: 0px; cursor: pointer;" onclick="location.href = 'partniors.php'">პარტნიორები</p>
            <a href="contact.php"><i class="fa fa-globe" aria-hidden="true"></i> კონტაქტი</a>           
            </span>
        </div>
        <div class="col-sm-3">
            <h4 class="title">კონტაქტი</h4>
            <div class="category">
                <a href="https://www.facebook.com/360GEO.GA/" class="social"><i class="fa fa-facebook-square" aria-hidden="true">&ensp;Facebook</i></a>
                <a href="contact.php"><i class="fa fa-users" aria-hidden="true"></i>&ensp;ორგანიზაციის წევრები</a>
                 <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail</a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>&ensp;Instagram</a>
                <a href="contact.php"><i class="fa fa-info-circle" aria-hidden="true"></i> &ensp;სრულად</a>
                         
            </div>
        </div>
        <div class="col-sm-3">
            <h4 class="title">Made by</h4>
            <p>ვებ-საიტი შექმნილია DevIV - ს მიერ.</p>
            <div class="row text-center"><p style="color: #fff;">Copyright © 360geo.ge 2017</p></div>
    </div> 
            </div>
        </div>
    
         
</footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>