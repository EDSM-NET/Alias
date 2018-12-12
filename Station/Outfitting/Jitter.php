<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Jitter extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Jitter';
    static protected $lessIsGood        = true;

    /**
     * List of categories
     */
    static protected $have          = [
        'Burst Lasers',
        'Fragment Cannons',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1001  => 0,
          1002  => 0,
          1003  => 0,
          1004  => 0,

          1005  => 0,
          1006  => 0,
          1007  => 0,
          1008  => 0,

          1009  => 0,
          1010  => 0,
          1011  => 0,

          1021  => null,

          1031  => null,
          1032  => null,

        // Weapon Hardpoint > Pulse Laser
          1050  => null, // Not in category
          1051  => 0,
          1052  => 0,
          1053  => 0,
          1054  => 0,

          1055  => 0,
          1056  => 0,
          1057  => 0,
          1058  => 0,

          1059  => 0,
          1060  => 0,
          1061  => 0,

          1072  => 0,

        // Weapon Hardpoint > Burst Laser
          1101  => 0,
          1102  => 0,
          1103  => 0,
          1104  => 0,

          1105  => 0,
          1106  => 0,
          1107  => 0,
          1108  => 0,

          1109  => 0,
          1110  => 0,
          1111  => 0,

          1121  => 1.7,

        // Weapon Hardpoint > Cannon
          1151  => 0,
          1152  => 0,
          1153  => 0,
          1154  => 0,

          1155  => 0,
          1156  => 0,
          1157  => 0,
          1158  => 0,

          1159  => 0,
          1160  => 0,
          1161  => 0,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 5,
          1202  => 5,
          1203  => 5,

          1205  => 5,
          1206  => 5,
          1207  => 5,

          1209  => 5,
          1210  => 5,
          1211  => 5,

          1215  => 1.7,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 0,
          1252  => 0,
          1253  => 0,
          1254  => 0,

          1255  => 0,
          1256  => 0,
          1257  => 0,
          1258  => 0,

          1259  => 0,
          1260  => 0,
          1261  => 0,

          1271  => 0,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 0,
          1303  => 0,
          1304  => 0,

          1313  => 0,

          1321  => 0,
          1322  => 0,
          1323  => 0,

          1329  => 0,
          1330  => 0,
          1331  => 0,

        // Weapon Hardpoint > Missile Rack
          1401  => 0,
          1402  => 0,
          1403  => 0,

          1405  => 0,
          1406  => 0,
          1407  => 0,

          1411  => 0,

        // Weapon Hardpoint > Mine Launcher
          1451  => 0,
          1452  => 0,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 0,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 0,
    ];
}
