<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station;
use         EDSM\Alias;

class State extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
        1                       => 'Damaged',
        2                       => 'Under repairs',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'damaged'               => 1,
        'underrepairs'          => 2,
    ];
}