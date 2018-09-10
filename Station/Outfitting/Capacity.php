<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Capacity extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Capacity';
    static protected $unit              = '%1$s t';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Fuel Tank',
        'Cargo Rack',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Fuel Tank
          3001  => 2,
          3002  => 4,
          3003  => 8,
          3004  => 16,
          3005  => 32,
          3006  => 64,
          3007  => 128,
          3008  => 256,
        
        // Optional Internal > Cargo Rack
          4021  => 2,
          4022  => 4,
          4023  => 8,
          4024  => 16,
          4025  => 32,
          4026  => 64,
          4027  => 128,
          4028  => 256,
          
          4031  => 2,
          4032  => 1,
          4033  => 4,
          4034  => 16,
    ];
}