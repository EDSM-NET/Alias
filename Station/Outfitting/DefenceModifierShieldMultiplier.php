<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DefenceModifierShieldMultiplier extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Defence Modifier Shield Multiplier';

    /**
     * List of categories
     */
    static protected $have          = [
        'Shield Boosters',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Utility Mount > Shield Booster
          2001  => 3.999996,
          2002  => 8.000004,
          2003  => 12,
          2004  => 15.999996,
          2005  => 20.000004,

    ];
}
