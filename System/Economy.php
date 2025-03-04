<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\System;
use         EDSM\Alias;

class Economy extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         0                      => 'None',

         1                      => 'Agriculture',
         2                      => 'Colony',
         3                      => 'Extraction',
         4                      => 'High Tech',
         5                      => 'Industrial',
         6                      => 'Military',
         7                      => 'Refinery',
         8                      => 'Service',
         9                      => 'Terraforming',
        10                      => 'Tourism',
        11                      => 'Prison',
        
        
        80                      => 'Engineer',

        90                      => 'Fleet Carrier',

        97                      => 'Repair',
        98                      => 'Rescue',
        99                      => 'Damaged',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     *     => str_replace(;)
     *     => str_replace($economy_)
     */
    static protected $alias = [
        'none'                  => 0,

        'agri'                  => 1,
        'agriculture'           => 1,

        'colony'                => 2,
        'extraction'            => 3,

        'hightech'              => 4,
        'high tech'             => 4,

        'industrial'            => 5,
        'military'              => 6,
        'refinery'              => 7,
        'service'               => 8,
        'terraforming'          => 9,
        'tourism'               => 10,
        'prison'                => 11,

        'engineer'              => 80,
        
        'carrier'               => 90,

        'repair'                => 97,
        'rescue'                => 98,
        'damaged'               => 99,
    ];
}