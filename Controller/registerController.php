<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dawnn";

//creating connection
// giving $dbname as a param.. it will create a database and use it..

$conn = new mysqli($servername, $username, $password, $dbname);

//checking connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// creating table
$User_name = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$p_no = $_POST['phone_number'];


$sql = "INSERT INTO customer (username, password, name, email, phone_number) VALUES ('$User_name', '$password', '$name', '$email', '$p_no')";
if ($conn->query($sql) == TRUE) {
    header("refresh:2; url=../View/login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
