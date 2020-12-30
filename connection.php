<!-- Server Connection -->
<?php

$conn = new mysqli("localhost", "mhatredeep", "mypass", "mydb");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo '<script>alert("Connection DB Error")</script>';
}


?>
