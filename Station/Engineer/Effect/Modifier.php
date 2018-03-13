<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
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
                ['Shield reinforcement', '+5%', 'text-info'],
            ],
          6     => [    // Cluster Capacitors
                ['Weapons capacity', '+8%', 'text-info'],
                ['Weapons recharge', '-2%', 'text-danger'],
                ['Engines capacity', '+8%', 'text-info'],
                ['Engines recharge', '-2%', 'text-danger'],
                ['Systems capacity', '+8%', 'text-info'],
                ['Systems recharge', '-2%', 'text-danger'],
            ],
          7     => [    // Concordant Sequence
                ['Wing shield regeneration increased', null, 'text-info'],
                ['Thermal load', '+50%', 'text-danger'],
            ],
          8     => [    // Corrosive Shell
                ['Target armor hardness reduced', null, 'text-info'],
                ['Ammo capacity', '-20%', 'text-danger'],
            ],
          9     => [    // Dazzle Shell
                ['Target sensor acuity reduced', null, 'text-info'],
            ],
         10     => [    // Deep Charge
                ['Power draw', '+5%', 'text-danger'],
                ['Maximum fuel per jump', '+10%', 'text-info'],
            ],
         11     => [    // Deep Plating
                ['Hull boost', '+8%', 'text-info'],
                ['Kinetic resistance', '-3%', 'text-danger'],
                ['Thermal resistance', '-3%', 'text-danger'],
                ['Explosive resistance', '-3%', 'text-danger'],
            ],
         12     => [    // Deep Plating
                ['Hull reinforcement', '+10%', 'text-info'],
                ['Kinetic resistance', '-2%', 'text-danger'],
                ['Thermal resistance', '-2%', 'text-danger'],
                ['Explosive resistance', '-2%', 'text-danger'],
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
                ['Optimal multiplier', '+4%', 'text-info'],
                ['Thermal load', '+10%', 'text-danger'],
            ],
         23     => [    // Drag Munitions
                ['Target speed reduced', null, 'text-info'],
            ],
         24     => null,             // Drive Distributors
         25     => null,             // Emissive Munitions
         26     => null,             // Fast Charge
         27     => null,             // Feedback Cascade
         28     => null,             // Feedback Cascade
         29     => null,             // Flow Control
         30     => null,             // Flow Control
         31     => [    // Flow Control
                ['Power draw', '-10%', 'text-info'],
            ],
         32     => null,             // Flow Control
         33     => null,             // Force Block
         34     => null,             // Force Block
         35     => null,             // Force Shell
         36     => null,             // FSD Interrupt
         37     => null,             // Hi-Cap
         38     => null,             // High Yield Shell
         39     => null,             // Incendiary Rounds
         40     => [    // Inertial Impact
                ['Damage partially kinetic', null, 'text-info'],
                ['Damage', '+50%', 'text-info'],
                ['Jitter', '+0.03', 'text-danger'],
            ],
         41     => null,             // Ion Disruption
         42     => null,             // Layered Plating
         43     => null,             // Layered Plating
         44     => null,             // Lo-draw
         45     => null,             // Mass Lock Munition
         46     => null,             // Mass Manager
         47     => null,             // Monstered
         48     => [    // Multi-servos
                ['Power draw', '+5%', 'text-danger'],
                ['Rate fo fire', '+3%', 'text-info'],
            ],
         49     => null,             // Multi-weave
         50     => null,             // Overload Munitions
         51     => [    // Oversized
                ['Power draw', '+5%', 'text-danger'],
                ['Damage', '+3%', 'text-info'],
            ],
         52     => null,             // Penetrator Munitions
         53     => null,             // Penetrator Payload
         54     => [    // Phasing Sequence
                ['Part of damage through shields', null, 'text-info'],
                ['Damage', '-10%', 'text-danger'],
            ],
         55     => null,             // Plasma Slug
         56     => null,             // Plasma Slug
         57     => null,             // Radiant Canister
         58     => null,             // Recycling Cell
         59     => null,             // Reflective Plating
         60     => null,             // Reflective Plating
         61     => [    // Regeneration Sequence
                ['Target wing shields regenerated', null, 'text-info'],
                ['Damage', '-10%', 'text-danger'],
            ],
         62     => null,             // Reverberating Cascade
         63     => [    // Scramble Spectrum
                ['Target modules malfunctions', null, 'text-info'],
                ['Rate of fire', '-10%', 'text-danger'],
            ],
         64     => null,             // Screening Shell
         65     => null,             // Shift-lock Canister
         66     => null,             // Smart Rounds
         67     => null,             // Stripped Down
         68     => null,             // Stripped Down
         69     => null,             // Stripped Down
         70     => null,             // Stripped Down
         71     => null,             // Stripped Down
         72     => null,             // Stripped Down
         73     => [    // Stripped Down
                ['Mass', '-10%', 'text-info'],
            ],
         74     => null,             // Super Capacitors
         75     => null,             // Super Conduits
         76     => null,             // Super Penetrator
         77     => null,             // Super Penetrator
         78     => null,             // Target Lock Breaker
         79     => null,             // Thermal Cascade
         80     => [    // Thermal Conduit
                ['Damage increases with heat level', null, 'text-info'],
            ],
         81     => [    // Thermal Shock
                ['Target heat increased', null, 'text-info'],
                ['Damage', '-10%', 'text-danger'],
            ],
         82     => null,             // Thermal Spread
         83     => null,             // Thermal Spread
         84     => null,             // Thermal Spread
         85     => [    // Thermal Vent
                ['Heat reduced when striking a target', null, 'text-info'],
            ],
         86     => null,             // Thermo Block
         87     => null,             // Thermo Block
    ];
}