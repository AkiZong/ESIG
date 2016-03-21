<html>
	<head>
	
		<?php
		    header("Content-type: text/html; charset=iso-8859-1");
			
			// Include database connection and functions here.
			include_once './External PHP/db_connect.php';
		?>
		
		<META http-equiv="Content-type" content="text/html; charset=iso-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="./CSS/Main_Template.css" rel="stylesheet" type="text/css" />
		<link href="./CSS/blog.css" rel="stylesheet" type="text/css" />
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
						<li class="active">
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
			<img src="./Images/blog-banner.png">
			<div class="bannercaption"><h1>Blog</h1><h2>Providing tips, best practices and research <br>to grow your wealth</h2><p>***</p></div>
		</div>
	</div>
	
	<div class="spacer"></div>
	<div class="container-fluid" id="color-background">
		<div class="main-page-content">
			<p>Everyone should have access to winning financial advice. Our blog provides tips, best practices
			and research on fintech trends.</p>
			<?php
			
				$query_date = 'SELECT date_updated FROM posts ORDER BY date_updated DESC LIMIT 1';
				$STH = $DBH->query($query_date);
				
				$STH->setFetchMode(PDO::FETCH_ASSOC);
				
				$date_updated = $STH->fetch();
				
				echo '<h5>Last post on '. date("F jS Y", strtotime($date_updated['date_updated'])) .'</h5>';
			?>
			<div id="content">
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
					
					$limit = 3;
					$offset = ($current_page -1) * $limit;
					
					$query_pages = 'SELECT COUNT(*) AS rows FROM posts WHERE status = 1';
					$query = 'SELECT id, post_title, LEFT(post_content, 220) As post_content, authors.name AS name, date_created, status FROM posts INNER JOIN authors ON posts.author_id = authors.author_id WHERE status = 1';

					if(isset($_GET['search']))
					{
						$query_pages = $query_pages .' AND post_title LIKE "%'.$_GET['search'].'%"';
						$query = $query .' AND post_title LIKE "%'.$_GET['search'].'%"';
					}
					
					$query = $query .' LIMIT 3 OFFSET '. $offset;
					
					$STH2 = $DBH->query($query);
					$STH3 = $DBH->query($query_pages);

					# setting the fetch mode
					$STH2->setFetchMode(PDO::FETCH_ASSOC);
					$STH3->setFetchMode(PDO::FETCH_ASSOC);
				
					$post_rows = $STH2->fetchAll();
					$total_rows = $STH3->fetch();
					
					foreach($post_rows as $post_row) {
						echo '<div class="spacer"></div>';
						echo '<div class="blog_container">';
						echo '<img src="./Images/blog_posts.jpg" class="post-header-img" />';							
						echo '<h2>' . $post_row['post_title'] . '</h2>';
						echo '<h5 id="float-left">Posted by ' . $post_row['name'] . '</h5><span id="space"></span><h5 id="float-right">'. date("F jS Y", strtotime($post_row['date_created'])) .'</h5>';
						echo '<p>'. $post_row['post_content'] .'...</p>';
						echo '<a href="./blog2.php?post='.$post_row['id'].'#content"><input type="button" class="read-more" value="Read More" /></a>';
						echo '</div>';
					}
					
					echo '<div class="spacer"></div><div class="spacer"></div>';
					$total_pages = ceil($total_rows['rows'] / 3);
					
					echo '<center>';
					if($current_page > 1)
					{
						echo '<a margin-left=20% href="./blog.php?page='.($current_page-1).'#content"><img src="./Images/Left-Arrow.jpg" ></img></a>';
					}
					
					$pages_left = ($total_pages - $current_page);
					
					if($pages_left < 0)
					{
						$pages_left = 0;
					}
					
					echo '<span class="mobile_show">View</span> '. $pages_left .' <span class="mobile_show">more</span> results <span class="mobile_show">. . .</span>';
					
					if($current_page < $total_pages)
					{
						echo '<a margin-right=20% href="./blog.php?page='.($current_page+1).'#content"><img src="./Images/Right-Arrow.jpg"></img></a>';
					}
					
					echo '<div class="spacer"></div>';
				?>				
			</div>
			<div class="main-body-space"></div>
			<div id="sidebar">	
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
				
				<?php
					
					$recent_post = 'SELECT id, post_title, LEFT(post_content, 65) As post_content, date_created FROM posts WHERE status = 1 GROUP BY date_created DESC LIMIT 2';

					$STH5 = $DBH->query($recent_post);
					
					$STH5->setFetchMode(PDO::FETCH_ASSOC);
				
					$posts = $STH5->fetchAll();
					
					echo '<h4>Recent Posts</h4>';
					
					foreach($posts as $post) {
						echo '<b><a href="./blog2.php?post='.$post['id'].'#content"><h6>'.$post['post_title'].'</h6></a></b>';
						echo '<p id="small-text">'.$post['post_content'].'</p>';
					}					
				?>
				
				<div class="space"></div>
				
				<h4>Tags</h4>
				<button>ETF</button><button>RRSP</button><button>TFSA</button><button class="large-tag">Equity</button>
				
				<div class="space"></div>
				
				<h4>E-Books</h4>
				<img src="./Images/ESIG-Book.jpg" class="new-book">
				<img src="./Images/ESIG-Book.jpg" class="new-book">				
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
