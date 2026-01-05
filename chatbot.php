<?php
// 1. Force error reporting OFF to prevent "Warning" text from breaking JSON
error_reporting(0);
ini_set('display_errors', 0);
header('Content-Type: application/json');

// 2. Simple & Direct .env Loading
$apiKey = '';
$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        $parts = explode('=', $line, 2);
        if (count($parts) === 2 && trim($parts[0]) === 'GEMINI_API_KEY') {
            $apiKey = trim($parts[1]);
        }
    }
}

// 3. Get Input
$input = json_decode(file_get_contents('php://input'), true);
$userMessage = $input['message'] ?? '';

if (empty($apiKey)) {
    echo json_encode(['reply' => 'Twinkle alert: API Key missing in .env file!']);
    exit;
}

// 4. API Configuration (Using v1 Stable Endpoint and 2.5 Flash Model)
$apiUrl = "https://generativelanguage.googleapis.com/v1/models/gemini-2.5-flash:generateContent?key=" . $apiKey;

// 1. Database Connection
$host = 'localhost';
$db   = 'demowebsite';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

// 2. Fetch Products from your MySQL table
$productQuery = "(SELECT 'Makeup' as cat, product_name, price FROM makeup LIMIT 5)
    UNION ALL
    (SELECT 'Skin' as cat, product_name, price FROM skinproducts LIMIT 5)
    UNION ALL
    (SELECT 'Hair' as cat, product_name, price FROM hairs LIMIT 5)
    UNION ALL
    (SELECT 'BrushesandTools' as cat, product_name, price FROM brushesandtools LIMIT 5)
    UNION ALL
    (SELECT 'Fragrance' as cat, product_name, price FROM fragrance LIMIT 5)";
$result = $conn->query($productQuery);

$dynamicCatalog = "";
while($row = $result->fetch_assoc()) {
    $dynamicCatalog .= "• [" . $row['cat'] . "] " . $row['product_name'] . " - Rs." . $row['price'] . "\n";
}

// 3. Update the Payload to use $dynamicCatalog
$payload = [
    "contents" => [[
        "parts" => [["text" => "You are Twinkle for 'Twinkle Tints'. 
            Here is our current live inventory:
            $dynamicCatalog
            
            Instructions: 
            - Suggest items from the list above.
            - Answer in 6-8 crisp bullet points using '•'.
            User: " . $userMessage]]]]
];


// 5. cURL Execution
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Crucial for local server testing

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$err = curl_error($ch);
curl_close($ch);

// 6. Robust Response Handling
if ($err) {
    echo json_encode(['reply' => 'Connection Error: ' . $err]);
} elseif ($httpCode !== 200) {
    // Helpful debugging if the model ID ever changes again
    $errorDetails = json_decode($response, true);
    $msg = $errorDetails['error']['message'] ?? 'Check API Key/Model Name';
    echo json_encode(['reply' => "Twinkle Error ($httpCode): " . $msg]);
} else {
    $result = json_decode($response, true);
    $text = $result['candidates'][0]['content']['parts'][0]['text'] ?? "I'm a bit overwhelmed! Ask me something else about beauty.";
    echo json_encode(['reply' => $text]);
}
?>