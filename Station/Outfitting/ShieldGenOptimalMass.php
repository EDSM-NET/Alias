<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ShieldGenOptimalMass extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Shield Gen Optimal Mass';

    /**
     * List of categories
     */
    static protected $have          = [
        'Shield Generators',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Shield Generator
          4101  => 25,
          4102  => 25,
          4103  => 25,
          4104  => 25,
          4106  => 25,
          4107  => 25,

          4110  => null, // Not in category
          4111  => 55,
          4112  => 55,
          4113  => 55,
          4114  => 55,
          4115  => 55,
          4116  => 55,
          4117  => 55,

          4121  => 165,
          4122  => 165,
          4123  => 165,
          4124  => 165,
          4125  => 165,
          4126  => 165,
          4127  => 165,

          4131  => 285,
          4132  => 285,
          4133  => 285,
          4134  => 285,
          4135  => 285,
          4136  => 285,
          4137  => 285,

          4141  => 405,
          4142  => 405,
          4143  => 405,
          4144  => 405,
          4145  => 405,
          4146  => 405,
          4147  => 405,

          4151  => 540,
          4152  => 540,
          4153  => 540,
          4154  => 540,
          4155  => 540,
          4156  => 540,
          4157  => 540,

          4161  => 1060,
          4162  => 1060,
          4163  => 1060,
          4164  => 1060,
          4165  => 1060,
          4166  => 1060,
          4167  => 1060,

          4171  => 1800,
          4172  => 1800,
          4173  => 1800,
          4174  => 1800,
          4175  => 1800,
          4176  => 1800,
          4177  => 1800,
    ];
}
