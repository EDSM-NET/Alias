<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ShieldBankReinforcement extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Shield Bank Reinforcement';

    /**
     * List of categories
     */
    static protected $have          = [
        'Shield Cell Banks',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Shield Cell Bank
          4201  => null,
          4202  => null,
          4203  => null,
          4204  => null,
          4205  => null,

          4211  => null,
          4212  => null,
          4213  => null,
          4214  => null,
          4215  => 32,

          4221  => null,
          4222  => 23,
          4223  => 29,
          4224  => 35,
          4225  => 41,

          4231  => null,
          4232  => 26,
          4233  => 33,
          4234  => 39,
          4235  => 46,

          4241  => null,
          4242  => 28,
          4243  => 35,
          4244  => 41,
          4245  => 48,

          4251  => null,
          4252  => null,
          4253  => 33,
          4254  => 39,
          4255  => 46,

          4261  => null,
          4262  => null,
          4263  => 41,
          4264  => 49,
          4265  => 57,

          4271  => null,
          4272  => null,
          4273  => null,
          4274  => 56,
          4275  => 65,
    ];
}