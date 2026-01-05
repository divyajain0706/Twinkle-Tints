<?php

$server="localhost";
$username="root";
$password="";
$database="Tourism_project";
$conn=new mysqli($server,$username,$password,$database);
if($conn->connect_error){
    echo "Failed to connect DATABASE".$conn->connect_error;
}
?>