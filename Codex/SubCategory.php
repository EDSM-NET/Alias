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
            11150   => [       11152],
            11160   => [       11162],
            11170   => [11171, 11172],
            11180   => [11181,        11183, 11184, 11185, 11186],
            11190   => [11191, 11192, 11194, 11196, 11197, 11198, 11199, 11200, 11204, 11205, 11206],
            11221,
            11231,
            11241,
        ],

        12000   =>  [
            12010    => [12011],
            12030    => [12031, 12032],
            12050    => [12051],
            12070    => [12071, 12072],                                                     // Class I gas giant planet
            12090    => [12091],
            12110    => [12111, 12112],                                                     // Class III gas giant planet
            12130    => [12131],
            12150    => [12151],
            12170    => [12171],
            12190    => [12191],
        ],

        13000   =>  [
            13011,
            13020    => [13021],
            13030    => [13031, 13032],
            13040    => [13041],
            13050    => [13051, 13052],
            13060    => [13061, 13062],
            13070    => [13071],
            13080    => [13081],
            13090    => [13091, 13092],
            13100    => [13101, 13102],
            13110    => [13111, 13112],
            13120    => [13121],
            13130    => [13131],
        ],



        21000   =>  [
            21010   => [21011, 21012, 21013],
            21030   => [21031, 21032, 21033, 21034, 21035, 21036, 21037],
            21050   => [21051],
            21070   => [21071, 21072, 21073, 21074, 21075],
            21090   => [21091, 21092],
            21110   => [21111, 21112, 21113, 21114],
            21130   => [21131, 21132, 21139, 21133, 21140, 21134, 21141,
                        21135, 21142, 21136, 21143, 21137],                                 // Lagrange Clouds
            21250   => [21252],                                                             // E-Type Anomalies
            21210   => [21211, 21212, 21213, 21214, 21215, 21216, 2121721218],              // K-Type Anomalies
            21190   => [21191, 21194, 21195, 21196, 21199],                                 // L-Type Anomalies
            21150   => [21151, 21153, 21154, 21165],                                        // P-Type Anomalies
            21170   => [21171, 21172, 21174, 21176, 21178, 21179],                          // Q-Type Anomalies
            21230   => [21231, 21234],                                                      // T-Type Anomalies
        ],

        22000   =>  [                                                                   // Organic Structures
            22011,                                                                          // Solid Mineral Spheres
            22031,                                                                          // Lattice Mineral Spheres
            22050   => [22051, 22052, 22053],                                               // Thargoid Barnacles

            22070   => [22071, 22072, 22073, 22074, 22075, 22076, 22078, 22077],            // Brain Trees
            22490   => [22491, 22492],                                                      // Gyre Trees (Wrongly flagged in game)
            22290   => [22291, 22292, 22293, 22294, 22295],                                 // Peduncle Trees

            22091,                                                                          // Bark Mounds
            22110   => [22111, 22112, 22113, 22114, 22115, 22116, 22117, 22118],            // Anemones
            22130   => [22131],                                                             // Sinuous Tubers
            22311,                                                                          // Amphora Plants

            22210   => [22211, 22212, 22213, 22214, 22215, 22216, 22217],                   // Ice Crystals
            22230   => [22231, 22232, 22237, 22233, 22234, 22236, 22235],                   // Silicate Crystals
            22150   => [22151, 22152, 22153, 22154],                                        // Metallic Crystals

            22251,                                                                          // Crystalline Shards

            22170   => [22171, 22172, 22173, 22174],                                        // Collared Pods
            22590   => [22592],                                                             // Gyre Pods
            22410   => [22411],                                                             // Octahedral Pods
            22270   => [22271, 22272, 22273, 22274, 22275],                                 // Peduncle Pods
            22530   => [22531, 22532, 22533],                                               // Quadripartite Pods
            22510   => [22511, 22512, 22513, 22514, 22515],                                 // Rhizome Pods


            22330   => [22331, 22332, 22333, 22334, 22335],                                 // Bell Molluscs
            22470   => [22472, 22473],                                                      // Bulb Molluscs
            22550   => [22551, 22552,22553, 22554],                                         // Bullet Molluscs
            22370   => [22371],                                                             // Capsule Molluscs
            22190   => [22191, 22192, 22193, 22194, 22195, 22196, 22197],                   // Gourd Mollusc
            22450   => [22451, 22452, 22453],                                               // Parasol Molluscs
            22390   => [22391, 22392],                                                      // Reel Molluscs
            22610   => [22615],                                                             // Squid Molluscs
            22350   => [22351, 22352, 22353],                                               // Umbrella Molluscs

            22430   => [22431],                                                             // Void Hearts

            22570   => [22571, 22572, 22573],                                               // Calcite Plates
        ],



        31000   =>  [
            31010   => [31011, 31012, 31013, 31014, 31015],
            31021,
            31030   => [31031, 31032, 31033, 31034, 31035],
            31041,
            31051,
            31061,
        ],

        32000   =>  [
            32011,
            32021,
            32031,
            32041,
            32051,
            32061,
        ],
    ];
}