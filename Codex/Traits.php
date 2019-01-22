<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Codex;
use         EDSM\Alias;

class Traits extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
         11                                 => 'Releases spores if approached without lights.',
         14                                 => 'Releases spores if scanned.',

         51                                 => 'Moves towards ship if approached.',
         52                                 => 'Moved towards ship if approached with lights on.',
         53                                 => 'Is attracted to a ship\'s shields, and drains them when in proximity.',
         54                                 => 'Moves towards ship if scanned.',

        101                                 => 'Turns towards nearby light sources.',
        102                                 => 'Turns towards nearby light sources, and releases spores.',

        151                                 => 'Turns towards ship if approached.',
        153                                 => 'Turns towards ship if approached.', // Same?!

        201                                 => 'Rapidly heats the surrounding space if approached.',
        202                                 => 'Interferes with ship systems and drains shields if approached.',
        203                                 => 'Releases destructive shockwaves if approached.',

        250                                 => 'Retreats if attacked.',

        301                                 => 'Approaches and releases destructive shockwave.',

        351                                 => 'Retreats rapidly if approached.',

        401                                 => 'Moves if approached with lights on.',
        402                                 => 'Temporarily follows ship if approached.',
        551                                 => 'Moves if approached with lights on.',

        451                                 => 'Releases spores if approached.',

        501                                 => 'Turns towards nearest star.',



        601                                 => 'Approaches any nearby objects.',

        651                                 => 'Approaches and damages nearby objects.',

        701                                 => 'Retreats if approached.',

        751                                 => 'Moves towards other seeds.',

        801                                 => 'Turns towards nearest star.',

        851                                 => 'Moves without apparent purpose.',

        903                                 => 'Retreats if scanned.',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'o_l_emit01_appro'                  => 11,
        'o_l_emit04_appro'                  => 14,

        'o_s_appro01_appro'                 => 51,
        'o_s_appro02_appro'                 => 52,
        'o_s_appro03_appro'                 => 53,
        'o_s_appro04_appro'                 => 54,

        'o_l_turn01_observe'                => 101,
        'o_l_turn02_observe'                => 102,

        's_s_turn01_observe'                => 151,
        's_s_turn03_observe'                => 153,

        'p_l_aefect01'                      => 201,
        'p_l_aefect02'                      => 202,
        'p_l_aefect03'                      => 203,

        'o_s_flee_attack'                   => 250,

        'p_l_attack01'                      => 301,

        's_s_move_jet'                      => 351,

        'p_l_movearnd03'                    => 401,
        'p_l_movearnd02'                    => 402,
        'p_l_movearnd01'                    => 551,

        's_s_cldatck01_cld'                 => 451,

        'o_l_turn01_idle'                   => 501,



        'o_l_atck01_appro'                  => 601,

        'o_l_atck01_atck'                   => 651,

        's_s_cluster_flee'                  => 701,

        's_s_cluster'                       => 751,

        's_s_turn01_idle'                   => 801,

        'o_s_move01_idle'                   => 851,

        'o_s_flee03_appro'                  => 903,
    ];
}