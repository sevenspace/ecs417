<?php

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
  $username = $_GET["uname"];
  $password = $_GET["pw"];
  $login = null;

  $sql = "SELECT username FROM userdetails WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {
    $login = true;
    session_start();
    $_SESSION['name'] = $username;
    header("location: blog.php");
  }
  else {
//
//   echo("<html><script>document.location.href='index.php?result=wrong';</script></html>");
    //$message = "Your Username or Password is invalid";
    echo'<script>
      alert("Your Username or Password is invalid");
          window.location = "index.php";
    </script>';

  }
}




$conn->close();
?>
