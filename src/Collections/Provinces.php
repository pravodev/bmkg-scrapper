<?php

namespace PravoDev\BMKGScrapper\Collections;

use PravoDev\BMKGScrapper\Blueprint\Collection;

class Provinces extends Collection
{
    protected $url = 'cuaca/prakiraan-cuaca-indonesia.bmkg';

    public function getImages($index)
    {
        $names = [
            'aceh',
            'bali',
            'kepulauan-bangka-belitung',
            'banten',
            'bengkulu',
            'di-yogyakarta',
            'dki-jakarta',
            'gorontalo',
            'jambi',
            'jawa-barat',
            'jawa-tengah',
            'jawa-timur',
            'kalimantan-barat',
            'kalimantan-selatan',
            'kalimantan-tengah',
            'kalimantan-timur',
            'kalimantan-utara',
            'kepulauan-riau',
            'lampung',
            'maluku',
            'maluku-utara',
            'nusa-tenggara-barat',
            'nusa-tenggara-timur',
            'papua',
            'papua-barat',
            'riau',
            'sulawesi-barat',
            'sulawesi-selatan',
            'sulawesi-tengah',
            'sulawesi-tenggara',
            'sulawesi-utara',
            'sumatera-barat',
            'sumatera-selatan',
            'sumatera-utara',
            'ibukota-indonesia'
        ];

        return $this->baseUrl . 'asset/img/icon-prov/' . $names[$index] . '.png';
    }
    
    public function process()
    {
        $class = "div.list-cuaca-provinsi";
        
        $data = [];
        
        foreach($this->getDOM()->find($class)[0]->find('div') as $index => $element){
            if($index == 0){ continue; }
            $id = (int) str_replace('icon-prov prov-', '', $element->find('span.icon-prov')[0]->getAttribute('class'));
            $data[] = (object) [
                'id' => $id,
                'name' => $element->text(),
                'image' => $this->getImages($id - 1)
            ];
        }

        return $data;
    }
}