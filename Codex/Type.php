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
        11020                       => 'B Type Star',
        11030                       => 'A Type Star',
        11040                       => 'F Type Star',
        11050                       => 'G Type Star',
        11060                       => 'K Type Star',
        11070                       => 'M Type Star',
        11080                       => 'L Type Star',

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
        31020                       => 'Thargoid Scavengers',
        31030                       => '',
        31040                       => '',
        31050                       => 'Thargoid Pod',
        31060                       => '',

        32010                       => 'Guardian Codex',
        32020                       => 'Guardian Data Terminal',
        32030                       => 'Guardian Pylon',
        32040                       => 'Guardian Relic Tower',
        32050                       => 'Guardian Sentinel',
        32060                       => 'Guardian Beacon',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'codex_ent_o_type'                              => 11010,
        'codex_ent_b_type'                              => 11020,
        'codex_ent_a_type'                              => 11030,
        'codex_ent_f_type'                              => 11040,
        'codex_ent_g_type'                              => 11050,
        'codex_ent_k_type'                              => 11060,
        'codex_ent_m_type'                              => 11070,
        'codex_ent_l_type'                              => 11080,

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
        'codex_ent_scavengers'                          => 31020,
        'codex_ent_tg_pod'                              => 31050,

        'codex_ent_guardian_data_logs'                  => 32010,
        'codex_ent_guardian_terminal'                   => 32020,
        'codex_ent_guardian_pylon'                      => 32030,
        'codex_ent_relic_tower'                         => 32040,
        'codex_ent_guardian_sentinel'                   => 32050,
        'codex_ent_guardian_beacons'                    => 32060,
    ];
}