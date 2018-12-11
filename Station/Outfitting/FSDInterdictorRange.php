<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class FSDInterdictorRange extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'FSD Interdictor Range';

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
          4501  => 3,
          4502  => 4,
          4503  => 5,
          4504  => 6,
          4505  => 7,

          4511  => 6,
          4512  => 7,
          4513  => 8,
          4514  => 9,
          4515  => 10,

          4521  => 9,
          4522  => 10,
          4523  => 11,
          4524  => 12,
          4525  => 13,

          4531  => 12,
          4532  => 13,
          4533  => 14,
          4534  => 15,
          4535  => 16,
    ];
}
