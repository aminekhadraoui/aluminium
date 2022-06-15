	
<?php
mysql_connect("localhost","root","madara1998");
mysql_select_db("alimcenter");
$s=$_POST['mo'];
$req4=mysql_query("SELECT MONTANT,REF,BICE FROM mat where REF='$s'");

if(mysql_num_rows($req4)!=0){
mysql_query("UPDATE mat SET MONTANT=0 WHERE REF='$s'");
mysql_query("UPDATE mat SET BICE=0 WHERE REF='$s'");
}else{

	echo "hello ".$s;
}

?>

