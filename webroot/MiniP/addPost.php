<?php
  session_start();
  if(isset($_SESSION['name']))
  {
    $name = $_SESSION['name'];
    $title = $_GET["title"];
    $posts = $_GET["post"];
    $date = date("Y/m/d");
    $time = date("h:i:sa");
  }

  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

  if ($conn->connect_error)
  {
    die("Connect failed: ". $conn ->connect_error);
  }

  else
  {
    $sql = "INSERT INTO blogposts (title, username, posts, date, time)
    VALUES ('$title','$name','$posts','$date','$time')";
    $conn->query($sql);

  }

  $conn->close();
  header("location: blog.php");
?>
