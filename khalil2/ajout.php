
<head>
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}


a:hover, a:active {
  background-color: red;
}
</style>
</head>
<?php
mysql_connect("localhost", "root", "madara1998");
mysql_select_db("alimcenter");
$P1=$_POST['p1'];
$P2=$_POST['p2'];
$P3=$_POST['p3'];
$P4=$_POST['p4'];
$P5=$_POST['p5'];
$P6=$_POST['p6'];
$P7=$_POST['p7'];
$P8=$_POST['p8']; 
$P9=$_POST['p9']; 

$req1=mysql_query("select REF from mat where REF='$P1'");

if(mysql_num_rows($req1) != 0){
$req2=mysql_query("UPDATE mat set qte=qte+$P3 where REF='$P1'");
$cl=mysql_query("UPDATE mat set PU=$P5 where REF='$P1'");
$clf=mysql_query("UPDATE mat set puf=$P9 where REF='$P1'");
if(($req2) || ($cl) || ($clf)){
	echo "succes update";
  echo "<br /><a href='ajout.html'>return</a>";
}else{
  echo "can't Update";
  echo "<br /><a href='ajout.html'>return</a>";
}


}else{

if(mysql_num_rows($req1) == 0){
$req7=mysql_query("INSERT INTO mat VALUES (
  '$P1', '$P2', '$P3', '$P4', '$P5', '$P6', '$P7', '$P8', '$P9','','')");

if($req7){


echo "<b>succes insertion</b><br />";
echo "<br /><a href='ajout.html'>return</a>";
}


}


}


?>