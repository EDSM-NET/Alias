<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1                      => 'Coriolis Starport',
         2                      => 'Ocellus Starport',
         3                      => 'Orbis Starport',
         4                      => 'Outpost',
         5                      => 'Planetary settlement',
         
        11                      => 'Asteroid base',
        12                      => 'Mega ship',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'coriolis'              => 1,
        'bernal'                => 2,
        'orbis'                 => 3,
        'outpost'               => 4,
        'surfacestation'        => 5,
        
        'asteroidbase'          => 11,
        'megaship'              => 12,
    ];
}