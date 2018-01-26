<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Ship;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
        128049267   => 'Adder',
        128816574   => 'Alliance Chieftain',
        128049363   => 'Anaconda',
        128049303   => 'Asp Explorer',
        128672276   => 'Asp Scout',
        128049345   => 'Beluga Liner',
        128049279   => 'Cobra MkIII',
        128672262   => 'Cobra MkIV',
        128671831   => 'Diamondback Explorer',
        128671217   => 'Diamondback Scout',
        128049291   => 'Dolphin',
        128049255   => 'Eagle',
        128672145   => 'Federal Assault Ship',
        128049369   => 'Federal Corvette',
        128049321   => 'Federal Dropship',
        128672152   => 'Federal Gunship',
        128049351   => 'Fer-de-Lance',
        128049261   => 'Hauler',
        128049315   => 'Imperial Clipper',
        128671223   => 'Imperial Courier',
        128049375   => 'Imperial Cutter',
        128672138   => 'Imperial Eagle',
        128672269   => 'Keelback',
        128049327   => 'Orca',
        128049339   => 'Python',
        128049249   => 'Sidewinder',
        128049285   => 'Type-6 Transporter',
        128049297   => 'Type-7 Transporter',
        128049333   => 'Type-9 Heavy',
        128785619   => 'Type-10 Defender',
        128049273   => 'Viper MkIII',
        128672255   => 'Viper MkIV',
        128049309   => 'Vulture',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        // Adder
        'adder'                             => 128049267,
        
        // Alliance Chieftain
        'typex'                             => 128816574,
        
        // Anaconda
        'anaconda'                          => 128049363,
        
        // Asp Explorer
        'asp'                               => 128049303,
        'asp explorer'                      => 128049303,
        
        // Asp Scout
        'asp_scout'                         => 128672276,
        'asp scout'                         => 128672276,
        
        // Beluga Liner
        'belugaliner'                       => 128049345,
        'beluga liner'                      => 128049345,
        
        // Cobra MkIII
        'cobramkiii'                        => 128049279,
        'cobra mk. iii'                     => 128049279,
        
        // Cobra MkIV
        'cobramkiv'                         => 128672262,
        'cobra mk. iv'                      => 128672262,
        
        // Dolphin
        'dolphin'                           => 128049291,
        
        // Diamondback Explorer
        'diamondbackxl'                     => 128671831,
        'diamondback explorer'              => 128671831,
        
        // Diamondback Scout
        'diamondback'                       => 128671217,
        'diamondback scout'                 => 128671217,
        
        // Eagle
        'eagle'                             => 128049255,
        
        // Federal Assault Ship
        'federation_dropship_mkii'          => 128672145,
        'federal assault ship'              => 128672145,
        
        // Federal Corvette
        'federation_corvette'               => 128049369,
        'federal corvette'                  => 128049369,
        
        // Federal Dropship
        'federation_dropship'               => 128049321,
        'federal dropship'                  => 128049321,
        
        // Federal Gunship
        'federation_gunship'                => 128672152,
        'federal gunship'                   => 128672152,
        
        // Fer-de-Lance
        'ferdelance'                        => 128049351,
        'fer-de-lance'                      => 128049351,
        
        // Hauler
        'hauler'                            => 128049261,
        
        // Imperial Clipper
        'empire_trader'                     => 128049315,
        'imperial clipper'                  => 128049315,
        
        // Imperial Courier
        'empire_courier'                    => 128671223,
        'imperial courier'                  => 128671223,
        
        // Imperial Cutter
        'cutter'                            => 128049375,
        'imperial cutter'                   => 128049375,
        
        // Imperial Eagle
        'empire_eagle'                      => 128672138,
        'imperial eagle'                    => 128672138,
        
        
        // Keelback
        'independant_trader'                => 128672269,
        'keelback'                          => 128672269,
        
        // Orca
        'orca'                              => 128049327,
        
        // Python
        'python'                            => 128049339,
        
        // Sidewinder
        'sidewinder'                        => 128049249,
        
        // Type-6 Transporter
        'type6'                             => 128049285,
        'type 6 transporter'                => 128049285,
        
        // Type-7 Transporter
        'type7'                             => 128049297,
        'type 7 transporter'                => 128049297,
        
        // Type-9 Heavy
        'type9'                             => 128049333,
        'type 9 heavy'                      => 128049333,
        
        // Type-10 Defender
        'type9_military'                    => 128785619,
        'type 10 defender'                  => 128785619,
        
        // Viper MkIII
        'viper'                             => 128049273,
        'viper mk. iii'                     => 128049273,
        
        // Viper MkIV
        'viper_mkiv'                        => 128672255,
        'viper mk. iv'                      => 128672255,
        
        // Vulture
        'vulture'                           => 128049309,
    ];
}