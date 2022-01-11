<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Engineer\Effect;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of experimental effects names
     */
    static protected $name  = [
          1     => 'Angled Plating',                // Armours
          2     => 'Angled Plating',                // Hull/Module Reinforcements
          3     => 'Auto Loader',                   // Cannons, Multi-cannons
          4     => 'Blast Block',                   // Shield Boosters
          5     => 'Boss Cells',                    // Shield Cell Banks
          6     => 'Cluster Capacitors',            // Power Distributors
          7     => 'Concordant Sequence',           // Pulse Lasers, Burst Lasers, Beam Lasers
          8     => 'Corrosive Shell',               // Multi-cannons, Fragment Cannons
          9     => 'Dazzle Shell',                  // Plasma Accelerators, Fragment Cannons
         10     => 'Deep Charge',                   // Frame Shift Drives
         11     => 'Deep Plating',                  // Armours
         12     => 'Deep Plating',                  // Hull/Module Reinforcements
         13     => 'Dispersal Field',               // Plasma Accelerators, Cannons
         14     => 'Double Braced',                 // Shield Generators
         15     => 'Double Braced',                 // Thrusters
         16     => 'Double Braced',                 // Frame Shift Drives
         17     => 'Double Braced',                 // Power Plants
         18     => 'Double Braced',                 // Power Distributors
         19     => 'Double Braced',                 // Shield Cell Banks
         20     => 'Double Braced',                 // Beam Lasers, Burst Lasers, Pulse Lasers, Multi-cannons, Plasma Accelerators, Fragment Cannons, Cannons, Rail Guns, Mine Launchers, Torpedo Pylons
         21     => 'Double Braced',                 // Shield Boosters
         22     => 'Drag Drives',                   // Thrusters
         23     => 'Drag Munitions',                // Fragment Cannons, Seeker Missiles
         24     => 'Drive Distributors',            // Thrusters
         25     => 'Emissive Munitions',            // Pulse Lasers, Multi-cannons, Seeker Missiles, Dumb Missiles, Mine Launchers
         26     => 'Fast Charge',                   // Shield Generators
         27     => 'Feedback Cascade',              // Rail Guns
         28     => 'Feedback Cascade',
         29     => 'Flow Control',                  // Power Distributors
         30     => 'Flow Control',                  // Shield Cell Banks
         31     => 'Flow Control',                  // Beam Lasers, Burst Lasers, Pulse Lasers, Multi-cannons, Plasma Accelerators, Fragment Cannons, Cannons, Rail Guns, Mine Launchers, Torpedo Pylons
         32     => 'Flow Control',                  // Shield Boosters
         33     => 'Force Block',                   // Shield Generators
         34     => 'Force Block',                   // Shield Boosters
         35     => 'Force Shell',                   // Cannons
         36     => 'FSD Interrupt',                 // Dumb Missiles
         37     => 'Hi-Cap',                        // Shield Generators
         38     => 'High Yield Shell',              // Cannons
         39     => 'Incendiary Rounds',             // Multi-cannons, Fragment Cannons
         40     => 'Inertial Impact',               // Burst Lasers
         41     => 'Ion Disruption',                // Mine Launchers
         42     => 'Layered Plating',               // Armours
         43     => 'Layered Plating',               // Hull/Module Reinforcements
         44     => 'Lo-draw',                       // Shield Generators
         45     => 'Mass Lock Munition',            // Torpedo Pylons
         46     => 'Mass Manager',                  // Frame Shift Drives
         47     => 'Monstered',                     // Power Plants
         48     => 'Multi-servos',                  // Burst Lasers, Pulse Lasers, Cannons, Multi-cannons, Plasma Accelerators, Rail Guns, Fragment Cannons
         49     => 'Multi-weave',                   // Shield Generators
         50     => 'Overload Munitions',            // Seeker Missiles, Dumb Missiles, Mine Launchers
         51     => 'Oversized',                     // Beam Lasers, Burst Lasers, Pulse Lasers, Multi-cannons, Plasma Accelerators, Fragment Cannons, Cannons, Rail Guns, Mine Launchers, Torpedo Pylons
         52     => 'Penetrator Munitions',          // Dumb Missiles
         53     => 'Penetrator Payload',            // Torpedo Pylons
         54     => 'Phasing Sequence',              // Burst Lasers, Pulse Lasers, Plasma Accelerators
         55     => 'Plasma Slug',                   // Plasma Accelerators
         56     => 'Plasma Slug',                   // Rail Guns
         57     => 'Radiant Canister',              // Mine Launchers
         58     => 'Recycling Cell',                // Shield Cell Banks
         59     => 'Reflective Plating',            // Armours
         60     => 'Reflective Plating',            // Hull/Module Reinforcements
         61     => 'Regeneration Sequence',         // Beam Lasers
         62     => 'Reverberating Cascade',         // Torpedo Pylons, Mine Launchers
         63     => 'Scramble Spectrum',             // Pulse Lasers, Burst Lasers
         64     => 'Screening Shell',               // Fragment Cannons
         65     => 'Shift-lock Canister',           // Mine Launchers
         66     => 'Smart Rounds',                  // Cannons, Multi-cannons
         67     => 'Stripped Down',                 // Shield Generators
         68     => 'Stripped Down',                 // Thrusters
         69     => 'Stripped Down',                 // Frame Shift Drives
         70     => 'Stripped Down',                 // Power Plants
         71     => 'Stripped Down',                 // Power Distributors
         72     => 'Stripped Down',                 // Shield Cell Banks
         73     => 'Stripped Down',                 // Beam Lasers, Burst Lasers, Pulse Lasers, Multi-cannons, Plasma Accelerators, Fragment Cannons, Cannons, Rail Guns, Mine Launchers, Torpedo Pylons
         74     => 'Super Capacitors',              // Shield Boosters
         75     => 'Super Conduits',                // Power Distributors
         76     => 'Super Penetrator',              // Rail Guns
         77     => 'Super Penetrator',
         78     => 'Target Lock Breaker',           // Plasma Accelerators
         79     => 'Thermal Cascade',               // Cannons, Seeker Missiles, Dumb Missiles
         80     => 'Thermal Conduit',               // Beam Lasers, Plasma Accelerators
         81     => 'Thermal Shock',                 // Beam Lasers, Burst Lasers, Pulse Lasers, Multi-cannons
         82     => 'Thermal Spread',                // Thrusters
         83     => 'Thermal Spread',                // Frame Shift Drives
         84     => 'Thermal Spread',                // Power Plants
         85     => 'Thermal Vent',                  // Beam Lasers
         86     => 'Thermo Block',                  // Shield Generators
         87     => 'Thermo Block',                  // Shield Boosters
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'special_armour_kinetic'                    => 1,
        'special_hullreinforcement_kinetic'         => 2,
        'special_auto_loader'                       => 3,
        'special_shieldbooster_explosive'           => 4,
        'special_shieldcell_oversized'              => 5,
        'special_powerdistributor_capacity'         => 6,
        'special_concordant_sequence'               => 7,
        'special_corrosive_shell'                   => 8,
        'special_blinding_shell'                    => 9,
        'special_fsd_fuelcapacity'                  => 10,
        'special_armour_chunky'                     => 11,
        'special_hullreinforcement_chunky'          => 12,
        'special_dispersal_field'                   => 13,
        'special_shield_toughened'                  => 14,
        'special_engine_toughened'                  => 15,
        'special_fsd_toughened'                     => 16,
        'special_powerplant_toughened'              => 17,
        'special_powerdistributor_toughened'        => 18,
        'special_shieldcell_toughened'              => 19,
        'special_weapon_toughened'                  => 20,
        'special_shieldbooster_toughened'           => 21,
        'special_engine_overloaded'                 => 22,
        'special_drag_munitions'                    => 23,
        'special_engine_haulage'                    => 24,
        'special_emissive_munitions'                => 25,
        'special_shield_regenerative'               => 26,
        'special_feedback_cascade_cooled'           => 27,
        'special_feedback_cascade'                  => 28,
        'special_powerdistributor_efficient'        => 29,
        'special_shieldcell_efficient'              => 30,
        'special_weapon_efficient'                  => 31,
        'special_shieldbooster_efficient'           => 32,
        'special_shield_kinetic'                    => 33,
        'special_shieldbooster_kinetic'             => 34,
        'special_force_shell'                       => 35,
        'special_fsd_interrupt'                     => 36,
        'special_shield_health'                     => 37,
        'special_high_yield_shell'                  => 38,
        'special_incendiary_rounds'                 => 39,
        'special_distortion_field'                  => 40,
        'special_choke_canister'                    => 41,
        'special_armour_explosive'                  => 42,
        'special_hullreinforcement_explosive'       => 43,
        'special_shield_efficient'                  => 44,
        'special_mass_lock'                         => 45,
        'special_fsd_heavy'                         => 46,
        'special_powerplant_highcharge'             => 47,
        'special_weapon_rateoffire'                 => 48,
        'special_shield_resistive'                  => 49,
        'special_overload_munitions'                => 50,
        'special_weapon_damage'                     => 51,
        'special_penetrator_munitions'              => 52,
        'special_deep_cut_payload'                  => 53,
        'special_phasing_sequence'                  => 54,
        'special_plasma_slug'                       => 55,
        'special_plasma_slug_cooled'                => 56,
        'special_radiant_canister'                  => 57,
        'special_shieldcell_gradual'                => 58,
        'special_armour_thermic'                    => 59,
        'special_hullreinforcement_thermic'         => 60,
        'special_regeneration_sequence'             => 61,
        'special_reverberating_cascade'             => 62,
        'special_scramble_spectrum'                 => 63,
        'special_screening_shell'                   => 64,
        'special_shiftlock_canister'                => 65,
        'special_smart_rounds'                      => 66,
        'special_shield_lightweight'                => 67,
        'special_engine_lightweight'                => 68,
        'special_fsd_lightweight'                   => 69,
        'special_powerplant_lightweight'            => 70,
        'special_powerdistributor_lightweight'      => 71,
        'special_shieldcell_lightweight'            => 72,
        'special_weapon_lightweight'                => 73,
        'special_shieldbooster_chunky'              => 74,
        'special_powerdistributor_fast'             => 75,
        'special_super_penetrator_cooled'           => 76,
        'special_super_penetrator'                  => 77,
        'special_lock_breaker'                      => 78,
        'special_thermal_cascade'                   => 79,
        'special_thermal_conduit'                   => 80,
        'special_thermalshock'                      => 81,
        'special_engine_cooled'                     => 82,
        'special_fsd_cooled'                        => 83,
        'special_powerplant_cooled'                 => 84,
        'special_thermal_vent'                      => 85,
        'special_shield_thermic'                    => 86,
        'special_shieldbooster_thermic'             => 87,
    ];
}