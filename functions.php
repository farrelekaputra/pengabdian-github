<?php 

require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client();
$link = "http://localhost:3000";

function login($email, $password){
    global $client;
    global $link;

    $endpoint = "$link/api/auth/login";

    $body = [
        'email' => $email,
        'password' => $password,
    ];

    $res = $client->post($endpoint, [
        'json' => $body,
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json',
        ]
    ]);

    return $res->getBody();
}

function getdataTanamanByAreaId($area, $id_karyawan, $bearerToken){
    global $client;
    global $link;

    $headers = [
        'Authorization' => "Bearer $bearerToken",
        'Accept'        => 'application/json',
    ];

    $endpoint = "$link/api/user/get/tanaman/id/$id_karyawan/area/$area";

    $res = $client->get($endpoint, [
        'headers' => $headers,
    ]);

    return $res->getBody();
}