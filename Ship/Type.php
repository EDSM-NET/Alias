<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
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
        128816588   => 'Alliance Challenger',
        128816574   => 'Alliance Chieftain',
        128816581   => 'Alliance Crusader',
        128049363   => 'Anaconda',
        128049303   => 'Asp Explorer',
        128672276   => 'Asp Scout',
        128049345   => 'Beluga Liner',
        128049279   => 'Cobra Mk III',
        128672262   => 'Cobra Mk IV',
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
        128816567   => 'Krait Mk II',
        128839281   => 'Krait Phantom',
        128915979   => 'Mamba',
        128049327   => 'Orca',
        128049339   => 'Python',
        129030464   => 'Python Mk II',
        128049249   => 'Sidewinder',
        128049285   => 'Type-6 Transporter',
        128049297   => 'Type-7 Transporter',
        128049333   => 'Type-9 Heavy',
        128785619   => 'Type-10 Defender',
        128049273   => 'Viper Mk III',
        128672255   => 'Viper Mk IV',
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

        // Alliance Challenger
        'typex_3'                           => 128816588,

        // Alliance Chieftain
        'typex'                             => 128816574,

        // Alliance Crusader
        'typex_2'                           => 128816581,

        // Anaconda
        'anaconda'                          => 128049363,

        // Asp Explorer
        'asp explorer'                      => 128049303,
        'asp'                               => 128049303,

        // Asp Scout
        'asp scout'                         => 128672276,
        'asp_scout'                         => 128672276,

        // Beluga Liner
        'beluga liner'                      => 128049345,
        'belugaliner'                       => 128049345,

        // Cobra MkIII
        'cobra mk. iii'                     => 128049279,
        'cobramkiii'                        => 128049279,

        // Cobra MkIV
        'cobra mk. iv'                      => 128672262,
        'cobramkiv'                         => 128672262,

        // Diamondback Explorer
        'diamondback explorer'              => 128671831,
        'diamondbackxl'                     => 128671831,

        // Diamondback Scout
        'diamondback scout'                 => 128671217,
        'diamondback'                       => 128671217,

        // Dolphin
        'dolphin'                           => 128049291,

        // Eagle
        'eagle'                             => 128049255,

        // Federal Assault Ship
        'federal assault ship'              => 128672145,
        'federation_dropship_mkii'          => 128672145,

        // Federal Corvette
        'federal corvette'                  => 128049369,
        'federation_corvette'               => 128049369,

        // Federal Dropship
        'federal dropship'                  => 128049321,
        'federation_dropship'               => 128049321,

        // Federal Gunship
        'federal gunship'                   => 128672152,
        'federation_gunship'                => 128672152,

        // Fer-de-Lance
        'fer-de-lance'                      => 128049351,
        'ferdelance'                        => 128049351,

        // Hauler
        'hauler'                            => 128049261,

        // Imperial Clipper
        'imperial clipper'                  => 128049315,
        'empire_trader'                     => 128049315,

        // Imperial Courier
        'imperial courier'                  => 128671223,
        'empire_courier'                    => 128671223,

        // Imperial Cutter
        'imperial cutter'                   => 128049375,
        'cutter'                            => 128049375,

        // Imperial Eagle
        'imperial eagle'                    => 128672138,
        'empire_eagle'                      => 128672138,

        // Keelback
        'keelback'                          => 128672269,
        'independant_trader'                => 128672269,

        // Krait MkII
        'krait_mkii'                        => 128816567,

        // Krait Phantom
        'krait_light'                       => 128839281,

        // Mamba
        'mamba'                             => 128915979,

        // Orca
        'orca'                              => 128049327,

        // Python
        'python'                            => 128049339,
        
        // Python Mk II
        'python_nx'                         => 129030464,

        // Sidewinder
        'sidewinder'                        => 128049249,

        // Type-6 Transporter
        'type 6 transporter'                => 128049285,
        'type6'                             => 128049285,

        // Type-7 Transporter
        'type 7 transporter'                => 128049297,
        'type7'                             => 128049297,

        // Type-9 Heavy
        'type 9 heavy'                      => 128049333,
        'type9'                             => 128049333,

        // Type-10 Defender
        'type 10 defender'                  => 128785619,
        'type9_military'                    => 128785619,

        // Viper MkIII
        'viper mk. iii'                     => 128049273,
        'viper'                             => 128049273,

        // Viper MkIV
        'viper mk. iv'                      => 128672255,
        'viper_mkiv'                        => 128672255,

        // Vulture
        'vulture'                           => 128049309,
    ];
}