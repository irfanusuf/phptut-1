<?php


$servername = "localhost";
$Username = "root";
$password = "";
$database = "hazikdb";

 //establishing mysqli connection 
$conn = new mysqli($servername, $Username, $password, $database);    


if ($conn->connect_error) {
    die("Connection failed: connection error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = trim($_POST["email"]);     //user email input
    $password = $_POST["password"];     // user password input


    if (empty($email) || empty($password)) {
        echo '<script type="text/javascript">alert("Error: email and password are required.");</script>';
        header("refresh:1;    url=login.php");
    }

    else {
      

        $sql = "SELECT * FROM users WHERE email = '$email'";

        $queryExc = $conn->query($sql);



        if (mysqli_num_rows($queryExc) > 0) 
        
        {
            $row = $queryExc->fetch_assoc();

            if (password_verify($password, $row["password"])) {
               
                echo '<script type="text/javascript">alert("Login successful.");</script>';
               header("refresh:0;    url=home.php");

            } else {
                echo '<script type="text/javascript">alert("Error: Wrong Password.");</script>';
                header("refresh:0;    url=login.php");
            }
        } else {
            echo '<script type="text/javascript">alert("Error: User not found.");</script>';
            header("refresh:0;    url=signup.php");
        }
    }
}

$conn->close();
?>













   
 
        













<!-- 
if ($queryExc->num_rows > 0) {
            $row = $queryExc->fetch_assoc();
            if (password_verify($password, $row["password"])) {
               
                echo '<script type="text/javascript">alert("Login successful.");</script>';
               header("refresh:0;    url=home.php");
            } else {
                echo '<script type="text/javascript">alert("Error: Incorrect username or password.");</script>';
                header("refresh:0;    url=login.php");
            }
        } else {
            echo '<script type="text/javascript">alert("Error: User not found.");</script>';
            header("refresh:0;    url=login.php");
        } -->