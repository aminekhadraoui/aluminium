<style type="text/css">
	
	#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #33cc33;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0099cc;
  color: white;
}
.button {
  background-color: #0099cc;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<script>
function myFunction() {
window.print();
}
</script>
<?php
mysql_connect("localhost", "root", "madara1998");
mysql_select_db("alimcenter");
$req=mysql_query("select * from mat where rebah > 0");
if (mysql_num_rows($req)!=0){
echo"<table id='customers'>";
 	echo"<tr>";
    echo"<th>REF</th>";
    echo"<th>DESIGNATION</th>";
    echo"<th>QTE</th>";
    echo"<th>UN</th>";
    echo"<th>P.U</th>";
    echo"<th>REM</th>";
    echo"<th>MONTANT</th>";
    echo"<th>TVA</th>";
    echo"<th>PUF client</th>";
    echo"<th>rebah</th>";
  echo"</tr>";
 while($res=mysql_fetch_array($req)){
 	
 	echo "<tr>";
echo "<td>".($res['REF'])."</td>";
echo "<td>".($res['designation'])."</td>";
echo "<td>".($res['qte'])."</td>";
echo "<td>".($res['un'])."</td>";
echo "<td>".($res['PU'])."</td>";
echo "<td>".($res['rem'])."</td>";
echo "<td>".($res['MONTANT'])."</td>";
echo "<td>".($res['tva'])."</td>";
echo "<td>".($res['puf'])."</td>";
echo "<td>".($res['rebah'])."</td>";

echo "</tr> <br />";


} 
echo"</table>";
echo"<button onclick='myFunction()' class='button'>Print</button>";
} 






?>