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
        // Weapon Hardpoint > Multi-Cannon
          1251  => 100,
          1252  => 100,

          1255  => 90,
          1256  => 90,
          1257  => 90,
          1258  => 90,

          1259  => 90,
          1260  => 90,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 5,
          1303  => 5,
          1304  => 5,

        // Weapon Hardpoint > Rail Gun
          1351  => 1,
          1352  => 1,

        // Weapon Hardpoint > Missile Rack
          1401  => 6,
          1402  => 6,
          1403  => 6,
          1405  => 8,
          1406  => 12,

        // Weapon Hardpoint > Mine Launcher
          1452  => 3,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 12,
    ];
}