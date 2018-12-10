<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class FuelMultiplier extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Fuel multiplier';

    /**
     * List of categories
     */
    static protected $have          = [
        'FSD Housing',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Frame Shift Drive
          3300  => 1, // Not in category
          3301  => 11,
          3302  => 10,
          3303  => 8,
          3304  => 10,
          3305  => 12,

          3311  => 11,
          3312  => 10,
          3313  => 8,
          3314  => 10,
          3315  => 12,

          3321  => 11,
          3322  => 10,
          3323  => 8,
          3324  => 10,
          3325  => 12,

          3331  => 11,
          3332  => 10,
          3333  => 8,
          3334  => 10,
          3335  => 12,

          3341  => 11,
          3342  => 10,
          3343  => 8,
          3344  => 10,
          3345  => 12,

          3351  => 11,
          3352  => 10,
          3353  => 8,
          3354  => 10,
          3355  => 12,

          3361  => 11,
          3362  => 10,
          3363  => 8,
          3364  => 10,
          3365  => 12,
    ];
}