<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station;
use         EDSM\Alias;

class Engineer extends Alias
{
    use \EDSM\Alias\Station\Engineer;
    
    /**
     * List of names used in game
     */
    static protected $name      = [
         1                              => 'Hera Tani',
         2                              => 'Liz Ryder',
         3                              => 'Broo Tarquin',
         4                              => 'Tod \'The Blaster\' McQuinn',
         5                              => 'Selene Jean',
         6                              => 'Felicity Farseer',
         7                              => 'Marco Qwent',
         8                              => 'Professor Palin',
         9                              => 'Didi Vatermann',
        10                              => 'The Dweller',
        11                              => 'Colonel Bris Dekker',
        12                              => 'Elvira Martuuk',
        13                              => 'Lori Jameson',
        14                              => 'Juri Ishmaak',
        15                              => 'Zacariah Nemo',
        16                              => 'The Sarge',
        17                              => 'Lei Cheung',
        18                              => 'Ram Tah',
        19                              => 'Bill Turner',
        20                              => 'Tiana Fortune',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias     = [
        'hera tani'                     => 1,
        'liz ryder'                     => 2,
        'broo tarquin'                  => 3,
        'tod \'the blaster\' mcquinn'   => 4,
        'selene jean'                   => 5,
        'felicity farseer'              => 6,
        'marco qwent'                   => 7,
        'professor palin'               => 8,
        'didi vatermann'                => 9,
        'the dweller'                   => 10,
        'colonel bris dekker'           => 11,
        'elvira martuuk'                => 12,
        'lori jameson'                  => 13,
        'juri ishmaak'                  => 14,
        'zacariah nemo'                 => 15,
        'the sarge'                     => 16,
        'lei cheung'                    => 17,
        'ram tah'                       => 18,
        'bill turner'                   => 19,
        'tiana fortune'                 => 20,
    ];
    
    
    /**
     * Table with parent => children
     * Only used in our front-end to generate the right panel layout
     */
    static protected $order     = [
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
                    'column'    => 8,
                    'children'  => [
                        [
                            'parent'    => 8,   // Professor Palin
                        ],
                        [
                            'parent'    => 13,  // Lori Jameson
                        ],
                    ],
                ],
                [
                    'parent'    => 15,  // Zacariah Nemo
                    'column'    => 4,
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
            ],
        ],
        
        [
            'parent'    => 4,   // Tod 'The Blaster' McQuinn
            'children'  => [
                [
                    'parent'    => 5,   // Selene Jean
                    'children'  => [
                        [
                            'parent'    => 9,   // Didi Vatermann
                        ],
                        [
                            'parent'    => 19,  // Bill Turner
                        ],
                    ],
                ],
            ],
        ],
        
        [
            'parent'    => 2,   // Liz Ryder
            'children'  => [
                [
                    'parent'    => 1,   // Hera Tani
                    'children'  => [
                        [
                            'parent'    => 3,   // Broo Tarquin
                        ],
                        [
                            'parent'    => 20,  // Tiana Fortune
                        ],
                    ],
                ],
            ],
        ],
    ];
}