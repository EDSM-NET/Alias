<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station;
use         EDSM\Alias;

class Service extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1                      => 'Market',
         2                      => 'Shipyard',
         3                      => 'Outfitting',
         4                      => 'Black Market',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'commodities'           => 1,
        'shipyard'              => 2,
        'outfitting'            => 3,
        'blackmarket'           => 4,
        
        'Dock'                  => 11,
        'Autodock'              => 12,
        
        'Rearm'                 => 21,
        'Refuel'                => 22,
        'Repair'                => 23,
        
        'Contacts'              => 31,
        'Exploration'           => 32,
        'Initiatives'           => 33,
        'Missions'              => 34,
        'CrewLounge'            => 35,
        'Tuning'                => 36,
        'Workshop'              => 37,
        'MissionsGenerated'     => 38,
        'Facilitator'           => 39,
        'Research'              => 40,
        'FlightController'      => 41,
        'StationOperations'     => 42,
        'OnDockMission'         => 43,
        'Powerplay'             => 44,
        'SearchAndRescue'       => 45,
    ];
}