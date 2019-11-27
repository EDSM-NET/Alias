<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DamageType extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Damage Type';

    /**
     * List of categories
     */
    static protected $have          = [

    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Burst Laser
          1101  => '$Kinetic;',
          1102  => '$Kinetic;',
          1103  => '$Kinetic;',
          1104  => '$Kinetic;',

          1105  => '$Kinetic;',
          1106  => '$Kinetic;',
          1107  => '$Kinetic;',
          1108  => '$Kinetic;',

          1109  => '$Kinetic;',
          1110  => '$Kinetic;',
          1111  => '$Kinetic;',

          1121  => '$Kinetic;',

        // Weapon Hardpoint > Cannon
          1151  => '$Kinetic;',
          1152  => '$Kinetic;',
          1153  => '$Kinetic;',
          1154  => '$Kinetic;',

          1155  => '$Kinetic;',
          1156  => '$Kinetic;',
          1157  => '$Kinetic;',
          1158  => '$Kinetic;',

          1159  => '$Kinetic;',
          1160  => '$Kinetic;',
          1161  => '$Kinetic;',

        // Weapon Hardpoint > Fragment Cannon
          1201  => '$Thermic;',
          1202  => '$Thermic;',
          1203  => '$Thermic;',

          1205  => '$Thermic;',
          1206  => '$Thermic;',
          1207  => '$Thermic;',

          1209  => '$Thermic;',
          1210  => '$Thermic;',
          1211  => '$Thermic;',

          1215  => '$Thermic;',

        // Weapon Hardpoint > Multi-Cannon
          1251  => '$Thermic;',
          1252  => '$Thermic;',
          1253  => '$Thermic;',
          1254  => '$Thermic;',

          1255  => '$Thermic;',
          1256  => '$Thermic;',
          1257  => '$Thermic;',
          1258  => '$Thermic;',

          1259  => '$Thermic;',
          1260  => '$Thermic;',
          1261  => '$Thermic;',

          1271  => '$Thermic;',

          1281  => '$Thermic;',
          1282  => '$Thermic;',

        // Weapon Hardpoint > Missile Rack
          1401  => '$Thermic;',
          1402  => '$Thermic;',
          1403  => '$Thermic;',

          1405  => '$Thermic;',
          1406  => '$Thermic;',
          1407  => '$Thermic;',

          1411  => '$Thermic;',
          1412  => '$Thermic;',
          1413  => '$Thermic;',

        // Weapon Hardpoint > Mine Launcher
          1451  => '$Thermic;',
          1452  => '$Thermic;',

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => '$Thermic;',

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => '$Thermic;',
    ];
}
