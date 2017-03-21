<?php
ini_set("display_errors","on");
    // print('C\'est bon');die;
	// recuperer le login
	$login=$_GET['id'];
	
	// recuperer le mdp
	$motDePasse=$_GET['mdp'];
	
	// se connecter au SGBD (MYSQL, machine locale)
	$link = mysql_connect("localhost", "root", "marco");
	
	if(!$link) die('Erreur de connexion');	
	// selectionner la base bdsitecv

	$db_selected = mysql_select_db('tp3db', $link);
	
	// verifier si il existe un enregistrement contenant  login et mdp
	//      dans la table login
	//		1: ecrire la requete sql
	$sql="SELECT * FROM User WHERE nom = '$login' AND mdp='$motDePasse'";
	//die($sql);
	//      2: executer la requete
	$result = mysql_query($sql);
	//		3: le couple login, mot de passe est correcte 
	//           si l'extraction à rendu au moins un enregistrement 
	//           => il faut compter le nombre d'enregistrements 
	//              de la table créée par SELECT
	$num_rows = mysql_num_rows($result);
	// si le tuple login, mot de passe n'existe pas dans la table login (nb enregistrement vaut 0 )alors 
	if( $num_rows == 0 ) {
	
		//aller à la page d'accueil (technique de la redirection)
		header('Location: connexion.html');
	
	// sinon
	} else {
		$sql2="SELECT type FROM User WHERE nom = '$login' AND mdp='$motDePasse'";
		$result2 = mysql_query($sql2);
		if($result2==1){
			
		}
		else{
			header('Location: index.html');	
		}
			
		
		
		
	// finsi
	}
	
	// se deconnecter du SGBD
	mysql_close($link);
	
?>
