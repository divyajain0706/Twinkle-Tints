<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakeUp Products</title>
    <link rel="stylesheet" href="makeup1.css">
    <style>
        <style>
  body {
    margin: 0;
    padding: 0;
  }
  *{
  box-sizing: border-box;
}
.main-content h3 {
    padding-left: 440px;
    padding-bottom: 26px;
    font-family: 'Times New Roman';
    letter-spacing: 2px;
    padding-top: 197px;
    font-size: 3rem;
    text-transform: uppercase;
    font-weight: 500;

}
.nav-links {
    list-style: none;
    display: flex;
    gap: 2rem;
    letter-spacing: 3px;
    margin: 0;
    padding: 14px;
    max-width: 100%;
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
    margin-top: 70px !important;
    grid-auto-flow: column;
    grid-auto-columns: calc((100/3) - 12px);
    /*grid-auto-columns: calc((100/3) - 27px);*/
  }

  .card{
    width: 270px;
    background-color:rgb(250, 177, 217);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
    margin: 15px;
    box-sizing: border-box;
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

.Face button,
.Lips button,
.Eyes button{
    font-family: Helvetica;
    font-size: 25px;
    margin-left: 110px;
    background-color: black;
    color: white;
    width: 6rem;
    height: 3rem;
    border-radius: 8px;
    margin-top: 50px;
}
#main {
    max-width: 980px !important;
    width: 90%;
    padding: 39px;
    border-radius: 30px;
    min-height: 437px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    background-color: #ffedf6;
    margin-top: 67px;
}
    </style>


</head>
<body>
     <?php
       include('header.php');
     ?>

      <div class="main">
         <div class="main-content">
              <h3>MakeUp</h3>
              <div>Define, highlight,play : Shop Lipstics, blushes, foundations & more</div>
              <button>Shop Now</button>
         </div>
      </div>

      <!--Cards-->

      <div class="card-heading">
        <h3>Try Before you Buy</h3>
      </div>


      <div class="card-container">
        <!--Card1-->
        <div class="card">
            <img src="images/MakeupPage/Lips1.png">
            <div class="card-content">
                <b>Maybelline Newyork Superstay Liquid Lipstic</b>
                <p>Rs.1,230</p>
                <button>Shop Now</button>
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

    $sql = "SELECT * FROM makeup";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<img src='" . $row["product_image"] . "' alt='" . $row["product_name"] . "'>";
            echo "<div class='card-content'>";
            echo "<b>" . $row["product_name"] . "</b>";
            echo "<b><p>Rs. " . $row["price"] . "</p></b>"; // assuming product_price is the column name for price
            echo "<button class='add' data-id='".$row["product_id"] ."'>Add to cart </button>";
            echo "</div>";
            echo "</div>";
            
            
     
               }
              }
              ?>
              </div>
        
        </main>
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
</div>

    <section id="main">

        <!--Text------>
       <div class="main-text">
            <span>"Unleash Your Inner Glow"</span>
            <h3>Radiate confidence with our premium makeup collection.</h3>
                <button>Shop Now</button>
        </div>
        <!--Main---image-->
        <div class="main-img">
        <img src="images/MakeupPage/MakeupMainimg3.png">
        </div>
    </section>

      <?php
         include('footer.php');
      ?>


</body>
</html>