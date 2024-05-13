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

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user_bag_log ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $phoneNumber = $row['number']; 
    $status = $row['status'];
    $time = $row['tag_timestamp'];
    $bag_id = $row['id_number'];

    
 if ($status === 'in') {
    $message = "Hey $name, welcome to the library. \n Your bag tag number is: $bag_id \n Time in: $time" ;
} elseif ($status === 'out') {
    $message = "Hey $name, exiting the library baggage area? Remember to grab your belongings. Happy reading!\n Time out: $time";
    //if out, i want you to get the $phoneNumber of the $name of the person with the latest 'out' status and send the message to the $phoneNumber of the latest $name with that$bag_id and say that, your bag numbered: is taken out of the library baggage area
} else {
    die("Invalid status");
}
} else {
die("No name found");
}
 
$apiKey = "2ddeaf03c640130294e055db2dc0e44a-d05deca4-8ca9-4eeb-b062-945715f56ebd";
$apiURL = "5yk2dx.api.infobip.com";

$configuration = new Configuration(host: $apiURL, apiKey: $apiKey);
$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to: $phoneNumber);


$theMessage = new SmsTextualMessage(
    destinations: [$destination],
    text: $message,
    from: "LibKiosk"
);

$request = new SmsAdvancedTextualRequest(messages: [$theMessage]);

try {
    $response = $api->sendSmsMessage($request);
    echo 'SMS Message sent!';
} catch (Exception $e) {
    echo 'Error sending SMS: ' . $e->getMessage();
}

?>
