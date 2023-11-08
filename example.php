<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "huzaifadb";

// first of all i created four variables which are abiove and then passed them into mysqli conn function 
$conn = new mysqli($servername, $username, $password, $database);
  

// this if condition will only execute id their is an error in connecting with mysqli server 

if ($conn->connect_error) {
  die("Connection failed: fatal error" );
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
// fetching data from the input boxes 
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
// inserting data by using dsql query into database 
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "we have registered you credentials our customer care will be calling u shortly ";
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();

}






























  // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);







  // $stmt = $conn->prepare($sql);
  // $stmt->bind_param("sss", $username, $email, $password);
  // if ($stmt->execute()) {
  //     echo "Registration successful!";
  // } else {
  //     echo "Error: ";
  // }
  // $stmt->close();
?>