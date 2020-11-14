<!DOCTYPE HTML>
<html>
<head>

	<!-- Meta Data -->
	<title>Colden Cullen</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="google-site-verification" content="XUqHLGmncqfaFdIaHQmFbxnLMKrO2yidcWk6WeOTJgI" />
	<meta name="description" content="I like to make games. And stuff.">
	<link rel="icon" type="image/png" href="/media/Icon.png">

	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="//necolas.github.io/normalize.css/8.0.1/normalize.css" />

	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" />

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:400,600|Russo+One' rel='stylesheet' type='text/css'>

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
	<!-- jQueryUI -->
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/css/jquery-ui-1.10.0.custom.min.css">

	<!-- Prefix Free -->
	<script type="text/javascript" src="/js/prefixfree.min.js"></script>

	<!-- My Javascript Files -->
	<script type="text/javascript" src="/js/scripts.js"></script>

	<!-- Google Code Prettify -->
	<link rel="stylesheet" type="text/css" href="/google-code-prettify/prettify.css" />
	<script type="text/javascript" src="/google-code-prettify/prettify.js"></script>
	
</head>
<body>

	<!-- Navigation bar -->
	<div class="navbar">
		<div class="left">
			<ul>
				<li><div class="navlink" id="homelink"><a href="/#home">Colden Cullen</a></div></li>
			</ul>
		</div>
		<div class="right">
			<ul>
				<li><div class="navlink" id="aboutlink"><a href="/#about">About Me</a></div></li>
				<li><div class="navlink" id="resumelink"><a href="/#resume">Resume</a></div></li>
				<li><div class="navlink" id="portfoliolink"><a href="/#portfolio">Projects</a></div></li>
			</ul>
		</div>
	</div>

	<!-- Content body -->
	<div class="document container">

		<!-- Home -->
		<div class="main page" id="home">
			<div class="panel short">
				<div class="content">
					<h1>I like to build games.</h1>
					<h2>And stuff.</h2>
				</div>
			</div>
		</div>

		<?php
		include( "php/content.php" );
		?>
	</div>

	<div class="footer">
		<div class="left">
			<div class="navlink" id="contactlink">
				<a href="mailto:colden@coldencullen.com" target="_blank" >Contact Me</a>
			</div>
		</div>
		<div class="right">
			<div>&copy; Colden Cullen 2012-20</div>
		</div>
	</div>

</body>
</html>