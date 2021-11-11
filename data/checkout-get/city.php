<?php

$curl = curl_init();

$province_id = $_GET['id'];

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=&province=$province_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "key: 52e74c7e33ceef10ab10b2bace67dc7e"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response)->rajaongkir->results;

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo '<option value="">Pilih Kota</option>';
    for ($i = 0; $i < sizeof($response); $i++) {
        $value = $response[$i]->city_id;
        $type = $response[$i]->type;
        $city = $response[$i]->city_name;
        echo '<option value="' . $value . '">' . $type . ' ' . $city . '</option>';
    }
}