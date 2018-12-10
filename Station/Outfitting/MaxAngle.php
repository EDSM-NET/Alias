<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class MaxAngle extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Max Angle';

    /**
     * List of categories
     */
    static protected $have          = [
        'Wake Scanners',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [


        // Utility Mount > Frame Shift Wake Scanner
          2305  => 15,
    ];
}
