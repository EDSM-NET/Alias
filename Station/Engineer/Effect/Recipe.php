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
          1     => [    // Angled Plating
                12  => 5,               // Compact Composites               * 5
                33  => 3,               // High Density Composites          * 3
                76  => 3,               // Zirconium                        * 3
            ],
          2     => [    // Angled Plating
                67  => 5,               // Tempered Alloys                  * 5
                76  => 3,               // Zirconium                        * 3
                 6  => 5,               // Carbon                           * 5
                33  => 3,               // High Density Composites          * 3
            ],
          3     => [    // Auto Loader
                40  => 4,               // Mechanical Equipment             * 4
                39  => 3,               // Mechanical Components            * 3
                33  => 3,               // High Density Composites          * 3
            ],
          4     => [    // Blast Block
              'd17' => 5,               // Inconsistent Shield Soak Analysis * 5
                31  => 3,               // Heat Resistant Ceramics          * 3
                29  => 3,               // Heat Dispersion Plate            * 3
                61  => 2,               // Selenium                         * 2
            ],
          5     => [    // Boss Cells
                10  => 5,               // Chemical Storage Units           * 5
                11  => 3,               // Chromium                         * 3
                52  => 1,               // Polymer Capacitors               * 1
            ],
          6     => [    // Blast Block
                50  => 5,               // Phosphorus                       * 5
                31  => 3,               // Heat Resistant Ceramics          * 3
                 5  => 1,               // Cadmium                          * 1
            ],
          7     => [    // Concordant Sequence
                24  => 5,               // Focus Crystals                   * 5
             'd20'  => 3,               // Modified Embedded Firmware       * 3
                76  => 1,               // Zirconium                        * 1
            ],
          8     => [    // Corrosive Shell
                10  => 5,               // Chemical Storage Units           * 5
                53  => 4,               // Precipitated Alloys              * 4
                 2  => 3,               // Arsenic                          * 3
            ],
          9     => [    // Dazzle Shell
                41  => 5,               // Mechanical Scrap                 * 5
                38  => 4,               // Manganese                        * 4
                34  => 5,               // Hybrid Capacitors                * 5
            ],
         10     => [    // Deep Charge
               'd6' => 5,               // Atypical Disrupted Wake Echoes   * 5
                25  => 3,               // Galvanising Alloys               * 3
              'd15' => 1,               // Eccentric Hyperspace Trajectories * 1
            ],
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
                41  => 5,               // Mechanical Scrap                 * 5
                12  => 5,               // Compact Composites               * 5
                72  => 3,               // Vanadium                         * 3
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
                41  => 5,               // Mechanical Scrap                 * 5
                34  => 3,               // Hybrid Capacitors                * 3
              'd20' => 1,               // Modified Embedded Firmware       * 1
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
                41  => 5,               // Mechanical Scrap                 * 5
                39  => 3,               // Mechanical Components            * 3
                59  => 1,               // Ruthenium                        * 1
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
                58  => 3,               // Refined Focus Crystals           * 3
                63  => 4,               // Shielding Sensors                * 4
              'd27' => 1,               // Peculiar Shield Frequency Data   * 1
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
                60  => 5,               // Salvaged Alloys                  * 5
                 6  => 5,               // Carbon                           * 5
                69  => 1,               // Tin                              * 1
            ],
         73     => null,             // Super Capacitors
         74     => null,             // Super Conduits
         75     => null,             // Super Penetrator
         76     => null,             // Super Penetrator
         77     => null,             // Target Lock Breaker
         78     => null,             // Thermal Cascade
         79     => [    // Thermal Conduit
                29  => 5,               // Heat Dispersion Plate            * 5
                64  => 5,               // Sulphur                          * 5
                67  => 5,               // Tempered Alloys                  * 5
            ],
         80     => [    // Thermal Shock
                23  => 5,               // Flawed Focus Crystals            * 5
                31  => 3,               // Heat Resistant Ceramics          * 3
                15  => 3,               // Conductive Components            * 3
                70  => 3,               // Tungsten                         * 3
            ],
         81     => [    // Thermal Spread
                37  => 5,               // Iron                             * 5
                34  => 3,               // Hybrid Capacitors                * 3
                32  => 1,               // Heat Vanes                       * 1
            ],
         82     => [    // Thermal Spread
                37  => 5,               // Iron                             * 5
                25  => 3,               // Galvanising Alloys               * 3
                32  => 1,               // Heat Vanes                       * 1
                27  => 3,               // Grid Resistors                   * 3
            ],
         83     => [    // Thermal Spread
                27  => 5,               // Grid Resistors                   * 5
                72  => 3,               // Vanadium                         * 3
                32  => 1,               // Heat Vanes                       * 1
            ],
         84     => [    // Thermal Vent
                23  => 5,               // Flawed Focus Crystals            * 5
                16  => 3,               // Conductive Polymers              * 3
                53  => 3,               // Precipitated Alloys              * 3
            ],
         85     => [    // Thermo Block
                73  => 5,               // Worn Shield Emitters             * 5
                23  => 3,               // Flawed Focus Crystals            * 3
                32  => 1,               // Heat Vanes                       * 1
            ],
         86     => [    // Thermo Block
               'd4' => 5,               // Anomalous Bulk Scan Data         * 5
                14  => 3,               // Conductive Ceramics              * 3
                32  => 3,               // Heat Vanes                       * 3
            ],
    ];
}