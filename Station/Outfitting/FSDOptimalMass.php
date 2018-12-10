<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class FSDOptimalMass extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Optimal mass';
    static protected $unit              = '%1$s t';

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
          3300  => 48, // Not in category
          3301  => 48,
          3302  => 54,
          3303  => 60,
          3304  => 75,
          3305  => 90,

          3311  => 80,
          3312  => 90,
          3313  => 100,
          3314  => 125,
          3315  => 150,

          3321  => 280,
          3322  => 315,
          3323  => 350,
          3324  => 438,
          3325  => 525,

          3331  => 560,
          3332  => 630,
          3333  => 700,
          3334  => 875,
          3335  => 1050,

          3341  => 960,
          3342  => 1080,
          3343  => 1200,
          3344  => 1500,
          3345  => 1800,

          3351  => 1440,
          3352  => 1620,
          3353  => 1800,
          3354  => 2250,
          3355  => 2700,

          3361  => 2240,
          3362  => 2520,
          3363  => 2800,
          3364  => 3500,
          3365  => 4200,
    ];
}