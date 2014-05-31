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
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

	<?php
		session_start();
		echo "<font align='center'><h2>Welcome ".$_SESSION['user']." to Today is Special page...!</h2></font>";
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

								   <li><a href="http://foobar.tld"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>
							
							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Intro</span></a></li>
								<li><a href="#History" id="history-link" class="skel-panels-ignoreHref"><span class="fa fa-th">History</span></a></li>
								<li><a href="#Science" id="science-link" class="skel-panels-ignoreHref"><span class="fa fa-lightbulb-o">Science</span></a></li>
								<li><a href="#Sports" id="sports-link" class="skel-panels-ignoreHref"><span class="fa fa-star">Sports</span></a></li>
								<li><a href="#Contact" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-inbox">Contact</span></a></li>
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
			
				<!-- Intro -->
					<section id="top" class="one">
						<div class="container">
						
							Today is special for you...!
							<!--<p align=left>{ <a href="restricted.php?log=out">log out</a> }</p>-->
							<?php 
							echo "<font size:36px>";
							include 'get_date.php'; 
							echo "</font>";
							/*
							$my_date=getdate(date("U"));
							$mon=substr("$mydate[month]",0,3); 
							$all="html/_"."$mydate[mday]".$mon.".html";
							echo "<a href='$all' target='frame1'><strong><u><font color='blue'>";
							//echo "Enter to todays page";
							echo "</font></u></strong></a>";
							//echo "<br>";*/
							echo "<img height='500px' width='1000px' src='images/sunrise.jpg'></img>";
							?>

						</div>
					</section>
					
				<!-- History Section -->
					<section id="History" class="two">
						<div class="container">
					
							<?php 
							echo "<h1> <font size:36px>";
							include 'get_date.php'; 
							echo "</font></h1>";
							?>
							<header>
								<h2>History</h2>
							</header>
							<br />
							Section which you can see are <u><b>Listed Below</b></u><br>
							<form action="load_events.php" method="post">
							<input type=radio name="pagetype" value=music><b>Music</b>
							<input type=radio name="pagetype" value=sports><b>Sports</b>
							<input type=radio name="pagetype" value=industry><b>Economics</b>
							<input type=radio name="pagetype" value=art><b>Art</b>
							<input type=radio name="pagetype" value=literature><b>Literture</b>
							<input type=radio name="pagetype" value=history><b>History</b>
							<input type=submit name=submit value=OK >
							</form>
							
							<!--<p><a href="quiz.php" target="_blsnk">Click here to enter Quiz</a></p>-->
						</div>
					</section>

					<!-- Science Section-->
					<section id="Science" class="three">
						<div class="container">

							<?php 
							echo "<h1> <font size:36px>";
							include 'get_date.php'; 
							echo "</font></h1>";
							?>
							<header>
								<h2>Science</h2>
							</header>

							

						</div>
					</section>
					
					<!-- Sports Section-->
					<section id="Sports" class="four">
						<div class="container">

							<?php 
							echo "<h1> <font size:36px>";
							include 'get_date.php'; 
							echo "</font></h1>";
							?>
							<header>
								<h2>Sports</h2>
							</header>

							

						</div>
					</section>
			
				<!-- Contact -->
					<section id="Contact" class="five">
						<div class="container">

							<?php 
							echo "<h1> <font size:36px>";
							include 'get_date.php'; 
							echo "</font></h1>";
							?>
							<header>
								<h2>Contact</h2>
							</header>
							
							<form method="post" action="mailto:rajanisrare@gmail.com">
								<div class="row half">
									<div class="6u"><input type="text" class="text" name="name" placeholder="Name" /></div>
									<div class="6u"><input type="text" class="text" name="email" placeholder="Email" /></div>
								</div>
								<div class="row half">
									<div class="12u">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<a href="#" class="button submit">Send Message</a>
									</div>
								</div>
							</form>

						</div>
					</section>
			
			</div>

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<div class="copyright">
						<p>&copy; 2014 Today is Special Team. All rights reserved.</p>
						<ul class="menu">
							<li>Design: <a href="http://rajanisrare.wix.com/todayisspecial">RAJAN THAKUR'S WEBSITE</a></li>
						</ul>
					</div>
				
			</div>

	</body>
</html>