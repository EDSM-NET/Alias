<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Codex;
use         EDSM\Alias;

class SubCategory extends Alias
{
    //use \EDSM\Alias\Station\Commodity\Category;

    /**
     * List of names used in game
     */
    static protected $name  = [
        11000                               => 'Stars',
        12000                               => 'Gas Giants Planets',
        13000                               => 'Terrestrials Planets',

        21000                               => 'Geology and Anomalies',
        22000                               => 'Organic Structures',

        31000                               => 'Thargoid objects',
        32000                               => 'Guardian objects',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'codex_subcategory_stars'                   => 11000,
        'codex_subcategory_gas_giants'              => 12000,
        'codex_subcategory_terrestrials'            => 13000,

        'codex_subcategory_geology_and_anomalies'   => 21000,
        'codex_subcategory_organic_structures'      => 22000,

        'codex_subcategory_thargoid'                => 31000,
        'codex_subcategory_guardian'                => 32000,
    ];



    /**
     * List of codex entry id in each subcategories
     */
    static protected $in    = [
        11000   =>  [
                        11001, 11002, 11003, 11004, 11005, 11006,
                        11007, 11008,
                    ],

        12000   =>  [

                    ],

        13000   =>  [

                    ],



        21000   =>  [
                        21010   => [21011, 21012, 21013],
                        21030   => [21031, 21032, 21033, 21034, 21035, 21036, 21037],
                        21050   => [21051],
                        21070   => [21071, 21072],
                    ],

        22000   =>  [

                    ],



        31000   =>  [
                        31010   => [31011, 31012, 31013, 31014, 31015],
                        31020, 31030, 31040, 31050, 31060,
                    ],

        32000   =>  [
                        32010, 32020, 32030, 32040, 32050, 32060,
                    ],
    ];
}