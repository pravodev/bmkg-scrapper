<?php

namespace PravoDev\BMKGScrapper\Contracts;

interface CollectionContract
{
    public function get($search, $column);
    public function all();
    public function process();
}