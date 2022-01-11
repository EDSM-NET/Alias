<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Body\Planet;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1      => 'Metal-rich body',
         2      => 'High metal content world',
         
        11      => 'Rocky body',
        12      => 'Rocky Ice world', // Check in game
        
        21      => 'Icy body',
        
        31      => 'Earth-like world',
        
        41      => 'Water world',
        42      => 'Water giant', // Check in game
        43      => 'Water giant with life', // Check in game    
        
        51      => 'Ammonia world',
        
        61      => 'Gas giant with water-based life', // Check in game
        62      => 'Gas giant with ammonia-based life', // Check in game
        
        71      => 'Class I gas giant',
        72      => 'Class II gas giant',
        73      => 'Class III gas giant',
        74      => 'Class IV gas giant',
        75      => 'Class V gas giant',
        
        81      => 'Helium-rich gas giant',
        82      => 'Helium gas giant',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'metal rich body'                           => 1,       'metal-rich body'                           => 1,
        'high metal content body'                   => 2,       'high metal content world'                  => 2,
        
        'rocky body'                                => 11,
        'rocky ice body'                            => 12,      'rocky ice world'                           => 12,
        
        'icy body'                                  => 21,
        
        'earthlike body'                            => 31,      'earthlike'                                 => 31,      'earth-like world'                          => 31,
        
        'water world'                               => 41,
        'water giant'                               => 42,
        'water giant with life'                     => 43,
        
        'ammonia world'                             => 51,
        
        'gas giant with water based life'           => 61,      'gas giant with water-based life'           => 61,
        'gas giant with ammonia based life'         => 62,      'gas giant with ammonia-based life'         => 62,
        
        'sudarsky class i gas giant'                => 71,      'class i gas giant'                         => 71,
        'sudarsky class ii gas giant'               => 72,      'class ii gas giant'                        => 72,
        'sudarsky class iii gas giant'              => 73,      'class iii gas giant'                       => 73,
        'sudarsky class iv gas giant'               => 74,      'class iv gas giant'                        => 74,
        'sudarsky class v gas giant'                => 75,      'class v gas giant'                         => 75,
        
        'helium rich gas giant'                     => 81,      'helium-rich gas giant'                     => 81,
        'helium gas giant'                          => 82,
    ];
}