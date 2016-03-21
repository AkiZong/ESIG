<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="./CSS/Main_Template.css" rel="stylesheet" type="text/css" />
		<link href="./CSS/partners.css" rel="stylesheet" type="text/css" />
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
			xmlhttp.open("GET","./External PHP/submit_partnership.php?email="+email,true);
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
                                                <li role="presentation" class="dropdown">
                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                        About us <span class="caret"></span>
                                                        </a>
                                                          <ul class="dropdown-menu">
                                                          <li> <a href="./AboutUs.php" class="textGrey">About us</a> </li>
                                                          <li> <a href="./Team.php" class="textGrey">Team</a> </li>
                                                        </ul>
                                                </li>
						<li class="active">
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
			<div class="bannercaption"><h1>Partners</h1><br><h2>Leading with industry expertise</h2><br><p>***</p></div>
		</div>
	</div>
	<div class="main-page-content text-center">
		<div class="row-fluid">
		<!--<span id="result"></span>-->
			<h3>Academic Partnerships</h3><br>
			<p>We are partnering with leading researchers to ensure we provide complete financial solutions. Our partnership with 
				the business school at Wilfred Laurier University undertakes research on top funds model and portfolio optimization
				strategies in the light of the modern portfolio theory.</p>
				<div class="spacer"></div>
				<img src="./Images/WLUcrest_med.png" id="logo"/>
		</div>
	</div>
	
	<div class="spacer"></div>
	
	<div class="footer row-fluid">
		<section class="newsletter" id="about">
			<div class="container-fluid">
				<div class="row-fluid text-center">
					<h2>Become a Partner</h2>
					<p>Want to be a partner? We are looking for strategic
						partnerships with other Fintech companies, currently
						with a focus on CRM and data aggregation.</p><br>
					<!--<form id="newsletter" onsubmit="enter_email()" action="" method="post">-->
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
