<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class EngineOptPerformance extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Engine Opt Performance';

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
          3200  => 100, // Not in category
          3201  => 100,
          3202  => 100,
          3203  => 100,
          3204  => 100,
          3205  => 100,
          3206  => 115,

          3211  => 100,
          3212  => 100,
          3213  => 100,
          3214  => 100,
          3215  => 100,
          3216  => 115,

          3221  => 100,
          3222  => 100,
          3223  => 100,
          3224  => 100,
          3225  => 100,

          3231  => 100,
          3232  => 100,
          3233  => 100,
          3234  => 100,
          3235  => 100,

          3241  => 100,
          3242  => 100,
          3243  => 100,
          3244  => 100,
          3245  => 100,

          3251  => 100,
          3252  => 100,
          3253  => 100,
          3254  => 100,
          3255  => 100,

          3261  => 100,
          3262  => 100,
          3263  => 100,
          3264  => 100,
          3265  => 100,
    ];
}
