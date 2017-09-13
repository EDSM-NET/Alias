<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
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
        128049267 => 'adder_default_defaultpaintjob',
        128049363 => 'anaconda_default_defaultpaintjob',
        128049303 => 'asp_default_defaultpaintjob',
        128672276 => 'asp_scout_default_defaultpaintjob',
        128049345 => 'belugaliner_default_defaultpaintjob',
        128049279 => 'cobramkiii_default_defaultpaintjob',
        128672262 => 'cobramkiv_default_defaultpaintjob',
        128049291 => 'dolphin_default_defaultpaintjob',
        128671831 => 'diamondbackxl_default_defaultpaintjob',
        128671217 => 'diamondback_default_defaultpaintjob',
        128049255 => 'eagle_default_defaultpaintjob',
        128672145 => 'feddropship_mkii_default_defaultpaintjob',
        128049369 => 'federation_corvette_default_defaultpaintjob',
        128049321 => 'feddropship_default_defaultpaintjob',
        128672152 => 'federation_gunship_default_defaultpaintjob',
        128049351 => 'ferdelance_default_defaultpaintjob',
        128049261 => 'hauler_default_defaultpaintjob',
        128049315 => 'empiretrader_default_defaultpaintjob',
        128671223 => 'empire_courier_default_defaultpaintjob',
        128049375 => 'cutter_default_defaultpaintjob',
        128672138 => 'empire_eagle_default_defaultpaintjob',
        128672269 => 'independant_trader_default_defaultpaintjob',
        128049327 => 'orca_default_defaultpaintjob',
        128049339 => 'python_default_defaultpaintjob',
        128049249 => 'sidewinder_default_defaultpaintjob',
        128049285 => 'type6_default_defaultpaintjob',
        128049297 => 'type7_default_defaultpaintjob',
        128049333 => 'type9_default_defaultpaintjob',
        128049273 => 'viper_default_defaultpaintjob',
        128672255 => 'viper_mkiv_default_defaultpaintjob',
        128049309 => 'vulture_default_defaultpaintjob',
    ];
    
    /**
     * List of alias => names used in game
     */
    static protected $alias  = [
        // Adder
        128049267 => array(
            'adder_blackfriday_01'                          => 'Black Friday',
            
            'adder_default_01'                              => null,
            'adder_default_02'                              => null,
            'adder_default_03'                              => null,
            
            'adder_default_defaultpaintjob'                 => 'Default',
            
            'adder_faction1_01'                             => 'Pirate Faction Red',
            'adder_faction1_02'                             => 'Pirate Faction Orange',
            'adder_faction1_03'                             => 'Pirate Faction Green',
            'adder_faction1_04'                             => 'Pirate Faction Rose',
            'adder_faction1_05'                             => 'Pirate Faction Blue',
            'adder_faction1_06'                             => 'Pirate Faction Purple',
            
            'adder_flatcolour_blue'                         => null,
            'adder_flatcolour_green'                        => null,
            'adder_flatcolour_grey'                         => null,
            'adder_flatcolour_orange'                       => null,
            'adder_flatcolour_red'                          => null,
            'adder_flatcolour_white'                        => null,
            'adder_flatcolour_yellow'                       => null,
            
            'adder_metallic_chrome'                         => 'Chrome',
            'adder_metallic_gold'                           => 'Gold',
            
            'adder_militaire_dark_green'                    => 'Military Dark Green',
            'adder_militaire_desert_sand'                   => 'Military Desert Sand',
            'adder_militaire_earth_red'                     => 'Military Earth Red',
            'adder_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'adder_militaire_forest_green'                  => 'Military Marine Blue',
            'adder_militaire_sand'                          => 'Military Sand',
            
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
        ),


        // Anaconda
        128049363 => array(
            'anaconda_blackfriday_01'                       => 'Black Friday',
            
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
            
            'anaconda_default_01'                           => null,
            'anaconda_default_02'                           => null,
            'anaconda_default_03'                           => null,
            'anaconda_default_04'                           => null,
            'anaconda_default_05'                           => null,
            
            'anaconda_default_defaultpaintjob'              => 'Default',
            
            'anaconda_faction1_01'                          => 'Pirate Faction Red',
            'anaconda_faction1_02'                          => 'Pirate Faction Orange',
            'anaconda_faction1_03'                          => 'Pirate Faction Green',
            'anaconda_faction1_04'                          => 'Pirate Faction Rose',
            'anaconda_faction1_05'                          => 'Pirate Faction Blue',
            'anaconda_faction1_06'                          => 'Pirate Faction Purple',
            
            'anaconda_flatcolour_blue'                      => null,
            'anaconda_flatcolour_green'                     => null,
            'anaconda_flatcolour_grey'                      => null,
            'anaconda_flatcolour_orange'                    => null,
            'anaconda_flatcolour_red'                       => null,
            'anaconda_flatcolour_white'                     => null,
            'anaconda_flatcolour_yellow'                    => null,
            
            'anaconda_kickstarterbw_kickstarterbw'          => null,
            'anaconda_kickstarterhb_kickstarterhb'          => null,
            'anaconda_kickstarterlm_kickstarterlm'          => null,
            'anaconda_kickstartermc_kickstartermc'          => null,
            
            'anaconda_lavecon_lavecon'                      => 'Lavecon',
            
            'anaconda_luminous_stripe_01'                   => 'Pulse Green',
            'anaconda_luminous_stripe_02'                   => 'Pulse Blue',
            'anaconda_luminous_stripe_03'                   => 'Pulse Purple',
            'anaconda_luminous_stripe_04'                   => 'Pulse Red',
            'anaconda_luminous_stripe_05'                   => 'Pulse Orange',
            'anaconda_luminous_stripe_06'                   => 'Pulse White',
            
            'anaconda_metallic_chrome'                      => 'Chrome',
            'anaconda_metallic_gold'                        => 'Gold',
            'anaconda_metallic2_gold'                       => 'Golden',
            
            'anaconda_militaire_dark_green'                 => 'Military Dark Green',
            'anaconda_militaire_desert_sand'                => 'Military Desert Sand',
            'anaconda_militaire_earth_red'                  => 'Military Earth Red',
            'anaconda_militaire_earth_yellow'               => 'Military Earth Yellow',
            'anaconda_militaire_forest_green'               => 'Military Marine Blue',
            'anaconda_militaire_sand'                       => 'Military Sand',
            
            'anaconda_searchrescue_searchrescue'            => null,
            
            'anaconda_squadron_black'                       => 'Squadron Black',
            'anaconda_squadron_blue'                        => 'Squadron Blue',
            'anaconda_squadron_gold'                        => 'Squadron Shadow',
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
            
            'anaconda_wireframe_01'                         => 'Wireframe',
            'anaconda_wireframe_02'                         => null,
            'anaconda_wireframe_03'                         => null,
            'anaconda_wireframe_04'                         => null,
            'anaconda_wireframe_05'                         => null,
            'anaconda_wireframe_06'                         => null,
        ),

        // Asp Explorer
        128049303 => array(
            'asp_blackfriday_01'                            => 'Black Friday',
            
            'asp_corrosive_01'                              => 'Corroded 1',
            'asp_corrosive_02'                              => 'Corroded 2',
            'asp_corrosive_03'                              => 'Corroded 3',
            'asp_corrosive_04'                              => 'Corroded 4',
            'asp_corrosive_05'                              => 'Corroded 5',
            'asp_corrosive_06'                              => 'Corroded 6',
            
            'asp_default_01'                                => null,
            'asp_default_02'                                => 'Black Apollo',
            'asp_default_03'                                => 'White Apollo',
            'asp_default_04'                                => 'Green Apollo',
            
            'asp_default_defaultpaintjob'                   => 'Default',
            
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
            
            'asp_flatcolour_blue'                           => null,
            'asp_flatcolour_green'                          => null,
            'asp_flatcolour_grey'                           => null,
            'asp_flatcolour_orange'                         => null,
            'asp_flatcolour_red'                            => null,
            'asp_flatcolour_white'                          => null,
            'asp_flatcolour_yellow'                         => null,
            
            'asp_gamescom_gamescom'                         => 'Gamescom',
            
            'asp_lavecon_lavecon'                           => 'Lavecon',
            
            'asp_metallic_chrome'                           => 'Chrome',
            'asp_metallic_gold'                             => 'Gold',
            'asp_metallic2_gold'                            => 'Golden',
            
            'asp_militaire_dark_green'                      => 'Military Dark Green',
            'asp_militaire_desert_sand'                     => 'Military Desert Sand',
            'asp_militaire_earth_red'                       => 'Military Earth Red',
            'asp_militaire_earth_yellow'                    => 'Military Earth Yellow',
            'asp_militaire_forest_green'                    => 'Military Marine Blue',
            'asp_militaire_sand'                            => 'Military Sand',
            
            'asp_searchrescue_searchrescue'                 => null,
            
            'asp_squadron_black'                            => 'Squadron Black',
            'asp_squadron_blue'                             => 'Squadron Blue',
            'asp_squadron_gold'                             => 'Squadron Shadow',
            'asp_squadron_green'                            => 'Squadron Green',
            'asp_squadron_orange'                           => 'Squadron Orange',
            'asp_squadron_red'                              => 'Squadron Red',
            
            'asp_stripe1_01'                                => null,
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
            'asp_wireframe_02'                              => null,
            'asp_wireframe_03'                              => null,
            'asp_wireframe_04'                              => null,
            'asp_wireframe_05'                              => null,
            'asp_wireframe_06'                              => null,
        ),

        // Asp Scout
        128672276 => array(
            'asp_scout_blackfriday_01'                      => 'Black Friday',
            
            'asp_scout_default_01'                          => null,
            'asp_scout_default_02'                          => null,
            'asp_scout_default_03'                          => null,
            'asp_scout_default_04'                          => null,
            
            'asp_scout_default_defaultpaintjob'             => 'Default',
            
            'asp_scout_faction1_01'                         => 'Pirate Faction Red',
            'asp_scout_faction1_02'                         => 'Pirate Faction Orange',
            'asp_scout_faction1_03'                         => 'Pirate Faction Green',
            'asp_scout_faction1_04'                         => 'Pirate Faction Rose',
            'asp_scout_faction1_05'                         => 'Pirate Faction Blue',
            'asp_scout_faction1_06'                         => 'Pirate Faction Purple',
            
            'asp_scout_flatcolour_blue'                     => null,
            'asp_scout_flatcolour_green'                    => null,
            'asp_scout_flatcolour_grey'                     => null,
            'asp_scout_flatcolour_orange'                   => null,
            'asp_scout_flatcolour_red'                      => null,
            'asp_scout_flatcolour_white'                    => null,
            'asp_scout_flatcolour_yellow'                   => null,
            
            'asp_scout_gamescom_gamescom'                   => 'Gamescom',
            
            'asp_scout_lavecon_lavecon'                     => 'Lavecon',
            
            'asp_scout_metallic_chrome'                     => 'Chrome',
            'asp_scout_metallic_gold'                       => 'Gold',
            
            'asp_scout_militaire_dark_green'                => 'Military Dark Green',
            'asp_scout_militaire_desert_sand'               => 'Military Desert Sand',
            'asp_scout_militaire_earth_red'                 => 'Military Earth Red',
            'asp_scout_militaire_earth_yellow'              => 'Military Earth Yellow',
            'asp_scout_militaire_forest_green'              => 'Military Marine Blue',
            'asp_scout_militaire_sand'                      => 'Military Sand',
            
            'asp_scout_searchrescue_searchrescue'           => null,
            
            'asp_scout_stripe1_01'                          => null,
            'asp_scout_stripe1_02'                          => null,
            'asp_scout_stripe1_03'                          => null,
            'asp_scout_stripe1_04'                          => null,
            
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
        ),

        // Beluga Liner
        128049345 => array(
            'belugaliner_blackfriday_01'                    => 'Black Friday',
            
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
            
            'belugaliner_default_01'                        => null,
            'belugaliner_default_02'                        => null,
            'belugaliner_default_03'                        => null,
            'belugaliner_default_51'                        => null,
            'belugaliner_default_52'                        => null,
            
            'belugaliner_default_defaultpaintjob'           => 'Default',
            
            'belugaliner_flatcolour_blue'                   => null,
            'belugaliner_flatcolour_green'                  => null,
            'belugaliner_flatcolour_grey'                   => null,
            'belugaliner_flatcolour_orange'                 => null,
            'belugaliner_flatcolour_red'                    => null,
            'belugaliner_flatcolour_white'                  => null,
            'belugaliner_flatcolour_yellow'                 => null,
            
            'belugaliner_metallic_chrome'                   => 'Chrome',
            'belugaliner_metallic_gold'                     => 'Gold',
            'belugaliner_metallic2_gold'                    => 'Golden',
            
            'belugaliner_militaire_dark_green'              => 'Military Dark Green',
            'belugaliner_militaire_desert_sand'             => 'Military Desert Sand',
            'belugaliner_militaire_earth_red'               => 'Military Earth Red',
            'belugaliner_militaire_earth_yellow'            => 'Military Earth Yellow',
            'belugaliner_militaire_forest_green'            => 'Military Marine Blue',
            'belugaliner_militaire_sand'                    => 'Military Sand',
            
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
        ),

        // Cobra MkIII
        128049279 => array(
            'cobramkiii_blackfriday_01'                     => 'Black Friday',
            
            'cobramkiii_camo1_01'                           => null,
            'cobramkiii_camo1_02'                           => null,
            'cobramkiii_camo1_03'                           => null,
            'cobramkiii_camo1_04'                           => null,
            'cobramkiii_camo1_05'                           => null,
            'cobramkiii_camo1_06'                           => null,
            
            'cobramkiii_camo2_01'                           => 'Urban Camo',
            'cobramkiii_camo2_02'                           => null,
            'cobramkiii_camo2_03'                           => 'Polar Camo',
            'cobramkiii_camo2_04'                           => null,
            'cobramkiii_camo2_05'                           => null,
            'cobramkiii_camo2_06'                           => null,
            
            'cobramkiii_community_community'                => 'Community',
            
            'cobramkiii_corrosive_01'                       => 'Corroded 1',
            'cobramkiii_corrosive_02'                       => 'Corroded 2',
            'cobramkiii_corrosive_03'                       => 'Corroded 3',
            'cobramkiii_corrosive_04'                       => 'Corroded 4',
            'cobramkiii_corrosive_05'                       => 'Corroded 5',
            'cobramkiii_corrosive_06'                       => 'Corroded 6',
            
            'cobramkiii_default_01'                         => null,
            'cobramkiii_default_02'                         => null,
            'cobramkiii_default_03'                         => null,
            'cobramkiii_default_52'                         => null,
            
            'cobramkiii_default_defaultpaintjob'            => 'Default',
            
            'cobramkiii_egx_egx'                            => 'EGX',
            
            'cobramkiii_faction1_01'                        => 'Pirate Faction Red',
            'cobramkiii_faction1_02'                        => 'Pirate Faction Orange',
            'cobramkiii_faction1_03'                        => 'Pirate Faction Green',
            'cobramkiii_faction1_04'                        => 'Pirate Faction Rose',
            'cobramkiii_faction1_05'                        => 'Pirate Faction Blue',
            'cobramkiii_faction1_06'                        => 'Pirate Faction Purple',
            'cobramkiii_faction1_onionhead1'                => null,
            
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
            
            'cobramkiii_flatcolour_blue'                    => null,
            'cobramkiii_flatcolour_green'                   => null,
            'cobramkiii_flatcolour_grey'                    => null,
            'cobramkiii_flatcolour_orange'                  => null,
            'cobramkiii_flatcolour_red'                     => null,
            'cobramkiii_flatcolour_white'                   => null,
            'cobramkiii_flatcolour_yellow'                  => null,
            
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
            'cobramkiii_hotrod_02'                          => null,
            'cobramkiii_hotrod_03'                          => 'Orange Ignition',
            'cobramkiii_hotrod_04'                          => null,
            'cobramkiii_hotrod_05'                          => null,
            'cobramkiii_hotrod_06'                          => null,
            
            'cobramkiii_kickstartermc_kickstartermc'        => null,
            'cobramkiii_kickstartersu_kickstartersu'        => null,
            
            'cobramkiii_lavecon_lavecon'                    => 'Lavecon',
            
            'cobramkiii_medusa_aquamarine'                  => 'Medusa Community',
            'cobramkiii_medusa_blackwhite'                  => null,
            'cobramkiii_medusa_brown'                       => null,
            'cobramkiii_medusa_green'                       => null,
            'cobramkiii_medusa_red'                         => null,
            'cobramkiii_medusa_yellow'                      => null,
            
            'cobramkiii_merc'                               => 'Mercenary',
            
            'cobramkiii_mercenary_01'                       => null,
            'cobramkiii_mercenary_02'                       => null,
            'cobramkiii_mercenary_03'                       => null,
            'cobramkiii_mercenary_04'                       => null,
            'cobramkiii_mercenary_05'                       => null,
            'cobramkiii_mercenary_06'                       => null,
            
            'cobramkiii_metallic_chrome'                    => 'Chrome',
            'cobramkiii_metallic_gold'                      => 'Gold',
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
            
            'cobramkiii_onionhead1_01'                      => 'Onionhead',
            
            'cobramkiii_oxm_oxm'                            => null,
            
            'cobramkiii_pcgamer_pcgamer'                    => 'PC Gamer',
            
            'cobramkiii_squadron_black'                     => 'Squadron Black',
            'cobramkiii_squadron_blue'                      => 'Squadron Blue',
            'cobramkiii_squadron_gold'                      => 'Squadron Shadow',
            'cobramkiii_squadron_green'                     => 'Squadron Green',
            'cobramkiii_squadron_orange'                    => 'Squadron Orange',
            'cobramkiii_squadron_red'                       => 'Squadron Red',
            
            'cobramkiii_stripe1_01'                         => null,
            'cobramkiii_stripe1_02'                         => 'Orange Rattler',
            'cobramkiii_stripe1_03'                         => 'Blue Rattler',
            
            'cobramkiii_stripe2_01'                         => null,
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
            'cobramkiii_wireframe_02'                       => null,
            'cobramkiii_wireframe_03'                       => null,
            'cobramkiii_wireframe_04'                       => null,
            'cobramkiii_wireframe_05'                       => null,
            'cobramkiii_wireframe_06'                       => null,
            
            'cobramkiii_yogscast_01'                        => null,
        ),

        // Cobra MkIV
        128672262 => array(
            'cobramkiv_blackfriday_01'                      => 'Black Friday',
            
            'cobramkiv_camo1_01'                            => null,
            'cobramkiv_camo1_02'                            => null,
            'cobramkiv_camo1_03'                            => null,
            'cobramkiv_camo1_04'                            => null,
            'cobramkiv_camo1_05'                            => null,
            'cobramkiv_camo1_06'                            => null,
            
            'cobramkiv_camo2_01'                            => null,
            'cobramkiv_camo2_02'                            => null,
            'cobramkiv_camo2_03'                            => null,
            'cobramkiv_camo2_04'                            => null,
            'cobramkiv_camo2_05'                            => null,
            'cobramkiv_camo2_06'                            => null,
            
            'cobramkiv_default_01'                          => null,
            'cobramkiv_default_02'                          => null,
            'cobramkiv_default_03'                          => null,
            'cobramkiv_default_51'                          => null,
            'cobramkiv_default_52'                          => null,
            
            'cobramkiv_default_defaultpaintjob'             => 'Default',
            
            'cobramkiv_faction1_01'                         => 'Pirate Faction Red',
            'cobramkiv_faction1_02'                         => 'Pirate Faction Orange',
            'cobramkiv_faction1_03'                         => 'Pirate Faction Green',
            'cobramkiv_faction1_04'                         => 'Pirate Faction Rose',
            'cobramkiv_faction1_05'                         => 'Pirate Faction Blue',
            'cobramkiv_faction1_06'                         => 'Pirate Faction Purple',
            'cobramkiv_faction1_onionhead1'                 => null,
            
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
            
            'cobramkiv_flatcolour_blue'                     => null,
            'cobramkiv_flatcolour_green'                    => null,
            'cobramkiv_flatcolour_grey'                     => null,
            'cobramkiv_flatcolour_orange'                   => null,
            'cobramkiv_flatcolour_red'                      => null,
            'cobramkiv_flatcolour_white'                    => null,
            'cobramkiv_flatcolour_yellow'                   => null,
            
            'cobramkiv_gamescom_gamescom'                   => 'Gamescom',
            
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
            
            'cobramkiv_hotrod_01'                           => null,
            'cobramkiv_hotrod_02'                           => null,
            'cobramkiv_hotrod_03'                           => null,
            
            'cobramkiv_lavecon_lavecon'                     => 'Lavecon',
            
            'cobramkiv_madcatz_01'                          => null,
            
            'cobramkiv_mercenary_01'                        => null,
            'cobramkiv_mercenary_02'                        => null,
            'cobramkiv_mercenary_03'                        => null,
            'cobramkiv_mercenary_04'                        => null,
            
            'cobramkiv_metallic_chrome'                     => 'Chrome',
            'cobramkiv_metallic_gold'                       => 'Gold',
            
            'cobramkiv_militaire_dark_green'                => 'Military Dark Green',
            'cobramkiv_militaire_desert_sand'               => 'Military Desert Sand',
            'cobramkiv_militaire_earth_red'                 => 'Military Earth Red',
            'cobramkiv_militaire_earth_yellow'              => 'Military Earth Yellow',
            'cobramkiv_militaire_forest_green'              => 'Military Marine Blue',
            'cobramkiv_militaire_sand'                      => 'Military Sand',
            
            'cobramkiv_onionhead1_01'                       => null,
            
            'cobramkiv_stripe1_01'                          => null,
            'cobramkiv_stripe1_02'                          => null,
            'cobramkiv_stripe1_03'                          => null,
            
            'cobramkiv_stripe2_01'                          => null,
            'cobramkiv_stripe2_02'                          => null,
            'cobramkiv_stripe2_03'                          => null,
            
            'cobramkiv_tactical_blue'                       => 'Tactical Cobalt',
            'cobramkiv_tactical_brown'                      => 'Tactical Khaki',
            'cobramkiv_tactical_green'                      => 'Tactical Olive',
            'cobramkiv_tactical_grey'                       => 'Tactical Graphite',
            'cobramkiv_tactical_red'                        => 'Tactical Crimson',
            'cobramkiv_tactical_white'                      => 'Tactical Ice',
            
            'cobramkiv_vibrant_blue'                        => 'Vibrant Blue',
            'cobramkiv_vibrant_green'                       => 'Vibrant Green',
            'cobramkiv_vibrant_orange'                      => 'Vibrant Orange',
            'cobramkiv_vibrant_purple'                      => 'Vibrant Purple',
            'cobramkiv_vibrant_red'                         => 'Vibrant Red',
            'cobramkiv_vibrant_yellow'                      => 'Vibrant Yellow',
            
            'cobramkiv_wireframe_01'                        => 'Wireframe',
            'cobramkiv_wireframe_02'                        => null,
            'cobramkiv_wireframe_03'                        => null,
            'cobramkiv_wireframe_04'                        => null,
            'cobramkiv_wireframe_05'                        => null,
            'cobramkiv_wireframe_06'                        => null,
        ),
        
        // Dolphin
        128049291 => array(
            'dolphin_default_defaultpaintjob'               => 'Default',
            
            'dolphin_corporate1_corporate1'                 => 'Wayfarer Blue',
            'dolphin_corporate1_corporate2'                 => 'Wayfarer Red',
            'dolphin_corporate1_corporate3'                 => 'Wayfarer Orange',
            'dolphin_corporate1_corporate4'                 => 'Wayfarer Purple',
            'dolphin_corporate1_corporate5'                 => 'Wayfarer Green',
            'dolphin_corporate1_corporate6'                 => 'Wayfarer Yellow',
            
            'dolphin_metallic_chrome'                       => 'Chrome',
            'dolphin_metallic_gold'                         => 'Gold',
            'dolphin_metallic2_gold'                        => 'Golden',
            
            'dolphin_militaire_dark_green'                  => 'Military Dark Green',
            'dolphin_militaire_desert_sand'                 => 'Military Desert Sand',
            'dolphin_militaire_earth_red'                   => 'Military Earth Red',
            'dolphin_militaire_earth_yellow'                => 'Military Earth Yellow',
            'dolphin_militaire_forest_green'                => 'Military Marine Blue',
            'dolphin_militaire_sand'                        => 'Military Sand',
            
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
        ),

        // Diamondback Explorer
        128671831 => array(
            'diamondbackxl_blackfriday_01'                  => 'Black Friday',
            
            'diamondbackxl_default_defaultpaintjob'         => 'Default',
            
            'diamondbackxl_metallic_chrome'                 => 'Chrome',
            'diamondbackxl_metallic_gold'                   => 'Gold',
            
            'diamondbackxl_militaire_dark_green'            => 'Military Dark Green',
            'diamondbackxl_militaire_desert_sand'           => 'Military Desert Sand',
            'diamondbackxl_militaire_earth_red'             => 'Military Earth Red',
            'diamondbackxl_militaire_earth_yellow'          => 'Military Earth Yellow',
            'diamondbackxl_militaire_forest_green'          => 'Military Marine Blue',
            'diamondbackxl_militaire_sand'                  => 'Military Sand',
            
            'diamondbackxl_recon_blue'                      => null,
            'diamondbackxl_recon_green'                     => null,
            'diamondbackxl_recon_orange'                    => null,
            'diamondbackxl_recon_red'                       => null,
            'diamondbackxl_recon_white'                     => null,
            'diamondbackxl_recon_yellow'                    => null,
            
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
        ),

        // Diamondback Scout
        128671217 => array(
            'diamondback_blackfriday_01'                    => 'Black Friday',
            
            'diamondback_default_defaultpaintjob'           => 'Default',
            
            'diamondback_faction1_01'                       => 'Pirate Faction Red',
            'diamondback_faction1_02'                       => 'Pirate Faction Orange',
            'diamondback_faction1_03'                       => 'Pirate Faction Green',
            'diamondback_faction1_04'                       => 'Pirate Faction Rose',
            'diamondback_faction1_05'                       => 'Pirate Faction Blue',
            'diamondback_faction1_06'                       => 'Pirate Faction Purple',
            
            'diamondback_metallic_chrome'                   => 'Chrome',
            'diamondback_metallic_gold'                     => 'Gold',
            
            'diamondback_militaire_dark_green'              => 'Military Dark Green',
            'diamondback_militaire_desert_sand'             => 'Military Desert Sand',
            'diamondback_militaire_earth_red'               => 'Military Earth Red',
            'diamondback_militaire_earth_yellow'            => 'Military Earth Yellow',
            'diamondback_militaire_forest_green'            => 'Military Marine Blue',
            'diamondback_militaire_sand'                    => 'Military Sand',
            
            'diamondback_searchrescue_searchrescue'         => null,
            
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
        ),

        // Eagle
        128049255 => array(
            'eagle_blackfriday_01'                          => 'Black Friday',
            
            'eagle_camo_01'                                 => 'Jungle Camo',
            'eagle_camo_02'                                 => 'Polar Camo',
            'eagle_camo_03'                                 => 'Urban Camo',
            
            'eagle_cascade_blue'                            => null,
            'eagle_cascade_green'                           => null,
            'eagle_cascade_grey'                            => null,
            'eagle_cascade_orange'                          => null,
            'eagle_cascade_red'                             => null,
            'eagle_cascade_white'                           => null,
            'eagle_cascade_yellow'                          => null,
            
            'eagle_crimson'                                 => 'Crimson Eagle',
            
            'eagle_default_01'                              => null,
            'eagle_default_02'                              => null,
            'eagle_default_03'                              => null,
            'eagle_default_04'                              => null,
            
            'eagle_default_defaultpaintjob'                 => 'Default',
            
            'eagle_doublestripe_01'                         => 'Red Rail',
            'eagle_doublestripe_02'                         => 'White Rail',
            'eagle_doublestripe_03'                         => 'Orange Rail',
            'eagle_doublestripe_51'                         => null,
            'eagle_doublestripe_52'                         => null,
            'eagle_doublestripe_53'                         => null,
            
            'eagle_faction1_01'                             => 'Pirate Faction Red',
            'eagle_faction1_02'                             => 'Pirate Faction Orange',
            'eagle_faction1_03'                             => 'Pirate Faction Green',
            'eagle_faction1_04'                             => 'Pirate Faction Rose',
            'eagle_faction1_05'                             => 'Pirate Faction Blue',
            'eagle_faction1_06'                             => 'Pirate Faction Purple',
            
            'eagle_flatcolour_blue'                         => null,
            'eagle_flatcolour_green'                        => null,
            'eagle_flatcolour_grey'                         => null,
            'eagle_flatcolour_orange'                       => null,
            'eagle_flatcolour_red'                          => null,
            'eagle_flatcolour_white'                        => null,
            'eagle_flatcolour_yellow'                       => null,
            
            'eagle_hotrod_01'                               => 'Red Ignition',
            'eagle_hotrod_02'                               => null,
            'eagle_hotrod_03'                               => 'Orange Ignition',
            
            'eagle_lavecon_lavecon'                         => 'Lavecon',
            
            'eagle_metallic_chrome'                         => 'Chrome',
            'eagle_metallic_gold'                           => 'Gold',
            'eagle_metallic2_gold'                          => 'Golden',
            
            'eagle_militaire_dark_green'                    => 'Military Dark Green',
            'eagle_militaire_desert_sand'                   => 'Military Desert Sand',
            'eagle_militaire_earth_red'                     => 'Military Earth Red',
            'eagle_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'eagle_militaire_forest_green'                  => 'Military Marine Blue',
            'eagle_militaire_sand'                          => 'Military Sand',
            
            'eagle_pax_east_pax_east'                       => 'PAX East',
            'eagle_pax_south_pax_south'                     => 'PAX South',
            'eagle_paxprime_paxprime'                       => 'PAX Prime',
            
            'eagle_aerial_display_green'                    => 'Slipstream Green',
            'eagle_aerial_display_blue'                     => 'Slipstream Blue',
            'eagle_aerial_display_pink'                     => 'Slipstream Purple',
            'eagle_aerial_display_yellow'                   => 'Slipstream Yellow',
            'eagle_aerial_display_orange'                   => 'Slipstream Orange',
            'eagle_aerial_display_red'                      => 'Slipstream Red',
            
            'eagle_squadron_black'                          => 'Squadron Black',
            'eagle_squadron_blue'                           => 'Squadron Blue',
            'eagle_squadron_gold'                           => 'Squadron Shadow',
            'eagle_squadron_green'                          => 'Squadron Green',
            'eagle_squadron_orange'                         => 'Squadron Orange',
            'eagle_squadron_red'                            => 'Squadron Red',
            
            'eagle_stripe1_01'                              => 'Red Streak',
            'eagle_stripe1_02'                              => 'Blue Streak',
            'eagle_stripe1_03'                              => 'Green Streak',
            'eagle_stripe1_blue'                            => null,
            'eagle_stripe1_green'                           => null,
            'eagle_stripe1_red'                             => null,
            
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
            
            'eagle_wireframe_01'                            => 'Wireframe',
            'eagle_wireframe_02'                            => null,
            'eagle_wireframe_03'                            => null,
            'eagle_wireframe_04'                            => null,
            'eagle_wireframe_05'                            => null,
            'eagle_wireframe_06'                            => null,
        ),

        // Federal Assault Ship
        128672145 => array(
            'feddropship_mkii_blackfriday_01'               => 'Black Friday',
            
            'feddropship_mkii_default_defaultpaintjob'      => 'Default',
            
            'feddropship_mkii_faction1_01'                  => 'Pirate Faction Red',
            'feddropship_mkii_faction1_02'                  => 'Pirate Faction Orange',
            'feddropship_mkii_faction1_03'                  => 'Pirate Faction Green',
            'feddropship_mkii_faction1_04'                  => 'Pirate Faction Rose',
            'feddropship_mkii_faction1_05'                  => 'Pirate Faction Blue',
            'feddropship_mkii_faction1_06'                  => 'Pirate Faction Purple',
            
            'feddropship_mkii_flatcolour_blue'              => null,
            'feddropship_mkii_flatcolour_green'             => null,
            'feddropship_mkii_flatcolour_grey'              => null,
            'feddropship_mkii_flatcolour_orange'            => null,
            'feddropship_mkii_flatcolour_red'               => null,
            'feddropship_mkii_flatcolour_white'             => null,
            'feddropship_mkii_flatcolour_yellow'            => null,
            
            'feddropship_mkii_metallic_chrome'              => 'Chrome',
            'feddropship_mkii_metallic_gold'                => 'Gold',
            
            'feddropship_mkii_militaire_dark_green'         => 'Military Dark Green',
            'feddropship_mkii_militaire_desert_sand'        => 'Military Desert Sand',
            'feddropship_mkii_militaire_earth_red'          => 'Military Earth Red',
            'feddropship_mkii_militaire_earth_yellow'       => 'Military Earth Yellow',
            'feddropship_mkii_militaire_forest_green'       => 'Military Marine Blue',
            'feddropship_mkii_militaire_sand'               => 'Military Sand',
            
            'feddropship_mkii_sudeep_sudeep'                => null,
            
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
        ),

        // Federal Corvette
        128049369 => array(
            'federation_corvette_blackfriday_01'            => 'Black Friday',
            
            'federation_corvette_default_defaultpaintjob'   => 'Default',
            
            'federation_corvette_metallic_chrome'           => 'Chrome',
            'federation_corvette_metallic_gold'             => 'Gold',
            'federation_corvette_metallic2_gold'            => 'Golden',
            
            'federation_corvette_militaire_dark_green'      => 'Military Dark Green',
            'federation_corvette_militaire_desert_sand'     => 'Military Desert Sand',
            'federation_corvette_militaire_earth_red'       => 'Military Earth Red',
            'federation_corvette_militaire_earth_yellow'    => 'Military Earth Yellow',
            'federation_corvette_militaire_forest_green'    => 'Military Marine Blue',
            'federation_corvette_militaire_sand'            => 'Military Sand',
            
            'federation_corvette_predator_red'              => 'Predator Red',
            'federation_corvette_predator_green'            => 'Predator Green',
            'federation_corvette_predator_teal'             => 'Predator Teal',
            'federation_corvette_predator_crimson'          => 'Predator Rose',
            'federation_corvette_predator_lime'             => 'Predator Lime',
            'federation_corvette_predator_blue'             => 'Predator Blue',
            
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
            
            'federation_corvette_vibrant_blue'              => 'Vibrant Blue',
            'federation_corvette_vibrant_green'             => 'Vibrant Green',
            'federation_corvette_vibrant_orange'            => 'Vibrant Orange',
            'federation_corvette_vibrant_purple'            => 'Vibrant Purple',
            'federation_corvette_vibrant_red'               => 'Vibrant Red',
            'federation_corvette_vibrant_yellow'            => 'Vibrant Yellow',
        ),

        // Federal Dropship
        128049321 => array(
            'feddropship_blackfriday_01'                    => 'Black Friday',
            
            'feddropship_default_defaultpaintjob'           => 'Default',
            
            'feddropship_faction1_01'                       => 'Pirate Faction Red',
            'feddropship_faction1_02'                       => 'Pirate Faction Orange',
            'feddropship_faction1_03'                       => 'Pirate Faction Green',
            'feddropship_faction1_04'                       => 'Pirate Faction Rose',
            'feddropship_faction1_05'                       => 'Pirate Faction Blue',
            'feddropship_faction1_06'                       => 'Pirate Faction Purple',
            
            'feddropship_flatcolour_blue'                   => null,
            'feddropship_flatcolour_green'                  => null,
            'feddropship_flatcolour_grey'                   => null,
            'feddropship_flatcolour_orange'                 => null,
            'feddropship_flatcolour_red'                    => null,
            'feddropship_flatcolour_white'                  => null,
            'feddropship_flatcolour_yellow'                 => null,
            
            'feddropship_metallic_chrome'                   => 'Chrome',
            'feddropship_metallic_gold'                     => 'Gold',
            
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
        ),

        // Federal Gunship
        128672152 => array(
            'federation_gunship_blackfriday_01'             => 'Black Friday',
            
            'federation_gunship_default_defaultpaintjob'    => 'Default',
            
            'federation_gunship_faction1_01'                => 'Pirate Faction Red',
            'federation_gunship_faction1_02'                => 'Pirate Faction Orange',
            'federation_gunship_faction1_03'                => 'Pirate Faction Green',
            'federation_gunship_faction1_04'                => 'Pirate Faction Rose',
            'federation_gunship_faction1_05'                => 'Pirate Faction Blue',
            'federation_gunship_faction1_06'                => 'Pirate Faction Purple',
            
            'federation_gunship_flatcolour_blue'            => null,
            'federation_gunship_flatcolour_green'           => null,
            'federation_gunship_flatcolour_grey'            => null,
            'federation_gunship_flatcolour_orange'          => null,
            'federation_gunship_flatcolour_red'             => null,
            'federation_gunship_flatcolour_white'           => null,
            'federation_gunship_flatcolour_yellow'          => null,
            
            'federation_gunship_metallic_chrome'            => 'Chrome',
            'federation_gunship_metallic_gold'              => 'Gold',
            'federation_gunship_metallic2_gold'             => 'Golden',
            
            'federation_gunship_militaire_dark_green'       => 'Military Dark Green',
            'federation_gunship_militaire_desert_sand'      => 'Military Desert Sand',
            'federation_gunship_militaire_earth_red'        => 'Military Earth Red',
            'federation_gunship_militaire_earth_yellow'     => 'Military Earth Yellow',
            'federation_gunship_militaire_forest_green'     => 'Military Marine Blue',
            'federation_gunship_militaire_sand'             => 'Military Sand',
            
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
        ),

        // Fer-de-Lance
        128049351 => array(
            'ferdelance_blackfriday_01'                     => 'Black Friday',
            
            'ferdelance_default_01'                         => null,
            'ferdelance_default_02'                         => null,
            'ferdelance_default_03'                         => null,
            
            'ferdelance_default_defaultpaintjob'            => 'Default',
            
            'ferdelance_faction1_01'                        => 'Pirate Faction Red',
            'ferdelance_faction1_02'                        => 'Pirate Faction Orange',
            'ferdelance_faction1_03'                        => 'Pirate Faction Green',
            'ferdelance_faction1_04'                        => 'Pirate Faction Rose',
            'ferdelance_faction1_05'                        => 'Pirate Faction Blue',
            'ferdelance_faction1_06'                        => 'Pirate Faction Purple',
            
            'ferdelance_flatcolour_blue'                    => null,
            'ferdelance_flatcolour_green'                   => null,
            'ferdelance_flatcolour_grey'                    => null,
            'ferdelance_flatcolour_orange'                  => null,
            'ferdelance_flatcolour_red'                     => null,
            'ferdelance_flatcolour_white'                   => null,
            'ferdelance_flatcolour_yellow'                  => null,
            
            'ferdelance_lavecon_lavecon'                    => 'Lavecon',
            
            'ferdelance_metallic_chrome'                    => 'Chrome',
            'ferdelance_metallic_gold'                      => 'Gold',
            'ferdelance_metallic2_gold'                     => 'Golden',
            
            'ferdelance_militaire_dark_green'               => 'Military Dark Green',
            'ferdelance_militaire_desert_sand'              => 'Military Desert Sand',
            'ferdelance_militaire_earth_red'                => 'Military Earth Red',
            'ferdelance_militaire_earth_yellow'             => 'Military Earth Yellow',
            'ferdelance_militaire_forest_green'             => 'Military Marine Blue',
            'ferdelance_militaire_sand'                     => 'Military Sand',
            
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
            'ferdelance_wireframe_02'                       => null,
            'ferdelance_wireframe_03'                       => null,
            'ferdelance_wireframe_04'                       => null,
            'ferdelance_wireframe_05'                       => null,
            'ferdelance_wireframe_06'                       => null,
        ),

        // Hauler
        128049261 => array(
            'hauler_blackfriday_01'                         => 'Black Friday',
            
            'hauler_default_01'                             => null,
            'hauler_default_02'                             => null,
            'hauler_default_03'                             => null,
            'hauler_default_51'                             => null,
            
            'hauler_default_defaultpaintjob'                => 'Default',
            
            'hauler_doublestripe_01'                        => 'Blue Terrain',
            'hauler_doublestripe_02'                        => 'Yellow Terrain',
            'hauler_doublestripe_03'                        => 'Black Terrain',
            
            'hauler_faction1_01'                            => 'Pirate Faction Red',
            'hauler_faction1_02'                            => 'Pirate Faction Orange',
            'hauler_faction1_03'                            => 'Pirate Faction Green',
            'hauler_faction1_04'                            => 'Pirate Faction Rose',
            'hauler_faction1_05'                            => 'Pirate Faction Blue',
            'hauler_faction1_06'                            => 'Pirate Faction Purple',
            
            'hauler_flatcolour_blue'                        => null,
            'hauler_flatcolour_green'                       => null,
            'hauler_flatcolour_grey'                        => null,
            'hauler_flatcolour_orange'                      => null,
            'hauler_flatcolour_red'                         => null,
            'hauler_flatcolour_white'                       => null,
            'hauler_flatcolour_yellow'                      => null,
            
            'hauler_metallic_chrome'                        => 'Chrome',
            'hauler_metallic_gold'                          => 'Gold',
            
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
            
            'hauler_wings_01'                               => null,
            'hauler_wings_02'                               => null,
            'hauler_wings_03'                               => null,
        ),

        // Imperial Clipper
        128049315 => array(
            'empiretrader_blackfriday_01'                   => 'Black Friday',
            
            'empiretrader_default_defaultpaintjob'          => 'Default',
            
            'empiretrader_faction1_01'                      => 'Pirate Faction Red',
            'empiretrader_faction1_02'                      => 'Pirate Faction Orange',
            'empiretrader_faction1_03'                      => 'Pirate Faction Green',
            'empiretrader_faction1_04'                      => 'Pirate Faction Rose',
            'empiretrader_faction1_05'                      => 'Pirate Faction Blue',
            'empiretrader_faction1_06'                      => 'Pirate Faction Purple',
            
            'empiretrader_flatcolour_blue'                  => null,
            'empiretrader_flatcolour_green'                 => null,
            'empiretrader_flatcolour_grey'                  => null,
            'empiretrader_flatcolour_orange'                => null,
            'empiretrader_flatcolour_red'                   => null,
            'empiretrader_flatcolour_white'                 => null,
            'empiretrader_flatcolour_yellow'                => null,
            
            'empiretrader_metallic_chrome'                  => 'Chrome',
            'empiretrader_metallic_gold'                    => 'Gold',
            
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
        ),

        // Imperial Courier
        128671223 => array(
            'empire_courier_blackfriday_01'                 => 'Black Friday',
            
            'empire_courier_default_defaultpaintjob'        => 'Default',
            
            'empire_courier_faction1_01'                    => 'Pirate Faction Red',
            'empire_courier_faction1_02'                    => 'Pirate Faction Orange',
            'empire_courier_faction1_03'                    => 'Pirate Faction Green',
            'empire_courier_faction1_04'                    => 'Pirate Faction Rose',
            'empire_courier_faction1_05'                    => 'Pirate Faction Blue',
            'empire_courier_faction1_06'                    => 'Pirate Faction Purple',
            
            'empire_courier_furrycat_furrycat'              => null,
            
            'empire_courier_metallic_chrome'                => 'Chrome',
            'empire_courier_metallic_gold'                  => 'Gold',
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
        ),

        // Imperial Cutter
        128049375 => array(
            'cutter_blackfriday_01'                         => 'Black Friday',
            
            'cutter_camo_01'                                => null,
            'cutter_camo_02'                                => null,
            'cutter_camo_03'                                => null,
            'cutter_camo_04'                                => null,
            'cutter_camo_05'                                => null,
            'cutter_camo_06'                                => null,
            
            'cutter_default_defaultpaintjob'                => 'Default',
            
            'cutter_faction1_01'                            => 'Pirate Faction Red',
            'cutter_faction1_02'                            => 'Pirate Faction Orange',
            'cutter_faction1_03'                            => 'Pirate Faction Green',
            'cutter_faction1_04'                            => 'Pirate Faction Rose',
            'cutter_faction1_05'                            => 'Pirate Faction Blue',
            'cutter_faction1_06'                            => 'Pirate Faction Purple',
            
            'cutter_metallic_chrome'                        => 'Chrome',
            'cutter_metallic_gold'                          => 'Gold',
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
        ),

        // Imperial Eagle
        128672138 => array(
            'empire_eagle_blackfriday_01'                   => 'Black Friday',
            
            'empire_eagle_camo_01'                          => null,
            'empire_eagle_camo_02'                          => null,
            'empire_eagle_camo_03'                          => null,
            
            'empire_eagle_crimson'                          => null,
            
            'empire_eagle_default_01'                       => null,
            'empire_eagle_default_02'                       => null,
            'empire_eagle_default_03'                       => null,
            'empire_eagle_default_04'                       => null,
            
            'empire_eagle_default_defaultpaintjob'          => 'Default',
            
            'empire_eagle_doublestripe_01'                  => null,
            'empire_eagle_doublestripe_02'                  => null,
            'empire_eagle_doublestripe_03'                  => null,
            'empire_eagle_doublestripe_51'                  => null,
            'empire_eagle_doublestripe_52'                  => null,
            'empire_eagle_doublestripe_53'                  => null,
            
            'empire_eagle_faction1_01'                      => 'Pirate Faction Red',
            'empire_eagle_faction1_02'                      => 'Pirate Faction Orange',
            'empire_eagle_faction1_03'                      => 'Pirate Faction Green',
            'empire_eagle_faction1_04'                      => 'Pirate Faction Rose',
            'empire_eagle_faction1_05'                      => 'Pirate Faction Blue',
            'empire_eagle_faction1_06'                      => 'Pirate Faction Purple',
            
            'empire_eagle_flatcolour_blue'                  => null,
            'empire_eagle_flatcolour_green'                 => null,
            'empire_eagle_flatcolour_grey'                  => null,
            'empire_eagle_flatcolour_orange'                => null,
            'empire_eagle_flatcolour_red'                   => null,
            'empire_eagle_flatcolour_white'                 => null,
            'empire_eagle_flatcolour_yellow'                => null,
            
            'empire_eagle_hotrod_01'                        => null,
            'empire_eagle_hotrod_02'                        => null,
            'empire_eagle_hotrod_03'                        => null,
            
            'empire_eagle_metallic_chrome'                  => 'Chrome',
            'empire_eagle_metallic_gold'                    => 'Gold',
            
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
            
            'empire_eagle_stripe1_01'                       => null,
            'empire_eagle_stripe1_02'                       => null,
            'empire_eagle_stripe1_03'                       => null,
            'empire_eagle_stripe1_blue'                     => null,
            'empire_eagle_stripe1_green'                    => null,
            'empire_eagle_stripe1_red'                      => null,
            
            'empire_eagle_tactical_blue'                    => 'Tactical Cobalt',
            'empire_eagle_tactical_brown'                   => 'Tactical Khaki',
            'empire_eagle_tactical_green'                   => 'Tactical Olive',
            'empire_eagle_tactical_grey'                    => 'Tactical Graphite',
            'empire_eagle_tactical_red'                     => 'Tactical Crimson',
            'empire_eagle_tactical_white'                   => 'Tactical Ice',
            
            'empire_eagle_thirds_01'                        => null,
            'empire_eagle_thirds_02'                        => null,
            'empire_eagle_thirds_03'                        => null,
            
            'empire_eagle_vibrant_blue'                     => 'Vibrant Blue',
            'empire_eagle_vibrant_green'                    => 'Vibrant Green',
            'empire_eagle_vibrant_orange'                   => 'Vibrant Orange',
            'empire_eagle_vibrant_purple'                   => 'Vibrant Purple',
            'empire_eagle_vibrant_red'                      => 'Vibrant Red',
            'empire_eagle_vibrant_yellow'                   => 'Vibrant Yellow',
        ),

        // Keelback
        128672269 => array(
            'independant_trader_blackfriday_01'             => 'Black Friday',
            
            'independant_trader_default_defaultpaintjob'    => 'Default',
            
            'independant_trader_flatcolour_blue'            => null,
            'independant_trader_flatcolour_green'           => null,
            'independant_trader_flatcolour_grey'            => null,
            'independant_trader_flatcolour_orange'          => null,
            'independant_trader_flatcolour_red'             => null,
            'independant_trader_flatcolour_white'           => null,
            'independant_trader_flatcolour_yellow'          => null,
            
            'independant_trader_metallic_chrome'            => 'Chrome',
            'independant_trader_metallic_gold'              => 'Gold',
            
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
        ),

        // Orca
        128049327 => array(
            'orca_blackfriday_01'                           => 'Black Friday',
            
            'orca_default_defaultpaintjob'                  => 'Default',
            
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
            
            'orca_flatcolour_blue'                          => null,
            'orca_flatcolour_green'                         => null,
            'orca_flatcolour_grey'                          => null,
            'orca_flatcolour_orange'                        => null,
            'orca_flatcolour_red'                           => null,
            'orca_flatcolour_white'                         => null,
            'orca_flatcolour_yellow'                        => null,
            
            'orca_metallic_chrome'                          => 'Chrome',
            'orca_metallic_gold'                            => 'Gold',
            
            'orca_militaire_dark_green'                     => 'Military Dark Green',
            'orca_militaire_desert_sand'                    => 'Military Desert Sand',
            'orca_militaire_earth_red'                      => 'Military Earth Red',
            'orca_militaire_earth_yellow'                   => 'Military Earth Yellow',
            'orca_militaire_forest_green'                   => 'Military Marine Blue',
            'orca_militaire_sand'                           => 'Military Sand',
            
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
        ),

        // Python
        128049339 => array(
            'python_blackfriday_01'                         => 'Black Friday',
            
            'python_corrosive_01'                           => 'Corroded 1',
            'python_corrosive_02'                           => 'Corroded 2',
            'python_corrosive_03'                           => 'Corroded 3',
            'python_corrosive_04'                           => 'Corroded 4',
            'python_corrosive_05'                           => 'Corroded 5',
            'python_corrosive_06'                           => 'Corroded 6',
            
            'python_default_defaultpaintjob'                => 'Default',
            
            'python_faction1_01'                            => 'Pirate Faction Red',
            'python_faction1_02'                            => 'Pirate Faction Orange',
            'python_faction1_03'                            => 'Pirate Faction Green',
            'python_faction1_04'                            => 'Pirate Faction Rose',
            'python_faction1_05'                            => 'Pirate Faction Blue',
            'python_faction1_06'                            => 'Pirate Faction Purple',
            
            'python_flatcolour_blue'                        => null,
            'python_flatcolour_green'                       => null,
            'python_flatcolour_grey'                        => null,
            'python_flatcolour_orange'                      => null,
            'python_flatcolour_red'                         => null,
            'python_flatcolour_white'                       => null,
            'python_flatcolour_yellow'                      => null,
            
            'python_luminous_stripe_01'                     => 'Pulse Green',
            'python_luminous_stripe_02'                     => 'Pulse Blue',
            'python_luminous_stripe_03'                     => 'Pulse Purple',
            'python_luminous_stripe_04'                     => 'Pulse Red',
            'python_luminous_stripe_05'                     => 'Pulse Orange',
            'python_luminous_stripe_06'                     => 'Pulse White',
            
            'python_metallic_chrome'                        => 'Chrome',
            'python_metallic_gold'                          => 'Gold',
            'python_metallic2_gold'                         => 'Golden',
            
            'python_militaire_dark_green'                   => 'Military Dark Green',
            'python_militaire_desert_sand'                  => 'Military Desert Sand',
            'python_militaire_earth_red'                    => 'Military Earth Red',
            'python_militaire_earth_yellow'                 => 'Military Earth Yellow',
            'python_militaire_forest_green'                 => 'Militray Marine Blue',
            'python_militaire_sand'                         => 'Military Sand',
            
            'python_searchrescue_searchrescue'              => null,
            
            'python_squadron_black'                         => 'Squadron Black',
            'python_squadron_blue'                          => 'Squadron Blue',
            'python_squadron_gold'                          => 'Squadron Shadow',
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
            'python_wireframe_02'                           => null,
            'python_wireframe_03'                           => null,
            'python_wireframe_04'                           => null,
            'python_wireframe_05'                           => null,
            'python_wireframe_06'                           => null,
        ),

        // Sidewinder
        128049249 => array(
            'sidewinder_alpha_01'                           => null,
            
            'sidewinder_blackfriday_01'                     => 'Black Friday',
            
            'sidewinder_camo_01'                            => 'Urban Camo',
            'sidewinder_camo_02'                            => 'Polar Camo',
            'sidewinder_camo_03'                            => 'Jungle Camo',
            'sidewinder_camo_green'                         => null,
            
            'sidewinder_default_01'                         => null,
            'sidewinder_default_02'                         => 'Blue Colorado',
            'sidewinder_default_03'                         => 'Green Colorado',
            'sidewinder_default_04'                         => 'Red Colorado',
            'sidewinder_default_05'                         => null,
            'sidewinder_default_06'                         => null,
            'sidewinder_default_07'                         => null,
            'sidewinder_default_08'                         => null,
            'sidewinder_default_09'                         => null,
            'sidewinder_default_10'                         => null,
            
            'sidewinder_default_defaultpaintjob'            => 'Default',
            
            'sidewinder_doublestripe_01'                    => null,
            'sidewinder_doublestripe_02'                    => null,
            'sidewinder_doublestripe_03'                    => null,
            'sidewinder_doublestripe_04'                    => null,
            'sidewinder_doublestripe_05'                    => 'Red Sonoran',
            'sidewinder_doublestripe_06'                    => null,
            'sidewinder_doublestripe_07'                    => 'Green Sonoran',
            'sidewinder_doublestripe_08'                    => 'Blue Sonoran',
            
            'sidewinder_faction1_01'                        => 'Pirate Faction Red',
            'sidewinder_faction1_02'                        => 'Pirate Faction Orange',
            'sidewinder_faction1_03'                        => 'Pirate Faction Green',
            'sidewinder_faction1_04'                        => 'Pirate Faction Rose',
            'sidewinder_faction1_05'                        => 'Pirate Faction Blue',
            'sidewinder_faction1_06'                        => 'Pirate Faction Purple',
            
            'sidewinder_festive_blue'                       => 'Festive Blue',
            'sidewinder_festive_green'                      => 'Festive Green',
            'sidewinder_festive_purple'                     => 'Festive Purple',
            'sidewinder_festive_red'                        => 'Festive Red',
            'sidewinder_festive_silver'                     => 'Festive Black',
            'sidewinder_festive_white'                      => 'Festive White',
            
            'sidewinder_flatcolour_blue'                    => null,
            'sidewinder_flatcolour_green'                   => null,
            'sidewinder_flatcolour_grey'                    => null,
            'sidewinder_flatcolour_orange'                  => null,
            'sidewinder_flatcolour_red'                     => null,
            'sidewinder_flatcolour_white'                   => null,
            'sidewinder_flatcolour_yellow'                  => null,
            
            'sidewinder_gradient1_01'                       => null,
            'sidewinder_gradient1_02'                       => null,
            'sidewinder_gradient1_03'                       => null,
            
            'sidewinder_hotrod_01'                          => 'Red Ignition',
            'sidewinder_hotrod_02'                          => null,
            'sidewinder_hotrod_03'                          => 'Orange Ignition',
            
            'sidewinder_merc'                               => 'Mercenary',
            
            'sidewinder_mercenary_01'                       => null,
            'sidewinder_mercenary_02'                       => null,
            'sidewinder_mercenary_03'                       => null,
            'sidewinder_mercenary_04'                       => null,
            
            'sidewinder_metallic_chrome'                    => 'Chrome',
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
            'sidewinder_paxprime_paxprime'                  => 'PAX Prime',
            
            'sidewinder_qa'                                 => null,
            'sidewinder_qa2'                                => null,
            'sidewinder_qa2_01'                             => null,
            'sidewinder_qa2_02'                             => null,
            'sidewinder_qa2_03'                             => null,
            'sidewinder_qa2_qa2'                            => null,
            'sidewinder_qa_01'                              => null,
            'sidewinder_qa_02'                              => null,
            'sidewinder_qa_03'                              => null,
            'sidewinder_qa_qa'                              => null,
            
            'sidewinder_specialeffect_01'                   => null,
            
            'sidewinder_squadron_black'                     => 'Squadron Black',
            'sidewinder_squadron_blue'                      => 'Squadron Blue',
            'sidewinder_squadron_gold'                      => 'Squadron Shadow',
            'sidewinder_squadron_green'                     => 'Squadron Green',
            'sidewinder_squadron_orange'                    => 'Squadron Orange',
            'sidewinder_squadron_red'                       => 'Squadron Red',
            
            'sidewinder_stripe1_01'                         => null,
            'sidewinder_stripe1_02'                         => null,
            'sidewinder_stripe1_03'                         => null,
            'sidewinder_stripe1_04'                         => null,
            'sidewinder_stripe1_05'                         => null,
            'sidewinder_stripe1_06'                         => null,
            'sidewinder_stripe1_07'                         => null,
            'sidewinder_stripe1_red'                        => null,
            
            'sidewinder_tactical_blue'                      => 'Tactical Cobalt',
            'sidewinder_tactical_brown'                     => 'Tactical Khaki',
            'sidewinder_tactical_green'                     => 'Tactical Olive',
            'sidewinder_tactical_grey'                      => 'Tactical Graphite',
            'sidewinder_tactical_red'                       => 'Tactical Crimson',
            'sidewinder_tactical_white'                     => 'Tactical Ice',
            
            'sidewinder_thirds_01'                          => 'Red Mojave',
            'sidewinder_thirds_02'                          => null,
            'sidewinder_thirds_03'                          => null,
            'sidewinder_thirds_04'                          => null,
            'sidewinder_thirds_05'                          => null,
            'sidewinder_thirds_06'                          => 'Blue Mojave',
            'sidewinder_thirds_07'                          => 'Orange Mojave',
            
            'sidewinder_vibrant_blue'                       => 'Vibrant Blue',
            'sidewinder_vibrant_green'                      => 'Vibrant Green',
            'sidewinder_vibrant_orange'                     => 'Vibrant Orange',
            'sidewinder_vibrant_purple'                     => 'Vibrant Purple',
            'sidewinder_vibrant_red'                        => 'Vibrant Red',
            'sidewinder_vibrant_yellow'                     => 'Vibrant Yellow',
        ),

        // Type-6 Transporter
        128049285 => array(
            'type6_blackfriday_01'                          => 'Black Friday',
            
            'type6_default_defaultpaintjob'                 => 'Default',
            
            'type6_flatcolour_blue'                         => null,
            'type6_flatcolour_green'                        => null,
            'type6_flatcolour_grey'                         => null,
            'type6_flatcolour_orange'                       => null,
            'type6_flatcolour_red'                          => null,
            'type6_flatcolour_white'                        => null,
            'type6_flatcolour_yellow'                       => null,
            
            'type6_foss_bluegrey'                           => 'Turbulence Blue Grey',
            'type6_foss_blueyellow'                         => 'Turbulence Blue Yellow',
            'type6_foss_orangewhite'                        => 'Turbulence Grey White',
            'type6_foss_purplewhite'                        => 'Turbulence Purple White',
            'type6_foss_whitered'                           => 'Turbulence White Red',
            'type6_foss_yellowblack'                        => 'Turbulence Yellow Black',
            
            'type6_metallic_chrome'                         => 'Chrome',
            'type6_metallic_gold'                           => 'Gold',
            
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
            
            'type6_tiger_bengal'                            => null,
            'type6_tiger_black'                             => null,
            'type6_tiger_desert'                            => null,
            'type6_tiger_javan'                             => null,
            'type6_tiger_slate'                             => null,
            'type6_tiger_white'                             => null,
            
            'type6_vibrant_blue'                            => 'Vibrant Blue',
            'type6_vibrant_green'                           => 'Vibrant Green',
            'type6_vibrant_orange'                          => 'Vibrant Orange',
            'type6_vibrant_purple'                          => 'Vibrant Purple',
            'type6_vibrant_red'                             => 'Vibrant Red',
            'type6_vibrant_yellow'                          => 'Vibrant Yellow',
        ),

        // Type-7 Transporter
        128049297 => array(
            'type7_blackfriday_01'                          => 'Black Friday',
            
            'type7_default_defaultpaintjob'                 => 'Default',
            
            'type7_flatcolour_blue'                         => null,
            'type7_flatcolour_green'                        => null,
            'type7_flatcolour_grey'                         => null,
            'type7_flatcolour_orange'                       => null,
            'type7_flatcolour_red'                          => null,
            'type7_flatcolour_white'                        => null,
            'type7_flatcolour_yellow'                       => null,
            
            'type7_metallic_chrome'                         => 'Chrome',
            'type7_metallic_gold'                           => 'Gold',
            
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
        ),

        // Type-9 Heavy
        128049333 => array(
            'type9_blackfriday_01'                          => 'Black Friday',
            
            'type9_camoblocky_01'                           => null,
            'type9_camoblocky_02'                           => null,
            'type9_camoblocky_03'                           => null,
            'type9_camoblocky_04'                           => null,
            
            'type9_camojagged_01'                           => null,
            'type9_camojagged_02'                           => null,
            'type9_camojagged_03'                           => null,
            'type9_camojagged_04'                           => null,
            
            'type9_camolightning_01'                        => null,
            'type9_camolightning_02'                        => null,
            'type9_camolightning_03'                        => null,
            'type9_camolightning_04'                        => null,
            
            'type9_camorough_01'                            => null,
            'type9_camorough_02'                            => null,
            'type9_camorough_03'                            => null,
            'type9_camorough_04'                            => null,
            
            'type9_camostripes_01'                          => null,
            'type9_camostripes_02'                          => null,
            'type9_camostripes_03'                          => null,
            'type9_camostripes_04'                          => null,
            
            'type9_camowobble_01'                           => null,
            'type9_camowobble_02'                           => null,
            'type9_camowobble_03'                           => null,
            'type9_camowobble_04'                           => null,
            
            'type9_cow_01'                                  => null,
            'type9_cow_02'                                  => null,
            'type9_cow_03'                                  => null,
            'type9_cow_04'                                  => null,
            
            'type9_default_01'                              => null,
            'type9_default_02'                              => null,
            'type9_default_03'                              => null,
            'type9_default_04'                              => null,
            
            'type9_default_defaultpaintjob'                 => 'Default',
            
            'type9_edgelines01_01'                          => null,
            'type9_edgelines01_02'                          => null,
            'type9_edgelines01_03'                          => null,
            'type9_edgelines01_04'                          => null,
            
            'type9_flames01_01'                             => null,
            'type9_flames01_02'                             => null,
            'type9_flames01_03'                             => null,
            'type9_flames01_04'                             => null,
            
            'type9_flames02_01'                             => null,
            'type9_flames02_02'                             => null,
            'type9_flames02_03'                             => null,
            'type9_flames02_04'                             => null,
            
            'type9_flatcolour_blue'                         => null,
            'type9_flatcolour_green'                        => null,
            'type9_flatcolour_grey'                         => null,
            'type9_flatcolour_orange'                       => null,
            'type9_flatcolour_red'                          => null,
            'type9_flatcolour_white'                        => null,
            'type9_flatcolour_yellow'                       => null,
            
            'type9_hazardstripes01_01'                      => null,
            'type9_hazardstripes01_02'                      => null,
            'type9_hazardstripes01_03'                      => null,
            'type9_hazardstripes01_04'                      => null,
            
            'type9_lightning_01'                            => null,
            'type9_lightning_02'                            => null,
            'type9_lightning_03'                            => null,
            'type9_lightning_04'                            => null,
            
            'type9_metallic_chrome'                         => 'Chrome',
            'type9_metallic_gold'                           => 'Gold',
            
            'type9_militaire_dark_green'                    => 'Military Dark Green',
            'type9_militaire_desert_sand'                   => 'Military Desert Sand',
            'type9_militaire_earth_red'                     => 'Military Earth Red',
            'type9_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'type9_militaire_forest_green'                  => 'Military Marine Blue',
            'type9_militaire_sand'                          => 'Military Sand',
            
            'type9_rorschach_01'                            => null,
            'type9_rorschach_02'                            => null,
            'type9_rorschach_03'                            => null,
            'type9_rorschach_04'                            => null,
            
            'type9_scratched01_01'                          => null,
            'type9_scratched01_02'                          => null,
            'type9_scratched01_03'                          => null,
            'type9_scratched01_04'                          => null,
            
            'type9_sections01_01'                           => null,
            'type9_sections01_02'                           => null,
            'type9_sections01_03'                           => null,
            'type9_sections01_04'                           => null,
            
            'type9_sections02_01'                           => null,
            'type9_sections02_02'                           => null,
            'type9_sections02_03'                           => null,
            'type9_sections02_04'                           => null,
            
            'type9_sections03_01'                           => null,
            'type9_sections03_02'                           => null,
            'type9_sections03_03'                           => null,
            'type9_sections03_04'                           => null,
            
            'type9_sidesections01_01'                       => null,
            'type9_sidesections01_02'                       => null,
            'type9_sidesections01_03'                       => null,
            'type9_sidesections01_04'                       => null,
            
            'type9_squadron_black'                          => 'Squadron Black',
            'type9_squadron_blue'                           => 'Squadron Blue',
            'type9_squadron_gold'                           => 'Squadron Shadow',
            'type9_squadron_green'                          => 'Squadron Green',
            'type9_squadron_orange'                         => 'Squadron Orange',
            'type9_squadron_red'                            => 'Squadron Red',
            
            'type9_stripe01_01'                             => null,
            'type9_stripe01_02'                             => null,
            'type9_stripe01_03'                             => null,
            'type9_stripe01_04'                             => null,
            'type9_stripe01_05'                             => null,
            
            'type9_stripe02_01'                             => null,
            'type9_stripe02_02'                             => null,
            'type9_stripe02_03'                             => null,
            'type9_stripe02_04'                             => null,
            'type9_stripe02_05'                             => null,
            
            'type9_tactical_blue'                           => 'Tactical Cobalt',
            'type9_tactical_brown'                          => 'Tactical Khaki',
            'type9_tactical_green'                          => 'Tactical Olive',
            'type9_tactical_grey'                           => 'Tactical Graphite',
            'type9_tactical_red'                            => 'Tactical Crimson',
            'type9_tactical_white'                          => 'Tactical Ice',
            
            'type9_thinlines01_01'                          => null,
            'type9_thinlines01_02'                          => null,
            'type9_thinlines01_03'                          => null,
            'type9_thinlines01_04'                          => null,
            
            'type9_vibrant_blue'                            => 'Vibrant Blue',
            'type9_vibrant_green'                           => 'Vibrant Green',
            'type9_vibrant_orange'                          => 'Vibrant Orange',
            'type9_vibrant_purple'                          => 'Vibrant Purple',
            'type9_vibrant_red'                             => 'Vibrant Red',
            'type9_vibrant_yellow'                          => 'Vibrant Yellow',
        ),

        // Viper MkIII
        128049273 => array(
            'viper_blackfriday_01'                          => 'Black Friday',
            
            'viper_default_01'                              => 'Red Copperhead',
            'viper_default_02'                              => null,
            'viper_default_03'                              => 'Orange Copperhead',
            'viper_default_04'                              => null,
            'viper_default_05'                              => null,
            
            'viper_default_defaultpaintjob'                 => 'Default',
            
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
            
            'viper_flatcolour_blue'                         => null,
            'viper_flatcolour_green'                        => null,
            'viper_flatcolour_grey'                         => null,
            'viper_flatcolour_orange'                       => null,
            'viper_flatcolour_red'                          => null,
            'viper_flatcolour_white'                        => null,
            'viper_flatcolour_yellow'                       => null,
            
            'viper_kickstartermc'                           => null,
            'viper_kickstartermcv2'                         => null,
            'viper_kickstartermcv2_kickstartermcv2'         => null,
            
            'viper_merc'                                    => 'Mercenary',
            
            'viper_mercenary_01'                            => null,
            'viper_mercenary_02'                            => null,
            'viper_mercenary_03'                            => null,
            'viper_mercenary_04'                            => null,
            
            'viper_metallic_chrome'                         => 'Chrome',
            'viper_metallic_gold'                           => 'Gold',
            'viper_metallic2_gold'                          => 'Golden',
            
            'viper_militaire_dark_green'                    => 'Military Dark Green',
            'viper_militaire_desert_sand'                   => 'Military Desert Sand',
            'viper_militaire_earth_red'                     => 'Military Earth Red',
            'viper_militaire_earth_yellow'                  => 'Military Earth Yellow',
            'viper_militaire_forest_green'                  => 'Military Marine Blue',
            'viper_militaire_sand'                          => 'Military Sand',
            
            'viper_shockwave_01'                            => null,
            'viper_shockwave_02'                            => null,
            'viper_shockwave_03'                            => null,
            'viper_shockwave_04'                            => null,
            'viper_shockwave_05'                            => null,
            'viper_shockwave_06'                            => null,
            
            'viper_squadron_black'                          => 'Squadron Black',
            'viper_squadron_blue'                           => 'Squadron Blue',
            'viper_squadron_gold'                           => 'Squadron Shadow',
            'viper_squadron_green'                          => 'Squadron Green',
            'viper_squadron_orange'                         => 'Squadron Orange',
            'viper_squadron_red'                            => 'Squadron Red',
            
            'viper_stefanos_01'                             => null,
            
            'viper_stripe1_01'                              => 'Grey Ridgenose',
            'viper_stripe1_02'                              => 'Green Ridgenose',
            'viper_stripe1_03'                              => null,
            'viper_stripe1_04'                              => null,
            
            'viper_stripe2_01'                              => null,
            'viper_stripe2_02'                              => 'Blue Sidestripe',
            'viper_stripe2_03'                              => null,
            'viper_stripe2_04'                              => 'Shadow Sidestripe',
            'viper_stripe2_51'                              => null,
            'viper_stripe2_52'                              => null,
            
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
            'viper_wireframe_02'                            => null,
            'viper_wireframe_03'                            => null,
            'viper_wireframe_04'                            => null,
            'viper_wireframe_05'                            => null,
            'viper_wireframe_06'                            => null,
        ),

        // Viper MkIV
        128672255 => array(
            'viper_mkiv_blackfriday_01'                     => 'Black Friday',
            
            'viper_mkiv_default_01'                         => null,
            'viper_mkiv_default_02'                         => null,
            'viper_mkiv_default_03'                         => null,
            'viper_mkiv_default_04'                         => null,
            'viper_mkiv_default_05'                         => null,
            
            'viper_mkiv_default_defaultpaintjob'            => 'Default',
            
            'viper_mkiv_faction1_01'                        => 'Pirate Faction Red',
            'viper_mkiv_faction1_02'                        => 'Pirate Faction Orange',
            'viper_mkiv_faction1_03'                        => 'Pirate Faction Green',
            'viper_mkiv_faction1_04'                        => 'Pirate Faction Rose',
            'viper_mkiv_faction1_05'                        => 'Pirate Faction Blue',
            'viper_mkiv_faction1_06'                        => 'Pirate Faction Purple',
            
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
            
            'viper_mkiv_flatcolour_blue'                    => null,
            'viper_mkiv_flatcolour_green'                   => null,
            'viper_mkiv_flatcolour_grey'                    => null,
            'viper_mkiv_flatcolour_orange'                  => null,
            'viper_mkiv_flatcolour_red'                     => null,
            'viper_mkiv_flatcolour_white'                   => null,
            'viper_mkiv_flatcolour_yellow'                  => null,
            
            'viper_mkiv_mercenary_01'                       => null,
            'viper_mkiv_mercenary_02'                       => null,
            'viper_mkiv_mercenary_03'                       => null,
            'viper_mkiv_mercenary_04'                       => null,
            
            'viper_mkiv_metallic_chrome'                    => 'Chrome',
            'viper_mkiv_metallic_gold'                      => 'Gold',
            
            'viper_mkiv_militaire_dark_green'               => 'Military Dark Green',
            'viper_mkiv_militaire_desert_sand'              => 'Military Desert Sand',
            'viper_mkiv_militaire_earth_red'                => 'Military Earth Red',
            'viper_mkiv_militaire_earth_yellow'             => 'Military Earth Yellow',
            'viper_mkiv_militaire_forest_green'             => 'Military Marine Blue',
            'viper_mkiv_militaire_sand'                     => 'Military Sand',
            
            'viper_mkiv_shockwave_01'                       => null,
            'viper_mkiv_shockwave_02'                       => null,
            'viper_mkiv_shockwave_03'                       => null,
            'viper_mkiv_shockwave_04'                       => null,
            'viper_mkiv_shockwave_05'                       => null,
            'viper_mkiv_shockwave_06'                       => null,
            
            'viper_mkiv_squadron_black'                     => 'Squadron Black',
            'viper_mkiv_squadron_blue'                      => 'Squadron Blue',
            'viper_mkiv_squadron_gold'                      => 'Squadron Shadow',
            'viper_mkiv_squadron_green'                     => 'Squadron Green',
            'viper_mkiv_squadron_orange'                    => 'Squadron Orange',
            'viper_mkiv_squadron_red'                       => 'Squadron Red',
            
            'viper_mkiv_stripe1_01'                         => null,
            'viper_mkiv_stripe1_02'                         => null,
            'viper_mkiv_stripe1_03'                         => null,
            'viper_mkiv_stripe1_04'                         => null,
            
            'viper_mkiv_stripe2_01'                         => null,
            'viper_mkiv_stripe2_02'                         => null,
            'viper_mkiv_stripe2_03'                         => null,
            'viper_mkiv_stripe2_04'                         => null,
            'viper_mkiv_stripe2_51'                         => null,
            'viper_mkiv_stripe2_52'                         => null,
            
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
        ),

        // Vulture
        128049309 => array(
            'vulture_bartecki_bartecki'                     => 'Flash',
            
            'vulture_blackfriday_01'                        => 'Black Friday',
            
            'vulture_default_defaultpaintjob'               => 'Default',
            
            'vulture_faction1_01'                           => 'Pirate Faction Red',
            'vulture_faction1_02'                           => 'Pirate Faction Orange',
            'vulture_faction1_03'                           => 'Pirate Faction Green',
            'vulture_faction1_04'                           => 'Pirate Faction Rose',
            'vulture_faction1_05'                           => 'Pirate Faction Blue',
            'vulture_faction1_06'                           => 'Pirate Faction Purple',
            
            'vulture_flatcolour_blue'                       => null,
            'vulture_flatcolour_green'                      => null,
            'vulture_flatcolour_grey'                       => null,
            'vulture_flatcolour_orange'                     => null,
            'vulture_flatcolour_red'                        => null,
            'vulture_flatcolour_white'                      => null,
            'vulture_flatcolour_yellow'                     => null,
            
            'vulture_gamescom_gamescom'                     => 'Gamescom',
            
            'vulture_lavecon_lavecon'                       => 'Lavecon',
            
            'vulture_metallic_chrome'                       => 'Chrome',
            'vulture_metallic_gold'                         => 'Gold',
            
            'vulture_militaire_dark_green'                  => 'Military Dark Green',
            'vulture_militaire_desert_sand'                 => 'Military Desert Sand',
            'vulture_militaire_earth_red'                   => 'Military Earth Red',
            'vulture_militaire_earth_yellow'                => 'Military Earth Yellow',
            'vulture_militaire_forest_green'                => 'Military Marine Blue',
            'vulture_militaire_sand'                        => 'Military Sand',
            
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
            
            'vulture_wireframe_01'                          => 'Wireframe',
            'vulture_wireframe_02'                          => null,
            'vulture_wireframe_03'                          => null,
            'vulture_wireframe_04'                          => null,
            'vulture_wireframe_05'                          => null,
            'vulture_wireframe_06'                          => null,
        ),
    ];
}