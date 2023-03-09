<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$host = "localhost";
$user = "root";
$password = "";
$database = "contact_info";
$conn = mysqli_connect($host, $user, $password, $database);

$stmt = mysqli_prepare($conn, "INSERT INTO info (name, email, message) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);
echo "Thank you for contacting Arjun";
?>
