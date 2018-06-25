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

class TechnologyBroker extends Alias
{
    use \EDSM\Alias\Commander\Synthesis;
    
    /**
     * List of names used in game
     */
    static protected $name      = [
         1  => 'Guardian Gauss Cannon [Fixed]',
         2  => 'Guardian Plasma Charger [Fixed, Medium]',
         3  => 'Guardian Plasma Charger [Turreted, Medium]',
         4  => 'Guardian Shard Cannon [Fixed, Medium]',
         5  => 'Guardian Shard Cannon [Turreted, Medium]',
         6  => 'Enzyme Missile Rack [Fixed]',
         7  => 'Remote Release Flechette Launcher [Fixed]',
         8  => 'Remote Release Flechette Launcher [Turreted]',
         9  => 'Shock Cannon [Fixed, Medium]',
        10  => 'Shock Cannon [Gimballed, Medium]',
        11  => 'Shock Cannon [Turreted, Medium]',
        12  => 'Guardian Power Plant',
        13  => 'Guardian Power Distributor',
        14  => 'Guardian Shield Reinforcement',
        15  => 'Guardian Hull Reinforcement',
        16  => 'Guardian Module Reinforcement',
        17  => 'Guardian FSD Booster',
        18  => 'Corrosion Resistant Cargo Rack',
        21  => 'Meta Alloy Hull Reinforcement',
        25  => 'Shock Cannon [Fixed, Large]',
        26  => 'Shock Cannon [Gimballed, Large]',
        27  => 'Shock Cannon [Turreted, Large]',
        28  => 'Guardian Shard Cannon [Fixed, Large]',
        29  => 'Guardian Shard Cannon [Turreted, Large]',
        30  => 'Guardian Plasma Charger [Fixed, Large]',
        31  => 'Guardian Plasma Charger [Turreted, Large]',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias     = [
        'hpt_guardian_gausscannon_fixed_medium'             => 1,
        'hpt_guardian_plasmalauncher_fixed_medium'          => 2,
        'hpt_guardian_plasmalauncher_turret_medium'         => 3,
        'hpt_guardian_shardcannon_fixed_medium'             => 4,
        'hpt_guardian_shardcannon_turret_medium'            => 5,
        
        'hpt_causticmissile_fixed_medium'                   => 6,
        
        'hpt_flechettelauncher_fixed_medium'                => 7,
        'hpt_flechettelauncher_turret_medium'               => 8,
        
        'hpt_plasmashockcannon_fixed_medium'                => 9,
        'hpt_plasmashockcannon_gimbal_medium'               => 10,
        'hpt_plasmashockcannon_turret_medium'               => 11,
        
        'int_guardianpowerplant_size2'                      => 12,
        'int_guardianpowerplant_size3'                      => 12,
        'int_guardianpowerplant_size4'                      => 12,
        'int_guardianpowerplant_size5'                      => 12,
        'int_guardianpowerplant_size6'                      => 12,
        'int_guardianpowerplant_size7'                      => 12,
        'int_guardianpowerplant_size8'                      => 12,
        
        'int_guardianpowerdistributor_size1'                => 13,
        'int_guardianpowerdistributor_size2'                => 13,
        'int_guardianpowerdistributor_size3'                => 13,
        'int_guardianpowerdistributor_size4'                => 13,
        'int_guardianpowerdistributor_size5'                => 13,
        'int_guardianpowerdistributor_size6'                => 13,
        'int_guardianpowerdistributor_size7'                => 13,
        'int_guardianpowerdistributor_size8'                => 13,
        
        'int_guardianshieldreinforcement_size1_class1'      => 14,
        'int_guardianshieldreinforcement_size1_class2'      => 14,
        'int_guardianshieldreinforcement_size2_class1'      => 14,
        'int_guardianshieldreinforcement_size2_class2'      => 14,
        'int_guardianshieldreinforcement_size3_class1'      => 14,
        'int_guardianshieldreinforcement_size3_class2'      => 14,
        'int_guardianshieldreinforcement_size4_class1'      => 14,
        'int_guardianshieldreinforcement_size4_class2'      => 14,
        'int_guardianshieldreinforcement_size5_class1'      => 14,
        'int_guardianshieldreinforcement_size5_class2'      => 14,
        
        'int_guardianhullreinforcement_size1_class1'        => 15,
        'int_guardianhullreinforcement_size1_class2'        => 15,
        'int_guardianhullreinforcement_size2_class1'        => 15,
        'int_guardianhullreinforcement_size2_class2'        => 15,
        'int_guardianhullreinforcement_size3_class1'        => 15,
        'int_guardianhullreinforcement_size3_class2'        => 15,
        'int_guardianhullreinforcement_size4_class1'        => 15,
        'int_guardianhullreinforcement_size4_class2'        => 15,
        'int_guardianhullreinforcement_size5_class1'        => 15,
        'int_guardianhullreinforcement_size5_class2'        => 15,
        
        'int_guardianmodulereinforcement_size1_class1'      => 16,
        'int_guardianmodulereinforcement_size1_class2'      => 16,
        'int_guardianmodulereinforcement_size2_class1'      => 16,
        'int_guardianmodulereinforcement_size2_class2'      => 16,
        'int_guardianmodulereinforcement_size3_class1'      => 16,
        'int_guardianmodulereinforcement_size3_class2'      => 16,
        'int_guardianmodulereinforcement_size4_class1'      => 16,
        'int_guardianmodulereinforcement_size4_class2'      => 16,
        'int_guardianmodulereinforcement_size5_class1'      => 16,
        'int_guardianmodulereinforcement_size5_class2'      => 16,
        
        'int_guardianfsdbooster_size1'                      => 17,
        'int_guardianfsdbooster_size2'                      => 17,
        'int_guardianfsdbooster_size3'                      => 17,
        'int_guardianfsdbooster_size4'                      => 17,
        'int_guardianfsdbooster_size5'                      => 17,
        
        'int_corrosionproofcargorack_size1_class1'          => 18,
        'int_corrosionproofcargorack_size1_class2'          => 18,
        'int_corrosionproofcargorack_size2_class1'          => 18,
        'int_corrosionproofcargorack_size4_class1'          => 18,
        
        'int_metaalloyhullreinforcement_size1_class1'       => 21,
        'int_metaalloyhullreinforcement_size1_class2'       => 21,
        'int_metaalloyhullreinforcement_size2_class1'       => 21,
        'int_metaalloyhullreinforcement_size2_class2'       => 21,
        'int_metaalloyhullreinforcement_size3_class1'       => 21,
        'int_metaalloyhullreinforcement_size3_class2'       => 21,
        'int_metaalloyhullreinforcement_size4_class1'       => 21,
        'int_metaalloyhullreinforcement_size4_class2'       => 21,
        'int_metaalloyhullreinforcement_size5_class1'       => 21,
        'int_metaalloyhullreinforcement_size5_class2'       => 21,
        
        'hpt_plasmashockcannon_fixed_large'                 => 25,
        'hpt_plasmashockcannon_gimbal_large'                => 26,
        'hpt_plasmashockcannon_turret_large'                => 27,
        'hpt_guardian_shardcannon_fixed_large'              => 28,
        'hpt_guardian_shardcannon_turret_large'             => 29,
        'hpt_guardian_plasmalauncher_fixed_large'           => 30,
        'hpt_guardian_plasmalauncher_turret_large'          => 31,
    ];
    
    /**
     * List of recipes used in game
     * 
     * Material Id => Count
     */
    static private $recipes         = [
        // Guardian Gauss Cannon [Fixed]
         1  => [
             'd44'  => 1,               // Guardian Weapon Blueprint Segment        * 1
                90  => 1,               // Guardian Power Cell                      * 1
                88  => 20,              // Guardian Technology Component            * 20
                38  => 15,              // Manganese                                * 15
            'c626'  => 6,               // Magnetic Emitter Coil                    * 6
        ],
        
        // Guardian Plasma Charger [Fixed, Medium]
         2  => [
             'd44'  => 1,               // Guardian Weapon Blueprint Segment        * 1
                89  => 1,               // Guardian Power Conduit                   * 1
                92  => 16,              // Guardian Sentinel Weapon Parts           * 16
                11  => 14,              // Chromium                                 * 14
            'c509'  => 8,               // Micro-Weave Cooling Hoses                * 8
        ],
        
        // Guardian Plasma Charger [Turreted, Medium]
         3  => [
             'd44'  => 2,               // Guardian Weapon Blueprint Segment        * 2
                89  => 2,               // Guardian Power Conduit                   * 2
                92  => 20,              // Guardian Sentinel Weapon Parts           * 20
                11  => 16,              // Chromium                                 * 16
            'c616'  => 8,               // Articulation Motors                      * 8
        ],
        
        // Guardian Shard Cannon [Fixed, Medium]
         4  => [
             'd44'  => 1,               // Guardian Weapon Blueprint Segment        * 1
                91  => 1,               // Guardian Sentinel Wreckage Components    * 1
                88  => 18,              // Guardian Technology Component            * 18
                 6  => 14,              // Carbon                                   * 14
            'c621'  => 12,              // Power Transfer Bus                       * 12
        ],
        
        // Guardian Shard Cannon [Turreted, Medium]
         5  => [
             'd44'  => 2,               // Guardian Weapon Blueprint Segment        * 2
                91  => 2,               // Guardian Sentinel Wreckage Components    * 2
                88  => 20,              // Guardian Technology Component            * 20
                 6  => 15,              // Carbon                                   * 15
            'c1117' => 12,              // Micro Controllers                        * 12
        ],
        
        // Enzyme Missile Rack [Fixed]
         6  => [
                78  => 16,              // Thargoid Energy Cell                     * 16
                80  => 16,              // Thargoid Organic Circuitry               * 16
                45  => 16,              // Molybdenum                               * 16
                70  => 15,              // Tungsten                                 * 15
            'c622'  => 6,               // Radiation Baffle                         * 6
        ],
        
        // Remote Release Flechette Launcher [Fixed]
         7  => [
                37  => 30,              // Iron                                     * 30
                45  => 30,              // Molybdenum                               * 30
                85  => 22,              // Rhenium                                  * 22
                26  => 26,              // Germanium                                * 26
            'c508'  => 8,               // CMM Composite                            * 8
        ],
        
        // Remote Release Flechette Launcher [Turret]
         8  => [
                37  => 28,              // Iron                                     * 28
                45  => 28,              // Molybdenum                               * 28
                85  => 20,              // Rhenium                                  * 20
                26  => 24,              // Germanium                                * 24
            'c616'  => 10,              // Articulation Motors                      * 10
        ],
        
        // Shock Cannon [Fixed, Medium]
         9  => [
                72  => 24,              // Vanadium                                 * 24
                70  => 24,              // Tungsten                                 * 24
                85  => 20,              // Rhenium                                  * 20
                65  => 28,              // Technetium                               * 28
            'c1118' => 6,               // Ion Distributor                          * 6
        ],
        
        // Shock Cannon [Gimballed, Medium]
        10  => [
                72  => 24,              // Vanadium                                 * 24
                70  => 24,              // Tungsten                                 * 24
                85  => 20,              // Rhenium                                  * 20
                65  => 28,              // Technetium                               * 28
            'c619'  => 10,              // Power Converter                          * 10
        ],
        
        // Shock Cannon [Turreted, Medium]
        11  => [
                72  => 24,              // Vanadium                                 * 24
                70  => 24,              // Tungsten                                 * 24
                85  => 20,              // Rhenium                                  * 20
                65  => 28,              // Technetium                               * 28
            'c621'  => 8,               // Power Transfer Bus                       * 8
        ],
        
        // Guardian Power Plant
        12  => [
             'd45'  => 1,               // Guardian Module Blueprint Segment        * 1
                89  => 1,               // Guardian Power Conduit                   * 1
             'd25'  => 21,              // Pattern Epsilon Obelisk Data             * 21
                31  => 15,              // Heat Resistant Ceramics                  * 15
            'c620'  => 10,              // Energy Grid Assembly                     * 10
        ],
        
        // Guardian Power Distributor
        13  => [
             'd45'  => 1,               // Guardian Module Blueprint Segment        * 1
             'd22'  => 1,               // Pattern Alpha Obelisk Data               * 1
                90  => 24,              // Guardian Power Cell                      * 24
                49  => 18,              // Phase Alloys                             * 18
            'c625'  => 6,               // Heatsink Interlink                       * 6
        ],
        
        // Guardian Shield Reinforcement
        14  => [
             'd45'  => 1,               // Guardian Module Blueprint Segment        * 1
                90  => 1,               // Guardian Power Cell                      * 1
                88  => 20,              // Guardian Technology Component            * 20
             'd24'  => 24,              // Pattern Delta Obelisk Data               * 24
           'c1119'  => 8,               // Hardware Diagnostic Sensor               * 8
        ],
        
        // Guardian Hull Reinforcement
        15  => [
             'd45'  => 1,               // Guardian Module Blueprint Segment        * 1
                91  => 1,               // Guardian Sentinel Wreckage Components    * 1
             'd23'  => 16,              // Pattern Beta Obelisk Data                * 16
             'd26'  => 16,              // Pattern Gamma Obelisk Data               * 16
            'c624'  => 12,              // Reinforced Mounting Plate                * 12
        ],
        
        // Guardian Module Reinforcement
        16  => [
             'd45'  => 1,               // Guardian Module Blueprint Segment        * 1
                91  => 1,               // Guardian Sentinel Wreckage Components    * 1
             'd25'  => 15,              // Pattern Epsilon Obelisk Data             * 15
                89  => 20,              // Guardian Power Conduit                   * 20
            'c624'  => 9,               // Reinforced Mounting Plate                * 9
        ],
        
        // Guardian FSD Booster
        17  => [
             'd45'  => 1,               // Guardian Module Blueprint Segment        * 1
                90  => 1,               // Guardian Power Cell                      * 1
                88  => 21,              // Guardian Technology Component            * 21
                24  => 24,              // Focus Crystals                           * 24
            'c617'  => 8,               // HN Shock Mount                           * 8
        ],
        
        // Corrosion Resistant Cargo Rack
        18  => [
            'c504'  => 16,              // Meta-Alloys                              * 16
                37  => 16,              // Iron                                     * 16
                 8  => 18,              // Chemical Manipulators                    * 18
            'c622'  => 22,              // Radiation Baffle                         * 22
            'c510'  => 12,              // Neofabric Insulation                     * 12
            
        ],
        
        // Meta Alloy Hull Reinforcement
        21  => [
            'c504'  => 16,              // Meta-Alloys                              * 16
                24  => 16,              // Focus Crystals                           * 16
              'd1'  => 22,              // Aberrant Shield Pattern Analysis         * 22
                17  => 20,              // Configurable Components                  * 20
            'c624'  => 12,              // Reinforced Mounting Plate                * 12
            
        ],
        
        // Shock Cannon [Fixed, Large]
        25  => [
                72  => 28,              // Vanadium                                 * 28
                70  => 28,              // Tungsten                                 * 28
                85  => 24,              // Rhenium                                  * 24
                65  => 26,              // Technetium                               * 26
             'c619' => 8,               // Power Converter                          * 8
        ],
        
        // Shock Cannon [Gimballed, Large]
        26  => [
                72  => 28,              // Vanadium                                 * 28
                70  => 28,              // Tungsten                                 * 28
                85  => 24,              // Rhenium                                  * 24
                65  => 22,              // Technetium                               * 22
             'c621' => 12,               // Power Transfer Bus                      * 12
        ],
        
        // Shock Cannon [Turreted, Large]
        27  => [
                72  => 26,              // Vanadium                                 * 26
                70  => 26,              // Tungsten                                 * 26
                85  => 22,              // Rhenium                                  * 22
                65  => 24,              // Technetium                               * 24
            'c1118' => 10,              // Ion Distributor                          * 10
        ],
        
        // Guardian Shard Cannon [Fixed, Large]
        28  => [
             'd44'  => 1,               // Guardian Weapon Blueprint Segment        * 1
                91  => 1,               // Guardian Sentinel Wreckage Components    * 1
                88  => 28,              // Guardian Technology Component            * 28
                 6  => 20,              // Carbon                                   * 20
           'c1117'  => 18,              // Micro Controllers                        * 18
        ],
        
        // Guardian Shard Cannon [Turreted, Large]
        29  => [
             'd44'  => 2,               // Guardian Weapon Blueprint Segment        * 2
                91  => 2,               // Guardian Sentinel Wreckage Components    * 2
                88  => 26,              // Guardian Technology Component            * 26
                 6  => 28,              // Carbon                                   * 28
           'c1117'  => 12,              // Micro Controllers                        * 12
        ],
        
        // Guardian Plasma Charger [Fixed, Large]
        30  => [
             'd44'  => 1,               // Guardian Weapon Blueprint Segment        * 1
                89  => 1,               // Guardian Power Conduit                   * 1
                92  => 20,              // Guardian Sentinel Weapon Parts           * 20
                11  => 28,              // Chromium                                 * 28
            'c509'  => 10,               // Micro-Weave Cooling Hoses               * 10
        ],
        
        // Guardian Plasma Charger [Turreted, Large]
        31  => [
             'd44'  => 2,               // Guardian Weapon Blueprint Segment        * 2
                89  => 2,               // Guardian Power Conduit                   * 2
                92  => 24,              // Guardian Sentinel Weapon Parts           * 24
                11  => 26,              // Chromium                                 * 26
            'c616'  => 10,               // Articulation Motors                     * 10
        ],
    ];
}