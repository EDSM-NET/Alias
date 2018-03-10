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
         2  => 'Guardian Plasma Charger [Fixed]',
         3  => 'Guardian Plasma Charger [Turreted]',
         6  => 'Enzyme Missile Rack [Fixed]',
         7  => 'Remote Release Flechette Launcher [Fixed]',
         8  => 'Remote Release Flechette Launcher [Turreted]',
         9  => 'Shock Cannon [Fixed]',
        10  => 'Shock Cannon [Gimballed]',
        11  => 'Shock Cannon [Turreted]',
        12  => 'Guardian Power Plant',
        18  => 'Corrosion Resistant Cargo Rack',
        21  => 'Meta Alloy Hull Reinforcement',
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
    ];
    
    /**
     * List of recipes used in game
     * 
     * Material Id => Count
     */
    static private $recipes         = [
        // Guardian Gauss Cannon [Fixed]
         1  => [
             'd44'  => 4,               // Guardian Weapon Blueprint Segment * 4
                90  => 36,              // Guardian Power Cell              * 36
                88  => 42,              // Guardian Technology Component    * 42
                38  => 30,              // Manganese                        * 30
            'c626'  => 10,              // Magnetic Emitter Coil            * 10
        ],
        
        // Guardian Plasma Charger [Fixed]
         2  => [
             'd44'  => 8,               // Guardian Weapon Blueprint Segment * 8
                89  => 38,              // Guardian Power Conduit           * 38
                92  => 34,              // Guardian Sentinel Weapon Parts   * 34
                11  => 28,              // Chromium                         * 28
            'c509'  => 12,              // Micro-Weave Cooling Hoses        * 12
        ],
        
        // Guardian Plasma Charger [Turreted]
         3  => [
             'd44'  => 10,              // Guardian Weapon Blueprint Segment * 10
                89  => 42,              // Guardian Power Conduit           * 42
                92  => 39,              // Guardian Sentinel Weapon Parts   * 39
                11  => 33,              // Chromium                         * 33
            'c616'  => 10,              // Articulation Motors              * 10
        ],
        
        // Enzyme Missile Rack [Fixed]
         6  => [
                78  => 30,              // Thargoid Energy Cell             * 30
                80  => 36,              // Thargoid Organic Circuitry       * 36
                45  => 34,              // Molybdenum                       * 34
                70  => 35,              // Tungsten                         * 35
            'c622'  => 6,               // Radiation Baffle                 * 6
        ],
        
        // Remote Release Flechette Launcher [Fixed]
         7  => [
                37  => 40,              // Iron                             * 40
                45  => 36,              // Molybdenum                       * 36
                85  => 28,              // Rhenium                          * 28
                26  => 32,              // Germanium                        * 32
            'c508'  => 8,               // CMM Composite                    * 8
        ],
        
        // Remote Release Flechette Launcher [Turret]
         8  => [
                37  => 36,              // Iron                             * 36
                45  => 32,              // Molybdenum                       * 32
                85  => 28,              // Rhenium                          * 28
                26  => 34,              // Germanium                        * 34
            'c616'  => 10,              // Articulation Motors              * 10
        ],
        
        // Shock Cannon [Fixed]
         9  => [
                72  => 30,              // Vanadium                         * 30
                70  => 30,              // Tungsten                         * 30
                85  => 36,              // Rhenium                          * 36
                65  => 30,              // Technetium                       * 30
            'c1118' => 6,               // Ion Distributor                  * 6
        ],
        
        // Shock Cannon [Gimballed]
        10  => [
                72  => 36,              // Vanadium                         * 36
                70  => 32,              // Tungsten                         * 32
                85  => 30,              // Rhenium                          * 30
                65  => 28,              // Technetium                       * 28
            'c619'  => 10,              // Power Converter                  * 10
        ],
        
        // Shock Cannon [Turreted]
        11  => [
                72  => 30,              // Vanadium                         * 30
                70  => 32,              // Tungsten                         * 32
                85  => 30,              // Rhenium                          * 30
                65  => 28,              // Technetium                       * 28
            'c621'  => 8,               // Power Transfer Bus               * 8
        ],
        
        // Guardian Power Plant
        12  => [
             'd45'  => 4,               // Guardian Module Blueprint Segment * 4
                89  => 36,              // Guardian Power Conduit           * 36
             'd25'  => 42,              // Pattern Epsilon Obelisk Data     * 42
                31  => 30,              // Heat Resistant Ceramics          * 30
            'c620'  => 10,              // Energy Grid Assembly             * 10
        ],
        
        // Corrosion Resistant Cargo Rack
        18  => [
            'c504'  => 28,              // Meta-Alloys                      * 28
                37  => 30,              // Iron                             * 30
                 8  => 18,              // Chemical Manipulators            * 18
            'c622'  => 30,              // Radiation Baffle                 * 30
            'c510'  => 12,              // Neofabric Insulation             * 12
            
        ],
        
        // Meta Alloy Hull Reinforcement
        21  => [
            'c504'  => 28,              // Meta-Alloys                      * 28
                24  => 30,              // Focus Crystals                   * 30
              'd1'  => 26,              // Aberrant Shield Pattern Analysis * 26
                17  => 20,              // Configurable Components          * 20
            'c624'  => 12,              // Reinforced Mounting Plate        * 12
            
        ],
    ];
}