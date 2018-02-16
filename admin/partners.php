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
 $nav = new nav("პარტნიორები");?>
 
<button type="button" id="add" class="btn btn-danger" style="margin-left:10px;">დამატება</button>
 
<div class="card">
  <ul class="list-group list-group-flush" id="orgs">
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
   <center> <div class="loader"></div></center>
  </ul>
</div>
    </div>
</div>


</body>

    
<?php
require('./components/core.php');
?>

</html>
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
<script>   
    var ref = firebase.database().ref().child("partners");

$("#add").click(function() {
    var orgName = prompt("შეიყვანეთ ორგანიზაციის სახელი", "");
    
if (orgName != null) {

    ref.push({name:orgName})
}


});

var ORGrow = ``;
ref.on("value",(snap)=>{
    ORGrow = ``;
snap.forEach((snaprow)=>{
    ORGrow = `   <li class="list-group-item">${snaprow.val().name} <button class="btn btn-info" onclick="del('${snaprow.key}')">წაშლა</button></li>` + ORGrow;
   

});
$("#orgs").html(ORGrow);
});

function del(key) {
console.log(key);
ref.child(key).remove();
}

 </script>