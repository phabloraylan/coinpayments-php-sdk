<?php

namespace CoinPayments\Http;

class Api
{
    private const API_URL = "https://www.coinpayments.net/index.php";
    public static function load($fields){
        // Create a client with a base URI
        $client = new \GuzzleHttp\Client(['base_uri' => self::API_URL,'verify' => false]);
        $response = $client->request('POST', '', [
            'form_params' => $fields
        ]);
        
        return $response;

    }
}