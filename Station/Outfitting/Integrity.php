<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Integrity extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Integrity';

    /**
     * List of categories
     */
    static protected $have          = [
        'Power Plant',
        'Thrusters',
        'Frame Shift Drive',
        'Life Support',
        'Power Distributor',
        'Sensors',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Power Plant
          3122  => 64,

          3135  => 106,

          3145  => 124,

          3155  => 144,

          3165  => 165,

        // Core Internal > Thrusters
          3215  => 70,

          3225  => 88,

          3232  => 77,

          3245  => 124,

          3252  => 105,
          3255  => 144,

          3265  => 165,

        // Core Internal > Frame Shift Drive
          3315  => 80,

          3325  => 100,

          3335  => 120,

          3345  => 141,

          3355  => 164,

        // Core Internal > Life Support
          3462  => 118,

        // Core Internal > Power Distributor
          3573  => 150,

        // Core Internal > Sensors
          3635  => 88,

          3641  => 86,

          3652  => 90,

          3662  => 105,

          3672  => 120,
    ];
}

