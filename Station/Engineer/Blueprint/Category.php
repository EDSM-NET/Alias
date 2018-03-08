<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Engineer\Blueprint;
use         EDSM\Alias;

class Category extends Alias
{
    use \EDSM\Alias\Station\Commodity\Category;
    
    /**
     * List of names
     */
    static protected $name  = [
          1     => 'HARDPOINT - Beam Laser',
          2     => 'HARDPOINT - Burst Laser',
          3     => 'HARDPOINT - Cannon',
          4     => 'HARDPOINT - Fragment Cannon',
          5     => 'HARDPOINT - Mine Launcher',
          6     => 'HARDPOINT - Missile Rack',
          7     => 'HARDPOINT - Multi-cannon',
          8     => 'HARDPOINT - Plasma Accelerator',
          9     => 'HARDPOINT - Pulse Laser',
         10     => 'HARDPOINT - Rail Gun',
         11     => 'HARDPOINT - Seeker Missile Rack',
         12     => 'HARDPOINT - Torpedo Pylon',
        
        101     => 'UTILITY MOUNT - Chaff Launcher',
        102     => 'UTILITY MOUNT - Electronic Countermeasure',
        103     => 'UTILITY MOUNT - Frame Shift Wake Scanner',
        104     => 'UTILITY MOUNT - Heat Sink Launcher',
        105     => 'UTILITY MOUNT - Kill Warrant Scanner',
        106     => 'UTILITY MOUNT - Manifest Scanner',
        107     => 'UTILITY MOUNT - Point Defence',
        108     => 'UTILITY MOUNT - Shield Booster',
        
        201     => 'OPTIONAL INTERNAL - Auto Field-Maintenance Unit',
        202     => 'OPTIONAL INTERNAL - Collector Limpet Controller',
        203     => 'OPTIONAL INTERNAL - Detailed Surface Scanner',
        204     => 'OPTIONAL INTERNAL - Frame Shift Drive Interdictor',
        205     => 'OPTIONAL INTERNAL - Fuel Scoop',
        206     => 'OPTIONAL INTERNAL - Fuel Transfer Limpet Controller',
        207     => 'OPTIONAL INTERNAL - Hatch Breaker Limpet Controller',
        208     => 'OPTIONAL INTERNAL - Hull Reinforcement Package',
        209     => 'OPTIONAL INTERNAL - Prospector Limpet Controller',
        210     => 'OPTIONAL INTERNAL - Refinery',
        211     => 'OPTIONAL INTERNAL - Shield Cell Bank',
        212     => 'OPTIONAL INTERNAL - Shield Generator',
        
        301     => 'CORE INTERNAL - Frame Shift Drive',
        302     => 'CORE INTERNAL - Life Support',
        303     => 'CORE INTERNAL - Power Distributor',
        304     => 'CORE INTERNAL - Power Plant',
        305     => 'CORE INTERNAL - Sensors',
        306     => 'CORE INTERNAL - Thrusters',
        
        401     => 'ARMOUR',
    ];
    
    /**
     * List of blueprints id in each categories
     */
    static protected $in    = [
        // HARDPOINT - Beam Laser
          1     => [101, 102, 103, 104, 105, 106, ],
        
        // HARDPOINT - Burst Laser
          2     => [201, 202, 203, 204, 205, 206, 207, 208, ],
        
        // HARDPOINT - Cannon
          3     => [301, 302, 303, 304, 305, 306, 307, 308, ],
        
        // HARDPOINT - Fragment Cannon
          4     => [401, 402, 403, 404, 405, 406, 407, ],
        
        // HARDPOINT - Mine Launcher
          5     => [501, 502, 503, 504, ],
        
        // HARDPOINT - Missile Rack
          6     => [601, 602, 603, 604, ],
        
        // HARDPOINT - Multi-cannon
          7     => [701, 702, 703, 704, 705, 706, 707, 708, ],
        
        // HARDPOINT - Plasma Accelerator
          8     => [801, 802, 803, 804, 805, 806, 807, 808, ],
        
        // HARDPOINT - Pulse Laser
          9     => [901, 902, 903, 904, 905, 906, 907, 908, ],
        
        // HARDPOINT - Rail Gun
         10     => [1001, 1002, 1003, 1004, 1005, ],
        
        // HARDPOINT - Seeker Missile Rack
         11     => [1101, 1102, 1103, 1104, ],
        
        // HARDPOINT - Torpedo Pylon
         12     => [1201, 1202, ],
        
        // UTILITY MOUNT - Chaff Launcher
        101     => [10101, 10102, 10103, 10104, ],
        
        // UTILITY MOUNT - Electronic Countermeasure
        102     => [10201, 10202, 10203, ],
        
        // UTILITY MOUNT - Frame Shift Wake Scanner
        103     => [10301, 10302, 10303, 10304, 10305, 10306, ],
        
        // UTILITY MOUNT - Heat Sink Launcher
        104     => [10401, 10402, 10403, 10404,],
        
        // UTILITY MOUNT - Kill Warrant Scanner
        105     => [10501, 10502, 10503, 10504, 10505, 10506, ],
        
        // UTILITY MOUNT - Manifest Scanner
        106     => [10601, 10602, 10603, 10604, 10605, 10606, ],
        
        // UTILITY MOUNT - Point Defence
        107     => [10701, 10702, 10703, 10704, ],
        
        // UTILITY MOUNT - Shield Booster
        108     => [10801, 10802, 10803, 10804, 10805, ],
        
        // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
        201     => [20101, ],
        
        // OPTIONAL INTERNAL - Collector Limpet Controller
        202     => [20201, 20202, 20203, ],
        
        // OPTIONAL INTERNAL - Detailed Surface Scanner
        203     => [20301, 20302, 20303, ],
        
        // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
        204     => [20401, 20402, ],
        
        // OPTIONAL INTERNAL - Fuel Scoop
        205     => [20501, ],
        
        // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
        206     => [20601, 20602, 20603, ],
        
        // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
        207     => [20701, 20702, 20703, ],
        
        // OPTIONAL INTERNAL - Hull Reinforcement Package
        208     => [20801, 20802, 20803, 20804, 20805, ],
        
        // OPTIONAL INTERNAL - Prospector Limpet Controller
        209     => [20901, 20902, 20903, ],
        
        // OPTIONAL INTERNAL - Refinery
        210     => [21001, ],
        
        // OPTIONAL INTERNAL - Shield Cell Bank
        211     => [21101, 21102, ],
        
        // OPTIONAL INTERNAL - Shield Generator
        212     => [21201, 21202, 21203, 21204, ],
        
        // CORE INTERNAL - Frame Shift Drive
        301     => [30101, 30102, 30103, ],
        
        // CORE INTERNAL - Life Support
        302     => [30201, 30202, 30203, ],
        
        // CORE INTERNAL - Power Distributor
        303     => [30301, 30302, 30303, 30304, 30305, 30306, ],
        
        // CORE INTERNAL - Power Plant
        304     => [30401, 30402, 30403],
        
        // CORE INTERNAL - Sensors
        305     => [30501, 30502, 30503],
        
        // CORE INTERNAL - Thrusters
        306     => [30601, 30602, 30603],
        
        // ARMOUR
        401     => [40101, 40102, 40103, 40104, 40105, ],
    ];
}