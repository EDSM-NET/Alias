<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class JumpBoost extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Jump Boost';
    static protected $unit              = '%1$s ly';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Guardian FSD Booster',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Guardian FSD Booster
          3801  => 4,
        
          3811  => 6,
        
          3821  => 7.75,
        
          3831  => 9.25,
        
          3841  => 10.5,
    ];
}