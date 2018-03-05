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
         16 => 'AX small calibre munitions',
         17 => 'Guardian plasma charger munitions',
         18 => 'Guardian gauss cannon munitions',
         19 => 'Enzyme missile launcher munitions',
         20 => 'Plasma munitions',
         30 => 'Explosives munitions',
         35 => 'AX remote flask munitions',
         36 => 'Flechette launcher munitions',
         40 => 'Small calibre munitions',
         50 => 'High velocity munitions',
         52 => 'Guardian shard cannon munitions',
         55 => 'Limpets',
         60 => 'Large calibre munitions',
         65 => 'Shock cannon munitions',
         66 => 'AX explosive munitions',
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
        // FSD injection
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
        
        // AX small calibre munitions
        16  => [
            'basic'     => [
                37  => 2,               // Iron                     * 2
                46  => 1,               // Nickel                   * 1
                64  => 2,               // Sulphur                  * 2
                84  => 2,               // Weapon parts             * 2
            ],
            'standard'  => [
                37  => 2,               // Iron                     * 2
                50  => 2,               // Phosphorus               * 2
                76  => 2,               // Zirconium                * 2
                71  => 3,               // Sensor fragment          * 3
                84  => 4,               // Weapon parts             * 4
            ],
            'premium'   => [
                37  => 3,               // Iron                     * 3
                50  => 2,               // Phosphorus               * 2
                76  => 2,               // Zirconium                * 2
                71  => 4,               // Sensor fragment          * 4
                77  => 2,               // Thargoid carapace        * 2
                84  => 6,               // Weapon parts             * 6
            ],
        ],
        
        // Guardian plasma charger munitions
        17  => [
            'basic'     => [
                11  => 3,               // Chromium                 * 3
                29  => 2,               // Heat Dispersion Plate    * 2
                89  => 3,               // Guardian Power Conduit   * 3
                91  => 4,               // Guardian Sentinel Wreckage Components * 4
            ],
            'standard'  => [
                11  => 4,               // Chromium                 * 4
                30  => 2,               // Heat Exchangers          * 2
                49  => 2,               // Phase Alloys             * 2
                90  => 2,               // Guardian Power Cell      * 2
                88  => 2,               // Guardian Technology Component * 2
            ],
            'premium'   => [
                11  => 6,               // Chromium                 * 6
                76  => 2,               // Zirconium                * 2
                30  => 4,               // Heat Exchangers          * 4
                49  => 6,               // Phase Alloys             * 6
                90  => 4,               // Guardian Power Cell      * 4
                92  => 3,               // Guardian Sentinel Weapon Parts * 3
            ],
        ],
        
        // Guardian gauss cannon munitions
        18  => [
            'basic'     => [
                38  => 3,               // Manganese                * 3
                24  => 2,               // Focus Crystals           * 2
                89  => 2,               // Guardian Power Conduit   * 2
                91  => 4,               // Guardian Sentinel Wreckage Components * 4
            ],
            'standard'  => [
                38  => 5,               // Manganese                * 5
                31  => 3,               // Heat Resistant Ceramics  * 3
                24  => 5,               // Focus Crystals           * 5
                89  => 4,               // Guardian Power Conduit   * 4
                92  => 3,               // Guardian Sentinel Weapon Parts * 3
            ],
            'premium'   => [
                38  => 8,               // Manganese                * 8
                31  => 4,               // Heat Resistant Ceramics  * 4
                22  => 6,               // Filament Composites      * 6
                24  => 10,              // Focus Crystals           * 10
            ],
        ],
        
        // Enzyme missile launcher munitions
        19  => [
            'basic'     => [
                37  => 3,               // Iron                     * 3
                64  => 3,               // Sulphur                  * 3
                83  => 4,               // Bio-Mechanical Conduits  * 4
                81  => 3,               // Propulsion Elements      * 3
                84  => 3,               // Weapon parts             * 3
                86  => 2,               // Lead                     * 2
            ],
            'standard'  => [
                64  => 6,               // Sulphur                  * 6
                70  => 4,               // Tungsten                 * 4
                83  => 5,               // Bio-Mechanical Conduits  * 5
                81  => 6,               // Propulsion Elements      * 6
                84  => 4,               // Weapon parts             * 4
                86  => 4,               // Lead                     * 4
            ],
            'premium'   => [
                50  => 5,               // Phosphorus               * 5
                70  => 4,               // Tungsten                 * 4
                83  => 6,               // Bio-Mechanical Conduits  * 6
                81  => 6,               // Propulsion Elements      * 6
                84  => 5,               // Weapon parts             * 5
                86  => 6,               // Lead                     * 6
            ],
        ],
        
        // Plasma munitions
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
        
        // Explosives munitions
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
        
        // AX remote flask munitions
        35  => [
            'basic'     => [
                46  => 4,               // Nickel                   * 4
                 6  => 3,               // Carbon                   * 3
                64  => 2,               // Sulphur                  * 2
            ],
            'standard'  => [
                69  => 2,               // Tin                      * 2
                75  => 3,               // Zinc                     * 3
                 2  => 1,               // Arsenic                  * 1
                79  => 3,               // Thargoid Technological Components * 3
                82  => 2,               // Wreckage Components      * 2
            ],
            'premium'   => [
                75  => 8,               // Zinc                     * 3
                70  => 2,               // Tungsten                 * 2
                 2  => 1,               // Arsenic                  * 1
                71  => 3,               // Sensor Fragment          * 3
                79  => 4,               // Thargoid Technological Components * 4
                84  => 1,               // Weapon Parts             * 1
            ],
        ],
        
        // Flechette launcher munitions
        36  => [
            'basic'     => [
                70  => 1,               // Tungsten                 * 1
                20  => 3,               // Electrochemical Arrays   * 3
                39  => 2,               // Mechanical Components    * 2
                87  => 2,               // Boron                    * 2
            ],
            'standard'  => [
                70  => 4,               // Tungsten                 * 4
                20  => 6,               // Electrochemical Arrays   * 6
                39  => 4,               // Mechanical Components    * 4
                87  => 4,               // Boron                    * 4
            ],
            'premium'   => [
                70  => 6,               // Tungsten                 * 6
                20  => 9,               // Electrochemical Arrays   * 9
                39  => 5,               // Mechanical Components    * 5
                87  => 6,               // Boron                    * 6
            ],
        ],
        
        // Small calibre munitions
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
        
        // High velocity munitions
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
        
        // Guardian shard cannon munitions
        52  => [
            'basic'     => [
                 6  => 3,               // Carbon                   * 3
                72  => 2,               // Vanadium                 * 2
                19  => 3,               // Crystal Shards           * 3
                90  => 3,               // Guardian Power Cell      * 3
                91  => 5,               // Guardian Sentinel Wreckage Components * 5
            ],
            'standard'  => [
                19  => 4,               // Crystal Shards           * 4
                90  => 2,               // Guardian Power Cell      * 2
                92  => 2,               // Guardian Sentinel Weapon Parts * 2
            ],
            'premium'   => [
                 6  => 8,               // Carbon                   * 8
                61  => 3,               // Selenium                 * 3
                72  => 4,               // Vanadium                 * 4
                19  => 8,               // Crystal Shards           * 8
            ],
        ],
        
        // Limpets
        55  => [
            'basic'     => [
                37  => 10,              // Iron                     * 10
                46  => 10,              // Nickel                   * 10
            ],
        ],
        
        // Large calibre munitions
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
        
        // Shock cannon munitions
        65  => [
            'basic'     => [
                27  => 3,               // Grid Resistors           * 3
                29  => 2,               // Heat Dispersion Plate    * 2
                24  => 2,               // Focus Crystals           * 2
                49  => 2,               // Phase Alloys             * 2
                86  => 2,               // Lead                     * 2
            ],
            'standard'  => [
                27  => 5,               // Grid Resistors           * 5
                29  => 3,               // Heat Dispersion Plate    * 3
                24  => 4,               // Focus Crystals           * 4
                49  => 5,               // Phase Alloys             * 5
                86  => 3,               // Lead                     * 3
            ],
            'premium'   => [
                27  => 7,               // Grid Resistors           * 7
                29  => 4,               // Heat Dispersion Plate    * 4
                24  => 6,               // Focus Crystals           * 6
                49  => 8,               // Phase Alloys             * 8
                86  => 5,               // Lead                     * 5
            ],
        ],
        
        // AX explosive munitions
        66  => [
            'basic'     => [
                37  => 3,               // Iron                     * 3
                46  => 3,               // Nickel                   * 3
                 6  => 4,               // Carbon                   * 4
                81  => 3,               // Propulsion Elements      * 3
            ],
            'standard'  => [
                64  => 6,               // Sulphur                  * 6
                50  => 6,               // Phosphorus               * 6
                42  => 2,               // Mercury                  * 2
                80  => 4,               // Thargoid Organic Circuitry * 4
                81  => 4,               // Propulsion Elements      * 4
            ],
            'premium'   => [
                70  => 5,               // Tungsten                 * 5
                42  => 4,               // Mercury                  * 4
                51  => 2,               // Polonium                 * 2
                83  => 5,               // Bio-Mechanical Conduits  * 5
                81  => 5,               // Propulsion Elements      * 5
                'd43' => 6,             // Ship Flight Data         * 6
            ],
        ],
        
        // AFM refill
        70  => [
            'basic'     => [
                46  => 2,               // Nickel                   * 2
                75  => 2,               // Zinc                     * 2
                11  => 2,               // Chromium                 * 2
                72  => 3,               // Vanadium                 * 3
            ],
            'standard'  => [
                69  => 1,               // Tin                      * 1
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
        
        // Chaff
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
        
        // Heat Sinks
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
        
        // Life Support
        76  => [
            'basic'     => [
                37  => 2,               // Iron                     * 2
                46  => 1,               // Nickel                   * 1
            ],
        ],
        
        // SRV ammo restock
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
        
        // SRV repair
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
        
        // SRV refuel
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
        10  => 'Materials can be injected into the frame shift drive, to provide a single use, enhanced jump, exceeding normal range limits. 
                Injecting higher quality materials increases the range benefit for the jump.',
        16  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity.
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Anti-Xeno Small Calibre Munitions are used by ANTI-XENO MULTI-CANNONS.',
        17  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Guardian Plasma Charger Munitions are used by GUARDIAN PLASMA CHARGERS.',
        18  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Guardian Gauss Cannon Munitions are used by GUARDIAN GAUSS CANNONS.',
        19  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Enzyme Missiles are used by ENZYME MISSILE LAUNCHERS.',
        20  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Plasma munitions are used by PLASMA ACCELERATORS.',
        30  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Explosives are used by MISSILES and MINES.',
        35  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Anti-Xeno Remote Flak Munitions are used by ANTI-XENO REMOTE FLAK LAUNCHERS.',
        36  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Flechette Launcher Munitions are used by FLECHETTE LAUNCHERS.',
        40  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Small calibre munitions are used by MULTI-CANNONS.',
        50  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. High velocity munitions are used by RAILGUNS.',
        52  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Guardian Shard Cannon Munitions are used by GUARDIAN SHARD CANNONS.',
        55  => 'Materials can be used by your ship to synthesise supplies. Basic synthesis will create up to four limpets in your ship\'s cargo hold, space permitting.',
        60  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Large calibre munitions are used by CANNONS and FRAGMENTATION CANNONS.',
        65  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Shock Cannon Munitions are used by SHOCK CANNONS.',
        66  => 'Materials can be used by your ship to synthesise ammunition. Basic synthesis provides half of a weapon\'s ammo capacity. 
                Standard and premium offers a full restock and increased damage until the weapon is reloaded. Anti-Xeno Explosive Munitions are used by ANTI-XENO DUMBFIRE MISSILES.',
        70  => 'The auto field-maintenance module can be restocked by processing materials. AFM repairs using higher quality materials will repair at an increased rate.',
        74  => 'Materials can be used by your ship to synthesise supplies. Basic synthesis provides half of the chaff launcher\s supplies. 
                Standard synthesis provides a full resupply and premium synthesis provides a full resupply and increases chaff duration until the utility is next resuplied.',
        75  => 'Materials can be used by your ship to synthesise supplies. Basic synthesis provides a full restock of the launcher\'s supplies. 
                Standard  and premium synthesis provides a full resupply and increased heat dissipation until the utility is next resuplied.',
        76  => 'Materials can be used by your ship to synthesise supplies. Basic synthesis fully restocks the life support\'s emergency oxygen supply.',
        
        80  => 'The SRV\'s weapon system can use materials to resupply its ammunition store. Using higher quality materials to resupply the SRV weapon confers a damage bonus.',
        90  => 'The SRV\'s maintenance system can utilise materials to effect immediate structural repairs to the vehicule whilst deployer to a planet\'s surface. 
                Higher quality materials will additionally confer an amount of damage resistance until further repairs are initiated.',
       100  => 'Materials can be injected into the SRV\'s power system to replenish its fuel supply. 
                Injecting higher quality materials will improve the efficiency of the fuel, resulting in lower rates of fuel usage.',
    ];
    
    static private $bonus       = [
        // FSD injection
        10  => [
            'basic'     => 'Bonus +25% distance',
            'standard'  => 'Bonus +50% distance',
            'premium'   => 'Bonus +100% distance',
        ],
        
        // AX small calibre munitions
        16  => [
            'basic'     => null,
            'standard'  => 'Bonus +5% damage',
            'premium'   => 'Bonus +10% damage',
        ],
        
        // Guardian plasma charger munitions
        17  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        // Guardian gauss cannon munitions
        18  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        // Enzyme missile launcher munitions
        19  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        // Plasma munitions
        20  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        // Explosives munitions
        30  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        // AX remote flask munitions
        35  => [
            'basic'     => null,
            'standard'  => 'Bonus +5% damage',
            'premium'   => 'Bonus +10% damage',
        ],
        
        // Flechette launcher munitions
        36  => [
            'basic'     => null,
            'standard'  => 'Bonus +5% damage',
            'premium'   => 'Bonus +10% damage',
        ],
        
        // Small calibre munitions
        40  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        // High velocity munitions
        50  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        // Guardian shard cannon munitions
        52  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        // Large calibre munitions
        60  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        
        
        // Shock cannon munitions
        65  => [
            'basic'     => null,
            'standard'  => 'Bonus +5% damage',
            'premium'   => 'Bonus +10% damage',
        ],
        
        // AX explosive munitions
        66 => [
            'basic'     => null,
            'standard'  => 'Bonus +5% damage',
            'premium'   => 'Bonus +10% damage',
        ],
        
        // AFM refill
        70  => [
            'basic'     => null,
            'standard'  => 'Bonus +50% repair speed',
            'premium'   => 'Bonus +100% repair speed',
        ],
        
        // Chaff
        74  => [
            'basic'     => null,
            'standard'  => null,
            'premium'   => 'Bonus +2 seconds duration',
        ],
        
        // Heat Sinks
        75  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% heat dissipation',
            'premium'   => 'Bonus +30% heat dissipation',
        ],
        
        // SRV ammo restock
        80  => [
            'basic'     => null,
            'standard'  => 'Bonus +15% damage',
            'premium'   => 'Bonus +30% damage',
        ],
        
        // SRV repair
        90  => [
            'basic'     => null,
            'standard'  => 'Bonus +50% hull strength',
            'premium'   => 'Bonus +100% hull strength',
        ],
        
        // SRV refuel
       100  => [
            'basic'     => null,
            'standard'  => 'Bonus +100% fuel efficiency',
            'premium'   => 'Bonus +200% fuel efficiency',
        ],
    ];
}