<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Codex;
use         EDSM\Alias;

class Category extends Alias
{
    //use \EDSM\Alias\Station\Commodity\Category;

    /**
     * List of names used in game
     */
    static protected $name  = [
        10000                           => 'Astronomical Bodies',
        20000                           => 'Biological and Geological',
        30000                           => 'Xenological',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'codex_category_stellarbodies'  => 10000,
        'codex_category_biology'        => 20000,
        'codex_category_civilisations'  => 30000,
    ];



    /**
     * List of subcategories in each categories
     */
    static protected $in    = [
        10000   =>  [
                        11000,
                        12000,
                        13000,
                    ],

        20000   =>  [
                        21000,
                        22000,
                    ],

        30000   =>  [
                        31000,
                        32000,
                    ],
    ];
}