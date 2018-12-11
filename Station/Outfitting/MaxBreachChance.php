<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class MaxBreachChance extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Max Breach Chance';

    /**
     * List of categories
     */
    static protected $have          = [
        'Torpedoes',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Torpedo Pylon
          1551  => 100,
          1552  => 100,
          1553  => 100,
    ];
}
