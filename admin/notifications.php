
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

<?php  
require('./components/nav.php');
$nav = new nav("შეტყობინებები");
?>
 



        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="header">
                  
               
                    </div>
                    <div class="content">
                    <button class="btn btn-success" id="clean">გასუფთავება</button>
                    <br>
                    <br>
                    <br>
                        <div class="row">
                            <div class="col-md-12" id="notifiPlace">
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
                                <center>  <div class="loader"></div></center>

                             </div>
</div>


</body>

<?php
    require('./components/core.php');
    ?>
    </html>

    <script>
var notifiref2 = firebase.database().ref().child("notifications");
    
$("#clean").click(function(){

notifiref.ref.remove();


});

var notifiref = firebase.database().ref().child("notifications").orderByChild("seen").equalTo("false");

var noti =``;
notifiref2.on("value",(snap)=>{
     console.log(snap);
     noti =``;
     
  snap.forEach((snp)=>{
    console.log(snp);
  
    if(snp.val().activity == "like") {
      noti = `<div class="alert alert-info">
                <span>${snp.val().name}_მ დაალაიქა პოსტი "${snp.val().postId}" </a></span>
                </div>` + noti;
    }else{
        noti = `<div class="alert alert-info">
                <span>${snp.val().name}_მ დააკომენტარა პოსტზე "${snp.val().postId}" </a></span>
                </div>` + noti;
    }
 


  });

  $('#notifiPlace').html(noti);

});

notifiref.on("value",(snap) => {
    $("#notifi").html(null);

    snap.forEach((snp)=>{
        console.log(snp.key);
 firebase.database().ref().child("notifications").child(snp.key+"/seen").set("true");
        
        
    });


});



</script>