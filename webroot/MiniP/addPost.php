<?php
  session_start();
  if(isset($_SESSION['name']))
  {
    $name = $_SESSION['name'];
    $title = $_GET["title"];
    $posts = $_GET["post"];
    $date = date("Y/m/d");
    $time = date("H:i:s");
  }

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
    //$sql = "INSERT INTO blogposts (title, username, posts, date, time) VALUES ('$title','$name','$posts','$date','$time')";
    //$sql = "INSERT INTO `blogposts`(`title`, `username`, `posts`, `date`, `time`) VALUES ('$title','$name','$posts','$date','$time')";
//$sql = "INSERT INTO blogposts (title, username, posts, date, time) VALUES ('" . $title . "', '" . $name . "','" . $posts . "','" . $date . "','" . $time . "')";
      if($_SERVER["REQUEST_METHOD"]=="GET")
      {
            $sql = "INSERT INTO blogposts (title, username, posts, date, time) VALUES ('$title','$name','$posts','$date','$time')";
            if($conn->query($sql) === TRUE)
            {
              header("location: blog.php");
            }
            else {
              echo("error 404".$conn->error);
            }
      }
  /*  if(mysqli_query($conn, $sql)){
        echo "<script>
                alert('Blog Entry Added!');
                window.location.href='blog.php';
              </script>";
    } else {
        echo "<script>
                alert('NO ENTRY ADDED! SQL ERROR!');
              </script>";
    }
  */
  //  $conn->query($sql);
  //  echo $conn->connect_error;
  }

  $conn->close();
  //header("location: blog.php");
?>
