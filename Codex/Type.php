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
            11071                       => 'K Type',
            11072                       => 'K Type Giant',
            11073                       => 'K Type Supergiant',
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

        31010                       => 'Thargoid Interceptor',
            31011                       => 'Thargoid Interceptor Cyclops',
            31012                       => 'Thargoid Interceptor Basilisk',
            31013                       => 'Thargoid Interceptor Medusa',
            31014                       => 'Thargoid Interceptor Hydra',
            31015                       => 'Thargoid Interceptor Shipwreck',
        31021                       => 'Thargoid Scavengers',
        31030                       => 'Thargoid Scouts',
            31031                       => 'Thargoid Scout Marauder',
            31032                       => 'Thargoid Scout Berseker',
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
        'codex_ent_o_type'                              => 11011,
        'codex_ent_o_typegiant'                         => 11012,
        'codex_ent_o_typesupergiant'                    => 11013,

        'codex_ent_b_type'                              => 11021,
        'codex_ent_b_typegiant'                         => 11022,
        'codex_ent_b_typesupergiant'                    => 11023,

        'codex_ent_a_type'                              => 11031,
        'codex_ent_f_type'                              => 11041,
        'codex_ent_g_type'                              => 11051,
        'codex_ent_k_type'                              => 11061,
        'codex_ent_m_type'                              => 11071,
        'codex_ent_l_type'                              => 11081,

        'codex_ent_fumarole_sulphurdioxidemagma'        => 21011,
        'codex_ent_fumarole_watergeysers'               => 21012,
        'codex_ent_fumarole_silicatevapourgeysers'      => 21013,

        'codex_ent_icefumarole_sulphurdioxidemagma'     => 21031,
        'codex_ent_icefumarole_watergeysers'            => 21032,
        'codex_ent_icefumarole_carbondioxidegeysers'    => 21033,
        'codex_ent_icefumarole_ammoniageysers'          => 21034,
        'codex_ent_icefumarole_methanegeysers'          => 21035,
        'codex_ent_icefumarole_nitrogengeysers'         => 21036,
        'codex_ent_icefumarole_silicatevapourgeysers'   => 21037,

        'codex_ent_geysers_watergeysers'                => 21051,

        'codex_ent_icegeysers_watergeysers'             => 21071,
        'codex_ent_icegeysers_carbondioxidegeysers'     => 21072,

        'codex_ent_cyclops'                             => 31011,
        'codex_ent_basilisk'                            => 31012,
        'codex_ent_wrecked_interceptor'                 => 31015,
        'codex_ent_scavengers'                          => 31021,
        'codex_ent_marauder'                            => 31031,
        'codex_ent_tg_datascan'                         => 31041,
        'codex_ent_tg_pod'                              => 31051,
        'codex_ent_tg_transmitter'                      => 31061,

        'codex_ent_guardian_data_logs'                  => 32011,
        'codex_ent_guardian_terminal'                   => 32021,
        'codex_ent_guardian_pylon'                      => 32031,
        'codex_ent_relic_tower'                         => 32041,
        'codex_ent_guardian_sentinel'                   => 32051,
        'codex_ent_guardian_beacons'                    => 32061,
    ];
}