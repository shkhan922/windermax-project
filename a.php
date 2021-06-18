<?php
$code='91';
$data = [
    // 'phone' => '919354292144', // Receivers phone
    'phone' => $code.'9354292144', // Receivers phone
     'body' => 'http://windermax.com/assets/images/mail/3.jpg', 
   
'filename' => '3.jpg',
'caption' => 'Hello dear sir/mam 

We deal in all types of exterior wall cladding and pvc wall panels 

HPL wall cladding panels
ACP/HPL wall cladding panels
WPC wall cladding panels
PVC wall cladding panels
Aluminium wall cladding panels
Colour rivets

Dealers and distributors discount also available

Any requirement now or in future please contact 
9810750628
9911866116

For more information please visit our website
www.windermax.com
www.pvcpanelindia.com',

];


$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
 $token = 'zqor8fnloqit3kqp';
 $instanceId = '282589';
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

?>