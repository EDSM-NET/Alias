<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ShieldBankHeat extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Shield Bank Heat';
    static protected $lessIsGood        = true;

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
          4201  => 170,
          4202  => 170,
          4203  => 170,
          4204  => 170,
          4205  => 170,

          4211  => 240,
          4212  => 240,
          4213  => 240,
          4214  => 240,
          4215  => 240,

          4221  => 340,
          4222  => 340,
          4223  => 340,
          4224  => 340,
          4225  => 340,

          4231  => 410,
          4232  => 410,
          4233  => 410,
          4234  => 410,
          4235  => 410,

          4241  => 540,
          4242  => 540,
          4243  => 540,
          4244  => 540,
          4245  => 540,

          4251  => 640,
          4252  => 640,
          4253  => 640,
          4254  => 640,
          4255  => 640,

          4261  => 720,
          4262  => 720,
          4263  => 720,
          4264  => 720,
          4265  => 720,

          4271  => 800,
          4272  => 800,
          4273  => 800,
          4274  => 800,
          4275  => 800,
    ];
}
