<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 * 
 * Materials ID for the recipes are from Alias\Commander\Material
 */
 
namespace   Alias\Commander;
use         EDSM\Alias;

class Synthesis extends Alias
{
    use \EDSM\Alias\Commander\Synthesis;
    
    /**
     * List of names used in game
     */
    static protected $name      = [
         10 => 'FSD injection',
         20 => 'Plasma munitions',
         30 => 'Explosives munitions',
         40 => 'Small calibre munitions',
         50 => 'High velocity munitions',
         55 => 'Limpets',
         60 => 'Large calibre munitions',
         70 => 'AFM refill',
         74 => 'Chaff',
         75 => 'Heat Sinks',
         76 => 'Life Support',
         
         80 => 'SRV ammo restock',
         90 => 'SRV repair',
        100 => 'SRV refuel',
    ];
    
    /**
     * List of names used in game
     * 
     * Material Id => Count
     */
    static private $recipes         = [
        10  => [
            'basic'     => [
                 6  => 1,               // Carbon                   * 1
                72  => 1,               // Vanadium                 * 1
                26  => 1,               // Germanium                * 1
            ],
            'standard'  => [
                 6  => 1,               // Carbon                   * 1
                72  => 1,               // Vanadium                 * 1
                26  => 1,               // Germanium                * 1
                 5  => 1,               // Cadmium                  * 1
                47  => 1,               // Niobium                  * 1
            ],
            'premium'   => [
                 6  => 1,               // Carbon                   * 1 
                 2  => 1,               // Arsenic                  * 1
                26  => 1,               // Germanium                * 1
                47  => 1,               // Niobium                  * 1
                74  => 1,               // Yttrium                  * 1
                51  => 1,               // Polonium                 * 1
            ],
        ],
        20  => [
            'basic'     => [
                64  => 3,               // Sulphur                  * 3
                50  => 4,               // Phosphorus               * 4
                38  => 1,               // Manganese                * 1
            ],
            'standard'  => [
                50  => 5,               // Phosphorus               * 5
                38  => 3,               // Manganese                * 3
                61  => 1,               // Selenium                 * 1
                45  => 4,               // Molybdenum               * 4
            ],
            'premium'   => [
                61  => 5,               // Selenium                 * 5
                 5  => 4,               // Cadmium                  * 4
                45  => 4,               // Molybdenum               * 4
                65  => 2,               // Technetium               * 2
            ],
        ],
        30  => [
            'basic'     => [
                37  => 3,               // Iron                     * 3
                46  => 3,               // Nickel                   * 3
                 6  => 4,               // Carbon                   * 4
                64  => 4,               // Sulphur                  * 4
            ],
            'standard'  => [
                64  => 6,               // Sulphur                  * 6
                50  => 6,               // Phosphorus               * 6
                 2  => 4,               // Arsenic                  * 1
                42  => 2,               // Mercury                  * 2
            ],
            'premium'   => [
                50  => 5,               // Phosphorus               * 5
                 2  => 4,               // Arsenic                  * 1
                47  => 5,               // Niobium                  * 5
                42  => 5,               // Mercury                  * 5
                51  => 5,               // Polonium                 * 5
            ],
        ],
        40  => [
            'basic'     => [
                37  => 2,               // Iron                     * 2
                46  => 1,               // Nickel                   * 1
                64  => 2,               // Sulphur                  * 2
            ],
            'standard'  => [
                37  => 2,               // Iron                     * 2
                75  => 2,               // Zinc                     * 2
                50  => 2,               // Phosphorus               * 2
                61  => 2,               // Selenium                 * 2
                76  => 2,
            ],
            'premium'   => [
                64  => 2,               // Sulphur                  * 2
                50  => 2,               // Phosphorus               * 2
                70  => 2,               // Tungsten                 * 2
                76  => 2,               // Zirconium                * 2
                42  => 2,               // Mercury                  * 2
                 1  => 1,               // Antimony                 * 1
            ],
         ],
        50  => [
            'basic'     => [
                37  => 2,               // Iron                     * 2
                72  => 1,               // Vanadium                 * 1
            ],
            'standard'  => [
                37  => 4,               // Iron                     * 4
                72  => 3,               // Vanadium                 * 3
                70  => 2,               // Tungsten                 * 2
                76  => 2,               // Zirconium                * 2
            ],
            'premium'   => [
                72  => 4,               // Vanadium                 * 4
                70  => 4,               // Tungsten                 * 4
                76  => 2,               // Zirconium                * 2
                74  => 2,               // Yttrium                  * 2
            ],
        ],
        55  => [
            'basic'     => [
                37  => 10,              // Iron                     * 10
                46  => 10,              // Nickel                   * 10
            ],
        ],
        60  => [
            'basic'     => [
                46  => 4,               // Nickel                   * 4
                 6  => 3,               // Carbon                   * 6
                64  => 2,               // Sulphur                  * 2
            ],
            'standard'  => [
                69  => 2,
                75  => 3,               // Zinc                     * 3
                50  => 3,               // Phosphorus               * 3
                 2  => 1,               // Arsenic                  * 1
                76  => 2,               // Zirconium                * 2
            ],
            'premium'   => [
                75  => 8,               // Zinc                     * 8
                70  => 2,               // Tungsten                 * 2
                 2  => 1,               // Arsenic                  * 1
                42  => 1,               // Mercury                  * 1
                 1  => 2,               // Antimony                 * 1
            ],
        ],
        70  => [
            'basic'     => [
                46  => 2,               // Nickel                   * 2
                75  => 2,               // Zinc                     * 2
                11  => 2,               // Chromium                 * 2
                72  => 3,               // Vanadium                 * 3
            ],
            'standard'  => [
                69  => 1,
                38  => 2,               // Manganese                * 2
                72  => 6,               // Vanadium                 * 6
                45  => 1,               // Molybdenum               * 1
                76  => 1,               // Zirconium                * 1
            ],
            'premium'   => [
                75  => 2,               // Zinc                     * 2
                11  => 4,               // Chromium                 * 4
                72  => 6,               // Vanadium                 * 6
                76  => 2,               // Zirconium                * 2
                66  => 1,               // Tellurium                * 1
                59  => 1,               // Ruthenium                * 1
            ],
        ],
        74  => [
            'basic'     => [
                12  => 1,               // Compact Composites       * 1
                22  => 1,               // Filament Composites      * 1
            ],
            'standard'  => [
                12  => 1,               // Compact Composites       * 1
                22  => 2,               // Filament Composites      * 2
                68  => 1,               // Thermic Alloys           * 1
            ],
            'premium'   => [
                12  => 1,               // Compact Composites       * 1
                22  => 2,               // Filament Composites      * 2
                68  => 1,               // Thermic Alloys           * 1
                57  => 1,               // Proto Radiolic Alloys    * 1
            ],
        ],
        75  => [
            'basic'     => [
                 3  => 2,               // Basic Conductors         * 2
                28  => 2,               // Heat Conduction Wiring   * 2
            ],
            'standard'  => [
                 3  => 2,               // Basic Conductors         * 2
                28  => 2,               // Heat Conduction Wiring   * 2
                30  => 2,               // Heat Exchangers          * 2
            ],
            'premium'   => [
                3   => 2,               // Basic Conductors         * 2
                28  => 2,               // Heat Conduction Wiring   * 2
                30  => 2,               // Heat Exchangers          * 2
                55  => 1,               // Proto Heat Radiators     * 1
            ],
        ],
        76  => [
            'basic'     => [
                37  => 2,               // Iron                     * 2
                46  => 1,               // Nickel                   * 1
            ],
        ],
        
        80  => [
            'basic'     => [
                64  => 2,               // Sulphur                  * 2
                50  => 1,               // Phosphorus               * 1
            ],
            'standard'  => [
                50  => 1,               // Phosphorus               * 1
                38  => 1,               // Manganese                * 1
                61  => 1,               // Selenium                 * 1
                45  => 1,               // Molybdenum               * 1
            ],
            'premium'   => [
                50  => 2,               // Phosphorus               * 2
                61  => 2,               // Selenium                 * 2
                45  => 1,               // Molybdenum               * 1
                65  => 1,               // Technetium               * 1
            ],
        ],
        90  => [
            'basic'     => [
                37  => 2,               // Iron                     * 2
                46  => 1,               // Nickel                   * 1
            ],
            'standard'  => [
                46  => 3,               // Nickel                   * 3
                38  => 1,               // Manganese                * 1
                72  => 2,               // Vanadium                 * 2
                45  => 1,               // Molybdenum               * 1
            ],
            'premium'   => [
                75  => 1,               // Zinc                     * 1
                11  => 2,               // Chromium                 * 2
                72  => 2,               // Vanadium                 * 2
                70  => 1,               // Tungsten                 * 1
                66  => 1,               // Tellurium                * 1
            ],
        ],
        100 => [
            'basic'     => [
                64  => 1,               // Sulphur                  * 1
                50  => 1,               // Phosphorus               * 1
            ],
            'standard'  => [
                64  => 1,               // Sulphur                  * 1
                50  => 1,               // Phosphorus               * 1
                 2  => 1,               // Arsenic                  * 1
                42  => 1,               // Mercury                  * 1
            ],
            'premium'   => [
                64  => 1,               // Sulphur                  * 1
                 2  => 1,               // Arsenic                  * 1
                42  => 1,               // Mercury                  * 1
                65  => 1,               // Technetium               * 1
            ],
        ],
    ];
    
