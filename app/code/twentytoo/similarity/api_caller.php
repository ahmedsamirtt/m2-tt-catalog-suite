<?php

require_once(__DIR__ . '/model/SimilarityApi.php');

use TwentyToo\Similarity\Model\SimilarityApi;

$url = 'https://api.twentytoo.ai/cms/v1/similarity/api/similars';

$data = [
    "api_key" => "h22lwywxs4",
    "image_id" => "59f295f137fd504737e32b5fc602c2f35a04ce00",
    "page"=> 1,
    "page_index"=> 10,
    "target_audience" => ["women","men"],
    "website" => ["shein"],
    "department_name" => ["jackets"],
];

$api = new SimilarityApi($url);
$response = $api->callApi($data);
echo $response;

?>
