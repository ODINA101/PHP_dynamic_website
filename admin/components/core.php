<?php 

echo '<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<script src="assets/js/demo.js"></script>

<script>
jQuery(($)=>{
});


var notifiref = firebase.database().ref().child("notifications").orderByChild("seen").equalTo("false");


notifiref.on("value",(snap) => {
if(snap.numChildren() !== 0) {
    $("#notifi").css("display","inline-block");
    
    $("#notifi").html(snap.numChildren());

}else{
    $("#notifi").css("display","inline-block");

}


});





</script>
 ';


?>