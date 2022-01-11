<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DamagePerSecond extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Damage Per Second';

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
        'Mines',
        'Multi-Cannons',
        'Plasma Accelerators',
        'Rail Guns',
        'Pack-Hound Missile Rack',
        'Torpedoes',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1001  => 9.82,
          1002  => 15.96,
          1003  => 25.780001,
          1004  => 41.380001,

          1005  => 7.68,
          1006  => 12.52,
          1007  => 20.299999,
          1008  => 32.68,

          1009  => 5.4,
          1010  => 8.83,
          1011  => 14.36,

          1021  => 4.91,

        // Weapon Hardpoint > Pulse Laser
          1050  => null, // Not in category
          1051  => 7.884615,
          1052  => 12.068966,
          1053  => 18.121212,
          1054  => 26.947367,

          1055  => 6.24,
          1056  => 9.571428,
          1057  => 14.774194,
          1058  => 21.722221,

          1059  => 3.966667,
          1060  => 6.212121,
          1061  => 9.459459,

          1072  => 4.666667,

        // Weapon Hardpoint > Burst Laser
          1101  => 8.147368,
          1102  => 13.044793,
          1103  => 20.784891,
          1104  => 32.259132,

          1105  => 6.447669,
          1106  => 10.296336,
          1107  => 16.605484,
          1108  => 25.907143,

          1109  => 4.174242,
          1110  => 6.759825,
          1111  => 11.010397,

          1121  => 27.428572,

        // Weapon Hardpoint > Cannon
          1151  => 11.25,
          1152  => 16.993086,
          1153  => 23.371847,
          1154  => 31.606464,

          1155  => 8.291667,
          1156  => 12.274039,
          1157  => 16.485022,
          1158  => 22.636,

          1159  => 5.528139,
          1160  => 7.916,
          1161  => 11.154411,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 95.333328,
          1202  => 179.099991,
          1203  => 249.272736,

          1205  => 71.294113,
          1206  => 143.621048,
          1207  => 215.428574,

          1209  => 39.42857,
          1210  => 87.130432,
          1211  => 143.279999,

          1215  => 216,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 8.615385,
          1252  => 15.642858,
          1253  => 23.088234,
          1254  => 28.030302,

          1255  => 6.833334,
          1256  => 12.615385,
          1257  => 18.933332,
          1258  => 23.299664,

          1259  => 4,
          1260  => 7.3125,
          1261  => 11.736842,

          1271  => 12.391304,

          1281  => 8.615385,
          1282  => 15.642858,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 17.920792,
          1303  => 24.173912,
          1304  => 31.3125,

          1313  => 28.666668,

        // Weapon Hardpoint > Rail Gun
          1351  => 37.047619, //17.920792,
          1352  => 50.036144,

          1362  => 61.363636,

        // Weapon Hardpoint > Missile Rack
          1401  => 13.333334,
          1402  => 13.333334,
          1403  => 13.333334,

          1405  => 25,
          1406  => 25,
          1407  => 25,

          1411  => 13.333334,
          1412  => 25,
          1413  => 25,

        // Weapon Hardpoint > Mine Launcher
          1451  => 44,
          1452  => 44,

        // Weapon Hardpoint > Mining Laser
          1501  => 2,

        // Weapon Hardpoint > Torpedo Pylon
          1551  => 120,
          1552  => 120,
          1553  => 120,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 32,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 60,

        // Weapon Hardpoint > Enzyme Missile Rack
          1872  => 2.5,
    ];
}
