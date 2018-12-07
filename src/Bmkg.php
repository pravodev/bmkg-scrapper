<?php

namespace PravoDev\BMKGScrapper;

use PravoDev\BMKGScrapper\Collections\Provinces;

class Bmkg
{
    /**
     * Get All Provinces
     * 
     */
    public function provinces()
    {
        return new Provinces();
    }
}