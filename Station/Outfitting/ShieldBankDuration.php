<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ShieldBankDuration extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Shield Bank Duration';

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
          4201  => 1,
          4202  => 1,
          4203  => 1,
          4204  => 1,
          4205  => 1,

          4211  => 1.5,
          4212  => 1.5,
          4213  => 1.5,
          4214  => 1.5,
          4215  => 1.5,

          4221  => 2.3,
          4222  => 2.3,
          4223  => 2.3,
          4224  => 2.3,
          4225  => 2.3,

          4231  => 3.4,
          4232  => 3.4,
          4233  => 3.4,
          4234  => 3.4,
          4235  => 3.4,

          4241  => 5.1,
          4242  => 5.1,
          4243  => 5.1,
          4244  => 5.1,
          4245  => 5.1,

          4251  => 7.6,
          4252  => 7.6,
          4253  => 7.6,
          4254  => 7.6,
          4255  => 7.6,

          4261  => 11.4,
          4262  => 11.4,
          4263  => 11.4,
          4264  => 11.4,
          4265  => 11.4,

          4271  => 17.1,
          4272  => 17.1,
          4273  => 17.1,
          4274  => 17.1,
          4275  => 17.1,
    ];
}
