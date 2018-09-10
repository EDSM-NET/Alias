<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\System;
use         EDSM\Alias;

class Allegiance extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         0                      => 'None',
         
         1                      => 'Alliance',
         2                      => 'Empire',
         3                      => 'Federation',
         4                      => 'Independent',
         
        // Should be hidden from search and showing, but that is how the game implement site that have be found
         7                      => 'Thargoid',
         8                      => 'Guardian',
         9                      => 'Pilots Federation',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'alliance'              => 1,
        'empire'                => 2,
        'federation'            => 3,
        'independent'           => 4,
        
        'thargoid'              => 7,
        'guardian'              => 8,
        'pilotsfederation'      => 9,
        
        // Bug on #19700/CM Draconis
        'playerpilots'          => 0,
    ];
}