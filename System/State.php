<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */

namespace   Alias\System;
use         EDSM\Alias;

class State extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         0                      => 'None',
         
         1                      => 'Boom',
         2                      => 'Bust',
         3                      => 'Civil unrest',
         4                      => 'Civil war',
         5                      => 'Election',
         6                      => 'Expansion',
         7                      => 'Famine',
         8                      => 'Investment',
         9                      => 'Lockdown',
        10                      => 'Outbreak',
        11                      => 'Retreat',
        12                      => 'War',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'none'                  => 0,
    
        'boom'                  => 1,
        'bust'                  => 2,
        'civilunrest'           => 3,
        'civilwar'              => 4,
        'election'              => 5,
        'expansion'             => 6,
        'famine'                => 7,
        'investment'            => 8,
        'lockdown'              => 9,
        'outbreak'              => 10,
        'retreat'               => 11,
        'war'                   => 12,
    ];
}