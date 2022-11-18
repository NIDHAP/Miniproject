<?php error_reporting (E_ALL^E_NOTICE);
session_start();
unset($_SESSION['id']);
session_destroy();
header('Location:../index.php');
?>
