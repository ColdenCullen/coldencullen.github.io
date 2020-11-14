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
	<link rel="stylesheet" type="text/css" href="http://necolas.github.com/normalize.css/2.1.0/normalize.css" />

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
				<li><div class="navlink" id="bloglink"><a href="/#blog">Blog</a></div></li>
			</ul>
		</div>
	</div>

	<!-- Email form -->
	<div id="contactbackground"></div>
	<div id="contactform" class="panel narrow shortMed">
		<div class="content">
			<form id="emailform" method="POST">

				<!-- Fields for getting client info -->
				<input type="hidden" id="ipinput" name="ip" value="<?php echo getenv('REMOTE_ADDR') ?>" />
				<input type="hidden" id="httprefinput" name="httpref" value="<?php echo getenv('HTTP_REFERER') ?>" />
				<input type="hidden" id="httpagentinput" name="httpagent" value="<?php echo getenv('HTTP_USER_AGENT') ?>" />

				<div class="label text"><label for="nameinput">Your Name:</label></div>
				<input type="text" required="required" id="nameinput" name="username" size="35" />
				<br />

				<div class="label text"><label for="emailinput">Your Email:</label></div>
				<input type="email" required="required" id="emailinput" name="usermail" size="35" />
				<br />

				<div class="label text"><label for="subjectinput">Subject:</label></div>
				<input type="text" required="required" id="subjectinput" name="subject" size="35" />
				<br />

				<div class="label"><label for="messageinput">Message</label></div>
				<br />
				<textarea id="messageinput" name="message" required="required" rows="4"></textarea>
				<br /><br />

				<input type="button" value="Cancel" onclick="toggleContact()" />
				<input type="submit" value="Send Email" />
			</form>
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
		include( "/home/coldencullen/coldencullen.com/php/content.php" );
		?>
	</div>

	<div class="footer">
		<div class="left">
			<div class="navlink" id="contactlink"><a href="/#contactform">Contact Me</a></div>
		</div>
		<div class="right">
			<div>&copy; Colden Cullen 2012-20</div>
		</div>
	</div>

</body>
</html>