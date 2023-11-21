<?php

$servername = "localhost";
$Username = "root";
$password = "";
$database = "hazikdb";


// $nameerr = "name required";
// first of all i created four variables which are abiove and then passed them into mysqli conn function 
$conn = new mysqli($servername, $Username, $password, $database);


// this if condition will only execute if their is an error in connecting with mysqli server 

if ($conn->connect_error) {
  die("Connection failed: fatal error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // fetching data from the input boxes 



 
  // validation on username 
  if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"])) {


    echo '<script type="text/javascript">alert("Error: Credentials not given ");</script>';


    header("refresh:0;    url=signup.php");



    exit;    
    
  } else {

// input santization 

    $username = trim($_POST["username"]);
    $email = stripcslashes($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);





    // inserting data into databse by using sql query 
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  }
  if ($conn->query($sql) === TRUE) {
    
    // impolement loaader here 
    header("refresh:1;    url=login.php");;
  } else {
    echo '<script type="text/javascript">alert("Error: ' . $conn->error . '");</script>';
  }

  $conn->close();



}



























// 



//     header("refresh:0;url=index.php");



//     exit();





// header("refresh:0;url=index.php");

  // $rawUsername = $_POST["username"];

 // echo "Raw Username: '$rawUsername'<br>";





// $stmt = $conn->prepare($sql);
// $stmt->bind_param("sss", $username, $email, $password);
// if ($stmt->execute()) {
//     echo "Registration successful!";
// } else {
//     echo "Error: ";
// }
// $stmt->close();
?>