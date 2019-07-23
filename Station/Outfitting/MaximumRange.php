<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class MaximumRange extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Maximum Range';
    static protected $unit              = '%1$s m';

    /**
     * List of categories
     */
    static protected $have          = [
        'Beam Lasers',
        'Burst Lasers',
        'Cannons',
        'Fragment Cannons',
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
          1001  => 3000,
          1002  => 3000,
          1003  => 3000,
          1004  => 3000,

          1005  => 3000,
          1006  => 3000,
          1007  => 3000,
          1008  => 3000,

          1009  => 3000,
          1010  => 3000,
          1011  => 3000,

          1021  => 3000,

          1031  => 3000,
          1032  => 3000,

        // Weapon Hardpoint > Pulse Laser
          1050  => 3000, // Not in category
          1051  => 3000,
          1052  => 3000,
          1053  => 3000,
          1054  => 3000,

          1055  => 3000,
          1056  => 3000,
          1057  => 3000,
          1058  => 3000,

          1059  => 3000,
          1060  => 3000,
          1061  => 3000,

          1072  => 3000,

        // Weapon Hardpoint > Burst Laser
          1101  => 3000,
          1102  => 3000,
          1103  => 3000,
          1104  => 3000,

          1105  => 3000,
          1106  => 3000,
          1107  => 3000,
          1108  => 3000,

          1109  => 3000,
          1110  => 3000,
          1111  => 3000,

          1121  => 1000,

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
          1201  => 2000,
          1202  => 2000,
          1203  => 2000,

          1205  => 2000,
          1206  => 2000,
          1207  => 2000,

          1209  => 2000,
          1210  => 2000,
          1211  => 2000,

          1215  => 3000,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 4000,
          1252  => 4000,
          1253  => 4000,
          1254  => 4000,

          1255  => 4000,
          1256  => 4000,
          1257  => 4000,
          1258  => 4000,

          1259  => 4000,
          1260  => 4000,
          1261  => 4000,

          1271  => 4500,

          1281  => 4000,
          1282  => 4000,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 3500,
          1303  => 3500,
          1304  => 3500,

          1313  => 3500,

          1321  => null,
          1322  => null,
          1323  => null,

          1329  => null,
          1330  => null,
          1331  => null,

        // Weapon Hardpoint > Rail Gun
          1351  => 3000,
          1352  => 3000,

          1362  => 3000,

        // Weapon Hardpoint > Mine Launcher
          1452  => 3000,
    ];
}
