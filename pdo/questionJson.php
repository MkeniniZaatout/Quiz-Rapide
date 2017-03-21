<?php
$bdd = new mysqli("localhost","root","root","questionnaire");
$reponse = $bdd->query("SELECT id_question,question FROM question");
while($donnees = $reponse->fetch_assoc())
	$data[] = $donnees;
$result = json_encode($data);
echo($result);
?>