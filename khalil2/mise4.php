<?php
mysql_connect("localhost","root","madara1998");
mysql_select_db("alimcenter");
$optionselect=$_POST['work'];
$req=mysql_query("update facture set code=0 where nom='$optionselect' ");
if($req){
echo "<h3>Mise a jour effectue</h3>";

}

?>