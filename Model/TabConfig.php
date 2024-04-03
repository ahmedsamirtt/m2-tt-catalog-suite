<?php
namespace Twentytoo\Model;

class TabConfig
{
    public function getTabs()
    {
        return [
            'tabA' =>  [
                'title'         =>  'Custom Tab A',
                'description'   =>  'Custom Tab A is right here !',
                'sortOrder'     =>  50
            ],
            'tabB'  =>  [
                'title'         =>  'Recently Viewed',
                'description'   =>  'Recently Viewed Products',
                'sortOrder'     =>  45
            ],
            'tabC'  => [
                'title'         =>  'Lorem Ipsum Tab',
                'description'   =>  'Lorem Ipsum Tab Description',
                'sortOrder'     =>  45
            ]
        ];
    }
}
