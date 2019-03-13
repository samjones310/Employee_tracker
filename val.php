<?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = '********************************';
const DEFAULT_TOKEN = '********************************';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

$user= $firebase->get(DEFAULT_PATH.'/admin'.'/username');
$pass= $firebase->get(DEFAULT_PATH.'/admin'.'/password');
$user1=$_POST['username'];
$pass1=$_POST['pass'];
$pass2 = '"'.$pass1.'"';
$user2 = '"'.$user1.'"';
if ($user==$user2 && $pass==$pass2)
{
	header("Location: mainpage.php"); 
}
else
{
	header("Location: index.html"); ;
}
?>
