
<?php
session_start();
if(!isset($_SESSION["sadmun"])){
header("Location: supadm.php");
exit(); }
?>
