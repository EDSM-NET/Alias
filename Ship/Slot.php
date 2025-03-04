<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Ship;
use         EDSM\Alias;

class Slot extends Alias
{
    static protected $name      = [
           1    => 'Huge hardpoint',
           2    => 'Huge hardpoint',

          51    => 'Large hardpoint',
          52    => 'Large hardpoint',
          53    => 'Large hardpoint',
          54    => 'Large hardpoint',

         101    => 'Medium hardpoint',
         102    => 'Medium hardpoint',
         103    => 'Medium hardpoint',
         104    => 'Medium hardpoint',
         105    => 'Medium hardpoint',

         151    => 'Small hardpoint',
         152    => 'Small hardpoint',
         153    => 'Small hardpoint',
         154    => 'Small hardpoint',
         155    => 'Small hardpoint',
         156    => 'Small hardpoint',

         201    => 'Tiny hardpoint',
         202    => 'Tiny hardpoint',
         203    => 'Tiny hardpoint',
         204    => 'Tiny hardpoint',
         205    => 'Tiny hardpoint',
         206    => 'Tiny hardpoint',
         207    => 'Tiny hardpoint',
         208    => 'Tiny hardpoint',

         301    => 'Bulkheads',

         311    => 'Military compartment',
         312    => 'Military compartment',
         313    => 'Military compartment',

         351    => 'Reactor bay',

         401    => 'Thruster mounting',

         451    => 'FSD housing',

         501    => 'Environment control',

         551    => 'Power coupling',

         601    => 'Sensor suite',

         651    => 'Fuel store',

         701    => 'planetaryapproachsuite',

        1008    => 'Internal compartment',

        1102    => 'Internal slot (Max class 2)',
        1103    => 'Internal slot (Max class 3)',
        1104    => 'Internal slot (Max class 4)',
        1105    => 'Internal slot (Max class 5)',
        1106    => 'Internal slot (Max class 6)',
        1107    => 'Internal slot (Max class 7)',
        1108    => 'Internal slot (Max class 8)',

        1202    => 'Internal slot (Max class 2)',
        1203    => 'Internal slot (Max class 3)',
        1204    => 'Internal slot (Max class 4)',
        1205    => 'Internal slot (Max class 5)',
        1206    => 'Internal slot (Max class 6)',
        1207    => 'Internal slot (Max class 7)',
        1208    => 'Internal slot (Max class 8)',

        1301    => 'Internal slot (Max class 1)',
        1302    => 'Internal slot (Max class 2)',
        1303    => 'Internal slot (Max class 3)',
        1304    => 'Internal slot (Max class 4)',
        1305    => 'Internal slot (Max class 5)',
        1306    => 'Internal slot (Max class 6)',
        1307    => 'Internal slot (Max class 7)',

        1401    => 'Internal slot (Max class 1)',
        1402    => 'Internal slot (Max class 2)',
        1403    => 'Internal slot (Max class 3)',
        1404    => 'Internal slot (Max class 4)',
        1405    => 'Internal slot (Max class 5)',
        1406    => 'Internal slot (Max class 6)',

        1501    => 'Internal slot (Max class 1)',
        1502    => 'Internal slot (Max class 2)',
        1503    => 'Internal slot (Max class 3)',
        1504    => 'Internal slot (Max class 4)',
        1505    => 'Internal slot (Max class 5)',
        1506    => 'Internal slot (Max class 6)',

        1601    => 'Internal slot (Max class 1)',
        1602    => 'Internal slot (Max class 2)',
        1603    => 'Internal slot (Max class 3)',
        1604    => 'Internal slot (Max class 4)',
        1605    => 'Internal slot (Max class 5)',

        1701    => 'Internal slot (Max class 1)',
        1702    => 'Internal slot (Max class 2)',
        1703    => 'Internal slot (Max class 3)',
        1704    => 'Internal slot (Max class 4)',
        1705    => 'Internal slot (Max class 5)',

        1801    => 'Internal slot (Max class 1)',
        1802    => 'Internal slot (Max class 2)',
        1803    => 'Internal slot (Max class 3)',
        1804    => 'Internal slot (Max class 4)',

        1901    => 'Internal slot (Max class 1)',
        1902    => 'Internal slot (Max class 2)',
        1903    => 'Internal slot (Max class 3)',
        1904    => 'Internal slot (Max class 4)',

        2001    => 'Internal slot (Max class 1)',
        2003    => 'Internal slot (Max class 3)',
        2004    => 'Internal slot (Max class 4)',

        2101    => 'Internal slot (Max class 1)',
        2102    => 'Internal slot (Max class 2)',
        2103    => 'Internal slot (Max class 3)',

        2201    => 'Internal slot (Max class 1)',

        2301    => 'Internal slot (Max class 1)',
        2302    => 'Internal slot (Max class 2)',

        2401    => 'Internal slot (Max class 1)',

        9990    => 'Cargo hatch',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias     = [
        'hugehardpoint1'            => 1,
        'hugehardpoint2'            => 2,

        'largehardpoint1'           => 51,
        'largehardpoint2'           => 52,
        'largehardpoint3'           => 53,
        'largehardpoint4'           => 54,

        'mediumhardpoint1'          => 101,
        'mediumhardpoint2'          => 102,
        'mediumhardpoint3'          => 103,
        'mediumhardpoint4'          => 104,
        'mediumhardpoint5'          => 105,

        'smallhardpoint1'           => 151,
        'smallhardpoint2'           => 152,
        'smallhardpoint3'           => 153,
        'smallhardpoint4'           => 154,
        'smallhardpoint5'           => 155,
        'smallhardpoint6'           => 156,

        'tinyhardpoint1'            => 201,
        'tinyhardpoint2'            => 202,
        'tinyhardpoint3'            => 203,
        'tinyhardpoint4'            => 204,
        'tinyhardpoint5'            => 205,
        'tinyhardpoint6'            => 206,
        'tinyhardpoint7'            => 207,
        'tinyhardpoint8'            => 208,

        'armour'                    => 301,

        'military01'                => 311,
        'military02'                => 312,
        'military03'                => 313,

        'powerplant'                => 351,

        'mainengines'               => 401,

        'frameshiftdrive'           => 451,

        'lifesupport'               => 501,

        'powerdistributor'          => 551,

        'radar'                     => 601,

        'fueltank'                  => 651,

        'planetaryapproachsuite'    => 701,

        'slot00_size8'              => 1008,

        'slot01_size2'              => 1102,
        'slot01_size3'              => 1103,
        'slot01_size4'              => 1104,
        'slot01_size5'              => 1105,
        'slot01_size6'              => 1106,
        'slot01_size7'              => 1107,
        'slot01_size8'              => 1108,

        'slot02_size2'              => 1202,
        'slot02_size3'              => 1203,
        'slot02_size4'              => 1204,
        'slot02_size5'              => 1205,
        'slot02_size6'              => 1206,
        'slot02_size7'              => 1207,
        'slot02_size8'              => 1208,

        'slot03_size1'              => 1301,
        'slot03_size2'              => 1302,
        'slot03_size3'              => 1303,
        'slot03_size4'              => 1304,
        'slot03_size5'              => 1305,
        'slot03_size6'              => 1306,
        'slot03_size7'              => 1307,

        'slot04_size1'              => 1401,
        'slot04_size2'              => 1402,
        'slot04_size3'              => 1403,
        'slot04_size4'              => 1404,
        'slot04_size5'              => 1405,
        'slot04_size6'              => 1406,

        'slot05_size1'              => 1501,
        'slot05_size2'              => 1502,
        'slot05_size3'              => 1503,
        'slot05_size4'              => 1504,
        'slot05_size5'              => 1505,
        'slot05_size6'              => 1506,

        'slot06_size1'              => 1601,
        'slot06_size2'              => 1602,
        'slot06_size3'              => 1603,
        'slot06_size4'              => 1604,
        'slot06_size5'              => 1605,

        'slot07_size1'              => 1701,
        'slot07_size2'              => 1702,
        'slot07_size3'              => 1703,
        'slot07_size4'              => 1704,
        'slot07_size5'              => 1705,

        'slot08_size1'              => 1801,
        'slot08_size2'              => 1802,
        'slot08_size3'              => 1803,
        'slot08_size4'              => 1804,

        'slot09_size1'              => 1901,
        'slot09_size2'              => 1902,
        'slot09_size3'              => 1903,
        'slot09_size4'              => 1904,

        'slot10_size1'              => 2001,
        'slot10_size3'              => 2003,
        'slot10_size4'              => 2004,

        'slot11_size1'              => 2101,
        'slot11_size2'              => 2102,
        'slot11_size3'              => 2103,

        'slot12_size1'              => 2201,

        'slot13_size1'              => 2301,
        'slot13_size2'              => 2302,

        'slot14_size1'              => 2401,

        'cargohatch'                => 9990,
    ];
}