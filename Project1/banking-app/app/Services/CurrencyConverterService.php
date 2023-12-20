<?php

namespace App\Services;

use GuzzleHttp\Client;

class CurrencyConverterService
{
    protected $apiKey;
    protected $apiUrl = 'https://api.exchangerate-api.com/v4/latest/';

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function convert($from, $to, $amount)
    {
        $client = new Client();

        $response = $client->get($this->apiUrl . $from);
        $data = json_decode($response->getBody(), true);

        $fromRate = $data['rates'][$from];
        $toRate = $data['rates'][$to];

        $convertedAmount = ($amount / $fromRate) * $toRate;

        return $convertedAmount;
    }
}
