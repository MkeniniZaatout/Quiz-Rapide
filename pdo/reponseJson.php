<?php
$bdd = new mysqli("localhost","root","root","questionnaire");
$reponse = $bdd->query("SELECT id_choix,choix FROM choix");
while($donnees = $reponse->fetch_assoc())
	$data[] = $donnees;
$result = json_encode($data);
echo($result);
?>