<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="./CSS/Main_Template.css" rel="stylesheet" type="text/css" />
		<link href="./CSS/AboutUs.css" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" async></script>
		<script async>
		function enter_email()
		{
			var email = document.getElementById("email").value;
			
			if(email == null || email == "" || email.length == 0)
			{
				alert("An Email Address was not entered!");
				return;
			}

			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					alert(xmlhttp.responseText);
				}
			}
			xmlhttp.open("GET","./External PHP/submit_email.php?email="+email,true);
			xmlhttp.send();
		}
		</script>
	</head>
	<body>
	
	<div class="header row-fluid">
	    <!-- Navigation -->
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./home.php">
						<img src="./Images/EmergingStar_RGB_logo.png" class="logo">
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="./home.php">Home</a>
						</li>
                                                <li role="presentation" class="dropdown active">
                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                        About us <span class="caret"></span>
                                                        </a>
                                                          <ul class="dropdown-menu">
                                                          <li> <a href="./AboutUs.php" class="textGrey">About us</a> </li>
                                                          <li> <a href="./Team.php" class="textGrey">Team</a> </li>
                                                        </ul>
                                                </li>
						<li>
							<a href="./partners.php">Partners</a>
						</li>
						<li>
							<a href="./E-Books.php">Digital Resources</a>
						</li>
						<li>
							<a href="./blog">Blog</a>
						</li>
						<li>
							<a href="./ContactUs.php">Contact</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>	
		<div class="banner">
			<img src="./Images/contact-banner.png">
			<div class="bannercaption"><h1>About Us</h1><h2>Building a smarter way to grow wealth</h2><p>***</p></div>
		</div>
	</div>
	<div class="main-page-content text-center">
		<div class="row-fluid">
			<h3>Our Story</h3><br>
			<p>Increasing market volatility and multi-dimensional risk factors supporting modern global markets has 
				created a huge demand for a next generation wealth management solution.<br><br>After years of personal
				experience in the investment management industry, the Founder, Tariq Ali Asghar, set out to build a
				holistic wealth management platform that would deliver exceptional experience and drive better results.
				We're leveraging innovative technology with the best financial research(or advice) to empower companies
				and individuals to manage their money.</p>
			<p id="seperator">***<p>
		</div>
		<h3>Vision</h3><br>
		<div class="row-fluid">
			<p>A global society of financially iterate citizens who are empowered to control their financial break.<br>
				<b id="bold-black">Nobody should die broke</b></p>
		</div>
		
		<p id="seperator">***<p>
		
		<h3>Mission</h3><br>
		<div class="row-fluid">
			<p>To produce a substantial positive impact on the North American financial market; by leveraging information
				-enabling and collaborative technologies, harnessing the power of cloud computing, and anticipating the
				dynamic Emerging Star&trade; trends in the financial services industry.</p>
		</div>		
	<div class="spacer"></div>
	</div>
	<div class="footer row-fluid">
		<section class="newsletter" id="about">
			<div class="container-fluid">
				<div class="row-fluid text-center">
					<h2>Join our newsletter</h2>
					<p>Enter your email address to subscribe to our
					newsletter and receive insightful and relative
					information to help you succeed with your investments!</p><br>
					<!--<form id="newsletter" action="" method="post">-->
						<input type="text" class="email" name="email" id="email" placeholder="Enter email address" /><br><br>
						<input type="submit" class="subscribe" name="submit" value="Subscribe" onclick="enter_email()" />
					<!--</form>-->
				</div>
			</div>
		</section>
		<footer>
		  <div class="container-fluid">
			<div class="footer-contents">
				<div class="row-fluid">
					<div class="col-sm-6">
						<span class="copyright">All rights reserved by Emerging Star Investment Group Inc.</span>
					</div>
					<div class="col-sm-6">
						<ul class="list-inline social-buttons">
							<li><a href="https://www.linkedin.com/company/emerging-star-investment-group"><img src="./Images/icon-linkedin.png"></a></li>
							<li><a href="#"><img src="./Images/icon-twitter.png"></a></li>
							<li><a href="https://plus.google.com/104991614544733277307/about"><img src="./Images/icon-google+.png"></a></li>
						</ul>
					</div>
				</div>
			</div>
		  </div>
		</footer>
	</div>
	</body>
</html>
