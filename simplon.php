<!DOCTYPE html>
<html>
<head>
	<title>simplon</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Ceci est un tableau</h2>

<table>
<th>Pré(Nom)</th><th>Age</th>
<?php
//create empty array
$t = [];
// today's date
$date1 = date("Y-m-d");
//load file
  $xml = simplexml_load_file('classe-simploniens.xml');
//foreach loop
  foreach ($xml->simplonien as $s) {
//get birth date from xml
  	$date2=$s->date_naissance;
//associate prenom nom
	$np = "$s->prenom $s->nom";
//get the diff between today and date from xml
  	$date_diff=strtotime($date1)-strtotime($date2);
	$ans= " ".floor(($date_diff)/(60*60*24*365)) ." ans ";
//adding key->value to array
	$t[$np] = $ans;
	}
	//sort array
asort($t);
//filing array
foreach ($t as $key => $value) {
	echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
}
?>
</table>




</body>
</html>