<?php
$connection = mysqli_connect("localhost", "root", "", "voters_data") or die("Could not connect to server");

$id = $_GET["voter_id"];
$email = $_GET["email"]; // Fixed index to match form
$password = $_GET["password"];

// Prepared statement to prevent SQL Injection
$query = $connection->prepare("INSERT INTO voters (voter_id, email, password) VALUES (?, ?, ?)");
$query->bind_param("sss", $id, $email, $password); // Assuming all fields are strings; adjust accordingly

if ($query->execute()) {
    echo "The login details are<br>";
    echo "ID: " . htmlspecialchars($id) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
} else {
    echo "Query failed: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
