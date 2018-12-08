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
        'Multi-Cannon',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Multi-Cannon
          1251  => 2100,
          1252  => 2100,

          1255  => 2100,
          1256  => 2100,

          1259  => 2100,
          1260  => 2100,
    ];
}
