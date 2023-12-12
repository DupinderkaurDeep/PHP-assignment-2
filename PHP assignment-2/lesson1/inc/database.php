<!--CODE:19-->

<?php
	 // Connect to the MySQL database using PDO
try{
    // Create a new PDO connection with the host, dbname, username, and password
    $conn = new PDO('mysql:host=172.31.22.43;dbname=Dupinder200553418', 'Dupinder200553418', 'LM2S7SYfYP');

// Set PDO error mode to exception, so it throws exceptions on errors
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    // Catch any exceptions (errors) that may occur during the connection process
    echo "<p> Connection failed :" . $e->getMessage();   // Echo an error message including the details of the exception
}
?>

