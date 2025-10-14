<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class GuardianModuleResistance extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Guardian Module Resistance';

    /**
     * List of categories
     */
    static protected $have          = [
        'Guardian FSD Booster'
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Guardian FSD Booster
          3831  => 0,
    ];
}