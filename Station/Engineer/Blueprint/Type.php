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
        101     => 'Efficient Weapon',
        102     => 'Light Weight Mount',
        103     => 'Long-Range Weapon',
        104     => 'Overcharged Weapon',
        105     => 'Short-Range Blaster',
        106     => 'Sturdy Mount',
        
        // HARDPOINT - Burst Laser
        201     => 'Efficient Weapon',
        202     => 'Focused Weapon',
        203     => 'Light Weight Mount',
        204     => 'Long-Range Weapon',
        205     => 'Overcharged Weapon',
        206     => 'Rapid Fire Modification',
        207     => 'Short-Range Blaster',
        208     => 'Sturdy Mount',
        
        // HARDPOINT - Cannon
        301     => 'Efficient Weapon',
        302     => 'High Capacity Magazine',
        303     => 'Light Weight Mount',
        304     => 'Long-Range Weapon',
        305     => 'Overcharged Weapon',
        306     => 'Rapid Fire Modification',
        307     => 'Short-Range Blaster',
        308     => 'Sturdy Mount',
        
        // HARDPOINT - Fragment Cannon
        401     => 'Double Shot',
        402     => 'Efficient Weapon',
        403     => 'High Capacity Magazine',
        404     => 'Light Weight Mount',
        405     => 'Overcharged Weapon',
        406     => 'Rapid Fire Modification',
        407     => 'Sturdy Mount',
        
        // HARDPOINT - Mine Launcher
        501     => 'High Capacity Magazine',
        502     => 'Light Weight Mount',
        503     => 'Rapid Fire Modification',
        504     => 'Sturdy Mount',
        
        // HARDPOINT - Missile Rack
        601     => 'High Capacity Magazine',
        602     => 'Light Weight Mount',
        603     => 'Rapid Fire Modification',
        604     => 'Sturdy Mount',
        
        // HARDPOINT - Multi-cannon
        701     => 'Efficient Weapon',
        702     => 'High Capacity Magazine',
        703     => 'Light Weight Mount',
        704     => 'Long-Range Weapon',
        705     => 'Overcharged Weapon',
        706     => 'Rapid Fire Modification',
        707     => 'Short-Range Blaster',
        708     => 'Sturdy Mount',

        // HARDPOINT - Plasma Accelerator
        801     => 'Efficient Weapon',
        802     => 'Focused Weapon',
        803     => 'Light Weight Mount',
        804     => 'Long-Range Weapon',
        805     => 'Overcharged Weapon',
        806     => 'Rapid Fire Modification',
        807     => 'Short-Range Blaster',
        808     => 'Sturdy Mount',

        // HARDPOINT - Pulse Laser
        901     => 'Efficient Weapon',
        902     => 'Focused Weapon',
        903     => 'Light Weight Mount',
        904     => 'Long-Range Weapon',
        905     => 'Overcharged Weapon',
        906     => 'Rapid Fire Modification',
        907     => 'Short-Range Blaster',
        908     => 'Sturdy Mount',
        
        // HARDPOINT - Rail Gun
        1001    => 'High Capacity Magazine',
        1002    => 'Light Weight Mount',
        1003    => 'Long-Range Weapon',
        1004    => 'Short-Range Blaster',
        1005    => 'Sturdy Mount',

        // HARDPOINT - Seeker Missile Rack
        1101    => 'High Capacity Magazine',
        1102    => 'Light Weight Mount',
        1103    => 'Rapid Fire Modification',
        1104    => 'Sturdy Mount',

        // HARDPOINT - Torpedo Pylon
        1201    => 'Light Weight Mount',
        1202    => 'Sturdy Mount',
        
        // UTILITY MOUNT - Chaff Launcher
        10101   => 'Ammo Capacity',
        10102   => 'Misc Lightweight',
        10103   => 'Misc Reinforced',
        10104   => 'Misc Shielded',
        
        // UTILITY MOUNT - Electronic Countermeasure
        10201   => 'Misc Lightweight',
        10202   => 'Misc Reinforced',
        10203   => 'Misc Shielded',
        
        // UTILITY MOUNT - Frame Shift Wake Scanner
        10301   => 'Fast Scanner',
        10302   => 'Misc Lightweight',
        10303   => 'Long-Range Scanner',
        10304   => 'Misc Reinforced',
        10305   => 'Misc Shielded',
        10306   => 'Wide Angle Scanner',
        
        // UTILITY MOUNT - Heat Sink Launcher
        10401   => 'Ammo Capacity',
        10402   => 'Misc Lightweight',
        10403   => 'Misc Reinforced',
        10404   => 'Misc Shielded',
        
        // UTILITY MOUNT - Kill Warrant Scanner
        10501   => 'Fast Scanner',
        10502   => 'Misc Lightweight',
        10503   => 'Long-Range Scanner',
        10504   => 'Misc Reinforced',
        10505   => 'Misc Shielded',
        10506   => 'Wide Angle Scanner',
        
        // UTILITY MOUNT - Manifest Scanner
        10601   => 'Fast Scanner',
        10602   => 'Misc Lightweight',
        10603   => 'Long-Range Scanner',
        10604   => 'Misc Reinforced',
        10605   => 'Misc Shielded',
        10606   => 'Wide Angle Scanner',
        
        // UTILITY MOUNT - Point Defence
        10701   => 'Ammo Capacity',
        10702   => 'Misc Lightweight',
        10703   => 'Misc Reinforced',
        10704   => 'Misc Shielded',
        
        // UTILITY MOUNT - Shield Booster
        10801   => 'Blast Resistant',
        10802   => 'Heavy Duty',
        10803   => 'Kinetic Resistant',
        10804   => 'Resistance Augmented',
        10805   => 'Thermal Resistant',
        
        // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
        20101   => 'Misc Shielded',
        
        // OPTIONAL INTERNAL - Collector Limpet Controller
        20201   => 'Misc Lightweight',
        20202   => 'Misc Reinforced',
        20203   => 'Misc Shielded',
        
        // OPTIONAL INTERNAL - Detailed Surface Scanner
        20301   => 'Fast Scanner',
        20302   => 'Long-Range Scanner',
        20303   => 'Wide Angle Scanner',
        
        // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
        20401   => 'Expanded FSD Interdictor Capture Arc',
        20402   => 'Longer Range FSD Interdictor',

        // OPTIONAL INTERNAL - Fuel Scoop
        20501   => 'Misc Shielded',
                
        // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
        20601   => 'Misc Lightweight',
        20602   => 'Misc Reinforced',
        20603   => 'Misc Shielded',
        
        // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
        20701   => 'Misc Lightweight',
        20702   => 'Misc Reinforced',
        20703   => 'Misc Shielded',
        
        // OPTIONAL INTERNAL - Hull Reinforcement Package
        20801   => 'Blast Resistant',
        20802   => 'Heavy Duty',
        20803   => 'Kinetic Resistant',
        20804   => 'Lightweight',
        20805   => 'Thermal Resistant',
        
        // OPTIONAL INTERNAL - Prospector Limpet Controller
        20901   => 'Misc Lightweight',
        20902   => 'Misc Reinforced',
        20903   => 'Misc Shielded',
        
        // OPTIONAL INTERNAL - Refinery
        21001   => 'Misc Shielded',
        
        // OPTIONAL INTERNAL - Shield Cell Bank
        21101   => 'Rapid Charge',
        21102   => 'Specialised',
        
        // OPTIONAL INTERNAL - Shield Generator
        21201   => 'Enhanced, Low Power',
        21202   => 'Kinetic Resistant',
        21203   => 'Reinforced',
        21204   => 'Thermal Resistant',
        
        // CORE INTERNAL - Frame Shift Drive
        30101   => 'Faster FSD Boot Sequence',
        30102   => 'Increased FSD Range',
        30103   => 'Shielded FSD',
        
        // CORE INTERNAL - Life Support
        30201   => 'Misc Lightweight',
        30202   => 'Misc Reinforced',
        30203   => 'Misc Shielded',
        
        // CORE INTERNAL - Power Distributor
        30301   => 'Charge Enhanced',
        30302   => 'Engine Focused',
        30303   => 'High Charge Capacity',
        30304   => 'Shielded',
        30305   => 'System Focused',
        30306   => 'Weapon Focused',
        
        // CORE INTERNAL - Power Plant
        30401   => 'Armoured',
        30402   => 'Low Emissions',
        30403   => 'Overcharged',
        
        // CORE INTERNAL - Sensors
        30501   => 'Light Weight Scanner',
        30502   => 'Long-Range Scanner',
        30503   => 'Wide Angle Scanner',
        
        // CORE INTERNAL - Thrusters
        30601   => 'Clean Drive Tuning',
        30602   => 'Dirty Drive Tuning',
        30603   => 'Drive Strengthening',
        
        // ARMOUR
        40101   => 'Blast Resistant',
        40102   => 'Heavy Duty',
        40103   => 'Kinetic Resistant',
        40104   => 'Lightweight',
        40105   => 'Thermal Resistant',
    ];
}