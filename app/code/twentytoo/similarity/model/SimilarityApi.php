<?php

namespace TwentyToo\Similarity\Model;

class SimilarityApi {
    private $url;

    public function __construct(string $url) {
        $this->url = $url;
    }

    public function callApi(array $data): string {
        // Initialize cURL session
        $curl = curl_init();

        // Set cURL options
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ],
        ]);

        // Execute cURL request
        $response = curl_exec($curl);
        $err = curl_error($curl);

        // Check for cURL errors
        if ($err) {
            $response = "cURL Error: " . $err;
        }

        // Close cURL session
        curl_close($curl);

        return $response;
    }
}
?>
