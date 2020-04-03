<?php 

namespace Src\Classes\Scraper;

class Extract{
    private $url;
    private $data;

    public function __construct($url){
        $this->url = $url;
    }

    public function extractProducts(){
        $siteString = file_get_contents($this->url);
        $regex = '/.*?/';
        preg_match_all($regex,$siteString,$data);
        var_dump($data);
    } 
}