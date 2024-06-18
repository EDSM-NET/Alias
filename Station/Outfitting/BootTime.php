<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class BootTime extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Boot Time';
    static protected $lessIsGood        = true;

    /**
     * List of categories
     */
    static protected $have          = [
        // Core Internal
        'FSD Housing',

        // Optional Internal
        'Shield Cell Banks',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Frame Shift Drive
          3300  => 10, // Not in category
          3301  => 10,
          3302  => 10,
          3303  => 10,
          3304  => 10,
          3305  => 10,

          3311  => 10,
          3312  => 10,
          3313  => 10,
          3314  => 10,
          3315  => 10,

          3321  => 10,
          3322  => 10,
          3323  => 10,
          3324  => 10,
          3325  => 10,

          3331  => 10,
          3332  => 10,
          3333  => 10,
          3334  => 10,
          3335  => 10,

          3341  => 10,
          3342  => 10,
          3343  => 10,
          3344  => 10,
          3345  => 10,

          3351  => 10,
          3352  => 10,
          3353  => 10,
          3354  => 10,
          3355  => 10,

          3361  => 10,
          3362  => 10,
          3363  => 10,
          3364  => 10,
          3365  => 10,
        
          3935  => 10,
        
          3942  => 10,
          3945  => 10,
        
          3952  => 10,
          3953  => 10,
          3955  => 10,
        
          3965  => 10,
        
          3972  => 10,
          3975  => 10,

        // Optional Internal > Shield Cell Bank
          4201  => 25,
          4202  => 25,
          4203  => 25,
          4204  => 25,
          4205  => 25,

          4211  => 25,
          4212  => 25,
          4213  => 25,
          4214  => 25,
          4215  => 25,

          4221  => 25,
          4222  => 25,
          4223  => 25,
          4224  => 25,
          4225  => 25,

          4231  => 25,
          4232  => 25,
          4233  => 25,
          4234  => 25,
          4235  => 25,

          4241  => 25,
          4242  => 25,
          4243  => 25,
          4244  => 25,
          4245  => 25,

          4251  => 25,
          4252  => 25,
          4253  => 25,
          4254  => 25,
          4255  => 25,

          4261  => 25,
          4262  => 25,
          4263  => 25,
          4264  => 25,
          4265  => 25,

          4271  => 25,
          4272  => 25,
          4273  => 25,
          4274  => 25,
          4275  => 25,
    ];
}
