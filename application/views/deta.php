<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://api.kawalcorona.com/indonesia');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close();


    $result = json_decode($result, true);
    var_dump($result);
?>