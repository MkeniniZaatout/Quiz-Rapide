<?php
$bdd = mysqli_connect("localhost","root","","projet");
$reponse = $bdd->query("SELECT indice FROM Question WHERE id_question=".$_POST['id']);
while($donnees = $reponse->fetch_assoc())
	echo $donnees['indice'];
?>