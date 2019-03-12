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
          4201  => 12,
          4202  => 16,
          4203  => 20,
          4204  => 24,
          4205  => 28,

          4211  => null,
          4212  => 18,
          4213  => 23,
          4214  => 28,
          4215  => 32,

          4221  => 17,
          4222  => 23,
          4223  => 29,
          4224  => 35,
          4225  => 41,

          4231  => 20,
          4232  => 26,
          4233  => 33,
          4234  => 39,
          4235  => 46,

          4241  => 21,
          4242  => 28,
          4243  => 35,
          4244  => 41,
          4245  => 48,

          4251  => 20,
          4252  => 26,
          4253  => 33,
          4254  => 39,
          4255  => 46,

          4261  => null,
          4262  => 32,
          4263  => 41,
          4264  => 49,
          4265  => 57,

          4271  => 28,
          4272  => null,
          4273  => null,
          4274  => 56,
          4275  => 65,
    ];
}
