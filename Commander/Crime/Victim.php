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
          8     => 'Generator',
          9     => 'Data Link',
         10     => 'Data Point',
        
         51     => 'Defence System Generator',
         52     => 'Hackable Data Transmitter',
         53     => 'Hackable Comms Array',
         54     => 'Cargo Bay',
         55     => 'Cargo Bay',
         56     => 'Automated Defence Turret',
         57     => 'Defence System Generator',
         58     => 'Automated Defence Turret',
        
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
        
        221     => 'Federal Navy Fighter',
        222     => 'System Defence Fighter',
        223     => 'Imperial Navy Fighter',
        
        301     => 'Wedding Barge',
        302     => 'Cruise Ship',
        
        401     => 'Search And Rescue Patrol',
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
        'poi_portablegenerator'                 => 8,
        'poi_datalink'                          => 9,
        'poi_datapoint'                         => 10,
        
        'mega_generator_small'                  => 51,
        'mega_data01'                           => 52,
        'mega_commsarray'                       => 53,
        'mega_cargobay'                         => 54,
        'mega_cargobay_recessed'                => 55,
        'mega_turretplatformb'                  => 56,
        'mega_generator_large'                  => 57,
        'mega_defences_name'                    => 58,
        
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
        
        'militaryfighter_federation'            => 221,
        'militaryfighter_independent'           => 222,
        'militaryfighter_empire'                => 223,
        
        'passengerliner_wedding'                => 301,
        'passengerliner_cruise'                 => 302,
        
        'searchandrescue'                       => 401,
    ];
}