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
          3500  => null, // Not in category
          3501  => 10,
          3502  => 11,
          3503  => 12,
          3504  => 13,
          3505  => 14,

          3509  => null,

          3511  => 12,
          3512  => 14,
          3513  => 15,
          3514  => 17,
          3515  => 18,

          3519  => null,

          3521  => 16,
          3522  => 18,
          3523  => 20,
          3524  => 22,
          3525  => 24,

          3529  => null,

          3531  => 22,
          3532  => 24,
          3533  => 27,
          3534  => 30,
          3535  => 32,

          3539  => null,

          3541  => 27,
          3542  => 31,
          3543  => 34,
          3544  => 37,
          3545  => 41,

          3549  => null,

          3551  => 34,
          3552  => 38,
          3553  => 42,
          3554  => 46,
          3555  => 50,

          3559  => null,

          3561  => 41,
          3562  => 46,
          3563  => 51,
          3564  => 56,
          3565  => 61,

          3569  => null,

          3571  => 48,
          3572  => 54,
          3573  => 60,
          3574  => 66,
          3575  => 72,

          3579  => null,
    ];
}
