<?php
	$name = $_POST['name'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$rooms = $_POST['rooms'];
	$phone = $_POST['phone'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbhotel";
	$conn = new MySQLi($servername, $username, $password, $dbname);
	if ($conn ->connect_error) {
		die("Connection failed: '' . $conn->connect_error");
	}
	
	else{
		$stmt = $conn->prepare("insert into reservation(name, checkin, checkout, rooms, phone)
		values( ?, ?, ?, ?, ?)");
		$stmt->bind_param("siisi", $name, $checkin, $checkout, $rooms, $phone);
		$stmt->execute();
		echo "Reservation Successful....";
		$stmt->close();
		$conn->close();
	}
		
	?>
	
	
