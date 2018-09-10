<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Ammo extends Alias
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
          1253  => null,
          1254  => null,
          
          1255  => 2100,
          1256  => 2100,
          1257  => null,
          1258  => null,
          
          1259  => 2100,
          1260  => 2100,
        
        // Weapon Hardpoint > Plasma Accelerator
          1302  => 100,
          1303  => 100,
          1304  => 100,
        
        // Weapon Hardpoint > Rail Gun
          1351  => 30,
          1352  => 30,
        
        // Weapon Hardpoint > Missile Rack
          1401  => 6,
          1402  => 18,
          1405  => 16,
          1406  => 24,
    ];
}