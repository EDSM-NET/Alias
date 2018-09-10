<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Rate extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Rate';
    static protected $unit              = '%1$s l/s';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Fuel Scoop',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Fuel Scoop
          4301  => 18,
          4302  => 24,
          4303  => 30,
          4304  => 36,
          4305  => 42,
        
          4311  => 32,
          4312  => 43,
          4313  => 54,
          4314  => 65,
          4315  => 75,
        
          4321  => 75,
          4322  => 100,
          4323  => 126,
          4324  => 151,
          4325  => 176,
        
          4331  => 147,
          4332  => 196,
          4333  => 245,
          4334  => 294,
          4335  => 342,
        
          4341  => 247,
          4342  => 330,
          4343  => 412,
          4344  => 494,
          4345  => 577,
        
          4351  => 376,
          4352  => 502,
          4353  => 627,
          4354  => 752,
          4355  => 878,
        
          4361  => 534,
          4362  => 712,
          4363  => 890,
          4364  => 1068,
          4365  => 1245,
        
          4371  => 720,
          4372  => 960,
          4373  => 1200,
          4374  => 1440,
          4375  => 1680,
    ];
}