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
    ];
}