<?php 
//made by Rajan Thakur, Dharani Das, Manish Kumar Yadav, Aayush MCA S4.
//session_start();//init								
require("dbconnect.php");
//Quiz part starts here...=>
								
//echo "<html><head>";
echo "<script src='js/check.js'></script>";
echo "<script src='js/alert.js'></script>";
//echo "</head>";
echo "<body onload='alertFunction()'>";
echo "<img height='500px' width='1000px' src='images/sunrise.jpg'></img>";

class Quiz
{
		public function load_questions($user)
		{
			//$result=mysql_query("select * from question_setup where userid= '".$user."'");//it takes out the details of the pages visited by user from question_setup table//load questions
			$result=mysql_query("select * from question_setup where userid='".$user."' ORDER BY visit_no DESC LIMIT 10");
			return $result;
		}
									
		public function Attempt_quiz($i,$result)
		{
			echo "<form action='evaluationload.php' method=post>";
			echo "<table>";
			#Attempt quiz portion
			while($row=mysql_fetch_array($result))
			{
										
									
				$r=mysql_query("select * from events where infono=".$row['infono']."") or die ("Select Query Error:  ".mysql_error());
										
				while($a=mysql_fetch_array($r))
				{
					$i++;
					$ques="ques".$i;
					$answer="answer".$i;
					$value="qval".$i;
					$_SESSION[$ques]=$a['ques'];
					$_SESSION[$answer]=$a['answer'];//i.e. $session['answer1']=$r['answer']
					echo "<tr><td>";
					echo "<b id='Questions'>";
					echo $i;
					echo ") {$a['ques']} </td></tr>";
					echo "</b>";
					echo "<tr><th align='left'> <input type=radio name='$value' value='".$a['opt1']."' > {$a['opt1']} </input></th></tr><br />";
					echo "<tr><th align='left'> <input type=radio name='$value' value='".$a['opt2']."' > {$a['opt2']} </input></th></tr><br />";
					echo "<tr><th align='left'> <input type=radio name='$value' value='".$a['opt3']."' > {$a['opt3']} </input></th></tr><br />";
					echo "<tr><th align='left'> <input type=radio name='$value' value='".$a['opt4']."' > {$a['opt4']} </input></th></tr><br />";
				}
										
			}
			echo "</table>";
			$_SESSION['i']=$i;
			echo "<p id='SubmitLink'>";
			echo "<br><input type='submit' value='submit' name='btn'>";
			echo "</p>";
			echo "</form>";
									
		}
}

echo "</body>";
$i=0;
$userGpID=$_SESSION['user_gp_id'];
$user=$_SESSION['user'];

$obj=new Quiz();

$result= $obj->load_questions($user);
$obj->Attempt_quiz($i,$result);

?>