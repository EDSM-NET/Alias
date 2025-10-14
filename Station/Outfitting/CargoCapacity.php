<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class CargoCapacity extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Cargo Capacity';
    static protected $unit              = '%1$s t';

    /**
     * List of categories
     */
    static protected $have          = [
        'Cargo Racks',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Cargo Rack
          4021  => 2,
          4022  => 4,
          4023  => 8,
          4024  => 16,
          4025  => 32,
          4026  => 64,
          4027  => 128,
          4028  => 256,

          4031  => 2,
          4032  => 1,
          4033  => 4,
          4034  => 16,
    ];
}