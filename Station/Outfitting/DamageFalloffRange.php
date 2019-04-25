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
        'Burst Lasers',
        'Cannons',
        'Multi-Cannons',
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

          1021  => 800,

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

        // Weapon Hardpoint > Burst Laser
          1101  => 500,
          1102  => 500,
          1103  => 500,
          1104  => 500,

          1105  => 500,
          1106  => 500,
          1107  => 500,
          1108  => 500,

          1109  => 500,
          1110  => 500,
          1111  => 500,

          1121  => 600,

        // Weapon Hardpoint > Cannon
          1151  => 3000,
          1152  => 3500,
          1153  => 4000,
          1154  => 4500,

          1155  => 3000,
          1156  => 3500,
          1157  => 4000,
          1158  => 4500,

          1159  => 3000,
          1160  => 3500,
          1161  => 4000,

        // Weapon Hardpoint > Fragment Cannon
          1201  => null,
          1202  => null,
          1203  => null,

          1205  => null,
          1206  => null,
          1207  => null,

          1209  => null,
          1210  => null,
          1211  => null,

          1215  => 600,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 2000,
          1252  => 2000,
          1253  => 2000,
          1254  => 2000,

          1255  => 2000,
          1256  => 2000,
          1257  => 2000,
          1258  => 2000,

          1259  => 2000,
          1260  => 2000,
          1261  => 2000,

          1271  => 3000,

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

        // Weapon Hardpoint > Missile Rack
          1401  => 600,
          1402  => 600,
          1403  => 600,

          1405  => null,
          1406  => null,
          1407  => null,

          1411  => null,

        // Weapon Hardpoint > Mine Launcher
          1451  => null,
          1452  => 1000,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 1000,
    ];
}
