<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class RegenRate extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Regen Rate';

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
          4104  => 1.8,
          4106  => null,
          4107  => null,

          4110  => null, // Not in category
          4111  => null,
          4112  => 1,
          4113  => null,
          4114  => 1.8,
          4115  => null,
          4116  => 1,
          4117  => 1,

          4121  => null,
          4122  => 1,
          4123  => null,
          4124  => 1.8,
          4125  => 1,
          4126  => 1,
          4127  => 1,

          4131  => null,
          4132  => 1,
          4133  => null,
          4134  => 1.8,
          4135  => 1,
          4136  => 1,
          4137  => 1,

          4141  => 1,
          4142  => 1,
          4143  => null,
          4144  => 2.25,
          4145  => null,
          4146  => 1,
          4147  => 1,

          4151  => 1.3,
          4152  => 1.33,
          4153  => 1.33,
          4154  => 3.2,
          4155  => 1.33,
          4156  => 1.33,
          4157  => 1,

          4161  => null,
          4162  => 1.83,
          4163  => 1.83,
          4164  => 4.4,
          4165  => 1.83,
          4166  => 1.83,
          4167  => 1.06,

          4171  => null,
          4172  => 2.4,
          4173  => 2.4,
          4174  => 5.76,
          4175  => null,
          4176  => 2.4,
          4177  => 1.35,
    ];
}
