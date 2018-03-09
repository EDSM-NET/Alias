<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Engineer\Effect;
use         EDSM\Alias;

class Recipe extends Alias
{
    /**
     * List of experimental effects recipes
     */
    static protected $name  = [
          1     => null,             // Angled Plating for Armours
          2     => null,             // Angled Plating for Hull/Module Reinforcements
          3     => null,             // Auto Loader for Cannons, Multi-cannons
          4     => null,             // Blast Block for Shield Boosters
          5     => null,             // Boss Cells for Shield Cell Banks
          6     => null,             // Cluster Capacitors for Power Distributors
          7     => null,             // Concordant Sequence for Pulse Lasers, Burst Lasers, Beam Lasers
          8     => null,             // Corrosive Shell for Multi-cannons, Fragment Cannons
          9     => null,             // Dazzle Shell for Plasma Accelerators, Fragment Cannons
         10     => null,             // Deep Charge for Frame Shift Drives
         11     => null,             // Deep Plating for Armours
         12     => null,             // Deep Plating for Hull/Module Reinforcements
         13     => null,             // Dispersal Field for Plasma Accelerators, Cannons
         14     => null,             // Double Braced for Shield Generators
         15     => null,             // Double Braced for Thrusters
         16     => null,             // Double Braced for Frame Shift Drives
         17     => null,             // Double Braced for Power Plants
         18     => null,             // Double Braced for Power Distributors
         19     => null,             // Double Braced for Shield Cell Banks
         20     => null,             // Double Braced for Beam Lasers, Burst Lasers, Pulse Lasers, Multi-cannons, Plasma Accelerators, Fragment Cannons, Cannons, Rail Guns, Mine Launchers, Torpedo Pylons
         21     => null,             // Double Braced for Shield Boosters
         22     => null,             // Drag Drives for Thrusters
         23     => null,             // Drag Munitions for Fragment Cannons, Seeker Missiles
         24     => null,             // Drive Distributors for Thrusters
         25     => null,             // Emissive Munitions for Pulse Lasers, Multi-cannons, Seeker Missiles, Dumb Missiles, Mine Launchers
         26     => null,             // Fast Charge for Shield Generators
         27     => null,             // Feedback Cascade for Rail Guns
         28     => null,             // Feedback Cascade
         29     => null,             // Flow Control for Power Distributors
         30     => null,             // Flow Control for Shield Cell Banks
         31     => null,             // Flow Control for Beam Lasers, Burst Lasers, Pulse Lasers, Multi-cannons, Plasma Accelerators, Fragment Cannons, Cannons, Rail Guns, Mine Launchers, Torpedo Pylons
         32     => null,             // Flow Control for Shield Boosters
         33     => null,             // Force Block for Shield Generators
         34     => null,             // Force Block for Shield Boosters
         35     => null,             // Force Shell for Cannons
         36     => null,             // FSD Interrupt for Dumb Missiles
         37     => null,             // Hi-Cap for Shield Generators
         38     => null,             // High Yield Shell for Cannons
         39     => null,             // Incendiary Rounds for Multi-cannons, Fragment Cannons
         40     => null,             // Inertial Impact for Burst Lasers
         41     => null,             // Ion Disruption for Mine Launchers
         42     => null,             // Layered Plating for Armours
         43     => null,             // Layered Plating for Hull/Module Reinforcements
         44     => null,             // Lo-draw for Shield Generators
         45     => null,             // Mass Lock Munition for Torpedo Pylons
         46     => null,             // Mass Manager for Frame Shift Drives
         47     => null,             // Monstered for Power Plants
         48     => null,             // Multi-servos for Pulse Lasers, Burst Lasers, Cannons, Multi-cannons, Plasma Accelerators, Rail Guns, Fragment Cannons
         49     => null,             // Multi-weave for Shield Generators
         50     => null,             // Overload Munitions for Seeker Missiles, Dumb Missiles, Mine Launchers
         51     => null,             // Oversized for Beam Lasers, Burst Lasers, Pulse Lasers, Multi-cannons, Plasma Accelerators, Fragment Cannons, Cannons, Rail Guns, Mine Launchers, Torpedo Pylons
         52     => null,             // Penetrator Munitions for Dumb Missiles
         53     => null,             // Penetrator Payload for Torpedo Pylons
         54     => null,             // Phasing Sequence for Pulse Lasers, Burst Lasers, Plasma Accelerators
         55     => null,             // Plasma Slug for Plasma Accelerators
         56     => null,             // Plasma Slug for Rail Guns
         57     => null,             // Radiant Canister for Mine Launchers
         58     => null,             // Recycling Cell for Shield Cell Banks
         59     => null,             // Reflective Plating for Armours
         60     => null,             // Reflective Plating for Hull/Module Reinforcements
         61     => null,             // Regeneration Sequence for Beam Lasers
         62     => null,             // Reverberating Cascade for Torpedo Pylons, Mine Launchers
         63     => null,             // Scramble Spectrum for Pulse Lasers, Burst Lasers
         64     => null,             // Screening Shell for Fragment Cannons
         65     => null,             // Shift-lock Canister for Mine Launchers
         66     => null,             // Smart Rounds for Cannons, Multi-cannons
         67     => null,             // Stripped Down for Shield Generators
         68     => null,             // Stripped Down for Thrusters
         68     => null,             // Stripped Down for Frame Shift Drives
         69     => null,             // Stripped Down for Power Plants
         70     => null,             // Stripped Down for Power Distributors
         71     => null,             // Stripped Down for Shield Cell Banks
         72     => null,             // Stripped Down for Beam Lasers, Burst Lasers, Pulse Lasers, Multi-cannons, Plasma Accelerators, Fragment Cannons, Cannons, Rail Guns, Mine Launchers, Torpedo Pylons
         73     => null,             // Super Capacitors for Shield Boosters
         74     => null,             // Super Conduits for Power Distributors
         75     => null,             // Super Penetrator for Rail Guns
         76     => null,             // Super Penetrator
         77     => null,             // Target Lock Breaker for Plasma Accelerators
         78     => null,             // Thermal Cascade for Cannons, Seeker Missiles, Dumb Missiles
         79     => null,             // Thermal Conduit for Beam Lasers, Plasma Accelerators
         80     => null,             // Thermal Shock for Pulse Lasers, Burst Lasers, Beam Lasers, Multi-cannons
         81     => null,             // Thermal Spread for Thrusters
         82     => null,             // Thermal Spread for Frame Shift Drives
         83     => null,             // Thermal Spread for Power Plants
         84     => null,             // Thermal Vent for Beam Lasers
         85     => null,             // Thermo Block for Shield Generators
         86     => null,             // Thermo Block for Shield Boosters
    ];
}