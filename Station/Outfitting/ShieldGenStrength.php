<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ShieldGenStrength extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Shield Gen Strength';

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
          4101  => 80,
          4102  => 90,
          4103  => 100,
          4104  => 90,
          4106  => 120.000008,
          4107  => 150,

          4110  => null, // Not in category
          4111  => 80,
          4112  => 90,
          4113  => 100,
          4114  => 90,
          4115  => 110,
          4116  => 120.000008,
          4117  => 150,

          4121  => 80,
          4122  => 90,
          4123  => 100,
          4124  => 90,
          4125  => 110,
          4126  => 120.000008,
          4127  => 150,

          4131  => 80,
          4132  => 90,
          4133  => 100,
          4134  => 90,
          4135  => 110,
          4136  => 120.000008,
          4137  => 150,

          4141  => 80,
          4142  => 90,
          4143  => 100,
          4144  => 90,
          4145  => 110,
          4146  => 120.000008,
          4147  => 150,

          4151  => 80,
          4152  => 90,
          4153  => 100,
          4154  => 90,
          4155  => 110,
          4156  => 120.000008,
          4157  => 150,

          4161  => 80,
          4162  => 90,
          4163  => 100,
          4164  => 90,
          4165  => 110,
          4166  => 120.000008,
          4167  => 150,

          4171  => 80,
          4172  => 90,
          4173  => 100,
          4174  => 90,
          4175  => 110,
          4176  => 120.000008,
          4177  => 150,
    ];
}
