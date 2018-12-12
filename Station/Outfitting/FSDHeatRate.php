<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class FSDHeatRate extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'FSD Heat Rate';
    static protected $lessIsGood        = true;

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
          3300  => null, // Not in category
          3301  => 10,
          3302  => 10,
          3303  => 10,
          3304  => 10,
          3305  => 10,

          3311  => 14,
          3312  => 14,
          3313  => 14,
          3314  => 14,
          3315  => 14,

          3321  => 18,
          3322  => 18,
          3323  => 18,
          3324  => 18,
          3325  => 18,

          3331  => 27,
          3332  => 27,
          3333  => 27,
          3334  => 27,
          3335  => 27,

          3341  => 37,
          3342  => 37,
          3343  => 37,
          3344  => 37,
          3345  => 37,

          3351  => 43,
          3352  => 43,
          3353  => 43,
          3354  => 43,
          3355  => 43,

          3361  => null,
          3362  => null,
          3363  => null,
          3364  => null,
          3365  => null,
    ];
}
