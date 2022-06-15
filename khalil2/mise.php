<?php
mysql_connect("localhost","root","madara1998");
mysql_select_db("alimcenter");
$req=mysql_query("update mat set MONTANT=0");
$req1=mysql_query("update mat set BICE=0");
if($req && $req1){
echo "<h3>Mise a jour effectue</h3>";

}

?>