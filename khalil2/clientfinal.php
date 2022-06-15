<head>
<style type="text/css">
 input[value]{
   padding-bottom: 20px;
   size: 20px;
 } 
  #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  padding-bottom:800px ;
}

#customers td, #customers th {
  border: 1px solid #ddd;
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
p{
      font-weight: bold;
      font-size: 15px;
      line-height: 15px;
      text-transform: uppercase;
      font-family: arial;
    }
    .top{
      font-family: didot;
      font-size: 25px;
    }
    img{
      width: 17px;
      height:17px;
      margin-top: 10px;
    }
    button{
      position: relative;
      top:1000px;
    }
    .ahbetnayek{
     position: absolute;
     top: 1100px;
    }
    #customers{

    }
    .nek{
     position: relative;
     top:-70px;
    }
    .conta{
      border:1px solid red;
      position: absolute;
      top:0px;
      right:0px;
      padding: 10px 20px 5px 0px;
    }
    .delete{
      color:red;

    }
    .delete:hover {
      color:yellow;
    }
.visi{
  height: 50px;
  width: 200px;
  
  opacity: 0.0
}
.visi:hover{
  opacity: 1
}
</style>
<script type="text/javascript">
  function myFunction() {
window.print();
}


</script>
</head>
<?php 
mysql_connect("localhost","root","madara1998");
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


$n1=$_POST['fname'];$n2=$_POST['lname'];$n3=$_POST['cd'];


$khalil1=mysql_query("select * from client where nom='$n1'");
echo "<div class='ydk'";
if(mysql_num_rows($khalil1)==0){
 $khalil2=mysql_query("insert into client values ('$n1','','','$n2')");
 if($khalil2){
  $khali=mysql_query("select * from client where nom='$n1'");
while($kmar=mysql_fetch_array($khali)){

echo"<br /> <b><p>COMPTOIR D'ALUMINIUM TOP</p><p>Profilée & Accessoire en Aluminium <div class='right'><p>Code client: ".$kmar['code']." <br /> Nom Client : ".$n1." </br> MAT. fiscal :".$kmar['matfc']." <br /> KAIROUAN: 3100<br /></p></div><br /><br /> Aluminium Center  Société  Farhani<br /> <br />Près de Mosquée Aaouania Rue Halab <br /> <br />Tel : 56087838 </p></b>";
}
}

}else if(mysql_num_rows($khalil1)!=0){


while($khalil3=mysql_fetch_array($khalil1)){

echo"<br /> <p class='top'>COMPTOIR D'ALUMINIUM TOP<b><p>Profilée & Accessoire en Aluminium</p><div class='right'><p>Code client: ".$khalil3['code']." <br /> Nom Client : ".$n1." </br> MAT. fiscal :".$khalil3['matfc']." <br /> KAIROUAN: 3100<br /></p></div><p class='up'>rue hafouzz prés de Mosquée Aaouania <br />kairouan</p></p><img src='phone.ico'>Tel : 77305004  /  56087838<br /><br /> MF :1609609Q/B/M/000<br /><br /> CCB: </p></b></p>";

}

}

$tagoption=$_POST['work'];

$fex=mysql_query("UPDATE facture set code=code+1  where nom='$tagoption'");
$fex2=mysql_query("select code from facture where nom='$tagoption'");
if($fex2){
  while($fex1=mysql_fetch_array($fex2)){
echo "<div class='jektawa'><b>".$_POST['work']." N° BL00".$fex1['code']."</b></div>";
}
}
echo"</div>";
echo "<div class='nek'>";
echo"<table id='customers'>";
  echo"<tr>";
    echo"<th>REF</th>";
    echo"<th>QTE</th>";
    echo"<th>MONTANT</th>";
  echo"</tr>";
