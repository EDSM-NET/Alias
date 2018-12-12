<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DSS_PatchRadius extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'DSS Patch Radius';

    /**
     * List of categories
     */
    static protected $have          = [
        'Surface Scanners',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [


        // Optional Internal > Detailed Surface Scanner
          4011  => 20,
    ];
}
