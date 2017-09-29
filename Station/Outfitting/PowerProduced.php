<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class PowerProduced extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Power produced';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Power Plant',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Power Plant
          3101  => 6.4,
          3102  => 7.2,
          3103  => 8,
          3104  => 8.8,
          3105  => 9.6,
        
          3111  => 8,
          3112  => 9,
          3113  => 10,
          3114  => 11,
          3115  => 12,
        
          3121  => 10.4,
          3122  => 11.7,
          3123  => 13,
          3124  => 14.3,
          3125  => 15.6,
        
          3131  => 13.6,
          3132  => 15.3,
          3133  => 17,
          3134  => 18.7,
          3135  => 20.4,
        
          3141  => 16.8,
          3142  => 18.9,
          3143  => 21,
          3144  => 23.1,
          3145  => 25.2,
        
          3151  => 20,
          3152  => 22.5,
          3153  => 25,
          3154  => 27.5,
          3155  => 30,
        
          3161  => 24,
          3162  => 27,
          3163  => 30,
          3164  => 33,
          3165  => 36,
    ];
}