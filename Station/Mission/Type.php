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
          
         501                                => 'Deliver %commodityCount% units of %commodity%',
         502                                => 'Help the cooperative by delivering %commodityCount% units of %commodity%',
         503                                => 'Agricultural supply run: %commodityCount% units of %commodity%',
         504                                => 'Boom time delivery of %commodityCount% units of %commodity%',
         505                                => 'Deliver %commodityCount% units of %commodity% in the name of democracy',
         506                                => 'Help quell civil unrest by transporting %commodityCount% units of %commodity%',
         507                                => 'Support the confederacy by delivering %commodityCount% units of %commodity%',
         508                                => 'Deliver war supplies of %commodityCount% units of %commodity%',
         509                                => 'Take %commodityCount% units of %commodity% in support of the current civil war',
         510                                => 'Outbreak relief: %commodityCount% units of %commodity%',
         511                                => 'Support famine relief by delivering %commodityCount% units of %commodity%',
          
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
        
        'mission_delivery'                          => 501,
        'mission_delivery_cooperative'              => 502,
        'mission_delivery_agriculture'              => 503,
        'mission_delivery_boom'                     => 504,
        'mission_delivery_democracy'                => 505,
        'mission_delivery_civilunrest'              => 506,
        'mission_delivery_confederacy'              => 507,
        'mission_delivery_war'                      => 508,
        'mission_delivery_civilwar'                 => 509,
        'mission_delivery_outbreak'                 => 510,
        'mission_delivery_famine'                   => 511,
        
        'mission_massacre'                          => 1001,
        'mission_massacre_conflict_war'             => 1002,
        'mission_massacre_conflict_civilwar'        => 1003,
        
        'mission_sightseeing'                       => 2001,
    ];
}