//contite m1
while($res1=mysql_fetch_array($req1)){
  $prix=($m1*$res1['PU'])*1.19;
  $veko1=($m1*$res1['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res1['REF'])."</td>";
  echo "<td>".$m1;
  echo "<td>".intval($prix)."</td>";
  echo "<br/>";
    echo "</tr>";
  }
  //2
  while($res2=mysql_fetch_array($req2)){
  $prix2=($m2*$res2['PU'])*1.19;
  $veko2=($m2*$res2['puf'])*1.19;
   echo "<tr>";
  echo "<td>".($res2['REF'])."</td>";
  echo "<td>".$m2;
echo "<td>".intval($prix2);
    echo "<br/>";
    echo "</tr>";
  }
  //3
  while($res3=mysql_fetch_array($req3)){
  $prix3=($m3*$res3['PU'])*1.19;
  $veko3=($m3*$res3['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res3['REF'])."</td>";
  echo "<td>".$m3;
echo "<td>".intval($prix3);
    echo "<br/>";
    echo "</tr>";
  }
  //4
  while($res4=mysql_fetch_array($req4)){
  $prix4=($m4*$res4['PU'])*1.19;
  $veko4=($m4*$res4['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res4['REF'])."</td>";
  echo "<td>".$m4;
echo "<td>".intval($prix4);
    echo "<br/>";
    echo "</tr>";
  }
  //5
  while($res5=mysql_fetch_array($req5)){
  $prix5=($m5*$res5['PU'])*1.19;
  $veko5=($m5*$res5['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res5['REF'])."</td>";
  echo "<td>".$m5;
echo "<td>".intval($prix5);
    echo "<br/>";
    echo "</tr>";
  }
  //6
  while($res6=mysql_fetch_array($req6)){
  $prix6=($m6*$res6['PU'])*1.19;
  $veko6=($m6*$res6['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res6['REF'])."</td>";
  echo "<td>".$m6;
echo "<td>".intval($prix6);
    echo "<br/>";
    echo "</tr>";
  }
  //7
  while($res7=mysql_fetch_array($req7)){
  $prix7=($m7*$res7['PU'])*1.19;
  $veko7=($m7*$res7['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res7['REF'])."</td>";
  echo "<td>".$m7;
echo "<td>".intval($prix7);
    echo "<br/>";
    echo "</tr>";
  }
  //8
  while($res8=mysql_fetch_array($req8)){
  $prix8=($m8*$res8['PU'])*1.19;
  $veko8=($m8*$res8['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res8['REF'])."</td>";
  echo "<td>".$m8;
echo "<td>".intval($prix8);
    echo "<br/>";
    echo "</tr>";
  }
  //9
  while($res9=mysql_fetch_array($req9)){
  $prix9=($m9*$res9['PU'])*1.19;
  $veko9=($m9*$res9['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res9['REF'])."</td>";
  echo "<td>".$m9;
echo "<td>".intval($prix9);
    echo "<br/>";
    echo "</tr>";
  }
  //10
  while($res10=mysql_fetch_array($req10)){
  $prix10=($m10*$res10['PU'])*1.19;
  $veko10=($m10*$res10['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res10['REF'])."</td>";
  echo "<td>".$m10;
echo "<td>".intval($prix10);
    echo "<br/>";
    echo "</tr>";
  }
  //11
  while($res11=mysql_fetch_array($req11)){
  $prix11=($m11*$res11['PU'])*1.19;
  $veko11=($m11*$res11['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res11['REF'])."</td>";
  echo "<td>".$m11;
echo "<td>".intval($prix11);
    echo "<br/>";
    echo "</tr>";
  }
  //12
  while($res12=mysql_fetch_array($req12)){
  $prix12=($m12*$res12['PU'])*1.19;
  $veko12=($m12*$res12['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res12['REF'])."</td>";
  echo "<td>".$m12;
echo "<td>".intval($prix12);
    echo "<br/>";
    echo "</tr>";
  }
  //13
  while($res13=mysql_fetch_array($req13)){
  $prix13=($m13*$res13['PU'])*1.19;
  $veko13=($m13*$res13['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res13['REF'])."</td>";
  echo "<td>".$m13;
echo "<td>".intval($prix13);
    echo "<br/>";
    echo "</tr>";
  }
   while($res14=mysql_fetch_array($req14)){
  $prix14=($m14*$res14['PU'])*1.19;
  $veko14=($m14*$res14['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res14['REF'])."</td>";
  echo "<td>".$m14;
echo "<td>".intval($prix14);
    echo "<br/>";
    echo "</tr>";
  }
 while($res15=mysql_fetch_array($req15)){
  $prix15=($m15*$res15['PU'])*1.19;
  $veko15=($m15*$res15['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res15['REF'])."</td>";
  echo "<td>".$m15;
echo "<td>".intval($prix15);
    echo "<br/>";
    echo "</tr>";
  }
   while($res16=mysql_fetch_array($req16)){
  $prix16=($m16*$res16['PU'])*1.19;
  $veko16=($m16*$res16['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res16['REF'])."</td>";
  echo "<td>".$m16;
echo "<td>".intval($prix16);
    echo "<br/>";
    echo "</tr>";
  }
 while($res17=mysql_fetch_array($req17)){
  $prix17=($m17*$res17['PU'])*1.19;
  $veko17=($m17*$res17['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res17['REF'])."</td>";
  echo "<td>".$m17;
echo "<td>".intval($prix17);
    echo "<br/>";
    echo "</tr>";
  }
 while($res18=mysql_fetch_array($req18)){
  $prix18=($m18*$res18['PU'])*1.19;
  $veko18=($m18*$res18['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res18['REF'])."</td>";
  echo "<td>".$m18;
echo "<td>".intval($prix18);
    echo "<br/>";
    echo "</tr>";
  }
 while($res19=mysql_fetch_array($req19)){
  $prix19=($m19*$res19['PU'])*1.19;
  $veko19=($m19*$res19['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res19['REF'])."</td>";
  echo "<td>".$m19;
echo "<td>".intval($prix19);
    echo "<br/>";
    echo "</tr>";
  }
 while($res20=mysql_fetch_array($req20)){
  $prix20=($m20*$res20['PU'])*1.19;
  $veko20=($m20*$res20['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res20['REF'])."</td>";
  echo "<td>".$m20;
echo "<td>".intval($prix20);
    echo "<br/>";
    echo "</tr>";
  }
//
while($res21=mysql_fetch_array($req21)){
  $prix21=($m21*$res21['PU'])*1.19;
  $veko21=($m21*$res21['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res21['REF'])."</td>";
  echo "<td>".$m21;
echo "<td>".intval($prix21);
    echo "<br/>";
    echo "</tr>";
  }

  while($res22=mysql_fetch_array($req22)){
  $prix22=($m22*$res22['PU'])*1.19;
  $veko22=($m22*$res22['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res22['REF'])."</td>";
  echo "<td>".$m22;
echo "<td>".intval($prix22);
    echo "<br/>";
    echo "</tr>";
  } 
while($res23=mysql_fetch_array($req23)){
  $prix23=($m23*$res23['PU'])*1.19;
  $veko23=($m23*$res23['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res23['REF'])."</td>";
  echo "<td>".$m23;
echo "<td>".intval($prix23);
    echo "<br/>";
    echo "</tr>";
  }
  while($res24=mysql_fetch_array($req24)){
  $prix24=($m24*$res24['PU'])*1.19;
  $veko24=($m24*$res24['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res24['REF'])."</td>";
  echo "<td>".$m24;
echo "<td>".intval($prix24);
    echo "<br/>";
    echo "</tr>";
  }
  while($res25=mysql_fetch_array($req25)){
  $prix25=($m25*$res25['PU'])*1.19;
  $veko25=($m25*$res25['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res25['REF'])."</td>";
  echo "<td>".$m25;
echo "<td>".intval($prix25);
    echo "<br/>";
    echo "</tr>";
  }
  //
  while($res26=mysql_fetch_array($req26)){
  $prix26=($m26*$res26['PU'])*1.19;
  $veko26=($m26*$res26['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res26['REF'])."</td>";
  echo "<td>".$m26;
echo "<td>".intval($prix26);
    echo "<br/>";
    echo "</tr>";
  }

  while($res27=mysql_fetch_array($req27)){
  $prix27=($m27*$res27['PU'])*1.19;
  $veko27=($m27*$res27['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res27['REF'])."</td>";
  echo "<td>".$m27;
echo "<td>".intval($prix27);
    echo "<br/>";
    echo "</tr>";
  }

  while($res28=mysql_fetch_array($req28)){
  $prix28=($m28*$res28['PU'])*1.19;
  $veko28=($m28*$res28['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res28['REF'])."</td>";
  echo "<td>".$m28;
echo "<td>".intval($prix28);
    echo "<br/>";
    echo "</tr>";
  }

  while($res29=mysql_fetch_array($req29)){
  $prix29=($m29*$res29['PU'])*1.19;
  $veko29=($m29*$res29['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res29['REF'])."</td>";
  echo "<td>".$m29;
echo "<td>".intval($prix29);
    echo "<br/>";
    echo "</tr>";
  }

  while($res30=mysql_fetch_array($req30)){
  $prix30=($m30*$res30['PU'])*1.19;
$veko30=($m30*$res30['puf'])*1.19;
  echo "<tr>";
  echo "<td>".($res30['REF'])."</td>";
  echo "<td>".$m30;
echo "<td>".intval($prix30);
    echo "<br/>";
    echo "</tr>";
  }
$ti=$prix+$prix2+$prix3+$prix4+$prix5+$prix6+$prix7+$prix8+$prix9+$prix10+$prix11+$prix12+$prix13+$prix14+$prix15+$prix16+$prix17+$prix18+$prix19+$prix20+$prix21+$prix22+$prix23+$prix24+$prix25+$prix26+$prix27+$prix28+$prix29+$prix30;
$vekofinal = $veko1+$veko2+$veko3+$veko4+$veko5+$veko6+$veko7+$veko8+$veko9+$veko10+$veko11+$veko12+$veko13+$veko14+$veko15+$veko16+$veko17+$veko18+$veko19+$veko20+$veko21+$veko22+$veko23+$veko24+$veko25+$veko26+$veko27+$veko28+$veko29+$veko30;
echo "<button onclick='myFunction()' class='button'>Print</button>";
echo "</div>";
echo "<h3>TTC  : <input name='f' value='".intval($ti)."'> </h3>";

echo "<h3 class='visi'>PUF  : <input name='f' value='".intval($vekofinal)."'> </h3>";

?>
<script type="text/javascript">
  function myFunctionn() {
  var content = document.documentElement.innerHTML;
  var d = "<?php echo $n1 ?>";
  download(content, d, "html")

}

function download(content, fileName, fileType) {
  var link = document.getElementById("donwload-link");
  var file = new Blob([content], {type: fileType});
  var donwloadFile = fileName + "." + fileType;
  link.href = URL.createObjectURL(file);
  link.download = donwloadFile
}
</script>
<?php
echo "<div class='ahbetnayek'><a href ='#' id='donwload-link' onClick='myFunctionn()'>download html content</a></div>";
?>