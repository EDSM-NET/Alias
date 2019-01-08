<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Mission;
use         EDSM\Alias;

class Util extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
           1                                    => 'Settlement',
           2                                    => 'Fuel Depot',
           3                                    => 'Emplacement',
           4                                    => 'Skimmer Control',
           5                                    => 'Comms Array',

         500                                    => 'Thargoid Scout',
         501                                    => 'Thargoid Interceptor',
         502                                    => 'Thargoid Cyclops',
         503                                    => 'Thargoid Basilisk',
         504                                    => 'Thargoid Medusa',

        1001                                    => 'Pirate Lord',
        1002                                    => 'Pirates',
        1003                                    => 'Sentry Skimmer',
        1004                                    => 'Deserter',
        1005                                    => 'Religious Leader',
        1006                                    => 'Prisoners',
        1007                                    => 'Civilians',
        1008                                    => 'Traders',
        1009                                    => 'Smugglers',
        1010                                    => 'Venerable General',
        1011                                    => 'Terrorist Leader',
        1012                                    => 'Politician',
        1013                                    => 'Deserters',
        1014                                    => 'Passenger Liner',
        1015                                    => 'Military',
        1016                                    => 'Goliath',
        1017                                    => 'Prison Convict',
        1018                                    => 'Activists',
        1019                                    => 'Informant',
        1020                                    => 'Medical ships',
        1021                                    => 'Science Team',
        1022                                    => 'Turret',
        1023                                    => 'Infected Vessels',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'settlement_target_building'            => 1,
        'settlement_target_fueldepot'           => 2,
        'settlement_target_turret'              => 3,
        'settlement_target_skimmerdisabler'     => 4,
        'settlement_target_radar'               => 5,

        'factiontag_scout'                      => 500,
        'factiontag_interceptor'                => 501,
        'factiontag_cyclops'                    => 502,
        'factiontag_basilisk'                   => 503,
        'factiontag_medusa'                     => 504,

        'factiontag_piratelord'                 => 1001,
        'factiontag_pirate'                     => 1002,
        'factiontag_skimmer'                    => 1003,
        'factiontag_deserterass'                => 1004,
        'factiontag_religiousleader'            => 1005,
        'factiontag_prisoner'                   => 1006,
        'factiontag_citizen'                    => 1007,
        'factiontag_trader'                     => 1008,
        'factiontag_smuggler'                   => 1009,
        'factiontag_venerablegeneral'           => 1010,
        'factiontag_terroristleader'            => 1011,
        'factiontag_politician'                 => 1012,
        'factiontag_deserter'                   => 1013,
        'factiontag_passengerliner'             => 1014,
        'factiontag_military'                   => 1015,
        'factiontag_bossskimmer'                => 1016,
        'factiontag_prisonconvict'              => 1017,
        'factiontag_activist'                   => 1018,
        'factiontag_informant'                  => 1019,
        'factiontag_medical'                    => 1020,
        'factiontag_scienceteam'                => 1021,
        'factiontag_turret'                     => 1022,
        'factiontag_infected'                   => 1023,
    ];
}