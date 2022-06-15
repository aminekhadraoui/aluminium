<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	


	table {
         border-collapse: collapse;
         width:100%;
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
<table>
<tr>
<th><h2>benifice</h2></th>	
<th><h2>REF</h2></th>	
<th><h2>Quantité</h2></th>	
<th><h2>PRIX DE VENTE</h2></th>

</tr>
<tr>
<?php 
echo "Date : " . @date("d/m/Y") . "<br /> <br />";
   mysql_connect("localhost","root","madara1998");//stylesheet benifice = montant * puf , qte
mysql_select_db("alimcenter");
$req=mysql_query("select BICE,REF,PU,MONTANT from mat where BICE>0 and MONTANT > 0");
if (mysql_num_rows($req)!=0){
while($res=mysql_fetch_array($req)){
    echo "<tr>";
	echo "<th>".$res['BICE']."</th>";
	echo "<th>".$res['REF']."</th>";
	echo "<th>".$res['MONTANT'] / $res['PU']."</th>";
	echo "<th>".$res['PU']."</th>";
	echo "</tr>";
	
}


}
$req1=mysql_query("select SUM(BICE),SUM(MONTANT) from mat where BICE>0 and MONTANT>0");
if (mysql_num_rows($req1)!=0){
while($res1=mysql_fetch_array($req1)){
    echo "<tr>";
	echo "<th> Total BENEFICE : ".$res1['SUM(BICE)']."</th>";
	echo "<th> Total BENEFICE Avec TVA : ".intval($res1['SUM(BICE)']*1.19)."</th>";
	echo "<th> Total montant : ".intval($res1['SUM(MONTANT)'])."</th>";
	echo "<th> Total montant avec tva : ".intval($res1['SUM(MONTANT)']*1.19)."</th>";
	echo "<th> PUF :".intval(($res1['SUM(MONTANT)']*1.19)-($res1['SUM(BICE)']*1.19))."<th/>";
	echo "<tr/>";
}


}

echo"<button onclick='myFunction()' class='button'>Print</button>";

	?>
</tr>
</table>
</body>
</html>