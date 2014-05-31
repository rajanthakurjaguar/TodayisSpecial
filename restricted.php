<?php #admin/restricted.php 
session_start();
//checking if a log SESSION VARIABLE has been set
if ( isset($_SESSION['log']) && ($_SESSION['log'] == 'in') )
{
	Header("Location: home.php");
}
else if( !isset($_SESSION['log']) || ($_SESSION['log'] != 'in') ){
        //if the user is not allowed, display a message and a link to go back to login page
		echo "You are not allowed. <a href='index.php'>back to login page</a>";
        Header("Location:index.php");
        //then abort the script
	exit();
}
####  CODE FOR LOG OUT #### 
if(isset($_GET['log']) && ($_GET['log']=='out')){
        //if the user logged out, delete any SESSION variables
	session_destroy();
	
        //then redirect to login page
	Header('location:index.php');
}//end log out
?>

<!-- RESTRICTED PAGE HTML GOES HERE -->
<!-- add a LOGOUT link before the form -->
<p>{ <a href="?log=out">log out</a> }</p>

 <!-- RESTRICTED PAGE HTML GOES HERE -->
