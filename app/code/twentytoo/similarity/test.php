<?php

// API endpoint URL
$url = 'https://api.twentytoo.ai/cms/v1/similarity/api/similars';

// Data to be sent in the request body
$data = json_encode([
    "api_key" => "h11lwywxs6",
    "image_id" => "59f295f137fd504737e32b5fc602c2f35a04ce00",
    "page"=> 1,
    "page_index"=> 12,
    "target_audience" => ["women","men"],
    "website" => ["shein", "tfk", "dresscodeme", "farfetch", "namshi", "femi9"],
    "department_name" => ["jackets", "tops", "dresses", "sets", "pants", "beachwear", "skirts", "jumpsuits", "playsuits", "jeans", "shorts", "shoes", "belts", "bags", "scarves", "necklaces", "bracelets", "earrings", "rings", "anklets", "piercing-jewelry", "brooches", "body-jewelry", "suits-blazers"],
]);

// Initialize cURL session
$curl = curl_init();

// Set cURL options
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ],
]);

// Execute cURL request
$response = curl_exec($curl);
$err = curl_error($curl);

// Check for cURL errors
if ($err) {
    echo "cURL Error: " . $err;
} else {
    // Output the response
    echo $response;
}

// Close cURL session
curl_close($curl);
