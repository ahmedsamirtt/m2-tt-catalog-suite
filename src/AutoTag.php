<?php

namespace TwentyToo\AutoTag;

class AutoTag{
    private function imageToBase64($imagePath) {
        $imageData = file_get_contents($imagePath);
        $base64Image = base64_encode($imageData);
        return $base64Image;
    }
    
    private function makePostRequest($url, $postData) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    
    public function convertAndPost($imagePath, $url, $postData) {
        $base64Image = $this->imageToBase64($imagePath);
        $postData['image'] = $base64Image; 
        return $this->makePostRequest($url, $postData);
    }
}




?>