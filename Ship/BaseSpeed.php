<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Ship;
use         EDSM\Alias;

class BaseSpeed extends Alias
{
    static protected $defaultName       = null;
    static protected $unit              = '%1$s m/s';
    
    /**
     * Base speed by ship
     */
    static protected $name  = [
        // Adder
        128049267               => 220,
        
        // Alliance Chieftain
        128816574               => 230,
        
        // Anaconda
        128049363               => 183,
        
        // Asp Explorer
        128049303               => 254,
        
        // Asp Scout
        128672276               => 223,
        
        // Beluga Liner
        128049345               => 195,
        
        // Cobra MkIII
        128049279               => 220,
        
        // Cobra MkIV
        128672262               => 282,
        
        // Diamondback Explorer
        128671831               => 260,
        
        // Diamondback Scout
        128671217               => 242,
        
        // Dolphin
        128049291               => 258,
        
        // Eagle
        128049255               => 239,
        
        // Federal Assault Ship
        128672145               => 214,
        
        // Federal Corvette
        128049369               => 198,
        
        // Federal Dropship
        128049321               => 182,
        
        // Federal Gunship
        128672152               => 171,
        
        // Fer-de-Lance
        128049351               => 265,
        
        // Hauler
        128049261               => 203,
        
        // Imperial Clipper
        128049315               => 306,
        
        // Imperial Courier
        128671223               => 280,
        
        // Imperial Cutter
        128049375               => 202,
        
        // Imperial Eagle
        128672138               => 298,
        
        // Keelback
        128672269               => 202,
        
        // Orca
        128049327               => 303,
        
        // Python
        128049339               => 234,
        
        // Sidewinder
        128049249               => 220,
        
        // Type-6 Transporter
        128049285               => 223,
        
        // Type-7 Transporter
        128049297               => 181,
        
        // Type-9 Heavy
        128049333               => 131,
        
        // Type-10 Defender
        128785619               => 179,
        
        // Viper MkIII
        128049273               => 310,
        
        // Viper MkIV
        128672255               => 271,
        
        // Vulture
        128049309               => 215,
    ];
}