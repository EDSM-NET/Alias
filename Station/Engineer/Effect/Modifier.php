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
          3     => null,             // Auto Loader
          4     => null,             // Blast Block
          5     => null,             // Boss Cells
          6     => null,             // Cluster Capacitors
          7     => [    // Concordant Sequence
                ['Wing shield regeneration increased', null, 'text-info'],
                ['Thermal load', '+50%', 'text-danger'],
            ],
          8     => null,             // Corrosive Shell
          9     => null,             // Dazzle Shell
         10     => null,             // Deep Charge
         11     => null,             // Deep Plating
         12     => null,             // Deep Plating
         13     => null,             // Dispersal Field
         14     => null,             // Double Braced
         15     => null,             // Double Braced
         16     => null,             // Double Braced
         17     => null,             // Double Braced
         18     => null,             // Double Braced
         19     => null,             // Double Braced
         20     => [    // Double Braced
                ['Integrity', '+15%', 'text-info'],
            ],
         21     => null,             // Double Braced
         22     => null,             // Drag Drives
         23     => null,             // Drag Munitions
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
         40     => null,             // Inertial Impact
         41     => null,             // Ion Disruption
         42     => null,             // Layered Plating
         43     => null,             // Layered Plating
         44     => null,             // Lo-draw
         45     => null,             // Mass Lock Munition
         46     => null,             // Mass Manager
         47     => null,             // Monstered
         48     => null,             // Multi-servos
         49     => null,             // Multi-weave
         50     => null,             // Overload Munitions
         51     => [    // Oversized
                ['Power draw', '+5%', 'text-danger'],
                ['Damage', '+3%', 'text-info'],
            ],
         52     => null,             // Penetrator Munitions
         53     => null,             // Penetrator Payload
         54     => null,             // Phasing Sequence
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
         63     => null,             // Scramble Spectrum
         64     => null,             // Screening Shell
         65     => null,             // Shift-lock Canister
         66     => null,             // Smart Rounds
         67     => null,             // Stripped Down
         68     => null,             // Stripped Down
         68     => null,             // Stripped Down
         69     => null,             // Stripped Down
         70     => null,             // Stripped Down
         71     => null,             // Stripped Down
         72     => [    // Stripped Down
                ['Mass', '-10%', 'text-info'],
            ],
         73     => null,             // Super Capacitors
         74     => null,             // Super Conduits
         75     => null,             // Super Penetrator
         76     => null,             // Super Penetrator
         77     => null,             // Target Lock Breaker
         78     => null,             // Thermal Cascade
         79     => [    // Thermal Conduit
                ['Damage increases with heat level', null, 'text-info'],
            ],
         80     => [    // Thermal Shock
                ['Target heat increased', null, 'text-info'],
                ['Damage', '-10%', 'text-danger'],
            ],
         81     => null,             // Thermal Spread
         82     => null,             // Thermal Spread
         83     => null,             // Thermal Spread
         84     => [    // Thermal Vent
                ['Heat reduced when striking a target', null, 'text-info'],
            ],
         85     => null,             // Thermo Block
         86     => null,             // Thermo Block
    ];
}