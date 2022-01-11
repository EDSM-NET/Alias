<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Duration extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Duration';
    static protected $unit              = '%1$s s';

    /**
     * List of categories
     */
    static protected $have          = [
        // Utility Mount
        'Manifest Scanners',
        'Wake Scanners',
        'Kill Warrant Scanners',

        // Core Internal
        'Environment Control',

        // Optional Internal
        'Hatch Breaker Limpets',
        'Collection Limpets',
        'Research Limpets',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Utility Mount > Cargo Scanner
          2251  => 10,
          2252  => 10,
          2253  => 10,
          2254  => 10,
          2255  => 10,

        // Utility Mount > Frame Shift Wake Scanner
          2301  => 10,
          2302  => 10,
          2303  => 10,
          2304  => 10,
          2305  => 10,

        // Utility Mount > Kill Warrant Scanner
          2351  => 10,
          2352  => 10,
          2353  => 10,
          2354  => 10,
          2355  => 10,

        // Core Internal > Life Support
          3401  => 300,
          3402  => 450,
          3403  => 600,
          3404  => 900,
          3405  => 1500,

          3411  => 300,
          3412  => 450,
          3413  => 600,
          3414  => 900,
          3415  => 1500,

          3421  => 300,
          3422  => 450,
          3423  => 600,
          3424  => 900,
          3425  => 1500,

          3431  => 300,
          3432  => 450,
          3433  => 600,
          3434  => 900,
          3435  => 1500,

          3441  => 300,
          3442  => 450,
          3443  => 600,
          3444  => 900,
          3445  => 1500,

          3451  => 300,
          3452  => 450,
          3453  => 600,
          3454  => 900,
          3455  => 1500,

          3461  => 300,
          3462  => 450,
          3463  => 600,
          3464  => 900,
          3465  => 1500,

          3471  => 300,
          3472  => 450,
          3473  => 600,
          3474  => 900,
          3475  => 1500,

        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 42,
          4602  => 36,
          4603  => 30,
          4604  => 24,
          4605  => 18,

          4621  => 36,
          4622  => 31,
          4623  => 26,
          4624  => 21,
          4625  => 16,

          4641  => 31,
          4642  => 26,
          4643  => 22,
          4644  => 18,
          4645  => 13,

          4661  => 25,
          4662  => 22,
          4663  => 18,
          4664  => 14,
          4665  => 11,

        // Optional Internal > Collector Limpet Controller
          5001  => 300,
          5002  => 600,
          5003  => 510,
          5004  => 420,
          5005  => 720,

          5021  => 300,
          5022  => 600,
          5023  => 510,
          5024  => 420,
          5025  => 720,

          5041  => 300,
          5042  => 600,
          5043  => 510,
          5044  => 420,
          5045  => 720,

          5061  => 300,
          5062  => 600,
          5063  => 510,
          5064  => 420,
          5065  => 720,

        // Optional Internal > Research Limpet Controller
          5701  => 300,
    ];
}