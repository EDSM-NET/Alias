<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class OptMultiplierSpeed extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Optimal multiplier speed';
    
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
          3200  => 1, // Not in category
          3201  => 1,
          3202  => 1,
          3203  => 1,
          3204  => 1,
          3205  => 1,
          3206  => 1,
        
          3211  => 1,
          3212  => 1,
          3213  => 1,
          3214  => 1,
          3215  => 1,
          3216  => 1,
        
          3221  => 1,
          3222  => 1,
          3223  => 1,
          3224  => 1,
          3225  => 1,
        
          3231  => 1,
          3232  => 1,
          3233  => 1,
          3234  => 1,
          3235  => 1,
        
          3241  => 1,
          3242  => 1,
          3243  => 1,
          3244  => 1,
          3245  => 1,
        
          3251  => 1,
          3252  => 1,
          3253  => 1,
          3254  => 1,
          3255  => 1,
        
          3261  => 1,
          3262  => 1,
          3263  => 1,
          3264  => 1,
          3265  => 1,
    ];
}