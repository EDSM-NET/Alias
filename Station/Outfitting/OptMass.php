<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class OptMass extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Optimal mass';
    
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
          3200  => 48, // Not in category
          3201  => 48,
          3202  => 54,
          3203  => 60,
          3204  => 66,
          3205  => 72,
          3206  => 60,
        
          3211  => 80,
          3212  => 90,
          3213  => 100,
          3214  => 110,
          3215  => 120,
          3216  => 90,
        
          3221  => 280,
          3222  => 315,
          3223  => 350,
          3224  => 385,
          3225  => 420,
        
          3231  => 560,
          3232  => 630,
          3233  => 700,
          3234  => 770,
          3235  => 840,
        
          3241  => 960,
          3242  => 1080,
          3243  => 1200,
          3244  => 1320,
          3245  => 1440,
        
          3251  => 1440,
          3252  => 1620,
          3253  => 1800,
          3254  => 1980,
          3255  => 2160,
        
          3261  => 2240,
          3262  => 2520,
          3263  => 2800,
          3264  => 3080,
          3265  => 3360,
    ];
}