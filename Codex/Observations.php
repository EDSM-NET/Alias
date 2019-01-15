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
        22191   => [
            'In systems with star types: T.',
            'Locations found: Lagrange points, Rings, Belts.',
            'Not in systems with star types: W, WN, WNC, WC, WO.',
        ]
    ];
}