<?php
require './inc/header.php';
// checking for authentication before we give access
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('location:signin.php');
        exit();
    }else{
        // showing the suitable output
        require './inc/database.php';
        echo'<section class = "login-row">';
        echo '<div>';
        echo '<h2> login successfully</h2>';
        echo '</div>';
        echo '</section>';
        echo '<section class="disperson">';
        echo '<div class="success">';
        echo '<a class = "btn btn-warning" href = "logout.php">Logout</a>';
        echo '</div>';
        echo '</section>';
        
        // disconnect
        $conn = null;
    }
    require './inc/footer.php';
?>

