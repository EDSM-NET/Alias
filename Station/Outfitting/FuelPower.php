<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class FuelPower extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Fuel power';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Frame Shift Drive',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Frame Shift Drive
          3300  => 2, // Not in category
          3301  => 2,
          3302  => 2,
          3303  => 2,
          3304  => 2,
          3305  => 2,
        
          3311  => 2.15,
          3312  => 2.15,
          3313  => 2.15,
          3314  => 2.15,
          3315  => 2.15,
        
          3321  => 2.3,
          3322  => 2.3,
          3323  => 2.3,
          3324  => 2.3,
          3325  => 2.3,
        
          3331  => 2.45,
          3332  => 2.45,
          3333  => 2.45,
          3334  => 2.45,
          3335  => 2.45,
        
          3341  => 2.6,
          3342  => 2.6,
          3343  => 2.6,
          3344  => 2.6,
          3345  => 2.6,
        
          3351  => 2.75,
          3352  => 2.75,
          3353  => 2.75,
          3354  => 2.75,
          3355  => 2.75,
        
          3361  => 2.9,
          3362  => 2.9,
          3363  => 2.9,
          3364  => 2.9,
          3365  => 2.9,
    ];
}