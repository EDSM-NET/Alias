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
    
    /**
     * List of limits per grade
     */
    static protected $max       = [
        1                           => 300,
        2                           => 250,
        3                           => 200,
        4                           => 150,
        5                           => 100,
    ];
    
    /**
     * List of limits override
     */
    static protected $maxOverride   = [];
    
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
        'aberrantshieldpatternanalysis'     => 1,       'shieldpatternanalysis'             => 1,       128681633   => 1,
        'compactemissionsdata'              => 2,                                                       128681638   => 2,
        'adaptiveencryptorscapture'         => 3,       'adaptiveencryptors'                => 3,       128681635   => 3,
        'anomalousbulkscandata'             => 4,       'bulkscandata'                      => 4,       128681612   => 4,
        'anomalousfsdtelemetry'             => 5,       'fsdtelemetry'                      => 5,       128681619   => 5,
        'atypicaldisruptedwakeechoes'       => 6,       'disruptedwakeechoes'               => 6,       128681613   => 6,
        'atypicalencryptionarchives'        => 7,       'encryptionarchives'                => 7,       128681629   => 7,
        'scandatabanks'                     => 8,                                                       128681624   => 8,
        'classifiedscandata'                => 9,                                                       128681636   => 9,
        'crackedindustrialfirmware'         => 10,      'industrialfirmware'                => 10,      128681622   => 10,
        'dataminedwakeexceptions'           => 11,      'dataminedwake'                     => 11,      128681637   => 11,
        'decodedemissiondata'               => 12,                                                      128681632   => 12,
        'distortedshieldcyclerecordings'    => 13,      'shieldcyclerecordings'             => 13,      128681615   => 13,
        'encodedscandata'                   => 14,                                                      128681630   => 14,
        'eccentrichyperspacetrajectories'   => 15,      'hyperspacetrajectories'            => 15,      128681631   => 15,
        'exceptionalscrambledemissiondata'  => 16,      'scrambledemissiondata'             => 16,      128681614   => 16,
        'inconsistentshieldsoakanalysis'    => 17,      'shieldsoakanalysis'                => 17,      128681621   => 17,
        'archivedemissiondata'              => 18,                                                      128681620   => 18,
        'modifiedconsumerfirmware'          => 19,      'consumerfirmware'                  => 19,      128681616   => 19,
        'modifiedembeddedfirmware'          => 20,      'embeddedfirmware'                  => 20,      128681634   => 20,
        'opensymmetrickeys'                 => 21,      'symmetrickeys'                     => 21,      128681623   => 21,
        'ancientbiologicaldata'             => 22,
        'ancientculturaldata'               => 23,
        'ancientlanguagedata'               => 24,
        'ancienttechnologicaldata'          => 25,
        'ancienthistoricaldata'             => 26,
        'peculiarshieldfrequencydata'       => 27,      'shieldfrequencydata'               => 27,
        'securityfirmwarepatch'             => 28,      'securityfirmware'                  => 28,      128681628   => 28,
        'specialisedlegacyfirmware'         => 29,      'legacyfirmware'                    => 29,      128681610   => 29,
        'strangewakesolutions'              => 30,      'wakesolutions'                     => 30,      128681625   => 30,
        'taggedencryptioncodes'             => 31,      'encryptioncodes'                   => 31,      128681617   => 31,
        'emissiondata'                      => 32,                                                      128681626   => 32,
        'unidentifiedscanarchives'          => 33,      'scanarchives'                      => 33,      128681618   => 33,
        'unknownenergysource'               => 34,
        'shielddensityreports'              => 35,                                                      128681627   => 35,
        'unusualencryptedfiles'             => 36,      'encryptedfiles'                    => 36,      128681611   => 36,
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
     */
    static protected $gradeName  = [
         1  => 'Very common',
         2  => 'Common',
         3  => 'Standard',
         4  => 'Rare',
         5  => 'Very rare',
    ];
    
    /**
     * List of grades per data
     */
    static protected $grade     = [
         1  => 4,
         2  => 5,
         3  => 5,
         4  => 1,
         5  => 2,
         6  => 1,
         7  => 4,
         8  => 3,
         9  => 5,
        10  => 3,
        11  => 5,
        12  => 4,
        13  => 1,
        14  => 4,
        15  => 4,
        16  => 1,
        17  => 2,
        18  => 2,
        19  => 2,
        20  => 5,
        21  => 3,
        22  => 3,
        23  => 2,
        24  => 4,
        25  => 4,
        26  => 1,
        27  => 5,
        28  => 4,
        29  => 1,
        30  => 3,
        31  => 2,
        32  => 3,
        33  => 2,
        34  => 1,
        35  => 3,
        36  => 1,
        37  => 4,
        38  => 5,
        39  => 4,
        40  => 2,
        41  => 3,
        42  => 3,
        43  => 4,
        //44  => '???',
        //45  => '???',
        //46  => '???',
    ];
}