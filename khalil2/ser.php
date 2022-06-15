<style type="text/css">
	
	#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #DF0101;
  color: white;
}
.button {
  background-color: #f44336;
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
    $kh=$_POST['r'];
    $req=mysql_query("select * from mat where REF='$kh'");
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
echo"</table>";
echo "</tr>";
} 
echo"<button onclick='myFunction()' class='button'>Print</button>";
} 

?>