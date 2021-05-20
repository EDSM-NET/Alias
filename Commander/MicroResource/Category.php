<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Commander\MicroResource;
use         EDSM\Alias;

class Category extends Alias
{
    use \EDSM\Alias\Station\Commodity\Category;

    /**
     * List of names used in game, except for cargo
     */
    static protected $name  = [
        // Odyssey
        40      => 'Items',
        41      => 'Data',
    ];

    /**
     * List of commodities id in each categories
     */
    static protected $in    = [
        // Odyssey
        40      =>  [
                        4001, 4002, 4003, 4004, 4005, 4006, 4007, 4008, 4009, 4010,
                        4011, 4012, 4013, 4014, 4015, 4016, 4017, 4018, 4019, 4020,
                        4021, 4022, 4023, 4024, 4025, 4026, 4027, 4028, 4029, 4030,
                    ],
        41      =>  [
                        4101, 4102, 4103, 4104, 4105, 4106, 4107, 4108, 4109, 4110,
                        4111, 4112, 4113, 4114, 4115, 4116, 4117, 4118, 4119, 4120,
                        4121, 4122, 4123, 4124, 4125, 4126, 4127, 4128, 4129, 4130,
                        4131, 4132, 4133, 4134, 4135, 4136, 4137, 4138, 4139, 4140,
                        4141, 4142, 4143, 4144, 4145, 4146, 4147, 4148, 4149, 4150,
                        4151, 4152, 4153, 4154, 4155, 4156, 4157, 4158, 4159, 4160,
                        4161, 4162, 4163, 4164, 4165, 4166, 4167, 4168, 4169, 4170,
                        4171, 4172, 4173, 4174, 4175, 4176, 4177, 4178,
                    ],
    ];
}