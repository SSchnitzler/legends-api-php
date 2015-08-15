<?php

namespace LegendsApi;

class RegionHelper
{
    const REGION_BR = 'br';
    const REGION_EUNE = 'eune';
    const REGION_EUW = 'euw';
    const REGION_KR = 'kr';
    const REGION_LAN = 'lan';
    const REGION_LAS = 'las';
    const REGION_NA = 'na';
    const REGION_OCE = 'oce';
    const REGION_TR = 'tr';
    const REGION_RU = 'ru';
    const REGION_PBE = 'pbe';
    const REGION_GLOBAL = 'global';

    protected static $regionHostMapping = [
        self::REGION_BR => 'br.api.pvp.net',
        self::REGION_EUNE => 'eune.api.pvp.net',
        self::REGION_EUW => 'euw.api.pvp.net',
        self::REGION_KR => 'kr.api.pvp.net',
        self::REGION_LAN => 'lan.api.pvp.net',
        self::REGION_LAS => 'las.api.pvp.net',
        self::REGION_NA => 'na.api.pvp.net',
        self::REGION_OCE => 'oce.api.pvp.net',
        self::REGION_TR => 'tr.api.pvp.net',
        self::REGION_RU => 'ru.api.pvp.net',
        self::REGION_PBE => 'pbe.api.pvp.net',
        self::REGION_GLOBAL => 'global.api.pvp.net',
    ];

    public static function getRegionHost($region)
    {
        return self::$regionHostMapping[$region];
    }
}