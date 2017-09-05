<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Body\Ring;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1 => 'Icy',
         2 => 'Metallic',
         3 => 'Metal Rich',
         4 => 'Rocky',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     *     => str_replace(eringclass_)
     */
    static protected $alias = [
        'icy'                       => 1,
        'metallic'                  => 2,
        'metal rich'                => 3,
        'rocky'                     => 4,
    ];
}