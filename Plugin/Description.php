<?php
namespace Twentytoo\Plugin;
 
use Twentytoo\Model\TabConfig;
 
class Description
{
    protected $tabs;
 
    public function __construct(
        TabConfig $tabs
    ) {
        $this->tabs = $tabs;
    }
 
    public function afterGetGroupSortedChildNames(
        \Magento\Catalog\Block\Product\View\Details $subject,
        $result
    ) {
        if (!empty($this->tabs->getTabs())) {
            foreach ($this->tabs->getTabs() as $key => $tab) {
                $sortOrder = isset($tab['sortOrder']) ? $tab['sortOrder'] : 45;
                $result = array_merge($result, [ $sortOrder => 'product.info.details.' . $key]);
            }
        }
        return $result;
    }
}
