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

    /**
     * List of categories
     */
    static protected $have          = [
        // Weapon Hardpoint
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

        // Weapon Hardpoint > Plasma Accelerator
          1302  => null,
          1303  => 6,
          1304  => null,

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

        // Utility Mount > Chaff Launcher
          2050  => 10,

        // Utility Mount > Heat Sink Launcher
          2150  => 10,

        // Utility Mount > Point Defence
          2200  => 0.4,
    ];
}
