<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Codex;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
        11010                       => 'O Type Star',
            11011                       => 'O Type',
            11012                       => 'O Type Giant',
            11013                       => 'O Type Supergiant',
        11020                       => 'B Type Star',
            11021                       => 'B Type',
            11022                       => 'B Type Giant',
            11023                       => 'B Type Supergiant',
        11030                       => 'A Type Star',
            11031                       => 'A Type',
            11032                       => 'A Type Giant',
            11033                       => 'A Type Supergiant',
        11040                       => 'F Type Star',
            11041                       => 'F Type',
            11042                       => 'F Type Giant',
            11043                       => 'F Type Supergiant',
        11050                       => 'G Type Star',
            11051                       => 'G Type',
            11052                       => 'G Type Giant',
            11053                       => 'G Type Supergiant',
        11060                       => 'K Type Star',
            11061                       => 'K Type',
            11062                       => 'K Type Giant',
            11063                       => 'K Type Supergiant',
        11070                       => 'M Type Star',
            11071                       => 'M Type',
            11072                       => 'M Type Giant',
            11073                       => 'M Type Supergiant',
        11080                       => 'L Type Star',
            11081                       => 'L Type',
        11090                       => 'T Type Star',
            11091                       => 'T Type',
        11100                       => 'T Tauri Type Star',
            11101                       => 'T Tauri Type',
        11110                       => 'AEBE Type Star',
            11111                       => 'AEBE Type',
        11120                       => 'Y Type Star',
            11121                       => 'Y Type',
        11130                       => 'C Type Star',
            11131                       => 'C Type',
            11132                       => 'C Type Giant',
            11133                       => 'C Type Supergiant',
            11134                       => 'C Type Hypergiant',
        11140                       => 'CN Type Star',
            11142                       => 'CN Type Giant',
        11150                       => 'CJ Type Star',
            11152                       => 'CJ Type Giant',
        11160                       => 'MS Type Star',
            11162                       => 'MS Type Giant',
        11170                       => 'S Type Star',
            11171                       => 'S Type',
            11172                       => 'S Type Giant',
        11180                       => 'Wolf-Rayet Star',
            11181                       => 'W Type',
            11183                       => 'WC Type',
            11184                       => 'WN Type',
            11185                       => 'WNC Type',
            11186                       => 'WO Type',
        11190                       => 'White Dwarf Star',
            11191                       => 'D Type Star',
            11192                       => 'DA Type Star',
            11194                       => 'DAB Type Star',
            11196                       => 'DAV Type Star',
            11197                       => 'DAZ Type Star',
            11198                       => 'DB Type Star',
            11199                       => 'DBV Type Star',
            11200                       => 'DBZ Type Star',
            11204                       => 'DO Type Star',
            11205                       => 'DOV Type Star',
            11206                       => 'DQ Type Star',
        11221                       => 'Neutron Star',
        11231                       => 'Black Hole',
        11241                       => 'Supermassive Black Hole',



        12010                       => 'Water Giant planet',
            12011                       => 'Standard Gas Giant',
        12030                       => 'Gas giant planet with water-based life',
            12031                       => 'Standard Gas Giant',
            12032                       => 'Green gas giant',
        12050                       => 'Gas giant planet with ammonia-based life',
            12051                       => 'Standard Gas Giant',
        12070                       => 'Class I gas giant planet',
            12071                       => 'Standard Gas Giant',
        12090                       => 'Class II gas giant planet',
            12091                       => 'Standard Gas Giant',
        12110                       => 'Class III gas giant planet',
            12111                       => 'Standard Gas Giant',
        12130                       => 'Class IV gas giant planet',
            12131                       => 'Standard Gas Giant',
        12150                       => 'Class V gas giant planet',
            12151                       => 'Standard Gas Giant',
        12170                       => 'Helium Gas Giant planet',
            12171                       => 'Standard Gas Giant',
        12190                       => 'Helium-Rich Gas Giant planet',
            12191                       => 'Standard Gas Giant',



        13011                       => 'Earth-Like Planet',
        13020                       => 'Ammonia Planet',
            13021                       => 'Non Terraformable',
        13030                       => 'Water planet',
            13031                       => 'Non Terraformable',
            13032                       => 'Terraformable',
        13040                       => 'Metal-Rich planet with no atmosphere',
            13041                       => 'Non Terraformable',
        13050                       => 'High Metal Content planet with no atmosphere',
            13051                       => 'Non Terraformable',
            13052                       => 'Terraformable',
        13060                       => 'Rocky planet with no atmosphere',
            13061                       => 'Non Terraformable',
            13062                       => 'Terraformable',
        13070                       => 'Rocky Ice planet with no atmosphere',
            13071                       => 'Non Terraformable',
        13080                       => 'Ice planet with no atmosphere',
            13081                       => 'Non Terraformable',
        13090                       => 'Metal-Rich planet with atmosphere',
            13091                       => 'Non Terraformable',
            13092                       => 'Terraformable',
        13100                       => 'High Metal Content planet with atmosphere',
            13101                       => 'Non Terraformable',
            13102                       => 'Terraformable',
        13110                       => 'Rocky planet with atmosphere',
            13111                       => 'Non Terraformable',
            13112                       => 'Terraformable',
        13120                       => 'Rocky Ice planet with atmosphere',
            13121                       => 'Non Terraformable',
        13130                       => 'Ice planet with atmosphere',
            13131                       => 'Non Terraformable',



        21010                       => 'Fumarole',
            21011                       => 'Sulphur Dioxide Fumarole',
            21012                       => 'Water Fumarole',
            21013                       => 'Silicate Vapour Fumarole',
        21030                       => 'Ice Fumarole',
            21031                       => 'Sulphur Dioxide Ice Fumarole',
            21032                       => 'Water Ice Fumarole',
            21033                       => 'Carbon Dioxide Ice Fumarole',
            21034                       => 'Ammonia Ice Fumarole',
            21035                       => 'Methane Ice Fumarole',
            21036                       => 'Nitrogen Ice Fumarole',
            21037                       => 'Silicate Vapour Ice Fumarole',
        21050                       => 'Geyser',
            21051                       => 'Water Geyser',
        21070                       => 'Ice Geyser',
            21071                       => 'Water Ice Geyser',
            21072                       => 'Carbon Dioxide Ice Geyser',
            21073                       => 'Ammonia Ice Geyser',
            21074                       => 'Methane Ice Geyser',
            21075                       => 'Nitrogen Ice Geyser',
        21090                       => 'Lava Spout',
            21091                       => 'Silicate Magma Lava Spout',
            21092                       => 'Iron Magma Lava Spout',
        21110                       => 'Gas Vent',
            21111                       => 'Sulphur Dioxide Gas Vent',
            21112                       => 'Water Gas Vent',
            21113                       => 'Carbon Dioxide Gas Vent',
            21114                       => 'Silicate Vapour Gas Vent',
        21130                       => 'Lagrange Clouds',
            21131                       => 'Caeruleum Lagrange Cloud',
            21132                       => 'Viride Lagrange Cloud',
            21133                       => 'Luteolum Lagrange Cloud',
            21134                       => 'Roseum Lagrange Cloud',
            21135                       => 'Rubicundum Lagrange Cloud',
            21136                       => 'Croceum Lagrange Cloud',
            21137                       => 'Proto-Lagrange Cloud',
            21139                       => 'Viride Lagrange Storm Cloud',
            21141                       => 'Roseum Lagrange Storm Cloud',
            21142                       => 'Rubicundum Lagrange Storm Cloud',
            21143                       => 'Croceum Lagrange Storm Cloud',
        21150                       => 'P-Type Anomalies',
            21151                       => 'P01-Type Anomaly',
            21154                       => 'P04-Type Anomaly',
        21170                       => 'Q-Type Anomalies',
            21172                       => 'Q02-Type Anomaly',
            21174                       => 'Q04-Type Anomaly',
            21178                       => 'Q08-Type Anomaly',
            21179                       => 'Q09-Type Anomaly',
        21190                       => 'L-Type Anomalies',
            21191                       => 'L01-Type Anomaly',
            21194                       => 'L04-Type Anomaly',
            21195                       => 'L05-Type Anomaly',
            21196                       => 'L06-Type Anomaly',
            21199                       => 'L09-Type Anomaly',
        21210                       => 'K-Type Anomalies',
            21211                       => 'K01-Type Anomaly',
            21212                       => 'K02-Type Anomaly',
            21213                       => 'K03-Type Anomaly',
            21214                       => 'K04-Type Anomaly',
            21215                       => 'K05-Type Anomaly',
            21216                       => 'K06-Type Anomaly',
            21217                       => 'K07-Type Anomaly',
        21230                       => 'T-Type Anomalies',
            21234                       => 'T04-Type Anomaly',



        22011                       => 'Solid Mineral Spheres',
        22031                       => 'Lattice Mineral Spheres',
        22050                       => 'Thargoid Barnacles',
            22051                       => 'Common Thargoid Barnacle',
            22052                       => 'Large Thargoid Barnacle',
            22053                       => 'Thargoid Barnacle Barbs',
        22070                       => 'Brain Trees',
            22071                       => 'Roseum Brain Tree',
            22072                       => 'Gypseeum Brain Tree',
            22073                       => 'Ostrinum Brain Tree',
            22074                       => 'Viride Brain Tree',
            22075                       => 'Lividum Brain Tree',
            22076                       => 'Aureum Brain Tree',
            22077                       => 'Lindigoticum Brain Tree',
            22078                       => 'Puniceum Brain Tree',
        22091                       => 'Bark Mounds',
        22110                       => 'Anemones',
            22111                       => 'Luteolum Anemone',
            22112                       => 'Croceum Anemone',
            22113                       => 'Puniceum Anemone',
            22114                       => 'Roseum Anemone',
            22115                       => 'Blatteum Bioluminescent Anemone',
            22116                       => 'Rubeum Bioluminescent Anemone',
            22117                       => 'Prasinum Bioluminescent Anemone',
            22118                       => 'Roseum Bioluminescent Anemone',
        22130                       => 'Sinuous Tubers',
            22131                       => 'Roseum Sinuous Tubers',
        22150                       => 'Metallic Crystals',
            22151                       => 'Prasinum Metallic Crystals',
            22152                       => 'Purpureum Metallic Crystals',
            22153                       => 'Rubeum Metallic Crystals',
            22154                       => 'Flavum Metallic Crystals',
        22170                       => 'Collared Pods',
            22171                       => 'Albidum Collared Pod',
            22172                       => 'Lividum Collared Pod',
            22173                       => 'Blatteum Collared Pod',
            22174                       => 'Rubicundum Collared Pod',
        22190                       => 'Gourd Mollusc',
            22191                       => 'Albulum Gourd Mollusc',
            22192                       => 'Caeruleum Gourd Mollusc',
            22193                       => 'Viride Gourd Mollusc',
            22194                       => 'Phoeniceum Gourd Mollusc',
            22195                       => 'Purpureum Gourd Mollusc',
            22196                       => 'Rufum Gourd Mollusc',
            22197                       => 'Croceum Gourd Mollusc',
        22210                       => 'Ice Crystals',
            22211                       => 'Lindigoticum Ice Crystals',
            22212                       => 'Prasinum Ice Crystals',
            22213                       => 'Roseum Ice Crystals',
            22214                       => 'Purpureum Ice Crystals',
            22215                       => 'Rubeum Ice Crystals',
            22216                       => 'Albidium Ice Crystals',
            22217                       => 'Flavum Ice Crystals',
        22230                       => 'Silicate Crystals',
            22231                       => 'Lindigoticum Silicate Crystals',
            22232                       => 'Prasinum Silicate Crystals',
            22233                       => 'Purpureum Silicate Crystals',
            22234                       => 'Albidium Silicate Crystals',
            22235                       => 'Flavum Silicate Crystals',
        22251                       => 'Crystalline Shards',
        22270                       => 'Peduncle Pods',
            22271                       => 'Candidum peduncle Pod',
            22272                       => 'Caeruleum peduncle Pod',
            22273                       => 'Gypseeum peduncle Pod',
            22274                       => 'Purpureum peduncle Pod',
            22275                       => 'Rufum peduncle Pod',
        22290                       => 'Peduncle Trees',
            22291                       => 'Albidum Peduncle Tree',
            22292                       => 'Caeruleum Peduncle Tree',
            22293                       => 'Viride Peduncle Tree',
            22294                       => 'Ostrinum Peduncle Tree',
            22295                       => 'Rubellum Peduncle Tree',
        22311                       => 'Amphora Plants',
        22330                       => 'Bell Molluscs',
            22331                       => 'Albens Bell Mollusc',
            22332                       => 'Lindigoticum Bell Mollusc',
            22333                       => 'Carpasinus Bell Mollusc',
            22334                       => 'Blatteum Bell Mollusc',
            22335                       => 'Luteolum Bell Mollusc',
        22350                       => 'Umbrella Molluscs',
            22351                       => 'Luteolum Umbrella Mollusc',
            22352                       => 'Lindigoticum Umbrella Mollusc',
            22353                       => 'Viride Umbrella Mollusc',
        22370                       => 'Capsule Molluscs',
            22371                       => 'Luteolum Capsule Mollusc',
        22390                       => 'Reel Molluscs',
            22391                       => 'Luteolum Reel Mollusc',
            22392                       => 'Lindigoticum Reel Mollusc',
        22410                       => 'Octahedral Pods',
            22411                       => 'Niveus Octahedral Pod',
        22430                       => 'Void Hearts',
            22431                       => 'Chryseum Void Heart',
        22450                       => 'Parasol Molluscs',
            22451                       => 'Luteolum Parasol Mollusc',
            22452                       => 'Lindigoticum Parasol Mollusc',
            22453                       => 'Viride Parasol Mollusc',
        22470                       => 'Bulb Molluscs',
            22472                       => 'Lindigoticum Bulb Mollusc',
            22473                       => 'Viride Bulb Mollusc',
        22490                       => 'Stolon Pods', // Odd?
            22491                       => 'Viridis Gyre Tree',
            22492                       => 'Aurarius Gyre Tree',
        22510                       => 'Rhizome Pods',
            22511                       => 'Candidum Rhizome Pod',
            22512                       => 'Cobalteum Rhizome Pod',
            22513                       => 'Gypseeum Rhizome Pod',
            22514                       => 'Purpureum Rhizome Pod',
            22515                       => 'Rubeum Rhizome Pod',
        22530                       => 'Quadripartite Pods',
            22531                       => 'Albidum Quadripartite Pod',
            22532                       => 'Caeruleum Quadripartite Pod',
            22533                       => 'Viride Quadripartite Pod',
        22550                       => 'Bullet Molluscs',
            22551                       => 'Cereum Bullet Mollusc',
            22552                       => 'Lividum Bullet Mollusc',
            22553                       => 'Viride Bullet Mollusc',
            22554                       => 'Rubeum Bullet Mollusc',



        31010                       => 'Thargoid Interceptor',
            31011                       => 'Thargoid Interceptor Cyclops',
            31012                       => 'Thargoid Interceptor Basilisk',
            31013                       => 'Thargoid Interceptor Medusa',
            31014                       => 'Thargoid Interceptor Hydra',
            31015                       => 'Thargoid Interceptor Shipwreck',
        31021                       => 'Thargoid Scavengers',
        31030                       => 'Thargoid Scouts',
            31031                       => 'Thargoid Scout Marauder',
            31032                       => 'Thargoid Scout Berserker',
            31033                       => 'Thargoid Scout Inciter',
            31034                       => 'Thargoid Scout Regenerator',
            31035                       => 'Thargoid Scout Shipwreck',
        31041                       => 'Thargoid Uplink Device',
        31051                       => 'Thargoid Pod',
        31061                       => 'Thargoid Device',



        32011                       => 'Guardian Codex',
        32021                       => 'Guardian Data Terminal',
        32031                       => 'Guardian Pylon',
        32041                       => 'Guardian Relic Tower',
        32051                       => 'Guardian Sentinel',
        32061                       => 'Guardian Beacon',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'codex_ent_o_type'                                  => 11011,
        'codex_ent_o_typegiant'                             => 11012,
        'codex_ent_o_typesupergiant'                        => 11013,

        'codex_ent_b_type'                                  => 11021,
        'codex_ent_b_typegiant'                             => 11022,
        'codex_ent_b_typesupergiant'                        => 11023,

        'codex_ent_a_type'                                  => 11031,
        'codex_ent_a_typegiant'                             => 11032,
        'codex_ent_a_typesupergiant'                        => 11033,

        'codex_ent_f_type'                                  => 11041,
        'codex_ent_f_typegiant'                             => 11042,
        'codex_ent_f_typesupergiant'                        => 11043,

        'codex_ent_g_type'                                  => 11051,
        'codex_ent_g_typegiant'                             => 11052,
        'codex_ent_g_typesupergiant'                        => 11053,

        'codex_ent_k_type'                                  => 11061,
        'codex_ent_k_typegiant'                             => 11062,
        'codex_ent_k_typesupergiant'                        => 11063,

        'codex_ent_m_type'                                  => 11071,
        'codex_ent_m_typegiant'                             => 11072,
        'codex_ent_m_typesupergiant'                        => 11073,

        'codex_ent_a_type'                                  => 11031,

        'codex_ent_f_type'                                  => 11041,

        'codex_ent_g_type'                                  => 11051,

        'codex_ent_k_type'                                  => 11061,

        'codex_ent_m_type'                                  => 11071,

        'codex_ent_l_type'                                  => 11081,

        'codex_ent_t_type'                                  => 11091,

        'codex_ent_tts_type'                                => 11101,

        'codex_ent_aebe_type'                               => 11111,

        'codex_ent_y_type'                                  => 11121,

        'codex_ent_c_type'                                  => 11131,
        'codex_ent_c_typegiant'                             => 11132,
        'codex_ent_c_typesupergiant'                        => 11133,
        'codex_ent_c_typehypergiant'                        => 11134,

        'codex_ent_cn_typegiant'                            => 11142,

        'codex_ent_cj_typegiant'                            => 11152,

        'codex_ent_ms_typegiant'                            => 11162,

        'codex_ent_s_type'                                  => 11171,
        'codex_ent_s_typegiant'                             => 11172,

        'codex_ent_w_type'                                  => 11181,
        'codex_ent_wc_type'                                 => 11183,
        'codex_ent_wn_type'                                 => 11184,
        'codex_ent_wnc_type'                                => 11185,
        'codex_ent_wo_type'                                 => 11186,

        'codex_ent_d_type'                                  => 11191,
        'codex_ent_da_type'                                 => 11192,
        'codex_ent_dab_type'                                => 11194,
        'codex_ent_dav_type'                                => 11196,
        'codex_ent_daz_type'                                => 11197,
        'codex_ent_db_type'                                 => 11198,
        'codex_ent_dbv_type'                                => 11199,
        'codex_ent_dbz_type'                                => 11200,
        'codex_ent_do_type'                                 => 11204,
        'codex_ent_dov_type'                                => 11205,
        'codex_ent_dq_type'                                 => 11206,

        'codex_ent_neutron_stars'                           => 11221,

        'codex_ent_black_holes'                             => 11231,

        'codex_ent_supermassiveblack_holes'                 => 11241,



        'codex_ent_standard_water_giant'                    => 12011,

        'codex_ent_standard_giant_with_water_life'          => 12031,
        'codex_ent_green_giant_with_water_life'             => 12032,

        'codex_ent_standard_giant_with_ammonia_life'        => 12051,

        'codex_ent_standard_sudarsky_class_i'               => 12071,

        'codex_ent_standard_sudarsky_class_ii'              => 12091,

        'codex_ent_standard_sudarsky_class_iii'             => 12111,

        'codex_ent_standard_sudarsky_class_iv'              => 12131,

        'codex_ent_standard_sudarsky_class_v'               => 12151,

        'codex_ent_standard_helium'                         => 12171,
        'codex_ent_standard_helium_rich'                    => 12191,



        'codex_ent_earth_likes'                             => 13011,

        'codex_ent_standard_ammonia_worlds'                 => 13021,

        'codex_ent_standard_water_worlds'                   => 13031,
        'codex_ent_trf_water_worlds'                        => 13032,

        'codex_ent_standard_metal_rich_no_atmos'            => 13041,

        'codex_ent_standard_high_metal_content_no_atmos'    => 13051,
        'codex_ent_trf_high_metal_content_no_atmos'         => 13052,

        'codex_ent_standard_rocky_no_atmos'                 => 13061,
        'codex_ent_trf_rocky_no_atmos'                      => 13062,

        'codex_ent_standard_rocky_ice_no_atmos'             => 13071,

        'codex_ent_standard_ice_no_atmos'                   => 13081,

        'codex_ent_standard_ter_metal_rich'                 => 13091,
        'codex_ent_trf_ter_metal_rich'                      => 13092,

        'codex_ent_standard_ter_high_metal_content'         => 13101,
        'codex_ent_trf_ter_high_metal_content'              => 13102,

        'codex_ent_standard_ter_rocky'                      => 13111,
        'codex_ent_trf_ter_rocky'                           => 13112,

        'codex_ent_standard_ter_rocky_ice'                  => 13121,

        'codex_ent_standard_ter_ice'                        => 13131,



        'codex_ent_fumarole_sulphurdioxidemagma'            => 21011,
        'codex_ent_fumarole_watergeysers'                   => 21012,
        'codex_ent_fumarole_silicatevapourgeysers'          => 21013,

        'codex_ent_icefumarole_sulphurdioxidemagma'         => 21031,
        'codex_ent_icefumarole_watergeysers'                => 21032,
        'codex_ent_icefumarole_carbondioxidegeysers'        => 21033,
        'codex_ent_icefumarole_ammoniageysers'              => 21034,
        'codex_ent_icefumarole_methanegeysers'              => 21035,
        'codex_ent_icefumarole_nitrogengeysers'             => 21036,
        'codex_ent_icefumarole_silicatevapourgeysers'       => 21037,

        'codex_ent_geysers_watergeysers'                    => 21051,

        'codex_ent_icegeysers_watergeysers'                 => 21071,
        'codex_ent_icegeysers_carbondioxidegeysers'         => 21072,
        'codex_ent_icegeysers_ammoniageysers'               => 21073,
        'codex_ent_icegeysers_methanegeysers'               => 21074,
        'codex_ent_icegeysers_nitrogengeysers'              => 21075,

        'codex_ent_lava_spouts_silicatemagma'               => 21091,
        'codex_ent_lava_spouts_ironmagma'                   => 21092,

        'codex_ent_gas_vents_sulphurdioxidemagma'           => 21111,
        'codex_ent_gas_vents_watergeysers'                  => 21112,
        'codex_ent_gas_vents_carbondioxidegeysers'          => 21113,
        'codex_ent_gas_vents_silicatevapourgeysers'         => 21114,

        'codex_ent_gas_clds_blue'                           => 21131,
        'codex_ent_gas_clds_green'                          => 21132,
        'codex_ent_gas_clds_orange'                         => 21133,
        'codex_ent_gas_clds_pink'                           => 21134,
        'codex_ent_gas_clds_red'                            => 21135,
        'codex_ent_gas_clds_yellow'                         => 21136,
        'codex_ent_gas_clds_light'                          => 21137,
        'codex_ent_gas_clds_green_storm'                    => 21139,
        'codex_ent_gas_clds_pink_storm'                     => 21141,
        'codex_ent_gas_clds_red_storm'                      => 21142,
        'codex_ent_gas_clds_yellow_storm'                   => 21143,

        'codex_ent_l_phn_part_eng_002'                      => 21151,
        'codex_ent_l_phn_part_eng_005'                      => 21154,

        'codex_ent_l_phn_part_orb_002'                      => 21172,
        'codex_ent_l_phn_part_orb_004'                      => 21174,
        'codex_ent_l_phn_part_orb_008'                      => 21178,
        'codex_ent_l_phn_part_orb_009'                      => 21179,

        'codex_ent_l_phn_part_clus_003'                     => 21191,
        'codex_ent_l_phn_part_clus_008'                     => 21194,
        'codex_ent_l_phn_part_clus_009'                     => 21195,
        'codex_ent_l_phn_part_clus_010'                     => 21196,
        'codex_ent_l_phn_part_clus_013'                     => 21199,

        'codex_ent_l_phn_part_cld_001'                      => 21211,
        'codex_ent_l_phn_part_cld_002'                      => 21212,
        'codex_ent_l_phn_part_cld_003'                      => 21213,
        'codex_ent_l_phn_part_cld_004'                      => 21214,
        'codex_ent_l_phn_part_cld_005'                      => 21215,
        'codex_ent_l_phn_part_cld_006'                      => 21216,
        'codex_ent_l_phn_part_cld_007'                      => 21217,

        'codex_ent_l_phn_part_clus_005'                     => 21234,



        'codex_ent_spoi_ball'                               => 22011,

        'codex_ent_spoi_ball_lattice'                       => 22031,

        'codex_ent_thargoid_barnacle_01'                    => 22051,
        'codex_ent_thargoid_barnacle_02'                    => 22052,
        'codex_ent_thargoid_barnacle_spikes'                => 22053,

        'codex_ent_seed'                                    => 22071,
        'codex_ent_seedabcd_01'                             => 22072,
        'codex_ent_seedabcd_02'                             => 22073,
        'codex_ent_seedabcd_03'                             => 22074,
        'codex_ent_seedefgh'                                => 22075,
        'codex_ent_seedefgh_01'                             => 22076,
        'codex_ent_seedefgh_03'                             => 22077,
        'codex_ent_seedefgh_02'                             => 22078,

        'codex_ent_cone'                                    => 22091,

        'codex_ent_sphere'                                  => 22111,
        'codex_ent_sphereabcd_01'                           => 22112,
        'codex_ent_sphereabcd_02'                           => 22113,
        'codex_ent_sphereabcd_03'                           => 22114,
        'codex_ent_sphereefgh'                              => 22115,
        'codex_ent_sphereefgh_01'                           => 22116,
        'codex_ent_sphereefgh_02'                           => 22117,
        'codex_ent_sphereefgh_03'                           => 22118,

        'codex_ent_tube'                                    => 22131,

        'codex_ent_l_cry_metcry_gr'                         => 22151,
        'codex_ent_l_cry_metcry_pur'                        => 22152,
        'codex_ent_l_cry_metcry_red'                        => 22153,
        'codex_ent_l_cry_metcry_yw'                         => 22154,

        'codex_ent_s_seed_sdtp04_def'                       => 22171,
        'codex_ent_s_seed_sdtp04_bl'                        => 22172,
        'codex_ent_s_seed_sdtp04_pur'                       => 22173,
        'codex_ent_s_seed_sdtp04_red'                       => 22174,

        'codex_ent_small_org_moll01_v1_def'                 => 22191,
        'codex_ent_small_org_moll01_v1_bl'                  => 22192,
        'codex_ent_small_org_moll01_v1_gr'                  => 22193,
        'codex_ent_small_org_moll01_v1_pnk'                 => 22194,
        'codex_ent_small_org_moll01_v1_pur'                 => 22195,
        'codex_ent_small_org_moll01_v1_red'                 => 22196,
        'codex_ent_small_org_moll01_v1_y'                   => 22197,

        'codex_ent_l_cry_iccry_bl'                          => 22211,
        'codex_ent_l_cry_iccry_gr'                          => 22212,
        'codex_ent_l_cry_iccry_pk'                          => 22213,
        'codex_ent_l_cry_iccry_pur'                         => 22214,
        'codex_ent_l_cry_iccry_red'                         => 22215,
        'codex_ent_l_cry_iccry_wte'                         => 22216,
        'codex_ent_l_cry_iccry_yw'                          => 22217,

        'codex_ent_l_cry_qtzcry_bl'                         => 22231,
        'codex_ent_l_cry_qtzcry_gr'                         => 22232,
        'codex_ent_l_cry_qtzcry_pur'                        => 22233,
        'codex_ent_l_cry_qtzcry_wte'                        => 22234,
        'codex_ent_l_cry_qtzcry_yw'                         => 22235,

        'codex_ent_ground_struct_ice'                       => 22251,

        'codex_ent_s_seed_sdtp01_def'                       => 22271,
        'codex_ent_s_seed_sdtp01_bl'                        => 22272,
        'codex_ent_s_seed_sdtp01_gr'                        => 22273,
        'codex_ent_s_seed_sdtp01_pur'                       => 22274,
        'codex_ent_s_seed_sdtp01_red'                       => 22275,

        'codex_ent_l_seed_pln01_v1_def'                     => 22291,
        'codex_ent_l_seed_pln01_v1_bl'                      => 22292,
        'codex_ent_l_seed_pln01_v1_gr'                      => 22293,
        'codex_ent_l_seed_pln01_v1_pur'                     => 22294,
        'codex_ent_l_seed_pln01_v1_red'                     => 22295,

        'codex_ent_vents'                                   => 22311,

        'codex_ent_small_org_moll01_v6_def'                 => 22331,
        'codex_ent_small_org_moll01_v6_bl'                  => 22332,
        'codex_ent_small_org_moll01_v6_gr'                  => 22333,
        'codex_ent_small_org_moll01_v6_pur'                 => 22334,
        'codex_ent_small_org_moll01_v6_y'                   => 22335,

        'codex_ent_l_org_moll03_v3_def'                     => 22351,
        'codex_ent_l_org_moll03_v3_dark'                    => 22352,
        'codex_ent_l_org_moll03_v3_earth'                   => 22353,

        'codex_ent_l_org_moll03_v4_def'                     => 22371,

        'codex_ent_l_org_moll03_v6_def'                     => 22391,
        'codex_ent_l_org_moll03_v6_dark'                    => 22392,

        'codex_ent_s_seed_sdtp03_def'                       => 22411,

        'codex_ent_spoi_seedweed01_v1'                      => 22431,

        'codex_ent_l_org_moll03_v1_def'                     => 22451,
        'codex_ent_l_org_moll03_v1_dark'                    => 22452,
        'codex_ent_l_org_moll03_v1_earth'                   => 22453,

        'codex_ent_l_org_moll03_v2_dark'                    => 22472,
        'codex_ent_l_org_moll03_v2_earth'                   => 22473,

        'codex_ent_spoi_seedpolyp01_v1'                     => 22491,
        'codex_ent_spoi_seedpolyp01_v1_gld'                 => 22492,

        'codex_ent_s_seed_sdtp07_def'                       => 22511,
        'codex_ent_s_seed_sdtp07_bl'                        => 22512,
        'codex_ent_s_seed_sdtp07_gr'                        => 22513,
        'codex_ent_s_seed_sdtp07_pur'                       => 22514,
        'codex_ent_s_seed_sdtp07_red'                       => 22515,

        'codex_ent_s_seed_sdtp08_def'                       => 22531,
        'codex_ent_s_seed_sdtp08_bl'                        => 22532,
        'codex_ent_s_seed_sdtp08_gr'                        => 22533,

        'codex_ent_small_org_moll01_v4_def'                 => 22551,
        'codex_ent_small_org_moll01_v4_bl'                  => 22552,
        'codex_ent_small_org_moll01_v4_gr'                  => 22553,
        'codex_ent_small_org_moll01_v4_red'                 => 22554,



        'codex_ent_cyclops'                                 => 31011,
        'codex_ent_basilisk'                                => 31012,
        'codex_ent_medusa'                                  => 31013,
        'codex_ent_hydra'                                   => 31014,
        'codex_ent_wrecked_interceptor'                     => 31015,

        'codex_ent_scavengers'                              => 31021,

        'codex_ent_marauder'                                => 31031,
        'codex_ent_berserker'                               => 31032,
        'codex_ent_inciter'                                 => 31033,
        'codex_ent_regenerator'                             => 31034,
        'codex_ent_wrecked_scout'                           => 31035,

        'codex_ent_tg_datascan'                             => 31041,

        'codex_ent_tg_pod'                                  => 31051,

        'codex_ent_tg_transmitter'                          => 31061,



        'codex_ent_guardian_data_logs'                      => 32011,
        'codex_ent_guardian_terminal'                       => 32021,
        'codex_ent_guardian_pylon'                          => 32031,
        'codex_ent_relic_tower'                             => 32041,
        'codex_ent_guardian_sentinel'                       => 32051,
        'codex_ent_guardian_beacons'                        => 32061,
    ];
}