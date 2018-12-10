<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class BayFighters extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Fighters/bay';

    /**
     * List of categories
     */
    static protected $have          = [
        'Fighter Hangars',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Fighter Hangar
          5541  => 6,

          5551  => 8,

          5561  => 15,
    ];
}