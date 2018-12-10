<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class BrokenRegenRate extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Broken Regen Rate';

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
          4101  => null,
          4102  => null,
          4103  => null,
          4104  => 2.4,
          4106  => null,
          4107  => null,

          4110  => null, // Not in category
          4111  => 1.6,
          4112  => 1.6,
          4113  => 1.6,
          4114  => 2.4,
          4115  => 1.6,
          4116  => 1.6,
          4117  => 1.2,

          4121  => 1.87,
          4122  => 1.87,
          4123  => 1.87,
          4124  => 2.8,
          4125  => 1.87,
          4126  => 1.87,
          4127  => 1.3,

          4131  => 2.53,
          4132  => 2.53,
          4133  => 2.53,
          4134  => 3.8,
          4135  => 2.53,
          4136  => 2.53,
          4137  => 1.66,

          4141  => 3.75,
          4142  => 3.75,
          4143  => 3.75,
          4144  => 5.63,
          4145  => 3.75,
          4146  => 3.75,
          4147  => 2.34,

          4151  => 5.33,
          4152  => 5.33,
          4153  => 5.33,
          4154  => 8,
          4155  => 5.33,
          4156  => 5.33,
          4157  => 3.2,

          4161  => 7.33,
          4162  => 7.33,
          4163  => 7.33,
          4164  => 11,
          4165  => 7.33,
          4166  => 7.33,
          4167  => 4.25,

          4171  => 9.6,
          4172  => 9.6,
          4173  => 9.6,
          4174  => 14.4,
          4175  => 9.6,
          4176  => 9.6,
          4177  => 5.4,
    ];
}
