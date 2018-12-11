<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class FSDInterdictorFacingLimit extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'FSD Interdictor Facing Limit';

    /**
     * List of categories
     */
    static protected $have          = [
        'FSD Interdictors',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Frame Shift Drive Interdictor
          4501  => 50,
          4502  => 50,
          4503  => 50,
          4504  => 50,
          4505  => 50,

          4511  => 50,
          4512  => 50,
          4513  => 50,
          4514  => 50,
          4515  => 50,

          4521  => 50,
          4522  => 50,
          4523  => 50,
          4524  => 50,
          4525  => 50,

          4531  => 50,
          4532  => 50,
          4533  => 50,
          4534  => 50,
          4535  => 50,
    ];
}
