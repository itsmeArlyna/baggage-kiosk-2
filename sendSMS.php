<?php
use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

$servername = "localhost";
$username = "root";
$password = "";
$database = "baggage_kiosk_db";

// Connect to MySQL database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch name and phone number from the latest row in the database
$sql = "SELECT name, number FROM students_logs ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $phoneNumber = $row['number']; 
} else {
    die("No name found");
}

$apiKey = "9d1d1725edeee17ee162f16196895b34-4f5239a4-35e5-4914-a264-d64fa4bd0e00";
$apiURL = "k28491.api.infobip.com"; 

$configuration = new Configuration(host: $apiURL, apiKey: $apiKey);
$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to: $phoneNumber);

$message = "Hey $name, exiting the library baggage area? Remember to grab your belongings. Happy reading!";

$theMessage = new SmsTextualMessage(
    destinations: [$destination],
    text: $message,
    from: "LibKiosk"
);

$request = new SmsAdvancedTextualRequest(messages: [$theMessage]);

// Send SMS and handle response
try {
    $response = $api->sendSmsMessage($request);
    echo 'SMS Message sent!';
} catch (Exception $e) {
    echo 'Error sending SMS: ' . $e->getMessage();
}

?>
