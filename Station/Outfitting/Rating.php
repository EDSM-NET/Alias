<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Rating extends Alias
{
    static protected $defaultName = 'I';

    /**
     * List of ratings by outfitting
     */
    static protected $name  = [
        // Bulkhead > Adder
             1  => 'I',
             2  => 'I',
             3  => 'I',
             4  => 'I',
             5  => 'I',

        // Bulkhead > Anaconda
            11  => 'I',
            12  => 'I',
            13  => 'I',
            14  => 'I',
            15  => 'I',

        // Bulkhead > Asp Explorer
            21  => 'I',
            22  => 'I',
            23  => 'I',
            24  => 'I',
            25  => 'I',

        // Bulkhead > Asp Scout
            31  => 'I',
            32  => 'I',
            33  => 'I',
            34  => 'I',
            35  => 'I',

        // Bulkhead > Beluga Liner
            41  => 'I',
            42  => 'I',
            43  => 'I',
            44  => 'I',
            45  => 'I',

        // Bulkhead > Cobra MkIII
            51  => 'I',
            52  => 'I',
            53  => 'I',
            54  => 'I',
            55  => 'I',

        // Bulkhead > Cobra MkIV
            61  => 'I',
            62  => 'I',
            63  => 'I',
            64  => 'I',
            65  => 'I',

        // Bulkhead > Diamondback Explorer
            71  => 'I',
            72  => 'I',
            73  => 'I',
            74  => 'I',
            75  => 'I',

        // Bulkhead > Diamondback Scout
            81  => 'I',
            82  => 'I',
            83  => 'I',
            84  => 'I',
            85  => 'I',

        // Bulkhead > Dolphin
            91  => 'I',
            92  => 'I',
            93  => 'I',
            94  => 'I',
            95  => 'I',

        // Bulkhead > Eagle
           101  => 'I',
           102  => 'I',
           103  => 'I',
           104  => 'I',
           105  => 'I',

        // Bulkhead > Federal Assault Ship
           111  => 'I',
           112  => 'I',
           113  => 'I',
           114  => 'I',
           115  => 'I',

        // Bulkhead > Federal Corvette
           121  => 'I',
           122  => 'I',
           123  => 'I',
           124  => 'I',
           125  => 'I',

        // Bulkhead > Federal Dropship
           131  => 'I',
           132  => 'I',
           133  => 'I',
           134  => 'I',
           135  => 'I',

        // Bulkhead > Federal Gunship
           141  => 'I',
           142  => 'I',
           143  => 'I',
           144  => 'I',
           145  => 'I',

        // Bulkhead > Fer-de-Lance
           151  => 'I',
           152  => 'I',
           153  => 'I',
           154  => 'I',
           155  => 'I',

        // Bulkhead > Hauler
           161  => 'I',
           162  => 'I',
           163  => 'I',
           164  => 'I',
           165  => 'I',

        // Bulkhead > Imperial Clipper
           171  => 'I',
           172  => 'I',
           173  => 'I',
           174  => 'I',
           175  => 'I',

        // Bulkhead > Imperial Courrier
           181  => 'I',
           182  => 'I',
           183  => 'I',
           184  => 'I',
           185  => 'I',

        // Bulkhead > Imperial Cutter
           191  => 'I',
           192  => 'I',
           193  => 'I',
           194  => 'I',
           195  => 'I',

        // Bulkhead > Imperial Eagle
           201  => 'I',
           202  => 'I',
           203  => 'I',
           204  => 'I',
           205  => 'I',

        // Bulkhead > Keelback
           211  => 'I',
           212  => 'I',
           213  => 'I',
           214  => 'I',
           215  => 'I',

        // Bulkhead > Orca
           221  => 'I',
           222  => 'I',
           223  => 'I',
           224  => 'I',
           225  => 'I',

        // Bulkhead > Python
           231  => 'I',
           232  => 'I',
           233  => 'I',
           234  => 'I',
           235  => 'I',

        // Bulkhead > Sidewinder
           241  => 'I',
           242  => 'I',
           243  => 'I',
           244  => 'I',
           245  => 'I',

        // Bulkhead > Type-6 Transporter
           251  => 'I',
           252  => 'I',
           253  => 'I',
           254  => 'I',
           255  => 'I',

        // Bulkhead > Type-7 Transporter
           261  => 'I',
           262  => 'I',
           263  => 'I',
           264  => 'I',
           265  => 'I',

        // Bulkhead > Type-9 Heavy
           271  => 'I',
           272  => 'I',
           273  => 'I',
           274  => 'I',
           275  => 'I',

        // Bulkhead > Viper MkIII
           281  => 'I',
           282  => 'I',
           283  => 'I',
           284  => 'I',
           285  => 'I',

        // Bulkhead > Viper MkIV
           291  => 'I',
           292  => 'I',
           293  => 'I',
           294  => 'I',
           295  => 'I',

        // Bulkhead > Vulture
           301  => 'I',
           302  => 'I',
           303  => 'I',
           304  => 'I',
           305  => 'I',

        // Bulkhead > Type-10 Defender
           311  => 'I',
           312  => 'I',
           313  => 'I',
           314  => 'I',
           315  => 'I',

        // Bulkhead > Alliance Chieftain
           321  => 'I',
           322  => 'I',
           323  => 'I',
           324  => 'I',
           325  => 'I',

        // Bulkhead > Alliance Challenger
           331  => 'I',
           332  => 'I',
           333  => 'I',
           334  => 'I',
           335  => 'I',

        // Bulkhead > Krait MkII
           341  => 'I',
           342  => 'I',
           343  => 'I',
           344  => 'I',
           345  => 'I',

        // Bulkhead > Alliance Crusader
           351  => 'I',
           352  => 'I',
           353  => 'I',
           354  => 'I',
           355  => 'I',

        // Bulkhead > Krait Phantom
           361  => 'I',
           362  => 'I',
           363  => 'I',
           364  => 'I',
           365  => 'I',

        // Bulkhead > Mamba
           371  => 'I',
           372  => 'I',
           373  => 'I',
           374  => 'I',
           375  => 'I',

        // Bulkhead > Python Mk II
           381  => 'I',
           382  => 'I',
           383  => 'I',
           384  => 'I',
           385  => 'I',

        // Weapon Hardpoint > Sub-Surface Displacement Missile
           951  => 'B',
           952  => 'B',

           959  => 'B',
           960  => 'B',

        // Weapon Hardpoint > Beam Laser
          1001  => 'E',
          1002  => 'D',
          1003  => 'C',
          1004  => 'A',

          1005  => 'E',
          1006  => 'D',
          1007  => 'C',
          1008  => 'A',

          1009  => 'F',
          1010  => 'E',
          1011  => 'D',

          1021  => 'E',

          1331  => 'C', //TODO: Check on release
          1032  => 'B',

        // Weapon Hardpoint > Pulse Laser
          1051  => 'F',
          1052  => 'E',
          1053  => 'D',
          1054  => 'A',

          1055  => 'G',
          1056  => 'F',
          1057  => 'E',
          1058  => 'A',

          1059  => 'G',
          1060  => 'F',
          1061  => 'F',

          1072  => 'E',

        // Weapon Hardpoint > Burst Laser
          1101  => 'F',
          1102  => 'E',
          1103  => 'D',
          1104  => 'E',

          1105  => 'G',
          1106  => 'F',
          1107  => 'E',
          1108  => 'E',

          1109  => 'G',
          1110  => 'F',
          1111  => 'E',

          1121  => 'F',

        // Weapon Hardpoint > Cannon
          1151  => 'D',
          1152  => 'D',
          1153  => 'C',
          1154  => 'B',

          1155  => 'E',
          1156  => 'D',
          1157  => 'C',
          1158  => 'B',

          1159  => 'F',
          1160  => 'E',
          1161  => 'D',

        // Weapon Hardpoint > Fragment Cannon
          1201  => 'E',
          1202  => 'A',
          1203  => 'C',

          1205  => 'E',
          1206  => 'D',
          1207  => 'C',

          1209  => 'E',
          1210  => 'D',
          1211  => 'C',

          1215  => 'C',

        // Weapon Hardpoint > Multi-Cannon
          1251  => 'F',
          1252  => 'E',
          1253  => 'C',
          1254  => 'A',

          1255  => 'G',
          1256  => 'F',
          1257  => 'C',
          1258  => 'A',

          1259  => 'G',
          1260  => 'F',
          1261  => 'E', // ??
          1262  => 'D', // ??

          1271  => 'F',

          1281  => 'F',
          1282  => 'E',

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 'C',
          1303  => 'B',
          1304  => 'A',

          1313  => 'B',

          1321  => 'E', //TODO: Check on release
          1322  => 'B',
          1323  => 'C',

          1329  => 'E', //TODO: Check on release
          1330  => 'E',
          1331  => 'E',

        // Weapon Hardpoint > Rail Gun
          1351  => 'D',
          1352  => 'B',

          1362  => 'B',

        // Weapon Hardpoint > Missile Rack
          1401  => 'B',
          1402  => 'B',
          1403  => 'A',

          1405  => 'B',
          1406  => 'B',
          1407  => 'A',

          1411  => 'B',

          1412  => 'B',
          1413  => 'B',

        // Weapon Hardpoint > Mine Launcher
          1451  => 'I',
          1452  => 'I',

        // Weapon Hardpoint > Mining Laser
          1501  => 'D',
          1502  => 'D',

          1509  => 'D',
          1510  => 'D',

          1521  => 'D',

        // Weapon Hardpoint > Torpedo Pylon
          1551  => 'I',
          1552  => 'I',
          1553  => 'I',

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 'I',

        // Weapon Hardpoint > AX Missile Rack
          1652  => 'B',
          1653  => 'A',
          1660  => 'B',
          1661  => 'A',

        // Weapon Hardpoint > AX Multi-Cannon
          1702  => 'E',
          1703  => 'C',
        
          1710  => 'F',
          1711  => 'E',
        
          1720  => 'E',
          1721  => 'D',
        
          1722  => 'D',
          1723  => 'B',
        
          1730  => 'E',
          1731  => 'C',

        // Weapon Hardpoint > Remote Release Flak Launcher
          1752  => 'B',
          1760  => 'B',

        // Weapon Hardpoint > Remote Release Flechette Launcher
          1772  => 'B',
          1780  => 'B',

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 'B',

        // Weapon Hardpoint > Abrasion Blaster
          1821  => 'D',
          1829  => 'D',

        // Weapon Hardpoint > Shock Cannon
          1851  => 'E', //TODO: Check on release
          1852  => 'D',
          1853  => 'C',

          1855  => 'E', //TODO: Check on release
          1856  => 'D',
          1857  => 'C',

          1859  => 'E', //TODO: Check on release
          1860  => 'D',
          1861  => 'C',

        // Weapon Hardpoint > Enzyme Missile Rack
          1872  => 'B',

        // Weapon Hardpoint > Shard Cannon
          1921  => 'D',
          1922  => 'A',
          1923  => 'C',

          1929  => 'F',
          1930  => 'A',
          1931  => 'D',

        // Weapon Hardpoint > Seismic Charge
          1952  => 'B',
          1960  => 'B',
        
        // Weapon Hardpoint > Guardian Nanite Torpedo Pylon
          1972  => 'I',
          1973  => 'I',

        // Utility Mount > Shield Booster
          2001  => 'E',
          2002  => 'D',
          2003  => 'C',
          2004  => 'B',
          2005  => 'A',

        // Utility Mount > Chaff Launcher
          2050  => 'I',

        // Utility Mount > Electronic Countermeasure
          2100  => 'F',

        // Utility Mount > Heat Sink Launcher
          2150  => 'I',

        // Utility Mount > Point Defence
          2200  => 'I',

        // Utility Mount > Cargo Scanner
          2251  => 'E',
          2252  => 'D',
          2253  => 'C',
          2254  => 'B',
          2255  => 'A',

        // Utility Mount > Frame Shift Wake Scanner
          2301  => 'E',
          2302  => 'D',
          2303  => 'C',
          2304  => 'B',
          2305  => 'A',

        // Utility Mount > Kill Warrant Scanner
          2351  => 'E',
          2352  => 'D',
          2353  => 'C',
          2354  => 'B',
          2355  => 'A',

        // Utility Mount > Xeno Scanner
          2401  => 'E',
          2402  => 'C',
          2403  => 'C',

        // Utility Mount > Shutdown Field Neutraliser
          2451  => 'F',

        // Utility Mount > Pulse Wave Analyser
          2501  => 'E',
          2502  => 'D',
          2503  => 'C',
          2504  => 'B',
          2505  => 'A',

        // Utility Mount > Experimental Weapon Stabiliser
          2551  => 'F',
          2552  => 'F',
        
        // Utility Mount > Caustic Sink Launcher
          2601  => 'I',
        
        // Utility Mount > Thargoid Pulse Neutraliser
          2651  => 'E',

        // Core Internal > Fuel Tank
          3001  => 'C',
          3002  => 'C',
          3003  => 'C',
          3004  => 'C',
          3005  => 'C',
          3006  => 'C',
          3007  => 'C',
          3008  => 'C',

        // Core Internal > Power Plant
          3101  => 'E',
          3102  => 'D',
          3103  => 'C',
          3104  => 'B',
          3105  => 'A',

          3109  => 'A',

          3111  => 'E',
          3112  => 'D',
          3113  => 'C',
          3114  => 'B',
          3115  => 'A',

          3119  => 'A',

          3121  => 'E',
          3122  => 'D',
          3123  => 'C',
          3124  => 'B',
          3125  => 'A',

          3129  => 'A',

          3131  => 'E',
          3132  => 'D',
          3133  => 'C',
          3134  => 'B',
          3135  => 'A',

          3139  => 'A',

          3141  => 'E',
          3142  => 'D',
          3143  => 'C',
          3144  => 'B',
          3145  => 'A',

          3149  => 'A',

          3151  => 'E',
          3152  => 'D',
          3153  => 'C',
          3154  => 'B',
          3155  => 'A',

          3159  => 'A',

          3161  => 'E',
          3162  => 'D',
          3163  => 'C',
          3164  => 'B',
          3165  => 'A',

          3169  => 'A',

        // Core Internal > Thrusters
          3201  => 'E',
          3202  => 'D',
          3203  => 'C',
          3204  => 'B',
          3205  => 'A',
          3206  => 'A',

          3211  => 'E',
          3212  => 'D',
          3213  => 'C',
          3214  => 'B',
          3215  => 'A',
          3216  => 'A',

          3221  => 'E',
          3222  => 'D',
          3223  => 'C',
          3224  => 'B',
          3225  => 'A',

          3231  => 'E',
          3232  => 'D',
          3233  => 'C',
          3234  => 'B',
          3235  => 'A',

          3241  => 'E',
          3242  => 'D',
          3243  => 'C',
          3244  => 'B',
          3245  => 'A',

          3251  => 'E',
          3252  => 'D',
          3253  => 'C',
          3254  => 'B',
          3255  => 'A',

          3261  => 'E',
          3262  => 'D',
          3263  => 'C',
          3264  => 'B',
          3265  => 'A',

        // Core Internal > Frame Shift Drive
          3301  => 'E',
          3302  => 'D',
          3303  => 'C',
          3304  => 'B',
          3305  => 'A',

          3311  => 'E',
          3312  => 'D',
          3313  => 'C',
          3314  => 'B',
          3315  => 'A',

          3321  => 'E',
          3322  => 'D',
          3323  => 'C',
          3324  => 'B',
          3325  => 'A',

          3331  => 'E',
          3332  => 'D',
          3333  => 'C',
          3334  => 'B',
          3335  => 'A',

          3341  => 'E',
          3342  => 'D',
          3343  => 'C',
          3344  => 'B',
          3345  => 'A',

          3351  => 'E',
          3352  => 'D',
          3353  => 'C',
          3354  => 'B',
          3355  => 'A',

          3361  => 'E',
          3362  => 'D',
          3363  => 'C',
          3364  => 'B',
          3365  => 'A',

        // Core Internal > Life Support
          3401  => 'E',
          3402  => 'D',
          3403  => 'C',
          3404  => 'B',
          3405  => 'A',

          3411  => 'E',
          3412  => 'D',
          3413  => 'C',
          3414  => 'B',
          3415  => 'A',

          3421  => 'E',
          3422  => 'D',
          3423  => 'C',
          3424  => 'B',
          3425  => 'A',

          3431  => 'E',
          3432  => 'D',
          3433  => 'C',
          3434  => 'B',
          3435  => 'A',

          3441  => 'E',
          3442  => 'D',
          3443  => 'C',
          3444  => 'B',
          3445  => 'A',

          3451  => 'E',
          3452  => 'D',
          3453  => 'C',
          3454  => 'B',
          3455  => 'A',

          3461  => 'E',
          3462  => 'D',
          3463  => 'C',
          3464  => 'B',
          3465  => 'A',

          3471  => 'E',
          3472  => 'D',
          3473  => 'C',
          3474  => 'B',
          3475  => 'A',

        // Core Internal > Power Distributor
          3501  => 'E',
          3502  => 'D',
          3503  => 'C',
          3504  => 'B',
          3505  => 'A',

          3509  => 'A',

          3511  => 'E',
          3512  => 'D',
          3513  => 'C',
          3514  => 'B',
          3515  => 'A',

          3519  => 'A',

          3521  => 'E',
          3522  => 'D',
          3523  => 'C',
          3524  => 'B',
          3525  => 'A',

          3529  => 'A',

          3531  => 'E',
          3532  => 'D',
          3533  => 'C',
          3534  => 'B',
          3535  => 'A',

          3539  => 'A',

          3541  => 'E',
          3542  => 'D',
          3543  => 'C',
          3544  => 'B',
          3545  => 'A',

          3549  => 'A',

          3551  => 'E',
          3552  => 'D',
          3553  => 'C',
          3554  => 'B',
          3555  => 'A',

          3559  => 'A',

          3561  => 'E',
          3562  => 'D',
          3563  => 'C',
          3564  => 'B',
          3565  => 'A',

          3569  => 'A',

          3571  => 'E',
          3572  => 'D',
          3573  => 'C',
          3574  => 'B',
          3575  => 'A',

          3579  => 'A',

        // Core Internal > Sensors
          3601  => 'E',
          3602  => 'D',
          3603  => 'C',
          3604  => 'B',
          3605  => 'A',

          3611  => 'E',
          3612  => 'D',
          3613  => 'C',
          3614  => 'B',
          3615  => 'A',

          3621  => 'E',
          3622  => 'D',
          3623  => 'C',
          3624  => 'B',
          3625  => 'A',

          3631  => 'E',
          3632  => 'D',
          3633  => 'C',
          3634  => 'B',
          3635  => 'A',

          3641  => 'E',
          3642  => 'D',
          3643  => 'C',
          3644  => 'B',
          3645  => 'A',

          3651  => 'E',
          3652  => 'D',
          3653  => 'C',
          3654  => 'B',
          3655  => 'A',

          3661  => 'E',
          3662  => 'D',
          3663  => 'C',
          3664  => 'B',
          3665  => 'A',

          3671  => 'E',
          3672  => 'D',
          3673  => 'C',
          3674  => 'B',
          3675  => 'A',

        // Core Internal > Planetary Approach Suite
          3701  => 'I',
          3702  => 'I',

        // Core Internal > Guardian FSD Booster
          3801  => 'H',

          3811  => 'H',

          3821  => 'H',

          3831  => 'H',

          3841  => 'H',

        // Core Internal > Frame Shift Drive (SCO)
          3923  => 'C',
          3925  => 'A',
        
          3932  => 'D',
          3933  => 'C',
          3935  => 'A',
        
          3942  => 'D',
          3943  => 'C',
          3945  => 'A',
        
          3952  => 'D',
          3953  => 'C',
          3954  => 'B',
          3955  => 'A',
        
          3962  => 'D',
          3963  => 'C',
          3964  => 'B',
          3965  => 'A',
        
          3972  => 'D',
          3973  => 'C',
          3975  => 'A',

        // Optional Internal > Discovery Scanner
          4001  => 'E',
          4002  => 'D',
          4003  => 'C',

        // Optional Internal > Detailed Surface Scanner
          4011  => 'C',

        // Optional Internal > Cargo Rack
          4021  => 'E',
          4022  => 'E',
          4023  => 'E',
          4024  => 'E',
          4025  => 'E',
          4026  => 'E',
          4027  => 'E',
          4028  => 'E',

          4031  => 'F',
          4032  => 'E',
          4033  => 'E',
          4034  => 'E',

        // Optional Internal > Standard Docking Computer
          4051  => 'E',
          4052  => 'E',
          4053  => 'E',

        // Optional Internal > Shield Generator
          4101  => 'E',
          4102  => 'D',
          4103  => 'C',
          4104  => 'C',
          4106  => 'A',
          4107  => 'A',

          4111  => 'E',
          4112  => 'D',
          4113  => 'C',
          4114  => 'C',
          4115  => 'B',
          4116  => 'A',
          4117  => 'A',

          4121  => 'E',
          4122  => 'D',
          4123  => 'C',
          4124  => 'C',
          4125  => 'B',
          4126  => 'A',
          4127  => 'A',

          4131  => 'E',
          4132  => 'D',
          4133  => 'C',
          4134  => 'C',
          4135  => 'B',
          4136  => 'A',
          4137  => 'A',

          4141  => 'E',
          4142  => 'D',
          4143  => 'C',
          4144  => 'C',
          4145  => 'B',
          4146  => 'A',
          4147  => 'A',

          4151  => 'E',
          4152  => 'D',
          4153  => 'C',
          4154  => 'C',
          4155  => 'B',
          4156  => 'A',
          4157  => 'A',

          4161  => 'E',
          4162  => 'D',
          4163  => 'C',
          4164  => 'C',
          4165  => 'B',
          4166  => 'A',
          4167  => 'A',

          4171  => 'E',
          4172  => 'D',
          4173  => 'C',
          4174  => 'C',
          4175  => 'B',
          4176  => 'A',
          4177  => 'A',

        // Optional Internal > Shield Cell Bank
          4201  => 'E',
          4202  => 'D',
          4203  => 'C',
          4204  => 'B',
          4205  => 'A',

          4211  => 'E',
          4212  => 'D',
          4213  => 'C',
          4214  => 'B',
          4215  => 'A',

          4221  => 'E',
          4222  => 'D',
          4223  => 'C',
          4224  => 'B',
          4225  => 'A',

          4231  => 'E',
          4232  => 'D',
          4233  => 'C',
          4234  => 'B',
          4235  => 'A',

          4241  => 'E',
          4242  => 'D',
          4243  => 'C',
          4244  => 'B',
          4245  => 'A',

          4251  => 'E',
          4252  => 'D',
          4253  => 'C',
          4254  => 'B',
          4255  => 'A',

          4261  => 'E',
          4262  => 'D',
          4263  => 'C',
          4264  => 'B',
          4265  => 'A',

          4271  => 'E',
          4272  => 'D',
          4273  => 'C',
          4274  => 'B',
          4275  => 'A',

        // Optional Internal > Fuel Scoop
          4301  => 'E',
          4302  => 'D',
          4303  => 'C',
          4304  => 'B',
          4305  => 'A',

          4311  => 'E',
          4312  => 'D',
          4313  => 'C',
          4314  => 'B',
          4315  => 'A',

          4321  => 'E',
          4322  => 'D',
          4323  => 'C',
          4324  => 'B',
          4325  => 'A',

          4331  => 'E',
          4332  => 'D',
          4333  => 'C',
          4334  => 'B',
          4335  => 'A',

          4341  => 'E',
          4342  => 'D',
          4343  => 'C',
          4344  => 'B',
          4345  => 'A',

          4351  => 'E',
          4352  => 'D',
          4353  => 'C',
          4354  => 'B',
          4355  => 'A',

          4361  => 'E',
          4362  => 'D',
          4363  => 'C',
          4364  => 'B',
          4365  => 'A',

          4371  => 'E',
          4372  => 'D',
          4373  => 'C',
          4374  => 'B',
          4375  => 'A',

        // Optional Internal > Refinery
          4401  => 'E',
          4402  => 'D',
          4403  => 'C',
          4404  => 'B',
          4405  => 'A',

          4411  => 'E',
          4412  => 'D',
          4413  => 'C',
          4414  => 'B',
          4415  => 'A',

          4421  => 'E',
          4422  => 'D',
          4423  => 'C',
          4424  => 'B',
          4425  => 'A',

          4431  => 'E',
          4432  => 'D',
          4433  => 'C',
          4434  => 'B',
          4435  => 'A',

        // Optional Internal > Frame Shift Drive Interdictor
          4501  => 'E',
          4502  => 'D',
          4503  => 'C',
          4504  => 'B',
          4505  => 'A',

          4511  => 'E',
          4512  => 'D',
          4513  => 'C',
          4514  => 'B',
          4515  => 'A',

          4521  => 'E',
          4522  => 'D',
          4523  => 'C',
          4524  => 'B',
          4525  => 'A',

          4531  => 'E',
          4532  => 'D',
          4533  => 'C',
          4534  => 'B',
          4535  => 'A',

        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 'E',
          4602  => 'D',
          4603  => 'C',
          4604  => 'B',
          4605  => 'A',

          4621  => 'E',
          4622  => 'D',
          4623  => 'C',
          4624  => 'B',
          4625  => 'A',

          4641  => 'E',
          4642  => 'D',
          4643  => 'C',
          4644  => 'B',
          4645  => 'A',

          4661  => 'E',
          4662  => 'D',
          4663  => 'C',
          4664  => 'B',
          4665  => 'A',

        // Optional Internal > Auto Field-Maintenance Unit
          4701  => 'E',
          4702  => 'D',
          4703  => 'C',
          4704  => 'B',
          4705  => 'A',

          4711  => 'E',
          4712  => 'D',
          4713  => 'C',
          4714  => 'B',
          4715  => 'A',

          4721  => 'E',
          4722  => 'D',
          4723  => 'C',
          4724  => 'B',
          4725  => 'A',

          4731  => 'E',
          4732  => 'D',
          4733  => 'C',
          4734  => 'B',
          4735  => 'A',

          4741  => 'E',
          4742  => 'D',
          4743  => 'C',
          4744  => 'B',
          4745  => 'A',

          4751  => 'E',
          4752  => 'D',
          4753  => 'C',
          4754  => 'B',
          4755  => 'A',

          4761  => 'E',
          4762  => 'D',
          4763  => 'C',
          4764  => 'B',
          4765  => 'A',

          4771  => 'E',
          4772  => 'D',
          4773  => 'C',
          4774  => 'B',
          4775  => 'A',

        // Optional Internal > Hull Reinforcement Package
          4801  => 'E',
          4802  => 'D',

          4811  => 'E',
          4812  => 'D',

          4821  => 'E',
          4822  => 'D',

          4831  => 'E',
          4832  => 'D',

          4841  => 'E',
          4842  => 'D',

        // Optional Internal > Module Reinforcement Package
          4901  => 'E',
          4902  => 'D',

          4911  => 'E',
          4912  => 'D',

          4921  => 'E',
          4922  => 'D',

          4931  => 'E',
          4932  => 'D',

          4941  => 'E',
          4942  => 'D',

        // Optional Internal > Collector Limpet Controller
          5001  => 'E',
          5002  => 'D',
          5003  => 'C',
          5004  => 'B',
          5005  => 'A',

          5021  => 'E',
          5022  => 'D',
          5023  => 'C',
          5024  => 'B',
          5025  => 'A',

          5041  => 'E',
          5042  => 'D',
          5043  => 'C',
          5044  => 'B',
          5045  => 'A',

          5061  => 'E',
          5062  => 'D',
          5063  => 'C',
          5064  => 'B',
          5065  => 'A',

        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 'E',
          5102  => 'D',
          5103  => 'C',
          5104  => 'B',
          5105  => 'A',

          5121  => 'E',
          5122  => 'D',
          5123  => 'C',
          5124  => 'B',
          5125  => 'A',

          5141  => 'E',
          5142  => 'D',
          5143  => 'C',
          5144  => 'B',
          5145  => 'A',

          5161  => 'E',
          5162  => 'D',
          5163  => 'C',
          5164  => 'B',
          5165  => 'A',

        // Optional Internal > Prospector Limpet Controller
          5201  => 'E',
          5202  => 'D',
          5203  => 'C',
          5204  => 'B',
          5205  => 'A',

          5221  => 'E',
          5222  => 'D',
          5223  => 'C',
          5224  => 'B',
          5225  => 'A',

          5241  => 'E',
          5242  => 'D',
          5243  => 'C',
          5244  => 'B',
          5245  => 'A',

          5261  => 'E',
          5262  => 'D',
          5263  => 'C',
          5264  => 'B',
          5265  => 'A',

        // Optional Internal > Passenger Cabin
          5311  => 'E',

          5321  => 'E',
          5322  => 'D',

          5331  => 'E',
          5332  => 'D',
          5333  => 'C',

          5341  => 'E',
          5342  => 'D',
          5343  => 'C',
          5344  => 'B',

          5351  => 'E',
          5352  => 'D',
          5353  => 'C',
          5354  => 'B',

        // Optional Internal > Planetary Vehicle Hangar
          5411  => 'H',
          5412  => 'G',

          5431  => 'H',
          5432  => 'G',

          5451  => 'H',
          5452  => 'G',

        // Optional Internal > Fighter Hangar
          5541  => 'D',

          5551  => 'D',

          5561  => 'D',

        // Optional Internal > Repair Limpet Controller
          5601  => 'E',
          5602  => 'D',
          5603  => 'C',
          5604  => 'B',
          5605  => 'A',

          5621  => 'E',
          5622  => 'D',
          5623  => 'C',
          5624  => 'B',
          5625  => 'A',

          5641  => 'E',
          5642  => 'D',
          5643  => 'C',
          5644  => 'B',
          5645  => 'A',

          5661  => 'E',
          5662  => 'D',
          5663  => 'C',
          5664  => 'B',
          5665  => 'A',

        // Optional Internal > Research Limpet Controller
          5701  => 'E',

        // Optional Internal > Decontamination Limpet Controller
          5801  => 'E',

          5821  => 'E',

          5841  => 'E',

          5861  => 'E',

        // Optional Internal > Recon Limpet Controller
          5901  => 'E',

          5921  => 'E',

          5941  => 'E',

          5961  => 'E',

        // Opyional Internal > Meta Alloy Hull Reinforcement
          6001  => 'E',
          6002  => 'D',

          6011  => 'E',
          6012  => 'D',

          6021  => 'E',
          6022  => 'D',

          6031  => 'E',
          6032  => 'D',

          6041  => 'E',
          6042  => 'D',

        // Optional Internal > Guardian Hull Reinforcement
          6101  => 'E',
          6102  => 'D',

          6111  => 'E',
          6112  => 'D',

          6121  => 'E',
          6122  => 'D',

          6131  => 'E',
          6132  => 'D',

          6141  => 'E',
          6142  => 'D',

        // Optional Internal > Guardian Shield Reinforcement
          6201  => 'E',
          6202  => 'D',

          6211  => 'E',
          6212  => 'D',

          6221  => 'E',
          6222  => 'D',

          6231  => 'E',
          6232  => 'D',

          6241  => 'E',
          6242  => 'D',

        // Optional Internal > Guardian Module Reinforcement
          6301  => 'E',
          6302  => 'D',

          6311  => 'E',
          6312  => 'D',

          6321  => 'E',
          6322  => 'D',

          6331  => 'E',
          6332  => 'D',

          6341  => 'E',
          6342  => 'D',

        // Optional Internal > Multi Limpet Controller Modules
          6403  => 'C',
          6405  => 'A',
        
          6411  => 'E',
          6413  => 'C',
        
          6423  => 'C',
          6424  => 'B',
        
          6432  => 'D',
          6433  => 'C',
        
          6443  => 'C',
          6444  => 'B',
    ];
}