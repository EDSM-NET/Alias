<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class RechargeRating extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Recharge rating';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Shield Cell Bank',
    ];
    
    /**
     * Rating by outfitting
     */
    static protected $name          = [
        // Optional Internal > Shield Cell Bank
          4201  => 'E',
          4202  => 'E',
          4203  => 'D',
          4204  => 'D',
          4205  => 'D',
        
          4211  => 'E',
          4212  => 'D',
          4213  => 'D',
          4214  => 'D',
          4215  => 'C',
        
          4221  => 'D',
          4222  => 'D',
          4223  => 'D',
          4224  => 'C',
          4225  => 'C',
        
          4231  => 'D',
          4232  => 'D',
          4233  => 'C',
          4234  => 'C',
          4235  => 'B',
        
          4241  => 'D',
          4242  => 'C',
          4243  => 'C',
          4244  => 'B',
          4245  => 'B',
        
          4251  => 'D',
          4252  => 'C',
          4253  => 'C',
          4254  => 'B',
          4255  => 'A',
        
          4261  => 'D',
          4262  => 'C',
          4263  => 'B',
          4264  => 'B',
          4265  => 'A',
        
          4271  => 'C',
          4272  => 'C',
          4273  => 'B',
          4274  => 'A',
          4275  => 'A',
    ];
}