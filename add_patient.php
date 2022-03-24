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



$name=$_POST['patient-name'];
$date=$_POST['dob'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$email=$_POST['Email'];
$address=$_POST['address'];
$sql = "INSERT INTO patients (Full_Name,Date_Of_Birth,Phone_Number,Gender,Email,Address)
       VALUES ($name','$date','$phone','$gender','$email','$address')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


