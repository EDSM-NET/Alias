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
        'Multi-Cannon',
        'Plasma Accelerator',
        'Rail Gun',
        'Missile Rack',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Multi-Cannon
          1251  => 2100,
          1252  => 2100,

          1255  => 90,
          1256  => 90,

          1259  => 90,
          1260  => 90,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 100,
          1303  => 100,
          1304  => 100,

        // Weapon Hardpoint > Rail Gun
          1351  => 1,
          1352  => 1,

        // Weapon Hardpoint > Missile Rack
          1401  => 6,
          1402  => 6,
          1405  => 16,
          1406  => 24,
    ];
}