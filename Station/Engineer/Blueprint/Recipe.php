<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Engineer\Blueprint;
use         EDSM\Alias;

class Recipe extends Alias
{
    /**
     * List of blueprint names
     */
    static protected $name  = [
        // HARDPOINT - Beam Laser
        101     => [    // Efficient Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd16' => 1,       // Exceptional Scrambled Emission Data      * 1
                11  => 1,       // Chromium                                 * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
              'd18' => 1,       // Irregular Emission Data                  * 1
                61  => 1,       // Selenium                                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
              'd32' => 1,       // Unexpected Emission Data                 * 1
                 5  => 1,       // Cadmium                                  * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],
        102     => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1

            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        103     => [    // Long-Range Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                68  => 1,       // Thermic Alloys                           * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        104     => [    // Overcharged Weapon
            1       => [
                64  => 1,       // Nickel                                   * 1
            ],
            2       => [
                64  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                64  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                14  => 1,       // Conductive Ceramics                      * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                76  => 1,       // Zirconium                                * 1
                16  => 1,       // Conductive Polymers                      * 1
              'd20' => 1,       // Modified Embedded Firmware               * 1
            ],
        ],
        105     => [    // Short-Range Blaster
            1       => [
                64  => 1,       // Nickel                                   * 1
            ],
            2       => [
                64  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                64  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                 7  => 1,       // Configurable Components                  * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        106     => [    // Sturdy Mount
            1       => [
                64  => 1,       // Nickel                                   * 1
            ],
            2       => [
                64  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                64  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Burst Laser
        201     => [    // Efficient Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd16' => 1,       // Exceptional Scrambled Emission Data      * 1
                11  => 1,       // Chromium                                 * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
              'd18' => 1,       // Irregular Emission Data                  * 1
                61  => 1,       // Selenium                                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
              'd32' => 1,       // Unexpected Emission Data                 * 1
                 5  => 1,       // Cadmium                                  * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],
        202     => [    // Focused Weapon
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                11  => 1,       // Chromium                                 * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                24  => 1,       // Focus Crystals                           * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
                58  => 1,       // Refined Focus Crystals                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        203     => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        204     => [    // Long-Range Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                68  => 1,       // Thermic Alloys                           * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        205     => [    // Overcharged Weapon
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                14  => 1,       // Conductive Ceramics                      * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                76  => 1,       // Zirconium                                * 1
                16  => 1,       // Conductive Polymers                      * 1
              'd20' => 1,       // Modified Embedded Firmware               * 1
            ],
        ],
        206     => [    // Rapid Fire Modification
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                39  => 1,       // Mechanical Components                    * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
                53  => 1,       // Precipitated Alloys                      * 1
                17  => 1,       // Configurable Components                  * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        207     => [    // Short-Range Blaster
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                17  => 1,       // Configurable Components                  * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        208     => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Cannon
        301     => [    // Efficient Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd16' => 1,       // Exceptional Scrambled Emission Data      * 1
                11  => 1,       // Chromium                                 * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
              'd18' => 1,       // Irregular Emission Data                  * 1
                61  => 1,       // Selenium                                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
              'd32' => 1,       // Unexpected Emission Data                 * 1
                 5  => 1,       // Cadmium                                  * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],
        302     => [    // High Capacity Magazine
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
                47  => 1,       // Niobium                                  * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                33  => 1,       // High Density Composites                  * 1
                69  => 1,       // Tin                                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                54  => 1,       // Proprietary Composites                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        303     => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        304     => [    // Long-Range Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                68  => 1,       // Thermic Alloys                           * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        305     => [    // Overcharged Weapon
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                14  => 1,       // Conductive Ceramics                      * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                76  => 1,       // Zirconium                                * 1
                16  => 1,       // Conductive Polymers                      * 1
              'd20' => 1,       // Modified Embedded Firmware               * 1
            ],
        ],
        306     => [    // Rapid Fire Modification
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                39  => 1,       // Mechanical Components                    * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
                53  => 1,       // Precipitated Alloys                      * 1
                17  => 1,       // Configurable Components                  * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        307     => [    // Short-Range Blaster
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                17  => 1,       // Configurable Components                  * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        308     => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Fragment Cannon
        401     => [    // Double Shot
            1       => [
                 6  => 1,       // Carbon                                   * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                40  => 1,       // Mechanical Equipment                     * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                40  => 1,       // Mechanical Equipment                     * 1
              'd10' => 1,       // Cracked Industrial Firmware              * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                39  => 1,       // Mechanical Components                    * 1
              'd28' => 1,       // Security Firmware Patch                  * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                17  => 1,       // Configurable Components                  * 1
              'd20' => 1,       // Modified Embedded Firmware               * 1
            ],
        ],
        402     => [    // Efficient Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd16' => 1,       // Exceptional Scrambled Emission Data      * 1
                11  => 1,       // Chromium                                 * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
              'd18' => 1,       // Irregular Emission Data                  * 1
                61  => 1,       // Selenium                                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
              'd32' => 1,       // Unexpected Emission Data                 * 1
                 5  => 1,       // Cadmium                                  * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],
        403     => [    // High Capacity Magazine
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
                47  => 1,       // Niobium                                  * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                33  => 1,       // High Density Composites                  * 1
                69  => 1,       // Tin                                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                54  => 1,       // Proprietary Composites                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        404     => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        405     => [    // Overcharged Weapon
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                14  => 1,       // Conductive Ceramics                      * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                76  => 1,       // Zirconium                                * 1
                16  => 1,       // Conductive Polymers                      * 1
              'd20' => 1,       // Modified Embedded Firmware               * 1
            ],
        ],
        406     => [    // Rapid Fire Modification
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                39  => 1,       // Mechanical Components                    * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
                53  => 1,       // Precipitated Alloys                      * 1
                17  => 1,       // Configurable Components                  * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        407     => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Mine Launcher
        501     => [    // High Capacity Magazine
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
                47  => 1,       // Niobium                                  * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                33  => 1,       // High Density Composites                  * 1
                69  => 1,       // Tin                                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                54  => 1,       // Proprietary Composites                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        502     => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        503     => [    // Rapid Fire Modification
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                39  => 1,       // Mechanical Components                    * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
                53  => 1,       // Precipitated Alloys                      * 1
                17  => 1,       // Configurable Components                  * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        504     => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Missile Rack
        601     => [    // High Capacity Magazine
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
                47  => 1,       // Niobium                                  * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                33  => 1,       // High Density Composites                  * 1
                69  => 1,       // Tin                                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                54  => 1,       // Proprietary Composites                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        602     => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        603     => [    // Rapid Fire Modification
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                39  => 1,       // Mechanical Components                    * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
                53  => 1,       // Precipitated Alloys                      * 1
                17  => 1,       // Configurable Components                  * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        604     => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Multi-cannon
        701     => [    // Efficient Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd16' => 1,       // Exceptional Scrambled Emission Data      * 1
                11  => 1,       // Chromium                                 * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
              'd18' => 1,       // Irregular Emission Data                  * 1
                61  => 1,       // Selenium                                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
              'd32' => 1,       // Unexpected Emission Data                 * 1
                 5  => 1,       // Cadmium                                  * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],
        702     => [    // High Capacity Magazine
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
                47  => 1,       // Niobium                                  * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                33  => 1,       // High Density Composites                  * 1
                69  => 1,       // Tin                                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                54  => 1,       // Proprietary Composites                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        703     => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        704     => [    // Long-Range Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                68  => 1,       // Thermic Alloys                           * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        705     => [    // Overcharged Weapon
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                14  => 1,       // Conductive Ceramics                      * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                76  => 1,       // Zirconium                                * 1
                16  => 1,       // Conductive Polymers                      * 1
              'd20' => 1,       // Modified Embedded Firmware               * 1
            ],
        ],
        706     => [    // Rapid Fire Modification
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                39  => 1,       // Mechanical Components                    * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
                53  => 1,       // Precipitated Alloys                      * 1
                17  => 1,       // Configurable Components                  * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        707     => [    // Short-Range Blaster
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                17  => 1,       // Configurable Components                  * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        708     => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Plasma Accelerator
        801     => [    // Efficient Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd16' => 1,       // Exceptional Scrambled Emission Data      * 1
                11  => 1,       // Chromium                                 * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
              'd18' => 1,       // Irregular Emission Data                  * 1
                61  => 1,       // Selenium                                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
              'd32' => 1,       // Unexpected Emission Data                 * 1
                 5  => 1,       // Cadmium                                  * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],
        802     => [    // Focused Weapon
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                11  => 1,       // Chromium                                 * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                24  => 1,       // Focus Crystals                           * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
                58  => 1,       // Refined Focus Crystals                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        803     => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        804     => [    // Long-Range Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                68  => 1,       // Thermic Alloys                           * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        805     => [    // Overcharged Weapon
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                14  => 1,       // Conductive Ceramics                      * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                76  => 1,       // Zirconium                                * 1
                16  => 1,       // Conductive Polymers                      * 1
              'd20' => 1,       // Modified Embedded Firmware               * 1
            ],
        ],
        806     => [    // Rapid Fire Modification
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                39  => 1,       // Mechanical Components                    * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
                53  => 1,       // Precipitated Alloys                      * 1
                17  => 1,       // Configurable Components                  * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        807     => [    // Short-Range Blaster
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                17  => 1,       // Configurable Components                  * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        808     => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Pulse Laser
        901     => [    // Efficient Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd16' => 1,       // Exceptional Scrambled Emission Data      * 1
                11  => 1,       // Chromium                                 * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
              'd18' => 1,       // Irregular Emission Data                  * 1
                61  => 1,       // Selenium                                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
              'd32' => 1,       // Unexpected Emission Data                 * 1
                 5  => 1,       // Cadmium                                  * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],
        902     => [    // Focused Weapon
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                11  => 1,       // Chromium                                 * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                24  => 1,       // Focus Crystals                           * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
                58  => 1,       // Refined Focus Crystals                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        903     => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        904     => [    // Long-Range Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                68  => 1,       // Thermic Alloys                           * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        905     => [    // Overcharged Weapon
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                15  => 1,       // Conductive Components                    * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                14  => 1,       // Conductive Ceramics                      * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
                76  => 1,       // Zirconium                                * 1
                16  => 1,       // Conductive Polymers                      * 1
              'd20' => 1,       // Modified Embedded Firmware               * 1
            ],
        ],
        906     => [    // Rapid Fire Modification
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                39  => 1,       // Mechanical Components                    * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
                53  => 1,       // Precipitated Alloys                      * 1
                17  => 1,       // Configurable Components                  * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        907     => [    // Short-Range Blaster
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                17  => 1,       // Configurable Components                  * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        908     => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Rail Gun
        1001    => [    // High Capacity Magazine
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
                47  => 1,       // Niobium                                  * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                33  => 1,       // High Density Composites                  * 1
                69  => 1,       // Tin                                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                54  => 1,       // Proprietary Composites                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        1002    => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        1003    => [    // Long-Range Weapon
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                64  => 1,       // Sulphur                                  * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                24  => 1,       // Focus Crystals                           * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                68  => 1,       // Thermic Alloys                           * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        1004    => [    // Short-Range Blaster
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                16  => 1,       // Conductive Polymers                      * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                17  => 1,       // Configurable Components                  * 1
                 4  => 1,       // Biotech Conductors                       * 1
            ],
        ],
        1005    => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Seeker Missile Rack
        1101    => [    // High Capacity Magazine
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
                47  => 1,       // Niobium                                  * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                33  => 1,       // High Density Composites                  * 1
                69  => 1,       // Tin                                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                54  => 1,       // Proprietary Composites                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        1102    => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        1103    => [    // Rapid Fire Modification
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                39  => 1,       // Mechanical Components                    * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
                53  => 1,       // Precipitated Alloys                      * 1
                17  => 1,       // Configurable Components                  * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        1104    => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // HARDPOINT - Torpedo Pylon
        1201    => [    // Light Weight Mount
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        1202    => [    // Sturdy Mount
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],

        // UTILITY MOUNT - Chaff Launcher
        10101   => [    // Chaff Ammo Capacity
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
        ],
        10102   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        10103   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        10104   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // UTILITY MOUNT - Electronic Countermeasure
        10201   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        10202   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        10203   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // UTILITY MOUNT - Frame Shift Wake Scanner
        10301   => [    // Fast Scanner
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                50  => 1,       // Phosphorus                               * 1
                23  => 1,       // Flawed Focus Crystals                    * 1
            ],
            3       => [
                50  => 1,       // Phosphorus                               * 1
                23  => 1,       // Flawed Focus Crystals                    * 1
              'd21' => 1,       // Open Symmetric Keys                      * 1
            ],
            4       => [
                38  => 1,       // Manganese                                * 1
                24  => 1,       // Focus Crystals                           * 1
              'd7' => 1,       // Atypical Encryption Archives             * 1
            ],
            5       => [
                 2  => 1,       // Arsenic                                  * 1
                58  => 1,       // Refined Focus Crystals                   * 1
              'd3' => 1,       // Adaptive Encryptors Capture              * 1
            ],
        ],
        10302   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        10303   => [    // Long-Range Scanner
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
              'd32' => 1,       // Unexpected Emission Data                 * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                20  => 1,       // Electrochemical Arrays                   * 1
              'd12' => 1,       // Decoded Emission Data                    * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
                52  => 1,       // Polymer Capacitors                       * 1
               'd2' => 1,       // Abnormal Compact Emission Data           * 1
            ],
        ],
        10304   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        10305   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],
        10306   => [    // Wide Angle Scanner
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
               'd8' => 1,       // Classified Scan Databanks                * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                47  => 1,       // Niobium                                  * 1
              'd14' => 1,       // Divergent Scan Data                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                69  => 1,       // Tin                                      * 1
               'd9' => 1,       // Classified Scan Fragment                 * 1
            ],
        ],

        // UTILITY MOUNT - Heat Sink Launcher
        10401   => [    // Heatsink Ammo Capacity
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
                47  => 1,       // Niobium                                  * 1
            ],
        ],
        10402   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        10403   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        10404   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // UTILITY MOUNT - Kill Warrant Scanner
        10501   => [    // Fast Scanner
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                50  => 1,       // Phosphorus                               * 1
                23  => 1,       // Flawed Focus Crystals                    * 1
            ],
            3       => [
                50  => 1,       // Phosphorus                               * 1
                23  => 1,       // Flawed Focus Crystals                    * 1
              'd21' => 1,       // Open Symmetric Keys                      * 1
            ],
            4       => [
                38  => 1,       // Manganese                                * 1
                24  => 1,       // Focus Crystals                           * 1
              'd7' => 1,       // Atypical Encryption Archives             * 1
            ],
            5       => [
                 2  => 1,       // Arsenic                                  * 1
                58  => 1,       // Refined Focus Crystals                   * 1
              'd3' => 1,       // Adaptive Encryptors Capture              * 1
            ],
        ],
        10502   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        10503   => [    // Long-Range Scanner
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
              'd32' => 1,       // Unexpected Emission Data                 * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                20  => 1,       // Electrochemical Arrays                   * 1
              'd12' => 1,       // Decoded Emission Data                    * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
                52  => 1,       // Polymer Capacitors                       * 1
              'd2' => 1,       // Abnormal Compact Emission Data           * 1
            ],
        ],
        10504   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        10505   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],
        10506   => [    // Wide Angle Scanner
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
              'd8' => 1,       // Classified Scan Databanks                * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                47  => 1,       // Niobium                                  * 1
              'd14' => 1,       // Divergent Scan Data                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                69  => 1,       // Tin                                      * 1
              'd9' => 1,       // Classified Scan Fragment                 * 1
            ],
        ],

        // UTILITY MOUNT - Manifest Scanner
        10601   => [    // Fast Scanner
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                50  => 1,       // Phosphorus                               * 1
                23  => 1,       // Flawed Focus Crystals                    * 1
            ],
            3       => [
                50  => 1,       // Phosphorus                               * 1
                23  => 1,       // Flawed Focus Crystals                    * 1
              'd21' => 1,       // Open Symmetric Keys                      * 1
            ],
            4       => [
                38  => 1,       // Manganese                                * 1
                24  => 1,       // Focus Crystals                           * 1
               'd7' => 1,       // Atypical Encryption Archives             * 1
            ],
            5       => [
                 2  => 1,       // Arsenic                                  * 1
                58  => 1,       // Refined Focus Crystals                   * 1
               'd3' => 1,       // Adaptive Encryptors Capture              * 1
            ],
        ],
        10602   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        10603   => [    // Long-Range Scanner
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
              'd32' => 1,       // Unexpected Emission Data                 * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                20  => 1,       // Electrochemical Arrays                   * 1
              'd12' => 1,       // Decoded Emission Data                    * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
                52  => 1,       // Polymer Capacitors                       * 1
               'd2' => 1,       // Abnormal Compact Emission Data           * 1
            ],
        ],
        10604   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        10605   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],
        10606   => [    // Wide Angle Scanner
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
              'd8' => 1,       // Classified Scan Databanks                * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                47  => 1,       // Niobium                                  * 1
              'd14' => 1,       // Divergent Scan Data                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                69  => 1,       // Tin                                      * 1
              'd9' => 1,       // Classified Scan Fragment                 * 1
            ],
        ],

        // UTILITY MOUNT - Point Defence
        10701   => [    // Point Defence Ammo Capacity
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
                72  => 1,       // Vanadium                                 * 1
                47  => 1,       // Niobium                                  * 1
            ],
        ],
        10702   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        10703   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        10704   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // UTILITY MOUNT - Shield Booster
        10801   => [    // Blast Resistant Shield Booster
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                15  => 1,       // Conductive Components                    * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
              'd35' => 1,       // Untypical Shield Scans                   * 1
                58  => 1,       // Refined Focus Crystals                   * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
               'd1' => 1,       // Aberrant Shield Pattern Analysis         * 1
                21  => 1,       // Exquisite Focus Crystals                 * 1
            ],
        ],
        10802   => [    // Heavy Duty Shield Booster
            1       => [
                27  => 1,       // Grid Resistors                           * 1
            ],
            2       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
                34  => 1,       // Hybrid Capacitors                        * 1
            ],
            3       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
                34  => 1,       // Hybrid Capacitors                        * 1
                47  => 1,       // Niobium                                  * 1
            ],
            4       => [
              'd17' => 1,       // Inconsistent Shield Soak Analysis        * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                69  => 1,       // Tin                                      * 1
            ],
            5       => [
              'd35' => 1,       // Untypical Shield Scans                   * 1
                52  => 1,       // Polymer Capacitors                       * 1
                 1  => 1,       // Antimony                                 * 1
            ],
        ],
        10803   => [    // Kinetic Resistant Shield Booster
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                27  => 1,       // Grid Resistors                           * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                34  => 1,       // Hybrid Capacitors                        * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
                25  => 1,       // Galvanising Alloys                       * 1
              'd35' => 1,       // Untypical Shield Scans                   * 1
                58  => 1,       // Refined Focus Crystals                   * 1
            ],
            5       => [
                49  => 1,       // Phase Alloys                             * 1
               'd1' => 1,       // Aberrant Shield Pattern Analysis         * 1
                21  => 1,       // Exquisite Focus Crystals                 * 1
            ],
        ],
        10804   => [    // Resistance Augmented Shield Booster
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                50  => 1,       // Phosphorus                               * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                50  => 1,       // Phosphorus                               * 1
                15  => 1,       // Conductive Components                    * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
                58  => 1,       // Refined Focus Crystals                   * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                58  => 1,       // Refined Focus Crystals                   * 1
                35  => 1,       // Imperial Shielding                       * 1
            ],
        ],
        10805   => [    // Thermal Resistant Shield Booster
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                28  => 1,       // Heat Conduction Wiring                   * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
                28  => 1,       // Heat Conduction Wiring                   * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
                24  => 1,       // Focus Crystals                           * 1
            ],
            4       => [
                29  => 1,       // Heat Dispersion Plate                    * 1
              'd35' => 1,       // Untypical Shield Scans                   * 1
                58  => 1,       // Refined Focus Crystals                   * 1
            ],
            5       => [
                30  => 1,       // Heat Exchangers                          * 1
              'd1' => 1,       // Aberrant Shield Pattern Analysis         * 1
                21  => 1,       // Exquisite Focus Crystals                 * 1
            ],
        ],

        // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
        20101   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                6  => 1,       // Carbon                                    * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // OPTIONAL INTERNAL - Collector Limpet Controller
        20201   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        20202   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        20203   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // OPTIONAL INTERNAL - Detailed Surface Scanner
        20301   => [    // Fast Scanner
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                50  => 1,       // Phosphorus                               * 1
                23  => 1,       // Flawed Focus Crystals                    * 1
            ],
            3       => [
                50  => 1,       // Phosphorus                               * 1
                23  => 1,       // Flawed Focus Crystals                    * 1
              'd21' => 1,       // Open Symmetric Keys                      * 1
            ],
            4       => [
                38  => 1,       // Manganese                                * 1
                24  => 1,       // Focus Crystals                           * 1
               'd7' => 1,       // Atypical Encryption Archives             * 1
            ],
            5       => [
                 2  => 1,       // Arsenic                                  * 1
                58  => 1,       // Refined Focus Crystals                   * 1
               'd3' => 1,       // Adaptive Encryptors Capture              * 1
            ],
        ],
        20302   => [    // Long-Range Scanner
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
              'd32' => 1,       // Unexpected Emission Data                 * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                20  => 1,       // Electrochemical Arrays                   * 1
              'd12' => 1,       // Decoded Emission Data                    * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
                52  => 1,       // Polymer Capacitors                       * 1
               'd2' => 1,       // Abnormal Compact Emission Data           * 1
            ],
        ],
        20303   => [    // Wide Angle Scanner
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
              'd8' => 1,       // Classified Scan Databanks                * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                47  => 1,       // Niobium                                  * 1
              'd14' => 1,       // Divergent Scan Data                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                69  => 1,       // Tin                                      * 1
              'd9' => 1,        // Classified Scan Fragment                 * 1
            ],
        ],

        // OPTIONAL INTERNAL - Surface Scanner
        20351   => [    // Expanded Probe Scanning Radius
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
                49  => 1,       // Phase Alloys                             * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                47  => 1,       // Niobium                                  * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                69  => 1,       // Tin                                      * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],

        // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
        20401   => [    // Expanded FSD Interdictor Capture Arc
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
              'd36' => 1,       // Unusual Encrypted Files                  * 1
                40  => 1,       // Mechanical Equipment                     * 1
            ],
            3       => [
                27  => 1,       // Grid Resistors                           * 1
              'd31' => 1,       // Tagged Encryption Codes                  * 1
                39  => 1,       // Mechanical Components                    * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
              'd30' => 1,       // Strange Wake Solutions                   * 1
              'd14' => 1,       // Divergent Scan Data                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
              'd15' => 1,       // Eccentric Hyperspace Trajectories        * 1
               'd9' => 1,       // Classified Scan Fragment                 * 1
            ],
        ],
        20402   => [    // Longer Range FSD Interdictor
            1       => [
              'd36' => 1,       // Unusual Encrypted Files                  * 1
            ],
            2       => [
              'd6' => 1,       // Atypical Disrupted Wake Echoes           * 1
              'd31' => 1,       // Tagged Encryption Codes                  * 1
            ],
            3       => [
              'd4' => 1,       // Anomalous Bulk Scan Data                 * 1
              'd5' => 1,       // Anomalous FSD Telemetry                  * 1
              'd21' => 1,       // Open Symmetric Keys                      * 1
            ],
            4       => [
              'd33' => 1,       // Unidentified Scan Archives               * 1
              'd30' => 1,       // Strange Wake Solutions                   * 1
              'd7' => 1,       // Atypical Encryption Archives             * 1
            ],
            5       => [
              'd8' => 1,       // Classified Scan Databanks                * 1
              'd15' => 1,       // Eccentric Hyperspace Trajectories        * 1
              'd3' => 1,       // Adaptive Encryptors Capture              * 1
            ],
        ],

        // OPTIONAL INTERNAL - Fuel Scoop
        20501   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
        20601   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        20602   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        20603   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
        20701   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        20702   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        20703   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // OPTIONAL INTERNAL - Hull Reinforcement Package
        20801   => [    // Blast Resistant Hull Reinforcement
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                75  => 1,       // Zinc                                     * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                72  => 1,       // Vanadium                                 * 1
                76  => 1,       // Zirconium                                * 1
            ],
            4       => [
                25  => 1,       // Galvanising Alloys                       * 1
                70  => 1,       // Tungsten                                 * 1
                42  => 1,       // Mercury                                  * 1
            ],
            5       => [
                49  => 1,       // Phase Alloys                             * 1
                45  => 1,       // Molybdenum                               * 1
                59  => 1,       // Ruthenium                                * 1
            ],
        ],
        20802   => [    // Heavy Duty Hull Reinforcement
            1       => [
                 6  => 1,       // Carbon                                   * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],
        20803   => [    // Kinetic Resistant Hull Reinforcement
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                72  => 1,       // Vanadium                                 * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                25  => 1,       // Galvanising Alloys                       * 1
                70  => 1,       // Tungsten                                 * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                49  => 1,       // Phase Alloys                             * 1
                45  => 1,       // Molybdenum                               * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],
        20804   => [    // Lightweight Hull Reinforcement
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                15  => 1,       // Conductive Components                    * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                69  => 1,       // Tin                                      * 1
                43  => 1,       // Military Grade Alloys                    * 1
            ],
        ],
        20805   => [    // Thermal Resistant Hull Reinforcement
            1       => [
                28  => 1,       // Heat Conduction Wiring                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                72  => 1,       // Vanadium                                 * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
                25  => 1,       // Galvanising Alloys                       * 1
                70  => 1,       // Tungsten                                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
                49  => 1,       // Phase Alloys                             * 1
                45  => 1,       // Molybdenum                               * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],

        // OPTIONAL INTERNAL - Prospector Limpet Controller
        20901   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        20902   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        20903   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // OPTIONAL INTERNAL - Refinery
        21001   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // OPTIONAL INTERNAL - Shield Cell Bank
        21101   => [    // Rapid Charge Shield Cell Bank
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                27  => 1,       // Grid Resistors                           * 1
                11  => 1,       // Chromium                                 * 1
            ],
            3       => [
                64  => 1,       // Sulphur                                  * 1
                34  => 1,       // Hybrid Capacitors                        * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
                11  => 1,       // Chromium                                 * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
        ],
        21102   => [    // Specialised Shield Cell Bank
            1       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
            ],
            2       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
              'd16' => 1,       // Exceptional Scrambled Emission Data      * 1
                15  => 1,       // Conductive Components                    * 1
              'd10' => 1,       // Cracked Industrial Firmware              * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                74  => 1,       // Yttrium                                  * 1
            ],
        ],

        // OPTIONAL INTERNAL - Shield Generator
        21201   => [    // Enhanced, Low Power Shields
            1       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
            ],
            2       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
                26  => 1,       // Germanium                                * 1
                53  => 1,       // Precipitated Alloys                      * 1
            ],
            4       => [
              'd17' => 1,       // Inconsistent Shield Soak Analysis        * 1
                47  => 1,       // Niobium                                  * 1
                68  => 1,       // Thermic Alloys                           * 1
            ],
            5       => [
              'd35' => 1,       // Untypical Shield Scans                   * 1
                69  => 1,       // Tin                                      * 1
                43  => 1,       // Military Grade Alloys                    * 1
            ],
        ],
        21202   => [    // Kinetic Resistant Shields
            1       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
            ],
            2       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
            ],
            3       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                61  => 1,       // Selenium                                 * 1
            ],
            4       => [
              'd17' => 1,       // Inconsistent Shield Soak Analysis        * 1
                24  => 1,       // Focus Crystals                           * 1
                42  => 1,       // Mercury                                  * 1
            ],
            5       => [
              'd35' => 1,       // Untypical Shield Scans                   * 1
                58  => 1,       // Refined Focus Crystals                   * 1
                59  => 1,       // Ruthenium                                * 1
            ],
        ],
        21203   => [    // Reinforced Shields
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                50  => 1,       // Phosphorus                               * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                50  => 1,       // Phosphorus                               * 1
                15  => 1,       // Conductive Components                    * 1
                39  => 1,       // Mechanical Components                    * 1
            ],
            4       => [
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
                17  => 1,       // Configurable Components                  * 1
            ],
            5       => [
                 2  => 1,       // Arsenic                                  * 1
                16  => 1,       // Conductive Polymers                      * 1
                36  => 1,       // Improvised Components                    * 1
            ],
        ],
        21204   => [    // Thermal Resistant Shields
            1       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
            ],
            2       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
              'd13' => 1,       // Distorted Shield Cycle Recordings        * 1
                26  => 1,       // Germanium                                * 1
                61  => 1,       // Selenium                                 * 1
            ],
            4       => [
              'd17' => 1,       // Inconsistent Shield Soak Analysis        * 1
                24  => 1,       // Focus Crystals                           * 1
                42  => 1,       // Mercury                                  * 1
            ],
            5       => [
              'd35' => 1,       // Untypical Shield Scans                   * 1
                58  => 1,       // Refined Focus Crystals                   * 1
                59  => 1,       // Ruthenium                                * 1
            ],
        ],

        // CORE INTERNAL - Frame Shift Drive
        30101   => [    // Faster FSD Boot Sequence
            1       => [
                27  => 1,       // Grid Resistors                           * 1
            ],
            2       => [
                27  => 1,       // Grid Resistors                           * 1
                11  => 1,       // Chromium                                 * 1
            ],
            3       => [
                27  => 1,       // Grid Resistors                           * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
                61  => 1,       // Selenium                                 * 1
            ],
            4       => [
                34  => 1,       // Hybrid Capacitors                        * 1
                30  => 1,       // Heat Exchangers                          * 1
                 5  => 1,       // Cadmium                                  * 1
            ],
            5       => [
                20  => 1,       // Electrochemical Arrays                   * 1
                32  => 1,       // Heat Vanes                               * 1
                66  => 1,       // Tellurium                                * 1
            ],
        ],
        30102   => [    // Increased FSD Range
            1       => [
              'd6' => 1,       // Atypical Disrupted Wake Echoes           * 1
            ],
            2       => [
              'd6' => 1,       // Atypical Disrupted Wake Echoes           * 1
                 9  => 1,       // Chemical Processors                      * 1
            ],
            3       => [
                50  => 1,       // Phosphorus                               * 1
                 9  => 1,       // Chemical Processors                      * 1
              'd30' => 1,       // Strange Wake Solutions                   * 1
            ],
            4       => [
                38  => 1,       // Manganese                                * 1
                 7  => 1,       // Chemical Distillery                      * 1
              'd15' => 1,       // Eccentric Hyperspace Trajectories        * 1
            ],
            5       => [
                 2  => 1,       // Arsenic                                  * 1
                 8  => 1,       // Chemical Manipulators                    * 1
              'd11' => 1,       // Datamined Wake Exceptions                * 1
            ],
        ],
        30103   => [    // Shielded FSD
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                75  => 1,       // Zinc                                     * 1
                63  => 1,       // Shielding Sensors                        * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                33  => 1,       // High Density Composites                  * 1
                13  => 1,       // Compound Shielding                       * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                54  => 1,       // Proprietary Composites                   * 1
                35  => 1,       // Imperial Shielding                       * 1
            ],
        ],

        // CORE INTERNAL - Life Support
        30201   => [    // Misc Lightweight
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        30202   => [    // Misc Reinforced
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                46  => 1,       // Nickel                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                70  => 1,       // Tungsten                                 * 1
            ],
            4       => [
                75  => 1,       // Zinc                                     * 1
                70  => 1,       // Tungsten                                 * 1
                45  => 1,       // Molybdenum                               * 1
            ],
            5       => [
                33  => 1,       // High Density Composites                  * 1
                45  => 1,       // Molybdenum                               * 1
                65  => 1,       // Technetium                               * 1
            ],
        ],
        30203   => [    // Misc Shielded
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],

        // CORE INTERNAL - Power Distributor
        30301   => [    // Charge Enhanced Power Distributor
            1       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
            ],
            2       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                 9  => 1,       // Chemical Processors                      * 1
            ],
            3       => [
                27  => 1,       // Grid Resistors                           * 1
              'd19' => 1,       // Modified Consumer Firmware               * 1
                 7  => 1,       // Chemical Distillery                      * 1
            ],
            4       => [
                34  => 1,       // Hybrid Capacitors                        * 1
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                 8  => 1,       // Chemical Manipulators                    * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                 8  => 1,       // Chemical Manipulators                    * 1
                21  => 1,       // Exquisite Focus Crystals                 * 1
            ],
        ],
        30302   => [    // Engine Focused Power Distributor
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
               'd4' => 1,       // Anomalous Bulk Scan Data                 * 1
                11  => 1,       // Chromium                                 * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
              'd33' => 1,       // Unidentified Scan Archives               * 1
                61  => 1,       // Selenium                                 * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
               'd8' => 1,       // Classified Scan Databanks                * 1
                 5  => 1,       // Cadmium                                  * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        30303   => [    // High Charge Capacity Power Distributor
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                11  => 1,       // Chromium                                 * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                11  => 1,       // Chromium                                 * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                61  => 1,       // Selenium                                 * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                54  => 1,       // Proprietary Composites                   * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        30304   => [    // Shielded Power Distributor
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],
        30305   => [    // System Focused Power Distributor
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
               'd4' => 1,       // Anomalous Bulk Scan Data                 * 1
                11  => 1,       // Chromium                                 * 1
                20  => 1,       // Electrochemical Arrays                   * 1
            ],
            4       => [
              'd33' => 1,       // Unidentified Scan Archives               * 1
                61  => 1,       // Selenium                                 * 1
                52  => 1,       // Polymer Capacitors                       * 1
            ],
            5       => [
               'd8' => 1,       // Classified Scan Databanks                * 1
                 5  => 1,       // Cadmium                                  * 1
                44  => 1,       // Military Supercapacitors                 * 1
            ],
        ],
        30306   => [    // Weapon Focused Power Distributor
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                64  => 1,       // Sulphur                                  * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
              'd4' => 1,       // Anomalous Bulk Scan Data                 * 1
                34  => 1,       // Hybrid Capacitors                        * 1
                61  => 1,       // Selenium                                 * 1
            ],
            4       => [
              'd33' => 1,       // Unidentified Scan Archives               * 1
                20  => 1,       // Electrochemical Arrays                   * 1
                 5  => 1,       // Cadmium                                  * 1
            ],
            5       => [
              'd8' => 1,       // Classified Scan Databanks                * 1
                52  => 1,       // Polymer Capacitors                       * 1
                66  => 1,       // Tellurium                                * 1
            ],
        ],

        // CORE INTERNAL - Power Plant
        30401   => [    // Armoured Power Plant
            1       => [
                73  => 1,       // Worn Shield Emitters                     * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],
        30402   => [    // Low Emissions Power Plant
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
              'd18' => 1,       // Irregular Emission Data                  * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
              'd18' => 1,       // Irregular Emission Data                  * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
              'd32' => 1,       // Unexpected Emission Data                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
              'd12' => 1,       // Decoded Emission Data                    * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],
        30403   => [    // Overcharged Power Plant
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
                28  => 1,       // Heat Conduction Wiring                   * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                28  => 1,       // Heat Conduction Wiring                   * 1
                15  => 1,       // Conductive Components                    * 1
                61  => 1,       // Selenium                                 * 1
            ],
            4       => [
                29  => 1,       // Heat Dispersion Plate                    * 1
                14  => 1,       // Conductive Ceramics                      * 1
                 5  => 1,       // Cadmium                                  * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                 8  => 1,       // Chemical Manipulators                    * 1
                66  => 1,       // Tellurium                                * 1
            ],
        ],

        // CORE INTERNAL - Sensors
        30501   => [    // Light Weight Scanner
            1       => [
                50  => 1,       // Phosphorus                               * 1
            ],
            2       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                38  => 1,       // Manganese                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
            ],
            4       => [
                15  => 1,       // Conductive Components                    * 1
                49  => 1,       // Phase Alloys                             * 1
                56  => 1,       // Proto Light Alloys                       * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                56  => 1,       // Proto Light Alloys                       * 1
                57  => 1,       // Proto Radiolic Alloys                    * 1
            ],
        ],
        30502   => [    // Long-Range Scanner
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                34  => 1,       // Hybrid Capacitors                        * 1
              'd32' => 1,       // Unexpected Emission Data                 * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                20  => 1,       // Electrochemical Arrays                   * 1
              'd12' => 1,       // Decoded Emission Data                    * 1
            ],
            5       => [
                47  => 1,       // Niobium                                  * 1
                52  => 1,       // Polymer Capacitors                       * 1
              'd2' => 1,       // Abnormal Compact Emission Data           * 1
            ],
        ],
        30503   => [    // Wide Angle Scanner
            1       => [
                41  => 1,       // Mechanical Scrap                         * 1
            ],
            2       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
            ],
            3       => [
                41  => 1,       // Mechanical Scrap                         * 1
                26  => 1,       // Germanium                                * 1
              'd8' => 1,       // Classified Scan Databanks                * 1
            ],
            4       => [
                40  => 1,       // Mechanical Equipment                     * 1
                47  => 1,       // Niobium                                  * 1
              'd14' => 1,       // Divergent Scan Data                      * 1
            ],
            5       => [
                39  => 1,       // Mechanical Components                    * 1
                69  => 1,       // Tin                                      * 1
              'd9' => 1,       // Classified Scan Fragment                 * 1
            ],
        ],

        // CORE INTERNAL - Thrusters
        30601   => [    // Clean Drive Tuning
            1       => [
                64  => 1,       // Sulphur                                  * 1
            ],
            2       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                15  => 1,       // Conductive Components                    * 1
              'd32' => 1,       // Unexpected Emission Data                 * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                14  => 1,       // Conductive Ceramics                      * 1
              'd12' => 1,       // Decoded Emission Data                    * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                69  => 1,       // Tin                                      * 1
               'd2' => 1,       // Abnormal Compact Emission Data           * 1
            ],
        ],
        30602   => [    // Dirty Drive Tuning
            1       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
            ],
            2       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                40  => 1,       // Mechanical Equipment                     * 1
            ],
            3       => [
              'd29' => 1,       // Specialised Legacy Firmware              * 1
                11  => 1,       // Chromium                                 * 1
                39  => 1,       // Mechanical Components                    * 1
            ],
            4       => [
              'd19' => 1,       // Modified Consumer Firmware               * 1
                61  => 1,       // Selenium                                 * 1
                17  => 1,       // Configurable Components                  * 1
            ],
            5       => [
              'd10' => 1,       // Cracked Industrial Firmware              * 1
                 5  => 1,       // Cadmium                                  * 1
                48  => 1,       // Pharmaceutical Isolators                 * 1
            ],
        ],
        30603   => [    // Drive Strengthening
            1       => [
                 6  => 1,       // Carbon                                   * 1
            ],
            2       => [
                28  => 1,       // Heat Conduction Wiring                   * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                28  => 1,       // Heat Conduction Wiring                   * 1
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
            ],
            4       => [
                29  => 1,       // Heat Dispersion Plate                    * 1
                33  => 1,       // High Density Composites                  * 1
                13  => 1,       // Compound Shielding                       * 1
            ],
            5       => [
                30  => 1,       // Heat Exchangers                          * 1
                54  => 1,       // Proprietary Composites                   * 1
                35  => 1,       // Imperial Shielding                       * 1
            ],
        ],

        // ARMOUR
        40101   => [    // Blast resistant
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                75  => 1,       // Zinc                                     * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                72  => 1,       // Vanadium                                 * 1
                76  => 1,       // Zirconium                                * 1
            ],
            4       => [
                25  => 1,       // Galvanising Alloys                       * 1
                70  => 1,       // Tungsten                                 * 1
                42  => 1,       // Mercury                                  * 1
            ],
            5       => [
                49  => 1,       // Phase Alloys                             * 1
                45  => 1,       // Molybdenum                               * 1
                59  => 1,       // Ruthenium                                * 1
            ],
        ],
        40102   => [    // Heavy duty
            1       => [
                 6  => 1,       // Carbon                                   * 1
            ],
            2       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
            ],
            3       => [
                 6  => 1,       // Carbon                                   * 1
                62  => 1,       // Shield Emitters                          * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                72  => 1,       // Vanadium                                 * 1
                63  => 1,       // Shielding Sensors                        * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                70  => 1,       // Tungsten                                 * 1
                13  => 1,       // Compound Shielding                       * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],
        40103   => [    // Kinetic resistant
            1       => [
                46  => 1,       // Nickel                                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                72  => 1,       // Vanadium                                 * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                72  => 1,       // Vanadium                                 * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                25  => 1,       // Galvanising Alloys                       * 1
                70  => 1,       // Tungsten                                 * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                49  => 1,       // Phase Alloys                             * 1
                45  => 1,       // Molybdenum                               * 1
                18  => 1,       // Core Dynamics Composites                 * 1
            ],
        ],
        40104   => [    // Lightweight
            1       => [
                37  => 1,       // Iron                                     * 1
            ],
            2       => [
                37  => 1,       // Iron                                     * 1
                15  => 1,       // Conductive Components                    * 1
            ],
            3       => [
                37  => 1,       // Iron                                     * 1
                15  => 1,       // Conductive Components                    * 1
                33  => 1,       // High Density Composites                  * 1
            ],
            4       => [
                26  => 1,       // Germanium                                * 1
                14  => 1,       // Conductive Ceramics                      * 1
                54  => 1,       // Proprietary Composites                   * 1
            ],
            5       => [
                14  => 1,       // Conductive Ceramics                      * 1
                69  => 1,       // Tin                                      * 1
                43  => 1,       // Military Grade Alloys                    * 1
            ],
        ],
        40105   => [    // Thermal resistant
            1       => [
                28  => 1,       // Heat Conduction Wiring                   * 1
            ],
            2       => [
                46  => 1,       // Nickel                                   * 1
                29  => 1,       // Heat Dispersion Plate                    * 1
            ],
            3       => [
                60  => 1,       // Salvaged Alloys                          * 1
                72  => 1,       // Vanadium                                 * 1
                30  => 1,       // Heat Exchangers                          * 1
            ],
            4       => [
                25  => 1,       // Galvanising Alloys                       * 1
                70  => 1,       // Tungsten                                 * 1
                32  => 1,       // Heat Vanes                               * 1
            ],
            5       => [
                49  => 1,       // Phase Alloys                             * 1
                45  => 1,       // Molybdenum                               * 1
                55  => 1,       // Proto Heat Radiators                     * 1
            ],
        ],
    ];
}