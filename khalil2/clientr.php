<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="test2.js"></script>
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid red;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #f44336;
  color: white;
}
.button {
  background-color: #f44336;
  border: none;
  color: white;
  padding: 15px 400px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}
select{
  margin:20px;
}
 body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
    #show_up{
  width: 200px;
  height: 200px;
  border: 1px solid #ddd;
  display: none;
}
#show_up a{
  border-bottom: 1px solid #ddd;
  display: block;
  padding: 5px;
}
</style>
</head>
<body bgcolor="">
<img src="5.png">
<form method="POST">
  <label for="fname">Nom client</label>
  <input type="text" id="fname" name="fname">
  <label for="lname">MAT. fiscal</label>
  <input type="text" id="lname" name="lname">
  <label for="fname">code client</label>
  <input type="text" id="fname" name="cd">
  <label for="fname">Remise</label>
  <input type="text" id="fname" name="rem">

<select name="work">
<option value="Bon de livraison">bonnde de livraision</option>
<option value="Facture Client">Facture client</option>
<option value="D E V I S">DEVIS</option>
</select>
<table>
  <tr>
    <th>reference</th>
    <th>quantit??</th>
    
  </tr>
  <tr>
    <td><input type="text" id="fname" name="a1" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m1" placeholder="quantit??"></td>
    
  </tr>
  <tr>
    <td><input type="text" id="fname" name="a2" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m2" placeholder="quantit??"></td>
    
  </tr>
  <tr>
    <td><input type="text" id="fname" name="a3" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m3" placeholder="quantit??"></td>
    
  </tr>
  <tr>
    <td><input type="text" id="fname" name="a4" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m4" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a5" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m5" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a6" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m6" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a7" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m7" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a8" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m8" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a9" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m9" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a10" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m10" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a11" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m11" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a12" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m12" placeholder="quantit??"></td>
    
</tr>

<tr>
    <td><input type="text" id="fname" name="a13" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m13" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a16" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m16" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a17" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m17" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a18" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m18" placeholder="quantit??"></td>
    
</tr>
<!---->
<tr>
    <td><input type="text" id="fname" name="a19" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m19" placeholder="quantit??"></td>
    
</tr>

<tr>
    <td><input type="text" id="fname" name="a20" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m20" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a21" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m21" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a22" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m22" placeholder="quantit??"></td>
    
</tr>
<!---->
<tr>
    <td><input type="text" id="fname" name="a23" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m23" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a24" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m24" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a25" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m25" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a26" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m26" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a27" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m27" placeholder="quantit??"></td>
    
</tr>
<!-- part two -->
<tr>
    <td><input type="text" id="fname" name="a28" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m28" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a29" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m29" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a30" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m30" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a31" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m31" placeholder="quantit??"></td>
    
</tr>
<tr>
    <td><input type="text" id="fname" name="a32" placeholder="reference"></td>
    <td><input type="text" id="fname" name="m32" placeholder="quantit??"></td>
    
</tr>
</table>
<button class="button" formaction="client.php">V??rifier</button>

  <button class="button" formaction="clientfinal.php" target="_blank">Check Paayment</button>
  <button class="button" formaction="remisequantite.php" target="_blank">Remise quantit??</button>
 <!-- <h2>remise client</h2>
<input type="text" id="fname" name="a14" placeholder="remise client fid??le">
-->
  <h2>Remise quantit??</h2>
<input type="text" id="fname" name="a15" placeholder="remise Quantit??">

</form>
  <script>
$(document).ready(function(e){
  $("#search").keyup(function(){
    $("#show_up").show();
    var text = $(this).val();
    $.ajax({
      type: 'GET',
      url: 'search2.php',
      data: 'txt=' + text,
      success: function(data){
        $("#show_up").html(data);
      }
    });
  })
});
</script>
<input type="text" name="names" id="search" />
<div id="show_up"></div>

</body>
</html>
