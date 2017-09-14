<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Bin extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Bin(s)';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Refinery',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Refinery
          4401  => 1,
          4402  => 1,
          4403  => 2,
          4404  => 3,
          4405  => 4,
        
          4411  => 2,
          4412  => 3,
          4413  => 4,
          4414  => 5,
          4415  => 6,
        
          4421  => 3,
          4422  => 4,
          4423  => 6,
          4424  => 7,
          4425  => 8,
        
          4431  => 4,
          4432  => 5,
          4433  => 7,
          4434  => 9,
          4435  => 10,
    ];
}