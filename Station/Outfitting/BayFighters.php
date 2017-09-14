<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class BayFighters extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Fighters/bay';
    
    /**
     * List of categories having bay
     */
    static protected $have          = [
        'Fighter Hangar',
    ];
    
    /**
     * Number of fighters/bay by outfitting
     */
    static protected $name          = [
        // Optional Internal > Fighter Hangar
          5541  => 6,
        
          5551  => 8,
        
          5561  => 15,
    ];
}