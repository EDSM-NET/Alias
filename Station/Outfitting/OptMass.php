<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class OptMass extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Optimal mass';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Thrusters',
        'Frame Shift Drive',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Thrusters
          3200  => 48, // Not in category
          3201  => 48,
          3202  => 54,
          3203  => 60,
          3204  => 66,
          3205  => 72,
          3206  => 60,
        
          3211  => 80,
          3212  => 90,
          3213  => 100,
          3214  => 110,
          3215  => 120,
          3216  => 90,
        
          3221  => 280,
          3222  => 315,
          3223  => 350,
          3224  => 385,
          3225  => 420,
        
          3231  => 560,
          3232  => 630,
          3233  => 700,
          3234  => 770,
          3235  => 840,
        
          3241  => 960,
          3242  => 1080,
          3243  => 1200,
          3244  => 1320,
          3245  => 1440,
        
          3251  => 1440,
          3252  => 1620,
          3253  => 1800,
          3254  => 1980,
          3255  => 2160,
        
          3261  => 2240,
          3262  => 2520,
          3263  => 2800,
          3264  => 3080,
          3265  => 3360,
        
        // Core Internal > Frame Shift Drive
          3300  => 48, // Not in category
          3301  => 48,
          3302  => 54,
          3303  => 60,
          3304  => 75,
          3305  => 90,
        
          3311  => 80,
          3312  => 90,
          3313  => 100,
          3314  => 125,
          3315  => 150,
        
          3321  => 280,
          3322  => 315,
          3323  => 350,
          3324  => 438,
          3325  => 525,
        
          3331  => 560,
          3332  => 630,
          3333  => 700,
          3334  => 875,
          3335  => 1050,
        
          3341  => 960,
          3342  => 1080,
          3343  => 1200,
          3344  => 1500,
          3345  => 1800,
        
          3351  => 1440,
          3352  => 1620,
          3353  => 1800,
          3354  => 2250,
          3355  => 2700,
        
          3361  => 2240,
          3362  => 2520,
          3363  => 2800,
          3364  => 3500,
          3365  => 4200,
    ];
}