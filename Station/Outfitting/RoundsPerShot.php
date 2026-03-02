<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class RoundsPerShot extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Rounds per Shot';

    /**
     * List of categories
     */
    static protected $have          = [
        'Multi-Cannons',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Multi-Cannon
          1252  => 1,
    ];
}