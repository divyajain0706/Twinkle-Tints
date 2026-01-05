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

<style>
/* Chatbot Theme matches existing pink aesthetic */
#chatbot-container{
    position: fixed;
    bottom: 50px;
    right: 20px;
    width: 320px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    display: none;
    flex-direction: column;
    z-index: 999;
    font-family: inherit;
}

#chatbot-header{
    background: #ff5da2;
    color: #fff;
    padding: 12px;
    font-weight: 600;
    border-radius: 12px 12px 0 0;
    text-align: center;
}

#chatbot-body{
    padding: 10px;
    height: 250px;
    overflow-y: auto;
    font-size: 14px;
}

.user-msg{
    text-align: right;
    margin: 6px 0;
    color: #333;
}

.bot-msg{
    text-align: left;
    margin: 6px 0;
    color: #b90c57ff;
}

#chatbot-input{
    display: flex;
    border-top: 1px solid #ddd;
}

#chatbot-message{
    flex: 1;
    padding: 10px;
    border: none;
    outline: none;
}

#chatbot-send{
    background: #ff5da2;
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
}

#chatbot-toggle{
    position: absolute;
    top : 45%;
    right: 20px;
    background: #ff5da2;
    color: #fff;
    border: none;
    padding: 10px 16px;
    border-radius: 30px;
    cursor: pointer;
    z-index: 998;
}
</style>

    <ul class="nav-links">
    <li><a href="beautyweb.php">HOME</a></li>
        <li><a href="makeup.php">MAKEUP</a></li>
        <li><a href="skin.php">SKIN</a></li>
        <li><a href="hairs.php">HAIR</a></li>
        <li><a href="brushesandtools.php">BRUSHES&TOOLS</a></li>
        <li><a href="fragrance.php">FRAGRANCE</a></li>
        

      </ul>


      <!-- ================= CHATBOT UI ================= -->
<button id="chatbot-toggle" onclick="toggleChatbot()">💬 AI</button>

<div id="chatbot-container">
    <div id="chatbot-header">Twinkle AI ✨</div>

    <div id="chatbot-body">
        <div class="bot-msg">Hi! How can I help you today 💄</div>
    </div>

    <div id="chatbot-input">
        <input type="text" id="chatbot-message" placeholder="Ask me anything...">
        <button id="chatbot-send">Send</button>
    </div>
</div>


<!-- ================= CHATBOT SCRIPT ================= -->

<script>
function toggleChatbot(){
    const chatbot = document.getElementById("chatbot-container");
    chatbot.style.display = chatbot.style.display === "flex" ? "none" : "flex";
}

const sendBtn = document.getElementById("chatbot-send");
const input = document.getElementById("chatbot-message"); // ✅ FIXED LINE
const chatBody = document.getElementById("chatbot-body");

sendBtn.addEventListener("click", sendMessage);
input.addEventListener("keypress", function(e){
    if(e.key === "Enter") sendMessage();
});

function sendMessage(){
    const message = input.value.trim();
    if(message === "") return;

    chatBody.innerHTML += `<div class="user-msg">${message}</div>`;
    input.value = "";
    chatBody.scrollTop = chatBody.scrollHeight;

    fetch("chatbot.php", {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({ message: message })
    })
    .then(res => res.json())
    .then(data => {
        chatBody.innerHTML += `<div class="bot-msg">${data.reply}</div>`;
        chatBody.scrollTop = chatBody.scrollHeight;
    })
    .catch(() => {
        chatBody.innerHTML += `<div class="bot-msg">Something went wrong 😔</div>`;
    });
}

document.addEventListener("click", function (event) {
    const chatbot = document.getElementById("chatbot-container");
    const toggleBtn = document.getElementById("chatbot-toggle");

    if (
        chatbot.style.display === "flex" &&
        !chatbot.contains(event.target) &&
        !toggleBtn.contains(event.target)
    ) {
        chatbot.style.display = "none";
    }
});
</script>