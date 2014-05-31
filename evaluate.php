
<?php
//made by Rajan Thakur,Dharani Das,Manish Kumar,Aayush Kumar. MCA S4.
//session_start();
require("dbconnect.php");	
class Quiz
{
	public function init()
	{
		
	}
	public function Ans_eval($i,$correct)
	{
	
	#Evaluate portion
	//$p=$_POST['qval'.$i];
	echo "<h2><u>Answers</u></h2><br>";
	echo "<p align='left'>";
	for ($j=1;$j<=$i;$j++)
	{
		$qval="qval".$j;
		$answer="answer".$j;
		$ques="ques".$j;
		echo "Question ".$j.":";
		echo  $_SESSION[$ques]."<br/>";
		echo "Answer :";
		echo  $_SESSION[$answer]."<br/>";
		echo "Your answer :";
		echo  $_POST[$qval]."<br/>";
		if($_POST[$qval] === $_SESSION[$answer]  )
		$correct++;
		ECHO "<br><br>";
		
		
	}
	echo "<p>";
		return $correct;
	}
	
	public function generate_performance($correct,$total,$userid)
	{
		
		#Generate Performance
		echo "<table>";
		echo "<tr><td colspan=2><h2 id='currentScore'><u>Hi, your performance is as follows : - <u></h2></td></tr>";
		echo "<tr><td ><b>Total questions  </b></td>";
		echo "<td> {$total} </td></tr>";
		echo "<tr><td ><b>Correct questions  </b></td>";
		echo "<td> {$correct} </td></tr>";
		echo "<tr><td ><b> Percentage  </b></td>";
		$per=(float) (($correct/$total)*100) ;
		echo "<td>{$per}</td></tr>";
		
		echo "</table>";
		
		
		$b= mysql_query("select * from quiz_performance where userid= '".$userid."'");
		
		if(mysql_num_rows($b)==0)// .i.e. user has attempted no quiz upto now
		{
			$quizno=1;
			mysql_query("insert into quiz_performance values(
			'".$userid."',
			'".$quizno."',
			'".$per."')
			");
			echo "<br>User has attempted no other quiz upto now ...!";
		}
		else //User has attempted some quizes upto now
		{
			$total= mysql_num_rows($b); //total number of quizes is equal to number of rows returned.
			echo "<table>";
			echo "<tr><td colspan=2><h2 id='previousPref'><u>Your previous quiz performances:<u></h2></td></tr>";
			
			while($r=mysql_fetch_array($b))
			{
				if(($r['quiz_no']>= ($total-1)) || $total==1)
				{
					echo "<tr><td>Quiz ".$r['quiz_no']." performance : </td><td>".$r['performance']." percent.</td></tr><br />"; 
				}
			}
			echo "</table>";
			$newquizno=$total+1;
			
			mysql_query("insert into quiz_performance values(
			'".$userid."',
			'".$newquizno."',
			'".$per."')
			");
			//echo "User has attempted no other quiz upto now ...!";
		}
	}
	
	public function update_visit_count($userid)
	{
		#At last we have to update the count for number of visits
		mysql_query("update users 
		set visit_count=visit_count+1
		where userid='".$userid."'
		") or die("Update error:".mysql_error());
	}
}
$i=$_SESSION['i'];
$userid=$_SESSION['user'];
$correct=0;
$i=$_SESSION['i'];
$total=$i;
$ob=new Quiz();
//$ob.evaluate();
//$ob->init();
$corr=$ob->Ans_eval($i,$correct);
$ob->generate_performance($corr,$total,$userid);
$ob->update_visit_count($userid);

//session_destroy();

?>
