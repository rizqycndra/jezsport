<?php
    // SAMPLE HIT API iPaymu v2 PHP //

    $va           = '1179005722855830'; //get on iPaymu dashboard
    $secret       = 'D009737E-DC32-4CAC-AA63-AF16663039E8'; //get on iPaymu dashboard

    $url          = 'https://my.ipaymu.com/api/v2/payment/direct'; //url
    $method       = 'POST'; //method

    //Request Body//
    $body['notifyUrl']  = 'https://mywebsite.com/notify';
    $body['paymentMethod']  = 'qris';
    $body['paymentChannel']  = 'linkaja';
    $body['name']  = 'test';
    $body['phone']  = '085722855830';
    $body['email']  = 'rzqcandra@gmail.com';
    $body['amount']  = '100000';
    //End Request Body//

    //Generate Signature
    // *Don't change this
    $jsonBody     = json_encode($body, JSON_UNESCAPED_SLASHES);
    $requestBody  = strtolower(hash('sha256', $jsonBody));
    $stringToSign = strtoupper($method) . ':' . $va . ':' . $requestBody . ':' . $secret;
    $signature    = hash_hmac('sha256', $stringToSign, $secret);
    $timestamp    = Date('YmdHis');
    //End Generate Signature


    $ch = curl_init($url);

    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'va: ' . $va,
        'signature: ' . $signature,
        'timestamp: ' . $timestamp
    );

    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_POST, count($body));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonBody);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $err = curl_error($ch);
    $ret = curl_exec($ch);
    curl_close($ch);
    if($err) {
        echo $err;
    } else {

        //Response
        $ret = json_decode($ret);
        if($ret->Status == 200) {
            echo "<pre>";
            var_dump($ret);
            include 'phpqrcode.php';
            QRcode::png($ret->Data->PaymentNo, 'qr.png');
        } else {
            echo "<pre>";
            var_dump($ret);
        }
        //End Response
    }

?>

<img src="qr.png">