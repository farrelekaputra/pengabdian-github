<?php 

require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client();
$endpoint = "https://smart-farming-40165-default-rtdb.firebaseio.com";

function getAllData($tablename){
    global $client;
    global $endpoint;

    $response = $client->request("GET", $endpoint."/$tablename.json");

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

    $response = $client->request("GET", $endpoint."/$tablename/$id.json");

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

function login($username){
    
}