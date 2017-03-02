<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Angelo Rosamiran">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/svg" href="images/doodlr.ico">
	<link rel="stylesheet" type="text/css" href="css/works.css">
	<link rel="stylesheet" type="text/css" href="css/photos.css">
	<!--/*<script src="scripts/photos_old.js"></script>*/-->
	<!--<script type="text/javascript" src="scripts/photos.js"></script>-->
	<title>Works: Photographs</title>
</head>
<body>
	<article>

	<div id="main"></div>

		<div>
			<span class="title">Photographs</span>
		</div>
		<div>
			<blockquote>"A picture is worth a thousand words."</blockquote>
			<hr>
			<p class="text">
				In November of 2014 I bought (with my scholarship grant) a Lumia 925 - sporting an 8 megapixel camera. Being a photography enthusiast, I was so happy my mother agreed for me to buy it.
			</p>

			<p class="text">
				But unfortunately on April of the following year it got snatched from me. I'm still happy though because I was able to take amazing photos - even with my little time with it. It really is true to its tagline <quote>More than your eyes can see</quote>.
			</p>
			
			<p class="text">
				You can also visit my "Mobile Photography" album on <a class="link" href="https://www.facebook.com/sage94.rosamiran" target="_blank">Facebook</a> or visit my <a class="link" href="http://www.instagram.com/arosamiran" target="_blank">Instagram</a> account to see more photos.
			</p>

			<div id="photosPane">
				<ul>
					<li class="thumb-holder"><a href="images/img1-wide.jpg" target="_blank"><img src="images/img1-wide.jpg" alt="Lines" class="thumbnail"></a></li>
					<li class="thumb-holder"><a href="images/img2-wide.jpg" target="_blank"><img src="images/img2-wide.jpg" alt="Sunset" class="thumbnail"></li>
					<li class="thumb-holder"><a href="images/img3-wide.jpg" target="_blank"><img src="images/img3-wide.jpg" alt="Merida" class="thumbnail"></li>
					<li class="thumb-holder"><a href="images/img4-wide.jpg" target="_blank"><img src="images/img4-wide.jpg" alt="Christmas Lights" class="thumbnail"></li>
					<li class="thumb-holder"><a href="images/img5-wide.jpg" target="_blank"><img src="images/img5-wide.jpg" alt="The Philippine Flag" class="thumbnail"></li>
					<li class="thumb-holder"><a href="images/img6-wide.jpg" target="_blank"><img src="images/img6-wide.jpg" alt="Fountains" class="thumbnail"></li>
					<li class="thumb-holder"><a href="images/img7-wide.jpg" target="_blank"><img src="images/img7-wide.jpg" alt="Fireworks" class="thumbnail"></li>
					<li class="thumb-holder"><a href="images/img8-wide.jpg" target="_blank"><img src="images/img8-wide.jpg" alt="Silhouette" class="thumbnail"></li>
				</ul>
			</div>
		

	<!-- The Modal -->
	<div id="myModal" class="modal" onclick="modalBtn()">

		<!-- The Close Button -->
		<span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

		<!-- Modal Content (The Image) -->
		<img class="modal-content" id="modalImg">


		<span class="left btn" id="btn">&lt;</span>
		<div class="modalNav">
				<!-- Modal Caption (Image Text) -->
				<div class="caption"></div>
				<div class="caption">
					<span id="count"></span>
					/8
				</div>
		</div>
		<span class="right btn" id="btn">&gt;</span>		
	</div>

			<?php require 'shared/back_btn.php'; ?>
		</div>
	</article>
</body>
</html>