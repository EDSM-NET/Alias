<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\System;
use         EDSM\Alias;

class Government extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         0                      => 'None',
         
         1                      => 'Anarchy',
         2                      => 'Communism',
         3                      => 'Confederacy',
         4                      => 'Cooperative',
         5                      => 'Corporate',
         6                      => 'Democracy',
         7                      => 'Dictatorship',
         8                      => 'Feudal',
         9                      => 'Imperial',
        10                      => 'Patronage',
        11                      => 'Prison colony',
        12                      => 'Theocracy',
        
        99                      => 'Workshop (Engineer)',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     *     => str_replace(;)
     *     => str_replace($government_)
     */
    static protected $alias = [
        'none'                  => 0,
        
        'anarchy'               => 1,
        'communism'             => 2,
        'confederacy'           => 3,
        'cooperative'           => 4,
        'corporate'             => 5,
        'democracy'             => 6,
        'dictatorship'          => 7,
        'feudal'                => 8,
        'imperial'              => 9,
        'patronage'             => 10,
        
        'prisoncolony'          => 11,
        'prison colony'         => 11,
        
        'theocracy'             => 12,
        
        'engineer'              => 99,
    ];
}