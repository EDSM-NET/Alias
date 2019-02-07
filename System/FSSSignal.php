<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\System;
use         EDSM\Alias;

class FSSSignal extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
        42                      => 'Nav Beacon',
        80                      => 'Compromised Navigation Beacon',

        14                      => 'Resource Extraction Site',
        77                      => 'Resource Extraction Site [Low]',
        78                      => 'Resource Extraction Site [High]',
        79                      => 'Resource Extraction Site [Hazardous]',

        81                      => 'Salvageable Wreckage',

        901                     => 'Conflict Zone [Low Intensity]',
        902                     => 'Conflict Zone [Medium Intensity]',
        903                     => 'Conflict Zone [High Intensity]',

        1001                    => 'Distress Call',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'multiplayer_scenario42_title'      => 42,
        'multiplayer_scenario80_title'      => 80,

        'multiplayer_scenario14_title'      => 14,
        'multiplayer_scenario77_title'      => 77,
        'multiplayer_scenario78_title'      => 78,
        'multiplayer_scenario79_title'      => 79,

        'multiplayer_scenario81_title'      => 81,

        'warzone_pointrace_low'             => 901,
        'warzone_pointrace_med'             => 902,
        'warzone_pointrace_high'            => 903,

        'aftermath_large'                   => 1001,
    ];
}