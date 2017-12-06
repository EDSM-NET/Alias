<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Commander\Crime;
use         EDSM\Alias;

class Victim extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
          1     => 'Generator',
          2     => 'Defence Turret',
          3     => 'Defence Turret',
          4     => 'Defence Platform',
          5     => 'Defence Turret',
          6     => 'Defence Turret',
          7     => 'Defence Platform',
         
        101     => 'Sentry Skimmer',
        102     => 'Guardian',
        103     => 'Stinger',
        104     => 'Goliath',
        
        201     => 'Imperial Navy Vessel',
        202     => 'System Defence Force',
        203     => 'Alliance Defence Force',
        204     => 'Federal Navy Ship',
        
        210     => 'Allied Police Forces',
        211     => 'System Authority Vessel',
        212     => 'Federal Security Service',
        213     => 'Internal Security Service',
        
        301     => 'Wedding Barge',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'poi_generator'                         => 1,
        'poi_turretbasea'                       => 2,
        'poi_turretplatforma'                   => 3,
        'poi_turretbunkera_fd'                  => 4,
        'poi_turretbasec'                       => 5,
        'poi_turretbaseb'                       => 6,
        'poi_turretbunkera'                     => 7,
        
        'skimmerdrone'                          => 101,
        'missileskimmer'                        => 102,
        'bombskimmerdrone'                      => 103,
        'bossskimmer'                           => 104,
        
        'military_empire'                       => 201,
        'military_independent'                  => 202,
        'military_alliance'                     => 203,
        'military_federation'                   => 204,
        
        'police_alliance'                       => 210,
        'police_independent'                    => 211,
        'police_federation'                     => 212,
        'police_empire'                         => 213,
        
        'passengerliner_wedding'                => 301,
    ];
}