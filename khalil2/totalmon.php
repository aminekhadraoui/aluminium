<script>
function myFunction() {
window.print();
}
</script>
<?php
echo "Date :" . @date("d/m/Y") . "<br /> <br />";
mysql_connect("localhost","root","madara1998");
mysql_select_db("alimcenter");
$req1=mysql_query("select SUM(MONTANT) from mat where MONTANT>0");
if (mysql_num_rows($req1)!=0){
while($res1=mysql_fetch_array($req1)){
	$sum=$res1['SUM(MONTANT)'];
	$sum2=$sum*1.19;
	echo "Total MONTANT AVEC TVA : ".$sum2."<br/><br/>";
    echo "<tr>";
	echo "<th> Total MONTANT SANS TVA : ".$res1['SUM(MONTANT)']."</th>";
	
	echo "</tr><br />";

}
}
echo"<button onclick='myFunction()' class='button'>Print</button>";
?>