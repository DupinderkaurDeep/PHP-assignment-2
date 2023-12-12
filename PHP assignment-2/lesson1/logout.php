<?php
// Include the header file
    require './inc/header.php';
    // Start the session
    session_start();
 // Unset all session variables
    session_unset();
  // Destroy the session
    session_destroy();
// Redirect to the index.php page after logging out
    header('location:index.php');
     // Include the footer file
    require './inc/footer.php';
?>


