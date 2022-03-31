<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "proclinc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['user']) && $_POST['user'] && isset($_POST['pass_confirmation']) && $_POST['pass_confirmation']) {
 
$sql = "SELECT username,password FROM access_system";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($row["username"]==$_POST['user'] && $row["password"]==$_POST['pass_confirmation']){

        echo json_encode(array('success' => 1));
        header('Location:index.html');


    }
  }
} else {
  echo "0 results";
}


} else {
    echo json_encode(array('success' => 0));
}
mysqli_close($conn);