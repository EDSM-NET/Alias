<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\System;
use         EDSM\Alias;

class Power extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1                      => 'Edmund Mahon',
         2                      => 'Zachary Hudson',
         3                      => 'Aisling Duval',
         4                      => 'Yuri Grom',
         5                      => 'Felicia Winters',
         6                      => 'Li Yong-Rui',
         7                      => 'Denton Patreus',
         8                      => 'A. Lavigny-Duval',
         9                      => 'Pranav Antal',
        10                      => 'Archon Delaine',
        11                      => 'Zemina Torval',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'edmund mahon'          => 1,
        'zachary hudson'        => 2,
        'aisling duval'         => 3,
        'yuri grom'             => 4,
        'felicia winters'       => 5,
        'li yong-rui'           => 6,
        'denton patreus'        => 7,
        'a. lavigny-duval'      => 8,
        'pranav antal'          => 9,
        'archon delaine'        => 10,
        'zemina torval'         => 11,
    ];
}