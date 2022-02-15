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
        'Burst Lasers',
        'Cannons',
        'Pulse Lasers',
        'Fragment Cannons',
        'Missiles',
        'Mines',
        'Multi-Cannons',
        'Pack-Hound Missile Rack',
        'Plasma Accelerators',
        'Rail Guns',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1001  => null,
          1002  => null,
          1003  => null,
          1004  => null,

          1005  => null,
          1006  => 4.202586,
          1007  => null,
          1008  => null,

          1009  => null,
          1010  => null,
          1011  => null,

          1021  => null,

          1031  => 1.204819,
          1032  => 1.204819,

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

        // Weapon Hardpoint > Burst Laser
          1101  => 4.736842,
          1102  => 3.695409,
          1103  => 2.68886,
          1104  => 1.565217,

          1105  => 5.284974,
          1106  => 4.202586,
          1107  => 3.218117,
          1108  => 2.142857,

          1109  => 4.79798,
          1110  => 3.930131,
          1111  => 3.119093,

          1121  => 7.619048,

        // Weapon Hardpoint > Cannon
          1151  => 0.5,
          1152  => 0.460829,
          1153  => 0.420168,
          1154  => 0.380228,

          1155  => 0.520833,
          1156  => 0.480769,
          1157  => 0.440529,
          1158  => 0.4,

          1159  => 0.4329,
          1160  => 0.4,
          1161  => 0.367647,

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

          1281  => 7.692308,
          1282  => 7.142857,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 0.330033,
          1303  => 0.289855,
          1304  => 0.25,

          1313  => 0.833333,

          1321  => null,
          1322  => null,
          1323  => null,

          1329  => null,
          1330  => null,
          1331  => null,

        // Weapon Hardpoint > Rail Gun
          1351  => 1.587302,
          1352  => 1.204819,

          1362  => 4.090909,

        // Weapon Hardpoint > Missile Rack
          1401  => 0.333333,
          1402  => 0.333333,
          1403  => 0.333333,

          1405  => 0.5,
          1406  => 0.5,
          1407  => 0.5,

          1411  => 0.333333,
          1412  => 0.5,
          1413  => 0.5,

        // Weapon Hardpoint > Mine Launcher
          1451  => 1,
          1452  => 1,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 1,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 2,
    ];
}
