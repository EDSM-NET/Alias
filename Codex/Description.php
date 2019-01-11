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


        21010   => 'Fumaroles are gaps in a planet\'s crust through which gases and steam are emitted. The ejected material often accumulates around the opening',
            21011   => 'A surface opening that emits high-pressure gas and minerals, found on terrestrial planets with sulphur dioxide magma.',
            21012   => 'A surface opening that emits high-pressure gas and minerals, found on terrestrial planets with water geysers.',
            21013   => 'A surface opening that emits high-pressure gas and minerals, found on terrestrial planets with silicate vapour geysers.',

        31011   => 'Powerful Thargoid ships that combine both mechanical and organic elements',
            31011   => 'These ships are able to navigate hyperspace in ways that are not fully understood, and are at least partly organic.',
    ];
}