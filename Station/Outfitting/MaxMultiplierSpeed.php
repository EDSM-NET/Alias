<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class MaxMultiplierSpeed extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Maximal multiplier speed';
    
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
          3200  => 1.03, // Not in category
          3201  => 1.03,
          3202  => 1.06,
          3203  => 1.1,
          3204  => 1.13,
          3205  => 1.16,
          3206  => 1.6,
        
          3211  => 1.03,
          3212  => 1.06,
          3213  => 1.1,
          3214  => 1.13,
          3215  => 1.16,
          3216  => 1.6,
        
          3221  => 1.03,
          3222  => 1.06,
          3223  => 1.1,
          3224  => 1.13,
          3225  => 1.16,
        
          3231  => 1.03,
          3232  => 1.06,
          3233  => 1.1,
          3234  => 1.13,
          3235  => 1.16,
        
          3241  => 1.03,
          3242  => 1.06,
          3243  => 1.1,
          3244  => 1.13,
          3245  => 1.16,
        
          3251  => 1.03,
          3252  => 1.06,
          3253  => 1.1,
          3254  => 1.13,
          3255  => 1.16,
        
          3261  => 1.03,
          3262  => 1.06,
          3263  => 1.1,
          3264  => 1.13,
          3265  => 1.16,
    ];
}