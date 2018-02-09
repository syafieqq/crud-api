<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/newproject/api.php/login/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n    \"login\": {\n        \"columns\": [\n            \n            \"fname\",\n            \"lname\",\n            \"email\",\n            \"password\"\n        ],\n        \"records\": [\n            [\n             \n                \"Syafiq\",\n                \"Aziz\",\n                \"megat.fst@gmail.com\",\n                \"qwe123\"\n            ]\n        ]\n    }\n}",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Postman-Token: c2b91ec7-f9c2-e045-51a1-e28f44756974"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}