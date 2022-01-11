<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Bay extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Bay';

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
          5541  => 1,

          5551  => 2,

          5561  => 2,
    ];
}