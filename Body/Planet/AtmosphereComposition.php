<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Body\Planet;
use         EDSM\Alias;

class AtmosphereComposition extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1      => 'Argon',
         2      => 'Ammonia',
         3      => 'Carbon dioxide',
         4      => 'Hydrogen',
         5      => 'Helium',
         6      => 'Iron',
         7      => 'Neon',
         8      => 'Methane',
         9      => 'Nitrogen',
        10      => 'Oxygen',
        11      => 'Silicates',
        12      => 'Sulphur dioxide',
        13      => 'Water',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'argon'                         => 1,
        'ammonia'                       => 2,
        'carbon dioxide'                => 3,       'carbondioxide'     => 3,
        'hydrogen'                      => 4,
        'helium'                        => 5,
        'iron'                          => 6,
        'neon'                          => 7,
        'methane'                       => 8,
        'nitrogen'                      => 9,
        'oxygen'                        => 10,
        'silicates'                     => 11,
        'sulphur dioxide'               => 12,      'sulphurdioxide'    => 12,
        'water'                         => 13,
    ];
}