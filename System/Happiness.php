<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\System;
use         EDSM\Alias;

class Happiness extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         0                      => 'None',
        
        10                      => 'Elated',
        20                      => 'Happy',
        30                      => 'Discontented',
        40                      => 'Unhappy',
        50                      => 'Despondent',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'happinessband1'        => 10,
        'happinessband2'        => 20,
        'happinessband3'        => 30,
        'happinessband4'        => 40,
        'happinessband5'        => 50,
    ];
}