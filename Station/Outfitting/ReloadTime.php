<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ReloadTime extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Reload time';
    static protected $unit              = '%1$s s';
    static protected $lessIsGood        = true;

    /**
     * List of categories
     */
    static protected $have          = [
        // Weapon Hardpoint
        'Cannons',
        'Fragment Cannons',
        'Multi-Cannons',
        'Pack-Hound Missile Rack',
        'Plasma Accelerators',
        'Rail Guns',
        'Missiles',
        'Mines',

        // Utility Mount
        'Chaff Launchers',
        'Heatsink Launchers',
        'Point Defence',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Cannon
          1151  => 3,
          1152  => 3,
          1153  => 3,
          1154  => 3,

          1155  => 4,
          1156  => 4,
          1157  => 4,
          1158  => 4,

          1159  => 4,
          1160  => 4,
          1161  => 4,

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

          1215  => 5,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 4,
          1252  => 4,
          1253  => 4,
          1254  => 4,

          1255  => 5,
          1256  => 5,
          1257  => 5,
          1258  => 5,

          1259  => 4,
          1260  => 4,
          1261  => 4,

          1271  => 4,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 6,
          1303  => 6,
          1304  => 6,

          1313  => 6,

          1321  => null,
          1322  => null,
          1323  => null,

          1329  => null,
          1330  => null,
          1331  => null,

        // Weapon Hardpoint > Rail Gun
          1351  => 1,
          1352  => 1,

          1362  => 1.2,

        // Weapon Hardpoint > Missile Rack
          1401  => 12,
          1402  => 12,
          1403  => 12,

          1405  => 5,
          1406  => 5,
          1407  => 5,

          1411  => 5,

        // Weapon Hardpoint > Mine Launcher
          1451  => 2,
          1452  => 6.6,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 2,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 5,

        // Utility Mount > Chaff Launcher
          2050  => 10,

        // Utility Mount > Heat Sink Launcher
          2150  => 10,

        // Utility Mount > Point Defence
          2200  => 0.4,
    ];
}
