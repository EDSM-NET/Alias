<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ThermicResistance extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Thermic Resistance';
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
        128049279,  // Cobra Mk III
        128672262,  // Cobra Mk IV
        129031230,  // Cobra Mk V
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
        129030680,  // Mandalay
        128049327,  // Orca
        128049339,  // Python
        129030464,  // Python Mk II
        128049249,  // Sidewinder
        128049285,  // Type-6 Transporter
        128049297,  // Type-7 Transporter
        129030534,  // Type-8 Transporter
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
             4  => 50,
             5  => -39.999996,

        // Bulkhead > Anaconda
            11  => 0,
            12  => 0,
            13  => 0,
            14  => 50,
            15  => -39.999996,

        // Bulkhead > Asp Explorer
            21  => 0,
            22  => 0,
            23  => 0,
            24  => 50,
            25  => -39.999996,

        // Bulkhead > Asp Scout
            31  => 0,
            32  => 0,
            33  => 0,
            34  => 50,
            35  => -39.999996,

        // Bulkhead > Beluga Liner
            41  => 0,
            42  => 0,
            43  => 0,
            44  => 50,
            45  => -39.999996,

        // Bulkhead > Cobra Mk. III
            51  => 0,
            52  => 0,
            53  => 0,
            54  => 50,
            55  => -39.999996,

        // Bulkhead > Cobra MkIV
            61  => 0,
            62  => 0,
            63  => 0,
            64  => 50,
            65  => -39.999996,

        // Bulkhead > Diamondback Explorer
            71  => 0,
            72  => 0,
            73  => 0,
            74  => 50,
            75  => -39.999996,

        // Bulkhead > Diamondback Scout
            81  => 0,
            82  => 0,
            83  => 0,
            84  => 50,
            85  => -39.999996,

        // Bulkhead > Dolphin
            91  => 0,
            92  => 0,
            93  => 0,
            94  => 50,
            95  => -39.999996,

        // Bulkhead > Eagle
           101  => 0,
           102  => 0,
           103  => 0,
           104  => 50,
           105  => -39.999996,

        // Bulkhead > Federal Assault Ship
           111  => 0,
           112  => 0,
           113  => 0,
           114  => 50,
           115  => -39.999996,

        // Bulkhead > Federal Corvette
           121  => 0,
           122  => 0,
           123  => 0,
           124  => 50,
           125  => -39.999996,

        // Bulkhead > Federal Dropship
           131  => 0,
           132  => 0,
           133  => 0,
           134  => 50,
           135  => -39.999996,

        // Bulkhead > Federal Gunship
           141  => 0,
           142  => 0,
           143  => 0,
           144  => 50,
           145  => -39.999996,

        // Bulkhead > Fer-de-Lance
           151  => 0,
           152  => 0,
           153  => 0,
           154  => 50,
           155  => -39.999996,

        // Bulkhead > Hauler
           161  => 0,
           162  => 0,
           163  => 0,
           164  => 50,
           165  => -39.999996,

        // Bulkhead > Imperial Clipper
           171  => 0,
           172  => 0,
           173  => 0,
           174  => 50,
           175  => -39.999996,

        // Bulkhead > Imperial Courrier
           181  => 0,
           182  => 0,
           183  => 0,
           184  => 50,
           185  => -39.999996,

        // Bulkhead > Imperial Cutter
           191  => 0,
           192  => 0,
           193  => 0,
           194  => 50,
           195  => -39.999996,

        // Bulkhead > Imperial Eagle
           201  => 0,
           202  => 0,
           203  => 0,
           204  => 50,
           205  => -39.999996,

        // Bulkhead > Keelback
           211  => 0,
           212  => 0,
           213  => 0,
           214  => 50,
           215  => -39.999996,

        // Bulkhead > Orca
           221  => 0,
           222  => 0,
           223  => 0,
           224  => 50,
           225  => -39.999996,

        // Bulkhead > Python
           231  => 0,
           232  => 0,
           233  => 0,
           234  => 50,
           235  => -39.999996,

        // Bulkhead > Sidewinder
           241  => 0,
           242  => 0,
           243  => 0,
           244  => 50,
           245  => -39.999996,

        // Bulkhead > Type-6 Transporter
           251  => 0,
           252  => 0,
           253  => 0,
           254  => 50,
           255  => -39.999996,

        // Bulkhead > Type-7 Transporter
           261  => 0,
           262  => 0,
           263  => 0,
           264  => 50,
           265  => -39.999996,

        // Bulkhead > Type-9 Heavy
           271  => 0,
           272  => 0,
           273  => 0,
           274  => 50,
           275  => -39.999996,

        // Bulkhead > Viper MkIII
           281  => 0,
           282  => 0,
           283  => 0,
           284  => 50,
           285  => -39.999996,

        // Bulkhead > Viper MkIV
           291  => 0,
           292  => 0,
           293  => 0,
           294  => 50,
           295  => -39.999996,

        // Bulkhead > Vulture
           301  => 0,
           302  => 0,
           303  => 0,
           304  => 50,
           305  => -39.999996,

        // Bulkhead > Type-10 Defender
           311  => 0,
           312  => 0,
           313  => 0,
           314  => 50,
           315  => -39.999996,

        // Bulkhead > Alliance Chieftain
           321  => 0,
           322  => 0,
           323  => 0,
           324  => 50,
           325  => -39.999996,

        // Bulkhead > Alliance Challenger
           331  => 0,
           332  => 0,
           333  => 0,
           334  => 50,
           335  => -39.999996,

        // Bulkhead > Krait MkII
           341  => 0,
           342  => 0,
           343  => 0,
           344  => 50,
           345  => -39.999996,

        // Bulkhead > Alliance Crusader
           351  => 0,
           352  => 0,
           353  => 0,
           354  => 50,
           355  => -39.999996,

        // Bulkhead > Krait Phantom
           361  => 0,
           362  => 0,
           363  => 0,
           364  => 50,
           365  => -39.999996,

        // Bulkhead > Mamba
           371  => 0,
           372  => 0,
           373  => 0,
           374  => 50,
           375  => -39.999996,

        // Bulkhead > Python Mk II
           381  => 0,
           382  => 0,
           383  => 0,
           384  => 50,
           385  => -39.999996,
        
        // Bulkhead > Mandalay
           391  => 0,
           392  => 0,
           393  => 0,
           394  => 50,
           395  => -39.999996,
        
        // Bulkhead > Cobra Mk V
           401  => 0,
           402  => 0,
           403  => 0,
           404  => 50,
           405  => -39.999996,
        
        // Bulkhead > Type-8 Transporter
           411  => 0,
           412  => 0,
           413  => 0,
           414  => 50,
           415  => -39.999996,

        // Utility Mount > Shield Booster
          2001  => 0,
          2002  => 0,
          2003  => 0,
          2004  => 0,
          2005  => 0,

        // Optional Internal > Shield Generator
          4101  => -20.000004,
          4102  => -20.000004,
          4103  => -20.000004,
          4104  => -20.000004,
          4106  => -20.000004,
          4107  => -20.000004,

          4110  => -20.000004, // Not in category
          4111  => -20.000004,
          4112  => -20.000004,
          4113  => -20.000004,
          4114  => -20.000004,
          4115  => -20.000004,
          4116  => -20.000004,
          4117  => -20.000004,

          4121  => -20.000004,
          4122  => -20.000004,
          4123  => -20.000004,
          4124  => -20.000004,
          4125  => -20.000004,
          4126  => -20.000004,
          4127  => -20.000004,

          4131  => -20.000004,
          4132  => -20.000004,
          4133  => -20.000004,
          4134  => -20.000004,
          4135  => -20.000004,
          4136  => -20.000004,
          4137  => -20.000004,

          4141  => -20.000004,
          4142  => -20.000004,
          4143  => -20.000004,
          4144  => -20.000004,
          4145  => -20.000004,
          4146  => -20.000004,
          4147  => -20.000004,

          4151  => -20.000004,
          4152  => -20.000004,
          4153  => -20.000004,
          4154  => -20.000004,
          4155  => -20.000004,
          4156  => -20.000004,
          4157  => -20.000004,

          4161  => -20.000004,
          4162  => -20.000004,
          4163  => -20.000004,
          4164  => -20.000004,
          4165  => -20.000004,
          4166  => -20.000004,
          4167  => -20.000004,

          4171  => -20.000004,
          4172  => -20.000004,
          4173  => -20.000004,
          4174  => -20.000004,
          4175  => -20.000004,
          4176  => -20.000004,
          4177  => -20.000004,

        // Optional Internal > Hull Reinforcement Package
          4801  => 0.5,
          4802  => 0.5,

          4811  => 0.999999,
          4812  => 0.999999,

          4821  => 1.499999,
          4822  => 1.499999,

          4831  => 1.999998,
          4832  => 1.999998,

          4841  => 2.499998,
          4842  => 2.499998,

        // Optional Internal > Meta Alloy Hull Reinforcements
          6001  => 0,
          6002  => 0,

          6011  => 0,
          6012  => 0,

          6021  => 0,
          6022  => 0,

          6031  => 0,
          6032  => 0,

          6041  => 0,
          6042  => 0,

        // Optional Internal > Guardian Hull Reinforcement
          6101  => 2,
          6102  => 2,

          6111  => 2,
          6112  => 2,

          6121  => 2,
          6122  => 2,

          6131  => 2,
          6132  => 2,

          6141  => 2,
          6142  => 2,
    ];
}
