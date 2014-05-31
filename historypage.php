<?php
session_start();
require("dbconnect.php");
$pagetype=$_POST['pagetype'];
$userid=$_SESSION['user'];
$usergpid=$_SESSION['user_gp_id'];
if($pagetype=="music")
{
	$result=mysql_query("select * from events where type='".$pagetype."' and age_gp_id=".$usergpid."") or die("Mysql error: ".mysql_error());
	echo "<table border=1>";
	while($row=mysql_fetch_array($result))
	{
	//	echo $row['Event_id'];
		echo "<tr><td>".$row['dateofoccurence']."</td><td>".$row['information']."</td>";
		
		$r=mysql_query("insert into question_setup values
						('".$userid."',
						".$row['Event_id'].",
						'".$row['type']."',
						'".$row['date']."',
						".$row['infono'].",
						'".$row['information']."',
						'".$row['ques']."',
						'".$row['answer']."',
						'".$row['opt1']."',
						'".$row['opt2']."',
						'".$row['opt3']."',
						'".$row['opt4']."')") or die("Error here : ".mysql_error());
	
	}
	echo "</table>";
	
}
if($pagetype=="news")
{

}
if($pagetype=="industry")
{

}
if($pagetype=="art")
{

}
if($pagetype=="world")
{

}
if($pagetype=="literature")
{

}
?>