<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Commodity;
use         EDSM\Alias;

class Type extends Alias
{
    use \EDSM\Alias\Station\Commodity\Rare;

    /**
     * List of names used in game
     */
    static protected $name  = [
        // Chemicals (1)
         101        => 'Explosives',
         102        => 'Hydrogen Fuel',
         103        => 'Mineral Oil',
         104        => 'Pesticides',
         105        => 'Synthetic Reagents',
         106        => 'Surface Stabilisers',
         107        => 'Nerve Agents',
         108        => 'Delta Phoenicis Palms',             /**/
         109        => 'Toxandji Virocide',                 /**/
         110        => 'Anduliga Fire Works',               /**/
         111        => 'HIP Organophosphates',              /**/
         112        => 'Koro Kung Pellets',                 /**/
         113        => 'Water',
         114        => 'Hydrogen Peroxide',
         115        => 'Liquid Oxygen',
         116        => 'Agronomic Treatment',
         117        => 'Tritium',


        // Consumer Items (2)
         201        => 'Clothing',
         202        => 'Consumer Technology',
         203        => 'Domestic Appliances',
         204        => 'Evacuation Shelter',
         205        => 'Alacarakmo Skin Art',
         206        => 'Eleu Thermals',
         207        => 'Eshu Umbrellas',
         208        => 'Karetii Couture',
         209        => 'Njangari Saddles',
         210        => 'Kinago Violins',
         211        => 'Nguna Modern Antiques',
         212        => 'Rajukru Multi-Stoves',
         213        => 'Tiolce Waste2Paste Units',
         214        => 'Ophiuch Exino Artefacts',           /**/
         215        => 'Havasupai Dream Catcher',           /**/
         216        => 'Jaradharre Puzzle Box',             /**/
         217        => 'Uzumoku Low-G Wings',               /**/
         218        => 'Altairian Skin',                    /**/
         219        => 'Jotun Mookah',                      /**/
         220        => 'Zeessze Ant Grub Glue',             /**/
         221        => 'Momus Bog Spaniel',                 /**/
         222        => 'Leathery Eggs',                     /**/
         223        => 'Vidavantian Lace',                  /**/
         224        => 'Jaques Quinentian Still',           /**/
         225        => 'Soontill Relics',                   /**/
         226        => 'The Hutton Mug',                    /**/
         227        => 'Crystalline Spheres',               /**/
         228        => 'Survival Equipment',
         229        => 'Ultra-Compact Processor Prototypes',
         230        => 'Personal Gifts',
         231        => "Shan's Charis Orchid",
         232        => 'Ophiuch Exino Artefacts',
         233        => 'Buckyball Beer Mats',
         234        => 'Duradrives',


        // Legal Drugs (3)
         301        => 'Beer',
         302        => 'Liquor',
         303        => 'Narcotics',
         304        => 'Tobacco',
         305        => 'Wine',
         306        => 'Eranin Pearl Whisky',
         307        => 'Lucan Onionhead',
         308        => 'Motrona Experience Jelly',
         309        => 'Onionhead',
         310        => 'Rusani Old Smokey',
         311        => 'Tarach Spice',
         312        => 'Wolf Fesh',
         313        => 'Wuthielo Ku Froth',
         314        => 'Bootleg Liquor',
         315        => 'Lavian Brandy',
         316        => 'Lyrae Weed',
         317        => 'Kongga Ale',
         318        => 'Bast Snake Gin',                    /**/
         319        => 'Thrutis Cream',                     /**/
         320        => 'Kamitra Cigars',                    /**/
         321        => 'Yaso Kondi Leaf',                   /**/
         322        => 'Chateau De Aegaeon',                /**/
         323        => 'Saxon Wine',                        /**/
         324        => 'Centauri Mega Gin',                 /**/
         325        => 'Geawen Dance Dust',                 /**/
         326        => 'Gerasian Gueuze Beer',              /**/
         327        => 'Burnham Bile Distillate',           /**/
         328        => 'Pavonis Ear Grubs',                 /**/
         329        => 'Indi Bourbon',                      /**/
         330        => 'Leestian Evil Juice',               /**/
         331        => 'Azure Milk',                        /**/
         332        => 'Onionhead Alpha Strain',            /**/
         333        => 'Onionhead Beta Strain',             /**/
         334        => 'Harma Silver Sea Rum',
         335        => 'Crom Silver Fesh',
         336        => 'Apa Vietii',                        /**/
         337        => 'Onionhead Gamma Strain',


        // Foods (4)
         401        => 'Algae',
         402        => 'Animal Meat',
         403        => 'Coffee',
         404        => 'Fish',
         405        => 'Food Cartridges',
         406        => 'Fruit and Vegetables',
         407        => 'Grain',
         408        => 'Synthetic Meat',
         409        => 'Tea',
         410        => 'HIP 10175 Bush Meat',
         411        => 'Albino Quechua Mammoth Meat',
         412        => 'Utgaroar Millennial Eggs',
         413        => 'Witchhaul Kobe Beef',
         414        => 'Karsuki Locusts',
         415        => 'Giant Irukama Snails',
         416        => "Baltah'sine Vacuum Krill",
         417        => 'Ceti Rabbits',
         418        => 'Any Na Coffee',
         419        => 'CD-75 Kitten Brand Coffee',
         420        => 'Goman Yaupon Coffee',
         421        => 'Chi Eridani Marine Paste',
         422        => 'Esuseku Caviar',
         423        => 'Live Hecate Sea Worms',
         424        => 'Helvetitj Pearls',
         425        => 'HIP Proto-Squid',
         426        => 'Coquim Spongiform Victuals',
         427        => 'Eden Apples Of Aerial',
         428        => 'Neritus Berries',
         429        => 'Ochoeng Chillies',
         430        => 'Deuringas Truffles',
         431        => 'HR 7221 Wheat',
         432        => 'Jaroua Rice',
         433        => 'Sanuma Decorative Meat',            /**/
         434        => 'Ethgreze Tea Buds',                 /**/
         435        => 'Ceremonial Heike Tea',              /**/
         436        => 'Tanmark Tranquil Tea',              /**/
         437        => 'Aepyornis Egg',                     /**/
         438        => 'Haiden Black Brew',                 /**/
         439        => 'Void Extract Coffee',               /**/
         440        => 'LTT Hyper Sweet',                   /**/
         441        => 'Mechucos High Tea',                 /**/
         442        => 'Mokojing Beast Feast',              /**/
         443        => 'Mukusubii Chitin-os',               /**/
         444        => 'Mulachi Giant Fungus',              /**/
         445        => 'Wheemete Wheat Cakes',              /**/
         446        => 'Arouca Conventual Sweets',          /**/
         447        => 'Orrerian Vicious Brew',             /**/
         448        => 'Uszaian Tree Grub',                 /**/
         449        => 'Diso Ma Corn',                      /**/
         450        => 'Baked Greebles',


        // Industrial Materials (5)
         501        => 'Polymers',
         502        => 'Semiconductors',
         503        => 'Superconductors',
         504        => 'Meta-Alloys',
         505        => 'Ceramic Composites',
         506        => 'Medb Starlube',                     /**/
         507        => 'Insulating Membrane',
         508        => 'CMM Composite',
         509        => 'Micro-weave Cooling Hoses',
         510        => 'Neofabric Insulation',


        // Machinery (6)
         601        => 'Atmospheric Processors',
         602        => 'Crop Harvesters',
         603        => 'Marine Equipment',
         604        => 'Microbial Furnaces',
         605        => 'Mineral Extractors',
         606        => 'Power Generators',
         607        => 'Water Purifiers',
         608        => 'Thermal Cooling Units',
         609        => 'Skimmer Components',
         610        => 'Geological Equipment',
         611        => 'Building Fabricators',
         612        => 'Volkhab Bee Drones',
         613        => 'Wulpa Hyperbore Systems',           /**/
         614        => 'Non Euclidian Exotanks',            /**/
         615        => 'Giant Verrix',                      /**/
         616        => 'Articulation Motors',
         617        => 'HN Shock Mount',
         618        => 'Emergency Power Cells',
         619        => 'Power Converter',
         620        => 'Energy Grid Assembly',
         621        => 'Power Transfer Bus',
         622        => 'Radiation Baffle',
         623        => 'Exhaust Manifold',
         624        => 'Reinforced Mounting Plate',
         625        => 'Heatsink Interlink',
         626        => 'Magnetic Emitter Coil',
         627        => 'Modular Terminals',


        // Medicines (7)
         701        => 'Agri-Medicines',
         702        => 'Basic Medicines',
         703        => 'Combat Stabilisers',
         704        => 'Performance Enhancers',
         705        => 'Progenitor Cells',
         706        => 'Terra Mater Blood Bores',
         707        => 'Kachirigin Filter Leeches',
         708        => 'Aganippe Rush',                     /**/
         709        => 'The Waters Of Shintara',            /**/
         710        => 'Honesty Pills',                     /**/
         711        => 'V Herculis Body Rub',               /**/
         712        => 'Vega Slimweed',                     /**/
         713        => 'Tauri Chimes',                      /**/
         714        => 'Pantaa Prayer Sticks',              /**/
         715        => 'Fujin Tea',                         /**/
         716        => 'Alya Body Soap',                    /**/
         717        => 'Advanced Medicines',
         718        => 'Nanomedicines',


        // Metals (8)
         801        => 'Aluminium',
         802        => 'Beryllium',
         803        => 'Cobalt',
         804        => 'Copper',
         805        => 'Gallium',
         806        => 'Gold',
         807        => 'Indium',
         808        => 'Lithium',
         809        => 'Palladium',
         810        => 'Platinum',
         811        => 'Silver',
         812        => 'Tantalum',
         813        => 'Titanium',
         814        => 'Uranium',
         815        => 'Osmium',
         816        => 'Thorium',
         817        => 'Thallium',
         818        => 'Lanthanum',
         819        => 'Bismuth',
         820        => 'Hafnium 178',
         821        => 'Sothis Crystalline Gold',           /**/
         822        => 'Praseodymium',
         823        => 'Samarium',
         824        => 'Platinum Alloy',
         825        => 'Steel',


        // Minerals (9)
         901        => 'Bauxite',
         902        => 'Bertrandite',
         903        => 'Coltan',
         904        => 'Gallite',
         905        => 'Indite',
         906        => 'Lepidolite',
         907        => 'Rutile',
         908        => 'Uraninite',
         909        => 'Painite',
         910        => 'Pyrophyllite',
         911        => 'Moissanite',
         912        => 'Goslarite',
         913        => 'Cryolite',
         914        => 'Cherbones Blood Crystals',          /**/
         915        => 'Ngadandari Fire Opals',             /**/
         916        => 'Taaffeite',
         917        => 'Jadeite',
         918        => 'Bromellite',
         919        => 'Low Temperature Diamonds',
         920        => 'Methanol Monohydrate Crystals',
         921        => 'Lithium Hydroxide',
         922        => 'Methane Clathrate',
         923        => 'Rhodplumsite',
         924        => 'Serendibite',
         925        => 'Monazite',
         926        => 'Musgravite',
         927        => 'Benitoite',
         928        => 'Grandidierite',
         929        => 'Alexandrite',
         930        => 'Void Opals',


        // Slavery (10)
        1001        => 'Imperial Slaves',
        1002        => 'Slaves',
        1003        => 'Master Chefs',                      /**/


        // Technology (11)
        1101        => 'Advanced Catalysers',
        1102        => 'Animal Monitors',
        1103        => 'Aquaponic Systems',
        1104        => 'Auto-Fabricators',
        1105        => 'Bioreducing Lichen',
        1106        => 'Computer Components',
        1107        => 'H.E. Suits',
        1108        => 'Land Enrichment Systems',
        1109        => 'Resonating Separators',
        1110        => 'Robotics',
        1111        => 'Structural Regulators',
        1112        => 'Muon Imager',
        1113        => 'Xihe Biomorphic Companions',        /**/
        1114        => 'AZ Cancri Formula 42',              /**/
        1115        => 'Nanobreakers',
        1116        => 'Telemetry Suite',
        1117        => 'Micro Controllers',
        1118        => 'Ion Distributor',
        1119        => 'Hardware Diagnostic Sensor',
        1120        => 'Medical Diagnostic Equipment',
        1121        => 'Classified Experimental Equipment', /**/


        // Textiles (12)
        1201        => 'Leather',
        1202        => 'Natural Fabrics',
        1203        => 'Synthetic Fabrics',
        1204        => 'Belalans Ray Leather',              /**/
        1205        => 'Damna Carapaces',                   /**/
        1206        => 'Rapa Bao Snake Skins',              /**/
        1207        => 'Vanayequi Ceratomorpha Fur',        /**/
        1208        => 'Banki Amphibious Leather',          /**/
        1209        => 'Tiegfries Synth Silk',              /**/
        1210        => 'Chameleon Cloth',                   /**/
        1211        => 'Conductive Fabrics',
        1212        => 'Military Grade Fabrics',

        // Waste (13)
        1301        => 'Biowaste',
        1302        => 'Chemical Waste',
        1303        => 'Scrap',
        1304        => 'Toxic Waste',
        1305        => 'Rockforth Fertiliser', // Chemicals, oops!


        // Weapons (14)
        1401        => 'Non-Lethal Weapons',
        1402        => 'Personal Weapons',
        1403        => 'Reactive Armour',
        1404        => 'Battle Weapons',
        1405        => 'Kamorin Historic Weapons',
        1406        => 'Landmines',
        1407        => 'Borasetani Pathogenetics',
        1408        => 'HIP 118311 Swarm',
        1409        => 'Holva Duelling Blades',             /**/
        1410        => 'Gilya Signature Weapons',           /**/


        // Unknown (15)
        1501        => 'Limpet',


        // Salvage (16)
        1601        => 'AI Relics',
        1602        => 'Antiquities',
        1603        => 'SAP 8 Core Container',
        1604        => 'Trinkets of Hidden Fortune',
        1605        => 'Trade Data',
        1606        => 'Occupied Escape Pod',
        1607        => 'Black Box',
        1608        => 'Military Plans',
        1609        => 'Ancient Artefact',
        1610        => 'Rare Artwork',
        1611        => 'Experimental Chemicals',
        1612        => 'Rebel Transmissions',
        1613        => 'Prototype Tech',
        1614        => 'Technical Blueprints',
        1615        => 'Thargoid Sensor',
        1616        => 'Military Intelligence',
        1617        => 'Salvageable Wreckage',
        1618        => 'Encrypted Data Storage',
        1619        => 'Personal Effects',
        1620        => 'Commercial Samples',
        1621        => 'Tactical Data',
        1622        => 'Assault Plans',
        1623        => 'Encrypted Correspondence',
        1624        => 'Diplomatic Bag',
        1625        => 'Scientific Research',
        1626        => 'Scientific Samples',
        1627        => 'Political Prisoner',
        1628        => 'Hostage',
        1629        => 'Geological Samples',
        1630        => 'Unstable Data Core',
        1631        => 'Occupied Escape Pod',
        1632        => 'Data Core',
        1633        => 'Galactic Travel Guide',
        1634        => 'Mysterious Idol',
        1635        => 'Prohibited Research Materials',
        1636        => 'Antimatter Containment Unit',
        1637        => 'Space Pioneer Relics',
        1638        => 'Fossil Remnants',
        1639        => 'Thargoid Probe',
        1640        => 'Precious Gems',
        1641        => 'Thargoid Link',
        1642        => 'Thargoid Biological Matter',
        1643        => 'Thargoid Resin',
        1644        => 'Thargoid Technology Samples',
        1645        => 'Small Survey Data Cache',
        1646        => 'Large Survey Data Cache',
        1647        => 'Ancient Totem',
        1648        => 'Ancient Orb',
        1649        => 'Ancient Casket',
        1650        => 'Ancient Relic',
        1651        => 'Ancient Tablet',
        1652        => 'Ancient Urn',
        1653        => 'Wreckage Components',
        1654        => 'Damaged Escape Pod',
        1655        => 'Earth Relics',
        1656        => 'Ancient Artifact',
        1657        => 'Antique Jewellery',
        1658        => 'Data Core',
        1659        => 'Gene Bank',
        1660        => 'Fossil Remnants', //TODO: Migrate to 1638
        1661        => 'Mysterious Idol',
        1662        => 'Space Pioneer Relics',
        1663        => 'Time Capsule',
        1664        => 'Fertiliser',
        1665        => 'Insectoid Livestock',
        1666        => 'Prohibited Research Materials',
        1667        => 'Antimatter Containment Unit',
        1668        => 'Ancient Key',
        1669        => 'Unclassified Relic',
        1670        => 'Unoccupied Escape Pod',
        1671        => 'Protective Membrane Scrap',
        1672        => 'Xenobiological Prison Pod',
        1673        => 'Coral Sap',
        1674        => 'Impure Spire Mineral',
        1675        => 'Semi-Refined Spire Mineral',

        1800        => 'Thargoid Cyclops Tissue Sample',
        1801        => 'Thargoid Heart',
        1802        => 'Thargoid Basilisk Tissue Sample',
        1803        => 'Thargoid Medusa Tissue Sample',
        1804        => 'Thargoid Scout Tissue Sample',
        1805        => 'Thargoid Hydra Tissue Sample',
        1806        => 'Thargoid Orthrus Tissue Sample',
        1807        => 'Caustic Tissue Sample',
        1808        => 'Thargoid Glaive Tissue Sample',
        1809        => 'Titan Deep Tissue Sample',
        1810        => 'Titan Tissue Sample',
        1811        => 'Titan Partial Tissue Sample',
        1812        => 'Titan Maw Deep Tissue Sample',
        1813        => 'Titan Maw Tissue Sample',
        1814        => 'Titan Maw Partial Tissue Sample',
        1815        => 'Thargoid Scythe Tissue Sample',
        1816        => 'Titan drive component',
        1817        => 'Cyst Specimen',

        1900        => 'Mollusc Spores',
        1901        => 'Mollusc Membrane',
        1902        => 'Mollusc Mycelium',

        1920        => 'Mollusc Soft Tissue',
        1921        => 'Mollusc Fluid',
        1922        => 'Mollusc Brain Tissue',

        1930        => 'Pod Core Tissue',
        1931        => 'Pod Dead Tissue',
        1932        => 'Pod Surface Tissue',

        1940        => 'Pod Outer Tissue',
        1941        => 'Pod Shell Tissue',
        1942        => 'Pod Mesoglea',

        1950        => 'Pod Tissue',


        // Powerplay (99)
        9901        => 'Aisling Media Materials',
        9902        => 'Aisling Sealed Contracts',
        9903        => 'Aisling Programme Materials',
        9904        => 'Alliance Trade Agreements',
        9905        => 'Alliance Legislative Contracts',
        9906        => 'Alliance Legislative Records',
        9907        => 'Lavigny Corruption Reports',
        9908        => 'Lavigny Field Supplies',
        9909        => 'Lavigny Garrison Supplies',
        9910        => 'Core Restricted Package',
        9911        => 'Liberal Propaganda',
        9912        => 'Liberal Federal Aid',
        9913        => 'Liberal Federal Packages',
        9914        => 'Marked Military Arms',
        9915        => 'Patreus Field Supplies',
        9916        => 'Patreus Garrison Supplies',
        9917        => 'Hudson\'s Restricted Intel',
        9918        => 'Hudson\'s Field Supplies',
        9919        => 'Hudson\'s Garrison Supplies',
        9920        => 'Sirius Franchise Package',
        9921        => 'Sirius Corporate Contracts',
        9922        => 'Sirius Industrial Equipment',
        9923        => 'Torval Trade Agreements',
        9924        => 'Torval Political Prisoners',
        9925        => 'Utopian Publicity',
        9926        => 'Utopian Supplies',
        9927        => 'Utopian Dissident',
        9928        => 'Kumo Contraband Package',
        9929        => 'Unmarked Military supplies',
        9930        => 'Onionhead Samples',
        9931        => 'Revolutionary supplies',
        9932        => 'Marked Slaves',
        9933        => 'Torval Deeds',
        9934        => 'Onionhead Derivatives',
        9935        => 'Out Of Date Goods',
        9936        => 'Grom Underground Support',
        9937        => 'Grom Counter Intelligence',
        9938        => 'Yuri Grom\'s Military Supplies',
        9939        => 'Kaine Misinformation',

        // Odyssey - Items (40)
        4001        => 'Biochemical Agent',
        4002        => 'Biological Sample',
        4003        => 'Building Schematic',
        4004        => 'Chemical Sample',
        4005        => 'Compact Library',
        4006        => 'Compression-Liquefied Gas',
        4007        => 'Deep Mantle Sample',
        4008        => 'Degraded Power Regulator',
        4009        => 'G-Meds',
        4010        => 'Genetic Repair Meds',
        4011        => 'Health Monitor',
        4012        => 'Inertia Canister',
        4013        => 'Insight Data Bank',
        4014        => 'Insight Entertainment Suite',
        4015        => 'Ionised Gas',
        4016        => 'Microbial Inhibitor',
        4017        => 'Nutritional Concentrate',
        4018        => 'Personal Computer',
        4019        => 'Personal Documents',
        4020        => 'Power Regulator',
        4021        => 'Pyrolytic Catalyst',
        4022        => 'Ship Schematic',
        4023        => 'Suit Schematic',
        4024        => 'Surveillance Equipment',
        4025        => 'Synthetic Genome',
        4026        => 'Synthetic Pathogen',
        4027        => 'True Form Fossil',
        4028        => 'Universal Translator',
        4029        => 'Vehicle Schematic',
        4030        => 'Weapon Schematic',

        // Odyssey - Data (41)
        4101        => 'Accident Logs',
        4102        => 'Air Quality Reports',
        4103        => 'Atmospheric Data',
        4104        => 'Audio Logs',
        4105        => 'Ballistics Data',
        4106        => 'Blacklist Data',
        4107        => 'Blood Test Results',
        4108        => 'Campaign Plans',
        4109        => 'Cat Media',
        4110        => 'Census Data',
        4111        => 'Chemical Experiment Data',
        4112        => 'Chemical Formulae',
        4113        => 'Chemical Inventory',
        4114        => 'Chemical Patents',
        4115        => 'Classic Entertainment',
        4116        => 'Combat Training Material',
        4117        => 'Combatant Performance',
        4118        => 'Duty Rota',
        4119        => 'Employee Directory',
        4120        => 'Employee Genetic Data',
        4121        => 'Employment History',
        4122        => 'Evacuation Protocols',
        4123        => 'Exploration Journals',
        4124        => 'Faction Associates',
        4125        => 'Faction Donator List',
        4126        => 'Faction News',
        4127        => 'Financial Projections',
        4128        => 'Fleet Registry',
        4129        => 'Gene Sequencing Data',
        4130        => 'Genetic Research',
        4131        => 'Geographical Data',
        4132        => 'Hydroponic Data',
        4133        => 'Internal Correspondence',
        4134        => 'Interrogation Recordings',
        4135        => 'Interview Recordings',
        4136        => 'Literary Fiction',
        4137        => 'Maintenance Logs',
        4138        => 'Manufacturing Instructions',
        4139        => 'Medical Records',
        4140        => 'Meeting Minutes',
        4141        => 'Mineral Survey',
        4142        => 'Multimedia Entertainment',
        4143        => 'Network Access History',
        4144        => 'Next of Kin Records',
        4145        => 'NOC Data',
        4146        => 'Operational Manual',
        4147        => 'Patrol Routes',
        4148        => 'Payroll Information',
        4149        => 'Personal Logs',
        4150        => 'Pharmaceutical Patents',
        4151        => 'Production Reports',
        4152        => 'Production Schedule',
        4153        => 'Purchase Records',
        4154        => 'Purchase Requests',
        4155        => 'Radioactivity Data',
        4156        => 'Reactor Output Review',
        4157        => 'Recycling Logs',
        4158        => 'Residential Directory',
        4159        => 'Sales Records',
        4160        => 'Security Expenses',
        4161        => 'Seed Geneaology',
        4162        => 'Settlement Defence Plans',
        4163        => 'Shareholder Information',
        4164        => 'Stellar Activity Logs',
        4165        => 'Surveillance Logs',
        4166        => 'Tactical Plans',
        4167        => 'Tax Records',
        4168        => 'Topographical Surveys',
        4169        => 'Travel Permits',
        4170        => 'Troop Deployment Records',
        4170        => 'Union Membership',
        4172        => 'Vaccination Records',
        4173        => 'Vaccine Research',
        4174        => 'Virology Data',
        4175        => 'Visitor Register',
        4176        => 'Weapon Inventory',
        4177        => 'Weapon Test Data',
        4178        => 'Xeno-Defence Protocols',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        // Chemicals (1)
        'explosives'                            => 101,
        'hydrogen fuel'                         => 102,     'hydrogenfuel'                  => 102,
        'mineral oil'                           => 103,     'mineraloil'                    => 103,
        'pesticides'                            => 104,
        'synthetic reagents'                    => 105,     'syntheticreagents'             => 105,
        'surface stabilisers'                   => 106,     'surfacestabilisers'            => 106,
        'nerve agents'                          => 107,     'nerveagents'                   => 107,
        'delta phoenicis palms'                 => 108,     'deltaphoenicispalms'           => 108,
        'toxandji virocide'                     => 109,     'toxandjivirocide'              => 109,
        'anduliga fire works'                   => 110,     'anduligafireworks'             => 110,
        'hip organophosphates'                  => 111,     'h i p organophosphates'        => 111,     'hiporganophosphates'           => 111,
        'koro kung pellets'                     => 112,     'korro kung pellets'            => 112,     'korrokungpellets'              => 112,
        'water'                                 => 113,
        'hydrogen peroxide'                     => 114,     'hydrogenperoxide'              => 114,
        'liquid oxygen'                         => 115,     'liquidoxygen'                  => 115,
        'agronomictreatment'                    => 116,
        'tritium'                               => 117,


        // Consumer Items (2)
        'clothing'                              => 201,
        'consumer technology'                   => 202,     'consumertechnology'            => 202,
        'domestic appliances'                   => 203,     'domesticappliances'            => 203,
        'evacuation shelter'                    => 204,     'evacuationshelter'             => 204,
        'alacarakmo skin art'                   => 205,     'alacarakmoskinart'             => 205,
        'eleu thermals'                         => 206,     'eleuthermals'                  => 206,
        'eshu umbrellas'                        => 207,     'eshuumbrellas'                 => 207,
        'karetii couture'                       => 208,     'karetiicouture'                => 208,
        'njangari saddles'                      => 209,     'njangarisaddles'               => 209,
        'kinago violins'                        => 210,     'kinago instruments'            => 210,     'kinagoinstruments'             => 210,     'kinagoviolins'                 => 210,
        'nguna modern antiques'                 => 211,     'ngunamodernantiques'           => 211,
        'rajukru multi-stoves'                  => 212,     'rajukru stoves'                => 212,     'rajukrustoves'                 => 212,
        'tiolce waste2paste units'              => 213,     'tiolce waste2 paste units'     => 213,     'tiolcewaste2pasteunits'        => 213,
        'ophiuch exino artefacts'               => 214,     'ophiuchexinoartefacts'         => 214,
        'havasupai dream catcher'               => 215,     'havasupaidreamcatcher'         => 215,
        'jaradharre puzzle box'                 => 216,     'jaradharre puzzlebox'          => 216,     'jaradharrepuzzlebox'           => 216,
        'uzumoku low-g wings'                   => 217,     'uzumoku low g wings'           => 217,     'uzumokulowgwings'              => 217,
        'altairian skin'                        => 218,     'altairianskin'                 => 218,
        'jotun mookah'                          => 219,     'jotunmookah'                   => 219,
        'zeessze ant grub glue'                 => 220,     'zeessze ant glue'              => 220,     'zeesszeantglue'                => 220,
        'momus bog spaniel'                     => 221,     'momusbogspaniel'               => 221,
        'leathery eggs'                         => 222,     'leatheryeggs'                  => 222,     'alieneggs'                     => 222,
        'vidavantian lace'                      => 223,     'vidavantianlace'               => 223,
        'jaques quinentian still'               => 224,     'jaquesquinentianstill'         => 224,
        'soontill relics'                       => 225,     'soontillrelics'                => 225,
        'the hutton mug'                        => 226,     'thehuttonmug'                  => 226,
        'crystalline spheres'                   => 227,     'crystallinespheres'            => 227,
        'survival equipment'                    => 228,     'survivalequipment'             => 228,
        'advert1'                               => 229,
        'personal gifts'                        => 230,     'personalgifts'                 => 230,
        'shans charis orchid'                   => 231,     'shanscharisorchid'             => 231,
        'ophiuchi exino artefacts'              => 232,     'ophiuchiexinoartefacts'        => 232,
        'buckyballbeermats'                     => 233,
        'duradrives'                            => 234,


        // Legal Drugs (3)
        'beer'                                  => 301,
        'liquor'                                => 302,
        'basic narcotics'                       => 303,     'basicnarcotics'                => 303,
        'tobacco'                               => 304,
        'wine'                                  => 305,
        'eranin pearl whiskey'                  => 306,     'eranin pearl whisky'           => 306,     'eraninpearlwhisky'             => 306,
        'lucan onion head'                      => 307,     'transgenic onion head'         => 307,     'transgeniconionhead'           => 307,
        'motrona experience jelly'              => 308,     'motronaexperiencejelly'        => 308,
        'onion head'                            => 309,     'onionhead'                     => 309,
        'rusani old smokey'                     => 310,     'rusanioldsmokey'               => 310,
        'tarach spice'                          => 311,     'tarachspice'                   => 311,     'tarachtorspice'                => 311,
        'wolf fesh'                             => 312,     'wolffesh'                      => 312,     'wolf1301fesh'                  => 312,
        'wuthielo ku froth'                     => 313,     'wuthielokufroth'               => 313,
        'bootleg liquor'                        => 314,     'bootlegliquor'                 => 314,
        'lavian brandy'                         => 315,     'lavianbrandy'                  => 315,
        'lyrae weed'                            => 316,     'lyraeweed'                     => 316,
        'kongga ale'                            => 317,     'konggaale'                     => 317,
        'bast snake gin'                        => 318,     'bastsnakegin'                  => 318,
        'thrutis cream'                         => 319,     'thrutiscream'                  => 319,
        'kamitra cigars'                        => 320,     'kamitracigars'                 => 320,
        'yaso kondi leaf'                       => 321,     'yasokondileaf'                 => 321,
        'chateau de aegaeon'                    => 322,     'chateaudeaegaeon'              => 322,
        'saxon wine'                            => 323,     'saxonwine'                     => 323,
        'centauri mega gin'                     => 324,     'centaurimegagin'               => 324,
        'geawen dance dust'                     => 325,     'geawendancedust'               => 325,
        'gerasian gueuze beer'                  => 326,     'gerasiangueuzebeer'            => 326,
        'burnham bile distillate'               => 327,     'burnhambiledistillate'         => 327,
        'pavonis ear grubs'                     => 328,     'pavoniseargrubs'               => 328,
        'indi bourbon'                          => 329,     'indibourbon'                   => 329,
        'leestian evil juice'                   => 330,     'leestianeviljuice'             => 330,
        'azure milk'                            => 331,     'blue milk'                     => 331,     'bluemilk'                      => 331,
        'onionhead alpha strain'                => 332,     'onion head a'                  => 332,     'onionheada'                    => 332,
        'onionhead beta strain'                 => 333,     'onion head b'                  => 333,     'onionheadb'                    => 333,
        'harmasilversearum'                     => 334,
        'animaleffigies'                        => 335,
        'apavietii'                             => 336,
        'onionheadc'                            => 337,


        // Foods (4)
        'algae'                                 => 401,
        'animalmeat'                            => 402,
        'coffee'                                => 403,
        'fish'                                  => 404,
        'food cartridges'                       => 405,     'foodcartridges'                => 405,
        'fruit and vegetables'                  => 406,     'fruitandvegetables'            => 406,
        'grain'                                 => 407,
        'synthetic meat'                        => 408,     'syntheticmeat'                 => 408,
        'tea'                                   => 409,
        'hip 10175 bush meat'                   => 410,     'h i p10175 bush meat'          => 410,     'hip10175bushmeat'              => 410,
        'albino quechua mammoth'                => 411,     'albinoquechuamammoth'          => 411,
        'utgaroar millennial eggs'              => 412,     'utgaroar millenial eggs'       => 412,     'utgaroarmillenialeggs'         => 412,
        'witchhaul kobe beef'                   => 413,     'witchhaulkobebeef'             => 413,
        'karsuki locusts'                       => 414,     'karsukilocusts'                => 414,
        'giant irukama snails'                  => 415,     'giantirukamasnails'            => 415,
        'baltah sine vacuum krill'              => 416,     'baltahsinevacuumkrill'         => 416,
        'ceti rabbits'                          => 417,     'cetirabbits'                   => 417,
        'any na coffee'                         => 418,     'anynacoffee'                   => 418,
        'cd-75 kitten brand coffee'             => 419,     'c d75 cat coffee'              => 419,     'cd75catcoffee'                 => 419,
        'goman yaupon coffee'                   => 420,     'gomanyauponcoffee'             => 420,
        'chi eridani marine paste'              => 421,     'chieridanimarinepaste'         => 421,
        'esuseku caviar'                        => 422,     'esusekucaviar'                 => 422,
        'live hecate sea worms'                 => 423,     'livehecateseaworms'            => 423,
        'helvetitj pearls'                      => 424,     'helvetitjpearls'               => 424,
        'hip proto-squid'                       => 425,     'h i p41181 squid'              => 425,     'hip41181squid'                 => 425,
        'coquim spongiform victuals'            => 426,     'coquimspongiformvictuals'      => 426,
        'eden apples of aerial'                 => 427,     'aerial eden apple'             => 427,     'aerialedenapple'               => 427,
        'neritus berries'                       => 428,     'neritusberries'                => 428,
        'ochoeng chillies'                      => 429,     'ochoengchillies'               => 429,
        'deuringas truffles'                    => 430,     'deuringastruffles'             => 430,
        'hr 7221 wheat'                         => 431,     'h r7221 wheat'                 => 431,     'hr7221wheat'                   => 431,
        'jaroua rice'                           => 432,     'jarouarice'                    => 432,
        'sanuma decorative meat'                => 433,     'sanuma m e a t'                => 433,     'sanumameat'                    => 433,
        'ethgreze tea buds'                     => 434,     'ethgrezeteabuds'               => 434,
        'ceremonial heike tea'                  => 435,     'ceremonialheiketea'            => 435,
        'tanmark tranquil tea'                  => 436,     'tanmarktranquiltea'            => 436,
        'aepyornis egg'                         => 437,     'ceti aepyornis egg'            => 437,     'cetiaepyornisegg'              => 437,
        'haidne black brew'                     => 438,     'haidneblackbrew'               => 438,
        'void extract coffee'                   => 439,     'l f t void extract coffee'     => 439,     'lftvoidextractcoffee'          => 439,
        'ltt hypersweet'                        => 440,     'l t t hyper sweet'             => 440,     'ltthypersweet'                 => 440,
        'mechucos high tea'                     => 441,     'mechucoshightea'               => 441,
        'mokojing beast feast'                  => 442,     'mokojingbeastfeast'            => 442,
        'mukusubii chitin-os'                   => 443,     'mukusubii chitin os'           => 443,     'mukusubiichitinos'             => 443,
        'mulachi giant fungus'                  => 444,     'mulachigiantfungus'            => 444,
        'wheemete wheat cakes'                  => 445,     'wheemetewheatcakes'            => 445,
        'arouca conventual sweets'              => 446,     'aroucaconventualsweets'        => 446,
        'orrerian vicious brew'                 => 447,     'orrerianviciousbrew'           => 447,
        'uszaian tree grub'                     => 448,     'uszaiantreegrub'               => 448,
        'diso ma corn'                          => 449,     'disomacorn'                    => 449,
        'bakedgreebles'                         => 450,


        // Industrial Materials (5)
        'polymers'                              => 501,
        'semiconductors'                        => 502,
        'superconductors'                       => 503,
        'meta alloys'                           => 504,     'metaalloys'                    => 504,
        'ceramic composites'                    => 505,     'ceramiccomposites'             => 505,
        'medb starlube'                         => 506,     'medbstarlube'                  => 506,
        'insulating membrane'                   => 507,     'insulatingmembrane'            => 507,
        'c m m composite'                       => 508,     'cmmcomposite'                  => 508,
        'micro-weave cooling hoses'             => 509,     'cooling hoses'                 => 509,     'coolinghoses'                  => 509,
        'neofabric insulation'                  => 510,     'neofabricinsulation'           => 510,


        // Machinery (6)
        'atmospheric extractors'                => 601,     'atmospheric processors'        => 601,     'atmosphericextractors'         => 601,     'atmosphericprocessors'         => 601,
        'crop harvesters'                       => 602,     'cropharvesters'                => 602,
        'marine supplies'                       => 603,     'marine equipment'              => 603,     'marinesupplies'                => 603,     'marineequipment'               => 603,
        'heliostatic furnaces'                  => 604,     'microbial furnaces'            => 604,     'heliostaticfurnaces'           => 604,     'microbialfurnaces'             => 604,
        'mineral extractors'                    => 605,     'mineralextractors'             => 605,
        'power generators'                      => 606,     'powergenerators'               => 606,
        'water purifiers'                       => 607,     'waterpurifiers'                => 607,
        'thermal cooling units'                 => 608,     'thermalcoolingunits'           => 608,
        'skimer components'                     => 609,     'skimmer components'            => 609,     'skimercomponents'              => 609,     'skimmercomponents'             => 609,
        'geological equipment'                  => 610,     'geologicalequipment'           => 610,
        'building fabricators'                  => 611,     'buildingfabricators'           => 611,
        'volkhab bee drones'                    => 612,     'volkhabbeedrones'              => 612,
        'wulpa hyperbore systems'               => 613,     'wulpahyperboresystems'         => 613,
        'non euclidian exotanks'                => 614,     'noneuclidianexotanks'          => 614,
        'giant verrix'                          => 615,     'giantverrix'                   => 615,
        'articulation motors'                   => 616,     'articulationmotors'            => 616,
        'h n shock mount'                       => 617,     'hnshockmount'                  => 617,
        'emergency power cells'                 => 618,     'emergencypowercells'           => 618,
        'power converter'                       => 619,     'powerconverter'                => 619,
        'power grid assembly'                   => 620,     'energy grid assembly'          => 620,     'powergridassembly'             => 620,
        'power transfer conduits'               => 621,     'power transfer bus'            => 621,     'powertransferconduits'         => 621,     'powertransferbus'              => 621,
        'radiation baffle'                      => 622,     'radiationbaffle'               => 622,
        'exhaust manifold'                      => 623,     'exhaustmanifold'               => 623,
        'reinforced mounting plate'             => 624,     'reinforcedmountingplate'       => 624,
        'heatsink interlink'                    => 625,     'heatsinkinterlink'             => 625,
        'magnetic emitter coil'                 => 626,     'magneticemittercoil'           => 626,
        'modular terminals'                     => 627,     'modularterminals'              => 627,


        // Medicines (7)
        'agricultural medicines'                => 701,     'agriculturalmedicines'         => 701,
        'basic medicines'                       => 702,     'basicmedicines'                => 702,
        'combat stabilisers'                    => 703,     'combatstabilisers'             => 703,
        'performance enhancers'                 => 704,     'performanceenhancers'          => 704,
        'progenitor cells'                      => 705,     'progenitorcells'               => 705,
        'terra mater blood bores'               => 706,     'terramaterbloodbores'          => 706,
        'kachirigin filter leeches'             => 707,     'kachirigin leaches'            => 707,     'kachiriginleaches'             => 707,
        'aganippe rush'                         => 708,     'aganipperush'                  => 708,
        'waters of shintara'                    => 709,     'watersofshintara'              => 709,
        'honesty pills'                         => 710,     'honestypills'                  => 710,
        'v herculis body rub'                   => 711,     'vherculisbodyrub'              => 711,
        'vega slimweed'                         => 712,     'vega slim weed'                => 712,     'vegaslimweed'                  => 712,
        'tauri chimes'                          => 713,     'taurichimes'                   => 713,
        'pantaa prayer sticks'                  => 714,     'pantaaprayersticks'            => 714,
        'fujin tea'                             => 715,     'fujintea'                      => 715,
        'alya body soap'                        => 716,     'alya bodily soap'              => 716,     'alyabodilysoap'                => 716,
        'advanced medicines'                    => 717,     'advancedmedicines'             => 717,
        'nanomedicines'                         => 718,


        // Metals (8)
        'aluminium'                             => 801,
        'beryllium'                             => 802,
        'cobalt'                                => 803,
        'copper'                                => 804,
        'gallium'                               => 805,
        'gold'                                  => 806,
        'indium'                                => 807,
        'lithium'                               => 808,
        'palladium'                             => 809,
        'platinum'                              => 810,
        'silver'                                => 811,
        'tantalum'                              => 812,
        'titanium'                              => 813,
        'uranium'                               => 814,
        'osmium'                                => 815,
        'thorium'                               => 816,
        'thallium'                              => 817,
        'lanthanum'                             => 818,
        'bismuth'                               => 819,
        'hafnium178'                            => 820,     'hafnium 178'                   => 820,
        'sothis crystalline gold'               => 821,     'sothiscrystallinegold'         => 821,
        'praseodymium'                          => 822,
        'samarium'                              => 823,
        'platinumaloy'                          => 824,
        'steel'                                 => 825,


        // Minerals (9)
        'bauxite'                               => 901,
        'bertrandite'                           => 902,
        'coltan'                                => 903,
        'gallite'                               => 904,
        'indite'                                => 905,
        'lepidolite'                            => 906,
        'rutile'                                => 907,
        'uraninite'                             => 908,
        'painite'                               => 909,
        'pyrophyllite'                          => 910,
        'moissanite'                            => 911,
        'goslarite'                             => 912,
        'cryolite'                              => 913,
        'cherbones blood crystals'              => 914,     'cherbonesbloodcrystals'        => 914,
        'ngadandari fire opals'                 => 915,     'ngadandarifireopals'           => 915,
        'taaffeite'                             => 916,
        'jadeite'                               => 917,
        'bromellite'                            => 918,
        'low temperature diamond'               => 919,     'lowtemperaturediamond'         => 919,
        'methanol monohydrate crystals'         => 920,     'methanol monohydrate'          => 920,     'methanolmonohydratecrystals'   => 920,
        'lithium hydroxide'                     => 921,     'lithiumhydroxide'              => 921,
        'methane clathrate'                     => 922,     'methaneclathrate'              => 922,
        'rhodplumsite'                          => 923,
        'serendibite'                           => 924,
        'monazite'                              => 925,
        'musgravite'                            => 926,
        'benitoite'                             => 927,
        'grandidierite'                         => 928,
        'alexandrite'                           => 929,
        'opal'                                  => 930,


        // Slavery (10)
        'imperial slaves'                       => 1001,    'imperialslaves'                => 1001,
        'slaves'                                => 1002,
        'master chefs'                          => 1003,    'masterchefs'                   => 1003,


        // Technology (11)
        'advanced catalysers'                   => 1101,    'advancedcatalysers'            => 1101,
        'animal monitors'                       => 1102,    'animalmonitors'                => 1102,
        'aquaponic systems'                     => 1103,    'aquaponicsystems'              => 1103,
        'auto fabricators'                      => 1104,    'autofabricators'               => 1104,
        'bio reducing lichen'                   => 1105,    'bioreducinglichen'             => 1105,
        'computer components'                   => 1106,    'computercomponents'            => 1106,
        'hazardous environment suits'           => 1107,    'hazardousenvironmentsuits'     => 1107,
        'terrain enrichment systems'            => 1108,    'land enrichment systems'       => 1108,    'terrainenrichmentsystems'      => 1108,    'landenrichmentsystems'         => 1108,
        'resonating separators'                 => 1109,    'resonatingseparators'          => 1109,
        'robotics'                              => 1110,
        'structural regulators'                 => 1111,    'structuralregulators'          => 1111,
        'mu tom imager'                         => 1112,    'muon imager'                   => 1112,    'mutomimager'                   => 1112,
        'xihe biomorphic companions'            => 1113,    'xihe companions'               => 1113,    'xihecompanions'                => 1113,
        'az cancri formula 42'                  => 1114,    'a z cancri formula42'          => 1114,    'azcancriformula42'             => 1114,
        'nanobreakers'                          => 1115,
        'telemetry suite'                       => 1116,    'telemetrysuite'                => 1116,
        'micro controllers'                     => 1117,    'microcontrollers'              => 1117,
        'ion distributor'                       => 1118,    'iondistributor'                => 1118,
        'hardware diagnostic sensor'            => 1119,    'diagnostic sensor'             => 1119,    'diagnosticsensor'              => 1119,
        'medical diagnostic equipment'          => 1120,    'medicaldiagnosticequipment'    => 1120,
        'classifiedexperimentalequipment'       => 1121,


        // Textiles (12)
        'leather'                               => 1201,
        'natural fabrics'                       => 1202,    'naturalfabrics'                => 1202,
        'synthetic fabrics'                     => 1203,    'syntheticfabrics'              => 1203,
        'belalans ray leather'                  => 1204,    'belalansrayleather'            => 1204,
        'damna carapaces'                       => 1205,    'damnacarapaces'                => 1205,
        'rapa bao snake skins'                  => 1206,    'rapabaosnakeskins'             => 1206,
        'vanayequi ceratomorpha fur'            => 1207,    'vanayequi rhino fur'           => 1207,    'vanayequirhinofur'             => 1207,    'vanayequiceratomorphafur'      => 1207,
        'banki amphibious leather'              => 1208,    'bankiamphibiousleather'        => 1208,
        'tiegfries synth silk'                  => 1209,    'tiegfriessynthsilk'            => 1209,
        'chameleon cloth'                       => 1210,    'chameleoncloth'                => 1210,
        'conductive fabrics'                    => 1211,    'conductivefabrics'             => 1211,
        'military grade fabrics'                => 1212,    'militarygradefabrics'          => 1212,


        // Waste (13)
        'biowaste'                              => 1301,
        'chemical waste'                        => 1302,    'chemicalwaste'                 => 1302,
        'scrap'                                 => 1303,
        'toxic waste'                           => 1304,    'toxicwaste'                    => 1304,
        'rockforthfertiliser'                   => 1305,


        // Weapons (14)
        'non lethal weapons'                    => 1401,    'nonlethalweapons'              => 1401,
        'personal weapons'                      => 1402,    'personalweapons'               => 1402,
        'reactive armour'                       => 1403,    'reactivearmour'                => 1403,
        'battle weapons'                        => 1404,    'battleweapons'                 => 1404,
        'kamorin historic weapons'              => 1405,    'kamorinhistoricweapons'        => 1405,
        'landmines'                             => 1406,
        'borasetani pathogenetics'              => 1407,    'borasetanipathogenetics'       => 1407,
        'hip 118311 swarm'                      => 1408,    'hip118311swarm'                => 1408,
        'holva duelling blades'                 => 1409,    'holvaduellingblades'           => 1409,
        'gilya signature weapons'               => 1410,    'gilyasignatureweapons'         => 1410,


        // Unknown (15)
        'drones'                                => 1501,    'limpet'                        => 1501,


        // Salvage (16)
        'ai relics'                             => 1601,    'airelics'                      => 1601,
        'antiquities'                           => 1602,
        'sap 8 core container'                  => 1603,    'sap8corecontainer'             => 1603,
        'trinkets of hidden fortune'            => 1604,    'trinketsoffortune'             => 1604,
        'u s s cargo trade data'                => 1605,    'trade data'                    => 1605,    'usscargotradedata'             => 1605,    'tradedata'                     => 1605,
        'occupied cryoPod'                      => 1606,    'occupiedcryopod'               => 1606,
        'u s s cargo black box'                 => 1607,    'black box'                     => 1607,    'usscargoblackbox'              => 1607,    'blackbox'                      => 1607,
        'u s s cargo military plans'            => 1608,    'military plans'                => 1608,    'usscargomilitaryplans'         => 1608,    'militaryplans'                 => 1608,
        'u s s cargo ancient artefact'          => 1609,    'ancient artefact'              => 1609,    'usscargoancientartefact'       => 1609,
        'u s s cargo rare artwork'              => 1610,    'rare artwork'                  => 1610,    'usscargorareartwork'           => 1610,    'rareartwork'                   => 1610,
        'u s s cargo experimental chemicals'    => 1611,    'experimental chemicals'        => 1611,    'usscargoexperimentalchemicals' => 1611,    'experimentalchemicals'         => 1611,
        'u s s cargo rebel transmissions'       => 1612,    'rebel transmissions'           => 1612,    'usscargorebeltransmissions'    => 1612,    'rebeltransmissions'            => 1612,
        'u s s cargo prototype tech'            => 1613,    'prototype tech'                => 1613,    'usscargoprototypetech'         => 1613,    'prototypetech'                 => 1613,
        'u s s cargo technical blueprints'      => 1614,    'technical blueprints'          => 1614,    'usscargotechnicalblueprints'   => 1614,    'technicalblueprints'           => 1614,
        'unknown artifact'                      => 1615,    'unknownartifact'               => 1615,
        'military intelligence'                 => 1616,    'militaryintelligence'          => 1616,
        'salvageable wreckage'                  => 1617,
        'encrypted data storage'                => 1618,    'encripteddatastorage'          => 1618,    'encrypteddatastorage'          => 1618,
        'personal effects'                      => 1619,    'personaleffects'               => 1619,
        'commercial samples'                    => 1620,    'comercialsamples'              => 1620,
        'tactical data'                         => 1621,    'tacticaldata'                  => 1621,
        'assault plans'                         => 1622,    'assaultplans'                  => 1622,
        'encrypted correspondence'              => 1623,    'encryptedcorrespondence'       => 1623,
        'diplomatic bag'                        => 1624,    'diplomaticbag'                 => 1624,
        'scientific research'                   => 1625,    'scientificresearch'            => 1625,
        'scientific samples'                    => 1626,    'scientificsamples'             => 1626,
        'political prisoner'                    => 1627,    'politicalprisoner'             => 1627,
        'hostage'                               => 1628,
        'geological samples'                    => 1629,    'geologicalsamples'             => 1629,
        'unstable data core'                    => 1630,    'unstabledatacore'              => 1630,
        'occupied escape pod'                   => 1631,
        'data core'                             => 1632,
        'galactic travel guide'                 => 1633,    'galactictravelguide'           => 1633,
        'mysterious idol'                       => 1634,
        'prohibited research materials'         => 1635,
        'antimatter containment unit'           => 1636,
        'space pioneer relics'                  => 1637,
        'fossil remnants'                       => 1638,    'fossilremnants'                => 1638,
        'unknown artifact2'                     => 1639,    'unknown probe'                 => 1639,    'unknownartifact2'              => 1639,    'unknownprobe'                  => 1639,
        'precious gems'                         => 1640,    'preciousgems'                  => 1640,
        'unknown artifact3'                     => 1641,    'unknown link'                  => 1641,    'unknownartifact3'              => 1641,    'unknownlink'                   => 1641,
        'unknown biological matter'             => 1642,    'unknownbiologicalmatter'       => 1642,
        'unknown resin'                         => 1643,    'unknownresin'                  => 1643,
        'unknown technology samples'            => 1644,    'unknowntechnologysamples'      => 1644,
        'smallexplorationdatacash'              => 1645,
        'largeexplorationdatacash'              => 1646,
        'ancienttotem'                          => 1647,
        'ancientorb'                            => 1648,
        'ancientcasket'                         => 1649,
        'ancient relic'                         => 1650,    'ancientrelic'                  => 1650,
        'ancienttablet'                         => 1651,
        'ancienturn'                            => 1652,
        'wreckagecomponents'                    => 1653,
        'damagedescapepod'                      => 1654,
        'earthrelics'                           => 1655,
        'ancientartefact'                       => 1656,
        'antiquejewellery'                      => 1657,
        'datacore'                              => 1658,
        'genebank'                              => 1659,
        // 1660 was a lie, see 1638
        'mysteriousidol'                        => 1661,
        'spacepioneerrelics'                    => 1662,
        'timecapsule'                           => 1663,
        'fertiliser'                            => 1664,
        'insectoidmeat'                         => 1665,    'insectoidlivestock'            => 1665,
        'prohibitedresearchmaterials'           => 1666,
        'antimattercontainmentunit'             => 1667,
        'ancientkey'                            => 1668,
        'ancientrelictg'                        => 1669,
        'unocuppiedescapepod'                   => 1670,
        'unknownsack'                           => 1671,
        'thargoidpod'                           => 1672,
        'coralsap'                              => 1673,
        'unknownmineral'                        => 1674,
        'unknownrefinedmineral'                 => 1675,

        'thargoidtissuesampletype1'             => 1800,
        'thargoidheart'                         => 1801,
        'thargoidtissuesampletype2'             => 1802,
        'thargoidtissuesampletype3'             => 1803,
        'thargoidscouttissuesample'             => 1804,
        'thargoidtissuesampletype4'             => 1805,
        'thargoidtissuesampletype5'             => 1806,
        'thargoidgeneratortissuesample'         => 1807,
        'thargoidtissuesampletype6'             => 1808,
        'thargoidtissuesampletype9a'            => 1809,
        'thargoidtissuesampletype9b'            => 1810,
        'thargoidtissuesampletype9c'            => 1811,
        'thargoidtissuesampletype10a'           => 1812,
        'thargoidtissuesampletype10b'           => 1813,
        'thargoidtissuesampletype10c'           => 1814,
        'thargoidtissuesampletype7'             => 1815,
        'thargoidtitandrivecomponent'           => 1816,
        'thargoidcystspecimen'                  => 1817,

        'm3_tissuesample_spores'                => 1900,
        'm3_tissuesample_membrane'              => 1901,
        'm3_tissuesample_mycelium'              => 1902,

        'm_tissuesample_soft'                   => 1920,
        'm_tissuesample_fluid'                  => 1921,
        'm_tissuesample_nerves'                 => 1922,

        's_tissuesample_cells'                  => 1930,
        's_tissuesample_surface'                => 1931,
        's_tissuesample_core'                   => 1932,

        's6_tissuesample_cells'                 => 1940,
        's6_tissuesample_coenosarc'             => 1941,
        's6_tissuesample_mesoglea'              => 1942,

        's9_tissuesample_shell'                 => 1950,


        // Powerplay (99)
        'aislingmediamaterials'                 => 9901,
        'aislingmediaresources'                 => 9902,
        'aislingpromotionalmaterials'           => 9903,
        'alliancetradeagreements'               => 9904,
        'alliancelegaslativecontracts'          => 9905,
        'alliancelegaslativerecords'            => 9906,
        'lavignycorruptiondossiers'             => 9907,
        'lavignyfieldsupplies'                  => 9908,
        'lavignygarisonsupplies'                => 9909,
        'restrictedpackage'                     => 9910,
        'liberalcampaignmaterials'              => 9911,
        'federalaid'                            => 9912,
        'federaltradecontracts'                 => 9913,
        'loanedarms'                            => 9914,
        'patreusfieldsupplies'                  => 9915,
        'patreusgarisonsupplies'                => 9916,
        'restrictedintel'                       => 9917,
        'republicanfieldsupplies'               => 9918,
        'republicangarisonsupplies'             => 9919,
        'siriusfranchisepackage'                => 9920,
        'siriuscommercialcontracts'             => 9921,
        'siriusindustrialequipment'             => 9922,
        'torvalcommercialcontracts'             => 9923,
        'imperialprisoner'                      => 9924,
        'utopianpublicity'                      => 9925,
        'utopianfieldsupplies'                  => 9926,
        'utopiandissident'                      => 9927,
        'illicitconsignment'                    => 9928,
        'unmarkedweapons'                       => 9929,
        'onionheadsamples'                      => 9930,
        'counterculturesupport'                 => 9931,
        'markedslaves'                          => 9932,
        'torvaldeeds'                           => 9933,
        'onionheadderivatives'                  => 9934,
        'outofdategoods'                        => 9935,
        'undergroundsupport'                    => 9936,
        'gromcounterintelligence'               => 9937,
        'gromwartrophies'                       => 9938,
        'kainemisinformation'                   => 9939,
    ];

    /**
     * List of rare commodity
     */
    static protected $rare  = [
        108, 109, 110, 111, 112,
        214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227,
        318, 319, 320, 321, 322, 323, 324, 325, 326, 327, 328, 329, 330, 331, 332, 333,
        433, 434, 435, 436, 437, 438, 439, 440, 441, 442, 443, 444, 445, 446, 447, 448, 449,
        506,
        613, 614, 615,
        708, 709, 710, 711, 712, 713, 714, 715, 716,
        821,
        914, 915,
        1003,
        1113, 1114,
        1204, 1205, 1206, 1207, 1208, 1209, 1210,
        1409, 1410,
        
        1816,
    ];
}