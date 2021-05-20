<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Commander\MicroResource;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
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
        // Odyssey - Items (40)
        'biochemicalagent'                      => 4001,
        'geneticsample'                         => 4002,
        'chemicalsample'                        => 4004,
        'deepmantlesample'                      => 4007,
        'insightdatabank'                       => 4013,
        'insightentertainmentsuite'             => 4014,
        'personalcomputer'                      => 4018,
        'personaldocuments'                     => 4019,
        'largecapacitypowerregulator'           => 4020,
        'pyrolyticcatalyst'                     => 4021,
        'shipschematic'                         => 4022,
        'suitschematic'                         => 4023,
        'surveillanceequipment'                 => 4024,
        'syntheticgenome'                       => 4025,
        'syntheticpathogen'                     => 4026,
        'vehicleschematic'                      => 4029,
        'weaponschematic'                       => 4030,

        // Odyssey - Data (41)
        'combattrainingmaterial'                => 4116,
        'combatantperformance'                  => 4117,
        'employeedirectory'                     => 4119,
        'employmenthistory'                     => 4121,
        'factiondonatorlist'                    => 4125,
        'pharmaceuticalpatents'                 => 4150,
        'surveilleancelogs'                     => 4165,
        'tacticalplans'                         => 4166,
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
    ];
}