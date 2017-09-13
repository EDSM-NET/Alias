<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Body\Star;
use         EDSM\Alias;

class Type extends Alias
{
    use \EDSM\Alias\Body\Star\Scoopable;
    
    /**
     * List of names used in game
     */
    static protected $name = [
        // Main sequence
          1     => 'O (Blue-White) Star',
          2     => 'B (Blue-White) Star',
          
          3     => 'A (Blue-White) Star',
          301   => 'A (Blue-White super giant) Star',
          
          4     => 'F (White) Star',
          401   => 'F (White super giant) Star',
          
          5     => 'G (White-Yellow) Star',
          
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
         51     => 'D (White Dwarf) Star', // Check in game
        
         91     => 'Neutron Star',
         92     => 'Black Hole', // Check in game
         
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
        
        'a'                         => 3,
        'a_bluewhitesupergiant'     => 301,
        
        'f'                         => 4,
        'f_whitesupergiant'         => 401,
        
        'g'                         => 5,
        
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
        'da'                        => 51,
        'dab'                       => 51,
        'dao'                       => 51,
        'daz'                       => 51,
        'dav'                       => 51,
        'db'                        => 51,
        'dbz'                       => 51,
        'dbv'                       => 51,
        'do'                        => 51,
        'dov'                       => 51,
        'dq'                        => 51,
        'dc'                        => 51,
        'dcv'                       => 51,
        'dx'                        => 51,
        
        // Others
        'n'                         => 91,
        
        'h'                         => 92,
        'supermassiveblackhole'     => 92,
        
        'x'                         => 94,
        
        'rogueplanet'               => 111,
        'nebula'                    => 112,
        'stellarremnantnebula'      => 113,
    ];
    
    /**
     * List of scoopable star
     */
    static protected $scoopable = [
        1,
        2,
        3, 301,
        4,
        5,
        6, 601,
        7, 701, 702,
        101, 102, 103, 104, 105,
    ];
}