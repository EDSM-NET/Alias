<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
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
        101     => [    // Efficient Weapon
            1       => [
                ['Damage', '+8%', 'text-info'],
                ['Thermal Load', '-38%', 'text-info'],
            ],
            2       => [
                ['Damage', '+12%', 'text-info'],
                ['Power Draw', '-12%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Thermal Load', '-43%', 'text-info'],
            ],
            3       => [
                ['Damage', '+16%', 'text-info'],
                ['Power Draw', '-24%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Thermal Load', '-48%', 'text-info'],
            ],
            4       => [
                ['Damage', '+20%', 'text-info'],
                ['Power Draw', '-36%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Thermal Load', '-53%', 'text-info'],
            ],
            5       => [
                ['Damage', '+24%', 'text-info'],
                ['Power Draw', '-48%', 'text-info'],
                ['Distributor Draw', '-45%', 'text-info'],
                ['Thermal Load', '-60%', 'text-info'],
            ],
        ],
        102     => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        103     => [    // Long-Range Weapon
            1       => [
                ['Power Draw', '+3%', 'text-danger'],
                ['Maximum Range', '+20%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+6%', 'text-danger'],
                ['Maximum Range', '+40%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+9%', 'text-danger'],
                ['Maximum Range', '+60%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Maximum Range', '+80%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Maximum Range', '+100%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        104     => [    // Overcharged Weapon
            1       => [
                ['Damage', '+30%', 'text-info'],
                ['Distributor Draw', '+15%', 'text-danger'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            2       => [
                ['Damage', '+40%', 'text-info'],
                ['Distributor Draw', '+20%', 'text-danger'],
                ['Thermal Load', '+6%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+50%', 'text-info'],
                ['Distributor Draw', '+25%', 'text-danger'],
                ['Thermal Load', '+9%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+60%', 'text-info'],
                ['Distributor Draw', '+30%', 'text-danger'],
                ['Thermal Load', '+12%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+70%', 'text-info'],
                ['Distributor Draw', '+35%', 'text-danger'],
                ['Thermal Load', '+15%', 'text-danger'],
            ],
        ],
        105     => [    // Short-Range Blaster
            1       => [
                ['Damage', '+27%', 'text-info'],
                ['Maximum Range', '-10%', 'text-info'],
            ],
            2       => [
                ['Damage', '+39%', 'text-info'],
                ['Maximum Range', '-20%', 'text-info'],
                ['Thermal Load', '+10%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+51%', 'text-info'],
                ['Maximum Range', '-30%', 'text-info'],
                ['Thermal Load', '+20%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+63%', 'text-info'],
                ['Maximum Range', '-40%', 'text-info'],
                ['Thermal Load', '+30%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+75%', 'text-info'],
                ['Maximum Range', '-50%', 'text-info'],
                ['Thermal Load', '+40%', 'text-danger'],
            ],
        ],
        106     => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // HARDPOINT - Burst Laser
        201     => [    // Efficient Weapon
            1       => [
                ['Damage', '+8%', 'text-info'],
                ['Thermal Load', '-38%', 'text-info'],
            ],
            2       => [
                ['Damage', '+12%', 'text-info'],
                ['Power Draw', '-12%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Thermal Load', '-43%', 'text-info'],
            ],
            3       => [
                ['Damage', '+16%', 'text-info'],
                ['Power Draw', '-24%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Thermal Load', '-48%', 'text-info'],
            ],
            4       => [
                ['Damage', '+20%', 'text-info'],
                ['Power Draw', '-36%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Thermal Load', '-53%', 'text-info'],
            ],
            5       => [
                ['Damage', '+24%', 'text-info'],
                ['Power Draw', '-48%', 'text-info'],
                ['Distributor Draw', '-45%', 'text-info'],
                ['Thermal Load', '-60%', 'text-info'],
            ],
        ],
        202     => [    // Focused Weapon
            1       => [
                ['Maximum Range', '+36%', 'text-danger'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Thermal Load', '+1%', 'text-danger'],
            ],
            2       => [
                ['Maximum Range', '+52%', 'text-danger'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Thermal Load', '+2%', 'text-danger'],
            ],
            3       => [
                ['Maximum Range', '+68%', 'text-danger'],
                ['Armour Piercing', '+80%', 'text-info'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            4       => [
                ['Maximum Range', '+84%', 'text-danger'],
                ['Armour Piercing', '+100%', 'text-info'],
                ['Thermal Load', '+4%', 'text-danger'],
            ],
            5       => [
                ['Maximum Range', '+100%', 'text-danger'],
                ['Armour Piercing', '+120%', 'text-info'],
                ['Thermal Load', '+5%', 'text-danger'],
            ],
        ],
        203     => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        204     => [    // Long-Range Weapon
            1       => [
                ['Power Draw', '+3%', 'text-danger'],
                ['Maximum Range', '+20%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+6%', 'text-danger'],
                ['Maximum Range', '+40%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+9%', 'text-danger'],
                ['Maximum Range', '+60%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Maximum Range', '+80%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Maximum Range', '+100%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        205     => [    // Overcharged Weapon
            1       => [
                ['Damage', '+30%', 'text-info'],
                ['Distributor Draw', '+15%', 'text-danger'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            2       => [
                ['Damage', '+40%', 'text-info'],
                ['Distributor Draw', '+20%', 'text-danger'],
                ['Thermal Load', '+6%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+50%', 'text-info'],
                ['Distributor Draw', '+25%', 'text-danger'],
                ['Thermal Load', '+9%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+60%', 'text-info'],
                ['Distributor Draw', '+30%', 'text-danger'],
                ['Thermal Load', '+12%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+70%', 'text-info'],
                ['Distributor Draw', '+35%', 'text-danger'],
                ['Thermal Load', '+15%', 'text-danger'],
            ],
        ],
        206     => [    // Rapid Fire Modification
            1       => [
                ['Damage', '-1%', 'text-danger'],
                ['Reload Time', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+8%', 'text-info'],
            ],
            2       => [
                ['Damage', '-2%', 'text-danger'],
                ['Reload Time', '-35%', 'text-info'],
                ['Distributor Draw', '-5%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+17%', 'text-info'],
            ],
            3       => [
                ['Damage', '-3%', 'text-danger'],
                ['Reload Time', '-45%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+26%', 'text-info'],
            ],
            4       => [
                ['Damage', '-4%', 'text-danger'],
                ['Reload Time', '-55%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+35%', 'text-info'],
            ],
            5       => [
                ['Damage', '-5%', 'text-danger'],
                ['Reload Time', '-65%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+44%', 'text-info'],
            ],
        ],
        207     => [    // Short-Range Blaster
            1       => [
                ['Damage', '+27%', 'text-info'],
                ['Maximum Range', '-10%', 'text-info'],
            ],
            2       => [
                ['Damage', '+39%', 'text-info'],
                ['Maximum Range', '-20%', 'text-info'],
                ['Thermal Load', '+10%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+51%', 'text-info'],
                ['Maximum Range', '-30%', 'text-info'],
                ['Thermal Load', '+20%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+63%', 'text-info'],
                ['Maximum Range', '-40%', 'text-info'],
                ['Thermal Load', '+30%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+75%', 'text-info'],
                ['Maximum Range', '-50%', 'text-info'],
                ['Thermal Load', '+40%', 'text-danger'],
            ],
        ],
        208     => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // HARDPOINT - Cannon
        301     => [    // Efficient Weapon
            1       => [
                ['Damage', '+8%', 'text-info'],
                ['Thermal Load', '-38%', 'text-info'],
            ],
            2       => [
                ['Damage', '+12%', 'text-info'],
                ['Power Draw', '-12%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Thermal Load', '-43%', 'text-info'],
            ],
            3       => [
                ['Damage', '+16%', 'text-info'],
                ['Power Draw', '-24%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Thermal Load', '-48%', 'text-info'],
            ],
            4       => [
                ['Damage', '+20%', 'text-info'],
                ['Power Draw', '-36%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Thermal Load', '-53%', 'text-info'],
            ],
            5       => [
                ['Damage', '+24%', 'text-info'],
                ['Power Draw', '-48%', 'text-info'],
                ['Distributor Draw', '-45%', 'text-info'],
                ['Thermal Load', '-60%', 'text-info'],
            ],
        ],
        302     => [    // High Capacity Magazine
            1       => [
                ['Clip Size', '+36%', 'text-info'],
                ['Power Draw', '+4%', 'text-danger'],
                ['Ammo Capacity', '+36%', 'text-info'],
                ['Rate of Fire', '+2%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '+52%', 'text-info'],
                ['Power Draw', '+8%', 'text-danger'],
                ['Ammo Capacity', '+52%', 'text-info'],
                ['Rate of Fire', '+4%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '+68%', 'text-info'],
                ['Power Draw', '+12%', 'text-danger'],
                ['Ammo Capacity', '+68%', 'text-info'],
                ['Rate of Fire', '+6%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '+84%', 'text-info'],
                ['Power Draw', '+16%', 'text-danger'],
                ['Ammo Capacity', '+84%', 'text-info'],
                ['Rate of Fire', '+8%', 'text-info'],
                ['Mass', '+50%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '+100%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
                ['Ammo Capacity', '+100%', 'text-info'],
                ['Rate of Fire', '+10%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
        ],
        303     => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        304     => [    // Long-Range Weapon
            1       => [
                ['Power Draw', '+3%', 'text-danger'],
                ['Maximum Range', '+20%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+6%', 'text-danger'],
                ['Maximum Range', '+40%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+9%', 'text-danger'],
                ['Maximum Range', '+60%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Maximum Range', '+80%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Maximum Range', '+100%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        305     => [    // Overcharged Weapon
            1       => [
                ['Clip Size', '-3%', 'text-danger'],
                ['Damage', '+30%', 'text-info'],
                ['Distributor Draw', '+15%', 'text-danger'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '-6%', 'text-danger'],
                ['Damage', '+40%', 'text-info'],
                ['Distributor Draw', '+20%', 'text-danger'],
                ['Thermal Load', '+6%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '-9%', 'text-danger'],
                ['Damage', '+50%', 'text-info'],
                ['Distributor Draw', '+25%', 'text-danger'],
                ['Thermal Load', '+9%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '-12%', 'text-danger'],
                ['Damage', '+60%', 'text-info'],
                ['Distributor Draw', '+30%', 'text-danger'],
                ['Thermal Load', '+12%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '-15%', 'text-danger'],
                ['Damage', '+70%', 'text-info'],
                ['Distributor Draw', '+35%', 'text-danger'],
                ['Thermal Load', '+15%', 'text-danger'],
            ],
        ],
        306     => [    // Rapid Fire Modification
            1       => [
                ['Damage', '-1%', 'text-danger'],
                ['Reload Time', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+8%', 'text-info'],
            ],
            2       => [
                ['Damage', '-2%', 'text-danger'],
                ['Reload Time', '-35%', 'text-info'],
                ['Distributor Draw', '-5%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+17%', 'text-info'],
            ],
            3       => [
                ['Damage', '-3%', 'text-danger'],
                ['Reload Time', '-45%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+26%', 'text-info'],
            ],
            4       => [
                ['Damage', '-4%', 'text-danger'],
                ['Reload Time', '-55%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+35%', 'text-info'],
            ],
            5       => [
                ['Damage', '-5%', 'text-danger'],
                ['Reload Time', '-65%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+44%', 'text-info'],
            ],
        ],
        307     => [    // Short-Range Blaster
            1       => [
                ['Damage', '+27%', 'text-info'],
                ['Maximum Range', '-10%', 'text-info'],
            ],
            2       => [
                ['Damage', '+39%', 'text-info'],
                ['Maximum Range', '-20%', 'text-info'],
                ['Thermal Load', '+10%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+51%', 'text-info'],
                ['Maximum Range', '-30%', 'text-info'],
                ['Thermal Load', '+20%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+63%', 'text-info'],
                ['Maximum Range', '-40%', 'text-info'],
                ['Thermal Load', '+30%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+75%', 'text-info'],
                ['Maximum Range', '-50%', 'text-info'],
                ['Thermal Load', '+40%', 'text-danger'],
            ],
        ],
        308     => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // HARDPOINT - Fragment Cannon
        401     => [    // Double Shot
            1       => [
                ['Burst Rate of Fire', '+600%', 'text-info'],
                ['Maximum Range', '-2%', 'text-info'],
                ['Burst Size', '+2', 'text-info'],
                ['Clip Size', '+4', 'text-info'],
            ],
            2       => [
                ['Burst Rate of Fire', '+800%', 'text-info'],
                ['Maximum Range', '-4%', 'text-info'],
                ['Burst Size', '+2', 'text-info'],
                ['Clip Size', '+4', 'text-info'],
            ],
            3       => [
                ['Burst Rate of Fire', '+1000%', 'text-info'],
                ['Maximum Range', '-6%', 'text-info'],
                ['Burst Size', '+2', 'text-info'],
                ['Clip Size', '+4', 'text-info'],
            ],
            4       => [
                ['Burst Rate of Fire', '+1200%', 'text-info'],
                ['Maximum Range', '-8%', 'text-info'],
                ['Burst Size', '+2', 'text-info'],
                ['Clip Size', '+4', 'text-info'],
            ],
            5       => [
                ['Burst Rate of Fire', '+1400%', 'text-info'],
                ['Maximum Range', '-10%', 'text-info'],
                ['Burst Size', '+2', 'text-info'],
                ['Clip Size', '+6', 'text-info'],
            ],
        ],
        402     => [    // Efficient Weapon
            1       => [
                ['Damage', '+8%', 'text-info'],
                ['Thermal Load', '-38%', 'text-info'],
            ],
            2       => [
                ['Damage', '+12%', 'text-info'],
                ['Power Draw', '-12%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Thermal Load', '-43%', 'text-info'],
            ],
            3       => [
                ['Damage', '+16%', 'text-info'],
                ['Power Draw', '-24%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Thermal Load', '-48%', 'text-info'],
            ],
            4       => [
                ['Damage', '+20%', 'text-info'],
                ['Power Draw', '-36%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Thermal Load', '-53%', 'text-info'],
            ],
            5       => [
                ['Damage', '+24%', 'text-info'],
                ['Power Draw', '-48%', 'text-info'],
                ['Distributor Draw', '-45%', 'text-info'],
                ['Thermal Load', '-60%', 'text-info'],
            ],
        ],
        403     => [    // High Capacity Magazine
            1       => [
                ['Clip Size', '+36%', 'text-info'],
                ['Power Draw', '+4%', 'text-danger'],
                ['Ammo Capacity', '+36%', 'text-info'],
                ['Rate of Fire', '+2%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '+52%', 'text-info'],
                ['Power Draw', '+8%', 'text-danger'],
                ['Ammo Capacity', '+52%', 'text-info'],
                ['Rate of Fire', '+4%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '+68%', 'text-info'],
                ['Power Draw', '+12%', 'text-danger'],
                ['Ammo Capacity', '+68%', 'text-info'],
                ['Rate of Fire', '+6%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '+84%', 'text-info'],
                ['Power Draw', '+16%', 'text-danger'],
                ['Ammo Capacity', '+84%', 'text-info'],
                ['Rate of Fire', '+8%', 'text-info'],
                ['Mass', '+50%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '+100%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
                ['Ammo Capacity', '+100%', 'text-info'],
                ['Rate of Fire', '+10%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
        ],
        404     => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        405     => [    // Overcharged Weapon
            1       => [
                ['Clip Size', '-3%', 'text-danger'],
                ['Damage', '+30%', 'text-info'],
                ['Distributor Draw', '+15%', 'text-danger'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '-6%', 'text-danger'],
                ['Damage', '+40%', 'text-info'],
                ['Distributor Draw', '+20%', 'text-danger'],
                ['Thermal Load', '+6%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '-9%', 'text-danger'],
                ['Damage', '+50%', 'text-info'],
                ['Distributor Draw', '+25%', 'text-danger'],
                ['Thermal Load', '+9%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '-12%', 'text-danger'],
                ['Damage', '+60%', 'text-info'],
                ['Distributor Draw', '+30%', 'text-danger'],
                ['Thermal Load', '+12%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '-15%', 'text-danger'],
                ['Damage', '+70%', 'text-info'],
                ['Distributor Draw', '+35%', 'text-danger'],
                ['Thermal Load', '+15%', 'text-danger'],
            ],
        ],
        406     => [    // Rapid Fire Modification
            1       => [
                ['Damage', '-1%', 'text-danger'],
                ['Reload Time', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+8%', 'text-info'],
            ],
            2       => [
                ['Damage', '-2%', 'text-danger'],
                ['Reload Time', '-35%', 'text-info'],
                ['Distributor Draw', '-5%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+17%', 'text-info'],
            ],
            3       => [
                ['Damage', '-3%', 'text-danger'],
                ['Reload Time', '-45%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+26%', 'text-info'],
            ],
            4       => [
                ['Damage', '-4%', 'text-danger'],
                ['Reload Time', '-55%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+35%', 'text-info'],
            ],
            5       => [
                ['Damage', '-5%', 'text-danger'],
                ['Reload Time', '-65%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+44%', 'text-info'],
            ],
        ],
        407     => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // HARDPOINT - Mine Launcher
        501     => [    // High Capacity Magazine
            1       => [
                ['Clip Size', '+36%', 'text-info'],
                ['Power Draw', '+4%', 'text-danger'],
                ['Ammo Capacity', '+36%', 'text-info'],
                ['Rate of Fire', '+2%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '+52%', 'text-info'],
                ['Power Draw', '+8%', 'text-danger'],
                ['Ammo Capacity', '+52%', 'text-info'],
                ['Rate of Fire', '+4%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '+68%', 'text-info'],
                ['Power Draw', '+12%', 'text-danger'],
                ['Ammo Capacity', '+68%', 'text-info'],
                ['Rate of Fire', '+6%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '+84%', 'text-info'],
                ['Power Draw', '+16%', 'text-danger'],
                ['Ammo Capacity', '+84%', 'text-info'],
                ['Rate of Fire', '+8%', 'text-info'],
                ['Mass', '+50%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '+100%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
                ['Ammo Capacity', '+100%', 'text-info'],
                ['Rate of Fire', '+10%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
        ],
        502     => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        503     => [    // Rapid Fire Modification
            1       => [
                ['Damage', '-1%', 'text-danger'],
                ['Reload Time', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+8%', 'text-info'],
            ],
            2       => [
                ['Damage', '-2%', 'text-danger'],
                ['Reload Time', '-35%', 'text-info'],
                ['Distributor Draw', '-5%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+17%', 'text-info'],
            ],
            3       => [
                ['Damage', '-3%', 'text-danger'],
                ['Reload Time', '-45%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+26%', 'text-info'],
            ],
            4       => [
                ['Damage', '-4%', 'text-danger'],
                ['Reload Time', '-55%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+35%', 'text-info'],
            ],
            5       => [
                ['Damage', '-5%', 'text-danger'],
                ['Reload Time', '-65%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+44%', 'text-info'],
            ],
        ],
        504     => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // HARDPOINT - Missile Rack
        601     => [    // High Capacity Magazine
            1       => [
                ['Clip Size', '+36%', 'text-info'],
                ['Power Draw', '+4%', 'text-danger'],
                ['Ammo Capacity', '+36%', 'text-info'],
                ['Rate of Fire', '+2%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '+52%', 'text-info'],
                ['Power Draw', '+8%', 'text-danger'],
                ['Ammo Capacity', '+52%', 'text-info'],
                ['Rate of Fire', '+4%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '+68%', 'text-info'],
                ['Power Draw', '+12%', 'text-danger'],
                ['Ammo Capacity', '+68%', 'text-info'],
                ['Rate of Fire', '+6%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '+84%', 'text-info'],
                ['Power Draw', '+16%', 'text-danger'],
                ['Ammo Capacity', '+84%', 'text-info'],
                ['Rate of Fire', '+8%', 'text-info'],
                ['Mass', '+50%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '+100%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
                ['Ammo Capacity', '+100%', 'text-info'],
                ['Rate of Fire', '+10%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
        ],
        602     => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        603     => [    // Rapid Fire Modification
            1       => [
                ['Damage', '-1%', 'text-danger'],
                ['Reload Time', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+8%', 'text-info'],
            ],
            2       => [
                ['Damage', '-2%', 'text-danger'],
                ['Reload Time', '-35%', 'text-info'],
                ['Distributor Draw', '-5%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+17%', 'text-info'],
            ],
            3       => [
                ['Damage', '-3%', 'text-danger'],
                ['Reload Time', '-45%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+26%', 'text-info'],
            ],
            4       => [
                ['Damage', '-4%', 'text-danger'],
                ['Reload Time', '-55%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+35%', 'text-info'],
            ],
            5       => [
                ['Damage', '-5%', 'text-danger'],
                ['Reload Time', '-65%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+44%', 'text-info'],
            ],
        ],
        604     => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // HARDPOINT - Multi-cannon
        701     => [    // Efficient Weapon
            1       => [
                ['Damage', '+8%', 'text-info'],
                ['Thermal Load', '-38%', 'text-info'],
            ],
            2       => [
                ['Damage', '+12%', 'text-info'],
                ['Power Draw', '-12%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Thermal Load', '-43%', 'text-info'],
            ],
            3       => [
                ['Damage', '+16%', 'text-info'],
                ['Power Draw', '-24%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Thermal Load', '-48%', 'text-info'],
            ],
            4       => [
                ['Damage', '+20%', 'text-info'],
                ['Power Draw', '-36%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Thermal Load', '-53%', 'text-info'],
            ],
            5       => [
                ['Damage', '+24%', 'text-info'],
                ['Power Draw', '-48%', 'text-info'],
                ['Distributor Draw', '-45%', 'text-info'],
                ['Thermal Load', '-60%', 'text-info'],
            ],
        ],
        702     => [    // High Capacity Magazine
            1       => [
                ['Clip Size', '+36%', 'text-info'],
                ['Power Draw', '+4%', 'text-danger'],
                ['Ammo Capacity', '+36%', 'text-info'],
                ['Rate of Fire', '+2%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '+52%', 'text-info'],
                ['Power Draw', '+8%', 'text-danger'],
                ['Ammo Capacity', '+52%', 'text-info'],
                ['Rate of Fire', '+4%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '+68%', 'text-info'],
                ['Power Draw', '+12%', 'text-danger'],
                ['Ammo Capacity', '+68%', 'text-info'],
                ['Rate of Fire', '+6%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '+84%', 'text-info'],
                ['Power Draw', '+16%', 'text-danger'],
                ['Ammo Capacity', '+84%', 'text-info'],
                ['Rate of Fire', '+8%', 'text-info'],
                ['Mass', '+50%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '+100%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
                ['Ammo Capacity', '+100%', 'text-info'],
                ['Rate of Fire', '+10%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
        ],
        703     => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        704     => [    // Long-Range Weapon
            1       => [
                ['Power Draw', '+3%', 'text-danger'],
                ['Maximum Range', '+20%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+6%', 'text-danger'],
                ['Maximum Range', '+40%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+9%', 'text-danger'],
                ['Maximum Range', '+60%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Maximum Range', '+80%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Maximum Range', '+100%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        705     => [    // Overcharged Weapon
            1       => [
                ['Clip Size', '-3%', 'text-danger'],
                ['Damage', '+30%', 'text-info'],
                ['Distributor Draw', '+15%', 'text-danger'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '-6%', 'text-danger'],
                ['Damage', '+40%', 'text-info'],
                ['Distributor Draw', '+20%', 'text-danger'],
                ['Thermal Load', '+6%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '-9%', 'text-danger'],
                ['Damage', '+50%', 'text-info'],
                ['Distributor Draw', '+25%', 'text-danger'],
                ['Thermal Load', '+9%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '-12%', 'text-danger'],
                ['Damage', '+60%', 'text-info'],
                ['Distributor Draw', '+30%', 'text-danger'],
                ['Thermal Load', '+12%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '-15%', 'text-danger'],
                ['Damage', '+70%', 'text-info'],
                ['Distributor Draw', '+35%', 'text-danger'],
                ['Thermal Load', '+15%', 'text-danger'],
            ],
        ],
        706     => [    // Rapid Fire Modification
            1       => [
                ['Damage', '-1%', 'text-danger'],
                ['Reload Time', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+8%', 'text-info'],
            ],
            2       => [
                ['Damage', '-2%', 'text-danger'],
                ['Reload Time', '-35%', 'text-info'],
                ['Distributor Draw', '-5%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+17%', 'text-info'],
            ],
            3       => [
                ['Damage', '-3%', 'text-danger'],
                ['Reload Time', '-45%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+26%', 'text-info'],
            ],
            4       => [
                ['Damage', '-4%', 'text-danger'],
                ['Reload Time', '-55%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+35%', 'text-info'],
            ],
            5       => [
                ['Damage', '-5%', 'text-danger'],
                ['Reload Time', '-65%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+44%', 'text-info'],
            ],
        ],
        707     => [    // Short-Range Blaster
            1       => [
                ['Damage', '+27%', 'text-info'],
                ['Maximum Range', '-10%', 'text-info'],
            ],
            2       => [
                ['Damage', '+39%', 'text-info'],
                ['Maximum Range', '-20%', 'text-info'],
                ['Thermal Load', '+10%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+51%', 'text-info'],
                ['Maximum Range', '-30%', 'text-info'],
                ['Thermal Load', '+20%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+63%', 'text-info'],
                ['Maximum Range', '-40%', 'text-info'],
                ['Thermal Load', '+30%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+75%', 'text-info'],
                ['Maximum Range', '-50%', 'text-info'],
                ['Thermal Load', '+40%', 'text-danger'],
            ],
        ],
        708     => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],

        // HARDPOINT - Plasma Accelerator
        801     => [    // Efficient Weapon
            1       => [
                ['Damage', '+8%', 'text-info'],
                ['Thermal Load', '-38%', 'text-info'],
            ],
            2       => [
                ['Damage', '+12%', 'text-info'],
                ['Power Draw', '-12%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Thermal Load', '-43%', 'text-info'],
            ],
            3       => [
                ['Damage', '+16%', 'text-info'],
                ['Power Draw', '-24%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Thermal Load', '-48%', 'text-info'],
            ],
            4       => [
                ['Damage', '+20%', 'text-info'],
                ['Power Draw', '-36%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Thermal Load', '-53%', 'text-info'],
            ],
            5       => [
                ['Damage', '+24%', 'text-info'],
                ['Power Draw', '-48%', 'text-info'],
                ['Distributor Draw', '-45%', 'text-info'],
                ['Thermal Load', '-60%', 'text-info'],
            ],
        ],
        802     => [    // Focused Weapon
            1       => [
                ['Maximum Range', '+36%', 'text-danger'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Thermal Load', '+1%', 'text-danger'],
            ],
            2       => [
                ['Maximum Range', '+52%', 'text-danger'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Thermal Load', '+2%', 'text-danger'],
            ],
            3       => [
                ['Maximum Range', '+68%', 'text-danger'],
                ['Armour Piercing', '+80%', 'text-info'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            4       => [
                ['Maximum Range', '+84%', 'text-danger'],
                ['Armour Piercing', '+100%', 'text-info'],
                ['Thermal Load', '+4%', 'text-danger'],
            ],
            5       => [
                ['Maximum Range', '+100%', 'text-danger'],
                ['Armour Piercing', '+120%', 'text-info'],
                ['Thermal Load', '+5%', 'text-danger'],
            ],
        ],
        803     => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        804     => [    // Long-Range Weapon
            1       => [
                ['Power Draw', '+3%', 'text-danger'],
                ['Maximum Range', '+20%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+6%', 'text-danger'],
                ['Maximum Range', '+40%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+9%', 'text-danger'],
                ['Maximum Range', '+60%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Maximum Range', '+80%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Maximum Range', '+100%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        805     => [    // Overcharged Weapon
            1       => [
                ['Clip Size', '-3%', 'text-danger'],
                ['Damage', '+30%', 'text-info'],
                ['Distributor Draw', '+15%', 'text-danger'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '-6%', 'text-danger'],
                ['Damage', '+40%', 'text-info'],
                ['Distributor Draw', '+20%', 'text-danger'],
                ['Thermal Load', '+6%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '-9%', 'text-danger'],
                ['Damage', '+50%', 'text-info'],
                ['Distributor Draw', '+25%', 'text-danger'],
                ['Thermal Load', '+9%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '-12%', 'text-danger'],
                ['Damage', '+60%', 'text-info'],
                ['Distributor Draw', '+30%', 'text-danger'],
                ['Thermal Load', '+12%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '-15%', 'text-danger'],
                ['Damage', '+70%', 'text-info'],
                ['Distributor Draw', '+35%', 'text-danger'],
                ['Thermal Load', '+15%', 'text-danger'],
            ],
        ],
        806     => [    // Rapid Fire Modification
            1       => [
                ['Damage', '-1%', 'text-danger'],
                ['Reload Time', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+8%', 'text-info'],
            ],
            2       => [
                ['Damage', '-2%', 'text-danger'],
                ['Reload Time', '-35%', 'text-info'],
                ['Distributor Draw', '-5%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+17%', 'text-info'],
            ],
            3       => [
                ['Damage', '-3%', 'text-danger'],
                ['Reload Time', '-45%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+26%', 'text-info'],
            ],
            4       => [
                ['Damage', '-4%', 'text-danger'],
                ['Reload Time', '-55%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+35%', 'text-info'],
            ],
            5       => [
                ['Damage', '-5%', 'text-danger'],
                ['Reload Time', '-65%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+44%', 'text-info'],
            ],
        ],
        807     => [    // Short-Range Blaster
            1       => [
                ['Damage', '+27%', 'text-info'],
                ['Maximum Range', '-10%', 'text-info'],
            ],
            2       => [
                ['Damage', '+39%', 'text-info'],
                ['Maximum Range', '-20%', 'text-info'],
                ['Thermal Load', '+10%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+51%', 'text-info'],
                ['Maximum Range', '-30%', 'text-info'],
                ['Thermal Load', '+20%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+63%', 'text-info'],
                ['Maximum Range', '-40%', 'text-info'],
                ['Thermal Load', '+30%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+75%', 'text-info'],
                ['Maximum Range', '-50%', 'text-info'],
                ['Thermal Load', '+40%', 'text-danger'],
            ],
        ],
        808     => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],

        // HARDPOINT - Pulse Laser
        901     => [    // Efficient Weapon
            1       => [
                ['Damage', '+8%', 'text-info'],
                ['Thermal Load', '-38%', 'text-info'],
            ],
            2       => [
                ['Damage', '+12%', 'text-info'],
                ['Power Draw', '-12%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Thermal Load', '-43%', 'text-info'],
            ],
            3       => [
                ['Damage', '+16%', 'text-info'],
                ['Power Draw', '-24%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Thermal Load', '-48%', 'text-info'],
            ],
            4       => [
                ['Damage', '+20%', 'text-info'],
                ['Power Draw', '-36%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Thermal Load', '-53%', 'text-info'],
            ],
            5       => [
                ['Damage', '+24%', 'text-info'],
                ['Power Draw', '-48%', 'text-info'],
                ['Distributor Draw', '-45%', 'text-info'],
                ['Thermal Load', '-60%', 'text-info'],
            ],
        ],
        902     => [    // Focused Weapon
            1       => [
                ['Maximum Range', '+36%', 'text-danger'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Thermal Load', '+1%', 'text-danger'],
            ],
            2       => [
                ['Maximum Range', '+52%', 'text-danger'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Thermal Load', '+2%', 'text-danger'],
            ],
            3       => [
                ['Maximum Range', '+68%', 'text-danger'],
                ['Armour Piercing', '+80%', 'text-info'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            4       => [
                ['Maximum Range', '+84%', 'text-danger'],
                ['Armour Piercing', '+100%', 'text-info'],
                ['Thermal Load', '+4%', 'text-danger'],
            ],
            5       => [
                ['Maximum Range', '+100%', 'text-danger'],
                ['Armour Piercing', '+120%', 'text-info'],
                ['Thermal Load', '+5%', 'text-danger'],
            ],
        ],
        903     => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        904     => [    // Long-Range Weapon
            1       => [
                ['Power Draw', '+3%', 'text-danger'],
                ['Maximum Range', '+20%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+6%', 'text-danger'],
                ['Maximum Range', '+40%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+9%', 'text-danger'],
                ['Maximum Range', '+60%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Maximum Range', '+80%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Maximum Range', '+100%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        905     => [    // Overcharged Weapon
            1       => [
                ['Damage', '+30%', 'text-info'],
                ['Distributor Draw', '+15%', 'text-danger'],
                ['Thermal Load', '+3%', 'text-danger'],
            ],
            2       => [
                ['Damage', '+40%', 'text-info'],
                ['Distributor Draw', '+20%', 'text-danger'],
                ['Thermal Load', '+6%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+50%', 'text-info'],
                ['Distributor Draw', '+25%', 'text-danger'],
                ['Thermal Load', '+9%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+60%', 'text-info'],
                ['Distributor Draw', '+30%', 'text-danger'],
                ['Thermal Load', '+12%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+70%', 'text-info'],
                ['Distributor Draw', '+35%', 'text-danger'],
                ['Thermal Load', '+15%', 'text-danger'],
            ],
        ],
        906     => [    // Rapid Fire Modification
            1       => [
                ['Damage', '-1%', 'text-danger'],
                ['Reload Time', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+8%', 'text-info'],
            ],
            2       => [
                ['Damage', '-2%', 'text-danger'],
                ['Reload Time', '-35%', 'text-info'],
                ['Distributor Draw', '-5%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+17%', 'text-info'],
            ],
            3       => [
                ['Damage', '-3%', 'text-danger'],
                ['Reload Time', '-45%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+26%', 'text-info'],
            ],
            4       => [
                ['Damage', '-4%', 'text-danger'],
                ['Reload Time', '-55%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+35%', 'text-info'],
            ],
            5       => [
                ['Damage', '-5%', 'text-danger'],
                ['Reload Time', '-65%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+44%', 'text-info'],
            ],
        ],
        907     => [    // Short-Range Blaster
            1       => [
                ['Damage', '+27%', 'text-info'],
                ['Maximum Range', '-10%', 'text-info'],
            ],
            2       => [
                ['Damage', '+39%', 'text-info'],
                ['Maximum Range', '-20%', 'text-info'],
                ['Thermal Load', '+10%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+51%', 'text-info'],
                ['Maximum Range', '-30%', 'text-info'],
                ['Thermal Load', '+20%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+63%', 'text-info'],
                ['Maximum Range', '-40%', 'text-info'],
                ['Thermal Load', '+30%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+75%', 'text-info'],
                ['Maximum Range', '-50%', 'text-info'],
                ['Thermal Load', '+40%', 'text-danger'],
            ],
        ],
        908     => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // HARDPOINT - Rail Gun
        1001    => [    // High Capacity Magazine
            1       => [
                ['Clip Size', '+36%', 'text-info'],
                ['Power Draw', '+4%', 'text-danger'],
                ['Ammo Capacity', '+36%', 'text-info'],
                ['Rate of Fire', '+2%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '+52%', 'text-info'],
                ['Power Draw', '+8%', 'text-danger'],
                ['Ammo Capacity', '+52%', 'text-info'],
                ['Rate of Fire', '+4%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '+68%', 'text-info'],
                ['Power Draw', '+12%', 'text-danger'],
                ['Ammo Capacity', '+68%', 'text-info'],
                ['Rate of Fire', '+6%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '+84%', 'text-info'],
                ['Power Draw', '+16%', 'text-danger'],
                ['Ammo Capacity', '+84%', 'text-info'],
                ['Rate of Fire', '+8%', 'text-info'],
                ['Mass', '+50%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '+100%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
                ['Ammo Capacity', '+100%', 'text-info'],
                ['Rate of Fire', '+10%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
        ],
        1002    => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        1003    => [    // Long-Range Weapon
            1       => [
                ['Power Draw', '+3%', 'text-danger'],
                ['Maximum Range', '+20%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+6%', 'text-danger'],
                ['Maximum Range', '+40%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+9%', 'text-danger'],
                ['Maximum Range', '+60%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Maximum Range', '+80%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Maximum Range', '+100%', 'text-danger'],
                ['Damage Falloff Start', '+100%', 'text-danger'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        1004    => [    // Short-Range Blaster
            1       => [
                ['Damage', '+27%', 'text-info'],
                ['Maximum Range', '-10%', 'text-info'],
            ],
            2       => [
                ['Damage', '+39%', 'text-info'],
                ['Maximum Range', '-20%', 'text-info'],
                ['Thermal Load', '+10%', 'text-danger'],
            ],
            3       => [
                ['Damage', '+51%', 'text-info'],
                ['Maximum Range', '-30%', 'text-info'],
                ['Thermal Load', '+20%', 'text-danger'],
            ],
            4       => [
                ['Damage', '+63%', 'text-info'],
                ['Maximum Range', '-40%', 'text-info'],
                ['Thermal Load', '+30%', 'text-danger'],
            ],
            5       => [
                ['Damage', '+75%', 'text-info'],
                ['Maximum Range', '-50%', 'text-info'],
                ['Thermal Load', '+40%', 'text-danger'],
            ],
        ],
        1005    => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],

        // HARDPOINT - Seeker Missile Rack
        1101    => [    // High Capacity Magazine
            1       => [
                ['Clip Size', '+36%', 'text-info'],
                ['Power Draw', '+4%', 'text-danger'],
                ['Ammo Capacity', '+36%', 'text-info'],
                ['Rate of Fire', '+2%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Clip Size', '+52%', 'text-info'],
                ['Power Draw', '+8%', 'text-danger'],
                ['Ammo Capacity', '+52%', 'text-info'],
                ['Rate of Fire', '+4%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            3       => [
                ['Clip Size', '+68%', 'text-info'],
                ['Power Draw', '+12%', 'text-danger'],
                ['Ammo Capacity', '+68%', 'text-info'],
                ['Rate of Fire', '+6%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            4       => [
                ['Clip Size', '+84%', 'text-info'],
                ['Power Draw', '+16%', 'text-danger'],
                ['Ammo Capacity', '+84%', 'text-info'],
                ['Rate of Fire', '+8%', 'text-info'],
                ['Mass', '+50%', 'text-danger'],
            ],
            5       => [
                ['Clip Size', '+100%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
                ['Ammo Capacity', '+100%', 'text-info'],
                ['Rate of Fire', '+10%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
        ],
        1102    => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        1103    => [    // Rapid Fire Modification
            1       => [
                ['Damage', '-1%', 'text-danger'],
                ['Reload Time', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+8%', 'text-info'],
            ],
            2       => [
                ['Damage', '-2%', 'text-danger'],
                ['Reload Time', '-35%', 'text-info'],
                ['Distributor Draw', '-5%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+17%', 'text-info'],
            ],
            3       => [
                ['Damage', '-3%', 'text-danger'],
                ['Reload Time', '-45%', 'text-info'],
                ['Distributor Draw', '-15%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+26%', 'text-info'],
            ],
            4       => [
                ['Damage', '-4%', 'text-danger'],
                ['Reload Time', '-55%', 'text-info'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+35%', 'text-info'],
            ],
            5       => [
                ['Damage', '-5%', 'text-danger'],
                ['Reload Time', '-65%', 'text-info'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Jitter', '+0.5', 'text-danger'],
                ['Rate of Fire', '+44%', 'text-info'],
            ],
        ],
        1104    => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],

        // HARDPOINT - Torpedo Pylon
        1201    => [    // Light Weight Mount
            1       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-30%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Mass', '-45%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Distributor Draw', '-25%', 'text-info'],
                ['Mass', '-60%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Distributor Draw', '-30%', 'text-info'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Integrity', '-60%', 'text-danger'],
                ['Distributor Draw', '-35%', 'text-info'],
                ['Mass', '-90%', 'text-info'],
            ],
        ],
        1202    => [    // Sturdy Mount
            1       => [
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Armour Piercing', '+20%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+150%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Armour Piercing', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+200%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Armour Piercing', '+40%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+250%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Armour Piercing', '+50%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Armour Piercing', '+60%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // UTILITY MOUNT - Chaff Launcher
        10101   => [    // Ammo capacity
            1       => [
                ['Reload Time', '+10%', 'text-danger'],
                ['Ammo Capacity', '+50%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10102   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        10103   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        10104   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // UTILITY MOUNT - Electronic Countermeasure
        10201   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        10202   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        10203   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // UTILITY MOUNT - Frame Shift Wake Scanner
        10301   => [    // Fast Scanner
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Scan Range', '-5%', 'text-danger'],
                ['Scan Time', '-20%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Scan Range', '-10%', 'text-danger'],
                ['Scan Time', '-35%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Scan Range', '-15%', 'text-danger'],
                ['Scan Time', '-50%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Scan Range', '-20%', 'text-danger'],
                ['Scan Time', '-65%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Scan Range', '-25%', 'text-danger'],
                ['Scan Time', '-80%', 'text-info'],
            ],
        ],
        10302   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        10303   => [    // Long-Range Scanner
            1       => [
                ['Scan Angle', '-10%', 'text-danger'],
                ['Scan Range', '+24%', 'text-info'],
                ['Power Draw', '+10%', 'text-danger'],
            ],
            2       => [
                ['Scan Angle', '-15%', 'text-danger'],
                ['Scan Range', '+48%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
            ],
            3       => [
                ['Scan Angle', '-20%', 'text-danger'],
                ['Scan Range', '+72%', 'text-info'],
                ['Power Draw', '+30%', 'text-danger'],
            ],
            4       => [
                ['Scan Angle', '-25%', 'text-danger'],
                ['Scan Range', '+96%', 'text-info'],
                ['Power Draw', '+40%', 'text-danger'],
            ],
            5       => [
                ['Scan Angle', '-30%', 'text-danger'],
                ['Scan Range', '+120%', 'text-info'],
                ['Power Draw', '+50%', 'text-danger'],
            ],
        ],
        10304   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        10305   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        10306   => [    // Wide Angle Scanner
            1       => [
                ['Scan Angle', '+40%', 'text-info'],
                ['Scan Time', '+10%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Scan Angle', '+80%', 'text-info'],
                ['Scan Time', '+20%', 'text-danger'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Scan Angle', '+120%', 'text-info'],
                ['Scan Time', '+30%', 'text-danger'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Scan Angle', '+160%', 'text-info'],
                ['Scan Time', '+40%', 'text-danger'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Scan Angle', '+200%', 'text-info'],
                ['Scan Time', '+50%', 'text-danger'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // UTILITY MOUNT - Heat Sink Launcher
        10401   => [    // Heatsink Ammo Capacity
            1       => [
                ['Reload Time', '+50%', 'text-danger'],
                ['Ammo Capacity', '+50%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10402   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        10403   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        10404   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // UTILITY MOUNT - Kill Warrant Scanner
        10501   => [    // Fast Scanner
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Scan Range', '-5%', 'text-danger'],
                ['Scan Time', '-20%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Scan Range', '-10%', 'text-danger'],
                ['Scan Time', '-35%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Scan Range', '-15%', 'text-danger'],
                ['Scan Time', '-50%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Scan Range', '-20%', 'text-danger'],
                ['Scan Time', '-65%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Scan Range', '-25%', 'text-danger'],
                ['Scan Time', '-80%', 'text-info'],
            ],
        ],
        10502   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        10503   => [    // Long-Range Scanner
            1       => [
                ['Scan Angle', '-10%', 'text-danger'],
                ['Scan Range', '+24%', 'text-info'],
                ['Power Draw', '+10%', 'text-danger'],
            ],
            2       => [
                ['Scan Angle', '-15%', 'text-danger'],
                ['Scan Range', '+48%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
            ],
            3       => [
                ['Scan Angle', '-20%', 'text-danger'],
                ['Scan Range', '+72%', 'text-info'],
                ['Power Draw', '+30%', 'text-danger'],
            ],
            4       => [
                ['Scan Angle', '-25%', 'text-danger'],
                ['Scan Range', '+96%', 'text-info'],
                ['Power Draw', '+40%', 'text-danger'],
            ],
            5       => [
                ['Scan Angle', '-30%', 'text-danger'],
                ['Scan Range', '+120%', 'text-info'],
                ['Power Draw', '+50%', 'text-danger'],
            ],
        ],
        10504   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        10505   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        10506   => [    // Wide Angle Scanner
            1       => [
                ['Scan Angle', '+40%', 'text-info'],
                ['Scan Time', '+10%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Scan Angle', '+80%', 'text-info'],
                ['Scan Time', '+20%', 'text-danger'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Scan Angle', '+120%', 'text-info'],
                ['Scan Time', '+30%', 'text-danger'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Scan Angle', '+160%', 'text-info'],
                ['Scan Time', '+40%', 'text-danger'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Scan Angle', '+200%', 'text-info'],
                ['Scan Time', '+50%', 'text-danger'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // UTILITY MOUNT - Manifest Scanner
        10601   => [    // Fast Scanner
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Scan Range', '-5%', 'text-danger'],
                ['Scan Time', '-20%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Scan Range', '-10%', 'text-danger'],
                ['Scan Time', '-35%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Scan Range', '-15%', 'text-danger'],
                ['Scan Time', '-50%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Scan Range', '-20%', 'text-danger'],
                ['Scan Time', '-65%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Scan Range', '-25%', 'text-danger'],
                ['Scan Time', '-80%', 'text-info'],
            ],
        ],
        10602   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        10603   => [    // Long-Range Scanner
            1       => [
                ['Scan Angle', '-10%', 'text-danger'],
                ['Scan Range', '+24%', 'text-info'],
                ['Power Draw', '+10%', 'text-danger'],
            ],
            2       => [
                ['Scan Angle', '-15%', 'text-danger'],
                ['Scan Range', '+48%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
            ],
            3       => [
                ['Scan Angle', '-20%', 'text-danger'],
                ['Scan Range', '+72%', 'text-info'],
                ['Power Draw', '+30%', 'text-danger'],
            ],
            4       => [
                ['Scan Angle', '-25%', 'text-danger'],
                ['Scan Range', '+96%', 'text-info'],
                ['Power Draw', '+40%', 'text-danger'],
            ],
            5       => [
                ['Scan Angle', '-30%', 'text-danger'],
                ['Scan Range', '+120%', 'text-info'],
                ['Power Draw', '+50%', 'text-danger'],
            ],
        ],
        10604   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        10605   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        10606   => [    // Wide Angle Scanner
            1       => [
                ['Scan Angle', '+40%', 'text-info'],
                ['Scan Time', '+10%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Scan Angle', '+80%', 'text-info'],
                ['Scan Time', '+20%', 'text-danger'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Scan Angle', '+120%', 'text-info'],
                ['Scan Time', '+30%', 'text-danger'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Scan Angle', '+160%', 'text-info'],
                ['Scan Time', '+40%', 'text-danger'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Scan Angle', '+200%', 'text-info'],
                ['Scan Time', '+50%', 'text-danger'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // UTILITY MOUNT - Point Defence
        10701   => [    // Point Defence Ammo Capacity
            1       => [
                ['Reload Time', '+10%', 'text-danger'],
                ['Ammo Capacity', '+50%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
            2       => null,
            3       => null,
            4       => null,
            5       => null,
        ],
        10702   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        10703   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        10704   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // UTILITY MOUNT - Shield Booster
        10801   => [    // Blast Resistant Shield Booster
            1       => [
                ['Kinetic Resistance', '-1%', 'text-danger'],
                ['Thermic Resistance', '-1%', 'text-danger'],
                ['Explosive Resistance', '+7%', 'text-info'],
            ],
            2       => [
                ['Kinetic Resistance', '-2%', 'text-danger'],
                ['Thermic Resistance', '-2%', 'text-danger'],
                ['Explosive Resistance', '+12%', 'text-info'],
            ],
            3       => [
                ['Kinetic Resistance', '-3%', 'text-danger'],
                ['Thermic Resistance', '-3%', 'text-danger'],
                ['Explosive Resistance', '+17%', 'text-info'],
            ],
            4       => [
                ['Kinetic Resistance', '-3%', 'text-danger'],
                ['Thermic Resistance', '-3%', 'text-danger'],
                ['Explosive Resistance', '+22%', 'text-info'],
            ],
            5       => [
                ['Kinetic Resistance', '-4%', 'text-danger'],
                ['Thermic Resistance', '-4%', 'text-danger'],
                ['Explosive Resistance', '+27%', 'text-info'],
            ],
        ],
        10802   => [    // Heavy Duty Shield Booster
            1       => [
                ['Power Draw', '+5%', 'text-danger'],
                ['Integrity', '+3%', 'text-info'],
                ['Shield Boost', '+10%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+10%', 'text-danger'],
                ['Integrity', '+6%', 'text-info'],
                ['Shield Boost', '+17%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Integrity', '+9%', 'text-info'],
                ['Shield Boost', '+24%', 'text-info'],
                ['Mass', '+200%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+12%', 'text-info'],
                ['Shield Boost', '+31%', 'text-info'],
                ['Mass', '+250%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+25%', 'text-danger'],
                ['Integrity', '+15%', 'text-info'],
                ['Shield Boost', '+38%', 'text-info'],
                ['Mass', '+300%', 'text-danger'],
            ],
        ],
        10803   => [    // Kinetic Resistant Shield Booster
            1       => [
                ['Kinetic Resistance', '+7%', 'text-info'],
                ['Thermic Resistance', '-1%', 'text-danger'],
                ['Explosive Resistance', '-1%', 'text-danger'],
            ],
            2       => [
                ['Kinetic Resistance', '+12%', 'text-info'],
                ['Thermic Resistance', '-2%', 'text-danger'],
                ['Explosive Resistance', '-2%', 'text-danger'],
            ],
            3       => [
                ['Kinetic Resistance', '+17%', 'text-info'],
                ['Thermic Resistance', '-3%', 'text-danger'],
                ['Explosive Resistance', '-3%', 'text-danger'],
            ],
            4       => [
                ['Kinetic Resistance', '+22%', 'text-info'],
                ['Thermic Resistance', '-3%', 'text-danger'],
                ['Explosive Resistance', '-3%', 'text-danger'],
            ],
            5       => [
                ['Kinetic Resistance', '+27%', 'text-info'],
                ['Thermic Resistance', '-4%', 'text-danger'],
                ['Explosive Resistance', '-4%', 'text-danger'],
            ],
        ],
        10804   => [    // Resistance Augmented Shield Booster
            1       => [
                ['Power Draw', '+5%', 'text-danger'],
                ['Integrity', '-4%', 'text-danger'],
                ['All Resistances', '+5%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+10%', 'text-danger'],
                ['Integrity', '-6%', 'text-danger'],
                ['All Resistances', '+8%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Integrity', '-8%', 'text-danger'],
                ['All Resistances', '+11%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '-10%', 'text-danger'],
                ['All Resistances', '+14%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+25%', 'text-danger'],
                ['Integrity', '-12%', 'text-danger'],
                ['All Resistances', '+17%', 'text-info'],
            ],
        ],
        10805   => [    // Thermal Resistant Shield Booster
            1       => [
                ['Kinetic Resistance', '-1%', 'text-danger'],
                ['Thermic Resistance', '+7%', 'text-info'],
                ['Explosive Resistance', '-1%', 'text-danger'],
            ],
            2       => [
                ['Kinetic Resistance', '-2%', 'text-danger'],
                ['Thermic Resistance', '+12%', 'text-info'],
                ['Explosive Resistance', '-2%', 'text-danger'],
            ],
            3       => [
                ['Kinetic Resistance', '-3%', 'text-danger'],
                ['Thermic Resistance', '+17%', 'text-info'],
                ['Explosive Resistance', '-3%', 'text-danger'],
            ],
            4       => [
                ['Kinetic Resistance', '-3%', 'text-danger'],
                ['Thermic Resistance', '+22%', 'text-info'],
                ['Explosive Resistance', '-3%', 'text-danger'],
            ],
            5       => [
                ['Kinetic Resistance', '-4%', 'text-danger'],
                ['Thermic Resistance', '+27%', 'text-info'],
                ['Explosive Resistance', '-4%', 'text-danger'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
        20101   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Collector Limpet Controller
        20201   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        20202   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        20203   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Detailed Surface Scanner
        20301   => [    // Fast Scanner
            1       => [
                ['Scan Rate', '+20%', 'text-info'],
                ['Power Draw', '+10%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Scan Rate', '+35%', 'text-info'],
                ['Power Draw', '+20%', 'text-danger'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Scan Rate', '+50%', 'text-info'],
                ['Power Draw', '+30%', 'text-danger'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Scan Rate', '+65%', 'text-info'],
                ['Power Draw', '+40%', 'text-danger'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Scan Rate', '+80%', 'text-info'],
                ['Power Draw', '+50%', 'text-danger'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        20302   => [    // Long-Range Scanner
            1       => [
                ['Power Draw', '+10%', 'text-danger'],
                ['Scan Range', '+40%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Scan Range', '+80%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+30%', 'text-danger'],
                ['Scan Range', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Scan Range', '+160%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+50%', 'text-danger'],
                ['Scan Range', '+200%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        20303   => [    // Wide Angle Scanner
            1       => [
                ['Power Draw', '+10%', 'text-danger'],
                ['Scan Angle', '+40%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Scan Angle', '+80%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+30%', 'text-danger'],
                ['Scan Angle', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Scan Angle', '+160%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+50%', 'text-danger'],
                ['Scan Angle', '+200%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
        20401   => [    // Expanded FSD Interdictor Capture Arc
            1       => [
                ['Power Draw', '+10%', 'text-danger'],
                ['Facing Limit', '+40%', 'text-info'],
                ['Range', '-10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Facing Limit', '+60%', 'text-info'],
                ['Range', '-15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+30%', 'text-danger'],
                ['Facing Limit', '+80%', 'text-info'],
                ['Range', '-20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Facing Limit', '+100%', 'text-info'],
                ['Range', '-25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+50%', 'text-danger'],
                ['Facing Limit', '+120%', 'text-info'],
                ['Range', '-30%', 'text-danger'],
            ],
        ],
        20402   => [    // Longer Range FSD Interdictor
            1       => [
                ['Power Draw', '+10%', 'text-danger'],
                ['Range', '+20%', 'text-info'],
                ['Facing Limit', '-10%', 'text-danger'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Range', '+30%', 'text-info'],
                ['Facing Limit', '-15%', 'text-danger'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+30%', 'text-danger'],
                ['Range', '+40%', 'text-info'],
                ['Facing Limit', '-20%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Range', '+50%', 'text-info'],
                ['Facing Limit', '-25%', 'text-danger'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+50%', 'text-danger'],
                ['Range', '+60%', 'text-info'],
                ['Facing Limit', '-30%', 'text-danger'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],

        // OPTIONAL INTERNAL - Fuel Scoop
        20501   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
                
        // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
        20601   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        20602   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        20603   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
        20701   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        20702   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        20703   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Hull Reinforcement Package
        20801   => [    // Blast Resistant Hull Reinforcement
            1       => [
                ['Explosive Resistance', '+12%', 'text-info'],
                ['Thermic Resistance', '-2%', 'text-danger'],
                ['Kinetic Resistance', '-2%', 'text-danger'],
                ['Hull Reinforcement', '+3%', 'text-info'],
            ],
            2       => [
                ['Explosive Resistance', '+19%', 'text-info'],
                ['Thermic Resistance', '-4%', 'text-danger'],
                ['Kinetic Resistance', '-4%', 'text-danger'],
                ['Hull Reinforcement', '+6%', 'text-info'],
            ],
            3       => [
                ['Explosive Resistance', '+26%', 'text-info'],
                ['Thermic Resistance', '-6%', 'text-danger'],
                ['Kinetic Resistance', '-6%', 'text-danger'],
                ['Hull Reinforcement', '+9%', 'text-info'],
            ],
            4       => [
                ['Explosive Resistance', '+33%', 'text-info'],
                ['Thermic Resistance', '-8%', 'text-danger'],
                ['Kinetic Resistance', '-8%', 'text-danger'],
                ['Hull Reinforcement', '+12%', 'text-info'],
            ],
            5       => [
                ['Explosive Resistance', '+40%', 'text-info'],
                ['Thermic Resistance', '-10%', 'text-danger'],
                ['Kinetic Resistance', '-10%', 'text-danger'],
                ['Hull Reinforcement', '+15%', 'text-info'],
            ],
        ],
        20802   => [    // Heavy Duty Hull Reinforcement
            1       => [
                ['Hull Reinforcement', '+24%', 'text-info'],
                ['All Resistances', '+3%', 'text-info'],
                ['Mass', '+8%', 'text-danger'],
            ],
            2       => [
                ['Hull Reinforcement', '+36%', 'text-info'],
                ['All Resistances', '+6%', 'text-info'],
                ['Mass', '+16%', 'text-danger'],
            ],
            3       => [
                ['Hull Reinforcement', '+48%', 'text-info'],
                ['All Resistances', '+9%', 'text-info'],
                ['Mass', '+24%', 'text-danger'],
            ],
            4       => [
                ['Hull Reinforcement', '+60%', 'text-info'],
                ['All Resistances', '+12%', 'text-info'],
                ['Mass', '+32%', 'text-danger'],
            ],
            5       => [
                ['Hull Reinforcement', '+72%', 'text-info'],
                ['All Resistances', '+15%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
        ],
        20803   => [    // Kinetic Resistant Hull Reinforcement
            1       => [
                ['Explosive Resistance', '-2%', 'text-danger'],
                ['Thermic Resistance', '-2%', 'text-danger'],
                ['Kinetic Resistance', '+12%', 'text-info'],
                ['Hull Reinforcement', '+3%', 'text-info'],
            ],
            2       => [
                ['Explosive Resistance', '-4%', 'text-danger'],
                ['Thermic Resistance', '-4%', 'text-danger'],
                ['Kinetic Resistance', '+19%', 'text-info'],
                ['Hull Reinforcement', '+6%', 'text-info'],
            ],
            3       => [
                ['Explosive Resistance', '-6%', 'text-danger'],
                ['Thermic Resistance', '-6%', 'text-danger'],
                ['Kinetic Resistance', '+26%', 'text-info'],
                ['Hull Reinforcement', '+9%', 'text-info'],
            ],
            4       => [
                ['Explosive Resistance', '-8%', 'text-danger'],
                ['Thermic Resistance', '-8%', 'text-danger'],
                ['Kinetic Resistance', '+33%', 'text-info'],
                ['Hull Reinforcement', '+12%', 'text-info'],
            ],
            5       => [
                ['Explosive Resistance', '-10%', 'text-danger'],
                ['Thermic Resistance', '-10%', 'text-danger'],
                ['Kinetic Resistance', '+40%', 'text-info'],
                ['Hull Reinforcement', '+15%', 'text-info'],
            ],
        ],
        20804   => [    // Lightweight Hull Reinforcement
            1       => [
                ['Hull Reinforcement', '-4%', 'text-danger'],
                ['Hull Boost', '+8%', 'text-info'],
                ['Mass', '-8%', 'text-info'],
            ],
            2       => [
                ['Hull Reinforcement', '-8%', 'text-danger'],
                ['Hull Boost', '+12%', 'text-info'],
                ['Mass', '-12%', 'text-info'],
            ],
            3       => [
                ['Hull Reinforcement', '-12%', 'text-danger'],
                ['Hull Boost', '+16%', 'text-info'],
                ['Mass', '-16%', 'text-info'],
            ],
            4       => [
                ['Hull Reinforcement', '-16%', 'text-danger'],
                ['Hull Boost', '+20%', 'text-info'],
                ['Mass', '-20%', 'text-info'],
            ],
            5       => [
                ['Hull Reinforcement', '-20%', 'text-danger'],
                ['Hull Boost', '+24%', 'text-info'],
                ['Mass', '-24%', 'text-info'],
            ],
        ],
        20805   => [    // Thermal Resistant Hull Reinforcement
            1       => [
                ['Explosive Resistance', '-2%', 'text-danger'],
                ['Thermic Resistance', '+12%', 'text-info'],
                ['Kinetic Resistance', '-2%', 'text-danger'],
                ['Hull Reinforcement', '+3%', 'text-info'],
            ],
            2       => [
                ['Explosive Resistance', '-4%', 'text-danger'],
                ['Thermic Resistance', '+19%', 'text-info'],
                ['Kinetic Resistance', '-4%', 'text-danger'],
                ['Hull Reinforcement', '+6%', 'text-info'],
            ],
            3       => [
                ['Explosive Resistance', '-6%', 'text-danger'],
                ['Thermic Resistance', '+26%', 'text-info'],
                ['Kinetic Resistance', '-6%', 'text-danger'],
                ['Hull Reinforcement', '+9%', 'text-info'],
            ],
            4       => [
                ['Explosive Resistance', '-8%', 'text-danger'],
                ['Thermic Resistance', '+33%', 'text-info'],
                ['Kinetic Resistance', '-8%', 'text-danger'],
                ['Hull Reinforcement', '+12%', 'text-info'],
            ],
            5       => [
                ['Explosive Resistance', '-10%', 'text-danger'],
                ['Thermic Resistance', '+40%', 'text-info'],
                ['Kinetic Resistance', '-10%', 'text-danger'],
                ['Hull Reinforcement', '+15%', 'text-info'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Prospector Limpet Controller
        20901   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        20902   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        20903   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Refinery
        21001   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Shield Cell Bank
        21101   => [    // Rapid Charge Shield Cell Bank
            1       => [
                ['Duration', '-6%', 'text-danger'],
                ['Spin Up Time', '-10%', 'text-info'],
                ['Boot Time', '+10%', 'text-danger'],
                ['Shield Reinforcement', '+5%', 'text-info'],
            ],
            2       => [
                ['Duration', '-12%', 'text-danger'],
                ['Spin Up Time', '-20%', 'text-info'],
                ['Boot Time', '+15%', 'text-danger'],
                ['Shield Reinforcement', '+10%', 'text-info'],
            ],
            3       => [
                ['Duration', '-18%', 'text-danger'],
                ['Spin Up Time', '-30%', 'text-info'],
                ['Boot Time', '+20%', 'text-danger'],
                ['Shield Reinforcement', '+15%', 'text-info'],
            ],
            4       => [
                ['Duration', '-24%', 'text-danger'],
                ['Spin Up Time', '-40%', 'text-info'],
                ['Boot Time', '+25%', 'text-danger'],
                ['Shield Reinforcement', '+20%', 'text-info'],
            ],
        ],
        21102   => [    // Specialised Shield Cell Bank
            1       => [
                ['Power Draw', '+10%', 'text-danger'],
                ['Integrity', '-5%', 'text-danger'],
                ['Boot Time', '-8%', 'text-info'],
                ['Thermal Load', '-6%', 'text-info'],
                ['Shield Reinforcement', '+4%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Integrity', '-10%', 'text-danger'],
                ['Boot Time', '-16%', 'text-info'],
                ['Thermal Load', '-12%', 'text-info'],
                ['Shield Reinforcement', '+6%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '-15%', 'text-danger'],
                ['Boot Time', '-24%', 'text-info'],
                ['Thermal Load', '-18%', 'text-info'],
                ['Shield Reinforcement', '+8%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+25%', 'text-danger'],
                ['Integrity', '-20%', 'text-danger'],
                ['Boot Time', '-32%', 'text-info'],
                ['Thermal Load', '-24%', 'text-info'],
                ['Shield Reinforcement', '+10%', 'text-info'],
            ],
        ],
        
        // OPTIONAL INTERNAL - Shield Generator
        21201   => [    // Enhanced, Low Power Shields
            1       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Optimal Strength', '+3%', 'text-info'],
                ['Integrity', '-5%', 'text-danger'],
                ['Optimal Mass', '-2%', 'text-danger'],
                ['Mass', '-18%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '-25%', 'text-info'],
                ['Optimal Strength', '+6%', 'text-info'],
                ['Integrity', '-10%', 'text-danger'],
                ['Optimal Mass', '-3%', 'text-danger'],
                ['Mass', '-26%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Optimal Strength', '+9%', 'text-info'],
                ['Integrity', '-15%', 'text-danger'],
                ['Optimal Mass', '-4%', 'text-danger'],
                ['Mass', '-34%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '-35%', 'text-info'],
                ['Optimal Strength', '+12%', 'text-info'],
                ['Integrity', '-20%', 'text-danger'],
                ['Optimal Mass', '-5%', 'text-danger'],
                ['Mass', '-42%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '-40%', 'text-info'],
                ['Optimal Strength', '+15%', 'text-info'],
                ['Integrity', '-25%', 'text-danger'],
                ['Optimal Mass', '-6%', 'text-danger'],
                ['Mass', '-50%', 'text-info'],
            ],
        ],
        21202   => [    // Kinetic Resistant Shields
            1       => [
                ['Kinetic Resistance', '+10%', 'text-info'],
                ['Integrity', '+20%', 'text-info'],
                ['Thermal Resistance', '-3%', 'text-danger'],
            ],
            2       => [
                ['Kinetic Resistance', '+20%', 'text-info'],
                ['Integrity', '+25%', 'text-info'],
                ['Thermal Resistance', '-6%', 'text-danger'],
            ],
            3       => [
                ['Kinetic Resistance', '+30%', 'text-info'],
                ['Integrity', '+30%', 'text-info'],
                ['Thermal Resistance', '-9%', 'text-danger'],
            ],
            4       => [
                ['Kinetic Resistance', '+40%', 'text-info'],
                ['Integrity', '+35%', 'text-info'],
                ['Thermal Resistance', '-12%', 'text-danger'],
            ],
            5       => [
                ['Kinetic Resistance', '+50%', 'text-info'],
                ['Integrity', '+40%', 'text-info'],
                ['Thermal Resistance', '-15%', 'text-danger'],
            ],
        ],
        21203   => [    // Reinforced Shields
            1       => [
                ['Distributor Draw', '+4%', 'text-danger'],
                ['Optimal Strength', '+14%', 'text-info'],
                ['Broken Regen Rate', '-10%', 'text-danger'],
                ['All Resistances', '+5%', 'text-info'],
            ],
            2       => [
                ['Distributor Draw', '+6%', 'text-danger'],
                ['Optimal Strength', '+20%', 'text-info'],
                ['Broken Regen Rate', '-10%', 'text-danger'],
                ['All Resistances', '+8%', 'text-info'],
            ],
            3       => [
                ['Distributor Draw', '+8%', 'text-danger'],
                ['Optimal Strength', '+26%', 'text-info'],
                ['Broken Regen Rate', '-10%', 'text-danger'],
                ['All Resistances', '+11%', 'text-info'],
            ],
            4       => [
                ['Distributor Draw', '+10%', 'text-danger'],
                ['Optimal Strength', '+32%', 'text-info'],
                ['Broken Regen Rate', '-10%', 'text-danger'],
                ['All Resistances', '+14%', 'text-info'],
            ],
            5       => [
                ['Distributor Draw', '+12%', 'text-danger'],
                ['Optimal Strength', '+38%', 'text-info'],
                ['Broken Regen Rate', '-10%', 'text-danger'],
                ['All Resistances', '+17%', 'text-info'],
            ],
        ],
        21204   => [    // Thermal Resistant Shields
            1       => [
                ['Kinetic Resistance', '-4%', 'text-danger'],
                ['Integrity', '+20%', 'text-info'],
                ['Thermal Resistance', '+10%', 'text-info'],
            ],
            2       => [
                ['Kinetic Resistance', '-8%', 'text-danger'],
                ['Integrity', '+25%', 'text-info'],
                ['Thermal Resistance', '+20%', 'text-info'],
            ],
            3       => [
                ['Kinetic Resistance', '-12%', 'text-danger'],
                ['Integrity', '+30%', 'text-info'],
                ['Thermal Resistance', '+30%', 'text-info'],
            ],
            4       => [
                ['Kinetic Resistance', '-16%', 'text-danger'],
                ['Integrity', '+35%', 'text-info'],
                ['Thermal Resistance', '+40%', 'text-info'],
            ],
            5       => [
                ['Kinetic Resistance', '-20%', 'text-danger'],
                ['Integrity', '+40%', 'text-info'],
                ['Thermal Resistance', '+50%', 'text-info'],
            ],
        ],
        
        // CORE INTERNAL - Frame Shift Drive
        30101   => [    // Faster FSD Boot Sequence
            1       => [
                ['Optimal Mass', '+3%', 'text-info'],
                ['Integrity', '-3%', 'text-danger'],
                ['Boot Time', '-20%', 'text-info'],
                ['Thermal Load', '+4%', 'text-danger'],
            ],
            2       => [
                ['Optimal Mass', '+6%', 'text-info'],
                ['Integrity', '-6%', 'text-danger'],
                ['Boot Time', '-35%', 'text-info'],
                ['Thermal Load', '+8%', 'text-danger'],
            ],
            3       => [
                ['Optimal Mass', '+9%', 'text-info'],
                ['Integrity', '-9%', 'text-danger'],
                ['Boot Time', '-50%', 'text-info'],
                ['Thermal Load', '+12%', 'text-danger'],
            ],
            4       => [
                ['Optimal Mass', '+12%', 'text-info'],
                ['Integrity', '-12%', 'text-danger'],
                ['Boot Time', '-65%', 'text-info'],
                ['Thermal Load', '+16%', 'text-danger'],
            ],
            5       => [
                ['Optimal Mass', '+15%', 'text-info'],
                ['Integrity', '-15%', 'text-danger'],
                ['Boot Time', '-80%', 'text-info'],
                ['Thermal Load', '+20%', 'text-danger'],
            ],
        ],
        30102   => [    // Increased FSD Range
            1       => [
                ['Power Draw', '+3%', 'text-danger'],
                ['Optimal Mass', '+15%', 'text-info'],
                ['Integrity', '-3%', 'text-danger'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+6%', 'text-danger'],
                ['Optimal Mass', '+25%', 'text-info'],
                ['Integrity', '-6%', 'text-danger'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+9%', 'text-danger'],
                ['Optimal Mass', '+35%', 'text-info'],
                ['Integrity', '-9%', 'text-danger'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Optimal Mass', '+45%', 'text-info'],
                ['Integrity', '-12%', 'text-danger'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+15%', 'text-danger'],
                ['Optimal Mass', '+55%', 'text-info'],
                ['Integrity', '-15%', 'text-danger'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        30103   => [    // Shielded FSD
            1       => [
                ['Optimal Mass', '+3%', 'text-info'],
                ['Integrity', '+25%', 'text-info'],
                ['Thermal Load', '-10%', 'text-info'],
                ['Mass', '+4%', 'text-danger'],
            ],
            2       => [
                ['Optimal Mass', '+6%', 'text-info'],
                ['Integrity', '+50%', 'text-info'],
                ['Thermal Load', '-15%', 'text-info'],
                ['Mass', '+8%', 'text-danger'],
            ],
            3       => [
                ['Optimal Mass', '+9%', 'text-info'],
                ['Integrity', '+75%', 'text-info'],
                ['Thermal Load', '-20%', 'text-info'],
                ['Mass', '+12%', 'text-danger'],
            ],
            4       => [
                ['Optimal Mass', '+12%', 'text-info'],
                ['Integrity', '+100%', 'text-info'],
                ['Thermal Load', '-25%', 'text-info'],
                ['Mass', '+16%', 'text-danger'],
            ],
            5       => [
                ['Optimal Mass', '+15%', 'text-info'],
                ['Integrity', '+125%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
        ],
        
        // CORE INTERNAL - Life Support
        30201   => [    // Misc Lightweight
            1       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-75%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-85%', 'text-info'],
            ],
        ],
        30202   => [    // Misc Reinforced
            1       => [
                ['Integrity', '+60%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
            2       => [
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            3       => [
                ['Integrity', '+180%', 'text-info'],
                ['Mass', '+90%', 'text-danger'],
            ],
            4       => [
                ['Integrity', '+240%', 'text-info'],
                ['Mass', '+120%', 'text-danger'],
            ],
            5       => [
                ['Integrity', '+300%', 'text-info'],
                ['Mass', '+150%', 'text-danger'],
            ],
        ],
        30203   => [    // Misc Shielded
            1       => [
                ['Power Draw', '+20%', 'text-danger'],
                ['Integrity', '+60%', 'text-info'],
            ],
            2       => [
                ['Power Draw', '+40%', 'text-danger'],
                ['Integrity', '+120%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+60%', 'text-danger'],
                ['Integrity', '+180%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+80%', 'text-danger'],
                ['Integrity', '+240%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+100%', 'text-danger'],
                ['Integrity', '+300%', 'text-info'],
            ],
        ],
        
        // CORE INTERNAL - Power Distributor
        30301   => [    // Charge Enhanced Power Distributor
            1       => [
                ['Power Capacity', '-1%', 'text-danger'],
                ['Power Recharge', '+9%', 'text-info'],
            ],
            2       => [
                ['Power Capacity', '-2%', 'text-danger'],
                ['Power Recharge', '+18%', 'text-info'],
            ],
            3       => [
                ['Power Capacity', '-3%', 'text-danger'],
                ['Power Recharge', '+27%', 'text-info'],
            ],
            4       => [
                ['Power Capacity', '-4%', 'text-danger'],
                ['Power Recharge', '+36%', 'text-info'],
            ],
            5       => [
                ['Power Capacity', '-5%', 'text-danger'],
                ['Power Recharge', '+45%', 'text-info'],
            ],
        ],
        30302   => [    // Engine Focused Power Distributor
            1       => [
                ['Weapons Capacity', '-3%', 'text-danger'],
                ['Systems Recharge', '-3%', 'text-danger'],
                ['Systems Capacity', '-3%', 'text-danger'],
                ['Engines Capacity', '+20%', 'text-info'],
                ['Weapons Recharge', '-1%', 'text-danger'],
                ['Engines Recharge', '+16%', 'text-info'],
            ],
            2       => [
                ['Weapons Capacity', '-6%', 'text-danger'],
                ['Systems Recharge', '-6%', 'text-danger'],
                ['Systems Capacity', '-6%', 'text-danger'],
                ['Engines Capacity', '+30%', 'text-info'],
                ['Weapons Recharge', '-2%', 'text-danger'],
                ['Engines Recharge', '+23%', 'text-info'],
            ],
            3       => [
                ['Weapons Capacity', '-9%', 'text-danger'],
                ['Systems Recharge', '-9%', 'text-danger'],
                ['Systems Capacity', '-9%', 'text-danger'],
                ['Engines Capacity', '+40%', 'text-info'],
                ['Weapons Recharge', '-3%', 'text-danger'],
                ['Engines Recharge', '+30%', 'text-info'],
            ],
            4       => [
                ['Weapons Capacity', '-12%', 'text-danger'],
                ['Systems Recharge', '-12%', 'text-danger'],
                ['Systems Capacity', '-12%', 'text-danger'],
                ['Engines Capacity', '+50%', 'text-info'],
                ['Weapons Recharge', '-4%', 'text-danger'],
                ['Engines Recharge', '+37%', 'text-info'],
            ],
            5       => [
                ['Weapons Capacity', '-15%', 'text-danger'],
                ['Systems Recharge', '-15%', 'text-danger'],
                ['Systems Capacity', '-15%', 'text-danger'],
                ['Engines Capacity', '+60%', 'text-info'],
                ['Weapons Recharge', '-5%', 'text-danger'],
                ['Engines Recharge', '+44%', 'text-info'],
            ],
        ],
        30303   => [    // High Charge Capacity Power Distributor
            1       => [
                ['Power Recharge', '-2%', 'text-danger'],
                ['Integrity', '+10%', 'text-info'],
                ['Power Capacity', '+10%', 'text-info'],
            ],
            2       => [
                ['Power Recharge', '-6%', 'text-danger'],
                ['Integrity', '+15%', 'text-info'],
                ['Power Capacity', '+18%', 'text-info'],
            ],
            3       => [
                ['Power Recharge', '-10%', 'text-danger'],
                ['Integrity', '+20%', 'text-info'],
                ['Power Capacity', '+26%', 'text-info'],
            ],
            4       => [
                ['Power Recharge', '-14%', 'text-danger'],
                ['Integrity', '+25%', 'text-info'],
                ['Power Capacity', '+34%', 'text-info'],
            ],
            5       => [
                ['Power Recharge', '-18%', 'text-danger'],
                ['Integrity', '+30%', 'text-info'],
                ['Power Capacity', '+42%', 'text-info'],
            ],
        ],
        30304   => [    // Shielded Power Distributor
            1       => [
                ['Power Draw', '-10%', 'text-info'],
                ['Integrity', '+40%', 'text-info'],
                ['Mass', '+3%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '-15%', 'text-info'],
                ['Integrity', '+80%', 'text-info'],
                ['Mass', '+6%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '-20%', 'text-info'],
                ['Integrity', '+120%', 'text-info'],
                ['Mass', '+9%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '-25%', 'text-info'],
                ['Integrity', '+160%', 'text-info'],
                ['Mass', '+12%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '-30%', 'text-info'],
                ['Integrity', '+200%', 'text-info'],
                ['Mass', '+15%', 'text-danger'],
            ],
        ],
        30305   => [    // System Focused Power Distributor
            1       => [
                ['Weapons Capacity', '-3%', 'text-danger'],
                ['Systems Recharge', '+16%', 'text-info'],
                ['Systems Capacity', '+20%', 'text-info'],
                ['Engines Capacity', '-3%', 'text-danger'],
                ['Weapons Recharge', '-3%', 'text-danger'],
                ['Engines Recharge', '-1%', 'text-danger'],
            ],
            2       => [
                ['Weapons Capacity', '-6%', 'text-danger'],
                ['Systems Recharge', '+23%', 'text-info'],
                ['Systems Capacity', '+30%', 'text-info'],
                ['Engines Capacity', '-6%', 'text-danger'],
                ['Weapons Recharge', '-6%', 'text-danger'],
                ['Engines Recharge', '-2%', 'text-danger'],
            ],
            3       => [
                ['Weapons Capacity', '-9%', 'text-danger'],
                ['Systems Recharge', '+30%', 'text-info'],
                ['Systems Capacity', '+40%', 'text-info'],
                ['Engines Capacity', '-9%', 'text-danger'],
                ['Weapons Recharge', '-9%', 'text-danger'],
                ['Engines Recharge', '-3%', 'text-danger'],
            ],
            4       => [
                ['Weapons Capacity', '-12%', 'text-danger'],
                ['Systems Recharge', '+37%', 'text-info'],
                ['Systems Capacity', '+50%', 'text-info'],
                ['Engines Capacity', '-12%', 'text-danger'],
                ['Weapons Recharge', '-12%', 'text-danger'],
                ['Engines Recharge', '-4%', 'text-danger'],
            ],
            5       => [
                ['Weapons Capacity', '-15%', 'text-danger'],
                ['Systems Recharge', '+44%', 'text-info'],
                ['Systems Capacity', '+60%', 'text-info'],
                ['Engines Capacity', '-15%', 'text-danger'],
                ['Weapons Recharge', '-15%', 'text-danger'],
                ['Engines Recharge', '-5%', 'text-danger'],
            ],
        ],
        30306   => [    // Weapon Focused Power Distributor
            1       => [
                ['Weapons Capacity', '+20%', 'text-info'],
                ['Systems Recharge', '-1%', 'text-danger'],
                ['Systems Capacity', '-3%', 'text-danger'],
                ['Engines Capacity', '-3%', 'text-danger'],
                ['Weapons Recharge', '+16%', 'text-info'],
                ['Engines Recharge', '-3%', 'text-danger'],
            ],
            2       => [
                ['Weapons Capacity', '+30%', 'text-info'],
                ['Systems Recharge', '-2%', 'text-danger'],
                ['Systems Capacity', '-6%', 'text-danger'],
                ['Engines Capacity', '-6%', 'text-danger'],
                ['Weapons Recharge', '+23%', 'text-info'],
                ['Engines Recharge', '-6%', 'text-danger'],
            ],
            3       => [
                ['Weapons Capacity', '+40%', 'text-info'],
                ['Systems Recharge', '-3%', 'text-danger'],
                ['Systems Capacity', '-9%', 'text-danger'],
                ['Engines Capacity', '-9%', 'text-danger'],
                ['Weapons Recharge', '+30%', 'text-info'],
                ['Engines Recharge', '-9%', 'text-danger'],
            ],
            4       => [
                ['Weapons Capacity', '+50%', 'text-info'],
                ['Systems Recharge', '-4%', 'text-danger'],
                ['Systems Capacity', '-12%', 'text-danger'],
                ['Engines Capacity', '-12%', 'text-danger'],
                ['Weapons Recharge', '+37%', 'text-info'],
                ['Engines Recharge', '-12%', 'text-danger'],
            ],
            5       => [
                ['Weapons Capacity', '+60%', 'text-info'],
                ['Systems Recharge', '-5%', 'text-danger'],
                ['Systems Capacity', '-15%', 'text-danger'],
                ['Engines Capacity', '-15%', 'text-danger'],
                ['Weapons Recharge', '+44%', 'text-info'],
                ['Engines Recharge', '-15%', 'text-danger'],
            ],
        ],
        
        // CORE INTERNAL - Power Plant
        30401   => [    // Armoured Power Plant
            1       => [
                ['Power Generation', '+4%', 'text-info'],
                ['Integrity', '+40%', 'text-info'],
                ['Heat Efficiency', '-4%', 'text-info'],
                ['Mass', '+4%', 'text-danger'],
            ],
            2       => [
                ['Power Generation', '+6%', 'text-info'],
                ['Integrity', '+60%', 'text-info'],
                ['Heat Efficiency', '-6%', 'text-info'],
                ['Mass', '+8%', 'text-danger'],
            ],
            3       => [
                ['Power Generation', '+8%', 'text-info'],
                ['Integrity', '+80%', 'text-info'],
                ['Heat Efficiency', '-8%', 'text-info'],
                ['Mass', '+12%', 'text-danger'],
            ],
            4       => [
                ['Power Generation', '+10%', 'text-info'],
                ['Integrity', '+100%', 'text-info'],
                ['Heat Efficiency', '-10%', 'text-info'],
                ['Mass', '+16%', 'text-danger'],
            ],
            5       => [
                ['Power Generation', '+12%', 'text-info'],
                ['Integrity', '+120%', 'text-info'],
                ['Heat Efficiency', '-12%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
        ],
        30402   => [    // Low Emissions Power Plant
            1       => [
                ['Mass', '+4%', 'text-danger'],
                ['Heat Efficiency', '-25%', 'text-info'],
                ['Power Generation', '-3%', 'text-danger'],
            ],
            2       => [
                ['Mass', '+8%', 'text-danger'],
                ['Heat Efficiency', '-35%', 'text-info'],
                ['Power Generation', '-6%', 'text-danger'],
            ],
            3       => [
                ['Mass', '+12%', 'text-danger'],
                ['Heat Efficiency', '-45%', 'text-info'],
                ['Power Generation', '-9%', 'text-danger'],
            ],
            4       => [
                ['Mass', '+16%', 'text-danger'],
                ['Heat Efficiency', '-55%', 'text-info'],
                ['Power Generation', '-12%', 'text-danger'],
            ],
            5       => [
                ['Mass', '+20%', 'text-danger'],
                ['Heat Efficiency', '-65%', 'text-info'],
                ['Power Generation', '-15%', 'text-danger'],
            ],
        ],
        30403   => [    // Overcharged Power Plant
            1       => [
                ['Integrity', '-5%', 'text-danger'],
                ['Heat Efficiency', '+5%', 'text-danger'],
                ['Power Generation', '+12%', 'text-info'],
            ],
            2       => [
                ['Integrity', '-10%', 'text-danger'],
                ['Heat Efficiency', '+10%', 'text-danger'],
                ['Power Generation', '+19%', 'text-info'],
            ],
            3       => [
                ['Integrity', '-15%', 'text-danger'],
                ['Heat Efficiency', '+15%', 'text-danger'],
                ['Power Generation', '+26%', 'text-info'],
            ],
            4       => [
                ['Integrity', '-20%', 'text-danger'],
                ['Heat Efficiency', '+20%', 'text-danger'],
                ['Power Generation', '+33%', 'text-info'],
            ],
            5       => [
                ['Integrity', '-25%', 'text-danger'],
                ['Heat Efficiency', '+25%', 'text-danger'],
                ['Power Generation', '+40%', 'text-info'],
            ],
        ],
        
        // CORE INTERNAL - Sensors
        30501   => [    // Light Weight Scanner
            1       => [
                ['Scan Angle', '-5%', 'text-info'],
                ['Integrity', '-10%', 'text-danger'],
                ['Mass', '-20%', 'text-info'],
            ],
            2       => [
                ['Scan Angle', '-10%', 'text-info'],
                ['Integrity', '-20%', 'text-danger'],
                ['Mass', '-35%', 'text-info'],
            ],
            3       => [
                ['Scan Angle', '-15%', 'text-info'],
                ['Integrity', '-30%', 'text-danger'],
                ['Mass', '-50%', 'text-info'],
            ],
            4       => [
                ['Scan Angle', '-20%', 'text-info'],
                ['Integrity', '-40%', 'text-danger'],
                ['Mass', '-65%', 'text-info'],
            ],
            5       => [
                ['Scan Angle', '-25%', 'text-info'],
                ['Integrity', '-50%', 'text-danger'],
                ['Mass', '-80%', 'text-info'],
            ],
        ],
        30502   => [    // Long-Range Scanner
            1       => [
                ['Scan Angle', '-10%', 'text-info'],
                ['Range', '+15%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            2       => [
                ['Scan Angle', '-15%', 'text-info'],
                ['Range', '+30%', 'text-info'],
                ['Mass', '+40%', 'text-danger'],
            ],
            3       => [
                ['Scan Angle', '-20%', 'text-info'],
                ['Range', '+45%', 'text-info'],
                ['Mass', '+60%', 'text-danger'],
            ],
            4       => [
                ['Scan Angle', '-25%', 'text-info'],
                ['Range', '+60%', 'text-info'],
                ['Mass', '+80%', 'text-danger'],
            ],
            5       => [
                ['Scan Angle', '-30%', 'text-info'],
                ['Range', '+75%', 'text-info'],
                ['Mass', '+100%', 'text-danger'],
            ],
        ],
        30503   => [    // Wide Angle Scanner
            1       => [
                ['Scan Angle', '+40%', 'text-danger'],
                ['Power Draw', '+10%', 'text-danger'],
                ['Range', '-4%', 'text-danger'],
            ],
            2       => [
                ['Scan Angle', '+80%', 'text-danger'],
                ['Power Draw', '+20%', 'text-danger'],
                ['Range', '-8%', 'text-danger'],
            ],
            3       => [
                ['Scan Angle', '+120%', 'text-danger'],
                ['Power Draw', '+30%', 'text-danger'],
                ['Range', '-12%', 'text-danger'],
            ],
            4       => [
                ['Scan Angle', '+160%', 'text-danger'],
                ['Power Draw', '+40%', 'text-danger'],
                ['Range', '-16%', 'text-danger'],
            ],
            5       => [
                ['Scan Angle', '+200%', 'text-danger'],
                ['Power Draw', '+50%', 'text-danger'],
                ['Range', '-20%', 'text-danger'],
            ],
        ],
        
        // CORE INTERNAL - Thrusters
        30601   => [    // Clean Drive Tuning
            1       => [
                ['Thermal Load', '-20%', 'text-info'],
                ['Optimal Multiplier', '+8%', 'text-info'],
                ['Optimal Mass', '-2%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+4%', 'text-danger'],
                ['Integrity', '-4%', 'text-danger'],
                ['Optimal Mass', '-4%', 'text-danger'],
                ['Optimal Multiplier', '+13%', 'text-info'],
                ['Thermal Load', '-30%', 'text-info'],
            ],
            3       => [
                ['Power Draw', '+8%', 'text-danger'],
                ['Integrity', '-8%', 'text-danger'],
                ['Optimal Mass', '-6%', 'text-danger'],
                ['Optimal Multiplier', '+18%', 'text-info'],
                ['Thermal Load', '-40%', 'text-info'],
            ],
            4       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Integrity', '-12%', 'text-danger'],
                ['Optimal Mass', '-8%', 'text-danger'],
                ['Optimal Multiplier', '+23%', 'text-info'],
                ['Thermal Load', '-50%', 'text-info'],
            ],
            5       => [
                ['Power Draw', '+16%', 'text-danger'],
                ['Integrity', '-16%', 'text-danger'],
                ['Optimal Mass', '-10%', 'text-danger'],
                ['Optimal Multiplier', '+28%', 'text-info'],
                ['Thermal Load', '-60%', 'text-info'],
            ],
        ],
        30602   => [    // Dirty Drive Tuning
            1       => [
                ['Power Draw', '+4%', 'text-danger'],
                ['Integrity', '-3%', 'text-danger'],
                ['Optimal Mass', '-3%', 'text-danger'],
                ['Optimal Multiplier', '+12%', 'text-info'],
                ['Thermal Load', '+20%', 'text-danger'],
            ],
            2       => [
                ['Power Draw', '+6%', 'text-danger'],
                ['Integrity', '-6%', 'text-danger'],
                ['Optimal Mass', '-5%', 'text-danger'],
                ['Optimal Multiplier', '+19%', 'text-info'],
                ['Thermal Load', '+30%', 'text-danger'],
            ],
            3       => [
                ['Power Draw', '+8%', 'text-danger'],
                ['Integrity', '-9%', 'text-danger'],
                ['Optimal Mass', '-8%', 'text-danger'],
                ['Optimal Multiplier', '+26%', 'text-info'],
                ['Thermal Load', '+40%', 'text-danger'],
            ],
            4       => [
                ['Power Draw', '+10%', 'text-danger'],
                ['Integrity', '-12%', 'text-danger'],
                ['Optimal Mass', '-10%', 'text-danger'],
                ['Optimal Multiplier', '+33%', 'text-info'],
                ['Thermal Load', '+50%', 'text-danger'],
            ],
            5       => [
                ['Power Draw', '+12%', 'text-danger'],
                ['Integrity', '-15%', 'text-danger'],
                ['Optimal Mass', '-13%', 'text-danger'],
                ['Optimal Multiplier', '+40%', 'text-info'],
                ['Thermal Load', '+60%', 'text-danger'],
            ],
        ],
        30603   => [    // Drive Strengthening
            1       => [
                ['Thermal Load', '-10%', 'text-info'],
                ['Integrity', '+30%', 'text-info'],
                ['Mass', '+5%', 'text-danger'],
            ],
            2       => [
                ['Thermal Load', '-20%', 'text-info'],
                ['Integrity', '+50%', 'text-info'],
                ['Mass', '+10%', 'text-danger'],
            ],
            3       => [
                ['Thermal Load', '-30%', 'text-info'],
                ['Integrity', '+70%', 'text-info'],
                ['Mass', '+15%', 'text-danger'],
            ],
            4       => [
                ['Thermal Load', '-40%', 'text-info'],
                ['Integrity', '+90%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            5       => [
                ['Thermal Load', '-50%', 'text-info'],
                ['Integrity', '+110%', 'text-info'],
                ['Mass', '+25%', 'text-danger'],
            ],
        ],
        
        // ARMOUR
        40101   => [    // Blast Resistant Armour
            1       => [
                ['Explosive Resistance', '+12%', 'text-info'],
                ['Thermic Resistance', '-4%', 'text-danger'],
                ['Kinetic Resistance', '-4%', 'text-danger'],
            ],
            2       => [
                ['Explosive Resistance', '+19%', 'text-info'],
                ['Thermic Resistance', '-6%', 'text-danger'],
                ['Kinetic Resistance', '-6%', 'text-danger'],
            ],
            3       => [
                ['Explosive Resistance', '+26%', 'text-info'],
                ['Thermic Resistance', '-8%', 'text-danger'],
                ['Kinetic Resistance', '-8%', 'text-danger'],
            ],
            4       => [
                ['Explosive Resistance', '+33%', 'text-info'],
                ['Thermic Resistance', '-10%', 'text-danger'],
                ['Kinetic Resistance', '-10%', 'text-danger'],
            ],
            5       => [
                ['Explosive Resistance', '+40%', 'text-info'],
                ['Thermic Resistance', '-12%', 'text-danger'],
                ['Kinetic Resistance', '-12%', 'text-danger'],
            ],
        ],
        40102   => [    // Heavy Duty Armour
            1       => [
                ['All Resistances', '+1%', 'text-info'],
                ['Hull Boost', '+12%', 'text-info'],
                ['Mass', '+10%', 'text-danger'],
            ],
            2       => [
                ['All Resistances', '+2%', 'text-info'],
                ['Hull Boost', '+17%', 'text-info'],
                ['Mass', '+15%', 'text-danger'],
            ],
            3       => [
                ['All Resistances', '+3%', 'text-info'],
                ['Hull Boost', '+22%', 'text-info'],
                ['Mass', '+20%', 'text-danger'],
            ],
            4       => [
                ['All Resistances', '+4%', 'text-info'],
                ['Hull Boost', '+27%', 'text-info'],
                ['Mass', '+25%', 'text-danger'],
            ],
            5       => [
                ['All Resistances', '+5%', 'text-info'],
                ['Hull Boost', '+32%', 'text-info'],
                ['Mass', '+30%', 'text-danger'],
            ],
        ],
        40103   => [    // Kinetic Resistant Armour
            1       => [
                ['Explosive Resistance', '-4%', 'text-danger'],
                ['Thermic Resistance', '-4%', 'text-danger'],
                ['Kinetic Resistance', '+12%', 'text-info'],
            ],
            2       => [
                ['Explosive Resistance', '-6%', 'text-danger'],
                ['Thermic Resistance', '-6%', 'text-danger'],
                ['Kinetic Resistance', '+19%', 'text-info'],
            ],
            3       => [
                ['Explosive Resistance', '-8%', 'text-danger'],
                ['Thermic Resistance', '-8%', 'text-danger'],
                ['Kinetic Resistance', '+26%', 'text-info'],
            ],
            4       => [
                ['Explosive Resistance', '-10%', 'text-danger'],
                ['Thermic Resistance', '-10%', 'text-danger'],
                ['Kinetic Resistance', '+33%', 'text-info'],
            ],
            5       => [
                ['Explosive Resistance', '-12%', 'text-danger'],
                ['Thermic Resistance', '-12%', 'text-danger'],
                ['Kinetic Resistance', '+40%', 'text-info'],
            ],
        ],
        40104   => [    // Lightweight Armour
            1       => [
                ['All Resistances', '+3%', 'text-info'],
                ['Hull Boost', '-1%', 'text-danger'],
                ['Mass', '-15%', 'text-info'],
            ],
            2       => [
                ['All Resistances', '+6%', 'text-info'],
                ['Hull Boost', '-2%', 'text-danger'],
                ['Mass', '-25%', 'text-info'],
            ],
            3       => [
                ['All Resistances', '+9%', 'text-info'],
                ['Hull Boost', '-3%', 'text-danger'],
                ['Mass', '-35%', 'text-info'],
            ],
            4       => [
                ['All Resistances', '+12%', 'text-info'],
                ['Hull Boost', '-4%', 'text-danger'],
                ['Mass', '-45%', 'text-info'],
            ],
            5       => [
                ['All Resistances', '+15%', 'text-info'],
                ['Hull Boost', '-5%', 'text-danger'],
                ['Mass', '-55%', 'text-info'],
            ],
        ],
        40105   => [    // Thermal Resistant Armour
            1       => [
                ['Explosive Resistance', '-4%', 'text-danger'],
                ['Thermic Resistance', '+12%', 'text-info'],
                ['Kinetic Resistance', '-4%', 'text-danger'],
            ],
            2       => [
                ['Explosive Resistance', '-6%', 'text-danger'],
                ['Thermic Resistance', '+19%', 'text-info'],
                ['Kinetic Resistance', '-6%', 'text-danger'],
            ],
            3       => [
                ['Explosive Resistance', '-8%', 'text-danger'],
                ['Thermic Resistance', '+26%', 'text-info'],
                ['Kinetic Resistance', '-8%', 'text-danger'],
            ],
            4       => [
                ['Explosive Resistance', '-10%', 'text-danger'],
                ['Thermic Resistance', '+33%', 'text-info'],
                ['Kinetic Resistance', '-10%', 'text-danger'],
            ],
            5       => [
                ['Explosive Resistance', '-12%', 'text-danger'],
                ['Thermic Resistance', '+40%', 'text-info'],
                ['Kinetic Resistance', '-12%', 'text-danger'],
            ],
        ],
    ];
}