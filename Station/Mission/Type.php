<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Mission;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
           1                                => 'Courier job available',
           2                                => 'Engineer Invitation Contract',
           3                                => 'Federal Navy courier job available',
           4                                => 'Internal report delivery',
           5                                => 'Boom data delivery',
           6                                => 'Courier required for sensitive poll data',
           7                                => 'Secure information needs delivering',
           8                                => 'Strategic data transfer',
           9                                => 'Internal security data delivery',
          10                                => 'Courier job for Imperial naval intelligence',
          11                                => 'Famine data needs transportation',
          12                                => 'Sensitive civil unrest data delivery',
          13                                => 'Internal report delivery',
          14                                => 'Expansion data couriering needed',
          15                                => 'Outbreak data transportation needed',
         
         101                                => '%passengerCount% %passengerType% seeking transport',
         102                                => '%passengerCount% %passengerType% seeking transport',
         103                                => '%passengerCount% %passengerType% seeking transport',
         104                                => '%passengerCount% %passengerType% seeking transport',
         105                                => '%passengerCount% %passengerType% seeking transport',
         106                                => '%passengerCount% %passengerType% seeking transport',
         107                                => '%passengerCount% %passengerType% seeking transport',
         108                                => '%passengerCount% %passengerType% seeking transport',
         109                                => '%passengerCount% %passengerType% seeking transport',
         110                                => '%passengerCount% %passengerType% seeking transport',
         111                                => '%passengerCount% %passengerType% seeking transport',
         112                                => '%passengerCount% %passengerType% require transportation',
         113                                => '%passengerCount% %passengerType% require transportation',
         114                                => '%passengerCount% %passengerType% seeking transport',
         115                                => '%passengerCount% %passengerType% seeking transport',
         116                                => '%passengerCount% %passengerType% seeking transport',
         117                                => '%passengerCount% %passengerType% seeking transport',
         118                                => '%passengerCount% %passengerType% seeking transport',
         119                                => '%passengerCount% %passengerType% seeking transport',
         120                                => '%passengerCount% %passengerType% seeking transport',
         121                                => '%passengerCount% %passengerType% seeking transport',
         122                                => '%passengerCount% %passengerType% seeking transport',
         123                                => '%passengerCount% %passengerType% seeking transport',
         
         201                                => 'Transport %passengerName%',
         202                                => 'Transport %passengerName%',
         
         401                                => 'Donate %commodityCount% units of %commodity%',
         402                                => 'Find %commodityCount% units of %commodity%',
         403                                => 'Give %commodityCount% units of %commodity% to stop the famine',
         404                                => 'Delight us with %commodityCount% units of %commodity%',
         405                                => 'Donate %commodityCount% units of %commodity%',
         406                                => 'Bring in %commodityCount% units of %commodity%',
         
         451                                => 'Donate %donation% Cr to the cause',
         452                                => 'Donate %donation% Cr to the cause',
         
         501                                => 'Deliver %commodityCount% units of %commodity%',
         502                                => 'Help the cooperative by delivering %commodityCount% units of %commodity%',
         503                                => 'Agricultural supply run: %commodityCount% units of %commodity%',
         504                                => 'Boom time delivery of %commodityCount% units of %commodity%',
         505                                => 'Deliver %commodityCount% units of %commodity% in the name of democracy',
         506                                => 'Help quell civil unrest by transporting %commodityCount% units of %commodity%',
         507                                => 'Support the confederacy by delivering %commodityCount% units of %commodity%',
         508                                => 'Deliver war supplies of %commodityCount% units of %commodity%',
         509                                => 'Take %commodityCount% units of %commodity% in support of the current civil war',
         510                                => 'Outbreak relief: %commodityCount% units of %commodity%',
         511                                => 'Support famine relief by delivering %commodityCount% units of %commodity%',
         512                                => 'Federal navy supply mission',
         513                                => 'Imperial navy supply run',
         514                                => 'Sensitive supply operation',
         
         601                                => 'Source and return %commodityCount% units of %commodity%',
         602                                => 'Industry needs %commodityCount% units of %commodity%',
         603                                => 'Supply %commodityCount% units of %commodity%',
         604                                => 'Bring us %commodityCount% units of %commodity%',
         605                                => 'Famine aid needed %commodityCount% units of %commodity%',
         606                                => 'Outbreak aid needed %commodityCount% units of %commodity%',
         607                                => 'We need %commodityCount% units of %commodity%',
         608                                => 'Source and return %commodityCount% units of %commodity%',
         609                                => 'The Federal Navy requires %commodityCount% units of %commodity%',
         
         701                                => '%commodity% salvage operation',
         702                                => 'Wartime %commodity% salvage operation',
         703                                => 'Civil war %commodity% salvage operation',
         704                                => '%commodity% salvage contract for refinery',
         705                                => 'Counter-insurgency %commodity% salvage mission',
         706                                => '%commodity% famine salvage operation',
         707                                => '%commodity% salvage for expansion effort',
         708                                => '%commodity% outbreak salvage contract',
         709                                => '%commodity% Imperial Navy salvage mission',
         710                                => '%commodity% Federal Navy retrieval mission',
         
         751                                => 'Illegal %commodity% salvage operation',
         752                                => 'Prohibited %commodity% salvage operation',
         753                                => 'Illegal %commodity% salvage contract',
         754                                => 'Illegal %commodity% expansion salvage operation',
         755                                => '%commodity% salvage for the court',
         
         802                                => 'Power down the %target% power grid',
          
        1001                                => 'Massacre the %targetFaction% ships',
        1002                                => 'Massacre the %targetFaction% ships',
        1003                                => 'Massacre the %targetFaction% ships',
        1004                                => 'Imperial navy strike contract',
        1005                                => 'Federal navy strike contract',
        1006                                => 'Mete out justice on the %targetFaction% ships',
        1007                                => 'Massacre the %targetFaction% ships',
        1008                                => 'Put down the %targetFaction% ships',
        1009                                => 'Engage and destroy the %targetFaction% ships',
        
        1051                                => 'Corporate strike against the %targetFaction% Sentry Skimmer',
        1052                                => 'Clean out the %targetFaction% Sentry Skimmer',
        1053                                => 'Support expansion by destroying the %targetFaction% Sentry Skimmer',
        1054                                => 'Skimmer destruction of %targetFaction% Sentry Skimmer',
        1055                                => 'Massacre the %targetFaction% Sentry Skimmer for the state',
        
        1101                                => 'Assassinate %targetType%: %target%',
        
        2001                                => '%passengerName% seeks sightseeing adventure',
        2002                                => '%passengerName% seeks sightseeing adventure',
        
        2501                                => 'Planetary scan job',
        
        3001                                => 'Planetary scan job',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'mission_courier'                                   => 1,
        'mission_courier_engineer'                          => 2,
        'mission_courier_rankfed'                           => 3,
        'mission_courier_democracy'                         => 4,
        'mission_courier_boom'                              => 5,
        'mission_courier_elections'                         => 6,
        'mission_courier_civilwar'                          => 7,
        'mission_courier_war'                               => 8,
        'mission_courier_lockdown'                          => 9,
        'mission_courier_rankemp'                           => 10,
        'mission_courier_famine'                            => 11,
        'mission_courier_civilunrest'                       => 12,
        'mission_courier_service'                           => 13,
        'mission_courier_expansion'                         => 14,
        'mission_courier_outbreak'                          => 15,
        
        'mission_passengerbulk'                             => 101,
        'mission_passengerbulk_rebel_arriving'              => 102,
        'mission_passengerbulk_rebel_leaving'               => 103,
        'mission_passengerbulk_business_arriving'           => 104,
        'mission_passengerbulk_business_leaving'            => 105,
        'mission_passengerbulk_aidworker_arriving'          => 106,
        'mission_passengerbulk_aidworker_leaving'           => 107,
        'mission_passengerbulk_polprisoner_arriving'        => 108,
        'mission_passengerbulk_polprisoner_leaving'         => 109,
        'mission_passengerbulk_refugee_arriving'            => 110,
        'mission_passengerbulk_refugee_leaving'             => 111,
        'mission_passengerbulk_prisonerofwar_arriving'      => 112,
        'mission_passengerbulk_prisonerofwar_leaving'       => 113,
        'mission_passengerbulk_protestor_arriving'          => 114,
        'mission_passengerbulk_protestor_leaving'           => 115,
        'mission_passengerbulk_medical_arriving'            => 116,
        'mission_passengerbulk_medical_leaving'             => 117,
        'mission_passengerbulk_security_arriving'           => 118,
        'mission_passengerbulk_security_leaving'            => 119,
        'mission_passengerbulk_politician_arriving'         => 120,
        'mission_passengerbulk_politician_leaving'          => 121,
        'mission_passengerbulk_scientist_arriving'          => 122,
        'mission_passengerbulk_scientist_leaving'           => 123,
        
        'mission_passengervip'                              => 201,
        'mission_passengervip_doctor_war'                   => 202,
        
        'mission_altruism'                                  => 401,
        'mission_altruism_outbreak'                         => 402,
        'mission_altruism_famine'                           => 403,
        'mission_altruism_theocracy'                        => 404,
        'mission_altruism_bust'                             => 405,
        'mission_altruism_civilunrest'                      => 406,
        
        'mission_altruismcredits'                           => 451,
        'mission_altruismcredits_bust'                      => 452,
        
        'mission_delivery'                                  => 501,
        'mission_delivery_cooperative'                      => 502,
        'mission_delivery_agriculture'                      => 503,
        'mission_delivery_boom'                             => 504,
        'mission_delivery_democracy'                        => 505,
        'mission_delivery_civilunrest'                      => 506,
        'mission_delivery_confederacy'                      => 507,
        'mission_delivery_war'                              => 508,
        'mission_delivery_civilwar'                         => 509,
        'mission_delivery_outbreak'                         => 510,
        'mission_delivery_famine'                           => 511,
        'mission_delivery_rankfed'                          => 512,
        'mission_delivery_rankemp'                          => 513,
        'mission_delivery_founder'                          => 514,
        
        'mission_collect'                                   => 601,
        'mission_collect_industrial'                        => 602,
        'mission_collect_civilwar'                          => 603,
        'mission_collect_bust'                              => 604,
        'mission_collect_famine'                            => 605,
        'mission_collect_outbreak'                          => 606,
        'mission_collect_civilunrest'                       => 607,
        'mission_collect_rankemp'                           => 608,
        'mission_collect_rankfed'                           => 609,
        
        'mission_salvage'                                   => 701,
        'mission_salvage_war'                               => 702,
        'mission_salvage_civilwar'                          => 703,
        'mission_salvage_refinery'                          => 704,
        'mission_salvage_civilunrest'                       => 705,
        'mission_salvage_famine'                            => 706,
        'mission_salvage_expansion'                         => 707,
        'mission_salvage_outbreak'                          => 708,
        'mission_salvage_rankemp'                           => 709,
        'mission_salvage_rankfed'                           => 710,
        
        'mission_salvage_illegal'                           => 751,
        'mission_salvage_illegal_terraforming'              => 752,
        'mission_salvage_illegal_bust'                      => 753,
        'mission_salvage_illegal_expansion'                 => 754,
        'mission_salvage_illegal_feudal'                    => 755,
        
        'mission_disable_hightech'                          => 802,
        
        'mission_massacre'                                  => 1001,
        'mission_massacre_conflict_war'                     => 1002,
        'mission_massacre_conflict_civilwar'                => 1003,
        'mission_massacre_rankemp'                          => 1004,
        'mission_massacre_rankfed'                          => 1005,
        'mission_massacre_legal_prisoncolony'               => 1006,
        'mission_massacre_legal_bust'                       => 1007,
        'mission_massacre_legal_civilunrest'                => 1008,
        'mission_massacre_legal_military'                   => 1009,
        
        'mission_massacre_skimmer_corporation'              => 1051,
        'mission_massacre_skimmer_refinery'                 => 1052,
        'mission_massacre_skimmer_expansion'                => 1053,
        'mission_massacre_skimmer_civilunrest'              => 1054,
        'mission_massacre_skimmer_communism'                => 1055,
        
        'mission_assassinate'                               => 1101,
        
        'mission_sightseeing'                               => 2001,
        'mission_sightseeing_criminal_civilunrest'          => 2002,
        
        'mission_scan'                                      => 2501,
        
        'chain_planetaryincursions'                         => 3001,
    ];
}