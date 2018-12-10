<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class RateOfFire extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Rate Of Fire';

    /**
     * List of categories
     */
    static protected $have          = [
        'Pulse Lasers',
        'Fragment Cannons',
        'Missiles',
        'Mines',
        'Multi-Cannons',
        'Pack-Hound Missile Rack',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Pulse Laser
          1050  => null, // Not in category
          1051  => 3.846154,
          1052  => 3.448276,
          1053  => 3.030303,
          1054  => 2.631579,

          1055  => 4,
          1056  => 3.571429,
          1057  => 3.225806,
          1058  => 2.777778,

          1059  => 3.333333,
          1060  => 3.030303,
          1061  => 2.702703,

          1072  => 1.666667,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 5.555555,
          1202  => 5,
          1203  => 4.545455,

          1205  => 5.882353,
          1206  => 5.263158,
          1207  => 4.761905,

          1209  => 4.761905,
          1210  => 4.347826,
          1211  => 4,

          1215  => 4.545455,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 7.692308,
          1252  => 7.142857,
          1253  => 5.882353,
          1254  => 3.030303,

          1255  => 8.333334,
          1256  => 7.692308,
          1257  => 6.666667,
          1258  => 3.367003,

          1259  => 7.142857,
          1260  => 6.25,
          1261  => 5.263158,

          1271  => 4.347826,

        // Weapon Hardpoint > Missile Rack
          1401  => 0.333333,
          1402  => 0.333333,
          1403  => 0.333333,

          1405  => 0.5,
          1406  => 0.5,
          1407  => 0.5,

          1411  => 0.333333,

        // Weapon Hardpoint > Mine Launcher
          1451  => 1,
          1452  => 1,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 2,
    ];
}
