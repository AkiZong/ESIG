<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="./CSS/Main_Template.css" rel="stylesheet" type="text/css" />
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

		function send_message()
		{
			var name = document.getElementById("name").value;
			var email = document.getElementsByName("contact_email")[0].value;
			var company = document.getElementById("company").value;
			var message = document.getElementById("message").value;
			
			if(name == null || name == "" || name.length == 0)
			{
				alert("A Name was not entered!");
				return;
			}
			if(email == null || email == "" || email.length == 0)
			{
				alert("An Email Address was not entered!");
				return;
			}
			if(company == null || company == "" || company.length == 0)
			{
				alert("A Company was not entered!");
				return;
			}
			if(message == null || message == "" || message.length == 0)
			{
				alert("A Message was not entered!");
				return;
			}
			
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					alert(xmlhttp.responseText);
				}
			}
			xmlhttp.open("POST","./External PHP/send_email.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("name="+name+"&email="+email+"&company="+company+"&message="+message);
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
                                                <li role="presentation" class="dropdown">
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
						<li class="active">
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
			<div class="bannercaption"><h1>Contact Us</h1><br><h2>Get in touch with us! We would love to hear from you.</h2><br><p>***</p></div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="main-page-content">
				<div class="spacer"></div><div class="col-md-6">				
					<h3>Address</h3>
					<p>265 Hagey Blvd.</p>
					<p>Waterloo, ON</p>
					<p>N2L 6R5</p>
					<br>
					<p><b>T:</b> 519-342-2400</p>
					<p><b>E:</b> admin@emergingstar.ca</p>
				</div>
				  <div class="col-md-6">
					<!--<form action="" method="get">-->
						<h3>Send a message</h3>
						<input type="text" id="name" name="name" placeholder="Name" />
						<input type="text" id="email" name="contact_email" placeholder="Email" />
						<input type="text" id="company" name="company" placeholder="Company" />
						<textarea id="message" name="message" placeholder="Type a brief message..." ></textarea><br>
						<center><input type="submit" value="Send Message" class="send-message" onclick="send_message()" /></center><br><br><div class="spacer"></div>
					<!--</form>-->
				</div>
			</div>
		</div>
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
