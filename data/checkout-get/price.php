<?php

session_start();

$curl = curl_init();

$destination = $_GET['id'];
$courier = $_GET['c'];
$service = $_GET['s'];

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "origin=24&destination=$destination&weight=1000&courier=$courier",
    CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: 52e74c7e33ceef10ab10b2bace67dc7e"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response)->rajaongkir->results[0]->costs;

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    if ($_GET['detailp']) {
        echo '*RP ' . number_format($response[$service]->cost[0]->value) . ' ( ' .  $response[$service]->cost[0]->etd . ' Hari )';
    } else {
        echo $response[$service]->cost[0]->value;
    }
    $_SESSION['cost'] = $response[$service]->cost[0]->value;
}