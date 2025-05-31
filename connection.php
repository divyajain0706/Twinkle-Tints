<!--Connecting to database-->
<?php
$host="localhost";
$user="root";
$pass="";
$db="billingdetails";
$conn= mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST["submit"])){
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$country=$_POST['country'];
$streetadress=$_POST['street-address'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone = $_POST['phone'];
$cardnumber = $_POST['card-number'];
$email = $_POST['email'];


$sql = "INSERT INTO `orderdetails` (`first-name`, `last-name`, `country`, `street-address`, `city`, `state`, `phone`, `card-number`, `email`) VALUES ('$firstname', '$lastname', '$country', '$streetadress', '$city', '$state', '$phone', '$cardnumber', '$email')";
echo $sql;

if($con->query($sql) == true)
{
    echo "successfully inserted";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
?>

<!--$result = mysqli_query($conn, $sql);
 if($result){
    header ("location: beautyweb.html");
   
 }
 else{
 echo "the record was not insereted successfly in the record";
}-->