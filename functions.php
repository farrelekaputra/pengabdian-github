<?php 

require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client();

function getAllData($tablename){
    global $client;

    $response = $client->request("GET", "https://smart-farming-40165-default-rtdb.firebaseio.com/$tablename.json");

    if($response->getStatusCode() == 200){
        return json_decode($response->getBody(), true);
    }
    return false;
}

function getSingleRow($tablename, $id){
    global $client;

    $response = $client->request("GET", "https://smart-farming-40165-default-rtdb.firebaseio.com/$tablename/$id.json");

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