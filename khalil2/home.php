<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    
    <link rel="icon" href="img/1.gif">
    <link rel="stylesheet" href="css/reset.css">
    <title>Last Life</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="st.css">
    <script src="sk.js"></script>
    <script src="sk2.js"></script>
    
        <style>
      @import 'https://fonts.googleapis.com/css?family=Roboto+Mono:100';
html,
body {
  font-family: 'Roboto Mono', monospace;
  background: #242424;
  height: 100%;
}
.container {
  height: 100%;
  width: 100%;
  justify-content: center;
  align-items: center;
  display: flex;
}
.text {
  font-weight: 100;
  font-size: 28px;
  color: #fafafa;
}
.dud {
  color: #757575;
}
.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: fafafa;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}

    </style>

    
        <script src="prefixfree.min.js"></script>

    
  </head>

  <body>
    <img src="2.PNG">
    
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ALUMINIUM CENTER</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="client.html" target="_blank">Client Side</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Botnet/">Fournisseur Side<span class="caret"></span></a>
        <ul class="dropdown-menu">
      <li><a href="ajout.html" target="_blank">Ajout</a></li>
      <li><a href="alert.php" target="_blank">Recherche</a></li>
      </ul></li>
      <a class="navbar-brand" href="para.html">Parametres</a>
      <a class="navbar-brand" href="beni.php">Benifice</a>
      <a class="navbar-brand" href="totalmon.php">MONTANT TOTAL</a>
      <a class="navbar-brand" href="achat.php">MONTANT d'achat</a>
    </ul>
    
    <a href="#" class="notification">
  <span>notification</span>
<?php
mysql_connect("localhost", "root", "madara1998");
mysql_select_db("alimcenter");
$req=mysql_query("select count(*) as notification from mat where qte < 1");
$data=mysql_fetch_assoc($req);

  echo"<span class='badge'>".$data['notification']."</span>";


?>
</a>
  </div>
</nav>
  



    <div class="container">
  <div class="text"></div>
</div>
    
        <script src="index.js"></script>
    
    
  </body>
</html>
