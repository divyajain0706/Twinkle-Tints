<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brushes & Tools</title>
    <!--<link rel="stylesheet" href="hairs.css">-->
    <style>
        .main{
    width: 100%;
    background-image: url('image/BrushesTools/backimg1.jpg');
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: changeBackground 10s infinite;
}
@keyframes changeBackground {
    0% {
        background-image: url('image/BrushesTools/backimg2.jpg');
    }
    30% {
        background-image: url('image/BrushesTools/backimg3.jpg');
    }
}
.main-content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #000000;
    position: relative;
}
.main-content div {
    padding-left: 115px;
    padding-bottom: 37px;
    font-family: Helvetica;
    letter-spacing: 1.2px;
    padding-top: -12px;
    font-size: 28px;
}
.main-content h3 {
    padding-left: 330px;
    padding-bottom: 5px;
    font-family: 'Times New Roman';
    letter-spacing: 2px;
    padding-top: 197px;
    font-size: 4rem;
    text-transform: uppercase;
    font-weight: 500;

}
.main-content button {
    background-color: rgb(250, 71, 131);
    padding: 2px;
    color: rgb(255, 255, 255);
    width: 6rem;
    height: 3rem;
    cursor: pointer;
    text-decoration: none;
    border-radius: 10px;
    margin-left: 540px;
}
.Brushes button,
.Tools button{
    font-family: Helvetica;
    font-size: 25px;
    margin-left: 110px;
    background-color: black;
    color: white;
    width: 10rem;
    height: 4rem;
    border-radius: 8px;
    margin-top: 50px;
}
.card-heading{
    margin: 92px;
    font-family: Helvetica;
    font-size: 25px;
    margin-left: 490px;
}
.card-container{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 30px !important;
    grid-auto-flow: column;
    grid-auto-columns: calc((100/3) - 12px);
  }

  .card{
    width: 270px;
    background-color:rgb(250, 177, 217);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
    margin: 15px;
  }

  .card img{
    width: 100%;
    height: auto;
  }
  .card-content{
    padding: 12px;
    text-align: center;
  }
  .card-content b{
    font-size: 18px;
    margin-bottom: 8px;
    font-family: Helvetica;
  }
  .card-content p {
    color: #060606 !important;
    font-size: 15px;
    line-height: 1.3;
  }
  .card-content button {
      --color: #e41717;
      font-family: inherit;
      display: inline-block;
      width: 10rem !important;
      height: 2.6em;
      line-height: 2.5em;
      margin: 20px;
      position: relative;
      overflow: hidden;
      border: 2px solid var(--color);
      transition: color .5s;
      z-index: 1;
      font-size: 13px !important;
      border-radius: 6px;
      font-weight: 500;
      color: var(--color);
      text-transform: uppercase;
     }
     
     button:before {
      content: "";
      position: absolute;
      z-index: -1;
      background: var(--color);
      height: 150px;
      width: 200px;
      border-radius: 50%;
     }
     
     button:hover {
      color: #fff;
     }
     
     button:before {
      top: 100%;
      left: 100%;
      transition: all .7s;
     }
     
     button:hover:before {
      top: -30px;
      left: -30px;
     }
     
     button:active:before {
      background: #3a0ca3;
      transition: background 0s;
     }
     #main {
    max-width: 1200px;
    width: 90%;
    padding: 50px;
    border-radius: 30px;
    min-height: 583px !important;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    background-color: #ffedf6;
}
     .main-text span {
    color: rgb(202, 17, 17);
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 3rem !important;
    font-weight: 500;
    font-family: 'Times New Roman';
    margin-bottom: 10px;
}
.main-img {
    margin-top: 20px; /* added margin-top to create some space between text and image */
}
#main {
    height: 250px; /* adjust the height value as needed */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.main-text button{
    color: white;
    background-color: rgb(250, 157, 208);
    width: 100px;
    height: 50px;
    margin-top: 50px;
    align-items: center;
    object-position: center;
  }
  .main-text button:hover{
    background-color: rgb(231, 48, 88);
    cursor: pointer;
  }

    </style>
</head>
<body>

<?php
      include('header.php');
    ?>

       <div class="main">
         <div class="main-content">
              <h3>Brushes & Tools</h3>
              <div>Restore, Repair, Style: Shop Brushes, Blenders, Eyelash Curlers and more</div>
              <button>Add to cart</button>
         </div>
      </div>

      <!--Cards-->

<div class="card-heading">
        <h3>Try Before you Buy</h3>
      </div>

      <!--<div class="Moisturizers">
        <button>Brushes</button>
      </div>-->

      <div class="card-container">
    <!--Card1-->
    <div class="card">
        <img src="image/BrushesTools/brush1.png">--
        <div class="card-content">
            <b>PAC Concealer Brush</b>
            <p>Rs.382</p>
            <a href="orderdetails.php">
            <button>Shop Now</button>
            </a>
        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demowebsite";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM brushesandtools";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<img src='" . $row["product_image"] . "' alt='" . $row["product_name"] . "'>";
            echo "<div class='card-content'>";
            echo "<b>" . $row["product_name"] . "</b>";
            echo "<b><p>Rs." . $row["price"] . "</p></b>"; // assuming product_price is the column name for price
            echo "<button class='add' data-id='".$row["product_id"] ."'>Add to cart </button>";
            echo "</a>";
            echo "</div>";
            echo "</div>";
        }
    }
    ?>
</div>

<script>
            var product_id = document.getElementsByClassName('add');
            for(var i = 0; i<product_id.length; i++){
                product_id[i].addEventListener("click",function(event){
                    var target = event.target;
                    var id = target.getAttribute("data-id");
                    var xml = new XMLHttpRequest();
                    xml.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            var data = JSON.parse(this.responseText);
                            target.innerHTML = data.in_cart;
                            document.getElementById("badge").innerHTML = data.num_cart + 1;
                        }
                    }
     
                    xml.open("GET","cartconnection.php?id="+id,true);
                    xml.send();
                 
                })
            }
     
        </script>
        
    
    

      <?php
        include('footer.php');
      ?>

        

      
</body>
</html>