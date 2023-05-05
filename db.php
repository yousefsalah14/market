<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uber";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
require_once 'db.php';
if ($_SERVER["REQUEST_METHOD"]=="post"){
  $name =isset($_POST["name"]) ? $_POST['name']:"";
  $email =isset($_POST["email"]) ? $_POST['email']:"";
  $message =isset($_POST["message"]) ? $_POST['message']:"";
  $sql = "insert into `contact` (name,email,message)
  VALUES ('$name','$email','$message')";
}
if(isset($_POST['submit']))
{    
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     $result = $con->query($sql);
     $con->close();
}