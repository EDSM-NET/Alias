<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Commander;
use         EDSM\Alias;

class Badge extends Alias
{
    use \EDSM\Alias\Commander\Badge;

    /**
     * List of badges used over EDSM
     *
     * - name           : Display name
     * - description    : Display description
     *
     * - innerColor     : RGB color used by the inner circle badge
     * - outerColor     : RGB color used by the outer (including trails and stars) circle badge
     *
     * - background     : background number to use, default to badge id if exists
     * - layout         : layout number to use, default to 1
     * - foreground     : foreground number to use, default to badge id if exists
     *
     * - innerTextColor : RGB color used by the text
     * - outerTextColor : RGB color used by the text
     *
     * - verticalOffset : Vertical offset of the text (Default to 300 without foreground layout, 200 with foreground layout)
     * - fontSize       : Font size of the text, default to 30
     */
    static protected $name  = [
        /**
         * RANKS BADGES
         */
         5      => [
            'name'              => 'A new Ranulph?',
            'description'       => 'Reach an Explorer Rank of Trailblazer.',
            'active'            => true,

            'innerColor'        => [79, 255, 255],
            'outerColor'        => [28, 30, 34],

            'layout'            => 2,
        ],
        10      => [
            'name'              => 'Elite Explorer',
            'description'       => 'Reach an Explorer Rank of Elite.',
            'active'            => true,

            'innerColor'        => [79, 255, 255],
            'outerColor'        => [79, 255, 255],
        ],

        15      => [
            'name'              => 'Playing the Markets',
            'description'       => 'Reach a Trade Rank of Merchant.',
            'active'            => true,

            'innerColor'        => [255, 253, 255],
            'outerColor'        => [28, 30, 34],

            'layout'            => 2,
        ],
        20      => [
            'name'              => 'Elite Trader',
            'description'       => 'Reach a Trade Rank of Elite.',
            'active'            => true,

            'innerColor'        => [255, 253, 255],
            'outerColor'        => [255, 253, 255],
        ],

        25      => [
            'name'              => 'Combative',
            'description'       => 'Reach a Combat Rank of Expert.',
            'active'            => true,

            'innerColor'        => [252, 191, 4],
            'outerColor'        => [28, 30, 34],

            'layout'            => 2,
        ],
        30      => [
            'name'              => 'Elite Combat',
            'description'       => 'Reach a Combat Rank of Elite.',
            'active'            => true,

            'innerColor'        => [252, 191, 4],
            'outerColor'        => [252, 191, 4],
        ],

        35      => [
            'name'              => 'Pro Player',
            'description'       => 'Reach a CQC Rank of Professional.',
            'active'            => true,

            'innerColor'        => [251, 0, 0],
            'outerColor'        => [28, 30, 34],

            'layout'            => 2,
        ],
        40      => [
            'name'              => 'Elite CQC',
            'description'       => 'Reach a CQC Rank of Elite.',
            'active'            => true,

            'innerColor'        => [251, 0, 0],
            'outerColor'        => [251, 0, 0],
        ],

        50      => [
            'name'              => 'Triple Elite',
            'description'       => 'Reach a Combat Rank, Explorer Rank, Trader Rank of Elite.',
            'active'            => true,

            'innerColor'        => [251, 215, 158],
            'outerColor'        => [255, 255, 255],
        ],



        /**
         * SHIPS BADGES
         */
        80     => [
            'name'              => 'Classic Collection',
            'description'       => 'Own 10 different ships simultaneously.',
            'active'            => true,

            'innerColor'        => [131, 131, 131],
            'outerColor'        => [28, 30, 34],
        ],
        81     => [
            'name'              => 'Ship Hoarder',
            'description'       => 'Own 20 different ships simultaneously.',
            'active'            => true,

            'innerColor'        => [131, 131, 131],
            'outerColor'        => [131, 131, 131],
        ],

        90     => [
            'name'              => 'Pimp my Ride!',
            'description'       => 'Add a paintjob to 1 of your ship.',
            'active'            => true,

            'layout'            => 2,
        ],
        91     => [
            'name'              => 'Fashion Addict!',
            'description'       => 'Add a paintjob to 10 of your ships.',
            'active'            => true,

            'background'        => 90,
        ],



        /**
         * DISTANCE BADGES
         */
        100     => [
            'name'              => '100,000ly Club!',
            'description'       => 'Travel at least 100,000ly.',
            'active'            => true,

            'innerColor'        => [180, 0, 255],
            'outerColor'        => [28, 30, 34],

            'layout'            => 3,
        ],
        110     => [
            'name'              => '200,000ly Club!',
            'description'       => 'Travel at least 200,000ly.',
            'active'            => true,

            'innerColor'        => [180, 0, 255],
            'outerColor'        => [28, 30, 34],

            'layout'            => 2,
        ],
        120     => [
            'name'              => '500,000ly Club!',
            'description'       => 'Travel at least 500,000ly.',
            'active'            => true,

            'innerColor'        => [180, 0, 255],
            'outerColor'        => [180, 0, 255],

            'layout'            => 2,
        ],
        140     => [
            'name'              => '1,000,000ly Club!',
            'description'       => 'Travel at least 1,000,000ly.',
            'active'            => true,

            'innerColor'        => [180, 0, 255],
            'outerColor'        => [28, 30, 34],
        ],

        145     => [
            'name'              => 'Did I leave the oven on?',
            'description'       => 'Travel at least 2,500,000 ly. The distance between the Milky Way & Andromeda galaxies.',
            'active'            => true,

            'innerColor'        => [180, 0, 255],
            'outerColor'        => [180, 0, 255],
        ],


        150     => [
            'name'              => 'Going, going...',
            'description'       => 'Make a 50+ly jump.',
            'active'            => true,

            'innerColor'        => [219, 30, 92],
            'outerColor'        => [28, 30, 34],
        ],
        151     => [
            'name'              => '... Gone!',
            'description'       => 'Make a 200+ly neutron jump.',
            'active'            => true,

            'innerColor'        => [219, 30, 92],
            'outerColor'        => [219, 30, 92],
        ],


        200     => array(
            'name'              => 'Popping to the Corner Shop',
            'description'       => 'Travel 1,000 light years from the start.',
            'active'            => true,

            'innerColor'        => array(255, 0, 0),
            'outerColor'        => array(28, 30, 34),

            'layout'            => 2,
        ),

        210     => array(
            'name'              => 'Where Have You Been?',
            'description'       => 'Travel 25,000 light years from the start.',
            'active'            => true,

            'innerColor'        => array(28, 30, 34),
            'outerColor'        => array(255, 0, 0),
        ),

        220     => array(
            'name'              => '65,000ly Club!',
            'description'       => 'Travel at least 65,000ly from Sol.',
            'active'            => true,

            'innerColor'        => array(255, 255, 255),
            'outerColor'        => array(255, 0, 0),
        ),



        /**
         * VISIT BADGES
         */
        500     => [
            'name'              => 'Centre of the Galaxy',
            'description'       => 'Visit Sagittarius A*.',
            'active'            => true,
        ],
        510     => [
            'name'              => 'Home, Sweet Home',
            'description'       => 'Visit Sol.',
            'active'            => true,
        ],
        520     => [
            'name'              => 'Is there anybody out there?',
            'description'       => 'Visit Colonia.',
            'active'            => true,
        ],
        530     => [
            'name'              => 'Binary Agent',
            'description'       => 'Visit W Ursae Majoris.',
            'active'            => true,

            'innerColor'        => [225, 164, 0],
            'outerColor'        => [225, 164, 0],
        ],
        540     => [
            'name'              => 'Formidine Rifter',
            'description'       => 'Visit EAFOTS sector.',
            'active'            => true,
        ],


        551     => [
            'name'              => 'It was a trap... And I stayed docked!',
            'customText'        => 'It was a trap...' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . 'And I stayed docked!',
            'description'       => 'You stayed docked on the Gnosis even after discovering it was doomed to fail',
            'active'            => true,
            'hidden'            => true,

            'fontSize'          => 25,
            'verticalOffset'    => 325,

            'foreground'        => 550,

            'outerColor'        => [204, 82, 19],
        ],


        600     => [
            'name'              => 'Hutton Orbital Landing',
            'description'       => 'Docked at Hutton Orbital... and all i got was a mug!',
            'active'            => true,

            'layout'            => 2,
            'innerColor'        => [70, 150, 250],
            'outerColor'        => [25, 120, 230],

            'innerTextColor'    => [70, 150, 250],
            'fontSize'          => 19,
            'verticalOffset'    => 400,
        ],



        /**
         * CREDITS BADGES
         */
        1000    => [
            'name'              => 'First credits incoming...',
            'description'       => 'Have at least 1,001 credits.',
            'active'            => true,

            'layout'            => 2,
        ],
        1100    => [
            'name'              => 'Made my first million!',
            'description'       => 'Have at least 1,000,000 credits.',
            'active'            => true,

            'layout'            => 2,
        ],
        1200    => [
            'name'              => 'Made my first billion!',
            'description'       => 'Have at least 1,000,000,000 credits.',
            'active'            => true,

            'background'        => 1000,
        ],
        1500    => [
            'name'              => 'Got more credits than Uncle Scrooge!',
            'description'       => 'Earn at least 4,000,000,000 credits.',
            'active'            => true,

            'background'        => 1100,

            'fontSize'          => 26,
        ],



        /**
         * MATERIALS BADGES
         */
        2400    => [
            'name'              => 'Why fly when you can drive?',
            'description'       => 'Collect a raw loot material.',
            'active'            => true,

            'innerColor'        => [140, 98, 57],
            'outerColor'        => [28, 30, 34],

            'layout'            => 2,

            'fontSize'          => 24,
        ],
        2410    => [
            'name'              => 'Recycler',
            'description'       => 'Collect 5 different raw loot materials.',
            'active'            => true,

            'innerColor'        => [140, 98, 57],
            'outerColor'        => [140, 98, 57],

            'layout'            => 2,
        ],
        2420    => [
            'name'              => 'Archeologist',
            'description'       => 'Collect 20 different raw loot materials.',
            'active'            => true,

            'innerColor'        => [140, 98, 57],
            'outerColor'        => [28, 30, 34],

            'verticalOffset'    => 250,
        ],
        2430    => [
            'name'              => 'Raw Collector',
            'description'       => 'Collect 250 raw loot materials.',
            'active'            => true,

            'innerColor'        => [140, 98, 57],
            'outerColor'        => [140, 98, 57],
        ],

        2500    => [
            'name'              => 'You Made This?',
            'description'       => 'Collect a manufactured loot material.',

            'layout'            => 2,
            'active'            => true,

            'innerColor'        => [61, 119, 149],
            'outerColor'        => [28, 30, 34],
        ],
        2510    => [
            'name'              => 'Great Workmanship',
            'description'       => 'Collect 5 different manufactured loot materials.',

            'layout'            => 2,
            'active'            => true,

            'innerColor'        => [61, 119, 149],
            'outerColor'        => [61, 119, 149],
        ],
        2520    => [
            'name'              => 'Exemplary Virtuosity',
            'description'       => 'Collect 25 different manufactured loot materials.',
            'active'            => true,

            'innerColor'        => [61, 119, 149],
            'outerColor'        => [28, 30, 34],
        ],
        2530    => [
            'name'              => 'Manufacturer',
            'description'       => 'Collect 250 manufactured loot materials.',
            'active'            => true,

            'innerColor'        => [61, 119, 149],
            'outerColor'        => [61, 119, 149],
        ],



        /**
         * DATA BADGES
         */
        2600    => [
            'name'              => 'Floppy Disk',
            'description'       => 'Collect a data loot material.',
            'active'            => true,

            'innerColor'        => [104, 229, 139],
            'outerColor'        => [28, 30, 34],

            'layout'            => 2,
        ],
        2610    => [
            'name'              => 'Data Miner',
            'description'       => 'Collect 5 different data loot materials.',
            'active'            => true,

            'innerColor'        => [104, 229, 139],
            'outerColor'        => [104, 229, 139],

            'layout'            => 2,
        ],
        2620    => [
            'name'              => 'Who Leaked this Data?',
            'description'       => 'Collect 25 different data loot materials.',
            'active'            => true,

            'innerColor'        => [104, 229, 139],
            'outerColor'        => [28, 30, 34],
        ],
        2630    => [
            'name'              => 'Server Farm',
            'description'       => 'Collect 250 data loot materials.',
            'active'            => true,

            'innerColor'        => [104, 229, 139],
            'outerColor'        => [104, 229, 139],
        ],


        /**
         * THARGOIDS BADGES
         */
        4000   => [
            'name'              => 'Thargoid Encounter',
            'description'       => 'Scan a Thargoid and scoop a `Thargoid Cyclops Tissue Sample`.',
            'active'            => true,
        ],

        4090   => [
            'name'              => 'Thargoid Destroyed',
            'description'       => 'Kill a Thargoid and scoop a `Wreckage Components`, `Propulsion Elements`, `Biomechanical Conduits`, `Weapon Parts`, or `Thargoid Heart`.',
            'active'            => true,

            'background'        => 4000,
        ],



        /**
         * CELESTIAL BODIES BADGES
         */
        5000   => [
            'name'              => 'Kepler\'s Eye',
            'description'       => 'Be first to discover a planet.',
            'active'            => true,
        ],

        5010   => [
            'name'              => 'Honk and Scoop!',
            'description'       => 'Be first to discover a scoopable star.',
            'active'            => true,
        ],

        5020   => [
            'name'              => 'Wolf Hunter',
            'description'       => 'Be first to discover a Wolf-Rayet star.',
            'active'            => true,
        ],

        5050   => [
            'name'              => 'Into the Blackness...',
            'description'       => 'Be first to discover a black hole.',
            'active'            => true,
        ],

        5060   => [
            'name'              => 'Need a boost?',
            'description'       => 'Be first to discover a neutron star.',
            'active'            => true,
        ],

        5100    => [
            'name'              => 'Earth in sight!',
            'description'       => 'Be first to discover an Earth-like world.',
            'active'            => true,

            'verticalOffset'    => 230,
            'fontSize'          => 28,
        ],

        5110    => [
            'name'              => 'Cooper was here!',
            'description'       => 'Be first to discover a Water world.',
            'active'            => true,

            'innerColor'        => [94, 110, 120],
            'outerColor'        => [94, 110, 120],
        ],

        5120    => [
            'name'              => 'AW-some!',
            'description'       => 'Be first to discover an Ammonia world.',
            'active'            => true,
        ],



        /**
         * DURATION BADGES
         */
        7500    => [
            'name'              => 'One hour and still alive!',
            'description'       => 'Played 1 hour.',
            'active'            => true,

            'innerColor'        => [176, 208, 0],
            'outerColor'        => [28, 30, 34],

            'layout'            => 3,
        ],
        7510    => [
            'name'              => 'Live like Bauer...',
            'description'       => 'Played 24 hours.',
            'active'            => true,

            'layout'            => 3,
        ],
        7520    => [
            'name'              => 'Kilo Run',
            'description'       => 'Played 1,000 hours.',

            'active'            => true,

            'background'        => 7510,
            'layout'            => 2,
        ],
        7530    => [
            'name'              => 'Mission Farsight',
            'description'       => 'Played 10,000 hours.',

            'active'            => true,

            'background'        => 7510,
        ],



        /**
         * EDSM BADGES
         */
        7800    => [
            'name'              => 'Bigger, Smaller, Hotter, Colder...',
            'description'       => 'Find a galactic record.',
            'active'            => true,

            'fontSize'          => 29,
        ],



        9000    => [
            'name'              => 'Humboldt\'s Trail',
            'description'       => 'Register and finish at least one expedition.',
            'active'            => true,
            'manual'            => true,

            'layout'            => 2,
        ],
        9100    => [
            'name'              => 'Leader of the pack',
            'description'       => 'Be an expedition leader.',
            'active'            => true,
            'manual'            => true,

            'background'        => 9000,
        ],



        9300    => [
            'name'              => 'Best friend forever!',
            'description'       => 'Be friend with another commander.',
            'active'            => true,
        ],
        9310    => [
            'name'              => 'Work best as a team!',
            'description'       => 'Be friend with 10 other commanders.',
            'active'            => true,

            'background'        => 9300,
        ],



        9350    => [
            'name'              => 'Disciple of Wagar',
            'description'       => 'Write an entry in your logbook.',
            'active'            => true,

            'innerColor'        => [255, 113, 0],
            'outerColor'        => [247, 225, 164],

            'layout'            => 3,
        ],
        9360    => [
            'name'              => 'Acolyte of Wagar',
            'description'       => 'Write 10 entries in your logbook.',
            'active'            => true,

            'innerColor'        => [255, 113, 0],
            'outerColor'        => [247, 225, 164],

            'layout'            => 2,
        ],
        9370    => [
            'name'              => 'Priest of Wagar',
            'description'       => 'Write 25 entries in your logbook.',
            'active'            => true,

            'innerColor'        => [255, 113, 0],
            'outerColor'        => [247, 225, 164],
        ],



        9410    => [
            'name'              => 'Triangulator',
            'description'       => 'Submit 1,000 distances to EDSM.',
            'active'            => true,
            'hidden'            => true,

            'layout'            => 3,
        ],
        9415    => [
            'name'              => 'Trigonomator',
            'description'       => 'Submit 2,000 distances to EDSM.',
            'active'            => true,
            'hidden'            => true,

            'layout'            => 2,

            'background'        => 9420,

            'verticalOffset'    => 260,
        ],
        9420    => [
            'name'              => 'Trilaterator',
            'description'       => 'Submit 10,000 distances to EDSM.',
            'active'            => true,
            'hidden'            => true,
        ],

        9500    => [
            'name'              => 'Benefactor',
            'description'       => 'Being an EDSM benefactor.',
            'active'            => true,
        ],

        9900    => [
            'name'              => 'The Handshake',
            'description'       => 'Handshake with an EDSM developer.',
            'active'            => true,
            'manual'            => true,
            'hidden'            => true,

            'background'        => 9500,
        ],

        /**
         * PINK Badge
         */
        7465    => [ // PINK Keypad code
            'name'              => 'Twatted by Sally!',
            'description'       => 'Be killed by the Pink Lady.',

            'active'            => true,
            'manual'            => false,
            'hidden'            => false,

            'outerColor'        => [251, 72, 196],
            'innerColor'        => [199, 58, 157],

            'verticalOffset'    => 300,

        ],

        /**
         * SPEED BOWL #1 BADGES
         */
        64001   => [
            'name'              => 'Speed Bowl #1 (First place)',
            'description'       => 'Participate in the Speed Bowl #1.',
            'active'            => true,
            'manual'            => true,
            'hidden'            => true,

            'foreground'        => 64004,
            'outerColor'        => [255, 181, 42],
            'innerColor'        => [255, 225, 0],

            'fontSize'          => 27,
        ],
        64002   => [
            'name'              => 'Speed Bowl #1 (Second place)',
            'description'       => 'Participate in the Speed Bowl #1.',
            'active'            => true,
            'manual'            => true,
            'hidden'            => true,

            'layout'            => 2,
            'foreground'        => 64004,
            'outerColor'        => [135, 135, 135],
            'innerColor'        => [204, 204, 204],

            'fontSize'          => 26,
        ],
        64003   => [
            'name'              => 'Speed Bowl #1 (Third place)',
            'description'       => 'Participate in the Speed Bowl #1.',
            'active'            => true,
            'manual'            => true,
            'hidden'            => true,

            'layout'            => 3,
            'foreground'        => 64004,
            'outerColor'        => [255, 181, 42],
            'innerColor'        => [170, 68, 0],

            'fontSize'          => 25,
        ],
        64004   => [
            'name'              => 'Speed Bowl #1',
            'description'       => 'Participate in the Speed Bowl #1.',
            'active'            => true,
            'manual'            => true,
            'hidden'            => true,

            'layout'            => 4,
            'outerColor'        => [239, 101, 17],
            'innerColor'        => [212, 0, 0],

            'fontSize'          => 24,
        ],


        /**
         * The Planetary Circumnavigation Club
         */
        64101   => [
            'name'              => 'The Planetary Circumnavigation Club',
            'description'       => 'Be part of The Planetary Circumnavigation Club',
            'active'            => true,
            'manual'            => true,
            'hidden'            => true,

            'layout'            => 4,
            'outerColor'        => [255, 113, 0],
            'innerColor'        => [255, 113, 0],

            'verticalOffset'    => 420,
            'fontSize'          => 21,
        ],


        /**
         * Great Remlok Tournament
         */
        64201   => [
            'name'              => 'Great Remlok Tournament',
            'description'       => 'Participate in the Great Remlok Tournament',
            'active'            => true,
            'manual'            => true,
            'hidden'            => true,

            'layout'            => 4,
            'outerColor'        => [255, 192, 0],
            'innerColor'        => [255, 192, 0],

            'verticalOffset'    => 400,
            'fontSize'          => 21,
        ],

        64301   => [
            'name'              => 'HOT-Vacation',
            'customText'        => 'HOT-Vacation' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . 'We\'ve gone on Holiday by Accident',
            'description'       => 'I helped evacute the population of Exigus',
            'active'            => true,
            'manual'            => true,
            'hidden'            => true,

            'layout'            => 4,
            'innerColor'        => [64, 208, 208],
            'outerColor'        => [30, 30, 30],

            'verticalOffset'    => 325,
            'fontSize'          => 20,
        ],


        /**
         *  Posthum badge (LAST))
         */
        65535   => [
            'name'              => 'From the stars we come and to the stars we will return',
            'description'       => 'The EDSM team and the Elite Dangerous community wish their deepest condolences to the fallen commander family.',
            'active'            => true,
            'manual'            => true,
            'hidden'            => true,

            'layout'            => 4,
            'innerColor'        => [255, 113, 0],
            'outerColor'        => [191, 86, 0],

            'verticalOffset'    => 300,
            'fontSize'          => 25,
        ],
    ];
}