<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Engineer\Blueprint;
use         EDSM\Alias;

class Description extends Alias
{
    /**
     * List of description per blueprint
     */
    static protected $name  = [
        // HARDPOINT - Beam Laser
        101     => 'Installing this weapon blueprint reduces thermal load and power draw.',                                                                             // Efficient
        102     => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        103     => 'Mass and power draw are increased with this weapon blueprint to increase range and prevent damage falloff over distance.',                          // Long range
        104     => 'This weapon modification increases power draw and heat to increase damage output.',                                                                 // Overcharged
        105     => 'Range is reduced and heat increased to enhance the weapon\'s damage with this modification.',                                                       // Short range
        106     => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy
        
        // HARDPOINT - Burst Laser
        201     => 'Installing this weapon blueprint reduces thermal load and power draw.',                                                                             // Efficient
        202     => 'With this weapon enhancement thermal load is sacrificed for increased range and armour piercing capability.',                                       // Focused
        203     => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        204     => 'Mass and power draw are increased with this weapon blueprint to increase range and prevent damage falloff over distance.',                          // Long range
        205     => 'This weapon modification increases power draw and heat to increase damage output.',                                                                 // Overcharged
        206     => 'This weapon enhancement reduces accuracy and damage per shot to increase fire rate and reduce reload times.',                                       // Rapid fire
        207     => 'Range is reduced and heat increased to enhance the weapon\'s damage with this modification.',                                                       // Short range
        208     => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy
        
        // HARDPOINT - Cannon
        301     => 'Installing this weapon blueprint reduces thermal load and power draw.',                                                                             // Efficient
        302     => 'Increased mass and power draw are traded for increased ammo capacity and a faster fire rate with this weapon blueprint.',                           // High capacity
        303     => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        304     => 'Mass and power draw are increased with this weapon blueprint to increase range and prevent damage falloff over distance.',                          // Long range
        305     => 'This weapon modification increases power draw and heat to increase damage output.',                                                                 // Overcharged
        306     => 'This weapon enhancement reduces accuracy and damage per shot to increase fire rate and reduce reload times.',                                       // Rapid fire
        307     => 'Range is reduced and heat increased to enhance the weapon\'s damage with this modification.',                                                       // Short range
        308     => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy
        
        // HARDPOINT - Fragment Cannon
        401     => 'This weapon modification enables a double shot burst of fire per trigger pull, but at a cost of decreased range.',                                  // Double shot
        402     => 'Installing this weapon blueprint reduces thermal load and power draw.',                                                                             // Efficient
        403     => 'Increased mass and power draw are traded for increased ammo capacity and a faster fire rate with this weapon blueprint.',                           // High capacity
        404     => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        405     => 'This weapon modification increases power draw and heat to increase damage output.',                                                                 // Overcharged
        406     => 'This weapon enhancement reduces accuracy and damage per shot to increase fire rate and reduce reload times.',                                       // Rapid fire
        407     => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy
        
        // HARDPOINT - Mine Launcher
        501     => 'Increased mass and power draw are traded for increased ammo capacity and a faster fire rate with this weapon blueprint.',                           // High capacity
        502     => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        503     => 'This weapon enhancement reduces accuracy and damage per shot to increase fire rate and reduce reload times.',                                       // Rapid fire
        504     => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy
        
        // HARDPOINT - Missile Rack
        601     => 'Increased mass and power draw are traded for increased ammo capacity and a faster fire rate with this weapon blueprint.',                           // High capacity
        602     => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        603     => 'This weapon enhancement reduces accuracy and damage per shot to increase fire rate and reduce reload times.',                                       // Rapid fire
        604     => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy
        
        // HARDPOINT - Multi-cannon
        701     => 'Installing this weapon blueprint reduces thermal load and power draw.',                                                                             // Efficient
        702     => 'Increased mass and power draw are traded for increased ammo capacity and a faster fire rate with this weapon blueprint.',                           // High capacity
        703     => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        704     => 'Mass and power draw are increased with this weapon blueprint to increase range and prevent damage falloff over distance.',                          // Long range
        705     => 'This weapon modification increases power draw and heat to increase damage output.',                                                                 // Overcharged
        706     => 'This weapon enhancement reduces accuracy and damage per shot to increase fire rate and reduce reload times.',                                       // Rapid fire
        707     => 'Range is reduced and heat increased to enhance the weapon\'s damage with this modification.',                                                       // Short range
        708     => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy

        // HARDPOINT - Plasma Accelerator
        801     => 'Installing this weapon blueprint reduces thermal load and power draw.',                                                                             // Efficient
        802     => 'With this weapon enhancement thermal load is sacrificed for increased range and armour piercing capability.',                                       // Focused
        803     => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        804     => 'Mass and power draw are increased with this weapon blueprint to increase range and prevent damage falloff over distance.',                          // Long range
        805     => 'This weapon modification increases power draw and heat to increase damage output.',                                                                 // Overcharged
        806     => 'This weapon enhancement reduces accuracy and damage per shot to increase fire rate and reduce reload times.',                                       // Rapid fire
        807     => 'Range is reduced and heat increased to enhance the weapon\'s damage with this modification.',                                                       // Short range
        808     => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy

        // HARDPOINT - Pulse Laser
        901     => 'Installing this weapon blueprint reduces thermal load and power draw.',                                                                             // Efficient
        902     => 'With this weapon enhancement thermal load is sacrificed for increased range and armour piercing capability.',                                       // Focused
        903     => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        904     => 'Mass and power draw are increased with this weapon blueprint to increase range and prevent damage falloff over distance.',                          // Long range
        905     => 'This weapon modification increases power draw and heat to increase damage output.',                                                                 // Overcharged
        906     => 'This weapon enhancement reduces accuracy and damage per shot to increase fire rate and reduce reload times.',                                       // Rapid fire
        907     => 'Range is reduced and heat increased to enhance the weapon\'s damage with this modification.',                                                       // Short range
        908     => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy
        
        // HARDPOINT - Rail Gun
        1001    => 'Increased mass and power draw are traded for increased ammo capacity and a faster fire rate with this weapon blueprint.',                           // High capacity
        1002    => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        1003    => 'Mass and power draw are increased with this weapon blueprint to increase range and prevent damage falloff over distance.',                          // Long range
        1004    => 'Range is reduced and heat increased to enhance the weapon\'s damage with this modification.',                                                       // Short range
        1005    => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy

        // HARDPOINT - Seeker Missile Rack
        1101    => 'Increased mass and power draw are traded for increased ammo capacity and a faster fire rate with this weapon blueprint.',                           // High capacity
        1102    => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        1103    => 'This weapon enhancement reduces accuracy and damage per shot to increase fire rate and reduce reload times.',                                       // Rapid fire
        1104    => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy

        // HARDPOINT - Torpedo Pylon
        1201    => 'Module integrity is decreased with this weapon modification, in exchange for significantly decreased mass and improved power efficiency.',          // Lightweight
        1202    => 'Mass is increased with this weapon blueprint to raise module integrity and reduce heat generation.',                                                // Sturdy
        
        // UTILITY MOUNT - Chaff Launcher
        10101   => 'Increases the chaff launcher\'s ammo capacity, but at the cost of increased reload time and mass.',                                                 // Ammo capacity
        10102   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        10103   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        10104   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // UTILITY MOUNT - Electronic Countermeasure
        10201   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        10202   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        10203   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // UTILITY MOUNT - Frame Shift Wake Scanner
        10301   => 'Improves the rate of the scanner at the expense of range and integrity.',                                                                           // Fast scan
        10302   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        10303   => 'Improves the range of the scanner by increasing the power draw and narrowing the scanning angle.',                                                  // Long range
        10304   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        10305   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        10306   => 'Improves the angle at which the scanner can work but increases mass and scanning time.',                                                            // Wide angle
        
        // UTILITY MOUNT - Heat Sink Launcher
        10401   => 'Increases the heatsink launcher\'s ammo capacity, but at the cost of increased reload time and mass.',                                              // Ammo capacity
        10402   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        10403   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        10404   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // UTILITY MOUNT - Kill Warrant Scanner
        10501   => 'Improves the rate of the scanner at the expense of range and integrity.',                                                                           // Fast scan
        10502   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        10503   => 'Improves the range of the scanner by increasing the power draw and narrowing the scanning angle.',                                                  // Long range
        10504   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        10505   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        10506   => 'Improves the angle at which the scanner can work but increases mass and scanning time.',                                                            // Wide angle
        
        // UTILITY MOUNT - Manifest Scanner
        10601   => 'Improves the rate of the scanner at the expense of range and integrity.',                                                                           // Fast scan
        10602   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        10603   => 'Improves the range of the scanner by increasing the power draw and narrowing the scanning angle.',                                                  // Long range
        10604   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        10605   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        10606   => 'Improves the angle at which the scanner can work but increases mass and scanning time.',                                                            // Wide angle
        
        // UTILITY MOUNT - Point Defence
        10701   => 'Increases the point defence\'s ammo capacity, but at the cost of increased reload time and mass.',                                                  // Ammo capacity
        10702   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        10703   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        10704   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // UTILITY MOUNT - Shield Booster
        10801   => 'Kinetic and thermal resistance is lost to gain better explosive damage resistance with this blueprint.',                                            // Blast resistant
        10802   => 'Mass is increased by this modification to improve shield boosting and module integrity.',                                                           // Heavy duty
        10803   => 'This enhancement sacrifices thermal and explosive resistance for better kinetic resistance.',                                                       // Kinetic resistant
        10804   => 'Power draw and integrity are compromised by the modification, but with the advantage of increased overall damage resistance.',                      // Resistance augmented
        10805   => 'With this blueprint, kinetic and explosive resistance are lost in preference for enhanced thermal resistance.',                                     // Thermal resistant
        
        // OPTIONAL INTERNAL - Auto Field-Maintenance Unit
        20101   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // OPTIONAL INTERNAL - Collector Limpet Controller
        20201   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        20202   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        20203   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // OPTIONAL INTERNAL - Detailed Surface Scanner
        20301   => 'Improves the rate of the scanner at the expense of range and integrity.',                                                                           // Fast scan
        20302   => 'Improves the range of the scanner by increasing the power draw and narrowing the scanning angle.',                                                  // Long range
        20303   => 'Improves the angle at which the scanner can work but increases mass and scanning time.',                                                            // Wide angle
        
        // OPTIONAL INTERNAL - Frame Shift Drive Interdictor
        20401   => 'This modification trades power draw and range for an increased capture arc.',                                                                       // Expanded capture arc
        20402   => 'To increase the range, this blueprint gains mass and power draw, and also requires a more accurate aim.',                                           // Long range

        // OPTIONAL INTERNAL - Fuel Scoop
        20501   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
                
        // OPTIONAL INTERNAL - Fuel Transfer Limpet Controller
        20601   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        20602   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        20603   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // OPTIONAL INTERNAL - Hatch Breaker Limpet Controller
        20701   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        20702   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        20703   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // OPTIONAL INTERNAL - Hull Reinforcement Package
        20801   => 'With this modification kinetic and thermal resistance is reduced, but with the benefit of improved explosion resistance and a small integrity increase.', // Blast resistant
        20802   => 'With this blueprint mass is increased, but with the benefit of better integrity reinforcement.',                                                    // Heavy duty
        20803   => 'This modification reduces thermal and explosive resistance to add better kinetic resistance and a small integrity increase.',                       // Kinetic resistant
        20804   => 'With this enhancement the module\'s mass is reduced and also receives a global integrity boost, but at the cost of integrity reinforcement.',       // Lightweight
        20805   => 'Kinetic and explosive resistance is traded for better thermal resistance and a small integrity increase with this blueprint.',                      // Thermal resistant
        
        // OPTIONAL INTERNAL - Prospector Limpet Controller
        20901   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        20902   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        20903   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // OPTIONAL INTERNAL - Refinery
        21001   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // OPTIONAL INTERNAL - Shield Cell Bank
        21101   => 'This blueprint increases boot up time and loses duration to gain faster spin up times and faster shield restoration when used.',                    // Rapid charge
        21102   => 'Module integrity is lowered and power draw increased with this modification, in exchange for quicker boot up times and better thermal load handling.', // Specialised
        
        // OPTIONAL INTERNAL - Shield Generator
        21201   => 'Module integrity is lost and mass reduced with this enhancement to decrease power draw and generate stronger shields.',                             // Enhanced low power
        21202   => 'Thermal resistance is traded for increased kinetic resistance and increased module integrity with this blueprint.',                                 // Kinetic resistant
        21203   => 'This modification trades broken shield recovery time and energy requirements for stronger shields.',                                                // Reinforced
        21204   => 'Applying this blueprint will reduce kinetic resistance and increase both thermal resistance and module integrity.',                                 // Thermal resistant
        
        // CORE INTERNAL - Frame Shift Drive
        30101   => 'This blueprint speeds up boot up times and gives a small range increase, at the cost of module integrity and power draw.',                          // Faster boot sequence
        30102   => 'Longer range jumps are allowed with this modification, but at the cost of module integrity, power draw and higher mass.',                           // Increased range
        30103   => 'A small increase to mass is offset by improved Integrity and heat generation, along with a small increase to range.',                               // Shielded
        
        // CORE INTERNAL - Life Support
        30201   => 'Reduces the module\'s mass, but at the expense of reduced integrity.',                                                                              // Lightweight
        30202   => 'Improves the module\'s integrity, but at the expense of increased mass.',                                                                           // Reinforced
        30203   => 'Increases the module\'s integrity, but at the cost of passive power draw.',                                                                         // Shielded
        
        // CORE INTERNAL - Power Distributor
        30301   => 'This blueprint impacts overall power capacity while providing a faster overall charge rate.',                                                       // Charge enhanced
        30302   => 'System and weapon capacity and charge rates are reduced in return for increased engine capacity and charge rate.',                                  // Engine focused
        30303   => 'Module integrity is increased, charge rate is lost for increased overall power capacity with this enhancement.',                                    // High charge capacity
        30304   => 'Mass is increased to gain increased module integrity and reduced power draw with this blueprint.',                                                  // Shielded
        30305   => 'This enhancement loses engine and weapon capacity and charge rate in exchange for increased system capacity and charge rate.',                      // System focused
        30306   => 'Engine and system capacity and charge rate are lost to gain increased weapon capacity and charge rate with this modification.',                     // Weapon focused
        
        // CORE INTERNAL - Power Plant
        30401   => 'Module integrity is improved with this blueprint, allowing small improvements to power generation and heat efficiency, at the cost of increased mass.', // Armoured
        30402   => 'Power generation is lost and mass increased to improve thermal handling.',                                                                          // Low emissions
        30403   => 'This enhancement loses module integrity and increases thermal load to provide increased power generation.',                                         // Overcharged
        
        // CORE INTERNAL - Sensors
        30501   => 'Lowers the mass of the scanner by narrowing the passive scanning angle and decreasing the integrity.',                                              // Lightweight
        30502   => 'Improves the range of the scanner by increasing the power draw and narrowing the scanning angle.',                                                  // Long range
        30503   => 'Improves the angle at which the scanner can work but increases mass and scanning time.',                                                            // Wide angle
        
        // CORE INTERNAL - Thrusters
        30601   => 'Power draw and mass requirements are sacrificed for better thermal handling and performance with this enhancement.',                                // Clean
        30602   => 'With this blueprint, a drive\'s integrity, thermal load and power draw are sacrificed for increased performance.',                                  // Dirty
        30603   => 'Increased mass is traded for better thermal load and integrity with this modification.',                                                            // Reinforced
        
        // ARMOUR
        40101   => 'This armour based modification trades kinetic and thermal resistance for better resistance against explosions.',                                    // Blast resistant
        40102   => 'This armour based enhancement trades higher mass for increased integrity reinforcement.',                                                           // Heavy duty
        40103   => 'This armour based blueprint sacrifices thermal and explosive resistance for better kinetic damage resistance.',                                     // Kinetic resistant
        40104   => 'This armour based blueprint degrades integrity reinforcement for lower mass and a global integrity boost.',                                         // Lightweight
        40105   => 'This modification loses kinetic and explosive resistance for improved thermal resistance.',                                                         // Thermal resistant
    ];
}