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



$name=$_POST['doctor_name'];
$date=$_POST['dob'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$spec=$_POST['specialzation'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];
$doctor_details=$_POST['doctor_details'];
$duty_time=$_POST['duty_time'];
$department=$_POST['department'];

$sql = "INSERT INTO doctors (available,Full_Name,Date_Of_Birth,Phone_Number,Gender,Email,Address,password,Duty_Time,Doctor_Details,Department,Specialzation)
       VALUES ('Available','$name','$date','$phone','$gender','$email','$address','$password','$duty_time','$doctor_details','$department','$spec')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


