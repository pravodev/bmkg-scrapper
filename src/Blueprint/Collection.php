<?php

namespace PravoDev\BMKGScrapper\Blueprint;

use PravoDev\BMKGScrapper\Contracts\CollectionContract;
use DiDom\Document;

abstract class Collection implements CollectionContract
{
    /**
     * 
     */
    protected $url;

    /**
     * 
     */
    protected $baseUrl = 'http://www.bmkg.go.id/';
    
    /**
     * 
     */
    public function all()
    {
        return $this->process();
    }

    /**
     * 
     */
    public function get($search, $column)
    {
        //
    }

    /**
     * 
     */
    public function getUrl()
    {
        return $this->baseUrl . $this->url;
    }

    /**
     * Get DOM from url
     * 
     * @return string
     */
    public function getDOM()
    {
        return new Document($this->getUrl(), true);
    }
}