<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Mission;
use         EDSM\Alias;

class Util extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
           1                                => 'Settlement',
           2                                => 'Fuel Depot',
           3                                => 'Emplacement',
           
        1001                                => 'Pirate Lord',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'settlement_target_building'        => 1,
        'settlement_target_fueldepot'       => 2,
        'settlement_target_turret'          => 3,
        
        'factiontag_piratelord'             => 1001,
    ];
}