<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class WeaponsCapacity extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Weapons Capacity';

    /**
     * List of categories
     */
    static protected $have          = [
        'Power Coupling',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Power Distributor
          3502  => 11,
          3505  => 14,

          3512  => 14,
          3515  => 18,

          3522  => 18,
          3525  => 24,

          3532  => 24,
          3533  => 27,
          3534  => 30,
          3535  => 32,

          3542  => 31,
          3545  => 41,

          3552  => 38,
          3554  => 46,
          3555  => 50,

          3562  => 46,
          3563  => 51,
          3564  => 56,
          3565  => 61,

          3572  => 54,
          3573  => 60,
          3575  => 72,
    ];
}
