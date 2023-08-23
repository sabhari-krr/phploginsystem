<?php
include "config.php";
if (isset($_POST['users'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];


	$query = "INSERT INTO users (username,email,pwd) VALUES ('$username', '$email', '$pwd')";
	$emquery = "SELECT email FROM users WHERE email='$email'";
	$check = mysqli_num_rows(mysqli_query($db, $emquery));
	if ($check == 0) {
		mysqli_query($db, $query);
		echo "<script>alert('Registration Successful');window.location.href='index.php';</script>";
	} else {
		echo "<script>alert('Already Registered');window.location.href='index.php';</script>";
	}
}
