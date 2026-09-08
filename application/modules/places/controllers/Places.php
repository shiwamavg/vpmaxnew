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

    if (strlen($q) < 2) {
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
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_TIMEOUT => 15,
        CURLOPT_CONNECTTIMEOUT => 10
    ]);

    $res = curl_exec($ch);

    // Check CURL error
    if ($res === false) {

        $error = curl_error($ch);
        $errno = curl_errno($ch);

        curl_close($ch);

        log_message('error', 'Google Places CURL Error: ' . $error);

        $this->output
            ->set_status_header(500)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => false,
                'message' => 'Google Places request failed',
                'curl_error' => $error,
                'curl_errno' => $errno
            ]));

        return;
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    $data = json_decode($res, true);

    // Google returned an error
    if ($httpCode < 200 || $httpCode >= 300) {

        log_message(
            'error',
            'Google Places API Error [' . $httpCode . ']: ' . $res
        );

        $this->output
            ->set_status_header($httpCode)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => false,
                'message' => 'Google Places API returned an error',
                'http_code' => $httpCode,
                'google_response' => $data
            ]));

        return;
    }

    $out = [];

    if (!empty($data['suggestions'])) {

        foreach ($data['suggestions'] as $s) {

            if (!empty($s['placePrediction'])) {

                $prediction = $s['placePrediction'];

                $out[] = [
                    "id" => $prediction['placeId'] ?? '',
                    "text" => $prediction['text']['text'] ?? ''
                ];
            }
        }
    }

    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($out));
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
    $placeId = trim($this->input->post('id'));

    if (!$placeId) {
        $this->output
            ->set_status_header(400)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => false,
                'message' => 'Place ID is required'
            ]));
        return;
    }

    $url = "https://places.googleapis.com/v1/places/" .
           rawurlencode($placeId) .
           "?fields=formattedAddress,addressComponents";

    $ch = curl_init($url);

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "Accept: application/json",
            "X-Goog-Api-Key: {$this->apiKey}"
        ],

        CURLOPT_ENCODING => '',

        CURLOPT_TIMEOUT => 15,
        CURLOPT_CONNECTTIMEOUT => 10
    ]);

    $res = curl_exec($ch);

    if ($res === false) {

        $error = curl_error($ch);
        $errno = curl_errno($ch);

        curl_close($ch);

        $this->output
            ->set_status_header(500)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => false,
                'message' => 'Google Places request failed',
                'curl_error' => $error,
                'curl_errno' => $errno
            ]));

        return;
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    $data = json_decode($res, true);

    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {

        $this->output
            ->set_status_header(500)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => false,
                'message' => 'Invalid JSON received from Google',
                'json_error' => json_last_error_msg(),
                'raw_response' => $res
            ]));

        return;
    }

    if ($httpCode < 200 || $httpCode >= 300) {

        $this->output
            ->set_status_header($httpCode)
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => false,
                'message' => 'Google Places API returned an error',
                'http_code' => $httpCode,
                'google_response' => $data
            ]));

        return;
    }

    // Return a fresh JSON response from your server
    $this->output
        ->set_status_header(200)
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
}
}
