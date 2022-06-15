<head><meta charset="utf-8">
<style type="text/css">
	
	#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  
  padding: 2px;
  

}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #DF0101;
  color: white;
  opacity: 0.4;
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
p{
	 font-family: 'Roboto Mono', monospace;
}
.right {
  position: absolute;
  right: 0px;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}
.top{
      font-family: didot;
      font-size: 25px;
      font-weight: bold;
      line-height: 25px;
      text-transform: uppercase;
      font-family: arial;
    }
    img{
      width: 17px;
      height:17px;
      margin-top: 10px;
    }
    p{
      font-weight: bold;
      font-size: 15px;
     
      text-transform: uppercase;
      font-family: arial;
    }
    .ydk{
      margin-bottom: 500px; 
    }
    .up{
      text-transform: uppercase;
    }
    div.jektawa{
      font: 18px arial;
   
</style>
<script>
function myFunction() {
window.print();
}
</script>
</head>
<?php
mysql_connect("localhost", "root", "madara1998");
mysql_select_db("alimcenter");
$a1=$_POST['a1'];$m1=$_POST['m1'];
$a2=$_POST['a2'];$m2=$_POST['m2'];
$a3=$_POST['a3'];$m3=$_POST['m3'];
$a4=$_POST['a4'];$m4=$_POST['m4'];
$a5=$_POST['a5'];$m5=$_POST['m5'];
$a6=$_POST['a6'];$m6=$_POST['m6'];
$a7=$_POST['a7'];$m7=$_POST['m7'];
$a8=$_POST['a8'];$m8=$_POST['m8'];
$a9=$_POST['a9'];$m9=$_POST['m9'];
$a10=$_POST['a10'];$m10=$_POST['m10'];
$a11=$_POST['a11'];$m11=$_POST['m11'];
$a12=$_POST['a12'];$m12=$_POST['m12'];
$a13=$_POST['a13'];$m13=$_POST['m13'];
$a14=$_POST['a16'];$m14=$_POST['m16'];
$a15=$_POST['a17'];$m15=$_POST['m17'];
$a16=$_POST['a18'];$m16=$_POST['m18'];
//
$a17=$_POST['a19'];$m17=$_POST['m19'];
$a18=$_POST['a20'];$m18=$_POST['m20'];
$a19=$_POST['a21'];$m19=$_POST['m21'];
$a20=$_POST['a22'];$m20=$_POST['m22'];
//
$a21=$_POST['a23'];$m21=$_POST['m23'];
$a22=$_POST['a24'];$m22=$_POST['m24'];
$a23=$_POST['a25'];$m23=$_POST['m25'];
$a24=$_POST['a26'];$m24=$_POST['m26'];
$a25=$_POST['a27'];$m25=$_POST['m27'];
//
$a26=$_POST['a28'];$m26=$_POST['m28'];
$a27=$_POST['a29'];$m27=$_POST['m29'];
$a28=$_POST['a30'];$m28=$_POST['m30'];
//
$a29=$_POST['a31'];$m29=$_POST['m31'];
$a30=$_POST['a32'];$m30=$_POST['m32'];
$n1=$_POST['fname'];$n2=$_POST['lname'];$n3=$_POST['cd'];
$tagoption=$_POST['work'];

$khalil1=mysql_query("select * from client where nom='$n1'");
echo "<div class='ydk'";
if(mysql_num_rows($khalil1)==0){
 $khalil2=mysql_query("insert into client values ('$n1','','','$n2')");
 if($khalil2){
  $khali=mysql_query("select * from client where nom='$n1'");
while($kmar=mysql_fetch_array($khali)){

echo"<br /> <b><p>COMPTOIR D'ALUMINIUM TOP</p><p>Profilée & Accessoire en Aluminium <div class='right'><p>Code client: ".$kmar['code']." <br /> Nom Client : ".$n1." </br> MAT. fiscal :".$kmar['matfc']." <br /> KAIROUAN: 3100 <br /></p></div><br /><br /> Aluminium Center  Société  Farhani<br /> <br />Près de Mosquée Aaouania Rue Halab <br /> <br />Tel : 56087838 </p></b>";
}
}

}else if(mysql_num_rows($khalil1)!=0){


while($khalil3=mysql_fetch_array($khalil1)){

echo"<br /> <p class='top'>COMPTOIR D'ALUMINIUM TOP<b><p>Profilée & Accessoire en Aluminium</p><div class='right'><p>Code client: ".$khalil3['code']." <br /> Nom Client : ".$n1." </br> MAT. fiscal :".$khalil3['matfc']." <br /> KAIROUAN: 3100 <br /></p></div><p class='up'>rue hafouzz prés de Mosquée Aaouania <br />kairouan</p></p><img src='phone.ico'>Tel : 77305004  /  56087838<br /><br /> MF :1609609Q/B/M/000<br /><br /> CCB: </p></b></p>";

}

}



 
$fex=mysql_query("UPDATE facture set code=code+1  where nom='$tagoption'");
$fex2=mysql_query("select code from facture where nom='$tagoption'");
if($fex2){
  while($fex1=mysql_fetch_array($fex2)){
echo "<div class='jektawa'><b>".$_POST['work']." N° BL00".$fex1['code']."</b></div>";
}
}
echo "<br /> <br />";
echo "Facteur Date :" . @date("d/m/Y") . "<br /> <br />";


$req1=mysql_query("select * from mat where REF='$a1'");
$req2=mysql_query("select * from mat where REF='$a2'");
$req3=mysql_query("select * from mat where REF='$a3'");
$req4=mysql_query("select * from mat where REF='$a4'");
$req5=mysql_query("select * from mat where REF='$a5'");
$req6=mysql_query("select * from mat where REF='$a6'");
$req7=mysql_query("select * from mat where REF='$a7'");
$req8=mysql_query("select * from mat where REF='$a8'");
$req9=mysql_query("select * from mat where REF='$a9'");
$req10=mysql_query("select * from mat where REF='$a10'");
$req11=mysql_query("select * from mat where REF='$a11'");
$req12=mysql_query("select * from mat where REF='$a12'");
$req13=mysql_query("select * from mat where REF='$a13'");
$req14=mysql_query("select * from mat where REF='$a14'");
$req15=mysql_query("select * from mat where REF='$a15'");
$req16=mysql_query("select * from mat where REF='$a16'");
//
$req17=mysql_query("select * from mat where REF='$a17'");
$req18=mysql_query("select * from mat where REF='$a18'");
$req19=mysql_query("select * from mat where REF='$a19'");
$req20=mysql_query("select * from mat where REF='$a20'");
//
$req21=mysql_query("select * from mat where REF='$a21'");
$req22=mysql_query("select * from mat where REF='$a22'");
$req23=mysql_query("select * from mat where REF='$a23'");
$req24=mysql_query("select * from mat where REF='$a24'");
$req25=mysql_query("select * from mat where REF='$a25'");
//
$req26=mysql_query("select * from mat where REF='$a26'");
$req27=mysql_query("select * from mat where REF='$a27'");
$req28=mysql_query("select * from mat where REF='$a28'");
//
$req29=mysql_query("select * from mat where REF='$a29'");
$req30=mysql_query("select * from mat where REF='$a30'");

if (mysql_num_rows($req1)!=0 || 
  mysql_num_rows($req2)!=0 ||
   mysql_num_rows($req3)!=0 ||
 mysql_num_rows($req4)!=0 ||
  mysql_num_rows($req5)!=0 && 
  mysql_num_rows($req6)!=0 || 
  mysql_num_rows($req7)!=0 ||
   mysql_num_rows($req8)!=0 || 
   mysql_num_rows($req9)!=0 || 
   mysql_num_rows($req10)!=0|| 
  mysql_num_rows($req11)!=0 || 
mysql_num_rows($req12)!=0 ||
 mysql_num_rows($req13)!=0 || 
 mysql_num_rows($req14)!= 0 || 
 mysql_num_rows($req15)!= 0 || 
 mysql_num_rows($req16)!= 0 ||/**/ 
 mysql_num_rows($req17)!=0 || 
 mysql_num_rows($req18)!= 0 || 
 mysql_num_rows($req19)!= 0 || 
 mysql_num_rows($req20)!= 0 /**/ || 
 mysql_num_rows($req21)!= 0 || 
 mysql_num_rows($req22)!= 0 || 
 mysql_num_rows($req23)!= 0 || 
 mysql_num_rows($req24)!= 0 || 
 mysql_num_rows($req25)!= 0 || 
  mysql_num_rows($req26)!= 0 ||
   mysql_num_rows($req27)!= 0 ||
   mysql_num_rows($req28)!= 0 ||
   mysql_num_rows($req29)!= 0 ||
   mysql_num_rows($req30)!= 0 
){
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

 while($res1=mysql_fetch_array($req1)){
 	$prix=$m1*$res1['PU'];
  $test4= (string) $prix;
  $test5 = (string) $res1['PU'];
	$que=mysql_query("UPDATE mat set qte=qte-$m1 where REF='$a1'");
        $soum=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix where REF='$a1'");
        $rebah=($prix-(($res1['puf'])*$m1));
        $reb=mysql_query("UPDATE mat set BICE=BICE+$rebah where REF='$a1'");
 	if($que && $soum){
 	echo "<tr>";
echo "<td>".($res1['REF'])."</td>";
echo "<td>".($res1['designation'])."</td>";
echo "<td>".$m1."</td>";
echo "<td>".($res1['UN'])."</td>"; 
//bar prix
if(strpos(".",$test5)==0 && strlen($test5)==2){    
  echo "<td>0,".$test5."</td>";
  }
else if(strpos(".",$test5)==0 && strlen($test5)==3){    
  echo "<td>0,".$test5."</td>";
}
else if(strpos(".",$test5)==0 && strlen($test5)==4){
  echo "<td>".$test5[0].",".$test5[1].$test5[2].$test5[3]."</td>";
}else if(strpos(".",$test5)==0 && strlen($test5)==5){
  echo "<td>".$test5[0].$test5[1].",".$test5[2].$test5[3].$test5[4]."</td>";
}else if(strpos(".",$test5)==0 && strlen($test5)==6){
  echo "<td>".$test5[0].$test5[1].$test5[2]."<b>,</b>".$test5[3].$test5[4].$test5[5]."</td>";
}else if(strpos(".",$test5)==0 && strlen($test5)==7){
  echo "<td>".$test5[0].",".$test5[1].$test5[2].$test5[3].",".$test5[4].$test5[5].$test5[6]."</td>";
}else if(strpos(".",$test5)==0 && strlen($test5)==8){
  echo "<td>".$test5[0].$test5[1].",".$test5[2].$test5[3].$test5[4].",".$test5[5].$test5[6].$test5[7]."</td>";
}




echo "<td>".($res1['rem'])."</td>";

if(strpos(".",$test4)==0 && strlen($test4)==3){    
  echo "<td>0,".$test4."</td>";
}
else if(strpos(".",$test4)==0 && strlen($test4)==4){
  echo "<td>".$test4[0].",".$test4[1].$test4[2].$test4[3]."</td>";
}else if(strpos(".",$test4)==0 && strlen($test4)==5){
  echo "<td>".$test4[0].$test4[1].",".$test4[2].$test4[3].$test4[4]."</td>";
}else if(strpos(".",$test4)==0 && strlen($test4)==6){
  echo "<td>".$test4[0].$test4[1].$test4[2]."<b>,</b>".$test4[3].$test4[4].$test4[5]."</td>";
}else if(strpos(".",$test4)==0 && strlen($test4)==7){
  echo "<td>".$test4[0].",".$test4[1].$test4[2].$test4[3].",".$test4[4].$test4[5].$test4[6]."</td>";
}else if(strpos(".",$test4)==0 && strlen($test4)==8){
  echo "<td>".$test4[0].$test4[1].",".$test4[2].$test4[3].$test4[4].",".$test4[5].$test4[6].$test4[7]."</td>";
}


echo "<td>".($res1['tva'])."</td>";
echo "</tr>";

} 
}
 while($res2=mysql_fetch_array($req2)){
  $prix2=$m2*$res2['PU'];
  $test6= (string) $prix2;
  $test7 = (string) $res2['PU'];
  $que2=mysql_query("UPDATE mat set qte=qte-$m2 where REF='$a2'");
        $soum2=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix2 where REF='$a2'");
        $rebah2=($prix2-(($res2['puf'])*$m2));
        $reb2=mysql_query("UPDATE mat set BICE=BICE+$rebah2 where REF='$a2'");
  if($que2 && $soum2){
  echo "<tr>";
echo "<td>".($res2['REF'])."</td>";
echo "<td>".($res2['designation'])."</td>";
echo "<td>".$m2."</td>";
echo "<td>".($res2['UN'])."</td>"; 
//bar prix
if(strpos(".",$test7)==0 && strlen($test7)==2){    
  echo "<td>0,".$test7."</td>";
  }
else if(strpos(".",$test7)==0 && strlen($test7)==3){    
  echo "<td>0,".$test7."</td>";
}
else if(strpos(".",$test7)==0 && strlen($test7)==4){
  echo "<td>".$test7[0].",".$test7[1].$test7[2].$test7[3]."</td>";
}else if(strpos(".",$test7)==0 && strlen($test7)==5){
  echo "<td>".$test7[0].$test7[1].",".$test7[2].$test7[3].$test7[4]."</td>";
}else if(strpos(".",$test7)==0 && strlen($test7)==6){
  echo "<td>".$test7[0].$test7[1].$test7[2]."<b>,</b>".$test7[3].$test7[4].$test7[5]."</td>";
}else if(strpos(".",$test7)==0 && strlen($test7)==7){
  echo "<td>".$test7[0].",".$test7[1].$test7[2].$test7[3].",".$test7[4].$test7[5].$test7[6]."</td>";
}else if(strpos(".",$test7)==0 && strlen($test7)==8){
  echo "<td>".$test7[0].$test7[1].",".$test7[2].$test7[3].$test7[4].",".$test7[5].$test7[6].$test7[7]."</td>";
}




echo "<td>".($res2['rem'])."</td>";

if(strpos(".",$test6)==0 && strlen($test6)==3){    
  echo "<td>0,".$test6."</td>";
}
else if(strpos(".",$test6)==0 && strlen($test6)==4){
  echo "<td>".$test6[0].",".$test6[1].$test6[2].$test6[3]."</td>";
}else if(strpos(".",$test6)==0 && strlen($test6)==5){
  echo "<td>".$test6[0].$test6[1].",".$test6[2].$test6[3].$test6[4]."</td>";
}else if(strpos(".",$test6)==0 && strlen($test6)==6){
  echo "<td>".$test6[0].$test6[1].$test6[2]."<b>,</b>".$test6[3].$test6[4].$test6[5]."</td>";
}else if(strpos(".",$test6)==0 && strlen($test6)==7){
  echo "<td>".$test6[0].",".$test6[1].$test6[2].$test6[3].",".$test6[4].$test6[5].$test6[6]."</td>";
}else if(strpos(".",$test6)==0 && strlen($test6)==8){
  echo "<td>".$test6[0].$test6[1].",".$test6[2].$test6[3].$test6[4].",".$test6[5].$test6[6].$test6[7]."</td>";
}


echo "<td>".($res2['tva'])."</td>";
echo "</tr>";

} 
}
//
 while($res3=mysql_fetch_array($req3)){
 	$prix3=$m3*$res3['PU'];
  $test9 = (string) $res3['PU'];
   $test8 = (string) $prix3;
 	$que3=mysql_query("UPDATE mat set qte=qte-$m3 where REF='$a3'");
  $soum3=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix3 where REF='$a3'");
  $rebah3=($prix3-(($res3['puf'])*$m3));
$reb3=mysql_query("UPDATE mat set BICE=BICE+$rebah3 where REF='$a3'");
 	if($que3 && $soum3){
 	echo "<tr>";
echo "<td>".($res3['REF'])."</td>";
echo "<td>".($res3['designation'])."</td>";
echo "<td>".$m3."</td>";
echo "<td>".($res3['UN'])."</td>";
//
if(strpos(".",$test9)==0 && strlen($test9)==2){    
  echo "<td>0,".$test9."</td>";
}
else if(strpos(".",$test9)==0 && strlen($test9)==3){    
  echo "<td>0,".$test9."</td>";
}
else if(strpos(".",$test9)==0 && strlen($test9)==4){
  echo "<td>".$test9[0].",".$test9[1].$test9[2].$test9[3]."</td>";
}else if(strpos(".",$test9)==0 && strlen($test9)==5){
  echo "<td>".$test9[0].$test9[1].",".$test9[2].$test9[3].$test9[4]."</td>";
}else if(strpos(".",$test9)==0 && strlen($test9)==6){
  echo "<td>".$test9[0].$test9[1].$test9[2]."<b>,</b>".$test9[3].$test9[4].$test9[5]."</td>";
}else if(strpos(".",$test9)==0 && strlen($test9)==7){
  echo "<td>".$test9[0].",".$test9[1].$test9[2].$test9[3].",".$test9[4].$test9[5].$test9[6]."</td>";
}else if(strpos(".",$test9)==0 && strlen($test9)==8){
  echo "<td>".$test9[0].$test9[1].",".$test9[2].$test9[3].$test9[4].",".$test9[5].$test9[6].$test9[7]."</td>";
}

//
echo "<td>".($res3['rem'])."</td>";
//
if(strpos(".",$test8)==0 && strlen($test8)==3){    
  echo "<td>0,".$test8."</td>";
}
else if(strpos(".",$test8)==0 && strlen($test8)==4){
  echo "<td>".$test8[0].",".$test8[1].$test8[2].$test8[3]."</td>";
}else if(strpos(".",$test8)==0 && strlen($test8)==5){
  echo "<td>".$test8[0].$test8[1].",".$test8[2].$test8[3].$test8[4]."</td>";
}else if(strpos(".",$test8)==0 && strlen($test8)==6){
  echo "<td>".$test8[0].$test8[1].$test8[2]."<b>,</b>".$test8[3].$test8[4].$test8[5]."</td>";
}else if(strpos(".",$test8)==0 && strlen($test8)==7){
  echo "<td>".$test8[0].",".$test8[1].$test8[2].$test8[3].",".$test8[4].$test8[5].$test8[6]."</td>";
}else if(strpos(".",$test8)==0 && strlen($test8)==8){
  echo "<td>".$test8[0].$test8[1].",".$test8[2].$test8[3].$test8[4].",".$test8[5].$test8[6].$test8[7]."</td>";
}
//
echo "<td>".($res3['tva'])."</td>";

echo "</tr>";
} 
}
 while($res4=mysql_fetch_array($req4)){
 	$prix4=$m4*$res4['PU'];
  $test10= (string) $res4['PU'];
  $test11= (string) $prix4;
 	$que4=mysql_query("UPDATE mat set qte=qte-$m4 where REF='$a4'");
  $soum4=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix4 where REF='$a4'");
  $rebah4=($prix4-(($res4['puf'])*$m4));
  $reb4=mysql_query("UPDATE mat set BICE=BICE+$rebah4 where REF='$a4'");
 	if($que4 && $soum4){
 	echo "<tr>";
echo "<td>".($res4['REF'])."</td>";
echo "<td>".($res4['designation'])."</td>";
echo "<td>".$m4."</td>";
echo "<td>".($res4['UN'])."</td>";
//
if(strpos(".",$test10)==0 && strlen($test10)==2){    
  echo "<td>0,".$test10."</td>";
}
else if(strpos(".",$test10)==0 && strlen($test10)==3){    
  echo "<td>0,".$test10."</td>";
}
else if(strpos(".",$test10)==0 && strlen($test10)==4){
  echo "<td>".$test10[0].",".$test10[1].$test10[2].$test10[3]."</td>";
}else if(strpos(".",$test10)==0 && strlen($test10)==5){
  echo "<td>".$test10[0].$test10[1].",".$test10[2].$test10[3].$test10[4]."</td>";
}else if(strpos(".",$test10)==0 && strlen($test10)==6){
  echo "<td>".$test10[0].$test10[1].$test10[2]."<b>,</b>".$test10[3].$test10[4].$test10[5]."</td>";
}else if(strpos(".",$test10)==0 && strlen($test10)==7){
  echo "<td>".$test10[0].",".$test10[1].$test10[2].$test10[3].",".$test10[4].$test10[5].$test10[6]."</td>";
}else if(strpos(".",$test10)==0 && strlen($test10)==8){
  echo "<td>".$test10[0].$test10[1].",".$test10[2].$test10[3].$test10[4].",".$test10[5].$test10[6].$test10[7]."</td>";
}

//
echo "<td>".($res4['rem'])."</td>";
//
if(strpos(".",$test11)==0 && strlen($test11)==3){    
  echo "<td>0,".$test11."</td>";
}
else if(strpos(".",$test11)==0 && strlen($test11)==4){
  echo "<td>".$test11[0].",".$test11[1].$test11[2].$test11[3]."</td>";
}else if(strpos(".",$test11)==0 && strlen($test11)==5){
  echo "<td>".$test11[0].$test11[1].",".$test11[2].$test11[3].$test11[4]."</td>";
}else if(strpos(".",$test11)==0 && strlen($test11)==6){
  echo "<td>".$test11[0].$test11[1].$test11[2]."<b>,</b>".$test11[3].$test11[4].$test11[5]."</td>";
}else if(strpos(".",$test11)==0 && strlen($test11)==7){
  echo "<td>".$test11[0].",".$test11[1].$test11[2].$test11[3].",".$test11[4].$test11[5].$test11[6]."</td>";
}else if(strpos(".",$test11)==0 && strlen($test11)==8){
  echo "<td>".$test11[0].$test11[1].",".$test11[2].$test11[3].$test11[4].",".$test11[5].$test11[6].$test11[7]."</td>";
}
//
echo "<td>".($res4['tva'])."</td>";

echo "</tr>";
} 
}
 while($res5=mysql_fetch_array($req5)){
 	$prix5=$m5*$res5['PU'];
  $test12= (string) $prix5;
  $test13= (string) $res5['PU'];
  $que5=mysql_query("UPDATE mat set qte=qte-$m5 where REF='$a5'");
  $soum5=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix5 where REF='$a5'");
  $rebah5=($prix5-(($res5['puf'])*$m5));
  $reb5=mysql_query("UPDATE mat set BICE=BICE+$rebah5 where REF='$a5'");
  if($que5 && $soum5){
 	echo "<tr>";
echo "<td>".($res5['REF'])."</td>";
echo "<td>".($res5['designation'])."</td>";
echo "<td>".$m5."</td>";
echo "<td>".($res5['UN'])."</td>";
//
 if(strpos(".",$test13)==0 && strlen($test13)==2){    
  echo "<td>0,".$test13."</td>";
}
else if(strpos(".",$test13)==0 && strlen($test13)==3){    
  echo "<td>0,".$test13."</td>";
}
else if(strpos(".",$test13)==0 && strlen($test13)==4){
  echo "<td>".$test13[0].",".$test13[1].$test13[2].$test13[3]."</td>";
}else if(strpos(".",$test13)==0 && strlen($test13)==5){
  echo "<td>".$test13[0].$test13[1].",".$test13[2].$test13[3].$test13[4]."</td>";
}else if(strpos(".",$test13)==0 && strlen($test13)==6){
  echo "<td>".$test13[0].$test13[1].$test13[2]."<b>,</b>".$test13[3].$test13[4].$test13[5]."</td>";
}else if(strpos(".",$test13)==0 && strlen($test13)==7){
  echo "<td>".$test13[0].",".$test13[1].$test13[2].$test13[3].",".$test13[4].$test13[5].$test13[6]."</td>";
}else if(strpos(".",$test13)==0 && strlen($test13)==8){
  echo "<td>".$test13[0].$test13[1].",".$test13[2].$test13[3].$test13[4].",".$test13[5].$test13[6].$test13[7]."</td>";
}

//

echo "<td>".($res5['rem'])."</td>";
//

if(strpos(".",$test12)==0 && strlen($test12)==3){    
  echo "<td>0,".$test12."</td>";
}
else if(strpos(".",$test12)==0 && strlen($test12)==4){
  echo "<td>".$test12[0].",".$test12[1].$test12[2].$test12[3]."</td>";
}else if(strpos(".",$test12)==0 && strlen($test12)==5){
  echo "<td>".$test12[0].$test12[1].",".$test12[2].$test12[3].$test12[4]."</td>";
}else if(strpos(".",$test12)==0 && strlen($test12)==6){
  echo "<td>".$test12[0].$test12[1].$test12[2]."<b>,</b>".$test12[3].$test12[4].$test12[5]."</td>";
}else if(strpos(".",$test12)==0 && strlen($test12)==7){
  echo "<td>".$test12[0].",".$test12[1].$test12[2].$test12[3].",".$test12[4].$test12[5].$test12[6]."</td>";
}else if(strpos(".",$test12)==0 && strlen($test12)==8){
  echo "<td>".$test12[0].$test12[1].",".$test12[2].$test12[3].$test12[4].",".$test12[5].$test12[6].$test12[7]."</td>";
}

//
echo "<td>".($res5['tva'])."</td>";

echo "</tr>";
} 
}
 while($res6=mysql_fetch_array($req6)){
 	$prix6=$m6*$res6['PU'];
  $test14= (string) $res6['PU'];
  $test15= (string) $prix6;
  $que6=mysql_query("UPDATE mat set qte=qte-$m6 where REF='$a6'");
  $soum6=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix6 where REF='$a6'");
  $rebah6=($prix6-(($res6['puf'])*$m6));
  $reb6=mysql_query("UPDATE mat set BICE=BICE+$rebah6 where REF='$a6'");
  if($que6 && $soum6){ 
 	echo "<tr>";
echo "<td>".($res6['REF'])."</td>";
echo "<td>".($res6['designation'])."</td>";
echo "<td>".$m6."</td>";
echo "<td>".($res6['UN'])."</td>";
//
if(strpos(".",$test14)==0 && strlen($test14)==2){    
  echo "<td>0,".$test14."</td>";
}
else if(strpos(".",$test14)==0 && strlen($test14)==3){    
  echo "<td>0,".$test14."</td>";
}
else if(strpos(".",$test14)==0 && strlen($test14)==4){
  echo "<td>".$test14[0].",".$test14[1].$test14[2].$test14[3]."</td>";
}else if(strpos(".",$test14)==0 && strlen($test14)==5){
  echo "<td>".$test14[0].$test14[1].",".$test14[2].$test14[3].$test14[4]."</td>";
}else if(strpos(".",$test14)==0 && strlen($test14)==6){
  echo "<td>".$test14[0].$test14[1].$test14[2]."<b>,</b>".$test14[3].$test14[4].$test14[5]."</td>";
}else if(strpos(".",$test14)==0 && strlen($test14)==7){
  echo "<td>".$test14[0].",".$test14[1].$test14[2].$test14[3].",".$test14[4].$test14[5].$test14[6]."</td>";
}else if(strpos(".",$test14)==0 && strlen($test14)==8){
  echo "<td>".$test14[0].$test14[1].",".$test14[2].$test14[3].$test14[4].",".$test14[5].$test14[6].$test14[7]."</td>";
}

//
echo "<td>".($res6['rem'])."</td>";
//

if(strpos(".",$test15)==0 && strlen($test15)==3){    
  echo "<td>0,".$test15."</td>";
}
else if(strpos(".",$test15)==0 && strlen($test15)==4){
  echo "<td>".$test15[0].",".$test15[1].$test15[2].$test15[3]."</td>";
}else if(strpos(".",$test15)==0 && strlen($test15)==5){
  echo "<td>".$test15[0].$test15[1].",".$test15[2].$test15[3].$test15[4]."</td>";
}else if(strpos(".",$test15)==0 && strlen($test15)==6){
  echo "<td>".$test15[0].$test15[1].$test15[2]."<b>,</b>".$test15[3].$test15[4].$test15[5]."</td>";
}else if(strpos(".",$test15)==0 && strlen($test15)==7){
  echo "<td>".$test15[0].",".$test15[1].$test15[2].$test15[3].",".$test15[4].$test15[5].$test15[6]."</td>";
}else if(strpos(".",$test15)==0 && strlen($test15)==8){
  echo "<td>".$test15[0].$test15[1].",".$test15[2].$test15[3].$test15[4].",".$test15[5].$test15[6].$test15[7]."</td>";
}

//
echo "<td>".($res6['tva'])."</td>";

echo "</tr>";
} 
}
 while($res7=mysql_fetch_array($req7)){
  $prix7=$m7*$res7['PU'];
  $test16= (string) $prix7;
  $test17 = (string) $res7['PU'];
  $que7=mysql_query("UPDATE mat set qte=qte-$m7 where REF='$a7'");
        $soum7=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix7 where REF='$a7'");
        $rebah7=($prix7-(($res7['puf'])*$m7));
        $reb7=mysql_query("UPDATE mat set BICE=BICE+$rebah7 where REF='$a7'");
  if($que7 && $soum7){
  echo "<tr>";
echo "<td>".($res7['REF'])."</td>";
echo "<td>".($res7['designation'])."</td>";
echo "<td>".$m7."</td>";
echo "<td>".($res7['UN'])."</td>"; 
//bar prix
if(strpos(".",$test17)==0 && strlen($test17)==2){    
  echo "<td>0,".$test17."</td>";
  }
else if(strpos(".",$test17)==0 && strlen($test17)==3){    
  echo "<td>0,".$test17."</td>";
}
else if(strpos(".",$test17)==0 && strlen($test17)==4){
  echo "<td>".$test17[0].",".$test17[1].$test17[2].$test17[3]."</td>";
}else if(strpos(".",$test17)==0 && strlen($test17)==5){
  echo "<td>".$test17[0].$test17[1].",".$test17[2].$test17[3].$test17[4]."</td>";
}else if(strpos(".",$test17)==0 && strlen($test17)==6){
  echo "<td>".$test17[0].$test17[1].$test17[2]."<b>,</b>".$test17[3].$test17[4].$test17[5]."</td>";
}else if(strpos(".",$test17)==0 && strlen($test17)==7){
  echo "<td>".$test17[0].",".$test17[1].$test17[2].$test17[3].",".$test17[4].$test17[5].$test17[6]."</td>";
}else if(strpos(".",$test17)==0 && strlen($test17)==8){
  echo "<td>".$test17[0].$test17[1].",".$test17[2].$test17[3].$test17[4].",".$test17[5].$test17[6].$test17[7]."</td>";
}




echo "<td>".($res7['rem'])."</td>";

if(strpos(".",$test16)==0 && strlen($test16)==3){    
  echo "<td>0,".$test16."</td>";
}
else if(strpos(".",$test16)==0 && strlen($test16)==4){
  echo "<td>".$test16[0].",".$test16[1].$test16[2].$test16[3]."</td>";
}else if(strpos(".",$test16)==0 && strlen($test16)==5){
  echo "<td>".$test16[0].$test16[1].",".$test16[2].$test16[3].$test16[4]."</td>";
}else if(strpos(".",$test16)==0 && strlen($test16)==6){
  echo "<td>".$test16[0].$test16[1].$test16[2]."<b>,</b>".$test16[3].$test16[4].$test16[5]."</td>";
}else if(strpos(".",$test16)==0 && strlen($test16)==7){
  echo "<td>".$test16[0].",".$test16[1].$test16[2].$test16[3].",".$test16[4].$test16[5].$test16[6]."</td>";
}else if(strpos(".",$test16)==0 && strlen($test16)==8){
  echo "<td>".$test16[0].$test16[1].",".$test16[2].$test16[3].$test16[4].",".$test16[5].$test16[6].$test16[7]."</td>";
}


echo "<td>".($res7['tva'])."</td>";
echo "</tr>";

} 
}
 while($res8=mysql_fetch_array($req8)){
  $prix8=$m8*$res8['PU'];
  $test18 = (string) $prix8;
  $test19 = (string) $res8['PU'];
  $que8=mysql_query("UPDATE mat set qte=qte-$m8 where REF='$a8'");
  $soum8=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix8 where REF='$a8'");
  $rebah8=($prix8-(($res8['puf'])*$m8));
  $reb8=mysql_query("UPDATE mat set BICE=BICE+$rebah8 where REF='$a8'");
  if($que8 && $soum8){
 	echo "<tr>";
echo "<td>".($res8['REF'])."</td>";
echo "<td>".($res8['designation'])."</td>";
echo "<td>".$m8."</td>";
echo "<td>".($res8['UN'])."</td>";
//
if(strpos(".",$test19)==0 && strlen($test19)==2){    
  echo "<td>0,".$test19."</td>";
}
else if(strpos(".",$test19)==0 && strlen($test19)==3){    
  echo "<td>0,".$test19."</td>";
}
else if(strpos(".",$test19)==0 && strlen($test19)==4){
  echo "<td>".$test19[0].",".$test19[1].$test19[2].$test19[3]."</td>";
}else if(strpos(".",$test19)==0 && strlen($test19)==5){
  echo "<td>".$test19[0].$test19[1].",".$test19[2].$test19[3].$test19[4]."</td>";
}else if(strpos(".",$test19)==0 && strlen($test19)==6){
  echo "<td>".$test19[0].$test19[1].$test19[2]."<b>,</b>".$test19[3].$test19[4].$test19[5]."</td>";
}else if(strpos(".",$test19)==0 && strlen($test19)==7){
  echo "<td>".$test19[0].",".$test19[1].$test19[2].$test19[3].",".$test19[4].$test19[5].$test19[6]."</td>";
}else if(strpos(".",$test19)==0 && strlen($test19)==8){
  echo "<td>".$test19[0].$test19[1].",".$test19[2].$test19[3].$test19[4].",".$test19[5].$test19[6].$test19[7]."</td>";
}


//
echo "<td>".($res8['rem'])."</td>";
//

if(strpos(".",$test18)==0 && strlen($test18)==3){    
  echo "<td>0,".$test18."</td>";
}
else if(strpos(".",$test18)==0 && strlen($test18)==4){
  echo "<td>".$test18[0].",".$test18[1].$test18[2].$test18[3]."</td>";
}else if(strpos(".",$test18)==0 && strlen($test18)==5){
  echo "<td>".$test18[0].$test18[1].",".$test18[2].$test18[3].$test18[4]."</td>";
}else if(strpos(".",$test18)==0 && strlen($test18)==6){
  echo "<td>".$test18[0].$test18[1].$test18[2]."<b>,</b>".$test18[3].$test18[4].$test18[5]."</td>";
}else if(strpos(".",$test18)==0 && strlen($test18)==7){
  echo "<td>".$test18[0].",".$test18[1].$test18[2].$test18[3].",".$test18[4].$test18[5].$test18[6]."</td>";
}else if(strpos(".",$test18)==0 && strlen($test18)==8){
  echo "<td>".$test18[0].$test18[1].",".$test18[2].$test18[3].$test18[4].",".$test18[5].$test18[6].$test18[7]."</td>";
}

//
echo "<td>".($res8['tva'])."</td>";

echo "</tr>";
} 
}
 while($res9=mysql_fetch_array($req9)){
 	$prix9=$m9*$res9['PU'];
  $test20 = (string) $prix9;
  $test21 = (string) $res9['PU'] ;

  $que9=mysql_query("UPDATE mat set qte=qte-$m9 where REF='$a9'");
  $soum9=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix9 where REF='$a9'");
  $rebah9=($prix9-(($res9['puf'])*$m9));
  $reb9=mysql_query("UPDATE mat set BICE=BICE+$rebah9 where REF='$a9'");
  if($que9 && $soum9){
 	echo "<tr>";
echo "<td>".($res9['REF'])."</td>";
echo "<td>".($res9['designation'])."</td>";
echo "<td>".$m9."</td>";
echo "<td>".($res9['UN'])."</td>";
//
if(strpos(".",$test21)==0 && strlen($test21)==2){    
  echo "<td>0,".$test21."</td>";
}
else if(strpos(".",$test21)==0 && strlen($test21)==3){    
  echo "<td>0,".$test21."</td>";
}
else if(strpos(".",$test21)==0 && strlen($test21)==4){
  echo "<td>".$test21[0].",".$test21[1].$test21[2].$test21[3]."</td>";
}else if(strpos(".",$test21)==0 && strlen($test21)==5){
  echo "<td>".$test21[0].$test21[1].",".$test21[2].$test21[3].$test21[4]."</td>";
}else if(strpos(".",$test21)==0 && strlen($test21)==6){
  echo "<td>".$test21[0].$test21[1].$test21[2]."<b>,</b>".$test21[3].$test21[4].$test21[5]."</td>";
}else if(strpos(".",$test21)==0 && strlen($test21)==7){
  echo "<td>".$test21[0].",".$test21[1].$test21[2].$test21[3].",".$test21[4].$test21[5].$test21[6]."</td>";
}else if(strpos(".",$test21)==0 && strlen($test21)==8){
  echo "<td>".$test5[0].$test21[1].",".$test21[2].$test21[3].$test21[4].",".$test21[5].$test21[6].$test21[7]."</td>";
}

//
echo "<td>".($res9['rem'])."</td>";
//

if(strpos(".",$test20)==0 && strlen($test20)==3){    
  echo "<td>0,".$test20."</td>";
}
else if(strpos(".",$test20)==0 && strlen($test20)==4){
  echo "<td>".$test20[0].",".$test20[1].$test20[2].$test20[3]."</td>";
}else if(strpos(".",$test20)==0 && strlen($test20)==5){
  echo "<td>".$test20[0].$test20[1].",".$test20[2].$test20[3].$test20[4]."</td>";
}else if(strpos(".",$test20)==0 && strlen($test20)==6){
  echo "<td>".$test20[0].$test20[1].$test20[2]."<b>,</b>".$test20[3].$test20[4].$test20[5]."</td>";
}else if(strpos(".",$test20)==0 && strlen($test20)==7){
  echo "<td>".$test20[0].",".$test20[1].$test20[2].$test20[3].",".$test20[4].$test20[5].$test20[6]."</td>";
}else if(strpos(".",$test20)==0 && strlen($test20)==8){
  echo "<td>".$test20[0].$test20[1].",".$test20[2].$test20[3].$test20[4].",".$test20[5].$test20[6].$test20[7]."</td>";
}

//
echo "<td>".($res9['tva'])."</td>";

echo "</tr>";
} 
}
 while($res10=mysql_fetch_array($req10)){
 	$prix10=$m10*$res10['PU'];
  $test22= (string) $prix10;
  $test23= (string) $res10['PU'];
  $que10=mysql_query("UPDATE mat set qte=qte-$m10 where REF='$a10'");
  $soum10=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix10 where REF='$a10'");
  $rebah10=($prix10-(($res10['puf'])*$m10));
  $reb10=mysql_query("UPDATE mat set BICE=BICE+$rebah10 where REF='$a10'");
  if($que10 && $soum10){
 	echo "<tr>";
echo "<td>".($res10['REF'])."</td>";
echo "<td>".($res10['designation'])."</td>";
echo "<td>".$m10."</td>";
echo "<td>".($res10['UN'])."</td>";
//
if(strpos(".",$test23)==0 && strlen($test23)==2){    
  echo "<td>0,".$test23."</td>";
}
else if(strpos(".",$test23)==0 && strlen($test23)==3){    
  echo "<td>0,".$test23."</td>";
}
else if(strpos(".",$test23)==0 && strlen($test23)==4){
  echo "<td>".$test23[0].",".$test23[1].$test23[2].$test23[3]."</td>";
}else if(strpos(".",$test23)==0 && strlen($test23)==5){
  echo "<td>".$test23[0].$test23[1].",".$test23[2].$test23[3].$test23[4]."</td>";
}else if(strpos(".",$test23)==0 && strlen($test23)==6){
  echo "<td>".$test23[0].$test23[1].$test23[2]."<b>,</b>".$test23[3].$test23[4].$test23[5]."</td>";
}else if(strpos(".",$test23)==0 && strlen($test23)==7){
  echo "<td>".$test23[0].",".$test23[1].$test23[2].$test23[3].",".$test23[4].$test23[5].$test23[6]."</td>";
}else if(strpos(".",$test23)==0 && strlen($test23)==8){
  echo "<td>".$test23[0].$test23[1].",".$test23[2].$test23[3].$test23[4].",".$test23[5].$test23[6].$test23[7]."</td>";
}

//
echo "<td>".($res10['rem'])."</td>";
//

if(strpos(".",$test22)==0 && strlen($test22)==3){    
  echo "<td>0,".$test22."</td>";
}
else if(strpos(".",$test22)==0 && strlen($test22)==4){
  echo "<td>".$test22[0].",".$test22[1].$test22[2].$test22[3]."</td>";
}else if(strpos(".",$test22)==0 && strlen($test22)==5){
  echo "<td>".$test22[0].$test22[1].",".$test22[2].$test22[3].$test22[4]."</td>";
}else if(strpos(".",$test22)==0 && strlen($test22)==6){
  echo "<td>".$test22[0].$test22[1].$test22[2]."<b>,</b>".$test22[3].$test22[4].$test22[5]."</td>";
}else if(strpos(".",$test22)==0 && strlen($test22)==7){
  echo "<td>".$test22[0].",".$test22[1].$test22[2].$test22[3].",".$test22[4].$test22[5].$test22[6]."</td>";
}else if(strpos(".",$test22)==0 && strlen($test22)==8){
  echo "<td>".$test22[0].$test22[1].",".$test22[2].$test22[3].$test22[4].",".$test22[5].$test22[6].$test22[7]."</td>";
}

//
echo "<td>".($res10['tva'])."</td>";

echo "</tr>";
} 
}
 while($res11=mysql_fetch_array($req11)){
 	$prix11=$m11*$res11['PU'];
  $test25= (string) $prix11;
  $test24= (string) $res11['PU'];
 	$que11=mysql_query("UPDATE mat set qte=qte-$m11 where REF='$a11'");
  $soum11=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix11 where REF='$a11'");
  $rebah11=($prix11-(($res11['puf'])*$m11));
  $reb11=mysql_query("UPDATE mat set BICE=BICE+$rebah11 where REF='$a11'");
  if($que11 && $soum11){
  echo "<tr>";
echo "<td>".($res11['REF'])."</td>";
echo "<td>".($res11['designation'])."</td>";
echo "<td>".$m11."</td>";
echo "<td>".($res11['UN'])."</td>";
//
if(strpos(".",$test24)==0 && strlen($test24)==2){    
  echo "<td>0,".$test24."</td>";
}
else if(strpos(".",$test24)==0 && strlen($test24)==3){    
  echo "<td>0,".$test24."</td>";
}
else if(strpos(".",$test24)==0 && strlen($test24)==4){
  echo "<td>".$test24[0].",".$test24[1].$test24[2].$test24[3]."</td>";
}else if(strpos(".",$test24)==0 && strlen($test24)==5){
  echo "<td>".$test24[0].$test24[1].",".$test24[2].$test24[3].$test24[4]."</td>";
}else if(strpos(".",$test24)==0 && strlen($test24)==6){
  echo "<td>".$test24[0].$test24[1].$test24[2]."<b>,</b>".$test24[3].$test24[4].$test24[5]."</td>";
}else if(strpos(".",$test24)==0 && strlen($test24)==7){
  echo "<td>".$test24[0].",".$test24[1].$test24[2].$test24[3].",".$test24[4].$test24[5].$test24[6]."</td>";
}else if(strpos(".",$test24)==0 && strlen($test24)==8){
  echo "<td>".$test24[0].$test24[1].",".$test24[2].$test24[3].$test24[4].",".$test24[5].$test24[6].$test24[7]."</td>";
}

//
echo "<td>".($res11['rem'])."</td>";
//

if(strpos(".",$test25)==0 && strlen($test25)==3){    
  echo "<td>0,".$test25."</td>";
}
else if(strpos(".",$test25)==0 && strlen($test25)==4){
  echo "<td>".$test25[0].",".$test25[1].$test25[2].$test25[3]."</td>";
}else if(strpos(".",$test25)==0 && strlen($test25)==5){
  echo "<td>".$test25[0].$test25[1].",".$test25[2].$test25[3].$test25[4]."</td>";
}else if(strpos(".",$test25)==0 && strlen($test25)==6){
  echo "<td>".$test25[0].$test25[1].$test25[2]."<b>,</b>".$test25[3].$test25[4].$test25[5]."</td>";
}else if(strpos(".",$test25)==0 && strlen($test25)==7){
  echo "<td>".$test25[0].",".$test25[1].$test25[2].$test25[3].",".$test25[4].$test25[5].$test25[6]."</td>";
}else if(strpos(".",$test25)==0 && strlen($test25)==8){
  echo "<td>".$test25[0].$test25[1].",".$test25[2].$test25[3].$test25[4].",".$test25[5].$test25[6].$test25[7]."</td>";
}

//
echo "<td>".($res11['tva'])."</td>";

echo "</tr>";
} 
}
 while($res12=mysql_fetch_array($req12)){
 	$prix12=$m12*$res12['PU'];
 	$test26= (string) $res12['PU'];
  $test27= (string) $prix12;
  $que12=mysql_query("UPDATE mat set qte=qte-$m12 where REF='$a12'");
  $soum12=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix12 where REF='$a12'");
  $rebah12=($prix12-(($res12['puf'])*$m12));
  $reb12=mysql_query("UPDATE mat set BICE=BICE+$rebah12 where REF='$a12'");
  if($que12 && $soum12){
  echo "<tr>";
echo "<td>".($res12['REF'])."</td>";
echo "<td>".($res12['designation'])."</td>";
echo "<td>".$m12."</td>";
echo "<td>".($res12['UN'])."</td>";
// 
if(strpos(".",$test26)==0 && strlen($test26)==2){    
  echo "<td>0,".$test26."</td>";
}
else if(strpos(".",$test26)==0 && strlen($test26)==3){    
  echo "<td>0,".$test26."</td>";
}
else if(strpos(".",$test26)==0 && strlen($test26)==4){
  echo "<td>".$test26[0].",".$test26[1].$test26[2].$test26[3]."</td>";
}else if(strpos(".",$test26)==0 && strlen($test26)==5){
  echo "<td>".$test26[0].$test26[1].",".$test26[2].$test26[3].$test26[4]."</td>";
}else if(strpos(".",$test26)==0 && strlen($test26)==6){
  echo "<td>".$test26[0].$test26[1].$test26[2]."<b>,</b>".$test26[3].$test26[4].$test26[5]."</td>";
}else if(strpos(".",$test26)==0 && strlen($test26)==7){
  echo "<td>".$test26[0].",".$test26[1].$test26[2].$test26[3].",".$test26[4].$test26[5].$test26[6]."</td>";
}else if(strpos(".",$test26)==0 && strlen($test26)==8){
  echo "<td>".$test26[0].$test26[1].",".$test26[2].$test26[3].$test26[4].",".$test26[5].$test26[6].$test26[7]."</td>";
}


//
echo "<td>".($res12['rem'])."</td>";
//

if(strpos(".",$test27)==0 && strlen($test27)==3){    
  echo "<td>0,".$test27."</td>";
}
else if(strpos(".",$test27)==0 && strlen($test27)==4){
  echo "<td>".$test27[0].",".$test27[1].$test27[2].$test27[3]."</td>";
}else if(strpos(".",$test27)==0 && strlen($test27)==5){
  echo "<td>".$test27[0].$test27[1].",".$test27[2].$test27[3].$test27[4]."</td>";
}else if(strpos(".",$test27)==0 && strlen($test27)==6){
  echo "<td>".$test27[0].$test27[1].$test27[2]."<b>,</b>".$test27[3].$test27[4].$test27[5]."</td>";
}else if(strpos(".",$test27)==0 && strlen($test27)==7){
  echo "<td>".$test27[0].",".$test27[1].$test27[2].$test27[3].",".$test27[4].$test27[5].$test27[6]."</td>";
}else if(strpos(".",$test27)==0 && strlen($test27)==8){
  echo "<td>".$test27[0].$test27[1].",".$test27[2].$test27[3].$test27[4].",".$test27[5].$test27[6].$test27[7]."</td>";
}

//
echo "<td>".($res12['tva'])."</td>";

echo "</tr>";
} 
}
  while($res13=mysql_fetch_array($req13)){
  $prix13=$m13*$res13['PU'];
  $test28= (string) $prix13;
  $test29 = (string) $res13['PU'];
  $que13=mysql_query("UPDATE mat set qte=qte-$m13 where REF='$a13'");
        $soum13=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix13 where REF='$a13'");
        $rebah13=($prix13-(($res13['puf'])*$m13));
        $reb13=mysql_query("UPDATE mat set BICE=BICE+$rebah13 where REF='$a13'");
       
        if($soum13 && $que13){

echo "<tr>";
echo "<td>".($res13['REF'])."</td>";
echo "<td>".($res13['designation'])."</td>";
echo "<td>".$m13."</td>";
echo "<td>".($res13['UN'])."</td>"; 
//bar prix
if(strpos(".",$test29)==0 && strlen($test29)==2){    
  echo "<td>0,".$test29."</td>";
  }
else if(strpos(".",$test29)==0 && strlen($test29)==3){    
  echo "<td>0,".$test29."</td>";
}
else if(strpos(".",$test29)==0 && strlen($test29)==4){
  echo "<td>".$test29[0].",".$test29[1].$test29[2].$test29[3]."</td>";
}else if(strpos(".",$test29)==0 && strlen($test29)==5){
  echo "<td>".$test29[0].$test29[1].",".$test29[2].$test29[3].$test29[4]."</td>";
}else if(strpos(".",$test29)==0 && strlen($test29)==6){
  echo "<td>".$test29[0].$test29[1].$test29[2]."<b>,</b>".$test29[3].$test29[4].$test29[5]."</td>";
}else if(strpos(".",$test29)==0 && strlen($test29)==7){
  echo "<td>".$test29[0].",".$test29[1].$test29[2].$test29[3].",".$test29[4].$test29[5].$test29[6]."</td>";
}else if(strpos(".",$test29)==0 && strlen($test29)==8){
  echo "<td>".$test29[0].$test29[1].",".$test29[2].$test29[3].$test29[4].",".$test29[5].$test29[6].$test29[7]."</td>";
}




echo "<td>".($res13['rem'])."</td>";

if(strpos(".",$test28)==0 && strlen($test28)==3){    
  echo "<td>0,".$test28."</td>";
}
else if(strpos(".",$test28)==0 && strlen($test28)==4){
  echo "<td>".$test28[0].",".$test28[1].$test28[2].$test28[3]."</td>";
}else if(strpos(".",$test28)==0 && strlen($test28)==5){
  echo "<td>".$test28[0].$test28[1].",".$test28[2].$test28[3].$test28[4]."</td>";
}else if(strpos(".",$test28)==0 && strlen($test28)==6){
  echo "<td>".$test28[0].$test28[1].$test28[2]."<b>,</b>".$test28[3].$test28[4].$test28[5]."</td>";
}else if(strpos(".",$test28)==0 && strlen($test28)==7){
  echo "<td>".$test28[0].",".$test28[1].$test28[2].$test28[3].",".$test28[4].$test28[5].$test28[6]."</td>";
}else if(strpos(".",$test28)==0 && strlen($test28)==8){
  echo "<td>".$test28[0].$test28[1].",".$test28[2].$test28[3].$test28[4].",".$test28[5].$test28[6].$test28[7]."</td>";
}


echo "<td>".($res13['tva'])."</td>";
echo "</tr>";

} 
}
 while($res14=mysql_fetch_array($req14)){
  $prix14=$m14*$res14['PU'];
  $test30= (string) $prix14;
  $test31 = (string) $res14['PU'];
  $que14=mysql_query("UPDATE mat set qte=qte-$m14 where REF='$a14'");
        $soum14=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix14 where REF='$a14'");
        $rebah14=($prix14-(($res14['puf'])*$m14));
        $reb14=mysql_query("UPDATE mat set BICE=BICE+$rebah14 where REF='$a14'");
  if($que14 && $soum14){
  echo "<tr>";
echo "<td>".($res14['REF'])."</td>";
echo "<td>".($res14['designation'])."</td>";
echo "<td>".$m14."</td>";
echo "<td>".($res14['UN'])."</td>"; 
//bar prix
if(strpos(".",$test31)==0 && strlen($test31)==2){    
  echo "<td>0,".$test31."</td>";
  }
else if(strpos(".",$test31)==0 && strlen($test31)==3){    
  echo "<td>0,".$test31."</td>";
}
else if(strpos(".",$test31)==0 && strlen($test31)==4){
  echo "<td>".$test31[0].",".$test31[1].$test31[2].$test31[3]."</td>";
}else if(strpos(".",$test31)==0 && strlen($test31)==5){
  echo "<td>".$test31[0].$test31[1].",".$test31[2].$test31[3].$test31[4]."</td>";
}else if(strpos(".",$test31)==0 && strlen($test31)==6){
  echo "<td>".$test31[0].$test31[1].$test31[2]."<b>,</b>".$test31[3].$test31[4].$test31[5]."</td>";
}else if(strpos(".",$test31)==0 && strlen($test31)==7){
  echo "<td>".$test31[0].",".$test31[1].$test31[2].$test31[3].",".$test31[4].$test31[5].$test31[6]."</td>";
}else if(strpos(".",$test31)==0 && strlen($test31)==8){
  echo "<td>".$test31[0].$test31[1].",".$test31[2].$test31[3].$test31[4].",".$test31[5].$test31[6].$test31[7]."</td>";
}




echo "<td>".($res14['rem'])."</td>";

if(strpos(".",$test30)==0 && strlen($test30)==3){    
  echo "<td>0,".$test30."</td>";
}
else if(strpos(".",$test30)==0 && strlen($test30)==4){
  echo "<td>".$test30[0].",".$test30[1].$test30[2].$test30[3]."</td>";
}else if(strpos(".",$test30)==0 && strlen($test30)==5){
  echo "<td>".$test30[0].$test30[1].",".$test30[2].$test30[3].$test30[4]."</td>";
}else if(strpos(".",$test30)==0 && strlen($test30)==6){
  echo "<td>".$test30[0].$test30[1].$test30[2]."<b>,</b>".$test30[3].$test30[4].$test30[5]."</td>";
}else if(strpos(".",$test30)==0 && strlen($test30)==7){
  echo "<td>".$test30[0].",".$test30[1].$test30[2].$test30[3].",".$test30[4].$test30[5].$test30[6]."</td>";
}else if(strpos(".",$test30)==0 && strlen($test30)==8){
  echo "<td>".$test30[0].$test30[1].",".$test30[2].$test30[3].$test30[4].",".$test30[5].$test30[6].$test30[7]."</td>";
}


echo "<td>".($res14['tva'])."</td>";
echo "</tr>";

} 
}

//
while($res15=mysql_fetch_array($req15)){
  $prix15=$m15*$res15['PU'];
  $test33= (string) $prix15;
  $test32 = (string) $res15['PU'];
  $que15=mysql_query("UPDATE mat set qte=qte-$m15 where REF='$a15'");
        $soum15=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix15 where REF='$a15'");
        $rebah15=($prix15-(($res15['puf'])*$m15));
        $reb15=mysql_query("UPDATE mat set BICE=BICE+$rebah15 where REF='$a15'");
  if($que15 && $soum15){
  echo "<tr>";
echo "<td>".($res15['REF'])."</td>";
echo "<td>".($res15['designation'])."</td>";
echo "<td>".$m15."</td>";
echo "<td>".($res15['UN'])."</td>"; 
//bar prix
if(strpos(".",$test32)==0 && strlen($test32)==2){    
  echo "<td>0,".$test32."</td>";
  }
else if(strpos(".",$test32)==0 && strlen($test32)==3){    
  echo "<td>0,".$test32."</td>";
}
else if(strpos(".",$test32)==0 && strlen($test32)==4){
  echo "<td>".$test32[0].",".$test32[1].$test32[2].$test32[3]."</td>";
}else if(strpos(".",$test32)==0 && strlen($test32)==5){
  echo "<td>".$test32[0].$test32[1].",".$test32[2].$test32[3].$test32[4]."</td>";
}else if(strpos(".",$test32)==0 && strlen($test32)==6){
  echo "<td>".$test32[0].$test32[1].$test32[2]."<b>,</b>".$test32[3].$test32[4].$test32[5]."</td>";
}else if(strpos(".",$test32)==0 && strlen($test32)==7){
  echo "<td>".$test32[0].",".$test32[1].$test31[2].$test32[3].",".$test32[4].$test32[5].$test32[6]."</td>";
}else if(strpos(".",$test32)==0 && strlen($test32)==8){
  echo "<td>".$test32[0].$test32[1].",".$test32[2].$test32[3].$test32[4].",".$test32[5].$test32[6].$test32[7]."</td>";
}




echo "<td>".($res15['rem'])."</td>";

if(strpos(".",$test33)==0 && strlen($test33)==3){    
  echo "<td>0,".$test33."</td>";
}
else if(strpos(".",$test33)==0 && strlen($test33)==4){
  echo "<td>".$test33[0].",".$test33[1].$test33[2].$test33[3]."</td>";
}else if(strpos(".",$test33)==0 && strlen($test33)==5){
  echo "<td>".$test33[0].$test33[1].",".$test33[2].$test33[3].$test33[4]."</td>";
}else if(strpos(".",$test33)==0 && strlen($test33)==6){
  echo "<td>".$test33[0].$test33[1].$test33[2]."<b>,</b>".$test33[3].$test33[4].$test33[5]."</td>";
}else if(strpos(".",$test33)==0 && strlen($test33)==7){
  echo "<td>".$test33[0].",".$test33[1].$test33[2].$test33[3].",".$test33[4].$test33[5].$test33[6]."</td>";
}else if(strpos(".",$test33)==0 && strlen($test33)==8){
  echo "<td>".$test33[0].$test33[1].",".$test33[2].$test33[3].$test33[4].",".$test33[5].$test33[6].$test33[7]."</td>";
}


echo "<td>".($res15['tva'])."</td>";
echo "</tr>";

} 
}


//

 while($res16=mysql_fetch_array($req16)){

  $prix16=$m16*$res16['PU'];

  $test35= (string) $prix16;
  $test34 = (string) $res16['PU'];
  $que16=mysql_query("UPDATE mat set qte=qte-$m16 where REF='$a16'");
        $soum16=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix16 where REF='$a16'");
        $rebah16=($prix16-(($res16['puf'])*$m16));
        $reb16=mysql_query("UPDATE mat set BICE=BICE+$rebah16 where REF='$a16'");
  if($que16 && $soum16){

  echo "<tr>";
echo "<td>".($res16['REF'])."</td>";
echo "<td>".($res16['designation'])."</td>";
echo "<td>".$m16."</td>";
echo "<td>".($res16['UN'])."</td>"; 
//bar prix
if(strpos(".",$test34)==0 && strlen($test34)==2){    
  echo "<td>0,".$test34."</td>";
  }
else if(strpos(".",$test34)==0 && strlen($test34)==3){    
  echo "<td>0,".$test34."</td>";
}
else if(strpos(".",$test34)==0 && strlen($test34)==4){
  echo "<td>".$test34[0].",".$test34[1].$test34[2].$test34[3]."</td>";
}else if(strpos(".",$test34)==0 && strlen($test34)==5){
  echo "<td>".$test34[0].$test34[1].",".$test34[2].$test34[3].$test34[4]."</td>";
}else if(strpos(".",$test34)==0 && strlen($test34)==6){
  echo "<td>".$test34[0].$test34[1].$test34[2]."<b>,</b>".$test34[3].$test34[4].$test34[5]."</td>";
}else if(strpos(".",$test34)==0 && strlen($test34)==7){
  echo "<td>".$test34[0].",".$test34[1].$test34[2].$test34[3].",".$test34[4].$test34[5].$test34[6]."</td>";
}else if(strpos(".",$test34)==0 && strlen($test34)==8){
  echo "<td>".$test34[0].$test34[1].",".$test34[2].$test34[3].$test34[4].",".$test34[5].$test34[6].$test34[7]."</td>";
}




echo "<td>".($res16['rem'])."</td>";

if(strpos(".",$test35)==0 && strlen($test35)==3){    
  echo "<td>0,".$test35."</td>";
}
else if(strpos(".",$test35)==0 && strlen($test35)==4){
  echo "<td>".$test35[0].",".$test35[1].$test35[2].$test35[3]."</td>";
}else if(strpos(".",$test35)==0 && strlen($test35)==5){
  echo "<td>".$test35[0].$test35[1].",".$test35[2].$test35[3].$test35[4]."</td>";
}else if(strpos(".",$test35)==0 && strlen($test35)==6){
  echo "<td>".$test35[0].$test35[1].$test35[2]."<b>,</b>".$test35[3].$test35[4].$test35[5]."</td>";
}else if(strpos(".",$test35)==0 && strlen($test35)==7){
  echo "<td>".$test35[0].",".$test35[1].$test35[2].$test35[3].",".$test35[4].$test35[5].$test35[6]."</td>";
}else if(strpos(".",$test35)==0 && strlen($test35)==8){
  echo "<td>".$test35[0].$test35[1].",".$test35[2].$test35[3].$test35[4].",".$test35[5].$test35[6].$test35[7]."</td>";
}


echo "<td>".($res16['tva'])."</td>";
echo "</tr>";

} 
}

//
 

 while($res17=mysql_fetch_array($req17)){
  $prix17=$m17*$res17['PU'];
  $test37= (string) $prix17;
  $test36 = (string) $res17['PU'];
  $que17=mysql_query("UPDATE mat set qte=qte-$m17 where REF='$a17'");
        $soum17=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix17 where REF='$a17'");
        $rebah17=($prix17-(($res17['puf'])*$m17));
        $reb17=mysql_query("UPDATE mat set BICE=BICE+$rebah17 where REF='$a17'");
  if($que17 && $soum17){
  echo "<tr>";
echo "<td>".($res17['REF'])."</td>";
echo "<td>".($res17['designation'])."</td>";
echo "<td>".$m17."</td>";
echo "<td>".($res17['UN'])."</td>"; 
//bar prix
if(strpos(".",$test36)==0 && strlen($test36)==2){    
  echo "<td>0,".$test36."</td>";
  }
else if(strpos(".",$test36)==0 && strlen($test36)==3){    
  echo "<td>0,".$test36."</td>";
}
else if(strpos(".",$test36)==0 && strlen($test36)==4){
  echo "<td>".$test36[0].",".$test36[1].$test36[2].$test36[3]."</td>";
}else if(strpos(".",$test36)==0 && strlen($test36)==5){
  echo "<td>".$test36[0].$test36[1].",".$test36[2].$test36[3].$test36[4]."</td>";
}else if(strpos(".",$test36)==0 && strlen($test36)==6){
  echo "<td>".$test36[0].$test36[1].$test36[2]."<b>,</b>".$test36[3].$test36[4].$test36[5]."</td>";
}else if(strpos(".",$test36)==0 && strlen($test36)==7){
  echo "<td>".$test36[0].",".$test36[1].$test36[2].$test36[3].",".$test36[4].$test36[5].$test36[6]."</td>";
}else if(strpos(".",$test36)==0 && strlen($test36)==8){
  echo "<td>".$test36[0].$test36[1].",".$test36[2].$test36[3].$test36[4].",".$test36[5].$test36[6].$test36[7]."</td>";
}




echo "<td>".($res17['rem'])."</td>";

if(strpos(".",$test37)==0 && strlen($test37)==3){    
  echo "<td>0,".$test37."</td>";
}
else if(strpos(".",$test37)==0 && strlen($test37)==4){
  echo "<td>".$test37[0].",".$test37[1].$test37[2].$test37[3]."</td>";
}else if(strpos(".",$test37)==0 && strlen($test37)==5){
  echo "<td>".$test37[0].$test37[1].",".$test37[2].$test37[3].$test37[4]."</td>";
}else if(strpos(".",$test37)==0 && strlen($test37)==6){
  echo "<td>".$test37[0].$test37[1].$test37[2]."<b>,</b>".$test37[3].$test37[4].$test37[5]."</td>";
}else if(strpos(".",$test37)==0 && strlen($test37)==7){
  echo "<td>".$test37[0].",".$test37[1].$test37[2].$test37[3].",".$test37[4].$test37[5].$test37[6]."</td>";
}else if(strpos(".",$test37)==0 && strlen($test37)==8){
  echo "<td>".$test37[0].$test37[1].",".$test37[2].$test37[3].$test37[4].",".$test37[5].$test37[6].$test37[7]."</td>";
}
//


echo "<td>".($res17['tva'])."</td>";
echo "</tr>";

} 
}
//
 while($res18=mysql_fetch_array($req18)){
  $prix18=$m18*$res18['PU'];
  $test39= (string) $prix18;
  $test38 = (string) $res18['PU'];
  $que18=mysql_query("UPDATE mat set qte=qte-$m18 where REF='$a18'");
        $soum18=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix18 where REF='$a18'");
        $rebah18=($prix18-(($res18['puf'])*$m18));
        $reb18=mysql_query("UPDATE mat set BICE=BICE+$rebah18 where REF='$a18'");
  if($que18 && $soum18){
  echo "<tr>";
echo "<td>".($res18['REF'])."</td>";
echo "<td>".($res18['designation'])."</td>";
echo "<td>".$m18."</td>";
echo "<td>".($res18['UN'])."</td>"; 
//bar prix
if(strpos(".",$test38)==0 && strlen($test38)==2){    
  echo "<td>0,".$test38."</td>";
  }
else if(strpos(".",$test38)==0 && strlen($test38)==3){    
  echo "<td>0,".$test38."</td>";
}
else if(strpos(".",$test38)==0 && strlen($test38)==4){
  echo "<td>".$test38[0].",".$test38[1].$test38[2].$test38[3]."</td>";
}else if(strpos(".",$test38)==0 && strlen($test38)==5){
  echo "<td>".$test38[0].$test38[1].",".$test38[2].$test38[3].$test38[4]."</td>";
}else if(strpos(".",$test38)==0 && strlen($test38)==6){
  echo "<td>".$test38[0].$test38[1].$test38[2]."<b>,</b>".$test38[3].$test38[4].$test38[5]."</td>";
}else if(strpos(".",$test38)==0 && strlen($test38)==7){
  echo "<td>".$test38[0].",".$test38[1].$test38[2].$test38[3].",".$test38[4].$test38[5].$test38[6]."</td>";
}else if(strpos(".",$test38)==0 && strlen($test38)==8){
  echo "<td>".$test38[0].$test38[1].",".$test38[2].$test38[3].$test38[4].",".$test38[5].$test38[6].$test38[7]."</td>";
}




echo "<td>".($res18['rem'])."</td>";

if(strpos(".",$test39)==0 && strlen($test39)==3){    
  echo "<td>0,".$test39."</td>";
}
else if(strpos(".",$test39)==0 && strlen($test39)==4){
  echo "<td>".$test39[0].",".$test39[1].$test39[2].$test39[3]."</td>";
}else if(strpos(".",$test39)==0 && strlen($test39)==5){
  echo "<td>".$test39[0].$test39[1].",".$test39[2].$test39[3].$test39[4]."</td>";
}else if(strpos(".",$test39)==0 && strlen($test39)==6){
  echo "<td>".$test39[0].$test39[1].$test39[2]."<b>,</b>".$test39[3].$test39[4].$test39[5]."</td>";
}else if(strpos(".",$test39)==0 && strlen($test39)==7){
  echo "<td>".$test39[0].",".$test39[1].$test39[2].$test39[3].",".$test39[4].$test39[5].$test39[6]."</td>";
}else if(strpos(".",$test39)==0 && strlen($test39)==8){
  echo "<td>".$test39[0].$test39[1].",".$test39[2].$test39[3].$test39[4].",".$test39[5].$test39[6].$test39[7]."</td>";
}


echo "<td>".($res18['tva'])."</td>";
echo "</tr>";

} 
}
//
 

 while($res19=mysql_fetch_array($req19)){
  $prix19=$m19*$res19['PU'];
  $test41= (string) $prix19;
  $test40 = (string) $res19['PU'];
  $que19=mysql_query("UPDATE mat set qte=qte-$m19 where REF='$a19'");
        $soum19=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix19 where REF='$a19'");
        $rebah19=($prix19-(($res19['puf'])*$m19));
        $reb19=mysql_query("UPDATE mat set BICE=BICE+$rebah19 where REF='$a19'");
  if($que19 && $soum19){
  echo "<tr>";
echo "<td>".($res19['REF'])."</td>";
echo "<td>".($res19['designation'])."</td>";
echo "<td>".$m19."</td>";
echo "<td>".($res19['UN'])."</td>"; 
//bar prix
if(strpos(".",$test40)==0 && strlen($test40)==2){    
  echo "<td>0,".$test40."</td>";
  }
else if(strpos(".",$test40)==0 && strlen($test40)==3){    
  echo "<td>0,".$test40."</td>";
}
else if(strpos(".",$test40)==0 && strlen($test40)==4){
  echo "<td>".$test40[0].",".$test40[1].$test40[2].$test40[3]."</td>";
}else if(strpos(".",$test40)==0 && strlen($test40)==5){
  echo "<td>".$test40[0].$test40[1].",".$test40[2].$test40[3].$test40[4]."</td>";
}else if(strpos(".",$test40)==0 && strlen($test40)==6){
  echo "<td>".$test40[0].$test40[1].$test40[2]."<b>,</b>".$test40[3].$test40[4].$test40[5]."</td>";
}else if(strpos(".",$test40)==0 && strlen($test40)==7){
  echo "<td>".$test40[0].",".$test40[1].$test40[2].$test40[3].",".$test40[4].$test40[5].$test40[6]."</td>";
}else if(strpos(".",$test40)==0 && strlen($test40)==8){
  echo "<td>".$test40[0].$test40[1].",".$test40[2].$test40[3].$test40[4].",".$test40[5].$test40[6].$test40[7]."</td>";
}




echo "<td>".($res19['rem'])."</td>";

if(strpos(".",$test41)==0 && strlen($test41)==3){    
  echo "<td>0,".$test41."</td>";
}
else if(strpos(".",$test41)==0 && strlen($test41)==4){
  echo "<td>".$test41[0].",".$test41[1].$test41[2].$test41[3]."</td>";
}else if(strpos(".",$test41)==0 && strlen($test41)==5){
  echo "<td>".$test41[0].$test41[1].",".$test41[2].$test41[3].$test41[4]."</td>";
}else if(strpos(".",$test41)==0 && strlen($test41)==6){
  echo "<td>".$test41[0].$test41[1].$test41[2]."<b>,</b>".$test41[3].$test41[4].$test41[5]."</td>";
}else if(strpos(".",$test41)==0 && strlen($test41)==7){
  echo "<td>".$test41[0].",".$test41[1].$test41[2].$test41[3].",".$test41[4].$test41[5].$test41[6]."</td>";
}else if(strpos(".",$test41)==0 && strlen($test41)==8){
  echo "<td>".$test41[0].$test41[1].",".$test41[2].$test41[3].$test41[4].",".$test41[5].$test41[6].$test41[7]."</td>";
}


echo "<td>".($res19['tva'])."</td>";
echo "</tr>";

} 
}
//
while($res20=mysql_fetch_array($req20)){
  $prix20=$m20*$res20['PU'];
  $test42= (string) $prix20;
  $test43 = (string) $res20['PU'];
  $que20=mysql_query("UPDATE mat set qte=qte-$m20 where REF='$a20'");
        $soum20=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix20 where REF='$a20'");
        $rebah20=($prix20-(($res20['puf'])*$m20));
        $reb20=mysql_query("UPDATE mat set BICE=BICE+$rebah20 where REF='$a20'");
  if($que20 && $soum20){
  echo "<tr>";
echo "<td>".($res20['REF'])."</td>";
echo "<td>".($res20['designation'])."</td>";
echo "<td>".$m20."</td>";
echo "<td>".($res20['UN'])."</td>"; 
//bar prix
if(strpos(".",$test43)==0 && strlen($test43)==2){    
  echo "<td>0,".$test43."</td>";
  }
else if(strpos(".",$test43)==0 && strlen($test43)==3){    
  echo "<td>0,".$test43."</td>";
}
else if(strpos(".",$test43)==0 && strlen($test43)==4){
  echo "<td>".$test43[0].",".$test43[1].$test43[2].$test43[3]."</td>";
}else if(strpos(".",$test43)==0 && strlen($test43)==5){
  echo "<td>".$test43[0].$test43[1].",".$test43[2].$test43[3].$test43[4]."</td>";
}else if(strpos(".",$test43)==0 && strlen($test43)==6){
  echo "<td>".$test43[0].$test43[1].$test43[2]."<b>,</b>".$test43[3].$test43[4].$test43[5]."</td>";
}else if(strpos(".",$test43)==0 && strlen($test43)==7){
  echo "<td>".$test43[0].",".$test43[1].$test43[2].$test43[3].",".$test43[4].$test43[5].$test43[6]."</td>";
}else if(strpos(".",$test43)==0 && strlen($test43)==8){
  echo "<td>".$test43[0].$test43[1].",".$test43[2].$test43[3].$test43[4].",".$test43[5].$test43[6].$test43[7]."</td>";
}




echo "<td>".($res20['rem'])."</td>";

if(strpos(".",$test42)==0 && strlen($test42)==3){    
  echo "<td>0,".$test42."</td>";
}
else if(strpos(".",$test42)==0 && strlen($test42)==4){
  echo "<td>".$test42[0].",".$test42[1].$test42[2].$test42[3]."</td>";
}else if(strpos(".",$test42)==0 && strlen($test42)==5){
  echo "<td>".$test42[0].$test42[1].",".$test42[2].$test42[3].$test42[4]."</td>";
}else if(strpos(".",$test42)==0 && strlen($test42)==6){
  echo "<td>".$test42[0].$test42[1].$test42[2]."<b>,</b>".$test42[3].$test42[4].$test42[5]."</td>";
}else if(strpos(".",$test42)==0 && strlen($test42)==7){
  echo "<td>".$test42[0].",".$test42[1].$test42[2].$test42[3].",".$test42[4].$test42[5].$test42[6]."</td>";
}else if(strpos(".",$test42)==0 && strlen($test42)==8){
  echo "<td>".$test42[0].$test42[1].",".$test42[2].$test42[3].$test42[4].",".$test42[5].$test42[6].$test42[7]."</td>";
}


echo "<td>".($res20['tva'])."</td>";
echo "</tr>";

} 
}
//
while($res21=mysql_fetch_array($req21)){
  $prix21=$m21*$res21['PU'];
  $test44= (string) $prix21;
  $test45 = (string) $res21['PU'];
  $que21=mysql_query("UPDATE mat set qte=qte-$m21 where REF='$a21'");
        $soum21=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix21 where REF='$a21'");
        $rebah21=($prix21-(($res21['puf'])*$m21));
        $reb21=mysql_query("UPDATE mat set BICE=BICE+$rebah21 where REF='$a21'");
  if($que21 && $soum21){
  echo "<tr>";
echo "<td>".($res21['REF'])."</td>";
echo "<td>".($res21['designation'])."</td>";
echo "<td>".$m21."</td>";
echo "<td>".($res21['UN'])."</td>"; 
//bar prix
if(strpos(".",$test45)==0 && strlen($test45)==2){    
  echo "<td>0,".$test45."</td>";
  }
else if(strpos(".",$test45)==0 && strlen($test45)==3){    
  echo "<td>0,".$test45."</td>";
}
else if(strpos(".",$test45)==0 && strlen($test45)==4){
  echo "<td>".$test45[0].",".$test45[1].$test45[2].$test45[3]."</td>";
}else if(strpos(".",$test45)==0 && strlen($test45)==5){
  echo "<td>".$test45[0].$test45[1].",".$test45[2].$test45[3].$test45[4]."</td>";
}else if(strpos(".",$test45)==0 && strlen($test45)==6){
  echo "<td>".$test45[0].$test45[1].$test45[2]."<b>,</b>".$test45[3].$test45[4].$test45[5]."</td>";
}else if(strpos(".",$test45)==0 && strlen($test45)==7){
  echo "<td>".$test45[0].",".$test45[1].$test45[2].$test45[3].",".$test45[4].$test45[5].$test45[6]."</td>";
}else if(strpos(".",$test45)==0 && strlen($test45)==8){
  echo "<td>".$test45[0].$test45[1].",".$test45[2].$test45[3].$test45[4].",".$test45[5].$test45[6].$test45[7]."</td>";
}




echo "<td>".($res21['rem'])."</td>";

if(strpos(".",$test44)==0 && strlen($test44)==3){    
  echo "<td>0,".$test44."</td>";
}
else if(strpos(".",$test44)==0 && strlen($test44)==4){
  echo "<td>".$test44[0].",".$test44[1].$test44[2].$test44[3]."</td>";
}else if(strpos(".",$test44)==0 && strlen($test44)==5){
  echo "<td>".$test44[0].$test44[1].",".$test44[2].$test44[3].$test44[4]."</td>";
}else if(strpos(".",$test44)==0 && strlen($test44)==6){
  echo "<td>".$test44[0].$test44[1].$test44[2]."<b>,</b>".$test44[3].$test44[4].$test44[5]."</td>";
}else if(strpos(".",$test44)==0 && strlen($test44)==7){
  echo "<td>".$test44[0].",".$test44[1].$test44[2].$test44[3].",".$test44[4].$test44[5].$test44[6]."</td>";
}else if(strpos(".",$test44)==0 && strlen($test44)==8){
  echo "<td>".$test44[0].$test44[1].",".$test44[2].$test44[3].$test44[4].",".$test44[5].$test44[6].$test44[7]."</td>";
}


echo "<td>".($res21['tva'])."</td>";
echo "</tr>";

} 
}
//

while($res22=mysql_fetch_array($req22)){
  $prix22=$m22*$res22['PU'];
  $test46= (string) $prix22;
  $test47 = (string) $res22['PU'];
  $que22=mysql_query("UPDATE mat set qte=qte-$m22 where REF='$a22'");
        $soum22=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix22 where REF='$a22'");
        $rebah22=($prix22-(($res22['puf'])*$m22));
        $reb22=mysql_query("UPDATE mat set BICE=BICE+$rebah22 where REF='$a22'");
  if($que22 && $soum22){
  echo "<tr>";
echo "<td>".($res22['REF'])."</td>";
echo "<td>".($res22['designation'])."</td>";
echo "<td>".$m22."</td>";
echo "<td>".($res22['UN'])."</td>"; 
//bar prix
if(strpos(".",$test47)==0 && strlen($test47)==2){    
  echo "<td>0,".$test47."</td>";
  }
else if(strpos(".",$test47)==0 && strlen($test47)==3){    
  echo "<td>0,".$test47."</td>";
}
else if(strpos(".",$test47)==0 && strlen($test47)==4){
  echo "<td>".$test47[0].",".$test47[1].$test47[2].$test47[3]."</td>";
}else if(strpos(".",$test47)==0 && strlen($test47)==5){
  echo "<td>".$test47[0].$test47[1].",".$test47[2].$test47[3].$test47[4]."</td>";
}else if(strpos(".",$test47)==0 && strlen($test47)==6){
  echo "<td>".$test47[0].$test47[1].$test47[2]."<b>,</b>".$test47[3].$test47[4].$test47[5]."</td>";
}else if(strpos(".",$test47)==0 && strlen($test47)==7){
  echo "<td>".$test47[0].",".$test47[1].$test47[2].$test47[3].",".$test47[4].$test47[5].$test47[6]."</td>";
}else if(strpos(".",$test47)==0 && strlen($test47)==8){
  echo "<td>".$test47[0].$test47[1].",".$test47[2].$test47[3].$test47[4].",".$test47[5].$test47[6].$test47[7]."</td>";
}




echo "<td>".($res22['rem'])."</td>";

if(strpos(".",$test46)==0 && strlen($test46)==3){    
  echo "<td>0,".$test46."</td>";
}
else if(strpos(".",$test46)==0 && strlen($test46)==4){
  echo "<td>".$test46[0].",".$test46[1].$test46[2].$test46[3]."</td>";
}else if(strpos(".",$test46)==0 && strlen($test46)==5){
  echo "<td>".$test46[0].$test46[1].",".$test46[2].$test46[3].$test46[4]."</td>";
}else if(strpos(".",$test46)==0 && strlen($test46)==6){
  echo "<td>".$test46[0].$test46[1].$test46[2]."<b>,</b>".$test46[3].$test46[4].$test46[5]."</td>";
}else if(strpos(".",$test46)==0 && strlen($test46)==7){
  echo "<td>".$test46[0].",".$test46[1].$test46[2].$test46[3].",".$test46[4].$test46[5].$test46[6]."</td>";
}else if(strpos(".",$test46)==0 && strlen($test46)==8){
  echo "<td>".$test46[0].$test46[1].",".$test46[2].$test46[3].$test46[4].",".$test46[5].$test46[6].$test46[7]."</td>";
}


echo "<td>".($res22['tva'])."</td>";
echo "</tr>";

} 
}
//
while($res23=mysql_fetch_array($req23)){
  $prix23=$m23*$res23['PU'];
  $test48= (string) $prix23;
  $test49 = (string) $res23['PU'];
  $que23=mysql_query("UPDATE mat set qte=qte-$m23 where REF='$a23'");
        $soum23=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix23 where REF='$a23'");
        $rebah23=($prix23-(($res23['puf'])*$m23));
        $reb23=mysql_query("UPDATE mat set BICE=BICE+$rebah23 where REF='$a23'");
  if($que23 && $soum23){
  echo "<tr>";
echo "<td>".($res23['REF'])."</td>";
echo "<td>".($res23['designation'])."</td>";
echo "<td>".$m23."</td>";
echo "<td>".($res23['UN'])."</td>"; 
//bar prix
if(strpos(".",$test49)==0 && strlen($test49)==2){    
  echo "<td>0,".$test49."</td>";
  }
else if(strpos(".",$test49)==0 && strlen($test49)==3){    
  echo "<td>0,".$test49."</td>";
}
else if(strpos(".",$test49)==0 && strlen($test49)==4){
  echo "<td>".$test49[0].",".$test49[1].$test49[2].$test49[3]."</td>";
}else if(strpos(".",$test49)==0 && strlen($test49)==5){
  echo "<td>".$test49[0].$test49[1].",".$test49[2].$test49[3].$test49[4]."</td>";
}else if(strpos(".",$test49)==0 && strlen($test49)==6){
  echo "<td>".$test49[0].$test49[1].$test49[2]."<b>,</b>".$test49[3].$test49[4].$test49[5]."</td>";
}else if(strpos(".",$test49)==0 && strlen($test49)==7){
  echo "<td>".$test49[0].",".$test49[1].$test49[2].$test49[3].",".$test49[4].$test49[5].$test49[6]."</td>";
}else if(strpos(".",$test49)==0 && strlen($test49)==8){
  echo "<td>".$test49[0].$test49[1].",".$test49[2].$test49[3].$test49[4].",".$test49[5].$test49[6].$test49[7]."</td>";
}




echo "<td>".($res23['rem'])."</td>";

if(strpos(".",$test48)==0 && strlen($test48)==3){    
  echo "<td>0,".$test48."</td>";
}
else if(strpos(".",$test48)==0 && strlen($test48)==4){
  echo "<td>".$test48[0].",".$test48[1].$test48[2].$test48[3]."</td>";
}else if(strpos(".",$test48)==0 && strlen($test48)==5){
  echo "<td>".$test48[0].$test48[1].",".$test48[2].$test48[3].$test48[4]."</td>";
}else if(strpos(".",$test48)==0 && strlen($test48)==6){
  echo "<td>".$test48[0].$test48[1].$test48[2]."<b>,</b>".$test48[3].$test48[4].$test48[5]."</td>";
}else if(strpos(".",$test48)==0 && strlen($test48)==7){
  echo "<td>".$test48[0].",".$test48[1].$test48[2].$test48[3].",".$test48[4].$test48[5].$test48[6]."</td>";
}else if(strpos(".",$test48)==0 && strlen($test48)==8){
  echo "<td>".$test48[0].$test48[1].",".$test48[2].$test48[3].$test48[4].",".$test48[5].$test48[6].$test48[7]."</td>";
}


echo "<td>".($res23['tva'])."</td>";
echo "</tr>";

} 
}
while($res24=mysql_fetch_array($req24)){
  $prix24=$m24*$res24['PU'];
  $test50= (string) $prix24;
  $test51 = (string) $res24['PU'];
  $que24=mysql_query("UPDATE mat set qte=qte-$m24 where REF='$a24'");
        $soum24=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix24 where REF='$a24'");
        $rebah24=($prix24-(($res24['puf'])*$m24));
        $reb24=mysql_query("UPDATE mat set BICE=BICE+$rebah24 where REF='$a24'");
  if($que24 && $soum24){
  echo "<tr>";
echo "<td>".($res24['REF'])."</td>";
echo "<td>".($res24['designation'])."</td>";
echo "<td>".$m24."</td>";
echo "<td>".($res24['UN'])."</td>"; 
//bar prix
if(strpos(".",$test51)==0 && strlen($test51)==2){    
  echo "<td>0,".$test51."</td>";
  }
else if(strpos(".",$test51)==0 && strlen($test51)==3){    
  echo "<td>0,".$test51."</td>";
}
else if(strpos(".",$test51)==0 && strlen($test51)==4){
  echo "<td>".$test51[0].",".$test51[1].$test51[2].$test51[3]."</td>";
}else if(strpos(".",$test51)==0 && strlen($test51)==5){
  echo "<td>".$test51[0].$test51[1].",".$test51[2].$test51[3].$test51[4]."</td>";
}else if(strpos(".",$test51)==0 && strlen($test51)==6){
  echo "<td>".$test51[0].$test51[1].$test51[2]."<b>,</b>".$test51[3].$test51[4].$test51[5]."</td>";
}else if(strpos(".",$test51)==0 && strlen($test51)==7){
  echo "<td>".$test51[0].",".$test51[1].$test51[2].$test51[3].",".$test51[4].$test51[5].$test51[6]."</td>";
}else if(strpos(".",$test51)==0 && strlen($test51)==8){
  echo "<td>".$test51[0].$test51[1].",".$test51[2].$test51[3].$test51[4].",".$test51[5].$test51[6].$test51[7]."</td>";
}




echo "<td>".($res24['rem'])."</td>";

if(strpos(".",$test50)==0 && strlen($test50)==3){    
  echo "<td>0,".$test50."</td>";
}
else if(strpos(".",$test50)==0 && strlen($test50)==4){
  echo "<td>".$test50[0].",".$test50[1].$test50[2].$test50[3]."</td>";
}else if(strpos(".",$test50)==0 && strlen($test50)==5){
  echo "<td>".$test50[0].$test50[1].",".$test50[2].$test50[3].$test50[4]."</td>";
}else if(strpos(".",$test50)==0 && strlen($test50)==6){
  echo "<td>".$test50[0].$test50[1].$test50[2]."<b>,</b>".$test50[3].$test50[4].$test50[5]."</td>";
}else if(strpos(".",$test50)==0 && strlen($test50)==7){
  echo "<td>".$test50[0].",".$test50[1].$test50[2].$test50[3].",".$test50[4].$test50[5].$test50[6]."</td>";
}else if(strpos(".",$test50)==0 && strlen($test50)==8){
  echo "<td>".$test50[0].$test50[1].",".$test50[2].$test50[3].$test50[4].",".$test50[5].$test50[6].$test50[7]."</td>";
}


echo "<td>".($res24['tva'])."</td>";
echo "</tr>";

} 
}
while($res25=mysql_fetch_array($req25)){
  $prix25=$m25*$res25['PU'];
  $test52= (string) $prix25;
  $test53 = (string) $res25['PU'];
  $que25=mysql_query("UPDATE mat set qte=qte-$m25 where REF='$a25'");
        $soum25=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix25 where REF='$a25'");
        $rebah25=($prix25-(($res25['puf'])*$m25));
        $reb25=mysql_query("UPDATE mat set BICE=BICE+$rebah25 where REF='$a25'");
  if($que25 && $soum25){
  echo "<tr>";
echo "<td>".($res25['REF'])."</td>";
echo "<td>".($res25['designation'])."</td>";
echo "<td>".$m25."</td>";
echo "<td>".($res25['UN'])."</td>"; 
//bar prix
if(strpos(".",$test53)==0 && strlen($test53)==2){    
  echo "<td>0,".$test53."</td>";
  }
else if(strpos(".",$test53)==0 && strlen($test53)==3){    
  echo "<td>0,".$test53."</td>";
}
else if(strpos(".",$test53)==0 && strlen($test53)==4){
  echo "<td>".$test53[0].",".$test53[1].$test53[2].$test53[3]."</td>";
}else if(strpos(".",$test53)==0 && strlen($test53)==5){
  echo "<td>".$test53[0].$test53[1].",".$test53[2].$test53[3].$test53[4]."</td>";
}else if(strpos(".",$test53)==0 && strlen($test53)==6){
  echo "<td>".$test53[0].$test53[1].$test53[2]."<b>,</b>".$test53[3].$test53[4].$test53[5]."</td>";
}else if(strpos(".",$test53)==0 && strlen($test53)==7){
  echo "<td>".$test53[0].",".$test53[1].$test53[2].$test53[3].",".$test53[4].$test53[5].$test53[6]."</td>";
}else if(strpos(".",$test53)==0 && strlen($test53)==8){
  echo "<td>".$test53[0].$test53[1].",".$test53[2].$test53[3].$test53[4].",".$test53[5].$test53[6].$test53[7]."</td>";
}




echo "<td>".($res25['rem'])."</td>";

if(strpos(".",$test52)==0 && strlen($test52)==3){    
  echo "<td>0,".$test52."</td>";
}
else if(strpos(".",$test52)==0 && strlen($test52)==4){
  echo "<td>".$test52[0].",".$test52[1].$test52[2].$test52[3]."</td>";
}else if(strpos(".",$test52)==0 && strlen($test52)==5){
  echo "<td>".$test52[0].$test52[1].",".$test52[2].$test52[3].$test52[4]."</td>";
}else if(strpos(".",$test52)==0 && strlen($test52)==6){
  echo "<td>".$test52[0].$test52[1].$test52[2]."<b>,</b>".$test52[3].$test52[4].$test52[5]."</td>";
}else if(strpos(".",$test52)==0 && strlen($test52)==7){
  echo "<td>".$test52[0].",".$test52[1].$test52[2].$test52[3].",".$test52[4].$test52[5].$test52[6]."</td>";
}else if(strpos(".",$test52)==0 && strlen($test52)==8){
  echo "<td>".$test52[0].$test52[1].",".$test52[2].$test52[3].$test52[4].",".$test52[5].$test52[6].$test52[7]."</td>";
}


echo "<td>".($res25['tva'])."</td>";
echo "</tr>";

} 
}
while($res26=mysql_fetch_array($req26)){
  $prix26=$m26*$res26['PU'];
  $test54= (string) $prix26;
  $test55 = (string) $res26['PU'];
  $que26=mysql_query("UPDATE mat set qte=qte-$m26 where REF='$a26'");
        $soum26=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix26 where REF='$a26'");
        $rebah26=($prix26-(($res26['puf'])*$m26));
        $reb26=mysql_query("UPDATE mat set BICE=BICE+$rebah26 where REF='$a26'");
  if($que26 && $soum26){
  echo "<tr>";
echo "<td>".($res26['REF'])."</td>";
echo "<td>".($res26['designation'])."</td>";
echo "<td>".$m26."</td>";
echo "<td>".($res26['UN'])."</td>"; 
//bar prix
if(strpos(".",$test55)==0 && strlen($test55)==2){    
  echo "<td>0,".$test55."</td>";
  }
else if(strpos(".",$test55)==0 && strlen($test55)==3){    
  echo "<td>0,".$test55."</td>";
}
else if(strpos(".",$test55)==0 && strlen($test55)==4){
  echo "<td>".$test55[0].",".$test55[1].$test55[2].$test55[3]."</td>";
}else if(strpos(".",$test55)==0 && strlen($test55)==5){
  echo "<td>".$test55[0].$test55[1].",".$test55[2].$test55[3].$test55[4]."</td>";
}else if(strpos(".",$test55)==0 && strlen($test55)==6){
  echo "<td>".$test55[0].$test55[1].$test55[2]."<b>,</b>".$test55[3].$test55[4].$test55[5]."</td>";
}else if(strpos(".",$test55)==0 && strlen($test55)==7){
  echo "<td>".$test55[0].",".$test55[1].$test55[2].$test55[3].",".$test55[4].$test55[5].$test55[6]."</td>";
}else if(strpos(".",$test55)==0 && strlen($test55)==8){
  echo "<td>".$test55[0].$test55[1].",".$test55[2].$test55[3].$test55[4].",".$test55[5].$test55[6].$test55[7]."</td>";
}




echo "<td>".($res26['rem'])."</td>";

if(strpos(".",$test54)==0 && strlen($test54)==3){    
  echo "<td>0,".$test54."</td>";
}
else if(strpos(".",$test54)==0 && strlen($test54)==4){
  echo "<td>".$test54[0].",".$test54[1].$test54[2].$test54[3]."</td>";
}else if(strpos(".",$test54)==0 && strlen($test54)==5){
  echo "<td>".$test54[0].$test54[1].",".$test54[2].$test54[3].$test54[4]."</td>";
}else if(strpos(".",$test54)==0 && strlen($test54)==6){
  echo "<td>".$test54[0].$test54[1].$test54[2]."<b>,</b>".$test54[3].$test54[4].$test54[5]."</td>";
}else if(strpos(".",$test54)==0 && strlen($test54)==7){
  echo "<td>".$test54[0].",".$test54[1].$test54[2].$test54[3].",".$test54[4].$test54[5].$test54[6]."</td>";
}else if(strpos(".",$test54)==0 && strlen($test54)==8){
  echo "<td>".$test54[0].$test54[1].",".$test54[2].$test54[3].$test54[4].",".$test54[5].$test54[6].$test54[7]."</td>";
}


echo "<td>".($res26['tva'])."</td>";
echo "</tr>";

} 
}
while($res27=mysql_fetch_array($req27)){
  $prix27=$m27*$res27['PU'];
  $test56= (string) $prix27;
  $test57 = (string) $res27['PU'];
  $que27=mysql_query("UPDATE mat set qte=qte-$m27 where REF='$a27'");
        $soum27=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix27 where REF='$a27'");
        $rebah27=($prix27-(($res27['puf'])*$m27));
        $reb27=mysql_query("UPDATE mat set BICE=BICE+$rebah27 where REF='$a27'");
  if($que27 && $soum27){
  echo "<tr>";
echo "<td>".($res27['REF'])."</td>";
echo "<td>".($res27['designation'])."</td>";
echo "<td>".$m27."</td>";
echo "<td>".($res27['UN'])."</td>"; 
//bar prix
if(strpos(".",$test57)==0 && strlen($test57)==2){    
  echo "<td>0,".$test57."</td>";
  }
else if(strpos(".",$test57)==0 && strlen($test57)==3){    
  echo "<td>0,".$test57."</td>";
}
else if(strpos(".",$test57)==0 && strlen($test57)==4){
  echo "<td>".$test57[0].",".$test57[1].$test57[2].$test57[3]."</td>";
}else if(strpos(".",$test57)==0 && strlen($test57)==5){
  echo "<td>".$test57[0].$test57[1].",".$test57[2].$test57[3].$test57[4]."</td>";
}else if(strpos(".",$test57)==0 && strlen($test57)==6){
  echo "<td>".$test57[0].$test57[1].$test57[2]."<b>,</b>".$test57[3].$test57[4].$test57[5]."</td>";
}else if(strpos(".",$test57)==0 && strlen($test57)==7){
  echo "<td>".$test57[0].",".$test57[1].$test57[2].$test57[3].",".$test57[4].$test57[5].$test57[6]."</td>";
}else if(strpos(".",$test57)==0 && strlen($test57)==8){
  echo "<td>".$test57[0].$test57[1].",".$test57[2].$test57[3].$test57[4].",".$test57[5].$test57[6].$test57[7]."</td>";
}




echo "<td>".($res27['rem'])."</td>";

if(strpos(".",$test56)==0 && strlen($test56)==3){    
  echo "<td>0,".$test56."</td>";
}
else if(strpos(".",$test56)==0 && strlen($test56)==4){
  echo "<td>".$test56[0].",".$test56[1].$test56[2].$test56[3]."</td>";
}else if(strpos(".",$test56)==0 && strlen($test56)==5){
  echo "<td>".$test56[0].$test56[1].",".$test56[2].$test56[3].$test56[4]."</td>";
}else if(strpos(".",$test56)==0 && strlen($test56)==6){
  echo "<td>".$test56[0].$test56[1].$test56[2]."<b>,</b>".$test56[3].$test56[4].$test56[5]."</td>";
}else if(strpos(".",$test56)==0 && strlen($test56)==7){
  echo "<td>".$test56[0].",".$test56[1].$test56[2].$test56[3].",".$test56[4].$test56[5].$test56[6]."</td>";
}else if(strpos(".",$test56)==0 && strlen($test56)==8){
  echo "<td>".$test56[0].$test56[1].",".$test56[2].$test56[3].$test56[4].",".$test56[5].$test56[6].$test56[7]."</td>";
}


echo "<td>".($res27['tva'])."</td>";
echo "</tr>";

} 
}
//

while($res28=mysql_fetch_array($req28)){
  $prix28=$m28*$res28['PU'];
  $test58= (string) $prix28;
  $test59 = (string) $res28['PU'];
  $que28=mysql_query("UPDATE mat set qte=qte-$m28 where REF='$a28'");
        $soum28=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix28 where REF='$a28'");
        $rebah28=($prix28-(($res28['puf'])*$m28));
        $reb28=mysql_query("UPDATE mat set BICE=BICE+$rebah28 where REF='$a28'");
  if($que28 && $soum28){
  echo "<tr>";
echo "<td>".($res28['REF'])."</td>";
echo "<td>".($res28['designation'])."</td>";
echo "<td>".$m28."</td>";
echo "<td>".($res28['UN'])."</td>"; 
//bar prix
if(strpos(".",$test59)==0 && strlen($test59)==2){    
  echo "<td>0,".$test59."</td>";
  }
else if(strpos(".",$test59)==0 && strlen($test59)==3){    
  echo "<td>0,".$test59."</td>";
}
else if(strpos(".",$test59)==0 && strlen($test59)==4){
  echo "<td>".$test59[0].",".$test59[1].$test59[2].$test59[3]."</td>";
}else if(strpos(".",$test59)==0 && strlen($test59)==5){
  echo "<td>".$test59[0].$test59[1].",".$test59[2].$test59[3].$test59[4]."</td>";
}else if(strpos(".",$test59)==0 && strlen($test59)==6){
  echo "<td>".$test59[0].$test59[1].$test59[2]."<b>,</b>".$test59[3].$test59[4].$test59[5]."</td>";
}else if(strpos(".",$test59)==0 && strlen($test59)==7){
  echo "<td>".$test59[0].",".$test59[1].$test59[2].$test59[3].",".$test59[4].$test59[5].$test59[6]."</td>";
}else if(strpos(".",$test59)==0 && strlen($test59)==8){
  echo "<td>".$test59[0].$test59[1].",".$test59[2].$test59[3].$test59[4].",".$test59[5].$test59[6].$test59[7]."</td>";
}




echo "<td>".($res28['rem'])."</td>";

if(strpos(".",$test58)==0 && strlen($test58)==3){    
  echo "<td>0,".$test58."</td>";
}
else if(strpos(".",$test58)==0 && strlen($test58)==4){
  echo "<td>".$test58[0].",".$test58[1].$test58[2].$test58[3]."</td>";
}else if(strpos(".",$test58)==0 && strlen($test58)==5){
  echo "<td>".$test58[0].$test58[1].",".$test58[2].$test58[3].$test58[4]."</td>";
}else if(strpos(".",$test58)==0 && strlen($test58)==6){
  echo "<td>".$test58[0].$test58[1].$test58[2]."<b>,</b>".$test58[3].$test58[4].$test58[5]."</td>";
}else if(strpos(".",$test58)==0 && strlen($test58)==7){
  echo "<td>".$test58[0].",".$test58[1].$test58[2].$test58[3].",".$test58[4].$test58[5].$test58[6]."</td>";
}else if(strpos(".",$test58)==0 && strlen($test58)==8){
  echo "<td>".$test58[0].$test58[1].",".$test58[2].$test58[3].$test58[4].",".$test58[5].$test58[6].$test58[7]."</td>";
}


echo "<td>".($res28['tva'])."</td>";
echo "</tr>";

} 
}
 
while($res29=mysql_fetch_array($req29)){
  $prix29=$m29*$res29['PU'];
  $test60= (string) $prix29;
  $test61 = (string) $res29['PU'];
  $que29=mysql_query("UPDATE mat set qte=qte-$m29 where REF='$a29'");
        $soum29=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix29 where REF='$a29'");
        $rebah29=($prix29-(($res29['puf'])*$m29));
        $reb29=mysql_query("UPDATE mat set BICE=BICE+$rebah29 where REF='$a29'");
  if($que29 && $soum29){
  echo "<tr>";
echo "<td>".($res29['REF'])."</td>";
echo "<td>".($res29['designation'])."</td>";
echo "<td>".$m29."</td>";
echo "<td>".($res29['UN'])."</td>"; 
//bar prix
if(strpos(".",$test61)==0 && strlen($test61)==2){    
  echo "<td>0,".$test61."</td>";
  }
else if(strpos(".",$test61)==0 && strlen($test61)==3){    
  echo "<td>0,".$test61."</td>";
}
else if(strpos(".",$test61)==0 && strlen($test61)==4){
  echo "<td>".$test61[0].",".$test61[1].$test61[2].$test61[3]."</td>";
}else if(strpos(".",$test61)==0 && strlen($test61)==5){
  echo "<td>".$test61[0].$test61[1].",".$test61[2].$test61[3].$test61[4]."</td>";
}else if(strpos(".",$test61)==0 && strlen($test61)==6){
  echo "<td>".$test61[0].$test61[1].$test61[2]."<b>,</b>".$test61[3].$test61[4].$test61[5]."</td>";
}else if(strpos(".",$test61)==0 && strlen($test61)==7){
  echo "<td>".$test61[0].",".$test61[1].$test61[2].$test61[3].",".$test61[4].$test61[5].$test61[6]."</td>";
}else if(strpos(".",$test61)==0 && strlen($test61)==8){
  echo "<td>".$test61[0].$test61[1].",".$test61[2].$test61[3].$test61[4].",".$test61[5].$test61[6].$test61[7]."</td>";
}




echo "<td>".($res29['rem'])."</td>";

if(strpos(".",$test60)==0 && strlen($test60)==3){    
  echo "<td>0,".$test60."</td>";
}
else if(strpos(".",$test60)==0 && strlen($test60)==4){
  echo "<td>".$test60[0].",".$test60[1].$test60[2].$test60[3]."</td>";
}else if(strpos(".",$test60)==0 && strlen($test60)==5){
  echo "<td>".$test60[0].$test60[1].",".$test60[2].$test60[3].$test60[4]."</td>";
}else if(strpos(".",$test60)==0 && strlen($test60)==6){
  echo "<td>".$test60[0].$test60[1].$test60[2]."<b>,</b>".$test60[3].$test60[4].$test60[5]."</td>";
}else if(strpos(".",$test60)==0 && strlen($test60)==7){
  echo "<td>".$test60[0].",".$test60[1].$test60[2].$test60[3].",".$test60[4].$test60[5].$test60[6]."</td>";
}else if(strpos(".",$test60)==0 && strlen($test60)==8){
  echo "<td>".$test60[0].$test60[1].",".$test60[2].$test60[3].$test60[4].",".$test60[5].$test60[6].$test60[7]."</td>";
}


echo "<td>".($res29['tva'])."</td>";
echo "</tr>";

} 
}

//
while($res30=mysql_fetch_array($req30)){
  $prix30=$m30*$res30['PU'];
  $test62= (string) $prix30;
  $test63 = (string) $res30['PU'];
  $que30=mysql_query("UPDATE mat set qte=qte-$m30 where REF='$a30'");
        $soum30=mysql_query("UPDATE mat set MONTANT=MONTANT+$prix30 where REF='$a30'");
        $rebah30=($prix30-(($res30['puf'])*$m30));
        $reb30=mysql_query("UPDATE mat set BICE=BICE+$rebah30 where REF='$a30'");
  if($que30 && $soum30){
  echo "<tr>";
echo "<td>".($res30['REF'])."</td>";
echo "<td>".($res30['designation'])."</td>";
echo "<td>".$m30."</td>";
echo "<td>".($res30['UN'])."</td>"; 
//bar prix
if(strpos(".",$test63)==0 && strlen($test63)==2){    
  echo "<td>0,".$test63."</td>";
  }
else if(strpos(".",$test63)==0 && strlen($test63)==3){    
  echo "<td>0,".$test63."</td>";
}
else if(strpos(".",$test63)==0 && strlen($test63)==4){
  echo "<td>".$test63[0].",".$test63[1].$test63[2].$test63[3]."</td>";
}else if(strpos(".",$test63)==0 && strlen($test63)==5){
  echo "<td>".$test63[0].$test63[1].",".$test63[2].$test63[3].$test63[4]."</td>";
}else if(strpos(".",$test63)==0 && strlen($test63)==6){
  echo "<td>".$test63[0].$test63[1].$test63[2]."<b>,</b>".$test63[3].$test63[4].$test63[5]."</td>";
}else if(strpos(".",$test63)==0 && strlen($test63)==7){
  echo "<td>".$test63[0].",".$test63[1].$test63[2].$test63[3].",".$test63[4].$test63[5].$test63[6]."</td>";
}else if(strpos(".",$test63)==0 && strlen($test63)==8){
  echo "<td>".$test63[0].$test63[1].",".$test63[2].$test63[3].$test63[4].",".$test63[5].$test63[6].$test63[7]."</td>";
}




echo "<td>".($res30['rem'])."</td>";

if(strpos(".",$test62)==0 && strlen($test62)==3){    
  echo "<td>0,".$test62."</td>";
}
else if(strpos(".",$test62)==0 && strlen($test62)==4){
  echo "<td>".$test62[0].",".$test62[1].$test62[2].$test62[3]."</td>";
}else if(strpos(".",$test62)==0 && strlen($test62)==5){
  echo "<td>".$test62[0].$test62[1].",".$test62[2].$test62[3].$test62[4]."</td>";
}else if(strpos(".",$test62)==0 && strlen($test62)==6){
  echo "<td>".$test62[0].$test62[1].$test62[2]."<b>,</b>".$test62[3].$test62[4].$test62[5]."</td>";
}else if(strpos(".",$test62)==0 && strlen($test62)==7){
  echo "<td>".$test62[0].",".$test62[1].$test62[2].$test62[3].",".$test62[4].$test62[5].$test62[6]."</td>";
}else if(strpos(".",$test62)==0 && strlen($test62)==8){
  echo "<td>".$test62[0].$test62[1].",".$test62[2].$test62[3].$test62[4].",".$test62[5].$test62[6].$test62[7]."</td>";
}


echo "<td>".($res30['tva'])."</td>";
echo "</tr>";

} 
}
echo"</table><br />";


}
$ti=$prix+$prix2+$prix3+$prix4+$prix5+$prix6+$prix7+$prix8+$prix9+$prix10+$prix11+$prix12+$prix13+$prix14+$prix15+$prix16+$prix17+$prix18+$prix19+$prix20+$prix21+$prix22+$prix23+$prix24+$prix25+$prix26+$prix27+$prix28+$prix29+$prix30;
$ti2=intval($ti*1.19);

$ti3=$ti2-$ti;
echo "<br /><b>";
echo"<table id='customers' class='conta'>";
  echo"<tr class='conta1'>";
    
    echo"<th class='conta1'>TOTAL HTVA</th>"; 
    echo"<th class='conta1'>TVA</th>";
    echo"<th class='conta1'>TTC</th>";
  echo"</tr>";
  if (!empty($_POST['a14'])) {
 $uda = $ti / $_POST['a14'];
$test = (string) intval($uda);
   
  }else{
    $test=(string) intval($ti);
  }
 
   
if(strpos(".",$test)==0 && strlen($test)==3){    
  echo "<td>0,".$test."</td>";
}
else if(strpos(".",$test)==0 && strlen($test)==4){
  echo "<td>".$test[0]." ".$test[1].$test[2].$test[3]."</td>";
}else if(strpos(".",$test)==0 && strlen($test)==5){
  echo "<td>".$test[0].$test[1]." ".$test[2].$test[3].$test[4]."</td>";
}else if(strpos(".",$test)==0 && strlen($test)==6){
  echo "<td>".$test[0].$test[1].$test[2]."<b>,</b>".$test[3].$test[4].$test[5]."</td>";
}else if(strpos(".",$test)==0 && strlen($test)==7){
  echo "<td>".$test[0]." ".$test[1].$test[2].$test[3].",".$test[4].$test[5].$test[6]."</td>";
}else if(strpos(".",$test)==0 && strlen($test)==8){
  echo "<td>".$test[0].$test[1]." ".$test[2].$test[3].$test[4].",".$test[5].$test[6].$test[7]."</td>";
}

//true
 

$test2 = (string) $ti3;

if(strpos(".",$test2)==0 && strlen($test2)==3){    
  echo "<td>0,".$test2."</td>";
}
else if(strpos(".",$test2)==0 && strlen($test2)==4){
  echo "<td>".$test2[0].",".$test2[1].$test2[2].$test2[3]."</td>";
}else if(strpos(".",$test2)==0 && strlen($test2)==5){
  echo "<td>".$test2[0].$test2[1].",".$test2[2].$test2[3].$test2[4]."</td>";
}else if(strpos(".",$test2)==0 && strlen($test2)==6){
  echo "<td>".$test2[0].$test2[1].$test2[2]."<b>,</b>".$test2[3].$test2[4].$test2[5]."</td>";
}else if(strpos(".",$test2)==0 && strlen($test2)==7){
  echo "<td>".$test2[0]." ".$test2[1].$test2[2].$test2[3].",".$test2[4].$test2[5].$test2[6]."</td>";
}else if(strpos(".",$test2)==0 && strlen($test2)==8){
  echo "<td>".$test2[0].$test2[1]." ".$test2[2].$test2[3].$test2[4].",".$test2[5].$test2[6].$test2[7]."</td>";
}else if(strpos(".",$test2)==0 && strlen($test2)==9){
  echo "<td>".$test2[0].$test2[1]." ".$test2[2].$test2[3].$test2[4].",".$test2[5].$test2[6].$test2[7].$test2[8]."</td>";
}
if (!empty($_POST['a14'])) {
 $uda2 = $uda * 1.19;
$test3 = (string) intval($uda2);
 
}else{
  $test3 = (string) intval($ti2);
}

if(strpos(".",$test3)==0 && strlen($test3)==3){    
  echo "<td>0,".$test3."</td>";
}
else if(strpos(".",$test3)==0 && strlen($test3)==4){
  echo "<td>".$test3[0].",".$test3[1].$test3[2].$test3[3]."</td>";
}else if(strpos(".",$test3)==0 && strlen($test3)==5){
  echo "<td>".$test3[0].$test3[1].",".$test3[2].$test3[3].$test3[4]."</td>";
}else if(strpos(".",$test3)==0 && strlen($test3)==6){
  echo "<td>".$test3[0].$test3[1].$test3[2]."<b>,</b>".$test3[3].$test3[4].$test3[5]."</td>";
}else if(strpos(".",$test3)==0 && strlen($test3)==7){
  echo "<td>".$test3[0]." ".$test3[1].$test3[2].$test3[3].",".$test3[4].$test3[5].$test3[6]."</td>";
}else if(strpos(".",$test3)==0 && strlen($test3)==8){
  echo "<td>".$test3[0].$test3[1]." ".$test3[2].$test3[3].$test3[4].",".$test3[5].$test3[6].$test3[7]."</td>";
}
else if(strpos(".",$test3)==0 && strlen($test3)==9){
  echo "<td>".$test3[0].$test3[1]." ".$test3[2].$test3[3].$test3[4]." ".$test3[5].$test3[6].$test3[7].$test3[8]."</td>";
}

echo "</tr></table>";
echo "<br /><br />";

echo"<button onclick='myFunction()' class='button'>Print</button>";
echo "</div>";
?>