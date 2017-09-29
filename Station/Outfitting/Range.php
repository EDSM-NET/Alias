<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Range extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Range';
    static protected $unit              = '%1$s km';
    static protected $unitException     = [
        4001  => '%1$s ls',
        4002  => '%1$s ls',
        4003  => '%1$s ls',
    ];
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Electronic Countermeasure',
        'Cargo Scanner',
        'Frame Shift Wake Scanner',
        'Kill Warrant Scanner',
        
        'Sensors',
        
        'Discovery Scanner', // ls
        'Hatch Breaker Limpet Controller',
        'Collector Limpet Controller',
        'Fuel Transfer Limpet Controller',
        'Prospector Limpet Controller',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Utility Mount > Electronic Countermeasure
          2100  => 3,
          
        // Utility Mount > Cargo Scanner
          2251  => 2,
          2252  => 2.5,
          2253  => 3,
          2254  => 3.5,
          2255  => 4,
          
        // Utility Mount > Frame Shift Wake Scanner
          2301  => 2,
          2302  => 2.5,
          2303  => 3,
          2304  => 3.5,
          2305  => 4,
          
        // Utility Mount > Kill Warrant Scanner
          2351  => 2,
          2352  => 2.5,
          2353  => 3,
          2354  => 3.5,
          2355  => 4,
        
        // Core Internal > Sensors
          3601  => 4,
          3602  => 4.5,
          3603  => 5,
          3604  => 5.5,
          3605  => 6,
        
          3611  => 4.16,
          3612  => 4.68,
          3613  => 5.2,
          3614  => 5.72,
          3615  => 6.24,
        
          3621  => 4.32,
          3622  => 4.86,
          3623  => 5.4,
          3624  => 5.94,
          3625  => 6.48,
        
          3631  => 4.48,
          3632  => 5.04,
          3633  => 5.6,
          3634  => 6.16,
          3635  => 6.72,
        
          3641  => 4.64,
          3642  => 5.22,
          3643  => 5.8,
          3644  => 6.38,
          3645  => 6.96,
        
          3651  => 4.8,
          3652  => 5.4,
          3653  => 6,
          3654  => 6.6,
          3655  => 7.2,
        
          3661  => 4.96,
          3662  => 5.58,
          3663  => 6.2,
          3664  => 6.82,
          3665  => 7.44,
        
          3671  => 5.12,
          3672  => 5.76,
          3673  => 6.4,
          3674  => 7.04,
          3675  => 7.68,
        
        // Optional Internal > Discovery Scanner
          4001  => 500,
          4002  => 1000,
          4003  => INF,
        
        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 1.5,
          4602  => 2,
          4603  => 2.5,
          4604  => 3,
          4605  => 3.5,
        
          4621  => 1.62,
          4622  => 2.16,
          4623  => 2.7,
          4624  => 3.24,
          4625  => 3.78,
        
          4641  => 1.98,
          4642  => 2.64,
          4643  => 3.3,
          4644  => 3.96,
          4645  => 4.62,
        
          4661  => 2.58,
          4662  => 3.44,
          4663  => 4.3,
          4664  => 5.16,
          4665  => 6.02,
        
        // Optional Internal > Collector Limpet Controller
          5001  => 0.8,
          5002  => 0.6,
          5003  => 1,
          5004  => 1.4,
          5005  => 1.2,
        
          5021  => 0.88,
          5022  => 0.66,
          5023  => 1.1,
          5024  => 1.54,
          5025  => 1.32,
        
          5041  => 1.04,
          5042  => 0.78,
          5043  => 1.3,
          5044  => 1.82,
          5045  => 1.56,
        
          5061  => 1.36,
          5062  => 1.02,
          5063  => 1.7,
          5064  => 2.38,
          5065  => 2.04,
        
        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 0.6,
          5102  => 0.8,
          5103  => 1,
          5104  => 1.2,
          5105  => 1.4,
        
          5121  => 0.66,
          5122  => 0.88,
          5123  => 1.1,
          5124  => 1.32,
          5125  => 1.54,
        
          5141  => 0.78,
          5142  => 1.04,
          5143  => 1.3,
          5144  => 1.56,
          5145  => 1.82,
        
          5161  => 1.02,
          5162  => 1.36,
          5163  => 1.7,
          5164  => 2.04,
          5165  => 2.38,
        
        // Optional Internal > Prospector Limpet Controller
          5201  => 3,
          5202  => 4,
          5203  => 5,
          5204  => 6,
          5205  => 7,
        
          5221  => 3.3,
          5222  => 4.4,
          5223  => 5.5,
          5224  => 6.6,
          5225  => 7.7,
        
          5241  => 3.9,
          5242  => 5.2,
          5243  => 6.5,
          5244  => 7.8,
          5245  => 9.1,
        
          5261  => 5.1,
          5262  => 6.8,
          5263  => 8.5,
          5264  => 10.2,
          5265  => 11.9,
    ];
}