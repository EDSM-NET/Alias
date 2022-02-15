<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class AmmoClipSize extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Ammo';

    /**
     * List of categories
     */
    static protected $have          = [
        'Beam Lasers',
        'Cannons',
        'Fragment Cannons',
        'Multi-Cannons',
        'Plasma Accelerators',
        'Rail Guns',
        'Missiles',
        'Mines',
        'Pack-Hound Missile Rack',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1031  => 1,
          1032  => 1,

        // Weapon Hardpoint > Cannon
          1151  => 6,
          1152  => 6,
          1153  => 6,
          1154  => 6,

          1155  => 5,
          1156  => 5,
          1157  => 5,
          1158  => 5,

          1159  => 5,
          1160  => 5,
          1161  => 5,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 3,
          1202  => 3,
          1203  => 3,

          1205  => 3,
          1206  => 3,
          1207  => 3,

          1209  => 3,
          1210  => 3,
          1211  => 3,

          1215  => 3,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 100,
          1252  => 100,
          1253  => 100,
          1254  => 100,

          1255  => 90,
          1256  => 90,
          1257  => 90,
          1258  => 90,

          1259  => 90,
          1260  => 90,
          1261  => 90,

          1271  => 60,

          1281  => 100,
          1282  => 100,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 5,
          1303  => 5,
          1304  => 5,

          1313  => 20,

          1321  => 15,
          1322  => 15,
          1323  => null,

          1329  => null,
          1330  => null,
          1331  => null,

        // Weapon Hardpoint > Rail Gun
          1351  => 1,
          1352  => 1,

          1362  => 3,

        // Weapon Hardpoint > Missile Rack
          1401  => 6,
          1402  => 6,
          1403  => 6,

          1405  => 8,
          1406  => 12,
          1407  => 12,

          1411  => 12,
          1412  => 12,
          1413  => 8,

        // Weapon Hardpoint > Mine Launcher
          1451  => 1,
          1452  => 3,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 1,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 12,

        // Weapon Hardpoint > Enzyme Missile Rack
          1872  => 8,
    ];
}