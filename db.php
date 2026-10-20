<<<<<<< HEAD
<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

=======
<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentgradingsystem";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

>>>>>>> 68d9ee151285803e29f491f9e6e4a6a392c86ab5
?>