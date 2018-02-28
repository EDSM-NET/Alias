<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Commander;
use         EDSM\Alias;

class Data extends Alias
{
    use \EDSM\Alias\Commander\Data;
    
    static protected $max       = 500;
    
    /**
     * List of names used in game
     */
    static protected $name      = [
         1  => 'Aberrant Shield Pattern Analysis',
         2  => 'Abnormal Compact Emission Data',
         3  => 'Adaptive Encryptors Capture',
         4  => 'Anomalous Bulk Scan Data',
         5  => 'Anomalous FSD Telemetry',
         6  => 'Atypical Disrupted Wake Echoes',
         7  => 'Atypical Encryption Archives',
         8  => 'Classified Scan Databanks',
         9  => 'Classified Scan Fragment',
        10  => 'Cracked Industrial Firmware',
        11  => 'Datamined Wake Exceptions',
        12  => 'Decoded Emission Data',
        13  => 'Distorted Shield Cycle Recordings',
        14  => 'Divergent Scan Data',
        15  => 'Eccentric Hyperspace Trajectories',
        16  => 'Exceptional Scrambled Emission Data',
        17  => 'Inconsistent Shield Soak Analysis',
        18  => 'Irregular Emission Data',
        19  => 'Modified Consumer Firmware',
        20  => 'Modified Embedded Firmware',
        21  => 'Open Symmetric Keys',
        22  => 'Pattern Alpha Obelisk Data',
        23  => 'Pattern Beta Obelisk Data',
        24  => 'Pattern Delta Obelisk Data',
        25  => 'Pattern Epsilon Obelisk Data',
        26  => 'Pattern Gamma Obelisk Data',
        27  => 'Peculiar Shield Frequency Data',
        28  => 'Security Firmware Patch',
        29  => 'Specialised Legacy Firmware',
        30  => 'Strange Wake Solutions',
        31  => 'Tagged Encryption Codes',
        32  => 'Unexpected Emission Data',
        33  => 'Unidentified Scan Archives',
        34  => 'Sensor Fragment',
        35  => 'Untypical Shield Scans',
        36  => 'Unusual Encrypted Files',
        37  => 'Thargoid Ship Signature',
        38  => 'Thargoid Wake Data',
        39  => 'Thargoid Residue Data',
        40  => 'Thargoid Structural Data',
        41  => 'Thargoid Material Composition Data',
        42  => 'Ship Systems Data',
        43  => 'Ship Flight Data',
        44  => 'Guardian Weapon Blueprint Segment',
        45  => 'Guardian Module Blueprint Segment',
        46  => 'Guardian Vessel Blueprint Segment',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias     = [
        'aberrantshieldpatternanalysis'     => 1,       'shieldpatternanalysis'             => 1,
        'compactemissionsdata'              => 2,
        'adaptiveencryptorscapture'         => 3,       'adaptiveencryptors'                => 3,
        'anomalousbulkscandata'             => 4,       'bulkscandata'                      => 4,
        'anomalousfsdtelemetry'             => 5,       'fsdtelemetry'                      => 5,
        'atypicaldisruptedwakeechoes'       => 6,       'disruptedwakeechoes'               => 6,
        'atypicalencryptionarchives'        => 7,       'encryptionarchives'                => 7,
        'scandatabanks'                     => 8,
        'classifiedscandata'                => 9,
        'crackedindustrialfirmware'         => 10,      'industrialfirmware'                => 10,
        'dataminedwakeexceptions'           => 11,      'dataminedwake'                     => 11,
        'decodedemissiondata'               => 12,
        'distortedshieldcyclerecordings'    => 13,      'shieldcyclerecordings'             => 13,
        'encodedscandata'                   => 14,
        'eccentrichyperspacetrajectories'   => 15,      'hyperspacetrajectories'            => 15,
        'exceptionalscrambledemissiondata'  => 16,      'scrambledemissiondata'             => 16,
        'inconsistentshieldsoakanalysis'    => 17,      'shieldsoakanalysis'                => 17,
        'archivedemissiondata'              => 18,
        'modifiedconsumerfirmware'          => 19,      'consumerfirmware'                  => 19,
        'modifiedembeddedfirmware'          => 20,      'embeddedfirmware'                  => 20,
        'opensymmetrickeys'                 => 21,      'symmetrickeys'                     => 21,
        'ancientbiologicaldata'             => 22,
        'ancientculturaldata'               => 23,
        'ancientlanguagedata'               => 24,
        'ancienttechnologicaldata'          => 25,
        'ancienthistoricaldata'             => 26,
        'peculiarshieldfrequencydata'       => 27,      'shieldfrequencydata'               => 27,
        'securityfirmwarepatch'             => 28,      'securityfirmware'                  => 28,
        'specialisedlegacyfirmware'         => 29,      'legacyfirmware'                    => 29,
        'strangewakesolutions'              => 30,      'wakesolutions'                     => 30,
        'taggedencryptioncodes'             => 31,      'encryptioncodes'                   => 31,
        'emissiondata'                      => 32,
        'unidentifiedscanarchives'          => 33,      'scanarchives'                      => 33,
        'unknownenergysource'               => 34,
        'shielddensityreports'              => 35,
        'unusualencryptedfiles'             => 36,      'encryptedfiles'                    => 36,
        'unknownshipsignature'              => 37,
        'unknownwakedata'                   => 38,
        'tg_residuedata'                    => 39,
        'tg_structuraldata'                 => 40,
        'tg_compositiondata'                => 41,
        'tg_shipsystemsdata'                => 42,
        'tg_shipflightdata'                 => 43,
        'guardian_weaponblueprint'          => 44,
        'guardian_moduleblueprint'          => 45,
        'guardian_vesselblueprint'          => 46,
    ];
    
    /**
     * List of grades used in game
     * 
     * 1    => Very common
     * 2    => Common
     * 3    => Standard
     * 4    => Rare
     * 5    => Very rare
     */
    static protected $grade     = [
         1  => 'Rare',
         2  => 'Very rare',
         3  => 'Very rare',
         4  => 'Very common',
         5  => 'Common',
         6  => 'Very common',
         7  => 'Rare',
         8  => 'Standard',
         9  => 'Very rare',
        10  => 'Standard',
        11  => 'Very rare',
        12  => 'Rare',
        13  => 'Very common',
        14  => 'Rare',
        15  => 'Rare',
        16  => 'Very common',
        17  => 'Common',
        18  => 'Common',
        19  => 'Common',
        20  => 'Very rare',
        21  => 'Standard',
        22  => 'Standard',
        23  => 'Common',
        24  => 'Rare',
        25  => 'Very rare',
        26  => 'Very common',
        27  => 'Very rare',
        28  => 'Rare',
        29  => 'Very common',
        30  => 'Standard',
        31  => 'Common',
        32  => 'Standard',
        33  => 'Common',
        34  => 'Very common',
        35  => 'Standard',
        36  => 'Very common',
        37  => 'Rare',
        38  => 'Very rare',
        39  => 'Rare',
        40  => 'Common',
        41  => 'Standard',
        42  => 'Standard',
        43  => 'Rare',
        //44  => '???',
        //45  => '???',
        //46  => '???',
    ];
}