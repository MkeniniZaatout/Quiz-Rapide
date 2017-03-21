<?php
$bdd = new mysqli("localhost","root","root","questionnaire");
$reponse = $bdd->query("SELECT * FROM theme");
while($donnees = $reponse->fetch_assoc())
	$data[] = $donnees;
$result = json_encode($data);
echo($result);
?>