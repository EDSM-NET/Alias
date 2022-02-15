<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Damage extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Damage';

    /**
     * List of categories
     */
    static protected $have          = [
        // Weapon Hardpoint
        'Beam Lasers',
        'Burst Lasers',
        'Pulse Lasers',
        'Cannons',
        'Fragment Cannons',
        'Multi-Cannons',
        'Pack-Hound Missile Rack',
        'Plasma Accelerators',
        'Rail Guns',
        'Missiles',
        'Mines',
        'Torpedoes',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1001  => 4,
          1002  => 5,
          1003  => 6,
          1004  => null,

          1005  => 4,
          1006  => 5,
          1007  => 6,
          1008  => 3.46,

          1009  => 3,
          1010  => 4,
          1011  => 5,
        
          1032  => 38.5,

        // Weapon Hardpoint > Pulse Laser
          1051  => 2.05,
          1052  => 3.5,
          1053  => 5.98,
          1054  => 10.24,

          1055  => 1.56,
          1056  => 2.68,
          1057  => 4.58,
          1058  => 7.82,

          1059  => 1.19,
          1060  => 2.05,
          1061  => 3.5,

          1072  => 2.8,

        // Weapon Hardpoint > Burst Laser
          1101  => 1.72,
          1102  => 3.53,
          1103  => 7.73,
          1104  => 20.610001,

          1105  => 1.22,
          1106  => 2.45,
          1107  => 5.16,
          1108  => 12.09,

          1109  => 0.87,
          1110  => 1.72,
          1111  => 3.53,

          1121  => 3.6,

        // Weapon Hardpoint > Cannon
          1151  => 22.5,
          1152  => 36.875,
          1153  => 55.625,
          1154  => 83.125,

          1155  => 15.92,
          1156  => 25.530001,
          1157  => 37.421001,
          1158  => 56.59,

          1159  => 12.77,
          1160  => 19.790001,
          1161  => 30.34,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 1.43,
          1202  => 2.985,
          1203  => 4.57,

          1205  => 1.01,
          1206  => 2.274,
          1207  => 3.77,

          1209  => 0.69,
          1210  => 1.67,
          1211  => 2.985,

          1215  => 3.96,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 1.12,
          1252  => 2.19,
          1253  => 3.925,
          1254  => 4.625,

          1255  => 0.82,
          1256  => 1.64,
          1257  => 2.84,
          1258  => 3.46,

          1259  => 0.56,
          1260  => 1.17,
          1261  => 2.23,

          1271  => 2.85,

          1281  => 1.12,
          1282  => 2.19,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 54.299999,
          1303  => 83.400002,
          1304  => 125.25,

          1313  => 34.400002,

          1321  => 1.65,
          1322  => 2.75,
          1323  => null,

          1329  => null,
          1330  => null,
          1331  => null,

        // Weapon Hardpoint > Rail Gun
          1351  => 23.34,
          1352  => 41.529999,

          1362  => 15,

        // Weapon Hardpoint > Missile Rack
          1401  => 40,
          1402  => 40,
          1403  => 40,

          1405  => 50,
          1406  => 50,
          1407  => 50,

          1411  => 40,
          1412  => 50,
          1413  => 50,

        // Weapon Hardpoint > Mine Launcher
          1451  => 44,
          1452  => 44,

        // Weapon Hardpoint > Mining Laser
          1501  => null,
          1502  => null,

          1509  => null,
          1510  => null,

        // Weapon Hardpoint > Torpedo Pylon
          1551  => 120,
          1552  => 120,
          1553  => 120,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 32,

        // Weapon Hardpoint > Remote Release Flak Launcher
          1760  => 34,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 7.5,

        // Weapon Hardpoint > Enzyme Missile Rack
          1872  => 5,
    ];
}