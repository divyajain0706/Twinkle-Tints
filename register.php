<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['firstname'];
    $lastName=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    
     $checkmail="SELECT * From signupdb where email='$email'";
     $result=$conn->query($checkmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO signupdb(firstname,lastname,email,pass)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: 2Login.php");
            //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            //     <i class="bi bi-exclamation-triangle"></i>
            //     <strong>Failed!</strong> To Connect With The Database.
            //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            //   </div>';
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['Login'])){
   $email=$_POST['email'];
   $password=$_POST['pass'];
   
   
   $sql="SELECT * FROM signupdb WHERE email='$email' and pass='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: 1page.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>