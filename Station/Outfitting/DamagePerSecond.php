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
        'Pack-Hound Missile Rack',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 60,

    ];
}
