<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Commander\Crime;
use         EDSM\Alias;

class Victim extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
          1     => 'Generator',
          2     => 'Defence Turret',
          3     => 'Defence Turret',
          4     => 'Defence Platform',
          5     => 'Defence Turret',
          6     => 'Defence Turret',
          7     => 'Defence Platform',
          8     => 'Generator',
          9     => 'Data Link',
         10     => 'Data Point',

         51     => 'Defence System Generator',
         52     => 'Hackable Data Transmitter',
         53     => 'Hackable Comms Array',
         54     => 'Cargo Bay',
         55     => 'Cargo Bay',
         56     => 'Automated Defence Turret',
         57     => 'Defence System Generator',
         58     => 'Automated Defence Turret',
         59     => 'Defence System Generator',
         60     => 'Defence System Turret',
         61     => 'Hackable Maintenance Hatch',
         62     => 'Storage Containers',
         63     => 'Maintenance Hatch',
         64     => 'Power Conduit',
         65     => 'Internal Piping',
         66     => 'Storage Container',
         67     => 'Storage Containers',
         68     => 'Maintenance Pipe',
         69     => 'Power node - Radiator Panel',
         70     => 'Power capacitor',
         71     => 'Power node - Radiator Panel',
         72     => 'Hull Breach',
         73     => 'Escape Hatch',
         74     => 'Hull Breach',
         75     => 'Fighter Bay',

        101     => 'Sentry Skimmer',
        102     => 'Guardian',
        103     => 'Stinger',
        104     => 'Goliath',
        105     => 'Guardian Sentinel',

        201     => 'Imperial Navy Vessel',
        202     => 'System Defence Force',
        203     => 'Alliance Defence Force',
        204     => 'Federal Navy Ship',

        210     => 'Allied Police Forces',
        211     => 'System Authority Vessel',
        212     => 'Federal Security Service',
        213     => 'Internal Security Service',

        221     => 'Federal Navy Fighter',
        222     => 'System Defence Fighter',
        223     => 'Imperial Navy Fighter',
        224     => 'Alliance Defence Fighter',

        231     => 'Federal ATR',
        232     => 'System ATR',
        233     => 'Imperial ATR',
        234     => 'Allied ATR',

        241     => 'Federal AX Ship',
        242     => 'System AX Force',
        243     => 'Alliance AX Force',
        244     => 'Imperial AX Vessel',

        301     => 'Wedding Barge',
        302     => 'Cruise Ship',

        401     => 'Search And Rescue Patrol',

        501     => 'Warzone Correspondent',
        502     => 'Independent Captain',
        503     => 'Alliance Captain',
        504     => 'Federal Captain',
        505     => 'Spec Ops Wing Alpha',
        506     => 'Spec Ops Wing Beta',
        //507     => 'Spec Ops Wing Alpha',
        508     => 'Spec Ops Wing Delta',
        //509     => 'Spec Ops Wing Alpha',
        //510     => 'Spec Ops Wing Alpha',
        511     => 'Spec Ops Wing Gamma',
        512     => 'Imperial Captain',
        513     => 'Onboard Data Beacon',
        514     => 'Rescue Vessel',

    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     *     => str_replace(;)
     *     => str_replace($shipname_)
     *     => str_replace(_name)
     */
    static protected $alias = [
        'poi_generator'                         => 1,
        'poi_turretbasea'                       => 2,
        'poi_turretplatforma'                   => 3,
        'poi_turretbunkera_fd'                  => 4,
        'poi_turretbasec'                       => 5,
        'poi_turretbaseb'                       => 6,
        'poi_turretbunkera'                     => 7,
        'poi_portablegenerator'                 => 8,
        'poi_datalink'                          => 9,
        'poi_datapoint'                         => 10,

        'mega_generator_small'                  => 51,
        'mega_data01'                           => 52,
        'mega_commsarray'                       => 53,
        'mega_cargobay'                         => 54,
        'mega_cargobay_recessed'                => 55,
        'mega_turretplatformb'                  => 56,
        'mega_generator_large'                  => 57,
        'mega_defences'                         => 58,
        'mega_generator'                        => 59,
        'mega_turretbunkera'                    => 60,
        'mega_animating_door'                   => 61,
        'mega_destructible_largesixcanisters'   => 62,
        'mega_destructible_hatch'               => 63,
        'mega_destructible_pipea'               => 64,
        'mega_destructible_tunnelstrut'         => 65,
        'mega_destructible_canistera'           => 66,
        'mega_destructible_quadcanisters'       => 67,
        'mega_destructible_canistermounted'     => 68,
        'mega_destructible_radpanelb'           => 69,
        'mega_canisterb'                        => 70,
        'mega_destructible_radpanela'           => 71,
        'mega_damageoverlay01'                  => 72,
        'mega_escapehatches'                    => 73,
        'mega_damageoverlay02'                  => 74,
        'mega_fighterlaunchbay'                 => 75,

        'skimmerdrone'                          => 101,
        'missileskimmer'                        => 102,
        'bombskimmerdrone'                      => 103,
        'bossskimmer'                           => 104,
        'guardian_sentinel'                     => 105,

        'military_empire'                       => 201,
        'military_independent'                  => 202,
        'military_alliance'                     => 203,
        'military_federation'                   => 204,

        'police_alliance'                       => 210,
        'police_independent'                    => 211,
        'police_federation'                     => 212,
        'police_empire'                         => 213,

        'militaryfighter_federation'            => 221,
        'militaryfighter_independent'           => 222,
        'militaryfighter_empire'                => 223,
        'militaryfighter_alliance'              => 224,

        'atr_federation'                        => 231,
        'atr_independent'                       => 232,
        'atr_empire'                            => 233,
        'atr_alliance'                          => 234,

        'ax_military_federation'                => 241,
        'ax_military_independent'               => 242,
        'ax_military_alliance'                  => 243,
        'ax_military_empire'                    => 244,

        'passengerliner_wedding'                => 301,
        'passengerliner_cruise'                 => 302,

        'searchandrescue'                       => 401,

        'luasc_scenario_warzone_npc_warzonecorrespondent'   => 501,
        'luasc_scenario_warzone_npc_warzonegeneral_ind'     => 502,
        'luasc_scenario_warzone_npc_warzonegeneral_all'     => 503,
        'luasc_scenario_warzone_npc_warzonegeneral_fed'     => 504,
        'luasc_scenario_warzone_npc_specops_a'              => 505,
        'luasc_scenario_warzone_npc_specops_b'              => 506,
        //'luasc_scenario_warzone_npc_specops_c'              => 507,
        'luasc_scenario_warzone_npc_specops_d'              => 508,
        //'luasc_scenario_warzone_npc_specops_e'              => 509,
        //'luasc_scenario_warzone_npc_specops_f'              => 510,
        'luasc_scenario_warzone_npc_specops_g'              => 511,
        'luasc_scenario_warzone_npc_warzonegeneral_emp'     => 512,
        'luasc_scenario_uss_debrisfield_shipname'           => 513,
        'luasc_scenario_megaship_tg_sender_rescuer'         => 514,
    ];
}