<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Engineer\Effect;
use         EDSM\Alias;

class Modifier extends Alias
{
    /**
     * List of experimental effects modifiers
     */
    static protected $name  = [
          1     => [    // Angled Plating
                ['Hull Boost', '-3%', 'text-danger'],
                ['Kinetic Resistance', '+8%', 'text-info'],
            ],
          2     => [    // Angled Plating
                ['Hull Boost', '-5%', 'text-danger'],
                ['Kinetic Resistance', '+2%', 'text-info'],
            ],
          3     => [    // Auto Loader
                ['Auto reload while firing', null, 'text-info'],
            ],
          4     => [    // Blast Block
                ['Optimal strength', '-1%', 'text-danger'],
                ['Explosive resistance', '+2%', 'text-info'],
            ],
          5     => [    // Boss Cells
                ['Spin up time', '+20%', 'text-danger'],
                ['Shield Reinforcement', '+5%', 'text-info'],
            ],
          6     => [    // Cluster Capacitors
                ['Weapons Capacity', '+8%', 'text-info'],
                ['Weapons Recharge', '-2%', 'text-danger'],
                ['Engines Capacity', '+8%', 'text-info'],
                ['Engines Recharge', '-2%', 'text-danger'],
                ['Systems Capacity', '+8%', 'text-info'],
                ['Systems Recharge', '-2%', 'text-danger'],
            ],
          7     => [    // Concordant Sequence
                ['Wing shield regeneration increased', null, 'text-info'],
                ['Thermal Load', '+50%', 'text-danger'],
            ],
          8     => [    // Corrosive Shell
                ['Target armor hardness reduced', null, 'text-info'],
                ['Ammo Capacity', '-20%', 'text-danger'],
            ],
          9     => [    // Dazzle Shell
                ['Target sensor acuity reduced', null, 'text-info'],
            ],
         10     => [    // Deep Charge
                ['Power Draw', '+5%', 'text-danger'],
                ['Maximum fuel per jump', '+10%', 'text-info'],
            ],
         11     => [    // Deep Plating
                ['Hull Boost', '+8%', 'text-info'],
                ['Kinetic Resistance', '-3%', 'text-danger'],
                ['Thermal Resistance', '-3%', 'text-danger'],
                ['Explosive Resistance', '-3%', 'text-danger'],
            ],
         12     => [    // Deep Plating
                ['Hull Reinforcement', '+10%', 'text-info'],
                ['Kinetic Resistance', '-2%', 'text-danger'],
                ['Thermal Resistance', '-2%', 'text-danger'],
                ['Explosive Resistance', '-2%', 'text-danger'],
            ],
         13     => [    // Dispersal Field
                ['Target gimbal/turret tracking reduced', null, 'text-info'],
            ],
         14     => [    // Double Braced
                ['Integrity', '+15%', 'text-info'],
            ],
         15     => [    // Double Braced
                ['Integrity', '+15%', 'text-info'],
            ],
         16     => [    // Double Braced
                ['Integrity', '+25%', 'text-info'],
            ],
         17     => [    // Double Braced
                ['Integrity', '+15%', 'text-info'],
            ],
         18     => [    // Double Braced
                ['Integrity', '+15%', 'text-info'],
            ],
         19     => [    // Double Braced
                ['Integrity', '+15%', 'text-info'],
            ],
         20     => [    // Double Braced
                ['Integrity', '+15%', 'text-info'],
            ],
         21     => [    // Double Braced
                ['Integrity', '+15%', 'text-info'],
            ],
         22     => [    // Drag Drives
                ['Optimal Multiplier', '+4%', 'text-info'],
                ['Thermal Load', '+10%', 'text-danger'],
            ],
         23     => [    // Drag Munitions
                ['Target speed reduced', null, 'text-info'],
            ],
         24     => [    // Drive Distributors
                ['Optimal Mass', '+10%', 'text-info'],
            ],
         25     => [    // Emissive Munitions
                ['Target signature increased', null, 'text-info'],
                ['Thermal Load', '+100%', 'text-danger'],
         ],
         26     => [    // Fast Charge
                ['Regen Rate', '+15%', 'text-info'],
                ['Broken Regen Rate', '+15%', 'text-info'],
                ['Kinetic Resistance', '-1%', 'text-danger'],
                ['Thermal Resistance', '-1%', 'text-danger'],
                ['Explosive Resistance', '-1%', 'text-danger'],
         ],
         27     => [    // Feedback Cascade
                ['Target shield cell disrupted', null, 'text-info'],
                ['Damage', '-20%', 'text-danger'],
                ['Thermal Load', '-40%', 'text-info'],
         ],
         28     => [    // Feedback Cascade
                ['Target shield cell disrupted', null, 'text-info'],
                ['Damage', '-20%', 'text-danger'],
         ],
         29     => [    // Flow Control
                ['Power Draw', '-10%', 'text-info'],
         ],
         30     => [    // Flow Control
                ['Power Draw', '-10%', 'text-info'],
         ],
         31     => [    // Flow Control
                ['Power Draw', '-10%', 'text-info'],
            ],
         32     => [    // Flow Control
                ['Power Draw', '-10%', 'text-info'],
         ],
         33     => [    // Force Block
                ['Optimal Multiplier', '-3%', 'text-danger'],
                ['Kinetic Resistance', '-8%', 'text-danger'],
         ],
         34     => [    // Force Block
                ['Optimal Strength', '-1%', 'text-danger'],
                ['Kinetic Resistance', '+2%', 'text-info'],
         ],
         35     => [    // Force Shell
                ['Target pushed off course', null, 'text-info'],
                ['Shot Speed', '-17%', 'text-danger'],
         ],
         36     => [    // FSD Interrupt
                ['Target FSD reboots', null, 'text-info'],
                ['Damage', '-30%', 'text-danger'],
                ['Rate of Fire', '-50%', 'text-danger'],
         ],
         37     => [    // Hi-Cap
                ['Power Draw', '+10%', 'text-danger'],
                ['Optimal Multiplier', '+6%', 'text-info'],
                ['Distributor Draw', '+25%', 'text-danger'],
         ],
         38     => [    // High Yield Shell
                ['Damage partially explosive', null, 'text-info'],
                ['Rate of Fire', '-10%', 'text-danger'],
         ],
         39     => [    // Incendiary Rounds
                ['Damage partially thermal', null, 'text-info'],
                ['Rate of Fire', '-5%', 'text-danger'],
                ['Thermal Load', '+200%', 'text-danger'],
         ],
         40     => [    // Inertial Impact
                ['Damage partially kinetic', null, 'text-info'],
                ['Damage', '+50%', 'text-info'],
                ['Jitter', '+0.03', 'text-danger'],
            ],
         41     => [    // Ion Disruption
                ['Target thrusters reboot', null, 'text-info'],
         ],
         42     => [    // Layered Plating
                ['Hull Boost', '-3%', 'text-danger'],
                ['Explosive Resistance', '+8%', 'text-info'],
         ],
         43     => [    // Layered Plating
                ['Hull Boost', '-5%', 'text-danger'],
                ['Explosive Resistance', '+2%', 'text-info'],
         ],
         44     => [    // Lo-draw
                ['Power Draw', '-20%', 'text-info'],
                ['Optimal Multiplier', '-2%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                ['Kinetic Resistance', '-1%', 'text-danger'],
                ['Thermal Resistance', '-1%', 'text-danger'],
                ['Explosive Resistance', '-1%', 'text-danger'],
         ],
         45     => [    // Mass Lock Munition
                ['Target FSD inhibited', null, 'text-info'],
         ],
         46     => [    // Mass Manager
                ['Integrity', '-8%', 'text-danger'],
                ['Optimal Mass', '+4%', 'text-info'],
         ],
         47     => [    // Monstered
                ['Mass', '+10%', 'text-danger'],
                ['Power Generation', '+5%', 'text-info'],
         ],
         48     => [    // Multi-servos
                ['Power Draw', '+5%', 'text-danger'],
                ['Rate of Fire', '+3%', 'text-info'],
            ],
         49     => [    // Multi-weave
                ['Power Draw', '+10%', 'text-danger'],
                ['Distributor Draw', '+25%', 'text-danger'],
                ['Kinetic Resistance', '+3%', 'text-info'],
                ['Thermal Resistance', '+3%', 'text-info'],
                ['Explosive Resistance', '+3%', 'text-info'],
         ],
         50     => [    // Overload Munitions
                ['Damage partially thermal', null, 'text-info'],
         ],
         51     => [    // Oversized
                ['Power Draw', '+5%', 'text-danger'],
                ['Damage', '+3%', 'text-info'],
            ],
         52     => [    // Penetrator Munitions
                ['Target module damage', null, 'text-info'],
         ],
         53     => [    // Penetrator Payload
                ['Target module damage', null, 'text-info'],
         ],
         54     => [    // Phasing Sequence
                ['Part of damage through shields', null, 'text-info'],
                ['Damage', '-10%', 'text-danger'],
            ],
         55     => [    // Plasma Slug
                ['Reload from ship fuel', null, 'text-info'],
                ['Damage', '-10%', 'text-danger'],
                ['Ammo Capacity', '-100%', 'text-danger'],
         ],
         56     => [    // Plasma Slug
                ['Reload from ship fuel', null, 'text-info'],
                ['Damage', '-10%', 'text-danger'],
                ['Thermal Load', '-40%', 'text-info'],
                ['Ammo Capacity', '-100%', 'text-danger'],
         ],
         57     => [    // Radiant Canister
                ['Area heat increased, sensors disrupted', null, 'text-info'],
         ],
         58     => [    // Recycling Cell
                ['Duration', '+10%', 'text-info'],
                ['Shield Reinforcement', '-5%', 'text-danger'],
         ],
         59     => [    // Reflective Plating
                ['Hull Boost', '-3%', 'text-danger'],
                ['Thermal Resistance', '+8%', 'text-info'],
         ],
         60     => [    // Reflective Plating
                ['Hull Reinforcement', '-5%', 'text-danger'],
                ['Thermal Resistance', '+2%', 'text-info'],
         ],
         61     => [    // Regeneration Sequence
                ['Target wing shields regenerated', null, 'text-info'],
                ['Damage', '-10%', 'text-danger'],
            ],
         62     => [    // Reverberating Cascade
                ['Target shield generator damaged', null, 'text-info'],
         ],
         63     => [    // Scramble Spectrum
                ['Target modules malfunctions', null, 'text-info'],
                ['Rate of fire', '-10%', 'text-danger'],
            ],
         64     => [    // Screening Shell
                ['Effectiveness increase against munitions', null, 'text-info'],
                ['Reload Time', '-50%', 'text-info'],
         ],
         65     => [    // Shift-lock Canister
                ['Area FSDs reboot', null, 'text-info'],
         ],
         66     => [    // Smart Rounds
                ['No damage to untargeted ships', null, 'text-info'],
         ],
         67     => [    // Stripped Down
                ['Mass', '-10%', 'text-info'],
         ],
         68     => [    // Stripped Down
                ['Mass', '-10%', 'text-info'],
         ],
         69     => [    // Stripped Down
                ['Mass', '-10%', 'text-info'],
         ],
         70     => [    // Stripped Down
                ['Mass', '-10%', 'text-info'],
         ],
         71     => [    // Stripped Down
                ['Mass', '-10%', 'text-info'],
         ],
         72     => [    // Stripped Down
                ['Mass', '-10%', 'text-info'],
         ],
         73     => [    // Stripped Down
                ['Mass', '-10%', 'text-info'],
            ],
         74     => [    // Super Capacitors
                ['Optimal Strength', '+5%', 'text-info'],
                ['Kinetic Resistance', '-2%', 'text-danger'],
                ['Thermal Resistance', '-2%', 'text-danger'],
                ['Explosive Resistance', '-2%', 'text-danger'],
         ],
         75     => [    // Super Conduits
                ['Weapons Capacity', '-4%', 'text-danger'],
                ['Weapons Recharge', '+5%', 'text-info'],
                ['Engines Capacity', '-4%', 'text-danger'],
                ['Engines Recharge', '+4%', 'text-info'],
                ['Systems Capacity', '-4%', 'text-danger'],
                ['Systems Recharge', '+4%', 'text-info'],
         ],
         76     => [    // Super Penetrator
                ['Target module damage', null, 'text-info'],
                ['Thermal Load', '-40%', 'text-info'],
                ['Reload Time', '+50%', 'text-danger'],
         ],
         77     => [    // Super Penetrator
                ['Target module damage', null, 'text-info'],
                ['Reload Time', '+50%', 'text-danger'],
         ],
         78     => [    // Target Lock Breaker
                ['Target loses target lock', null, 'text-info'],
         ],
         79     => [    // Thermal Cascade
                ['Shielded target heat increased', null, 'text-info'],
         ],
         80     => [    // Thermal Conduit
                ['Damage increases with heat level', null, 'text-info'],
            ],
         81     => [    // Thermal Shock
                ['Target heat increased', null, 'text-info'],
                ['Damage', '-10%', 'text-danger'],
            ],
         82     => [    // Thermal Spread
                ['Mass', '+5%', 'text-danger'],
                ['Thermal Load', '-10%', 'text-info'],
         ],
         83     => [    // Thermal Spread
                ['Thermal Load', '-10%', 'text-info'],
         ],
         84     => [    // Thermal Spread
                ['Heat Efficiency', '-10%', 'text-info'],
         ],
         85     => [    // Thermal Vent
                ['Heat reduced when striking a target', null, 'text-info'],
            ],
         86     => [    // Thermo Block
                ['Optimal Multiplier', '-3%', 'text-danger'],
                ['Thermal Resistance', '+8%', 'text-info'],
         ],
         87     => [    // Thermo Block
                ['Optimal Strength', '-1%', 'text-danger'],
                ['Thermal Resistance', '+2%', 'text-info'],
         ],
    ];
}