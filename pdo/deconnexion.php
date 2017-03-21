<?php
ini_set("display_errors","on");
session_destroy(); // destroy the session
header('Location: index.php');
exit();
?>