<?php
$bdd = new mysqli("localhost","root","root","projet_php");
$reponse = $bdd->query("SELECT indice FROM Question WHERE id_question=".$_POST['id']);
while($donnees = $reponse->fetch_assoc())
	echo $donnees['indice'];
$bdd->query("UPDATE Score SET score=score-1 WHERE id_question=".$_POST['id']);
?>