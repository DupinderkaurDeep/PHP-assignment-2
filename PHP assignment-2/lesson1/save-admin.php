<?php
  // Include the database connection file
	require './inc/database.php';
  // Retrieve form inputs
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];

 // Validate the form inputs
	$ok = true;

	 // Include the header file
	require './inc/header.php';
	 // Check if first name is empty
	if(empty($first_name)){
		echo '<p>First name is needed</p>';
		$ok = false;
	}
	// Check if last name is empty
	if(empty($last_name)){
	echo '<p>Last name is needed</p>';
	$ok = false;
	}
	 // Check if username is empty
	if(empty($username)){
	echo '<p>Username is needed</p>';
	$ok = false;
	}
	// Check if password is empty or does not match the confirmation
	if((empty($password)) || ($password != $confirm)){
		echo '<p>Password is invalid</p>';
	}
	// decide if we are saving or not
	if($ok){
		$password = hash('sha512', $password);
      // Set up the SQL query to insert data into the phpadmins table
		$sql = "INSERT INTO phpadmins (first_name, last_name, username, password) VALUES ('$first_name','$last_name','$username',
		'$password');";
		$conn->exec($sql);  // Execute the SQL query
         // Display success message
		echo '<section class="success-row"';
		echo '<div>';
		echo '<h3>account has been created</h3>';
		echo '</div>';
		echo '</section>';
	// Disconnect from the database
		$conn = null;
	}
	?>
	<section class="row success-back-row">
		<div>
			<p>All things are done so it's time to go for next page</p>
			<a href="signin.php" class="btn btn-primary">Sign In</a>
		</div>
	</section>
<?php require './inc/footer.php'; ?>
