<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "proclinc";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$id= $_SESSION['id'];
$sql = "DELETE FROM appointments  WHERE Patient_ID ='$id'";
 if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


