<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Body\Planet;
use         EDSM\Alias;

class Material extends Alias
{
    use \EDSM\Alias\Body\Planet\Material;
    
    /**
     * List of names used in game
     */
    static protected $name = [
         1      => 'Antimony',
         2      => 'Arsenic',
         3      => 'Cadmium',
         4      => 'Carbon',
         5      => 'Chromium',
         6      => 'Germanium',
         7      => 'Iron',
         8      => 'Manganese',
         9      => 'Mercury',
        10      => 'Molybdenum',
        11      => 'Nickel',
        12      => 'Niobium',
        13      => 'Phosphorus',
        14      => 'Polonium',
        15      => 'Ruthenium',
        16      => 'Selenium',
        17      => 'Sulphur',
        18      => 'Technetium',
        19      => 'Tellurium',
        20      => 'Tin',
        21      => 'Tungsten',
        22      => 'Vanadium',
        23      => 'Yttrium',
        24      => 'Zinc',
        25      => 'Zirconium',
        26      => 'Rhenium',
        27      => 'Lead',
        28      => 'Boron',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'antimony'          => 1,
        'arsenic'           => 2,
        'cadmium'           => 3,
        'carbon'            => 4,
        'chromium'          => 5,
        'germanium'         => 6,
        'iron'              => 7,
        'manganese'         => 8,
        'mercury'           => 9,
        'molybdenum'        => 10,
        'nickel'            => 11,
        'niobium'           => 12,
        'phosphorus'        => 13,
        'polonium'          => 14,
        'ruthenium'         => 15,
        'selenium'          => 16,
        'sulphur'           => 17,
        'technetium'        => 18,
        'tellurium'         => 19,
        'tin'               => 20,
        'tungsten'          => 21,
        'vanadium'          => 22,
        'yttrium'           => 23,
        'zinc'              => 24,
        'zirconium'         => 25,
        'rhenium'           => 26,
        'lead'              => 27,
        'boron'             => 28,
    ];
    
    /**
     * List of symbols for materials
     */
    static protected $symbols = array(
         1      => 'Sb',
         2      => 'As',
         3      => 'Cd',
         4      => 'C',
         5      => 'Cr',
         6      => 'Ge',
         7      => 'Fe',
         8      => 'Mn',
         9      => 'Hg',
        10      => 'Mo',
        11      => 'Ni',
        12      => 'Nb',
        13      => 'P',
        14      => 'Po',
        15      => 'Ru',
        16      => 'Se',
        17      => 'S',
        18      => 'Tc',
        19      => 'Te',
        20      => 'Sn',
        21      => 'W',
        22      => 'V',
        23      => 'Y',
        24      => 'Zn',
        25      => 'Zr',
        26      => 'Re',
        27      => 'Pb',
        28      => 'B',
    );
    
    /**
     * List of rarity for materials
     */
    static protected $rarity = array(
         1      => 'Very Rare',
         2      => 'Common',
         3      => 'Rare',
         4      => 'Very Common',
         5      => 'Common',
         6      => 'Common',
         7      => 'Very Common',
         8      => 'Common',
         9      => 'Rare',
        10      => 'Rare',
        11      => 'Very Common',
        12      => 'Rare',
        13      => 'Very Common',
        14      => 'Very Rare',
        15      => 'Very Rare',
        16      => 'Common',
        17      => 'Very Common',
        18      => 'Very Rare',
        19      => 'Very Rare',
        20      => 'Rare',
        21      => 'Rare',
        22      => 'Common',
        23      => 'Very Rare',
        24      => 'Common',
        25      => 'Common',
        26      => 'Very Common',
        27      => 'Very Common',
        28      => 'Common',
    );
}