<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class SystemsCapacity extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Systems Capacity';

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
          3501  => 8,
          3502  => 9,
          3503  => 10,
          3504  => 11,
          3505  => 12,

          3509  => null,

          3511  => null,
          3512  => 11,
          3513  => null,
          3514  => 14,
          3515  => 14,

          3519  => null,

          3521  => null,
          3522  => 14,
          3523  => null,
          3524  => 17,
          3525  => 18,

          3529  => null,

          3531  => 15,
          3532  => 17,
          3533  => 19,
          3534  => 21,
          3535  => 23,

          3539  => null,

          3541  => null,
          3542  => 22,
          3543  => 24,
          3544  => 26,
          3545  => 29,

          3549  => null,

          3551  => 23,
          3552  => 26,
          3553  => 29,
          3554  => 32,
          3555  => 35,

          3559  => null,

          3561  => 27,
          3562  => 31,
          3563  => 34,
          3564  => 37,
          3565  => 41,

          3569  => null,

          3571  => null,
          3572  => 36,
          3573  => 40,
          3574  => 44,
          3575  => 48,

          3579  => null,
    ];
}
