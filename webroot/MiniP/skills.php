
<html>
	<header lang="en">
		<meta charset ="utf-8">
		<title>Education and Skills</title>
	</header>

	<head>
			<link rel="stylesheet" type="text/css" href="reset.css">
			<link rel="stylesheet" type="text/css" href="skills.css">
	</head>

	<body>
		<nav>
			<ul>
				<li><a class="a1" href="index.php">About me</a>
				<li><a class="a1" href="skills.php">Education and Skills</a>
				<li><a class="a1" href="portfolio.php">Experience and Portfolio</a>
				<li><a class="a1" href="blog.php">Blog</a>
					<?php
						session_start();
						if(isset($_SESSION['name']))
						{
							$name = $_SESSION['name'];
					?>
							<li><a class="a1" href="logout.php">Logout</a>
					<?php	}
						else
						{
					?>
							<li><a class="a1" href="index.php">Login</a>
					<?php
						}
					?>
			</ul>
		</nav>

		<section>
			<?php
				if(isset($_SESSION['name']))
				{

			?>
					Welcome <?php  echo "$name" ?>
			<?php
				}
				else
				{
			?>
					You're currently not logged in
			<?php
				}
			?>
		</section>

		<div class="p1">
		<h2>Education and Qualifications</h2>
		<p>
			College - Leyton Sixth Form College<br>
			<br>
			<ul>
				<li>A-Level Computer Science (2016-2018)
				<li>A-Level Graphic Design (2016-2018)
				<li>A-Level Media (2016-2018)
				<li>A-Level Maths (2018-2019)
			</ul>
		</p>

		<br>

		<p>
			University - Queen Mary University<br>
			<br>
			<ul>
				<li>Bsc Computer Science (2019-current)
			</ul>
		</p>
	</div>

	<div class="p2">
		<h2>Skills and Achievements</h2>
		<p>
			I have many different interests ranging from sports to gaming here are a few:<br>
			<br>
			<ul>
				<li>Badminton - I am an avid badminton player and play in my uni's badminton team
				<li>Gaming - In my spare time I like gaming with friends and occasionally Twitch stream
				<li>Art - One of my independent hobbies is drawing and painting, I mostly do pencil sketches and watercolours but occasionally experiement with other mediums too
				<li>Wine - Working in a wine restaraunt I developed an interest in wine and love tasting lots of different wines especially German Riesling
			 	<li>Bronze Duke of Edinburgh Award - During my school years I participated in a Duke of Edinburgh award where I camped and hiked alongside a team of people
			</ul>
		</p>
	</div>

	</body>
</html>
