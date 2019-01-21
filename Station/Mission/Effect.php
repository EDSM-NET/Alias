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
           1                    => 'The economic status of %factionName% has improved in the %systemName% system.',
           2                    => 'The economic status of %factionName% has declined in the %systemName% system.',

           6                    => 'The security status of %factionName% has improved in the %systemName% system.',
           7                    => 'The security status of %factionName% has declined in the %systemName% system.',

          11                    => 'Without medical support, %factionName% may soon be forced to declare a state of outbreak in the %systemName% system.',
          12                    => 'With fewer reported cases of illness, %factionName% hope they have prevented a full outbreak in the %systemName% system.',

          21                    => '%factionName% are showing signs of a period of economic bust in the %systemName% system.',
          22                    => 'After showing an economic resurgence, %factionName% are less likely to experience a bust in the %systemName% system.',

          31                    => '%factionName% are experiencing increased growth that could lead to an economic boom in the %systemName% system.',
          32                    => '%factionName% are suffering from lower than expected economic growth, reducing the chance of a boom in the %systemName% system.',

          41                    => 'Further terrorist actions could see the %factionName% consider a security lockdown in the %systemName% system. ',
          42                    => '%factionName% show less sign of imposing a security lockdown in the %systemName% system.',

          51                    => '%factionName% are showing low food stocks. Without supplies, this could lead to a famine in the %systemName% system.',
          52                    => 'After sourcing more supplies, %factionName% have reduced the chances of famine in the %systemName% system.',

          61                    => 'Continued acts of violence against the %factionName% could create civil unrest in the %systemName% system.',
          62                    => '%factionName% are happy to report improved civil contentment, making a period of civil unrest unlikely in the %systemName% system.',
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
        'interaction_summary_ep_down'           => 2,

        'interaction_summary_sp_up'             => 6,
        'interaction_summary_sp_down'           => 7,

        'interaction_summary_outbreak_up'       => 11,
        'interaction_summary_outbreak_down'     => 12,

        'interaction_summary_bust_up'           => 21,
        'interaction_summary_bust_down'         => 22,

        'interaction_summary_boom_up'           => 31,
        'interaction_summary_boom_down'         => 32,

        'interaction_summary_lockdown_up'       => 41,
        'interaction_summary_lockdown_down'     => 42,

        'interaction_summary_famine_up'         => 51,
        'interaction_summary_famine_down'       => 52,

        'interaction_summary_civilunrest_up'    => 61,
        'interaction_summary_civilunrest_down'  => 62,

    ];
}