<html>
	<header lang="en">
		<meta charset ="utf-8">
		<title>Blog</title>
	</header>

	<head>
			<link rel="stylesheet" type="text/css" href="reset.css">
			<link rel="stylesheet" type="text/css" href="blog.css">
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

		<?php
			if(isset($_SESSION['name']))
			{
		?>
		<button onclick="document.location = 'addPost.html'">Add Post</button>
		<?php
			}
		?>

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
		<h2>Blog Posts</h2>
			<form id="filterposts" action="blog.php" method="get">
				<label for="month">Filter by:</label>
				<select id="months" name="months" >
					<option value="0">All</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<input type="submit" value="Filter">
			</form>

			<?php

				$dbhost = getenv("MYSQL_SERVICE_HOST");
				$dbport = getenv("MYSQL_SERVICE_PORT");
				$dbuser = getenv("DATABASE_USER");
				$dbpwd = getenv("DATABASE_PASSWORD");
				$dbname = getenv("DATABASE_NAME");
				$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

				if ($conn->connect_error)
				{
					die("Connect failed: ". $conn ->connect_error);
				}

				else
				{
					$sql = "SELECT * FROM blogposts ORDER BY date, time ASC";
					if(isset($_GET["months"]))
					{
						$month =$_GET["months"] ;

						if($month == 0)
						{
							$sql = "SELECT * FROM blogposts ORDER BY date, time ASC";
						}
						else
						{
							$sql = "SELECT * FROM blogposts WHERE MONTH(date)=".$_GET['months']." ORDER BY date, time ASC";
						}
					}

					$result = $conn->query($sql);
					$array = array();

					if($result->num_rows > 0)
					{
						while($row = $result->fetch_assoc())
						{
							$array[] = $row;
						}
					}

					for($i=count($array)-1; $i>=0; $i--)
					{
						echo('<div class="row">
										<div class="column1">
											<h3>'.$array[$i]["title"].'</h3>
											<p>'.$array[$i]["posts"].'</p>
										</div>
										<div class="column2">
											<p>'.$array[$i]["date"]. " ".$array[$i]["time"].'</p>
										</div>
										</div>
										<hr>');
					}

				}
				$conn->close();
			?>

	</body>
</html>
