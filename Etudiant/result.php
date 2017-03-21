<?php
$bdd = new mysqli("localhost","root","root","projet_php");
$reponse = $bdd->query("SELECT etat FROM Choix WHERE id_choix=".$_POST['rp']);
while($donnees = $reponse->fetch_assoc())
if ($donnees['etat']==0)
	$bdd->query("UPDATE Score SET score=0 WHERE id_question=".$_POST['id']);
?>