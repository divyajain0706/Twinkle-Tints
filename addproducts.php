<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "shoppingcart";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $db) or die("Connection Failed");

    if(isset($_POST['addproducts'])){
        $productname = $_POST['productname'];
        $productprice = $_POST['productprice'];
        $productimage = $_FILES['productimage']['name'];
        $productimage_tmp = $_FILES['productimage']['tmp_name'];
        $productimage_folder='image/'.$productimage;

        $insert_query=mysqli_query($con, "insert into productupload (productname, productprice, productimage) 
        values('$productname','$productprice','$productimage')") or die("Insert query failed");

        if($insert_query){
            move_uploaded_file($productimage_tmp,$productimage_folder );
            $display_message= "Product inserted successfully";
        }
        else{
           $display_message= "There is some error inserting product";
        }

    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <!--<link rel="stylesheet" href="addproducts.css">-->
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}
        .heading {
    text-align: center;
    font-size: 30px;
    text-transform: uppercase;
    padding: 1.5rem 0 2rem;
    color: var(--color1);
  }
  section {
    padding: 2rem;
  }
  .addproducts {
    max-width: 570px;
    background-color: var(--color2);
    border-radius: 0.5rem;
    padding: 2rem;
    margin: 0 auto;
    margin-top: 2rem;
  }
  .addproducts .inputfields {
  
    padding: 1rem 1.2rem;
    font-size: 1.6rem;
    color: var(--black);
    background-color: var(--white);
    margin: 1.5rem 0;
    width: 100%;
    border
  }
  .form-container {
    background-color: rgb(255 222 240);;
    padding: 30px;
    border-radius: 8px;
    margin-top: 20px;
    text-align: center;
}
.form-container form {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.form-container input[type="text"],
.form-container input[type="number"],
.form-container input[type="file"] {
    width: 80%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.form-container .submitbtn {
    background-color: #bd1892;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form-container .submitbtn:hover {
    background-color: #bd1892;
}
    </style>
</head>
<body>
    <?php
       include('header.php');
    ?>
      <div class="container">
        <!--msg display-->

        <?php
          if(isset($display_message0)){
            echo ("<div id='liveAlertPlaceholder'>$display_message</div>
            <button type=`button` class=`btn btn-primary` id=`liveAlertBtn`>Show live alert</button>");
          }
        ?>
        
    <section>
        <div class="form-container">
        <h3 class="heading">Add Products</h3>
        <form action="" class="addproducts" method="post" enctype="multipart/form-data">
            <input type="text" name="productname" placeholder="Enter Product Name" class="inputfields" required>
            <input type="number" name="productprice" min="0" placeholder="Enter Product Price" class="inputfields" required>
            <input type="file"  name="productimage"class="inputfields" required accept="image/png, image/jpg, image/jpeg">
            <input type="submit" name="addproducts" class="submitbtn" value="Add Product">
        </form>
        </div>
    </section>
    </div>
</body>
</html>