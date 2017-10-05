
<?php
session_start();
if(!isset($_SESSION["ssadmun"])){
header("Location: index.php");
exit(); }
?>
