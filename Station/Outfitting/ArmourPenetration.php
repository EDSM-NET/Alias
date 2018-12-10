<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ArmourPenetration extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Armour Penetration';

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
          1257  => 54,
    ];
}
