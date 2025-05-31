<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "demowebsite";

$conn = new mysqli($servername,$username,$password,$db_name);

if(isset($_GET["id"])){
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM mycart WHERE product_id = $product_id";
    $result = $conn->query($sql);
    $total_cart = "SELECT * FROM mycart";
    $total_cart_result = $conn->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);

    if(mysqli_num_rows($result) > 0){
        $in_cart = "already In mycart";

        echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
    }else{
        $insert = "INSERT INTO mycart(product_id) VALUES($product_id)";
        if($conn->query($insert) === true){
            $in_cart = "added into mycart";
            echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
        }else{
            echo "<script>alert(It doesn't insert)</script>";
        }
    }
}

if(isset($_GET["cart_id"])){
    $product_id = $_GET["cart_id"];
    $sql = "DELETE FROM mycart WHERE product_id=".$product_id;

    if($conn->query($sql) === TRUE){
        echo "Removed from mycart";
    }
}



$sql_cart = "SELECT * FROM mycart";
$all_cart = $conn->query($sql_cart);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="mycart.css">
    <title>In mycart products</title>
    <style>
  /* main .card .caption .remove{
  color: #e41717;
  font-family: inherit;
  display: inline-block;
  width: 6em;
  height: 2.6em;
  line-height: 2.5em;
  margin: 16px;
  position: relative;
  overflow: hidden;
  border: 2px solid var(--color);
  transition: color 0.5s;
  z-index: 1;
  font-size: 15px;
  border-radius: 6px;
  font-weight: 500;
  color: var(--color);
  text-transform: uppercase;
  margin-left: 15px;
}
main .card .caption .shopnow {
  --color: #e41717;
  font-family: inherit;
  display: inline-block;
  width: 6em;
  height: 2.6em;
  line-height: 2.5em;
  margin: 16px;
  position: relative;
  overflow: hidden;
  border: 2px solid var(--color);
  transition: color 0.5s;
  z-index: 1;
  font-size: 15px;
  border-radius: 6px;
  font-weight: 500;
  color: var(--color);
  text-transform: uppercase;
  margin-left: 15px;
}*/
.caption{
    margin-left: 10px;
}
.price{
    margin-left: 70px;
}
.card-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 80px !important;
    grid-auto-flow: column;
    grid-auto-columns: calc((100 / 3) - 12px);
}

.card {
  margin: 20px;
  width: calc(25% - 20px);
  height: 430px;
}
.shop-all-button {
    background-color: #e41717;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    margin-bottom: 20px;
    margin-left: 37rem;
}
main .card .caption .remove {
    color: #e41717;;
    background-color: #e41717;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    height: 35px;
}
main .card .caption .shopnow {
    color: #e41717;
    background-color: #e41717;;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    margin-left: 30px;
    height: 35px;
}

        </style>
</head>
<body>
    <?php
       include ('header.php');

    ?>

    <main>
        <h1><?php echo mysqli_num_rows($all_cart); ?> Items</h1>
        <hr>
        <?php
        echo '<form action="shopallproducts.php" method="POST">';
        echo '<button type="submit" class="shop-all-button">Shop All</button>';
        echo '</form>';
        ?>
        <div class="card-container">
        <?php
          while($row_cart = mysqli_fetch_assoc($all_cart)){
            $sql = "SELECT * FROM skinproducts WHERE product_id=".$row_cart["product_id"]." UNION SELECT * FROM makeup WHERE product_id=".$row_cart["product_id"]." UNION SELECT * FROM hairs WHERE product_id=".$row_cart["product_id"]." UNION SELECT * FROM brushesandtools WHERE product_id=".$row_cart["product_id"]." UNION SELECT * FROM fragrance WHERE product_id=".$row_cart["product_id"];
            $all_product = $conn->query($sql);
              while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card">
            <div class="images">
                <img src="<?php echo $row["product_image"]; ?>" alt="">
            </div>

            <div class="caption">
                <p class="rate">
                    <!--<i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>-->
                </p> 
                
                <p class="product_name"><b><?php echo $row["product_name"]; ?></b></p>
                <p class="price"><b>Rs.<?php echo $row["price"]; ?></b></p>
                <button class="remove" data-id="<?php echo $row["product_id"]; ?>">Remove from Cart</button>
                <!--<button class="shopnow" <?php //echo $row["product_id"];?>>Shop Now</button>-->
                <form action='shopnow2.php' method='POST' style='display:inline;'>
  <input type='hidden' name='product_id' value='<?php echo $row["product_id"]; ?>'>
  <input type='hidden' name='product_name' value='<?php echo $row["product_name"]; ?>'>
  <input type='hidden' name='price' value='<?php echo $row["price"]; ?>'>
  <button type='submit' class='shopnow'>Shop Now</button>
</form>
            
                

                <?php
        //echo '<form action="shopproduct.php" method="POST">';
        //echo '<button type="submit" class="shopnow">Shopnow</button>';
        //echo '</form>';
        ?>
            </div>
        </div>
        
        <?php
        

          }
        }
       ?>
    </main>





    <script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","cartconnection.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
    </script>

    <?php
      include('footer.php');
    ?>
</body>
</html>