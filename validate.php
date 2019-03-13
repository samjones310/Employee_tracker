
function validatefun(){
	<?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = '********************************';
const DEFAULT_TOKEN = '********************************';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

$user= $firebase->get(DEFAULT_PATH.'/employeedata'.'/admin'.'/username');
$pass= $firebase->get(DEFAULT_PATH.'/employeedata'.'/admin'.'/password');
}
?>
  var user1=document.getElementById("User1").value;
  var pass1=document.getElementById("pass1").value;
  //var originalUser="admin";
  //var originalPassword="admin";
      if(user1=="admin" && pass1=="kce2020"){
      window.location.href="mainpage.php";
      }
      else{
      window.alert("Please Enter a Valid Login Detail!");
      }
}
