<?php
namespace App\Services;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiService
{
    protected $client;
    protected $apiKey;
    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('RAPIDAPI_KEY'); // Ambil API key dari file .env
    }
    // Fungsi untuk mendapatkan semua tim
    public function getGaming()
    {
        try {
            $response = $this->client->request('GET',
            'https://esportapi1.p.rapidapi.com/api/esport/search/ATK', [
            'headers' => [
            'x-rapidapi-key' => $this->apiKey
            ],
            'verify' => false // Menonaktifkan verifikasi SSL
            ]);
            // return json_decode($response->getBody()->getContents(), true);
            $data = json_decode($response->getBody()->getContents(), true);
            return $data;
            } catch (RequestException $e) 
        {
            return ['Belum Tersedia' => $e->getMessage()];
        }
    }
}
