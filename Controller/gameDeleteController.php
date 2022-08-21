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
$User_name = $_POST['Game_name'];

if (['Gar_name'] != NULL) {
	$userId = $_POST['Game_name'];

	$sql = "SELECT * FROM Game WHERE Game_name = '$userId' LIMIT 1";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 1) {
		$sql2 = "DELETE FROM Game WHERE Game_name = '$userId'";
		if (mysqli_query($conn, $sql2) == TRUE) {
			echo "Successfully deleted";
			header("refresh:2; url=welcomeAdmin.php");
			exit();
		} else {
			echo "Error deleting Record: " . $conn->error;
		}
	} else {
		echo "Invalid game name";
		exit();
	}
}

$conn->close();
