
<?php
mysql_connect("localhost", "root", "madara1998");
mysql_select_db("alimcenter"); 
$a = $_POST['a15'];
$req1=mysql_query("update mat set rem='$a'");
if($req1){
	echo "<h1 style='color:red;'>Updated!!</h1>";
}


?>