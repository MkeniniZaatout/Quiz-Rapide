<?php
$bdd = new mysqli("localhost","root","","projet");
$reponse = $bdd->query("SELECT score, nom, id_question FROM score, utilisateur WHERE score.id_etudiant = utilisateur.id_etudiant");
while($donnees = $reponse->fetch_assoc())
	$data[] = $donnees;
$result = json_encode($data);
echo($result);
?>