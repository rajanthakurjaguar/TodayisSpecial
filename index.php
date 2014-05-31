<html>
	<head>
		<title>Today is Special</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/check.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

	<?php
        session_start();
        if (isset($_GET['o']) && $_GET['o'] === 'invalid') {
            echo "<h3 align='right'> User-name already exists</h3>";
        }
		if (isset($_GET['p']) && $_GET['p'] === 'valid') {
            echo "<h3 align='right'> Now you are registered. You can login <a href='#para3'>here</a></h3>";
        }
		if (isset($_GET['q']) && $_GET['q'] === 'invalid') {
            echo "<h3 align='right'> Wrong Id or Password</h3>";
        }

       /* if (isset($_SESSION['started']) && ($_SESSION['started'] == 1)) {
            header('Location:home.php');
        }*/

        /*if (isset($_SESSION['started']) && $_SESSION['loginas'] == "Faculty" && ($_SESSION['started'] == 1)) {
            header('Location:facindex.php');
        }*/
     ?>
		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/time.jpg" alt="" /></span>
							
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--
							
								Prologue's nav expects links in one of two formats:
								
								1. Hash link (scrolls to a different section within the page)
								
								   <li><a href="#foobar" id="foobar-link" class="skel-panels-ignoreHref"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)
duction
								   <li><a href="http://foobar.tld"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>
							
							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Introduction</span></a></li>
								<li><a href="#login" id="portfolio-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Login</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
							<li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>
							<li><a href="#" class="fa fa-github solo"><span>Github</span></a></li>
							<li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
							<li><a href="#" class="fa fa-envelope solo"><span>Email</span></a></li>
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
				<!-- Introduction -->
					<section id="top" class="one">
						<div class="container">
						
							<p id="para1">Today is special for you...!</p>
							<?php 
							echo "<h1> <font size:36px>";
							include 'get_date.php'; 
							echo "</font></h1>";
							?>
							<p align="justified">This website is a web source which provides users of all age groups a place from which
							they can know about the events that have occurred on today's date in the past</p><br />
							
							

							<a href="#login"><font color="#E62962">Click here to login</font></a><br />
							<img src="images\sunrise.jpg" height="500" width="800" align="center">
						</div>
					</section>
					
				<!-- Login Section -->
					<section id="login" class="two">
						<div class="container">
							<!-- Code for showing today's date-->
							<?php 
							echo "<h1> <font size:36px>";
							include 'get_date.php'; 
							echo "</font></h1>";
							?>
							
							
							<header>
								<h2>Login</h2>
							</header>
							
							<p>Enter your Login Details here...</p>
							<form name="myForm" action="login.php" method="post" onsubmit="return validateForm()">
			
							<table border=0>
							<tr>
								<td colspan=2><input type="radio" name="usertype" value="new"> <font size="36px">New user</font></td>
								<td colspan=2><a id="para3"></a><input type="radio" name="usertype" value="existing"> <font size="36px">Existing user</font></td>
							</tr>
							<tr>
								<td>User-id</td>
								<td><input type="text" name="userid"></td>
								<td rowspan=2>User-id</td>
								<td rowspan=2><input type="text" name="user"></td>
							</tr>
							<tr>
								<td>Password </td>
								<td><input type="password" name="pass1"></td>
							</tr>
							<tr>
								<td>Re-enter password</td>
								<td><input type="password" name="pass2"></td>
								<td colspan=2></td>
							</tr>
								<td align="center"><input type="radio" name="agegp" value="below15">Below 15</td>
								<td align="center"><input type="radio" name="agegp" value="15-30">15-30 </td>
								<td rowspan=2>Password </td>
								<td rowspan=2><input type="password" name="pass"></td>
							</tr>
							<tr>
								<td colspan=2 align="center"><input type="radio" name="agegp" value="above30">above 30</td>
							</tr>
							<tr>
								<td colspan=4 align="center"><input type="submit" name="submit"></td>
							</tr>
							</table>
							</form>

						</div>
					</section>

				

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<div class="copyright">
						<p>&copy; 2014 Today is Special Team. All rights reserved.</p>
						<ul class="menu">
							<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				
			</div>

	</body>
</html>