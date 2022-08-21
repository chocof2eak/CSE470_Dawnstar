<?php

if (isset($_POST['submit'])) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dawnn";
	$conn = new mysqli($servername, $username, $password, $dbname);
	//checking connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$msg = "";
	//taking the input of image file
	$image = $_FILES['image']['name'];
	//path to store the image
	$target = "gamephotos/" . basename($image);
	$name = $_POST['Game_name'];
	$reg = $_POST['reg_no'];
	$year = $_POST['year'];
	$price = $_POST['price'];
	//insert query
	$sql = "INSERT INTO game (Game_name,image,reg_no, year, price) VALUES ('$name','$image','$reg','$year', '$price')";
	//runnting the qurry
	if (mysqli_query($conn, $sql) == TRUE) {
	} else {
		echo "error in insertion";
	}
	//moving the uploaded picture to the targeted directory
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	} else {
		echo "There was a problem";
	}
}
