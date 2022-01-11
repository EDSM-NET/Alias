<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
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
                12  => 5,       // Compact Composites                       * 5
                33  => 3,       // High Density Composites                  * 3
                76  => 3,       // Zirconium                                * 3
            ],
          2     => [    // Angled Plating
                67  => 5,       // Tempered Alloys                          * 5
                76  => 3,       // Zirconium                                * 3
                 6  => 5,       // Carbon                                   * 5
                33  => 3,       // High Density Composites                  * 3
            ],
          3     => [    // Auto Loader
                40  => 4,       // Mechanical Equipment                     * 4
                39  => 3,       // Mechanical Components                    * 3
                33  => 3,       // High Density Composites                  * 3
            ],
          4     => [    // Blast Block
              'd17' => 5,       // Inconsistent Shield Soak Analysis        * 5
                31  => 3,       // Heat Resistant Ceramics                  * 3
                29  => 3,       // Heat Dispersion Plate                    * 3
                61  => 2,       // Selenium                                 * 2
            ],
          5     => [    // Boss Cells
                10  => 5,       // Chemical Storage Units                   * 5
                11  => 3,       // Chromium                                 * 3
                52  => 1,       // Polymer Capacitors                       * 1
            ],
          6     => [    // Cluster Capacitors
                50  => 5,       // Phosphorus                               * 5
                31  => 3,       // Heat Resistant Ceramics                  * 3
                 5  => 1,       // Cadmium                                  * 1
            ],
          7     => [    // Concordant Sequence
                24  => 5,       // Focus Crystals                           * 5
              'd20' => 3,       // Modified Embedded Firmware               * 3
                76  => 1,       // Zirconium                                * 1
            ],
          8     => [    // Corrosive Shell
                10  => 5,       // Chemical Storage Units                   * 5
                53  => 4,       // Precipitated Alloys                      * 4
                 2  => 3,       // Arsenic                                  * 3
            ],
          9     => [    // Dazzle Shell
                41  => 5,       // Mechanical Scrap                         * 5
                38  => 4,       // Manganese                                * 4
                34  => 5,       // Hybrid Capacitors                        * 5
            ],
         10     => [    // Deep Charge
              'd6'  => 5,       // Atypical Disrupted Wake Echoes           * 5
                25  => 3,       // Galvanising Alloys                       * 3
              'd15' => 1,       // Eccentric Hyperspace Trajectories        * 1
            ],
         11     => [    // Deep Plating
                12  => 5,       // Compact Composites                       * 5
                40  => 3,       // Mechanical Equipment                     * 3
                45  => 2,       // Molybdenum                               * 2
            ],
         12     => [    // Deep Plating
                12  => 5,       // Compact Composites                       * 5
                45  => 3,       // Molybdenum                               * 3
                59  => 2,       // Ruthenium                                * 2
            ],
         13     => [    // Dispersal Field
                15  => 5,       // Conductive Components                    * 5
                34  => 5,       // Hybrid Capacitors                        * 5
              'd18' => 5,       // Irregular Emission Data                  * 5
                73  => 5,       // Worn Shield Emitters                     * 5
            ],
         14     => [    // Double Braced
                73  => 5,       // Worn Shield Emitters                     * 5
                23  => 3,       // Flawed Focus Crystals                    * 3
                17  => 1,       // Configurable Components                  * 1
            ],
         15     => [    // Double Braced
                37  => 5,       // Iron                                     * 5
                34  => 3,       // Hybrid Capacitors                        * 3
                54  => 1,       // Proprietary Composites                   * 1
            ],
         16     => [    // Double Braced
               'd6' => 5,       // Atypical Disrupted Wake Echoes           * 5
                25  => 3,       // Galvanising Alloys                       * 3
                17  => 1,       // Configurable Components                  * 1
            ],
         17     => [    // Double Braced
                27  => 5,       // Grid Resistors                           * 5
                72  => 3,       // Vanadium                                 * 3
                54  => 1,       // Proprietary Composites                   * 1
            ],
         18     => [    // Double Braced
                50  => 5,       // Phosphorus                               * 5
                31  => 3,       // Heat Resistant Ceramics                  * 3
                54  => 1,       // Proprietary Composites                   * 1
            ],
         19     => [    // Double Braced
                10  => 5,       // Chemical Storage Units                   * 5
                11  => 3,       // Chromium                                 * 3
                74  => 1,       // Yttrium                                  * 1
            ],
         20     => [    // Double Braced
                41  => 5,       // Mechanical Scrap                         * 5
                12  => 5,       // Compact Composites                       * 5
                72  => 3,       // Vanadium                                 * 3
            ],
         21     => [    // Double Braced
              'd13' => 5,       // Distorted Shield Cycle Recordings        * 5
                25  => 3,       // Galvanising Alloys                       * 3
                62  => 3,       // Shield Emitters                          * 3
            ],
         22     => [    // Drag Drives
                37  => 5,       // Iron                                     * 5
                34  => 3,       // Hybrid Capacitors                        * 3
              'd28' => 1,       // Security Firmware Patch                  * 1
            ],
         23     => [    // Drag Munitions
                 6  => 5,       // Carbon                                   * 5
                27  => 5,       // Grid Resistors                           * 5
                45  => 2,       // Molybdenum                               * 2
            ],
         24     => [    // Drive Distributors
                37  => 5,       // Iron                                     * 5
                34  => 3,       // Hybrid Capacitors                        * 3
              'd28' => 1,       // Security Firmware Patch                  * 1
            ],
         25     => [    // Emissive Munitions
                40  => 4,       // Mechanical Equipment                     * 4
              'd32' => 3,       // Unexpected Emission Data                 * 3
                30  => 3,       // Heat Exchangers                          * 3
                38  => 3,       // Manganese                                * 3
            ],
         26     => [    // Fast Charge
                73  => 5,       // Worn Shield Emitters                     * 5
                23  => 3,       // Flawed Focus Crystals                    * 3
                13  => 1,       // Compound Shielding                       * 1
            ],
         27     => [    // Feedback Cascade
              'd21' => 5,       // Open Symmetric Keys                      * 5
                62  => 5,       // Shield Emitters                          * 5
                22  => 5,       // Filament Composites                      * 5
            ],
         28     => [    // Feedback Cascade
              'd21' => 5,       // Open Symmetric Keys                      * 5
                62  => 5,       // Shield Emitters                          * 5
                22  => 5,       // Filament Composites                      * 5
            ],
         29     => [    // Flow Control
                50  => 5,       // Phosphorus                               * 5
                31  => 3,       // Heat Resistant Ceramics                  * 3
                16  => 1,       // Conductive Polymers                      * 1
            ],
         30     => [    // Flow Control
                10  => 5,       // Chemical Storage Units                   * 5
                11  => 3,       // Chromium                                 * 3
                16  => 1,       // Conductive Polymers                      * 1
            ],
         31     => [    // Flow Control
                41  => 5,       // Mechanical Scrap                         * 5
                34  => 3,       // Hybrid Capacitors                        * 3
              'd20' => 1,       // Modified Embedded Firmware               * 1
            ],
         32     => [    // Flow Control
              'd17' => 5,       // Inconsistent Shield Soak Analysis        * 5
              'd28' => 3,       // Security Firmware Patch                  * 3
                24  => 3,       // Focus Crystals                           * 3
                47  => 3,       // Niobium                                  * 3
            ],
         33     => [    // Force Block
                73  => 5,       // Worn Shield Emitters                     * 5
                23  => 3,       // Flawed Focus Crystals                    * 3
              'd12' => 1,       // Decoded Emission Data                    * 1
            ],
         34     => [    // Force Block
              'd33' => 5,       // Unidentified Scan Archives               * 5
                63  => 3,       // Shielding Sensors                        * 3
               'd1' => 2,       // Aberrant Shield Pattern Analysis         * 2
            ],
         35     => [    // Force Shell
                41  => 5,       // Mechanical Scrap                         * 5
                75  => 5,       // Zinc                                     * 5
                49  => 3,       // Phase Alloys                             * 3
                28  => 3,       // Heat Conduction Wiring                   * 3
            ],
         36     => [    // FSD Interrupt
              'd30' => 3,       // Strange Wake Solutions                   * 3
              'd5'  => 5,       // Anomalous FSD Telemetry                  * 5
                40  => 5,       // Mechanical Equipment                     * 5
                17  => 3,       // Configurable Components                  * 3
            ],
         37     => [    // Hi-Cap
                73  => 5,       // Worn Shield Emitters                     * 5
                23  => 3,       // Flawed Focus Crystals                    * 3
                16  => 1,       // Conductive Polymers                      * 1
            ],
         38     => [    // High Yield Shell
                41  => 5,       // Mechanical Scrap                         * 5
                56  => 3,       // Proto Light Alloys                       * 3
                 8  => 3,       // Chemical Manipulators                    * 3
                46  => 5,       // Nickel                                   * 5
            ],
         39     => [    // Incendiary Rounds
                28  => 5,       // Heat Conduction Wiring                   * 5
                50  => 5,       // Phosphorus                               * 5
                64  => 5,       // Sulphur                                  * 5
                49  => 3,       // Phase Alloys                             * 3
            ],
         40     => [    // Inertial Impact
                23  => 5,       // Flawed Focus Crystals                    * 5
              'd13' => 5,       // Distorted Shield Cycle Recordings        * 5
              'd6'  => 5,       // Atypical Disrupted Wake Echoes           * 5
            ],
         41     => [    // Ion Disruption
                64  => 5,       // Sulphur                                  * 5
                50  => 5,       // Phosphorus                               * 5
                 7  => 3,       // Chemical Distillery                      * 3
                20  => 3,       // Electrochemical Arrays                   * 3
            ],
         42     => [    // Layered Plating
                28  => 5,       // Heat Conduction Wiring                   * 5
                33  => 3,       // High Density Composites                  * 3
                47  => 1,       // Niobium                                  * 1
            ],
         43     => [    // Layered Plating
                28  => 5,       // Heat Conduction Wiring                   * 5
                63  => 3,       // Shielding Sensors                        * 3
                70  => 3,       // Tungsten                                 * 3
            ],
         44     => [    // Lo-draw
                73  => 5,       // Worn Shield Emitters                     * 5
                23  => 3,       // Flawed Focus Crystals                    * 3
                16  => 1,       // Conductive Polymers                      * 1
            ],
         45     => [    // Mass Lock Munition
                40  => 5,       // Mechanical Equipment                     * 5
                33  => 3,       // High Density Composites                  * 3
              'd1'  => 3,       // Aberrant Shield Pattern Analysis         * 3
            ],
         46     => [    // Mass Manager
              'd6'  => 5,       // Atypical Disrupted Wake Echoes           * 5
                25  => 3,       // Galvanising Alloys                       * 3
              'd15' => 1,       // Eccentric Hyperspace Trajectories        * 1
            ],
         47     => [    // Monstered
                27  => 5,       // Grid Resistors                           * 5
                72  => 3,       // Vanadium                                 * 3
                52  => 1,       // Polymer Capacitors                       * 1
            ],
         48     => [    // Multi-servos
                41  => 5,       // Mechanical Scrap                         * 5
                24  => 4,       // Focus Crystals                           * 4
                16  => 2,       // Conductive Polymers                      * 2
                17  => 2,       // Configurable Components                  * 2
            ],
         49     => [    // Multi-weave
                73  => 5,       // Worn Shield Emitters                     * 5
                23  => 3,       // Flawed Focus Crystals                    * 3
              'd1'  => 1,       // Aberrant Shield Pattern Analysis         * 1
            ],
         50     => [    // Overload Munitions
                22  => 5,       // Filament Composites                      * 5
              'd31' => 4,       // Tagged Encryption Codes                  * 4
              'd1'  => 2,       // Aberrant Shield Pattern Analysis         * 2
                26  => 3,       // Germanium                                * 3
            ],
         51     => [    // Oversized
                41  => 5,       // Mechanical Scrap                         * 5
                39  => 3,       // Mechanical Components                    * 3
                59  => 1,       // Ruthenium                                * 1
            ],
         52     => [    // Penetrator Munitions
                25  => 5,       // Galvanising Alloys                       * 5
                20  => 3,       // Electrochemical Arrays                   * 3
                76  => 3,       // Zirconium                                * 3
            ],
         53     => [    // Penetrator Payload
                39  => 3,       // Mechanical Components                    * 3
                70  => 3,       // Tungsten                                 * 3
              'd4'  => 5,       // Anomalous Bulk Scan Data                 * 5
                61  => 3,       // Selenium                                 * 3
            ],
         54     => [    // Phasing Sequence
                24  => 5,       // Focus Crystals                           * 5
              'd1'  => 3,       // Aberrant Shield Pattern Analysis         * 3
                47  => 3,       // Niobium                                  * 3
                17  => 3,       // Configurable Components                  * 3
            ],
         55     => [    // Plasma Slug
                30  => 3,       // Heat Exchangers                          * 3
              'd20' => 2,       // Modified Embedded Firmware               * 2
                58  => 2,       // Refined Focus Crystals                   * 2
                42  => 4,       // Mercury                                  * 4
            ],
         56     => [    // Plasma Slug
                30  => 3,       // Heat Exchangers                          * 3
              'd20' => 2,       // Modified Embedded Firmware               * 2
                58  => 2,       // Refined Focus Crystals                   * 2
                42  => 4,       // Mercury                                  * 4
            ],
         57     => [    // Radiant Canister
                51  => 1,       // Polonium                                 * 1
                49  => 3,       // Phase Alloys                             * 3
                29  => 4,       // Heat Dispersion Plate                    * 4
            ],
         58     => [    // Recycling Cell
                10  => 5,       // Chemical Storage Units                   * 5
                11  => 3,       // Chromium                                 * 3
                17  => 1,       // Configurable Components                  * 1
            ],
         59     => [    // Reflective Plating
                12  => 5,       // Compact Composites                       * 5
                29  => 3,       // Heat Dispersion Plate                    * 3
                68  => 2,       // Thermic Alloys                           * 2
            ],
         60     => [    // Reflective Plating
                28  => 5,       // Heat Conduction Wiring                   * 5
                29  => 3,       // Heat Dispersion Plate                    * 3
                56  => 1,       // Proto Light Alloys                       * 1
                75  => 4,       // Zinc                                     * 4
            ],
         61     => [    // Regeneration Sequence
                58  => 3,       // Refined Focus Crystals                   * 3
                63  => 4,       // Shielding Sensors                        * 4
              'd27' => 1,       // Peculiar Shield Frequency Data           * 1
            ],
         62     => [    // Reverberating Cascade
                17  => 2,       // Configurable Components                  * 2
              'd8'  => 3,       // Classified Scan Databanks                * 3
                22  => 4,       // Filament Composites                      * 4
                11  => 4,       // Chromium                                 * 4
            ],
         63     => [    // Scramble Spectrum
                19  => 5,       // Crystal Shards                           * 5
              'd35' => 3,       // Untypical Shield Scans                   * 3
              'd16' => 5,       // Exceptional Scrambled Emission Data      * 5
            ],
         64     => [    // Screening Shell
                41  => 5,       // Mechanical Scrap                         * 5
              'd13' => 5,       // Distorted Shield Cycle Recordings        * 5
              'd19' => 5,       // Modified Consumer Firmware               * 5
                47  => 3,       // Niobium                                  * 3
            ],
         65     => [    // Shift-lock Canister
                67  => 5,       // Tempered Alloys                          * 5
              'd30' => 3,       // Strange Wake Solutions                   * 3
                60  => 5,       // Salvaged Alloys                          * 5
            ],
         66     => [    // Smart Rounds
                41  => 5,       // Mechanical Scrap                         * 5
              'd28' => 3,       // Security Firmware Patch                  * 3
              'd12' => 3,       // Decoded Emission Data                    * 3
              'd8'  => 3,       // Classified Scan Databanks                * 3
            ],
         67     => [    // Stripped Down
                73  => 5,       // Worn Shield Emitters                     * 5
                23  => 3,       // Flawed Focus Crystals                    * 3
                56  => 1,       // Proto Light Alloys                       * 1
            ],
         68     => [    // Stripped Down
                37  => 5,       // Iron                                     * 5
                34  => 3,       // Hybrid Capacitors                        * 3
                56  => 1,       // Proto Light Alloys                       * 1
            ],
         69     => [    // Stripped Down
               'd6' => 5,       // Atypical Disrupted Wake Echoes           * 5
                25  => 3,       // Galvanising Alloys                       * 3
                56  => 1,       // Proto Light Alloys                       * 1
            ],
         70     => [    // Stripped Down
                27  => 5,       // Grid Resistors                           * 5
                72  => 3,       // Vanadium                                 * 3
                56  => 1,       // Proto Light Alloys                       * 1
            ],
         71     => [    // Stripped Down
                50  => 5,       // Phosphorus                               * 5
                31  => 3,       // Heat Resistant Ceramics                  * 3
                56  => 1,       // Proto Light Alloys                       * 1
            ],
         72     => [    // Stripped Down
                10  => 5,       // Chemical Storage Units                   * 5
                11  => 3,       // Chromium                                 * 3
                56  => 1,       // Proto Light Alloys                       * 1
            ],
         73     => [    // Stripped Down
                60  => 5,       // Salvaged Alloys                          * 5
                 6  => 5,       // Carbon                                   * 5
                69  => 1,       // Tin                                      * 1
            ],
         74     => [    // Super Capacitors
              'd35' => 3,       // Untypical Shield Scans                   * 3
                12  => 5,       // Compact Composites                       * 5
                 5  => 2,       // Cadmium                                  * 2
            ],
         75     => [    // Super Conduits
                50  => 5,       // Phosphorus                               * 5
                31  => 3,       // Heat Resistant Ceramics                  * 3
              'd28' => 1,       // Security Firmware Patch                  * 1
            ],
         76     => [    // Super Penetrator
                56  => 3,       // Proto Light Alloys                       * 3
                58  => 3,       // Refined Focus Crystals                   * 3
                76  => 3,       // Zirconium                                * 3
              'd35' => 5,       // Untypical Shield Scans                   * 5
            ],
         77     => [    // Super Penetrator
                56  => 3,       // Proto Light Alloys                       * 3
                58  => 3,       // Refined Focus Crystals                   * 3
                76  => 3,       // Zirconium                                * 3
              'd35' => 5,       // Untypical Shield Scans                   * 5
            ],
         78     => [    // Target Lock Breaker
                61  => 5,       // Selenium                                 * 5
              'd28' => 3,       // Security Firmware Patch                  * 3
              'd3'  => 1,       // Adaptive Encryptors Capture              * 1
            ],
         79     => [    // Thermal Cascade
                28  => 5,       // Heat Conduction Wiring                   * 5
                34  => 4,       // Hybrid Capacitors                        * 4
                33  => 3,       // High Density Composites                  * 3
                50  => 5,       // Phosphorus                               * 5
            ],
         80     => [    // Thermal Conduit
                29  => 5,       // Heat Dispersion Plate                    * 5
                64  => 5,       // Sulphur                                  * 5
                67  => 5,       // Tempered Alloys                          * 5
            ],
         81     => [    // Thermal Shock
                23  => 5,       // Flawed Focus Crystals                    * 5
                31  => 3,       // Heat Resistant Ceramics                  * 3
                15  => 3,       // Conductive Components                    * 3
                70  => 3,       // Tungsten                                 * 3
            ],
         82     => [    // Thermal Spread
                37  => 5,       // Iron                                     * 5
                34  => 3,       // Hybrid Capacitors                        * 3
                32  => 1,       // Heat Vanes                               * 1
            ],
         83     => [    // Thermal Spread
               'd6' => 5,       // Atypical Disrupted Wake Echoes           * 5
                25  => 3,       // Galvanising Alloys                       * 3
                32  => 1,       // Heat Vanes                               * 1
                27  => 3,       // Grid Resistors                           * 3
            ],
         84     => [    // Thermal Spread
                27  => 5,       // Grid Resistors                           * 5
                72  => 3,       // Vanadium                                 * 3
                32  => 1,       // Heat Vanes                               * 1
            ],
         85     => [    // Thermal Vent
                23  => 5,       // Flawed Focus Crystals                    * 5
                16  => 3,       // Conductive Polymers                      * 3
                53  => 3,       // Precipitated Alloys                      * 3
            ],
         86     => [    // Thermo Block
                73  => 5,       // Worn Shield Emitters                     * 5
                23  => 3,       // Flawed Focus Crystals                    * 3
                32  => 1,       // Heat Vanes                               * 1
            ],
         87     => [    // Thermo Block
               'd4' => 5,       // Anomalous Bulk Scan Data                 * 5
                14  => 3,       // Conductive Ceramics                      * 3
                32  => 3,       // Heat Vanes                               * 3
            ],
    ];
}