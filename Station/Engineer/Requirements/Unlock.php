<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Engineer\Requirements;
use         EDSM\Alias;

class Unlock extends Alias
{
    /**
     * List of requirements
     */
    static protected $name      = [
        // Hera Tani
         1      => null,

        // Liz Ryder
         2      => null,

        // Broo Tarquin
         3      => [
             ['c715' => 50], // Fujin Tea * 50
         ],

        // Tod 'The Blaster' McQuinn
         4      => null,

        // Selene Jean
         5      => null,

        // Felicity Farseer
         6      => null,

        // Marco Qwent
         7      => null,

        // Professor Palin
         8      => null,

        // Didi Vatermann
         9      => [
             ['c315' => 50], // Lavian Brandy * 50
         ],

        // The Dweller
        10      => null,

        // Colonel Bris Dekker
        11      => [
            'Provide 1,000,000 or 10,000,000 credits worth of federal combat bonds',
        ],

        // Elvira Martuuk
        12      => null,

        // Lori Jameson
        13      => [
             ['c317' => 25], // Kongga Ale * 25
         ],

        // Juri Ishmaak
        14      => null,

        // Zacariah Nemo
        15      => null,

        // The Sarge
        16      => null,

        // Lei Cheung
        17      => null,

        // Ram Tah
        18      => null,

        // Bill Turner
        19      => [
            ['c918' => 50], // Bromellite * 50
        ],

        // Tiana Fortune
        20      => null,

        // Petra Olmanova
        21      => null,

        // Marsha Hicks
        22      => null,

        // Mel Brandon
        23      => null,

        // Etienne Dorn
        24      => null,

        // Chloe Sedesi
        26      => null,

        // Hero Ferrari
        27      => 'Complete 10 surface conflict zones.',

        // Jude Navarro
        28      => null,

        // Domino Green
        29      => null,

        // Kit Fowler
        30      => [
            'Sell 40 Opinion polls to bartenders.',
        ],

        // Terra Velasquez
        31      => [
            'Complete 6 Covert theft and Covert heist missions.',
        ],

        // Uma Laszlo
        32      => [
            'Reach Unfriendly reputation or lower with Sirius Corporation.',
        ],

        // Yarden Bond
        33      => [
            'Sell 8 Smear campaign plans to bartenders.',
        ],

        // Wellington Beck
        34      => null,

        // Oden Geiger
        35      => null,

        // Eleanor Bresa
        36      => null,

        // Rosa Dayette
        37      => null,

        // Baltanos
        38      => null,

        // Yi Shen
        39      => null,
    ];
}