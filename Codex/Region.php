<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Codex;
use         EDSM\Alias;

class Region extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1                      => 'Galactic Centre',
         2                      => 'Empyrean Straits',
         3                      => 'Ryker\'s Hope',
         4                      => 'Odin\'s Hold',
         5                      => 'Norma Arm',
         6                      => 'Arcadian Stream',
         7                      => 'Izanami',
         8                      => 'Inner Orion-Perseus Conflux',
         9                      => 'Inner Scutum-Centaurus Arm',
        10                      => 'Norma Expanse',
        11                      => 'Trojan Belt',
        12                      => 'The Veils',
        13                      => 'Newton\'s Vault',
        14                      => 'The Conduit',
        15                      => 'Outer Orion-Perseus Conflux',
        16                      => 'Orion-Cygnus Arm',
        17                      => 'Temple',
        18                      => 'Inner Orion Spur',
        19                      => 'Hawking\'s Gap',
        20                      => 'Dryman\'s Point',
        21                      => 'Sagittarius-Carina Arm',
        22                      => 'Mare Somnia',
        23                      => 'Acheron',
        24                      => 'Formorian Frontier',
        25                      => 'Hieronymus Delta',
        26                      => 'Outer Scutum-Centaurus Arm',
        27                      => 'Outer Arm',
        28                      => 'Aquila\'s Halo',
        29                      => 'Errant Marches',
        30                      => 'Perseus Arm',
        31                      => 'The Formidine Rift',
        32                      => 'Vulcan Gate',
        33                      => 'Elysian Shore',
        34                      => 'Sanguineous Rim',
        35                      => 'Outer Orion Spur',
        36                      => 'Achilles\'s Altar',
        37                      => 'Xibalba',
        38                      => 'Lyra\'s Song',
        39                      => 'Tenebrae',
        40                      => 'The Abyss',
        41                      => 'Kepler\'s Crest',
        42                      => 'The Void',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'codex_regionname_1'    => 1,
        'codex_regionname_2'    => 2,
        'codex_regionname_3'    => 3,
        'codex_regionname_4'    => 4,
        'codex_regionname_5'    => 5,
        'codex_regionname_6'    => 6,
        'codex_regionname_7'    => 7,
        'codex_regionname_8'    => 8,
        'codex_regionname_9'    => 9,
        'codex_regionname_10'   => 10,
        'codex_regionname_11'   => 11,
        'codex_regionname_12'   => 12,
        'codex_regionname_13'   => 13,
        'codex_regionname_14'   => 14,
        'codex_regionname_15'   => 15,
        'codex_regionname_16'   => 16,
        'codex_regionname_17'   => 17,
        'codex_regionname_18'   => 18,
        'codex_regionname_19'   => 19,
        'codex_regionname_20'   => 20,
        'codex_regionname_21'   => 21,
        'codex_regionname_22'   => 22,
        'codex_regionname_23'   => 23,
        'codex_regionname_24'   => 24,
        'codex_regionname_25'   => 25,
        'codex_regionname_26'   => 26,
        'codex_regionname_27'   => 27,
        'codex_regionname_28'   => 28,
        'codex_regionname_29'   => 29,
        'codex_regionname_30'   => 30,
        'codex_regionname_31'   => 31,
        'codex_regionname_32'   => 32,
        'codex_regionname_33'   => 33,
        'codex_regionname_34'   => 34,
        'codex_regionname_35'   => 35,
        'codex_regionname_36'   => 36,
        'codex_regionname_37'   => 37,
        'codex_regionname_38'   => 38,
        'codex_regionname_39'   => 39,
        'codex_regionname_40'   => 40,
        'codex_regionname_41'   => 41,
        'codex_regionname_42'   => 42,
    ];
}