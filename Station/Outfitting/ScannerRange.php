<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ScannerRange extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Scanner Range';

    /**
     * List of categories
     */
    static protected $have          = [
        'Manifest Scanners',
        'Wake Scanners',
        'Kill Warrant Scanners',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Utility Mount > Cargo Scanner
          2251  => 2000,
          2252  => 2500,
          2253  => 3000,
          2254  => 3500,
          2255  => 4000,

        // Utility Mount > Frame Shift Wake Scanner
          2301  => 2000,
          2302  => 2500,
          2303  => 3000,
          2304  => 3500,
          2305  => 4000,

        // Utility Mount > Kill Warrant Scanner
          2351  => 2000,
          2352  => 2500,
          2353  => 3000,
          2354  => 3500,
          2355  => 4000,
    ];
}
