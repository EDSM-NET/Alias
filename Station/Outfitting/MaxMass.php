<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class MaxMass extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Maximal mass';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Thrusters',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Thrusters
          3200  => 72, // Not in category
          3201  => 72,
          3202  => 81,
          3203  => 90,
          3204  => 99,
          3205  => 108,
          3206  => 120,
        
          3211  => 120,
          3212  => 135,
          3213  => 150,
          3214  => 165,
          3215  => 180,
          3216  => 200,
        
          3221  => 420,
          3222  => 472.5,
          3223  => 525,
          3224  => 577.5,
          3225  => 630,
        
          3231  => 840,
          3232  => 945,
          3233  => 1050,
          3234  => 1155,
          3235  => 1260,
        
          3241  => 1440,
          3242  => 1620,
          3243  => 1800,
          3244  => 1980,
          3245  => 2160,
        
          3251  => 2160,
          3252  => 2430,
          3253  => 2700,
          3254  => 2970,
          3255  => 3240,
        
          3261  => 3360,
          3262  => 3780,
          3263  => 4200,
          3264  => 4620,
          3265  => 5040,
    ];
}