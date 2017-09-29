<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Damage extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Damage';
    
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
          1001  => 4,
          1002  => 5,
          1003  => 6,
          1004  => null,
          
          1005  => 4,
          1006  => 5,
          1007  => 6,
          1008  => null,
          
          1009  => 3,
          1010  => 4,
          1011  => 5,
        
        // Weapon Hardpoint > Pulse Laser
          1051  => 2,
          1052  => 3,
          1053  => 4,
          1054  => null,
          
          1055  => 2,
          1056  => 3,
          1057  => 4,
          1058  => null,
          
          1059  => 2,
          1060  => 2,
          1061  => 3,
        
        // Weapon Hardpoint > Burst Laser
          1101  => 2,
          1102  => 3,
          1103  => 4,
          1104  => null,
          
          1105  => 2,
          1106  => 3,
          1107  => 3,
          1108  => null,
          
          1109  => 1,
          1110  => 2,
          1111  => 3,
        
        // Weapon Hardpoint > Cannon
          1151  => 5,
          1152  => 6,
          1153  => 7,
          1154  => 9,
          
          1155  => 5,
          1156  => 6,
          1157  => 7,
          1158  => 8,
          
          1159  => 4,
          1160  => 5,
          1161  => 6,
        
        // Weapon Hardpoint > Fragment Cannon
          1201  => 2,
          1202  => 3,
          1203  => 3,
          
          1205  => 2,
          1206  => 2,
          1207  => 3,
          
          1209  => 1,
          1210  => 2,
          1211  => 2,
        
        // Weapon Hardpoint > Multi-Cannon
          1251  => 2,
          1252  => 2,
          1253  => null,
          1254  => null,
          
          1255  => 2,
          1256  => 2,
          1257  => null,
          1258  => null,
          
          1259  => null,
          1260  => 2,
        
        // Weapon Hardpoint > Plasma Accelerator
          1302  => 7,
          1303  => 9,
          1304  => 10,
        
        // Weapon Hardpoint > Rail Gun
          1351  => 6,
          1352  => 7,
        
        // Weapon Hardpoint > Missile Rack
          1401  => 6,
          1402  => 6,
          1405  => 7,
          1406  => 7,
        
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