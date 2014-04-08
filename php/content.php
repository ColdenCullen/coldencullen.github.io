<!-- About Me -->
<div class="main page" id="about">
	<div class="panel med">
		<div class="content">
			<img src="/media/Me.jpg" id="picture" alt="Picture of Me" />

			<p>
				I am a third year Game Design and Development student at Rochester Institute of Technology.
				I program by nature; I love writing code that does cool stuff, and I love learning new things about code and how it works.
				I have worked on all different parts of game development, from engine programming to gameplay to physics to UI to tools.
				Right now I am very interested in engine architecture design and implementation, as well as tool design.
				I am working with a number of teams on a number of projects, with a focus on those ideals.
			</p>

			<img src="/media/SummitPoint.jpg" id="picture" alt="Picture of Me" />
			<p>
				I am 19 years old, and I live in the middle of the Adirondack Mountains.
				In my spare time I enjoy mountain biking in the summer, and in the winter I am on the RIT Alpine Ski Team.
				I also greatly enjoy motorsports, and am currently actively involved in vintage racing with <a href="http://www.vrgonline.org/" target="_blank">The Vintage Racing Group</a>.
			</p>
		</div>
	</div>
</div>

<!-- Resume -->
<div class="main page" id="resume">
	<div class="panel tall">
		<div class="content">

			<!-- Link to Google Docs Viewer of my resume -->
			<div id="resumecontent">
				<iframe src="http://docs.google.com/viewer?url=http%3A%2F%2Fcoldencullen.com%2Fmedia%2FColdenCullen-Resume.pdf&amp;embedded=true"></iframe>
			</div>

			<!-- Download Button -->
			<div id="download">
				<a href="/media/ColdenCullen-Resume.pdf">Download</a>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio -->
<div class="main page" id="portfolio">
	<div class="panel med">
		<div class="content document">

			<!-- Index of Projects -->
			<div class="page" id="index">
				<div class="content">

					<!-- Link to Project 1 -->
					<div class="tile" id="link1">
						<a href="/#project1">
							<img src="/media/CheckersLogo.png" alt="Project Checkers Logo" />
						</a>
					</div>

					<!-- Link to Project 2 -->
					<div class="tile" id="link2">
						<a href="/#project2">
							<img src="/media/GLIFLogo.png" alt="GLIF Logo"  />
						</a>
					</div>

					<!-- Link to Project 3 -->
					<div class="tile" id="link3">
						<a href="/#project3">
							<img src="/media/Storytown.png" alt="Storytown Logo"  />
						</a>
					</div>

					<!-- Link to Project 4 -->
					<div class="tile" id="link4">
						<a href="/#project4">
							<img src="/media/CastlePillage.jpg" alt="Castle Pillage Logo" />
						</a>
					</div>
				</div>
			</div>

			<!-- Project 1 -->
			<div class="project page" id="project1">
				<div class="content">
					<div class="projectnav">
						<!-- Back Button -->
						<div class="button back">
							<a href="/#index">Previous</a>
						</div>
						<!-- Home Button -->
						<div class="button home">
							<a href="/#index">Portfolio Home</a>
						</div>
						<!-- Forward Button -->
						<div class="button forward">
							<a href="/#project2">Next</a>
						</div>
					</div>

					<!-- Content -->
					<h2>Project Checkers</h2>
					<p>
						Project Checkers is a new take on Checkers written in C++ using OpenGL for object rendering.
						Movement is ability based, and players choose their movement rules. This means that every match is unique, as each ability match-up completely changes the game's dynamic.
						I am writing the 2D, sprite-based OpenGL engine. It is currently in a mostly functional state, and is only missing a few features.
						I am also working on a Windows Socket-based peer-to-peer multiplayer network game mode, that will allow users to play multiplayer online. This mode is currently in early development.
					</p>
				</div>
			</div>

			<!-- Project 2 -->
			<div class="project page" id="project2">
				<div class="content">
					<div class="projectnav">
						<!-- Back Button -->
						<div class="button back">
							<a href="/#project1">Previous</a>
						</div>
						<!-- Home Button -->
						<div class="button home">
							<a href="/#index">Portfolio Home</a>
						</div>
						<!-- Forward Button -->
						<div class="button forward">
							<a href="/#project3">Next</a>
						</div>
					</div>

					<!-- Content -->
					<h2>GLIF</h2>
					<img src="/media/GLIF.png" class="screenshot" />
					<p>
						Using external OpenGL libraries in Visual Studio C++ projects can be a difficult, tedious process.
						It involves digging through project properties, putting files in your win32 folder, etc.
						The kicker is, while project properties follow you from computer to computer, those win32 files don't. GLIF solves these problems.
					</p>
					<p>
						GLIF is a unified installer for GLUT, freeglut, GLEW, GLFW, and SOIL.
						With just a few clicks, it gives you all of the files you require, tells Visual Studio where to look for them, and sets up a copy script so your output folder is always up to date.
						This allows you to setup a project once, and no matter what computer you try to run it on, it will never be missing any required files or be looking in nonexistent folders
						for important files.
					</p>
					<a href="http://github.com/ColdenCullen/GLIF/releases">Download Now</a>
				</div>
			</div>

			<!-- Project 3 -->
			<div class="project page" id="project3">
				<div class="content">
					<div class="projectnav">
						<!-- Back Button -->
						<div class="button back">
							<a href="/#project2">Previous</a>
						</div>
						<!-- Home Button -->
						<div class="button home">
							<a href="/#index">Portfolio Home</a>
						</div>
						<!-- Forward Button -->
						<div class="button forward">
							<a href="/#project4">Next</a>
						</div>
					</div>

					<!-- Content -->
					<h2>Storytown</h2>
					<img src="/media/StorytownPlaytest.jpg" class="screenshot" />
					<p>
						In a world filled with terrible movies, a group of actors must compete for the leading role in an upcoming, not-awful film. 
						Storytown is a game of assassination, thievery, and overly dramatic action that forces players to fight for this role. 
						The gameplay is like a combination of Bang! and Munchkin, but you have multiple ways to win. 
						Storytown is a communal deck card game where players kill their friends, acquire moneys, and be as dramatic as possible. 
						Pop culture references abound, providing a thematic backdrop to engage and involve players. 
						The wide range of items and events offer endless opportunities to create your own combos and dominate the game.
					</p>
				</div>
			</div>

			<!-- Project 4 -->
			<div class="project page" id="project4">
				<div class="content">
					<div class="projectnav">
						<!-- Back Button -->
						<div class="button back">
							<a href="/#project3">Previous</a>
						</div>
						<!-- Home Button -->
						<div class="button home">
							<a href="/#index">Portfolio Home</a>
						</div>
					</div>

					<!-- Content -->
					<h2>Castle Pillage</h2>
					<p>
						Castle Pillage is a top-down, tile-based, turn-based RPG written in C# with XNA. It is based on the adventures of the party of five main characters you control throughout the game.
						The main game has 2 modes, the first of which is a story mode, that allows you to play through the characters' adventure. The other is a quick-play mode that selects a random map from the story maps, as well as a few other levels.
						I personally wrote the level editor, which tracks map design errors, and allows for placing and editing message boxes. The message boxes can span multiple tiles, and the editor also allows for one-click in-game testing.
						I also wrote modular main menu system that provides for quick modifications to the actions performed by the menu, and ease of adding new options and menus.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Blog -->
