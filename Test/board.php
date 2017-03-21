<?php
$bdd = new mysqli("localhost","root","","projet");
$return_arr =array();
$sql = mysql_query("SELECT theme.theme, question.question, utilisateur.nom, score.score FROM theme, question, utilisateur, score WHERE utilisateur.id_etudiant = score.id_etudiant AND question.id_question = score.id_question AND theme.id_theme = question.id_theme") or die("Error SQL");
	while ($row = mysql_fetch_array($sql)) {
	$return_arr[] = array('theme' => utf8_encode($row['0']), 'question' => utf8_encode($row['1']), 'nom' => utf8_encode($row['2']), 'score' => utf8_encode($row['3']));
	}
	mysql_close;
	echo json_encode($return_arr);