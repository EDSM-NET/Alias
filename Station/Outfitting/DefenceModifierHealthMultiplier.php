<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DefenceModifierHealthMultiplier extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Defence Modifier Health Multiplier';

    /**
     * List of categories
     */
    static protected $have          = [
        128049267,  // Adder
        128816588,  // Alliance Challenger
        128816574,  // Alliance Chieftain
        128816581,  // Alliance Crusader
        128049363,  // Anaconda
        128049303,  // Asp Explorer
        128672276,  // Asp Scout
        128049345,  // Beluga Liner
        128049279,  // Cobra MkIII
        128672262,  // Cobra MkIV
        128671831,  // Diamondback Explorer
        128671217,  // Diamondback Scout
        128049291,  // Dolphin
        128049255,  // Eagle
        128672145,  // Federal Assault Ship
        128049369,  // Federal Corvette
        128049321,  // Federal Dropship
        128672152,  // Federal Gunship
        128049351,  // Fer-de-Lance
        128049261,  // Hauler
        128049315,  // Imperial Clipper
        128671223,  // Imperial Courrier
        128049375,  // Imperial Cutter
        128672138,  // Imperial Eagle
        128672269,  // Keelback
        128816567,  // Krait MkII
        128839281,  // Krait Phantom
        128915979,  // Mamba
        128049327,  // Orca
        128049339,  // Python
        129030464,  // Python Mk II
        128049249,  // Sidewinder
        128049285,  // Type-6 Transporter
        128049297,  // Type-7 Transporter
        128049333,  // Type-9 Heavy
        128785619,  // Type-10 Defender
        128049273,  // Viper MkIII
        128672255,  // Viper MkIV
        128049309,  // Vulture

        'Hull Reinforcements',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Bulkhead > Adder
             1  => 79.999992,
             2  => 152,
             3  => 250,
             4  => 250,
             5  => 250,

        // Bulkhead > Anaconda
            11  => 79.999992,
            12  => 152,
            13  => 250,
            14  => 250,
            15  => 250,

        // Bulkhead > Asp Explorer
            21  => 79.999992,
            22  => 152,
            23  => 250,
            24  => 250,
            25  => 250,

        // Bulkhead > Asp Scout
            31  => 79.999992,
            32  => 152,
            33  => 250,
            34  => 250,
            35  => 250,

        // Bulkhead > Beluga Liner
            41  => 79.999992,
            42  => 152,
            43  => 250,
            44  => 250,
            45  => 250,

        // Bulkhead > Cobra Mk. III
            51  => 79.999992,
            52  => 152,
            53  => 250,
            54  => 250,
            55  => 250,

        // Bulkhead > Cobra MkIV
            61  => 79.999992,
            62  => 152,
            63  => 250,
            64  => 250,
            65  => 250,

        // Bulkhead > Diamondback Explorer
            71  => 79.999992,
            72  => 152,
            73  => 250,
            74  => 250,
            75  => 250,

        // Bulkhead > Diamondback Scout
            81  => 79.999992,
            82  => 152,
            83  => 250,
            84  => 250,
            85  => 250,

        // Bulkhead > Dolphin
            91  => 79.999992,
            92  => 152,
            93  => 250,
            94  => 250,
            95  => 250,

        // Bulkhead > Eagle
           101  => 79.999992,
           102  => 152,
           103  => 250,
           104  => 250,
           105  => 250,

        // Bulkhead > Federal Assault Ship
           111  => 79.999992,
           112  => 152,
           113  => 250,
           114  => 250,
           115  => 250,

        // Bulkhead > Federal Corvette
           121  => 79.999992,
           122  => 152,
           123  => 250,
           124  => 250,
           125  => 250,

        // Bulkhead > Federal Dropship
           131  => 79.999992,
           132  => 152,
           133  => 250,
           134  => 250,
           135  => 250,

        // Bulkhead > Federal Gunship
           141  => 79.999992,
           142  => 152,
           143  => 250,
           144  => 250,
           145  => 250,

        // Bulkhead > Fer-de-Lance
           151  => 79.999992,
           152  => 152,
           153  => 250,
           154  => 250,
           155  => 250,

        // Bulkhead > Hauler
           161  => 79.999992,
           162  => 152,
           163  => 250,
           164  => 250,
           165  => 250,

        // Bulkhead > Imperial Clipper
           171  => 79.999992,
           172  => 152,
           173  => 250,
           174  => 250,
           175  => 250,

        // Bulkhead > Imperial Courrier
           181  => 79.999992,
           182  => 152,
           183  => 250,
           184  => 250,
           185  => 250,

        // Bulkhead > Imperial Cutter
           191  => 79.999992,
           192  => 152,
           193  => 250,
           194  => 250,
           195  => 250,

        // Bulkhead > Imperial Eagle
           201  => 79.999992,
           202  => 152,
           203  => 250,
           204  => 250,
           205  => 250,

        // Bulkhead > Keelback
           211  => 79.999992,
           212  => 152,
           213  => 250,
           214  => 250,
           215  => 250,

        // Bulkhead > Orca
           221  => 79.999992,
           222  => 152,
           223  => 250,
           224  => 250,
           225  => 250,

        // Bulkhead > Python
           231  => 79.999992,
           232  => 152,
           233  => 250,
           234  => 250,
           235  => 250,

        // Bulkhead > Sidewinder
           241  => 79.999992,
           242  => 152,
           243  => 250,
           244  => 250,
           245  => 250,

        // Bulkhead > Type-6 Transporter
           251  => 79.999992,
           252  => 152,
           253  => 250,
           254  => 250,
           255  => 250,

        // Bulkhead > Type-7 Transporter
           261  => 79.999992,
           262  => 152,
           263  => 250,
           264  => 250,
           265  => 250,

        // Bulkhead > Type-9 Heavy
           271  => 79.999992,
           272  => 152,
           273  => 250,
           274  => 250,
           275  => 250,

        // Bulkhead > Viper MkIII
           281  => 79.999992,
           282  => 152,
           283  => 250,
           284  => 250,
           285  => 250,

        // Bulkhead > Viper MkIV
           291  => 79.999992,
           292  => 152,
           293  => 250,
           294  => 250,
           295  => 250,

        // Bulkhead > Vulture
           301  => 79.999992,
           302  => 152,
           303  => 250,
           304  => 250,
           305  => 250,

        // Bulkhead > Type-10 Defender
           311  => 79.999992,
           312  => 152,
           313  => 250,
           314  => 250,
           315  => 250,

        // Bulkhead > Alliance Chieftain
           321  => 79.999992,
           322  => 152,
           323  => 250,
           324  => 250,
           325  => 250,

        // Bulkhead > Alliance Challenger
           331  => 79.999992,
           332  => 152,
           333  => 250,
           334  => 250,
           335  => 250,

        // Bulkhead > Krait MkII
           341  => 79.999992,
           342  => 152,
           343  => 250,
           344  => 250,
           345  => 250,

        // Bulkhead > Alliance Crusader
           351  => 79.999992,
           352  => 152,
           353  => 250,
           354  => 250,
           355  => 250,

        // Bulkhead > Krait Phantom
           361  => 79.999992,
           362  => 152,
           363  => 250,
           364  => 250,
           365  => 250,

        // Bulkhead > Mamba
           371  => 79.999992,
           372  => 152,
           373  => 250,
           374  => 250,
           375  => 250,

        // Bulkhead > Python Mk II
           381  => 79.999992,
           382  => 152,
           383  => 250,
           384  => 250,
           385  => 250,

        // Optional Internal > Hull Reinforcement Package
          4801  => 0,
          4802  => 0,

          4811  => 0,
          4812  => 0,

          4821  => 0,
          4822  => 0,

          4831  => 0,
          4832  => 0,

          4841  => 0,
          4842  => 0,
    ];
}
