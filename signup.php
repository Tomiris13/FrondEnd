<?php
	session_start();
	require_once 'connect.php';

	$username = $_POST['username'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];


	if ($password === $password_confirm) {
		mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `password`, `phone`, `email`) VALUES (NULL, '$username', '$first_name', '$last_name', '$password', '$phone', '$email')");
		$_SESSION['message'] = 'Registration completed successfully!';
		header('Location: auth.php');
	} else {
	$_SESSION['message'] = 'Passwords do not match';
	header('Location: register.php');
	}
?>