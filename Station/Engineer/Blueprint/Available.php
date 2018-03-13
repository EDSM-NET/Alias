<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Engineer\Blueprint;
use         EDSM\Alias;

class Available extends Alias
{
    /**
     * List of available blueprint/grades
     */
    static protected $name  = [
        // Hera Tani
         1      => [
            // OPTIONAL INTERNAL - Detailed Surface Scanner
            20301   => [1, 2, 3, 4, 5],         // Fast scan
            20302   => [1, 2, 3, 4, 5],         // Long range
            20303   => [1, 2, 3, 4, 5],         // Wide angle
            
            // CORE INTERNAL - Power Distributor
            30301   => [1, 2, 3,     ],         // Charge enhanced
            30302   => [1, 2, 3,     ],         // Engine focused
            30303   => [1, 2, 3,     ],         // High charge capacity
            30304   => [1, 2, 3,     ],         // Shielded
            30305   => [1, 2, 3,     ],         // System focused
            30306   => [1, 2, 3,     ],         // Weapon focused
            
            // CORE INTERNAL - Power Plant
            30401   => [1, 2, 3, 4, 5],         // Armoured
            30402   => [1, 2, 3, 4, 5],         // Low emissions
            30403   => [1, 2, 3, 4, 5],         // Overcharged
            
            // CORE INTERNAL - Sensors
            30501   => [1, 2, 3,     ],         // Lightweight
            30502   => [1, 2, 3,     ],         // Long range
            30503   => [1, 2, 3,     ],         // Wide angle
        ],
        
        // Liz Ryder
         2      => [
            // HARDPOINT - Mine Launcher
            501     => [1, 2, 3,     ],         // High capacity
            502     => [1, 2, 3,     ],         // Lightweight
            503     => [1, 2, 3,     ],         // 'Rapid fire
            504     => [1, 2, 3,     ],         // Sturdy

            // HARDPOINT - Seeker Missile Rack
            1101    => [1, 2, 3, 4, 5],         // High capacity
            1102    => [1, 2, 3, 4, 5],         // Lightweight
            1103    => [1, 2, 3, 4, 5],         // Rapid fire
            1104    => [1, 2, 3, 4, 5],         // Sturdy
    
            // HARDPOINT - Torpedo Pylon
            1201    => [1, 2, 3, 4, 5],         // Lightweight
            1202    => [1, 2, 3, 4, 5],         // Sturdy
            
            // OPTIONAL INTERNAL - Hull Reinforcement Package
            20801   => [1,           ],         // Blast resistant
            20802   => [1,           ],         // Heavy duty
            20803   => [1,           ],         // Kinetic resistant
            20804   => [1,           ],         // Lightweight
            20805   => [1,           ],         // Thermal resistant
            
            // ARMOUR
            40101   => [1,           ],         // Blast resistant
            40102   => [1,           ],         // Heavy duty
            40103   => [1,           ],         // Kinetic resistant
            40104   => [1,           ],         // Lightweight
            40105   => [1,           ],         // Thermal resistant
        ],
        
        // Broo Tarquin
         3      => [
            // HARDPOINT - Beam Laser
            101     => [1, 2, 3, 4, 5],         // Efficient
            102     => [1, 2, 3, 4, 5],         // Lightweight
            103     => [1, 2, 3, 4, 5],         // Long range
            104     => [1, 2, 3, 4, 5],         // Overcharged
            105     => [1, 2, 3, 4, 5],         // Short range
            106     => [1, 2, 3, 4, 5],         // Sturdy
            
            // HARDPOINT - Burst Laser
            201     => [1, 2, 3, 4, 5],         // Efficient
            202     => [1, 2, 3, 4, 5],         // Focused
            203     => [1, 2, 3, 4, 5],         // Lightweight
            204     => [1, 2, 3, 4, 5],         // Long range
            205     => [1, 2, 3, 4, 5],         // Overcharged
            206     => [1, 2, 3, 4, 5],         // Rapid fire
            207     => [1, 2, 3, 4, 5],         // Short range
            208     => [1, 2, 3, 4, 5],         // Sturdy
            
            // HARDPOINT - Pulse Laser
            901     => [1, 2, 3, 4, 5],         // Efficient
            902     => [1, 2, 3, 4, 5],         // Focused
            903     => [1, 2, 3, 4, 5],         // Lightweight
            904     => [1, 2, 3, 4, 5],         // Long range
            905     => [1, 2, 3, 4, 5],         // Overcharged
            906     => [1, 2, 3, 4, 5],         // Rapid fire
            907     => [1, 2, 3, 4, 5],         // Short range
            908     => [1, 2, 3, 4, 5],         // Sturdy
        ],
        
        // Tod 'The Blaster' McQuinn
         4      => [
            // HARDPOINT - Cannon
            301     => [1, 2,        ],         // Efficient
            302     => [1, 2,        ],         // High capacity
            303     => [1, 2,        ],         // Lightweight
            304     => [1, 2,        ],         // Long range
            305     => [1, 2,        ],         // Overcharged
            306     => [1, 2,        ],         // Rapid fire
            307     => [1, 2,        ],         // Short range
            308     => [1, 2,        ],         // Sturdy
            
            // HARDPOINT - Fragment Cannon
            401     => [1, 2, 3,     ],         // Double shot
            402     => [1, 2, 3,     ],         // Efficient
            403     => [1, 2, 3,     ],         // High capacity
            404     => [1, 2, 3,     ],         // Lightweight
            405     => [1, 2, 3,     ],         // Overcharged
            406     => [1, 2, 3,     ],         // Rapid fire
            407     => [1, 2, 3,     ],         // Sturdy
            
            // HARDPOINT - Multi-cannon
            701     => [1, 2, 3, 4, 5],         // Efficient
            702     => [1, 2, 3, 4, 5],         // High capacity
            703     => [1, 2, 3, 4, 5],         // Lightweight
            704     => [1, 2, 3, 4, 5],         // Long range
            705     => [1, 2, 3, 4, 5],         // Overcharged
            706     => [1, 2, 3, 4, 5],         // Rapid fire
            707     => [1, 2, 3, 4, 5],         // Short range
            708     => [1, 2, 3, 4, 5],         // Sturdy
            
            // HARDPOINT - Rail Gun
            1001    => [1, 2, 3, 4, 5],         // High capacity
            1002    => [1, 2, 3, 4, 5],         // Lightweight
            1003    => [1, 2, 3, 4, 5],         // Long range
            1004    => [1, 2, 3, 4, 5],         // Short range
            1005    => [1, 2, 3, 4, 5],         // Sturdy
        ],
        
        // Selene Jean
         5      => [
            // OPTIONAL INTERNAL - Hull Reinforcement Package
            20801   => [1, 2, 3, 4, 5],         // Blast resistant
            20802   => [1, 2, 3, 4, 5],         // Heavy duty
            20803   => [1, 2, 3, 4, 5],         // Kinetic resistant
            20804   => [1, 2, 3, 4, 5],         // Lightweight
            20805   => [1, 2, 3, 4, 5],         // Thermal resistant
            
            // ARMOUR
            40101   => [1, 2, 3, 4, 5],         // Blast resistant
            40102   => [1, 2, 3, 4, 5],         // Heavy duty
            40103   => [1, 2, 3, 4, 5],         // Kinetic resistant
            40104   => [1, 2, 3, 4, 5],         // Lightweight
            40105   => [1, 2, 3, 4, 5],         // Thermal resistant
        ],
        
        // Felicity Farseer
         6      => [
            // UTILITY MOUNT - Shield Booster
            10801   => [1,           ],         // Blast resistant
            10802   => [1,           ],         // Heavy duty
            10803   => [1,           ],         // Kinetic resistant
            10804   => [1,           ],         // Resistance augmented
            10805   => [1,           ],         // Thermal resistant
        
            // OPTIONAL INTERNAL - Detailed Surface Scanner
            20301   => [1, 2, 3,     ],         // Fast scan
            20302   => [1, 2, 3,     ],         // Long range
            20303   => [1, 2, 3,     ],         // Wide angle
        
            // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
            20401   => [1,           ],         // Expanded capture arc
            20402   => [1,           ],         // Long range
            
            // CORE INTERNAL - Frame Shift Drive
            30101   => [1, 2, 3, 4, 5],         // Faster boot sequence
            30102   => [1, 2, 3, 4, 5],         // Increased range
            30103   => [1, 2, 3, 4, 5],         // Shielded
            
            // CORE INTERNAL - Power Plant
            30401   => [1,           ],         // Armoured
            30402   => [1,           ],         // Low emissions
            30403   => [1,           ],         // Overcharged
            
            // CORE INTERNAL - Sensors
            30501   => [1, 2, 3,     ],         // Lightweight
            30502   => [1, 2, 3,     ],         // Long range
            30503   => [1, 2, 3,     ],         // Wide angle
            
            // CORE INTERNAL - Thrusters
            30601   => [1, 2, 3,     ],         // Clean
            30602   => [1, 2, 3,     ],         // Dirty
            30603   => [1, 2, 3,     ],         // Reinforced
        ],
        
        // Marco Qwent
         7      => [
            // CORE INTERNAL - Power Distributor
            30301   => [1, 2, 3,     ],         // Charge enhanced
            30302   => [1, 2, 3,     ],         // Engine focused
            30303   => [1, 2, 3,     ],         // High charge capacity
            30304   => [1, 2, 3,     ],         // Shielded
            30305   => [1, 2, 3,     ],         // System focused
            30306   => [1, 2, 3,     ],         // Weapon focused
            
            // CORE INTERNAL - Power Plant
            30401   => [1, 2, 3, 4,  ],         // Armoured
            30402   => [1, 2, 3, 4,  ],         // Low emissions
            30403   => [1, 2, 3, 4,  ],         // Overcharged
        ],
        
        // Professor Palin
         8      => [
            // CORE INTERNAL - Frame Shift Drive
            30101   => [1, 2, 3,     ],         // Faster boot sequence
            30102   => [1, 2, 3,     ],         // Increased range
            30103   => [1, 2, 3,     ],         // Shielded
            
            // CORE INTERNAL - Thrusters
            30601   => [1, 2, 3, 4, 5],         // Clean
            30602   => [1, 2, 3, 4, 5],         // Dirty
            30603   => [1, 2, 3, 4, 5],         // Reinforced
        ],
        
        // Didi Vatermann
         9      => [
            // UTILITY MOUNT - Shield Booster
            10801   => [1, 2, 3, 4, 5],         // Blast resistant
            10802   => [1, 2, 3, 4, 5],         // Heavy duty
            10803   => [1, 2, 3, 4, 5],         // Kinetic resistant
            10804   => [1, 2, 3, 4, 5],         // Resistance augmented
            10805   => [1, 2, 3, 4, 5],         // Thermal resistant
            
            // OPTIONAL INTERNAL - Shield Generator
            21201   => [1, 2, 3,     ],         // Enhanced low power
            21202   => [1, 2, 3,     ],         // Kinetic resistant
            21203   => [1, 2, 3,     ],         // Reinforced
            21204   => [1, 2, 3,     ],         // Thermal resistant
        ],
        
        // The Dweller
        10      => [
            // HARDPOINT - Beam Laser
            101     => [1, 2, 3,     ],         // Efficient
            102     => [1, 2, 3,     ],         // Lightweight
            103     => [1, 2, 3,     ],         // Long range
            104     => [1, 2, 3,     ],         // Overcharged
            105     => [1, 2, 3,     ],         // Short range
            106     => [1, 2, 3,     ],         // Sturdy
            
            // HARDPOINT - Burst Laser
            201     => [1, 2, 3,     ],         // Efficient
            202     => [1, 2, 3,     ],         // Focused
            203     => [1, 2, 3,     ],         // Lightweight
            204     => [1, 2, 3,     ],         // Long range
            205     => [1, 2, 3,     ],         // Overcharged
            206     => [1, 2, 3,     ],         // Rapid fire
            207     => [1, 2, 3,     ],         // Short range
            208     => [1, 2, 3,     ],         // Sturdy
            
            // HARDPOINT - Pulse Laser
            901     => [1, 2, 3, 4,  ],         // Efficient
            902     => [1, 2, 3, 4,  ],         // Focused
            903     => [1, 2, 3, 4,  ],         // Lightweight
            904     => [1, 2, 3, 4,  ],         // Long range
            905     => [1, 2, 3, 4,  ],         // Overcharged
            906     => [1, 2, 3, 4,  ],         // Rapid fire
            907     => [1, 2, 3, 4,  ],         // Short range
            908     => [1, 2, 3, 4,  ],         // Sturdy
            
            // CORE INTERNAL - Power Distributor
            30301   => [1, 2, 3, 4, 5],         // Charge enhanced
            30302   => [1, 2, 3, 4, 5],         // Engine focused
            30303   => [1, 2, 3, 4, 5],         // High charge capacity
            30304   => [1, 2, 3, 4, 5],         // Shielded
            30305   => [1, 2, 3, 4, 5],         // System focused
            30306   => [1, 2, 3, 4, 5],         // Weapon focused
        ],
        
        // Colonel Bris Dekker
        11      => [
            // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
            20401   => [1, 2, 3, 4,  ],         // Expanded capture arc
            20402   => [1, 2, 3, 4,  ],         // Long range
            
            // CORE INTERNAL - Frame Shift Drive
            30101   => [1, 2, 3,     ],         // Faster boot sequence
            30102   => [1, 2, 3,     ],         // Increased range
            30103   => [1, 2, 3,     ],         // Shielded
        ],
        
        // Elvira Martuuk
        12      => [
            // OPTIONAL INTERNAL - Shield Cell Bank
            21101   => [1            ],         // Rapid charge
            21102   => [1            ],         // Specialised
            
            // OPTIONAL INTERNAL - Shield Generator
            21201   => [1, 2, 3,     ],         // Enhanced low power
            21202   => [1, 2, 3,     ],         // Kinetic resistant
            21203   => [1, 2, 3,     ],         // Reinforced
            21204   => [1, 2, 3,     ],         // Thermal resistant
            
            // CORE INTERNAL - Frame Shift Drive
            30101   => [1, 2, 3, 4, 5],         // Faster boot sequence
            30102   => [1, 2, 3, 4, 5],         // Increased range
            30103   => [1, 2, 3, 4, 5],         // Shielded
        
            // CORE INTERNAL - Thrusters
            30601   => [1, 2,        ],         // Clean
            30602   => [1, 2,        ],         // Dirty
            30603   => [1, 2,        ],         // Reinforced
        ],
        
        // Lori Jameson
        13      => [
            // UTILITY MOUNT - Frame Shift Wake Scanner
            10301   => [1, 2, 3,     ],         // Fast scan
            10302   => [1, 2, 3,     ],         // Lightweight
            10303   => [1, 2, 3,     ],         // Long range
            10304   => [1, 2, 3,     ],         // Reinforced
            10305   => [1, 2, 3,     ],         // Shielded
            10306   => [1, 2, 3,     ],         // Wide angle
            
            // UTILITY MOUNT - Kill Warrant Scanner
            10501   => [1, 2, 3,     ],         // Fast scan
            10502   => [1, 2, 3,     ],         // Lightweight
            10503   => [1, 2, 3,     ],         // Long range
            10504   => [1, 2, 3,     ],         // Reinforced
            10505   => [1, 2, 3,     ],         // Shielded
            10506   => [1, 2, 3,     ],         // Wide angle
            
            // UTILITY MOUNT - Manifest Scanner
            10601   => [1, 2, 3,     ],         // Fast scan
            10602   => [1, 2, 3,     ],         // Lightweight
            10603   => [1, 2, 3,     ],         // Long range
            10604   => [1, 2, 3,     ],         // Reinforced
            10605   => [1, 2, 3,     ],         // Shielded
            10606   => [1, 2, 3,     ],         // Wide angle
            
            // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
            20101   => [1, 2, 3, 4,  ],         // Shielded
            
            // OPTIONAL INTERNAL - Detailed Surface Scanner
            20301   => [1, 2, 3, 4, 5],         // Fast scan
            20302   => [1, 2, 3, 4, 5],         // Long range
            20303   => [1, 2, 3, 4, 5],         // Wide angle
            
            // OPTIONAL INTERNAL - Fuel Scoop
            20501   => [1, 2, 3, 4,  ],         // Shielded
            
            // OPTIONAL INTERNAL - Refinery
            21001   => [1, 2, 3, 4,  ],         // Shielded
            
            // OPTIONAL INTERNAL - Shield Cell Bank
            21101   => [1, 2, 3,     ],         // Rapid charge
            21102   => [1, 2, 3,     ],         // Specialised
            
            // CORE INTERNAL - Life Support
            30201   => [1, 2, 3, 4,  ],         // Lightweight
            30202   => [1, 2, 3, 4,  ],         // Reinforced
            30203   => [1, 2, 3, 4,  ],         // Shielded
        ],
        
        // Juri Ishmaak
        14      => [
            // UTILITY MOUNT - Frame Shift Wake Scanner
            10301   => [1, 2, 3,     ],         // Fast scan
            10302   => [1, 2, 3,     ],         // Lightweight
            10303   => [1, 2, 3,     ],         // Long range
            10304   => [1, 2, 3,     ],         // Reinforced
            10305   => [1, 2, 3,     ],         // Shielded
            10306   => [1, 2, 3,     ],         // Wide angle
            
            // UTILITY MOUNT - Kill Warrant Scanner
            10501   => [1, 2, 3,     ],         // Fast scan
            10502   => [1, 2, 3,     ],         // Lightweight
            10503   => [1, 2, 3,     ],         // Long range
            10504   => [1, 2, 3,     ],         // Reinforced
            10505   => [1, 2, 3,     ],         // Shielded
            10506   => [1, 2, 3,     ],         // Wide angle
            
            // UTILITY MOUNT - Manifest Scanner
            10601   => [1, 2, 3,     ],         // Fast scan
            10602   => [1, 2, 3,     ],         // Lightweight
            10603   => [1, 2, 3,     ],         // Long range
            10604   => [1, 2, 3,     ],         // Reinforced
            10605   => [1, 2, 3,     ],         // Shielded
            10606   => [1, 2, 3,     ],         // Wide angle
            
            // OPTIONAL INTERNAL - Detailed Surface Scanner
            20301   => [1, 2, 3, 4, 5],         // Fast scan
            20302   => [1, 2, 3, 4, 5],         // Long range
            20303   => [1, 2, 3, 4, 5],         // Wide angle
            
            // CORE INTERNAL - Sensors
            30501   => [1, 2, 3, 4, 5],         // Lightweight
            30502   => [1, 2, 3, 4, 5],         // Long range
            30503   => [1, 2, 3, 4, 5],         // Wide angle
    
            // HARDPOINT - Mine Launcher
            501     => [1, 2, 3, 4, 5],         // High capacity
            502     => [1, 2, 3, 4, 5],         // Lightweight
            503     => [1, 2, 3, 4, 5],         // 'Rapid fire
            504     => [1, 2, 3, 4, 5],         // Sturdy

            // HARDPOINT - Seeker Missile Rack
            1101    => [1, 2, 3,     ],         // High capacity
            1102    => [1, 2, 3,     ],         // Lightweight
            1103    => [1, 2, 3,     ],         // Rapid fire
            1104    => [1, 2, 3,     ],         // Sturdy
    
            // HARDPOINT - Torpedo Pylon
            1201    => [1, 2, 3,     ],         // Lightweight
            1202    => [1, 2, 3,     ],         // Sturdy
        ],
        
        // Zacariah Nemo
        15      => [
            // HARDPOINT - Fragment Cannon
            401     => [1, 2, 3, 4, 5],         // Double shot
            402     => [1, 2, 3, 4, 5],         // Efficient
            403     => [1, 2, 3, 4, 5],         // High capacity
            404     => [1, 2, 3, 4, 5],         // Lightweight
            405     => [1, 2, 3, 4, 5],         // Overcharged
            406     => [1, 2, 3, 4, 5],         // Rapid fire
            407     => [1, 2, 3, 4, 5],         // Sturdy
            
            // HARDPOINT - Multi-cannon
            701     => [1, 2, 3,     ],         // Efficient
            702     => [1, 2, 3,     ],         // High capacity
            703     => [1, 2, 3,     ],         // Lightweight
            704     => [1, 2, 3,     ],         // Long range
            705     => [1, 2, 3,     ],         // Overcharged
            706     => [1, 2, 3,     ],         // Rapid fire
            707     => [1, 2, 3,     ],         // Short range
            708     => [1, 2, 3,     ],         // Sturdy

            // HARDPOINT - Plasma Accelerator
            801     => [1, 2,        ],         // Efficient
            802     => [1, 2,        ],         // Focused
            803     => [1, 2,        ],         // Lightweight
            804     => [1, 2,        ],         // Long range
            805     => [1, 2,        ],         // Overcharged
            806     => [1, 2,        ],         // Rapid fire
            807     => [1, 2,        ],         // Short range
            808     => [1, 2,        ],         // Sturdy
        ],
        
        // The Sarge
        16      => [
            // HARDPOINT - Cannon
            301     => [1, 2, 3, 4, 5],         // Efficient
            302     => [1, 2, 3, 4, 5],         // High capacity
            303     => [1, 2, 3, 4, 5],         // Lightweight
            304     => [1, 2, 3, 4, 5],         // Long range
            305     => [1, 2, 3, 4, 5],         // Overcharged
            306     => [1, 2, 3, 4, 5],         // Rapid fire
            307     => [1, 2, 3, 4, 5],         // Short range
            308     => [1, 2, 3, 4, 5],         // Sturdy
            
            // HARDPOINT - Rail Gun
            1001    => [1, 2, 3,     ],         // High capacity
            1002    => [1, 2, 3,     ],         // Lightweight
            1003    => [1, 2, 3,     ],         // Long range
            1004    => [1, 2, 3,     ],         // Short range
            1005    => [1, 2, 3,     ],         // Sturdy
            
            // OPTIONAL INTERNAL - Collector Limpet Controller
            20201   => [1, 2, 3, 4, 5],         // Lightweight
            20202   => [1, 2, 3, 4, 5],         // Reinforced
            20203   => [1, 2, 3, 4, 5],         // Shielded
                    
            // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
            20601   => [1, 2, 3, 4, 5],         // Lightweight
            20602   => [1, 2, 3, 4, 5],         // Reinforced
            20603   => [1, 2, 3, 4, 5],         // Shielded
            
            // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
            20701   => [1, 2, 3, 4, 5],         // Lightweight
            20702   => [1, 2, 3, 4, 5],         // Reinforced
            20703   => [1, 2, 3, 4, 5],         // Shielded
            
            // OPTIONAL INTERNAL - Prospector Limpet Controller
            20901   => [1, 2, 3, 4, 5],         // Lightweight
            20902   => [1, 2, 3, 4, 5],         // Reinforced
            20903   => [1, 2, 3, 4, 5],         // Shielded
        ],
        
        // Lei Cheung
        17      => [
            // OPTIONAL INTERNAL - Detailed Surface Scanner
            20301   => [1, 2, 3, 4, 5],         // Fast scan
            20302   => [1, 2, 3, 4, 5],         // Long range
            20303   => [1, 2, 3, 4, 5],         // Wide angle
            
            // CORE INTERNAL - Sensors
            30501   => [1, 2, 3, 4, 5],         // Lightweight
            30502   => [1, 2, 3, 4, 5],         // Long range
            30503   => [1, 2, 3, 4, 5],         // Wide angle
            
            // UTILITY MOUNT - Shield Booster
            10801   => [1, 2, 3,     ],         // Blast resistant
            10802   => [1, 2, 3,     ],         // Heavy duty
            10803   => [1, 2, 3,     ],         // Kinetic resistant
            10804   => [1, 2, 3,     ],         // Resistance augmented
            10805   => [1, 2, 3,     ],         // Thermal resistant
            
            // OPTIONAL INTERNAL - Shield Generator
            21201   => [1, 2, 3, 4, 5],         // Enhanced low power
            21202   => [1, 2, 3, 4, 5],         // Kinetic resistant
            21203   => [1, 2, 3, 4, 5],         // Reinforced
            21204   => [1, 2, 3, 4, 5],         // Thermal resistant
        ],
        
        // Ram Tah
        18      => [
            // UTILITY MOUNT - Chaff Launcher
            10101   => [1,           ],         // Ammo capacity
            10102   => [1, 2, 3, 4, 5],         // Lightweight
            10103   => [1, 2, 3, 4, 5],         // Reinforced
            10104   => [1, 2, 3, 4, 5],         // Shielded
            
            // UTILITY MOUNT - Electronic Countermeasure
            10201   => [1, 2, 3, 4, 5],         // Lightweight
            10202   => [1, 2, 3, 4, 5],         // Reinforced
            10203   => [1, 2, 3, 4, 5],         // Shielded
            
            // UTILITY MOUNT - Heat Sink Launcher
            10401   => [1,           ],         // Ammo capacity
            10402   => [1, 2, 3, 4, 5],         // Lightweight
            10403   => [1, 2, 3, 4, 5],         // 'Reinforced
            10404   => [1, 2, 3, 4, 5],         // Shielded
            
            // UTILITY MOUNT - Point Defence
            10701   => [1,           ],         // Ammo capacity
            10702   => [1, 2, 3, 4, 5],         // Lightweight
            10703   => [1, 2, 3, 4, 5],         // Reinforced
            10704   => [1, 2, 3, 4, 5],         // Shielded
            
            // OPTIONAL INTERNAL - Collector Limpet Controller
            20201   => [1, 2, 3, 4,  ],         // Lightweight
            20202   => [1, 2, 3, 4,  ],         // Reinforced
            20203   => [1, 2, 3, 4,  ],         // Shielded
                    
            // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
            20601   => [1, 2, 3, 4,  ],         // Lightweight
            20602   => [1, 2, 3, 4,  ],         // Reinforced
            20603   => [1, 2, 3, 4,  ],         // Shielded
            
            // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
            20701   => [1, 2, 3,     ],         // Lightweight
            20702   => [1, 2, 3,     ],         // Reinforced
            20703   => [1, 2, 3,     ],         // Shielded
            
            // OPTIONAL INTERNAL - Prospector Limpet Controller
            20901   => [1, 2, 3, 4,  ],         // Lightweight
            20902   => [1, 2, 3, 4,  ],         // Reinforced
            20903   => [1, 2, 3, 4,  ],         // Shielded
        ],
        
        // Bill Turner
        19      => [
            // HARDPOINT - Plasma Accelerator
            801     => [1, 2, 3, 4, 5],         // Efficient
            802     => [1, 2, 3, 4, 5],         // Focused
            803     => [1, 2, 3, 4, 5],         // Lightweight
            804     => [1, 2, 3, 4, 5],         // Long range
            805     => [1, 2, 3, 4, 5],         // Overcharged
            806     => [1, 2, 3, 4, 5],         // Rapid fire
            807     => [1, 2, 3, 4, 5],         // Short range
            808     => [1, 2, 3, 4, 5],         // Sturdy
            
            // UTILITY MOUNT - Frame Shift Wake Scanner
            10301   => [1, 2, 3,     ],         // Fast scan
            10302   => [1, 2, 3,     ],         // Lightweight
            10303   => [1, 2, 3,     ],         // Long range
            10304   => [1, 2, 3,     ],         // Reinforced
            10305   => [1, 2, 3,     ],         // Shielded
            10306   => [1, 2, 3,     ],         // Wide angle
            
            // UTILITY MOUNT - Kill Warrant Scanner
            10501   => [1, 2, 3,     ],         // Fast scan
            10502   => [1, 2, 3,     ],         // Lightweight
            10503   => [1, 2, 3,     ],         // Long range
            10504   => [1, 2, 3,     ],         // Reinforced
            10505   => [1, 2, 3,     ],         // Shielded
            10506   => [1, 2, 3,     ],         // Wide angle
            
            // UTILITY MOUNT - Manifest Scanner
            10601   => [1, 2, 3,     ],         // Fast scan
            10602   => [1, 2, 3,     ],         // Lightweight
            10603   => [1, 2, 3,     ],         // Long range
            10604   => [1, 2, 3,     ],         // Reinforced
            10605   => [1, 2, 3,     ],         // Shielded
            10606   => [1, 2, 3,     ],         // Wide angle
            
            // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
            20101   => [1, 2, 3,     ],         // Shielded
            
            // OPTIONAL INTERNAL - Detailed Surface Scanner
            20301   => [1, 2, 3, 4, 5],         // Fast scan
            20302   => [1, 2, 3, 4, 5],         // Long range
            20303   => [1, 2, 3, 4, 5],         // Wide angle
            
            // OPTIONAL INTERNAL - Fuel Scoop
            20501   => [1, 2, 3,     ],         // Shielded
            
            // OPTIONAL INTERNAL - Refinery
            21001   => [1, 2, 3,     ],         // Shielded
            
            // CORE INTERNAL - Life Support
            30201   => [1, 2, 3,     ],         // Lightweight
            30202   => [1, 2, 3,     ],         // Reinforced
            30203   => [1, 2, 3,     ],         // Shielded
            
            // CORE INTERNAL - Sensors
            30501   => [1, 2, 3, 4, 5],         // Lightweight
            30502   => [1, 2, 3, 4, 5],         // Long range
            30503   => [1, 2, 3, 4, 5],         // Wide angle
        ],
        
        // Tiana Fortune
        20      => [
            // UTILITY MOUNT - Frame Shift Wake Scanner
            10301   => [1, 2, 3, 4, 5],         // Fast scan
            10302   => [1, 2, 3, 4, 5],         // Lightweight
            10303   => [1, 2, 3, 4, 5],         // Long range
            10304   => [1, 2, 3, 4, 5],         // Reinforced
            10305   => [1, 2, 3, 4, 5],         // Shielded
            10306   => [1, 2, 3, 4, 5],         // Wide angle
            
            // UTILITY MOUNT - Kill Warrant Scanner
            10501   => [1, 2, 3, 4, 5],         // Fast scan
            10502   => [1, 2, 3, 4, 5],         // Lightweight
            10503   => [1, 2, 3, 4, 5],         // Long range
            10504   => [1, 2, 3, 4, 5],         // Reinforced
            10505   => [1, 2, 3, 4, 5],         // Shielded
            10506   => [1, 2, 3, 4, 5],         // Wide angle
            
            // UTILITY MOUNT - Manifest Scanner
            10601   => [1, 2, 3, 4, 5],         // Fast scan
            10602   => [1, 2, 3, 4, 5],         // Lightweight
            10603   => [1, 2, 3, 4, 5],         // Long range
            10604   => [1, 2, 3, 4, 5],         // Reinforced
            10605   => [1, 2, 3, 4, 5],         // Shielded
            10606   => [1, 2, 3, 4, 5],         // Wide angle
            
            // OPTIONAL INTERNAL - Collector Limpet Controller
            20201   => [1, 2, 3, 4, 5],         // Lightweight
            20202   => [1, 2, 3, 4, 5],         // Reinforced
            20203   => [1, 2, 3, 4, 5],         // Shielded
        
            // OPTIONAL INTERNAL - Detailed Surface Scanner
            20301   => [1, 2, 3,     ],         // Fast scan
            20302   => [1, 2, 3,     ],         // Long range
            20303   => [1, 2, 3,     ],         // Wide angle
            
            // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
            20401   => [1, 2, 3,     ],         // Expanded capture arc
            20402   => [1, 2, 3,     ],         // Long range
                    
            // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
            20601   => [1, 2, 3, 4, 5],         // Lightweight
            20602   => [1, 2, 3, 4, 5],         // Reinforced
            20603   => [1, 2, 3, 4, 5],         // Shielded
            
            // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
            20701   => [1, 2, 3, 4, 5],         // Lightweight
            20702   => [1, 2, 3, 4, 5],         // Reinforced
            20703   => [1, 2, 3, 4, 5],         // Shielded
            
            // OPTIONAL INTERNAL - Prospector Limpet Controller
            20901   => [1, 2, 3, 4, 5],         // Lightweight
            20902   => [1, 2, 3, 4, 5],         // Reinforced
            20903   => [1, 2, 3, 4, 5],         // Shielded
            
            // CORE INTERNAL - Sensors
            30501   => [1, 2, 3, 4, 5],         // Lightweight
            30502   => [1, 2, 3, 4, 5],         // Long range
            30503   => [1, 2, 3, 4, 5],         // Wide angle
        ],
    ];
}