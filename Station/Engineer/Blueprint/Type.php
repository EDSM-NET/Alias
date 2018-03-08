<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Engineer\Blueprint;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of blueprint names
     */
    static protected $name  = [
        // HARDPOINT - Beam Laser
        101     => 'Efficient',
        102     => 'Lightweight',
        103     => 'Long range',
        104     => 'Overcharged',
        105     => 'Short range',
        106     => 'Sturdy',
        
        // HARDPOINT - Burst Laser
        201     => 'Efficient',
        202     => 'Focused',
        203     => 'Lightweight',
        204     => 'Long range',
        205     => 'Overcharged',
        206     => 'Rapid fire',
        207     => 'Short range',
        208     => 'Sturdy',
        
        // HARDPOINT - Cannon
        301     => 'Efficient',
        302     => 'High capacity',
        303     => 'Lightweight',
        304     => 'Long range',
        305     => 'Overcharged',
        306     => 'Rapid fire',
        307     => 'Short range',
        308     => 'Sturdy',
        
        // HARDPOINT - Fragment Cannon
        401     => 'Double shot',
        402     => 'Efficient',
        403     => 'High capacity',
        404     => 'Lightweight',
        405     => 'Overcharged',
        406     => 'Rapid fire',
        407     => 'Sturdy',
        
        // HARDPOINT - Mine Launcher
        501     => 'High capacity',
        502     => 'Lightweight',
        503     => 'Rapid fire',
        504     => 'Sturdy',
        
        // HARDPOINT - Missile Rack
        601     => 'High capacity',
        602     => 'Lightweight',
        603     => 'Rapid fire',
        604     => 'Sturdy',
        
        // HARDPOINT - Multi-cannon
        701     => 'Efficient',
        702     => 'High capacity',
        703     => 'Lightweight',
        704     => 'Long range',
        705     => 'Overcharged',
        706     => 'Rapid fire',
        707     => 'Short range',
        708     => 'Sturdy',

        // HARDPOINT - Plasma Accelerator
        801     => 'Efficient',
        802     => 'Focused',
        803     => 'Lightweight',
        804     => 'Long range',
        805     => 'Overcharged',
        806     => 'Rapid fire',
        807     => 'Short range',
        808     => 'Sturdy',

        // HARDPOINT - Pulse Laser
        901     => 'Efficient',
        902     => 'Focused',
        903     => 'Lightweight',
        904     => 'Long range',
        905     => 'Overcharged',
        906     => 'Rapid fire',
        907     => 'Short range',
        908     => 'Sturdy',
        
        // HARDPOINT - Rail Gun
        1001    => 'High capacity',
        1002    => 'Lightweight',
        1003    => 'Long range',
        1004    => 'Short range',
        1005    => 'Sturdy',

        // HARDPOINT - Seeker Missile Rack
        1101    => 'High capacity',
        1102    => 'Lightweight',
        1103    => 'Rapid fire',
        1104    => 'Sturdy',

        // HARDPOINT - Torpedo Pylon
        1201    => 'Lightweight',
        1202    => 'Sturdy',
        
        // UTILITY MOUNT - Chaff Launcher
        10101   => 'Ammo capacity',
        10102   => 'Lightweight',
        10103   => 'Reinforced',
        10104   => 'Shielded',
        
        // UTILITY MOUNT - Electronic Countermeasure
        10201   => 'Lightweight',
        10202   => 'Reinforced',
        10203   => 'Shielded',
        
        // UTILITY MOUNT - Frame Shift Wake Scanner
        10301   => 'Fast scan',
        10302   => 'Lightweight',
        10303   => 'Long range',
        10304   => 'Reinforced',
        10305   => 'Shielded',
        10306   => 'Wide angle',
        
        // UTILITY MOUNT - Heat Sink Launcher
        10401   => 'Ammo capacity',
        10402   => 'Lightweight',
        10403   => 'Reinforced',
        10404   => 'Shielded',
        
        // UTILITY MOUNT - Kill Warrant Scanner
        10501   => 'Fast scan',
        10502   => 'Lightweight',
        10503   => 'Long range',
        10504   => 'Reinforced',
        10505   => 'Shielded',
        10506   => 'Wide angle',
        
        // UTILITY MOUNT - Manifest Scanner
        10601   => 'Fast scan',
        10602   => 'Lightweight',
        10603   => 'Long range',
        10604   => 'Reinforced',
        10605   => 'Shielded',
        10606   => 'Wide angle',
        
        // UTILITY MOUNT - Point Defence
        10701   => 'Ammo capacity',
        10702   => 'Lightweight',
        10703   => 'Reinforced',
        10704   => 'Shielded',
        
        // UTILITY MOUNT - Shield Booster
        10801   => 'Blast resistant',
        10802   => 'Heavy duty',
        10803   => 'Kinetic resistant',
        10804   => 'Resistance augmented',
        10805   => 'Thermal resistant',
        
        // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
        20101   => 'Shielded',
        
        // OPTIONAL INTERNAL - Collector Limpet Controller
        20201   => 'Lightweight',
        20202   => 'Reinforced',
        20203   => 'Shielded',
        
        // OPTIONAL INTERNAL - Detailed Surface Scanner
        20301   => 'Fast scan',
        20302   => 'Long range',
        20303   => 'Wide angle',
        
        // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
        20401   => 'Expanded capture arc',
        20402   => 'Long range',

        // OPTIONAL INTERNAL - Fuel Scoop
        20501   => 'Shielded',
                
        // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
        20601   => 'Lightweight',
        20602   => 'Reinforced',
        20603   => 'Shielded',
        
        // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
        20701   => 'Lightweight',
        20702   => 'Reinforced',
        20703   => 'Shielded',
        
        // OPTIONAL INTERNAL - Hull Reinforcement Package
        20801   => 'Blast resistant',
        20802   => 'Heavy duty',
        20803   => 'Kinetic resistant',
        20804   => 'Lightweight',
        20805   => 'Thermal resistant',
        
        // OPTIONAL INTERNAL - Prospector Limpet Controller
        20901   => 'Lightweight',
        20902   => 'Reinforced',
        20903   => 'Shielded',
        
        // OPTIONAL INTERNAL - Refinery
        21001   => 'Shielded',
        
        // OPTIONAL INTERNAL - Shield Cell Bank
        21101   => 'Rapid charge',
        21102   => 'Specialised',
        
        // OPTIONAL INTERNAL - Shield Generator
        21201   => 'Enhanced low power',
        21202   => 'Kinetic resistant',
        21203   => 'Reinforced',
        21204   => 'Thermal resistant',
        
        // CORE INTERNAL - Frame Shift Drive
        30101   => 'Faster boot sequence',
        30102   => 'Increased range',
        30103   => 'Shielded',
        
        // CORE INTERNAL - Life Support
        30201   => 'Lightweight',
        30202   => 'Reinforced',
        30203   => 'Shielded',
        
        // CORE INTERNAL - Power Distributor
        30301   => 'Charge enhanced',
        30302   => 'Engine focused',
        30303   => 'High charge capacity',
        30304   => 'Shielded',
        30305   => 'System focused',
        30306   => 'Weapon focused',
        
        // CORE INTERNAL - Power Plant
        30401   => 'Armoured',
        30402   => 'Low emissions',
        30403   => 'Overcharged',
        
        // CORE INTERNAL - Sensors
        30501   => 'Lightweight',
        30502   => 'Long range',
        30503   => 'Wide angle',
        
        // CORE INTERNAL - Thrusters
        30601   => 'Clean',
        30602   => 'Dirty',
        30603   => 'Reinforced',
        
        // ARMOUR
        40101   => 'Blast resistant',
        40102   => 'Heavy duty',
        40103   => 'Kinetic resistant',
        40104   => 'Lightweight',
        40105   => 'Thermal resist',
    ];
}