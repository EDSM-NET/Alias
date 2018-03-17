<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
        // Bulkhead > Adder
             1  => 'Lightweight Alloy',
             2  => 'Reinforced Alloy',
             3  => 'Military Grade Composite',
             4  => 'Mirrored Surface Composite',
             5  => 'Reactive Surface Composite',
             
        // Bulkhead > Anaconda
            11  => 'Lightweight Alloy',
            12  => 'Reinforced Alloy',
            13  => 'Military Grade Composite',
            14  => 'Mirrored Surface Composite',
            15  => 'Reactive Surface Composite',
             
        // Bulkhead > Asp Explorer
            21  => 'Lightweight Alloy',
            22  => 'Reinforced Alloy',
            23  => 'Military Grade Composite',
            24  => 'Mirrored Surface Composite',
            25  => 'Reactive Surface Composite',
             
        // Bulkhead > Asp Scout
            31  => 'Lightweight Alloy',
            32  => 'Reinforced Alloy',
            33  => 'Military Grade Composite',
            34  => 'Mirrored Surface Composite',
            35  => 'Reactive Surface Composite',
             
        // Bulkhead > Beluga Liner
            41  => 'Lightweight Alloy',
            42  => 'Reinforced Alloy',
            43  => 'Military Grade Composite',
            44  => 'Mirrored Surface Composite',
            45  => 'Reactive Surface Composite',
             
        // Bulkhead > Cobra Mk. III
            51  => 'Lightweight Alloy',
            52  => 'Reinforced Alloy',
            53  => 'Military Grade Composite',
            54  => 'Mirrored Surface Composite',
            55  => 'Reactive Surface Composite',
             
        // Bulkhead > Cobra MkIV
            61  => 'Lightweight Alloy',
            62  => 'Reinforced Alloy',
            63  => 'Military Grade Composite',
            64  => 'Mirrored Surface Composite',
            65  => 'Reactive Surface Composite',
             
        // Bulkhead > Diamondback Explorer
            71  => 'Lightweight Alloy',
            72  => 'Reinforced Alloy',
            73  => 'Military Grade Composite',
            74  => 'Mirrored Surface Composite',
            75  => 'Reactive Surface Composite',
             
        // Bulkhead > Diamondback Scout
            81  => 'Lightweight Alloy',
            82  => 'Reinforced Alloy',
            83  => 'Military Grade Composite',
            84  => 'Mirrored Surface Composite',
            85  => 'Reactive Surface Composite',
             
        // Bulkhead > Dolphin
            91  => 'Lightweight Alloy',
            92  => 'Reinforced Alloy',
            93  => 'Military Grade Composite',
            94  => 'Mirrored Surface Composite',
            95  => 'Reactive Surface Composite',
             
        // Bulkhead > Eagle
           101  => 'Lightweight Alloy',
           102  => 'Reinforced Alloy',
           103  => 'Military Grade Composite',
           104  => 'Mirrored Surface Composite',
           105  => 'Reactive Surface Composite',
             
        // Bulkhead > Federal Assault Ship
           111  => 'Lightweight Alloy',
           112  => 'Reinforced Alloy',
           113  => 'Military Grade Composite',
           114  => 'Mirrored Surface Composite',
           115  => 'Reactive Surface Composite',
             
        // Bulkhead > Federal Corvette
           121  => 'Lightweight Alloy',
           122  => 'Reinforced Alloy',
           123  => 'Military Grade Composite',
           124  => 'Mirrored Surface Composite',
           125  => 'Reactive Surface Composite',
             
        // Bulkhead > Federal Dropship
           131  => 'Lightweight Alloy',
           132  => 'Reinforced Alloy',
           133  => 'Military Grade Composite',
           134  => 'Mirrored Surface Composite',
           135  => 'Reactive Surface Composite',
             
        // Bulkhead > Federal Gunship
           141  => 'Lightweight Alloy',
           142  => 'Reinforced Alloy',
           143  => 'Military Grade Composite',
           144  => 'Mirrored Surface Composite',
           145  => 'Reactive Surface Composite',
             
        // Bulkhead > Fer-de-Lance
           151  => 'Lightweight Alloy',
           152  => 'Reinforced Alloy',
           153  => 'Military Grade Composite',
           154  => 'Mirrored Surface Composite',
           155  => 'Reactive Surface Composite',
             
        // Bulkhead > Hauler
           161  => 'Lightweight Alloy',
           162  => 'Reinforced Alloy',
           163  => 'Military Grade Composite',
           164  => 'Mirrored Surface Composite',
           165  => 'Reactive Surface Composite',
             
        // Bulkhead > Imperial Clipper
           171  => 'Lightweight Alloy',
           172  => 'Reinforced Alloy',
           173  => 'Military Grade Composite',
           174  => 'Mirrored Surface Composite',
           175  => 'Reactive Surface Composite',
             
        // Bulkhead > Imperial Courrier
           181  => 'Lightweight Alloy',
           182  => 'Reinforced Alloy',
           183  => 'Military Grade Composite',
           184  => 'Mirrored Surface Composite',
           185  => 'Reactive Surface Composite',
             
        // Bulkhead > Imperial Cutter
           191  => 'Lightweight Alloy',
           192  => 'Reinforced Alloy',
           193  => 'Military Grade Composite',
           194  => 'Mirrored Surface Composite',
           195  => 'Reactive Surface Composite',
             
        // Bulkhead > Imperial Eagle
           201  => 'Lightweight Alloy',
           202  => 'Reinforced Alloy',
           203  => 'Military Grade Composite',
           204  => 'Mirrored Surface Composite',
           205  => 'Reactive Surface Composite',
             
        // Bulkhead > Keelback
           211  => 'Lightweight Alloy',
           212  => 'Reinforced Alloy',
           213  => 'Military Grade Composite',
           214  => 'Mirrored Surface Composite',
           215  => 'Reactive Surface Composite',
             
        // Bulkhead > Orca
           221  => 'Lightweight Alloy',
           222  => 'Reinforced Alloy',
           223  => 'Military Grade Composite',
           224  => 'Mirrored Surface Composite',
           225  => 'Reactive Surface Composite',
             
        // Bulkhead > Python
           231  => 'Lightweight Alloy',
           232  => 'Reinforced Alloy',
           233  => 'Military Grade Composite',
           234  => 'Mirrored Surface Composite',
           235  => 'Reactive Surface Composite',
             
        // Bulkhead > Sidewinder
           241  => 'Lightweight Alloy',
           242  => 'Reinforced Alloy',
           243  => 'Military Grade Composite',
           244  => 'Mirrored Surface Composite',
           245  => 'Reactive Surface Composite',
             
        // Bulkhead > Type-6 Transporter
           251  => 'Lightweight Alloy',
           252  => 'Reinforced Alloy',
           253  => 'Military Grade Composite',
           254  => 'Mirrored Surface Composite',
           255  => 'Reactive Surface Composite',
             
        // Bulkhead > Type-7 Transporter
           261  => 'Lightweight Alloy',
           262  => 'Reinforced Alloy',
           263  => 'Military Grade Composite',
           264  => 'Mirrored Surface Composite',
           265  => 'Reactive Surface Composite',
             
        // Bulkhead > Type-9 Heavy
           271  => 'Lightweight Alloy',
           272  => 'Reinforced Alloy',
           273  => 'Military Grade Composite',
           274  => 'Mirrored Surface Composite',
           275  => 'Reactive Surface Composite',
             
        // Bulkhead > Viper MkIII
           281  => 'Lightweight Alloy',
           282  => 'Reinforced Alloy',
           283  => 'Military Grade Composite',
           284  => 'Mirrored Surface Composite',
           285  => 'Reactive Surface Composite',
             
        // Bulkhead > Viper MkIV
           291  => 'Lightweight Alloy',
           292  => 'Reinforced Alloy',
           293  => 'Military Grade Composite',
           294  => 'Mirrored Surface Composite',
           295  => 'Reactive Surface Composite',
             
        // Bulkhead > Vulture
           301  => 'Lightweight Alloy',
           302  => 'Reinforced Alloy',
           303  => 'Military Grade Composite',
           304  => 'Mirrored Surface Composite',
           305  => 'Reactive Surface Composite',
             
        // Bulkhead > Type-10 Defender
           311  => 'Lightweight Alloy',
           312  => 'Reinforced Alloy',
           313  => 'Military Grade Composite',
           314  => 'Mirrored Surface Composite',
           315  => 'Reactive Surface Composite',
             
        // Bulkhead > Alliance Chieftain
           321  => 'Lightweight Alloy',
           322  => 'Reinforced Alloy',
           323  => 'Military Grade Composite',
           324  => 'Mirrored Surface Composite',
           325  => 'Reactive Surface Composite',
        
        // Weapon Hardpoint > Beam Laser
          1001  => 'Beam Laser (Fixed)',
          1002  => 'Beam Laser (Fixed)',
          1003  => 'Beam Laser (Fixed)',
          1004  => 'Beam Laser (Fixed)',
          
          1005  => 'Beam Laser (Gimbal)',
          1006  => 'Beam Laser (Gimbal)',
          1007  => 'Beam Laser (Gimbal)',
          1008  => 'Beam Laser (Gimbal)',
          
          1009  => 'Beam Laser (Turret)',
          1010  => 'Beam Laser (Turret)',
          1011  => 'Beam Laser (Turret)',
          
          1021  => 'Retributor Beam Laser (Fixed, Powerplay)',
          
          1032  => 'Gauss Cannon (Fixed, Guardian)',
        
        // Weapon Hardpoint > Pulse Laser
          1051  => 'Pulse Laser (Fixed)',
          1052  => 'Pulse Laser (Fixed)',
          1053  => 'Pulse Laser (Fixed)',
          1054  => 'Pulse Laser (Fixed)',
          
          1055  => 'Pulse Laser (Gimbal)',
          1056  => 'Pulse Laser (Gimbal)',
          1057  => 'Pulse Laser (Gimbal)',
          1058  => 'Pulse Laser (Gimbal)',
          
          1059  => 'Pulse Laser (Turret)',
          1060  => 'Pulse Laser (Turret)',
          1061  => 'Pulse Laser (Turret)',
          
          1072  => 'Pulse Laser Disruptor (Fixed, Powerplay)',
        
        // Weapon Hardpoint > Burst Laser
          1101  => 'Burst Laser (Fixed)',
          1102  => 'Burst Laser (Fixed)',
          1103  => 'Burst Laser (Fixed)',
          1104  => 'Burst Laser (Fixed)',
          
          1105  => 'Burst Laser (Gimbal)',
          1106  => 'Burst Laser (Gimbal)',
          1107  => 'Burst Laser (Gimbal)',
          1108  => 'Burst Laser (Gimbal)',
          
          1109  => 'Burst Laser (Turret)',
          1110  => 'Burst Laser (Turret)',
          1111  => 'Burst Laser (Turret)',
          
          1121  => 'Cytoscrambler Burst Laser (Fixed, Powerplay)',
        
        // Weapon Hardpoint > Cannon
          1151  => 'Cannon (Fixed)',
          1152  => 'Cannon (Fixed)',
          1153  => 'Cannon (Fixed)',
          1154  => 'Cannon (Fixed)',
          
          1155  => 'Cannon (Gimbal)',
          1156  => 'Cannon (Gimbal)',
          1157  => 'Cannon (Gimbal)',
          1158  => 'Cannon (Gimbal)',
          
          1159  => 'Cannon (Turret)',
          1160  => 'Cannon (Turret)',
          1161  => 'Cannon (Turret)',
        
        // Weapon Hardpoint > Fragment Cannon
          1201  => 'Fragment Cannon (Fixed)',
          1202  => 'Fragment Cannon (Fixed)',
          1203  => 'Fragment Cannon (Fixed)',
          
          1205  => 'Fragment Cannon (Gimbal)',
          1206  => 'Fragment Cannon (Gimbal)',
          1207  => 'Fragment Cannon (Gimbal)',
          
          1209  => 'Fragment Cannon (Turret)',
          1210  => 'Fragment Cannon (Turret)',
          1211  => 'Fragment Cannon (Turret)',
          
          1215  => 'Pacifier Frag-Cannon (Fixed, Powerplay)',
        
        // Weapon Hardpoint > Multi-Cannon
          1251  => 'Multi-Cannon (Fixed)',
          1252  => 'Multi-Cannon (Fixed)',
          1253  => 'Multi-Cannon (Fixed)',
          1254  => 'Multi-Cannon (Fixed)',
          
          1255  => 'Multi-Cannon (Gimbal)',
          1256  => 'Multi-Cannon (Gimbal)',
          1257  => 'Multi-Cannon (Gimbal)',
          1258  => 'Multi-Cannon (Gimbal)',
          
          1259  => 'Multi-Cannon (Turret)',
          1260  => 'Multi-Cannon (Turret)',
          
          1271  => 'Enforcer Multi-Cannon (Fixed, Powerplay)',
        
        // Weapon Hardpoint > Plasma Accelerator
          1302  => 'Plasma Accelerator (Fixed)',
          1303  => 'Plasma Accelerator (Fixed)',
          1304  => 'Plasma Accelerator (Fixed)',
          
          1313  => 'Advanced Plasma Accelerator (Fixed, Powerplay)',
          
          1322  => 'Plasma Charger (Turret, Guardian)',
          1323  => 'Plasma Charger (Fixed, Guardian)',
        
        // Weapon Hardpoint > Rail Gun
          1351  => 'Rail Gun (Fixed)',
          1352  => 'Rail Gun (Fixed)',
          
          1362  => 'Imperial Hammer Rail Gun (Fixed, Powerplay)',
        
        // Weapon Hardpoint > Missile Rack
          1401  => 'Missile Rack (Seeker, Fixed)',
          1402  => 'Missile Rack (Seeker, Fixed)',
          1405  => 'Missile Rack (Dumbfire, Fixed)',
          1406  => 'Missile Rack (Dumpfire, Fixed)',
          
          1411  => 'Missile Rack (Dumpfire, Fixed, Powerplay)',
        
        // Weapon Hardpoint > Mine Launcher
          1451  => 'Mine Launcher (Fixed)',
          1452  => 'Mine Launcher (Fixed)',
        
        // Weapon Hardpoint > Mining Laser
          1501  => 'Mining Laser (Fixed)',
          1502  => 'Mining Laser (Fixed)',
          1509  => 'Mining Laser (Turret)',
          1510  => 'Mining Laser (Turret)',
          
          1521  => 'Mining Lance (Fixed, Powerplay)',
        
        // Weapon Hardpoint > Torpedo Pylon
          1551  => 'Torpedo Pylon (Seeker, Fixed)',
          1552  => 'Torpedo Pylon (Seeker, Fixed)',
        
        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 'Shock Mine Launcher (Fixed)',
        
        // Weapon Hardpoint > AX Missile Rack
          1652  => 'AX Missile Rack (Dumpfire, Fixed)',
          1653  => 'AX Missile Rack (Dumpfire, Fixed)',
          1660  => 'AX Missile Rack (Dumpfire, Turret)',
          1661  => 'AX Missile Rack (Dumpfire, Turret)',
        
        // Weapon Hardpoint > AX Multi-Cannon
          1702  => 'AX Multi-Cannon (Fixed)',
          1703  => 'AX Multi-Cannon (Fixed)',
          1710  => 'AX Multi-Cannon (Turret)',
          1711  => 'AX Multi-Cannon (Turret)',
        
        // Weapon Hardpoint > Remote Release Flak Launcher
          1752  => 'Remote Release Flak Launcher (Fixed)',
          1760  => 'Remote Release Flak Launcher (Turret)',
        
        // Weapon Hardpoint > Remote Release Flechette Launcher
          1772  => 'Remote Release Flechette Launcher (Fixed)',
          1780  => 'Remote Release Flechette Launcher (Turret)',
        
        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 'Pack-Hound Missile Rack (Swarm, Fixed)',
        
        // Weapon Hardpoint > Shock Cannon
          1852  => 'Shock Cannon (Fixed)',
          1856  => 'Shock Cannon (Gimbal)',
          
        // Utility Mount > Shield Booster
          2001  => 'Shield Booster',
          2002  => 'Shield Booster',
          2003  => 'Shield Booster',
          2004  => 'Shield Booster',
          2005  => 'Shield Booster',
          
        // Utility Mount > Chaff Launcher
          2050  => 'Chaff Launcher',
          
        // Utility Mount > Electronic Countermeasure
          2100  => 'Electronic Countermeasure',
          
        // Utility Mount > Heat Sink Launcher
          2150  => 'Heat Sink Launcher',
          
        // Utility Mount > Point Defence
          2200  => 'Point Defence',
          
        // Utility Mount > Cargo Scanner
          2251  => 'Cargo Scanner',
          2252  => 'Cargo Scanner',
          2253  => 'Cargo Scanner',
          2254  => 'Cargo Scanner',
          2255  => 'Cargo Scanner',
          
        // Utility Mount > Frame Shift Wake Scanner
          2301  => 'Frame Shift Wake Scanner',
          2302  => 'Frame Shift Wake Scanner',
          2303  => 'Frame Shift Wake Scanner',
          2304  => 'Frame Shift Wake Scanner',
          2305  => 'Frame Shift Wake Scanner',
          
        // Utility Mount > Kill Warrant Scanner
          2351  => 'Kill Warrant Scanner',
          2352  => 'Kill Warrant Scanner',
          2353  => 'Kill Warrant Scanner',
          2354  => 'Kill Warrant Scanner',
          2355  => 'Kill Warrant Scanner',
          
        // Utility Mount > Xeno Scanner
          2401  => 'Xeno Scanner',
          
        // Utility Mount > Shutdown Field Neutraliser
          2451  => 'Shutdown Field Neutraliser',
        
        // Core Internal > Fuel Tank
          3001  => 'Fuel Tank',
          3002  => 'Fuel Tank',
          3003  => 'Fuel Tank',
          3004  => 'Fuel Tank',
          3005  => 'Fuel Tank',
          3006  => 'Fuel Tank',
          3007  => 'Fuel Tank',
          3008  => 'Fuel Tank',
        
        // Core Internal > Power Plant
          3101  => 'Power Plant',
          3102  => 'Power Plant',
          3103  => 'Power Plant',
          3104  => 'Power Plant',
          3105  => 'Power Plant',
          
          3109  => 'Guardian Hybrid Power Plant',
        
          3111  => 'Power Plant',
          3112  => 'Power Plant',
          3113  => 'Power Plant',
          3114  => 'Power Plant',
          3115  => 'Power Plant',
          
          3119  => 'Guardian Hybrid Power Plant',
        
          3121  => 'Power Plant',
          3122  => 'Power Plant',
          3123  => 'Power Plant',
          3124  => 'Power Plant',
          3125  => 'Power Plant',
          
          3129  => 'Guardian Hybrid Power Plant',
        
          3131  => 'Power Plant',
          3132  => 'Power Plant',
          3133  => 'Power Plant',
          3134  => 'Power Plant',
          3135  => 'Power Plant',
          
          3139  => 'Guardian Hybrid Power Plant',
        
          3141  => 'Power Plant',
          3142  => 'Power Plant',
          3143  => 'Power Plant',
          3144  => 'Power Plant',
          3145  => 'Power Plant',
          
          3149  => 'Guardian Hybrid Power Plant',
        
          3151  => 'Power Plant',
          3152  => 'Power Plant',
          3153  => 'Power Plant',
          3154  => 'Power Plant',
          3155  => 'Power Plant',
          
          3159  => 'Guardian Hybrid Power Plant',
        
          3161  => 'Power Plant',
          3162  => 'Power Plant',
          3163  => 'Power Plant',
          3164  => 'Power Plant',
          3165  => 'Power Plant',
          
          3169  => 'Guardian Hybrid Power Plant',
        
        // Core Internal > Thrusters
          3201  => 'Thrusters',
          3202  => 'Thrusters',
          3203  => 'Thrusters',
          3204  => 'Thrusters',
          3205  => 'Thrusters',
          3206  => 'Enhanced Performance Thrusters',
        
          3211  => 'Thrusters',
          3212  => 'Thrusters',
          3213  => 'Thrusters',
          3214  => 'Thrusters',
          3215  => 'Thrusters',
          3216  => 'Enhanced Performance Thrusters',
        
          3221  => 'Thrusters',
          3222  => 'Thrusters',
          3223  => 'Thrusters',
          3224  => 'Thrusters',
          3225  => 'Thrusters',
        
          3231  => 'Thrusters',
          3232  => 'Thrusters',
          3233  => 'Thrusters',
          3234  => 'Thrusters',
          3235  => 'Thrusters',
        
          3241  => 'Thrusters',
          3242  => 'Thrusters',
          3243  => 'Thrusters',
          3244  => 'Thrusters',
          3245  => 'Thrusters',
        
          3251  => 'Thrusters',
          3252  => 'Thrusters',
          3253  => 'Thrusters',
          3254  => 'Thrusters',
          3255  => 'Thrusters',
        
          3261  => 'Thrusters',
          3262  => 'Thrusters',
          3263  => 'Thrusters',
          3264  => 'Thrusters',
          3265  => 'Thrusters',
        
        // Core Internal > Frame Shift Drive
          3301  => 'Frame Shift Drive',
          3302  => 'Frame Shift Drive',
          3303  => 'Frame Shift Drive',
          3304  => 'Frame Shift Drive',
          3305  => 'Frame Shift Drive',
        
          3311  => 'Frame Shift Drive',
          3312  => 'Frame Shift Drive',
          3313  => 'Frame Shift Drive',
          3314  => 'Frame Shift Drive',
          3315  => 'Frame Shift Drive',
        
          3321  => 'Frame Shift Drive',
          3322  => 'Frame Shift Drive',
          3323  => 'Frame Shift Drive',
          3324  => 'Frame Shift Drive',
          3325  => 'Frame Shift Drive',
        
          3331  => 'Frame Shift Drive',
          3332  => 'Frame Shift Drive',
          3333  => 'Frame Shift Drive',
          3334  => 'Frame Shift Drive',
          3335  => 'Frame Shift Drive',
        
          3341  => 'Frame Shift Drive',
          3342  => 'Frame Shift Drive',
          3343  => 'Frame Shift Drive',
          3344  => 'Frame Shift Drive',
          3345  => 'Frame Shift Drive',
        
          3351  => 'Frame Shift Drive',
          3352  => 'Frame Shift Drive',
          3353  => 'Frame Shift Drive',
          3354  => 'Frame Shift Drive',
          3355  => 'Frame Shift Drive',
        
          3361  => 'Frame Shift Drive',
          3362  => 'Frame Shift Drive',
          3363  => 'Frame Shift Drive',
          3364  => 'Frame Shift Drive',
          3365  => 'Frame Shift Drive',
        
        // Core Internal > Life Support
          3401  => 'Life Support',
          3402  => 'Life Support',
          3403  => 'Life Support',
          3404  => 'Life Support',
          3405  => 'Life Support',
        
          3411  => 'Life Support',
          3412  => 'Life Support',
          3413  => 'Life Support',
          3414  => 'Life Support',
          3415  => 'Life Support',
        
          3421  => 'Life Support',
          3422  => 'Life Support',
          3423  => 'Life Support',
          3424  => 'Life Support',
          3425  => 'Life Support',
        
          3431  => 'Life Support',
          3432  => 'Life Support',
          3433  => 'Life Support',
          3434  => 'Life Support',
          3435  => 'Life Support',
        
          3441  => 'Life Support',
          3442  => 'Life Support',
          3443  => 'Life Support',
          3444  => 'Life Support',
          3445  => 'Life Support',
        
          3451  => 'Life Support',
          3452  => 'Life Support',
          3453  => 'Life Support',
          3454  => 'Life Support',
          3455  => 'Life Support',
        
          3461  => 'Life Support',
          3462  => 'Life Support',
          3463  => 'Life Support',
          3464  => 'Life Support',
          3465  => 'Life Support',
        
          3471  => 'Life Support',
          3472  => 'Life Support',
          3473  => 'Life Support',
          3474  => 'Life Support',
          3475  => 'Life Support',
        
        // Core Internal > Power Distributor
          3501  => 'Power Distributor',
          3502  => 'Power Distributor',
          3503  => 'Power Distributor',
          3504  => 'Power Distributor',
          3505  => 'Power Distributor',
        
          3511  => 'Power Distributor',
          3512  => 'Power Distributor',
          3513  => 'Power Distributor',
          3514  => 'Power Distributor',
          3515  => 'Power Distributor',
        
          3521  => 'Power Distributor',
          3522  => 'Power Distributor',
          3523  => 'Power Distributor',
          3524  => 'Power Distributor',
          3525  => 'Power Distributor',
        
          3531  => 'Power Distributor',
          3532  => 'Power Distributor',
          3533  => 'Power Distributor',
          3534  => 'Power Distributor',
          3535  => 'Power Distributor',
        
          3541  => 'Power Distributor',
          3542  => 'Power Distributor',
          3543  => 'Power Distributor',
          3544  => 'Power Distributor',
          3545  => 'Power Distributor',
        
          3551  => 'Power Distributor',
          3552  => 'Power Distributor',
          3553  => 'Power Distributor',
          3554  => 'Power Distributor',
          3555  => 'Power Distributor',
        
          3561  => 'Power Distributor',
          3562  => 'Power Distributor',
          3563  => 'Power Distributor',
          3564  => 'Power Distributor',
          3565  => 'Power Distributor',
        
          3571  => 'Power Distributor',
          3572  => 'Power Distributor',
          3573  => 'Power Distributor',
          3574  => 'Power Distributor',
          3575  => 'Power Distributor',
        
        // Core Internal > Sensors
          3601  => 'Sensors',
          3602  => 'Sensors',
          3603  => 'Sensors',
          3604  => 'Sensors',
          3605  => 'Sensors',
        
          3611  => 'Sensors',
          3612  => 'Sensors',
          3613  => 'Sensors',
          3614  => 'Sensors',
          3615  => 'Sensors',
        
          3621  => 'Sensors',
          3622  => 'Sensors',
          3623  => 'Sensors',
          3624  => 'Sensors',
          3625  => 'Sensors',
        
          3631  => 'Sensors',
          3632  => 'Sensors',
          3633  => 'Sensors',
          3634  => 'Sensors',
          3635  => 'Sensors',
        
          3641  => 'Sensors',
          3642  => 'Sensors',
          3643  => 'Sensors',
          3644  => 'Sensors',
          3645  => 'Sensors',
        
          3651  => 'Sensors',
          3652  => 'Sensors',
          3653  => 'Sensors',
          3654  => 'Sensors',
          3655  => 'Sensors',
        
          3661  => 'Sensors',
          3662  => 'Sensors',
          3663  => 'Sensors',
          3664  => 'Sensors',
          3665  => 'Sensors',
        
          3671  => 'Sensors',
          3672  => 'Sensors',
          3673  => 'Sensors',
          3674  => 'Sensors',
          3675  => 'Sensors',
        
        // Core Internal > Planetary Approach Suite
          3701  => 'Planetary Approach Suite',
        
        // Optional Internal > Discovery Scanner
          4001  => 'Basic Discovery Scanner',
          4002  => 'Intermediate Discovery Scanner',
          4003  => 'Advanced Discovery Scanner',
        
        // Optional Internal > Detailed Surface Scanner
          4011  => 'Detailed Surface Scanner',
        
        // Optional Internal > Cargo Rack
          4021  => 'Cargo Rack',
          4022  => 'Cargo Rack',
          4023  => 'Cargo Rack',
          4024  => 'Cargo Rack',
          4025  => 'Cargo Rack',
          4026  => 'Cargo Rack',
          4027  => 'Cargo Rack',
          4028  => 'Cargo Rack',
          
          4031  => 'Corrosion Resistant Cargo Rack',
          4032  => 'Corrosion Resistant Cargo Rack',
          4033  => 'Corrosion Resistant Cargo Rack',
          4034  => 'Corrosion Resistant Cargo Rack',
        
        // Optional Internal > Standard Docking Computer
          4051  => 'Standard Docking Computer',
        
        // Optional Internal > Shield Generator
          4104  => 'Bi-Weave Shield Generator',
          4106  => 'Shield Generator',
          4107  => 'Prismatic Shield Generator (Powerplay)',
        
          4111  => 'Shield Generator',
          4112  => 'Shield Generator',
          4113  => 'Shield Generator',
          4114  => 'Bi-Weave Shield Generator',
          4115  => 'Shield Generator',
          4116  => 'Shield Generator',
          4117  => 'Prismatic Shield Generator (Powerplay)',
        
          4121  => 'Shield Generator',
          4122  => 'Shield Generator',
          4123  => 'Shield Generator',
          4124  => 'Bi-Weave Shield Generator',
          4125  => 'Shield Generator',
          4126  => 'Shield Generator',
          4127  => 'Prismatic Shield Generator (Powerplay)',
        
          4131  => 'Shield Generator',
          4132  => 'Shield Generator',
          4133  => 'Shield Generator',
          4134  => 'Bi-Weave Shield Generator',
          4135  => 'Shield Generator',
          4136  => 'Shield Generator',
          4137  => 'Prismatic Shield Generator (Powerplay)',
        
          4141  => 'Shield Generator',
          4142  => 'Shield Generator',
          4143  => 'Shield Generator',
          4144  => 'Bi-Weave Shield Generator',
          4145  => 'Shield Generator',
          4146  => 'Shield Generator',
          4147  => 'Prismatic Shield Generator (Powerplay)',
        
          4151  => 'Shield Generator',
          4152  => 'Shield Generator',
          4153  => 'Shield Generator',
          4154  => 'Bi-Weave Shield Generator',
          4155  => 'Shield Generator',
          4156  => 'Shield Generator',
          4157  => 'Prismatic Shield Generator (Powerplay)',
        
          4161  => 'Shield Generator',
          4162  => 'Shield Generator',
          4163  => 'Shield Generator',
          4164  => 'Bi-Weave Shield Generator',
          4165  => 'Shield Generator',
          4166  => 'Shield Generator',
          4167  => 'Prismatic Shield Generator (Powerplay)',
        
          4171  => 'Shield Generator',
          4172  => 'Shield Generator',
          4173  => 'Shield Generator',
          4174  => 'Bi-Weave Shield Generator',
          4175  => 'Shield Generator',
          4176  => 'Shield Generator',
          4177  => 'Prismatic Shield Generator (Powerplay)',
        
        // Optional Internal > Shield Cell Bank
          4201  => 'Shield Cell Bank',
          4202  => 'Shield Cell Bank',
          4203  => 'Shield Cell Bank',
          4204  => 'Shield Cell Bank',
          4205  => 'Shield Cell Bank',
        
          4211  => 'Shield Cell Bank',
          4212  => 'Shield Cell Bank',
          4213  => 'Shield Cell Bank',
          4214  => 'Shield Cell Bank',
          4215  => 'Shield Cell Bank',
        
          4221  => 'Shield Cell Bank',
          4222  => 'Shield Cell Bank',
          4223  => 'Shield Cell Bank',
          4224  => 'Shield Cell Bank',
          4225  => 'Shield Cell Bank',
        
          4231  => 'Shield Cell Bank',
          4232  => 'Shield Cell Bank',
          4233  => 'Shield Cell Bank',
          4234  => 'Shield Cell Bank',
          4235  => 'Shield Cell Bank',
        
          4241  => 'Shield Cell Bank',
          4242  => 'Shield Cell Bank',
          4243  => 'Shield Cell Bank',
          4244  => 'Shield Cell Bank',
          4245  => 'Shield Cell Bank',
        
          4251  => 'Shield Cell Bank',
          4252  => 'Shield Cell Bank',
          4253  => 'Shield Cell Bank',
          4254  => 'Shield Cell Bank',
          4255  => 'Shield Cell Bank',
        
          4261  => 'Shield Cell Bank',
          4262  => 'Shield Cell Bank',
          4263  => 'Shield Cell Bank',
          4264  => 'Shield Cell Bank',
          4265  => 'Shield Cell Bank',
        
          4271  => 'Shield Cell Bank',
          4272  => 'Shield Cell Bank',
          4273  => 'Shield Cell Bank',
          4274  => 'Shield Cell Bank',
          4275  => 'Shield Cell Bank',
        
        // Optional Internal > Fuel Scoop
          4301  => 'Fuel Scoop',
          4302  => 'Fuel Scoop',
          4303  => 'Fuel Scoop',
          4304  => 'Fuel Scoop',
          4305  => 'Fuel Scoop',
        
          4311  => 'Fuel Scoop',
          4312  => 'Fuel Scoop',
          4313  => 'Fuel Scoop',
          4314  => 'Fuel Scoop',
          4315  => 'Fuel Scoop',
        
          4321  => 'Fuel Scoop',
          4322  => 'Fuel Scoop',
          4323  => 'Fuel Scoop',
          4324  => 'Fuel Scoop',
          4325  => 'Fuel Scoop',
        
          4331  => 'Fuel Scoop',
          4332  => 'Fuel Scoop',
          4333  => 'Fuel Scoop',
          4334  => 'Fuel Scoop',
          4335  => 'Fuel Scoop',
        
          4341  => 'Fuel Scoop',
          4342  => 'Fuel Scoop',
          4343  => 'Fuel Scoop',
          4344  => 'Fuel Scoop',
          4345  => 'Fuel Scoop',
        
          4351  => 'Fuel Scoop',
          4352  => 'Fuel Scoop',
          4353  => 'Fuel Scoop',
          4354  => 'Fuel Scoop',
          4355  => 'Fuel Scoop',
        
          4361  => 'Fuel Scoop',
          4362  => 'Fuel Scoop',
          4363  => 'Fuel Scoop',
          4364  => 'Fuel Scoop',
          4365  => 'Fuel Scoop',
        
          4371  => 'Fuel Scoop',
          4372  => 'Fuel Scoop',
          4373  => 'Fuel Scoop',
          4374  => 'Fuel Scoop',
          4375  => 'Fuel Scoop',
        
        // Optional Internal > Refinery
          4401  => 'Refinery',
          4402  => 'Refinery',
          4403  => 'Refinery',
          4404  => 'Refinery',
          4405  => 'Refinery',
        
          4411  => 'Refinery',
          4412  => 'Refinery',
          4413  => 'Refinery',
          4414  => 'Refinery',
          4415  => 'Refinery',
        
          4421  => 'Refinery',
          4422  => 'Refinery',
          4423  => 'Refinery',
          4424  => 'Refinery',
          4425  => 'Refinery',
        
          4431  => 'Refinery',
          4432  => 'Refinery',
          4433  => 'Refinery',
          4434  => 'Refinery',
          4435  => 'Refinery',
        
        // Optional Internal > Frame Shift Drive Interdictor
          4501  => 'Frame Shift Drive Interdictor',
          4502  => 'Frame Shift Drive Interdictor',
          4503  => 'Frame Shift Drive Interdictor',
          4504  => 'Frame Shift Drive Interdictor',
          4505  => 'Frame Shift Drive Interdictor',
        
          4511  => 'Frame Shift Drive Interdictor',
          4512  => 'Frame Shift Drive Interdictor',
          4513  => 'Frame Shift Drive Interdictor',
          4514  => 'Frame Shift Drive Interdictor',
          4515  => 'Frame Shift Drive Interdictor',
        
          4521  => 'Frame Shift Drive Interdictor',
          4522  => 'Frame Shift Drive Interdictor',
          4523  => 'Frame Shift Drive Interdictor',
          4524  => 'Frame Shift Drive Interdictor',
          4525  => 'Frame Shift Drive Interdictor',
        
          4531  => 'Frame Shift Drive Interdictor',
          4532  => 'Frame Shift Drive Interdictor',
          4533  => 'Frame Shift Drive Interdictor',
          4534  => 'Frame Shift Drive Interdictor',
          4535  => 'Frame Shift Drive Interdictor',
        
        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 'Hatch Breaker Limpet Controller',
          4602  => 'Hatch Breaker Limpet Controller',
          4603  => 'Hatch Breaker Limpet Controller',
          4604  => 'Hatch Breaker Limpet Controller',
          4605  => 'Hatch Breaker Limpet Controller',
        
          4621  => 'Hatch Breaker Limpet Controller',
          4622  => 'Hatch Breaker Limpet Controller',
          4623  => 'Hatch Breaker Limpet Controller',
          4624  => 'Hatch Breaker Limpet Controller',
          4625  => 'Hatch Breaker Limpet Controller',
        
          4641  => 'Hatch Breaker Limpet Controller',
          4642  => 'Hatch Breaker Limpet Controller',
          4643  => 'Hatch Breaker Limpet Controller',
          4644  => 'Hatch Breaker Limpet Controller',
          4645  => 'Hatch Breaker Limpet Controller',
        
          4661  => 'Hatch Breaker Limpet Controller',
          4662  => 'Hatch Breaker Limpet Controller',
          4663  => 'Hatch Breaker Limpet Controller',
          4664  => 'Hatch Breaker Limpet Controller',
          4665  => 'Hatch Breaker Limpet Controller',
        
        // Optional Internal > Auto Field-Maintenance Unit
          4701  => 'Auto Field-Maintenance Unit',
          4702  => 'Auto Field-Maintenance Unit',
          4703  => 'Auto Field-Maintenance Unit',
          4704  => 'Auto Field-Maintenance Unit',
          4705  => 'Auto Field-Maintenance Unit',
        
          4711  => 'Auto Field-Maintenance Unit',
          4712  => 'Auto Field-Maintenance Unit',
          4713  => 'Auto Field-Maintenance Unit',
          4714  => 'Auto Field-Maintenance Unit',
          4715  => 'Auto Field-Maintenance Unit',
        
          4721  => 'Auto Field-Maintenance Unit',
          4722  => 'Auto Field-Maintenance Unit',
          4723  => 'Auto Field-Maintenance Unit',
          4724  => 'Auto Field-Maintenance Unit',
          4725  => 'Auto Field-Maintenance Unit',
        
          4731  => 'Auto Field-Maintenance Unit',
          4732  => 'Auto Field-Maintenance Unit',
          4733  => 'Auto Field-Maintenance Unit',
          4734  => 'Auto Field-Maintenance Unit',
          4735  => 'Auto Field-Maintenance Unit',
        
          4741  => 'Auto Field-Maintenance Unit',
          4742  => 'Auto Field-Maintenance Unit',
          4743  => 'Auto Field-Maintenance Unit',
          4744  => 'Auto Field-Maintenance Unit',
          4745  => 'Auto Field-Maintenance Unit',
        
          4751  => 'Auto Field-Maintenance Unit',
          4752  => 'Auto Field-Maintenance Unit',
          4753  => 'Auto Field-Maintenance Unit',
          4754  => 'Auto Field-Maintenance Unit',
          4755  => 'Auto Field-Maintenance Unit',
        
          4761  => 'Auto Field-Maintenance Unit',
          4762  => 'Auto Field-Maintenance Unit',
          4763  => 'Auto Field-Maintenance Unit',
          4764  => 'Auto Field-Maintenance Unit',
          4765  => 'Auto Field-Maintenance Unit',
        
          4771  => 'Auto Field-Maintenance Unit',
          4772  => 'Auto Field-Maintenance Unit',
          4773  => 'Auto Field-Maintenance Unit',
          4774  => 'Auto Field-Maintenance Unit',
          4775  => 'Auto Field-Maintenance Unit',
        
        // Optional Internal > Hull Reinforcement Package
          4801  => 'Hull Reinforcement Package',
          4802  => 'Hull Reinforcement Package',
        
          4811  => 'Hull Reinforcement Package',
          4812  => 'Hull Reinforcement Package',
        
          4821  => 'Hull Reinforcement Package',
          4822  => 'Hull Reinforcement Package',
        
          4831  => 'Hull Reinforcement Package',
          4832  => 'Hull Reinforcement Package',
        
          4841  => 'Hull Reinforcement Package',
          4842  => 'Hull Reinforcement Package',
        
        // Optional Internal > Module Reinforcement Package
          4901  => 'Module Reinforcement Package',
          4902  => 'Module Reinforcement Package',
        
          4911  => 'Module Reinforcement Package',
          4912  => 'Module Reinforcement Package',
        
          4921  => 'Module Reinforcement Package',
          4922  => 'Module Reinforcement Package',
        
          4931  => 'Module Reinforcement Package',
          4932  => 'Module Reinforcement Package',
        
          4941  => 'Module Reinforcement Package',
          4942  => 'Module Reinforcement Package',
        
        // Optional Internal > Collector Limpet Controller
          5001  => 'Collector Limpet Controller',
          5002  => 'Collector Limpet Controller',
          5003  => 'Collector Limpet Controller',
          5004  => 'Collector Limpet Controller',
          5005  => 'Collector Limpet Controller',
        
          5021  => 'Collector Limpet Controller',
          5022  => 'Collector Limpet Controller',
          5023  => 'Collector Limpet Controller',
          5024  => 'Collector Limpet Controller',
          5025  => 'Collector Limpet Controller',
        
          5041  => 'Collector Limpet Controller',
          5042  => 'Collector Limpet Controller',
          5043  => 'Collector Limpet Controller',
          5044  => 'Collector Limpet Controller',
          5045  => 'Collector Limpet Controller',
        
          5061  => 'Collector Limpet Controller',
          5062  => 'Collector Limpet Controller',
          5063  => 'Collector Limpet Controller',
          5064  => 'Collector Limpet Controller',
          5065  => 'Collector Limpet Controller',
        
        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 'Fuel Transfer Limpet Controller',
          5102  => 'Fuel Transfer Limpet Controller',
          5103  => 'Fuel Transfer Limpet Controller',
          5104  => 'Fuel Transfer Limpet Controller',
          5105  => 'Fuel Transfer Limpet Controller',
        
          5121  => 'Fuel Transfer Limpet Controller',
          5122  => 'Fuel Transfer Limpet Controller',
          5123  => 'Fuel Transfer Limpet Controller',
          5124  => 'Fuel Transfer Limpet Controller',
          5125  => 'Fuel Transfer Limpet Controller',
        
          5141  => 'Fuel Transfer Limpet Controller',
          5142  => 'Fuel Transfer Limpet Controller',
          5143  => 'Fuel Transfer Limpet Controller',
          5144  => 'Fuel Transfer Limpet Controller',
          5145  => 'Fuel Transfer Limpet Controller',
        
          5161  => 'Fuel Transfer Limpet Controller',
          5162  => 'Fuel Transfer Limpet Controller',
          5163  => 'Fuel Transfer Limpet Controller',
          5164  => 'Fuel Transfer Limpet Controller',
          5165  => 'Fuel Transfer Limpet Controller',
        
        // Optional Internal > Prospector Limpet Controller
          5201  => 'Prospector Limpet Controller',
          5202  => 'Prospector Limpet Controller',
          5203  => 'Prospector Limpet Controller',
          5204  => 'Prospector Limpet Controller',
          5205  => 'Prospector Limpet Controller',
        
          5221  => 'Prospector Limpet Controller',
          5222  => 'Prospector Limpet Controller',
          5223  => 'Prospector Limpet Controller',
          5224  => 'Prospector Limpet Controller',
          5225  => 'Prospector Limpet Controller',
        
          5241  => 'Prospector Limpet Controller',
          5242  => 'Prospector Limpet Controller',
          5243  => 'Prospector Limpet Controller',
          5244  => 'Prospector Limpet Controller',
          5245  => 'Prospector Limpet Controller',
        
          5261  => 'Prospector Limpet Controller',
          5262  => 'Prospector Limpet Controller',
          5263  => 'Prospector Limpet Controller',
          5264  => 'Prospector Limpet Controller',
          5265  => 'Prospector Limpet Controller',
        
        // Optional Internal > Passenger Cabin
          5311  => 'Economy Class Passenger Cabin',
        
          5321  => 'Economy Class Passenger Cabin',
          5322  => 'Business Class Passenger Cabin',
        
          5331  => 'Economy Class Passenger Cabin',
          5332  => 'Business Class Passenger Cabin',
          5333  => 'First Class Passenger Cabin',
        
          5341  => 'Economy Class Passenger Cabin',
          5342  => 'Business Class Passenger Cabin',
          5343  => 'First Class Passenger Cabin',
          5344  => 'Luxury Passenger Cabin',
        
          5351  => 'Economy Class Passenger Cabin',
          5352  => 'Business Class Passenger Cabin',
          5353  => 'First Class Passenger Cabin',
          5354  => 'Luxury Passenger Cabin',
        
        // Optional Internal > Planetary Vehicle Hangar
          5411  => 'Planetary Vehicle Hangar',
          5412  => 'Planetary Vehicle Hangar',
        
          5431  => 'Planetary Vehicle Hangar',
          5432  => 'Planetary Vehicle Hangar',
        
          5451  => 'Planetary Vehicle Hangar',
          5452  => 'Planetary Vehicle Hangar',
        
        // Optional Internal > Fighter Hangar
          5541  => 'Fighter Hangar',
        
          5551  => 'Fighter Hangar',
        
          5561  => 'Fighter Hangar',
        
        // Optional Internal > Repair Limpet Controller
          5601  => 'Repair Limpet Controller',
          5602  => 'Repair Limpet Controller',
          5603  => 'Repair Limpet Controller',
          5604  => 'Repair Limpet Controller',
          5605  => 'Repair Limpet Controller',
        
          5621  => 'Repair Limpet Controller',
          5622  => 'Repair Limpet Controller',
          5623  => 'Repair Limpet Controller',
          5624  => 'Repair Limpet Controller',
          5625  => 'Repair Limpet Controller',
        
          5641  => 'Repair Limpet Controller',
          5642  => 'Repair Limpet Controller',
          5643  => 'Repair Limpet Controller',
          5644  => 'Repair Limpet Controller',
          5645  => 'Repair Limpet Controller',
        
          5661  => 'Repair Limpet Controller',
          5662  => 'Repair Limpet Controller',
          5663  => 'Repair Limpet Controller',
          5664  => 'Repair Limpet Controller',
          5665  => 'Repair Limpet Controller',
          
        // Optional Internal > Research Limpet Controller
          5701  => 'Research Limpet Controller',
        
        // Optional Internal > Decontamination Limpet Controller
          5801  => 'Decontamination Limpet Controller',
          
          5821  => 'Decontamination Limpet Controller',
          
          5841  => 'Decontamination Limpet Controller',
          
          5861  => 'Decontamination Limpet Controller',
        
        // Optional Internal > Recon Limpet Controller
          5901  => 'Recon Limpet Controller',
          
          5921  => 'Recon Limpet Controller',
          
          5941  => 'Recon Limpet Controller',
          
          5961  => 'Recon Limpet Controller',
        
        // Opyional Internal > Meta Alloy Hull Reinforcement
          6001  => 'Meta Alloy Hull Reinforcement',
          6002  => 'Meta Alloy Hull Reinforcement',
        
          6011  => 'Meta Alloy Hull Reinforcement',
          6012  => 'Meta Alloy Hull Reinforcement',
        
          6021  => 'Meta Alloy Hull Reinforcement',
          6022  => 'Meta Alloy Hull Reinforcement',
        
          6031  => 'Meta Alloy Hull Reinforcement',
          6032  => 'Meta Alloy Hull Reinforcement',
        
          6041  => 'Meta Alloy Hull Reinforcement',
          6042  => 'Meta Alloy Hull Reinforcement',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        // Bulkhead > Adder
        'adder_armour_grade1'                           => 1,
        'adder_armour_grade2'                           => 2,
        'adder_armour_grade3'                           => 3,
        'adder_armour_mirrored'                         => 4,
        'adder_armour_reactive'                         => 5,
        
        // Bulkhead > Anaconda
        'anaconda_armour_grade1'                        => 11,
        'anaconda_armour_grade2'                        => 12,
        'anaconda_armour_grade3'                        => 13,
        'anaconda_armour_mirrored'                      => 14,
        'anaconda_armour_reactive'                      => 15,
        
        // Bulkhead > Asp Explorer
        'asp_armour_grade1'                             => 21,
        'asp_armour_grade2'                             => 22,
        'asp_armour_grade3'                             => 23,
        'asp_armour_mirrored'                           => 24,
        'asp_armour_reactive'                           => 25,
        
        // Bulkhead > Asp Scout
        'asp_scout_armour_grade1'                       => 31,
        'asp_scout_armour_grade2'                       => 32,
        'asp_scout_armour_grade3'                       => 33,
        'asp_scout_armour_mirrored'                     => 34,
        'asp_scout_armour_reactive'                     => 35,
        
        // Bulkhead > Beluga Liner
        'belugaliner_armour_grade1'                     => 41,
        'belugaliner_armour_grade2'                     => 42,
        'belugaliner_armour_grade3'                     => 43,
        'belugaliner_armour_mirrored'                   => 44,
        'belugaliner_armour_reactive'                   => 45,
        
        // Bulkhead > Cobra MkIII
        'cobramkiii_armour_grade1'                      => 51,
        'cobramkiii_armour_grade2'                      => 52,
        'cobramkiii_armour_grade3'                      => 53,
        'cobramkiii_armour_mirrored'                    => 54,
        'cobramkiii_armour_reactive'                    => 55,
        
        // Bulkhead > Cobra MkIV
        'cobramkiv_armour_grade1'                       => 61,
        'cobramkiv_armour_grade2'                       => 62,
        'cobramkiv_armour_grade3'                       => 63,
        'cobramkiv_armour_mirrored'                     => 64,
        'cobramkiv_armour_reactive'                     => 65,
        
        // Bulkhead > Diamondback Explorer
        'diamondbackxl_armour_grade1'                   => 71,
        'diamondbackxl_armour_grade2'                   => 72,
        'diamondbackxl_armour_grade3'                   => 73,
        'diamondbackxl_armour_mirrored'                 => 74,
        'diamondbackxl_armour_reactive'                 => 75,
        
        // Bulkhead > Diamondback Scout
        'diamondback_armour_grade1'                     => 81,
        'diamondback_armour_grade2'                     => 82,
        'diamondback_armour_grade3'                     => 83,
        'diamondback_armour_mirrored'                   => 84,
        'diamondback_armour_reactive'                   => 85,
        
        // Bulkhead > Dolphin
        'dolphin_armour_grade1'                         => 91,
        'dolphin_armour_grade2'                         => 92,
        'dolphin_armour_grade3'                         => 93,
        'dolphin_armour_mirrored'                       => 94,
        'dolphin_armour_reactive'                       => 95,
        
        // Bulkhead > Eagle
        'eagle_armour_grade1'                           => 101,
        'eagle_armour_grade2'                           => 102,
        'eagle_armour_grade3'                           => 103,
        'eagle_armour_mirrored'                         => 104,
        'eagle_armour_reactive'                         => 105,
        
        // Bulkhead > Federal Assault Ship
        'federation_dropship_mkii_armour_grade1'        => 111,
        'federation_dropship_mkii_armour_grade2'        => 112,
        'federation_dropship_mkii_armour_grade3'        => 113,
        'federation_dropship_mkii_armour_mirrored'      => 114,
        'federation_dropship_mkii_armour_reactive'      => 115,
        
        // Bulkhead > Federal Corvette
        'federation_corvette_armour_grade1'             => 121,
        'federation_corvette_armour_grade2'             => 122,
        'federation_corvette_armour_grade3'             => 123,
        'federation_corvette_armour_mirrored'           => 124,
        'federation_corvette_armour_reactive'           => 125,
        
        // Bulkhead > Federal Dropship
        'federation_dropship_armour_grade1'             => 131,
        'federation_dropship_armour_grade2'             => 132,
        'federation_dropship_armour_grade3'             => 133,
        'federation_dropship_armour_mirrored'           => 134,
        'federation_dropship_armour_reactive'           => 135,
        
        // Bulkhead > Federal Gunship
        'federation_gunship_armour_grade1'              => 141,
        'federation_gunship_armour_grade2'              => 142,
        'federation_gunship_armour_grade3'              => 143,
        'federation_gunship_armour_mirrored'            => 144,
        'federation_gunship_armour_reactive'            => 145,
        
        // Bulkhead > Fer-de-Lance
        'ferdelance_armour_grade1'                      => 151,
        'ferdelance_armour_grade2'                      => 152,
        'ferdelance_armour_grade3'                      => 153,
        'ferdelance_armour_mirrored'                    => 154,
        'ferdelance_armour_reactive'                    => 155,
        
        // Bulkhead > Hauler
        'hauler_armour_grade1'                          => 161,
        'hauler_armour_grade2'                          => 162,
        'hauler_armour_grade3'                          => 163,
        'hauler_armour_mirrored'                        => 164,
        'hauler_armour_reactive'                        => 165,
        
        // Bulkhead > Imperial Clipper
        'empire_trader_armour_grade1'                   => 171,
        'empire_trader_armour_grade2'                   => 172,
        'empire_trader_armour_grade3'                   => 173,
        'empire_trader_armour_mirrored'                 => 174,
        'empire_trader_armour_reactive'                 => 175,
        
        // Bulkhead > Imperial Courier
        'empire_courier_armour_grade1'                  => 181,
        'empire_courier_armour_grade2'                  => 182,
        'empire_courier_armour_grade3'                  => 183,
        'empire_courier_armour_mirrored'                => 184,
        'empire_courier_armour_reactive'                => 185,
        
        // Bulkhead > Imperial Cutter
        'cutter_armour_grade1'                          => 191,
        'cutter_armour_grade2'                          => 192,
        'cutter_armour_grade3'                          => 193,
        'cutter_armour_mirrored'                        => 194,
        'cutter_armour_reactive'                        => 195,
        
        // Bulkhead > Imperial Eagle
        'empire_eagle_armour_grade1'                    => 201,
        'empire_eagle_armour_grade2'                    => 202,
        'empire_eagle_armour_grade3'                    => 203,
        'empire_eagle_armour_mirrored'                  => 204,
        'empire_eagle_armour_reactive'                  => 205,
        
        // Bulkhead > Keelback
        'independant_trader_armour_grade1'              => 211,
        'independant_trader_armour_grade2'              => 212,
        'independant_trader_armour_grade3'              => 213,
        'independant_trader_armour_mirrored'            => 214,
        'independant_trader_armour_reactive'            => 215,
        
        // Bulkhead > Orca
        'orca_armour_grade1'                            => 221,
        'orca_armour_grade2'                            => 222,
        'orca_armour_grade3'                            => 223,
        'orca_armour_mirrored'                          => 224,
        'orca_armour_reactive'                          => 225,
        
        // Bulkhead > Python
        'python_armour_grade1'                          => 231,
        'python_armour_grade2'                          => 232,
        'python_armour_grade3'                          => 233,
        'python_armour_mirrored'                        => 234,
        'python_armour_reactive'                        => 235,
        
        // Bulkhead > Sidewinder
        'sidewinder_armour_grade1'                      => 241,
        'sidewinder_armour_grade2'                      => 242,
        'sidewinder_armour_grade3'                      => 243,
        'sidewinder_armour_mirrored'                    => 244,
        'sidewinder_armour_reactive'                    => 245,
        
        // Bulkhead > Type-6 Transporter
        'type6_armour_grade1'                           => 251,
        'type6_armour_grade2'                           => 252,
        'type6_armour_grade3'                           => 253,
        'type6_armour_mirrored'                         => 254,
        'type6_armour_reactive'                         => 255,
        
        // Bulkhead > Type-7 Transporter
        'type7_armour_grade1'                           => 261,
        'type7_armour_grade2'                           => 262,
        'type7_armour_grade3'                           => 263,
        'type7_armour_mirrored'                         => 264,
        'type7_armour_reactive'                         => 265,
        
        // Bulkhead > Type-9 Heavy
        'type9_armour_grade1'                           => 271,
        'type9_armour_grade2'                           => 272,
        'type9_armour_grade3'                           => 273,
        'type9_armour_mirrored'                         => 274,
        'type9_armour_reactive'                         => 275,
        
        // Bulkhead > Viper MkIII
        'viper_armour_grade1'                           => 281,
        'viper_armour_grade2'                           => 282,
        'viper_armour_grade3'                           => 283,
        'viper_armour_mirrored'                         => 284,
        'viper_armour_reactive'                         => 285,
        
        // Bulkhead > Viper MkIV
        'viper_mkiv_armour_grade1'                      => 291,
        'viper_mkiv_armour_grade2'                      => 292,
        'viper_mkiv_armour_grade3'                      => 293,
        'viper_mkiv_armour_mirrored'                    => 294,
        'viper_mkiv_armour_reactive'                    => 295,
        
        // Bulkhead > Vulture
        'vulture_armour_grade1'                         => 301,
        'vulture_armour_grade2'                         => 302,
        'vulture_armour_grade3'                         => 303,
        'vulture_armour_mirrored'                       => 304,
        'vulture_armour_reactive'                       => 305,
        
        // Bulkhead > Type-10 Defender
        'type9_military_armour_grade1'                  => 311,
        'type9_military_armour_grade2'                  => 312,
        'type9_military_armour_grade3'                  => 313,
        'type9_military_armour_mirrored'                => 314,
        'type9_military_armour_reactive'                => 315,
        
        // Bulkhead > Alliance Chieftain
        'typex_armour_grade1'                           => 321,
        'typex_armour_grade2'                           => 322,
        'typex_armour_grade3'                           => 323,
        'typex_armour_mirrored'                         => 324,
        'typex_armour_reactive'                         => 325,
        
        // Weapon Hardpoint > Beam Laser
        'hpt_beamlaser_fixed_small'                     => 1001,
        'hpt_beamlaser_fixed_medium'                    => 1002,
        'hpt_beamlaser_fixed_large'                     => 1003,
        'hpt_beamlaser_fixed_huge'                      => 1004,
        
        'hpt_beamlaser_gimbal_small'                    => 1005,
        'hpt_beamlaser_gimbal_medium'                   => 1006,
        'hpt_beamlaser_gimbal_large'                    => 1007,
        'hpt_beamlaser_gimbal_huge'                     => 1008,
        
        'hpt_beamlaser_turret_small'                    => 1009,
        'hpt_beamlaser_turret_medium'                   => 1010,
        'hpt_beamlaser_turret_large'                    => 1011,
        
        'hpt_beamlaser_fixed_small_heat'                => 1021,
        
        'hpt_guardian_gausscannon_fixed_medium'         => 1032,
        
        // Weapon Hardpoint > Pulse Laser
        'hpt_pulselaser_fixed_small'                    => 1051,
        'hpt_pulselaser_fixed_medium'                   => 1052,
        'hpt_pulselaser_fixed_large'                    => 1053,
        'hpt_pulselaser_fixed_huge'                     => 1054,
        
        'hpt_pulselaser_gimbal_small'                   => 1055,
        'hpt_pulselaser_gimbal_medium'                  => 1056,
        'hpt_pulselaser_gimbal_large'                   => 1057,
        'hpt_pulselaser_gimbal_huge'                    => 1058,
        
        'hpt_pulselaser_turret_small'                   => 1059,
        'hpt_pulselaser_turret_medium'                  => 1060,
        'hpt_pulselaser_turret_large'                   => 1061,
        
        'hpt_pulselaser_fixed_medium_disruptor'         => 1072,
        
        // Weapon Hardpoint > Burst Laser
        'hpt_pulselaserburst_fixed_small'               => 1101,
        'hpt_pulselaserburst_fixed_medium'              => 1102,
        'hpt_pulselaserburst_fixed_large'               => 1103,
        'hpt_pulselaserburst_fixed_huge'                => 1104,
        
        'hpt_pulselaserburst_gimbal_small'              => 1105,
        'hpt_pulselaserburst_gimbal_medium'             => 1106,
        'hpt_pulselaserburst_gimbal_large'              => 1107,
        'hpt_pulselaserburst_gimbal_huge'               => 1108,
        
        'hpt_pulselaserburst_turret_small'              => 1109,
        'hpt_pulselaserburst_turret_medium'             => 1110,
        'hpt_pulselaserburst_turret_large'              => 1111,
        
        'hpt_pulselaserburst_fixed_small_scatter'       => 1121,
        
        // Weapon Hardpoint > Cannon
        'hpt_cannon_fixed_small'                        => 1151,
        'hpt_cannon_fixed_medium'                       => 1152,
        'hpt_cannon_fixed_large'                        => 1153,
        'hpt_cannon_fixed_huge'                         => 1154,
        
        'hpt_cannon_gimbal_small'                       => 1155,
        'hpt_cannon_gimbal_medium'                      => 1156,
        'hpt_cannon_gimbal_large'                       => 1157,
        'hpt_cannon_gimbal_huge'                        => 1158,
        
        'hpt_cannon_turret_small'                       => 1159,
        'hpt_cannon_turret_medium'                      => 1160,
        'hpt_cannon_turret_large'                       => 1161,
        
        // Weapon Hardpoint > Fragment Cannon
        'hpt_slugshot_fixed_small'                      => 1201,
        'hpt_slugshot_fixed_medium'                     => 1202,
        'hpt_slugshot_fixed_large'                      => 1203,
        
        'hpt_slugshot_gimbal_small'                     => 1205,
        'hpt_slugshot_gimbal_medium'                    => 1206,
        'hpt_slugshot_gimbal_large'                     => 1207,
        
        'hpt_slugshot_turret_small'                     => 1209,
        'hpt_slugshot_turret_medium'                    => 1210,
        'hpt_slugshot_turret_large'                     => 1211,
        
        'hpt_slugshot_fixed_large_range'                => 1215,
        
        // Weapon Hardpoint > Multi-Cannon
        'hpt_multicannon_fixed_small'                   => 1251,
        'hpt_multicannon_fixed_medium'                  => 1252,
        'hpt_multicannon_fixed_large'                   => 1253,
        'hpt_multicannon_fixed_huge'                    => 1254,
        
        'hpt_multicannon_gimbal_small'                  => 1255,
        'hpt_multicannon_gimbal_medium'                 => 1256,
        'hpt_multicannon_gimbal_large'                  => 1257,
        'hpt_multicannon_gimbal_huge'                   => 1258,
        
        'hpt_multicannon_turret_small'                  => 1259,
        'hpt_multicannon_turret_medium'                 => 1260,
        
        'hpt_multicannon_fixed_small_strong'            => 1271,
        
        // Weapon Hardpoint > Plasma Accelerator
        'hpt_plasmaaccelerator_fixed_medium'            => 1302,
        'hpt_plasmaaccelerator_fixed_large'             => 1303,
        'hpt_plasmaaccelerator_fixed_huge'              => 1304,
        
        'hpt_plasmaaccelerator_fixed_large_advanced'    => 1313,
        
        'hpt_guardian_plasmalauncher_turret_medium'     => 1322,
        'hpt_guardian_plasmalauncher_fixed_medium'      => 1323,
        
        // Weapon Hardpoint > Rail Gun
        'hpt_railgun_fixed_small'                       => 1351,
        'hpt_railgun_fixed_medium'                      => 1352,
        
        'hpt_railgun_fixed_medium_burst'                => 1362,
        
        // Weapon Hardpoint > Missile Rack
        'hpt_basicmissilerack_fixed_small'              => 1401,
        'hpt_basicmissilerack_fixed_medium'             => 1402,
        
        'hpt_dumbfiremissilerack_fixed_small'           => 1405,
        'hpt_dumbfiremissilerack_fixed_medium'          => 1406,
        
        'hpt_dumbfiremissilerack_fixed_medium_lasso'    => 1411,
        
        // Weapon Hardpoint > Mine Launcher
        'hpt_minelauncher_fixed_small'                  => 1451,
        'hpt_minelauncher_fixed_medium'                 => 1452,
        
        // Weapon Hardpoint > Missile Rack
        'hpt_mininglaser_fixed_small'                   => 1501,
        'hpt_mininglaser_fixed_medium'                  => 1502,
        
        'hpt_mininglaser_turret_small'                  => 1509,
        'hpt_mininglaser_turret_medium'                 => 1510,
        
        'hpt_mininglaser_fixed_small_advanced'          => 1521,
        
        // Weapon Hardpoint > Torpedo Pylon
        'hpt_advancedtorppylon_fixed_small'             => 1551,
        'hpt_advancedtorppylon_fixed_medium'            => 1552,
        
        // Weapon Hardpoint > Shock Mine Launcher
        'hpt_minelauncher_fixed_small_impulse'          => 1601,
        
        // Weapon Hardpoint > AX Missile Rack
        'hpt_atdumbfiremissile_fixed_medium'            => 1652,
        'hpt_atdumbfiremissile_fixed_large'             => 1653,
        
        'hpt_atdumbfiremissile_turret_medium'           => 1660,
        'hpt_atdumbfiremissile_turret_large'            => 1661,
        
        // Weapon Hardpoint > AX Multi-Cannon
        'hpt_atmulticannon_fixed_medium'                => 1702,
        'hpt_atmulticannon_fixed_large'                 => 1703,
        
        'hpt_atmulticannon_turret_medium'               => 1710,
        'hpt_atmulticannon_turret_large'                => 1711,
        
        // Weapon Hardpoint > Remote Release Flak Launcher
        'hpt_flakmortar_fixed_medium'                   => 1752,
        
        'hpt_flakmortar_turret_medium'                  => 1760,
        
        // Weapon Hardpoint > Remote Release Flechette Launcher
        'hpt_flechettelauncher_fixed_medium'            => 1772,
        
        'hpt_flechettelauncher_turret_medium'           => 1780,
        
        // Weapon Hardpoint > Pack-Hound Missile Rack
        'hpt_drunkmissilerack_fixed_medium'             => 1802,
        
        // Weapon Hardpoint > Shock Cannon
        'hpt_plasmashockcannon_fixed_medium'            => 1852,
        
        'hpt_plasmashockcannon_gimbal_medium'           => 1856,
        
        // Utility Mount > Shield Booster
        'hpt_shieldbooster_size0_class1'                => 2001,
        'hpt_shieldbooster_size0_class2'                => 2002,
        'hpt_shieldbooster_size0_class3'                => 2003,
        'hpt_shieldbooster_size0_class4'                => 2004,
        'hpt_shieldbooster_size0_class5'                => 2005,
          
        // Utility Mount > Chaff Launcher
        'hpt_chafflauncher_tiny'                        => 2050,
          
        // Utility Mount > Electronic Countermeasure
        'hpt_electroniccountermeasure_tiny'             => 2100,
          
        // Utility Mount > Heat Sink Launcher
        'hpt_heatsinklauncher_turret_tiny'              => 2150,
          
        // Utility Mount > Point Defence
        'hpt_plasmapointdefence_turret_tiny'            => 2200,
        
        // Utility Mount > Cargo Scanner
        'hpt_cargoscanner_size0_class1'                 => 2251,
        'hpt_cargoscanner_size0_class2'                 => 2252,
        'hpt_cargoscanner_size0_class3'                 => 2253,
        'hpt_cargoscanner_size0_class4'                 => 2254,
        'hpt_cargoscanner_size0_class5'                 => 2255,
        
        // Utility Mount > Frame Shift Wake Scanner
        'hpt_cloudscanner_size0_class1'                 => 2301,
        'hpt_cloudscanner_size0_class2'                 => 2302,
        'hpt_cloudscanner_size0_class3'                 => 2303,
        'hpt_cloudscanner_size0_class4'                 => 2304,
        'hpt_cloudscanner_size0_class5'                 => 2305,
        
        // Utility Mount > Kill Warrant Scanner
        'hpt_crimescanner_size0_class1'                 => 2351,
        'hpt_crimescanner_size0_class2'                 => 2352,
        'hpt_crimescanner_size0_class3'                 => 2353,
        'hpt_crimescanner_size0_class4'                 => 2354,
        'hpt_crimescanner_size0_class5'                 => 2355,
        
        // Utility Mount > Xeno Scanner
        'hpt_xenoscanner_basic_tiny'                    => 2401,
          
        // Utility Mount > Shutdown Field Neutraliser
        'hpt_antiunknownshutdown_tiny'                  => 2451,
        
        // Core Internal > Fuel Tank
        'int_fueltank_size1_class3'                     => 3001,
        'int_fueltank_size2_class3'                     => 3002,
        'int_fueltank_size3_class3'                     => 3003,
        'int_fueltank_size4_class3'                     => 3004,
        'int_fueltank_size5_class3'                     => 3005,
        'int_fueltank_size6_class3'                     => 3006,
        'int_fueltank_size7_class3'                     => 3007,
        'int_fueltank_size8_class3'                     => 3008,
        
        // Core Internal > Power Plant
        'int_powerplant_size2_class1'                   => 3101,
        'int_powerplant_size2_class2'                   => 3102,
        'int_powerplant_size2_class3'                   => 3103,
        'int_powerplant_size2_class4'                   => 3104,
        'int_powerplant_size2_class5'                   => 3105,
        
        'int_guardianpowerplant_size2'                  => 3109,
        
        'int_powerplant_size3_class1'                   => 3111,
        'int_powerplant_size3_class2'                   => 3112,
        'int_powerplant_size3_class3'                   => 3113,
        'int_powerplant_size3_class4'                   => 3114,
        'int_powerplant_size3_class5'                   => 3115,
        
        'int_guardianpowerplant_size3'                  => 3119,
        
        'int_powerplant_size4_class1'                   => 3121,
        'int_powerplant_size4_class2'                   => 3122,
        'int_powerplant_size4_class3'                   => 3123,
        'int_powerplant_size4_class4'                   => 3124,
        'int_powerplant_size4_class5'                   => 3125,
        
        'int_guardianpowerplant_size4'                  => 3129,
        
        'int_powerplant_size5_class1'                   => 3131,
        'int_powerplant_size5_class2'                   => 3132,
        'int_powerplant_size5_class3'                   => 3133,
        'int_powerplant_size5_class4'                   => 3134,
        'int_powerplant_size5_class5'                   => 3135,
        
        'int_guardianpowerplant_size5'                  => 3139,
        
        'int_powerplant_size6_class1'                   => 3141,
        'int_powerplant_size6_class2'                   => 3142,
        'int_powerplant_size6_class3'                   => 3143,
        'int_powerplant_size6_class4'                   => 3144,
        'int_powerplant_size6_class5'                   => 3145,
        
        'int_guardianpowerplant_size6'                  => 3149,
        
        'int_powerplant_size7_class1'                   => 3151,
        'int_powerplant_size7_class2'                   => 3152,
        'int_powerplant_size7_class3'                   => 3153,
        'int_powerplant_size7_class4'                   => 3154,
        'int_powerplant_size7_class5'                   => 3155,
        
        'int_guardianpowerplant_size7'                  => 3159,
        
        'int_powerplant_size8_class1'                   => 3161,
        'int_powerplant_size8_class2'                   => 3162,
        'int_powerplant_size8_class3'                   => 3163,
        'int_powerplant_size8_class4'                   => 3164,
        'int_powerplant_size8_class5'                   => 3165,
        
        'int_guardianpowerplant_size8'                  => 3169,
        
        // Core Internal > Thrusters
        'int_engine_size2_class1'                       => 3201,
        'int_engine_size2_class2'                       => 3202,
        'int_engine_size2_class3'                       => 3203,
        'int_engine_size2_class4'                       => 3204,
        'int_engine_size2_class5'                       => 3205,
        'int_engine_size2_class5_fast'                  => 3206,
        
        'int_engine_size3_class1'                       => 3211,
        'int_engine_size3_class2'                       => 3212,
        'int_engine_size3_class3'                       => 3213,
        'int_engine_size3_class4'                       => 3214,
        'int_engine_size3_class5'                       => 3215,
        'int_engine_size3_class5_fast'                  => 3216,
        
        'int_engine_size4_class1'                       => 3221,
        'int_engine_size4_class2'                       => 3222,
        'int_engine_size4_class3'                       => 3223,
        'int_engine_size4_class4'                       => 3224,
        'int_engine_size4_class5'                       => 3225,
        
        'int_engine_size5_class1'                       => 3231,
        'int_engine_size5_class2'                       => 3232,
        'int_engine_size5_class3'                       => 3233,
        'int_engine_size5_class4'                       => 3234,
        'int_engine_size5_class5'                       => 3235,
        
        'int_engine_size6_class1'                       => 3241,
        'int_engine_size6_class2'                       => 3242,
        'int_engine_size6_class3'                       => 3243,
        'int_engine_size6_class4'                       => 3244,
        'int_engine_size6_class5'                       => 3245,
        
        'int_engine_size7_class1'                       => 3251,
        'int_engine_size7_class2'                       => 3252,
        'int_engine_size7_class3'                       => 3253,
        'int_engine_size7_class4'                       => 3254,
        'int_engine_size7_class5'                       => 3255,
        
        'int_engine_size8_class1'                       => 3261,
        'int_engine_size8_class2'                       => 3262,
        'int_engine_size8_class3'                       => 3263,
        'int_engine_size8_class4'                       => 3264,
        'int_engine_size8_class5'                       => 3265,
        
        // Core Internal > Frame Shift Drive
        'int_hyperdrive_size2_class1'                   => 3301,
        'int_hyperdrive_size2_class2'                   => 3302,
        'int_hyperdrive_size2_class3'                   => 3303,
        'int_hyperdrive_size2_class4'                   => 3304,
        'int_hyperdrive_size2_class5'                   => 3305,
        
        'int_hyperdrive_size3_class1'                   => 3311,
        'int_hyperdrive_size3_class2'                   => 3312,
        'int_hyperdrive_size3_class3'                   => 3313,
        'int_hyperdrive_size3_class4'                   => 3314,
        'int_hyperdrive_size3_class5'                   => 3315,
        
        'int_hyperdrive_size4_class1'                   => 3321,
        'int_hyperdrive_size4_class2'                   => 3322,
        'int_hyperdrive_size4_class3'                   => 3323,
        'int_hyperdrive_size4_class4'                   => 3324,
        'int_hyperdrive_size4_class5'                   => 3325,
        
        'int_hyperdrive_size5_class1'                   => 3331,
        'int_hyperdrive_size5_class2'                   => 3332,
        'int_hyperdrive_size5_class3'                   => 3333,
        'int_hyperdrive_size5_class4'                   => 3334,
        'int_hyperdrive_size5_class5'                   => 3335,
        
        'int_hyperdrive_size6_class1'                   => 3341,
        'int_hyperdrive_size6_class2'                   => 3342,
        'int_hyperdrive_size6_class3'                   => 3343,
        'int_hyperdrive_size6_class4'                   => 3344,
        'int_hyperdrive_size6_class5'                   => 3345,
        
        'int_hyperdrive_size7_class1'                   => 3351,
        'int_hyperdrive_size7_class2'                   => 3352,
        'int_hyperdrive_size7_class3'                   => 3353,
        'int_hyperdrive_size7_class4'                   => 3354,
        'int_hyperdrive_size7_class5'                   => 3355,
        
        'int_hyperdrive_size8_class1'                   => 3361,
        'int_hyperdrive_size8_class2'                   => 3362,
        'int_hyperdrive_size8_class3'                   => 3363,
        'int_hyperdrive_size8_class4'                   => 3364,
        'int_hyperdrive_size8_class5'                   => 3365,
        
        // Core Internal > Life Support
        'int_lifesupport_size1_class1'                  => 3401,
        'int_lifesupport_size1_class2'                  => 3402,
        'int_lifesupport_size1_class3'                  => 3403,
        'int_lifesupport_size1_class4'                  => 3404,
        'int_lifesupport_size1_class5'                  => 3405,
        
        'int_lifesupport_size2_class1'                  => 3411,
        'int_lifesupport_size2_class2'                  => 3412,
        'int_lifesupport_size2_class3'                  => 3413,
        'int_lifesupport_size2_class4'                  => 3414,
        'int_lifesupport_size2_class5'                  => 3415,
        
        'int_lifesupport_size3_class1'                  => 3421,
        'int_lifesupport_size3_class2'                  => 3422,
        'int_lifesupport_size3_class3'                  => 3423,
        'int_lifesupport_size3_class4'                  => 3424,
        'int_lifesupport_size3_class5'                  => 3425,
        
        'int_lifesupport_size4_class1'                  => 3431,
        'int_lifesupport_size4_class2'                  => 3432,
        'int_lifesupport_size4_class3'                  => 3433,
        'int_lifesupport_size4_class4'                  => 3434,
        'int_lifesupport_size4_class5'                  => 3435,
        
        'int_lifesupport_size5_class1'                  => 3441,
        'int_lifesupport_size5_class2'                  => 3442,
        'int_lifesupport_size5_class3'                  => 3443,
        'int_lifesupport_size5_class4'                  => 3444,
        'int_lifesupport_size5_class5'                  => 3445,
        
        'int_lifesupport_size6_class1'                  => 3451,
        'int_lifesupport_size6_class2'                  => 3452,
        'int_lifesupport_size6_class3'                  => 3453,
        'int_lifesupport_size6_class4'                  => 3454,
        'int_lifesupport_size6_class5'                  => 3455,
        
        'int_lifesupport_size7_class1'                  => 3461,
        'int_lifesupport_size7_class2'                  => 3462,
        'int_lifesupport_size7_class3'                  => 3463,
        'int_lifesupport_size7_class4'                  => 3464,
        'int_lifesupport_size7_class5'                  => 3465,
        
        'int_lifesupport_size8_class1'                  => 3471,
        'int_lifesupport_size8_class2'                  => 3472,
        'int_lifesupport_size8_class3'                  => 3473,
        'int_lifesupport_size8_class4'                  => 3474,
        'int_lifesupport_size8_class5'                  => 3475,
        
        // Core Internal > Power Distributor
        'int_powerdistributor_size1_class1'             => 3501,
        'int_powerdistributor_size1_class2'             => 3502,
        'int_powerdistributor_size1_class3'             => 3503,
        'int_powerdistributor_size1_class4'             => 3504,
        'int_powerdistributor_size1_class5'             => 3505,
        
        'int_powerdistributor_size2_class1'             => 3511,
        'int_powerdistributor_size2_class2'             => 3512,
        'int_powerdistributor_size2_class3'             => 3513,
        'int_powerdistributor_size2_class4'             => 3514,
        'int_powerdistributor_size2_class5'             => 3515,
        
        'int_powerdistributor_size3_class1'             => 3521,
        'int_powerdistributor_size3_class2'             => 3522,
        'int_powerdistributor_size3_class3'             => 3523,
        'int_powerdistributor_size3_class4'             => 3524,
        'int_powerdistributor_size3_class5'             => 3525,
        
        'int_powerdistributor_size4_class1'             => 3531,
        'int_powerdistributor_size4_class2'             => 3532,
        'int_powerdistributor_size4_class3'             => 3533,
        'int_powerdistributor_size4_class4'             => 3534,
        'int_powerdistributor_size4_class5'             => 3535,
        
        'int_powerdistributor_size5_class1'             => 3541,
        'int_powerdistributor_size5_class2'             => 3542,
        'int_powerdistributor_size5_class3'             => 3543,
        'int_powerdistributor_size5_class4'             => 3544,
        'int_powerdistributor_size5_class5'             => 3545,
        
        'int_powerdistributor_size6_class1'             => 3551,
        'int_powerdistributor_size6_class2'             => 3552,
        'int_powerdistributor_size6_class3'             => 3553,
        'int_powerdistributor_size6_class4'             => 3554,
        'int_powerdistributor_size6_class5'             => 3555,
        
        'int_powerdistributor_size7_class1'             => 3561,
        'int_powerdistributor_size7_class2'             => 3562,
        'int_powerdistributor_size7_class3'             => 3563,
        'int_powerdistributor_size7_class4'             => 3564,
        'int_powerdistributor_size7_class5'             => 3565,
        
        'int_powerdistributor_size8_class1'             => 3571,
        'int_powerdistributor_size8_class2'             => 3572,
        'int_powerdistributor_size8_class3'             => 3573,
        'int_powerdistributor_size8_class4'             => 3574,
        'int_powerdistributor_size8_class5'             => 3575,
        
        // Core Internal > Sensors
        'int_sensors_size1_class1'                      => 3601,
        'int_sensors_size1_class2'                      => 3602,
        'int_sensors_size1_class3'                      => 3603,
        'int_sensors_size1_class4'                      => 3604,
        'int_sensors_size1_class5'                      => 3605,
        
        'int_sensors_size2_class1'                      => 3611,
        'int_sensors_size2_class2'                      => 3612,
        'int_sensors_size2_class3'                      => 3613,
        'int_sensors_size2_class4'                      => 3614,
        'int_sensors_size2_class5'                      => 3615,
        
        'int_sensors_size3_class1'                      => 3621,
        'int_sensors_size3_class2'                      => 3622,
        'int_sensors_size3_class3'                      => 3623,
        'int_sensors_size3_class4'                      => 3624,
        'int_sensors_size3_class5'                      => 3625,
        
        'int_sensors_size4_class1'                      => 3631,
        'int_sensors_size4_class2'                      => 3632,
        'int_sensors_size4_class3'                      => 3633,
        'int_sensors_size4_class4'                      => 3634,
        'int_sensors_size4_class5'                      => 3635,
        
        'int_sensors_size5_class1'                      => 3641,
        'int_sensors_size5_class2'                      => 3642,
        'int_sensors_size5_class3'                      => 3643,
        'int_sensors_size5_class4'                      => 3644,
        'int_sensors_size5_class5'                      => 3645,
        
        'int_sensors_size6_class1'                      => 3651,
        'int_sensors_size6_class2'                      => 3652,
        'int_sensors_size6_class3'                      => 3653,
        'int_sensors_size6_class4'                      => 3654,
        'int_sensors_size6_class5'                      => 3655,
        
        'int_sensors_size7_class1'                      => 3661,
        'int_sensors_size7_class2'                      => 3662,
        'int_sensors_size7_class3'                      => 3663,
        'int_sensors_size7_class4'                      => 3664,
        'int_sensors_size7_class5'                      => 3665,
        
        'int_sensors_size8_class1'                      => 3671,
        'int_sensors_size8_class2'                      => 3672,
        'int_sensors_size8_class3'                      => 3673,
        'int_sensors_size8_class4'                      => 3674,
        'int_sensors_size8_class5'                      => 3675,
        
        // Core Internal > Planetary Approach Suite
        'int_planetapproachsuite'                       => 3701,
        
        // Optional Internal > Discovery Scanner
        'int_stellarbodydiscoveryscanner_standard'      => 4001,
        'int_stellarbodydiscoveryscanner_intermediate'  => 4002,
        'int_stellarbodydiscoveryscanner_advanced'      => 4003,
        
        // Optional Internal > Detailed Surface Scanner
        'int_detailedsurfacescanner_tiny'               => 4011,
        
        // Optional Internal > Cargo Rack
        'int_cargorack_size1_class1'                    => 4021,
        'int_cargorack_size2_class1'                    => 4022,
        'int_cargorack_size3_class1'                    => 4023,
        'int_cargorack_size4_class1'                    => 4024,
        'int_cargorack_size5_class1'                    => 4025,
        'int_cargorack_size6_class1'                    => 4026,
        'int_cargorack_size7_class1'                    => 4027,
        'int_cargorack_size8_class1'                    => 4028,
        
        'int_corrosionproofcargorack_size1_class2'      => 4031,
        'int_corrosionproofcargorack_size1_class1'      => 4032,
        'int_corrosionproofcargorack_size2_class1'      => 4033,
        'int_corrosionproofcargorack_size4_class1'      => 4034,
        
        // Optional Internal > Standard Docking Computer
        'int_dockingcomputer_standard'                  => 4051,
        
        // Optional Internal > Shield Generator
        'int_shieldgenerator_size1_class3_fast'         => 4104,
        'int_shieldgenerator_size1_class5'              => 4106,
        'int_shieldgenerator_size1_class5_strong'       => 4107,
        
        'int_shieldgenerator_size2_class1'              => 4111,
        'int_shieldgenerator_size2_class2'              => 4112,
        'int_shieldgenerator_size2_class3'              => 4113,
        'int_shieldgenerator_size2_class3_fast'         => 4114,
        'int_shieldgenerator_size2_class4'              => 4115,
        'int_shieldgenerator_size2_class5'              => 4116,
        'int_shieldgenerator_size2_class5_strong'       => 4117,
        
        'int_shieldgenerator_size3_class1'              => 4121,
        'int_shieldgenerator_size3_class2'              => 4122,
        'int_shieldgenerator_size3_class3'              => 4123,
        'int_shieldgenerator_size3_class3_fast'         => 4124,
        'int_shieldgenerator_size3_class4'              => 4125,
        'int_shieldgenerator_size3_class5'              => 4126,
        'int_shieldgenerator_size3_class5_strong'       => 4127,
        
        'int_shieldgenerator_size4_class1'              => 4131,
        'int_shieldgenerator_size4_class2'              => 4132,
        'int_shieldgenerator_size4_class3'              => 4133,
        'int_shieldgenerator_size4_class3_fast'         => 4134,
        'int_shieldgenerator_size4_class4'              => 4135,
        'int_shieldgenerator_size4_class5'              => 4136,
        'int_shieldgenerator_size4_class5_strong'       => 4137,
        
        'int_shieldgenerator_size5_class1'              => 4141,
        'int_shieldgenerator_size5_class2'              => 4142,
        'int_shieldgenerator_size5_class3'              => 4143,
        'int_shieldgenerator_size5_class3_fast'         => 4144,
        'int_shieldgenerator_size5_class4'              => 4145,
        'int_shieldgenerator_size5_class5'              => 4146,
        'int_shieldgenerator_size5_class5_strong'       => 4147,
        
        'int_shieldgenerator_size6_class1'              => 4151,
        'int_shieldgenerator_size6_class2'              => 4152,
        'int_shieldgenerator_size6_class3'              => 4153,
        'int_shieldgenerator_size6_class3_fast'         => 4154,
        'int_shieldgenerator_size6_class4'              => 4155,
        'int_shieldgenerator_size6_class5'              => 4156,
        'int_shieldgenerator_size6_class5_strong'       => 4157,
        
        'int_shieldgenerator_size7_class1'              => 4161,
        'int_shieldgenerator_size7_class2'              => 4162,
        'int_shieldgenerator_size7_class3'              => 4163,
        'int_shieldgenerator_size7_class3_fast'         => 4164,
        'int_shieldgenerator_size7_class4'              => 4165,
        'int_shieldgenerator_size7_class5'              => 4166,
        'int_shieldgenerator_size7_class5_strong'       => 4167,
        
        'int_shieldgenerator_size8_class1'              => 4171,
        'int_shieldgenerator_size8_class2'              => 4172,
        'int_shieldgenerator_size8_class3'              => 4173,
        'int_shieldgenerator_size8_class3_fast'         => 4174,
        'int_shieldgenerator_size8_class4'              => 4175,
        'int_shieldgenerator_size8_class5'              => 4176,
        'int_shieldgenerator_size8_class5_strong'       => 4177,
        
        // Optional Internal > Shield Cell Bank
        'int_shieldcellbank_size1_class1'               => 4201,
        'int_shieldcellbank_size1_class2'               => 4202,
        'int_shieldcellbank_size1_class3'               => 4203,
        'int_shieldcellbank_size1_class4'               => 4204,
        'int_shieldcellbank_size1_class5'               => 4205,
        
        'int_shieldcellbank_size2_class1'               => 4211,
        'int_shieldcellbank_size2_class2'               => 4212,
        'int_shieldcellbank_size2_class3'               => 4213,
        'int_shieldcellbank_size2_class4'               => 4214,
        'int_shieldcellbank_size2_class5'               => 4215,
        
        'int_shieldcellbank_size3_class1'               => 4221,
        'int_shieldcellbank_size3_class2'               => 4222,
        'int_shieldcellbank_size3_class3'               => 4223,
        'int_shieldcellbank_size3_class4'               => 4224,
        'int_shieldcellbank_size3_class5'               => 4225,
        
        'int_shieldcellbank_size4_class1'               => 4231,
        'int_shieldcellbank_size4_class2'               => 4232,
        'int_shieldcellbank_size4_class3'               => 4233,
        'int_shieldcellbank_size4_class4'               => 4234,
        'int_shieldcellbank_size4_class5'               => 4235,
        
        'int_shieldcellbank_size5_class1'               => 4241,
        'int_shieldcellbank_size5_class2'               => 4242,
        'int_shieldcellbank_size5_class3'               => 4243,
        'int_shieldcellbank_size5_class4'               => 4244,
        'int_shieldcellbank_size5_class5'               => 4245,
        
        'int_shieldcellbank_size6_class1'               => 4251,
        'int_shieldcellbank_size6_class2'               => 4252,
        'int_shieldcellbank_size6_class3'               => 4253,
        'int_shieldcellbank_size6_class4'               => 4254,
        'int_shieldcellbank_size6_class5'               => 4255,
        
        'int_shieldcellbank_size7_class1'               => 4261,
        'int_shieldcellbank_size7_class2'               => 4262,
        'int_shieldcellbank_size7_class3'               => 4263,
        'int_shieldcellbank_size7_class4'               => 4264,
        'int_shieldcellbank_size7_class5'               => 4265,
        
        'int_shieldcellbank_size8_class1'               => 4271,
        'int_shieldcellbank_size8_class2'               => 4272,
        'int_shieldcellbank_size8_class3'               => 4273,
        'int_shieldcellbank_size8_class4'               => 4274,
        'int_shieldcellbank_size8_class5'               => 4275,
        
        // Optional Internal > Fuel Scoop
        'int_fuelscoop_size1_class1'                    => 4301,
        'int_fuelscoop_size1_class2'                    => 4302,
        'int_fuelscoop_size1_class3'                    => 4303,
        'int_fuelscoop_size1_class4'                    => 4304,
        'int_fuelscoop_size1_class5'                    => 4305,
        
        'int_fuelscoop_size2_class1'                    => 4311,
        'int_fuelscoop_size2_class2'                    => 4312,
        'int_fuelscoop_size2_class3'                    => 4313,
        'int_fuelscoop_size2_class4'                    => 4314,
        'int_fuelscoop_size2_class5'                    => 4315,
        
        'int_fuelscoop_size3_class1'                    => 4321,
        'int_fuelscoop_size3_class2'                    => 4322,
        'int_fuelscoop_size3_class3'                    => 4323,
        'int_fuelscoop_size3_class4'                    => 4324,
        'int_fuelscoop_size3_class5'                    => 4325,
        
        'int_fuelscoop_size4_class1'                    => 4331,
        'int_fuelscoop_size4_class2'                    => 4332,
        'int_fuelscoop_size4_class3'                    => 4333,
        'int_fuelscoop_size4_class4'                    => 4334,
        'int_fuelscoop_size4_class5'                    => 4335,
        
        'int_fuelscoop_size5_class1'                    => 4341,
        'int_fuelscoop_size5_class2'                    => 4342,
        'int_fuelscoop_size5_class3'                    => 4343,
        'int_fuelscoop_size5_class4'                    => 4344,
        'int_fuelscoop_size5_class5'                    => 4345,
        
        'int_fuelscoop_size6_class1'                    => 4351,
        'int_fuelscoop_size6_class2'                    => 4352,
        'int_fuelscoop_size6_class3'                    => 4353,
        'int_fuelscoop_size6_class4'                    => 4354,
        'int_fuelscoop_size6_class5'                    => 4355,
        
        'int_fuelscoop_size7_class1'                    => 4361,
        'int_fuelscoop_size7_class2'                    => 4362,
        'int_fuelscoop_size7_class3'                    => 4363,
        'int_fuelscoop_size7_class4'                    => 4364,
        'int_fuelscoop_size7_class5'                    => 4365,
        
        'int_fuelscoop_size8_class1'                    => 4371,
        'int_fuelscoop_size8_class2'                    => 4372,
        'int_fuelscoop_size8_class3'                    => 4373,
        'int_fuelscoop_size8_class4'                    => 4374,
        'int_fuelscoop_size8_class5'                    => 4375,
        
        // Optional Internal > Refinery
        'int_refinery_size1_class1'                     => 4401,
        'int_refinery_size1_class2'                     => 4402,
        'int_refinery_size1_class3'                     => 4403,
        'int_refinery_size1_class4'                     => 4404,
        'int_refinery_size1_class5'                     => 4405,
        
        'int_refinery_size2_class1'                     => 4411,
        'int_refinery_size2_class2'                     => 4412,
        'int_refinery_size2_class3'                     => 4413,
        'int_refinery_size2_class4'                     => 4414,
        'int_refinery_size2_class5'                     => 4415,
        
        'int_refinery_size3_class1'                     => 4421,
        'int_refinery_size3_class2'                     => 4422,
        'int_refinery_size3_class3'                     => 4423,
        'int_refinery_size3_class4'                     => 4424,
        'int_refinery_size3_class5'                     => 4425,
        
        'int_refinery_size4_class1'                     => 4431,
        'int_refinery_size4_class2'                     => 4432,
        'int_refinery_size4_class3'                     => 4433,
        'int_refinery_size4_class4'                     => 4434,
        'int_refinery_size4_class5'                     => 4435,
        
        // Optional Internal > Frame Shift Drive Interdictor
        'int_fsdinterdictor_size1_class1'               => 4501,
        'int_fsdinterdictor_size1_class2'               => 4502,
        'int_fsdinterdictor_size1_class3'               => 4503,
        'int_fsdinterdictor_size1_class4'               => 4504,
        'int_fsdinterdictor_size1_class5'               => 4505,
        
        'int_fsdinterdictor_size2_class1'               => 4511,
        'int_fsdinterdictor_size2_class2'               => 4512,
        'int_fsdinterdictor_size2_class3'               => 4513,
        'int_fsdinterdictor_size2_class4'               => 4514,
        'int_fsdinterdictor_size2_class5'               => 4515,
        
        'int_fsdinterdictor_size3_class1'               => 4521,
        'int_fsdinterdictor_size3_class2'               => 4522,
        'int_fsdinterdictor_size3_class3'               => 4523,
        'int_fsdinterdictor_size3_class4'               => 4524,
        'int_fsdinterdictor_size3_class5'               => 4525,
        
        'int_fsdinterdictor_size4_class1'               => 4531,
        'int_fsdinterdictor_size4_class2'               => 4532,
        'int_fsdinterdictor_size4_class3'               => 4533,
        'int_fsdinterdictor_size4_class4'               => 4534,
        'int_fsdinterdictor_size4_class5'               => 4535,
        
        // Optional Internal > Hatch Breaker Limpet Controller
        'int_dronecontrol_resourcesiphon_size1_class1'  => 4601,
        'int_dronecontrol_resourcesiphon_size1_class2'  => 4602,
        'int_dronecontrol_resourcesiphon_size1_class3'  => 4603,
        'int_dronecontrol_resourcesiphon_size1_class4'  => 4604,
        'int_dronecontrol_resourcesiphon_size1_class5'  => 4605,
        
        'int_dronecontrol_resourcesiphon_size3_class1'  => 4621,
        'int_dronecontrol_resourcesiphon_size3_class2'  => 4622,
        'int_dronecontrol_resourcesiphon_size3_class3'  => 4623,
        'int_dronecontrol_resourcesiphon_size3_class4'  => 4624,
        'int_dronecontrol_resourcesiphon_size3_class5'  => 4625,
        
        'int_dronecontrol_resourcesiphon_size5_class1'  => 4641,
        'int_dronecontrol_resourcesiphon_size5_class2'  => 4642,
        'int_dronecontrol_resourcesiphon_size5_class3'  => 4643,
        'int_dronecontrol_resourcesiphon_size5_class4'  => 4644,
        'int_dronecontrol_resourcesiphon_size5_class5'  => 4645,
        
        'int_dronecontrol_resourcesiphon_size7_class1'  => 4661,
        'int_dronecontrol_resourcesiphon_size7_class2'  => 4662,
        'int_dronecontrol_resourcesiphon_size7_class3'  => 4663,
        'int_dronecontrol_resourcesiphon_size7_class4'  => 4664,
        'int_dronecontrol_resourcesiphon_size7_class5'  => 4665,
        
        // Optional Internal > Auto Field-Maintenance Unit
        'int_repairer_size1_class1'                     => 4701,
        'int_repairer_size1_class2'                     => 4702,
        'int_repairer_size1_class3'                     => 4703,
        'int_repairer_size1_class4'                     => 4704,
        'int_repairer_size1_class5'                     => 4705,
        
        'int_repairer_size2_class1'                     => 4711,
        'int_repairer_size2_class2'                     => 4712,
        'int_repairer_size2_class3'                     => 4713,
        'int_repairer_size2_class4'                     => 4714,
        'int_repairer_size2_class5'                     => 4715,
        
        'int_repairer_size3_class1'                     => 4721,
        'int_repairer_size3_class2'                     => 4722,
        'int_repairer_size3_class3'                     => 4723,
        'int_repairer_size3_class4'                     => 4724,
        'int_repairer_size3_class5'                     => 4725,
        
        'int_repairer_size4_class1'                     => 4731,
        'int_repairer_size4_class2'                     => 4732,
        'int_repairer_size4_class3'                     => 4733,
        'int_repairer_size4_class4'                     => 4734,
        'int_repairer_size4_class5'                     => 4735,
        
        'int_repairer_size5_class1'                     => 4741,
        'int_repairer_size5_class2'                     => 4742,
        'int_repairer_size5_class3'                     => 4743,
        'int_repairer_size5_class4'                     => 4744,
        'int_repairer_size5_class5'                     => 4745,
        
        'int_repairer_size6_class1'                     => 4751,
        'int_repairer_size6_class2'                     => 4752,
        'int_repairer_size6_class3'                     => 4753,
        'int_repairer_size6_class4'                     => 4754,
        'int_repairer_size6_class5'                     => 4755,
        
        'int_repairer_size7_class1'                     => 4761,
        'int_repairer_size7_class2'                     => 4762,
        'int_repairer_size7_class3'                     => 4763,
        'int_repairer_size7_class4'                     => 4764,
        'int_repairer_size7_class5'                     => 4765,
        
        'int_repairer_size8_class1'                     => 4771,
        'int_repairer_size8_class2'                     => 4772,
        'int_repairer_size8_class3'                     => 4773,
        'int_repairer_size8_class4'                     => 4774,
        'int_repairer_size8_class5'                     => 4775,
        
        // Optional Internal > Hull Reinforcement Package
        'int_hullreinforcement_size1_class1'            => 4801,
        'int_hullreinforcement_size1_class2'            => 4802,
        
        'int_hullreinforcement_size2_class1'            => 4811,
        'int_hullreinforcement_size2_class2'            => 4812,
        
        'int_hullreinforcement_size3_class1'            => 4821,
        'int_hullreinforcement_size3_class2'            => 4822,
        
        'int_hullreinforcement_size4_class1'            => 4831,
        'int_hullreinforcement_size4_class2'            => 4832,
        
        'int_hullreinforcement_size5_class1'            => 4841,
        'int_hullreinforcement_size5_class2'            => 4842,
        
        // Optional Internal > Module Reinforcement Package
        'int_modulereinforcement_size1_class1'          => 4901,
        'int_modulereinforcement_size1_class2'          => 4902,
        
        'int_modulereinforcement_size2_class1'          => 4911,
        'int_modulereinforcement_size2_class2'          => 4912,
        
        'int_modulereinforcement_size3_class1'          => 4921,
        'int_modulereinforcement_size3_class2'          => 4922,
        
        'int_modulereinforcement_size4_class1'          => 4931,
        'int_modulereinforcement_size4_class2'          => 4932,
        
        'int_modulereinforcement_size5_class1'          => 4941,
        'int_modulereinforcement_size5_class2'          => 4942,
        
        // Optional Internal > Collector Limpet Controller
        'int_dronecontrol_collection_size1_class1'      => 5001,
        'int_dronecontrol_collection_size1_class2'      => 5002,
        'int_dronecontrol_collection_size1_class3'      => 5003,
        'int_dronecontrol_collection_size1_class4'      => 5004,
        'int_dronecontrol_collection_size1_class5'      => 5005,
        
        'int_dronecontrol_collection_size3_class1'      => 5021,
        'int_dronecontrol_collection_size3_class2'      => 5022,
        'int_dronecontrol_collection_size3_class3'      => 5023,
        'int_dronecontrol_collection_size3_class4'      => 5024,
        'int_dronecontrol_collection_size3_class5'      => 5025,
        
        'int_dronecontrol_collection_size5_class1'      => 5041,
        'int_dronecontrol_collection_size5_class2'      => 5042,
        'int_dronecontrol_collection_size5_class3'      => 5043,
        'int_dronecontrol_collection_size5_class4'      => 5044,
        'int_dronecontrol_collection_size5_class5'      => 5045,
        
        'int_dronecontrol_collection_size7_class1'      => 5061,
        'int_dronecontrol_collection_size7_class2'      => 5062,
        'int_dronecontrol_collection_size7_class3'      => 5063,
        'int_dronecontrol_collection_size7_class4'      => 5064,
        'int_dronecontrol_collection_size7_class5'      => 5065,
        
        // Optional Internal > Fuel Transfer Limpet Controller
        'int_dronecontrol_fueltransfer_size1_class1'    => 5101,
        'int_dronecontrol_fueltransfer_size1_class2'    => 5102,
        'int_dronecontrol_fueltransfer_size1_class3'    => 5103,
        'int_dronecontrol_fueltransfer_size1_class4'    => 5104,
        'int_dronecontrol_fueltransfer_size1_class5'    => 5105,
        
        'int_dronecontrol_fueltransfer_size3_class1'    => 5121,
        'int_dronecontrol_fueltransfer_size3_class2'    => 5122,
        'int_dronecontrol_fueltransfer_size3_class3'    => 5123,
        'int_dronecontrol_fueltransfer_size3_class4'    => 5124,
        'int_dronecontrol_fueltransfer_size3_class5'    => 5125,
        
        'int_dronecontrol_fueltransfer_size5_class1'    => 5141,
        'int_dronecontrol_fueltransfer_size5_class2'    => 5142,
        'int_dronecontrol_fueltransfer_size5_class3'    => 5143,
        'int_dronecontrol_fueltransfer_size5_class4'    => 5144,
        'int_dronecontrol_fueltransfer_size5_class5'    => 5145,
        
        'int_dronecontrol_fueltransfer_size7_class1'    => 5161,
        'int_dronecontrol_fueltransfer_size7_class2'    => 5162,
        'int_dronecontrol_fueltransfer_size7_class3'    => 5163,
        'int_dronecontrol_fueltransfer_size7_class4'    => 5164,
        'int_dronecontrol_fueltransfer_size7_class5'    => 5165,
        
        // Optional Internal > Prospector Limpet Controller
        'int_dronecontrol_prospector_size1_class1'      => 5201,
        'int_dronecontrol_prospector_size1_class2'      => 5202,
        'int_dronecontrol_prospector_size1_class3'      => 5203,
        'int_dronecontrol_prospector_size1_class4'      => 5204,
        'int_dronecontrol_prospector_size1_class5'      => 5205,
        
        'int_dronecontrol_prospector_size3_class1'      => 5221,
        'int_dronecontrol_prospector_size3_class2'      => 5222,
        'int_dronecontrol_prospector_size3_class3'      => 5223,
        'int_dronecontrol_prospector_size3_class4'      => 5224,
        'int_dronecontrol_prospector_size3_class5'      => 5225,
        
        'int_dronecontrol_prospector_size5_class1'      => 5241,
        'int_dronecontrol_prospector_size5_class2'      => 5242,
        'int_dronecontrol_prospector_size5_class3'      => 5243,
        'int_dronecontrol_prospector_size5_class4'      => 5244,
        'int_dronecontrol_prospector_size5_class5'      => 5245,
        
        'int_dronecontrol_prospector_size7_class1'      => 5261,
        'int_dronecontrol_prospector_size7_class2'      => 5262,
        'int_dronecontrol_prospector_size7_class3'      => 5263,
        'int_dronecontrol_prospector_size7_class4'      => 5264,
        'int_dronecontrol_prospector_size7_class5'      => 5265,
        
        // Optional internal > passenger cabin
        'int_passengercabin_size2_class1'               => 5311,
        
        'int_passengercabin_size3_class1'               => 5321,
        'int_passengercabin_size3_class2'               => 5322,
        
        'int_passengercabin_size4_class1'               => 5331,
        'int_passengercabin_size4_class2'               => 5332,
        'int_passengercabin_size4_class3'               => 5333,
        
        'int_passengercabin_size5_class1'               => 5341,
        'int_passengercabin_size5_class2'               => 5342,
        'int_passengercabin_size5_class3'               => 5343,
        'int_passengercabin_size5_class4'               => 5344,
        
        'int_passengercabin_size6_class1'               => 5351,
        'int_passengercabin_size6_class2'               => 5352,
        'int_passengercabin_size6_class3'               => 5353,
        'int_passengercabin_size6_class4'               => 5354,
        
        // Optional Internal > Planetary Vehicle Hangar
        'int_buggybay_size2_class1'                     => 5411,
        'int_buggybay_size2_class2'                     => 5412,
        
        'int_buggybay_size4_class1'                     => 5431,
        'int_buggybay_size4_class2'                     => 5432,
        
        'int_buggybay_size6_class1'                     => 5451,
        'int_buggybay_size6_class2'                     => 5452,
        
        // Optional Internal > Fighter Hangar
        'int_fighterbay_size5_class1'                   => 5541,
        
        'int_fighterbay_size6_class1'                   => 5551,
        
        'int_fighterbay_size7_class1'                   => 5561,
        
        // Optional Internal > Repair Limpet Controller
        'int_dronecontrol_repair_size1_class1'          => 5601,
        'int_dronecontrol_repair_size1_class2'          => 5602,
        'int_dronecontrol_repair_size1_class3'          => 5603,
        'int_dronecontrol_repair_size1_class4'          => 5604,
        'int_dronecontrol_repair_size1_class5'          => 5605,
        
        'int_dronecontrol_repair_size3_class1'          => 5621,
        'int_dronecontrol_repair_size3_class2'          => 5622,
        'int_dronecontrol_repair_size3_class3'          => 5623,
        'int_dronecontrol_repair_size3_class4'          => 5624,
        'int_dronecontrol_repair_size3_class5'          => 5625,
        
        'int_dronecontrol_repair_size5_class1'          => 5641,
        'int_dronecontrol_repair_size5_class2'          => 5642,
        'int_dronecontrol_repair_size5_class3'          => 5643,
        'int_dronecontrol_repair_size5_class4'          => 5644,
        'int_dronecontrol_repair_size5_class5'          => 5645,
        
        'int_dronecontrol_repair_size7_class1'          => 5661,
        'int_dronecontrol_repair_size7_class2'          => 5662,
        'int_dronecontrol_repair_size7_class3'          => 5663,
        'int_dronecontrol_repair_size7_class4'          => 5664,
        'int_dronecontrol_repair_size7_class5'          => 5665,
        
        // Optional Internal > Research Limpet Controller
        'int_dronecontrol_unkvesselresearch'            => 5701,
        
        // Optional Internal > Decontamination Limpet Controller
        'int_dronecontrol_decontamination_size1_class1' => 5801,
        
        'int_dronecontrol_decontamination_size3_class1' => 5821,
        
        'int_dronecontrol_decontamination_size5_class1' => 5841,
        
        'int_dronecontrol_decontamination_size7_class1' => 5861,
        
        // Optional Internal > Recon Limpet Controller
        'int_dronecontrol_recon_size1_class1'           => 5901,
        
        'int_dronecontrol_recon_size3_class1'           => 5921,
        
        'int_dronecontrol_recon_size5_class1'           => 5941,
        
        'int_dronecontrol_recon_size7_class1'           => 5961,
        
        // Optional Internal > Meta Alloy Hull Reinforcement
        'int_metaalloyhullreinforcement_size1_class1'   => 6001,
        'int_metaalloyhullreinforcement_size1_class2'   => 6002,
        
        'int_metaalloyhullreinforcement_size2_class1'   => 6011,
        'int_metaalloyhullreinforcement_size2_class2'   => 6012,
        
        'int_metaalloyhullreinforcement_size3_class1'   => 6021,
        'int_metaalloyhullreinforcement_size3_class2'   => 6022,
        
        'int_metaalloyhullreinforcement_size4_class1'   => 6031,
        'int_metaalloyhullreinforcement_size4_class2'   => 6032,
        
        'int_metaalloyhullreinforcement_size5_class1'   => 6041,
        'int_metaalloyhullreinforcement_size5_class2'   => 6042,
    ];
}