    static private $descriptions    = [
        10  => 'Materials can be injected into the frame shift drive, to provide a single use, enhanced jump, exceeding normal range limits. Injecting higher quality materials increases the range benefit for the jump.',
        20  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. Standard and premium offers a full restock and increased damage until the weapon is reloaded. Plasma munitions are used by PLASMA ACCELERATORS.',
        30  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. Standard and premium offers a full restock and increased damage until the weapon is reloaded. Explosives are used by MISSILES and MINES.',
        40  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. Standard and premium offers a full restock and increased damage until the weapon is reloaded. Small calibre munitions are used by MULTI-CANNONS.',
        50  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. Standard and premium offers a full restock and increased damage until the weapon is reloaded. High velocity munitions are used by RAILGUNS.',
        55  => 'Materials can be used by your ship to synthesise supplies. Basic synthesis will create up to four limpets in your ship\'s cargo hold, space permitting.',
        60  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. Standard and premium offers a full restock and increased damage until the weapon is reloaded. Large calibre munitions are used by CANNONS and FRAGMENTATION CANNONS.',
        70  => 'The auto field-maintenance module can be restocked by processing materials. AFM repairs using higher quality materials will repair at an increased rate.',
        74  => 'Materials can be used by your ship to synthesise supplies. Basic synthesis provides half of the chaff launcher\s supplies. Standard synthesis provides a full resupply and premium synthesis provides a full resupply and increases chaff duration until the utility is next resuplied.',
        75  => 'Materials can be used by your ship to synthesise supplies. Basic synthesis provides a full restock of the launcher\'s supplies. Standard  and premium synthesis provides a full resupply and increased heat dissipation until the utility is next resuplied.',
        76  => 'Materials can be used by your ship to synthesise supplies. Basic synthesis fully restocks the life support\'s emergency oxygen supply.',
        
        80  => 'The SRV\'s weapon system can use materials to resupply its ammunition store. Using higher quality materials to resupply the SRV weapon confers a damage bonus.',
        90  => 'The SRV\'s maintenance system can utilise materials to effect immediate structural repairs to the vehicule whilst deployer to a planet\'s surface. Higher quality materials will additionally confer an amount of damage resistance until further repairs are initiated.',
       100  => 'Materials can be injected into the SRV\'s power system to replenish its fuel supply. Injecting higher quality materials will improve the efficiency of the fuel, resulting in lower rates of fuel usage.',
    ];
    
    static private $bonus       = [
        10  => [
            'basic'     => 'Bonus +25% distance',
            'standard'  => 'Bonus +50% distance',
            'premium'   => 'Bonus +100% distance',
        ],
        20  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        30  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        40  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        50  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        60  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        70  => [
            'basic'     => null,
            'standard'  => 'Bonus +50% repair speed',
            'premium'   => 'Bonus +100% repair speed',
        ],
        74  => [
            'basic'     => null,
            'standard'  => null,
            'premium'   => 'Bonus +2 seconds duration',
        ],
        75  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% heat dissipation',
            'premium'   => 'Bonus +30% heat dissipation',
        ],
        
        80  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        90  => [
            'basic'     => null,
            'standard'  => 'Bonus +50% hull strength',
            'premium'   => 'Bonus +100% hull strength',
        ],
       100  => [
            'basic'     => null,
            'standard'  => 'Bonus +100% fuel efficiency',
            'premium'   => 'Bonus +200% fuel efficiency',
        ],
    ];
}