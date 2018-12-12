<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ArmourPenetration extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Armour Penetration';

    /**
     * List of categories
     */
    static protected $have          = [
        'Beam Lasers',
        'Burst Lasers',
        'Cannons',
        'Fragment Cannons',
        'Pack-Hound Missile Rack',
        'Plasma Accelerators',
        'Pulse Lasers',
        'Mines',
        'Missiles',
        'Multi-Cannons',
        'Rail Guns',
        'Torpedoes',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1001  => 18,
          1002  => 35,
          1003  => 50,
          1004  => 60,

          1005  => 18,
          1006  => 35,
          1007  => 50,
          1008  => 60,

          1009  => 18,
          1010  => 35,
          1011  => 50,

          1021  => null,

          1031  => null,
          1032  => null,

        // Weapon Hardpoint > Pulse Laser
          1050  => null, // Not in category
          1051  => 20,
          1052  => 35,
          1053  => 52,
          1054  => 65,

          1055  => 20,
          1056  => 35,
          1057  => 52,
          1058  => 65,

          1059  => 20,
          1060  => 35,
          1061  => 52,

          1072  => 35,

        // Weapon Hardpoint > Burst Laser
          1101  => 20,
          1102  => 35,
          1103  => 52,
          1104  => 65,

          1105  => 20,
          1106  => 35,
          1107  => 52,
          1108  => 65,

          1109  => 20,
          1110  => 35,
          1111  => 52,

          1121  => 1,

        // Weapon Hardpoint > Cannon
          1151  => 35,
          1152  => 50,
          1153  => 70,
          1154  => null,

          1155  => 35,
          1156  => 50,
          1157  => 70,
          1158  => null,

          1159  => 35,
          1160  => 50,
          1161  => 70,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 20,
          1202  => 30,
          1203  => 45,

          1205  => 20,
          1206  => 30,
          1207  => 45,

          1209  => 20,
          1210  => 30,
          1211  => 45,

          1215  => 45,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 22,
          1252  => 37,
          1253  => 54,
          1254  => 68,

          1255  => 22,
          1256  => 37,
          1257  => 54,
          1258  => 68,

          1259  => 22,
          1260  => 37,
          1261  => 54,

          1271  => 30,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 100,
          1303  => 100,
          1304  => 100,

          1313  => 100,

          1321  => 100,
          1322  => 100,
          1323  => 100,

          1329  => 100,
          1330  => 100,
          1331  => 100,

        // Weapon Hardpoint > Rail Gun
          1351  => 100,
          1352  => 100,

          1362  => 100,

        // Weapon Hardpoint > Missile Rack
          1401  => 60,
          1402  => 60,
          1403  => 60,

          1405  => 60,
          1406  => 60,
          1407  => 60,

          1411  => 60,

        // Weapon Hardpoint > Mine Launcher
          1451  => 60,
          1452  => 60,

        // Weapon Hardpoint > Mining Laser
          1501  => null,
          1502  => null,
          1509  => null,
          1510  => null,

          1521  => null,

        // Weapon Hardpoint > Torpedo Pylon
          1551  => 10000,
          1552  => 10000,
          1553  => 10000,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 60,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 60,
    ];
}
