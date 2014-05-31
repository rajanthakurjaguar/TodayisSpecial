<?php #admin/restricted.php 
session_start();
//checking if a log SESSION VARIABLE has been set
if ( isset($_SESSION['quiz']) && ($_SESSION['quiz'] == 'in') )
{
	Header("Location:quizAlert.php");
}
else if( !isset($_SESSION['quiz']) || ($_SESSION['quiz'] != 'in') ){
        //if the user is not allowed, display a message and a link to go back to login page
		echo "You are not allowed. <a href='index.php'>back to login page</a>";
        Header("Location:index.php");
        //then abort the script
	exit();
}
if(isset($_GET['quiz']) && ($_GET['quiz']=='out')){
	Header ('Location:evaluate.php');
	
}//end log out
?>