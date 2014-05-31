<?php
    session_start();
    include('dbconnect.php');
    $userid=$_SESSION['userid']= $_POST['userid'];
    $pass1= $_POST['pass1'];
	$pass2= $_POST['pass2'];
	$agegp=$_SESSION['agegp']= $_POST['agegp'];
	$user=$_SESSION['user']= $_POST['user'];
	$pass= $_POST['pass'];
	$usertype=$_POST['usertype'];
	$flag=0;
	
	
	$_SESSION['started']=1;
	if($usertype=='new')
	{
		if($agegp=="below15")
		{
			$age="below15";
			$ageGpId=1;
		}
		if($agegp=="15-30")
		{
			$age="fiftothirty";
			$ageGpId=2;
		}
		if($agegp=="above30")
		{
			$age="above30";
			$ageGpId=3;
		}
		$result=mysql_query("select * from users") or die("<h3 align='right'> ".mysql_error()."</h3>");;
		while($row=mysql_fetch_array($result))
		{
			if($row['userid']==$userid)
			{
				$flag=1;//flag=1 means user-name already exists, so re-enter again.
			}
		}
		if($flag==1)
		{
			header('Location:index.php?o=invalid');
		}
		else
		{
			$result= mysql_query("insert into users(userid,password,agegp,user_gp_id) values ('$userid','$pass1','$age',$ageGpId)") or die("<h3 align='right'> ".mysql_error()."</h3>");; 
			$_SESSION['started']=1;
			header('Location:index.php?p=valid');
		}
	}
	else if($usertype=='existing')
	{
		$result= mysql_query("select * from users where userid='$user'") or die("<h3 align='right'> ".mysql_error()."</h3>");
		$row=mysql_fetch_array($result);
		if(($row != NULL) && ($row['password']==$pass)) 
		{
			echo "login success";
			$_SESSION['log'] = 'in';
			$_SESSION['started']=1;  
			$_SESSION['user_gp_id']=$row['user_gp_id'];
			if($row['visit_count']!=0 && ($row[visit_count]%7)==0)
			{
				$_SESSION['quiz'] = 'in';
				header('location:quizload.php'); // here Message for Quiz Alert is placed here..!
				//header('location:quizRestricted.php');
 			}
			else{
				echo "login success";
				$_SESSION['log'] = 'in';
				mysql_query("update users 
				set visit_count=visit_count+1 where userid='".$user."'") or die("Update Error :".mysql_error());
				$r=mysql_query("select * from users where userid='".$user."'") or die("Select Query Error: ".mysql_error);
				while($row=mysql_fetch_array($r))
				{
				$_SESSION['visit_count']=$row['visit_count'];
				}
				header('location:restricted.php');
				//header('Location:home.php');
			}	
		}
		else
		{
			header('Location:index.php?q=invalid');//it means either userid does not exists or password is incorrect
		}
		
    }
	//$_SESSION['user_gp_id']=mysql_query("select user_gp_id from users where userid= '".$user."'") or die(mysql_error());
?>
