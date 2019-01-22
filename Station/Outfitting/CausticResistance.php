<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class CausticResistance extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Caustic Resistance';
    static protected $unit              = '%1$s%%';

    /**
     * List of categories
     */
    static protected $have          = [
        // Bulkheads
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
        128049249,  // Sidewinder
        128049285,  // Type-6 Transporter
        128049297,  // Type-7 Transporter
        128049333,  // Type-9 Heavy
        128785619,  // Type-10 Defender
        128049273,  // Viper MkIII
        128672255,  // Viper MkIV
        128049309,  // Vulture

        // Utility Mount
        'Shield Boosters',

        // Optional Internal
        'Shield Generators',
        'Hull Reinforcements',
        'Meta Alloy Hull Reinforcements',
        'Guardian Hull Reinforcements',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Bulkhead > Adder
             1  => 0,
             2  => 0,
             3  => 0,
             4  => 0,
             5  => 0,

        // Bulkhead > Anaconda
            11  => 0,
            12  => 0,
            13  => 0,
            14  => 0,
            15  => 0,

        // Bulkhead > Asp Explorer
            21  => 0,
            22  => 0,
            23  => 0,
            24  => 0,
            25  => 0,

        // Bulkhead > Asp Scout
            31  => 0,
            32  => 0,
            33  => 0,
            34  => 0,
            35  => 0,

        // Bulkhead > Beluga Liner
            41  => 0,
            42  => 0,
            43  => 0,
            44  => 0,
            45  => 0,

        // Bulkhead > Cobra Mk. III
            51  => 0,
            52  => 0,
            53  => 0,
            54  => 0,
            55  => 0,

        // Bulkhead > Cobra MkIV
            61  => 0,
            62  => 0,
            63  => 0,
            64  => 0,
            65  => 0,

        // Bulkhead > Diamondback Explorer
            71  => 0,
            72  => 0,
            73  => 0,
            74  => 0,
            75  => 0,

        // Bulkhead > Diamondback Scout
            81  => 0,
            82  => 0,
            83  => 0,
            84  => 0,
            85  => 0,

        // Bulkhead > Dolphin
            91  => 0,
            92  => 0,
            93  => 0,
            94  => 0,
            95  => 0,

        // Bulkhead > Eagle
           101  => 0,
           102  => 0,
           103  => 0,
           104  => 0,
           105  => 0,

        // Bulkhead > Federal Assault Ship
           111  => 0,
           112  => 0,
           113  => 0,
           114  => 0,
           115  => 0,

        // Bulkhead > Federal Corvette
           121  => 0,
           122  => 0,
           123  => 0,
           124  => 0,
           125  => 0,

        // Bulkhead > Federal Dropship
           131  => 0,
           132  => 0,
           133  => 0,
           134  => 0,
           135  => 0,

        // Bulkhead > Federal Gunship
           141  => 0,
           142  => 0,
           143  => 0,
           144  => 0,
           145  => 0,

        // Bulkhead > Fer-de-Lance
           151  => 0,
           152  => 0,
           153  => 0,
           154  => 0,
           155  => 0,

        // Bulkhead > Hauler
           161  => 0,
           162  => 0,
           163  => 0,
           164  => 0,
           165  => 0,

        // Bulkhead > Imperial Clipper
           171  => 0,
           172  => 0,
           173  => 0,
           174  => 0,
           175  => 0,

        // Bulkhead > Imperial Courrier
           181  => 0,
           182  => 0,
           183  => 0,
           184  => 0,
           185  => 0,

        // Bulkhead > Imperial Cutter
           191  => 0,
           192  => 0,
           193  => 0,
           194  => 0,
           195  => 0,

        // Bulkhead > Imperial Eagle
           201  => 0,
           202  => 0,
           203  => 0,
           204  => 0,
           205  => 0,

        // Bulkhead > Keelback
           211  => 0,
           212  => 0,
           213  => 0,
           214  => 0,
           215  => 0,

        // Bulkhead > Orca
           221  => 0,
           222  => 0,
           223  => 0,
           224  => 0,
           225  => 0,

        // Bulkhead > Python
           231  => 0,
           232  => 0,
           233  => 0,
           234  => 0,
           235  => 0,

        // Bulkhead > Sidewinder
           241  => 0,
           242  => 0,
           243  => 0,
           244  => 0,
           245  => 0,

        // Bulkhead > Type-6 Transporter
           251  => 0,
           252  => 0,
           253  => 0,
           254  => 0,
           255  => 0,

        // Bulkhead > Type-7 Transporter
           261  => 0,
           262  => 0,
           263  => 0,
           264  => 0,
           265  => 0,

        // Bulkhead > Type-9 Heavy
           271  => 0,
           272  => 0,
           273  => 0,
           274  => 0,
           275  => 0,

        // Bulkhead > Viper MkIII
           281  => 0,
           282  => 0,
           283  => 0,
           284  => 0,
           285  => 0,

        // Bulkhead > Viper MkIV
           291  => 0,
           292  => 0,
           293  => 0,
           294  => 0,
           295  => 0,

        // Bulkhead > Vulture
           301  => 0,
           302  => 0,
           303  => 0,
           304  => 0,
           305  => 0,

        // Bulkhead > Type-10 Defender
           311  => 0,
           312  => 0,
           313  => 0,
           314  => 0,
           315  => 0,

        // Bulkhead > Alliance Chieftain
           321  => 0,
           322  => 0,
           323  => 0,
           324  => 0,
           325  => 0,

        // Bulkhead > Alliance Challenger
           331  => 0,
           332  => 0,
           333  => 0,
           334  => 0,
           335  => 0,

        // Bulkhead > Krait MkII
           341  => 0,
           342  => 0,
           343  => 0,
           344  => 0,
           345  => 0,

        // Bulkhead > Alliance Crusader
           351  => 0,
           352  => 0,
           353  => 0,
           354  => 0,
           355  => 0,

        // Bulkhead > Krait Phantom
           361  => 0,
           362  => 0,
           363  => 0,
           364  => 0,
           365  => 0,

        // Bulkhead > Mamba
           371  => 0,
           372  => 0,
           373  => 0,
           374  => 0,
           375  => 0,

        // Utility Mount > Shield Booster
          2001  => 0,
          2002  => 0,
          2003  => 0,
          2004  => 0,
          2005  => 0,

        // Optional Internal > Shield Generator
          4101  => 0,
          4102  => 0,
          4103  => 0,
          4104  => 0,
          4106  => 0,
          4107  => 0,

          4110  => 0, // Not in category
          4111  => 0,
          4112  => 0,
          4113  => 0,
          4114  => 0,
          4115  => 0,
          4116  => 0,
          4117  => 0,

          4121  => 0,
          4122  => 0,
          4123  => 0,
          4124  => 0,
          4125  => 0,
          4126  => 0,
          4127  => 0,

          4131  => 0,
          4132  => 0,
          4133  => 0,
          4134  => 0,
          4135  => 0,
          4136  => 0,
          4137  => 0,

          4141  => 0,
          4142  => 0,
          4143  => 0,
          4144  => 0,
          4145  => 0,
          4146  => 0,
          4147  => 0,

          4151  => 0,
          4152  => 0,
          4153  => 0,
          4154  => 0,
          4155  => 0,
          4156  => 0,
          4157  => 0,

          4161  => 0,
          4162  => 0,
          4163  => 0,
          4164  => 0,
          4165  => 0,
          4166  => 0,
          4167  => 0,

          4171  => 0,
          4172  => 0,
          4173  => 0,
          4174  => 0,
          4175  => 0,
          4176  => 0,
          4177  => 0,

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

        // Optional Internal > Meta Alloy Hull Reinforcements
          6001  => 3,
          6002  => 3,

          6011  => 3,
          6012  => 3,

          6021  => 3,
          6022  => 3,

          6031  => 3,
          6032  => 3,

          6041  => 3,
          6042  => 3,

        // Optional Internal > Guardian Hull Reinforcement
          6101  => 5,
          6102  => 5,

          6111  => 5,
          6112  => 5,

          6121  => 5,
          6122  => 5,

          6131  => 5,
          6132  => 5,

          6141  => 5,
          6142  => 5,
    ];
}
