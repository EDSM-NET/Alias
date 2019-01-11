<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Codex;
use         EDSM\Alias;

class Description extends Alias
{
    static protected $defaultName       = null;

    /**
     * List of descriptions used in game
     */
    static protected $name  = [
        11030   => 'A type stars are hot white or bluish-white main sequence stars. They usually range in mass from 1.4 to 2.1 solar masses and have a surface temperature reaching 10,000 K.',
            11031   => 'A star in luminosity class I, II, III, or IV, according to the Yerkes spectral classification.',
    ];
}