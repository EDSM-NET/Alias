<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Commander\Crime;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         1  => 'Assault',
         2  => 'Murder',
         3  => 'Piracy',
         4  => 'Interdiction',
         5  => 'Illegal cargo',
         6  => 'Disobey police',
         7  => 'Fire in no fire zone',
         8  => 'Fire in station',
         9  => 'Dumping dangerous',
        10  => 'Dumping near station',
        11  => 'dockingminor_blockingairlock',
        12  => 'dockingmajor_blockingairlock',
        13  => 'dockingminor_blockinglandingpad',
        14  => 'dockingmajor_blockinglandingpad',
        15  => 'dockingminor_trespass',
        16  => 'dockingmajor_trespass',
        17  => 'collidedatspeedinnofirezone',
        18  => 'collidedatspeedinnofirezone_hulldamage',

        30  => 'recklessWeaponsDischarge',

        50  => 'Passenger wanted',

        60  => 'onfoot_carryingillegalgoods',
        61  => 'onfoot_identitytheft',
        62  => 'onfoot_recklessendangerment',
        63  => 'onfoot_arccutteruse',
        64  => 'onfoot_detectionofweapon',
        65  => 'onfoot_murder',
        66  => 'onfoot_overchargeintent',
        67  => 'onfoot_damagingdefences',
        68  => 'onfoot_overchargedport',
        69  => 'onfoot_trespass',
        70  => 'onfoot_carryingillegaldata',
        71  => 'onfoot_propertytheft',
        72  => 'onfoot_theft',
        73  => 'onfoot_profilecloningintent',
        74  => 'onfoot_failuretosubmittopolice',
        75  => 'onfoot_datatransfer',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'assault'                                   => 1,
        'murder'                                    => 2,
        'piracy'                                    => 3,
        'interdiction'                              => 4,
        'illegalcargo'                              => 5,
        'disobeypolice'                             => 6,
        'fireinnofirezone'                          => 7,
        'fireinstation'                             => 8,
        'dumpingdangerous'                          => 9,
        'dumpingnearstation'                        => 10,
        'dockingminor_blockingairlock'              => 11,      'dockingminorblockingairlock'               => 11,
        'dockingmajor_blockingairlock'              => 12,      'dockingmajorblockingairlock'               => 12,
        'dockingminor_blockinglandingpad'           => 13,      'dockingminorblockinglandingpad'            => 13,
        'dockingmajor_blockinglandingpad'           => 14,      'dockingmajorblockinglandingpad'            => 14,
        'dockingminor_trespass'                     => 15,      'dockingminortresspass'                     => 15,
        'dockingmajor_trespass'                     => 16,      'dockingmajortresspass'                     => 16,
        'collidedatspeedinnofirezone'               => 17,
        'collidedatspeedinnofirezone_hulldamage'    => 18,

        'recklessweaponsdischarge'                  => 30,

        'passengerwanted'                           => 50,

        'onfoot_carryingillegalgoods'               => 60,
        'onfoot_identitytheft'                      => 61,
        'onfoot_recklessendangerment'               => 62,
        'onfoot_arccutteruse'                       => 63,
        'onfoot_detectionofweapon'                  => 64,
        'onfoot_murder'                             => 65,
        'onfoot_overchargeintent'                   => 66,
        'onfoot_damagingdefences'                   => 67,
        'onfoot_overchargedport'                    => 68,
        'onfoot_trespass'                           => 69,
        'onfoot_carryingillegaldata'                => 70,
        'onfoot_propertytheft'                      => 71,
        'onfoot_theft'                              => 72,
        'onfoot_profilecloningintent'               => 73,
        'onfoot_failuretosubmittopolice'            => 74,
        'onfoot_datatransfer'                       => 75,
    ];
}