<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Body\Planet;
use         EDSM\Alias;

class TerraformState extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         0      => 'Not terraformable',
    
         1      => 'Candidate for terraforming',
         2      => 'Terraformed',
         3      => 'Terraforming',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'terraformable'                 => 1,
        'candidate for terraforming'    => 1,
        
        'terraformed'                   => 2,
        'terraforming completed'        => 2,
        
        'terraforming'                  => 3,
        'being terraformed'             => 3,
    ];
}