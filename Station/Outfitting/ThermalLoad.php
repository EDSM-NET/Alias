<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ThermalLoad extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Thermal Load';

    /**
     * List of categories
     */
    static protected $have          = [
        'Beam Lasers',
        'Cannons',
        'Fragment Cannons',
        'Pulse Lasers',
        'Burst Lasers',
        'Multi-Cannons',
        'Plasma Accelerators',
        'Rail Guns',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1001  => 3.53,
          1002  => 5.11,
          1003  => 7.22,
          1004  => 9.93,

          1005  => 3.65,
          1006  => 5.32,
          1007  => 7.61,
          1008  => 10.62,

          1009  => 2.4,
          1010  => 3.53,
          1011  => 5.11,

          1021  => null,

          1031  => null,
          1032  => null,

        // Weapon Hardpoint > Pulse Laser
          1050  => null, // Not in category
          1051  => 0.33,
          1052  => 0.56,
          1053  => 0.96,
          1054  => 1.64,

          1055  => 0.31,
          1056  => 0.54,
          1057  => 0.92,
          1058  => 1.56,

          1059  => 0.19,
          1060  => 0.33,
          1061  => 0.56,

          1072  => 1,

        // Weapon Hardpoint > Burst Laser
          1101  => 0.38,
          1102  => 0.78,
          1103  => 1.7,
          1104  => 4.53,

          1105  => 0.34,
          1106  => 0.67,
          1107  => 1.42,
          1108  => 3.33,

          1109  => 0.19,
          1110  => 0.38,
          1111  => 0.78,

          1121  => 0.28,

        // Weapon Hardpoint > Cannon
          1151  => 1.38,
          1152  => 2.11,
          1153  => 3.2,
          1154  => 4.83,

          1155  => 1.25,
          1156  => 1.92,
          1157  => 2.93,
          1158  => 4.43,

          1159  => 0.67,
          1160  => 1.03,
          1161  => 1.58,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 0.41,
          1202  => 0.74,
          1203  => 1.13,

          1205  => 0.44,
          1206  => 0.84,
          1207  => 1.4,

          1209  => 0.2,
          1210  => 0.41,
          1211  => 0.74,

          1215  => 1.13,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 0.09,
          1252  => 0.18,
          1253  => 0.28,
          1254  => 0.39,

          1255  => 0.1,
          1256  => 0.2,
          1257  => 0.34,
          1258  => 0.51,

          1259  => 0.04,
          1260  => 0.09,
          1261  => 0.19,

          1271  => 0.18,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 15.58,
          1303  => 21.75,
          1304  => 29.459999,

          1313  => 11,

        // Weapon Hardpoint > Rail Gun
          1351  => 12,
          1352  => 20,

          1362  => 11,
    ];
}
