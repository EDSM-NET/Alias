<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class MinMultiplierSpeed extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Minimal multiplier speed';
    
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
          3200  => 0.83, // Not in category
          3201  => 0.83,
          3202  => 0.86,
          3203  => 0.9,
          3204  => 0.93,
          3205  => 0.96,
          3206  => 0.9,
        
          3211  => 0.83,
          3212  => 0.86,
          3213  => 0.9,
          3214  => 0.93,
          3215  => 0.96,
          3216  => 0.9,
        
          3221  => 0.83,
          3222  => 0.86,
          3223  => 0.9,
          3224  => 0.93,
          3225  => 0.96,
        
          3231  => 0.83,
          3232  => 0.86,
          3233  => 0.9,
          3234  => 0.93,
          3235  => 0.96,
        
          3241  => 0.83,
          3242  => 0.86,
          3243  => 0.9,
          3244  => 0.93,
          3245  => 0.96,
        
          3251  => 0.83,
          3252  => 0.86,
          3253  => 0.9,
          3254  => 0.93,
          3255  => 0.96,
        
          3261  => 0.83,
          3262  => 0.86,
          3263  => 0.9,
          3264  => 0.93,
          3265  => 0.96,
    ];
}