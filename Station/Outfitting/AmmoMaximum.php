<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class AmmoMaximum extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Ammo Maximum';

    /**
     * List of categories
     */
    static protected $have          = [
        // Weapon Hardpoint
        'Cannons',
        'Fragment Cannons',
        'Mines',
        'Missiles',
        'Multi-Cannons',
        'Pack-Hound Missile Rack',
        'Plasma Accelerators',
        'Rail Guns',

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
          1151  => 120,
          1152  => 120,
          1153  => 120,
          1154  => 120,

          1155  => 100,
          1156  => 100,
          1157  => 100,
          1158  => 100,

          1159  => 100,
          1160  => 100,
          1161  => 100,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 180,
          1202  => 180,
          1203  => 180,

          1205  => 180,
          1206  => 180,
          1207  => 180,

          1209  => 180,
          1210  => 180,
          1211  => 180,

          1215  => 180,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 2100,
          1252  => 2100,
          1253  => 2100,
          1254  => 2100,

          1255  => 2100,
          1256  => 2100,
          1257  => 2100,
          1258  => 2100,

          1259  => 2100,
          1260  => 2100,
          1261  => 2100,

          1271  => 1000,

          1281  => 2100,
          1282  => 2100,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 100,
          1303  => 100,
          1304  => 100,

          1313  => 300,

          1321  => null,
          1322  => null,
          1323  => null,

          1329  => null,
          1330  => null,
          1331  => null,

        // Weapon Hardpoint > Rail Gun
          1351  => 80,
          1352  => 80,

          1362  => 240,

        // Weapon Hardpoint > Missile Rack
          1401  => 6,
          1402  => 18,
          1403  => 36,

          1405  => 16,
          1406  => 48,
          1407  => 96,

          1411  => 48,

        // Weapon Hardpoint > Mine Launcher
          1451  => 36,
          1452  => 72,

        // Weapon Hardpoint > Torpedo Pylon
          1553  => 36,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 36,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 120,

        // Utility Mount > Chaff Launcher
          2050  => 10,

        // Utility Mount > Heat Sink Launcher
          2150  => 2,

        // Utility Mount > Point Defence
          2200  => 10000,
    ];
}
