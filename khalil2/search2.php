<?php
// create a new function
function search($text){
	
	// connection to the Ddatabase
	$db = new PDO("mysql:host=localhost;dbname=alimcenter", 'root', 'madara1998');
	// let's filter the data that comes in
	$text = htmlspecialchars($text);
	// prepare the mysql query to select the users 
	$get_name = $db->prepare("SELECT * FROM mat WHERE REF LIKE concat('%', :REF, '%')");
	// execute the query
	$get_name -> execute(array('REF' => $text));
	// show the users on the page
	while($names = $get_name->fetch(PDO::FETCH_ASSOC)){
		// show each user as a link
		echo '<a href="" style="color:black;">'.$names['REF'].'</a>';
		echo '<a href="" style="color:red;">'.intval($names['PU']*1.19).'</a>';
		
	}
}
// call the search function with the data sent from Ajax
search($_GET['txt']);
?>