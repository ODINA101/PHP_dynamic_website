 
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
  
  </head>

  <body id="page-top">

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

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>360 გრადუსი</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">ოგანიზაცია„360 გრადუსი“ აქტიურად მონაწილეობს სხვადასხვა პროექტებში</p>

            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about" id="btn1">იხილეთ მეტი</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white" id="heading">ჩვენს შესახებ</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4" id="paragraph">არასამთავრობო ორგანიზაცია 360 გრადუსი
ჩამოყალიბდა 2015 წელს.
მისი ძირითადი მიმართულება არის ხაშურის და გორის რაიონში სამოქალაქო პრობლემების მოგვარება და არსებული პრობლემების გაშუქება</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services" style="font-family: fontFirst; font-size: 25px;">ჩვენი პროექტები</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading" style="font-family: fontThird">ჩვენი პროექტები</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">


          <div class="col-lg-3 col-md-6 text-center" id= "container1">
            <div class="service-box mt-5 mx-auto"  id="childDiv">
              <img src="./img/portfolio/img1.png" class="image1 " id="img1" onclick="bigger(this.id)" >
              
              <p class="text-muted mb-0" >2017 წლის 22 ივლის,ქ.ბორჯომში 
არასამთავრობო ორგანიზაცია
„360 გრადუსი“ და წითელი ჯვარი,
ატარებს პირველადი სამედიცინო დახმარების პროგრამას, ადგილზე მოსულ წევრებს უფასოთ ჩაუტარდათ სხვადასხვა გამოკვლევები...

</p>

<h6 class="con">პროექტი დაფინანსდა
ორგანიზაცია „360 გრადუსის“ მიერ</h6>
<h3 class="mb-3">ბიუჯეტი 1 500 ლარი</h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" id="container2">
            <div class="service-box mt-5 mx-auto"  >
              <img src="./img/portfolio/img2.png" " class="image1">
             
              <p class="text-muted mb-0" id="paragraph1">2017 წლის 1 ივნის, ბავშვთა დაცვის დღეს,გორის რაიონის, სოფელ ბერბუკში, შევხვდით ბავშვებს,სადაც ჩავატარეთ:გასართობი აქტივობები,სპორტული შეჯიბრებები,შეჯიბრი პოეზიაში,შეეჯიბრი მხატრულ კითხვაში, შეჯიბრი კალიგრაფიაში,სულ ჩართულ იყო 46 მონაწილე,თვითოეულ მათგანს გადაეცა:ტკბილეული,სათამაშოები,ქ.თბილისის გასართობი პარკის„ბომბორას“ (მთაწმინდის პარკის)50 ლარიანი ვაუჩერი და იგეგმება ერთობლივი ექსკურსია,ბომბორას პარკში. <h6 class="con">პროექტი დაფინანსდაგერმანიის საელჩოს ,ორგანიზაცია „360 გრადუსის“ მიერ</h6>
</p>
 <h3 class="mb-3">ბიუჯეტი 4000 ლარი</h3>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 text-center" id="container3">
            <div class="service-box mt-5 mx-auto" >
              <img src="./img/portfolio/img3.png"  class="image1">
              
              <p class="text-muted mb-0">2017 წლის 9  ივნის, ბორჯომის მუნიციპალიტეტის სოფელ „დაბაში“ ჩატარდა დასუფთავების აქცია,სადაც ორგანიზაცია „360 გრადუსთან“ერთად ჩაერთო ადგილობრივი მოსახლეობა.






<h6 class="con">პროექტი დაფინანსდა 
ორგანიზაცია „360 გრადუსის“ მიერ</h6>
</p>
              <h3 class="mb-3">ბიუჯეტი 500 ლარი</h3>
            </div>
          </div>
         
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="./img/portfolio/fullsize/1.png">
              <img class="img-fluid" src="./img/portfolio/thumbnails/1.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <p class="name1" style="font-weight: 400;">ჩვენი პროექტები</p>
                  </div>
                  <div class="project-name" >
                   <p class="name1"> თბილის ზღვა, დასუფთავების აქცია.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <p class="name1" style="font-weight: 400;">ჩვენი პროექტები</p>
                  </div>
                  <div class="project-name">
                     <p class="name1"> თბილის ზღვა, დასუფთავების აქცია.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.png" alt="" style="height:300px;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <p class="name1" style="font-weight: 400;">ჩვენი პროექტები</p>
                  </div>
                  <div class="project-name">
                    <p class="name1"> დასუფთავების აქცია თბილისის ზღვაზე.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.png" alt="" style="height: 300px; width: 100%;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <p class="name1" style="font-weight: 400;">ჩვენი პროექტები</p>
                  </div>
                  <div class="project-name">
                    <p class="name1"> დასუფთავების აქცია ბორჯომში.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <p class="name1" style="font-weight: 400;">ჩვენი პროექტები</p>
                  </div>
                  <div class="project-name">
                    <p class="name1">დასუფთავების აქცია თბილისის ზღვაზე.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.png" alt="" style="height: 300px; width: 100%;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <p class="name1" style="font-weight: 400;">ჩვენი პროექტები</p>
                  </div>
                  <div class="project-name">
                 <p class="name1"> დასუფთავების აქცია დაბა ბორჯომში.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

   

   
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
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
