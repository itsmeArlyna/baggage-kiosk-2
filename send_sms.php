<?php
use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

// Include Infobip PHP library
require __DIR__ . "/vendor/autoload.php";

// Infobip credentials
$apiKey = "9d1d1725edeee17ee162f16196895b34-4f5239a4-35e5-4914-a264-d64fa4bd0e00";
$apiURL = "k28491.api.infobip.com"; 

// Database connection parameters
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

// Query to get the latest row
$sql = "SELECT * FROM students_logs ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Extract the necessary information from the latest row
    $row = $result->fetch_assoc();
    $phone_number = $row["number"]; // Assuming phone number is in the column "phone_number"
    $message_body = "Your message body here";

    // Initialize Infobip configuration
    $configuration = new Configuration();
    $configuration->setApiKey($apiKey);
    $configuration->setHost($apiURL);

    // Initialize Infobip SMS API
    $api = new SmsApi($configuration);

    // Define SMS destination
    $destination = new SmsDestination();
    $destination->setTo($phone_number);

    // Create SMS message
    $message = new SmsTextualMessage();
    $message->setFrom("YourSenderID"); // Set your sender ID here
    $message->setDestinations([$destination]);
    $message->setText($message_body);

    // Send SMS message
    $request = new SmsAdvancedTextualRequest();
    $request->setMessages([$message]);

    $response = $api->sendSmsMessage($request);

    // Output success message
    echo "SMS sent successfully to " . $phone_number;
} else {
    echo "No rows found in the database";
}

// Close database connection
$conn->close();
?>
