<?php



require "vendor/autoload.php";

$access_token = '3qnR6w3l0I+g7w0AFQqHLCZAsb6arcGAvS3lf82QBzB5iDZPUH+SMqsnPwRNrbWFuTDHq0UHAet8DBh5sUlxlG4/7YFRu1ATbQ1l6slMwmbiVkpVZwoLzpBmwxK3IDQb2X9Nee4RHzSp8fDl0jESvQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3d6cd3a8646795fa876eab4a2da1d629';

$pushID = 'Uab43a7921e0f2ff83d61b3e02c471606';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







