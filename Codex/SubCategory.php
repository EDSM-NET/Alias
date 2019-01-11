<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Codex;
use         EDSM\Alias;

class SubCategory extends Alias
{
    use \EDSM\Alias\Codex\Category;

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
                        11010   => [11011, 11012, 11013],
                        11020   => [11021, 11022, 11023],
                        11030   => [11031, 11032, 11033],
                        11040   => [11041, 11042, 11043],
                        11050   => [11051, 11052, 11053],
                        11060   => [11061, 11062, 11063],
                        11070   => [11071, 11072, 11073],
                        11080   => [11081],
                        11090   => [11091],
                        11100   => [11101],
                        11110   => [11111],
                        11120   => [11121],
                        11130   => [11131, 11132, 11133, 11134],
                        11140   => [       11142],
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
                        31021, 31031, 31041, 31051, 31061,
                    ],

        32000   =>  [
                        32011, 32021, 32031, 32041, 32051, 32061,
                    ],
    ];
}