<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Body\Planet;
use         EDSM\Alias;

class SolidComposition extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1          => 'Ice',
         2          => 'Metal',
         3          => 'Rock',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'ice'       => 1,
        'metal'     => 2,
        'rock'      => 3,
    ];
}