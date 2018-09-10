<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DPS extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'DPS';
    
    /**
     * List of categories
     */
    static protected $have          = [
        // Weapon Hardpoint
        'Beam Laser',
        'Pulse Laser',
        'Burst Laser',
        'Cannon',
        'Fragment Cannon',
        'Multi-Cannon',
        'Plasma Accelerator',
        'Rail Gun',
        'Missile Rack',
        'Mine Launcher',
        'Mining Laser',
        'Torpedo Pylon',
        'Shock Mine Launcher',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Weapon Hardpoint > Beam Laser
          1001  => 3,
          1002  => 4,
          1003  => 5,
          1004  => null,
          
          1005  => 3,
          1006  => 4,
          1007  => 4,
          1008  => null,
          
          1009  => 3,
          1010  => 3,
          1011  => 4,
        
        // Weapon Hardpoint > Pulse Laser
          1051  => 3,
          1052  => 3,
          1053  => 4,
          1054  => null,
          
          1055  => 3,
          1056  => 3,
          1057  => 4,
          1058  => null,
          
          1059  => 2,
          1060  => 3,
          1061  => 3,
        
        // Weapon Hardpoint > Burst Laser
          1101  => 3,
          1102  => 4,
          1103  => 4,
          1104  => null,
          
          1105  => 3,
          1106  => 4,
          1107  => 4,
          1108  => null,
          
          1109  => 2,
          1110  => 3,
          1111  => 4,
        
        // Weapon Hardpoint > Cannon
          1151  => 3,
          1152  => 4,
          1153  => 4,
          1154  => 5,
          
          1155  => 5,
          1156  => 6,
          1157  => 7,
          1158  => 8,
          
          1159  => 3,
          1160  => 3,
          1161  => 4,
        
        // Weapon Hardpoint > Fragment Cannon
          1201  => 8,
          1202  => 9,
          1203  => 10,
          
          1205  => 7,
          1206  => 9,
          1207  => 10,
          
          1209  => 6,
          1210  => 9,
          1211  => 9,
        
        // Weapon Hardpoint > Multi-Cannon
          1251  => 3,
          1252  => 4,
          1253  => null,
          1254  => null,
          
          1255  => 3,
          1256  => 4,
          1257  => null,
          1258  => null,
          
          1259  => 2,
          1260  => 3,
        
        // Weapon Hardpoint > Plasma Accelerator
          1302  => 4,
          1303  => 4,
          1304  => 5,
        
        // Weapon Hardpoint > Rail Gun
          1351  => 4,
          1352  => 4,
        
        // Weapon Hardpoint > Missile Rack
          1401  => 3,
          1402  => 3,
          1405  => 8,
          1406  => 8,
        
        // Weapon Hardpoint > Mine Launcher
          1451  => null,
          1452  => null,
        
        // Weapon Hardpoint > Mining Laser
          1501  => null,
          1502  => null,
          
          1509  => null,
          1510  => null,
        
        // Weapon Hardpoint > Torpedo Pylon
          1551  => null,
          1552  => null,
        
        // Weapon Hardpoint > Shock Mine Launcher
          1601  => null,
    ];
}