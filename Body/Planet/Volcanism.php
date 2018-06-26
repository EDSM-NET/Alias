<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Body\Planet;
use         EDSM\Alias;

class Volcanism extends Alias
{
    use \EDSM\Alias\Prefix;
    
    /**
     * List of prefix used in game
     */
    static protected $prefixName    = [
        1   => 'Minor',
        2   => 'Major',
    ];
    
    /**
     * List of names used in game
     */
    static protected $name          = [
          0     => 'No volcanism',
    
          1     => 'Water Magma', 
         11     => 'Sulphur Dioxide Magma',
         21     => 'Ammonia Magma',
         31     => 'Methane Magma',
         41     => 'Nitrogen Magma',
         51     => 'Rocky Magma',
         61     => 'Metallic Magma',
         71     => 'Water Geysers',
         81     => 'Carbon Dioxide Geysers',
         91     => 'Ammonia Geysers',
        101     => 'Methane Geysers',
        111     => 'Nitrogen Geysers',
        121     => 'Helium Geysers',
        131     => 'Silicate Vapour Geysers',
    ];
    
    /**
     * List of prefix received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $prefixAlias   = [
        'minor'         => 1,
        'major'         => 2,
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     *     => str_replace( volcanism)
     *     => str_replace(ALL PREFIXES)
     */
    static protected $alias = [
        'water magma'                           => 1,
        'sulphur dioxide magma'                 => 11,
        'ammonia magma'                         => 21,
        'methane magma'                         => 31,
        'nitrogen magma'                        => 41,
        
        'rocky magma'                           => 51,
        'silicate magma'                        => 51,
        
        'metallic magma'                        => 61,
        'iron magma'                            => 61,
        
        'water geysers'                         => 71,
        'carbon dioxide geysers'                => 81,
        'ammonia geysers'                       => 91,
        'methane geysers'                       => 101,
        'nitrogen geysers'                      => 111,
        'helium geysers'                        => 121,
        'silicate vapour geysers'               => 131,
    ];
}