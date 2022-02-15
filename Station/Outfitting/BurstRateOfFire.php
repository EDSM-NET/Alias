<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class BurstRateOfFire extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Burst Rate Of Fire';

    /**
     * List of categories
     */
    static protected $have          = [
        'Beam Lasers',
        'Fragment Cannons',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1031  => -1,
          1032  => -1,

        // Weapon Hardpoint > Fragment Cannon
          1201  => -1,
          1202  => -1,
          1203  => -1,

          1205  => -1,
          1206  => -1,
          1207  => -1,

          1209  => -1,
          1210  => -1,
          1211  => -1,

          1215  => -1,


    ];
}
