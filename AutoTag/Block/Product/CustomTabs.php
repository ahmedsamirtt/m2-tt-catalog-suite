<?php
namespace TwentyToo\CatalogSuites\AutoTag\Block\Product;

use Magento\Catalog\Block\Product\View\Attributes;

class CustomTabs extends Attributes
{
    public function getCustomAttributes()
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
