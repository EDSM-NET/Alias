<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Engineer;
use         EDSM\Alias;

class Order extends Alias
{
    /**
     * Table with parent => children
     * Only used in our front-end to generate the right panel layout
     */
    static protected $name      = [
        [
            'parent'    => 6,   // Felicity Farseer
            'children'  => [
                [
                    'parent'    => 14,  // Juri Ishmaak
                    'children'  => [
                        [
                            'parent'    => 11,  // Colonel Bris Dekker
                        ],
                        [
                            'parent'    => 16,  // The Sarge
                        ],
                    ],
                ],
            ],
        ],

        [
            'parent'    => 12,  // Elvira Martuuk
            'children'  => [
                [
                    'parent'    => 7,   // Marco Qwent
                    'block'     => true,
                    'children'  => [
                        [
                            'parent'    => 8,   // Professor Palin
                        ],
                        [
                            'parent'    => 13,  // Lori Jameson
                        ],
                        [
                            'parent'    => 26,  // Chloe Sedesi
                        ],
                    ],
                ],
                [
                    'parent'    => 15,  // Zacariah Nemo
                ],
                [
                    'parent'    => 23,   // Mel Brandon
                ],
            ],
        ],

        [
            'parent'    => 10,  // The Dweller
            'children'  => [
                [
                    'parent'    => 17,  // Lei Cheung
                    'children'  => [
                        [
                            'parent'    => 18,  // Ram Tah
                        ],
                    ],
                ],
                [
                    'parent'    => 22,   // Marsha Hicks
                ],
            ],
        ],

        [
            'parent'    => 4,   // Tod 'The Blaster' McQuinn
            'children'  => [
                [
                    'parent'    => 5,   // Selene Jean
                    'block'     => true,
                    'children'  => [
                        [
                            'parent'    => 9,   // Didi Vatermann
                        ],
                        [
                            'parent'    => 19,  // Bill Turner
                        ],
                    ],
                ],
                [
                    'parent'    => 21,   // Petra Olmanova
                ],
            ],
        ],

        [
            'parent'    => 2,   // Liz Ryder
            'children'  => [
                [
                    'parent'    => 1,   // Hera Tani
                    'block'     => true,
                    'children'  => [
                        [
                            'parent'    => 3,   // Broo Tarquin
                        ],
                        [
                            'parent'    => 20,  // Tiana Fortune
                        ],
                    ],
                ],
                [
                    'parent'    => 24,   // Etienne Dorn
                ],
            ],
        ],

        [
            'parent'    => 27,   // Hero Ferrari
            'children'  => [

            ],
        ],

        [
            'parent'    => 28,   // Jude Navarro
            'children'  => [

            ],
        ],
    ];
}