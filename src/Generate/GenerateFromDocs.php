<?php

$documentationPages = array(
   'Reporting' =>  'https://developer.frontdeskhq.com/docs/reporting/v3',
   'Core' => 'https://developer.frontdeskhq.com/docs/api/v2'
);

foreach($documentationPages as $api => $documentationUrl){
    $html = get_data($documentationUrl);

}



function get_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}