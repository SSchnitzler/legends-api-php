<?php

namespace LegendsApi\Summoner;

use LegendsApi\ApiClient;

class SummonerApi
{
    const API_VER = 'v1.4';

    protected $apiClient;

    function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getSummonerByName($summonerName)
    {
        return $this->apiClient->fetchDataFromApi(self::API_VER . '/summoner/by-name/' . $summonerName);
    }

    public function getSummonerById($summonerId)
    {
        return $this->apiClient->fetchDataFromApi(self::API_VER . '/summoner/' . $summonerId);
    }

    public function getMultipleSommonersById(array $summonerIds)
    {
        return $this->apiClient->fetchDataFromApi(self::API_VER . '/summoner/' . implode(',', $summonerIds));
    }

    public function getMultipleSommonersByName(array $summonerNames)
    {
        return $this->apiClient->fetchDataFromApi(self::API_VER . '/summoner/by-name/' . implode(',', $summonerNames));
    }
}