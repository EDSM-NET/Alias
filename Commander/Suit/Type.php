<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Commander\Suit;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
        100     => 'citizensuitai_industrial',
        101     => 'citizensuitai_scientific',

        200     => 'lightassaultsuitai_class1',
        201     => 'lightassaultsuitai_class2',

        300     => 'assaultsuitai_class1',
        301     => 'assaultsuitai_class2',
        302     => 'assaultsuitai_class3',

        400     => 'closesuitai_class1',
        402     => 'closesuitai_class3',

        500     => 'tacticalsuit_class1',

        600     => 'utilitysuit_class1',

        701     => 'rangedsuitai_class2',
        702     => 'rangedsuitai_class3',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'citizensuitai_industrial'      => 100,
        'citizensuitai_scientific'      => 101,

        'lightassaultsuitai_class1'     => 200,
        'lightassaultsuitai_class2'     => 201,

        'assaultsuitai_class1'          => 300,
        'assaultsuitai_class2'          => 301,
        'assaultsuitai_class3'          => 302,

        'closesuitai_class1'            => 400,
        'closesuitai_class3'            => 402,

        'tacticalsuit_class1'           => 500,

        'utilitysuit_class1'            => 600,

        'rangedsuitai_class2'           => 701,
        'rangedsuitai_class3'           => 702,
    ];
}