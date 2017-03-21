<?php
session_start(); // create session
?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css\index.css">
<title> Page d'accueil </title>
</head>

<div class="imageGauche">
<center> <img src="Image/study-quiz.png" class="displayed" alt="logo" /> </center>
</div>

<h1> Bienvenue dans le questionnaire StudyQuiz ! </h1>

<form action="connexion.php" method="POST">
<div>
Saisir l'identifiant :
<input name ="nom">
<input type="submit" name="sub" value="Se connecter"/>
</div>
</form>
<br>
<form action="connexionAdmin.php" method="POST">
<div>


</body>
</html>