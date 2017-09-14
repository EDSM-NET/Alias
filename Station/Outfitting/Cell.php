<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Cell extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Cell(s)';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Shield Cell Bank',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Shield Cell Bank
          4201  => 4,
          4202  => 2,
          4203  => 3,
          4204  => 4,
          4205  => 3,
        
          4211  => 5,
          4212  => 3,
          4213  => 4,
          4214  => 5,
          4215  => 4,
        
          4221  => 5,
          4222  => 3,
          4223  => 4,
          4224  => 5,
          4225  => 4,
        
          4231  => 5,
          4232  => 3,
          4233  => 4,
          4234  => 5,
          4235  => 4,
        
          4241  => 5,
          4242  => 3,
          4243  => 4,
          4244  => 5,
          4245  => 4,
        
          4251  => 6,
          4252  => 4,
          4253  => 5,
          4254  => 6,
          4255  => 5,
        
          4261  => 6,
          4262  => 4,
          4263  => 5,
          4264  => 6,
          4265  => 5,
        
          4271  => 6,
          4272  => 4,
          4273  => 5,
          4274  => 6,
          4275  => 5,
    ];
}