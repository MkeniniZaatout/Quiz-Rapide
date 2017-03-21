<?php
$bdd = new mysqli("localhost","root","root","projet_php");
$reponse = $bdd->query("SELECT Question.id_question, Question.question, Question.nbChoix, Choix.id_choix, Choix.choix, Choix.etat, Theme.id_theme, Theme.theme
FROM Question, Choix, Theme WHERE Question.id_question=Choix.id_question AND Theme.id_theme=Question.id_theme");
while($donnees = $reponse->fetch_assoc())
	$data[] = $donnees;
$result = json_encode($data);
echo($result);
?>