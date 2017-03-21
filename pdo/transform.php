<?php
$bdd = mysqli_connect("localhost","root","","projet");
$reponse = $bdd->query("SELECT * FROM Question, Choix, Theme WHERE Question.id_question=Choix.id_question AND Theme.id_theme=Question.id_theme");
while($donnees = $reponse->fetch_assoc())
	$data[] = $donnees;
$result = json_encode($data);
echo($result);
?>