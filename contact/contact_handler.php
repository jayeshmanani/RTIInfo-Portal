<?php 
	include 'conn.php';
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	

	$sql = "INSERT INTO contact_us (name, email, msg)
VALUES ('".$name."', '".$visitor_email."', '".$message."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);

 ?>