<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Body;
use         EDSM\Alias\Body\ProcGen;

class Name extends ProcGen
{
    /**
     * Link custom bodies name to their procgen counter part
     * Based on https://docs.google.com/spreadsheets/d/1kDtQYMeduzWghj1yXEsMY8isRccNhAr2XxYmaPIsB2o/edit#gid=711269421
     */
    static protected $alias      = [
         // Chi Herculis #3
         3           => [
            "Chi Herculis"                => "Chi Herculis",
                "Apasam"                      => "Chi Herculis 1",
                    "Kumay"                       => "Chi Herculis 1 a",
         ],
         
         // Ovid #4
         4           => [
                "Ovid"                        => "Ovid A",
                "Gliese 611 B"                => "Ovid B",
                    "Kenash"                      => "Ovid A 5",
                        "Paseguru"                    => "Ovid A 5 a",
         ],
         
         // Dahan #5
         5           => [
            "Dahan"                       => "Dahan",
                "Hathor"                      => "Dahan 2",
                    "Coltan"                      => "Dahan 2 a",
                    "Zhang's Claim"               => "Dahan 2 b",
                    "Smithy's Claim"              => "Dahan 2 c",
                    "Jonty's Claim"               => "Dahan 2 d",
                    "Wanderer"                    => "Dahan 2 e",
                    "Dahan 3a"                    => "Dahan 3 a",
                    "Dahan 3b"                    => "Dahan 3 b",
                    "Dahan 3c"                    => "Dahan 3 c",
         ],
         
         // Wolf 359 #7
         7           => [
            "Wolf 359"                    => "Wolf 359",
                "Campbell's Claim"            => "Wolf 359 1",
                "Camp Donalds"                => "Wolf 359 2",
         ],
         
         // BD+47 2112 #11
         11          => [
                "BD+47 2112"                  => "BD+47 2112 A",
                "Gliese 537 B"                => "BD+47 2112 B",
                    "Derwent"                     => "BD+47 2112 A 1",
         ],
         
         // Nang Ta-khian #12
         12          => [
            "Nang Ta-khian"               => "Nang Ta-khian",
                "Kopet Dag"                   => "Nang Ta-khian 1",
                    "Nisa"                        => "Nang Ta-khian 1 a",
         ],
         
         // Bolg #13
         13          => [
            "Bolg"                        => "Bolg",
                "Subartu"                     => "Bolg 1",
                "Shubar"                      => "Bolg 2",
         ],
         
         // Asellus Primus #14
         14          => [
                "Asellus Primus"              => "Asellus Primus A",
                "Asellus Primus B"            => "Asellus Primus B",
                    "Asellus 1"                   => "Asellus Primus A 1",
                    "Asellus 2"                   => "Asellus Primus A 2",
                    "Asellus 3"                   => "Asellus Primus A 3",
                        "Asellus 3a"                  => "Asellus Primus A 3 a",
                        "Asellus 3b"                  => "Asellus Primus A 3 b",
                        "Asellus 3c"                  => "Asellus Primus A 3 c",
                    "Asellus 4"                   => "Asellus Primus A 4",
         ],
         
         // Ross 1057 #15
         15          => [
            "Ross 1057"                   => "Ross 1057",
                "Munam-ri"                    => "Ross 1057 1",
                    "Else"                        => "Ross 1057 1 a",
         ],
         
         // LHS 3262 #16
         16          => [
            "LHS 3262"                    => "LHS 3262",
                "Ashanti"                     => "LHS 3262 1",
                    "Akan"                        => "LHS 3262 1 a",
         ],
         
         // LP 98-132 #17
         17          => [
            "LP 98-132"                   => "LP 98-132",
                "Anahit"                      => "LP 98-132 1",
         ],
         
         // Lave #18
         18          => [
            "Lave"                        => "Lave",
                "Planet Lave"                 => "Lave 1",
         ],
         
         // LFT 880 #19
         19          => [
            "LFT 880"                     => "LFT 880",
                "Chayhuac"                    => "LFT 880 1",
         ],
         
         // Morgor #20
         20          => [
            "Morgor"                      => "Morgor",
                "Cruachan"                    => "Morgor 2",
         ],
         
         // Fujin #21
         21          => [
            "Fujin"                       => "Fujin",
                "Futen"                       => "Fujin 1",
         ],
         
         // Magec #22
         22          => [
            "Magec"                       => "Magec",
                "Cishan"                      => "Magec 3",
                    "Ankogel"                     => "Magec 3 a",
                "Guayota"                     => "Magec 6",
                    "Guayota a"                   => "Magec 6 a",
                    "Guayota b"                   => "Magec 6 b",
                "Teide"                       => "Magec 7",
                    "Teide a"                     => "Magec 7 a",
                    "Teide b"                     => "Magec 7 b",
                    "Luo"                         => "Magec 7 c",
                    "Teide d"                     => "Magec 7 d",
                "Achamán"                    => "Magec 8",
                    "Achamán a"                  => "Magec 8 a",
                "Guanche"                     => "Magec 9",
         ],
         
         // Tilian #23
         23          => [
            "Tilian"                      => "Tilian",
                "Keita"                       => "Tilian 1",
                    "Bello"                       => "Tilian 1 a",
         ],
         
         // Artume #24
         24          => [
            "Artume"                      => "Artume",
                "Lusardi"                     => "Artume 4",
                "Artimi"                      => "Artume 6",
         ],
         
         // Aulin #26
         26          => [
            "Aulin"                       => "Aulin",
                "Nirvana"                     => "Aulin 2",
         ],
         
         // Sol #27
         27          => [
            "Sol"                         => "Sol",
                "Mercury"                     => "Sol 1",
                "Venus"                       => "Sol 2",
                "Earth"                       => "Sol 3",
                    "Moon"                        => "Sol 3 a",
                "Mars"                        => "Sol 4",
                "Jupiter"                     => "Sol 5",
                    "Io"                          => "Sol 5 a",
                    "Europa"                      => "Sol 5 b",
                    "Ganymede"                    => "Sol 5 c",
                    "Callisto"                    => "Sol 5 d",
                "Saturn"                      => "Sol 6",
                    "Enceladus"                   => "Sol 6 a",
                    "Tethys"                      => "Sol 6 b",
                    "Dione"                       => "Sol 6 c",
                    "Rhea"                        => "Sol 6 d",
                    "Titan"                       => "Sol 6 e",
                    "Iapetus"                     => "Sol 6 f",
                "Uranus"                      => "Sol 7",
                    "Ariel"                       => "Sol 7 a",
                    "Umbriel"                     => "Sol 7 b",
                    "Titania"                     => "Sol 7 c",
                    "Oberon"                      => "Sol 7 d",
                "Neptune"                     => "Sol 8",
                    "Triton"                      => "Sol 8 a",
                "Pluto"                       => "Sol 9",
                "Charon"                      => "Sol 10",
                "90482 Orcus"                 => "Sol 11",
                    "Vanth"                       => "Sol 11 a",
                "(307261) 2002 MS4"           => "Sol 12",
                "Salacia"                     => "Sol 13",
                    "Actaea"                      => "Sol 13 a",
                "Haumea"                      => "Sol 14",
                    "Hi'iaka"                     => "Sol 14 a",
                "Quaoar"                      => "Sol 15",
                "Makemake"                    => "Sol 16",
                "(225088) 2007 OR10"          => "Sol 17",
                "Eris"                        => "Sol 18",
                "Sedna"                       => "Sol 19",
                "Persephone"                  => "Sol 20",
         ],
         
         // Pi-fang #28
         28          => [
            "Pi-fang"                     => "Pi-fang",
                "Major's Wreck"               => "Pi-fang 1",
                "Cooper Reward"               => "Pi-fang 2",
         ],
         
         // i Bootis #29
         29          => [
                "i Bootis"                    => "i Bootis A",
                "i Bootis B"                  => "i Bootis B",
                "i Bootis C"                  => "i Bootis C",
                "Maher"                       => "i Bootis D",
                    "Chango"                      => "i Bootis A 1",
                    "Maher Prime"                 => "i Bootis D 1",
                        "Dustball"                    => "i Bootis D 1 a",
         ],
         
         // Keries #30
         30          => [
            "Keries"                      => "Keries",
                "Cisse"                       => "Keries 1",
         ],
         
         // Opala #31
         31          => [
                "Opala"                       => "Opala A",
                "LHS 403"                     => "Opala B",
                    "Baker"                       => "Opala A 4",
                        "Trooper"                     => "Opala A 4 a",
         ],
         
         // Acihaut #32
         32          => [
            "Acihaut"                     => "Acihaut",
                "Ayer"                        => "Acihaut 1",
                    "Jubach"                      => "Acihaut 1 a",
         ],
         
         // Wyrd #33
         33          => [
                "Wyrd"                        => "Wyrd A",
                "Gl 508 B"                    => "Wyrd B",
                    "Way"                         => "Wyrd A 3",
                    "Lister"                      => "Wyrd A 4",
                        "Verse"                       => "Wyrd A 4 a",
         ],
         
         // Eranin #34
         34          => [
            "Eranin"                      => "Eranin",
                "Azeban"                      => "Eranin 1",
         ],
         
         // Rakapila #36
         36          => [
            "Rakapila"                    => "Rakapila",
                "Kendal"                      => "Rakapila 1",
         ],
         
         // Anapos #387
         387         => [
            "Anapos"                      => "Anapos",
                "Jackson"                     => "Anapos 1",
         ],
         
         // Hofada #400
         400         => [
            "Hofada"                      => "Hofada",
                "Ausis"                       => "Hofada 2",
         ],
         
         // Meropis #422
         422         => [
            "Meropis"                     => "Meropis",
                "Anna Ceri"                   => "Meropis 4",
                "Chlos"                       => "Meropis 5",
         ],
         
         // Gippsworld #433
         433         => [
                "Gippsworld"                  => "Gippsworld 1",
         ],
         
         // Howard #446
         446         => [
            "Howard"                      => "Howard",
                "Rogatino"                    => "Howard 2",
         ],
         
         // Ross 1015 #519
         519         => [
            "Ross 1015"                   => "Ross 1015",
                "Der"                         => "Ross 1015 1",
         ],
         
         // Pi Mensae #598
         598         => [
            "Pi Mensae"                   => "Pi Mensae",
                "Trueman's Paradise"          => "Pi Mensae 3",
         ],
         
         // Lanaest #632
         632         => [
                "Lanaest"                     => "Lanaest A",
                "Lanaest B"                   => "Lanaest B",
                    "Lanaest I"                   => "Lanaest B 1",
                    "Lanaest II"                  => "Lanaest B 2",
                    "Lanaest III"                 => "Lanaest B 3",
         ],
         
         // Sango #643
         643         => [
                "Sango"                       => "Sango A",
                "Gliese 586 B"                => "Sango B",
                "Gliese 586 C"                => "Sango C",
         ],
         
         // LHS 1393 #649
         649         => [
                "LHS 1393"                    => "LHS 1393 A",
                "GJ 1047 B"                   => "LHS 1393 B",
                "GJ 1047 C"                   => "LHS 1393 C",
         ],
         
         // CD-77 45 #677
         677         => [
            "CD-77 45"                    => "CD-77 45",
                "Irrelon Prime"               => "CD-77 45 3",
         ],
         
         // CD-64 139 #681
         681         => [
            "CD-64 139"                   => "CD-64 139",
                "Beorg"                       => "CD-64 139 1",
         ],
         
         // 82 Eridani #694
         694         => [
            "82 Eridani"                  => "82 Eridani",
                "Rhatigan"                    => "82 Eridani 1",
                "Ifreds Harbour"              => "82 Eridani 2",
                "Teekay 100705"               => "82 Eridani 3",
         ],
         
         // BD+24 543 #738
         738         => [
            "BD+24 543"                   => "BD+24 543",
                "Pharos"                      => "BD+24 543 1",
         ],
         
         // Mizar #817
         817         => [
                "Mizar"                       => "Mizar A",
                "Mizar Ab"                    => "Mizar B",
                "Mizar B"                     => "Mizar C",
                "Mizar Bb"                    => "Mizar D",
         ],
         
         // Yinjian #842
         842         => [
            "Yinjian"                     => "Yinjian",
                "The Hoonage Dominion"        => "Yinjian 1",
                    "Markham"                     => "Yinjian 1 a",
         ],
         
         // V1090 Herculis #1029
         1029        => [
                "V1090 Herculis"              => "V1090 Herculis A",
                "Gliese 649.1 B"              => "V1090 Herculis B",
                "Gliese 649.1 C"              => "V1090 Herculis C",
         ],
         
         // Aerial #1055
         1055        => [
            "Aerial"                      => "Aerial",
                "Shangjun"                    => "Aerial 1",
                    "Tyree"                       => "Aerial 1 a",
         ],
         
         // Meliae #1062
         1062        => [
            "Meliae"                      => "Meliae",
                "New Los Angeles"             => "Meliae 1",
         ],
         
         // Miola #1165
         1165        => [
                "Miola"                       => "Miola A",
                "Miola B"                     => "Miola B",
                    "Minta"                       => "Miola A 1",
         ],
         
         // Runo #1253
         1253        => [
            "Runo"                        => "Runo",
                "EAL 1141"                    => "Runo 1",
         ],
         
         // Tau Ceti #1293
         1293        => [
            "Tau Ceti"                    => "Tau Ceti",
                "Saunders's Claim"            => "Tau Ceti 1",
                "Taylor Colony"               => "Tau Ceti 2",
                "Bell's Wreck"                => "Tau Ceti 3",
         ],
         
         // Solati #1406
         1406        => [
            "Solati"                      => "Solati",
                "Saena"                       => "Solati 5",
                    "Halla"                       => "Solati 5 a",
         ],
         
         // Groombridge 34 #1410
         1410        => [
                "Groombridge 34"              => "Groombridge 34 A",
                "Groombridge 34 B"            => "Groombridge 34 B",
                    "Gold"                        => "Groombridge 34 A 1",
                        "Jaya"                        => "Groombridge 34 A 1 a",
                    "New America"                 => "Groombridge 34 B 1",
                    "Lyons"                       => "Groombridge 34 B 2",
         ],
         
         // Arouca #1468
         1468        => [
            "Arouca"                      => "Arouca",
                "Amutria"                     => "Arouca 5",
         ],
         
         // LHS 450 #1471
         1471        => [
                "LHS 450"                     => "LHS 450 A",
                "BD+68 946"                   => "LHS 450 B",
                    "Darke's Claim"               => "LHS 450 B 1",
                    "Camp Schmidt"                => "LHS 450 B 2",
         ],
         
         // Stafkarl #1484
         1484        => [
            "Stafkarl"                    => "Stafkarl",
                "Jaufurally"                  => "Stafkarl 1",
         ],
         
         // Cai #1534
         1534        => [
            "Cai"                         => "Cai",
                "Xyile"                       => "Cai 1",
                    "Trango"                      => "Cai 2 a",
         ],
         
         // Terra Mater #1552
         1552        => [
            "Terra Mater"                 => "Terra Mater",
                "New Terra"                   => "Terra Mater 5",
         ],
         
         // LHS 2875 #1554
         1554        => [
                "LHS 2875"                    => "LHS 2875 A",
                "NN 3829 B"                   => "LHS 2875 B",
                "NN 3832 C"                   => "LHS 2875 C",
         ],
         
         // LHS 412 #1691
         1691        => [
            "LHS 412"                     => "LHS 412",
                "LHS 412-I"                   => "LHS 412 1",
                "LHS 412-II"                  => "LHS 412 2",
                "LHS 412-III"                 => "LHS 412 3",
                "LHS 412-IV"                  => "LHS 412 4",
                "LHS 412-V"                   => "LHS 412 5",
                "LHS 412-VI"                  => "LHS 412 6",
                "LHS 412-VII"                 => "LHS 412 7",
         ],
         
         // Samkyha #1702
         1702        => [
            "Samkyha"                     => "Samkyha",
                "Hudson Brooks"               => "Samkyha 1",
         ],
         
         // Frog #1716
         1716        => [
            "Frog"                        => "Frog",
                "Thea"                        => "Frog 1",
                    "Merapi"                      => "Frog 1 a",
         ],
         
         // Agartha #1749
         1749        => [
            "Agartha"                     => "Agartha",
                "Franklin"                    => "Agartha 1",
         ],
         
         // 70 Ophiuchi #1956
         1956        => [
                "70 Ophiuchi"                 => "70 Ophiuchi A",
                "70 Ophiuchi B"               => "70 Ophiuchi B",
                    "Perez"                       => "70 Ophiuchi A 1",
                    "Denver's Legacy"             => "70 Ophiuchi A 2",
                    "Richardson"                  => "70 Ophiuchi A 3",
         ],
         
         // Aparctias #1964
         1964        => [
            "Aparctias"                   => "Aparctias",
                "Cardinal"                    => "Aparctias 1",
                "Septentrio"                  => "Aparctias 2",
         ],
         
         // HIP 15310 #2012
         2012        => [
            "HIP 15310"                   => "HIP 15310",
                "X-2487"                      => "HIP 15310 1",
                    "X-2488"                      => "HIP 15310 1 a",
         ],
         
         // Shinigami #2079
         2079        => [
            "Shinigami"                   => "Shinigami",
                "Bodger's World"              => "Shinigami 1",
                    "Grutopia"                    => "Shinigami 1 a",
         ],
         
         // Bedaho #2086
         2086        => [
            "Bedaho"                      => "Bedaho",
                "Strauss Reward"              => "Bedaho 1",
                "Matto"                       => "Bedaho 2",
         ],
         
         // LHS 1167 #2131
         2131        => [
            "LHS 1167"                    => "LHS 1167",
                "Fortuna Fangrim"             => "LHS 1167 1",
         ],
         
         // Hyperborea #2136
         2136        => [
            "Hyperborea"                  => "Hyperborea",
                "Boreas"                      => "Hyperborea 4",
         ],
         
         // Heget #2196
         2196        => [
            "Heget"                       => "Heget",
                "Ma Mordella"                 => "Heget 1",
                    "Horta"                       => "Heget 1 a",
         ],
         
         // Forculus #2203
         2203        => [
                "Forculus"                    => "Forculus A",
                "Wolf 853 B"                  => "Forculus B",
                    "Domus"                       => "Forculus A 1",
         ],
         
         // Hodack #2253
         2253        => [
            "Hodack"                      => "Hodack",
                "Whiterock"                   => "Hodack 1",
         ],
         
         // Phiagre #2341
         2341        => [
            "Phiagre"                     => "Phiagre",
                "Coates's Wreck"              => "Phiagre 2",
                "Stevenson"                   => "Phiagre 3",
                    "Kurinjal"                    => "Phiagre 3 a",
         ],
         
         // Perkele #2348
         2348        => [
            "Perkele"                     => "Perkele",
                "Volantra"                    => "Perkele 5",
                    "Kanjut"                      => "Perkele 5 a",
         ],
         
         // Witch's Reach #2375
         2375        => [
                "Witch's Reach"               => "Witch's Reach A",
                "Witch's Peak B"              => "Witch's Reach B",
                    "Cauldron"                    => "Witch's Reach A 1",
         ],
         
         // Psi Octantis #2384
         2384        => [
            "Psi Octantis"                => "Psi Octantis",
                "Kanaloa"                     => "Psi Octantis 1",
                "Kane"                        => "Psi Octantis 2",
         ],
         
         // Teshub #2420
         2420        => [
                "Teshub"                      => "Teshub A",
                "Gliese 59 B"                 => "Teshub B",
                    "Kerrash"                     => "Teshub A 1",
         ],
         
         // Chup Kamui #2573
         2573        => [
            "Chup Kamui"                  => "Chup Kamui",
                "Blackstar"                   => "Chup Kamui 1",
                "Manily"                      => "Chup Kamui 2",
         ],
         
         // Surya #2621
         2621        => [
            "Surya"                       => "Surya",
                "Arka"                        => "Surya 3",
         ],
         
         // Cemiess #2670
         2670        => [
            "Cemiess"                     => "Cemiess",
                "Jade"                        => "Cemiess 4",
                    "Emerald"                     => "Cemiess 4 a",
         ],
         
         // Farack #2698
         2698        => [
            "Farack"                      => "Farack",
                "KT-LINE"                     => "Farack 1",
                "Hemshut"                     => "Farack 2",
         ],
         
         // Elysia #2859
         2859        => [
            "Elysia"                      => "Elysia",
                "Cronus"                      => "Elysia 1",
                    "Kailas"                      => "Elysia 1 a",
         ],
         
         // Wolf 397 #2987
         2987        => [
            "Wolf 397"                    => "Wolf 397",
                "Rhodius"                     => "Wolf 397 1",
                    "Trus Madi"                   => "Wolf 397 1 a",
         ],
         
         // Eurybia #3013
         3013        => [
            "Eurybia"                     => "Eurybia",
                "Tira Flirble"                => "Eurybia 1",
                    "Makalu"                      => "Eurybia 1 a",
         ],
         
         // Aymifa #3056
         3056        => [
            "Aymifa"                      => "Aymifa",
                "Camp Rance"                  => "Aymifa 1",
                "Gold"                        => "Aymifa 2",
                "Valhalla"                    => "Aymifa 3",
                "Lee Hollow"                  => "Aymifa 4",
                "Popov Reward"                => "Aymifa 5",
         ],
         
         // Rasmussen #3087
         3087        => [
                "Rasmussen"                   => "Rasmussen 1",
                    "Alphubel"                    => "Rasmussen 1 a",
         ],
         
         // CD-58 16 #3089
         3089        => [
            "CD-58 16"                    => "CD-58 16",
                "Suontaka"                    => "CD-58 16 1",
                    "S-One"                       => "CD-58 16 1 a",
         ],
         
         // Nastrond #3090
         3090        => [
            "Nastrond"                    => "Nastrond",
                "Nidhogg"                     => "Nastrond 3",
         ],
         
         // LHS 2335 #3096
         3096        => [
            "LHS 2335"                    => "LHS 2335",
                "Jon Harris"                  => "LHS 2335 1",
         ],
         
         // Holiacan #3154
         3154        => [
            "Holiacan"                    => "Holiacan",
                "Reaganworld"                 => "Holiacan 1",
                "Ouseyworld"                  => "Holiacan 2",
                "Lopez's Hole"                => "Holiacan 3",
         ],
         
         // Themiscrya #3237
         3237        => [
            "Themiscrya"                  => "Themiscrya",
                "Lily May World"              => "Themiscrya 1",
         ],
         
         // Ross 986 #3284
         3284        => [
            "Ross 986"                    => "Ross 986",
                "Democracy"                   => "Ross 986 1",
                    "Diran"                       => "Ross 986 1 a",
                "Camp Patrick"                => "Ross 986 2",
         ],
         
         // Ross 33 #3345
         3345        => [
            "Ross 33"                     => "Ross 33",
                "Grüne Hölle"               => "Ross 33 1",
         ],
         
         // Tanmark #3404
         3404        => [
            "Tanmark"                     => "Tanmark",
                "Luca L [V4-26]"              => "Tanmark 1",
                "Icemark"                     => "Tanmark 6",
         ],
         
         // Tetrian #3449
         3449        => [
            "Tetrian"                     => "Tetrian",
                "Gidim"                       => "Tetrian 5",
                "John Bradley Hope"           => "Tetrian 6",
         ],
         
         // Shibboleth #3504
         3504        => [
            "Shibboleth"                  => "Shibboleth",
                "Shibboleth Haven"            => "Shibboleth 1",
                    "Kyllikki"                    => "Shibboleth 1 a",
         ],
         
         // Epsilon Phoenicis #3505
         3505        => [
            "Epsilon Phoenicis"           => "Epsilon Phoenicis",
                "Binnein"                     => "Epsilon Phoenicis 5",
                "Bormann's Blessing"          => "Epsilon Phoenicis 6",
         ],
         
         // Feuma #3537
         3537        => [
            "Feuma"                       => "Feuma",
                "New Albion"                  => "Feuma 1",
         ],
         
         // Morten-Marte #3544
         3544        => [
                "Morten-Marte"                => "Morten-Marte A",
                "Morten-Marte B"              => "Morten-Marte B",
                    "Cullen"                      => "Morten-Marte A 1",
         ],
         
         // Momus Reach #3546
         3546        => [
            "Momus Reach"                 => "Momus Reach",
                "Nemesis"                     => "Momus Reach 1",
                    "Pandora"                     => "Momus Reach 1 a",
         ],
         
         // Akhenaten #3563
         3563        => [
            "Akhenaten"                   => "Akhenaten",
                "Jepochal-G Planet"           => "Akhenaten 1",
         ],
         
         // Sanna #3819
         3819        => [
            "Sanna"                       => "Sanna",
                "Erdogan-4"                   => "Sanna 1",
                    "Caher"                       => "Sanna 1 a",
         ],
         
         // Viracocha #3926
         3926        => [
            "Viracocha"                   => "Viracocha",
                "Tampu"                       => "Viracocha 1",
                    "Aural"                       => "Viracocha 1 a",
         ],
         
         // Michael Pantazis #3967
         3967        => [
            "Michael Pantazis"            => "Michael Pantazis",
                "Elizabeth Pantazis"          => "Michael Pantazis 1",
         ],
         
         // Exigus #3993
         3993        => [
            "Exigus"                      => "Exigus",
                "Walkerworld"                 => "Exigus 1",
         ],
         
         // Wolf 54 #4061
         4061        => [
            "Wolf 54"                     => "Wolf 54",
                "Gord'Ena"                    => "Wolf 54 1",
                    "Druman"                      => "Wolf 54 1 a",
         ],
         
         // Ayethi #4113
         4113        => [
            "Ayethi"                      => "Ayethi",
                "Topaz"                       => "Ayethi 1",
                "Raven's Landing"             => "Ayethi 2",
         ],
         
         // Anlave #4133
         4133        => [
            "Anlave"                      => "Anlave",
                "Jennings's Legacy"           => "Anlave 3",
                "Anderton's Mine"             => "Anlave 5",
                "Jordan's Rock"               => "Anlave 6",
                "Anderton"                    => "Anlave 7",
                "Denver"                      => "Anlave 8",
         ],
         
         // Delta Pavonis #4225
         4225        => [
            "Delta Pavonis"               => "Delta Pavonis",
                "Camp Mitterand"              => "Delta Pavonis 1",
                "Suzuki Reward"               => "Delta Pavonis 2",
                "Reagan's Legacy"             => "Delta Pavonis 3",
                    "Gold"                        => "Delta Pavonis 4 a",
         ],
         
         // Prism #4243
         4243        => [
                "Prism"                       => "Prism A",
                "Ruby"                        => "Prism B",
                "Diamond"                     => "Prism C",
                "Sapphire"                    => "Prism D",
                    "Mestra"                      => "Prism A 1",
                    "Daedalion"                   => "Prism A 2",
                        "Chione"                      => "Prism A 2 a",
                    "Neaera"                      => "Prism A 3",
                    "Eurcyleia"                   => "Prism A 4",
                        "Anticlea"                    => "Prism A 4 a",
                    "Amphithea"                   => "Prism A 5",
         ],
         
         // LHS 1650 #4244
         4244        => [
            "LHS 1650"                    => "LHS 1650",
                "Trileukon"                   => "LHS 1650 1",
                    "Laila"                       => "LHS 1650 1 a",
         ],
         
         // Ekhi #4325
         4325        => [
            "Ekhi"                        => "Ekhi",
                "Proudhon's Property"         => "Ekhi 1",
                    "Kongur"                      => "Ekhi 1 a",
         ],
         
         // LHS 3921 #4337
         4337        => [
            "LHS 3921"                    => "LHS 3921",
                "Tilune"                      => "LHS 3921 1",
         ],
         
         // Shinrarta Dezhra #4345
         4345        => [
                "Shinrarta Dezhra"            => "Shinrarta Dezhra A",
                "LTT 4550"                    => "Shinrarta Dezhra B",
                    "Founders World"              => "Shinrarta Dezhra A 4",
         ],
         
         // Ross 345 #4371
         4371        => [
            "Ross 345"                    => "Ross 345",
                "Brigantia"                   => "Ross 345 1",
         ],
         
         // Marduk #4690
         4690        => [
            "Marduk"                      => "Marduk",
                "Sippar"                      => "Marduk 1",
                    "Amar"                        => "Marduk 1 a",
         ],
         
         // LHS 1573 #4705
         4705        => [
            "LHS 1573"                    => "LHS 1573",
                "Dustbowl"                    => "LHS 1573 1",
         ],
         
         // LHS 2819 #4708
         4708        => [
            "LHS 2819"                    => "LHS 2819",
                "Suyus"                       => "LHS 2819 3",
         ],
         
         // Omicron Capricorni B #4827
         4827        => [
                "Omicron Capricorni B"        => "Omicron Capricorni B A",
                "Omicron Capricorni"          => "Omicron Capricorni B B",
         ],
         
         // Run #5061
         5061        => [
            "Run"                         => "Run",
                "Danny's World"               => "Run 1",
         ],
         
         // Alkalurops #5078
         5078        => [
                "Alkalurops"                  => "Alkalurops A",
                "51 Mu-2 Bootis B"            => "Alkalurops B",
                "51 Mu-2 Bootis C"            => "Alkalurops C",
         ],
         
         // Akkadia #5110
         5110        => [
            "Akkadia"                     => "Akkadia",
                "Remo Burkhard"               => "Akkadia 1",
                    "Cathkin"                     => "Akkadia 1 a",
         ],
         
         // LHS 397 #5294
         5294        => [
            "LHS 397"                     => "LHS 397",
                "Cooper Rock"                 => "LHS 397 1",
                "Gold"                        => "LHS 397 2",
         ],
         
         // Toci #5318
         5318        => [
            "Toci"                        => "Toci",
                "Tialli"                      => "Toci 1",
         ],
         
         // Anayol #5347
         5347        => [
            "Anayol"                      => "Anayol",
                "Solo's Grave"                => "Anayol 1",
                "Gold"                        => "Anayol 2",
                "Bush Reward"                 => "Anayol 3",
         ],
         
         // Ackwada #5464
         5464        => [
            "Ackwada"                     => "Ackwada",
                "Lopez's Mine"                => "Ackwada 1",
                "Biggs's Hole"                => "Ackwada 2",
                "Thompson's Planet"           => "Ackwada 3",
         ],
         
         // Algreit #5527
         5527        => [
            "Algreit"                     => "Algreit",
                "Panmore"                     => "Algreit 1",
         ],
         
         // Minerva #5533
         5533        => [
            "Minerva"                     => "Minerva",
                "Eris"                        => "Minerva 1",
                "Peiste"                      => "Minerva 2",
         ],
         
         // Aramzahd #5633
         5633        => [
            "Aramzahd"                    => "Aramzahd",
                "Guardinia"                   => "Aramzahd 1",
                    "Smade's Planet"              => "Aramzahd 1 a",
         ],
         
         // Avalon #5642
         5642        => [
            "Avalon"                      => "Avalon",
                "Kipper's Retreat"            => "Avalon 1",
                "Grach"                       => "Avalon 2",
         ],
         
         // BD+75 58 #5702
         5702        => [
            "BD+75 58"                    => "BD+75 58",
                "KevlinSyk - 82"              => "BD+75 58 2",
         ],
         
         // LHS 1387 #5771
         5771        => [
            "LHS 1387"                    => "LHS 1387",
                "New Turkey"                  => "LHS 1387 1",
                    "Ararat"                      => "LHS 1387 1 a",
         ],
         
         // Artemis #5780
         5780        => [
            "Artemis"                     => "Artemis",
                "Laphria"                     => "Artemis 2",
                "Agrotera"                    => "Artemis 5",
                    "Agrotera a"                  => "Artemis 5 a",
                    "Agrotera b"                  => "Artemis 5 b",
                    "Agrotera c"                  => "Artemis 5 c",
         ],
         
         // HIP 106006 #5784
         5784        => [
            "HIP 106006"                  => "HIP 106006",
                "Rakus' Memorial"             => "HIP 106006 1",
         ],
         
         // Luyten 674-15 #5964
         5964        => [
            "Luyten 674-15"               => "Luyten 674-15",
                "Bell's World"                => "Luyten 674-15 1",
                "Jordan's Hole"               => "Luyten 674-15 2",
         ],
         
         // Cegreeth #5983
         5983        => [
            "Cegreeth"                    => "Cegreeth",
                "Morris's Planet"             => "Cegreeth 1",
                    "Morris's Claim"              => "Cegreeth 1 a",
         ],
         
         // Wolf 573 #5986
         5986        => [
                "Wolf 573"                    => "Wolf 573 A",
                "Gl 596.1 B"                  => "Wolf 573 B",
                    "Lupon"                       => "Wolf 573 A 1",
         ],
         
         // Lalande 4141 #6068
         6068        => [
            "Lalande 4141"                => "Lalande 4141",
                "Nahtanoj"                    => "Lalande 4141 1",
         ],
         
         // Futhark #6115
         6115        => [
            "Futhark"                     => "Futhark",
                "Chuillin"                    => "Futhark 1",
                "Faereal Prime"               => "Futhark 2",
         ],
         
         // Reynes #6116
         6116        => [
            "Reynes"                      => "Reynes",
                "Ohajiki"                     => "Reynes 1",
         ],
         
         // Morana #6411
         6411        => [
            "Morana"                      => "Morana",
                "Tellus Tertius"              => "Morana 6",
                    "Nansen"                      => "Morana 6 a",
         ],
         
         // Asphodel #6603
         6603        => [
            "Asphodel"                    => "Asphodel",
                "Irving World"                => "Asphodel 1",
                    "Irving's Moon"               => "Asphodel 1 a",
         ],
         
         // Alexis Centauri #6625
         6625        => [
            "Alexis Centauri"             => "Alexis Centauri",
                "Sophia"                      => "Alexis Centauri 1",
                    "Pumori"                      => "Alexis Centauri 1 a",
         ],
         
         // Alkaid #6626
         6626        => [
            "Alkaid"                      => "Alkaid",
                    "Ashfield's Wreck"            => "Alkaid 14 a",
                    "Strauss Rock"                => "Alkaid 15 a",
                    "Green Mount"                 => "Alkaid 15 b",
                    "New Caledonia"               => "Alkaid 16 a",
                    "Greenhill"                   => "Alkaid 16 b",
                    "Honda"                       => "Alkaid 16 c",
                    "Diamond's Rock"              => "Alkaid 16 d",
         ],
         
         // LHS 3531 #6651
         6651        => [
            "LHS 3531"                    => "LHS 3531",
                "LHS 3531-I"                  => "LHS 3531 2",
         ],
         
         // Tangaroa #6674
         6674        => [
            "Tangaroa"                    => "Tangaroa",
                "Mirnipli"                    => "Tangaroa 1",
                    "Imishli"                     => "Tangaroa 1 a",
         ],
         
         // Delta Phoenicis #6704
         6704        => [
            "Delta Phoenicis"             => "Delta Phoenicis",
                "DP I"                        => "Delta Phoenicis 1",
                "Anka"                        => "Delta Phoenicis 2",
                "Kerkes"                      => "Delta Phoenicis 3",
                    "Garuda"                      => "Delta Phoenicis 3 a",
         ],
         
         // Betel #6709
         6709        => [
            "Betel"                       => "Betel",
                "Kava"                        => "Betel 3",
         ],
         
         // Ququve #6772
         6772        => [
                "Ququve"                      => "Ququve A",
                "NN 3179 B"                   => "Ququve B",
                    "New America"                 => "Ququve A 1",
                    "Gold"                        => "Ququve A 2",
         ],
         
         // Rudjer Boskovic #6797
         6797        => [
            "Rudjer Boskovic"             => "Rudjer Boskovic",
                "New Serbia"                  => "Rudjer Boskovic 1",
         ],
         
         // Ninhursag #6800
         6800        => [
            "Ninhursag"                   => "Ninhursag",
                "Kerinci"                     => "Ninhursag 1",
         ],
         
         // VESPER-M4 #6801
         6801        => [
            "VESPER-M4"                   => "VESPER-M4",
                "Slough"                      => "VESPER-M4 7",
         ],
         
         // LTT 1345 #6834
         6834        => [
            "LTT 1345"                    => "LTT 1345",
                "Pod"                         => "LTT 1345 1",
         ],
         
         // Vargerson #6874
         6874        => [
            "Vargerson"                   => "Vargerson",
                "Miranda II"                  => "Vargerson 1",
         ],
         
         // Alpha Centauri #6903
         6903        => [
                "Alpha Centauri"              => "Alpha Centauri A",
                "Alpha Centauri B"            => "Alpha Centauri B",
                "Proxima Centauri"            => "Alpha Centauri C",
                    "2045 PC2"                    => "Alpha Centauri AB 1",
                    "Lagrange"                    => "Alpha Centauri AB 2",
                        "2042 L1"                     => "Alpha Centauri AB 2 a",
                    "2071 AC3"                    => "Alpha Centauri AB 3",
                    "Eden"                        => "Alpha Centauri C 1",
         ],
         
         // Carcinus #6949
         6949        => [
            "Carcinus"                    => "Carcinus",
                "New Babylon"                 => "Carcinus 4",
         ],
         
         // LTT 7669 #6964
         6964        => [
            "LTT 7669"                    => "LTT 7669",
                "Grüne Hölle"               => "LTT 7669 1",
         ],
         
         // Phanes #7021
         7021        => [
            "Phanes"                      => "Phanes",
                "Wilde's World"               => "Phanes 3",
                    "Muztagh"                     => "Phanes 3 a",
         ],
         
         // Facece #7060
         7060        => [
            "Facece"                      => "Facece",
                "Mathews's Hole"              => "Facece 1",
                "Coates's Mine"               => "Facece 2",
                "Peters's Wreck"              => "Facece 3",
                "New America"                 => "Facece 4",
                "Topaz"                       => "Facece 5",
         ],
         
         // LTT 2952 #7096
         7096        => [
            "LTT 2952"                    => "LTT 2952",
                    "Burbidge"                    => "LTT 2952 1 a",
         ],
         
         // Crevit #7097
         7097        => [
            "Crevit"                      => "Crevit",
                "Dalraida"                    => "Crevit 1",
         ],
         
         // Aymiay #7225
         7225        => [
            "Aymiay"                      => "Aymiay",
                "Camp Diamond"                => "Aymiay 1",
                "Cooperworld"                 => "Aymiay 2",
                    "Haynes's Wreck"              => "Aymiay 2 a",
                "Baker"                       => "Aymiay 3",
         ],
         
         // Jotunheim #7330
         7330        => [
            "Jotunheim"                   => "Jotunheim",
                "Daisy"                       => "Jotunheim 3",
         ],
         
         // HERZ 10688 #7407
         7407        => [
            "HERZ 10688"                  => "HERZ 10688",
                "Melfort"                     => "HERZ 10688 5",
         ],
         
         // Hecate #7415
         7415        => [
            "Hecate"                      => "Hecate",
                "Harrison XIII"               => "Hecate 2",
                "Tomie"                       => "Hecate 3",
         ],
         
         // Orerve #7421
         7421        => [
            "Orerve"                      => "Orerve",
                "Simpson's Eden"              => "Orerve 1",
         ],
         
         // Moirai #7450
         7450        => [
            "Moirai"                      => "Moirai",
                "Thea Centauri"               => "Moirai 1",
                    "Kangri"                      => "Moirai 1 a",
         ],
         
         // Wakea #7459
         7459        => [
            "Wakea"                       => "Wakea",
                "Robertson's Renown"          => "Wakea 1",
                    "Meru"                        => "Wakea 1 a",
         ],
         
         // Aganippe #7506
         7506        => [
            "Aganippe"                    => "Aganippe",
                "Boeotia"                     => "Aganippe 1",
                    "New Thebes"                  => "Aganippe 1 a",
         ],
         
         // Baker #7509
         7509        => [
            "Baker"                       => "Baker",
                "Paru"                        => "Baker 1",
         ],
         
         // CD-73 12 #7514
         7514        => [
            "CD-73 12"                    => "CD-73 12",
                "Delicious Cinnamon"          => "CD-73 12 5",
                "Scafell"                     => "CD-73 12 6",
         ],
         
         // Luyten 347-14 #7526
         7526        => [
            "Luyten 347-14"               => "Luyten 347-14",
                "Rance's Wreck"               => "Luyten 347-14 1",
         ],
         
         // Ross 905 #7539
         7539        => [
            "Ross 905"                    => "Ross 905",
                "Robert Kelley"               => "Ross 905 1",
         ],
         
         // Riedquat #7540
         7540        => [
            "Riedquat"                    => "Riedquat",
                "Waterloo"                    => "Riedquat 1",
         ],
         
         // Flesk #7545
         7545        => [
            "Flesk"                       => "Flesk",
                "Gaia Mai"                    => "Flesk 1",
                    "Manod"                       => "Flesk 1 a",
         ],
         
         // Arque #7551
         7551        => [
            "Arque"                       => "Arque",
                "New Caledonia"               => "Arque 1",
                    "Gold"                        => "Arque 1 a",
         ],
         
         // Thalarctos #7647
         7647        => [
            "Thalarctos"                  => "Thalarctos",
                "Stibium"                     => "Thalarctos 2",
         ],
         
         // LHS 2884 #7650
         7650        => [
            "LHS 2884"                    => "LHS 2884",
                "Conti"                       => "LHS 2884 1",
         ],
         
         // LTT 135 #7706
         7706        => [
            "LTT 135"                     => "LTT 135",
                "Crocket"                     => "LTT 135 8",
                    "Tulaichean"                  => "LTT 135 8 a",
         ],
         
         // Zeaex #7729
         7729        => [
            "Zeaex"                       => "Zeaex",
                "Cambridge's Hole"            => "Zeaex 3",
                "Ashfield's World"            => "Zeaex 4",
                "Democracy"                   => "Zeaex 5",
                "Irvin's Wreck"               => "Zeaex 6",
                    "Schmidt Rock"                => "Zeaex 7 a",
                "Ulrich's Mine"               => "Zeaex 8",
         ],
         
         // LDS 883 #7811
         7811        => [
                "LDS 883"                     => "LDS 883 A",
                "Gliese 118.2 B"              => "LDS 883 B",
                "Gliese 118.2 C"              => "LDS 883 C",
                    "Argovia"                     => "LDS 883 A 2",
         ],
         
         // Alexandrinus #7870
         7870        => [
            "Alexandrinus"                => "Alexandrinus",
                "Londinium"                   => "Alexandrinus 5",
         ],
         
         // PLX 695 #7894
         7894        => [
            "PLX 695"                     => "PLX 695",
                "Secular I"                   => "PLX 695 1",
         ],
         
         // Paul-Friedrichs Star #7973
         7973        => [
            "Paul-Friedrichs Star"        => "Paul-Friedrichs Star",
                "Jakobs Hallowed Paradox"     => "Paul-Friedrichs Star 1",
         ],
         
         // Summerland #8064
         8064        => [
            "Summerland"                  => "Summerland",
                "Henry O'Hare's Haven"        => "Summerland 6",
         ],
         
         // Cockaigne #8082
         8082        => [
            "Cockaigne"                   => "Cockaigne",
                "Goliard"                     => "Cockaigne 1",
                "Mytoses"                     => "Cockaigne 2",
         ],
         
         // LHS 448 #8140
         8140        => [
            "LHS 448"                     => "LHS 448",
                "Vivally"                     => "LHS 448 1",
         ],
         
         // Alioth #8218
         8218        => [
            "Alioth"                      => "Alioth",
                    "Wicca's World"               => "Alioth 5 a",
                    "Turner's World"              => "Alioth 5 b",
                    "Argent's Claim"              => "Alioth 5 c",
                "Bifrost"                     => "Alioth 6",
                    "Mackenzie's Legacy"          => "Alioth 6 a",
                    "Ousey Rock"                  => "Alioth 6 b",
                    "Miller Rock"                 => "Alioth 6 c",
         ],
         
         // Altair #8228
         8228        => [
            "Altair"                      => "Altair",
                "Darkes Hollow"               => "Altair 3",
                "Biggs Colony"                => "Altair 4",
                "Lowing's Rock"               => "Altair 5",
         ],
         
         // Felkan #8269
         8269        => [
            "Felkan"                      => "Felkan",
                "Jesstopia"                   => "Felkan 1",
         ],
         
         // Epsilon Hydri #8317
         8317        => [
            "Epsilon Hydri"               => "Epsilon Hydri",
                "Offield-Duan"                => "Epsilon Hydri 5",
                    "Shan"                        => "Epsilon Hydri 5 a",
         ],
         
         // Tarach Tor #8350
         8350        => [
            "Tarach Tor"                  => "Tarach Tor",
                "Hanandroo"                   => "Tarach Tor 3",
                "Moel Sych"                   => "Tarach Tor 4",
         ],
         
         // Fawaol #8468
         8468        => [
            "Fawaol"                      => "Fawaol",
                    "Tracy"                       => "Fawaol 1 a",
                    "Camp Rush"                   => "Fawaol 1 b",
                "Distat"                      => "Fawaol 2",
                "Griffiths Rock"              => "Fawaol 3",
         ],
         
         // Ross 128 #8483
         8483        => [
            "Ross 128"                    => "Ross 128",
                "Grant's Claim"               => "Ross 128 1",
         ],
         
         // Treima #8502
         8502        => [
            "Treima"                      => "Treima",
                "Haumod"                      => "Treima 1",
         ],
         
         // Annwn #8531
         8531        => [
            "Annwn"                       => "Annwn",
                "Arawn"                       => "Annwn 1",
         ],
         
         // Baldr #8541
         8541        => [
            "Baldr"                       => "Baldr",
                "L.Meristo"                   => "Baldr 2",
         ],
         
         // 51 Arietis #8564
         8564        => [
            "51 Arietis"                  => "51 Arietis",
                "Uruk"                        => "51 Arietis 4",
                "Adab"                        => "51 Arietis 5",
         ],
         
         // Gyton's Hope #8589
         8589        => [
            "Gyton's Hope"                => "Gyton's Hope",
                "Gyton's Landing"             => "Gyton's Hope 1",
                "Pisani"                      => "Gyton's Hope 2",
         ],
         
         // 39 Tauri #8642
         8642        => [
                "39 Tauri"                    => "39 Tauri A",
                "39 Tauri B"                  => "39 Tauri B",
                    "Ad Pontes"                   => "39 Tauri A 1",
         ],
         
         // BD+31 2290 #8680
         8680        => [
            "BD+31 2290"                  => "BD+31 2290",
                "Jodi's Rest"                 => "BD+31 2290 1",
         ],
         
         // Andancan #8693
         8693        => [
            "Andancan"                    => "Andancan",
                "New Bactra"                  => "Andancan 1",
         ],
         
         // LHS 1071 #8708
         8708        => [
            "LHS 1071"                    => "LHS 1071",
                "Dr. Mitanek's Eternity"      => "LHS 1071 1",
                "Ugain"                       => "LHS 1071 2",
         ],
         
         // Kappa Fornacis #8920
         8920        => [
            "Kappa Fornacis"              => "Kappa Fornacis",
                "Panem"                       => "Kappa Fornacis 3",
                    "Panes"                       => "Kappa Fornacis 3 a",
         ],
         
         // Jodrell #8939
         8939        => [
            "Jodrell"                     => "Jodrell",
                "Jodrell I"                   => "Jodrell 1",
                "Jodrell II"                  => "Jodrell 2",
                "Jodrell III"                 => "Jodrell 3",
         ],
         
         // Sedna #9014
         9014        => [
            "Sedna"                       => "Sedna",
                    "Gayda"                       => "Sedna 1 a",
         ],
         
         // Caelottixa #9025
         9025        => [
                "Caelottixa"                  => "Caelottixa 1",
         ],
         
         // Lansbury #9178
         9178        => [
            "Lansbury"                    => "Lansbury",
                "Lansbury - I"                => "Lansbury 1",
                "Lansbury - II"               => "Lansbury 2",
                "Lansbury - III"              => "Lansbury 3",
                "Lansbury - IV"               => "Lansbury 4",
                "Lansbury - V"                => "Lansbury 5",
                "Lansbury - VI"               => "Lansbury 6",
         ],
         
         // Soholia #9204
         9204        => [
            "Soholia"                     => "Soholia",
                "Simpson Hollow"              => "Soholia 1",
                "Molotovworld"                => "Soholia 2",
                "Bradley's Legacy"            => "Soholia 3",
         ],
         
         // LTT 606 #9210
         9210        => [
            "LTT 606"                     => "LTT 606",
                "Fraser"                      => "LTT 606 1",
                "Moel Lefn"                   => "LTT 606 6",
         ],
         
         // Tionisla #9216
         9216        => [
            "Tionisla"                    => "Tionisla",
                "New Caledonia"               => "Tionisla 1",
         ],
         
         // CD-70 1960 #9239
         9239        => [
            "CD-70 1960"                  => "CD-70 1960",
                "Chonzie"                     => "CD-70 1960 1",
                "Brodie's Legacy"             => "CD-70 1960 2",
         ],
         
         // Tamor #9254
         9254        => [
            "Tamor"                       => "Tamor",
                "Lukka"                       => "Tamor 4",
         ],
         
         // Wolf 248 #9312
         9312        => [
            "Wolf 248"                    => "Wolf 248",
                "Balmhorn"                    => "Wolf 248 1",
         ],
         
         // LTT 1581 #9334
         9334        => [
            "LTT 1581"                    => "LTT 1581",
                "Grum"                        => "LTT 1581 1",
         ],
         
         // Ross 154 #9419
         9419        => [
            "Ross 154"                    => "Ross 154",
                "Aster"                       => "Ross 154 1",
                    "Merlin"                      => "Ross 154 1 a",
                "Dust Ball"                   => "Ross 154 2",
         ],
         
         // Ross 444 #9441
         9441        => [
            "Ross 444"                    => "Ross 444",
                "Hutton Prime"                => "Ross 444 1",
         ],
         
         // Thule #9443
         9443        => [
            "Thule"                       => "Thule",
                "Frogspawn"                   => "Thule 2",
         ],
         
         // Futhorc #9543
         9543        => [
            "Futhorc"                     => "Futhorc",
                "Graysonia"                   => "Futhorc 2",
                    "Boeth"                       => "Futhorc 2 a",
         ],
         
         // Phiince #9673
         9673        => [
            "Phiince"                     => "Phiince",
                "Kaptai"                      => "Phiince 1",
         ],
         
         // Firdaus #9776
         9776        => [
                "Firdaus"                     => "Firdaus A",
                "Firdaus B"                   => "Firdaus B",
                    "Borealis (HD 7199 b)"        => "Firdaus A 3",
         ],
         
         // CD-41 359 #9802
         9802        => [
            "CD-41 359"                   => "CD-41 359",
                "Gem (HD 8535 b)"             => "CD-41 359 1",
                    "Garthyre"                    => "CD-41 359 1 a",
         ],
         
         // Aku #9870
         9870        => [
            "Aku"                         => "Aku",
                "Kitsu's Rest"                => "Aku 1",
         ],
         
         // Zeus #9933
         9933        => [
            "Zeus"                        => "Zeus",
                "Salisbury"                   => "Zeus 4",
                    "Mulanje"                     => "Zeus 4 a",
         ],
         
         // Phekda #10054
         10054       => [
            "Phekda"                      => "Phekda",
                    "Haynes's Hole"               => "Phekda 1 a",
                    "Nirvana"                     => "Phekda 4 a",
                    "New California"              => "Phekda 4 b",
                    "Topaz"                       => "Phekda 4 c",
                    "Ousey"                       => "Phekda 5 a",
                    "Francis's Wreck"             => "Phekda 6 a",
         ],
         
         // Nortes #10133
         10133       => [
            "Nortes"                      => "Nortes",
                "Ash's Inferis"               => "Nortes 1",
                    "Fach"                        => "Nortes 1 a",
         ],
         
         // Arinack #10140
         10140       => [
            "Arinack"                     => "Arinack",
                "Lagdo"                       => "Arinack 1",
         ],
         
         // Wolf 1323 #10185
         10185       => [
            "Wolf 1323"                   => "Wolf 1323",
                "Karpo"                       => "Wolf 1323 1",
                "Rattus"                      => "Wolf 1323 2",
         ],
         
         // Toor #10237
         10237       => [
            "Toor"                        => "Toor",
                "Tudras"                      => "Toor 1",
         ],
         
         // Zelada #10253
         10253       => [
            "Zelada"                      => "Zelada",
                "New Africa"                  => "Zelada 1",
                "Singh Hollow"                => "Zelada 2",
         ],
         
         // Eta Cassiopeiae #10516
         10516       => [
                "Eta Cassiopeiae"             => "Eta Cassiopeiae A",
                "Eta Cassiopeiae B"           => "Eta Cassiopeiae B",
                    "Rock"                        => "Eta Cassiopeiae A 1",
                    "Feynman"                     => "Eta Cassiopeiae A 2",
                    "Trojan"                      => "Eta Cassiopeiae A 3",
                        "New Moon"                    => "Eta Cassiopeiae A 3 a",
                    "Between"                     => "Eta Cassiopeiae A 4",
                        "Navy Central"                => "Eta Cassiopeiae A 4 a",
         ],
         
         // Nat9481 #10527
         10527       => [
            "Nat9481"                     => "Nat9481",
                "Evelyn's Haven 1905"         => "Nat9481 5",
         ],
         
         // Liaedin #10533
         10533       => [
                "Liaedin"                     => "Liaedin A",
                "Liaedin B"                   => "Liaedin B",
                    "Ulrich's Rock"               => "Liaedin A 1",
                    "Moore's World"               => "Liaedin A 2",
                    "Schneider Colony"            => "Liaedin A 3",
                        "Camp Ashfield"               => "Liaedin A 3 a",
         ],
         
         // Tiliala #10661
         10661       => [
            "Tiliala"                     => "Tiliala",
                "Valhalla"                    => "Tiliala 3",
                    "Saitoro"                     => "Tiliala 3 a",
                    "Democracy"                   => "Tiliala 3 b",
         ],
         
         // LFT 601 #10692
         10692       => [
                "LFT 601"                     => "LFT 601 A",
                "Gl 319 B"                    => "LFT 601 B",
                "Gl 319 C"                    => "LFT 601 C",
         ],
         
         // Delkar #10717
         10717       => [
            "Delkar"                      => "Delkar",
                "Savo"                        => "Delkar 4",
                    "Anamundi"                    => "Delkar 4 a",
         ],
         
         // Munfayl #10760
         10760       => [
            "Munfayl"                     => "Munfayl",
                "More"                        => "Munfayl 1",
                "Bondarek"                    => "Munfayl 2",
         ],
         
         // Isis #10762
         10762       => [
            "Isis"                        => "Isis",
                "Isis I"                      => "Isis 3",
                "Isis II"                     => "Isis 4",
                "Isis III"                    => "Isis 5",
                "Isis IV"                     => "Isis 6",
                "Isis V"                      => "Isis 7",
                "Isis VI"                     => "Isis 8",
                "Isis VII"                    => "Isis 9",
                "Isis VIII"                   => "Isis 10",
                "Isis IX"                     => "Isis 11",
                "Isis X"                      => "Isis 12",
         ],
         
         // Wolf 294 #10787
         10787       => [
            "Wolf 294"                    => "Wolf 294",
                "Jeffries Rock"               => "Wolf 294 1",
         ],
         
         // Eulexia #10842
         10842       => [
            "Eulexia"                     => "Eulexia",
                "Eurydice"                    => "Eulexia 3",
                "Tiamoia"                     => "Eulexia 5",
         ],
         
         // Aulis #10890
         10890       => [
            "Aulis"                       => "Aulis",
                "Chubei"                      => "Aulis 3",
                    "Khan"                        => "Aulis 3 a",
         ],
         
         // Lambda Horologii #10892
         10892       => [
            "Lambda Horologii"            => "Lambda Horologii",
                "Thorgill"                    => "Lambda Horologii 1",
         ],
         
         // Maausk #10899
         10899       => [
            "Maausk"                      => "Maausk",
                "Owain"                       => "Maausk 1",
                    "Kazbek"                      => "Maausk 1 a",
         ],
         
         // PW Hydrae #10912
         10912       => [
                "PW Hydrae"                   => "PW Hydrae A",
                "NN 3608 B"                   => "PW Hydrae B",
                "NN 3609 C"                   => "PW Hydrae C",
         ],
         
         // Zeessze #10980
         10980       => [
                "Zeessze"                     => "Zeessze A",
                "Gl 53 B"                     => "Zeessze B",
                    "Gonzalez's Grave"            => "Zeessze A 1",
                    "New America"                 => "Zeessze A 2",
                        "Macmillian's Hole"           => "Zeessze A 2 a",
         ],
         
         // Vega #11009
         11009       => [
            "Vega"                        => "Vega",
                "Popov Reward"                => "Vega 1",
                "Tracy's Havan"               => "Vega 3",
                    "Trikora"                     => "Vega 3 a",
         ],
         
         // Ross 780 #11074
         11074       => [
            "Ross 780"                    => "Ross 780",
                "Wireworld"                   => "Ross 780 2",
         ],
         
         // Saffron #11142
         11142       => [
            "Saffron"                     => "Saffron",
                "Ectoplasm"                   => "Saffron 3",
         ],
         
         // Liabeze #11255
         11255       => [
            "Liabeze"                     => "Liabeze",
                "Mitterand's World"           => "Liabeze 1",
                "New California"              => "Liabeze 2",
         ],
         
         // CD-54 471 #11282
         11282       => [
            "CD-54 471"                   => "CD-54 471",
                "Brigsteer"                   => "CD-54 471 1",
         ],
         
         // Lugh #11288
         11288       => [
            "Lugh"                        => "Lugh",
                "Tir na Lugh"                 => "Lugh 6",
         ],
         
         // Azrael #11296
         11296       => [
            "Azrael"                      => "Azrael",
                "Rafferty's Paradise"         => "Azrael 2",
                    "Noshaq"                      => "Azrael 2 a",
         ],
         
         // LTT 15493 #11384
         11384       => [
            "LTT 15493"                   => "LTT 15493",
                "Sun Dancer"                  => "LTT 15493 1",
                "LTT 15493 - I"               => "LTT 15493 2",
                "Jarek's Folly"               => "LTT 15493 3",
                "LTT 15493 - III"             => "LTT 15493 4",
                "LTT 15493 - IV"              => "LTT 15493 5",
                "LTT 15493 - V"               => "LTT 15493 6",
         ],
         
         // Uszaa #11436
         11436       => [
            "Uszaa"                       => "Uszaa",
                "Jameson's Pride"             => "Uszaa 7",
         ],
         
         // Ithaca #11518
         11518       => [
            "Ithaca"                      => "Ithaca",
                "Huari"                       => "Ithaca 1",
         ],
         
         // Dinda #11542
         11542       => [
            "Dinda"                       => "Dinda",
                "Ravenclan's Settlement"      => "Dinda 1",
                    "Hood"                        => "Dinda 1 a",
         ],
         
         // Peregrina #11593
         11593       => [
            "Peregrina"                   => "Peregrina",
                "Eurynomus"                   => "Peregrina 2",
                    "Undine"                      => "Peregrina 2 a",
         ],
         
         // CD-65 76 #11655
         11655       => [
            "CD-65 76"                    => "CD-65 76",
                "Jessica's Folly"             => "CD-65 76 1",
                    "Sheol"                       => "CD-65 76 1 a",
         ],
         
         // Wolf 412 #11856
         11856       => [
            "Wolf 412"                    => "Wolf 412",
                "Haraiva"                     => "Wolf 412 6",
         ],
         
         // Vequess #11882
         11882       => [
            "Vequess"                     => "Vequess",
                "Halki"                       => "Vequess 1",
         ],
         
         // Andceeth #11924
         11924       => [
            "Andceeth"                    => "Andceeth",
                "Capitol"                     => "Andceeth 4",
                    "Mitre"                       => "Andceeth 4 a",
         ],
         
         // Thethys #11926
         11926       => [
            "Thethys"                     => "Thethys",
                "Sanssouci"                   => "Thethys 1",
                    "Dejen"                       => "Thethys 1 a",
         ],
         
         // Svass #11935
         11935       => [
            "Svass"                       => "Svass",
                "Rooney World"                => "Svass 2",
                    "Moroto"                      => "Svass 2 a",
         ],
         
         // Omicron-2 Eridani #11971
         11971       => [
                "Omicron-2 Eridani"           => "Omicron-2 Eridani A",
                "Omicron Eridani B"           => "Omicron-2 Eridani B",
                "Omicron Eridani C"           => "Omicron-2 Eridani C",
                    "Scott's Mine"                => "Omicron-2 Eridani A 1",
                    "Steven's Rock"               => "Omicron-2 Eridani A 2",
         ],
         
         // LTT 2396 #12101
         12101       => [
            "LTT 2396"                    => "LTT 2396",
                "New Utah"                    => "LTT 2396 1",
         ],
         
         // Utgaroar #12128
         12128       => [
            "Utgaroar"                    => "Utgaroar",
                "Hamlet"                      => "Utgaroar 1",
         ],
         
         // EGM 823 #12129
         12129       => [
                "EGM 823"                     => "EGM 823 A",
                "Gliese 60 B"                 => "EGM 823 B",
                "Gliese 60 C"                 => "EGM 823 C",
         ],
         
         // Mat Zemlya #12136
         12136       => [
            "Mat Zemlya"                  => "Mat Zemlya",
                "Sonia's Haven"               => "Mat Zemlya 2",
         ],
         
         // Te Uira #12229
         12229       => [
            "Te Uira"                     => "Te Uira",
                "Porsenna"                    => "Te Uira 5",
                "Labyrinthia"                 => "Te Uira 6",
         ],
         
         // Dijkstra #12253
         12253       => [
            "Dijkstra"                    => "Dijkstra",
                "Frisia"                      => "Dijkstra 4",
                    "Chembra"                     => "Dijkstra 4 a",
         ],
         
         // Sigma Hydri #12269
         12269       => [
            "Sigma Hydri"                 => "Sigma Hydri",
                "Realm"                       => "Sigma Hydri 1",
         ],
         
         // Tau-1 Eridani #12270
         12270       => [
            "Tau-1 Eridani"               => "Tau-1 Eridani",
                "Paul's Folly"                => "Tau-1 Eridani 3",
                    "Pomiu"                       => "Tau-1 Eridani 3 a",
         ],
         
         // Skardee #12348
         12348       => [
            "Skardee"                     => "Skardee",
                "Skardee I"                   => "Skardee 1",
                "Skardee II"                  => "Skardee 2",
                "Skardee III"                 => "Skardee 3",
                "Skardee IV"                  => "Skardee 4",
                "Skardee V"                   => "Skardee 5",
         ],
         
         // Darahk #12358
         12358       => [
            "Darahk"                      => "Darahk",
                "Darahk II"                   => "Darahk 1",
                "Darahk III"                  => "Darahk 2",
                "Darahk IV"                   => "Darahk 3",
                "Darahk V"                    => "Darahk 4",
                "Darahk VI"                   => "Darahk 5",
                "Darahk VII"                  => "Darahk 6",
         ],
         
         // Amy-Charlotte #12372
         12372       => [
            "Amy-Charlotte"               => "Amy-Charlotte",
                "Antissa"                     => "Amy-Charlotte 1",
         ],
         
         // Beldarkri #12398
         12398       => [
            "Beldarkri"                   => "Beldarkri",
                "Kowden"                      => "Beldarkri 1",
                    "Koppen"                      => "Beldarkri 1 a",
         ],
         
         // Achenar #12523
         12523       => [
            "Achenar"                     => "Achenar",
                    "Achenar 4a"                  => "Achenar 4 a",
                    "Yamaha's Grave"              => "Achenar 6 a",
                    "New World"                   => "Achenar 6 b",
                    "Conversion"                  => "Achenar 6 c",
                    "Capitol"                     => "Achenar 6 d",
         ],
         
         // Decima #12652
         12652       => [
            "Decima"                      => "Decima",
                "Fate's Gift"                 => "Decima 1",
                    "Nanda"                       => "Decima 1 a",
         ],
         
         // LHS 417 #12661
         12661       => [
            "LHS 417"                     => "LHS 417",
                "Nannan"                      => "LHS 417 3",
         ],
         
         // Nuakea #12674
         12674       => [
                "Nuakea"                      => "Nuakea A",
                "Gliese 678 B"                => "Nuakea B",
                    "Maweke"                      => "Nuakea A 1",
                        "Korbu"                       => "Nuakea A 1 a",
         ],
         
         // Arcturus #12678
         12678       => [
            "Arcturus"                    => "Arcturus",
                "Major"                       => "Arcturus 2",
                "Richard's Rock"              => "Arcturus 3",
                "Discovery"                   => "Arcturus 4",
                "Arcas"                       => "Arcturus 5",
                    "Masseyworld"                 => "Arcturus 5 a",
                    "Richardson's Mine"           => "Arcturus 6 a",
                    "Jeffries"                    => "Arcturus 6 b",
                    "Oliver's Mine"               => "Arcturus 6 c",
         ],
         
         // Ferez #12751
         12751       => [
                "Ferez"                       => "Ferez A",
                "Gliese 421 B"                => "Ferez B",
                "Gliese 421 C"                => "Ferez C",
         ],
         
         // Dalfur #12752
         12752       => [
            "Dalfur"                      => "Dalfur",
                "Aquila"                      => "Dalfur 7",
         ],
         
         // Wolf 562 #12754
         12754       => [
            "Wolf 562"                    => "Wolf 562",
                "Luke Sears"                  => "Wolf 562 1",
                "Kenneos"                     => "Wolf 562 2",
                "Laila's Memory"              => "Wolf 562 3",
         ],
         
         // 61 Virginis #12861
         12861       => [
            "61 Virginis"                 => "61 Virginis",
                "Rubin's Discovery"           => "61 Virginis 1",
         ],
         
         // Cibola #12869
         12869       => [
            "Cibola"                      => "Cibola",
                "Keytree"                     => "Cibola 1",
                    "Quivira"                     => "Cibola 1 a",
         ],
         
         // Stopover #12894
         12894       => [
                "Stopover"                    => "Stopover A",
                "Gl 783 B"                    => "Stopover B",
                    "Stopover Minor"              => "Stopover A 1",
                    "Stopover Major"              => "Stopover A 2",
         ],
         
         // Wolf 1301 #12955
         12955       => [
            "Wolf 1301"                   => "Wolf 1301",
                "Navia"                       => "Wolf 1301 1",
         ],
         
         // 21 Draco #12975
         12975       => [
                "21 Draco"                    => "21 Draco A",
                "Wo 9584 C"                   => "21 Draco B",
         ],
         
         // Ross 1051 #13169
         13169       => [
            "Ross 1051"                   => "Ross 1051",
                "Brace"                       => "Ross 1051 1",
         ],
         
         // Barnard's Star #13212
         13212       => [
            "Barnard's Star"              => "Barnard's Star",
                "Cooke"                       => "Barnard's Star 3",
                "Birmingham World"            => "Barnard's Star 4",
         ],
         
         // 69 G. Carinae #13272
         13272       => [
                "69 G. Carinae"               => "69 G. Carinae A",
                "Gliese 294 B"                => "69 G. Carinae B",
                "Gliese 294 C"                => "69 G. Carinae C",
         ],
         
         // Bento #13311
         13311       => [
            "Bento"                       => "Bento",
                "GJ 86 b"                     => "Bento 1",
                "Makunouchi"                  => "Bento 2",
                    "Kyaraben"                    => "Bento 2 a",
         ],
         
         // La Rochelle #13352
         13352       => [
            "La Rochelle"                 => "La Rochelle",
                "Seymour Hollow (GJ 832 c)"   => "La Rochelle 1",
         ],
         
         // Chi Eridani #13353
         13353       => [
                "Chi Eridani"                 => "Chi Eridani A",
                "Gl 81 B"                     => "Chi Eridani B",
                    "Shirtuh"                     => "Chi Eridani A 8",
                        "Fansipan"                    => "Chi Eridani A 8 a",
         ],
         
         // Difu #13397
         13397       => [
            "Difu"                        => "Difu",
                "Jontyworld"                  => "Difu 1",
                "Etemmu"                      => "Difu 2",
         ],
         
         // Tomas #13412
         13412       => [
            "Tomas"                       => "Tomas",
                "Doubt"                       => "Tomas 1",
         ],
         
         // Isinor #13541
         13541       => [
            "Isinor"                      => "Isinor",
                "Maodun"                      => "Isinor 1",
         ],
         
         // Exbeur #13593
         13593       => [
            "Exbeur"                      => "Exbeur",
                "Campbellworld"               => "Exbeur 4",
                "Sheehanworld"                => "Exbeur 5",
         ],
         
         // Talitha #13640
         13640       => [
                "Talitha"                     => "Talitha A",
                "Gliese 331 B"                => "Talitha B",
                "Gliese 331 C"                => "Talitha C",
         ],
         
         // Carthage #13765
         13765       => [
            "Carthage"                    => "Carthage",
                "New Carthage"                => "Carthage 1",
                    "Cho"                         => "Carthage 1 a",
                "Belus"                       => "Carthage 2",
                "Archerbas"                   => "Carthage 3",
         ],
         
         // Leesti #13814
         13814       => [
                "Leesti"                      => "Leesti 3",
         ],
         
         // Dakvar #13854
         13854       => [
            "Dakvar"                      => "Dakvar",
                "Ebbe"                        => "Dakvar 1",
                "Naglo"                       => "Dakvar 3",
         ],
         
         // Epsilon Eridani #13892
         13892       => [
            "Epsilon Eridani"             => "Epsilon Eridani",
                "Goldstein's Rock"            => "Epsilon Eridani 1",
                "New California"              => "Epsilon Eridani 2",
                "Major's Mine"                => "Epsilon Eridani 3",
         ],
         
         // Wolf 25 #14054
         14054       => [
            "Wolf 25"                     => "Wolf 25",
                "Hishutash"                   => "Wolf 25 1",
                "Pagon"                       => "Wolf 25 1",
         ],
         
         // Lacaille 9352 #14157
         14157       => [
            "Lacaille 9352"               => "Lacaille 9352",
                "Jennings's Rock"             => "Lacaille 9352 1",
                "Camp Lawrence"               => "Lacaille 9352 2",
         ],
         
         // Indaol #14316
         14316       => [
            "Indaol"                      => "Indaol",
                "Graham's Rock"               => "Indaol 1",
                "Morgan's Hole"               => "Indaol 2",
         ],
         
         // Tethlon #14322
         14322       => [
                "Tethlon"                     => "Tethlon 1",
         ],
         
         // Caelinus #14465
         14465       => [
            "Caelinus"                    => "Caelinus",
                "Caelinus I"                  => "Caelinus 1",
                "Caelinus II"                 => "Caelinus 2",
                "Caelinus III"                => "Caelinus 3",
         ],
         
         // Luyten 205-128 #14544
         14544       => [
            "Luyten 205-128"              => "Luyten 205-128",
                "Kawasakiworld"               => "Luyten 205-128 1",
                "Schmidt's Mine"              => "Luyten 205-128 2",
         ],
         
         // G 239-25 #14552
         14552       => [
            "G 239-25"                    => "G 239-25",
                "Buyukkale"                   => "G 239-25 1",
         ],
         
         // Quiness #14620
         14620       => [
            "Quiness"                     => "Quiness",
                "Quy"                         => "Quiness 1",
         ],
         
         // Thanatos #14711
         14711       => [
            "Thanatos"                    => "Thanatos",
                "The Land"                    => "Thanatos 1",
                    "Kamet"                       => "Thanatos 1 a",
         ],
         
         // Ys #14731
         14731       => [
            "Ys"                          => "Ys",
                "Chroin"                      => "Ys 3",
                "Blob"                        => "Ys 4",
         ],
         
         // CT Tucanae #14797
         14797       => [
            "CT Tucanae"                  => "CT Tucanae",
                "Abona"                       => "CT Tucanae 3",
         ],
         
         // NLTT 9949 #14798
         14798       => [
            "NLTT 9949"                   => "NLTT 9949",
                "Aunios"                      => "NLTT 9949 1",
                    "Moco"                        => "NLTT 9949 1 a",
         ],
         
         // Zeta Tucanae #14942
         14942       => [
            "Zeta Tucanae"                => "Zeta Tucanae",
                "Furths"                      => "Zeta Tucanae 5",
                "Darwyn"                      => "Zeta Tucanae 6",
         ],
         
         // Reddot #14954
         14954       => [
            "Reddot"                      => "Reddot",
                "Motherlode"                  => "Reddot 1",
         ],
         
         // h Draconis #15007
         15007       => [
            "h Draconis"                  => "h Draconis",
                "Gaalai"                      => "h Draconis 1",
                    "Makalu"                      => "h Draconis 1 a",
         ],
         
         // Bohmshohm #15108
         15108       => [
            "Bohmshohm"                   => "Bohmshohm",
                "Epirus"                      => "Bohmshohm 1",
                    "Kaliash"                     => "Bohmshohm 1 a",
         ],
         
         // Manah #15227
         15227       => [
                "Manah"                       => "Manah A",
                "Gl 150.1 B"                  => "Manah B",
                    "Petra"                       => "Manah A 1",
         ],
         
         // Wolfberg #15254
         15254       => [
            "Wolfberg"                    => "Wolfberg",
                "Azille"                      => "Wolfberg 1",
         ],
         
         // Munshin #15277
         15277       => [
            "Munshin"                     => "Munshin",
                "Ocrinox's Opulence"          => "Munshin 5",
                    "Damavand"                    => "Munshin 5 a",
         ],
         
         // Anahit #15286
         15286       => [
            "Anahit"                      => "Anahit",
                "Irkalla"                     => "Anahit 4",
                    "Nergal"                      => "Anahit 4 a",
         ],
         
         // Kaun #15355
         15355       => [
            "Kaun"                        => "Kaun",
                "Kaunen"                      => "Kaun 1",
         ],
         
         // LTT 464 #15442
         15442       => [
            "LTT 464"                     => "LTT 464",
                "El-Mariesh"                  => "LTT 464 1",
         ],
         
         // LTT 149 #15459
         15459       => [
            "LTT 149"                     => "LTT 149",
                "Noon"                        => "LTT 149 2",
                "Stardust"                    => "LTT 149 3",
         ],
         
         // Diso #15480
         15480       => [
            "Diso"                        => "Diso",
                "Birmingham"                  => "Diso 3",
         ],
         
         // LHS 3439 #15566
         15566       => [
            "LHS 3439"                    => "LHS 3439",
                "Mervon"                      => "LHS 3439 2",
         ],
         
         // Beta Hydri #15573
         15573       => [
            "Beta Hydri"                  => "Beta Hydri",
                "Camp Schmidt"                => "Beta Hydri 3",
                "Camp Shepard"                => "Beta Hydri 4",
                "Jordan's Legacy"             => "Beta Hydri 5",
                "Homeland"                    => "Beta Hydri 6",
                "Endl"                        => "Beta Hydri 8",
         ],
         
         // Mu Arae #15990
         15990       => [
            "Mu Arae"                     => "Mu Arae",
                "Dawlings Rest"               => "Mu Arae 1",
         ],
         
         // LP 644-15 #16002
         16002       => [
            "LP 644-15"                   => "LP 644-15",
                "Alasdair's World"            => "LP 644-15 3",
         ],
         
         // Pollux #16019
         16019       => [
            "Pollux"                      => "Pollux",
                    "Cambridge"                   => "Pollux 2 a",
         ],
         
         // Hazel #16101
         16101       => [
            "Hazel"                       => "Hazel",
                "Grove"                       => "Hazel 3",
         ],
         
         // Lausang #16144
         16144       => [
            "Lausang"                     => "Lausang",
                "Rheged"                      => "Lausang 8",
                    "Chappal"                     => "Lausang 8 a",
         ],
         
         // Carnoeck #16227
         16227       => [
            "Carnoeck"                    => "Carnoeck",
                "Macdara Peter Gamboni"       => "Carnoeck 2",
         ],
         
         // Calhuacan #16245
         16245       => [
            "Calhuacan"                   => "Calhuacan",
                "Stapled Peacock Flesh"       => "Calhuacan 1",
                    "Erebus"                      => "Calhuacan 1 a",
         ],
         
         // Laedla #16250
         16250       => [
            "Laedla"                      => "Laedla",
                "Swallowworld"                => "Laedla 1",
                "Ford's Legacy"               => "Laedla 2",
                "Mansfield Colony"            => "Laedla 3",
         ],
         
         // Cardea #16289
         16289       => [
            "Cardea"                      => "Cardea",
                "Raymo's Rendezvous"          => "Cardea 1",
                    "Xaubab"                      => "Cardea 1 a",
         ],
         
         // Capella #16411
         16411       => [
                "Capella"                     => "Capella A",
                "Capella B"                   => "Capella B",
                        "Duval's Grave"               => "Capella A 6 a",
                        "Gold"                        => "Capella A 6 b",
                        "Nobleworld"                  => "Capella A 6 c",
                        "Molotov's Claim"             => "Capella A 6 d",
                        "Lawrence's Grave"            => "Capella A 6 e",
         ],
         
         // Cet #16443
         16443       => [
            "Cet"                         => "Cet",
                "Marie-José Willems"         => "Cet 1",
                "Howard Martyn Wensley"       => "Cet 2",
         ],
         
         // Quator #16460
         16460       => [
            "Quator"                      => "Quator",
                "Camp Hooper"                 => "Quator 1",
                "Massey's World"              => "Quator 2",
         ],
         
         // Brohman #16504
         16504       => [
            "Brohman"                     => "Brohman",
                "Villist"                     => "Brohman 4",
                    "Eden 13913"                  => "Brohman 4 a",
         ],
         
         // Baltah'Sine #16600
         16600       => [
            "Baltah'Sine"                 => "Baltah'Sine",
                "Baltha'Sine"                 => "Baltah'Sine 1",
         ],
         
         // Gurney Slade #16636
         16636       => [
            "Gurney Slade"                => "Gurney Slade",
                "Gurney Slade One"            => "Gurney Slade 1",
                "Gurney Slade Two"            => "Gurney Slade 2",
                "Gurney Slade Three"          => "Gurney Slade 3",
                "Birmingham"                  => "Gurney Slade 4",
                "Gurney Slade Five"           => "Gurney Slade 5",
                "Gurney Slade Six"            => "Gurney Slade 6",
                "Gurney Slade Seven"          => "Gurney Slade 7",
         ],
         
         // Jotun #16680
         16680       => [
            "Jotun"                       => "Jotun",
                "Faner"                       => "Jotun 1",
         ],
         
         // Breamen #16710
         16710       => [
            "Breamen"                     => "Breamen",
                "Chia"                        => "Breamen 1",
                "Andromeda9"                  => "Breamen 2",
         ],
         
         // BU 741 #16751
         16751       => [
                "BU 741"                      => "BU 741 A",
                "Gliese 120.1 B"              => "BU 741 B",
                "Gliese 120.1 C"              => "BU 741 C",
                    "Darmen"                      => "BU 741 A 1",
         ],
         
         // LHS 115 #16812
         16812       => [
                "LHS 115"                     => "LHS 115 A",
                "Gliese 22 B"                 => "LHS 115 B",
                "Gliese 22 C"                 => "LHS 115 C",
         ],
         
         // HIP 112441 #16825
         16825       => [
            "HIP 112441"                  => "HIP 112441",
                "Scheffey's Solace"           => "HIP 112441 1",
         ],
         
         // Wolf 1515 #16986
         16986       => [
            "Wolf 1515"                   => "Wolf 1515",
                "Gralmond"                    => "Wolf 1515 1",
         ],
         
         // CD-79 950 #16989
         16989       => [
            "CD-79 950"                   => "CD-79 950",
                "Hellvellyn"                  => "CD-79 950 2",
                    "Patterdale"                  => "CD-79 950 2 a",
         ],
         
         // LHS 449 #17034
         17034       => [
            "LHS 449"                     => "LHS 449",
                "Charles's Mine"              => "LHS 449 1",
                "Haynes's Mine"               => "LHS 449 2",
                "Gold"                        => "LHS 449 3",
                "Simpson's Mine"              => "LHS 449 4",
         ],
         
         // LTT 911 #17079
         17079       => [
            "LTT 911"                     => "LTT 911",
                "Jokester's Planet"           => "LTT 911 1",
         ],
         
         // Beta Catonis #17153
         17153       => [
            "Beta Catonis"                => "Beta Catonis",
                "Dalager"                     => "Beta Catonis 5",
         ],
         
         // Miquich #17371
         17371       => [
            "Miquich"                     => "Miquich",
                "New California"              => "Miquich 1",
                    "Pulag"                       => "Miquich 1 a",
         ],
         
         // LHS 3006 #17375
         17375       => [
            "LHS 3006"                    => "LHS 3006",
                "Vulcan"                      => "LHS 3006 1",
         ],
         
         // B'Titus #17406
         17406       => [
            "B'Titus"                     => "B'Titus",
                "Urus"                        => "B'Titus 2",
         ],
         
         // Tun #17430
         17430       => [
                "Tun"                         => "Tun A",
                "Ton"                         => "Tun B",
                    "TunTon"                      => "Tun A 1",
         ],
         
         // LTT 198 #17581
         17581       => [
            "LTT 198"                     => "LTT 198",
                "Dini"                        => "LTT 198 3",
                    "Skiddaw"                     => "LTT 198 3 a",
         ],
         
         // Tengri #17615
         17615       => [
            "Tengri"                      => "Tengri",
                "Keevals Retreat"             => "Tengri 1",
                "Gokturk"                     => "Tengri 2",
         ],
         
         // Taevaisa #17625
         17625       => [
            "Taevaisa"                    => "Taevaisa",
                "Roque"                       => "Taevaisa 1",
                "Louannchar"                  => "Taevaisa 4",
         ],
         
         // van Maanen's Star #17834
         17834       => [
            "van Maanen's Star"           => "van Maanen's Star",
                "Major"                       => "van Maanen's Star 1",
         ],
         
         // LTT 2771 #17857
         17857       => [
            "LTT 2771"                    => "LTT 2771",
                "Tarlak"                      => "LTT 2771 1",
         ],
         
         // Persephone #17890
         17890       => [
            "Persephone"                  => "Persephone",
                "Kore"                        => "Persephone 1",
         ],
         
         // Zaonce #17892
         17892       => [
            "Zaonce"                      => "Zaonce",
                "Industry"                    => "Zaonce 3",
         ],
         
         // Ursitoare #17977
         17977       => [
            "Ursitoare"                   => "Ursitoare",
                "Elizabeth Young's World"     => "Ursitoare 2",
                "Beenkeragh"                  => "Ursitoare 3",
         ],
         
         // Arexack #18058
         18058       => [
            "Arexack"                     => "Arexack",
                "Tracy's World"               => "Arexack 1",
                "Peter's Eden"                => "Arexack 2",
                "Maxwell Hollow"              => "Arexack 3",
         ],
         
         // Fomalhaut #18062
         18062       => [
            "Fomalhaut"                   => "Fomalhaut",
                "Lawrence's Hole"             => "Fomalhaut 1",
                "London's Legacy"             => "Fomalhaut 2",
                "Biggs's Hole"                => "Fomalhaut 3",
                "Conversion"                  => "Fomalhaut 4",
                    "Strauss"                     => "Fomalhaut 5 a",
         ],
         
         // Lalande 6320 #18108
         18108       => [
            "Lalande 6320"                => "Lalande 6320",
                "Slieau Whallian"             => "Lalande 6320 1",
                    "Elkins"                      => "Lalande 6320 1 a",
         ],
         
         // Suddene #18210
         18210       => [
            "Suddene"                     => "Suddene",
                "New Rutland"                 => "Suddene 1",
                "Horn"                        => "Suddene 2",
         ],
         
         // Exioce #18297
         18297       => [
            "Exioce"                      => "Exioce",
                "O'Rourke Colony"             => "Exioce 1",
                    "Experiment"                  => "Exioce 1 a",
                "Democracy"                   => "Exioce 2",
                    "Boston's Wreck"              => "Exioce 2 a",
         ],
         
         // Aztlan #18422
         18422       => [
            "Aztlan"                      => "Aztlan",
                "Nexus737"                    => "Aztlan 1",
         ],
         
         // BD+26 2184 #18433
         18433       => [
            "BD+26 2184"                  => "BD+26 2184",
                "Kathy McBrayer"              => "BD+26 2184 5",
         ],
         
         // LP 64-194 #18466
         18466       => [
            "LP 64-194"                   => "LP 64-194",
                "Gargarii"                    => "LP 64-194 1",
         ],
         
         // Lakota #18489
         18489       => [
            "Lakota"                      => "Lakota",
                "Teton"                       => "Lakota 1",
                    "Pada"                        => "Lakota 1 a",
         ],
         
         // Rho Cancri #18497
         18497       => [
                "Rho Cancri"                  => "Rho Cancri A",
                "55 Rho-1 Cancri B"           => "Rho Cancri B",
                    "Rho Cancri I (55 Cnc e)"     => "Rho Cancri A 1",
                    "Rho Cancri II (55 Cnc b)"    => "Rho Cancri A 2",
                    "Rho Cancri III (55 Cnc c)"   => "Rho Cancri A 3",
                    "Rho Cancri IV (55 Cnc f)"    => "Rho Cancri A 4",
                    "Rho Cancri V (55 Cnc d)"     => "Rho Cancri A 5",
                    "Rho Cancri VI"               => "Rho Cancri A 6",
         ],
         
         // Orrere #18506
         18506       => [
            "Orrere"                      => "Orrere",
                "Grey"                        => "Orrere 1",
         ],
         
         // Apam Napat #18629
         18629       => [
            "Apam Napat"                  => "Apam Napat",
                "Grahame"                     => "Apam Napat 5",
         ],
         
         // Bast #18816
         18816       => [
            "Bast"                        => "Bast",
                "THFC-Est1882"                => "Bast 1",
         ],
         
         // Hors #18968
         18968       => [
            "Hors"                        => "Hors",
                "Colon"                       => "Hors 6",
         ],
         
         // Zephyrus #19003
         19003       => [
            "Zephyrus"                    => "Zephyrus",
                "Violet World"                => "Zephyrus 2",
         ],
         
         // Mjolnir #19022
         19022       => [
            "Mjolnir"                     => "Mjolnir",
                "Sindri"                      => "Mjolnir 1",
                    "Brokkr"                      => "Mjolnir 1 a",
         ],
         
         // Reorte #19328
         19328       => [
            "Reorte"                      => "Reorte",
                "Home"                        => "Reorte 4",
                    "Camp Nakamichi"              => "Reorte 4 a",
         ],
         
         // Myrbat #19450
         19450       => [
            "Myrbat"                      => "Myrbat",
                "Babycures"                   => "Myrbat 1",
                "Munros"                      => "Myrbat 2",
         ],
         
         // LFT 992 #19541
         19541       => [
                "LFT 992"                     => "LFT 992 A",
                "Gliese 507 B"                => "LFT 992 B",
                    "Uwei"                        => "LFT 992 A 1",
         ],
         
         // Cocijo #19568
         19568       => [
            "Cocijo"                      => "Cocijo",
                "fragLANd"                    => "Cocijo 1",
                    "Moel Hebog"                  => "Cocijo 1 a",
         ],
         
         // Bevan's Hope #19617
         19617       => [
            "Bevan's Hope"                => "Bevan's Hope",
                "Ithica"                      => "Bevan's Hope 1",
         ],
         
         // CM Draconis #19700
         19700       => [
                "CM Draconis"                 => "CM Draconis A",
                "CM Draconis Aa"              => "CM Draconis B",
                "Gliese 630.1 B"              => "CM Draconis C",
         ],
         
         // Miphifa #19743
         19743       => [
            "Miphifa"                     => "Miphifa",
                "Varangia"                    => "Miphifa 1",
         ],
         
         // Codorain #19762
         19762       => [
            "Codorain"                    => "Codorain",
                "Codorain I"                  => "Codorain 1",
                "Codorain II"                 => "Codorain 2",
                "Codorain III"                => "Codorain 6",
                    "Farr's Landing"              => "Codorain 6 a",
         ],
         
         // Euryale #19871
         19871       => [
            "Euryale"                     => "Euryale",
                "Wen"                         => "Euryale 3",
                "EG Prime"                    => "Euryale 4",
         ],
         
         // Gateway #19886
         19886       => [
            "Gateway"                     => "Gateway",
                "Hope"                        => "Gateway 1",
                    "Saunder's Rock"              => "Gateway 1 a",
                    "de Gaulworld"                => "Gateway 2 a",
                    "Wernerworld"                 => "Gateway 2 b",
                    "Machester's Claim"           => "Gateway 3 a",
                    "Graham's Claim"              => "Gateway 4 a",
                    "Gupta's Rock"                => "Gateway 4 b",
         ],
         
         // Pethes #19888
         19888       => [
            "Pethes"                      => "Pethes",
                "Van Lang"                    => "Pethes 1",
         ],
         
         // Ross 788 #19936
         19936       => [
            "Ross 788"                    => "Ross 788",
                "Galava"                      => "Ross 788 1",
                    "Ambleside"                   => "Ross 788 1 a",
         ],
         
         // CD-69 5 #19964
         19964       => [
            "CD-69 5"                     => "CD-69 5",
                "Clements Keep"               => "CD-69 5 5",
                "Ardrain"                     => "CD-69 5 6",
         ],
         
         // Sirius #19974
         19974       => [
                "Sirius"                      => "Sirius A",
                "Sirius B"                    => "Sirius B",
                    "Waypoint"                    => "Sirius A 1",
                    "Lucifer"                     => "Sirius B 1",
         ],
         
         // Epsilon Indi #20029
         20029       => [
                "Epsilon Indi"                => "Epsilon Indi A",
                "Epsilon Indi Ba"             => "Epsilon Indi B",
                    "Edmond's Rock"               => "Epsilon Indi A 1",
                    "Lee"                         => "Epsilon Indi A 2",
                    "New Africa"                  => "Epsilon Indi A 3",
                        "Mitterand Hollow"            => "Epsilon Indi A 3 a",
                    "Alisonworld"                 => "Epsilon Indi A 4",
         ],
         
         // LHS 2887 #20065
         20065       => [
            "LHS 2887"                    => "LHS 2887",
                "Tambo"                       => "LHS 2887 3",
         ],
         
         // Aditi #20171
         20171       => [
            "Aditi"                       => "Aditi",
                "Peylow"                      => "Aditi 6",
                    "Morrow Peek"                 => "Aditi 6 a",
         ],
         
         // Canopus #20522
         20522       => [
            "Canopus"                     => "Canopus",
                "Maxwell's World"             => "Canopus 1",
                "Rance's Wreck"               => "Canopus 2",
         ],
         
         // Laka #21919
         21919       => [
            "Laka"                        => "Laka",
                "Kai-kapu"                    => "Laka 4",
                    "Puncak"                      => "Laka 4 a",
         ],
         
         // LTT 9846 #22015
         22015       => [
            "LTT 9846"                    => "LTT 9846",
                "Magna"                       => "LTT 9846 1",
         ],
         
         // m Centauri #22034
         22034       => [
                "m Centauri"                  => "m Centauri A",
                "M Centauri"                  => "m Centauri B",
         ],
         
         // Atanua #23593
         23593       => [
                "Atanua"                      => "Atanua A",
                "Gliese 153 B"                => "Atanua B",
                "Gliese 153 C"                => "Atanua C",
         ],
         
         // BD+22 4939 #23613
         23613       => [
            "BD+22 4939"                  => "BD+22 4939",
                "Badfort"                     => "BD+22 4939 1",
         ],
         
         // Castor #23672
         23672       => [
                "Castor"                      => "Castor A",
                "Castor Ab"                   => "Castor B",
                "Castor B"                    => "Castor C",
                "Castor Bb"                   => "Castor D",
                "Castor C"                    => "Castor E",
                "Castor Cb"                   => "Castor F",
         ],
         
         // Cuspoor #24458
         24458       => [
                "Cuspoor"                     => "Cuspoor A",
                "Gliese 667 B"                => "Cuspoor B",
                "Gliese 667 C"                => "Cuspoor C",
         ],
         
         // LHS 1409 #25103
         25103       => [
                "LHS 1409"                    => "LHS 1409 A",
                "Gliese 100 B"                => "LHS 1409 B",
                "Gliese 100 C"                => "LHS 1409 C",
         ],
         
         // Exphiay #26056
         26056       => [
            "Exphiay"                     => "Exphiay",
                "Discovery"                   => "Exphiay 6",
                    "Rakhiot"                     => "Exphiay 6 a",
         ],
         
         // 17 Draconis #26712
         26712       => [
                "17 Draconis"                 => "17 Draconis A",
                "17 Draconis B"               => "17 Draconis B",
                "16 Draconis"                 => "17 Draconis C",
                "16 Draconis B"               => "17 Draconis D",
                    "Limbo"                       => "17 Draconis A 1",
                    "Eo"                          => "17 Draconis A 2",
                        "Shepherd"                    => "17 Draconis A 2 a",
                        "Paradiso"                    => "17 Draconis A 2 b",
                    "Icemir"                      => "17 Draconis A 3",
         ],
         
         // Quince #26772
         26772       => [
            "Quince"                      => "Quince",
                "Kosmala Rewards"             => "Quince 1",
                "New America"                 => "Quince 5",
         ],
         
         // Set #26934
         26934       => [
                "Set"                         => "Set A",
                "Shango"                      => "Set B",
                "Oya"                         => "Set C",
         ],
         
         // BC Arietis #28078
         28078       => [
                "BC Arietis"                  => "BC Arietis A",
                "Gl 113 C"                    => "BC Arietis B",
         ],
         
         // LP 356-14 #28477
         28477       => [
                "LP 356-14"                   => "LP 356-14 A",
                "Gliese 140 B"                => "LP 356-14 B",
                "Gliese 140 C"                => "LP 356-14 C",
         ],
         
         // Fehu #31416
         31416       => [
            "Fehu"                        => "Fehu",
                "Likopo"                      => "Fehu 3",
                    "Doolhof"                     => "Fehu 3 a",
         ],
         
         // LP 298-42 #39607
         39607       => [
            "LP 298-42"                   => "LP 298-42",
                "Coates Paradise"             => "LP 298-42 1",
         ],
         
         // 127 G. Canis Majoris #180293
         180293      => [
                "127 G. Canis Majoris"        => "127 G. Canis Majoris A",
                "127 G. Canis Major C"        => "127 G. Canis Majoris B",
         ],
         
         // BD-01 2075 #229077
         229077      => [
            "BD-01 2075"                  => "BD-01 2075",
                    "KT-Lin"                      => "BD-01 2075 1 a",
         ],
         
         // Synuefe MU-V c16-0 #311269
         311269      => [
                "Synuefe MU-V c16-0 A"        => "Synuefe MU-V c16-0 A",
                "Synuefe MU-V c16-0 B"        => "Synuefe MU-V c16-0 B",
                    "Rich"                        => "Synuefe MU-V c16-0 A 1",
                    "Aust"                        => "Synuefe MU-V c16-0 A 2",
         ],
         
         // ADS 4229 ABC #414547
         414547      => [
                "ADS 4229 ABC"                => "ADS 4229 ABC A",
                "26 Aurigae C"                => "ADS 4229 ABC B",
         ],
         
         // CCDM J14234+0827A #467900
         467900      => [
                "CCDM J14234+0827A"           => "CCDM J14234+0827A A",
                "BD+09 2882B"                 => "CCDM J14234+0827A B",
                "BD+09 2882C"                 => "CCDM J14234+0827A C",
         ],
         
         // HIP 44291 #1454017
         1454017     => [
            "HIP 44291"                   => "HIP 44291",
                "Karl-Heinz Lechtermann"      => "HIP 44291 1",
         ],
         
         // BD-08 1218 #2407833
         2407833     => [
            "BD-08 1218"                  => "BD-08 1218",
                    "Wolf's Claim"                => "BD-08 1218 2 a",
         ],
         
         // Dabih Major #2719375
         2719375     => [
                "Dabih Major"                 => "Dabih Major A",
                "Beta Capricorni Ab"          => "Dabih Major B",
                "Beta Capricorni B"           => "Dabih Major C",
                "Beta Capricorni C"           => "Dabih Major D",
         ],
         
         // HIP 1254 #3001251
         3001251     => [
            "HIP 1254"                    => "HIP 1254",
                "Laika"                       => "HIP 1254 1",
         ],
         
         // Gamma Arae #5985366
         5985366     => [
                "Gamma Arae"                  => "Gamma Arae A",
                "CPD-56 8225B"                => "Gamma Arae B",
                "CPD-56 8225C"                => "Gamma Arae C",
         ],
         
         // ADS 9338 AC #6037137
         6037137     => [
                "ADS 9338 AC"                 => "ADS 9338 AC A",
                "BD+17 2768 C"                => "ADS 9338 AC B",
                "29 Bootis"                   => "ADS 9338 AC C",
                "29 Bootis B"                 => "ADS 9338 AC D",
         ],
         
         // 5 Aquilae #6946425
         6946425     => [
                "5 Aquilae"                   => "5 Aquilae A",
                "5 Aquilae Ab"                => "5 Aquilae B",
                "5 Aquilae B"                 => "5 Aquilae C",
         ],
         
         // 14 Aurigae #8180672
         8180672     => [
                "14 Aurigae"                  => "14 Aurigae A",
                "14 Aurigae C"                => "14 Aurigae B",
         ],
         
         // HIP 3574 #9866976
         9866976     => [
            "HIP 3574"                    => "HIP 3574",
                "HD 4313 b"                   => "HIP 3574 1",
         ],
         
         // LHS 188 #10029811
         10029811    => [
            "LHS 188"                     => "LHS 188",
                "Aiden Collar"                => "LHS 188 1",
                "Teayum"                      => "LHS 188 2",
         ],
         
         // Kepler-20 #10042398
         10042398    => [
            "Kepler-20"                   => "Kepler-20",
                "PER - G8XBE"                 => "Kepler-20 1",
                "Maxine's World"              => "Kepler-20 3",
         ],
         
         // MOA-2007-BLG-400L #10226428
         10226428    => [
            "MOA-2007-BLG-400L"           => "MOA-2007-BLG-400L",
                "MOA-2007-BLG-400L b"         => "MOA-2007-BLG-400L 1",
         ],
         
    ];
}