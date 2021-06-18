<?php

function send($mobile,$head,$image){
$code='91';
$mobile; 
$data = [
    'phone' => $code.$mobile, // Receivers phone
     'body' => 'http://windermax.com/software/img/'.$image, 
   
'filename' => $image,
'caption' => $head
];

$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
 $token = 'qogjm4dtkbboid95';
 $instanceId = '278477';
$url = 'https://api.chat-api.com/instance'.$instanceId.'/sendFile?token='.$token;
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);
}

send('9354292144','hello','a.png');
?>