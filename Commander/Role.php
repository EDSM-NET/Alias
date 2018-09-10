<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Commander;
use         EDSM\Alias;

class Role extends Alias
{
    /**
     * List of expeditions roles
     */
    static protected $name  = [
        10  => 'Explorer',
        20  => 'Fuel Rat',
        30  => 'Rock Rat',
        40  => 'Fleet Mechanic',
        50  => 'Tour Guide',
        60  => 'POI Scout',
        70  => 'Photographer',
        80  => 'Fighter Escort',
        90  => 'Geologist',
        100 => 'Scientist',
        110 => 'Miner',
        120 => 'Medicorp',
        130 => 'Fleet Logistics',
             
        999 => 'Media',
    ];
}