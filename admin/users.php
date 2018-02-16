<?php
require('./components/islogged.php');
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
$nav = new nav("მომხმარებლები");
?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" id="user-list">
                         
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
<script>

$("#user-list").load("./components/getusers.php");
</script>