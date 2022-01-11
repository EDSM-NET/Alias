<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Engineer\Effect;
use         EDSM\Alias;

class Available extends Alias
{
    /**
     * List of experimental effects available per blueprint
     */
    static protected $name  = [
        // HARDPOINT - Beam Laser
        101     => [    // Efficient
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            51,             // Oversized
            61,             // Regeneration Sequence
            73,             // Stripped Down
            80,             // Thermal Conduit
            81,             // Thermal Shock
            85,             // Thermal Vent
        ],
        102     => [    // Lightweight
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            51,             // Oversized
            61,             // Regeneration Sequence
            73,             // Stripped Down
            80,             // Thermal Conduit
            81,             // Thermal Shock
            85,             // Thermal Vent
        ],
        103     => [    // Long range
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            51,             // Oversized
            61,             // Regeneration Sequence
            73,             // Stripped Down
            80,             // Thermal Conduit
            81,             // Thermal Shock
            85,             // Thermal Vent
        ],
        104     => [    // Overcharged
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            51,             // Oversized
            61,             // Regeneration Sequence
            73,             // Stripped Down
            80,             // Thermal Conduit
            81,             // Thermal Shock
            85,             // Thermal Vent
        ],
        105     => [    // Short range
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            51,             // Oversized
            61,             // Regeneration Sequence
            73,             // Stripped Down
            80,             // Thermal Conduit
            81,             // Thermal Shock
            85,             // Thermal Vent
        ],
        106     => [    // Sturdy
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            51,             // Oversized
            61,             // Regeneration Sequence
            73,             // Stripped Down
            80,             // Thermal Conduit
            81,             // Thermal Shock
            85,             // Thermal Vent
        ],

        // HARDPOINT - Burst Laser
        201     => [    // Efficient
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            40,             // Inertial Impact
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        202     => [    // Focused
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            40,             // Inertial Impact
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        203     => [    // Lightweight
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            40,             // Inertial Impact
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        204     => [    // Long range
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            40,             // Inertial Impact
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        205     => [    // Overcharged
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            40,             // Inertial Impact
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        206     => [    // Rapid fire
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            40,             // Inertial Impact
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        207     => [    // Short range
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            40,             // Inertial Impact
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        208     => [    // Sturdy
            7,              // Concordant Sequence
            20,             // Double Braced
            31,             // Flow Control
            40,             // Inertial Impact
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],

        // HARDPOINT - Cannon
        301     => [    // Efficient
            3,              // Auto Loader
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            35,             // Force Shell
            38,             // High Yield Shell
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            79,             // Thermal Cascade
        ],
        302     => [    // High capacity
            3,              // Auto Loader
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            35,             // Force Shell
            38,             // High Yield Shell
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            79,             // Thermal Cascade
        ],
        303     => [    // Lightweight
            3,              // Auto Loader
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            35,             // Force Shell
            38,             // High Yield Shell
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            79,             // Thermal Cascade
        ],
        304     => [    // Long range
            3,              // Auto Loader
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            35,             // Force Shell
            38,             // High Yield Shell
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            79,             // Thermal Cascade
        ],
        305     => [    // Overcharged
            3,              // Auto Loader
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            35,             // Force Shell
            38,             // High Yield Shell
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            79,             // Thermal Cascade
        ],
        306     => [    // Rapid fire
            3,              // Auto Loader
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            35,             // Force Shell
            38,             // High Yield Shell
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            79,             // Thermal Cascade
        ],
        307     => [    // Short range
            3,              // Auto Loader
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            35,             // Force Shell
            38,             // High Yield Shell
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            79,             // Thermal Cascade
        ],
        308     => [    // Sturdy
            3,              // Auto Loader
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            35,             // Force Shell
            38,             // High Yield Shell
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            79,             // Thermal Cascade
        ],

        // HARDPOINT - Fragment Cannon
        401     => [    // Double shot
            8,              // Corrosive Shell
            9,              // Dazzle Shell
            20,             // Double Braced
            23,             // Drag Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            64,             // Screening Shell
            73,             // Stripped Down
        ],
        402     => [    // Efficient
            8,              // Corrosive Shell
            9,              // Dazzle Shell
            20,             // Double Braced
            23,             // Drag Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            64,             // Screening Shell
            73,             // Stripped Down
        ],
        403     => [    // High capacity
            8,              // Corrosive Shell
            9,              // Dazzle Shell
            20,             // Double Braced
            23,             // Drag Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            64,             // Screening Shell
            73,             // Stripped Down
        ],
        404     => [    // Lightweight
            8,              // Corrosive Shell
            9,              // Dazzle Shell
            20,             // Double Braced
            23,             // Drag Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            64,             // Screening Shell
            73,             // Stripped Down
        ],
        405     => [    // Overcharged
            8,              // Corrosive Shell
            9,              // Dazzle Shell
            20,             // Double Braced
            23,             // Drag Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            64,             // Screening Shell
            73,             // Stripped Down
        ],
        406     => [    // Rapid fire
            8,              // Corrosive Shell
            9,              // Dazzle Shell
            20,             // Double Braced
            23,             // Drag Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            64,             // Screening Shell
            73,             // Stripped Down
        ],
        407     => [    // Sturdy
            8,              // Corrosive Shell
            9,              // Dazzle Shell
            20,             // Double Braced
            23,             // Drag Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            64,             // Screening Shell
            73,             // Stripped Down
        ],

        // HARDPOINT - Mine Launcher
        501     => [    // High capacity
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            41,             // Ion Disruption
            50,             // Overload Munitions
            51,             // Oversized
            57,             // Radiant Canister
            62,             // Reverberating Cascade
            65,             // Shift-lock Canister
            73,             // Stripped Down
        ],
        502     => [    // Lightweight
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            41,             // Ion Disruption
            50,             // Overload Munitions
            51,             // Oversized
            57,             // Radiant Canister
            62,             // Reverberating Cascade
            65,             // Shift-lock Canister
            73,             // Stripped Down
        ],
        503     => [    // Rapid fire
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            41,             // Ion Disruption
            50,             // Overload Munitions
            51,             // Oversized
            57,             // Radiant Canister
            62,             // Reverberating Cascade
            65,             // Shift-lock Canister
            73,             // Stripped Down
        ],
        504     => [    // Sturdy
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            41,             // Ion Disruption
            50,             // Overload Munitions
            51,             // Oversized
            57,             // Radiant Canister
            62,             // Reverberating Cascade
            65,             // Shift-lock Canister
            73,             // Stripped Down
        ],

        // HARDPOINT - Missile Rack
        601     => [    // High capacity
            25,             // Emissive Munitions
            36,             // FSD Interrupt
            50,             // Overload Munitions
            52,             // Penetrator Munitions
            79,             // Thermal Cascade
        ],
        602     => [    // Lightweight
            25,             // Emissive Munitions
            36,             // FSD Interrupt
            50,             // Overload Munitions
            52,             // Penetrator Munitions
            79,             // Thermal Cascade
        ],
        603     => [    // Rapid fire
            25,             // Emissive Munitions
            36,             // FSD Interrupt
            50,             // Overload Munitions
            52,             // Penetrator Munitions
            79,             // Thermal Cascade
        ],
        604     => [    // Sturdy
            25,             // Emissive Munitions
            36,             // FSD Interrupt
            50,             // Overload Munitions
            52,             // Penetrator Munitions
            79,             // Thermal Cascade
        ],

        // HARDPOINT - Multi-cannon
        701     => [    // Efficient
            3,              // Auto Loader
            8,              // Corrosive Shell
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        702     => [    // High capacity
            3,              // Auto Loader
            8,              // Corrosive Shell
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        703     => [    // Lightweight
            3,              // Auto Loader
            8,              // Corrosive Shell
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        704     => [    // Long range
            3,              // Auto Loader
            8,              // Corrosive Shell
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        705     => [    // Overcharged
            3,              // Auto Loader
            8,              // Corrosive Shell
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        706     => [    // Rapid fire
            3,              // Auto Loader
            8,              // Corrosive Shell
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        707     => [    // Short range
            3,              // Auto Loader
            8,              // Corrosive Shell
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        708     => [    // Sturdy
            3,              // Auto Loader
            8,              // Corrosive Shell
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            39,             // Incendiary Rounds
            48,             // Multi-servos
            51,             // Oversized
            66,             // Smart Rounds
            73,             // Stripped Down
            81,             // Thermal Shock
        ],

        // HARDPOINT - Plasma Accelerator
        801     => [    // Efficient
            9,              // Dazzle Shell
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            55,             // Plasma Slug
            73,             // Stripped Down
            78,             // Target Lock Breaker
            80,             // Thermal Conduit
        ],
        802     => [    // Focused
            9,              // Dazzle Shell
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            55,             // Plasma Slug
            73,             // Stripped Down
            78,             // Target Lock Breaker
            80,             // Thermal Conduit
        ],
        803     => [    // Lightweight
            9,              // Dazzle Shell
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            55,             // Plasma Slug
            73,             // Stripped Down
            78,             // Target Lock Breaker
            80,             // Thermal Conduit
        ],
        804     => [    // Long range
            9,              // Dazzle Shell
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            55,             // Plasma Slug
            73,             // Stripped Down
            78,             // Target Lock Breaker
            80,             // Thermal Conduit
        ],
        805     => [    // Overcharged
            9,              // Dazzle Shell
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            55,             // Plasma Slug
            73,             // Stripped Down
            78,             // Target Lock Breaker
            80,             // Thermal Conduit
        ],
        806     => [    // Rapid fire
            9,              // Dazzle Shell
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            55,             // Plasma Slug
            73,             // Stripped Down
            78,             // Target Lock Breaker
            80,             // Thermal Conduit
        ],
        807     => [    // Short range
            9,              // Dazzle Shell
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            55,             // Plasma Slug
            73,             // Stripped Down
            78,             // Target Lock Breaker
            80,             // Thermal Conduit
        ],
        808     => [    // Sturdy
            9,              // Dazzle Shell
            13,             // Dispersal Field
            20,             // Double Braced
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            55,             // Plasma Slug
            73,             // Stripped Down
            78,             // Target Lock Breaker
            80,             // Thermal Conduit
        ],

        // HARDPOINT - Pulse Laser
        901     => [    // Efficient
            7,              // Concordant Sequence
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        902     => [    // Focused
            7,              // Concordant Sequence
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        903     => [    // Lightweight
            7,              // Concordant Sequence
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        904     => [    // Long range
            7,              // Concordant Sequence
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        905     => [    // Overcharged
            7,              // Concordant Sequence
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        906     => [    // Rapid fire
            7,              // Concordant Sequence
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        907     => [    // Short range
            7,              // Concordant Sequence
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],
        908     => [    // Sturdy
            7,              // Concordant Sequence
            20,             // Double Braced
            25,             // Emissive Munitions
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            54,             // Phasing Sequence
            63,             // Scramble Spectrum
            73,             // Stripped Down
            81,             // Thermal Shock
        ],

        // HARDPOINT - Rail Gun
        1001    => [    // High capacity
            20,             // Double Braced
            27,             // Feedback Cascade
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            56,             // Plasma Slug
            73,             // Stripped Down
            76,             // Super Penetrator
        ],
        1002    => [    // Lightweight
            20,             // Double Braced
            27,             // Feedback Cascade
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            56,             // Plasma Slug
            73,             // Stripped Down
            76,             // Super Penetrator
        ],
        1003    => [    // Long range
            20,             // Double Braced
            27,             // Feedback Cascade
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            56,             // Plasma Slug
            73,             // Stripped Down
            76,             // Super Penetrator
        ],
        1004    => [    // Short range
            20,             // Double Braced
            27,             // Feedback Cascade
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            56,             // Plasma Slug
            73,             // Stripped Down
            76,             // Super Penetrator
        ],
        1005    => [    // Sturdy
            20,             // Double Braced
            27,             // Feedback Cascade
            31,             // Flow Control
            48,             // Multi-servos
            51,             // Oversized
            56,             // Plasma Slug
            73,             // Stripped Down
            76,             // Super Penetrator
        ],

        // HARDPOINT - Seeker Missile Rack
        1101    => [    // High capacity
            23,             // Drag Munitions
            25,             // Emissive Munitions
            50,             // Overload Munitions
            79,             // Thermal Cascade
        ],
        1102    => [    // Lightweight
            23,             // Drag Munitions
            25,             // Emissive Munitions
            50,             // Overload Munitions
            79,             // Thermal Cascade
        ],
        1103    => [    // Rapid fire
            23,             // Drag Munitions
            25,             // Emissive Munitions
            50,             // Overload Munitions
            79,             // Thermal Cascade
        ],
        1104    => [    // Sturdy
            23,             // Drag Munitions
            25,             // Emissive Munitions
            50,             // Overload Munitions
            79,             // Thermal Cascade
        ],

        // HARDPOINT - Torpedo Pylon
        1201    => [    // Lightweight
            20,             // Double Braced
            31,             // Flow Control
            45,             // Mass Lock Munition
            51,             // Oversized
            53,             // Penetrator Payload
            62,             // Reverberating Cascade
            73,             // Stripped Down
        ],
        1202    => [    // Sturdy
            20,             // Double Braced
            31,             // Flow Control
            45,             // Mass Lock Munition
            51,             // Oversized
            53,             // Penetrator Payload
            62,             // Reverberating Cascade
            73,             // Stripped Down
        ],

        // UTILITY MOUNT - Chaff Launcher
        10101   => null, // Ammo capacity
        10102   => null, // Lightweight
        10103   => null, // Reinforced
        10104   => null, // Shielded

        // UTILITY MOUNT - Electronic Countermeasure
        10201   => null, // Lightweight
        10202   => null, // Reinforced
        10203   => null, // Shielded

        // UTILITY MOUNT - Frame Shift Wake Scanner
        10301   => null, // Fast scan
        10302   => null, // Lightweight
        10303   => null, // Long range
        10304   => null, // Reinforced
        10305   => null, // Shielded
        10306   => null, // Wide angle

        // UTILITY MOUNT - Heat Sink Launcher
        10401   => null, // Ammo capacity
        10402   => null, // Lightweight
        10403   => null, // Reinforced
        10404   => null, // Shielded

        // UTILITY MOUNT - Kill Warrant Scanner
        10501   => null, // Fast scan
        10502   => null, // Lightweight
        10503   => null, // Long range
        10504   => null, // Reinforced
        10505   => null, // Shielded
        10506   => null, // Wide angle

        // UTILITY MOUNT - Manifest Scanner
        10601   => null, // Fast scan
        10602   => null, // Lightweight
        10603   => null, // Long range
        10604   => null, // Reinforced
        10605   => null, // Shielded
        10606   => null, // Wide angle

        // UTILITY MOUNT - Point Defence
        10701   => null, // Ammo capacity
        10702   => null, // Lightweight
        10703   => null, // Reinforced
        10704   => null, // Shielded

        // UTILITY MOUNT - Shield Booster
        10801   => [    // Blast resistant
            4,              // Blast Block
            21,             // Double Braced
            32,             // Flow Control
            34,             // Force Block
            74,             // Super Capacitors
            87,             // Thermo Block
        ],
        10802   => [    // Heavy duty
            4,              // Blast Block
            21,             // Double Braced
            32,             // Flow Control
            34,             // Force Block
            74,             // Super Capacitors
            87,             // Thermo Block
        ],
        10803   => [    // Kinetic resistant
            4,              // Blast Block
            21,             // Double Braced
            32,             // Flow Control
            34,             // Force Block
            74,             // Super Capacitors
            87,             // Thermo Block
        ],
        10804   => [    // Resistance augmented
            4,              // Blast Block
            21,             // Double Braced
            32,             // Flow Control
            34,             // Force Block
            74,             // Super Capacitors
            87,             // Thermo Block
        ],
        10805   => [    // Thermal resistant
            4,              // Blast Block
            21,             // Double Braced
            32,             // Flow Control
            34,             // Force Block
            74,             // Super Capacitors
            87,             // Thermo Block
        ],

        // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
        20101   => null, // Shielded

        // OPTIONAL INTERNAL - Collector Limpet Controller
        20201   => null, // Lightweight
        20202   => null, // Reinforced
        20203   => null, // Shielded

        // OPTIONAL INTERNAL - Detailed Surface Scanner
        20301   => null, // Fast scan
        20302   => null, // Long range
        20303   => null, // Wide angle

        // OPTIONAL INTERNAL - Surface Scanner
        20351   => null, // Expanded Probe Scanning Radius

        // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
        20401   => null, // Expanded capture arc
        20402   => null, // Long range

        // OPTIONAL INTERNAL - Fuel Scoop
        20501   => null, // Shielded

        // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
        20601   => null, // Lightweight
        20602   => null, // Reinforced
        20603   => null, // Shielded

        // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
        20701   => null, // Lightweight
        20702   => null, // Reinforced
        20703   => null, // Shielded

        // OPTIONAL INTERNAL - Hull Reinforcement Package
        20801   => [    // Blast resistant
            2,              // Angled Plating
            12,             // Deep Plating
            43,             // Layered Plating
            60,             // Reflective Plating
        ],
        20802   => [    // Heavy duty
            2,              // Angled Plating
            12,             // Deep Plating
            43,             // Layered Plating
            60,             // Reflective Plating
        ],
        20803   => [    // Kinetic resistant
            2,              // Angled Plating
            12,             // Deep Plating
            43,             // Layered Plating
            60,             // Reflective Plating
        ],
        20804   => [    // Lightweight
            2,              // Angled Plating
            12,             // Deep Plating
            43,             // Layered Plating
            60,             // Reflective Plating
        ],
        20805   => [    // Thermal resistant
            2,              // Angled Plating
            12,             // Deep Plating
            43,             // Layered Plating
            60,             // Reflective Plating
        ],

        // OPTIONAL INTERNAL - Prospector Limpet Controller
        20901   => null, // Lightweight
        20902   => null, // Reinforced
        20903   => null, // Shielded

        // OPTIONAL INTERNAL - Refinery
        21001   => null, // Shielded

        // OPTIONAL INTERNAL - Shield Cell Bank
        21101   => [    // Rapid charge
            5,              // Boss Cells
            19,             // Double Braced
            30,             // Flow Control
            58,             // Recycling Cell
            72,             // Stripped Down
        ],
        21102   => [    // Specialised
            5,              // Boss Cells
            19,             // Double Braced
            30,             // Flow Control
            58,             // Recycling Cell
            72,             // Stripped Down
        ],

        // OPTIONAL INTERNAL - Shield Generator
        21201   => [    // Enhanced low power
            14,             // Double Braced
            26,             // Fast Charge
            33,             // Force Block
            37,             // Hi-Cap
            44,             // Lo-draw
            49,             // Multi-weave
            67,             // Stripped Down
            86,             // Thermo Block
        ],
        21202   => [    // Kinetic resistant
            14,             // Double Braced
            26,             // Fast Charge
            33,             // Force Block
            37,             // Hi-Cap
            44,             // Lo-draw
            49,             // Multi-weave
            67,             // Stripped Down
            86,             // Thermo Block
        ],
        21203   => [    // Reinforced
            14,             // Double Braced
            26,             // Fast Charge
            33,             // Force Block
            37,             // Hi-Cap
            44,             // Lo-draw
            49,             // Multi-weave
            67,             // Stripped Down
            86,             // Thermo Block
        ],
        21204   => [    // Thermal resistant
            14,             // Double Braced
            26,             // Fast Charge
            33,             // Force Block
            37,             // Hi-Cap
            44,             // Lo-draw
            49,             // Multi-weave
            67,             // Stripped Down
            86,             // Thermo Block
        ],

        // CORE INTERNAL - Frame Shift Drive
        30101   => [    // Faster boot sequence
            10,             // Deep Charge
            16,             // Double Braced
            46,             // Mass Manager
            69,             // Stripped Down
            83,             // Thermal Spread
        ],
        30102   => [    // Increased range
            10,             // Deep Charge
            16,             // Double Braced
            46,             // Mass Manager
            69,             // Stripped Down
            83,             // Thermal Spread
        ],
        30103   => [    // Shielded
            10,             // Deep Charge
            16,             // Double Braced
            46,             // Mass Manager
            69,             // Stripped Down
            83,             // Thermal Spread
        ],

        // CORE INTERNAL - Life Support
        30201   => null, // Lightweight
        30202   => null, // Reinforced
        30203   => null, // Shielded

        // CORE INTERNAL - Power Distributor
        30301   => [    // Charge enhanced
            6,              // Cluster Capacitors
            18,             // Double Braced
            29,             // Flow Control
            71,             // Stripped Down
            75,             // Super Conduits
        ],
        30302   => [    // Engine focused
            6,              // Cluster Capacitors
            18,             // Double Braced
            29,             // Flow Control
            71,             // Stripped Down
            75,             // Super Conduits
        ],
        30303   => [    // High charge capacity
            6,              // Cluster Capacitors
            18,             // Double Braced
            29,             // Flow Control
            71,             // Stripped Down
            75,             // Super Conduits
        ],
        30304   => [    // Shielded
            6,              // Cluster Capacitors
            18,             // Double Braced
            29,             // Flow Control
            71,             // Stripped Down
            75,             // Super Conduits
        ],
        30305   => [    // System focused
            6,              // Cluster Capacitors
            18,             // Double Braced
            29,             // Flow Control
            71,             // Stripped Down
            75,             // Super Conduits
        ],
        30306   => [    // Weapon focused
            6,              // Cluster Capacitors
            18,             // Double Braced
            29,             // Flow Control
            71,             // Stripped Down
            75,             // Super Conduits
        ],

        // CORE INTERNAL - Power Plant
        30401   => [    // Armoured
            17,             // Double Braced
            47,             // Monstered
            70,             // Stripped Down
            84,             // Thermal Spread
        ],
        30402   => [    // Low emissions
            17,             // Double Braced
            47,             // Monstered
            70,             // Stripped Down
            84,             // Thermal Spread
        ],
        30403   => [    // Overcharged
            17,             // Double Braced
            47,             // Monstered
            70,             // Stripped Down
            84,             // Thermal Spread
        ],

        // CORE INTERNAL - Sensors
        30501   => null, // Lightweight
        30502   => null, // Long range
        30503   => null, // Wide angle

        // CORE INTERNAL - Thrusters
        30601   => [    // Clean
            15,             // Double Braced
            22,             // Drag Drives
            24,             // Drive Distributors
            68,             // Stripped Down
            82,             // Thermal Spread
        ],
        30602   => [    // Dirty
            15,             // Double Braced
            22,             // Drag Drives
            24,             // Drive Distributors
            68,             // Stripped Down
            82,             // Thermal Spread
        ],
        30603   => [    // Reinforced
            15,             // Double Braced
            22,             // Drag Drives
            24,             // Drive Distributors
            68,             // Stripped Down
            82,             // Thermal Spread
        ],

        // ARMOUR
        40101   => [    // Blast resistant
            1,              // Angled Plating
            11,             // Deep Plating
            42,             // Layered Plating
            59,             // Reflective Plating
        ],
        40102   => [    // Heavy duty
            1,              // Angled Plating
            11,             // Deep Plating
            42,             // Layered Plating
            59,             // Reflective Plating
        ],
        40103   => [    // Kinetic resistant
            1,              // Angled Plating
            11,             // Deep Plating
            42,             // Layered Plating
            59,             // Reflective Plating
        ],
        40104   => [    // Lightweight
            1,              // Angled Plating
            11,             // Deep Plating
            42,             // Layered Plating
            59,             // Reflective Plating
        ],
        40105   => [    // Thermal resistant
            1,              // Angled Plating
            11,             // Deep Plating
            42,             // Layered Plating
            59,             // Reflective Plating
        ],
    ];
}