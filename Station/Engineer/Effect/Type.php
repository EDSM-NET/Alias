<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
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
         88     => 'Thermo Block',                  // Shield Boosters
    ];
}