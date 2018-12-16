<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ShotSpeed extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Shot Speed';

    /**
     * List of categories
     */
    static protected $have          = [
        'Cannons',
        'Multi-Cannons',
        'Plasma Accelerators',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Cannon
          1151  => 1200,
          1152  => 1051.051025,
          1153  => 959.232605,
          1154  => 900,

          1155  => 1000,
          1156  => 875,
          1157  => 800,
          1158  => 750,

          1159  => 1000,
          1160  => 875,
          1161  => 800,

        // Weapon Hardpoint > Fragment Cannon
          1201  => null,
          1202  => null,
          1203  => null,

          1205  => null,
          1206  => null,
          1207  => null,

          1209  => null,
          1210  => null,
          1211  => null,

          1215  => null,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 1600,
          1252  => 1600,
          1253  => 1600,
          1254  => 1600,

          1255  => 1600,
          1256  => 1600,
          1257  => 1600,
          1258  => 1600,

          1259  => 1600,
          1260  => 1600,
          1261  => 1600,

          1271  => 1800,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 875,
          1303  => 875,
          1304  => 875,

          1313  => 875,

          1321  => null,
          1322  => null,
          1323  => null,

          1329  => null,
          1330  => null,
          1331  => null,

        // Weapon Hardpoint > Rail Gun
          1351  => null,
          1352  => null,

          1362  => null,
    ];
}
