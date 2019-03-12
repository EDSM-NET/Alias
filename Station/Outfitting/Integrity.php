<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Integrity extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Integrity';

    /**
     * List of categories
     */
    static protected $exclude           = [
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
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Sub-Surface Displacement Missile
           951  => null,
           952  => null,

           959  => null,
           960  => null,

        // Weapon Hardpoint > Beam Laser
          1001  => 40,
          1002  => 51,
          1003  => 64,
          1004  => 80,

          1005  => 40,
          1006  => 51,
          1007  => 64,
          1008  => 80,

          1009  => 40,
          1010  => 51,
          1011  => 64,

          1021  => 40,

          1031  => null,
          1032  => null,

        // Weapon Hardpoint > Pulse Laser
          1050  => null, // Not in category
          1051  => 40,
          1052  => 51,
          1053  => 64,
          1054  => 80,

          1055  => 40,
          1056  => 51,
          1057  => 64,
          1058  => 80,

          1059  => 40,
          1060  => 51,
          1061  => 64,

          1072  => 51,

        // Weapon Hardpoint > Burst Laser
          1101  => 40,
          1102  => 40,
          1103  => 64,
          1104  => 80,

          1105  => 40,
          1106  => 40,
          1107  => 64,
          1108  => 64,

          1109  => 40,
          1110  => 40,
          1111  => 64,

          1121  => 40,

        // Weapon Hardpoint > Cannon
          1151  => 40,
          1152  => 51,
          1153  => 64,
          1154  => 80,

          1155  => 40,
          1156  => 51,
          1157  => 64,
          1158  => 80,

          1159  => 40,
          1160  => 51,
          1161  => 64,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 40,
          1202  => 51,
          1203  => 64,

          1205  => 40,
          1206  => 51,
          1207  => 64,

          1209  => 40,
          1210  => 51,
          1211  => 64,

          1215  => 64,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 40,
          1252  => 51,
          1253  => 64,
          1254  => 80,

          1255  => 40,
          1256  => 51,
          1257  => 64,
          1258  => 80,

          1259  => 40,
          1260  => 51,
          1261  => 64,

          1271  => 40,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 51,
          1303  => 64,
          1304  => 80,

          1313  => 64,

          1321  => null,
          1322  => null,
          1323  => null,

          1329  => null,
          1330  => null,
          1331  => null,

        // Weapon Hardpoint > Rail Gun
          1351  => 40,
          1352  => 51,

          1362  => 51,

        // Weapon Hardpoint > Missile Rack
          1401  => 40,
          1402  => 51,
          1403  => 64,

          1405  => 40,
          1406  => 51,
          1407  => 64,

          1411  => 51,

        // Weapon Hardpoint > Mine Launcher
          1451  => 40,
          1452  => 51,

        // Weapon Hardpoint > Mining Laser
          1501  => null,
          1502  => null,
          1509  => null,
          1510  => null,

          1521  => 40,

        // Weapon Hardpoint > Torpedo Pylon
          1551  => 40,
          1552  => 51,
          1553  => 64,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 40,

        // Weapon Hardpoint > AX Missile Rack
          1652  => null,
          1653  => null,

          1660  => null,
          1661  => null,

        // Weapon Hardpoint > AX Multi-Cannon
          1702  => null,
          1703  => null,

          1710  => null,
          1711  => null,

        // Weapon Hardpoint > Remote Release Flak Launcher
          1752  => null,
          1760  => null,

        // Weapon Hardpoint > Remote Release Flechette Launcher
          1772  => null,
          1780  => null,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 51,

        // Weapon Hardpoint > Abrasion Blaster
          1821  => null,
          1829  => null,

        // Weapon Hardpoint > Shock Cannon
          1851  => null,
          1852  => null,
          1853  => null,

          1855  => null,
          1856  => null,
          1857  => null,

          1859  => null,
          1860  => null,
          1861  => null,

        // Weapon Hardpoint > Enzyme Missile Rack
          1872  => null,

        // Weapon Hardpoint > Shard Cannon
          1921  => null,
          1922  => null,
          1923  => null,

          1929  => null,
          1930  => null,
          1931  => null,

        // Weapon Hardpoint > Seismic Charge
          1952  => null,
          1960  => null,

        // Utility Mount > Shield Booster
          2001  => 25,
          2002  => 35,
          2003  => 40,
          2004  => 45,
          2005  => 48,

        // Utility Mount > Chaff Launcher
          2050  => 20,

        // Utility Mount > Electronic Countermeasure
          2100  => 20,

        // Utility Mount > Heat Sink Launcher
          2150  => 45,

        // Utility Mount > Point Defence
          2200  => 30,

        // Utility Mount > Cargo Scanner
          2251  => 32,
          2252  => 24,
          2253  => 40,
          2254  => 56,
          2255  => 48,

        // Utility Mount > Frame Shift Wake Scanner
          2301  => 32,
          2302  => 24,
          2303  => 40,
          2304  => 56,
          2305  => 48,

        // Utility Mount > Kill Warrant Scanner
          2351  => 32,
          2352  => 24,
          2353  => 40,
          2354  => 56,
          2355  => 48,

        // Utility Mount > Xeno Scanner
          2401  => null,

        // Utility Mount > Shutdown Field Neutraliser
          2451  => null,

        // Utility Mount > Pulse Wave Analyser
          2501  => null,
          2502  => null,
          2503  => null,
          2504  => null,
          2505  => null,

        // Core Internal > Fuel Tank
          3000  => null, // Not in category
          3001  => null,
          3002  => null,
          3003  => null,
          3004  => null,
          3005  => null,
          3006  => null,
          3007  => null,
          3008  => null,

        // Core Internal > Power Plant
          3100  => null, // Not in category
          3101  => 46,
          3102  => 41,
          3103  => 51,
          3104  => 61,
          3105  => 56,

          3109  => null,

          3111  => 58,
          3112  => 51,
          3113  => 64,
          3114  => 77,
          3115  => 70,

          3119  => null,

          3121  => 72,
          3122  => 64,
          3123  => 80,
          3124  => 96,
          3125  => 88,

          3129  => null,

          3131  => 86,
          3132  => 77,
          3133  => 96,
          3134  => 115,
          3135  => 106,

          3139  => null,

          3141  => 102,
          3142  => 90,
          3143  => 113,
          3144  => 136,
          3145  => 124,

          3149  => null,

          3151  => 118,
          3152  => 105,
          3153  => 131,
          3154  => 157,
          3155  => 144,

          3159  => null,

          3161  => 135,
          3162  => 120,
          3163  => 150,
          3164  => 180,
          3165  => 165,

          3169  => null,

        // Core Internal > Thrusters
          3200  => null, // Not in category
          3201  => 46,
          3202  => 41,
          3203  => 51,
          3204  => 61,
          3205  => 56,
          3206  => 40,

          3211  => 58,
          3212  => 51,
          3213  => 64,
          3214  => 77,
          3215  => 70,
          3216  => 55,

          3221  => 72,
          3222  => 64,
          3223  => 80,
          3224  => 96,
          3225  => 88,

          3231  => 86,
          3232  => 77,
          3233  => 96,
          3234  => 115,
          3235  => 106,

          3241  => 102,
          3242  => 90,
          3243  => 113,
          3244  => 136,
          3245  => 124,

          3251  => 118,
          3252  => 105,
          3253  => 131,
          3254  => 157,
          3255  => 144,

          3261  => 135,
          3262  => 120,
          3263  => 150,
          3264  => 180,
          3265  => 165,

        // Core Internal > Frame Shift Drive
          3300  => null, // Not in category
          3301  => 46,
          3302  => 41,
          3303  => 51,
          3304  => 77,
          3305  => 64,

          3311  => 58,
          3312  => 51,
          3313  => 64,
          3314  => 96,
          3315  => 80,

          3321  => 72,
          3322  => 64,
          3323  => 80,
          3324  => 120,
          3325  => 100,

          3331  => 86,
          3332  => 77,
          3333  => 96,
          3334  => 144,
          3335  => 120,

          3341  => 102,
          3342  => 90,
          3343  => 113,
          3344  => 170,
          3345  => 141,

          3351  => 118,
          3352  => 105,
          3353  => 131,
          3354  => 197,
          3355  => 164,

          3361  => null,
          3362  => null,
          3363  => null,
          3364  => null,
          3365  => null,

        // Core Internal > Life Support
          3400  => null, // Not in category
          3401  => 32,
          3402  => 36,
          3403  => 40,
          3404  => 44,
          3405  => 48,

          3411  => 41,
          3412  => 46,
          3413  => 51,
          3414  => 56,
          3415  => 61,

          3421  => 51,
          3422  => 58,
          3423  => 64,
          3424  => 70,
          3425  => 77,

          3431  => 64,
          3432  => 72,
          3433  => 80,
          3434  => 88,
          3435  => 96,

          3441  => 77,
          3442  => 86,
          3443  => 96,
          3444  => 106,
          3445  => 115,

          3451  => 90,
          3452  => 102,
          3453  => null,
          3454  => 124,
          3455  => 136,

          3461  => 105,
          3462  => 118,
          3463  => 131,
          3464  => 144,
          3465  => 157,

          3471  => 120,
          3472  => 135,
          3473  => 150,
          3474  => 165,
          3475  => 180,

        // Core Internal > Power Distributor
          3500  => null, // Not in category
          3501  => 36,
          3502  => 32,
          3503  => 40,
          3504  => null,
          3505  => 44,

          3509  => null,

          3511  => 46,
          3512  => 41,
          3513  => 51,
          3514  => 61,
          3515  => 56,

          3519  => null,

          3521  => 58,
          3522  => 51,
          3523  => 64,
          3524  => 77,
          3525  => 70,

          3529  => null,

          3531  => 72,
          3532  => 64,
          3533  => 80,
          3534  => 96,
          3535  => 88,

          3539  => null,

          3541  => null,
          3542  => 77,
          3543  => 96,
          3544  => 115,
          3545  => 106,

          3549  => null,

          3551  => 102,
          3552  => 90,
          3553  => 113,
          3554  => 136,
          3555  => 124,

          3559  => null,

          3561  => 118,
          3562  => 105,
          3563  => 131,
          3564  => 157,
          3565  => 144,

          3569  => null,

          3571  => 135,
          3572  => 120,
          3573  => 150,
          3574  => 180,
          3575  => 165,

          3579  => null,

        // Core Internal > Sensors
          3600  => null, // Not in category
          3601  => 36,
          3602  => 32,
          3603  => 40,
          3604  => 48,
          3605  => 44,

          3611  => 46,
          3612  => 41,
          3613  => 51,
          3614  => 61,
          3615  => 56,

          3621  => 58,
          3622  => 51,
          3623  => 64,
          3624  => 77,
          3625  => 70,

          3631  => 72,
          3632  => 64,
          3633  => 80,
          3634  => 96,
          3635  => 88,

          3641  => 86,
          3642  => 77,
          3643  => 96,
          3644  => 115,
          3645  => 106,

          3651  => 102,
          3652  => 90,
          3653  => 113,
          3654  => 136,
          3655  => 124,

          3661  => 118,
          3662  => 105,
          3663  => 131,
          3664  => 157,
          3665  => 144,

          3671  => 135,
          3672  => 120,
          3673  => 150,
          3674  => 180,
          3675  => 165,

        // Core Internal > Planetary Approach Suite
          3701  => null,

        // Core Internal > Guardian FSD Booster
          3801  => null,

          3811  => null,

          3821  => null,

          3831  => null,

          3841  => null,

        // Optional Internal > Discovery Scanner
          4000  => null,
          4001  => 32,
          4002  => null,
          4003  => null,

        // Optional Internal > Composition Scanner
          4010  => null,

        // Optional Internal > Detailed Surface Scanner
          4011  => 20,

        // Optional Internal > Cargo Rack
          4020  => null, // Not in category
          4021  => null,
          4022  => null,
          4023  => null,
          4024  => null,
          4025  => null,
          4026  => null,
          4027  => null,
          4028  => null,

          4031  => null,
          4032  => null,
          4033  => null,
          4034  => null,

        // Optional Internal > Standard Docking Computer
          4051  => null,

        // Optional Internal > Shield Generator
          4101  => null,
          4102  => 24,
          4103  => 40,
          4104  => 40,
          4106  => 48,
          4107  => 48,

          4110  => null, // Not in category
          4111  => 41,
          4112  => 31,
          4113  => 51,
          4114  => 51,
          4115  => 71,
          4116  => 61,
          4117  => 61,

          4121  => 51,
          4122  => 38,
          4123  => 64,
          4124  => 64,
          4125  => 90,
          4126  => 77,
          4127  => 77,

          4131  => 64,
          4132  => 48,
          4133  => 80,
          4134  => 80,
          4135  => 112,
          4136  => 96,
          4137  => 96,

          4141  => 77,
          4142  => 58,
          4143  => 96,
          4144  => 96,
          4145  => 134,
          4146  => 115,
          4147  => 115,

          4151  => 90,
          4152  => 68,
          4153  => 113,
          4154  => 113,
          4155  => 158,
          4156  => 136,
          4157  => 136,

          4161  => 105,
          4162  => 79,
          4163  => 131,
          4164  => 131,
          4165  => 183,
          4166  => 157,
          4167  => 157,

          4171  => 120,
          4172  => 90,
          4173  => 150,
          4174  => 150,
          4175  => 210,
          4176  => 180,
          4177  => 180,

        // Optional Internal > Shield Cell Bank
          4201  => 32,
          4202  => 24,
          4203  => 40,
          4204  => 56,
          4205  => 48,

          4211  => null,
          4212  => 31,
          4213  => null,
          4214  => 71,
          4215  => 61,

          4221  => 51,
          4222  => 38,
          4223  => 64,
          4224  => 90,
          4225  => 77,

          4231  => 64,
          4232  => 48,
          4233  => 80,
          4234  => 112,
          4235  => 96,

          4241  => null,
          4242  => 58,
          4243  => 96,
          4244  => 134,
          4245  => 115,

          4251  => null,
          4252  => 68,
          4253  => 113,
          4254  => 158,
          4255  => 136,

          4261  => null,
          4262  => 79,
          4263  => 131,
          4264  => 183,
          4265  => 157,

          4271  => 120,
          4272  => null,
          4273  => null,
          4274  => 210,
          4275  => 180,

        // Optional Internal > Fuel Scoop
          4301  => 32,
          4302  => null,
          4303  => null,
          4304  => 56,
          4305  => 48,

          4311  => 41,
          4312  => null,
          4313  => null,
          4314  => null,
          4315  => 61,

          4321  => 51,
          4322  => 38,
          4323  => 64,
          4324  => 90,
          4325  => 77,

          4331  => 64,
          4332  => 48,
          4333  => 80,
          4334  => 112,
          4335  => 96,

          4341  => 77,
          4342  => 58,
          4343  => 96,
          4344  => 134,
          4345  => 115,

          4351  => 90,
          4352  => 68,
          4353  => 113,
          4354  => 158,
          4355  => 136,

          4361  => null,
          4362  => 79,
          4363  => 131,
          4364  => 183,
          4365  => 157,

          4371  => null,
          4372  => null,
          4373  => 150,
          4374  => 210,
          4375  => 180,

        // Optional Internal > Refinery
          4401  => null,
          4402  => null,
          4403  => null,
          4404  => null,
          4405  => null,

          4411  => null,
          4412  => null,
          4413  => 51,
          4414  => 71,
          4415  => 61,

          4421  => 51,
          4422  => 38,
          4423  => 64,
          4424  => 90,
          4425  => 77,

          4431  => null,
          4432  => 48,
          4433  => 80,
          4434  => 112,
          4435  => 96,

        // Optional Internal > Frame Shift Drive Interdictor
          4501  => 32,
          4502  => 24,
          4503  => 40,
          4504  => 56,
          4505  => 48,

          4511  => null,
          4512  => 31,
          4513  => 51,
          4514  => 71,
          4515  => 61,

          4521  => null,
          4522  => 38,
          4523  => 64,
          4524  => 90,
          4525  => 77,

          4531  => null,
          4532  => 48,
          4533  => 80,
          4534  => 112,
          4535  => 96,

        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 32,
          4602  => 24,
          4603  => null,
          4604  => 56,
          4605  => 48,

          4621  => null,
          4622  => 38,
          4623  => 64,
          4624  => 90,
          4625  => 77,

          4641  => null,
          4642  => 58,
          4643  => 96,
          4644  => 134,
          4645  => 115,

          4661  => null,
          4662  => null,
          4663  => null,
          4664  => null,
          4665  => 157,

        // Optional Internal > Auto Field-Maintenance Unit
          4701  => 32,
          4702  => 24,
          4703  => null,
          4704  => 56,
          4705  => 46,

          4711  => 41,
          4712  => 31,
          4713  => 51,
          4714  => 71,
          4715  => 59,

          4721  => 51,
          4722  => 38,
          4723  => 64,
          4724  => 90,
          4725  => 74,

          4731  => 64,
          4732  => 48,
          4733  => null,
          4734  => 112,
          4735  => 92,

          4741  => 77,
          4742  => 58,
          4743  => 96,
          4744  => 134,
          4745  => 110,

          4751  => 90,
          4752  => 68,
          4753  => 113,
          4754  => 158,
          4755  => 130,

          4761  => null,
          4762  => 79,
          4763  => 131,
          4764  => 183,
          4765  => 151,

          4771  => null,
          4772  => null,
          4773  => 150,
          4774  => 210,
          4775  => 173,

        // Optional Internal > Hull Reinforcement Package
          4801  => null,
          4802  => null,

          4811  => null,
          4812  => null,

          4821  => null,
          4822  => null,

          4831  => null,
          4832  => null,

          4841  => null,
          4842  => null,

        // Optional Internal > Module Reinforcement Package
          4901  => null,
          4902  => null,

          4911  => null,
          4912  => null,

          4921  => null,
          4922  => null,

          4931  => null,
          4932  => null,

          4941  => null,
          4942  => null,

        // Optional Internal > Collector Limpet Controller
          5001  => 24,
          5002  => 32,
          5003  => 40,
          5004  => 48,
          5005  => 56,

          5021  => 38,
          5022  => 51,
          5023  => 64,
          5024  => 77,
          5025  => 90,

          5041  => 58,
          5042  => 77,
          5043  => 96,
          5044  => 115,
          5045  => 134,

          5061  => 79,
          5062  => 105,
          5063  => 131,
          5064  => 157,
          5065  => 183,

        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 24,
          5102  => 32,
          5103  => 40,
          5104  => 48,
          5105  => 56,

          5121  => 38,
          5122  => 51,
          5123  => 64,
          5124  => 77,
          5125  => 90,

          5141  => null,
          5142  => 77,
          5143  => 96,
          5144  => 115,
          5145  => 134,

          5161  => null,
          5162  => 105,
          5163  => null,
          5164  => null,
          5165  => 183,

        // Optional Internal > Prospector Limpet Controller
          5201  => null,
          5202  => 32,
          5203  => 40,
          5204  => 48,
          5205  => 56,

          5221  => 38,
          5222  => 51,
          5223  => 64,
          5224  => 77,
          5225  => 90,

          5241  => null,
          5242  => 77,
          5243  => null,
          5244  => 115,
          5245  => 134,

          5261  => null,
          5262  => null,
          5263  => null,
          5264  => 157,
          5265  => 183,

        // Optional Internal > Passenger Cabin
          5311  => null,

          5321  => null,
          5322  => null,

          5331  => null,
          5332  => null,
          5333  => null,

          5341  => null,
          5342  => null,
          5343  => null,
          5344  => null,

          5351  => null,
          5352  => null,
          5353  => null,
          5354  => null,

        // Optional Internal > Planetary Vehicle Hangar
          5411  => null,
          5412  => null,

          5431  => null,
          5432  => null,

          5451  => null,
          5452  => null,

        // Optional Internal > Fighter Hangar
          5541  => null,

          5551  => null,

          5561  => null,

        // Optional Internal > Repair Limpet Controller
          5601  => null,
          5602  => null,
          5603  => null,
          5604  => null,
          5605  => null,

          5621  => null,
          5622  => null,
          5623  => null,
          5624  => null,
          5625  => null,

          5641  => null,
          5642  => null,
          5643  => null,
          5644  => null,
          5645  => null,

          5661  => null,
          5662  => null,
          5663  => null,
          5664  => null,
          5665  => null,

        // Optional Internal > Research Limpet Controller
          5701  => null,

        // Optional Internal > Decontamination Limpet Controller
          5801  => null,

          5821  => null,

          5841  => null,

          5861  => null,

        // Optional Internal > Recon Limpet Controller
          5901  => null,

          5921  => null,

          5941  => null,

          5961  => null,

        // Optional Internal > Meta Alloy Hull Reinforcement
          6001  => null,
          6002  => null,

          6011  => null,
          6012  => null,

          6021  => null,
          6022  => null,

          6031  => null,
          6032  => null,

          6041  => null,
          6042  => null,

        // Optional Internal > Guardian Hull Reinforcement
          6101  => null,
          6102  => null,

          6111  => null,
          6112  => null,

          6121  => null,
          6122  => null,

          6131  => null,
          6132  => null,

          6141  => null,
          6142  => null,

        // Optional Internal > Guardian Shield Reinforcement
          6201  => null,
          6202  => null,

          6211  => null,
          6212  => null,

          6221  => null,
          6222  => null,

          6231  => null,
          6232  => null,

          6241  => null,
          6242  => null,

        // Optional Internal > Guardian Module Reinforcement
          6301  => null,
          6302  => null,

          6311  => null,
          6312  => null,

          6321  => null,
          6322  => null,

          6331  => null,
          6332  => null,

          6341  => null,
          6342  => null,

        // Cargo bay door (No category, not sellable, only for ship module list)
          9990  => null,
          9991  => null,
    ];
}

