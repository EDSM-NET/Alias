<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class EngineHeatRate extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Engine Heat Rate';
    static protected $lessIsGood        = true;

    /**
     * List of categories
     */
    static protected $have          = [
        'Thruster Mounting',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Thrusters
          3201  => 1.3,
          3202  => 1.3,
          3205  => 1.3,
          3206  => 2,

          3211  => 1.3,
          3212  => 1.3,
          3214  => 1.3,
          3215  => 1.3,
          3216  => 1.3,

          3221  => 1.3,
          3222  => 1.3,
          3223  => 1.3,
          3224  => 1.3,
          3225  => 1.3,

          3231  => 1.3,
          3232  => 1.3,
          3233  => 1.3,
          3234  => 1.3,
          3235  => 1.3,

          3241  => 1.3,
          3242  => 1.3,
          3243  => 1.3,
          3244  => 1.3,
          3245  => 1.3,

          3251  => 1.3,
          3252  => 1.3,
          3253  => 1.3,
          3254  => 1.3,
          3255  => 1.3,

          3261  => 1.3,
          3262  => 1.3,
          3263  => 1.3,
          3264  => 1.3,
          3265  => 1.3,
    ];
}
