<?php
namespace App\Helper;

class SenderManager {
    public $baseUrl;
    public $token;

    public function __construct() {
        $this->baseUrl = config('sendermail.baseurl');
        $this->token = config('sendermail.token');
    }

    public function authenticate () {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $this->baseUrl . '/campaigns', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->token,
                'Accept' => 'application/json',
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
