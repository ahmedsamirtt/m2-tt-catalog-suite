<?php
namespace Twentytoo\Observer;

use Magento\Framework\Event\ObserverInterface;

class NewTab implements ObserverInterface
{
    const PARENT_BLOCK_NAME = 'product.info.details';
    const RENDERING_TEMPLATE = 'Twentytoo_CustomTab::tab_renderer.phtml';

    protected $tabs;

    public function __construct(
        \Twentytoo\Model\TabConfig $tabs
    ) {
        $this->tabs = $tabs;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $layout = $observer->getLayout();
        $blocks = $layout->getAllBlocks();

        foreach ($blocks as $block) {
            if ($block->getNameInLayout() == self::PARENT_BLOCK_NAME) {
                foreach ($this->tabs->getTabs() as $key => $tab) {
                    $block->addChild(
                        $key,
                        \Magento\Catalog\Block\Product\View::class,
                        [
                            'template' => self::RENDERING_TEMPLATE,
                            'title'     =>  $tab['title'],
                            'jsLayout'      =>  [
                                $tab
                            ]
                        ]
                    );
                }
            }
        }
    }
}
