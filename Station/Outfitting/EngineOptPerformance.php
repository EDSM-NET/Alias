<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class EngineOptPerformance extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Engine Opt Performance';

    /**
     * List of categories
     */
    static protected $have          = [
        'Thrusters',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Thrusters
          3222  => 100,
    ];
}
