<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class EnginesCapacity extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Engines capacity';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Power Distributor',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Power Distributor
          3501  => 8,
          3502  => 9,
          3503  => 10,
          3504  => 11,
          3505  => 12,
          
          3509  => 9,
        
          3511  => 10,
          3512  => 11,
          3513  => 12,
          3514  => 13,
          3515  => 14,
          
          3519  => 11,
        
          3521  => 12,
          3522  => 14,
          3523  => 15,
          3524  => 17,
          3525  => 18,
          
          3529  => 14,
        
          3531  => 15,
          3532  => 17,
          3533  => 19,
          3534  => 21,
          3535  => 23,
          
          3539  => 17,
        
          3541  => 19,
          3542  => 22,
          3543  => 24,
          3544  => 26,
          3545  => 29,
          
          3549  => 22,
        
          3551  => 23,
          3552  => 26,
          3553  => 29,
          3554  => 32,
          3555  => 35,
          
          3559  => 26,
        
          3561  => 27,
          3562  => 31,
          3563  => 34,
          3564  => 37,
          3565  => 41,
          
          3569  => 31,
        
          3571  => 32,
          3572  => 36,
          3573  => 40,
          3574  => 44,
          3575  => 48,
          
          3579  => 36,
    ];
}