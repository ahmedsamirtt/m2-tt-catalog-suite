<?php
namespace TwentyToo\CatalogSuites\Block;

class CustomTab extends \Magento\Framework\View\Element\Template
{
    public function getStaticContent()
    {
        return [
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
        ];
    }
}
