<?php
use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

$message = $_POST["message"];
$phoneNumber = $_POST["phoneNumber"];

$apiKey = "9d1d1725edeee17ee162f16196895b34-4f5239a4-35e5-4914-a264-d64fa4bd0e00";
$apiURL = "k28491.api.infobip.com"; 

$configuration = new Configuration(host: $apiURL, apiKey: $apiKey);
$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to: $phoneNumber);

$theMessage = new SmsTextualMessage(
    destinations: [$destination],
    text: $message,
    from: "LibKiosk"
);

$request = new SmsAdvancedTextualRequest(messages: [$theMessage]);
$response = $api->sendSmsMessage($request);


echo 'SMS Message sent!'
?>