<div class="main page" id="blog">
	<div class="panel tall">
		<div class="content">
			
			<p>Check it out (temporarily) at <a href="http://ghost.coldencullen.com">ghost.coldencullen.com</a>.</p>

		</div>
	</div>
</div>

<!-- Code -->
<div class="main page" id="code">
	<div class="panel tall">
		<div class="content">
			<!-- Loads code from other files, and display -->
			<div id="tabs">
				<ul>
					<li><a href="#html">Index</a></li>
					<li><a href="#content">Content</a></li>
					<li><a href="#css">CSS</a></li>
					<li><a href="#js">JS</a></li>
					<li><a href="#mail">Send Mail</a></li>
				</ul>
			
				<div class="codesnip" id="html">
					<pre class="prettyprint linenums"><code class="language-html"><?php echo htmlentities( file_get_contents( "/home/coldencullen/coldencullen.com/index.php" ) ); ?></code></pre>
				</div>
				<div class="codesnip" id="content">
					<pre class="prettyprint linenums"><code class="language-html"><?php echo htmlentities( file_get_contents( "/home/coldencullen/coldencullen.com/php/content.php" ) ); ?></code></pre>
				</div>
				<div class="codesnip" id="css">
					<pre class="prettyprint linenums"><code class="language-css"><?php echo htmlentities( file_get_contents( "/home/coldencullen/coldencullen.com/css/style.css" ) ); ?></code></pre>
				</div>
				<div class="codesnip" id="js">
					<pre class="prettyprint linenums"><code class="language-js"><?php echo htmlentities( file_get_contents( "/home/coldencullen/coldencullen.com/js/scripts.js" ) ); ?></code></pre>
				</div>
				<div class="codesnip" id="mail">
					<pre class="prettyprint linenums"><code><?php echo htmlentities( file_get_contents( "/home/coldencullen/coldencullen.com/php/sendmail.php" ) ); ?></code></pre>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 404, does not display if page loaded successfully -->
<div class="main page" id="notfound">
	<div class="panel short">
		<div class="content">
			<h1>This page does not exist.</h1>
			<h2>Someone, somewhere, lied to you.</h2>
		</div>
	</div>
</div>