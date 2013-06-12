<!DOCTYPE html>
<html>
<head>
<?php
set_include_path( implode( PATH_SEPARATOR, array(
"../../",
get_include_path()
) ) );
include_once("assets/php/master.php");
?>
	<title>The History of Apple.com's Nav Bar in CSS | by Matt Boldt</title>
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</head>

<body>

	<div class="header">
		<div class="wrapper">
			<h1>The History of Apple.com's Nav Bar Made with Pure CSS</h1>
			<small>...plus a little base64 &amp; jQuery</small>
		</div>
	</div>


<div class="wrapper">
		<span class="tagline">
			A demo made with love by <a href="http://www.mattboldt.com">Matt Boldt</a>
			<div style="margin-top:10px;display:block;">
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="atMattb">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
		</span>
	

	<div class="block">
	

		<h1>1998 - 1999</h1>
		<div class="nav-wrap-1999">
			<span class="tall-end-1999"><a href="#">The<br />Apple Store</a></span>		
				<ul class="nav-1999">
					<li><a href="#">Hot News</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Design &amp; Publishing</a></li>
					<li><a href="#">Developer</a></li>
					<li><a href="#">About Apple</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">Education</a></li>
					<li><a href="#">Where to Buy</a></li>
				</ul>
			<span class="tall-right-1999"><a href="#"><span></span></a></span>
		</div>
		<div class="clear"></div>

	</div>
	
	<div class="block">
		<h1>2000 - 2001</h1>
		<div class="nav-wrap-2000">
			<ul class="nav-2000">
				<li class="active-2000"><a href="#"><span></span></a></li>
				<li><a href="#">Store</a></li>
				<li><a href="#">iReview</a></li>
				<li><a href="#">iTools</a></li>
				<li><a href="#">iCards</a></li>
				<li><a href="#">QuickTime</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Mac OS X</a></li>
			</ul>
			<div class="sub-nav-wrap-2000">
				<ul class="sub-nav-2000">
					<li><a href="#">Hot News</a></li>
					<li><a href="#">Hardware</a></li>
					<li><a href="#">Software</a></li>
					<li><a href="#">Made4Mac</a></li>
					<li><a href="#">Education</a></li>
					<li><a href="#">Creative</a></li>
					<li><a href="#">Small Biz</a></li>
					<li><a href="#">Developer</a></li>
					<li><a href="#">Where to Buy</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		
	</div>
	
	<div class="block">
		<h1>2001 - 2007<small>(This design varied over the years)</small></h1>
		<div class="nav-wrap-2007">
			<ul class="nav-2007">
				<li><a href="#"><span></span></a></li>
				<li><a href="#">Store</a></li>
				<li class="active-2007"><a href="#">iPhone</a></li>
				<li><a href="#">iPod + iTunes</a></li>
				<li><a href="#">.Mac</a></li>
				<li><a href="#">QuickTime</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Mac OS X</a></li>
			</ul>
			<div class="sub-nav-wrap-2007">
				<ul class="sub-nav-2007">
					<li class="active-sub-2007"><a href="#">Overview</a></li>
					<li><a href="#">iPod</a></li>
					<li><a href="#">Phone</a></li>
					<li><a href="#">Internet</a></li>
					<li><a href="#">Technology</a></li>
					<li><a href="#">Tech Specs</a></li>
					<li><a href="#">Keynote</a></li>
					<li><a href="#">Sign-up</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="block">
		<h1>2007 - 2010</h1>
		<ul class="nav-2010">
			<li><a href="#"><span></span></a></li>
			<li><a href="#">Store</a></li>
			<li><a href="#">Mac</a></li>
			<li><a href="#">iPod</a></li>
			<li><a href="#">iPhone</a></li>
			<li><a href="#">iPad</a></li>
			<li><a href="#">iTunes</a></li>
			<li><a href="#">Support</a></li>
			<li class="search-2010"><input type="text" placeholder="Search" /></li>
		</ul>
		<div class="clear"></div>
	</div>
	
	<div class="block">
		<h1>2011 - Current</h1>
		<div class="nav-wrap-2011">
			<ul class="nav-2011">
				<li><a href="#"><span></span></a></li>
				<li><a href="#">Store</a></li>
				<li><a href="#">Mac</a></li>
				<li><a href="#">iPod</a></li>
				<li><a href="#">iPhone</a></li>
				<li><a href="#">iPad</a></li>
				<li><a href="#">iTunes</a></li>
				<li><a href="#">Support</a></li>
			</ul>
			<div class="search-2011"><span class="search" aria-hidden="true" data-icon="&#x51;"></span><input type="text" /></div>
			<div class="suggest-2011">Hello.<br />These are search suggestions.</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="block">
		<h1>The Future <small>(but probably not)</small></h1>
		<div class="nav-wrap-future">
			<ul class="nav-future">
				<li><a href="#"><span></span></a></li>
				<li><a href="#">Store</a></li>
				<li><a href="#">Mac</a></li>
				<li><a href="#">iPod</a></li>
				<li><a href="#">iPhone</a></li>
				<li><a href="#">iPad</a></li>
				<li><a href="#">iTunes</a></li>
				<li><a href="#">Support</a></li>
			</ul>
			<div class="search-future"><span class="search" aria-hidden="true" data-icon="&#x51;"></span><input type="text" /></div>
			<div class="suggest-future">Hello.<br />These are search suggestions.</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="block">
		<h1>The Future <small>(&agrave; la Jony Ive)</small></h1>
		<div class="nav-wrap-ios7">
			<ul class="nav-ios7">
				<li><a href="#"><span></span></a></li>
				<li><a href="#">Store</a></li>
				<li><a href="#">Mac</a></li>
				<li><a href="#">iPod</a></li>
				<li><a href="#">iPhone</a></li>
				<li><a href="#">iPad</a></li>
				<li><a href="#">iTunes</a></li>
				<li><a href="#">Support</a></li>
			</ul>
			<div class="search-ios7"><span class="search" aria-hidden="true" data-icon="&#x51;"></span><input type="text" /></div>
			<div class="suggest-ios7">Hello.<br />These are search suggestions.</div>
		</div>
		<div class="clear"></div>
	</div>


	<div class="block"></div>

</div>

	<div class="header">
		<p>Developed using Google Chrome for Mac. Works well in Firefox. Some animation issues in Safari.</p>
		<p>All css &amp; html is hand-written. Nav bar designs inspired by Apple. Thanks <a href="http://web.archive.org/web/*/http://www.apple.com/">Wayback Machine</a>!</p>
		<p class="small-desc">jQuery handles things like element resizing on input focus, and search suggestion display logic.<br /> Animations are CSS3's -transition property.</p> 
		<small style="color:#999;font-size:12px;padding:20px 0;display:block;">Note: The Apple Icons are, indeed, images. They are rendered in CSS with a Base64 background image.
			<br />So, you know, you can still copy and paste the code anywhere. I'm also using icon fonts for the magnifying glass icon in the search bar.

		</small>
	</div>



</body>

</html>