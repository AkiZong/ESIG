<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="./CSS/Main_Template.css" rel="stylesheet" type="text/css" />
		<link href="./CSS/home.css" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css' >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" async></script>
		<script async>
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
						<li class="active">
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
			<img src="./Images/home.jpg">
			<div class="bannercaption"><h1>simplified financial planning</h1><h2>We are building an easy-to-use wealth management platform
				for financial advisors who want to engage and collaborate with their clients as they grow their
				wealth</h2></div>
		</div>
	</div>
	<div class="main-page-content text-center">
		<div class="row-fluid">
			<h3>Who We Are</h3>
			<p>Our Vision is to make a substantial impact on the Canadian and Global Financial Market
			by leveraging information-enabling technologies, harness the power of cloud computing
			and anticipating the dynamic 'Emerging Star' trends in the Financial Services Industry</p>
			<a href="./AboutUs.php"><button name="who_we_are_btn" href="./AboutUs.php" id="small-btn" >View Details</button></a>
			<p id="seperator">***<p>
		</div>
		<h3>Our Products</h3>
		<div class="row spacer">
			<div class="col-sm-6">
				<img src="./Images/mapwell-logo.png">
				<div class="spacer"></div>
				<p id="small-text">Mapwell&trade is our Financial Planning Platform that organizes and aggregates
				fragmented information to empowers Financial Advisors toward building next generation
				'Practice Management'.</p><br>
				<p id="small-text">Mapwell addresses serious current gaps in the Financial Services Industry and aims
				to provide holistic, timely and integrated information to end-users. It leverages 
				existing technologies and combines them powerfully to provide one-stop solution to
				Financial Advisors</p>
				<button name="mapwell_btn" id="mapwell_btn" href="#" >View Details</button>
			</div>
			<div class="col-sm-6">
				<img src="./Images/topfundsmodel.png">
				<div class="spacer"></div>
				<p id="small-text">The Top Funds (ETFs) Model demonstrates this information by deploying the power 
				of our intangibles (investment algorithms) with the power of cloud super-computing.</p><br>
				<p id="small-text">We aim to separate signals from noise and organize the Top Funds data efficiently, 
				thereby saving time and costs to Banks and Wall Street companies. Our disruptive model
				aims to shake the stagnant Assets Industry.</p><br>
				<button name="top_funds_btn" id="top_funds_btn" href="#" >View Details</button>
			</div>
		</div>
		<div class="spacer"></div>
	</div>	
	<div class="footer row-fluid">
		<section class="newsletter" id="about">
			<div class="container-fluid">
				<div class="row-fluid text-center">
					<div class="col-sm-6">
						<h2>Contact Us</h2>
						<p>Leave us a message and we will get back to you right away!</p>
					</div>
					<div class="col-sm-6">
						<!--<form id="newsletter" action="" method="post">-->
							<input type="text" class="contact" name="name" id="name" placeholder="Name" />
							<input type="text" class="contact" name="contact_email" id="email" placeholder="Email" />
							<input type="text" class="contact" name="company" id="company" placeholder="Company" />
							<textarea id="message" placeholder="Type a brief message..." class="message"></textarea><br><br>
							<input type="submit" class="subscribe" name="submit" value="Send" onclick="send_message()" />
						<!--</form>-->
					</div>
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
