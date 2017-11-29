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
           1                                => 'Courier job available',
           2                                => 'Engineer Invitation Contract',
           3                                => 'Federal Navy courier job available',
           4                                => 'Internal report delivery',
           5                                => 'Boom data delivery',
           6                                => 'Courier required for sensitive poll data',
           7                                => 'Secure information needs delivering',
           8                                => 'Strategic data transfer',
           9                                => 'Internal security data delivery',
          10                                => 'Courier job for Imperial naval intelligence',
          11                                => 'Famine data needs transportation',
          12                                => 'Sensitive civil unrest data delivery',
          13                                => 'Internal report delivery',
          14                                => 'Expansion data couriering needed',
          15                                => 'Outbreak data transportation needed',
          
        1001                                => 'Massacre the %targetFaction% ships',
        1002                                => 'Massacre the %targetFaction% ships',
        1003                                => 'Massacre the %targetFaction% ships',
        
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
        'mission_courier'                           => 1,
        'mission_courier_engineer'                  => 2,
        'mission_courier_rankfed'                   => 3,
        'mission_courier_democracy'                 => 4,
        'mission_courier_boom'                      => 5,
        'mission_courier_elections'                 => 6,
        'mission_courier_civilwar'                  => 7,
        'mission_courier_war'                       => 8,
        'mission_courier_lockdown'                  => 9,
        'mission_courier_rankemp'                   => 10,
        'mission_courier_famine'                    => 11,
        'mission_courier_civilunrest'               => 12,
        'mission_courier_service'                   => 13,
        'mission_courier_expansion'                 => 14,
        'mission_courier_outbreak'                  => 15,
        
        'mission_massacre'                          => 1001,
        'mission_massacre_conflict_war'             => 1002,
        'mission_massacre_conflict_civilwar'        => 1003,
        
        'mission_sightseeing'                       => 2001,
    ];
}