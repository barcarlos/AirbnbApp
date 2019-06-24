<?php

function postapi($data,$url){
//create a new cURL resource
$ch = curl_init($url);
$payload = json_encode($data);
//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//execute the POST request
$result = curl_exec($ch);
//close cURL resource
curl_close($ch);
return $result;
}

function putapi($data,$url){
  //create a new cURL resource
  $ch = curl_init($url);
  $payload = json_encode($data);
  echo $payload;
  //attach encoded JSON string to the POST fields
  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
  //set the content type to application/json
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
  //return response instead of outputting
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //execute the POST request
  $result = curl_exec($ch);
  //close cURL resource
  curl_close($ch);
  return $result;
  }

  function deleteapi($data,$url){
    //create a new cURL resource
    $ch = curl_init($url);
    $payload = json_encode($data);
    //attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    //set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //execute the POST request
    $result = curl_exec($ch);
    //close cURL resource
    curl_close($ch);
    return $result;
    }


function getDataapi($url){
  $data = json_decode(file_get_contents($url), true);
  return $data;
}
?>