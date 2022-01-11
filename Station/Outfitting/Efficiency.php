<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Efficiency extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Efficiency';
    
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
          3101  => 'F',
          3102  => 'D',
          3103  => 'C',
          3104  => 'C',
          3105  => 'B',
        
          3111  => 'F',
          3112  => 'D',
          3113  => 'C',
          3114  => 'C',
          3115  => 'B',
        
          3121  => 'F',
          3122  => 'D',
          3123  => 'C',
          3124  => 'C',
          3125  => 'B',
        
          3131  => 'F',
          3132  => 'D',
          3133  => 'C',
          3134  => 'C',
          3135  => 'B',
        
          3141  => 'F',
          3142  => 'D',
          3143  => 'C',
          3144  => 'C',
          3145  => 'B',
        
          3151  => 'F',
          3152  => 'D',
          3153  => 'C',
          3154  => 'C',
          3155  => 'B',
        
          3161  => 'F',
          3162  => 'D',
          3163  => 'C',
          3164  => 'C',
          3165  => 'B',
    ];
}