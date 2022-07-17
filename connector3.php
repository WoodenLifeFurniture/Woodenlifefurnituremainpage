<?php
	$firstName = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['message'];
	

	// Database connection
	$conn = new mysqli('localhost:3307','root','','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(username,email, message) values(?, ?, ?)");
		$stmt->bind_param("sss", $username,  $email, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
 
exit;
?>