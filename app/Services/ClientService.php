<?php
namespace App\Services;

/**
 *
 */
class ClientService
{
  public function client($param)
  {
    $headers = array(
      'Accept'=>'application/json',
      'Content-Type'=>'application/json',
      'Authorization'=>'Bearer 82887f86e5a44b8bbf0b23ce4b383e27',// Bisa pakai token masing-masing//
    );
    $query = http_build_query(
      array(
      "v" => 20170712,
      "query" => $param,
      "lang" => "en",
      "sessionId" => "5b050ebb-812b-4398-ac0d-fc4d35b657c4",
      "timezone" => "Asia/Jakarta",
    )
    );
    // dd($query);
    $url = "https://api.dialogflow.com/v1/query?".$query;
    $response = \Requests::get($url,$headers);
    $response = $response->body;
    $response = json_decode($response);
    return $response->result;
  }
}
