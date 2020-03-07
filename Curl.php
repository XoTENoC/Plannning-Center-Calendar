<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.planningcenteronline.com/resources/v2/events');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

curl_setopt($ch, CURLOPT_USERPWD, 'cfb77bcd864e48505b81b553ecd8afec36172552862a0883add6e91520508fbb' . ':' . '5870081b5d9ebd621abd49bda4757fc8585415e7ae6ccb4de5b40c1d9ef11c33');

curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);  

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

?>