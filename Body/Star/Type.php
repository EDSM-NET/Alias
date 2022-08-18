<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Body\Star;
use         EDSM\Alias;

class Type extends Alias
{
    use \EDSM\Alias\Body\Star\Symbol;
    use \EDSM\Alias\Body\Star\Scoopable;

    /**
     * List of names used in game
     */
    static protected $name = [
        // Main sequence
          1     => 'O (Blue-White) Star',

          2     => 'B (Blue-White) Star',
          201   => 'B (Blue-White super giant) Star',

          3     => 'A (Blue-White) Star',
          301   => 'A (Blue-White super giant) Star',

          4     => 'F (White) Star',
          401   => 'F (White super giant) Star',

          5     => 'G (White-Yellow) Star',
          5001  => 'G (White-Yellow super giant) Star',

          6     => 'K (Yellow-Orange) Star',
          601   => 'K (Yellow-Orange giant) Star',

          7     => 'M (Red dwarf) Star',
          701   => 'M (Red giant) Star',
          702   => 'M (Red super giant) Star',

          8     => 'L (Brown dwarf) Star',
          9     => 'T (Brown dwarf) Star',
         10     => 'Y (Brown dwarf) Star',

        // Proto stars
         11     => 'T Tauri Star',
         12     => 'Herbig Ae/Be Star',

        // Wolf-Rayet
         21     => 'Wolf-Rayet Star',
         22     => 'Wolf-Rayet N Star',
         23     => 'Wolf-Rayet NC Star',
         24     => 'Wolf-Rayet C Star',
         25     => 'Wolf-Rayet O Star',

        // Carbon stars
         31     => 'CS Star', // Check in game
         32     => 'C Star',
         33     => 'CN Star',
         34     => 'CJ Star', // Check in game
         35     => 'CH Star', // Check in game
         36     => 'CHd Star', // Check in game

         41     => 'MS-type Star', // Check in game
         42     => 'S-type Star', // Check in game

        // White dwarfs
         51     => 'White Dwarf (D) Star',
        501     => 'White Dwarf (DA) Star',
        502     => 'White Dwarf (DAB) Star',
        503     => 'White Dwarf (DAO) Star',
        504     => 'White Dwarf (DAZ) Star',
        505     => 'White Dwarf (DAV) Star',
        506     => 'White Dwarf (DB) Star',
        507     => 'White Dwarf (DBZ) Star',
        508     => 'White Dwarf (DBV) Star',
        509     => 'White Dwarf (DO) Star',
        510     => 'White Dwarf (DOV) Star',
        511     => 'White Dwarf (DQ) Star',
        512     => 'White Dwarf (DC) Star',
        513     => 'White Dwarf (DCV) Star',
        514     => 'White Dwarf (DX) Star',

         91     => 'Neutron Star',
         92     => 'Black Hole', // Check in game
         93     => 'Supermassive Black Hole', // Check in game

         94     => 'X', // Exotic?? // Check in game

        111     => 'RoguePlanet', // Check in game
        112     => 'Nebula', // Check in game
        113     => 'StellarRemnantNebula', // Check in game
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        // Main sequence
        'o'                         => 1,

        'b'                         => 2,
        'b_bluewhitesupergiant'     => 201,

        'a'                         => 3,
        'a_bluewhitesupergiant'     => 301,

        'f'                         => 4,
        'f_whitesupergiant'         => 401,

        'g'                         => 5,
        'g_whitesupergiant'         => 5001,

        'k'                         => 6,
        'k_orangegiant'             => 601,

        'm'                         => 7,
        'm_redgiant'                => 701,
        'm_redsupergiant'           => 702,

        'l'                         => 8,
        't'                         => 9,
        'y'                         => 10,

        // Proto stars
        'tts'                       => 11,
        'aebe'                      => 12,

        // Wolf-Rayet
        'w'                         => 21,
        'wn'                        => 22,
        'wnc'                       => 23,
        'wc'                        => 24,
        'wo'                        => 25,

        // carbon stars
        'cs'                        => 31,
        'c'                         => 32,
        'cn'                        => 33,
        'cj'                        => 34,
        'ch'                        => 35,
        'chd'                       => 36,

        'ms'                        => 41,
        's'                         => 42,

        // white dwarfs
        'd'                         => 51,
        'da'                        => 501,
        'dab'                       => 502,
        'dao'                       => 503,
        'daz'                       => 504,
        'dav'                       => 505,
        'db'                        => 506,
        'dbz'                       => 507,
        'dbv'                       => 508,
        'do'                        => 509,
        'dov'                       => 510,
        'dq'                        => 511,
        'dc'                        => 512,
        'dcv'                       => 513,
        'dx'                        => 514,

        // Others
        'n'                         => 91,

        'h'                         => 92,
        'supermassiveblackhole'     => 93,

        'x'                         => 94,

        'rogueplanet'               => 111,
        'nebula'                    => 112,
        'stellarremnantnebula'      => 113,
    ];

    /**
     * List of symbols for stars
     */
    static protected $symbols = array(
        // Main sequence
          1     => 'O',
          2     => 'B',

          3     => 'A',
          301   => 'A',

          4     => 'F',
          401   => 'F',

          5     => 'G',
          5001  => 'G',

          6     => 'K',
          601   => 'K',

          7     => 'M',
          701   => 'M',
          702   => 'M',

          8     => 'L',
          9     => 'T',
         10     => 'Y',

        // Proto stars
         11     => 'TTS',
         12     => 'AeBe',

        // Wolf-Rayet
         21     => 'W',
         22     => 'WN',
         23     => 'WNC',
         24     => 'WC',
         25     => 'WO',

        // Carbon stars
         31     => 'CS',
         32     => 'C',
         33     => 'CN',
         34     => 'CJ',
         35     => 'CH',
         36     => 'CHd',

         41     => 'MS',
         42     => 'S',

        // White dwarfs
         51     => 'D',
        501     => 'DA',
        502     => 'DAB',
        503     => 'DAO',
        504     => 'DAZ',
        505     => 'DAV',
        506     => 'DB',
        507     => 'DBZ',
        508     => 'DBV',
        509     => 'DO',
        510     => 'DOV',
        511     => 'DQ',
        512     => 'DC',
        513     => 'DCV',
        514     => 'DX',

         91     => 'N',
         92     => 'H',
         93     => 'H',

         94     => 'X', // Exotic?? // Check in game

        111     => 'RoguePlanet', // Check in game
        112     => 'Nebula', // Check in game
        113     => 'StellarRemnantNebula', // Check in game
    );

    /**
     * List of scoopable star
     */
    static protected $scoopable = [
        1,
        2, 201,
        3, 301,
        4,
        5,
        6, 601,
        7, 701, 702,
        101, 102, 103, 104, 105,
    ];
}