<?php
require('./components/islogged.php');
require('./components/deletephotobyid.php');

if(isset($_GET['deletePhotoId'])) {
   echo "<script>console.log('ariiiis')</script>";
   $deletePhotoById = new deletePhotoById($_GET['deletePhotoId']);
}


?>



<!doctype html>
<html lang="en">
<head>
<?php 
    
require('./components/header.php');
?>
</head>
<body>

 <?php require('./components/nav.php');
 
 
 $nav = new nav("გალერია");
 
  ?>

        <div class="content">
            <div class="container-fluid">
            <div class="card" style="padding:20px">
                            <div class="header">
                                <h4 class="title">ფოტოს დამატება</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                     
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                        <label>სათაური:</label>
                                            <form action="uploadnewphoto.php" method="post" enctype="multipart/form-data">
                                                <input type="text" name="saxeli" class="form-control" placeholder="სათაური">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <style>
                                         [hidden] {
                            display: none !important;
                                 }

                                        
                                        </style>
                                        <div class="form-group">
                                        <label>ფოტო:</label>
                                        <label class="btn btn-default">
                                        ფოტოს არჩევა <input type="file" name="fileToUpload" hidden>
                                       </label>
                                        </div>
                                        </div>
                                     
 </div>
                                   

                                    <button type="submit" class="btn btn-info btn-fill pull-left">ატვირთვა</button>
                                    <div class="clearfix"></div>
                                </form>
                                </div>






                                <div class="card" style="padding:20px">
                            <div class="header">
                                <h4 class="title">ფოტოს წაშლა</h4>
                            </div>
                            <div class="content" id="deletePhotoContent">
                                
                                    
                                

                                    <div class="clearfix"></div>
                                </form>
                                </div>






 

    </div>
</div>


</body>

<?php
require('./components/core.php');
?>
</html>
<script>
                                     jQuery(($)=>{});

                                     $("#deletePhotoContent").load("./components/editGallery.php");
                                   
                                   
                                   </script>