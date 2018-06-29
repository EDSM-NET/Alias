<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Ship;
use         EDSM\Alias;

class Description extends Alias
{
    static protected $defaultName       = null;
    
    /**
     * Description
     */
    static protected $name  = [
        // Adder
        128049267               => "The Adder is another classic design, tailored as a general utility vessel. The original model was first built in 2914 by Outworld Workshops and the type is now manufactured by Zorgon Peterson. Although lightly armed it has more cargo capacity than the Sidewinder and this ship can often be seen doing shuttle runs as well as light trading.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Alliance Challenger
        128816588               => "A modified version of the Alliance Chieftain, the Alliance Challenger has been envisaged as a frontline combat vessel. With a generous complement of hardpoints, the Challenger can more than hold its own in a fight, and although it weighs more than its sister ship, it has retained the Chieftain’s characteristic agility. It also has stronger armour than the Chieftain, allowing it to soak up a significant amount of punishment.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Alliance Chieftain
        128816574               => "The Alliance Chieftain has been designed not only to dish out punishment, but to avoid it. Manufactured by Lakon Spaceways, the Chieftain is more manoeuvrable than ships of similar size and weight, and its combat profile means it can more than hold its own in a fight. The ship also boasts three internal military compartments, allowing the pilot to equip a shield cell bank, hull reinforcements and module reinforcements.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Anaconda
        128049363               => "The Anaconda is the pride of Faulcon deLacy’s shipyards. The design was first manufactured in 2856 by RimLiner Galactic. After numerous mergers the template was eventually owned by Faulcon deLacy, who have made only minor changes to the classic design. The Anaconda is a versatile craft that can transport large cargos as well as pack a decent punch. Some smaller navies use the Anaconda in light cruiser and frigate roles. The Anaconda can also be upgraded with a docking bay allowing small fighters up to Sidewinder-size to be carried and launched, however most are only capable of supporting short-range fighters.\n\nThis ship requires a large sized landing pad to dock.",
        
        // Asp Explorer
        128049303               => "The Asp Explorer is the civilian version of the military model Asp MkII (which first saw service in 2878). Lakon Spaceways now owns the licence to construct these ships and has marketed them heavily at customers looking for their first multi-crewed ships. The ship class has earned a solid reputation for long-range missions and those requiring some discretion.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Asp Scout
        128672276               => "Lakon Spaceways unveiled the Asp Scout in late 3301 as a cheaper alternative to the well-regarded Asp Explorer, and in terms of market it sits between the Diamondback range and the Asp Explorer. It utilises much of the same airframe as the Explorer, but the reduced hardpoint capacity (compared to its parent model) means it packs less of a punch. Test pilots reported that the mass reduction resulted in a vessel that handles better than the Asp Explorer while maintaining its impressive jump capability.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Beluga Liner
        128049345               => "The Beluga Class Liner is one of the most prestigious vessels to travel the space lanes. Only the Imperial Gutamaya liners rival these glorious vessels. If you want to travel in style, this is the vessel to do it in. A fighter hangar can be equipped to these ships.\n\nThis ship requires a large sized landing pad to dock.",
        
        // Cobra MkIII
        128049279               => "The Cobra MkIII is a classic all-purpose ship found throughout human space. The model was first built in Lave Cowell & McGrath shipyard in Lave in 3100. Despite its age, it remains a popular ship for lone pilots who value its balance of carrying capacity and ability in combat.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Cobra MkIV
        128672262               => "The Cobra MkIV is Faulcon deLacy's development of the famous Cobra MkIII. It's a heavier and bulkier ship than the MkIII, but packs an extra punch and its better weaponry placement makes it a more effective combat vessel. It's tougher, to improve survivability, and allows better upgrading, but at the expense of some of its agility.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Diamondback Explorer
        128671831               => "The Diamondback Explorer was Lakon Spaceways’ response to criticism of the original Diamondback ship class. By extending the ship’s frame it allowed greater cargo capacity and so greater mission variety and endurance. It also brought the ship more into line as a smaller brother to the successful Asp line although at a much more modest price range. The Explorer model can fulfil the same roles as its companion ship type, but is also able to operate as a fast transport and resupply vessel useful for supporting deep space operations in a hostile environment.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Diamondback Scout
        128671217               => "The Diamondback Scout is Lakon Spaceways' specialist combat explorer vessel. Unlike its bigger brother the Asp, the Diamondback Scout isn't suited as an all rounder vessel. It is popular with elite recon and pathfinder units with navies throughout human space. Its relatively low cost also makes it a popular choice with independent pilots who appreciate its combat and exploration potential.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Dolphin
        128049291               => "Saud Kruger build some of the finest luxury vessels travelling the space lanes. Their Dolphin class passenger vessel is able to transport a small number of people in extreme comfort.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Eagle
        128049255               => "The Eagle is a proven combat fighter with a distinguished history. It is one of the smallest fighters available with jump capability. It has the distinction of being the only ship that has been so successful, versions have been built for both the Federation and Imperial navies. This role has been superseded by the respective navies’ short-range fighter programmes, but the Eagle still sees extensive service across human space. Core Dynamics are no longer building these ships, but do still provide parts and servicing due to their popularity.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Federal Assault Ship
        128672145               => "Many of Core Dynamics' customers desired more specific roles for their Dropships and the Assault Ship is a response to some of those demands. The Assault Ship is designed for a more combat intensive role than the original ship. It has improved manoeuvrability and weapon carrying capacity and placement. These additions come at the expense of smaller internals making it less versatile, but better in its specialised role.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Federal Corvette
        128049369               => "The Federal Corvette is the smallest warship deployed by the Federation Navy. It is a quick, hard hitting vessel also capable of transporting cargo and personnel. Its versatility makes it the most common vessel of the Federation Navy that most people will encounter. It can be found everywhere, on long-range patrol, peace keeping, pirate suppression, in fact anywhere the navy wishes to maintain a solid presence without deploying one of the Farragut class Battlecruisers. It is possible, but extremely rare, for a private citizen to own one of these vessels. The ship can carry and deploy two small fighter class ships, although civilian versions are restricted to a single fighter.\n\nThis ship requires a large sized landing pad to dock.",
        
        // Federal Dropship
        128049321               => "The Federal Dropship is the Federation Navy’s workhorse ship for tactical and special forces deployments. This is a well-armoured and well-armed ship capable of carrying large loads. Its versatile nature means that it is well-suited to tackling even the most hostile environment.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Federal Gunship
        128672152               => "The Federal Gunship developed from the need for a more advanced support vessel in operations, utilising the standard Dropship frame. Its primary role is in fire support but it also supports higher rated modules making it more versatile. It can also be equipped with a fighter hangar.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Fer-de-Lance
        128049351               => "The Fer-de-Lance is another classic design that has now been in production for two centuries. The ship became famous for its popularity with top business executives and wealthy bounty hunters, being a fast, well armed vessel, with luxurious accommodation and high quality components fitted as standard. Early models were built by Zorgon Peterson, but more recently, limited numbers have been upgraded by Saud Kruger in a rare collaboration, resulting in even more lavish creations, without spoiling the original design and specification requirements.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Hauler
        128049261               => "The Hauler is Zorgon Peterson's low-level entry in the freighter market and has been a big success. A large cargo capacity (for its size), cheap purchase price and low running costs have made these the most popular small cargo ships in human space.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Imperial Clipper
        128049315               => "The Imperial Clipper is the quintessential Imperial ship. It epitomises elegance of form while delivering speed and agility. Because of its balance of speed, luxury and strength it is used for transporting valuable items and personnel of importance across the Empire. With the navy ships these can come as standard, and not available for civilian, or export models.\n\nThis ship requires a large sized landing pad to dock.",
        
        // Imperial Courier
        128671223               => "The Imperial Courier is a mainstay of the Empire's fleet. It is a beauty to behold while still packing a good punch. Officially the class is used to provide transport for officials that don’t warrant the use of a Cutter or Interdictor. However its flexibility means that it fills many roles for the Imperial Navy and prominent citizens.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Imperial Cutter
        128049375               => "The Imperial Cutter fulfils a similar role to the Corvette for the Imperial Navy. The design philosophy reflects Imperial sensibilities as it is faster and more elegant than the Corvette, but doesn’t quite match it in firepower. As with other Imperial warships the Cutter is also used for projecting soft power, via diplomatic missions and support for friendly powers. It is possible, although rare, for a well connected client or patron to own one of these ships. Like the Corvette, some models can deploy two small fighter sized ships, although civilian models are restricted to one.\n\nThis ship requires a large sized landing pad to dock.",
        
        // Imperial Eagle
        128672138               => "The Imperial Eagle has seen service in the Imperial Navy and allied fleets for many years. The original Eagle is a multi-role fighter where the Imperial version is geared more towards the interceptor role. It carries more powerful weaponry and is capable of higher speeds than the original, although at the expense of some of the original ship's famed manoeuvrability.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Keelback
        128672269               => "This is Lakon Spaceways' new combat trader-class vessel, designed for hostile-environment deliveries and light support duties. It is based on the Type-6 frame but with extra weapon hardpoints. It has a reduced cargo capacity to support a higher class of powerplant, and can even accommodate a fighter bay. Its durability is improved by better defence capabilities for armour and shields. Its similar silhouette to the Type-6 makes it a suitable vessel for commerce raiding or convoy protection.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Krait MkII
        128816567               => "The Krait MkII is a reimagining of the Krait Lightspeeder, which was originally manufactured by Faulcon DeLacy in the 3100s. Although the new ship is larger than the original, it possesses many of the same characteristics, emphasising speed, manoeuvrability and firepower over defensive capability. The ship also boasts a fighter bay and space for up to two crew members, making it a good option for those seeking a medium-weight, multipurpose vessel.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Orca
        128049327               => "Saud Kruger are famed for their range of luxury passenger ships. The Orca is capable of carrying passengers in extreme comfort and elegance. For its size and class it is also more than capable of defending itself.\n\nThis ship requires a large sized landing pad to dock.",
        
        // Python
        128049339               => "Another classic design that has survived the centuries. The first vessel was constructed in 2700 by Whatt and Pritney Ship Constructions. With the demise of the company, and after various mergers and takeovers, the ship design is now owned by Faulcon deLacy. The ship remains the slow and sturdy craft it was originally famous for and some smaller navies still use this class as patrol cruisers (although tiny compared to the Imperial Interdictors and Federal Battlecruisers).\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Sidewinder
        128049249               => "Most pilots start their careers in the Sidewinder. It is a classic ship design that has been in use (in various configurations) since 2982. Its original design was as a light support ship and it lacked jump capability. Modern compact drives have enabled jump-capable versions to be created, making this a useful all-rounder. Some navies still use these ships as fighters and patrol craft.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Type-6 Transporter
        128049285               => "Lakon Spaceways is famous for building dependable, jump-capable transport vessels. The Type-6 Transporter is their smallest commercially available model. It has limited combat capability, but is capable of transporting decent-sized loads for its size class.\n\nThis ship requires at least a medium sized landing pad to dock.",
        
        // Type-7 Transporter
        128049297               => "The Type-7 Transporter is Lakon Spaceways' mid range transport vessel. This is a new model, released in 3290. It is slow but moves a lot of tonnage for its size.\n\nThis ship requires a large sized landing pad to dock.",
        
        // Type-9 Heavy
        128049333               => "The Type-9 Heavy is Lakon Spaceways' large freighter class. This ship is built to transport large cargos, a job it does very well, but it doesn’t stand up well in a fight, although adding a fighter bay improves its combat capability considerably - in the right hands!\n\nThis ship requires a large sized landing pad to dock.",
        
        // Type-10 Defender
        128785619               => "The Type-10 Defender is the result of collaboration between the Alliance and Lakon Spaceways. With the threat of xeno-war looming, the Alliance's naval arm saw the urgent need for a weapons platform capable of withstanding heavy, sustained attack. Utilising a reinforced Type-9 chassis as a starting point, Lakon overhauled and geared every aspect of the design for combat, producing a military behemoth that could be produced in volume at short notice.\n\nThis ship requires a large sized landing pad to dock.",
        
        // Viper MkIII
        128049273               => "The Viper MkIII is the most recent development of the most successful fighter classes ever built. The original Viper Defence Craft was designed by Faulcon Manspace in 2762 in the Reorte shipyards. The basic model was beefed up with the Viper MkII by Faulcon deLacy. The Viper MkIII was a revitalised model with a new, more armoured look, which has been taken further with the recently released MkIV. Despite the competition from its more advanced sister model, the MkIII remains a top class fighter found in many well-equipped police and naval forces.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Viper MkIV
        128672255               => "Faulcon deLacy’s Viper MkIV takes the MkIII model and beefs it up to a heavy fighter role. While it lacks the speed of the older ship, it enjoys much better protection from its shields and armour. With the capacity for a more capable powerplant and frame shift drive, the MkIV is also better suited for long-range patrols and rapid deployment. The powerplant upgrade potential supports greater customisation for weapons and modules, making this a versatile fighter that would be an excellent addition to any navy or private-security concern.\n\nThis ship requires at least a small sized landing pad to dock.",
        
        // Vulture
        128049309               => "The Vulture space superiority fighter sacrifices hardpoint flexibility for manoeuvrability. Advanced manufacturing techniques have allowed the Vulture to integrate large hardpoints into its relatively small frame, offsetting the ship’s limited weapon count. The Vulture excels in the role of heavy fighter in strike missions against larger, well defended targets, but its nimble flight characteristics make it equally devastating against smaller targets. A limited cargo and passenger capability has not stopped it becoming a preferred personal transport for those who like to project a certain attitude in their dealings.\n\nThis ship requires at least a small sized landing pad to dock.",
    ];
}