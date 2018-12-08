<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class EnginesRecharge extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Engines Recharge';

    /**
     * List of categories
     */
    static protected $have          = [
        'Power Distributor',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Power Distributor
          3535  => 1.9,

          3542  => 1.9,
          3545  => 2.5,

          3555  => 3.2,

          3565  => 4,
    ];
}
