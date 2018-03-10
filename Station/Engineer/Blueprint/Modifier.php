<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Engineer\Blueprint;
use         EDSM\Alias;

class Modifier extends Alias
{
    /**
     * List of modifiers per blueprint/grade
     */
    static protected $name  = [
        // HARDPOINT - Beam Laser
        101     => [    // Efficient
            1       => [
                ['Damage', '+8%', 'text-info'],
                ['Thermal load', '-38%', 'text-info'],
            ],
            2       => [
                ['Damage', '+12%', 'text-info'],
                ['Power draw', '-12%', 'text-info'],
                ['Distributor draw', '-15%', 'text-info'],
                ['Thermal load', '-43%', 'text-info'],
            ],
            3       => [
                ['Damage', '+16%', 'text-info'],
                ['Power draw', '-24%', 'text-info'],
                ['Distributor draw', '-25%', 'text-info'],
                ['Thermal load', '-48%', 'text-info'],
            ],
            4       => [
                ['Damage', '+20%', 'text-info'],
                ['Power draw', '-36%', 'text-info'],
                ['Distributor draw', '-35%', 'text-info'],
                ['Thermal load', '-53%', 'text-info'],
            ],
            5       => [
                ['Damage', '+24%', 'text-info'],
                ['Power draw', '-48%', 'text-info'],
                ['Distributor draw', '-45%', 'text-info'],
                ['Thermal load', '-60%', 'text-info'],
            ],
        ],
        102     => [    // Lightweight
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        103     => [    // Long range
            1       => [
                ['Power draw', '+3%', 'text-danger'],
                ['Maximum range', '+20%', 'text-info'],
                ['Damage falloff start', '+20%', 'text-info'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power draw', '+6%', 'text-danger'],
                ['Maximum range', '+40%', 'text-info'],
                ['Damage falloff start', '+40%', 'text-info'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power draw', '+9%', 'text-danger'],
                ['Maximum range', '+60%', 'text-info'],
                ['Damage falloff start', '+60%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power draw', '+12%', 'text-danger'],
                ['Maximum range', '+80%', 'text-info'],
                ['Damage falloff start', '+80%', 'text-info'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power draw', '+15%', 'text-danger'],
                ['Maximum range', '+100%', 'text-info'],
                ['Damage falloff start', '+100%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        104     => [    // Overcharged
            1       => [
                ['Damage', '+30%', 'text-info'],
                ['Distributor draw', '+15%', 'text-danger'],
                ['Thermal load', '+3%', 'text-danger'],
            ],
            2       => [
                ['Damage', '+40%', 'text-info'],
                ['Distributor draw', '+20%', 'text-danger'],
                ['Thermal load', '+6%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+50%', 'text-info'],
                ['Distributor draw', '+25%', 'text-danger'],
                ['Thermal load', '+9%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+60%', 'text-info'],
                ['Distributor draw', '+30%', 'text-danger'],
                ['Thermal load', '+12%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+70%', 'text-info'],
                ['Distributor draw', '+35%', 'text-danger'],
                ['Thermal load', '+15%', 'text-danger'],
            ],
        ],
        105     => [    // Short range
            1       => [
                ['Damage', '+27%', 'text-info'],
                ['Maximum range', '-10%', 'text-danger'],
            ],
            2       => [
                ['Damage', '+39%', 'text-info'],
                ['Maximum range', '-20%', 'text-danger'],
                ['Thermal load', '+10%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+51%', 'text-info'],
                ['Maximum range', '-30%', 'text-danger'],
                ['Thermal load', '+20%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+63%', 'text-info'],
                ['Maximum range', '-40%', 'text-danger'],
                ['Thermal load', '+30%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+75%', 'text-info'],
                ['Maximum range', '-50%', 'text-danger'],
                ['Thermal load', '+40%', 'text-danger'],
            ],
        ],
        106     => [    // Sturdy
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal load', '-10%', 'text-info'],
                ['Armour piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal load', '-15%', 'text-info'],
                ['Armour piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal load', '-20%', 'text-info'],
                ['Armour piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal load', '-25%', 'text-info'],
                ['Armour piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal load', '-30%', 'text-info'],
                ['Armour piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // HARDPOINT - Burst Laser
        201     => [    // Efficient
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        202     => [                    // Focused
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        203     => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        204     => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        205     => [                    // Overcharged
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        206     => [                    // Rapid fire
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        207     => [                    // Short range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        208     => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // HARDPOINT - Cannon
        301     => [                    // Efficient
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        302     => [                    // High capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        303     => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        304     => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        305     => [                    // Overcharged
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        306     => [                    // Rapid fire
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        307     => [                    // Short range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        308     => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // HARDPOINT - Fragment Cannon
        401     => [                    // Double shot
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        402     => [                    // Efficient
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        403     => [                    // High capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        404     => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        405     => [                    // Overcharged
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        406     => [                    // Rapid fire
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        407     => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // HARDPOINT - Mine Launcher
        501     => [                    // High capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        502     => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        503     => [                    // Rapid fire
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        504     => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // HARDPOINT - Missile Rack
        601     => [                    // High capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        602     => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        603     => [                    // Rapid fire
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        604     => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // HARDPOINT - Multi-cannon
        701     => [                    // Efficient
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        702     => [                    // High capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        703     => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        704     => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        705     => [                    // Overcharged
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        706     => [                    // Rapid fire
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        707     => [                    // Short range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        708     => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],

        // HARDPOINT - Plasma Accelerator
        801     => [                    // Efficient
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        802     => [                    // Focused
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        803     => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        804     => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        805     => [                    // Overcharged
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        806     => [                    // Rapid fire
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        807     => [                    // Short range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        808     => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],

        // HARDPOINT - Pulse Laser
        901     => [                    // Efficient
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        902     => [                    // Focused
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        903     => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        904     => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        905     => [                    // Overcharged
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        906     => [                    // Rapid fire
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        907     => [                    // Short range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        908     => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // HARDPOINT - Rail Gun
        1001    => [                    // High capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        1002    => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        1003    => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        1004    => [                    // Short range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        1005    => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],

        // HARDPOINT - Seeker Missile Rack
        1101    => [                    // High capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        1102    => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        1103    => [                    // Rapid fire
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        1104    => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],

        // HARDPOINT - Torpedo Pylon
        1201    => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        1202    => [                    // Sturdy
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // UTILITY MOUNT - Chaff Launcher
        10101   => [                    // Ammo capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10102   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10103   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10104   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // UTILITY MOUNT - Electronic Countermeasure
        10201   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10202   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10203   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // UTILITY MOUNT - Frame Shift Wake Scanner
        10301   => [                    // Fast scan
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10302   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10303   => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10304   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10305   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10306   => [                    // Wide angle
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // UTILITY MOUNT - Heat Sink Launcher
        10401   => [                    // Ammo capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10402   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10403   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10404   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // UTILITY MOUNT - Kill Warrant Scanner
        10501   => [                    // Fast scan
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10502   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10503   => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10504   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10505   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10506   => [                    // Wide angle
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // UTILITY MOUNT - Manifest Scanner
        10601   => [                    // Fast scan
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10602   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10603   => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10604   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10605   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10606   => [                    // Wide angle
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // UTILITY MOUNT - Point Defence
        10701   => [                    // Ammo capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10702   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10703   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10704   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // UTILITY MOUNT - Shield Booster
        10801   => [                    // Blast resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10802   => [                    // Heavy duty
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10803   => [                    // Kinetic resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10804   => [                    // Resistance augmented
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10805   => [                    // Thermal resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
        20101   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Collector Limpet Controller
        20201   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20202   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20203   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Detailed Surface Scanner
        20301   => [                    // Fast scan
            1       => [
                ['Scan rate', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Scan rate', '+35%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Scan rate', '+50%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Scan rate', '+65%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Scan rate', '+80%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        20302   => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20303   => [                    // Wide angle
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
        20401   => [                    // Expanded capture arc
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20402   => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],

        // OPTIONAL INTERNAL - Fuel Scoop
        20501   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
                
        // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
        20601   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20602   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20603   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
        20701   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20702   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20703   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Hull Reinforcement Package
        20801   => [                    // Blast resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20802   => [                    // Heavy duty
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20803   => [                    // Kinetic resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20804   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20805   => [                    // Thermal resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Prospector Limpet Controller
        20901   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20902   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        20903   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Refinery
        21001   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Shield Cell Bank
        21101   => [                    // Rapid charge
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        21102   => [                    // Specialised
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // OPTIONAL INTERNAL - Shield Generator
        21201   => [                    // Enhanced low power
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        21202   => [                    // Kinetic resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        21203   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        21204   => [                    // Thermal resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // CORE INTERNAL - Frame Shift Drive
        30101   => [                    // Faster boot sequence
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30102   => [                    // Increased range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30103   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // CORE INTERNAL - Life Support
        30201   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30202   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30203   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // CORE INTERNAL - Power Distributor
        30301   => [                    // Charge enhanced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30302   => [                    // Engine focused
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30303   => [                    // High charge capacity
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30304   => [                    // Shielded
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30305   => [                    // System focused
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30306   => [                    // Weapon focused
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // CORE INTERNAL - Power Plant
        30401   => [                    // Armoured
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30402   => [                    // Low emissions
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30403   => [                    // Overcharged
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // CORE INTERNAL - Sensors
        30501   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30502   => [                    // Long range
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30503   => [                    // Wide angle
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // CORE INTERNAL - Thrusters
        30601   => [                    // Clean
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30602   => [                    // Dirty
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        30603   => [                    // Reinforced
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        
        // ARMOUR
        40101   => [                    // Blast resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        40102   => [                    // Heavy duty
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        40103   => [                    // Kinetic resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        40104   => [                    // Lightweight
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        40105   => [                    // Thermal resistant
            1       => null,
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
    ];
}