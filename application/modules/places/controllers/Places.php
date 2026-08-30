<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Places extends MX_Controller
{
    private $apiKey = 'AIzaSyBfHcYG3a49oKboKdXJPvFjOCJXuzGsDqU';

    public function index()
    {
        $this->load->view('places_form');
    }

    // AJAX: autocomplete
    public function autocomplete()
    {
        $q = trim($this->input->post('q'));
        if (strlen($q) < 3) {
            echo json_encode([]);
            return;
        }

        $payload = [
            "input" => $q,
            "languageCode" => "en",
            "regionCode" => "IN"
        ];

        $ch = curl_init("https://places.googleapis.com/v1/places:autocomplete");
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "X-Goog-Api-Key: {$this->apiKey}"
            ],
            CURLOPT_POSTFIELDS => json_encode($payload)
        ]);

        $res = curl_exec($ch);
        
        curl_close($ch);

        $data = json_decode($res, true);
        $out = [];

        if (!empty($data['suggestions'])) {
            foreach ($data['suggestions'] as $s) {
                if (!empty($s['placePrediction'])) {
                    $out[] = [
                        "id" => $s['placePrediction']['placeId'],
                        "text" => $s['placePrediction']['text']['text']
                    ];
                }
            }
        }

        echo json_encode($out);
        
    }
// public function autocomplete()
// {
//     $payload = [
//         "input" => "Delhi",
//         "languageCode" => "en",
//         "regionCode" => "IN"
//     ];

//     $ch = curl_init("https://places.googleapis.com/v1/places:autocomplete");
//     curl_setopt_array($ch, [
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_POST => true,
//         CURLOPT_HTTPHEADER => [
//             "Content-Type: application/json",
//             "X-Goog-Api-Key: {$this->apiKey}"
//         ],
//         CURLOPT_POSTFIELDS => json_encode($payload)
//     ]);

//     $res = curl_exec($ch);

//     if ($res === false) {
//         echo json_encode(["curl_error" => curl_error($ch)]);
//         curl_close($ch);
//         return;
//     }

//     curl_close($ch);
//     echo $res;
// }


    public function details()
    {
        $placeId = $this->input->post('id');
        if (!$placeId) {
            echo json_encode([]);
            return;
        }

        $url = "https://places.googleapis.com/v1/places/{$placeId}?fields=formattedAddress,addressComponents";

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "X-Goog-Api-Key: {$this->apiKey}"
            ]
        ]);

        echo curl_exec($ch);
        curl_close($ch);
    }
}
