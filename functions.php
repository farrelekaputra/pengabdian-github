<?php 

require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$client = new Client();
$link = "http://localhost:3000";

function login($email, $password) {
    global $client;
    global $link;

    $endpoint = "$link/api/auth/login";

    try {
        $response = $client->post($endpoint, [
            'json' => [
                'email' => $email,
                'password' => $password
            ]
        ]);

        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody()->getContents(), true);

        if ($statusCode == 200 && isset($responseBody['token'])) {
            return [
                'status' => $statusCode,
                'token' => $responseBody['token']
            ];
        } else {
            return [
                'status' => $statusCode,
                'error' => 'Unexpected response structure'
            ];
        }
    } catch (\GuzzleHttp\Exception\ClientException $e) {
        $statusCode = $e->getResponse()->getStatusCode();
        $error = $e->getResponse()->getBody()->getContents();
        $errorData = json_decode($error, true);

        return [
            'status' => $statusCode,
            'error' => $errorData['message'] ?? 'Unknown error'
        ];
    }
}

function getDataTanaman($token, $username) {
    global $link;

    // Membuat instance Guzzle Client
    $client = new Client();

    // Membuat header Authorization dengan Bearer Token
    $headers = [
        'Authorization' => 'Bearer ' . $token,
        'Accept'        => 'application/json'
    ];

    // URL endpoint
    $url = $link . '/api/user/tanaman/by-username/' . $username;

    try {
        // Mengirim request GET dengan header Authorization
        $response = $client->request('GET', $url, [
            'headers' => $headers
        ]);

        // Mengubah stream menjadi string
        $body = $response->getBody();
        $content = $body->getContents();  // Mengubah stream menjadi string

        return $content;  // Mengembalikan konten respons sebagai string
    } catch (RequestException $e) {
        // Menangani error jika request gagal
        return $e->getMessage();
    }
}








































$endpoint = "https://smart-farming-40165-default-rtdb.firebaseio.com";

function getAllData($tablename){
    global $client;
    global $endpoint;

    $response = $client->request("GET", "$endpoint/$tablename.json");

    if($response->getStatusCode() == 200){
        $result = json_decode($response->getBody(), true);
        array_shift($result);
        return $result;
    }
    return false;
}

function getSingleRow($tablename, $id){
    global $client;
    global $endpoint;

    $response = $client->request("GET", "$endpoint/$tablename/$id.json");

    if($response->getStatusCode() == 200){
        return json_decode($response->getBody(), true);
    }
    return false;
}
function getSingleColumn($tablename, $column){
    $all_data=getAllData('tanaman');

    $result = [];

    foreach($all_data as $single_data) {
        $result[] = $single_data["$column"];
    }

    return !empty($result) ? $result : false;
}