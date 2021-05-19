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

        500     => 'Dominator Suit (Class 1)',
        501     => 'Dominator Suit (Class 2)',
        501     => 'Dominator Suit (Class 3)',
        501     => 'Dominator Suit (Class 4)',

        600     => 'Maverick Suit (Class 1)',
        601     => 'Maverick Suit (Class 2)',
        602     => 'Maverick Suit (Class 3)',

        701     => 'rangedsuitai_class2',
        702     => 'rangedsuitai_class3',

        800     => 'Artemis Suit (Class 1)',
        801     => 'Artemis Suit (Class 2)',
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
        'tacticalsuit_class2'           => 501,
        'tacticalsuit_class3'           => 502,
        'tacticalsuit_class4'           => 503,

        'utilitysuit_class1'            => 600,
        'utilitysuit_class2'            => 601,
        'utilitysuit_class3'            => 602,

        'rangedsuitai_class2'           => 701,
        'rangedsuitai_class3'           => 702,

        'explorationsuit_class1'        => 800,
        'explorationsuit_class2'        => 801,
    ];
}