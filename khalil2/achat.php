<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	
body{
	margin-top: -2900px;
}

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
$req=mysql_query("select * from mat where qte > 0");
if (mysql_num_rows($req)!=0){
while($res=mysql_fetch_array($req)){
    echo "<tr>";
	echo "<th>".$res['REF']."</th>";
	echo "<th>".$res['qte']."</th>";
	echo "<th>".($res['qte'] * $res['puf'])*1.19."</th>";
	echo "</tr>";
	
}


}

$req1=mysql_query("select qte,puf from mat where qte>0");
if (mysql_num_rows($req1)!=0){
while($res1=mysql_fetch_array($req1)){
    echo "<tr>";
	$achat = $achat + ($res1['qte'] * $res1['puf']);
		
	echo "</tr><br />";
	
}


}
echo "<th> Total BENEFICE : ".$achat*1.19." DT</th>";
echo"<button onclick='myFunction()' class='button'>Print</button>";
echo "</table>";
	?>
</tr>

</body>
</html>