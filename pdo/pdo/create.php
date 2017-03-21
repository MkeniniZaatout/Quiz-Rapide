<?php
session_start() ;
$_SESSION["nom"] = $_GET["nom"] ;
print "session creee, nom : " . $_SESSION["nom"] ;
?>