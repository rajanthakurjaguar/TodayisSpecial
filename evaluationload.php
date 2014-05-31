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
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		
	</head>
	<body>

	<?php
		session_start();
		echo "<font align='center'><h2>Welcome ".$_SESSION['user']." to Today is Special page evaluation Page...!</h2></font>";
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
							
							<ul>
								<li><a href="#Result" id="history-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Answers</span></a></li>
								<li><a href="#currentScore" id="history-link" class="skel-panels-ignoreHref"><span class="fa fa-book">Current Score</span></a></li>
								<li><a href="#previousPref" id="history-link" class="skel-panels-ignoreHref"><span class="fa fa-eject">Previous Performances</span></a></li>
								<li><a href="home.php" id="history-link" class="skel-panels-ignoreHref"><span class="fa fa-home">GoTo HomePage</span></a></li>
								<li><a href="restricted.php?log=out" id="logout-link" class="skel-panels-ignoreHref"><span class="fa fa-power-off">LogOut</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="http://twitter.com" class="fa fa-twitter solo"target="_blank"><span>Twitter</span></a></li>
							<li><a href="http://facebook.com" class="fa fa-facebook solo"target="_blank"><span>Facebook</span></a></li>
							<li><a href="http://github.com" class="fa fa-github solo"target="_blank"><span>Github</span></a></li>
							<li><a href="http://dribbble.com" class="fa fa-dribbble solo"target="_blank"><span>Dribbble</span></a></li>
							<li><a href="http://gmail.com" class="fa fa-envelope solo"target="_blank"><span>Email</span></a></li>
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
					<section id="top" class="one">
						<div class="container">
						
							Today is special for you...!
							<!--<p align=left>{ <a href="restricted.php?log=out">log out</a> }</p>-->
							<?php 
							echo "<font size:36px>";
							include 'get_date.php'; 
							echo "</font>";
							?>

						</div>
					</section>
					

					<section id="Result" class="two">
						<div class="container">
							<?php include 'evaluate.php' ?> 
						</div>
					</section>

			</div>
		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<div class="copyright">
						<p>&copy; 2014 Today is Special Team. All rights reserved.</p>
						<ul class="menu">
							<li>Design: <a href="http://rajanisrare.wix.com/todayisspecial">TODAY IS SPECIAL TEAM'S WEBSITE</a></li>
						</ul>
					</div>
				
			</div>

	</body>
</html>