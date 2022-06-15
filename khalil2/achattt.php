<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">

	table {
         border-collapse: collapse;
         width:100%;
		margin: auto;        
}

th,td{
padding: 5px;
text-align: left;
border-bottom: 1px solid #ddd;

}
tr:hover{
	background-color: #f5f5f5;
}
</style>
<script>
function myFunction() {
window.print();
}
</script>
</head>
<body>
	<?php 
echo"<table>
<tr>

<th><h2>REF</h2></th>	
<th><h2>quantite d'achat</h2></th>	
<th><h2>Montant d'achat</h2></th>	

</tr>
<tr>";

   mysql_connect("localhost","root","madara1998");//stylesheet benifice = montant * puf , qte
mysql_select_db("alimcenter");
$a = $_POST['ach'];$b = $_POST['qteach'];
$req=mysql_query("SELECT * FROM mat WHERE REF='$a'");
if (mysql_num_rows($req)!=0){
while($res=mysql_fetch_array($req)){
    echo "<tr>";
	echo "<th>".$res['REF']."</th>";
	echo "<th>".$b."</th>";
	$prix= ($b * $res['puf'])*1.19;
	echo "<th>".intval($prix)."</th>";
	echo "</tr>";
	
}

}else{
	echo mysql_error();
}


echo "<table>";

?>
</tr>

</body>
</html>