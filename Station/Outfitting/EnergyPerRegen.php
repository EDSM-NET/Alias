<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class EnergyPerRegen extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Energy Per Regen';
    static protected $lessIsGood        = true;

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
          4101  => 0.6,
          4102  => 0.6,
          4103  => 0.6,
          4104  => 0.6,
          4106  => 0.6,
          4107  => 0.6,

          4110  => 0.6, // Not in category
          4111  => 0.6,
          4112  => 0.6,
          4113  => 0.6,
          4114  => 0.6,
          4115  => 0.6,
          4116  => 0.6,
          4117  => 0.6,

          4121  => 0.6,
          4122  => 0.6,
          4123  => 0.6,
          4124  => 0.6,
          4125  => 0.6,
          4126  => 0.6,
          4127  => 0.6,

          4131  => 0.6,
          4132  => 0.6,
          4133  => 0.6,
          4134  => 0.6,
          4135  => 0.6,
          4136  => 0.6,
          4137  => 0.6,

          4141  => 0.6,
          4142  => 0.6,
          4143  => 0.6,
          4144  => 0.6,
          4145  => 0.6,
          4146  => 0.6,
          4147  => 0.6,

          4151  => 0.6,
          4152  => 0.6,
          4153  => 0.6,
          4154  => 0.6,
          4155  => 0.6,
          4156  => 0.6,
          4157  => 0.6,

          4161  => 0.6,
          4162  => 0.6,
          4163  => 0.6,
          4164  => 0.6,
          4165  => 0.6,
          4166  => 0.6,
          4167  => 0.6,

          4171  => 0.6,
          4172  => 0.6,
          4173  => 0.6,
          4174  => 0.6,
          4175  => 0.6,
          4176  => 0.6,
          4177  => 0.6,
    ];
}
