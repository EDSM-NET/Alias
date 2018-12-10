<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class MaxFuelPerJump extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Maximal fuel per jump';

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
          3300  => 0.6, // Not in category
          3301  => 0.6,
          3302  => 0.6,
          3303  => 0.6,
          3304  => 0.8,
          3305  => 0.9,

          3311  => 1.2,
          3312  => 1.2,
          3313  => 1.2,
          3314  => 1.5,
          3315  => 1.8,

          3321  => 2,
          3322  => 2,
          3323  => 2,
          3324  => 2.5,
          3325  => 3,

          3331  => 3.3,
          3332  => 3.3,
          3333  => 3.3,
          3334  => 4.1,
          3335  => 5,

          3341  => 5.3,
          3342  => 5.3,
          3343  => 5.3,
          3344  => 6.6,
          3345  => 8,

          3351  => 8.5,
          3352  => 8.5,
          3353  => 8.5,
          3354  => 10.6,
          3355  => 12.8,

          3361  => 13.6,
          3362  => 13.6,
          3363  => 13.6,
          3364  => 17,
          3365  => 20.4,
    ];
}