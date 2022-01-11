<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Range extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Range';
    static protected $unit              = '%1$s m';
    static protected $unitException     = [
        4001  => '%1$s ls',
        4002  => '%1$s ls',
        4003  => '%1$s ls',
    ];

    /**
     * List of categories
     */
    static protected $have          = [
        // Utility Mount
        'ECMs',

        // Core Internal
        'Sensor Suite',

        // Optional Internal
        'Stellar Body Scanners', // ls
        'Hatch Breaker Limpets',
        'Collection Limpets',
        'Fuel Transfer Limpets',
        'Prospector Limpets',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Utility Mount > Electronic Countermeasure
          2100  => 3000,

        // Core Internal > Sensors
          3601  => 4000,
          3602  => 4500,
          3603  => 5000,
          3604  => 5500,
          3605  => 6000,

          3611  => 4160,
          3612  => 4680,
          3613  => 5200,
          3614  => 5720,
          3615  => 6240,

          3621  => 4320,
          3622  => 4860,
          3623  => 5400,
          3624  => 5940,
          3625  => 6480,

          3631  => 4480,
          3632  => 5040,
          3633  => 5600,
          3634  => 6160,
          3635  => 6720,

          3641  => 4640,
          3642  => 5220,
          3643  => 5800,
          3644  => 6380,
          3645  => 6960,

          3651  => 4800,
          3652  => 5400,
          3653  => 6000,
          3654  => 6600,
          3655  => 7200,

          3661  => 4960,
          3662  => 5580,
          3663  => 6200,
          3664  => 6820,
          3665  => 7440,

          3671  => 5120,
          3672  => 5760,
          3673  => 6400,
          3674  => 7040,
          3675  => 7680,

        // Optional Internal > Discovery Scanner
          4001  => 5000,
          4002  => 10000,
          4003  => INF,

        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 1500,
          4602  => 2000,
          4603  => 2500,
          4604  => 3000,
          4605  => 3500,

          4621  => 1620,
          4622  => 2160,
          4623  => 2700,
          4624  => 3240,
          4625  => 3780,

          4641  => 1980,
          4642  => 2640,
          4643  => 3300,
          4644  => 3960,
          4645  => 4620,

          4661  => 2580,
          4662  => 3440,
          4663  => 4300,
          4664  => 5160,
          4665  => 6020,

        // Optional Internal > Collector Limpet Controller
          5001  => 800,
          5002  => 600,
          5003  => 1000,
          5004  => 1400,
          5005  => 1200,

          5021  => 880,
          5022  => 660,
          5023  => 1100,
          5024  => 1540,
          5025  => 1320,

          5041  => 1040,
          5042  => 780,
          5043  => 1300,
          5044  => 1820,
          5045  => 1560,

          5061  => 1360,
          5062  => 1020,
          5063  => 1700,
          5064  => 2380,
          5065  => 2040,

        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 600,
          5102  => 800,
          5103  => 1000,
          5104  => 1200,
          5105  => 1400,

          5121  => 660,
          5122  => 880,
          5123  => 1100,
          5124  => 1320,
          5125  => 1540,

          5141  => 780,
          5142  => 1040,
          5143  => 1300,
          5144  => 1560,
          5145  => 1820,

          5161  => 1020,
          5162  => 1360,
          5163  => 1700,
          5164  => 2040,
          5165  => 2380,

        // Optional Internal > Prospector Limpet Controller
          5201  => 3000,
          5202  => 4000,
          5203  => 5000,
          5204  => 6000,
          5205  => 7000,

          5221  => 3300,
          5222  => 4400,
          5223  => 5500,
          5224  => 6600,
          5225  => 7700,

          5241  => 3900,
          5242  => 5200,
          5243  => 6500,
          5244  => 7800,
          5245  => 9100,

          5261  => 5100,
          5262  => 6800,
          5263  => 8500,
          5264  => 10200,
          5265  => 11900,
    ];
}