<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="./CSS/Main_Template.css" rel="stylesheet" type="text/css" />
		<link href="./CSS/ESIG_Team.css" rel="stylesheet" type="text/css" />
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
			<img src="./Images/team-banner.png">
			<div class="bannercaption"><h1>ESIG Team</h1><h2>Making financial planning simple.</h2><p>***</p></div>
		</div>
	</div>
	<div class="main-page-content">
		<div class="row-fluid text-center">
			<p>
			Behind every great company is a great team, passionate and motivated to wake up and drive their
                        company to having a substantial impact on the world.  We are a team of dedicated individuals with
     			extensive experience in finance, marketing, design and technology.  Meet our core team of leaders
                        and disruptors!
                        </p>
		</div>
		<div class="spacer"></div>
               <div class="row-fluid">
			<div class="text-center"><img class="circular-image" src="./Images/tariq_small.png"></div>
                        <h4 class="text-center">Tariq Ali Asghar</h4>
                        <p class="text-center">Founder, CEO</p>
                        <p>Tariq is a seasoned business executive with more than two decades of experience in the global finance and non-profit sectors. Prior to founding ESIG, he was a financial analyst, senior product manager and portfolio manager for Fortune 500 companies where he led projects in corporate finance, global based pricing models, sales finance and product innovation.
                        </p>
                        <p>Tariq is currently leading an accomplished ESIG Team in the development of the World’s first “Cyborg Financial Planning Model” in Canada, USA and Global for helping the middle class and empowering them to generate Cash Flows. It is not about the American or Canadian or Chinese Dream anymore! It is all about the Cash Flows Dream for the struggling middle class (poised against the big wave of rising inequality in North America since 2008). The Mission of ESIG is to create “Financially Literate Citizens” globally so that “nobody should die broke”.  
                        </p>
                        <p> Tariq holds a Masters in Economics and Finance (“Summe Cumme Laude”) from Boston University, USA. He has been a World Bank Scholar (1999-2001) and has led various UNDP Missions toward Poverty Alleviation in the emerging economies internationally. Tariq is also a Six Sigma Greenbelt certified.
                        </p>
                </div>
		<!-- <div class="spacer"></div>
                <div class="row-fluid">
			<div class="text-center"><img class="circular-image" src="./Images/elie_small.png"></div>
                        <h4 class="text-center">Elie Nafekh</h4>
                        <p class="text-center">Vice President Business Development</p>
			<p>Elie has proven practical experience of over two decades in building successful businesses from Canada to China. He has vast experience in sales and business development, working for different companies across the globe, and has established a successful practice with a key financial institution in Canada, serving as a member of the Million Dollars Round Table Conference (MDRT).</p>
               </div> -->
		<div class="spacer"></div>
               <div class="row-fluid">
                        <h4 class="text-center">Ashif Harji</h4>
                        <p class="text-center">Vice President Engineering</p>
                        <p>Ashif has almost a decade of experience in building businesses based in Waterloo Region’s technology ecosystem. Ashif is an expert on the “Lean Startup Process,” and holds a PhD degree in Computer Science from the University of Waterloo. He has extensive experience in systems development, high performance networking, web and mobile development. Ashif also leads ESIG’s product management based of his extensive experience of working with the startups in the technology sector.</p>
               </div>
		<div class="spacer"></div>
               <div class="row-fluid">
			<div class="text-center"><img class="circular-image" src="./Images/ian_small.jpg"></div> 
                        <h4 class="text-center">Ian Willmott</h4>
                        <p class="text-center">Lead Investment Analyst</p>
                        <p>Ian is responsible for guiding ESIG’s product design and functionality and ensuring our dynamic personal financial management platform is aligned to the current market demands. He is spearheading the financial modelling and business analytics of the product.</p> 
	<p>He holds a degree in Economics and Financial Management, from Wilfrid Laurier Univerisity and is currently pursuing the CFA and CFP designations. 
                        </p>
               </div>
		<div class="spacer"></div>
		<div class="row-fluid">
			<div class="text-center"><img class="circular-image" src="./Images/dave_small.jpg"></div>
                        <h4 class="text-center">Dave McMullin</h4>
                        <p class="text-center">Strategic Product Advisor</p>
                        <p>Dave has over two decades of practical experience in developing businesses in the Financial Services Sector of Canada. He is a creative thinker with deep insights into the Financial Planning Process. At ESIG, Dave plays an important role in driving the Product Strategy and Innovation. Dave is a graduate of Wilfred Laurier University in Psychology and Accounting.</p>
               </div>
		<!--- <div class="spacer"></div>
		<div class="row-fluid">
			<div class="text-center"><img class="circular-image" src="./Images/rocco_small.png"></div> 
                        <h4 class="text-center">Rocco Romeo</h4>
                        <p class="text-center">Lead Business Development</p>
                        <p>Rocco is a creative thinker with a firm command on financial branch management, training/mentoring of new advisors, compliance and investment management, developed over a decade of experience in the financial services industry and through his association with top notch mutual fund and insurance companies in Canada.</p>
               </div> --->
		<div class="spacer"></div>
               <div class="row-fluid">
			<div class="text-center"><img class="circular-image" src="./Images/moh_small.JPG"></div>
                        <h4 class="text-center">Mohammed Ali</h4>
                        <p class="text-center">Senior Software Developer</p>
                        <p>Mohammed is responsible for building the ESIG platform, where he is leveraging his expertise in such computer science topics as data structures, algorithms and software design. He holds a PhD in computer science from University of Waterloo.</p>
               </div>
		<div class="spacer"></div>
               <div class="row-fluid">
			<div class="text-center"><img class="circular-image" src="./Images/chase_small.png"></div>
                        <h4 class="text-center">Chase Denomme</h4>
                        <p class="text-center">Marketing Lead</p>
                       <p>Chase brings over five years of impressive work experience in the field of UX design and marketing honed at large institutions such as Amphenol, SAP and TD Bank.  He is also the co-founder of POET. At ESIG, Chase is leading the marketing and sales strategy, as well as managing all design projects. He is also responsible for the branding and visual style of the company.</p>
                       <p>Chase holds a Bachelor of Arts and Business from the University of Waterloo. He is currently working towards Masters in Business, Entrepreneurship and Technology at the University of Waterloo Conrad Centre. In 2015, Chase was named as one of the top 55 innovators of cutting-edge technology in Waterloo.</p>
               </div>
		<!-- <div class="spacer"></div>
               <div class="row-fluid">
			<div class="text-center"><img class="circular-image" src="./Images/khalid_small.JPG"></div>
                        <h4 class="text-center">Khalid Ahmed</h4>
                        <p class="text-center">HR Associate</p>
                        <p>Khalid has over a decade of proven experience as a competent Accounting and Tax Advisor for small to medium businesses in Canada and internationally.</p>
                        <p>Khalid is working with ESIG in building and streamlining our Accounting, Tax and Financial Management Systems. He holds a CFP designation and is currently working toward his CPA designation.
                        </p>
               </div> -->
		<div class="spacer"></div>
               <div class="row-fluid">
                        <h4 class="text-center">Darshit Sheth</h4>
                        <p class="text-center">Investment Analyst</p>
                        <p>Darshit is a CFA charter-holder with over six years of work experience as an equity analyst in India. Darshit is currently working on our Top Funds Model and driving our thought leadership in funds analytics.</p>
               </div>
		<div class="spacer"></div>
               <div class="row-fluid">
			<div class="text-center"><img class="circular-image" src="./Images/apurva_small.png"></div>
                        <h4 class="text-center">Apurva Narayan</h4>
                        <p class="text-center">Research Lead</p>
                        <p>Apurva obtained his PhD in Systems Design and Engineering from the University of Waterloo. He has extensive research, consulting and teaching experience in the area of optimization, machine learning, statistical modeling of uncertainty and multidisciplinary design optimization. Apurva is exploring new ideas in computation and deep learning. He is guiding ESIG on various research themes related to the Top Funds Model.</p>
               </div>
		<div class="spacer"></div>
               <div class="row-fluid">
                        <div class="text-center"><img class="circular-image" src="./Images/bowen_small.png"></div>
                        <h4 class="text-center">Bowen Hu</h4>
                        <p class="text-center">Research Analyst</p>
                        <p>Bowen is a financial researcher with ESIG. He is currently attending the Masters’ Program in Finance at the Wilfred Laurier University. Bowen is providing advance analytics and data to our research of Top Funds Model. He is also analyzing our portfolio optimization strategies using Exchange Traded Funds, Mutual Funds and other Alternative Investment Strategies.</p>
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
