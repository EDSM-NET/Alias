<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class HeatEfficiency extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Heat Efficiency';
    static protected $lessIsGood        = true;

    /**
     * List of categories
     */
    static protected $have          = [
        'Reactor Bay',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Power Plant
          3101  => 1,
          3102  => 0.75,
          3103  => 0.5,
          3104  => 0.45,
          3105  => 0.4,

          3111  => 1,
          3112  => 0.75,
          3113  => 0.5,
          3114  => 0.45,
          3115  => 0.4,

          3121  => 1,
          3122  => 0.75,
          3123  => 0.5,
          3124  => 0.45,
          3125  => 0.4,

          3131  => 1,
          3132  => 0.75,
          3133  => 0.5,
          3134  => 0.45,
          3135  => 0.4,

          3141  => 1,
          3142  => 0.75,
          3143  => 0.5,
          3144  => 0.45,
          3145  => 0.4,

          3151  => 1,
          3152  => 0.75,
          3153  => 0.5,
          3154  => 0.45,
          3155  => 0.4,

          3161  => 1,
          3162  => 0.75,
          3163  => 0.5,
          3164  => 0.45,
          3165  => 0.4,
    ];
}
