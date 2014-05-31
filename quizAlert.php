<?php
echo '<html>';
echo '<body onload="alertFunction()">';
echo '<script type="text/javascript">';
echo 'function alertFunction()';
echo '{';
echo 'alert("Your seven visits to the system are already completed....Now you deed to attempt Quiz to gain further access")';
echo '}';
echo '</script>';
include 'quiz.php';
echo '</body></html>';

?>