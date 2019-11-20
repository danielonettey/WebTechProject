<?php
session_start();
setcookie(session_name(), '', 100);
session_unset();
if(session_destroy()) // Destroying All Sessions
{
$_SESSION = array();
header("Location:  http://cs.ashesi.edu.gh/~daniel_nettey/WebTechProject/log_in.php"); // Redirecting To Home Page
}
?>