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
    /**
     * List of names used in game
     */
    static protected $name  = [
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
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
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
    ];
}