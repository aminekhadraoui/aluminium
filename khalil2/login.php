<?php
$user=$_POST['username'];
$Pass=$_POST['password'];
if($user=="khalil" && $Pass=="7412369a"){
	header("location: home.php");
}else{
	echo "error";
}
?>