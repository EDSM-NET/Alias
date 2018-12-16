<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class WeaponsRecharge extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Weapons Recharge';

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
          3501  => 1.2,
          3502  => 1.4,
          3503  => 1.5,
          3504  => 1.7,
          3505  => 1.8,

          3509  => null,

          3511  => 1.4,
          3512  => 1.6,
          3513  => 1.8,
          3514  => 2,
          3515  => 2.2,

          3519  => null,

          3521  => 1.8,
          3522  => 2.1,
          3523  => null,
          3524  => 2.5,
          3525  => 2.8,

          3529  => null,

          3531  => 2.3,
          3532  => 2.6,
          3533  => 2.9,
          3534  => 3.2,
          3535  => 3.5,

          3539  => null,

          3541  => 2.9,
          3542  => 3.2,
          3543  => 3.6,
          3544  => 4,
          3545  => 4.3,

          3549  => null,

          3551  => 3.4,
          3552  => 3.9,
          3553  => 4.3,
          3554  => 4.7,
          3555  => 5.2,

          3559  => null,

          3561  => 4.1,
          3562  => 4.6,
          3563  => 5.1,
          3564  => 5.6,
          3565  => 6.1,

          3569  => null,

          3571  => 4.8,
          3572  => 5.4,
          3573  => 6,
          3574  => 6.6,
          3575  => 7.2,

          3579  => null,
    ];
}
