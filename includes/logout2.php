<?php
// Initialize the session
//session_start();
setcookie("username", "", time() - 3600, "/");
// Unset all of the session variables
//$_SESSION = array();
 
// Destroy the session.
//session_destroy();
 
// Redirect to login page
header("location: ../27.php");
exit;
?>