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
        'Kill Warrant Scanners',
        'Manifest Scanners',
        'Wake Scanners',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Utility Mount > Cargo Scanner
          2251  => 15,
          2252  => 15,
          2253  => 15,
          2254  => 15,
          2255  => 15,

        // Utility Mount > Frame Shift Wake Scanner
          2301  => 15,
          2302  => 15,
          2303  => 15,
          2304  => 15,
          2305  => 15,

        // Utility Mount > Kill Warrant Scanner
          2351  => 15,
          2352  => 15,
          2353  => 15,
          2354  => 15,
          2355  => 15,
    ];
}
