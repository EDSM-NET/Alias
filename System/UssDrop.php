<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\System;
use         EDSM\Alias;

class UssDrop extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
        10                      => 'Combat aftermath detected',
        20                      => 'Anomaly detected',
        30                      => 'Ceremonial comms detected',
        40                      => 'Convoy dispersal pattern detected',
        50                      => 'Distress call',
        60                      => 'Mission target',
        70                      => 'Non-Human signal source',
        
        80                      => 'Degraded emissions detected',
        82                      => 'Encoded emissions detected',
        85                      => 'High grade emissions detected',
        
        90                      => 'Weapons fire detected',
        
       100                      => 'Trading Beacon',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     *     => str_replace(;)
     *     => str_replace($uss_type_)
     */
    static protected $alias = [
        'aftermath'             => 10,
        'anomaly'               => 20,
        'ceremonial'            => 30,
        'convoy'                => 40,
        'distresssignal'        => 50,
        'missiontarget'         => 60,
        'nonhuman'              => 70,
        
        'salvage'               => 80,
        'valuablesalvage'       => 82,
        'veryvaluablesalvage'   => 85,
        
        'weaponsfire'           => 90,
        
        'tradingbeacon'         => 100,
    ];
}