<?php
require('./components/islogged.php');
?>

<!doctype html>
<html lang="en">
<head>
    <?php 
    require('./components/header.php'); ?>
</head>
<body>
    <?php  
require('./components/nav.php');
$nav = new nav("აქტივობები");
?>
<div class="content" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card" style="padding:20px">
                            <div class="header">
                                <h4 class="title">ახალი პოსტი</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                     
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                        <label>სათაური:</label>
                                            <form action="uploadnewactivity.php" method="post" enctype="multipart/form-data">
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ინფორმაცია:</label>
                                                <textarea rows="5" name="des" class="form-control" placeholder="დაწერეთ ინფორმაცია"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right" name='newpostbtn'>დაპოსტვა</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                 
                            <hr>
 
                        </div>
                    </div>

                </div>
            </div>
        </div>
</body>
    <?php
    require('./components/core.php');
    ?>
    </html>
