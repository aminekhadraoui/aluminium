<?php
mysql_connect("localhost","root","madara1998");
mysql_select_db("alimcenter");
$req=mysql_query("update mat set qte=0");
if($req){
echo "<h3>Mise a jour effectue</h3>";

}

?>