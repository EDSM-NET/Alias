<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DamageFalloffRange extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Damage Falloff Range';

    /**
     * List of categories
     */
    static protected $have          = [
        'Beam Lasers',
        'Plasma Accelerators',
        'Pulse Lasers',
        'Rail Guns',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1001  => 600,
          1002  => 600,
          1003  => 600,
          1004  => 600,

          1005  => 600,
          1006  => 600,
          1007  => 600,
          1008  => 600,

          1009  => 600,
          1010  => 600,
          1011  => 600,

          1021  => 600,

          1031  => 600,
          1032  => 600,

        // Weapon Hardpoint > Pulse Laser
          1050  => 500, // Not in category
          1051  => 500,
          1052  => 500,
          1053  => 500,
          1054  => 500,

          1055  => 500,
          1056  => 500,
          1057  => 500,
          1058  => 500,

          1059  => 500,
          1060  => 500,
          1061  => 500,

          1072  => 500,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 2000,
          1303  => 2000,
          1304  => 2000,

          1313  => 2000,

          1321  => 2000,
          1322  => 2000,
          1323  => 2000,

          1329  => 2000,
          1330  => 2000,
          1331  => 2000,

        // Weapon Hardpoint > Rail Gun
          1351  => 1000,
          1352  => 1000,

          1362  => 1000,
    ];
}
