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
        41                      => 'Civilian Outpost',
        42                      => 'Commercial Outpost',
        43                      => 'Industrial Outpost',
        44                      => 'Military Outpost',
        45                      => 'Mining Outpost',
        46                      => 'Scientific Outpost',
         
         5                      => 'Planetary Outpost',
         6                      => 'Planetary Port',
         
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
        'coriolis starport'     => 1,
        
        
        'bernal'                => 2,
        'ocellus starport'      => 2,
        
        
        'orbis'                 => 3,
        'orbis starport'        => 3,
        
        
        'outpost'               => 4,
        
        'civilian outpost'      => 41,
        
        'commercial outpost'    => 42,
        
        'industrial outpost'    => 43,
        
        'military outpost'      => 44,
        
        'mining outpost'        => 45,
        
        'scientific outpost'    => 46,
        'outpostscientific'     => 46,
        
        
        'surfacestation'        => 5,
        'crateroutpost'         => 5,
        'planetary outpost'     => 5,
        
        
        'planetary port'        => 6,
        'craterport'            => 6,
        
        
        'asteroidbase'          => 11,
        'megaship'              => 12,
    ];
}