<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DefenceModifierHealthAddition extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Defence Modifier Health Addition';

    /**
     * List of categories
     */
    static protected $have          = [
        'Hull Reinforcements',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [


        // Optional Internal > Hull Reinforcement Package
          4812  => 190,

          4822  => 260,

          4832  => 330,

          4842  => 390,
    ];
}