<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Engineer\Effect;
use         EDSM\Alias;

class Multiplier extends Alias
{
    /**
     * List of experimental effects modifiers
     */
    static protected $name  = [
          1     => [    // Angled Plating
                'DefenceModifierHealthMultiplier'   => 0.97,
                'KineticResistance'                 => 1.08,
            ],
          2     => [    // Angled Plating
                'DefenceModifierHealthAddition'     => 0.95,
                'KineticResistance'                 => 1.02,
            ],
          3     => [],  // Auto Loader
          4     => [    // Blast Block
                ['Optimal strength', '-1%', 'text-danger'],
                'ExplosiveResistance'               => 1.02,
            ],
          5     => [    // Boss Cells
                ['Spin up time', '+20%', 'text-danger'],
                ['Shield Reinforcement', '+5%', 'text-info'],
            ],
          6     => [    // Cluster Capacitors
                'WeaponsCapacity'                   => 1.08,
                'WeaponsRecharge'                   => 0.98,
                'EnginesCapacity'                   => 1.08,
                'EnginesRecharge'                   => 0.98,
                'SystemsCapacity'                   => 1.08,
                'SystemsRecharge'                   => 0.98,
            ],
          7     => [    // Concordant Sequence
                'ThermalLoad'                       => 1.5,
            ],
          8     => [    // Corrosive Shell
                ['Ammo Capacity', '-20%', 'text-danger'],
            ],
          9     => [],  // Dazzle Shell
         10     => [    // Deep Charge
                'PowerDraw'                         => 1.05,
                ['Maximum fuel per jump', '+10%', 'text-info'],
            ],
         11     => [    // Deep Plating
                'DefenceModifierHealthMultiplier'   => 1.08,
                'KineticResistance'                 => 0.97,
                'ThermicResistance'                 => 0.97,
                'ExplosiveResistance'               => 0.97,
            ],
         12     => [    // Deep Plating
                'DefenceModifierHealthAddition'     => 1.1,
                'KineticResistance'                 => 0.98,
                'ThermicResistance'                 => 0.98,
                'ExplosiveResistance'               => 0.98,
            ],
         13     => [],  // Dispersal Field
         14     => [    // Double Braced
                'Integrity'                         => 1.15,
            ],
         15     => [    // Double Braced
                'Integrity'                         => 1.15,
            ],
         16     => [    // Double Braced
                'Integrity'                         => 1.25,
            ],
         17     => [    // Double Braced
                'Integrity'                         => 1.15,
            ],
         18     => [    // Double Braced
                'Integrity'                         => 1.15,
            ],
         19     => [    // Double Braced
                'Integrity'                         => 1.15,
            ],
         20     => [    // Double Braced
                'Integrity'                         => 1.15,
            ],
         21     => [    // Double Braced
                'Integrity'                         => 1.15,
            ],
         22     => [    // Drag Drives
                ['Optimal Multiplier', '+4%', 'text-info'],
                'ThermalLoad'                       => 1.1,
            ],
         23     => [],  // Drag Munitions
         24     => [    // Drive Distributors
                ['Optimal Mass', '+10%', 'text-info'],
            ],
         25     => [    // Emissive Munitions
                'ThermalLoad'                       => 2,
         ],
         26     => [    // Fast Charge
                ['Regen Rate', '+15%', 'text-info'],
                ['Broken Regen Rate', '+15%', 'text-info'],
                'KineticResistance'                 => 0.99,
                'ThermicResistance'                 => 0.99,
                'ExplosiveResistance'               => 0.99,
         ],
         27     => [    // Feedback Cascade
                ['Damage', '-20%', 'text-danger'],
                'ThermalLoad'                       => 0.6,
         ],
         28     => [    // Feedback Cascade
                ['Damage', '-20%', 'text-danger'],
         ],
         29     => [    // Flow Control
                'PowerDraw'                         => 0.9,
         ],
         30     => [    // Flow Control
                'PowerDraw'                         => 0.9,
         ],
         31     => [    // Flow Control
                'PowerDraw'                         => 0.9,
            ],
         32     => [    // Flow Control
                'PowerDraw'                         => 0.9,
         ],
         33     => [    // Force Block
                ['Optimal Multiplier', '-3%', 'text-danger'],
                'KineticResistance'                 => 0.92,
         ],
         34     => [    // Force Block
                ['Optimal Strength', '-1%', 'text-danger'],
                'KineticResistance'                 => 1.02,
         ],
         35     => [    // Force Shell
                ['Shot Speed', '-17%', 'text-danger'],
         ],
         36     => [    // FSD Interrupt
                ['Damage', '-30%', 'text-danger'],
                ['Rate of Fire', '-50%', 'text-danger'],
         ],
         37     => [    // Hi-Cap
                'PowerDraw'                         => 1.1,
                ['Optimal Multiplier', '+6%', 'text-info'],
                ['Distributor Draw', '+25%', 'text-danger'],
         ],
         38     => [    // High Yield Shell
                ['Rate of Fire', '-10%', 'text-danger'],
         ],
         39     => [    // Incendiary Rounds
                ['Rate of Fire', '-5%', 'text-danger'],
                'ThermalLoad'                       => 3,
         ],
         40     => [    // Inertial Impact
                ['Damage', '+50%', 'text-info'],
                ['Jitter', '+0.03', 'text-danger'],
            ],
         41     => [    // Ion Disruption

         ],
         42     => [    // Layered Plating
                'DefenceModifierHealthMultiplier'   => 0.97,
                'ExplosiveResistance'               => 1.08,
         ],
         43     => [    // Layered Plating
                'DefenceModifierHealthAddition'     => 0.95,
                'ExplosiveResistance'               => 1.02,
         ],
         44     => [    // Lo-draw
                'PowerDraw'                         => 0.8,
                ['Optimal Multiplier', '-2%', 'text-danger'],
                ['Distributor Draw', '-20%', 'text-info'],
                'KineticResistance'                 => 0.99,
                'ThermicResistance'                 => 0.99,
                'ExplosiveResistance'               => 0.99,
         ],
         45     => [    // Mass Lock Munition

         ],
         46     => [    // Mass Manager
                ['Optimal Mass', '+4%', 'text-info'],
                'Integrity'                         => 0.92,
                'FSDOptimalMass'                    => 1.04,
         ],
         47     => [    // Monstered
                ['Mass', '+10%', 'text-danger'],
                ['Power Generation', '+5%', 'text-info'],
         ],
         48     => [    // Multi-servos
                'PowerDraw'                         => 1.05,
                ['Rate of Fire', '+3%', 'text-info'],
            ],
         49     => [    // Multi-weave
                'PowerDraw'                         => 1.1,
                ['Distributor Draw', '+25%', 'text-danger'],
                'KineticResistance'                 => 1.03,
                'ThermicResistance'                 => 1.03,
                'ExplosiveResistance'               => 1.03,
         ],
         50     => [    // Overload Munitions

         ],
         51     => [    // Oversized
                'PowerDraw'                     => 1.05,
                ['Damage', '+3%', 'text-info'],
            ],
         52     => [    // Penetrator Munitions

         ],
         53     => [    // Penetrator Payload

         ],
         54     => [    // Phasing Sequence
                ['Damage', '-10%', 'text-danger'],
            ],
         55     => [    // Plasma Slug
                ['Damage', '-10%', 'text-danger'],
                ['Ammo Capacity', '-100%', 'text-danger'],
         ],
         56     => [    // Plasma Slug
                ['Damage', '-10%', 'text-danger'],
                'ThermalLoad'                   => 0.6,
                ['Ammo Capacity', '-100%', 'text-danger'],
         ],
         57     => [    // Radiant Canister

         ],
         58     => [    // Recycling Cell
                ['Duration', '+10%', 'text-info'],
                ['Shield Reinforcement', '-5%', 'text-danger'],
         ],
         59     => [    // Reflective Plating
                'DefenceModifierHealthMultiplier'   => 0.97,
                'ThermicResistance'                 => 1.08,
         ],
         60     => [    // Reflective Plating
                'DefenceModifierHealthAddition'     => 0.95,
                'ThermicResistance'                 => 1.02,
         ],
         61     => [    // Regeneration Sequence
                ['Damage', '-10%', 'text-danger'],
            ],
         62     => [    // Reverberating Cascade

         ],
         63     => [    // Scramble Spectrum

                ['Rate of fire', '-10%', 'text-danger'],
            ],
         64     => [    // Screening Shell
                ['Reload Time', '-50%', 'text-info'],
         ],
         65     => [],  // Shift-lock Canister
         66     => [],  // Smart Rounds
         67     => [    // Stripped Down
                'Mass'                              => 0.9,
         ],
         68     => [    // Stripped Down
                'Mass'                              => 0.9,
         ],
         69     => [    // Stripped Down
                'Mass'                              => 0.9,
         ],
         70     => [    // Stripped Down
                'Mass'                              => 0.9,
         ],
         71     => [    // Stripped Down
                'Mass'                              => 0.9,
         ],
         72     => [    // Stripped Down
                'Mass'                              => 0.9,
         ],
         73     => [    // Stripped Down
                'Mass'                              => 0.9,
            ],
         74     => [    // Super Capacitors
                ['Optimal Strength', '+5%', 'text-info'],
                'KineticResistance'                 => 0.98,
                'ThermicResistance'                 => 0.98,
                'ExplosiveResistance'               => 0.98,
         ],
         75     => [    // Super Conduits
                'WeaponsCapacity'                   => 0.96,
                'WeaponsRecharge'                   => 1.05,
                'EnginesCapacity'                   => 0.96,
                'EnginesRecharge'                   => 1.04,
                'SystemsCapacity'                   => 0.96,
                'SystemsRecharge'                   => 1.04,
         ],
         76     => [    // Super Penetrator
                'ThermalLoad'                       => 0.6,
                ['Reload Time', '+50%', 'text-danger'],
         ],
         77     => [    // Super Penetrator
                ['Reload Time', '+50%', 'text-danger'],
         ],
         78     => [],  // Target Lock Breaker
         79     => [],  // Thermal Cascade
         80     => [],  // Thermal Conduit
         81     => [    // Thermal Shock
                ['Damage', '-10%', 'text-danger'],
            ],
         82     => [    // Thermal Spread
                'Mass'                          => 1.05,
                'ThermalLoad'                   => 0.9,
         ],
         83     => [    // Thermal Spread
                'ThermalLoad'                   => 0.9,
         ],
         84     => [    // Thermal Spread
                ['Heat Efficiency', '-10%', 'text-info'],
         ],
         85     => [],  // Thermal Vent
         86     => [    // Thermo Block
                ['Optimal Multiplier', '-3%', 'text-danger'],
                'ThermicResistance'             => 1.08,
         ],
         87     => [    // Thermo Block
                ['Optimal Strength', '-1%', 'text-danger'],
                'ThermicResistance'             => 1.02,
         ],
    ];
}