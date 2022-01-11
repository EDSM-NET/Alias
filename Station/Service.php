<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station;
use         EDSM\Alias;

class Service extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1                      => 'Commodities',
         2                      => 'Shipyard',
         3                      => 'Outfitting',
         4                      => 'Black Market',

        21                      => 'Restock',
        22                      => 'Refuel',
        23                      => 'Repair',

        31                      => 'Contacts',
        32                      => 'Universal Cartographics',

        34                      => 'Missions',
        35                      => 'Crew Lounge',
        36                      => 'Tuning',

        39                      => 'Interstellar Factors Contact',
        45                      => 'Search and Rescue',

        70                      => 'Technology Broker',
        71                      => 'Material Trader',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'commodities'           => 1,
        'shipyard'              => 2,
        'outfitting'            => 3,
        'blackmarket'           => 4,

        'dock'                  => 11,
        'autodock'              => 12,

        'rearm'                 => 21,
        'refuel'                => 22,
        'repair'                => 23,

        'contacts'              => 31,
        'exploration'           => 32,
        'initiatives'           => 33,
        'missions'              => 34,
        'crewlounge'            => 35,
        'tuning'                => 36,
        'workshop'              => 37,      'engineer'          => 37,
        'missionsgenerated'     => 38,
        'facilitator'           => 39,
        'research'              => 40,
        'flightcontroller'      => 41,
        'stationoperations'     => 42,
        'ondockmission'         => 43,
        'powerplay'             => 44,
        'searchandrescue'       => 45,      'searchrescue'      => 45,

        'stationmenu'           => 51,
        'shop'                  => 52,

        'shop'                  => 60,
        'carriermanagement'     => 61,
        'carrierfuel'           => 62,
        'carriervendor'         => 63,
        'livery'                => 64,
        'modulepacks'           => 65,
        'voucherredemption'     => 66,
        'socialspace'           => 67,

        'techbroker'            => 70,
        'materialtrader'        => 71,

        'bartender'             => 80,
        'apexinterstellar'      => 81,
        'frontlinesolutions'    => 82,
        'pioneersupplies'       => 83,
        'vistagenomics'         => 84,
    ];
}