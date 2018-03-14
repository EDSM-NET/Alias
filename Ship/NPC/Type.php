<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Ship\NPC;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1                          => 'Allied Police Forces',
         2                          => 'System Authority Vessel',
         3                          => 'Federal Security Service',
         4                          => 'Internal Security Service',
         
        11                          => 'Federal Navy Ship',
        12                          => 'System Defence Force',
        13                          => 'Alliance Defence Force',
        14                          => 'Imperial Navy Vessel',
        
        21                          => 'Imperial Navy Fighter',
        22                          => 'Alliance Defence Fighter',
        23                          => 'System Defence Fighter',
        24                          => 'Federal Navy Fighter',
        
        31                          => 'System ATR',
        32                          => 'Federal ATR',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     *     => str_replace(;)
     *     => str_replace($shipname_)
     */
    static protected $alias = [
        'police_alliance'               => 1,
        'police_independent'            => 2,
        'police_federation'             => 3,
        'police_empire'                 => 4,
        
        'military_federation'           => 11,
        'military_independent'          => 12,
        'military_alliance'             => 13,
        'military_empire'               => 14,
        
        'militaryfighter_empire'        => 21,
        'militaryfighter_alliance'      => 22,
        'militaryfighter_independent'   => 23,
        'militaryfighter_federation'    => 24,
        
        'atr_independent'               => 31,
        'atr_federation'                => 32,
    ];
}