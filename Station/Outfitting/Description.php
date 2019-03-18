<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Description extends Alias
{
    static protected $defaultName       = null;

    static protected $name          = [
        // Bulkhead > Adder
             1  => 'Standard protection against all types of attack.',
             2  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
             3  => 'Hardened structure and compounds offering superior protection against all types of attack.',
             4  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
             5  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Anaconda
            11  => 'Standard protection against all types of attack.',
            12  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
            13  => 'Hardened structure and compounds offering superior protection against all types of attack.',
            14  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
            15  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Asp Explorer
            21  => 'Standard protection against all types of attack.',
            22  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
            23  => 'Hardened structure and compounds offering superior protection against all types of attack.',
            24  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
            25  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Asp Scout
            31  => 'Standard protection against all types of attack.',
            32  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
            33  => 'Hardened structure and compounds offering superior protection against all types of attack.',
            34  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
            35  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Beluga Liner
            41  => 'Standard protection against all types of attack.',
            42  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
            43  => 'Hardened structure and compounds offering superior protection against all types of attack.',
            44  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
            45  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Cobra Mk. III
            51  => 'Standard protection against all types of attack.',
            52  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
            53  => 'Hardened structure and compounds offering superior protection against all types of attack.',
            54  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
            55  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Cobra MkIV
            61  => 'Standard protection against all types of attack.',
            62  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
            63  => 'Hardened structure and compounds offering superior protection against all types of attack.',
            64  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
            65  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Diamondback Explorer
            71  => 'Standard protection against all types of attack.',
            72  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
            73  => 'Hardened structure and compounds offering superior protection against all types of attack.',
            74  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
            75  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Diamondback Scout
            81  => 'Standard protection against all types of attack.',
            82  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
            83  => 'Hardened structure and compounds offering superior protection against all types of attack.',
            84  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
            85  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Dolphin
            91  => 'Standard protection against all types of attack.',
            92  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
            93  => 'Hardened structure and compounds offering superior protection against all types of attack.',
            94  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
            95  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Eagle
           101  => 'Standard protection against all types of attack.',
           102  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           103  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           104  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           105  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Federal Assault Ship
           111  => 'Standard protection against all types of attack.',
           112  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           113  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           114  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           115  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Federal Corvette
           121  => 'Standard protection against all types of attack.',
           122  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           123  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           124  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           125  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Federal Dropship
           131  => 'Standard protection against all types of attack.',
           132  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           133  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           134  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           135  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Federal Gunship
           141  => 'Standard protection against all types of attack.',
           142  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           143  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           144  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           145  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Fer-de-Lance
           151  => 'Standard protection against all types of attack.',
           152  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           153  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           154  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           155  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Hauler
           161  => 'Standard protection against all types of attack.',
           162  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           163  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           164  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           165  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Imperial Clipper
           171  => 'Standard protection against all types of attack.',
           172  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           173  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           174  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           175  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Imperial Courrier
           181  => 'Standard protection against all types of attack.',
           182  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           183  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           184  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           185  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Imperial Cutter
           191  => 'Standard protection against all types of attack.',
           192  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           193  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           194  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           195  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Imperial Eagle
           201  => 'Standard protection against all types of attack.',
           202  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           203  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           204  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           205  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Keelback
           211  => 'Standard protection against all types of attack.',
           212  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           213  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           214  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           215  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Orca
           221  => 'Standard protection against all types of attack.',
           222  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           223  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           224  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           225  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Python
           231  => 'Standard protection against all types of attack.',
           232  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           233  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           234  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           235  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Sidewinder
           241  => 'Standard protection against all types of attack.',
           242  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           243  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           244  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           245  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Type-6 Transporter
           251  => 'Standard protection against all types of attack.',
           252  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           253  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           254  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           255  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Type-7 Transporter
           261  => 'Standard protection against all types of attack.',
           262  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           263  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           264  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           265  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Type-9 Heavy
           271  => 'Standard protection against all types of attack.',
           272  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           273  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           274  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           275  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Viper MkIII
           281  => 'Standard protection against all types of attack.',
           282  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           283  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           284  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           285  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Viper MkIV
           291  => 'Standard protection against all types of attack.',
           292  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           293  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           294  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           295  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Vulture
           301  => 'Standard protection against all types of attack.',
           302  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           303  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           304  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           305  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Type-10 Defender
           311  => 'Standard protection against all types of attack.',
           312  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           313  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           314  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           315  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Alliance Chieftain
           321  => 'Standard protection against all types of attack.',
           322  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           323  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           324  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           325  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Alliance Challenger
           331  => 'Standard protection against all types of attack.',
           332  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           333  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           334  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           335  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Krait MkII
           341  => 'Standard protection against all types of attack.',
           342  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           343  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           344  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           345  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Alliance Crusader
           351  => 'Standard protection against all types of attack.',
           352  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           353  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           354  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           355  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Krait Phantom
           361  => 'Standard protection against all types of attack.',
           362  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           363  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           364  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           365  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Bulkhead > Mamba
           371  => 'Standard protection against all types of attack.',
           372  => 'Advanced structure and compounds offer improved resistance against all types of attack.',
           373  => 'Hardened structure and compounds offering superior protection against all types of attack.',
           374  => 'Specifically formulated structure offering superior resistance to thermal damage at the cost of vulnerability to kinetic attack.',
           375  => 'Specifically formulated structure offering superior resistance to kinetic damage at the cost of vulnerability to thermal attack.',

        // Weapon Hardpoint > Sub-Surface Displacement Missile
           951  => 'Allows recovery of sub-surface deposits from asteroids (requires refinery).<br />
                    Hold trigger to delay detonation of ordnance. Only functions as a turret when there is an active Gunner role aboard.',
           952  => 'Allows recovery of sub-surface deposits from asteroids (requires refinery).<br />
                    Hold trigger to delay detonation of ordnance.',

           959  => 'Allows recovery of sub-surface deposits from asteroids (requires refinery).<br />
                    Hold trigger to delay detonation of ordnance. Only functions as a turret when there is an active Gunner role aboard.',
           960  => 'Allows recovery of sub-surface deposits from asteroids (requires refinery).<br />
                    Hold trigger to delay detonation of ordnance.',

        // Weapon Hardpoint > Beam Laser
          1001  => 'Continuous-fire laser weapon on fixed mount.',
          1002  => 'Continuous-fire laser weapon on fixed mount.',
          1003  => 'Continuous-fire laser weapon on fixed mount.',
          1004  => 'Continuous-fire laser weapon on fixed mount.',

          1005  => 'Continuous-fire laser weapon on gimballed mount, with signature tracking assist.',
          1006  => 'Continuous-fire laser weapon on gimballed mount, with signature tracking assist.',
          1007  => 'Continuous-fire laser weapon on gimballed mount, with signature tracking assist.',
          1008  => 'Continuous-fire laser weapon on gimballed mount, with signature tracking assist.',

          1009  => 'Continuous-fire laser weapon on turret mount, with automatic signature tracking.',
          1010  => 'Continuous-fire laser weapon on turret mount, with automatic signature tracking.',
          1011  => 'Continuous-fire laser weapon on turret mount, with automatic signature tracking.',

          1021  => 'Retuned beam laser that sacrifices direct damage for the ability to dump heat into the targets cooling system.',

          1031  => 'Fixed-mount high-energy weapon, based on researched Guardian technology.',
          1032  => 'Fixed-mount high-energy weapon, based on researched Guardian technology.',

        // Weapon Hardpoint > Pulse Laser
          1050  => 'Single-pulse laser weapon on fixed mount.',
          1051  => 'Single-pulse laser weapon on fixed mount.',
          1052  => 'Single-pulse laser weapon on fixed mount.',
          1053  => 'Single-pulse laser weapon on fixed mount.',
          1054  => 'Single-pulse laser weapon on fixed mount.',

          1055  => 'Single-pulse laser weapon on gimballed mount, with signature tracking assist.',
          1056  => 'Single-pulse laser weapon on gimballed mount, with signature tracking assist.',
          1057  => 'Single-pulse laser weapon on gimballed mount, with signature tracking assist.',
          1058  => 'Single-pulse laser weapon on gimballed mount, with signature tracking assist.',

          1059  => 'Single-pulse laser weapon on turret mount, with automatic signature tracking.',
          1060  => 'Single-pulse laser weapon on turret mount, with automatic signature tracking.',
          1061  => 'Single-pulse laser weapon on turret mount, with automatic signature tracking.',

          1072  => 'A pulse laser tuned to affect the electronics of the target ship and cause malfunctions along with reduced damage.',

        // Weapon Hardpoint > Burst Laser
          1101  => 'Multiple-pulse laser weapon on fixed mount.',
          1102  => 'Multiple-pulse laser weapon on fixed mount.',
          1103  => 'Multiple-pulse laser weapon on fixed mount.',
          1104  => 'Multiple-pulse laser weapon on fixed mount.',

          1105  => 'Multiple-pulse laser weapon on gimballed mount, with signature tracking assist.',
          1106  => 'Multiple-pulse laser weapon on gimballed mount, with signature tracking assist.',
          1107  => 'Multiple-pulse laser weapon on gimballed mount, with signature tracking assist.',
          1108  => 'Multiple-pulse laser weapon on gimballed mount, with signature tracking assist.',

          1109  => 'Multiple-pulse laser weapon on turret mount, with automatic signature tracking.',
          1110  => 'Multiple-pulse laser weapon on turret mount, with automatic signature tracking.',
          1111  => 'Multiple-pulse laser weapon on turret mount, with automatic signature tracking.',

          1121  => 'A variant burst laser that is designed to damage shields specifically at the cost of little to no hull damage.',

        // Weapon Hardpoint > Cannon
          1151  => 'Large-calibre projectile weapon on fixed mount.',
          1152  => 'Large-calibre projectile weapon on fixed mount.',
          1153  => 'Large-calibre projectile weapon on fixed mount.',
          1154  => 'Large-calibre projectile weapon on fixed mount.',

          1155  => 'Large-calibre projectile weapon on gimballed mount, with signature tracking assist.',
          1156  => 'Large-calibre projectile weapon on gimballed mount, with signature tracking assist.',
          1157  => 'Large-calibre projectile weapon on gimballed mount, with signature tracking assist.',
          1158  => 'Large-calibre projectile weapon on gimballed mount, with signature tracking assist.',

          1159  => 'Large-calibre projectile weapon on turret mount, with automatic signature tracking.',
          1160  => 'Large-calibre projectile weapon on turret mount, with automatic signature tracking.',
          1161  => 'Large-calibre projectile weapon on turret mount, with automatic signature tracking.',

        // Weapon Hardpoint > Fragment Cannon
          1201  => 'Multi-shot projectile weapon on fixed mount.',
          1202  => 'Multi-shot projectile weapon on fixed mount.',
          1203  => 'Multi-shot projectile weapon on fixed mount.',

          1205  => 'Multi-shot projectile weapon on gimballed mount, with signature tracking assist.',
          1206  => 'Multi-shot projectile weapon on gimballed mount, with signature tracking assist.',
          1207  => 'Multi-shot projectile weapon on gimballed mount, with signature tracking assist.',

          1209  => 'Multi-shot projectile weapon on turret mount, with automatic signature tracking.',
          1210  => 'Multi-shot projectile weapon on turret mount, with automatic signature tracking.',
          1211  => 'Multi-shot projectile weapon on turret mount, with automatic signature tracking.',

          1215  => 'A frag-cannon with tighter spread pattern to deliver its damage at a greater range.',

        // Weapon Hardpoint > Multi-Cannon
          1251  => 'Rapid fire, small-calibre projectile weapon on fixed mount.',
          1252  => 'Rapid fire, small-calibre projectile weapon on fixed mount.',
          1253  => 'Rapid fire, small-calibre projectile weapon on fixed mount.',
          1254  => 'Rapid fire, small-calibre projectile weapon on fixed mount.',

          1255  => 'Rapid fire, small-calibre projectile weapon on gimballed mount, with signature tracking assist.',
          1256  => 'Rapid fire, small-calibre projectile weapon on gimballed mount, with signature tracking assist.',
          1257  => 'Rapid fire, small-calibre projectile weapon on gimballed mount, with signature tracking assist.',
          1258  => 'Rapid fire, small-calibre projectile weapon on gimballed mount, with signature tracking assist.',

          1259  => 'Rapid fire, small-calibre projectile weapon on turret mount, with automatic signature tracking.',
          1260  => 'Rapid fire, small-calibre projectile weapon on turret mount, with automatic signature tracking.',
          1261  => 'Rapid fire, small-calibre projectile weapon on turret mount, with automatic signature tracking.',
          1262  => 'Rapid fire, small-calibre projectile weapon on turret mount, with automatic signature tracking.',

          1271  => 'A modified multi-cannon tuned to fire larger calibre rounds that deal more damage over a greater range at the cost of fire rate.',

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 'Energy projectile weapon on fixed mount.',
          1303  => 'Energy projectile weapon on fixed mount.',
          1304  => 'Energy projectile weapon on fixed mount.',

          1313  => 'A faster firing plasma accelerator that sacrifices per shot damage to achieve the increased fire rate.',

          1321  => 'Fixed-mount plasma weapon, based on researched Guardian technology.',
          1322  => 'Fixed-mount plasma weapon, based on researched Guardian technology.',
          1323  => 'Fixed-mount plasma weapon, based on researched Guardian technology.',

          1329  => 'Turret-mounted plasma weapon, based on researched Guardian technology. Only functions as a turret when there is an active Gunner role onboard.',
          1330  => 'Turret-mounted plasma weapon, based on researched Guardian technology. Only functions as a turret when there is an active Gunner role onboard.',
          1331  => 'Turret-mounted plasma weapon, based on researched Guardian technology. Only functions as a turret when there is an active Gunner role onboard.',

        // Weapon Hardpoint > Rail Gun
          1351  => 'Hyper-velocity projectile weapon on fixed mount.',
          1352  => 'Hyper-velocity projectile weapon on fixed mount.',

          1362  => 'A burst variant of the rail gun that sacrifices per shot damage to achieve a three round burst that overall is more effective.',

        // Weapon Hardpoint > Missile Rack
          1401  => 'Missile battery capable of launching seeker missiles.',
          1402  => 'Missile battery capable of launching seeker missiles.',
          1403  => 'Missile battery capable of launching seeker missiles.',

          1405  => 'Missile battery capable of launching dumbfire missiles.',
          1406  => 'Missile battery capable of launching dumbfire missiles.',
          1407  => 'Missile battery capable of launching dumbfire missiles.',

          1411  => 'Launches sophisticated dumbfire rockets with the capability of rebooting a ship\'s FSD on impact at the cost of reduced damage capability.',

        // Weapon Hardpoint > Mine Launcher
          1451  => 'Defensive weapon. Deploys proximity-triggered charges.',
          1452  => 'Defensive weapon. Deploys proximity-triggered charges.',

        // Weapon Hardpoint > Mining Laser
          1501  => 'Used on asteroids to cut chunks of resources from it (requires refinery).',
          1502  => 'Used on asteroids to cut chunks of resources from it (requires refinery).',
          1509  => 'Used on asteroids to cut chunks of resources from it (requires refinery). Only functions as a turret when there is an active Gunner role onboard.',
          1510  => 'Used on asteroids to cut chunks of resources from it (requires refinery). Only functions as a turret when there is an active Gunner role onboard.',

          1521  => 'Operates as both a standard mining laser with increased range and a reduced strength beam laser for added protection.',

        // Weapon Hardpoint > Torpedo Pylon
          1551  => 'Torpedo pylon capable of launching heat-seeking torpedoes.',
          1552  => 'Torpedo pylon capable of launching heat-seeking torpedoes.',
          1553  => 'Torpedo pylon capable of launching heat-seeking torpedoes.',

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 'Launches mines that are designed to physically shock and push on a ship more than damage it outright.',

        // Weapon Hardpoint > AX Missile Rack
          1652  => 'Missile battery capable of launching dumbfire ordnance loaded with a compound that damages alien vessels.',
          1653  => 'Missile battery capable of launching dumbfire ordnance loaded with a compound that damages alien vessels.',

          1660  => 'Missile battery capable of launching dumbfire ordnance loaded with a compound that damages alien vessels. Turret mounted, with automatic signature tracking.',
          1661  => 'Missile battery capable of launching dumbfire ordnance loaded with a compound that damages alien vessels. Turret mounted, with automatic signature tracking.',

        // Weapon Hardpoint > AX Multi-Cannon
          1702  => 'Fixed mount, rapid fire, small-calibre projectile tipped with a compound that damages alien vessels.',
          1703  => 'Fixed mount, rapid fire, small-calibre projectile tipped with a compound that damages alien vessels.',

          1710  => 'Rapid fire, small-calibre projectile tipped with a compound that damages alien vessels. Turret mounted, with automatic signature tracking.',
          1711  => 'Rapid fire, small-calibre projectile tipped with a compound that damages alien vessels. Turret mounted, with automatic signature tracking.',

        // Weapon Hardpoint > Remote Release Flak Launcher
          1752  => 'Flak launcher capable of firing a remotely detonated flak round. Hold trigger to delay detonation of flak ordnance.',
          1760  => 'Flak launcher capable of firing a remotely detonated flak round on turret mount. Hold trigger to delay detonation of flak ordnance. Only functions as a turret when there is an active Gunner role onboard.',

        // Weapon Hardpoint > Remote Release Flechette Launcher
          1772  => 'Flechette launcher capable of firing a remotely detonated flechette round. Hold trigger to delay detonation of flechettes.',
          1780  => 'Flechette launcher capable of firing a remotely detonated flechette round on a turret mount. Hold trigger to delay detonation of flechettes. Only functions as a turret when there is an active Gunner role onboard.',

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 'A seeking missile launcher that fires multiple specialised micro missiles that swarm.',

        // Weapon Hardpoint > Abrasion Blaster
          1821  => 'Breaks off surface deposits from asteroids (requires refinery).',
          1829  => 'Breaks off surface deposits from asteroids (requires refinery).<br />
                    Only functions as a turret when there is an active Gunner role aboard.',

        // Weapon Hardpoint > Shock Cannon
          1851  => 'Fixed mount, long-ranged projectile weapon.',
          1852  => 'Fixed mount, long-ranged projectile weapon.',
          1853  => 'Fixed mount, long-ranged projectile weapon.',

          1855  => 'Long-ranged projectile weapon on gimballed mount, with signature tracking assist.',
          1856  => 'Long-ranged projectile weapon on gimballed mount, with signature tracking assist.',
          1857  => 'Long-ranged projectile weapon on gimballed mount, with signature tracking assist.',

          1859  => 'Turret-mounted long-ranged projectile weapon. Only functions as a turret when there is an active Gunner role onboard.',
          1860  => 'Turret-mounted long-ranged projectile weapon. Only functions as a turret when there is an active Gunner role onboard.',
          1861  => 'Turret-mounted long-ranged projectile weapon. Only functions as a turret when there is an active Gunner role onboard.',

        // Weapon Hardpoint > Enzyme Missile Rack
          1872  => 'Missile rack with ordnance capable of inflicting caustic burn.',

        // Weapon Hardpoint > Shard Cannon
          1921  => 'Fixed-mount short-range weapon based on researched Guardian technology.',
          1922  => 'Fixed-mount short-range weapon based on researched Guardian technology.',
          1923  => 'Fixed-mount short-range weapon based on researched Guardian technology.',

          1929  => 'Turret mounted, short-range weapon based on researched Guardian technology.',
          1930  => 'Turret mounted, short-range weapon based on researched Guardian technology.',
          1931  => 'Turret mounted, short-range weapon based on researched Guardian technology.',

        // Weapon Hardpoint > Seismic Charge
          1952  => 'Warhead designed to break apart certain asteroids, allowing recovery of deep core deposits (requires refinery).',
          1960  => 'Warhead designed to break apart certain asteroids, allowing recovery of deep core deposits (requires refinery).<br />
                    Only functions as a turret when there is an active Gunner role aboard.',

        // Utility Mount > Shield Booster
          2001  => 'Strengthens the active shield if powered. Multiple boosters stack in effectiveness.',
          2002  => 'Strengthens the active shield if powered. Multiple boosters stack in effectiveness.',
          2003  => 'Strengthens the active shield if powered. Multiple boosters stack in effectiveness.',
          2004  => 'Strengthens the active shield if powered. Multiple boosters stack in effectiveness.',
          2005  => 'Strengthens the active shield if powered. Multiple boosters stack in effectiveness.',

        // Utility Mount > Chaff Launcher
          2050  => 'Signature tracking defence. When deployed, causes gimbal and turret-mounted devices to lose lock. Requires ammunition.',

        // Utility Mount > Electronic Countermeasure
          2100  => 'Missile and torpedo defence. When deployed, causes affected ordnance to lose lock.',

        // Utility Mount > Heat Sink Launcher
          2150  => 'Purges ship\'s heat into a disposable sink block, which is then ejected. Requires ammunition.',

        // Utility Mount > Point Defence
          2200  => 'Missile defence. Automatically tracks and fires upon missiles and torpedoes in range when powered.',

        // Utility Mount > Cargo Scanner
          2251  => 'Scanner that can detect and analyse the contents of a targeted vessel\'s cargo hold and passenger cabins.',
          2252  => 'Scanner that can detect and analyse the contents of a targeted vessel\'s cargo hold and passenger cabins.',
          2253  => 'Scanner that can detect and analyse the contents of a targeted vessel\'s cargo hold and passenger cabins.',
          2254  => 'Scanner that can detect and analyse the contents of a targeted vessel\'s cargo hold and passenger cabins.',
          2255  => 'Scanner that can detect and analyse the contents of a targeted vessel\'s cargo hold and passenger cabins.',

        // Utility Mount > Frame Shift Wake Scanner
          2301  => 'Scanner that can calculate the destination of a hyperspace jump by analysis of frame shift energy wake.',
          2302  => 'Scanner that can calculate the destination of a hyperspace jump by analysis of frame shift energy wake.',
          2303  => 'Scanner that can calculate the destination of a hyperspace jump by analysis of frame shift energy wake.',
          2304  => 'Scanner that can calculate the destination of a hyperspace jump by analysis of frame shift energy wake.',
          2305  => 'Scanner that can calculate the destination of a hyperspace jump by analysis of frame shift energy wake.',

        // Utility Mount > Kill Warrant Scanner
          2351  => 'Scanner that incorporates real-time communication with multiple law enforcement networks to obtain all issued bounties.',
          2352  => 'Scanner that incorporates real-time communication with multiple law enforcement networks to obtain all issued bounties.',
          2353  => 'Scanner that incorporates real-time communication with multiple law enforcement networks to obtain all issued bounties.',
          2354  => 'Scanner that incorporates real-time communication with multiple law enforcement networks to obtain all issued bounties.',
          2355  => 'Scanner that incorporates real-time communication with multiple law enforcement networks to obtain all issued bounties.',

        // Utility Mount > Xeno Scanner
          2401  => 'Scanner that can passively understand non-Human vessels, and analyse their structural make-up and internal modules.',

        // Utility Mount > Shutdown Field Neutraliser
          2451  => 'Counters current xeno shutdown technology when used within proximity.',

        // Utility Mount > Pulse Wave Analyser
          2501  => 'Pulse wave analysers are used to detect anomalous readings within solid objects, more specifically within asteroid fields.',
          2502  => 'Pulse wave analysers are used to detect anomalous readings within solid objects, more specifically within asteroid fields.',
          2503  => 'Pulse wave analysers are used to detect anomalous readings within solid objects, more specifically within asteroid fields.',
          2504  => 'Pulse wave analysers are used to detect anomalous readings within solid objects, more specifically within asteroid fields.',
          2505  => 'Pulse wave analysers are used to detect anomalous readings within solid objects, more specifically within asteroid fields.',

        // Core Internal > Fuel Tank
          3000  => 'Storage container for fuel used by ship\'s power plant.',
          3001  => 'Storage container for fuel used by ship\'s power plant.',
          3002  => 'Storage container for fuel used by ship\'s power plant.',
          3003  => 'Storage container for fuel used by ship\'s power plant.',
          3004  => 'Storage container for fuel used by ship\'s power plant.',
          3005  => 'Storage container for fuel used by ship\'s power plant.',
          3006  => 'Storage container for fuel used by ship\'s power plant.',
          3007  => 'Storage container for fuel used by ship\'s power plant.',
          3008  => 'Storage container for fuel used by ship\'s power plant.',

        // Core Internal > Power Plant
          3100  => 'Consumes fuel to power all ship modules.', // Not in category
          3101  => 'Consumes fuel to power all ship modules.',
          3102  => 'Consumes fuel to power all ship modules.',
          3103  => 'Consumes fuel to power all ship modules.',
          3104  => 'Consumes fuel to power all ship modules.',
          3105  => 'Consumes fuel to power all ship modules.',

          3109  => 'Consumes fuel to power all ship modules. Enhanced with Guardian technology to produce greater power output, at the cost of heat generated and mass.',

          3111  => 'Consumes fuel to power all ship modules.',
          3112  => 'Consumes fuel to power all ship modules.',
          3113  => 'Consumes fuel to power all ship modules.',
          3114  => 'Consumes fuel to power all ship modules.',
          3115  => 'Consumes fuel to power all ship modules.',

          3119  => 'Consumes fuel to power all ship modules. Enhanced with Guardian technology to produce greater power output, at the cost of heat generated and mass.',

          3121  => 'Consumes fuel to power all ship modules.',
          3122  => 'Consumes fuel to power all ship modules.',
          3123  => 'Consumes fuel to power all ship modules.',
          3124  => 'Consumes fuel to power all ship modules.',
          3125  => 'Consumes fuel to power all ship modules.',

          3129  => 'Consumes fuel to power all ship modules. Enhanced with Guardian technology to produce greater power output, at the cost of heat generated and mass.',

          3131  => 'Consumes fuel to power all ship modules.',
          3132  => 'Consumes fuel to power all ship modules.',
          3133  => 'Consumes fuel to power all ship modules.',
          3134  => 'Consumes fuel to power all ship modules.',
          3135  => 'Consumes fuel to power all ship modules.',

          3139  => 'Consumes fuel to power all ship modules. Enhanced with Guardian technology to produce greater power output, at the cost of heat generated and mass.',

          3141  => 'Consumes fuel to power all ship modules.',
          3142  => 'Consumes fuel to power all ship modules.',
          3143  => 'Consumes fuel to power all ship modules.',
          3144  => 'Consumes fuel to power all ship modules.',
          3145  => 'Consumes fuel to power all ship modules.',

          3149  => 'Consumes fuel to power all ship modules. Enhanced with Guardian technology to produce greater power output, at the cost of heat generated and mass.',

          3151  => 'Consumes fuel to power all ship modules.',
          3152  => 'Consumes fuel to power all ship modules.',
          3153  => 'Consumes fuel to power all ship modules.',
          3154  => 'Consumes fuel to power all ship modules.',
          3155  => 'Consumes fuel to power all ship modules.',

          3159  => 'Consumes fuel to power all ship modules. Enhanced with Guardian technology to produce greater power output, at the cost of heat generated and mass.',

          3161  => 'Consumes fuel to power all ship modules.',
          3162  => 'Consumes fuel to power all ship modules.',
          3163  => 'Consumes fuel to power all ship modules.',
          3164  => 'Consumes fuel to power all ship modules.',
          3165  => 'Consumes fuel to power all ship modules.',

          3169  => 'Consumes fuel to power all ship modules. Enhanced with Guardian technology to produce greater power output, at the cost of heat generated and mass.',

        // Core Internal > Thrusters
          3200  => 'Normal-space propulsion system.',
          3201  => 'Normal-space propulsion system.',
          3202  => 'Normal-space propulsion system.',
          3203  => 'Normal-space propulsion system.',
          3204  => 'Normal-space propulsion system.',
          3205  => 'Normal-space propulsion system.',
          3206  => 'Enhanced performance normal-space propulsion system.',

          3211  => 'Normal-space propulsion system.',
          3212  => 'Normal-space propulsion system.',
          3213  => 'Normal-space propulsion system.',
          3214  => 'Normal-space propulsion system.',
          3215  => 'Normal-space propulsion system.',
          3216  => 'Enhanced performance normal-space propulsion system.',

          3221  => 'Normal-space propulsion system.',
          3222  => 'Normal-space propulsion system.',
          3223  => 'Normal-space propulsion system.',
          3224  => 'Normal-space propulsion system.',
          3225  => 'Normal-space propulsion system.',

          3231  => 'Normal-space propulsion system.',
          3232  => 'Normal-space propulsion system.',
          3233  => 'Normal-space propulsion system.',
          3234  => 'Normal-space propulsion system.',
          3235  => 'Normal-space propulsion system.',

          3241  => 'Normal-space propulsion system.',
          3242  => 'Normal-space propulsion system.',
          3243  => 'Normal-space propulsion system.',
          3244  => 'Normal-space propulsion system.',
          3245  => 'Normal-space propulsion system.',

          3251  => 'Normal-space propulsion system.',
          3252  => 'Normal-space propulsion system.',
          3253  => 'Normal-space propulsion system.',
          3254  => 'Normal-space propulsion system.',
          3255  => 'Normal-space propulsion system.',

          3261  => 'Normal-space propulsion system.',
          3262  => 'Normal-space propulsion system.',
          3263  => 'Normal-space propulsion system.',
          3264  => 'Normal-space propulsion system.',
          3265  => 'Normal-space propulsion system.',

        // Core Internal > Frame Shift Drive
          3300  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3301  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3302  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3303  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3304  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3305  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',

          3311  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3312  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3313  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3314  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3315  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',

          3321  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3322  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3323  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3324  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3325  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',

          3331  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3332  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3333  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3334  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3335  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',

          3341  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3342  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3343  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3344  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3345  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',

          3351  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3352  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3353  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3354  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3355  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',

          3361  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3362  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3363  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3364  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',
          3365  => 'Device that allows supercruise travel and hyperspace jumps between star systems.',

        // Core Internal > Life Support
          3400  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3401  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3402  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3403  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3404  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3405  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',

          3411  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3412  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3413  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3414  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3415  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',

          3421  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3422  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3423  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3424  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3425  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',

          3431  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3432  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3433  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3434  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3435  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',

          3441  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3442  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3443  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3444  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3445  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',

          3451  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3452  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3453  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3454  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3455  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',

          3461  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3462  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3463  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3464  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3465  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',

          3471  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3472  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3473  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3474  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',
          3475  => 'Regulates habitable ship atmosphere and provides emergency reservoir for pilot\'s Remlock system.',

        // Core Internal > Power Distributor
          3500  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3501  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3502  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3503  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3504  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3505  => 'Distribution system for ENG, SYS and WEP capacitors.',

          3509  => 'Distribution system for ENG, SYS and WEP capacitors. Enhanced with Guardian technology to speed up capacitor recharge rates, at the cost of smaller capacitors and increased heat generation. Also boosts overall power output of any power plant it is hooked into.',

          3511  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3512  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3513  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3514  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3515  => 'Distribution system for ENG, SYS and WEP capacitors.',

          3519  => 'Distribution system for ENG, SYS and WEP capacitors. Enhanced with Guardian technology to speed up capacitor recharge rates, at the cost of smaller capacitors and increased heat generation. Also boosts overall power output of any power plant it is hooked into.',

          3521  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3522  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3523  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3524  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3525  => 'Distribution system for ENG, SYS and WEP capacitors.',

          3529  => 'Distribution system for ENG, SYS and WEP capacitors. Enhanced with Guardian technology to speed up capacitor recharge rates, at the cost of smaller capacitors and increased heat generation. Also boosts overall power output of any power plant it is hooked into.',

          3531  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3532  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3533  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3534  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3535  => 'Distribution system for ENG, SYS and WEP capacitors.',

          3539  => 'Distribution system for ENG, SYS and WEP capacitors. Enhanced with Guardian technology to speed up capacitor recharge rates, at the cost of smaller capacitors and increased heat generation. Also boosts overall power output of any power plant it is hooked into.',

          3541  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3542  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3543  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3544  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3545  => 'Distribution system for ENG, SYS and WEP capacitors.',

          3549  => 'Distribution system for ENG, SYS and WEP capacitors. Enhanced with Guardian technology to speed up capacitor recharge rates, at the cost of smaller capacitors and increased heat generation. Also boosts overall power output of any power plant it is hooked into.',

          3551  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3552  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3553  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3554  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3555  => 'Distribution system for ENG, SYS and WEP capacitors.',

          3559  => 'Distribution system for ENG, SYS and WEP capacitors. Enhanced with Guardian technology to speed up capacitor recharge rates, at the cost of smaller capacitors and increased heat generation. Also boosts overall power output of any power plant it is hooked into.',

          3561  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3562  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3563  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3564  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3565  => 'Distribution system for ENG, SYS and WEP capacitors.',

          3569  => 'Distribution system for ENG, SYS and WEP capacitors. Enhanced with Guardian technology to speed up capacitor recharge rates, at the cost of smaller capacitors and increased heat generation. Also boosts overall power output of any power plant it is hooked into.',

          3571  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3572  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3573  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3574  => 'Distribution system for ENG, SYS and WEP capacitors.',
          3575  => 'Distribution system for ENG, SYS and WEP capacitors.',

          3579  => 'Distribution system for ENG, SYS and WEP capacitors. Enhanced with Guardian technology to speed up capacitor recharge rates, at the cost of smaller capacitors and increased heat generation. Also boosts overall power output of any power plant it is hooked into.',

        // Core Internal > Sensors
          3600  => 'Standard suite providing basic detection, identification and targeting capabilities.', // Not in category
          3601  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3602  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3603  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3604  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3605  => 'Standard suite providing basic detection, identification and targeting capabilities.',

          3611  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3612  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3613  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3614  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3615  => 'Standard suite providing basic detection, identification and targeting capabilities.',

          3621  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3622  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3623  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3624  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3625  => 'Standard suite providing basic detection, identification and targeting capabilities.',

          3631  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3632  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3633  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3634  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3635  => 'Standard suite providing basic detection, identification and targeting capabilities.',

          3641  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3642  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3643  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3644  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3645  => 'Standard suite providing basic detection, identification and targeting capabilities.',

          3651  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3652  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3653  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3654  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3655  => 'Standard suite providing basic detection, identification and targeting capabilities.',

          3661  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3662  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3663  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3664  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3665  => 'Standard suite providing basic detection, identification and targeting capabilities.',

          3671  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3672  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3673  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3674  => 'Standard suite providing basic detection, identification and targeting capabilities.',
          3675  => 'Standard suite providing basic detection, identification and targeting capabilities.',

        // Core Internal > Planetary Approach Suite
          3701  => 'The required Thruster modifications, sensor package and avionics to allow a ship to fly effectively in close proximity to planets.',

        // Core Internal > Guardian FSD Booster
          3801  => 'Used to boost the output of Frame Shift Drives, but at the cost of overall fuel efficiency.',

          3811  => 'Used to boost the output of Frame Shift Drives, but at the cost of overall fuel efficiency.',

          3821  => 'Used to boost the output of Frame Shift Drives, but at the cost of overall fuel efficiency.',

          3831  => 'Used to boost the output of Frame Shift Drives, but at the cost of overall fuel efficiency.',

          3841  => 'Used to boost the output of Frame Shift Drives, but at the cost of overall fuel efficiency.',

        // Optional Internal > Discovery Scanner
          4000  => 'Scanner used to discover astronomical bodies and signal sources. The system sensor interface is used to locate and identify these points of interest. Can only be used in supercruise and only functions in analysis mode.',
          4001  => 'Scanner used to discover astronomical bodies and signal sources. The system sensor interface is used to locate and identify these points of interest. Can only be used in supercruise and only functions in analysis mode.',
          4002  => 'Scanner used during exploration.',
          4003  => 'Scanner used during exploration.',

        // Optional Internal > Composition Scanner
          4010  => 'Scanner capable of undertaking a complete composition analysis of most simple biological and non-biological entities. This data is then uploaded to the ship\'s internal codex and catalogued appropriately. Simply complete a full scan of the object to catalogue and, if it has not been scanned before, it will automatically create a new entry in the codex. Only functions in analysis mode.',

        // Optional Internal > Detailed Surface Scanner
          4011  => 'Advanced stellar body scanner used during exploration.',

        // Optional Internal > Cargo Rack
          4020  => 'Standardised storage rack for use in automated cargo transfer system.', // Not in category
          4021  => 'Standardised storage rack for use in automated cargo transfer system.',
          4022  => 'Standardised storage rack for use in automated cargo transfer system.',
          4023  => 'Standardised storage rack for use in automated cargo transfer system.',
          4024  => 'Standardised storage rack for use in automated cargo transfer system.',
          4025  => 'Standardised storage rack for use in automated cargo transfer system.',
          4026  => 'Standardised storage rack for use in automated cargo transfer system.',
          4027  => 'Standardised storage rack for use in automated cargo transfer system.',
          4028  => 'Standardised storage rack for use in automated cargo transfer system.',

          4031  => 'Specialised storage rack for use in automated cargo transfer system that can resist the effects of corrosive cargo.',
          4032  => 'Specialised storage rack for use in automated cargo transfer system that can resist the effects of corrosive cargo.',
          4033  => 'Specialised storage rack for use in automated cargo transfer system that can resist the effects of corrosive cargo.',
          4034  => 'Specialised storage rack for use in automated cargo transfer system that can resist the effects of corrosive cargo.',

        // Optional Internal > Standard Docking Computer
          4051  => 'Allows automated docking sequence at all starports and outposts.',

        // Optional Internal > Shield Generator
          4101  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4102  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4103  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4104  => 'An alternative shield generator that sacrifices overall shield strength for a much faster recharge rate.',
          4106  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4107  => 'An alternative shield generator that has higher than normal strength but requires a higher power draw and weight allowance.',

          4110  => 'Forms a continually regenerating protective energy shield around the vessel.', // Not in category
          4111  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4112  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4113  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4114  => 'An alternative shield generator that sacrifices overall shield strength for a much faster recharge rate.',
          4115  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4116  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4117  => 'An alternative shield generator that has higher than normal strength but requires a higher power draw and weight allowance.',

          4121  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4122  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4123  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4124  => 'An alternative shield generator that sacrifices overall shield strength for a much faster recharge rate.',
          4125  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4126  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4127  => 'An alternative shield generator that has higher than normal strength but requires a higher power draw and weight allowance.',

          4131  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4132  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4133  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4134  => 'An alternative shield generator that sacrifices overall shield strength for a much faster recharge rate.',
          4135  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4136  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4137  => 'An alternative shield generator that has higher than normal strength but requires a higher power draw and weight allowance.',

          4141  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4142  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4143  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4144  => 'An alternative shield generator that sacrifices overall shield strength for a much faster recharge rate.',
          4145  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4146  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4147  => 'An alternative shield generator that has higher than normal strength but requires a higher power draw and weight allowance.',

          4151  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4152  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4153  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4154  => 'An alternative shield generator that sacrifices overall shield strength for a much faster recharge rate.',
          4155  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4156  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4157  => 'An alternative shield generator that has higher than normal strength but requires a higher power draw and weight allowance.',

          4161  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4162  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4163  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4164  => 'An alternative shield generator that sacrifices overall shield strength for a much faster recharge rate.',
          4165  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4166  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4167  => 'An alternative shield generator that has higher than normal strength but requires a higher power draw and weight allowance.',

          4171  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4172  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4173  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4174  => 'An alternative shield generator that sacrifices overall shield strength for a much faster recharge rate.',
          4175  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4176  => 'Forms a continually regenerating protective energy shield around the vessel.',
          4177  => 'An alternative shield generator that has higher than normal strength but requires a higher power draw and weight allowance.',

        // Optional Internal > Shield Cell Bank
          4201  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4202  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4203  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4204  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4205  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4211  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4212  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4213  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4214  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4215  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4221  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4222  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4223  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4224  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4225  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4231  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4232  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4233  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4234  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4235  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4241  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4242  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4243  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4244  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4245  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4251  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4252  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4253  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4254  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4255  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4261  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4262  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4263  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4264  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4265  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4271  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4272  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4273  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4274  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4275  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

        // Optional Internal > Fuel Scoop
          4301  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4302  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4303  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4304  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4305  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4311  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4312  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4313  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4314  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4315  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4321  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4322  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4323  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4324  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4325  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4331  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4332  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4333  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4334  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4335  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4341  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4342  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4343  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4344  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4345  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4351  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4352  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4353  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4354  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4355  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4361  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4362  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4363  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4364  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4365  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

          4371  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4372  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4373  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4374  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',
          4375  => 'Device that uses pre-charged cells to rapidly repair active shields. No effect on collapsed shields.',

        // Optional Internal > Refinery
          4401  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4402  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4403  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4404  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4405  => 'Converts scooped fragments into usable resources (requires mining laser).',

          4411  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4412  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4413  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4414  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4415  => 'Converts scooped fragments into usable resources (requires mining laser).',

          4421  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4422  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4423  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4424  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4425  => 'Converts scooped fragments into usable resources (requires mining laser).',

          4431  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4432  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4433  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4434  => 'Converts scooped fragments into usable resources (requires mining laser).',
          4435  => 'Converts scooped fragments into usable resources (requires mining laser).',

        // Optional Internal > Frame Shift Drive Interdictor
          4501  => 'Used to pull targets out of supercruise.',
          4502  => 'Used to pull targets out of supercruise.',
          4503  => 'Used to pull targets out of supercruise.',
          4504  => 'Used to pull targets out of supercruise.',
          4505  => 'Used to pull targets out of supercruise.',

          4511  => 'Used to pull targets out of supercruise.',
          4512  => 'Used to pull targets out of supercruise.',
          4513  => 'Used to pull targets out of supercruise.',
          4514  => 'Used to pull targets out of supercruise.',
          4515  => 'Used to pull targets out of supercruise.',

          4521  => 'Used to pull targets out of supercruise.',
          4522  => 'Used to pull targets out of supercruise.',
          4523  => 'Used to pull targets out of supercruise.',
          4524  => 'Used to pull targets out of supercruise.',
          4525  => 'Used to pull targets out of supercruise.',

          4531  => 'Used to pull targets out of supercruise.',
          4532  => 'Used to pull targets out of supercruise.',
          4533  => 'Used to pull targets out of supercruise.',
          4534  => 'Used to pull targets out of supercruise.',
          4535  => 'Used to pull targets out of supercruise.',

        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4602  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4603  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4604  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4605  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',

          4621  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4622  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4623  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4624  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4625  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',

          4641  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4642  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4643  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4644  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4645  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',

          4661  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4662  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4663  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4664  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',
          4665  => 'Control unit that can program a blank limpet to hack a target\'s hold, causing cargo ejection.',

        // Optional Internal > Auto Field-Maintenance Unit
          4701  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4702  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4703  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4704  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4705  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',

          4711  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4712  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4713  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4714  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4715  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',

          4721  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4722  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4723  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4724  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4725  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',

          4731  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4732  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4733  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4734  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4735  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',

          4741  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4742  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4743  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4744  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4745  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',

          4751  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4752  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4753  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4754  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4755  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',

          4761  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4762  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4763  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4764  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4765  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',

          4771  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4772  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4773  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4774  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',
          4775  => 'Allows in-flight repair of internal ship modules. Can restore broken modules. Requires ammunition.',

        // Optional Internal > Hull Reinforcement Package
          4801  => 'Increases the ship\'s hull integrity and resistance to damage.',
          4802  => 'Increases the ship\'s hull integrity and resistance to damage.',

          4811  => 'Increases the ship\'s hull integrity and resistance to damage.',
          4812  => 'Increases the ship\'s hull integrity and resistance to damage.',

          4821  => 'Increases the ship\'s hull integrity and resistance to damage.',
          4822  => 'Increases the ship\'s hull integrity and resistance to damage.',

          4831  => 'Increases the ship\'s hull integrity and resistance to damage.',
          4832  => 'Increases the ship\'s hull integrity and resistance to damage.',

          4841  => 'Increases the ship\'s hull integrity and resistance to damage.',
          4842  => 'Increases the ship\'s hull integrity and resistance to damage.',

        // Optional Internal > Module Reinforcement Package
          4901  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has high damage capacity but low absorption of module damage. I.e. it can absorb a small proportion of module damage each time over a long period before running out of damage capacity.',
          4902  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has low damage capacity but high absorption of module damage. I.e. it can absorb a large proportion of module damage each time over a short period before running out of damage capacity.',

          4911  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has high damage capacity but low absorption of module damage. I.e. it can absorb a small proportion of module damage each time over a long period before running out of damage capacity.',
          4912  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has low damage capacity but high absorption of module damage. I.e. it can absorb a large proportion of module damage each time over a short period before running out of damage capacity.',

          4921  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has high damage capacity but low absorption of module damage. I.e. it can absorb a small proportion of module damage each time over a long period before running out of damage capacity.',
          4922  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has low damage capacity but high absorption of module damage. I.e. it can absorb a large proportion of module damage each time over a short period before running out of damage capacity.',

          4931  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has high damage capacity but low absorption of module damage. I.e. it can absorb a small proportion of module damage each time over a long period before running out of damage capacity.',
          4932  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has low damage capacity but high absorption of module damage. I.e. it can absorb a large proportion of module damage each time over a short period before running out of damage capacity.',

          4941  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has high damage capacity but low absorption of module damage. I.e. it can absorb a small proportion of module damage each time over a long period before running out of damage capacity.',
          4942  => 'Protects modules against weapons fire that penetrates the hull. This version of the module has low damage capacity but high absorption of module damage. I.e. it can absorb a large proportion of module damage each time over a short period before running out of damage capacity.',

        // Optional Internal > Collector Limpet Controller
          5001  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5002  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5003  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5004  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5005  => 'Controls limpets to collect canisters and asteroid chunks automatically.',

          5021  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5022  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5023  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5024  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5025  => 'Controls limpets to collect canisters and asteroid chunks automatically.',

          5041  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5042  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5043  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5044  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5045  => 'Controls limpets to collect canisters and asteroid chunks automatically.',

          5061  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5062  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5063  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5064  => 'Controls limpets to collect canisters and asteroid chunks automatically.',
          5065  => 'Controls limpets to collect canisters and asteroid chunks automatically.',

        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5102  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5103  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5104  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5105  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',

          5121  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5122  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5123  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5124  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5125  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',

          5141  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5142  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5143  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5144  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5145  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',

          5161  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5162  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5163  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5164  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',
          5165  => 'Controls a limpet to transfer 1 ton of fuel to a targeted ship.',

        // Optional Internal > Prospector Limpet Controller
          5201  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5202  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5203  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5204  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5205  => 'Controls a limpet to prospect an asteroid to discover its composition.',

          5221  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5222  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5223  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5224  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5225  => 'Controls a limpet to prospect an asteroid to discover its composition.',

          5241  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5242  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5243  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5244  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5245  => 'Controls a limpet to prospect an asteroid to discover its composition.',

          5261  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5262  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5263  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5264  => 'Controls a limpet to prospect an asteroid to discover its composition.',
          5265  => 'Controls a limpet to prospect an asteroid to discover its composition.',

        // Optional Internal > Passenger Cabin
          5311  => 'Economy Class Passenger Cabin.',

          5321  => 'Economy Class Passenger Cabin.',
          5322  => 'Business Class Passenger Cabin.',

          5331  => 'Economy Class Passenger Cabin.',
          5332  => 'Business Class Passenger Cabin.',
          5333  => 'First Class Passenger Cabin.',

          5341  => 'Economy Class Passenger Cabin.',
          5342  => 'Business Class Passenger Cabin.',
          5343  => 'First Class Passenger Cabin.',
          5344  => 'Luxury Class Passenger Cabin.',

          5351  => 'Economy Class Passenger Cabin.',
          5352  => 'Business Class Passenger Cabin.',
          5353  => 'First Class Passenger Cabin.',
          5354  => 'Luxury Class Passenger Cabin.',

        // Optional Internal > Planetary Vehicle Hangar
          5411  => 'A module designed to house ground-based vehicles.',
          5412  => 'A module designed to house ground-based vehicles.',

          5431  => 'A module designed to house ground-based vehicles.',
          5432  => 'A module designed to house ground-based vehicles.',

          5451  => 'A module designed to house ground-based vehicles.',
          5452  => 'A module designed to house ground-based vehicles.',

        // Optional Internal > Fighter Hangar
          5541  => 'A module designed to house ship launched vehicles.',

          5551  => 'A module designed to house ship launched vehicles.',

          5561  => 'A module designed to house ship launched vehicles.',

        // Optional Internal > Repair Limpet Controller
          5601  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5602  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5603  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5604  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5605  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',

          5621  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5622  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5623  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5624  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5625  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',

          5641  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5642  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5643  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5644  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5645  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',

          5661  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5662  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5663  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5664  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',
          5665  => 'Controls a limpet that repairs an amount of damage to the hull of a targeted ship.',

        // Optional Internal > Research Limpet Controller
          5701  => 'Controls a limpet that scrapes samples and bio-matter from the surface of an alien vessel.',

        // Optional Internal > Decontamination Limpet Controller
          5801  => 'Controls a limpet that removes caustic chemicals affecting a ship\'s hull, as well as applying a small amount of hull repair.',

          5821  => 'Controls a limpet that removes caustic chemicals affecting a ship\'s hull, as well as applying a small amount of hull repair.',

          5841  => 'Controls a limpet that removes caustic chemicals affecting a ship\'s hull, as well as applying a small amount of hull repair.',

          5861  => 'Controls a limpet that removes caustic chemicals affecting a ship\'s hull, as well as applying a small amount of hull repair.',

        // Optional Internal > Recon Limpet Controller
          5901  => 'Controls a limpet that can hack into data points.',

          5921  => 'Controls a limpet that can hack into data points.',

          5941  => 'Controls a limpet that can hack into data points.',

          5961  => 'Controls a limpet that can hack into data points.',

        // Optional Internal > Meta Alloy Hull Reinforcement
          6001  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',
          6002  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',

          6011  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',
          6012  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',

          6021  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',
          6022  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',

          6031  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',
          6032  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',

          6041  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',
          6042  => 'Increases the ship\'s hull integrity and resistance to caustic damage.',

        // Optional Internal > Guardian Hull Reinforcement
          6101  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',
          6102  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',

          6111  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',
          6112  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',

          6121  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',
          6122  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',

          6131  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',
          6132  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',

          6141  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',
          6142  => 'Powered module that increases the ship\'s hull integrity and resistance to Thargoid, caustic and thermic damage.',

        // Optional Internal > Guardian Shield Reinforcement
          6201  => 'Powered module that increases the ship\'s shield health.',
          6202  => 'Powered module that increases the ship\'s shield health.',

          6211  => 'Powered module that increases the ship\'s shield health.',
          6212  => 'Powered module that increases the ship\'s shield health.',

          6221  => 'Powered module that increases the ship\'s shield health.',
          6222  => 'Powered module that increases the ship\'s shield health.',

          6231  => 'Powered module that increases the ship\'s shield health.',
          6232  => 'Powered module that increases the ship\'s shield health.',

          6241  => 'Powered module that increases the ship\'s shield health.',
          6242  => 'Powered module that increases the ship\'s shield health.',

        // Optional Internal > Guardian Module Reinforcement
          6301  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',
          6302  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',
          6311  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',
          6312  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',
          6321  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',
          6322  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',
          6331  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',
          6332  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',
          6341  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',
          6342  => 'Powered module that protects a ships modules from any weapons fire penetrating the hull. It utilises it\'s own damage capacity to absorb a proportion of the damage applied to modules, eventually burning out when it\'s capacity reaches zero. This version is based on Guardian research and has resistances to Thargoid specific disruption technology.',

        // Cargo bay door (No category, not sellable, only for ship module list)
          9990  => 'Modular bay door allowing access to the ship\'s cargo racks.',
          9991  => 'Modular bay door allowing access to the ship\'s cargo racks.',
    ];
}

