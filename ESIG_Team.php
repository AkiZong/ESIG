<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="./CSS/Main_Template.css" rel="stylesheet" type="text/css" />
		<link href="./CSS/ESIG_Team.css" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" async></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" async></script>
		
		<script async>
			$('#upload').on('click', function() {
				/*var file_data = $('#file-input').prop('files')[0];   
				var form_data = new FormData();                  
				form_data.append('file', file_data);
				alert(form_data);                             
				$.ajax({
					url: 'upload_resume.php', // point to server-side PHP script 
					dataType: 'text',  // what to expect back from the PHP script, if anything
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,                         
					type: 'post',
					success: function(php_script_response){
						alert(php_script_response); // display response from the PHP script, if any
					}
				});*/
				alert("hi");
			});
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
						<li>
							<a href="./AboutUs.php">About us</a>
						</li>
						<li>
							<a href="./partners.php">Partners</a>
						</li>
						<li>
							<a href="./E-Books.php">Digital Resources</a>
						</li>
						<li>
							<a href="./blog.php">Blog</a>
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
			<img src="./Images/team-banner.png">
			<div class="bannercaption"><h1>ESIG Team</h1><h2>Making financial planning simple.</h2><br><p>***</p></div>
		</div>
	</div>
	<div class="main-page-content text-center">
		<p>Behind every great company is a great team, passionate and motivated to wake up and
		drive their company to having a substantial impact on the world. We are a team of 
		dedicated individuals with extensive experience in finance, marketing, design and 
		technology. Meet our core team of leaders and disruptors!</p>
		<div class="spacer"></div>
		<div class="row">
			<img class="circular-image" src="./Images/circleimage.jpg">
			<h4>Tariq Ali Asghar</h4>
			<p id="position-text">CEO</p>
			<p id="position-text">Tariq is an industry veteran with two decades of experience in business and entrepreneurship,
				working in S&P 500 Companies in New York, Boston and Toronto as well as the World Bank and United Nations. Tariq
				is a recognized author and has spoke on different international forums including IMF and UNDP. Tariq holds Masters
				in Finance and Economics from Boston University and World Bank Scholar from 1999 to 2001 and the recipient of the 
				Brittania Chevening Award 1998. Tariq started ESIG Inc. in july 2014 to create a world class holistic saas wealth planning
				model that disrupts the contemporary wealth advisory industry, and excludes a positive impact on the financial market.</p><br><br><br><br><br>
		</div>
		<div class="spacer"></div>
	</div>
	
	<div class="footer row-fluid">
		<section class="newsletter" id="about">
			<div class="container-fluid">
				<div class="row-fluid text-center">
					<h2>Join the team</h2>
					<p>Looking to join us on our mission to changing the global financial
					market? We're always looking for motivated and talented individuals to 
					join our rapidly growing team. View open positions or submit your resume.</p><br>
						<div class="file-upload">
							<form id="newsletter" action="send_resume" target="upload" method="post" enctype="multipart/form-data">
								<input type="text" class="email" name="email" id="email" placeholder="Enter email address" />
								<label for="file-input">
									<img id="upload-image" src="./Images/upload.png"/>
								</label>
								<div class="input-disable">
									<input id="file-input" type="file"/>
								</div>
							</form>
						</div>
						<a href="#">View open positions!</a>
						<input type="submit" id="upload" class="subscribe" name="submit" value="Send Resume" />
						<iframe id="upload" name="upload" style="display:none" ></iframe>
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
