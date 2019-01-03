<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class DefenceModifierHealthAddition extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Additional Armour';

    /**
     * List of categories
     */
    static protected $have          = [
        'Hull Reinforcements',
        'Meta Alloy Hull Reinforcement',
        'Guardian Hull Reinforcement',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [

        // Optional Internal > Hull Reinforcement Package
          4801  => 80,
          4802  => 110,

          4811  => 150,
          4812  => 190,

          4821  => 230,
          4822  => 260,

          4831  => 300,
          4832  => 330,

          4841  => 360,
          4842  => 390,

        // Optional Internal > Meta Alloy Hull Reinforcement
          6001  => 72,
          6002  => 99,

          6011  => 135,
          6012  => 171,

          6021  => 207,
          6022  => 234,

          6031  => 270,
          6032  => 297,

          6041  => 324,
          6042  => 351,

        // Optional Internal > Guardian Hull Reinforcement
          6101  => 100,
          6102  => 138,

          6111  => 188,
          6112  => 238,

          6121  => 288,
          6122  => 325,

          6131  => 375,
          6132  => 413,

          6141  => 450,
          6142  => 488,
    ];
}
