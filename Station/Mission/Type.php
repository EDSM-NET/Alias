<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Mission;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
           1                                => 'Engineer Invitation Contract',
           2                                => 'Courier job available',
           3                                => 'Federal Navy courier job available',
           4                                => 'Internal report delivery',
           5                                => 'Boom data delivery',
           6                                => 'Courier required for sensitive poll data',
          
        1001                                => 'Massacre the %targetFaction% ships',
        
        2001                                => '%passengerName% seeks sightseeing adventure',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'mission_courier_engineer'          => 1,
        'mission_courier'                   => 2,
        'mission_courier_rankfed'           => 3,
        'mission_courier_democracy'         => 4,
        'mission_courier_boom'              => 5,
        'mission_courier_elections'         => 6,
        
        'mission_massacre_conflict_war'     => 1001,
        
        'mission_sightseeing'               => 2001,
    ];
}