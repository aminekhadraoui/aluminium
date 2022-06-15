	
<?php
mysql_connect("localhost","root","madara1998");
mysql_select_db("alimcenter");
$sa=$_POST['km'];
$req3=mysql_query("SELECT BICE,REF FROM mat where REF='$sa'");
if(mysql_num_rows($req3)!=0){
mysql_query("UPDATE mat SET BICE=0 WHERE REF='$sa'");

}else{

	echo "hello ".$sa;
}

?>

