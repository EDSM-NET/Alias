<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Ship;
use         EDSM\Alias;

class PaintJob extends Alias
{
    use \EDSM\Alias\Ship\PaintJob;

    /**
     * Lists all ships default paintjob
     */
    static protected $defaults = [
        128049267   => 'adder_default_defaultpaintjob',
        128816588   => 'typex_3_default_defaultpaintjob',
        128816574   => 'typex_default_defaultpaintjob',
        128816581   => 'typex_2_default_defaultpaintjob',
        128049363   => 'anaconda_default_defaultpaintjob',
        128049303   => 'asp_default_defaultpaintjob',
        128672276   => 'asp_scout_default_defaultpaintjob',
        128049345   => 'belugaliner_default_defaultpaintjob',
        128049279   => 'cobramkiii_default_defaultpaintjob',
        128672262   => 'cobramkiv_default_defaultpaintjob',
        128671831   => 'diamondbackxl_default_defaultpaintjob',
        128671217   => 'diamondback_default_defaultpaintjob',
        128049291   => 'dolphin_default_defaultpaintjob',
        128049255   => 'eagle_default_defaultpaintjob',
        128672145   => 'feddropship_mkii_default_defaultpaintjob',
        128049369   => 'federation_corvette_default_defaultpaintjob',
        128049321   => 'feddropship_default_defaultpaintjob',
        128672152   => 'federation_gunship_default_defaultpaintjob',
        128049351   => 'ferdelance_default_defaultpaintjob',
        128049261   => 'hauler_default_defaultpaintjob',
        128049315   => 'empiretrader_default_defaultpaintjob',
        128671223   => 'empire_courier_default_defaultpaintjob',
        128049375   => 'cutter_default_defaultpaintjob',
        128672138   => 'empire_eagle_default_defaultpaintjob',
        128672269   => 'independant_trader_default_defaultpaintjob',
        128816567   => 'krait_mkii_default_defaultpaintjob',
        128839281   => 'krait_light_default_defaultpaintjob',
        128915979   => 'mamba_default_defaultpaintjob',
        129030680   => 'mandalay_default_defaultpaintjob',
        128049327   => 'orca_default_defaultpaintjob',
        128049339   => 'python_default_defaultpaintjob',
        128049249   => 'sidewinder_default_defaultpaintjob',
        128049285   => 'type6_default_defaultpaintjob',
        128049297   => 'type7_default_defaultpaintjob',
        128049333   => 'type9_default_defaultpaintjob',
        128785619   => 'type9_military_default_defaultpaintjob',
        128049273   => 'viper_default_defaultpaintjob',
        128672255   => 'viper_mkiv_default_defaultpaintjob',
        128049309   => 'vulture_default_defaultpaintjob',
    ];

