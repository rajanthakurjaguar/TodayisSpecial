<?php
session_start();
session_unset();
session_destroy();
$_SESSION["user"] = false;
// Logged out, return home.
Header("Location: index.php");
?>
