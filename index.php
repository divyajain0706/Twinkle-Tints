<?php
	/*$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$country=$_POST['country'];
    $streetadress=$_POST['streetadd'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $phone = $_POST['phone'];
    $cardnumber = $_POST['cardnumber'];
    $email = $_POST['email'];

	// Database connection
	$conn = new mysqli('localhost','root','','billingdetails');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into orderdetails(firstname, lastname, country, streetadd, city, state , phone, cardnumber, email) values(?, ?, ?, ?, ?, ?,? , ?, ?)");

		$stmt->bind_param("ssssssiis", $firstName, $lastName, $country,$streetadress,$city,$state,$phone,$cardnumber, $email,);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}*/
?>