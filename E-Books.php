<html>
	<head>
		
		<?php
			// Include database connection and functions here.
			include_once './External PHP/db_connect.php';
		?>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="./CSS/Main_Template.css" rel="stylesheet" type="text/css" />
		<link href="./CSS/E-Books.css" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" async></script>
		<script async>
		function enter_email(newsletter_email)
		{
			var email = "";
			
			if(newsletter_email == null)
			{
				email = document.getElementById("email").value;
			}
			else {
				email = newsletter_email;
			}
			
			if(email == null || email == "" || email.length == 0)
			{
				return false;
			}

			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function() {

				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					if(xmlhttp.responseText == 'Thank you for submitting your email!')
					{
						return true;
					}
					else {
						return false;
					}
				}
			}
			xmlhttp.open("GET","./External PHP/submit_email.php?email="+email,true);
			xmlhttp.send();
		}

		function enter_white_paper()
		{
			var username = document.getElementById("form-email").value;
			if (username != "" && username != null) 
			{
				if (document.getElementById("form-newsletter").checked)
				{
					if(enter_email(username) == false)
					{
						return false;
					}
				}
					var xmlhttp=new XMLHttpRequest();
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState==4 && xmlhttp.status==200) {
							if(xmlhttp.responseText == 1)
							{
								setCookie("esig_name", username, 365);
								lightbox_close();
								return true;
							}
							else if(xmlhttp.responseText == 2)
							{
								document.getElementById("error").innerHTML = "The email entered does not exist!";
							}
							else {
								document.getElementById("error").innerHTML = "Invalid Email Address!";
							}
						}
					}
					xmlhttp.open("GET","./External PHP/download_file.php?email="+username,true);
					xmlhttp.send();

				}
				else {
					document.getElementById("error").innerHTML = "No email was entered!";
				}
				return false;
		}

		function download_file()
		{
			if(checkCookie() == true)
			{
				return true;
			}
			else {
				lightbox_open();
			}
			return false;
		}

		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i=0; i<ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1);
				if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
			}
			return "";
		}

		function checkCookie() 
		{
			var username=getCookie("esig_name");
			if (username!="") {
				return true;
			}else{
				return false;
			}
		} 

		function setCookie(cname, cvalue, exdays) 
		{
			var d = new Date();
			d.setTime(d.getTime() + (exdays*24*60*60*1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + "; " + expires;
		} 

		function lightbox_open()
		{
			$("body").css("overflow", "hidden");
			$("#mainNav").css("display", "none");
			document.getElementById('light').style.display='block';
			document.getElementById('fade').style.display='block';  
		}

		function lightbox_close(){
			$("body").css("overflow", "auto");
			$("#mainNav").css("display", "block");
			document.getElementById('light').style.display='none';
			document.getElementById('fade').style.display='none';
		}
		</script>
	</head>
	<body>
	<div id="light">
		<input type="button" id="exit" text="X" onClick="lightbox_close();" />
		<h6 id="form-title">Want free financial advice?</h6>
		<p>In order to gain access to white papers you will need to enter your email address.
		after the first time you will have immediate access to free advice!</p>
		<p id="form-text"><input type="checkbox" id="form-newsletter" /> Yes, I would like to subscribe to the ESIG Newsletter!</p><br><br>
		<div id="error"></div>
		<input type="text" id="form-email" placeholder="Enter email address" />
		<input type="submit" id="form-subscribe" value="Subscribe" onClick="return enter_white_paper();" />
	</div>
	<div id="fade" onClick="lightbox_close();"></div>
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
						<li class="active">
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
			<div class="bannercaption"><h1>Digital Resources</h1><p>***</p></div>
			<img src="./Images/e-books-banner.png">
		</div>
	</div>
	
	<div class="spacer"></div>
	<div class="container-fluid" id="color-background">
		<div class="main-page-content">
			<div id="content">
				<p>These Digital Books will give you actionable information on how to do holistic financial planning and increase your wealth over time.</p>
				<?php
			
					$query_date = 'SELECT date_updated FROM white_papers ORDER BY date_updated DESC LIMIT 1';
					$STH = $DBH->query($query_date);
					
					$STH->setFetchMode(PDO::FETCH_ASSOC);
					
					$date_updated = $STH->fetch();
					
					echo '<h5>Last update on '. date("F jS Y", strtotime($date_updated['date_updated'])) .'</h5>';
				?>
				
				<div class="main-body-space"></div>
				<div class="show-in-content">
					<form method="get" class="sfm">
						<input type="text" name="search" placeholder="Search" id="sf"/>
						<input type="image" src="./Images/icon-search.png" id="sb"/>
					</form>
					<h5>Mortgages</h5>|<h5>Demographics</h5>|<h5>Energy & Commodities</h5>|<h5>Bubbles</h5>|<h5>AI</h5>|<h5>China AI</h5>|<h5>ETFs</h5>|<h5>MFs</h5>|<h5>Emerging Growth Economies</h5>|<h5>Equity</h5>|<h5>Fintech Trends</h5>
				</div>
				<?php
					
					if(isset($_GET['page']))
					{
						$current_page = (int)$_GET['page'];
					}
					else {
						$current_page = 1;
					}
					
					$limit = 9;
					$offset = ($current_page -1) * $limit;
					
					$query_pages = 'SELECT COUNT(*) AS rows FROM white_papers';
					$query_papers = 'SELECT title, date_updated from white_papers';
					
					if(isset($_GET['search']))
					{
						$query_papers = $query_papers .' WHERE title LIKE "%'.$_GET['search'].'%"';
						$query_pages = $query_pages .' WHERE title LIKE "%'.$_GET['search'].'%"';
					}
					
					$query_papers = $query_papers .' LIMIT 9 OFFSET '. $offset;
					
					$STH2 = $DBH->query($query_pages);
					$STH3 = $DBH->query($query_papers);

					# setting the fetch mode
					$STH2->setFetchMode(PDO::FETCH_ASSOC);
					$STH3->setFetchMode(PDO::FETCH_ASSOC);
				
					$total_rows = $STH2->fetch();
					$papers_rows = $STH3->fetchAll();
					
					$add_row = 0;
					
					foreach($papers_rows as $paper_row) 
					{
						if($add_row == 0 || ($add_row % 3) == 0)
						{
							echo '<div class="row">';
						}
						echo '<div class="col-sm-4">';
						echo '<a href="./White Papers/'.$paper_row['title'].'.pdf" class="bookBlock"><div>'.$paper_row['title'].'</div><div class="bookAuthor">Tariq Ali Asghar</div><!--<img class="books-img" src="./Images/ESIG-Book.jpg" onmouseover="this.src=&#039 ./Images/ESIG-Book-Green.jpg &#039" onmouseout="this.src=&#039 ./Images/ESIG-Book.jpg &#039 "> --></a>';
						echo '<!-- <p>'.date("F jS Y", strtotime($paper_row['date_updated'])).'</p> -->';
						echo '</div>';
						
						if((($add_row+1) % 3) == 0)
						{
							echo '</div>';
							echo '<div class="main-body-space"></div>';
						}
						$add_row += 1;
					}
					
					if(($add_row % 3) != 0)
					{	
						echo '</div>';
						echo '<div class="main-body-space"></div>';
					}
							
					$total_pages = ceil($total_rows['rows'] / 9);
					
					echo '<center>';
					if($current_page > 1)
					{
						echo '<a align="left" href="./E-Books.php?page='.($current_page-1).'#content"><img src="./Images/Left-Arrow.jpg" ></img></a>';
					}
					
					$pages_left = ($total_pages - $current_page);
					
					if($pages_left < 0)
					{
						$pages_left = 0;
					}
					
					echo '<span class="mobile_show">View</span> '. $pages_left .' <span class="mobile_show">more</span> results <span class="mobile_show">. . .</span>';
					
					if($current_page < $total_pages)
					{
						echo '<a align="right" href="./E-Books.php?page='.($current_page+1).'#content"><img src="./Images/Right-Arrow.jpg"></img></a>';
					}
				?>
			</div>
			<div class="main-body-space"></div>
			<div id="sidebar">
				<img src="./Images/ESIG-Books.jpg" class="main-image">
				
				<div class="space"></div>
				
				<div class="show-in-sidebar">
					<form method="get" class="sfm">
						<input type="text" name="search" placeholder="Search" id="sf"/>
						<input type="image" src="./Images/icon-search.png" id="sb"/>
					</form>
					
					<div class="space"></div>
									
					<h4>Categories</h4>
					<hr><h5>Mortgages<p id="right">0</p></h5><hr><h5>Demographics<p id="right">0</p></h5><hr><h5>Energy & Commodities<p id="right">0</p></h5><hr><h5>Bubbles<p id="right">0</p></h5><hr><h5>AI<p id="right">0</p></h5><hr><h5>China AI<p id="right">0</p></h5><hr><h5>ETFs<p id="right">0</p></h5><hr><h5>MFs<p id="right">0</p></h5><hr><h5>Emerging Growth Economies<p id="right">0</p></h5><hr><h5>Equity<p id="right">0</p></h5><hr><h5>Fintech Trends<p id="right">0</p></h5><hr>
					
					<div class="space"></div>
				</div>
								
				<h4>New E-Books</h4>
				<img src="./Images/ESIG-Book.jpg" class="new-book">
				<img src="./Images/ESIG-Book.jpg" class="new-book">
				
				<div class="space"></div>
				
				<h4>Tags</h4>
				<button>ETF</button><button>RRSP</button><button>TFSA</button><button class="large-tag">Equity</button>
				
				<div class="space"></div>
								
				<?php
					
					$recent_post = 'SELECT id, post_title, LEFT(post_content, 75) As post_content, date_created FROM posts WHERE status = 1 GROUP BY date_created DESC LIMIT 2';

					$STH5 = $DBH->query($recent_post);
					
					$STH5->setFetchMode(PDO::FETCH_ASSOC);
				
					$posts = $STH5->fetchAll();
					
					echo '<h4>Recent Posts</h4>';
					
					foreach($posts as $post) {
						echo '<b><a href="./blog2.php?post='.$post['id'].'#content"><h6>'.$post['post_title'].'</h6></a></b>';
						echo '<p id="small-text">'.$post['post_content'].'</p>';
					}					
				?>
			</div>
		</div>
	</div>
	<div class="spacer"></div>
	
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
						<input type="submit" class="subscribe" name="submit" value="Subscribe" onclick="enter_email(null)" />
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
