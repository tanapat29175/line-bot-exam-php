<?php


$access_token = '3qnR6w3l0I+g7w0AFQqHLCZAsb6arcGAvS3lf82QBzB5iDZPUH+SMqsnPwRNrbWFuTDHq0UHAet8DBh5sUlxlG4/7YFRu1ATbQ1l6slMwmbiVkpVZwoLzpBmwxK3IDQb2X9Nee4RHzSp8fDl0jESvQdB04t89/1O/w1cDnyilFU=';

$userId = 'Uab43a7921e0f2ff83d61b3e02c471606';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

