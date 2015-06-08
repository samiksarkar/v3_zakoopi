<?php

namespace App\View\Helper;

use Cake\View\Helper;

class AppHelper extends Helper {
    
    /**
     * 
     * @param string $marketName Name of the Market
     * @param boolean $fullUrl Should return full url of market or not 
     * @return string url for market
     */
    /*
    public function marketSlug($marketName, $fullUrl = false){
        $marketName = strtolower(trim($marketName));
        $marketName = str_ireplace(" ", "-", $marketName);
        return \Cake\Routing\Router::url('/'.$marketName,$fullUrl);
    }
    */
    
    /**
     * Updated by Abhi
     * @param string $marketName Name of the Market
     * @param boolean $fullUrl Should return full url of market or not 
     * @return string url for market includes the city also
     */
    public function marketSlug($marketName, $fullUrl = false){
        $marketName = strtolower(trim($marketName));
        $marketName = str_ireplace(" ", "-", $marketName);
        return \Cake\Routing\Router::url('/'.$marketName,$fullUrl);
    }
    
    /**
     * 
     * @param string $trendName Name of the Trend
     * @param boolean $fullUrl Should return full url of market or not 
     * @return string url for trend
     */
    public function trendSlug($trendName, $fullUrl = false){
        $trendName = strtolower(trim($trendName));
        $trendName = str_ireplace(" ", "-", $trendName);
        return \Cake\Routing\Router::url('/trend/'.$trendName,$fullUrl);
    }
}
