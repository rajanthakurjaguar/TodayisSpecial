<?php
session_start();
require("dbconnect.php");
class Events
{
	public function load_category($pagetype,$usergpid)
	{
		$result=mysql_query("select * from events where type='".$pagetype."' and age_gp_id=".$usergpid."") or die("Mysql error".mysql_error());//load_category
		return $result;
		
	}
	public function question_setup($result,$userid,$today,$visitCount)
	{
		echo "<table border=1>";
		while($row=mysql_fetch_array($result))
		{
			$dateofoccurence=substr($row['dateofoccurence'],5,9);//retrieves date as 'mm/dd' from dateofocurence
			
			if($dateofoccurence===$today)//If today's date and month are same of day and month of occurence of event 
			{
				echo "<tr><td width='150'>".$row['dateofoccurence']."</td><td>".$row['information']."</td>";
				$checkExists=mysql_query("select * from question_setup where userid='".$userid."' and infono='".$row['infono']."'");
				if(mysql_num_rows($checkExists)==0)
				{
							mysql_query("insert into question_setup values(
							'".$userid."',
							'".$row['Event_id']."',
							'".$row['type']."',
							'".$row['date']."',
							'".$row['infono']."',
							'".$visitCount."')") or die("<b>Insert Query Error </b>".mysql_error());
				}
			}
		}
		echo "</table>";
	}
}	


$pagetype=$_POST['pagetype'];
$userid=$_SESSION['user'];
$usergpid=$_SESSION['user_gp_id'];
$visitCount=$_SESSION['visit_count'];
$today=date("m-d");

$obj=new Events();
$result= $obj->load_category($pagetype,$usergpid);
$obj->question_setup($result,$userid,$today,$_SESSION['visit_count']);
//$obj->update_visit_count($visitCount,$userid)

?>