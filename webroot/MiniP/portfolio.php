<html>
	<header lang="en">
		<meta charset ="utf-8">
		<title>Experience and Portfolio</title>
	</header>

	<head>
			<link rel="stylesheet" type="text/css" href="reset.css">
			<link rel="stylesheet" type="text/css" href="portfolio.css">
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
		<h2>Experience</h2>
		<p>
			With my experience I have worked in various different jobs. Currently I work at Noble Rot, a well known wine restaraunt residing in Bloomsbery near Holborn Station.
			From my experience here I have learnt a lot about hospitality, food and wine. With my experience from this job I have been offered the chance to do a level 3 WSET
			qualification along and am currently studying this alongside my univeristy studies. Being one of the staff that have worked longest in my sections I am usually in
			charge of training other members of staff for my sector. This has allowed me to develop leadership skills, allowing me to be more onfident and to lead others.
			Working in a restaraunt I am well adapted to working in a team with my firnedly personality, allowing us to get along well and efficiently.<br>
			<br>
			Furthermore, I have worked in a marketing recruitment firm where I was based in an office in Chancery lane. This allowed me to get professional experience from working in an office, so I knew how to act and behave in a different environment. I also had to adapt to the type of work you had to do, which meant looking through a lot of long contracts and extracting vital pieces of information that were required. Though some of the jobs were not amazingly fun it was good to experience what it was like to work with others in this environment and learn whether it was the kind of environment/job I would like to work in in the future.<br>
			<br>
			From a young age I helped out in my family business too where I would do some occasional prep work, as I grew older I learnt to work front of house, taking customer orders and delivering their food to them. This gave me the chance to learn about what it was like to work and earn my own money from a young age, allowing me to accept the fact that money is worked for and not given for free. This allowed me to develop a strong mindset of working hard and gave me a chance to develop my work ethics from a young age allowing me to carry this forward to my future jobs.<br>
			<br>
			I was able to experience working as a freelancer's personal assistance this was very different from my previous jobs. It gave me the perspective of working closer with my boss and acting in a more professional environment as a lot of responsibility resided on me. I was in charge of booking meets and organising transport and emailng important individuals. I would be in charge of taking notes during meetings so that we could refer to them at a later date. This experience showed me how it was to have a large shoulder of responsibility and how to cope with it.<br>
		</p>
		</div>

		<figure>
			<img class="img1" src="front.jpeg" alt="noblerot" width="350" height="250">
		</figure>

		<figure>
			<img class="img2" src="emr.png" alt="emr" width="400" height="150">
		</figure>

		<div class="p2">
		<header>
			<h2>Portfolio</h2>
			<h3>Noble Rot - WSET Level 3</h3>
		</header>
		<p>
			As mentioned from my experiences currently I am working hard on studying up for my WSET Level 3 qualification, this is being offered
			to me by my job at a wine restaraunt, Noble Rot, allowing me to further my knowledge and interest in wine.
			Throughout January I have been to an intensive training course where we would study the material needed and taste various amounts of wine.
			This was quite difficuly for me as it was also exam season for me during univeristy, but I perservered throughout. Right now I am doing
			my best to study the rest of the material in the textbook and remember regions and grape varieties from them.
		</p>
		</div>

		<figure>
			<img class="img3" src="glass.JPG" alt="wine" width="300" height="230">
		</figure>

		<figure>
			<img class="img4" src="tasting.JPG" alt="wineTasting" width="220" height="350">
		</figure>

		<div class="p3">
		<p>
			<h3>Graphic Design</h3>
			As a graphic design student I went above and beyond in one of my projects which I was very passionate about.
			Seeing as the topic was about security and privacy I went ahead to develop multiple pieces of work inspired by my topic.
			Alongside this I decided to use my media skills to develop a film to simulate being followed and watched which I spent days
			oraganising, filming and editing.
			Even after my course had finished I was still fond of using the skills I had gained for other purposes, for example
			I occasionally design Twitch layouts and banners for streamers as well as myself.
			I also design birthday cards and the occasional photo edits.

		<br>

			As mentioned above I like to stream on Twitch the occasional games when I have time. Currently I do not have a set schedule.
			You can check this out at <a class="twitch" href="https://www.twitch.tv/seven_space">twitch.tv/seven_space</a>
		</p>
		</div>

		<figure>
			<img class="img5" src="poster.JPG" alt="graphics" width="380" height="240">
		</figure>

		<figure>
			<img class="img6" src="theme.JPG" alt="banner" width="400" height="240">
		</figure>

	</body>
</html>
