
<html>
	<header lang="en">
		<meta charset ="utf-8">
		<title>About Me</title>
	</header>

	<head>
			<link rel="stylesheet" type="text/css" href="reset.css">
			<link rel="stylesheet" type="text/css" href="index.css">
	</head>

	<body>

		<nav class="n1">
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

		<div class ="p1">
		<h2 >About me</h2>
		<p>
			I'm currently a first year studying Computer Science at Queen Mary University.
			Here are a few things about me: <br>
			<br>
			Q.Why are you studying Computer Science?<br>
			A.I believe that the future is advancing towards technology and I find the endless possiblities of this fascinating<br>
			<br>
			Q.What do you do in your free time?<br>
			A.I enjoy playing sports like badminton and I like to game, I have recently started Twitch streaming because of my interest in games.<br>
			<br>
			Q.What do you enjoy about your current studies?<br>
			A.I enjoy being able to learn about new things all the time. Although it seems like theres plenty I already know I am always surprised by how much more I can learn in this field.<br>
			<br>
			Q.What do you currently do?<br>
			A.Currently I am a full time student at Queen Mary University but I also work part time at a popular wine restaraunt, Noble Rot.<br>
			<br>
			Q.What skills do you think you bring to the table?<br>
			A.I believe I am a hard working individual who is great at perservering even when the going gets tough. I am eager to learn whilst being able to pick things up quickly.<br>
			<br>
			Q.Do you speak any other languages?<br>
			A.As well as English I also speak Cantonese<br>
		</p>

		<h2>Contact Me</h2>
			Here are a couple of ways to contact me:
			<nav class="n2">
				<a href="https://www.instagram.com/seven_space/">Instagram</a><br>
				<a href="https://www.twitch.tv/seven_space">Twitch</a><br>
				<a href="https://www.linkedin.com/feed/">LinkedIn</a><br>
			</nav>
		</div>

		<figure>
			<img src="me.JPG" alt="Me" width="180" height="260">
		</figure>

		<aside>
			<?php
		//		if($_GET['result']==wrong)
			//	{
				//	echo'<script type="text/javascript">
					//	alert("Your Username or Password is invalid");
					//</script>';
			//	}
			?>
			<form action="login.php" method="get">
				<label for="uname">UserName:</label><br>
				<input required type="text" name="uname" placeholder="Username"><br>
				<label for="pw">Pasword:</label><br>
				<input required type="password" name="pw" placeholder="Password"><br><br>
	  		<input type="submit" value="Submit">
			</form>
		</aside>


	</body>
</html>
