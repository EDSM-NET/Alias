<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 * 
 * Materials ID for the recipes are from Alias\Commander\Material
 */
 
namespace   Alias\Commander;
use         EDSM\Alias;

class TechnologyBroker extends Alias
{
    use \EDSM\Alias\Commander\Synthesis;
    
    /**
     * List of names used in game
     */
    static protected $name      = [
         6  => 'Enzyme Missile Rack [Fixed]',
         7  => 'Remote Release Flechette Launcher [Fixed]',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias     = [
        'causticmissile_fixed_medium'       => 6,
        'flechettelauncher_fixed_medium'    => 7,
    ];
    
    /**
     * List of names used in game
     * 
     * Material Id => Count
     */
    static private $recipes         = [
         6  => [
            78  => 30,              // Thargoid Energy Cell     * 1
            72  => 1,               // Vanadium                 * 1
            26  => 1,               // Germanium                * 1
        ],
         7  => [
            78  => 30,              // Thargoid Energy Cell     * 1
            72  => 1,               // Vanadium                 * 1
            26  => 1,               // Germanium                * 1
        ],
    ];
}