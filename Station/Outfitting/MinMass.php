<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class MinMass extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Minimal mass';

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
          3200  => 24, // Not in category
          3201  => 24,
          3202  => 27,
          3203  => 30,
          3204  => 33,
          3205  => 36,
          3206  => 50,

          3211  => 40,
          3212  => 45,
          3213  => 50,
          3214  => 55,
          3215  => 60,
          3216  => 70,

          3221  => 140,
          3222  => 157.5,
          3223  => 175,
          3224  => 192.5,
          3225  => 210,

          3231  => 280,
          3232  => 315,
          3233  => 350,
          3234  => 385,
          3235  => 420,

          3241  => 480,
          3242  => 540,
          3243  => 600,
          3244  => 660,
          3245  => 720,

          3251  => 720,
          3252  => 810,
          3253  => 900,
          3254  => 990,
          3255  => 1080,

          3261  => 1120,
          3262  => 1260,
          3263  => 1400,
          3264  => 1540,
          3265  => 1680,
    ];
}