<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Mission;
use         EDSM\Alias;

class Effect extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
           1                                    => 'The economic status of %factionName% has improved in the %systemName% system.',

           6                                    => 'The security status of %factionName% has improved in the %systemName% system.',

          11                                    => 'Without medical support, %factionName% may soon be forced to declare a state of outbreak in the %systemName% system.',
          12                                    => 'With fewer reported cases of illness, %factionName% hope they have prevented a full outbreak in the $#System; system.',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'interaction_summary_ep_up'             => 1,

        'interaction_summary_sp_up'             => 6,

        'interaction_summary_outbreak_up'       => 11,
        'interaction_summary_outbreak_down'     => 12,
    ];
}