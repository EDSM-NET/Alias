<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Ship;
use         EDSM\Alias;

class Shields extends Alias
{
    static protected $defaultName       = null;
    static protected $unit              = '%1$s MJ';

    /**
     * Boost speed by ship
     */
    static protected $name  = [
        // Adder
        128049267               => 78,

        // Alliance Challenger
        128816588               => 208,

        // Alliance Chieftain
        128816574               => 162,

        // Alliance Crusader
        128816581               => 126,

        // Anaconda
        128049363               => 362,

        // Asp Explorer
        128049303               => 152,

        // Asp Scout
        128672276               => 105,

        // Beluga Liner
        128049345               => 92,

        // Cobra MkIII
        128049279               => 78,

        // Cobra MkIV
        128672262               => 92,

        // Diamondback Explorer
        128671831               => 78,

        // Diamondback Scout
        128671217               => 115,

        // Dolphin
        128049291               => 143,

        // Eagle
        128049255               => 78,

        // Federal Assault Ship
        128672145               => 133,

        // Federal Corvette
        128049369               => 516,

        // Federal Dropship
        128049321               => 104,

        // Federal Gunship
        128672152               => 186,

        // Fer-de-Lance
        128049351               => 271,

        // Hauler
        128049261               => 65,

        // Imperial Clipper
        128049315               => 186,

        // Imperial Courier
        128671223               => 230,

        // Imperial Cutter
        128049375               => 703,

        // Imperial Eagle
        128672138               => 104,

        // Keelback
        128672269               => 99,

        // Krait MkII
        128816567               => 220,

        // Krait Phantom
        128839281               => 200,

        // Mamba
        128915979               => 270,

        // Orca
        128049327               => 114,

        // Python
        128049339               => 294,

        // Sidewinder
        128049249               => 52,

        // Type-6 Transporter
        128049285               => 77,

        // Type-7 Transporter
        128049297               => 78,

        // Type-9 Heavy
        128049333               => 88,

        // Type-10 Defender
        128785619               => 99,

        // Viper MkIII
        128049273               => 137,

        // Viper MkIV
        128672255               => 103,

        // Vulture
        128049309               => 293,
    ];
}