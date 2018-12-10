<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DSS_RangeMult extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'DSS Range Mult';

    /**
     * List of categories
     */
    static protected $have          = [
        'Detailed Surface Scanner',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [


        // Optional Internal > Detailed Surface Scanner
          4011  => 0,
    ];
}
