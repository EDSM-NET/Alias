<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Engineer;
use         EDSM\Alias;

class Specialisation extends Alias
{
    /**
     * List of specialisations used in game
     */
    static protected $name      = [
         1                              => [
            'Power plants',
            'Power distributors',
        ],
         2                              => [
            'Missiles',
            'Mines',
         ],
         3                              => [
            'Pulse lasers',
            'Burst lasers',
        ],
         4                              => [
            'Multi-cannons',
            'Fragmentation cannons',
        ],
         5                              => [
            'Hull reinforcement',
            'Armour',
        ],
         6                              => [
            'Frame shift drives',
            'Engines and thrusters',
        ],
         7                              => [
            'Power plants',
            'Power distributors',
        ],
         8                              => [
            'Engines and thrusters',
            'Frame shift drives',
        ],
         9                              => [
            'Shield boosters',
            'Shield generators', 
        ],
        10                              => [
            'Power distributors',
            'Pulse lasers',
        ],
        11                              => [
            'FSD interdictors',
            'Frame shift drives',
        ],
        12                              => [
            'Frame shift drives',
            'Shield generators',
        ],
        13                              => [
            'Utilities',
            'Scanners',
        ],
        14                              => [
            'Mines and Missiles',
            'Scanners',
        ],
        15                              => [
            'Fragmentation cannons',
            'Multi-cannons',
        ],
        16                              => [
            'Limpets',
            'Cannons',
        ],
        17                              => [
            'Shield generators',
            'Shield boosters',
        ],
        18                              => [
            'Defences',
            'Limpets',
        ],
        19                              => [
            'Plasma accelerators',
            'Utilities',
        ],
        20                              => [
            'Limpets',
            'Scanners',
        ],
        21                              => [
            'Explosive weaponry',
            'Armour',
            'Counter measures',
        ],
        22                              => [
            'Ballistics weaponry',
            'Fuel scoops',
            'Refineries',
            'Limpets controllers',
        ],
        23                              => [
            'Laser weaponry',
            'Shields',
            'Frame shift drives',
            'Engines',
        ],
        24                              => [
            'High energy weaponry',
            'Sensors',
            'Scanners',
            'Ship power systems',
            'Life support',
        ],
    ];
}