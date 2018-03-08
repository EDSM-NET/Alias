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
          1     =>  [
                        101,
                    ],
        
        // HARDPOINT - Burst Laser
          2     =>  [
                        201,
                    ],
        
        // HARDPOINT - Cannon
        
        // HARDPOINT - Fragment Cannon
        
        // HARDPOINT - Mine Launcher
        
        // HARDPOINT - Missile Rack
        
        // HARDPOINT - Multi-cannon
        
        // HARDPOINT - Plasma Accelerator
        
        // HARDPOINT - Pulse Laser
        
        // HARDPOINT - Rail Gun
        
        // HARDPOINT - Seeker Missile Rack
        
        // HARDPOINT - Torpedo Pylon
        
        // UTILITY MOUNT - Chaff Launcher
        
        // UTILITY MOUNT - Electronic Countermeasure
        
        // UTILITY MOUNT - Frame Shift Wake Scanner
        
        // UTILITY MOUNT - Heat Sink Launcher
        
        // UTILITY MOUNT - Kill Warrant Scanner
        
        // UTILITY MOUNT - Manifest Scanner
        
        // UTILITY MOUNT - Point Defence
        
        // UTILITY MOUNT - Shield Booster
        
        // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
        
        // OPTIONAL INTERNAL - Collector Limpet Controller
        
        // OPTIONAL INTERNAL - Detailed Surface Scanner
        
        // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
        
        // OPTIONAL INTERNAL - Fuel Scoop
        
        // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
        
        // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
        
        // OPTIONAL INTERNAL - Hull Reinforcement Package
        
        // OPTIONAL INTERNAL - Prospector Limpet Controller
        
        // OPTIONAL INTERNAL - Refinery
        
        // OPTIONAL INTERNAL - Shield Cell Bank
        
        // OPTIONAL INTERNAL - Shield Generator
        
        // CORE INTERNAL - Frame Shift Drive
        
        // CORE INTERNAL - Life Support
        
        // CORE INTERNAL - Power Distributor
        
        // CORE INTERNAL - Power Plant
        
        // CORE INTERNAL - Sensors
        
        // CORE INTERNAL - Thrusters
        
        // ARMOUR
    ];
}