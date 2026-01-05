<!--Navigation Bar-->
<link rel="stylesheet" href="style1.css">
<nav class="navigation">
        <!--Logo-->
        <a href="#" class="logo">
            <img src="images/twinkle tints 1.png">
        </a>

        <!--Search bar-->
        <div class="search-box">
            <input type="search"  placeholder="search products here">
                 <img src="images/search (1).png" width="18px" height="20px">
        </div>
        
                 
        
        
        <!--Nav-buttons-->
        <div class="nav-btns">

            <!--nav-user-->
            <a href="loginform2.php" class="nav-user">
                <img src="images/user.png" width="30px">
            </a>

            <!--nav-cart-->
            <a href="cart.php" class="nav-cart">
                <img src="images/shopping-cart.png" width="30px">
            </a>
        </div>
</nav>
    <ul class="nav-links">
    <li><a href="beautyweb.php">HOME</a></li>
        <li><a href="makeup.php">MAKEUP</a></li>
        <li><a href="skin.php">SKIN</a></li>
        <li><a href="hairs.php">HAIR</a></li>
        <li><a href="brushesandtools.php">BRUSHES&TOOLS</a></li>
        <li><a href="fragrance.php">FRAGRANCE</a></li>
        
      </ul>


      <!-- ================= CHATBOT UI ================= -->

<div id="chatbot-container">
    <div id="chatbot-header">
        Twinkle Tints Assistant 💄
        <span onclick="toggleChatbot()">✖</span>
    </div>

    <div id="chatbot-body"></div>

    <div id="chatbot-input">
        <input type="text" id="chatbot-message" placeholder="Ask about beauty & skincare...">
        <button onclick="sendChatbotMessage()">Send</button>
    </div>
</div>

<!-- ================= CHATBOT SCRIPT ================= -->

<script>
function toggleChatbot() {
    const bot = document.getElementById("chatbot-container");
    bot.style.display = bot.style.display === "block" ? "none" : "block";
}

function sendChatbotMessage() {
    const input = document.getElementById("chatbot-message");
    const message = input.value.trim();
    if (message === "") return;

    const chatBody = document.getElementById("chatbot-body");
    chatBody.innerHTML += `<div class="user-msg">${message}</div>`;
    input.value = "";

    fetch("chatbot.php", {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({ message: message })
    })
    .then(res => res.json())
    .then(data => {
        chatBody.innerHTML += `<div class="bot-msg">${data.reply}</div>`;
        chatBody.scrollTop = chatBody.scrollHeight;
    });
}
</script>