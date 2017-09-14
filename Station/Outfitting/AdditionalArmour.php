<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class AdditionalArmour extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Additional Armour';
    
    /**
     * List of categories having additional armour
     */
    static protected $have          = [
        'Hull Reinforcement Package',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Hull Reinforcement Package
          4801  => 80,
          4802  => 110,
        
          4811  => 150,
          4812  => 190,
        
          4821  => 230,
          4822  => 260,
        
          4831  => 300,
          4832  => 330,
        
          4841  => 360,
          4842  => 390,
    ];
}