<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
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
        128049267               => 100,

        // Alliance Challenger
        128816588               => 130,

        // Alliance Chieftain
        128816574               => 150,

        // Alliance Crusader
        128816581               => 110,

        // Anaconda
        128049363               => 80,

        // Asp Explorer
        128049303               => 120,

        // Asp Scout
        128672276               => 110,

        // Beluga Liner
        128049345               => 110,

        // Cobra MkIII
        128049279               => 140,

        // Cobra MkIV
        128672262               => 100,

        // Diamondback Explorer
        128671831               => 170,

        // Diamondback Scout
        128671217               => 160,

        // Dolphin
        128049291               => 120,

        // Eagle
        128049255               => 180,

        // Federal Assault Ship
        128672145               => 150,

        // Federal Corvette
        128049369               => 100,

        // Federal Dropship
        128049321               => 100,

        // Federal Gunship
        128672152               => 100,

        // Fer-de-Lance
        128049351               => 220,

        // Hauler
        128049261               => 70,

        // Imperial Clipper
        128049315               => 180,

        // Imperial Courier
        128671223               => 220,

        // Imperial Cutter
        128049375               => 160,

        // Imperial Eagle
        128672138               => 210,

        // Keelback
        128672269               => 90,

        // Krait MkII
        128816567               => 150,

        // Krait Phantom
        128839281               => 160,

        // Mamba
        128915979               => 240,

        // Orca
        128049327               => 200,

        // Python
        128049339               => 140,
        
        // Python Mk II
        129030464               => 256,

        // Sidewinder
        128049249               => 100,

        // Type-6 Transporter
        128049285               => 90,

        // Type-7 Transporter
        128049297               => 60,

        // Type-9 Heavy
        128049333               => 40,

        // Type-10 Defender
        128785619               => 150,

        // Viper MkIII
        128049273               => 200,

        // Viper MkIV
        128672255               => 175,

        // Vulture
        128049309               => 190,
    ];
}