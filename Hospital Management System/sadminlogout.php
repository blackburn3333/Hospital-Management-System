<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: supadm.php"); // Redirecting To Home Page
}
?>
