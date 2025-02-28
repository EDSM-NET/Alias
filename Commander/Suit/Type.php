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
          1     => 'Flight Suit',

        100     => 'citizensuitai_industrial',
        101     => 'citizensuitai_scientific',

        200     => 'lightassaultsuitai_class1',
        201     => 'lightassaultsuitai_class2',
        202     => 'lightassaultsuitai_class3',

        300     => 'assaultsuitai_class1',
        301     => 'assaultsuitai_class2',
        302     => 'assaultsuitai_class3',

        400     => 'closesuitai_class1',
        401     => 'closesuitai_class2',
        402     => 'closesuitai_class3',

        500     => 'Dominator Suit (Class 1)',
        501     => 'Dominator Suit (Class 2)',
        502     => 'Dominator Suit (Class 3)',
        503     => 'Dominator Suit (Class 4)',
        504     => 'Dominator Suit (Class 5)',

        600     => 'Maverick Suit (Class 1)',
        601     => 'Maverick Suit (Class 2)',
        602     => 'Maverick Suit (Class 3)',
        602     => 'Maverick Suit (Class 4)',
        604     => 'Maverick Suit (Class 5)',

        700     => 'rangedsuitai_class1',
        701     => 'rangedsuitai_class2',
        702     => 'rangedsuitai_class3',

        800     => 'Artemis Suit (Class 1)',
        801     => 'Artemis Suit (Class 2)',
        802     => 'Artemis Suit (Class 3)',
        803     => 'Artemis Suit (Class 4)',
        804     => 'Artemis Suit (Class 5)',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'flightsuit'                    => 1,

        'citizensuitai_industrial'      => 100,
        'citizensuitai_scientific'      => 101,

        'lightassaultsuitai_class1'     => 200,
        'lightassaultsuitai_class2'     => 201,
        'lightassaultsuitai_class3'     => 202,

        'assaultsuitai_class1'          => 300,
        'assaultsuitai_class2'          => 301,
        'assaultsuitai_class3'          => 302,

        'closesuitai_class1'            => 400,
        'closesuitai_class2'            => 401,
        'closesuitai_class3'            => 402,

        'tacticalsuit_class1'           => 500,
        'tacticalsuit_class2'           => 501,
        'tacticalsuit_class3'           => 502,
        'tacticalsuit_class4'           => 503,
        'tacticalsuit_class5'           => 504,

        'utilitysuit_class1'            => 600,
        'utilitysuit_class2'            => 601,
        'utilitysuit_class3'            => 602,
        'utilitysuit_class4'            => 603,
        'utilitysuit_class5'            => 604,

        'rangedsuitai_class1'           => 700,
        'rangedsuitai_class2'           => 701,
        'rangedsuitai_class3'           => 702,

        'explorationsuit_class1'        => 800,
        'explorationsuit_class2'        => 801,
        'explorationsuit_class3'        => 802,
        'explorationsuit_class4'        => 803,
        'explorationsuit_class5'        => 804,
    ];
}