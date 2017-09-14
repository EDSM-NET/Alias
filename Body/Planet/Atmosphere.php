<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Body\Planet;
use         EDSM\Alias;

class Atmosphere extends Alias
{
    use \EDSM\Alias\Prefix;
    
    /**
     * List of prefix used in game
     */
    static protected $prefixName    = [
        1   => 'Thin',
        2   => 'Hot thin',
        3   => 'Hot',
        4   => 'Thick',
        5   => 'Hot thick',
    ];
    
    /**
     * List of names used in game
     */
    static protected $name          = [
          0         => 'No atmosphere',
    
          1         => 'Suitable for water-based life', 
          2         => 'Ammonia and Oxygen',
          3         => 'Ammonia',
          4         => 'Water',
          5         => 'Carbon dioxide',
          6         => 'Sulphur dioxide',
          7         => 'Nitrogen',
          8         => 'Water-rich',
          9         => 'Methane-rich',
         10         => 'Ammonia-rich',
         11         => 'Carbon dioxide-rich',
         12         => 'Methane',
         13         => 'Helium',
         14         => 'Silicate vapour',
         15         => 'Metallic vapour',
         16         => 'Neon-rich',
         17         => 'Argon-rich',
         18         => 'Neon',
         19         => 'Argon',
         20         => 'Oxygen',
         21         => 'Nitrogen-rich',
    ];
    
    /**
     * List of prefix received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $prefixAlias   = [
        'hot thick'     => 5,
        'hot thin'      => 2,
        
        'thin'          => 1,
        'thick'         => 4,
        
        'hot'           => 3,
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     *     => str_replace( atmosphere)
     *     => str_replace(ALL PREFIXES)
     */
    static protected $alias = [
        'earthlike'                         => 1,       'suitable for water-based life'     => 1,       'suitable for water based life'     => 1,
        'ammoniaoxygen'                     => 2,       'ammonia and oxygen'                => 2,
        'ammonia'                           => 3,
        'water'                             => 4,
        'carbon dioxide'                    => 5,       'carbon-dioxide'                    => 5,
        
        'sulphurdioxide'                    => 6,       'sulphur dioxide'                   => 6,       'sulphur-dioxide'                   => 6,
        'sulfurdioxide'                     => 6,       'sulfur dioxide'                    => 6,       'sulfur-dioxide'                    => 6,
        
        'nitrogen'                          => 7,
        'water rich'                        => 8,       'water-rich'                        => 8,
        'methane rich'                      => 9,       'methane-rich'                      => 9,
        'ammonia rich'                      => 10,      'ammonia-rich'                      => 10,
        'carbon dioxide rich'               => 11,      'carbon dioxide-rich'               => 11,
        'methane'                           => 12,
        'helium'                            => 13,
        'silicate vapour'                   => 14,      'silicate-vapour'                   => 14,
        'metallic vapour'                   => 15,
        'metallic-vapour'                   => 15,
        'neon rich'                         => 16,      'neon-rich'                         => 16,
        'argon rich'                        => 17,      'argon-rich'                        => 17,
        'neon'                              => 18,
        'argon'                             => 19,
        'oxygen'                            => 20,
        'nitrogen rich'                     => 21,      'nitrogen-rich'                     => 21,
    ];
}