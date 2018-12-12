<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ScannerTimeToScan extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Scanner Time To Scan';
    static protected $lessIsGood        = true;

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
          2251  => 10,
          2252  => 10,
          2253  => 10,
          2254  => 10,
          2255  => 10,

        // Utility Mount > Frame Shift Wake Scanner
          2301  => 10,
          2302  => 10,
          2303  => 10,
          2304  => 10,
          2305  => 10,

        // Utility Mount > Kill Warrant Scanner
          2351  => 10,
          2352  => 10,
          2353  => 10,
          2354  => 10,
          2355  => 10,
    ];
}
