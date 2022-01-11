<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Count extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Count';

    /**
     * List of categories
     */
    static protected $have          = [
        'Hatch Breaker Limpets',
        'Collection Limpets',
        'Fuel Transfer Limpets',
        'Prospector Limpets',
        'Passenger Cabins',
        'Planetary Vehicle Hangars',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 2,
          4602  => 1,
          4603  => 1,
          4604  => 2,
          4605  => 1,

          4621  => 4,
          4622  => 3,
          4623  => 3,
          4624  => 4,
          4625  => 3,

          4641  => 9,
          4642  => 6,
          4643  => 7,
          4644  => 9,
          4645  => 6,

          4661  => 18,
          4662  => 12,
          4663  => 15,
          4664  => 18,
          4665  => 12,

        // Optional Internal > Collector Limpet Controller
          5001  => 1,
          5002  => 1,
          5003  => 1,
          5004  => 1,
          5005  => 1,

          5021  => 2,
          5022  => 2,
          5023  => 2,
          5024  => 2,
          5025  => 2,

          5041  => 3,
          5042  => 3,
          5043  => 3,
          5044  => 3,
          5045  => 3,

          5061  => 4,
          5062  => 4,
          5063  => 4,
          5064  => 4,
          5065  => 4,

        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 1,
          5102  => 1,
          5103  => 1,
          5104  => 1,
          5105  => 1,

          5121  => 2,
          5122  => 2,
          5123  => 2,
          5124  => 2,
          5125  => 2,

          5141  => 4,
          5142  => 4,
          5143  => 4,
          5144  => 4,
          5145  => 4,

          5161  => 8,
          5162  => 8,
          5163  => 8,
          5164  => 8,
          5165  => 8,

        // Optional Internal > Prospector Limpet Controller
          5201  => 1,
          5202  => 1,
          5203  => 1,
          5204  => 1,
          5205  => 1,

          5221  => 2,
          5222  => 2,
          5223  => 2,
          5224  => 2,
          5225  => 2,

          5241  => 4,
          5242  => 4,
          5243  => 4,
          5244  => 4,
          5245  => 4,

          5261  => 8,
          5262  => 8,
          5263  => 8,
          5264  => 8,
          5265  => 8,

        // Optional Internal > Passenger Cabin
          5311  => 2,

          5321  => 4,
          5322  => 3,

          5331  => 8,
          5332  => 6,
          5333  => 3,

          5341  => 16,
          5342  => 10,
          5343  => 6,
          5344  => 4,

          5351  => 32,
          5352  => 16,
          5353  => 12,
          5354  => 8,

        // Optional Internal > Planetary Vehicle Hangar
          5411  => 1,
          5412  => 1,

          5431  => 2,
          5432  => 2,

          5451  => 4,
          5452  => 4,
    ];
}