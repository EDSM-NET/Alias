<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\System;
use         EDSM\Alias;

class Security extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         0                      => 'None',
         
         1                      => 'Low',
         2                      => 'Medium',
         3                      => 'High',
    
        10                      => 'Anarchy',
        11                      => 'Lawless',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     *     => str_replace(;)
     *     => str_replace($system_security_)
     *     => str_replace($galaxy_map_info_state_)
     */
    static protected $alias = [
        'low'                   => 1,
        'medium'                => 2,
        'high'                  => 3,
        
        'anarchy'               => 10,
        'lawless'               => 11,
    ];
}