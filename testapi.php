<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"path/api.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "");
$heads = [
    'Authorization: Bearer kNLbNKNSJyhAFDXEcjw2Aj9Q98D7s2td',
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $heads);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);


echo $server_output;