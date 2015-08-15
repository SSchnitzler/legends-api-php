<?php

namespace LegendsApi;

use LegendsApi\RegionHelper;
use LegendsApi\Summoner\SummonerApi;

class ApiClient
{
    protected $apiKey;
    protected $region;

    function __construct($apiKey, $region)
    {
        $this->apiKey = $apiKey;
        $this->region = $region;
    }

    public function getSummonerApi() {
        return new SummonerApi($this);
    }

    public function fetchDataFromApi($apiPath)
    {
        //https://euw.api.pvp.net/api/lol/euw
        if (strpos($apiPath, '/') != 0) {
            $apiPath = '/' . $apiPath;
        }

        $url = 'https://' . RegionHelper::getRegionHost($this->region) . '/api/lol/' . $this->region . $apiPath . '?api_key=' . $this->apiKey;

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return json_decode($result);
    }
}