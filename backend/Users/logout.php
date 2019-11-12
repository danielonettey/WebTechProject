<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://localhost/web%20tech%20project/WebTechProject/admission_portal_frontend/log_in.php"); // Redirecting To Home Page
}
?>