<?php

// Retrieve username and hash the password from the POST request
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

// Include the database connection file
require 'database.php';

// SQL query to check if the provided username and password match a record in the database
$sql = "SELECT user_id FROM phpadmins WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Get the number of rows returned by the query
$count = $result -> rowCount();

if($count == 1){
    echo '<p> Logged in Successfully</p>';
    foreach ($result as $row){
 // Store the user_id in the session
    session_start();

    $_SESSION['user_id'] = $row['user_id'];

    header('Location: ../display-person.php');
    }
}else{
    echo '<p>Login Failed</p>'; // Display a message if login fails
}

$conn = null  // Close the database connection
?>
