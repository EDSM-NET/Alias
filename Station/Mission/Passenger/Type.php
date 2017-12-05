<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Mission\Passenger;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
           1                    => 'Prisoners Of War',
           2                    => 'Business Persons',
           3                    => 'Refugees',
           4                    => 'Tourists',
           5                    => 'Aid Workers',
           6                    => 'Rebels',
           7                    => 'Scientists',
           8                    => 'Protesters',
           9                    => 'Politicians',
          10                    => 'Security Workers',
          11                    => 'Medical Professionals',
          
          98                    => 'Soldiers',
          99                    => 'Explorers',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'pow'                   => 1,
        'business'              => 2,
        'refugee'               => 3,
        'tourist'               => 4,
        'aidworker'             => 5,
        'terrorist'             => 6,
        'scientist'             => 7,
        'protester'             => 8,
        'politician'            => 9,
        'security'              => 10,
        'medical'               => 11,
        
        'soldier'               => 98,
        'explorer'              => 99,
    ];
}