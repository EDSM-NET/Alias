<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DistributorDraw extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Distributor Draw';
    static protected $lessIsGood        = true;

    /**
     * List of categories
     */
    static protected $have          = [
        'Beam Lasers',
        'Pulse Lasers',
        'Burst Lasers',
        'Cannons',
        'Fragment Cannons',
        'Missiles',
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
          1001  => 1.94,
          1002  => 3.16,
          1003  => 5.1,
          1004  => 8.19,

          1005  => 2.11,
          1006  => 3.44,
          1007  => 5.58,
          1008  => 8.99,

          1009  => 1.32,
          1010  => 2.16,
          1011  => 3.51,

          1021  => 2.52,

          1031  => null,
          1032  => null,

        // Weapon Hardpoint > Pulse Laser
          1050  => null, // Not in category
          1051  => 0.3,
          1052  => 0.5,
          1053  => 0.86,
          1054  => 1.48,

          1055  => 0.31,
          1056  => 0.54,
          1057  => 0.92,
          1058  => 1.56,

          1059  => 0.19,
          1060  => 0.33,
          1061  => 0.56,

          1072  => 0.9,

        // Weapon Hardpoint > Burst Laser
          1101  => 0.25,
          1102  => 0.5,
          1103  => 1.11,
          1104  => 2.98,

          1105  => 0.24,
          1106  => 0.49,
          1107  => 1.03,
          1108  => 2.41,

          1109  => 0.139,
          1110  => 0.275,
          1111  => 0.56,

          1121  => 0.31,

        // Weapon Hardpoint > Cannon
          1151  => 0.46,
          1152  => 0.7,
          1153  => 1.07,
          1154  => 1.61,

          1155  => 0.48,
          1156  => 0.75,
          1157  => 1.14,
          1158  => 1.72,

          1159  => 0.22,
          1160  => 0.34,
          1161  => 0.53,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 0.21,
          1202  => 0.37,
          1203  => 0.57,

          1205  => 0.26,
          1206  => 0.49,
          1207  => 0.81,

          1209  => 0.1,
          1210  => 0.21,
          1211  => 0.37,

          1215  => 0.57,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 0.06,
          1252  => 0.11,
          1253  => 0.18,
          1254  => 0.24,

          1255  => 0.07,
          1256  => 0.14,
          1257  => 0.25,
          1258  => 0.37,

          1259  => 0.03,
          1260  => 0.06,
          1261  => 0.16,

          1271  => 0.12,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 8.65,
          1303  => 13.6,
          1304  => 21.040001,

          1313  => 5.5,

          1321  => null,
          1322  => null,
          1323  => null,

          1329  => null,
          1330  => null,
          1331  => null,

        // Weapon Hardpoint > Rail Gun
          1351  => 2.69,
          1352  => 5.11,

          1362  => 2,

        // Weapon Hardpoint > Missile Rack
          1401  => 0.24,
          1402  => 0.24,
          1403  => 0.24,

          1405  => 0.24,
          1406  => 0.24,
          1407  => 0.24,

          1411  => 0.24,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 0.24,
    ];
}
