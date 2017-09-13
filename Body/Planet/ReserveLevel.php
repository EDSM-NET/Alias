<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Body\Planet;
use         EDSM\Alias;

class ReserveLevel extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
        10      => 'Pristine',
        20      => 'Major',
        30      => 'Common',
        40      => 'Low',
        50      => 'Depleted',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'pristineresources'             => 10,
        'majorresources'                => 20,
        'commonresources'               => 30,
        'lowresources'                  => 40,
        'depletedresources'             => 50,
    ];
}