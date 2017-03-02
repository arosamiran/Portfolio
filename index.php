<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Angelo Rosamiran">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/svg" href="images/doodlr.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>

<div id="mySidenav" class="sidenav">
	<!-- Use any element to open the sidenav -->
	<span>
		<div onclick="menuClick(this)" class="container" id="menu">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
	</span>
 	<a href="#intro" onclick="closeNav(0)">Blog</a>
	<a href="#works" onclick="closeNav(1)">Works</a>
	<a href="#contact" onclick="closeNav(2)">Contact me</a>
	<a href="#links" onclick="closeNav(3)">Links</a>
<div id="outsidenav"></div>
</div>

<div id="main">
	<!-- <div id="ibg" class="bg"></div> -->
	<div id="introbg"></div>
	<div id="introcolor"></div>
	<div class="intro wrapper parallax" id="intro">
		<div class="flex">
			<div class="s-doodlr">
				<a href="blog.php" class="link"><img src="images/doodlr.png" class="doodlr-s" alt="Doodlr logo"></a>
			</div>
			<div class="text" id="about">
				<span class="date">2016</span><p>&nbsp;&nbsp;&nbsp;&nbsp;Hello! I am Angelo Rosamiran, a Computer Engineering student. Aside from what I am learning in school, I am also passionate about programming - especially on the web development and designing front.</p>

				<p>&nbsp;&nbsp;&nbsp;&nbsp;In my free-time I read e-books about web-development and go through the exercises by creating websites (like this) to test my understanding. I also do designs (lanyards and shirts).</p>

				<span class="date">2017</span><p>&nbsp;&nbsp;&nbsp;&nbsp;This 2017, I left school but my passion in programming is still burning.</p>
			</div>
		</div>
	</div>

	<div class="buttons-1">
		<div class="button-1"></div>
		<div class="button-2"></div>
	</div>
	<div class="buttons-2">
		<div class="button-3"></div>
		<div class="button-4"></div>
	</div>
	<!--<div class="divider" id="iw"></div>-->
	<!-- <div id="wbg" class="bg"></div> -->
	<div class="works wrapper parallax" id="works">
		<div class="flex">
			<div id="works-header"><span class="header">Works</span></div>
				<div class="holder">
					<a href="designs_animations.php">
						<div>
							<div class="work-1"><span class="title">Designs and Animations</span>
							<p class="text">Making designs and animations in my free-time. Especially when ideas came pouring in.</p></div>
						</div>
					</a>
					
					<a href="websites.php">
						<div>
							<div class="work-2"><span class="title">Websites</span>
							<p class="text">I just love making websites. Here, I showcase some of them.&nbsp;<code>#coding</code></p></div>
						</div>
					</a>
		
					<a href="embedded_systems.php">
						<div>	
							<div class="work-3"><span class="title">Embedded Systems</span>
							<p class="text">Makes I have co-authored with my classmates for school projects.</p></div>
						</div>
					</a>
		
					<a href="photographs.php">
						<div>
							<div class="work-4"><span class="title">Photographs</span>
							<p class="text">Photography is one of my hobbies. Here are some of my best shots.</p></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="divider" id="wc"></div>
	<!-- <div id="cbg" class="bg"></div> -->
	<div class="contact wrapper parallax" id="contact">
		<div class="flex">
			<div class="heading-holder"><span class="header">Contact me</span></div>
			<div class="label-holder"><label for="msg" class="text">Send me a tweet</label></div>
			<div class="form-holder">
				<form action="<?php echo htmlspecialchars($_SERVER[PHP_SELF]); ?>" method="post">
					<input type="text" name="msg" class="text" value="@arosamiran" required>
					<br>
					<input type="submit" name="btn" value="Tweet" formenctype="multipart/form-data" class="btn text">
				</form>
			</div>

			</div>
		</div>
	</div>
	<!--<div class="divider" id="cl"></div>-->
	<!-- <div id="lbg" class="bg"></div> -->
	<div class="links wrapper parallax" id="links">
		<div class="flex">
			<div><span class="header">Links</span></div>
			<div class="link-holder">
				<div><a href="_blank" href="http://www.facebook.com/sage94.rosamiran" class="link-1 text">Facebook</a></div>
				<div><a href="_blank" href="http://www.twitter.com/arosamiran" class="link-2 text">Twitter</a></div>
				<div><a href="_blank" href="http://www.instagram.com/arosamiran" class="link-3 text">Instagram</a></div>
				<div>
					<span class="filler">&nbsp;</span>
				</div>
				<div><a href="_blank" href="https://plus.google.com/+AngeloRosamiran" class="link-4 text">Google+</a></div>
				<div><a href="_blank" href="https://www.linkedin.com/in/arosamiran" class="link-5 text">LinkedIn</a></div>
				<div><a href="_blank" href="http://arosamiran.tumblr.com/" class="link-6 text">Tumblr</a></div>
				<div><a href="_blank" href="http://dudlr.wordpress.com/" class="link-7 text">Wordpress</a></div>
				<div><a href="_blank" href="http://www.flickr.com/arosamiran" class="link-8 text">Flickr</a></div>
				<div><a href="_blank" href="http://arosamiran.github.com/" class="link-9 text">Github</a></div>
				<div><a href="_blank" href="http://www.youtube.com/arosamiran" class="link-10 text">Youtube</a></div>
			</div>
		</div>
	</div>
	<div class="footer"><span id="year" class="text">&copy;&nbsp;2017</span></div>
</div>

</body>
</html>