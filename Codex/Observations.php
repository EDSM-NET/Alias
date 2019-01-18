<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Codex;
use         EDSM\Alias;

class Observations extends Alias
{
    static protected $defaultName       = null;

    /**
     * List of names used in game
     */
    static protected $name  = [
        21139   => [
            'Winthin nebula types: Any.',
            'Locations found: Lagrange points.',
        ],

        22191   => [
            'In systems with star types: T.',
            'Locations found: Lagrange points, Rings, Belts.',
            'Not in systems with star types: W, WN, WNC, WC, WO.',
        ],

        22491   => [
            'In systems with star types: Y.',
            'In systems with planet types: Terrestrial Earth-Like, Terrestrial Water, Gas Giant with Water based Life, Water Giant with Water based Life, Class II Gas Giant, Water Giant.',
            'Locations found: Lagrange points, Rings, Belts.',
            'Not in systems with star types: W, WN, WNC, WC, WO.',

        ],
    ];
}