    /**
     * List of alias => names used in game
     */
    static protected $alias  = [
        // Adder
        128049267 => [
            'adder_default_defaultpaintjob'                 => 'Default',

            'adder_blackfriday_01'                          => 'Midnight Black',

            'adder_faction1_01'                             => 'Pirate Faction Red',
            'adder_faction1_02'                             => 'Pirate Faction Orange',
            'adder_faction1_03'                             => 'Pirate Faction Green',
            'adder_faction1_04'                             => 'Pirate Faction Rose',
            'adder_faction1_05'                             => 'Pirate Faction Blue',
            'adder_faction1_06'                             => 'Pirate Faction Purple',

            'adder_metallic_chrome'                         => 'Chrome',
            'adder_metallic2_chrome'                        => 'Chromed',
            //'adder_metallic_gold'                           => 'Gold',

            'adder_militaire_dark_green'                    => 'Military Dark Green',
            'adder_militaire_desert_sand'                   => 'Military Desert Sand',
            'adder_militaire_earth_red'                     => 'Military Earth Red',
            'adder_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'adder_militaire_forest_green'                  => 'Military Marine Blue',
            'adder_militaire_sand'                          => 'Military Sand',

            'adder_militarystripe_blue'                     => 'Military Stripe Blue',
            'adder_militarystripe_green'                    => 'Military Stripe Green',
            'adder_militarystripe_orange'                   => 'Military Stripe Orange',
            'adder_militarystripe_purple'                   => 'Military Stripe Purple',
            'adder_militarystripe_red'                      => 'Military Stripe Red',
            'adder_militarystripe_yellow'                   => 'Military Stripe Yellow',

            'adder_tactical_blue'                           => 'Tactical Cobalt',
            'adder_tactical_brown'                          => 'Tactical Khaki',
            'adder_tactical_green'                          => 'Tactical Olive',
            'adder_tactical_grey'                           => 'Tactical Graphite',
            'adder_tactical_red'                            => 'Tactical Crimson',
            'adder_tactical_white'                          => 'Tactical Ice',

            'adder_vibrant_blue'                            => 'Vibrant Blue',
            'adder_vibrant_green'                           => 'Vibrant Green',
            'adder_vibrant_orange'                          => 'Vibrant Orange',
            'adder_vibrant_purple'                          => 'Vibrant Purple',
            'adder_vibrant_red'                             => 'Vibrant Red',
            'adder_vibrant_yellow'                          => 'Vibrant Yellow',
        ],

        // Alliance Challenger
        128816588   => [
            'typex_3_default_defaultpaintjob'               => 'Default',

            'typex_3_blackfriday_01'                        => 'Midnight Black',

            'typex_3_iridescenthighcolour_01'               => 'Iridescent Scorch',
            'typex_3_iridescenthighcolour_04'               => 'Iridescent Dusk',
            'typex_3_iridescenthighcolour_05'               => 'Iridescent Aurora',
            'typex_3_iridescenthighcolour_06'               => 'Iridescent Twilight',

            'typex_3_metallic2_gold'                        => 'Golden',

            'typex_3_military_militaire_dark_green'         => 'Military Dark Green',
            'typex_3_military_militaire_desert_sand'        => 'Military Desert Sand',
            'typex_3_military_militaire_earth_red'          => 'Military Earth Red',
            'typex_3_military_militaire_earth_yellow'       => 'Military Earth Yellow',
            'typex_3_military_militaire_forest_green'       => 'Military Marine Blue',
            'typex_3_military_militaire_sand'               => 'Military Sand',

            'typex_3_military_tactical_blue'                => 'Tactical Cobalt',
            'typex_3_military_tactical_brown'               => 'Tactical Khaki',
            'typex_3_military_tactical_green'               => 'Tactical Olive',
            'typex_3_military_tactical_grey'                => 'Tactical Graphite',
            'typex_3_military_tactical_red'                 => 'Tactical Crimson',
            'typex_3_military_tactical_white'               => 'Tactical Ice',

            'typex_3_trims_blackmagenta'                    => 'Precision Black',
            'typex_3_trims_blueorange'                      => 'Precision Blue',
            'typex_3_trims_greyorange'                      => 'Precision Graphite',
            'typex_3_trims_greengrey'                       => 'Precision Green',
            'typex_3_trims_greygreen'                       => 'Precision Grey',
            'typex_3_trims_yellowblack'                     => 'Precision Yellow',

            'typex_3_military_vibrant_blue'                 => 'Vibrant Blue',
            'typex_3_military_vibrant_green'                => 'Vibrant Green',
            'typex_3_military_vibrant_orange'               => 'Vibrant Orange',
            'typex_3_military_vibrant_purple'               => 'Vibrant Purple',
            'typex_3_military_vibrant_red'                  => 'Vibrant Red',
            'typex_3_military_vibrant_yellow'               => 'Vibrant Yellow',
        ],

        // Alliance Chieftain
        128816574 => [
            'typex_default_defaultpaintjob'                 => 'Default',

            'typex_blackfriday_01'                          => 'Midnight Black',

            'typex_lavecon_lavecon'                         => 'Lavecon',

            'typex_iridescenthighcolour_01'                 => 'Iridescent Scorch',
            'typex_iridescenthighcolour_04'                 => 'Iridescent Dusk',
            'typex_iridescenthighcolour_05'                 => 'Iridescent Aurora',
            'typex_iridescenthighcolour_06'                 => 'Iridescent Twilight',

            'typex_horus1_01'                               => 'Green Apollo',
            'typex_horus1_02'                               => 'Black Apollo',
            'typex_horus1_03'                               => 'White Apollo',

            'typex_horus2_01'                               => 'White Pharaoh',
            'typex_horus2_02'                               => 'Red Pharaoh',
            'typex_horus2_03'                               => 'Gold Pharaoh',

            'typex_luminous_stripe_01'                      => 'Pulse Green',
            'typex_luminous_stripe_02'                      => 'Pulse Blue',
            'typex_luminous_stripe_03'                      => 'Pulse Purple',
            'typex_luminous_stripe_04'                      => 'Pulse Red',
            'typex_luminous_stripe_05'                      => 'Pulse Orange',
            'typex_luminous_stripe_06'                      => 'Pulse White',

            'typex_metallic2_gold'                          => 'Golden',

            'typex_military_militaire_dark_green'           => 'Military Dark Green',
            'typex_military_militaire_desert_sand'          => 'Military Desert Sand',
            'typex_military_militaire_earth_red'            => 'Military Earth Red',
            'typex_military_militaire_earth_yellow'         => 'Military Earth Yellow',
            'typex_military_militaire_forest_green'         => 'Military Marine Blue',
            'typex_military_militaire_sand'                 => 'Military Sand',

            'typex_operator_blue'                           => 'Operator Blue ',
            'typex_operator_green'                          => 'Operator Green',
            'typex_operator_gold'                           => 'Operator Gold',
            'typex_operator_teal'                           => 'Operator Teal',
            'typex_operator_red'                            => 'Operator Red',
            'typex_operator_pink'                           => 'Operator Pink',

            'typex_military_tactical_blue'                  => 'Tactical Cobalt',
            'typex_military_tactical_brown'                 => 'Tactical Khaki',
            'typex_military_tactical_green'                 => 'Tactical Olive',
            'typex_military_tactical_grey'                  => 'Tactical Graphite',
            'typex_military_tactical_red'                   => 'Tactical Crimson',
            'typex_military_tactical_white'                 => 'Tactical Ice',

            'typex_military_vibrant_blue'                   => 'Vibrant Blue',
            'typex_military_vibrant_green'                  => 'Vibrant Green',
            'typex_military_vibrant_orange'                 => 'Vibrant Orange',
            'typex_military_vibrant_purple'                 => 'Vibrant Purple',
            'typex_military_vibrant_red'                    => 'Vibrant Red',
            'typex_military_vibrant_yellow'                 => 'Vibrant Yellow',
        ],

        // Alliance Crusader
        128816581 => [
            'typex_2_default_defaultpaintjob'               => 'Default',

            'typex_2_blackfriday_01'                        => 'Midnight Black',

            'typex_2_iridescenthighcolour_01'               => 'Iridescent Scorch',
            'typex_2_iridescenthighcolour_04'               => 'Iridescent Dusk',
            'typex_2_iridescenthighcolour_05'               => 'Iridescent Aurora',
            'typex_2_iridescenthighcolour_06'               => 'Iridescent Twilight',

            'typex_2_military_militaire_dark_green'         => 'Military Dark Green',
            'typex_2_military_militaire_desert_sand'        => 'Military Desert Sand',
            'typex_2_military_militaire_earth_red'          => 'Military Earth Red',
            'typex_2_military_militaire_earth_yellow'       => 'Military Earth Yellow',
            'typex_2_military_militaire_forest_green'       => 'Military Marine Blue',
            'typex_2_military_militaire_sand'               => 'Military Sand',

            'typex_2_military_tactical_blue'                => 'Tactical Cobalt',
            'typex_2_military_tactical_brown'               => 'Tactical Khaki',
            'typex_2_military_tactical_green'               => 'Tactical Olive',
            'typex_2_military_tactical_grey'                => 'Tactical Graphite',
            'typex_2_military_tactical_red'                 => 'Tactical Crimson',
            'typex_2_military_tactical_white'               => 'Tactical Ice',

            'typex_2_military_vibrant_blue'                 => 'Vibrant Blue',
            'typex_2_military_vibrant_green'                => 'Vibrant Green',
            'typex_2_military_vibrant_orange'               => 'Vibrant Orange',
            'typex_2_military_vibrant_purple'               => 'Vibrant Purple',
            'typex_2_military_vibrant_red'                  => 'Vibrant Red',
            'typex_2_military_vibrant_yellow'               => 'Vibrant Yellow',
        ],

        // Anaconda
        128049363 => [
            'anaconda_default_defaultpaintjob'              => 'Default',

            'anaconda_blackfriday_01'                       => 'Midnight Black',

            'anaconda_corrosive_01'                         => 'Corroded 1',
            'anaconda_corrosive_02'                         => 'Corroded 2',
            'anaconda_corrosive_03'                         => 'Corroded 3',
            'anaconda_corrosive_04'                         => 'Corroded 4',
            'anaconda_corrosive_05'                         => 'Corroded 5',
            'anaconda_corrosive_06'                         => 'Corroded 6',

            'anaconda_camo_01'                              => 'Camo 1',
            'anaconda_camo_02'                              => 'Camo 2',
            'anaconda_camo_03'                              => 'Camo 3',
            'anaconda_camo_04'                              => 'Camo 4',
            'anaconda_camo_05'                              => 'Camo 5',
            'anaconda_camo_06'                              => 'Camo 6',

            'anaconda_lowlighteffect_01_01'                 => 'Crypsis Blue',
            'anaconda_lowlighteffect_01_02'                 => 'Crypsis Pink',
            'anaconda_lowlighteffect_01_03'                 => 'Crypsis Green',
            'anaconda_lowlighteffect_01_04'                 => 'Crypsis Yellow',
            'anaconda_lowlighteffect_01_05'                 => 'Crypsis Purple',
            'anaconda_lowlighteffect_01_06'                 => 'Crypsis White',

            'anaconda_faction1_01'                          => 'Pirate Faction Red',
            'anaconda_faction1_02'                          => 'Pirate Faction Orange',
            'anaconda_faction1_03'                          => 'Pirate Faction Green',
            'anaconda_faction1_04'                          => 'Pirate Faction Rose',
            'anaconda_faction1_05'                          => 'Pirate Faction Blue',
            'anaconda_faction1_06'                          => 'Pirate Faction Purple',

            'anaconda_fullmetal_brass'                      => 'Galvanized Brass',
            'anaconda_fullmetal_bronze'                     => 'Galvanized Bronze',
            'anaconda_fullmetal_cobalt'                     => 'Galvanized Cobalt',
            'anaconda_fullmetal_copper'                     => 'Galvanized Copper',
            'anaconda_fullmetal_malachite'                  => 'Galvanized Malachite',
            'anaconda_fullmetal_paladium'                   => 'Galvanized Paladium',

            'anaconda_horus1_01'                            => 'Green Apollo',
            'anaconda_horus1_02'                            => 'Black Apollo',
            'anaconda_horus1_03'                            => 'White Apollo',

            'anaconda_horus2_01'                            => 'White Pharaoh',
            'anaconda_horus2_02'                            => 'Red Pharaoh',
            'anaconda_horus2_03'                            => 'Gold Pharaoh',

            'anaconda_iridescenthighcolour_01'              => 'Iridescent Scorch',
            'anaconda_iridescenthighcolour_02'              => 'Iridescent Gleam',
            'anaconda_iridescenthighcolour_03'              => 'Iridescent Dawn',
            'anaconda_iridescenthighcolour_04'              => 'Iridescent Dusk',
            'anaconda_iridescenthighcolour_05'              => 'Iridescent Aurora',
            'anaconda_iridescenthighcolour_06'              => 'Iridescent Twilight',

            'anaconda_galnet_galnet'                        => 'Galnet',

            'anaconda_gamescom_01'                          => 'Gamescon',
            'anaconda_lavecon_lavecon'                      => 'Lavecon',
            'anaconda_eliteexpo_eliteexpo'                  => 'Frontier Expo',
            'anaconda_specialeditionpirate_01'              => 'Special Edition Pirate',

            'anaconda_luminous_stripe_01'                   => 'Pulse Green',
            'anaconda_luminous_stripe_02'                   => 'Pulse Blue',
            'anaconda_luminous_stripe_03'                   => 'Pulse Purple',
            'anaconda_luminous_stripe_04'                   => 'Pulse Red',
            'anaconda_luminous_stripe_05'                   => 'Pulse Orange',
            'anaconda_luminous_stripe_06'                   => 'Pulse White',

            'anaconda_pulse2_green'                         => 'Fusion Green',
            'anaconda_pulse2_blue'                          => 'Fusion Blue',
            'anaconda_pulse2_purple'                        => 'Fusion Purple',
            'anaconda_pulse2_red'                           => 'Fusion Red',
            'anaconda_pulse2_orange'                        => 'Fusion Orange',
            'anaconda_pulse2_white'                         => 'Fusion White',

            //'anaconda_metallic_chrome'                      => 'Chrome',
            'anaconda_metallic2_chrome'                     => 'Chromed',
            'anaconda_metallic_gold'                        => 'Gold',
            'anaconda_metallic2_gold'                       => 'Golden',

            'anaconda_militaire_dark_green'                 => 'Military Dark Green',
            'anaconda_militaire_desert_sand'                => 'Military Desert Sand',
            'anaconda_militaire_earth_red'                  => 'Military Earth Red',
            'anaconda_militaire_earth_yellow'               => 'Military Earth Yellow',
            'anaconda_militaire_forest_green'               => 'Military Marine Blue',
            'anaconda_militaire_sand'                       => 'Military Sand',

            'anaconda_operator_blue'                        => 'Operator Blue ',
            'anaconda_operator_green'                       => 'Operator Green',
            'anaconda_operator_gold'                        => 'Operator Gold',
            'anaconda_operator_teal'                        => 'Operator Teal',
            'anaconda_operator_red'                         => 'Operator Red',
            'anaconda_operator_pink'                        => 'Operator Pink',

            'anaconda_pax_east_pax_east'                    => 'PAX East',
            'anaconda_pax_west_pax_west'                    => 'PAX West',

            'anaconda_searchrescue_searchrescue'            => null,

            'anaconda_squadron_black'                       => 'Squadron Shadow',
            'anaconda_squadron_blue'                        => 'Squadron Blue',
            'anaconda_squadron_gold'                        => 'Squadron Black',
            'anaconda_squadron_green'                       => 'Squadron Green',
            'anaconda_squadron_orange'                      => 'Squadron Orange',
            'anaconda_squadron_red'                         => 'Squadron Red',

            'anaconda_strife_strife'                        => 'Chevron',

            'anaconda_tactical_blue'                        => 'Tactical Cobalt',
            'anaconda_tactical_brown'                       => 'Tactical Khaki',
            'anaconda_tactical_green'                       => 'Tactical Olive',
            'anaconda_tactical_grey'                        => 'Tactical Graphite',
            'anaconda_tactical_red'                         => 'Tactical Crimson',
            'anaconda_tactical_white'                       => 'Tactical Ice',

            'anaconda_vibrant_blue'                         => 'Vibrant Blue',
            'anaconda_vibrant_green'                        => 'Vibrant Green',
            'anaconda_vibrant_orange'                       => 'Vibrant Orange',
            'anaconda_vibrant_purple'                       => 'Vibrant Purple',
            'anaconda_vibrant_red'                          => 'Vibrant Red',
            'anaconda_vibrant_yellow'                       => 'Vibrant Yellow',

            'anaconda_war_blue'                             => 'Dazzle Blue',
            'anaconda_war_green'                            => 'Dazzle Green',
            'anaconda_war_orange'                           => 'Dazzle Orange',
            'anaconda_war_red'                              => 'Dazzle Red',
            'anaconda_war_white'                            => 'Dazzle White',
            'anaconda_war_yellow'                           => 'Dazzle Yellow',

            'anaconda_wireframe_01'                         => 'Wireframe',
            'anaconda_gold_wireframe_01'                    => 'Wireframe Gold',
        ],

        // Asp Explorer
        128049303 => [
            'asp_default_defaultpaintjob'                   => 'Default',

            'asp_blackfriday_01'                            => 'Midnight Black',

            'asp_corrosive_01'                              => 'Corroded 1',
            'asp_corrosive_02'                              => 'Corroded 2',
            'asp_corrosive_03'                              => 'Corroded 3',
            'asp_corrosive_04'                              => 'Corroded 4',
            'asp_corrosive_05'                              => 'Corroded 5',
            'asp_corrosive_06'                              => 'Corroded 6',

            'asp_default_02'                                => 'Black Apollo',
            'asp_default_03'                                => 'White Apollo',
            'asp_default_04'                                => 'Green Apollo',

            'asp_faction1_01'                               => 'Pirate Faction Red',
            'asp_faction1_02'                               => 'Pirate Faction Orange',
            'asp_faction1_03'                               => 'Pirate Faction Green',
            'asp_faction1_04'                               => 'Pirate Faction Rose',
            'asp_faction1_05'                               => 'Pirate Faction Blue',
            'asp_faction1_06'                               => 'Pirate Faction Purple',

            'asp_festive_blue'                              => 'Festive Blue',
            'asp_festive_green'                             => 'Festive Green',
            'asp_festive_purple'                            => 'Festive Purple',
            'asp_festive_red'                               => 'Festive Red',
            'asp_festive_silver'                            => 'Festive Black',
            'asp_festive_white'                             => 'Festive White',

            'asp_iridescenthighcolour_01'                   => 'Iridescent Scorch',
            'asp_iridescenthighcolour_02'                   => 'Iridescent Gleam',
            'asp_iridescenthighcolour_04'                   => 'Iridescent Dusk',
            'asp_iridescenthighcolour_05'                   => 'Iridescent Aurora',
            'asp_iridescenthighcolour_06'                   => 'Iridescent Twilight',

            'asp_gamescom_gamescom'                         => 'Gamescom',
            'asp_lavecon_lavecon'                           => 'Lavecon',
            'asp_eliteexpo_eliteexpo'                       => 'Frontier Expo',

            //'asp_metallic_chrome'                           => 'Chrome',
            'asp_metallic2_chrome'                          => 'Chromed',
            'asp_metallic_gold'                             => 'Gold',
            'asp_metallic2_gold'                            => 'Golden',

            'asp_militaire_dark_green'                      => 'Military Dark Green',
            'asp_militaire_desert_sand'                     => 'Military Desert Sand',
            'asp_militaire_earth_red'                       => 'Military Earth Red',
            'asp_militaire_earth_yellow'                    => 'Military Earth Yellow',
            'asp_militaire_forest_green'                    => 'Military Marine Blue',
            'asp_militaire_sand'                            => 'Military Sand',

            'asp_militarystripe_blue'                       => 'Military Stripe Blue',
            'asp_militarystripe_green'                      => 'Military Stripe Green',
            'asp_militarystripe_orange'                     => 'Military Stripe Orange',
            'asp_militarystripe_purple'                     => 'Military Stripe Purple',
            'asp_militarystripe_red'                        => 'Military Stripe Red',
            'asp_militarystripe_yellow'                     => 'Military Stripe Yellow',

            'asp_pax_east_pax_east'                         => 'PAX East',
            'asp_pax_west_pax_west'                         => 'PAX West',

            'asp_salvage_01'                                => 'Salvage Red',
            'asp_salvage_02'                                => 'Salvage Green',
            'asp_salvage_03'                                => 'Salvage White',
            'asp_salvage_04'                                => 'Salvage Blue',
            'asp_salvage_05'                                => 'Salvage Orange',
            'asp_salvage_06'                                => 'Salvage Black',

            'asp_squadron_black'                            => 'Squadron Shadow',
            'asp_squadron_blue'                             => 'Squadron Blue',
            'asp_squadron_gold'                             => 'Squadron Black',
            'asp_squadron_green'                            => 'Squadron Green',
            'asp_squadron_orange'                           => 'Squadron Orange',
            'asp_squadron_red'                              => 'Squadron Red',

            'asp_stripe1_02'                                => 'Red Pharaoh',
            'asp_stripe1_03'                                => 'Gold Pharaoh',
            'asp_stripe1_04'                                => 'White Pharaoh',

            'asp_synth_blue'                                => 'Synth Blue',
            'asp_synth_lime'                                => 'Synth Lime',
            'asp_synth_orange'                              => 'Synth Orange',
            'asp_synth_red'                                 => 'Synth Red',
            'asp_synth_rose'                                => 'Synth Rose',
            'asp_synth_white'                               => 'Synth White',

            'asp_tactical_blue'                             => 'Tactical Cobalt',
            'asp_tactical_brown'                            => 'Tactical Khaki',
            'asp_tactical_green'                            => 'Tactical Olive',
            'asp_tactical_grey'                             => 'Tactical Graphite',
            'asp_tactical_red'                              => 'Tactical Crimson',
            'asp_tactical_white'                            => 'Tactical Ice',

            'asp_trespasser_01'                             => 'Arrowhead',

            'asp_vibrant_blue'                              => 'Vibrant Blue',
            'asp_vibrant_green'                             => 'Vibrant Green',
            'asp_vibrant_orange'                            => 'Vibrant Orange',
            'asp_vibrant_purple'                            => 'Vibrant Purple',
            'asp_vibrant_red'                               => 'Vibrant Red',
            'asp_vibrant_yellow'                            => 'Vibrant Yellow',

            'asp_wireframe_01'                              => 'Wireframe',
            'asp_gold_wireframe_01'                         => 'Wireframe Gold',
        ],

        // Asp Scout
        128672276 => [
            'asp_scout_default_defaultpaintjob'             => 'Default',

            'asp_scout_blackfriday_01'                      => 'Midnight Black',

            'asp_scout_faction1_01'                         => 'Pirate Faction Red',
            'asp_scout_faction1_02'                         => 'Pirate Faction Orange',
            'asp_scout_faction1_03'                         => 'Pirate Faction Green',
            'asp_scout_faction1_04'                         => 'Pirate Faction Rose',
            'asp_scout_faction1_05'                         => 'Pirate Faction Blue',
            'asp_scout_faction1_06'                         => 'Pirate Faction Purple',

            //'asp_scout_gamescom_gamescom'                   => 'Gamescom',
            'asp_scout_lavecon_lavecon'                     => 'Lavecon',

            'asp_scout_metallic_chrome'                     => 'Chrome',
            'asp_scout_metallic2_chrome'                    => 'Chromed',
            //'asp_scout_metallic_gold'                       => 'Gold',

            'asp_scout_militaire_dark_green'                => 'Military Dark Green',
            'asp_scout_militaire_desert_sand'               => 'Military Desert Sand',
            'asp_scout_militaire_earth_red'                 => 'Military Earth Red',
            'asp_scout_militaire_earth_yellow'              => 'Military Earth Yellow',
            'asp_scout_militaire_forest_green'              => 'Military Marine Blue',
            'asp_scout_militaire_sand'                      => 'Military Sand',

            'asp_scout_synth_blue'                          => 'Synth Blue',
            'asp_scout_synth_lime'                          => 'Synth Lime',
            'asp_scout_synth_orange'                        => 'Synth Orange',
            'asp_scout_synth_red'                           => 'Synth Red',
            'asp_scout_synth_rose'                          => 'Synth Rose',
            'asp_scout_synth_white'                         => 'Synth White',

            'asp_scout_tactical_blue'                       => 'Tactical Cobalt',
            'asp_scout_tactical_brown'                      => 'Tactical Khaki',
            'asp_scout_tactical_green'                      => 'Tactical Olive',
            'asp_scout_tactical_grey'                       => 'Tactical Graphite',
            'asp_scout_tactical_red'                        => 'Tactical Crimson',
            'asp_scout_tactical_white'                      => 'Tactical Ice',

            'asp_scout_vibrant_blue'                        => 'Vibrant Blue',
            'asp_scout_vibrant_green'                       => 'Vibrant Green',
            'asp_scout_vibrant_orange'                      => 'Vibrant Orange',
            'asp_scout_vibrant_purple'                      => 'Vibrant Purple',
            'asp_scout_vibrant_red'                         => 'Vibrant Red',
            'asp_scout_vibrant_yellow'                      => 'Vibrant Yellow',
        ],

        // Beluga Liner
        128049345 => [
            'belugaliner_default_defaultpaintjob'           => 'Default',

            'belugaliner_blackfriday_01'                    => 'Midnight Black',

            'belugaliner_corporate1_corporate1'             => 'United Blue',
            'belugaliner_corporate1_corporate2'             => 'United Red',
            'belugaliner_corporate1_corporate3'             => 'United Yellow',
            'belugaliner_corporate1_corporate4'             => 'United Purple',
            'belugaliner_corporate1_corporate5'             => 'United Green',
            'belugaliner_corporate1_corporate6'             => 'United Marine Blue',

            'belugaliner_corporatefleet_fleeta'             => 'Expedition Blue',
            'belugaliner_corporatefleet_fleetb'             => 'Expedition Orange',
            'belugaliner_corporatefleet_fleetc'             => 'Expedition Green',
            'belugaliner_corporatefleet_fleetd'             => 'Expedition Red',
            'belugaliner_corporatefleet_fleete'             => 'Expedition Rust',
            'belugaliner_corporatefleet_fleetf'             => 'Expedition Grey',

            'belugaliner_ember_yellow'                      => 'Ember Yellow',
            'belugaliner_ember_white'                       => 'Ember White',
            'belugaliner_ember_red'                         => 'Ember Red',
            'belugaliner_ember_purple'                      => 'Ember Purple',
            'belugaliner_ember_orange'                      => 'Ember Orange',
            'belugaliner_ember_blue'                        => 'Ember Blue',

            'belugaliner_iridescenthighcolour_01'           => 'Iridescent Scorch',
            'belugaliner_iridescenthighcolour_04'           => 'Iridescent Dusk',
            'belugaliner_iridescenthighcolour_05'           => 'Iridescent Aurora',
            'belugaliner_iridescenthighcolour_06'           => 'Iridescent Twilight',

            //'belugaliner_metallic_chrome'                   => 'Chrome',
            'belugaliner_metallic2_chrome'                  => 'Chromed',
            //'belugaliner_metallic_gold'                     => 'Gold',
            'belugaliner_metallic2_gold'                    => 'Golden',

            'belugaliner_militaire_dark_green'              => 'Military Dark Green',
            'belugaliner_militaire_desert_sand'             => 'Military Desert Sand',
            'belugaliner_militaire_earth_red'               => 'Military Earth Red',
            'belugaliner_militaire_earth_yellow'            => 'Military Earth Yellow',
            'belugaliner_militaire_forest_green'            => 'Military Marine Blue',
            'belugaliner_militaire_sand'                    => 'Military Sand',

            'belugaliner_geometric_blue'                    => 'Prestige Blue',
            'belugaliner_geometric_green'                   => 'Prestige Green',
            'belugaliner_geometric_orange'                  => 'Prestige Orange',
            'belugaliner_geometric_purple'                  => 'Prestige Purple',
            'belugaliner_geometric_red'                     => 'Prestige Red',
            'belugaliner_geometric_yellow'                  => 'Prestige Yellow',

            'belugaliner_tactical_blue'                     => 'Tactical Cobalt',
            'belugaliner_tactical_brown'                    => 'Tactical Khaki',
            'belugaliner_tactical_green'                    => 'Tactical Olive',
            'belugaliner_tactical_grey'                     => 'Tactical Graphite',
            'belugaliner_tactical_red'                      => 'Tactical Crimson',
            'belugaliner_tactical_white'                    => 'Tactical Ice',

            'belugaliner_vibrant_blue'                      => 'Vibrant Blue',
            'belugaliner_vibrant_green'                     => 'Vibrant Green',
            'belugaliner_vibrant_orange'                    => 'Vibrant Orange',
            'belugaliner_vibrant_purple'                    => 'Vibrant Purple',
            'belugaliner_vibrant_red'                       => 'Vibrant Red',
            'belugaliner_vibrant_yellow'                    => 'Vibrant Yellow',
        ],

        // Cobra MkIII
        128049279 => [
            'cobramkiii_default_defaultpaintjob'            => 'Default',

            'cobramkiii_blackfriday_01'                     => 'Midnight Black',

            'cobramkiii_camo1_02'                           => 'Sabotage Purple',

            'cobramkiii_camo2_01'                           => 'Urban Camo',
            'cobramkiii_camo2_03'                           => 'Polar Camo',

            'cobramkiii_community_community'                => 'Community',

            'cobramkiii_corrosive_01'                       => 'Corroded 1',
            'cobramkiii_corrosive_02'                       => 'Corroded 2',
            'cobramkiii_corrosive_03'                       => 'Corroded 3',
            'cobramkiii_corrosive_04'                       => 'Corroded 4',
            'cobramkiii_corrosive_05'                       => 'Corroded 5',
            'cobramkiii_corrosive_06'                       => 'Corroded 6',

            'cobramkiii_egx_egx'                            => 'EGX',
            'cobramkiii_yogscast_01'                        => 'Yogscast',

            'cobramkiii_faction1_01'                        => 'Pirate Faction Red',
            'cobramkiii_faction1_02'                        => 'Pirate Faction Orange',
            'cobramkiii_faction1_03'                        => 'Pirate Faction Green',
            'cobramkiii_faction1_04'                        => 'Pirate Faction Rose',
            'cobramkiii_faction1_05'                        => 'Pirate Faction Blue',
            'cobramkiii_faction1_06'                        => 'Pirate Faction Purple',

            'cobramkiii_faction1_onionhead1'                => 'Onionhead',

            'cobramkiii_festive_blue'                       => 'Festive Blue',
            'cobramkiii_festive_green'                      => 'Festive Green',
            'cobramkiii_festive_purple'                     => 'Festive Purple',
            'cobramkiii_festive_red'                        => 'Festive Red',
            'cobramkiii_festive_silver'                     => 'Festive Black',
            'cobramkiii_festive_white'                      => 'Festive White',

            'cobramkiii_flag_australia_01'                  => 'Australia Flag',
            'cobramkiii_flag_austria_01'                    => 'Austria Flag',
            'cobramkiii_flag_belgium_01'                    => 'Belgium Flag',
            'cobramkiii_flag_canada_01'                     => 'Canada Flag',
            'cobramkiii_flag_denmark_01'                    => 'Denmark Flag',
            'cobramkiii_flag_finland_01'                    => 'Finland Flag',
            'cobramkiii_flag_france_01'                     => 'France Flag',
            'cobramkiii_flag_germany_01'                    => 'Germany Flag',
            'cobramkiii_flag_ireland_01'                    => 'Ireland Flag',
            'cobramkiii_flag_italy_01'                      => 'Italy Flag',
            'cobramkiii_flag_netherlands_01'                => 'Netherlands Flag',
            'cobramkiii_flag_newzealand_01'                 => 'New Zealand Flag',
            'cobramkiii_flag_norway_01'                     => 'Norway Flag',
            'cobramkiii_flag_poland_01'                     => 'Poland Flag',
            'cobramkiii_flag_russia_01'                     => 'Russia Flag',
            'cobramkiii_flag_spain_01'                      => 'Spain Flag',
            'cobramkiii_flag_sweden_01'                     => 'Sweden Flag',
            'cobramkiii_flag_switzerland_01'                => 'Switzerland Flag',
            'cobramkiii_flag_uk_01'                         => 'Union Jack Flag',
            'cobramkiii_flag_usa_01'                        => 'Stars & Stripes Flag',

            'cobramkiii_gamescom_gamescom'                  => 'Gamescom',

            'cobramkiii_gradient1_01'                       => 'Hunter Rust',
            'cobramkiii_gradient1_02'                       => 'Hunter Graphite',
            'cobramkiii_gradient1_03'                       => 'Hunter Blue',
            'cobramkiii_gradient1_04'                       => 'Hunter Green',
            'cobramkiii_gradient1_05'                       => 'Hunter Red',
            'cobramkiii_gradient1_06'                       => 'Hunter Purple',

            'cobramkiii_gradient2_01'                       => 'Predator Red',
            'cobramkiii_gradient2_02'                       => 'Predator Green',
            'cobramkiii_gradient2_03'                       => 'Predator Teal',
            'cobramkiii_gradient2_04'                       => 'Predator Rose',
            'cobramkiii_gradient2_05'                       => 'Predator Lime',
            'cobramkiii_gradient2_06'                       => 'Predator Blue',

            'cobramkiii_horizons_desert'                    => 'Horizons Desert',
            'cobramkiii_horizons_lunar'                     => 'Horizons Lunar',
            'cobramkiii_horizons_polar'                     => 'Horizons Polar',

            'cobramkiii_hotrod_01'                          => 'Red Ignition',
            'cobramkiii_hotrod_03'                          => 'Orange Ignition',

            'cobramkiii_iridescenthighcolour_01'            => 'Iridescent Scorch',
            'cobramkiii_iridescenthighcolour_04'            => 'Iridescent Dusk',
            'cobramkiii_iridescenthighcolour_05'            => 'Iridescent Aurora',
            'cobramkiii_iridescenthighcolour_06'            => 'Iridescent Twilight',

            'cobramkiii_lavecon_lavecon'                    => 'Lavecon',

            'cobramkiii_medusa_aquamarine'                  => 'Medusa',
            'cobramkiii_merc'                               => 'Mercenary',

            'cobramkiii_pcgn_01'                            => 'PCGN',
            'cobramkiii_25thanniversary_01'                 => 'Frontier 25',
            'cobramkiii_opm_opm'                            => 'Official Blue',

            'cobramkiii_default_52'                         => 'cobramkiii_metallic_chrome', // REDIRECT
            'cobramkiii_metallic_chrome'                    => 'Chrome',
            'cobramkiii_metallic2_chrome'                   => 'Chromed',
            //'cobramkiii_metallic_gold'                      => 'Gold',
            'cobramkiii_metallic2_gold'                     => 'Golden',

            'cobramkiii_militaire_dark_green'               => 'Military Dark Green',
            'cobramkiii_militaire_desert_sand'              => 'Military Desert Sand',
            'cobramkiii_militaire_earth_red'                => 'Military Earth Red',
            'cobramkiii_militaire_earth_yellow'             => 'Military Earth Yellow',
            'cobramkiii_militaire_forest_green'             => 'Military Marine Blue',
            'cobramkiii_militaire_sand'                     => 'Military Sand',

            'cobramkiii_luminous_stripe_01'                 => 'Pulse Green',
            'cobramkiii_luminous_stripe_02'                 => 'Pulse Blue',
            'cobramkiii_luminous_stripe_03'                 => 'Pulse Purple',
            'cobramkiii_luminous_stripe_04'                 => 'Pulse Red',
            'cobramkiii_luminous_stripe_05'                 => 'Pulse Orange',
            'cobramkiii_luminous_stripe_06'                 => 'Pulse White',

            'cobramkiii_luminous_stripe_ver2_01'            => 'Fusion Green',
            'cobramkiii_luminous_stripe_ver2_02'            => 'Fusion Blue',
            'cobramkiii_luminous_stripe_ver2_03'            => 'Fusion Purple',
            'cobramkiii_luminous_stripe_ver2_04'            => 'Fusion Red',
            'cobramkiii_luminous_stripe_ver2_05'            => 'Fusion Orange',
            'cobramkiii_luminous_stripe_ver2_06'            => 'Fusion White',

            'cobramkiii_onionhead1_01'                      => 'Onion Head',

            'cobramkiii_pcgamer_pcgamer'                    => 'PC Gamer',

            'cobramkiii_squadron_black'                     => 'Squadron Shadow',
            'cobramkiii_squadron_blue'                      => 'Squadron Blue',
            'cobramkiii_squadron_gold'                      => 'Squadron Black',
            'cobramkiii_squadron_green'                     => 'Squadron Green',
            'cobramkiii_squadron_orange'                    => 'Squadron Orange',
            'cobramkiii_squadron_red'                       => 'Squadron Red',

            'cobramkiii_stripe1_02'                         => 'Orange Rattler',
            'cobramkiii_stripe1_03'                         => 'Blue Rattler',

            'cobramkiii_stripe2_02'                         => 'Yellow Serpent',
            'cobramkiii_stripe2_03'                         => 'Red Serpent',

            'cobramkiii_tactical_blue'                      => 'Tactical Cobalt',
            'cobramkiii_tactical_brown'                     => 'Tactical Khaki',
            'cobramkiii_tactical_green'                     => 'Tactical Olive',
            'cobramkiii_tactical_grey'                      => 'Tactical Graphite',
            'cobramkiii_tactical_red'                       => 'Tactical Crimson',
            'cobramkiii_tactical_white'                     => 'Tactical Ice',

            'cobramkiii_vibrant_blue'                       => 'Vibrant Blue',
            'cobramkiii_vibrant_green'                      => 'Vibrant Green',
            'cobramkiii_vibrant_orange'                     => 'Vibrant Orange',
            'cobramkiii_vibrant_purple'                     => 'Vibrant Purple',
            'cobramkiii_vibrant_red'                        => 'Vibrant Red',
            'cobramkiii_vibrant_yellow'                     => 'Vibrant Yellow',

            'cobramkiii_wireframe_01'                       => 'Wireframe',
            'cobramkiii_gold_wireframe_01'                  => 'Wireframe Gold',
            
            'cobramkiii_lrpo_azure'                         => 'Azure',
        ],

        // Cobra MkIV
        128672262 => [
            'cobramkiv_default_defaultpaintjob'             => 'Default',

            'cobramkiv_blackfriday_01'                      => 'Midnight Black',

            /*
            'cobramkiv_faction1_01'                         => 'Pirate Faction Red',
            'cobramkiv_faction1_02'                         => 'Pirate Faction Orange',
            'cobramkiv_faction1_03'                         => 'Pirate Faction Green',
            'cobramkiv_faction1_04'                         => 'Pirate Faction Rose',
            'cobramkiv_faction1_05'                         => 'Pirate Faction Blue',
            'cobramkiv_faction1_06'                         => 'Pirate Faction Purple',
            */

            /*
            'cobramkiv_flag_australia_01'                   => 'Australia Flag',
            'cobramkiv_flag_austria_01'                     => 'Austria Flag',
            'cobramkiv_flag_belgium_01'                     => 'Belgium Flag',
            'cobramkiv_flag_canada_01'                      => 'Canada Flag',
            'cobramkiv_flag_denmark_01'                     => 'Denmark Flag',
            'cobramkiv_flag_finland_01'                     => 'Finland Flag',
            'cobramkiv_flag_france_01'                      => 'France Flag',
            'cobramkiv_flag_germany_01'                     => 'Germany Flag',
            'cobramkiv_flag_italy_01'                       => 'Italy Flag',
            'cobramkiv_flag_netherlands_01'                 => 'Netherlands Flag',
            'cobramkiv_flag_newzealand_01'                  => 'New Zealand Flag',
            'cobramkiv_flag_norway_01'                      => 'Norway Flag',
            'cobramkiv_flag_poland_01'                      => 'Poland Flag',
            'cobramkiv_flag_russia_01'                      => 'Russia Flag',
            'cobramkiv_flag_spain_01'                       => 'Spain Flag',
            'cobramkiv_flag_sweden_01'                      => 'Sweden Flag',
            'cobramkiv_flag_switzerland_01'                 => 'Switzerland Flag',
            'cobramkiv_flag_uk_01'                          => 'Union Jack Flag',
            'cobramkiv_flag_usa_01'                         => 'Stars & Stripes Flag',
            */

            //'cobramkiv_gamescom_gamescom'                   => 'Gamescom',

            'cobramkiv_gradient1_01'                        => 'Hunter Rust',
            'cobramkiv_gradient1_02'                        => 'Hunter Graphite',
            'cobramkiv_gradient1_03'                        => 'Hunter Blue',
            'cobramkiv_gradient1_04'                        => 'Hunter Green',
            'cobramkiv_gradient1_05'                        => 'Hunter Red',
            'cobramkiv_gradient1_06'                        => 'Hunter Purple',

            'cobramkiv_gradient2_01'                        => 'Predator Red',
            'cobramkiv_gradient2_02'                        => 'Predator Green',
            'cobramkiv_gradient2_03'                        => 'Predator Teal',
            'cobramkiv_gradient2_04'                        => 'Predator Rose',
            'cobramkiv_gradient2_05'                        => 'Predator Lime',
            'cobramkiv_gradient2_06'                        => 'Predator Blue',

            'cobramkiv_horizons_desert'                     => 'Horizons Desert',
            'cobramkiv_horizons_lunar'                      => 'Horizons Lunar',
            'cobramkiv_horizons_polar'                      => 'Horizons Polar',

            'cobramkiv_lavecon_lavecon'                     => 'Lavecon',

            'cobramkiv_metallic_chrome'                     => 'Chrome',
            'cobramkiv_metallic2_chrome'                    => 'Chromed',
            //'cobramkiv_metallic_gold'                       => 'Gold',

            /*
            'cobramkiv_militaire_dark_green'                => 'Military Dark Green',
            'cobramkiv_militaire_desert_sand'               => 'Military Desert Sand',
            'cobramkiv_militaire_earth_red'                 => 'Military Earth Red',
            'cobramkiv_militaire_earth_yellow'              => 'Military Earth Yellow',
            'cobramkiv_militaire_forest_green'              => 'Military Marine Blue',
            'cobramkiv_militaire_sand'                      => 'Military Sand',
            */

            /*
            'cobramkiv_tactical_blue'                       => 'Tactical Cobalt',
            'cobramkiv_tactical_brown'                      => 'Tactical Khaki',
            'cobramkiv_tactical_green'                      => 'Tactical Olive',
            'cobramkiv_tactical_grey'                       => 'Tactical Graphite',
            'cobramkiv_tactical_red'                        => 'Tactical Crimson',
            'cobramkiv_tactical_white'                      => 'Tactical Ice',
            */

            /*
            'cobramkiv_vibrant_blue'                        => 'Vibrant Blue',
            'cobramkiv_vibrant_green'                       => 'Vibrant Green',
            'cobramkiv_vibrant_orange'                      => 'Vibrant Orange',
            'cobramkiv_vibrant_purple'                      => 'Vibrant Purple',
            'cobramkiv_vibrant_red'                         => 'Vibrant Red',
            'cobramkiv_vibrant_yellow'                      => 'Vibrant Yellow',
            */

            //'cobramkiv_wireframe_01'                        => 'Wireframe',
        ],

        // Diamondback Explorer
        128671831 => [
            'diamondbackxl_default_defaultpaintjob'         => 'Default',

            'diamondbackxl_blackfriday_01'                  => 'Midnight Black',

            'diamondbackxl_iridescenthighcolour_02'         => 'Iridescent Gleam',

            'diamondbackxl_metallic_chrome'                 => 'Chrome',
            'diamondbackxl_metallic2_chrome'                => 'Chromed',
            //'diamondbackxl_metallic_gold'                   => 'Gold',
            'diamondbackxl_metallic2_gold'                  => 'Golden',

            'diamondbackxl_militaire_dark_green'            => 'Military Dark Green',
            'diamondbackxl_militaire_desert_sand'           => 'Military Desert Sand',
            'diamondbackxl_militaire_earth_red'             => 'Military Earth Red',
            'diamondbackxl_militaire_earth_yellow'          => 'Military Earth Yellow',
            'diamondbackxl_militaire_forest_green'          => 'Military Marine Blue',
            'diamondbackxl_militaire_sand'                  => 'Military Sand',

            'diamondbackxl_tactical_blue'                   => 'Tactical Cobalt',
            'diamondbackxl_tactical_brown'                  => 'Tactical Khaki',
            'diamondbackxl_tactical_green'                  => 'Tactical Olive',
            'diamondbackxl_tactical_grey'                   => 'Tactical Graphite',
            'diamondbackxl_tactical_red'                    => 'Tactical Crimson',
            'diamondbackxl_tactical_white'                  => 'Tactical Ice',

            'diamondbackxl_vibrant_blue'                    => 'Vibrant Blue',
            'diamondbackxl_vibrant_green'                   => 'Vibrant Green',
            'diamondbackxl_vibrant_orange'                  => 'Vibrant Orange',
            'diamondbackxl_vibrant_purple'                  => 'Vibrant Purple',
            'diamondbackxl_vibrant_red'                     => 'Vibrant Red',
            'diamondbackxl_vibrant_yellow'                  => 'Vibrant Yellow',
        ],

        // Diamondback Scout
        128671217 => [
            'diamondback_default_defaultpaintjob'           => 'Default',

            'diamondback_blackfriday_01'                    => 'Midnight Black',

            /*
            'diamondback_faction1_01'                       => 'Pirate Faction Red',
            'diamondback_faction1_02'                       => 'Pirate Faction Orange',
            'diamondback_faction1_03'                       => 'Pirate Faction Green',
            'diamondback_faction1_04'                       => 'Pirate Faction Rose',
            'diamondback_faction1_05'                       => 'Pirate Faction Blue',
            'diamondback_faction1_06'                       => 'Pirate Faction Purple',
            */

            //'diamondback_metallic_chrome'                   => 'Chrome',
            //'diamondback_metallic_gold'                     => 'Gold',

            'diamondback_militaire_dark_green'              => 'Military Dark Green',
            'diamondback_militaire_desert_sand'             => 'Military Desert Sand',
            'diamondback_militaire_earth_red'               => 'Military Earth Red',
            'diamondback_militaire_earth_yellow'            => 'Military Earth Yellow',
            'diamondback_militaire_forest_green'            => 'Military Marine Blue',
            'diamondback_militaire_sand'                    => 'Military Sand',

            'diamondback_tactical_blue'                     => 'Tactical Cobalt',
            'diamondback_tactical_brown'                    => 'Tactical Khaki',
            'diamondback_tactical_green'                    => 'Tactical Olive',
            'diamondback_tactical_grey'                     => 'Tactical Graphite',
            'diamondback_tactical_red'                      => 'Tactical Crimson',
            'diamondback_tactical_white'                    => 'Tactical Ice',

            'diamondback_vibrant_blue'                      => 'Vibrant Blue',
            'diamondback_vibrant_green'                     => 'Vibrant Green',
            'diamondback_vibrant_orange'                    => 'Vibrant Orange',
            'diamondback_vibrant_purple'                    => 'Vibrant Purple',
            'diamondback_vibrant_red'                       => 'Vibrant Red',
            'diamondback_vibrant_yellow'                    => 'Vibrant Yellow',
        ],

        // Dolphin
        128049291 => [
            'dolphin_default_defaultpaintjob'               => 'Default',

            'dolphin_blackfriday_01'                        => 'Midnight Black',

            'dolphin_corporate1_corporate1'                 => 'Wayfarer Blue',
            'dolphin_corporate1_corporate2'                 => 'Wayfarer Red',
            'dolphin_corporate1_corporate3'                 => 'Wayfarer Orange',
            'dolphin_corporate1_corporate4'                 => 'Wayfarer Purple',
            'dolphin_corporate1_corporate5'                 => 'Wayfarer Green',
            'dolphin_corporate1_corporate6'                 => 'Wayfarer Yellow',

            'dolphin_corporatefleet_fleeta'                 => 'Excursion Blue',
            'dolphin_corporatefleet_fleetb'                 => 'Excursion Orange',
            'dolphin_corporatefleet_fleetc'                 => 'Excursion Green',
            'dolphin_corporatefleet_fleetd'                 => 'Excursion Red',
            'dolphin_corporatefleet_fleete'                 => 'Excursion Rust',
            'dolphin_corporatefleet_fleetf'                 => 'Excursion Yellow',

            'dolphin_corporate2_corporate2a'                => 'Odyssey Green',
            'dolphin_corporate2_corporate2b'                => 'Odyssey Orange',
            'dolphin_corporate2_corporate2c'                => 'Odyssey Red',
            'dolphin_corporate2_corporate2d'                => 'Odyssey Yellow',
            'dolphin_corporate2_corporate2e'                => 'Odyssey Blue',
            'dolphin_corporate2_corporate2f'                => 'Odyssey Graphite',

            'dolphin_ember_yellow'                          => 'Ember Yellow',
            'dolphin_ember_white'                           => 'Ember White',
            'dolphin_ember_red'                             => 'Ember Red',
            'dolphin_ember_purple'                          => 'Ember Purple',
            'dolphin_ember_orange'                          => 'Ember Orange',
            'dolphin_ember_blue'                            => 'Ember Blue',

            'dolphin_iridescenthighcolour_01'               => 'Iridescent Scorch',
            'dolphin_iridescenthighcolour_04'               => 'Iridescent Dusk',
            'dolphin_iridescenthighcolour_05'               => 'Iridescent Aurora',
            'dolphin_iridescenthighcolour_06'               => 'Iridescent Twilight',

            //'dolphin_metallic_chrome'                       => 'Chrome',
            'dolphin_metallic2_chrome'                      => 'Chromed',
            //'dolphin_metallic_gold'                         => 'Gold',
            'dolphin_metallic2_gold'                        => 'Golden',

            'dolphin_militaire_dark_green'                  => 'Military Dark Green',
            'dolphin_militaire_desert_sand'                 => 'Military Desert Sand',
            'dolphin_militaire_earth_red'                   => 'Military Earth Red',
            'dolphin_militaire_earth_yellow'                => 'Military Earth Yellow',
            'dolphin_militaire_forest_green'                => 'Military Marine Blue',
            'dolphin_militaire_sand'                        => 'Military Sand',

            'dolphin_geometric_blue'                        => 'Prestige Blue',
            'dolphin_geometric_green'                       => 'Prestige Green',
            'dolphin_geometric_orange'                      => 'Prestige Orange',
            'dolphin_geometric_purple'                      => 'Prestige Purple',
            'dolphin_geometric_red'                         => 'Prestige Red',
            'dolphin_geometric_yellow'                      => 'Prestige Yellow',

            'dolphin_tactical_blue'                         => 'Tactical Cobalt',
            'dolphin_tactical_brown'                        => 'Tactical Khaki',
            'dolphin_tactical_green'                        => 'Tactical Olive',
            'dolphin_tactical_grey'                         => 'Tactical Graphite',
            'dolphin_tactical_red'                          => 'Tactical Crimson',
            'dolphin_tactical_white'                        => 'Tactical Ice',

            'dolphin_vibrant_blue'                          => 'Vibrant Blue',
            'dolphin_vibrant_green'                         => 'Vibrant Green',
            'dolphin_vibrant_orange'                        => 'Vibrant Orange',
            'dolphin_vibrant_purple'                        => 'Vibrant Purple',
            'dolphin_vibrant_red'                           => 'Vibrant Red',
            'dolphin_vibrant_yellow'                        => 'Vibrant Yellow',
        ],

        // Eagle
        128049255 => [
            'eagle_default_defaultpaintjob'                 => 'Default',

            'eagle_blackfriday_01'                          => 'Midnight Black',

            'eagle_camo_01'                                 => 'Jungle Camo',
            'eagle_camo_02'                                 => 'Polar Camo',
            'eagle_camo_03'                                 => 'Urban Camo',

            'eagle_crimson'                                 => 'Crimson Eagle',

            'eagle_doublestripe_01'                         => 'Red Rail',
            'eagle_doublestripe_02'                         => 'White Rail',
            'eagle_doublestripe_03'                         => 'Orange Rail',

            'eagle_faction1_01'                             => 'Pirate Faction Red',
            'eagle_faction1_02'                             => 'Pirate Faction Orange',
            'eagle_faction1_03'                             => 'Pirate Faction Green',
            'eagle_faction1_04'                             => 'Pirate Faction Rose',
            'eagle_faction1_05'                             => 'Pirate Faction Blue',
            'eagle_faction1_06'                             => 'Pirate Faction Purple',

            'eagle_hotrod_01'                               => 'Red Ignition',
            'eagle_hotrod_03'                               => 'Orange Ignition',

            'eagle_lavecon_lavecon'                         => 'Lavecon',

            'eagle_metallic_chrome'                         => 'Chrome',
            'eagle_metallic2_chrome'                        => 'Chromed',
            //'eagle_metallic_gold'                           => 'Gold',
            'eagle_metallic2_gold'                          => 'Golden',

            'eagle_militaire_dark_green'                    => 'Military Dark Green',
            'eagle_militaire_desert_sand'                   => 'Military Desert Sand',
            'eagle_militaire_earth_red'                     => 'Military Earth Red',
            'eagle_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'eagle_militaire_forest_green'                  => 'Military Marine Blue',
            'eagle_militaire_sand'                          => 'Military Sand',

            'eagle_pax_east_pax_east'                       => 'PAX East',
            'eagle_pax_south_pax_south'                     => 'PAX South',
            //'eagle_paxprime_paxprime'                       => 'PAX Prime',

            'eagle_aerial_display_green'                    => 'Slipstream Green',
            'eagle_aerial_display_blue'                     => 'Slipstream Blue',
            'eagle_aerial_display_pink'                     => 'Slipstream Purple',
            'eagle_aerial_display_yellow'                   => 'Slipstream Yellow',
            'eagle_aerial_display_orange'                   => 'Slipstream Orange',
            'eagle_aerial_display_red'                      => 'Slipstream Red',

            'eagle_squadron_black'                          => 'Squadron Shadow',
            'eagle_squadron_blue'                           => 'Squadron Blue',
            'eagle_squadron_gold'                           => 'Squadron Black',
            'eagle_squadron_green'                          => 'Squadron Green',
            'eagle_squadron_orange'                         => 'Squadron Orange',
            'eagle_squadron_red'                            => 'Squadron Red',

            'eagle_stripe1_01'                              => 'Red Streak',
            'eagle_stripe1_02'                              => 'Blue Streak',
            'eagle_stripe1_03'                              => 'Green Streak',

            'eagle_tactical_blue'                           => 'Tactical Cobalt',
            'eagle_tactical_brown'                          => 'Tactical Khaki',
            'eagle_tactical_green'                          => 'Tactical Olive',
            'eagle_tactical_grey'                           => 'Tactical Graphite',
            'eagle_tactical_red'                            => 'Tactical Crimson',
            'eagle_tactical_white'                          => 'Tactical Ice',

            'eagle_thirds_01'                               => 'Red Mohawk',
            'eagle_thirds_02'                               => 'Orange Mohawk',
            'eagle_thirds_03'                               => 'White Mohawk',

            'eagle_vibrant_blue'                            => 'Vibrant Blue',
            'eagle_vibrant_green'                           => 'Vibrant Green',
            'eagle_vibrant_orange'                          => 'Vibrant Orange',
            'eagle_vibrant_purple'                          => 'Vibrant Purple',
            'eagle_vibrant_red'                             => 'Vibrant Red',
            'eagle_vibrant_yellow'                          => 'Vibrant Yellow',

            //'eagle_wireframe_01'                            => 'Wireframe',
            
            'eagle_salvation_09'                            => 'Azimut Ruthless',
        ],

        // Federal Assault Ship
        128672145 => [
            'feddropship_mkii_default_defaultpaintjob'      => 'Default',

            'feddropship_mkii_blackfriday_01'               => 'Midnight Black',

            'feddropship_mkii_faction1_01'                  => 'Pirate Faction Red',
            'feddropship_mkii_faction1_02'                  => 'Pirate Faction Orange',
            'feddropship_mkii_faction1_03'                  => 'Pirate Faction Green',
            'feddropship_mkii_faction1_04'                  => 'Pirate Faction Rose',
            'feddropship_mkii_faction1_05'                  => 'Pirate Faction Blue',
            'feddropship_mkii_faction1_06'                  => 'Pirate Faction Purple',

            'feddropship_mkii_gradient2_01'                 => 'Predator Red',
            'feddropship_mkii_gradient2_02'                 => 'Predator Green',
            'feddropship_mkii_gradient2_03'                 => 'Predator Teal',
            'feddropship_mkii_gradient2_04'                 => 'Predator Crimson',
            'feddropship_mkii_gradient2_05'                 => 'Predator Lime',
            'feddropship_mkii_gradient2_06'                 => 'Predator Blue',

            'feddropship_mkii_iridescenthighcolour_01'      => 'Iridescent Scorch',
            'feddropship_mkii_iridescenthighcolour_04'      => 'Iridescent Dusk',
            'feddropship_mkii_iridescenthighcolour_05'      => 'Iridescent Aurora',
            'feddropship_mkii_iridescenthighcolour_06'      => 'Iridescent Twilight',

            //'feddropship_mkii_metallic_chrome'              => 'Chrome',
            'feddropship_mkii_metallic2_chrome'             => 'Chromed',
            //'feddropship_mkii_metallic_gold'                => 'Gold',

            'feddropship_mkii_militaire_dark_green'         => 'Military Dark Green',
            'feddropship_mkii_militaire_desert_sand'        => 'Military Desert Sand',
            'feddropship_mkii_militaire_earth_red'          => 'Military Earth Red',
            'feddropship_mkii_militaire_earth_yellow'       => 'Military Earth Yellow',
            'feddropship_mkii_militaire_forest_green'       => 'Military Marine Blue',
            'feddropship_mkii_militaire_sand'               => 'Military Sand',

            'feddropship_mkii_sudeep_sudeep'                => 'Sudeep',

            'feddropship_mkii_tactical_blue'                => 'Tactical Cobalt',
            'feddropship_mkii_tactical_brown'               => 'Tactical Khaki',
            'feddropship_mkii_tactical_green'               => 'Tactical Olive',
            'feddropship_mkii_tactical_grey'                => 'Tactical Graphite',
            'feddropship_mkii_tactical_red'                 => 'Tactical Crimson',
            'feddropship_mkii_tactical_white'               => 'Tactical Ice',

            'feddropship_mkii_vibrant_blue'                 => 'Vibrant Blue',
            'feddropship_mkii_vibrant_green'                => 'Vibrant Green',
            'feddropship_mkii_vibrant_orange'               => 'Vibrant Orange',
            'feddropship_mkii_vibrant_purple'               => 'Vibrant Purple',
            'feddropship_mkii_vibrant_red'                  => 'Vibrant Red',
            'feddropship_mkii_vibrant_yellow'               => 'Vibrant Yellow',

            'feddropship_mkii_war_blue'                     => 'Dazzle Blue',
            'feddropship_mkii_war_green'                    => 'Dazzle Green',
            'feddropship_mkii_war_orange'                   => 'Dazzle Orange',
            'feddropship_mkii_war_red'                      => 'Dazzle Red',
            'feddropship_mkii_war_white'                    => 'Dazzle White',
            'feddropship_mkii_war_yellow'                   => 'Dazzle Yellow',
        ],

        // Federal Corvette
        128049369 => [
            'federation_corvette_default_defaultpaintjob'   => 'Default',

            'federation_corvette_blackfriday_01'            => 'Midnight Black',

            'federation_corvette_colourgeo_blue'            => 'Icarus Blue',
            'federation_corvette_colourgeo_green'           => 'Icarus Green',
            'federation_corvette_colourgeo_grey'            => 'Icarus Grey',
            'federation_corvette_colourgeo_orange'          => 'Icarus Orange',
            'federation_corvette_colourgeo_red'             => 'Icarus Red',
            'federation_corvette_colourgeo_yellow'          => 'Icarus Yellow',

            'federation_corvette_colourgeo2_blue'           => 'Prestige Blue',
            'federation_corvette_colourgeo2_green'          => 'Prestige Green',
            'federation_corvette_colourgeo2_orange'         => 'Prestige Orange',
            'federation_corvette_colourgeo2_purple'         => 'Prestige Purple',
            'federation_corvette_colourgeo2_red'            => 'Prestige Red',
            'federation_corvette_colourgeo2_yellow'         => 'Prestige Yellow',

            'federation_corvette_corrosive_01'              => 'Corroded 1',
            'federation_corvette_corrosive_02'              => 'Corroded 2',
            'federation_corvette_corrosive_03'              => 'Corroded 3',
            'federation_corvette_corrosive_04'              => 'Corroded 4',
            'federation_corvette_corrosive_05'              => 'Corroded 5',
            'federation_corvette_corrosive_06'              => 'Corroded 6',

            'federation_corvette_iridescenthighcolour_01'   => 'Iridescent Scorch',
            'federation_corvette_iridescenthighcolour_02'   => 'Iridescent Gleam',
            'federation_corvette_iridescenthighcolour_04'   => 'Iridescent Dusk',
            'federation_corvette_iridescenthighcolour_05'   => 'Iridescent Aurora',
            'federation_corvette_iridescenthighcolour_06'   => 'Iridescent Twilight',

            'federation_corvette_metallic_chrome'           => 'Chrome',
            'federation_corvette_metallic2_chrome'          => 'Chromed',
            //'federation_corvette_metallic_gold'             => 'Gold',
            'federation_corvette_metallic2_gold'            => 'Golden',

            'federation_corvette_militaire_dark_green'      => 'Military Dark Green',
            'federation_corvette_militaire_desert_sand'     => 'Military Desert Sand',
            'federation_corvette_militaire_earth_red'       => 'Military Earth Red',
            'federation_corvette_militaire_earth_yellow'    => 'Military Earth Yellow',
            'federation_corvette_militaire_forest_green'    => 'Military Marine Blue',
            'federation_corvette_militaire_sand'            => 'Military Sand',

            'federation_corvette_operator_blue'             => 'Operator Blue',
            'federation_corvette_operator_green'            => 'Operator Green',
            'federation_corvette_operator_red'              => 'Operator Red',
            'federation_corvette_operator_pink'             => 'Operator Pink',
            'federation_corvette_operator_gold'             => 'Operator Gold',
            'federation_corvette_operator_teal'             => 'Operator Teal',

            'federation_corvette_predator_red'              => 'Predator Red',
            'federation_corvette_predator_green'            => 'Predator Green',
            'federation_corvette_predator_teal'             => 'Predator Teal',
            'federation_corvette_predator_crimson'          => 'Predator Rose',
            'federation_corvette_predator_lime'             => 'Predator Lime',
            'federation_corvette_predator_blue'             => 'Predator Blue',

            'federation_corvette_razormetal_brass'          => 'Razor Brass',
            'federation_corvette_razormetal_bronze'         => 'Razor Bronze',
            'federation_corvette_razormetal_cobalt'         => 'Razor Cobalt',
            'federation_corvette_razormetal_copper'         => 'Razor Copper',
            'federation_corvette_razormetal_gold'           => 'Razor Gold',
            'federation_corvette_razormetal_silver'         => 'Razor Silver',

            'federation_corvette_synth_blue'                => 'Synth Blue',
            'federation_corvette_synth_lime'                => 'Synth Lime',
            'federation_corvette_synth_orange'              => 'Synth Orange',
            'federation_corvette_synth_red'                 => 'Synth Red',
            'federation_corvette_synth_rose'                => 'Synth Rose',
            'federation_corvette_synth_white'               => 'Synth White',

            'federation_corvette_tactical_blue'             => 'Tactical Cobalt',
            'federation_corvette_tactical_brown'            => 'Tactical Khaki',
            'federation_corvette_tactical_green'            => 'Tactical Olive',
            'federation_corvette_tactical_grey'             => 'Tactical Graphite',
            'federation_corvette_tactical_red'              => 'Tactical Crimson',
            'federation_corvette_tactical_white'            => 'Tactical Ice',

            'federation_corvette_trims_blackmagenta'        => 'Precision Black',
            'federation_corvette_trims_blueorange'          => 'Precision Blue',
            'federation_corvette_trims_greyorange'          => 'Precision Graphite',
            'federation_corvette_trims_greengrey'           => 'Precision Green',
            'federation_corvette_trims_greygreen'           => 'Precision Grey',
            'federation_corvette_trims_yellowblack'         => 'Precision Yellow',

            'federation_corvette_vibrant_blue'              => 'Vibrant Blue',
            'federation_corvette_vibrant_green'             => 'Vibrant Green',
            'federation_corvette_vibrant_orange'            => 'Vibrant Orange',
            'federation_corvette_vibrant_purple'            => 'Vibrant Purple',
            'federation_corvette_vibrant_red'               => 'Vibrant Red',
            'federation_corvette_vibrant_yellow'            => 'Vibrant Yellow',
        ],

        // Federal Dropship
        128049321 => [
            'feddropship_default_defaultpaintjob'           => 'Default',

            'feddropship_blackfriday_01'                    => 'Midnight Black',

            'feddropship_faction1_01'                       => 'Pirate Faction Red',
            'feddropship_faction1_02'                       => 'Pirate Faction Orange',
            'feddropship_faction1_03'                       => 'Pirate Faction Green',
            'feddropship_faction1_04'                       => 'Pirate Faction Rose',
            'feddropship_faction1_05'                       => 'Pirate Faction Blue',
            'feddropship_faction1_06'                       => 'Pirate Faction Purple',

            'feddropship_gradient2_01'                      => 'Predator Red',
            'feddropship_gradient2_02'                      => 'Predator Green',
            'feddropship_gradient2_03'                      => 'Predator Teal',
            'feddropship_gradient2_04'                      => 'Predator Crimson',
            'feddropship_gradient2_05'                      => 'Predator Lime',
            'feddropship_gradient2_06'                      => 'Predator Blue',

            //'feddropship_metallic_chrome'                   => 'Chrome',
            //'feddropship_metallic_gold'                     => 'Gold',

            'feddropship_militaire_dark_green'              => 'Military Dark Green',
            'feddropship_militaire_desert_sand'             => 'Military Desert Sand',
            'feddropship_militaire_earth_red'               => 'Military Earth Red',
            'feddropship_militaire_earth_yellow'            => 'Military Earth Yellow',
            'feddropship_militaire_forest_green'            => 'Military Marine Blue',
            'feddropship_militaire_sand'                    => 'Military Sand',

            'feddropship_tactical_blue'                     => 'Tactical Cobalt',
            'feddropship_tactical_brown'                    => 'Tactical Khaki',
            'feddropship_tactical_green'                    => 'Tactical Olive',
            'feddropship_tactical_grey'                     => 'Tactical Graphite',
            'feddropship_tactical_red'                      => 'Tactical Crimson',
            'feddropship_tactical_white'                    => 'Tactical Ice',

            'feddropship_vibrant_blue'                      => 'Vibrant Blue',
            'feddropship_vibrant_green'                     => 'Vibrant Green',
            'feddropship_vibrant_orange'                    => 'Vibrant Orange',
            'feddropship_vibrant_purple'                    => 'Vibrant Purple',
            'feddropship_vibrant_red'                       => 'Vibrant Red',
            'feddropship_vibrant_yellow'                    => 'Vibrant Yellow',
        ],

        // Federal Gunship
        128672152 => [
            'federation_gunship_default_defaultpaintjob'    => 'Default',

            'federation_gunship_blackfriday_01'             => 'Midnight Black',

            'federation_gunship_faction1_01'                => 'Pirate Faction Red',
            'federation_gunship_faction1_02'                => 'Pirate Faction Orange',
            'federation_gunship_faction1_03'                => 'Pirate Faction Green',
            'federation_gunship_faction1_04'                => 'Pirate Faction Rose',
            'federation_gunship_faction1_05'                => 'Pirate Faction Blue',
            'federation_gunship_faction1_06'                => 'Pirate Faction Purple',

            'federation_gunship_gradient2_01'               => 'Predator Red',
            'federation_gunship_gradient2_02'               => 'Predator Green',
            'federation_gunship_gradient2_03'               => 'Predator Teal',
            'federation_gunship_gradient2_04'               => 'Predator Crimson',
            'federation_gunship_gradient2_05'               => 'Predator Lime',
            'federation_gunship_gradient2_06'               => 'Predator Blue',

            'federation_gunship_metallic_chrome'            => 'Chrome',
            'federation_gunship_metallic2_chrome'           => 'Chromed',
            //'federation_gunship_metallic_gold'              => 'Gold',
            'federation_gunship_metallic2_gold'             => 'Golden',

            'federation_gunship_militaire_dark_green'       => 'Military Dark Green',
            'federation_gunship_militaire_desert_sand'      => 'Military Desert Sand',
            'federation_gunship_militaire_earth_red'        => 'Military Earth Red',
            'federation_gunship_militaire_earth_yellow'     => 'Military Earth Yellow',
            'federation_gunship_militaire_forest_green'     => 'Military Marine Blue',
            'federation_gunship_militaire_sand'             => 'Military Sand',

            'federation_gunship_militarystripe_blue'        => 'Military Stripe Blue',
            'federation_gunship_militarystripe_green'       => 'Military Stripe Green',
            'federation_gunship_militarystripe_orange'      => 'Military Stripe Orange',
            'federation_gunship_militarystripe_purple'      => 'Military Stripe Purple',
            'federation_gunship_militarystripe_red'         => 'Military Stripe Red',
            'federation_gunship_militarystripe_yellow'      => 'Military Stripe Yellow',

            'federation_gunship_operator_blue'              => 'Operator Blue',
            'federation_gunship_operator_green'             => 'Operator Green',
            'federation_gunship_operator_red'               => 'Operator Red',
            'federation_gunship_operator_pink'              => 'Operator Pink',
            'federation_gunship_operator_gold'              => 'Operator Gold',
            'federation_gunship_operator_teal'              => 'Operator Teal',

            'federation_gunship_tactical_blue'              => 'Tactical Cobalt',
            'federation_gunship_tactical_brown'             => 'Tactical Khaki',
            'federation_gunship_tactical_green'             => 'Tactical Olive',
            'federation_gunship_tactical_grey'              => 'Tactical Graphite',
            'federation_gunship_tactical_red'               => 'Tactical Crimson',
            'federation_gunship_tactical_white'             => 'Tactical Ice',

            'federation_gunship_vibrant_blue'               => 'Vibrant Blue',
            'federation_gunship_vibrant_green'              => 'Vibrant Green',
            'federation_gunship_vibrant_orange'             => 'Vibrant Orange',
            'federation_gunship_vibrant_purple'             => 'Vibrant Purple',
            'federation_gunship_vibrant_red'                => 'Vibrant Red',
            'federation_gunship_vibrant_yellow'             => 'Vibrant Yellow',
        ],

        // Fer-de-Lance
        128049351 => [
            'ferdelance_default_defaultpaintjob'            => 'Default',

            'ferdelance_blackfriday_01'                     => 'Midnight Black',

            'ferdelance_faction1_01'                        => 'Pirate Faction Red',
            'ferdelance_faction1_02'                        => 'Pirate Faction Orange',
            'ferdelance_faction1_03'                        => 'Pirate Faction Green',
            'ferdelance_faction1_04'                        => 'Pirate Faction Rose',
            'ferdelance_faction1_05'                        => 'Pirate Faction Blue',
            'ferdelance_faction1_06'                        => 'Pirate Faction Purple',

            'ferdelance_gradient2_teal'                     => 'Predator Teal',
            'ferdelance_gradient2_red'                      => 'Predator Red',
            'ferdelance_gradient2_lime'                     => 'Predator Lime',
            'ferdelance_gradient2_green'                    => 'Predator Green',
            'ferdelance_gradient2_crimson'                  => 'Predator Crimson',
            'ferdelance_gradient2_blue'                     => 'Predator Blue',

            'ferdelance_iridescenthighcolour_01'            => 'Iridescent Scorch',
            'ferdelance_iridescenthighcolour_03'            => 'Iridescent Dawn',
            'ferdelance_iridescenthighcolour_04'            => 'Iridescent Dusk',
            'ferdelance_iridescenthighcolour_05'            => 'Iridescent Aurora',
            'ferdelance_iridescenthighcolour_06'            => 'Iridescent Twilight',

            'ferdelance_lavecon_lavecon'                    => 'Lavecon',

            //'ferdelance_metallic_chrome'                    => 'Chrome',
            'ferdelance_metallic2_chrome'                   => 'Chromed',
            'ferdelance_metallic_gold'                      => 'Gold',
            'ferdelance_metallic2_gold'                     => 'Golden',

            'ferdelance_militaire_dark_green'               => 'Military Dark Green',
            'ferdelance_militaire_desert_sand'              => 'Military Desert Sand',
            'ferdelance_militaire_earth_red'                => 'Military Earth Red',
            'ferdelance_militaire_earth_yellow'             => 'Military Earth Yellow',
            'ferdelance_militaire_forest_green'             => 'Military Marine Blue',
            'ferdelance_militaire_sand'                     => 'Military Sand',

            'ferdelance_razormetal_brass'                   => 'Razor Brass',
            'ferdelance_razormetal_bronze'                  => 'Razor Bronze',
            'ferdelance_razormetal_cobalt'                  => 'Razor Cobalt',
            'ferdelance_razormetal_copper'                  => 'Razor Copper',
            'ferdelance_razormetal_gold'                    => 'Razor Gold',
            'ferdelance_razormetal_silver'                  => 'Razor Silver',
            
            'ferdelance_slipstream_blue'                    => 'Slipstream Blue',
            'ferdelance_slipstream_green'                   => 'Slipstream Green',
            'ferdelance_slipstream_orange'                  => 'Slipstream Orange',
            'ferdelance_slipstream_pink'                    => 'Slipstream Pink',
            'ferdelance_slipstream_red'                     => 'Slipstream Red',
            'ferdelance_slipstream_yellow'                  => 'Slipstream Yellow',

            'ferdelance_synth_blue'                         => 'Synth Blue',
            'ferdelance_synth_lime'                         => 'Synth Lime',
            'ferdelance_synth_orange'                       => 'Synth Orange',
            'ferdelance_synth_red'                          => 'Synth Red',
            'ferdelance_synth_rose'                         => 'Synth Rose',
            'ferdelance_synth_white'                        => 'Synth White',

            'ferdelance_tactical_blue'                      => 'Tactical Cobalt',
            'ferdelance_tactical_brown'                     => 'Tactical Khaki',
            'ferdelance_tactical_green'                     => 'Tactical Olive',
            'ferdelance_tactical_grey'                      => 'Tactical Graphite',
            'ferdelance_tactical_red'                       => 'Tactical Crimson',
            'ferdelance_tactical_white'                     => 'Tactical Ice',

            'ferdelance_vibrant_blue'                       => 'Vibrant Blue',
            'ferdelance_vibrant_green'                      => 'Vibrant Green',
            'ferdelance_vibrant_orange'                     => 'Vibrant Orange',
            'ferdelance_vibrant_purple'                     => 'Vibrant Purple',
            'ferdelance_vibrant_red'                        => 'Vibrant Red',
            'ferdelance_vibrant_yellow'                     => 'Vibrant Yellow',

            'ferdelance_wireframe_01'                       => 'Wireframe',
        ],

        // Hauler
        128049261 => [
            'hauler_default_defaultpaintjob'                => 'Default',

            'hauler_blackfriday_01'                         => 'Midnight Black',

            'hauler_doublestripe_01'                        => 'Blue Terrain',
            'hauler_doublestripe_02'                        => 'Yellow Terrain',
            'hauler_doublestripe_03'                        => 'Black Terrain',

            'hauler_faction1_01'                            => 'Pirate Faction Red',
            'hauler_faction1_02'                            => 'Pirate Faction Orange',
            'hauler_faction1_03'                            => 'Pirate Faction Green',
            'hauler_faction1_04'                            => 'Pirate Faction Rose',
            'hauler_faction1_05'                            => 'Pirate Faction Blue',
            'hauler_faction1_06'                            => 'Pirate Faction Purple',

            'hauler_metallic_chrome'                        => 'Chrome',
            'hauler_metallic2_chrome'                       => 'Chromed',
            //'hauler_metallic_gold'                          => 'Gold',

            'hauler_militaire_dark_green'                   => 'Military Dark Green',
            'hauler_militaire_desert_sand'                  => 'Military Desert Sand',
            'hauler_militaire_earth_red'                    => 'Military Earth Red',
            'hauler_militaire_earth_yellow'                 => 'Military Earth Yellow',
            'hauler_militaire_forest_green'                 => 'Military Marine Blue',
            'hauler_militaire_sand'                         => 'Military Sand',

            'hauler_stripe1_01'                             => 'Green Contour',
            'hauler_stripe1_02'                             => 'Red Contour',
            'hauler_stripe1_03'                             => 'Black Contour',

            'hauler_tactical_blue'                          => 'Tactical Cobalt',
            'hauler_tactical_brown'                         => 'Tactical Khaki',
            'hauler_tactical_green'                         => 'Tactical Olive',
            'hauler_tactical_grey'                          => 'Tactical Graphite',
            'hauler_tactical_red'                           => 'Tactical Crimson',
            'hauler_tactical_white'                         => 'Tactical Ice',

            'hauler_vibrant_blue'                           => 'Vibrant Blue',
            'hauler_vibrant_green'                          => 'Vibrant Green',
            'hauler_vibrant_orange'                         => 'Vibrant Orange',
            'hauler_vibrant_purple'                         => 'Vibrant Purple',
            'hauler_vibrant_red'                            => 'Vibrant Red',
            'hauler_vibrant_yellow'                         => 'Vibrant Yellow',
        ],

        // Imperial Clipper
        128049315 => [
            'empiretrader_default_defaultpaintjob'          => 'Default',

            'empiretrader_blackfriday_01'                   => 'Midnight Black',

            /*
            'empiretrader_faction1_01'                      => 'Pirate Faction Red',
            'empiretrader_faction1_02'                      => 'Pirate Faction Orange',
            'empiretrader_faction1_03'                      => 'Pirate Faction Green',
            'empiretrader_faction1_04'                      => 'Pirate Faction Rose',
            'empiretrader_faction1_05'                      => 'Pirate Faction Blue',
            'empiretrader_faction1_06'                      => 'Pirate Faction Purple',
            */

            //'empiretrader_metallic_chrome'                  => 'Chrome',
            //'empiretrader_metallic_gold'                    => 'Gold',

            'empiretrader_iridescenthighcolour_01'          => 'Iridescent Scorch',
            'empiretrader_iridescenthighcolour_02'          => 'Iridescent Gleam',
            'empiretrader_iridescenthighcolour_03'          => 'Iridescent Dawn',
            'empiretrader_iridescenthighcolour_04'          => 'Iridescent Dusk',
            'empiretrader_iridescenthighcolour_05'          => 'Iridescent Aurora',
            'empiretrader_iridescenthighcolour_06'          => 'Iridescent Twilight',

            'empiretrader_militaire_dark_green'             => 'Military Dark Green',
            'empiretrader_militaire_desert_sand'            => 'Military Desert Sand',
            'empiretrader_militaire_earth_red'              => 'Military Earth Red',
            'empiretrader_militaire_earth_yellow'           => 'Military Earth Yellow',
            'empiretrader_militaire_forest_green'           => 'Military Marine Blue',
            'empiretrader_militaire_sand'                   => 'Military Sand',

            'empiretrader_tactical_blue'                    => 'Tactical Cobalt',
            'empiretrader_tactical_brown'                   => 'Tactical Khaki',
            'empiretrader_tactical_green'                   => 'Tactical Olive',
            'empiretrader_tactical_grey'                    => 'Tactical Graphite',
            'empiretrader_tactical_red'                     => 'Tactical Crimson',
            'empiretrader_tactical_white'                   => 'Tactical Ice',

            'empiretrader_vibrant_blue'                     => 'Vibrant Blue',
            'empiretrader_vibrant_green'                    => 'Vibrant Green',
            'empiretrader_vibrant_orange'                   => 'Vibrant Orange',
            'empiretrader_vibrant_purple'                   => 'Vibrant Purple',
            'empiretrader_vibrant_red'                      => 'Vibrant Red',
            'empiretrader_vibrant_yellow'                   => 'Vibrant Yellow',

            'empiretrader_war_blue'                         => 'Dazzle Blue',
            'empiretrader_war_green'                        => 'Dazzle Green',
            'empiretrader_war_orange'                       => 'Dazzle Orange',
            'empiretrader_war_red'                          => 'Dazzle Red',
            'empiretrader_war_white'                        => 'Dazzle White',
            'empiretrader_war_yellow'                       => 'Dazzle Yellow',
        ],

        // Imperial Courier
        128671223 => [
            'empire_courier_default_defaultpaintjob'        => 'Default',

            'empire_courier_blackfriday_01'                 => 'Midnight Black',

            /*
            'empire_courier_faction1_01'                    => 'Pirate Faction Red',
            'empire_courier_faction1_02'                    => 'Pirate Faction Orange',
            'empire_courier_faction1_03'                    => 'Pirate Faction Green',
            'empire_courier_faction1_04'                    => 'Pirate Faction Rose',
            'empire_courier_faction1_05'                    => 'Pirate Faction Blue',
            'empire_courier_faction1_06'                    => 'Pirate Faction Purple',
            */

            'empire_courier_furrycat_furrycat'              => 'FurryCat',

            'empire_courier_iridescenthighcolour_01'        => 'Iridescent Scorch',
            'empire_courier_iridescenthighcolour_04'        => 'Iridescent Dusk',
            'empire_courier_iridescenthighcolour_05'        => 'Iridescent Aurora',
            'empire_courier_iridescenthighcolour_06'        => 'Iridescent Twilight',

            //'empire_courier_metallic_chrome'                => 'Chrome',
            //'empire_courier_metallic_gold'                  => 'Gold',
            'empire_courier_metallic2_gold'                 => 'Golden',

            'empire_courier_militaire_dark_green'           => 'Military Dark Green',
            'empire_courier_militaire_desert_sand'          => 'Military Desert Sand',
            'empire_courier_militaire_earth_red'            => 'Military Earth Red',
            'empire_courier_militaire_earth_yellow'         => 'Military Earth Yellow',
            'empire_courier_militaire_forest_green'         => 'Military Marine Blue',
            'empire_courier_militaire_sand'                 => 'Military Sand',

            'empire_courier_aerial_display_green'           => 'Slipstream Green',
            'empire_courier_aerial_display_blue'            => 'Slipstream Blue',
            'empire_courier_aerial_display_pink'            => 'Slipstream Purple',
            'empire_courier_aerial_display_yellow'          => 'Slipstream Yellow',
            'empire_courier_aerial_display_orange'          => 'Slipstream Orange',
            'empire_courier_aerial_display_red'             => 'Slipstream Red',

            'empire_courier_tactical_blue'                  => 'Tactical Cobalt',
            'empire_courier_tactical_brown'                 => 'Tactical Khaki',
            'empire_courier_tactical_green'                 => 'Tactical Olive',
            'empire_courier_tactical_grey'                  => 'Tactical Graphite',
            'empire_courier_tactical_red'                   => 'Tactical Crimson',
            'empire_courier_tactical_white'                 => 'Tactical Ice',

            'empire_courier_vibrant_blue'                   => 'Vibrant Blue',
            'empire_courier_vibrant_green'                  => 'Vibrant Green',
            'empire_courier_vibrant_orange'                 => 'Vibrant Orange',
            'empire_courier_vibrant_purple'                 => 'Vibrant Purple',
            'empire_courier_vibrant_red'                    => 'Vibrant Red',
            'empire_courier_vibrant_yellow'                 => 'Vibrant Yellow',
        ],

        // Imperial Cutter
        128049375 => [
            'cutter_default_defaultpaintjob'                => 'Default',

            'cutter_blackfriday_01'                         => 'Midnight Black',

            'cutter_corrosive_01'                           => 'Corroded 1',
            'cutter_corrosive_02'                           => 'Corroded 2',
            'cutter_corrosive_03'                           => 'Corroded 3',
            'cutter_corrosive_04'                           => 'Corroded 4',
            'cutter_corrosive_05'                           => 'Corroded 5',
            'cutter_corrosive_06'                           => 'Corroded 6',

            'cutter_darwin_01'                              => 'Special Effect',

            /*
            'cutter_faction1_01'                            => 'Pirate Faction Red',
            'cutter_faction1_02'                            => 'Pirate Faction Orange',
            'cutter_faction1_03'                            => 'Pirate Faction Green',
            'cutter_faction1_04'                            => 'Pirate Faction Rose',
            'cutter_faction1_05'                            => 'Pirate Faction Blue',
            'cutter_faction1_06'                            => 'Pirate Faction Purple',
            */

            'cutter_fullmetal_brass'                        => 'Galvanized Brass',
            'cutter_fullmetal_bronze'                       => 'Galvanized Bronze',
            'cutter_fullmetal_cobalt'                       => 'Galvanized Cobalt',
            'cutter_fullmetal_copper'                       => 'Galvanized Copper',
            'cutter_fullmetal_malachite'                    => 'Galvanized Malachite',
            'cutter_fullmetal_paladium'                     => 'Galvanized Paladium',

            'cutter_gradient2_blue'                         => 'Predator Blue',
            'cutter_gradient2_crimson'                      => 'Predator Crimson',
            'cutter_gradient2_green'                        => 'Predator Green',
            'cutter_gradient2_lime'                         => 'Predator Lime',
            'cutter_gradient2_red'                          => 'Predator Red',
            'cutter_gradient2_teal'                         => 'Predator Teal',

            'cutter_iridescenthighcolour_01'                => 'Iridescent Scorch',
            'cutter_iridescenthighcolour_02'                => 'Iridescent Gleam',
            'cutter_iridescenthighcolour_03'                => 'Iridescent Dawn',
            'cutter_iridescenthighcolour_04'                => 'Iridescent Dusk',
            'cutter_iridescenthighcolour_05'                => 'Iridescent Aurora',
            'cutter_iridescenthighcolour_06'                => 'Iridescent Twilight',

            'cutter_lavecon_lavecon'                        => 'Lavecon',
            
            'cutter_lrpo_azure'                             => 'Azure',

            'cutter_luminous_stripe_ver2_01'                => 'Pulse White',
            'cutter_luminous_stripe_ver2_02'                => 'Pulse Blue',
            'cutter_luminous_stripe_ver2_03'                => 'Pulse Purple',
            'cutter_luminous_stripe_ver2_04'                => 'Pulse Red',
            'cutter_luminous_stripe_ver2_05'                => 'Pulse Orange',
            'cutter_luminous_stripe_ver2_06'                => 'Pulse Green',

            'cutter_metallic_chrome'                        => 'Chrome',
            'cutter_metallic2_chrome'                       => 'Chromed',
            //'cutter_metallic_gold'                          => 'Gold',
            'cutter_metallic2_gold'                         => 'Golden',

            'cutter_militaire_dark_green'                   => 'Military Dark Green',
            'cutter_militaire_desert_sand'                  => 'Military Desert Sand',
            'cutter_militaire_earth_red'                    => 'Military Earth Red',
            'cutter_militaire_earth_yellow'                 => 'Military Earth Yellow',
            'cutter_militaire_forest_green'                 => 'Military Marine Blue',
            'cutter_militaire_sand'                         => 'Military Sand',

            'cutter_tactical_blue'                          => 'Tactical Cobalt',
            'cutter_tactical_brown'                         => 'Tactical Khaki',
            'cutter_tactical_green'                         => 'Tactical Olive',
            'cutter_tactical_grey'                          => 'Tactical Graphite',
            'cutter_tactical_red'                           => 'Tactical Crimson',
            'cutter_tactical_white'                         => 'Tactical Ice',

            'cutter_vibrant_blue'                           => 'Vibrant Blue',
            'cutter_vibrant_green'                          => 'Vibrant Green',
            'cutter_vibrant_orange'                         => 'Vibrant Orange',
            'cutter_vibrant_purple'                         => 'Vibrant Purple',
            'cutter_vibrant_red'                            => 'Vibrant Red',
            'cutter_vibrant_yellow'                         => 'Vibrant Yellow',
        ],

        // Imperial Eagle
        128672138 => [
            'empire_eagle_default_defaultpaintjob'          => 'Default',

            'empire_eagle_blackfriday_01'                   => 'Midnight Black',

            'empire_eagle_iridescenthighcolour_01'          => 'Iridescent Scorch',
            'empire_eagle_iridescenthighcolour_04'          => 'Iridescent Dusk',
            'empire_eagle_iridescenthighcolour_05'          => 'Iridescent Aurora',
            'empire_eagle_iridescenthighcolour_06'          => 'Iridescent Twilight',

            /*
            'empire_eagle_faction1_01'                      => 'Pirate Faction Red',
            'empire_eagle_faction1_02'                      => 'Pirate Faction Orange',
            'empire_eagle_faction1_03'                      => 'Pirate Faction Green',
            'empire_eagle_faction1_04'                      => 'Pirate Faction Rose',
            'empire_eagle_faction1_05'                      => 'Pirate Faction Blue',
            'empire_eagle_faction1_06'                      => 'Pirate Faction Purple',
            */

            //'empire_eagle_metallic_chrome'                  => 'Chrome',
            //'empire_eagle_metallic_gold'                    => 'Gold',

            'empire_eagle_militaire_dark_green'             => 'Military Dark Green',
            'empire_eagle_militaire_desert_sand'            => 'Military Desert Sand',
            'empire_eagle_militaire_earth_red'              => 'Military Earth Red',
            'empire_eagle_militaire_earth_yellow'           => 'Military Earth Yellow',
            'empire_eagle_militaire_forest_green'           => 'Military Marine Blue',
            'empire_eagle_militaire_sand'                   => 'Military Sand',

            'empire_eagle_aerial_display_green'             => 'Slipstream Green',
            'empire_eagle_aerial_display_blue'              => 'Slipstream Blue',
            'empire_eagle_aerial_display_pink'              => 'Slipstream Purple',
            'empire_eagle_aerial_display_yellow'            => 'Slipstream Yellow',
            'empire_eagle_aerial_display_orange'            => 'Slipstream Orange',
            'empire_eagle_aerial_display_red'               => 'Slipstream Red',

            'empire_eagle_tactical_blue'                    => 'Tactical Cobalt',
            'empire_eagle_tactical_brown'                   => 'Tactical Khaki',
            'empire_eagle_tactical_green'                   => 'Tactical Olive',
            'empire_eagle_tactical_grey'                    => 'Tactical Graphite',
            'empire_eagle_tactical_red'                     => 'Tactical Crimson',
            'empire_eagle_tactical_white'                   => 'Tactical Ice',

            'empire_eagle_vibrant_blue'                     => 'Vibrant Blue',
            'empire_eagle_vibrant_green'                    => 'Vibrant Green',
            'empire_eagle_vibrant_orange'                   => 'Vibrant Orange',
            'empire_eagle_vibrant_purple'                   => 'Vibrant Purple',
            'empire_eagle_vibrant_red'                      => 'Vibrant Red',
            'empire_eagle_vibrant_yellow'                   => 'Vibrant Yellow',
        ],

        // Keelback
        128672269 => [
            'independant_trader_default_defaultpaintjob'    => 'Default',

            'independant_trader_blackfriday_01'             => 'Midnight Black',

            //'independant_trader_metallic_chrome'            => 'Chrome',
            'independant_trader_metallic2_chrome'           => 'Chromed',
            //'independant_trader_metallic_gold'              => 'Gold',

            'independant_trader_mechanist_01'               => 'Mechanist Blue',
            'independant_trader_mechanist_02'               => 'Mechanist Pink',
            'independant_trader_mechanist_03'               => 'Mechanist Ash',
            'independant_trader_mechanist_04'               => 'Mechanist Charcoal',
            'independant_trader_mechanist_05'               => 'Mechanist Red',
            'independant_trader_mechanist_06'               => 'Mechanist Yellow',

            'independant_trader_militaire_dark_green'       => 'Military Dark Green',
            'independant_trader_militaire_desert_sand'      => 'Military Desert Sand',
            'independant_trader_militaire_earth_red'        => 'Military Earth Red',
            'independant_trader_militaire_earth_yellow'     => 'Military Earth Yellow',
            'independant_trader_militaire_forest_green'     => 'Military Marine Blue',
            'independant_trader_militaire_sand'             => 'Military Sand',

            'independant_trader_tactical_blue'              => 'Tactical Cobalt',
            'independant_trader_tactical_brown'             => 'Tactical Khaki',
            'independant_trader_tactical_green'             => 'Tactical Olive',
            'independant_trader_tactical_grey'              => 'Tactical Graphite',
            'independant_trader_tactical_red'               => 'Tactical Crimson',
            'independant_trader_tactical_white'             => 'Tactical Ice',

            'independant_trader_vibrant_blue'               => 'Vibrant Blue',
            'independant_trader_vibrant_green'              => 'Vibrant Green',
            'independant_trader_vibrant_orange'             => 'Vibrant Orange',
            'independant_trader_vibrant_purple'             => 'Vibrant Purple',
            'independant_trader_vibrant_red'                => 'Vibrant Red',
            'independant_trader_vibrant_yellow'             => 'Vibrant Yellow',
        ],

        // Krait MkII
        128816567   => [
            'krait_mkii_default_defaultpaintjob'            => 'Default',

            'krait_mkii_blackfriday_01'                     => 'Midnight Black',

            'krait_mkii_corrosive_01'                       => 'Corroded 1',
            'krait_mkii_corrosive_02'                       => 'Corroded 2',
            'krait_mkii_corrosive_03'                       => 'Corroded 3',
            'krait_mkii_corrosive_04'                       => 'Corroded 4',
            'krait_mkii_corrosive_05'                       => 'Corroded 5',
            'krait_mkii_corrosive_06'                       => 'Corroded 6',
            'krait_mkii_lavecon_lavecon'                    => 'Lavecon',
            'krait_mkii_frontierspecial_frontierspecial'    => 'Frontier Special',
            'krait_mkii_specialeffectchristmas_01'          => 'Special Effect Christmas',
            'krait_mkii_pcgamer_pcgamer'                    => 'PC Gamer',

            'krait_mkii_gradient2_teal'                     => 'Predator Teal',
            'krait_mkii_gradient2_red'                      => 'Predator Red',
            'krait_mkii_gradient2_lime'                     => 'Predator Lime',
            'krait_mkii_gradient2_green'                    => 'Predator Green',
            'krait_mkii_gradient2_crimson'                  => 'Predator Crimson',
            'krait_mkii_gradient2_blue'                     => 'Predator Blue',

            'krait_mkii_iridescenthighcolour_01'            => 'Iridescent Scorch',
            'krait_mkii_iridescenthighcolour_03'            => 'Iridescent Dawn',
            'krait_mkii_iridescenthighcolour_04'            => 'Iridescent Dusk',
            'krait_mkii_iridescenthighcolour_05'            => 'Iridescent Aurora',
            'krait_mkii_iridescenthighcolour_06'            => 'Iridescent Twilight',

            'krait_mkii_horus1_01'                          => 'Green Apollo',
            'krait_mkii_horus1_02'                          => 'Black Apollo',
            'krait_mkii_horus1_03'                          => 'White Apollo',

            'krait_mkii_horus2_01'                          => 'White Pharaoh',
            'krait_mkii_horus2_02'                          => 'Red Pharaoh',
            'krait_mkii_horus2_03'                          => 'Gold Pharaoh',

            'krait_mkii_metallic2_chrome'                   => 'Chromed',

            'krait_mkii_militaire_dark_green'               => 'Military Dark Green',
            'krait_mkii_militaire_desert_sand'              => 'Military Desert Sand',
            'krait_mkii_militaire_earth_red'                => 'Military Earth Red',
            'krait_mkii_militaire_earth_yellow'             => 'Military Earth Yellow',
            'krait_mkii_militaire_forest_green'             => 'Military Marine Blue',
            'krait_mkii_militaire_sand'                     => 'Military Sand',

            'krait_mkii_salvage_01'                         => 'Salvage Red',
            'krait_mkii_salvage_02'                         => 'Salvage Green',
            'krait_mkii_salvage_03'                         => 'Salvage White',
            'krait_mkii_salvage_04'                         => 'Salvage Blue',
            'krait_mkii_salvage_05'                         => 'Salvage Orange',
            'krait_mkii_salvage_06'                         => 'Salvage Black',

            'krait_mkii_tactical_blue'                      => 'Tactical Cobalt',
            'krait_mkii_tactical_brown'                     => 'Tactical Khaki',
            'krait_mkii_tactical_green'                     => 'Tactical Olive',
            'krait_mkii_tactical_grey'                      => 'Tactical Graphite',
            'krait_mkii_tactical_red'                       => 'Tactical Crimson',
            'krait_mkii_tactical_white'                     => 'Tactical Ice',

            'krait_mkii_trims_blackmagenta'                 => 'Precision Black',
            'krait_mkii_trims_blueorange'                   => 'Precision Blue',
            'krait_mkii_trims_greyorange'                   => 'Precision Graphite',
            'krait_mkii_trims_greengrey'                    => 'Precision Green',
            'krait_mkii_trims_greygreen'                    => 'Precision Grey',
            'krait_mkii_trims_yellowblack'                  => 'Precision Yellow',

            'krait_mkii_vibrant_blue'                       => 'Vibrant Blue',
            'krait_mkii_vibrant_green'                      => 'Vibrant Green',
            'krait_mkii_vibrant_orange'                     => 'Vibrant Orange',
            'krait_mkii_vibrant_purple'                     => 'Vibrant Purple',
            'krait_mkii_vibrant_red'                        => 'Vibrant Red',
            'krait_mkii_vibrant_yellow'                     => 'Vibrant Yellow',
            
            'krait_mkii_salvation_09'                       => 'Azimuth Ruthless',
        ],

        // Krait Phantom
        128839281   => [
            'krait_light_default_defaultpaintjob'           => 'Default',

            'krait_light_blackfriday_01'                    => 'Midnight Black',

            'krait_light_metallic2_gold'                    => 'Golden',
            'krait_light_lavecon_lavecon'                   => 'Lavecon',
            'krait_light_iridescenthighcolour_01'           => 'Iridescent Scorch',
            'krait_light_iridescenthighcolour_04'           => 'Iridescent Dusk',
            'krait_light_iridescenthighcolour_05'           => 'Iridescent Aurora',
            'krait_light_iridescenthighcolour_06'           => 'Iridescent Twilight',

            'krait_light_militaire_dark_green'              => 'Military Dark Green',
            'krait_light_militaire_desert_sand'             => 'Military Desert Sand',
            'krait_light_militaire_earth_red'               => 'Military Earth Red',
            'krait_light_militaire_earth_yellow'            => 'Military Earth Yellow',
            'krait_light_militaire_forest_green'            => 'Military Marine Blue',
            'krait_light_militaire_sand'                    => 'Military Sand',

            'krait_light_gradient2_red'                     => 'Predator Red',
            'krait_light_gradient2_green'                   => 'Predator Green',
            'krait_light_gradient2_teal'                    => 'Predator Teal',
            'krait_light_gradient2_crimson'                 => 'Predator Rose',
            'krait_light_gradient2_lime'                    => 'Predator Lime',
            'krait_light_gradient2_blue'                    => 'Predator Blue',

            'krait_light_salvage_01'                        => 'Salvage Red',
            'krait_light_salvage_02'                        => 'Salvage Green',
            'krait_light_salvage_03'                        => 'Salvage White',
            'krait_light_salvage_04'                        => 'Salvage Blue',
            'krait_light_salvage_05'                        => 'Salvage Orange',
            'krait_light_salvage_06'                        => 'Salvage Black',

            'krait_light_trims_blueorange'                  => 'Precision Blue',
            'krait_light_trims_greygreen'                   => 'Precision Grey',
            'krait_light_trims_blackmagenta'                => 'Precision Black',
            'krait_light_trims_greengrey'                   => 'Precision Green',
            'krait_light_trims_yellowblack'                 => 'Precision Yellow',
            'krait_light_trims_greyorange'                  => 'Precision Graphite',

            'krait_light_tactical_blue'                     => 'Tactical Cobalt',
            'krait_light_tactical_brown'                    => 'Tactical Khaki',
            'krait_light_tactical_green'                    => 'Tactical Olive',
            'krait_light_tactical_grey'                     => 'Tactical Graphite',
            'krait_light_tactical_red'                      => 'Tactical Crimson',
            'krait_light_tactical_white'                    => 'Tactical Ice',

            'krait_light_vibrant_blue'                      => 'Vibrant Blue',
            'krait_light_vibrant_green'                     => 'Vibrant Green',
            'krait_light_vibrant_orange'                    => 'Vibrant Orange',
            'krait_light_vibrant_purple'                    => 'Vibrant Purple',
            'krait_light_vibrant_red'                       => 'Vibrant Red',
            'krait_light_vibrant_yellow'                    => 'Vibrant Yellow',
        ],

        // Mamba
        128915979   => [
            'mamba_default_defaultpaintjob'                 => 'Default',

            'mamba_blackfriday_01'                          => 'Midnight Black',

            'mamba_metallic2_gold'                          => 'Golden',
            'mamba_lavecon_lavecon'                         => 'Lavecon',
            'mamba_iridescenthighcolour_01'                 => 'Iridescent Scorch',
            'mamba_iridescenthighcolour_04'                 => 'Iridescent Dusk',
            'mamba_iridescenthighcolour_05'                 => 'Iridescent Aurora',
            'mamba_iridescenthighcolour_06'                 => 'Iridescent Twilight',

            'mamba_militaire_dark_green'                    => 'Military Dark Green',
            'mamba_militaire_desert_sand'                   => 'Military Desert Sand',
            'mamba_militaire_earth_red'                     => 'Military Earth Red',
            'mamba_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'mamba_militaire_forest_green'                  => 'Military Marine Blue',
            'mamba_militaire_sand'                          => 'Military Sand',

            'mamba_operator_blue'                           => 'Operator Blue',
            'mamba_operator_green'                          => 'Operator Green',
            'mamba_operator_red'                            => 'Operator Red',
            'mamba_operator_pink'                           => 'Operator Pink',
            'mamba_operator_gold'                           => 'Operator Gold',
            'mamba_operator_teal'                           => 'Operator Teal',

            'mamba_gradient2_red'                           => 'Predator Red',
            'mamba_gradient2_green'                         => 'Predator Green',
            'mamba_gradient2_teal'                          => 'Predator Teal',
            'mamba_gradient2_crimson'                       => 'Predator Rose',
            'mamba_gradient2_lime'                          => 'Predator Lime',
            'mamba_gradient2_blue'                          => 'Predator Blue',

            'mamba_luminous_stripe_01'                      => 'Pulse Green',
            'mamba_luminous_stripe_02'                      => 'Pulse Blue',
            'mamba_luminous_stripe_03'                      => 'Pulse Purple',
            'mamba_luminous_stripe_04'                      => 'Pulse Red',
            'mamba_luminous_stripe_05'                      => 'Pulse Orange',
            'mamba_luminous_stripe_06'                      => 'Pulse White',

            'mamba_tactical_blue'                           => 'Tactical Cobalt',
            'mamba_tactical_brown'                          => 'Tactical Khaki',
            'mamba_tactical_green'                          => 'Tactical Olive',
            'mamba_tactical_grey'                           => 'Tactical Graphite',
            'mamba_tactical_red'                            => 'Tactical Crimson',
            'mamba_tactical_white'                          => 'Tactical Ice',

            'mamba_vibrant_blue'                            => 'Vibrant Blue',
            'mamba_vibrant_green'                           => 'Vibrant Green',
            'mamba_vibrant_orange'                          => 'Vibrant Orange',
            'mamba_vibrant_purple'                          => 'Vibrant Purple',
            'mamba_vibrant_red'                             => 'Vibrant Red',
            'mamba_vibrant_yellow'                          => 'Vibrant Yellow',
        ],
        
        // Mandalay
        129030680 => [
            'mandalay_default_defaultpaintjob'              => 'Default',
            
            'mandalay_02_02'                                => 'Seeker Red',
        ],

        // Orca
        128049327 => [
            'orca_default_defaultpaintjob'                  => 'Default',

            'orca_blackfriday_01'                           => 'Midnight Black',

            'orca_corporate1_corporate1'                    => 'Wayfarer Blue',
            'orca_corporate1_corporate2'                    => 'Wayfarer Red',
            'orca_corporate1_corporate3'                    => 'Wayfarer Orange',
            'orca_corporate1_corporate4'                    => 'Wayfarer Purple',
            'orca_corporate1_corporate5'                    => 'Wayfarer Green',
            'orca_corporate1_corporate6'                    => 'Wayfarer Yellow',

            'orca_corporate2_corporate2a'                   => 'Pathfinder Green',
            'orca_corporate2_corporate2b'                   => 'Pathfinder Orange',
            'orca_corporate2_corporate2c'                   => 'Pathfinder Red',
            'orca_corporate2_corporate2d'                   => 'Pathfinder Yellow',
            'orca_corporate2_corporate2e'                   => 'Pathfinder Blue',
            'orca_corporate2_corporate2f'                   => 'Pathfinder Graphite',

            'orca_ember_yellow'                             => 'Ember Yellow',
            'orca_ember_white'                              => 'Ember White',
            'orca_ember_red'                                => 'Ember Red',
            'orca_ember_purple'                             => 'Ember Purple',
            'orca_ember_orange'                             => 'Ember Orange',
            'orca_ember_blue'                               => 'Ember Blue',

            //'orca_metallic_chrome'                          => 'Chrome',
            'orca_metallic2_chrome'                         => 'Chromed',
            //'orca_metallic_gold'                            => 'Gold',

            'orca_iridescenthighcolour_01'                  => 'Iridescent Scorch',
            'orca_iridescenthighcolour_04'                  => 'Iridescent Dusk',
            'orca_iridescenthighcolour_05'                  => 'Iridescent Aurora',
            'orca_iridescenthighcolour_06'                  => 'Iridescent Twilight',

            'orca_militaire_dark_green'                     => 'Military Dark Green',
            'orca_militaire_desert_sand'                    => 'Military Desert Sand',
            'orca_militaire_earth_red'                      => 'Military Earth Red',
            'orca_militaire_earth_yellow'                   => 'Military Earth Yellow',
            'orca_militaire_forest_green'                   => 'Military Marine Blue',
            'orca_militaire_sand'                           => 'Military Sand',

            'orca_geometric_blue'                           => 'Prestige Blue',
            'orca_geometric_green'                          => 'Prestige Green',
            'orca_geometric_orange'                         => 'Prestige Orange',
            'orca_geometric_purple'                         => 'Prestige Purple',
            'orca_geometric_red'                            => 'Prestige Red',
            'orca_geometric_yellow'                         => 'Prestige Yellow',

            'orca_tactical_blue'                            => 'Tactical Cobalt',
            'orca_tactical_brown'                           => 'Tactical Khaki',
            'orca_tactical_green'                           => 'Tactical Olive',
            'orca_tactical_grey'                            => 'Tactical Graphite',
            'orca_tactical_red'                             => 'Tactical Crimson',
            'orca_tactical_white'                           => 'Tactical Ice',

            'orca_vibrant_blue'                             => 'Vibrant Blue',
            'orca_vibrant_green'                            => 'Vibrant Green',
            'orca_vibrant_orange'                           => 'Vibrant Orange',
            'orca_vibrant_purple'                           => 'Vibrant Purple',
            'orca_vibrant_red'                              => 'Vibrant Red',
            'orca_vibrant_yellow'                           => 'Vibrant Yellow',
        ],

        // Python
        128049339 => [
            'python_default_defaultpaintjob'                => 'Default',

            'python_blackfriday_01'                         => 'Midnight Black',

            'python_corrosive_01'                           => 'Corroded 1',
            'python_corrosive_02'                           => 'Corroded 2',
            'python_corrosive_03'                           => 'Corroded 3',
            'python_corrosive_04'                           => 'Corroded 4',
            'python_corrosive_05'                           => 'Corroded 5',
            'python_corrosive_06'                           => 'Corroded 6',

            'python_lowlighteffect_01_01'                   => 'Crypsis Blue',
            'python_lowlighteffect_01_02'                   => 'Crypsis Pink',
            'python_lowlighteffect_01_03'                   => 'Crypsis Green',
            'python_lowlighteffect_01_04'                   => 'Crypsis Yellow',
            'python_lowlighteffect_01_05'                   => 'Crypsis Purple',
            'python_lowlighteffect_01_06'                   => 'Crypsis White',

            'python_faction1_01'                            => 'Pirate Faction Red',
            /*
            'python_faction1_02'                            => 'Pirate Faction Orange',
            'python_faction1_03'                            => 'Pirate Faction Green',
            'python_faction1_04'                            => 'Pirate Faction Rose',
            'python_faction1_05'                            => 'Pirate Faction Blue',
            'python_faction1_06'                            => 'Pirate Faction Purple',
            */

            'python_fullmetal_brass'                        => 'Galvanized Brass',
            'python_fullmetal_bronze'                       => 'Galvanized Bronze',
            'python_fullmetal_cobalt'                       => 'Galvanized Cobalt',
            'python_fullmetal_copper'                       => 'Galvanized Copper',
            'python_fullmetal_malachite'                    => 'Galvanized Malachite',
            'python_fullmetal_paladium'                     => 'Galvanized Paladium',

            'python_gradient2_01'                           => 'Predator Red',
            'python_gradient2_02'                           => 'Predator Green',
            'python_gradient2_03'                           => 'Predator Teal',
            'python_gradient2_04'                           => 'Predator Crimson',
            'python_gradient2_05'                           => 'Predator Lime',
            'python_gradient2_06'                           => 'Predator Blue',

            'python_horus1_01'                              => 'Green Apollo',
            'python_horus1_02'                              => 'Black Apollo',
            'python_horus1_03'                              => 'White Apollo',

            'python_horus2_01'                              => 'White Pharaoh',
            'python_horus2_02'                              => 'Red Pharaoh',
            'python_horus2_03'                              => 'Gold Pharaoh',

            'python_iridescenthighcolour_01'                => 'Iridescent Scorch',
            'python_iridescenthighcolour_04'                => 'Iridescent Dusk',
            'python_iridescenthighcolour_05'                => 'Iridescent Aurora',
            'python_iridescenthighcolour_06'                => 'Iridescent Twilight',

            'python_luminous_stripe_01'                     => 'Pulse Green',
            'python_luminous_stripe_02'                     => 'Pulse Blue',
            'python_luminous_stripe_03'                     => 'Pulse Purple',
            'python_luminous_stripe_04'                     => 'Pulse Red',
            'python_luminous_stripe_05'                     => 'Pulse Orange',
            'python_luminous_stripe_06'                     => 'Pulse White',

            'python_lavecon_lavecon'                        => 'Lavecon',
            'python_eliteexpo_eliteexpo'                    => 'Frontier Expo',
            'python_pax_west_pax_west'                      => 'PAX West',

            //'python_metallic_chrome'                        => 'Chrome',
            'python_metallic2_chrome'                       => 'Chromed',
            //'python_metallic_gold'                          => 'Gold',
            'python_metallic2_gold'                         => 'Golden',

            'python_militaire_dark_green'                   => 'Military Dark Green',
            'python_militaire_desert_sand'                  => 'Military Desert Sand',
            'python_militaire_earth_red'                    => 'Military Earth Red',
            'python_militaire_earth_yellow'                 => 'Military Earth Yellow',
            'python_militaire_forest_green'                 => 'Militray Marine Blue',
            'python_militaire_sand'                         => 'Military Sand',

            'python_militarystripe_blue'                    => 'Military Stripe Blue',
            'python_militarystripe_green'                   => 'Military Stripe Green',
            'python_militarystripe_orange'                  => 'Military Stripe Orange',
            'python_militarystripe_purple'                  => 'Military Stripe Purple',
            'python_militarystripe_red'                     => 'Military Stripe Red',
            'python_militarystripe_yellow'                  => 'Military Stripe Yellow',

            'python_pax_east_pax_east'                      => 'PAX East',

            'python_salvage_01'                             => 'Salvage Red',
            'python_salvage_02'                             => 'Salvage Green',
            'python_salvage_03'                             => 'Salvage White',
            'python_salvage_04'                             => 'Salvage Blue',
            'python_salvage_05'                             => 'Salvage Orange',
            'python_salvage_06'                             => 'Salvage Black',

            'python_squadron_black'                         => 'Squadron Shadow',
            'python_squadron_blue'                          => 'Squadron Blue',
            'python_squadron_gold'                          => 'Squadron Black',
            'python_squadron_green'                         => 'Squadron Green',
            'python_squadron_orange'                        => 'Squadron Orange',
            'python_squadron_red'                           => 'Squadron Red',

            'python_tactical_blue'                          => 'Tactical Cobalt',
            'python_tactical_brown'                         => 'Tactical Khaki',
            'python_tactical_green'                         => 'Tactical Olive',
            'python_tactical_grey'                          => 'Tactical Graphite',
            'python_tactical_red'                           => 'Tactical Crimson',
            'python_tactical_white'                         => 'Tactical Ice',

            'python_vibrant_blue'                           => 'Vibrant Blue',
            'python_vibrant_green'                          => 'Vibrant Green',
            'python_vibrant_orange'                         => 'Vibrant Orange',
            'python_vibrant_purple'                         => 'Vibrant Purple',
            'python_vibrant_red'                            => 'Vibrant Red',
            'python_vibrant_yellow'                         => 'Vibrant Yellow',

            'python_wireframe_01'                           => 'Wireframe',
            'python_gold_wireframe_01'                      => 'Wireframe Gold',
            
            'python_naval_04'                               => 'Sheer Line 04',
        ],

        // Sidewinder
        128049249 => [
            'sidewinder_default_defaultpaintjob'            => 'Default',

            'sidewinder_blackfriday_01'                     => 'Midnight Black',

            'sidewinder_camo_01'                            => 'Urban Camo',
            'sidewinder_camo_02'                            => 'Polar Camo',
            'sidewinder_camo_03'                            => 'Jungle Camo',

            'sidewinder_default_02'                         => 'Blue Colorado',
            'sidewinder_default_03'                         => 'Green Colorado',
            'sidewinder_default_04'                         => 'Red Colorado',

            'sidewinder_doublestripe_05'                    => 'Red Sonoran',
            'sidewinder_doublestripe_07'                    => 'Green Sonoran',
            'sidewinder_doublestripe_08'                    => 'Blue Sonoran',

            'sidewinder_faction1_01'                        => 'Pirate Faction Red',
            /*
            'sidewinder_faction1_02'                        => 'Pirate Faction Orange',
            'sidewinder_faction1_03'                        => 'Pirate Faction Green',
            'sidewinder_faction1_04'                        => 'Pirate Faction Rose',
            'sidewinder_faction1_05'                        => 'Pirate Faction Blue',
            'sidewinder_faction1_06'                        => 'Pirate Faction Purple',
            */

            'sidewinder_festive_blue'                       => 'Festive Blue',
            'sidewinder_festive_green'                      => 'Festive Green',
            'sidewinder_festive_purple'                     => 'Festive Purple',
            'sidewinder_festive_red'                        => 'Festive Red',
            'sidewinder_festive_silver'                     => 'Festive Black',
            'sidewinder_festive_white'                      => 'Festive White',

            'sidewinder_hotrod_01'                          => 'Red Ignition',
            'sidewinder_hotrod_03'                          => 'Orange Ignition',

            'sidewinder_merc'                               => 'Mercenary',

            'sidewinder_metallic_chrome'                    => 'Chrome',
            'sidewinder_metallic2_chrome'                   => 'Chromed',
            'sidewinder_metallic_gold'                      => 'Gold',
            'sidewinder_metallic2_gold'                     => 'Golden',

            'sidewinder_militaire_dark_green'               => 'Military Dark Green',
            'sidewinder_militaire_desert_sand'              => 'Military Desert Sand',
            'sidewinder_militaire_earth_red'                => 'Military Earth Red',
            'sidewinder_militaire_earth_yellow'             => 'Military Earth Yellow',
            'sidewinder_militaire_forest_green'             => 'Military Marine Blue',
            'sidewinder_militaire_sand'                     => 'Military Sand',

            'sidewinder_pax_east_pax_east'                  => 'PAX East',
            'sidewinder_pax_south_pax_south'                => 'PAX South',
            //'sidewinder_paxprime_paxprime'                  => 'PAX Prime',

            'sidewinder_specialeffect_01'                   => 'Special Effect',

            'sidewinder_squadron_black'                     => 'Squadron Shadow',
            'sidewinder_squadron_blue'                      => 'Squadron Blue',
            'sidewinder_squadron_gold'                      => 'Squadron Black',
            'sidewinder_squadron_green'                     => 'Squadron Green',
            'sidewinder_squadron_orange'                    => 'Squadron Orange',
            'sidewinder_squadron_red'                       => 'Squadron Red',

            'sidewinder_tactical_blue'                      => 'Tactical Cobalt',
            'sidewinder_tactical_brown'                     => 'Tactical Khaki',
            'sidewinder_tactical_green'                     => 'Tactical Olive',
            'sidewinder_tactical_grey'                      => 'Tactical Graphite',
            'sidewinder_tactical_red'                       => 'Tactical Crimson',
            'sidewinder_tactical_white'                     => 'Tactical Ice',

            'sidewinder_thirds_01'                          => 'Red Mojave',
            'sidewinder_thirds_06'                          => 'Blue Mojave',
            'sidewinder_thirds_07'                          => 'Orange Mojave',

            'sidewinder_vibrant_blue'                       => 'Vibrant Blue',
            'sidewinder_vibrant_green'                      => 'Vibrant Green',
            'sidewinder_vibrant_orange'                     => 'Vibrant Orange',
            'sidewinder_vibrant_purple'                     => 'Vibrant Purple',
            'sidewinder_vibrant_red'                        => 'Vibrant Red',
            'sidewinder_vibrant_yellow'                     => 'Vibrant Yellow',

            'sidewinder_gold_wireframe_01'                  => 'Wireframe Gold',
            
            'sidewinder_pilotreward_01'                     => 'Emergance',
        ],

        // Type-6 Transporter
        128049285 => [
            'type6_default_defaultpaintjob'                 => 'Default',

            'type6_blackfriday_01'                          => 'Midnight Black',

            'type6_foss_bluegrey'                           => 'Turbulence Blue Grey',
            'type6_foss_blueyellow'                         => 'Turbulence Blue Yellow',
            'type6_foss_orangewhite'                        => 'Turbulence Grey White',
            'type6_foss_purplewhite'                        => 'Turbulence Purple White',
            'type6_foss_whitered'                           => 'Turbulence White Red',
            'type6_foss_yellowblack'                        => 'Turbulence Yellow Black',

            //'type6_metallic_chrome'                         => 'Chrome',
            //'type6_metallic_gold'                           => 'Gold',
            'type6_metallic2_gold'                          => 'Golden',

            'type6_mechanist_01'                            => 'Mechanist Blue',
            'type6_mechanist_02'                            => 'Mechanist Pink',
            'type6_mechanist_03'                            => 'Mechanist Ash',
            'type6_mechanist_04'                            => 'Mechanist Charcoal',
            'type6_mechanist_05'                            => 'Mechanist Red',
            'type6_mechanist_06'                            => 'Mechanist Yellow',

            'type6_militaire_dark_green'                    => 'Military Dark Green',
            'type6_militaire_desert_sand'                   => 'Military Desert Sand',
            'type6_militaire_earth_red'                     => 'Military Earth Red',
            'type6_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'type6_militaire_forest_green'                  => 'Military Marine Blue',
            'type6_militaire_sand'                          => 'Military Sand',

            'type6_tactical_blue'                           => 'Tactical Cobalt',
            'type6_tactical_brown'                          => 'Tactical Khaki',
            'type6_tactical_green'                          => 'Tactical Olive',
            'type6_tactical_grey'                           => 'Tactical Graphite',
            'type6_tactical_red'                            => 'Tactical Crimson',
            'type6_tactical_white'                          => 'Tactical Ice',

            'type6_vibrant_blue'                            => 'Vibrant Blue',
            'type6_vibrant_green'                           => 'Vibrant Green',
            'type6_vibrant_orange'                          => 'Vibrant Orange',
            'type6_vibrant_purple'                          => 'Vibrant Purple',
            'type6_vibrant_red'                             => 'Vibrant Red',
            'type6_vibrant_yellow'                          => 'Vibrant Yellow',
        ],

        // Type-7 Transporter
        128049297 => [
            'type7_default_defaultpaintjob'                 => 'Default',

            'type7_blackfriday_01'                          => 'Midnight Black',

            //'type7_metallic_chrome'                         => 'Chrome',
            //'type7_metallic_gold'                           => 'Gold',

            'type7_militaire_dark_green'                    => 'Military Dark Green',
            'type7_militaire_desert_sand'                   => 'Military Desert Sand',
            'type7_militaire_earth_red'                     => 'Military Earth Red',
            'type7_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'type7_militaire_forest_green'                  => 'Military Marine Blue',
            'type7_militaire_sand'                          => 'Military Sand',

            'type7_tactical_blue'                           => 'Tactical Cobalt',
            'type7_tactical_brown'                          => 'Tactical Khaki',
            'type7_tactical_green'                          => 'Tactical Olive',
            'type7_tactical_grey'                           => 'Tactical Graphite',
            'type7_tactical_red'                            => 'Tactical Crimson',
            'type7_tactical_white'                          => 'Tactical Ice',

            'type7_vibrant_blue'                            => 'Vibrant Blue',
            'type7_vibrant_green'                           => 'Vibrant Green',
            'type7_vibrant_orange'                          => 'Vibrant Orange',
            'type7_vibrant_purple'                          => 'Vibrant Purple',
            'type7_vibrant_red'                             => 'Vibrant Red',
            'type7_vibrant_yellow'                          => 'Vibrant Yellow',
        ],

        // Type-9 Heavy
        128049333 => [
            'type9_default_defaultpaintjob'                 => 'Default',

            'type9_blackfriday_01'                          => 'Midnight Black',

            'type9_cow_01'                                  => 'Bovine',

            'type9_lavecon_lavecon'                         => 'Lavecon',

            //'type9_metallic_chrome'                         => 'Chrome',
            //'type9_metallic_gold'                           => 'Gold',
            'type9_metallic2_gold'                          => 'Golden',

            'type9_mechanist_01'                            => 'Mechanist Blue',
            'type9_mechanist_02'                            => 'Mechanist Pink',
            'type9_mechanist_03'                            => 'Mechanist Ash',
            'type9_mechanist_04'                            => 'Mechanist Charcoal',
            'type9_mechanist_05'                            => 'Mechanist Red',
            'type9_mechanist_06'                            => 'Mechanist Yellow',

            'type9_militaire_dark_green'                    => 'Military Dark Green',
            'type9_militaire_desert_sand'                   => 'Military Desert Sand',
            'type9_militaire_earth_red'                     => 'Military Earth Red',
            'type9_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'type9_militaire_forest_green'                  => 'Military Marine Blue',
            'type9_militaire_sand'                          => 'Military Sand',

            'type9_militarystripe_blue'                     => 'Military Stripe Blue',
            'type9_militarystripe_green'                    => 'Military Stripe Green',
            'type9_militarystripe_orange'                   => 'Military Stripe Orange',
            'type9_militarystripe_purple'                   => 'Military Stripe Purple',
            'type9_militarystripe_red'                      => 'Military Stripe Red',
            'type9_militarystripe_yellow'                   => 'Military Stripe Yellow',

            'type9_squadron_black'                          => 'Squadron Shadow',
            'type9_squadron_blue'                           => 'Squadron Blue',
            'type9_squadron_gold'                           => 'Squadron Black',
            'type9_squadron_green'                          => 'Squadron Green',
            'type9_squadron_orange'                         => 'Squadron Orange',
            'type9_squadron_red'                            => 'Squadron Red',

            'type9_tactical_blue'                           => 'Tactical Cobalt',
            'type9_tactical_brown'                          => 'Tactical Khaki',
            'type9_tactical_green'                          => 'Tactical Olive',
            'type9_tactical_grey'                           => 'Tactical Graphite',
            'type9_tactical_red'                            => 'Tactical Crimson',
            'type9_tactical_white'                          => 'Tactical Ice',

            'type9_vibrant_blue'                            => 'Vibrant Blue',
            'type9_vibrant_green'                           => 'Vibrant Green',
            'type9_vibrant_orange'                          => 'Vibrant Orange',
            'type9_vibrant_purple'                          => 'Vibrant Purple',
            'type9_vibrant_red'                             => 'Vibrant Red',
            'type9_vibrant_yellow'                          => 'Vibrant Yellow',
            
            'type9_largelogometallic_06'                    => 'Lakon Metallic Silver',
        ],

        // Type-10 Defender
        128785619 => [
            'type9_military_default_defaultpaintjob'        => 'Default',

            'type9_military_blackfriday_01'                 => 'Midnight Black',

            'type9_military_camo2_01'                       => 'Sabotage Lime',
            'type9_military_camo2_02'                       => 'Sabotage Orange',
            'type9_military_camo2_03'                       => 'Sabotage Blue',
            'type9_military_camo2_04'                       => 'Sabotage Red',
            'type9_military_camo2_05'                       => 'Sabotage Purple',
            'type9_military_camo2_06'                       => 'Sabotage Green',

            'type9_military_fullmetal_brass'                => 'Galvanized Brass',
            'type9_military_fullmetal_bronze'               => 'Galvanized Bronze',
            'type9_military_fullmetal_cobalt'               => 'Galvanized Cobalt',
            'type9_military_fullmetal_copper'               => 'Galvanized Copper',
            'type9_military_fullmetal_malachite'            => 'Galvanized Malachite',
            'type9_military_fullmetal_paladium'             => 'Galvanized Paladium',

            'type9_military_iridescenthighcolour_01'        => 'Iridescent Scorch',
            'type9_military_iridescenthighcolour_04'        => 'Iridescent Dusk',
            'type9_military_iridescenthighcolour_05'        => 'Iridescent Aurora',
            'type9_military_iridescenthighcolour_06'        => 'Iridescent Twilight',

            'type9_military_lavecon_lavecon'                => 'Lavecon',

            'type9_military_metallic2_chrome'               => 'Chromed',
            'type9_military_metallic2_gold'                 => 'Golden',

            'type9_military_militaire_dark_green'           => 'Military Dark Green',
            'type9_military_militaire_desert_sand'          => 'Military Desert Sand',
            'type9_military_militaire_earth_red'            => 'Military Earth Red',
            'type9_military_militaire_earth_yellow'         => 'Military Earth Yellow',
            'type9_military_militaire_forest_green'         => 'Military Marine Blue',
            'type9_military_militaire_sand'                 => 'Military Sand',

            'type9_military_militarystripe_blue'            => 'Military Stripe Blue',
            'type9_military_militarystripe_green'           => 'Military Stripe Green',
            'type9_military_militarystripe_orange'          => 'Military Stripe Orange',
            'type9_military_militarystripe_purple'          => 'Military Stripe Purple',
            'type9_military_militarystripe_red'             => 'Military Stripe Red',
            'type9_military_militarystripe_yellow'          => 'Military Stripe Yellow',

            'type9_military_operator_blue'                  => 'Operator Blue',
            'type9_military_operator_green'                 => 'Operator Green',
            'type9_military_operator_red'                   => 'Operator Red',
            'type9_military_operator_pink'                  => 'Operator Pink',
            'type9_military_operator_gold'                  => 'Operator Gold',
            'type9_military_operator_teal'                  => 'Operator Teal',

            'type9_military_squadron_black'                 => 'Squadron Black',
            'type9_military_squadron_blue'                  => 'Squadron Blue',
            'type9_military_squadron_gold'                  => 'Squadron Gold',
            'type9_military_squadron_green'                 => 'Squadron Green',
            'type9_military_squadron_orange'                => 'Squadron Orange',
            'type9_military_squadron_red'                   => 'Squadron Red',

            'type9_military_tactical_blue'                  => 'Tactical Cobalt',
            'type9_military_tactical_brown'                 => 'Tactical Khaki',
            'type9_military_tactical_green'                 => 'Tactical Olive',
            'type9_military_tactical_grey'                  => 'Tactical Graphite',
            'type9_military_tactical_red'                   => 'Tactical Crimson',
            'type9_military_tactical_white'                 => 'Tactical Ice',

            'type9_military_vibrant_blue'                   => 'Vibrant Blue',
            'type9_military_vibrant_green'                  => 'Vibrant Green',
            'type9_military_vibrant_orange'                 => 'Vibrant Orange',
            'type9_military_vibrant_purple'                 => 'Vibrant Purple',
            'type9_military_vibrant_red'                    => 'Vibrant Red',
            'type9_military_vibrant_yellow'                 => 'Vibrant Yellow',
        ],

        // Viper MkIII
        128049273 => [
            'viper_default_defaultpaintjob'                 => 'Default',

            'viper_blackfriday_01'                          => 'Midnight Black',

            'viper_corrosive_01'                            => 'Corroded 1',
            'viper_corrosive_02'                            => 'Corroded 2',
            'viper_corrosive_03'                            => 'Corroded 3',
            'viper_corrosive_04'                            => 'Corroded 4',
            'viper_corrosive_05'                            => 'Corroded 5',
            'viper_corrosive_06'                            => 'Corroded 6',

            'viper_default_01'                              => 'Red Copperhead',
            'viper_default_03'                              => 'Orange Copperhead',

            'viper_faction1_01'                             => 'Pirate Faction Red',
            'viper_faction1_02'                             => 'Pirate Faction Orange',
            'viper_faction1_03'                             => 'Pirate Faction Green',
            'viper_faction1_04'                             => 'Pirate Faction Rose',
            'viper_faction1_05'                             => 'Pirate Faction Blue',
            'viper_faction1_06'                             => 'Pirate Faction Purple',

            'viper_flag_australia_01'                       => 'Australia Flag',
            'viper_flag_austria_01'                         => 'Austria Flag',
            'viper_flag_belgium_01'                         => 'Belgium Flag',
            'viper_flag_canada_01'                          => 'Canada Flag',
            'viper_flag_denmark_01'                         => 'Denmark Flag',
            'viper_flag_finland_01'                         => 'Finland Flag',
            'viper_flag_france_01'                          => 'France Flag',
            'viper_flag_germany_01'                         => 'Germany Flag',
            'viper_flag_ireland_01'                         => 'Ireland Flag',
            'viper_flag_italy_01'                           => 'Italy Flag',
            'viper_flag_netherlands_01'                     => 'Netherlands Flag',
            'viper_flag_newzealand_01'                      => 'New Zealand Flag',
            'viper_flag_norway_01'                          => 'Norway Flag',
            'viper_flag_poland_01'                          => 'Poland Flag',
            'viper_flag_russia_01'                          => 'Russia Flag',
            'viper_flag_spain_01'                           => 'Spain Flag',
            'viper_flag_sweden_01'                          => 'Sweden Flag',
            'viper_flag_switzerland_01'                     => 'Switzerland Flag',
            'viper_flag_uk_01'                              => 'Union Jack Flag',
            'viper_flag_usa_01'                             => 'Stars & Stripes Flag',

            'viper_fullmetal_brass'                         => 'Galvanized Brass',
            'viper_fullmetal_bronze'                        => 'Galvanized Bronze',
            'viper_fullmetal_cobalt'                        => 'Galvanized Cobalt',
            'viper_fullmetal_copper'                        => 'Galvanized Copper',
            'viper_fullmetal_malachite'                     => 'Galvanized Malachite',
            'viper_fullmetal_paladium'                      => 'Galvanized Paladium',

            'viper_merc'                                    => 'Mercenary',

            'viper_stripe2_52'                              => 'viper_metallic_chrome', // REDIRECT
            'viper_metallic_chrome'                         => 'Chrome',
            'viper_metallic2_chrome'                        => 'Chromed',
            'viper_stripe2_51'                              => 'viper_metallic_gold', // REDIRECT
            'viper_metallic_gold'                           => 'Gold',
            'viper_metallic2_gold'                          => 'Golden',

            'viper_militaire_dark_green'                    => 'Military Dark Green',
            'viper_militaire_desert_sand'                   => 'Military Desert Sand',
            'viper_militaire_earth_red'                     => 'Military Earth Red',
            'viper_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'viper_militaire_forest_green'                  => 'Military Marine Blue',
            'viper_militaire_sand'                          => 'Military Sand',

            'viper_razormetal_brass'                        => 'Razor Brass',
            'viper_razormetal_bronze'                       => 'Razor Bronze',
            'viper_razormetal_cobalt'                       => 'Razor Cobalt',
            'viper_razormetal_copper'                       => 'Razor Copper',
            'viper_razormetal_gold'                         => 'Razor Gold',
            'viper_razormetal_silver'                       => 'Razor Silver',

            /*
            'viper_squadron_black'                          => 'Squadron Shadow',
            'viper_squadron_blue'                           => 'Squadron Blue',
            'viper_squadron_gold'                           => 'Squadron Black',
            'viper_squadron_green'                          => 'Squadron Green',
            'viper_squadron_orange'                         => 'Squadron Orange',
            'viper_squadron_red'                            => 'Squadron Red',
            */

            'viper_stefanos_01'                             => 'BlackJack',

            'viper_stripe1_01'                              => 'Grey Ridgenose',
            'viper_stripe1_02'                              => 'Green Ridgenose',

            'viper_stripe2_02'                              => 'Blue Sidestripe',
            'viper_stripe2_04'                              => 'Shadow Sidestripe',

            'viper_tactical_blue'                           => 'Tactical Cobalt',
            'viper_tactical_brown'                          => 'Tactical Khaki',
            'viper_tactical_green'                          => 'Tactical Olive',
            'viper_tactical_grey'                           => 'Tactical Graphite',
            'viper_tactical_red'                            => 'Tactical Crimson',
            'viper_tactical_white'                          => 'Tactical Ice',

            'viper_vibrant_blue'                            => 'Vibrant Blue',
            'viper_vibrant_green'                           => 'Vibrant Green',
            'viper_vibrant_orange'                          => 'Vibrant Orange',
            'viper_vibrant_purple'                          => 'Vibrant Purple',
            'viper_vibrant_red'                             => 'Vibrant Red',
            'viper_vibrant_yellow'                          => 'Vibrant Yellow',

            'viper_wireframe_01'                            => 'Wireframe',
        ],

        // Viper MkIV
        128672255 => [
            'viper_mkiv_default_defaultpaintjob'            => 'Default',

            'viper_mkiv_blackfriday_01'                     => 'Midnight Black',

            /*
            'viper_mkiv_faction1_01'                        => 'Pirate Faction Red',
            'viper_mkiv_faction1_02'                        => 'Pirate Faction Orange',
            'viper_mkiv_faction1_03'                        => 'Pirate Faction Green',
            'viper_mkiv_faction1_04'                        => 'Pirate Faction Rose',
            'viper_mkiv_faction1_05'                        => 'Pirate Faction Blue',
            'viper_mkiv_faction1_06'                        => 'Pirate Faction Purple',
            */

            /*
            'viper_mkiv_flag_australia_01'                  => 'Australia Flag',
            'viper_mkiv_flag_austria_01'                    => 'Austria Flag',
            'viper_mkiv_flag_belgium_01'                    => 'Belgium Flag',
            'viper_mkiv_flag_canada_01'                     => 'Canada Flag',
            'viper_mkiv_flag_denmark_01'                    => 'Denmark Flag',
            'viper_mkiv_flag_finland_01'                    => 'Finland Flag',
            'viper_mkiv_flag_france_01'                     => 'France Flag',
            'viper_mkiv_flag_germany_01'                    => 'Germany Flag',
            'viper_mkiv_flag_italy_01'                      => 'Italy Flag',
            'viper_mkiv_flag_netherlands_01'                => 'Netherlands Flag',
            'viper_mkiv_flag_newzealand_01'                 => 'New Zealand Flag',
            'viper_mkiv_flag_norway_01'                     => 'Norway Flag',
            'viper_mkiv_flag_poland_01'                     => 'Poland Flag',
            'viper_mkiv_flag_russia_01'                     => 'Russia Flag',
            'viper_mkiv_flag_spain_01'                      => 'Spain Flag',
            'viper_mkiv_flag_sweden_01'                     => 'Sweden Flag',
            'viper_mkiv_flag_switzerland_01'                => 'Switzerland Flag',
            'viper_mkiv_flag_uk_01'                         => 'Union Jack Flag',
            'viper_mkiv_flag_usa_01'                        => 'Stars & Stripes Flag',
            */

            //'viper_mkiv_metallic_chrome'                    => 'Chrome',
            //'viper_mkiv_metallic_gold'                      => 'Gold',
            'viper_mkiv_metallic2_gold'                     => 'Golden',

            'viper_mkiv_militaire_dark_green'               => 'Military Dark Green',
            'viper_mkiv_militaire_desert_sand'              => 'Military Desert Sand',
            'viper_mkiv_militaire_earth_red'                => 'Military Earth Red',
            'viper_mkiv_militaire_earth_yellow'             => 'Military Earth Yellow',
            'viper_mkiv_militaire_forest_green'             => 'Military Marine Blue',
            'viper_mkiv_militaire_sand'                     => 'Military Sand',

            'viper_mkiv_squadron_black'                     => 'Squadron Shadow',
            'viper_mkiv_squadron_blue'                      => 'Squadron Blue',
            'viper_mkiv_squadron_gold'                      => 'Squadron Black',
            'viper_mkiv_squadron_green'                     => 'Squadron Green',
            'viper_mkiv_squadron_orange'                    => 'Squadron Orange',
            'viper_mkiv_squadron_red'                       => 'Squadron Red',

            'viper_mkiv_synth_blue'                         => 'Synth Blue',
            'viper_mkiv_synth_lime'                         => 'Synth Lime',
            'viper_mkiv_synth_orange'                       => 'Synth Orange',
            'viper_mkiv_synth_red'                          => 'Synth Red',
            'viper_mkiv_synth_rose'                         => 'Synth Rose',
            'viper_mkiv_synth_white'                        => 'Synth White',

            'viper_mkiv_tactical_blue'                      => 'Tactical Cobalt',
            'viper_mkiv_tactical_brown'                     => 'Tactical Khaki',
            'viper_mkiv_tactical_green'                     => 'Tactical Olive',
            'viper_mkiv_tactical_grey'                      => 'Tactical Graphite',
            'viper_mkiv_tactical_red'                       => 'Tactical Crimson',
            'viper_mkiv_tactical_white'                     => 'Tactical Ice',

            'viper_mkiv_vibrant_blue'                       => 'Vibrant Blue',
            'viper_mkiv_vibrant_green'                      => 'Vibrant Green',
            'viper_mkiv_vibrant_orange'                     => 'Vibrant Orange',
            'viper_mkiv_vibrant_purple'                     => 'Vibrant Purple',
            'viper_mkiv_vibrant_red'                        => 'Vibrant Red',
            'viper_mkiv_vibrant_yellow'                     => 'Vibrant Yellow',
        ],

        // Vulture
        128049309 => [
            'vulture_default_defaultpaintjob'               => 'Default',

            'vulture_bartecki_bartecki'                     => 'Flash',

            'vulture_blackfriday_01'                        => 'Midnight Black',

            'vulture_corrosive_01'                          => 'Corroded 1',
            'vulture_corrosive_02'                          => 'Corroded 2',
            'vulture_corrosive_03'                          => 'Corroded 3',
            'vulture_corrosive_04'                          => 'Corroded 4',
            'vulture_corrosive_05'                          => 'Corroded 5',
            'vulture_corrosive_06'                          => 'Corroded 6',

            'vulture_lowlighteffect_01_01'                  => 'Crypsis Blue',
            'vulture_lowlighteffect_01_02'                  => 'Crypsis Pink',
            'vulture_lowlighteffect_01_03'                  => 'Crypsis Green',
            'vulture_lowlighteffect_01_04'                  => 'Crypsis Yellow',
            'vulture_lowlighteffect_01_05'                  => 'Crypsis Purple',
            'vulture_lowlighteffect_01_06'                  => 'Crypsis White',

            /*
            'vulture_faction1_01'                           => 'Pirate Faction Red',
            'vulture_faction1_02'                           => 'Pirate Faction Orange',
            'vulture_faction1_03'                           => 'Pirate Faction Green',
            'vulture_faction1_04'                           => 'Pirate Faction Rose',
            'vulture_faction1_05'                           => 'Pirate Faction Blue',
            'vulture_faction1_06'                           => 'Pirate Faction Purple',
            */

            'vulture_fullmetal_brass'                       => 'Galvanized Brass',
            'vulture_fullmetal_bronze'                      => 'Galvanized Bronze',
            'vulture_fullmetal_cobalt'                      => 'Galvanized Cobalt',
            'vulture_fullmetal_copper'                      => 'Galvanized Copper',
            'vulture_fullmetal_malachite'                   => 'Galvanized Malachite',
            'vulture_fullmetal_paladium'                    => 'Galvanized Paladium',

            'vulture_iridescenthighcolour_01'               => 'Iridescent Scorch',
            'vulture_iridescenthighcolour_02'               => 'Iridescent Gleam',
            'vulture_iridescenthighcolour_04'               => 'Iridescent Dusk',
            'vulture_iridescenthighcolour_05'               => 'Iridescent Aurora',
            'vulture_iridescenthighcolour_06'               => 'Iridescent Twilight',

            'vulture_gamescom_gamescom'                     => 'Gamescom',

            'vulture_lavecon_lavecon'                       => 'Lavecon',

            'vulture_luminous_stripe_ver2_01'               => 'Pulse Green',
            'vulture_luminous_stripe_ver2_02'               => 'Pulse Blue',
            'vulture_luminous_stripe_ver2_03'               => 'Pulse Purple',
            'vulture_luminous_stripe_ver2_04'               => 'Pulse Red',
            'vulture_luminous_stripe_ver2_05'               => 'Pulse Orange',
            'vulture_luminous_stripe_ver2_06'               => 'Pulse White',

            'vulture_metallic_chrome'                       => 'Chrome',
            'vulture_metallic2_chrome'                      => 'Chromed',
            //'vulture_metallic_gold'                         => 'Gold',
            'vulture_metallic2_gold'                        => 'Golden',

            'vulture_militaire_dark_green'                  => 'Military Dark Green',
            'vulture_militaire_desert_sand'                 => 'Military Desert Sand',
            'vulture_militaire_earth_red'                   => 'Military Earth Red',
            'vulture_militaire_earth_yellow'                => 'Military Earth Yellow',
            'vulture_militaire_forest_green'                => 'Military Marine Blue',
            'vulture_militaire_sand'                        => 'Military Sand',

            'vulture_militarystripe_blue'                   => 'Military Stripe Blue',
            'vulture_militarystripe_green'                  => 'Military Stripe Green',
            'vulture_militarystripe_orange'                 => 'Military Stripe Orange',
            'vulture_militarystripe_purple'                 => 'Military Stripe Purple',
            'vulture_militarystripe_red'                    => 'Military Stripe Red',
            'vulture_militarystripe_yellow'                 => 'Military Stripe Yellow',

            'vulture_pax_east_pax_east'                     => 'PAX East',
            'vulture_pax_south_pax_south'                   => 'PAX South',
            'vulture_paxprime_paxprime'                     => 'PAX Prime',

            'vulture_synth_blue'                            => 'Synth Blue',
            'vulture_synth_lime'                            => 'Synth Lime',
            'vulture_synth_orange'                          => 'Synth Orange',
            'vulture_synth_red'                             => 'Synth Red',
            'vulture_synth_rose'                            => 'Synth Rose',
            'vulture_synth_white'                           => 'Synth White',

            'vulture_tactical_blue'                         => 'Tactical Cobalt',
            'vulture_tactical_brown'                        => 'Tactical Khaki',
            'vulture_tactical_green'                        => 'Tactical Olive',
            'vulture_tactical_grey'                         => 'Tactical Graphite',
            'vulture_tactical_red'                          => 'Tactical Crimson',
            'vulture_tactical_white'                        => 'Tactical Ice',

            'vulture_vibrant_blue'                          => 'Vibrant Blue',
            'vulture_vibrant_green'                         => 'Vibrant Green',
            'vulture_vibrant_orange'                        => 'Vibrant Orange',
            'vulture_vibrant_purple'                        => 'Vibrant Purple',
            'vulture_vibrant_red'                           => 'Vibrant Red',
            'vulture_vibrant_yellow'                        => 'Vibrant Yellow',

            //'vulture_wireframe_01'                          => 'Wireframe',
        ],
    ];
}
