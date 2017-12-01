<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Mission;
use         EDSM\Alias;

class Util extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
           1                                => 'Settlement',
           2                                => 'Fuel Depot',
           3                                => 'Emplacement',
           
        1001                                => 'Pirate Lord',
        1002                                => 'Pirates',
        1003                                => 'Sentry Skimmer',
        1004                                => 'Deserter',
        1005                                => 'Religious Leader',
        1006                                => 'Prisoners',
        1007                                => 'Civilians',
        1008                                => 'Traders',
        1009                                => 'Smugglers',
        1010                                => 'Venerable General',
        1011                                => 'Terrorist Leader',
        1012                                => 'Politician',
        1013                                => 'Deserters',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'settlement_target_building'        => 1,
        'settlement_target_fueldepot'       => 2,
        'settlement_target_turret'          => 3,
        
        'factiontag_piratelord'             => 1001,
        'factiontag_pirate'                 => 1002,
        'factiontag_skimmer'                => 1003,
        'factiontag_deserterass'            => 1004,
        'factiontag_religiousleader'        => 1005,
        'factiontag_prisoner'               => 1006,
        'factiontag_citizen'                => 1007,
        'factiontag_trader'                 => 1008,
        'factiontag_smuggler'               => 1009,
        'factiontag_venerablegeneral'       => 1010,
        'factiontag_terroristleader'        => 1011,
        'factiontag_politician'             => 1012,
        'factiontag_deserter'               => 1013,
    ];
}