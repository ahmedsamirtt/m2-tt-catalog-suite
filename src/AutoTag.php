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
        
        return json_encode([
            "message" => [
                [
                    "eng_tags" => [
                        "Color" => "Black And White",
                        "Department" => "Sets",
                        "Detail" => "Pocket",
                        "Fit" => "Oversized",
                        "Neckline" => "Round Neck",
                        "Pattern" => "Plain",
                        "Sleeve-Length" => "Long Sleeve",
                        "Style" => "Casual",
                        "Type" => "Sweatshirt",
                        "Sleeve Type" => "Drop Shoulder",
                        "Target-Audience" => "Women",
                        "Title" => "drop shoulder pullover & wide leg pants"
                    ],
                    "ar_tags" => [
                        "اللون" => "أسود وأبيض",
                        "القسم" => "الأطقم",
                        "التفصيل" => "جيب",
                        "المقاس" => "كبير الحجم",
                        "قصة العنق" => "العنق المستدير",
                        "نمط" => "سادة",
                        "طول الأكمام" => "أكمام طويلة",
                        "ستايل" => "كاجوال",
                        "النوع" => "سويتشيرت",
                        "نوع الأكمام" => "الكتف المنخفض",
                        "الجمهور المستهدف" => "نساء",
                        "Title" => "\"سترة بأكمام واسعة وبنطلون واسع\""
                    ]
                ]
            ]
        ]);
    }
}




?>