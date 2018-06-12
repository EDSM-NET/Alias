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
    static protected $alias     = [
         // Chi Herculis #3
         3           => [
            "Chi Herculis"                    => "Chi Herculis",
                "Apasam"                          => "Chi Herculis 1",
                    "Kumay"                           => "Chi Herculis 1 a",
         ],
         
         // Ovid #4
         4           => [
                "Ovid"                            => "Ovid A",
                "Gliese 611 B"                    => "Ovid B",
                    "Kenash"                          => "Ovid A 5",
                        "Paseguru"                        => "Ovid A 5 a",
         ],
         
         // Dahan #5
         5           => [
            "Dahan"                           => "Dahan",
                "Hathor"                          => "Dahan 2",
                    "Coltan"                          => "Dahan 2 a",
                    "Zhang's Claim"                   => "Dahan 2 b",
                    "Smithy's Claim"                  => "Dahan 2 c",
                    "Jonty's Claim"                   => "Dahan 2 d",
                    "Wanderer"                        => "Dahan 2 e",
                    "Dahan 3a"                        => "Dahan 3 a",
                    "Dahan 3b"                        => "Dahan 3 b",
                    "Dahan 3c"                        => "Dahan 3 c",
         ],
         
         // Wolf 359 #7
         7           => [
            "Wolf 359"                        => "Wolf 359",
                "Campbell's Claim"                => "Wolf 359 1",
                "Camp Donalds"                    => "Wolf 359 2",
         ],
         
         // BD+47 2112 #11
         11          => [
                "BD+47 2112"                      => "BD+47 2112 A",
                "Gliese 537 B"                    => "BD+47 2112 B",
                    "Derwent"                         => "BD+47 2112 A 1",
         ],
         
         // Nang Ta-khian #12
         12          => [
            "Nang Ta-khian"                   => "Nang Ta-khian",
                "Kopet Dag"                       => "Nang Ta-khian 1",
                    "Nisa"                            => "Nang Ta-khian 1 a",
         ],
         
         // Bolg #13
         13          => [
            "Bolg"                            => "Bolg",
                "Subartu"                         => "Bolg 1",
                "Shubar"                          => "Bolg 2",
         ],
         
         // Asellus Primus #14
         14          => [
                "Asellus Primus"                  => "Asellus Primus A",
                "Asellus Primus B"                => "Asellus Primus B",
                    "Asellus 1"                       => "Asellus Primus A 1",
                    "Asellus 2"                       => "Asellus Primus A 2",
                    "Asellus 3"                       => "Asellus Primus A 3",
                        "Asellus 3a"                      => "Asellus Primus A 3 a",
                        "Asellus 3b"                      => "Asellus Primus A 3 b",
                        "Asellus 3c"                      => "Asellus Primus A 3 c",
                    "Asellus 4"                       => "Asellus Primus A 4",
         ],
         
         // Ross 1057 #15
         15          => [
            "Ross 1057"                       => "Ross 1057",
                "Munam-ri"                        => "Ross 1057 1",
                    "Else"                            => "Ross 1057 1 a",
         ],
         
         // LHS 3262 #16
         16          => [
            "LHS 3262"                        => "LHS 3262",
                "Ashanti"                         => "LHS 3262 1",
                    "Akan"                            => "LHS 3262 1 a",
         ],
         
         // LP 98-132 #17
         17          => [
            "LP 98-132"                       => "LP 98-132",
                "Anahit"                          => "LP 98-132 1",
         ],
         
         // Lave #18
         18          => [
            "Lave"                            => "Lave",
                "Planet Lave"                     => "Lave 1",
                            "Castellan Belt Cluster 1"        => "Lave A Belt Cluster 1",
                            "Castellan Belt Cluster 2"        => "Lave A Belt Cluster 2",
                            "Castellan Belt Cluster 3"        => "Lave A Belt Cluster 3",
                            "Castellan Belt Cluster 4"        => "Lave A Belt Cluster 4",
                            "Castellan Belt Cluster 5"        => "Lave A Belt Cluster 5",
         ],
         
         // LFT 880 #19
         19          => [
            "LFT 880"                         => "LFT 880",
                "Chayhuac"                        => "LFT 880 1",
         ],
         
         // Morgor #20
         20          => [
            "Morgor"                          => "Morgor",
                "Cruachan"                        => "Morgor 2",
         ],
         
         // Fujin #21
         21          => [
            "Fujin"                           => "Fujin",
                "Futen"                           => "Fujin 1",
         ],
         
         // Magec #22
         22          => [
            "Magec"                           => "Magec",
                "Cishan"                          => "Magec 3",
                    "Ankogel"                         => "Magec 3 a",
                "Guayota"                         => "Magec 6",
                    "Guayota a"                       => "Magec 6 a",
                    "Guayota b"                       => "Magec 6 b",
                "Teide"                           => "Magec 7",
                    "Teide a"                         => "Magec 7 a",
                    "Teide b"                         => "Magec 7 b",
                    "Luo"                             => "Magec 7 c",
                    "Teide d"                         => "Magec 7 d",
                "Achamán"                        => "Magec 8",
                    "Achamán a"                      => "Magec 8 a",
                "Guanche"                         => "Magec 9",
         ],
         
         // Tilian #23
         23          => [
            "Tilian"                          => "Tilian",
                "Keita"                           => "Tilian 1",
                    "Bello"                           => "Tilian 1 a",
         ],
         
         // Artume #24
         24          => [
            "Artume"                          => "Artume",
                "Lusardi"                         => "Artume 4",
                "Artimi"                          => "Artume 6",
         ],
         
         // Aulin #26
         26          => [
            "Aulin"                           => "Aulin",
                "Nirvana"                         => "Aulin 2",
         ],
         
         // Sol #27
         27          => [
            "Sol"                             => "Sol",
                "Mercury"                         => "Sol 1",
                "Venus"                           => "Sol 2",
                "Earth"                           => "Sol 3",
                    "Moon"                            => "Sol 3 a",
                "Mars"                            => "Sol 4",
                "Jupiter"                         => "Sol 5",
                    "Io"                              => "Sol 5 a",
                    "Europa"                          => "Sol 5 b",
                    "Ganymede"                        => "Sol 5 c",
                    "Callisto"                        => "Sol 5 d",
                "Saturn"                          => "Sol 6",
                    "Enceladus"                       => "Sol 6 a",
                    "Tethys"                          => "Sol 6 b",
                    "Dione"                           => "Sol 6 c",
                    "Rhea"                            => "Sol 6 d",
                    "Titan"                           => "Sol 6 e",
                    "Iapetus"                         => "Sol 6 f",
                "Uranus"                          => "Sol 7",
                    "Ariel"                           => "Sol 7 a",
                    "Umbriel"                         => "Sol 7 b",
                    "Titania"                         => "Sol 7 c",
                    "Oberon"                          => "Sol 7 d",
                "Neptune"                         => "Sol 8",
                    "Triton"                          => "Sol 8 a",
                "Pluto"                           => "Sol 9",
                "Charon"                          => "Sol 10",
                "90482 Orcus"                     => "Sol 11",
                    "Vanth"                           => "Sol 11 a",
                "(307261) 2002 MS4"               => "Sol 12",
                "Salacia"                         => "Sol 13",
                    "Actaea"                          => "Sol 13 a",
                "Haumea"                          => "Sol 14",
                    "Hi'iaka"                         => "Sol 14 a",
                "Quaoar"                          => "Sol 15",
                "Makemake"                        => "Sol 16",
                "(225088) 2007 OR10"              => "Sol 17",
                "Eris"                            => "Sol 18",
                "Sedna"                           => "Sol 19",
                "Persephone"                      => "Sol 20",
         ],
         
         // Pi-fang #28
         28          => [
            "Pi-fang"                         => "Pi-fang",
                "Major's Wreck"                   => "Pi-fang 1",
                "Cooper Reward"                   => "Pi-fang 2",
         ],
         
         // i Bootis #29
         29          => [
                "i Bootis"                        => "i Bootis A",
                "i Bootis B"                      => "i Bootis B",
                "i Bootis C"                      => "i Bootis C",
                "Maher"                           => "i Bootis D",
                    "Chango"                          => "i Bootis A 1",
                    "Maher Prime"                     => "i Bootis D 1",
                        "Dustball"                        => "i Bootis D 1 a",
         ],
         
         // Keries #30
         30          => [
            "Keries"                          => "Keries",
                "Cisse"                           => "Keries 1",
         ],
         
         // Opala #31
         31          => [
                "Opala"                           => "Opala A",
                "LHS 403"                         => "Opala B",
                    "Baker"                           => "Opala A 4",
                        "Trooper"                         => "Opala A 4 a",
         ],
         
         // Acihaut #32
         32          => [
            "Acihaut"                         => "Acihaut",
                "Ayer"                            => "Acihaut 1",
                    "Jubach"                          => "Acihaut 1 a",
         ],
         
         // Wyrd #33
         33          => [
                "Wyrd"                            => "Wyrd A",
                "Gl 508 B"                        => "Wyrd B",
                    "Way"                             => "Wyrd A 3",
                    "Lister"                          => "Wyrd A 4",
                        "Verse"                           => "Wyrd A 4 a",
         ],
         
         // Eranin #34
         34          => [
            "Eranin"                          => "Eranin",
                "Azeban"                          => "Eranin 1",
         ],
         
         // Rakapila #36
         36          => [
            "Rakapila"                        => "Rakapila",
                "Kendal"                          => "Rakapila 1",
         ],
         
         // Theta Cygni #37
         37          => [
                "Theta Cygni"                     => "Theta Cygni A",
                "Gl 765 B"                        => "Theta Cygni B",
         ],
         
         // StKM 1-1676 #50
         50          => [
                "StKM 1-1676"                     => "StKM 1-1676 A",
                "NN 4094 B"                       => "StKM 1-1676 B",
         ],
         
         // Zeta Herculis #55
         55          => [
                "Zeta Herculis"                   => "Zeta Herculis A",
                "Gl 635 B"                        => "Zeta Herculis B",
         ],
         
         // 10 Ursae Majoris #60
         60          => [
                "10 Ursae Majoris"                => "10 Ursae Majoris A",
                "Gliese 332 B"                    => "10 Ursae Majoris B",
         ],
         
         // LFT 1492 #345
         345         => [
                "LFT 1492"                        => "LFT 1492 A",
                "Gliese 767 B"                    => "LFT 1492 B",
         ],
         
         // HR 2883 #367
         367         => [
                "HR 2883"                         => "HR 2883 A",
                "NN 3450 B"                       => "HR 2883 B",
         ],
         
         // Anapos #387
         387         => [
            "Anapos"                          => "Anapos",
                "Jackson"                         => "Anapos 1",
         ],
         
         // BD-18 394 #396
         396         => [
                "BD-18 394"                       => "BD-18 394 A",
                "Gl 91.2 B"                       => "BD-18 394 B",
         ],
         
         // Ross 364 #398
         398         => [
                "Ross 364"                        => "Ross 364 A",
                "Ross 365"                        => "Ross 364 B",
         ],
         
         // Hofada #400
         400         => [
            "Hofada"                          => "Hofada",
                "Ausis"                           => "Hofada 2",
         ],
         
         // G 190-28 #401
         401         => [
                "G 190-28"                        => "G 190-28 A",
                "NN 4338 B"                       => "G 190-28 B",
         ],
         
         // Meropis #422
         422         => [
            "Meropis"                         => "Meropis",
                "Anna Ceri"                       => "Meropis 4",
                "Chlos"                           => "Meropis 5",
         ],
         
         // Gippsworld #433
         433         => [
                "Gippsworld"                      => "Gippsworld 1",
         ],
         
         // Howard #446
         446         => [
            "Howard"                          => "Howard",
                "Rogatino"                        => "Howard 2",
         ],
         
         // LHS 371 #447
         447         => [
                "LHS 371"                         => "LHS 371 A",
                "Gliese 548 B"                    => "LHS 371 B",
         ],
         
         // Ross 1015 #519
         519         => [
            "Ross 1015"                       => "Ross 1015",
                "Der"                             => "Ross 1015 1",
         ],
         
         // DT Virginis #566
         566         => [
                "DT Virginis"                     => "DT Virginis A",
                "Ross 458"                        => "DT Virginis B",
         ],
         
         // Pi Mensae #598
         598         => [
            "Pi Mensae"                       => "Pi Mensae",
                "Trueman's Paradise"              => "Pi Mensae 3",
         ],
         
         // Lanaest #632
         632         => [
                "Lanaest"                         => "Lanaest A",
                "Lanaest B"                       => "Lanaest B",
                    "Lanaest I"                       => "Lanaest B 1",
                    "Lanaest II"                      => "Lanaest B 2",
                    "Lanaest III"                     => "Lanaest B 3",
         ],
         
         // Sango #643
         643         => [
                "Sango"                           => "Sango A",
                "Gliese 586 B"                    => "Sango B",
                "Gliese 586 C"                    => "Sango C",
         ],
         
         // LHS 1393 #649
         649         => [
                "LHS 1393"                        => "LHS 1393 A",
                "GJ 1047 B"                       => "LHS 1393 B",
                "GJ 1047 C"                       => "LHS 1393 C",
         ],
         
         // CD-77 45 #677
         677         => [
            "CD-77 45"                        => "CD-77 45",
                "Irrelon Prime"                   => "CD-77 45 3",
         ],
         
         // CD-64 139 #681
         681         => [
            "CD-64 139"                       => "CD-64 139",
                "Beorg"                           => "CD-64 139 1",
         ],
         
         // 82 Eridani #694
         694         => [
            "82 Eridani"                      => "82 Eridani",
                "Rhatigan"                        => "82 Eridani 1",
                "Ifreds Harbour"                  => "82 Eridani 2",
                "Teekay 100705"                   => "82 Eridani 3",
         ],
         
         // BD+24 543 #738
         738         => [
            "BD+24 543"                       => "BD+24 543",
                "Pharos"                          => "BD+24 543 1",
         ],
         
         // Alpha Caeli #743
         743         => [
                "Alpha Caeli"                     => "Alpha Caeli A",
                "Gl 174.1 B"                      => "Alpha Caeli B",
         ],
         
         // LTT 700 #797
         797         => [
                "LTT 700"                         => "LTT 700 A",
                "Gl 55.1 B"                       => "LTT 700 B",
         ],
         
         // Mizar #817
         817         => [
                "Mizar"                           => "Mizar A",
                "Mizar Ab"                        => "Mizar B",
                "Mizar B"                         => "Mizar C",
                "Mizar Bb"                        => "Mizar D",
         ],
         
         // Yinjian #842
         842         => [
            "Yinjian"                         => "Yinjian",
                "The Hoonage Dominion"            => "Yinjian 1",
                    "Markham"                         => "Yinjian 1 a",
         ],
         
         // Xi-2 Capricorni #878
         878         => [
                "Xi-2 Capricorni"                 => "Xi-2 Capricorni A",
                "Xi-2 Capricorni B"               => "Xi-2 Capricorni B",
         ],
         
         // M Hydrae #955
         955         => [
                "M Hydrae"                        => "M Hydrae A",
                "Gl 561.1 B"                      => "M Hydrae B",
         ],
         
         // V1090 Herculis #1029
         1029        => [
                "V1090 Herculis"                  => "V1090 Herculis A",
                "Gliese 649.1 B"                  => "V1090 Herculis B",
                "Gliese 649.1 C"                  => "V1090 Herculis C",
         ],
         
         // Aerial #1055
         1055        => [
            "Aerial"                          => "Aerial",
                "Shangjun"                        => "Aerial 1",
                    "Tyree"                           => "Aerial 1 a",
         ],
         
         // Meliae #1062
         1062        => [
            "Meliae"                          => "Meliae",
                "New Los Angeles"                 => "Meliae 1",
         ],
         
         // LP 167-64 #1081
         1081        => [
                "LP 167-64"                       => "LP 167-64 A",
                "NN 3611 B"                       => "LP 167-64 B",
         ],
         
         // Kivah #1141
         1141        => [
                "Kivah"                           => "Kivah A",
                "Gl 368.1 B"                      => "Kivah B",
         ],
         
         // Miola #1165
         1165        => [
                "Miola"                           => "Miola A",
                "Miola B"                         => "Miola B",
                    "Minta"                           => "Miola A 1",
         ],
         
         // Runo #1253
         1253        => [
            "Runo"                            => "Runo",
                "EAL 1141"                        => "Runo 1",
         ],
         
         // Tau Ceti #1293
         1293        => [
            "Tau Ceti"                        => "Tau Ceti",
                "Saunders's Claim"                => "Tau Ceti 1",
                "Taylor Colony"                   => "Tau Ceti 2",
                "Bell's Wreck"                    => "Tau Ceti 3",
         ],
         
         // Solati #1406
         1406        => [
            "Solati"                          => "Solati",
                "Saena"                           => "Solati 5",
                    "Halla"                           => "Solati 5 a",
         ],
         
         // Groombridge 34 #1410
         1410        => [
                "Groombridge 34"                  => "Groombridge 34 A",
                "Groombridge 34 B"                => "Groombridge 34 B",
                    "Gold"                            => "Groombridge 34 A 1",
                        "Jaya"                            => "Groombridge 34 A 1 a",
                    "New America"                     => "Groombridge 34 B 1",
                    "Lyons"                           => "Groombridge 34 B 2",
         ],
         
         // Supay #1414
         1414        => [
                "Supay"                           => "Supay A",
                "NN 4021 B"                       => "Supay B",
         ],
         
         // Kappa Tucanae #1427
         1427        => [
                "Kappa Tucanae"                   => "Kappa Tucanae A",
                "Gl 55.3 B"                       => "Kappa Tucanae B",
         ],
         
         // Fuelum #1464
         1464        => [
                "Fuelum"                          => "Fuelum A",
                "NN 4230 B"                       => "Fuelum B",
         ],
         
         // Arouca #1468
         1468        => [
            "Arouca"                          => "Arouca",
                "Amutria"                         => "Arouca 5",
         ],
         
         // LHS 450 #1471
         1471        => [
                "LHS 450"                         => "LHS 450 A",
                "BD+68 946"                       => "LHS 450 B",
                    "Darke's Claim"                   => "LHS 450 B 1",
                    "Camp Schmidt"                    => "LHS 450 B 2",
         ],
         
         // Lamia #1476
         1476        => [
                "Lamia"                           => "Lamia A",
                "Wo 9697 B"                       => "Lamia B",
         ],
         
         // Stafkarl #1484
         1484        => [
            "Stafkarl"                        => "Stafkarl",
                "Jaufurally"                      => "Stafkarl 1",
         ],
         
         // Cai #1534
         1534        => [
            "Cai"                             => "Cai",
                "Xyile"                           => "Cai 1",
                    "Trango"                          => "Cai 2 a",
         ],
         
         // Terra Mater #1552
         1552        => [
            "Terra Mater"                     => "Terra Mater",
                "New Terra"                       => "Terra Mater 5",
         ],
         
         // LHS 2875 #1554
         1554        => [
                "LHS 2875"                        => "LHS 2875 A",
                "NN 3829 B"                       => "LHS 2875 B",
                "NN 3832 C"                       => "LHS 2875 C",
         ],
         
         // LHS 412 #1691
         1691        => [
            "LHS 412"                         => "LHS 412",
                "LHS 412-I"                       => "LHS 412 1",
                "LHS 412-II"                      => "LHS 412 2",
                "LHS 412-III"                     => "LHS 412 3",
                "LHS 412-IV"                      => "LHS 412 4",
                "LHS 412-V"                       => "LHS 412 5",
                "LHS 412-VI"                      => "LHS 412 6",
                "LHS 412-VII"                     => "LHS 412 7",
         ],
         
         // Eta Coronae Borealis #1692
         1692        => [
                "Eta Coronae Borealis"            => "Eta Coronae Borealis A",
                "Gl 584 B"                        => "Eta Coronae Borealis B",
         ],
         
         // Samkyha #1702
         1702        => [
            "Samkyha"                         => "Samkyha",
                "Hudson Brooks"                   => "Samkyha 1",
         ],
         
         // Frog #1716
         1716        => [
            "Frog"                            => "Frog",
                "Thea"                            => "Frog 1",
                    "Merapi"                          => "Frog 1 a",
         ],
         
         // Euboa #1731
         1731        => [
                "Euboa"                           => "Euboa A",
                "Gliese 781.1 B"                  => "Euboa B",
         ],
         
         // LHS 1758 #1748
         1748        => [
                "LHS 1758"                        => "LHS 1758 A",
                "NN 3343 B"                       => "LHS 1758 B",
         ],
         
         // Agartha #1749
         1749        => [
            "Agartha"                         => "Agartha",
                "Franklin"                        => "Agartha 1",
         ],
         
         // LHS 2405 #1754
         1754        => [
                "LHS 2405"                        => "LHS 2405 A",
                "NN 3661 B"                       => "LHS 2405 B",
         ],
         
         // Keltim #1786
         1786        => [
                "Keltim"                          => "Keltim A",
                "Gl 149 B"                        => "Keltim B",
         ],
         
         // VVO 19 #1860
         1860        => [
                "VVO 19"                          => "VVO 19 A",
                "NN 4188 B"                       => "VVO 19 B",
         ],
         
         // KUI 11 #1881
         1881        => [
                "KUI 11"                          => "KUI 11 A",
                "NN 3195 B"                       => "KUI 11 B",
         ],
         
         // LTT 12360 #1889
         1889        => [
                "LTT 12360"                       => "LTT 12360 A",
                "Gliese 333.2 B"                  => "LTT 12360 B",
         ],
         
         // 70 Ophiuchi #1956
         1956        => [
                "70 Ophiuchi"                     => "70 Ophiuchi A",
                "70 Ophiuchi B"                   => "70 Ophiuchi B",
                    "Perez"                           => "70 Ophiuchi A 1",
                    "Denver's Legacy"                 => "70 Ophiuchi A 2",
                    "Richardson"                      => "70 Ophiuchi A 3",
         ],
         
         // Aparctias #1964
         1964        => [
            "Aparctias"                       => "Aparctias",
                "Cardinal"                        => "Aparctias 1",
                "Septentrio"                      => "Aparctias 2",
         ],
         
         // HIP 15310 #2012
         2012        => [
            "HIP 15310"                       => "HIP 15310",
                "X-2487"                          => "HIP 15310 1",
                    "X-2488"                          => "HIP 15310 1 a",
         ],
         
         // LDS 413 #2030
         2030        => [
                "LDS 413"                         => "LDS 413 A",
                "Gliese 1161 B"                   => "LDS 413 B",
         ],
         
         // Shinigami #2079
         2079        => [
            "Shinigami"                       => "Shinigami",
                "Bodger's World"                  => "Shinigami 1",
                    "Grutopia"                        => "Shinigami 1 a",
         ],
         
         // Bedaho #2086
         2086        => [
            "Bedaho"                          => "Bedaho",
                "Strauss Reward"                  => "Bedaho 1",
                "Matto"                           => "Bedaho 2",
         ],
         
         // LHS 1167 #2131
         2131        => [
            "LHS 1167"                        => "LHS 1167",
                "Fortuna Fangrim"                 => "LHS 1167 1",
         ],
         
         // Hyperborea #2136
         2136        => [
            "Hyperborea"                      => "Hyperborea",
                "Boreas"                          => "Hyperborea 4",
         ],
         
         // BD-19 3629A #2192
         2192        => [
                "BD-19 3629A"                     => "BD-19 3629A A",
                "Gl 496 B"                        => "BD-19 3629A B",
         ],
         
         // Heget #2196
         2196        => [
            "Heget"                           => "Heget",
                "Ma Mordella"                     => "Heget 1",
                    "Horta"                           => "Heget 1 a",
         ],
         
         // Forculus #2203
         2203        => [
                "Forculus"                        => "Forculus A",
                "Wolf 853 B"                      => "Forculus B",
                    "Domus"                           => "Forculus A 1",
         ],
         
         // Hodack #2253
         2253        => [
            "Hodack"                          => "Hodack",
                "Whiterock"                       => "Hodack 1",
         ],
         
         // Phiagre #2341
         2341        => [
            "Phiagre"                         => "Phiagre",
                "Coates's Wreck"                  => "Phiagre 2",
                "Stevenson"                       => "Phiagre 3",
                    "Kurinjal"                        => "Phiagre 3 a",
         ],
         
         // Perkele #2348
         2348        => [
            "Perkele"                         => "Perkele",
                "Volantra"                        => "Perkele 5",
                    "Kanjut"                          => "Perkele 5 a",
         ],
         
         // Witch's Reach #2375
         2375        => [
                "Witch's Reach"                   => "Witch's Reach A",
                "Witch's Peak B"                  => "Witch's Reach B",
                    "Cauldron"                        => "Witch's Reach A 1",
         ],
         
         // Psi Octantis #2384
         2384        => [
            "Psi Octantis"                    => "Psi Octantis",
                "Kanaloa"                         => "Psi Octantis 1",
                "Kane"                            => "Psi Octantis 2",
         ],
         
         // Teshub #2420
         2420        => [
                "Teshub"                          => "Teshub A",
                "Gliese 59 B"                     => "Teshub B",
                    "Kerrash"                         => "Teshub A 1",
         ],
         
         // Wolf 393 #2424
         2424        => [
                "Wolf 393"                        => "Wolf 393 A",
                "Wolf 394"                        => "Wolf 393 B",
         ],
         
         // Lalande 27055 #2446
         2446        => [
                "Lalande 27055"                   => "Lalande 27055 A",
                "Lalande 27055 B"                 => "Lalande 27055 B",
                "Lalande 27055 C"                 => "Lalande 27055 C",
         ],
         
         // Borr #2451
         2451        => [
                "Borr"                            => "Borr A",
                "Gliese 157 B"                    => "Borr B",
         ],
         
         // LB 3303 #2452
         2452        => [
                "LB 3303"                         => "LB 3303 A",
                "Gliese 127.1 B"                  => "LB 3303 B",
         ],
         
         // Chup Kamui #2573
         2573        => [
            "Chup Kamui"                      => "Chup Kamui",
                "Blackstar"                       => "Chup Kamui 1",
                "Manily"                          => "Chup Kamui 2",
         ],
         
         // Surya #2621
         2621        => [
            "Surya"                           => "Surya",
                "Arka"                            => "Surya 3",
         ],
         
         // 18 Puppis #2658
         2658        => [
                "18 Puppis"                       => "18 Puppis A",
                "Gl 297.2 B"                      => "18 Puppis B",
         ],
         
         // Cemiess #2670
         2670        => [
            "Cemiess"                         => "Cemiess",
                "Jade"                            => "Cemiess 4",
                    "Emerald"                         => "Cemiess 4 a",
         ],
         
         // Arm #2687
         2687        => [
                "Arm"                             => "Arm A",
                "n Capricorni B"                  => "Arm B",
         ],
         
         // Tau-1 Hydrae #2691
         2691        => [
                "Tau-1 Hydrae"                    => "Tau-1 Hydrae A",
                "Gl 348 B"                        => "Tau-1 Hydrae B",
         ],
         
         // Farack #2698
         2698        => [
            "Farack"                          => "Farack",
                "KT-LINE"                         => "Farack 1",
                "Hemshut"                         => "Farack 2",
         ],
         
         // Gliese 138.1 #2850
         2850        => [
                "Gliese 138.1"                    => "Gliese 138.1 A",
                "Gliese 138.1 B"                  => "Gliese 138.1 B",
         ],
         
         // Elysia #2859
         2859        => [
            "Elysia"                          => "Elysia",
                "Cronus"                          => "Elysia 1",
                    "Kailas"                          => "Elysia 1 a",
         ],
         
         // Ross 486 #2876
         2876        => [
                "Ross 486"                        => "Ross 486 A",
                "Gliese 512 B"                    => "Ross 486 B",
         ],
         
         // LFT 1231 #2970
         2970        => [
                "LFT 1231"                        => "LFT 1231 A",
                "NN 3926 B"                       => "LFT 1231 B",
         ],
         
         // Wolf 397 #2987
         2987        => [
            "Wolf 397"                        => "Wolf 397",
                "Rhodius"                         => "Wolf 397 1",
                    "Trus Madi"                       => "Wolf 397 1 a",
         ],
         
         // Eurybia #3013
         3013        => [
            "Eurybia"                         => "Eurybia",
                "Tira Flirble"                    => "Eurybia 1",
                    "Makalu"                          => "Eurybia 1 a",
         ],
         
         // Aymifa #3056
         3056        => [
            "Aymifa"                          => "Aymifa",
                "Camp Rance"                      => "Aymifa 1",
                "Gold"                            => "Aymifa 2",
                "Valhalla"                        => "Aymifa 3",
                "Lee Hollow"                      => "Aymifa 4",
                "Popov Reward"                    => "Aymifa 5",
         ],
         
         // LHS 3739 #3069
         3069        => [
                "LHS 3739"                        => "LHS 3739 A",
                "NN 4243 B"                       => "LHS 3739 B",
         ],
         
         // Rasmussen #3087
         3087        => [
                "Rasmussen"                       => "Rasmussen 1",
                    "Alphubel"                        => "Rasmussen 1 a",
         ],
         
         // CD-58 16 #3089
         3089        => [
            "CD-58 16"                        => "CD-58 16",
                "Suontaka"                        => "CD-58 16 1",
                    "S-One"                           => "CD-58 16 1 a",
         ],
         
         // Nastrond #3090
         3090        => [
            "Nastrond"                        => "Nastrond",
                "Nidhogg"                         => "Nastrond 3",
         ],
         
         // LHS 2335 #3096
         3096        => [
            "LHS 2335"                        => "LHS 2335",
                "Jon Harris"                      => "LHS 2335 1",
         ],
         
         // Holiacan #3154
         3154        => [
            "Holiacan"                        => "Holiacan",
                "Reaganworld"                     => "Holiacan 1",
                "Ouseyworld"                      => "Holiacan 2",
                "Lopez's Hole"                    => "Holiacan 3",
         ],
         
         // LHS 1212 #3174
         3174        => [
                "LHS 1212"                        => "LHS 1212 A",
                "LHS 1213"                        => "LHS 1212 B",
         ],
         
         // LHS 289 #3190
         3190        => [
                "LHS 289"                         => "LHS 289 A",
                "Gliese 401 B"                    => "LHS 289 B",
         ],
         
         // LP 675-76 #3192
         3192        => [
                "LP 675-76"                       => "LP 675-76 A",
                "LP 675-77"                       => "LP 675-76 B",
         ],
         
         // Cor Caroli #3226
         3226        => [
                "Cor Caroli"                      => "Cor Caroli A",
                "Alpha-1 Canum Venaticorum"       => "Cor Caroli B",
         ],
         
         // Themiscrya #3237
         3237        => [
            "Themiscrya"                      => "Themiscrya",
                "Lily May World"                  => "Themiscrya 1",
         ],
         
         // Carmenta #3257
         3257        => [
                "Carmenta"                        => "Carmenta A",
                "Gliese 825.4 B"                  => "Carmenta B",
         ],
         
         // Ross 986 #3284
         3284        => [
            "Ross 986"                        => "Ross 986",
                "Democracy"                       => "Ross 986 1",
                    "Diran"                           => "Ross 986 1 a",
                "Camp Patrick"                    => "Ross 986 2",
         ],
         
         // Urcia #3314
         3314        => [
                "Urcia"                           => "Urcia A",
                "Gl 83.4 B"                       => "Urcia B",
         ],
         
         // Ross 33 #3345
         3345        => [
            "Ross 33"                         => "Ross 33",
                "Grüne Hölle"                   => "Ross 33 1",
         ],
         
         // Tanmark #3404
         3404        => [
            "Tanmark"                         => "Tanmark",
                "Luca L [V4-26]"                  => "Tanmark 1",
                "Icemark"                         => "Tanmark 6",
         ],
         
         // Tetrian #3449
         3449        => [
            "Tetrian"                         => "Tetrian",
                "Gidim"                           => "Tetrian 5",
                "John Bradley Hope"               => "Tetrian 6",
         ],
         
         // Gliese 1272 #3479
         3479        => [
                "Gliese 1272"                     => "Gliese 1272 A",
                "Gliese 1272 B"                   => "Gliese 1272 B",
         ],
         
         // Shibboleth #3504
         3504        => [
            "Shibboleth"                      => "Shibboleth",
                "Shibboleth Haven"                => "Shibboleth 1",
                    "Kyllikki"                        => "Shibboleth 1 a",
         ],
         
         // Epsilon Phoenicis #3505
         3505        => [
            "Epsilon Phoenicis"               => "Epsilon Phoenicis",
                "Binnein"                         => "Epsilon Phoenicis 5",
                "Bormann's Blessing"              => "Epsilon Phoenicis 6",
         ],
         
         // Feuma #3537
         3537        => [
            "Feuma"                           => "Feuma",
                "New Albion"                      => "Feuma 1",
         ],
         
         // Morten-Marte #3544
         3544        => [
                "Morten-Marte"                    => "Morten-Marte A",
                "Morten-Marte B"                  => "Morten-Marte B",
                    "Cullen"                          => "Morten-Marte A 1",
         ],
         
         // Momus Reach #3546
         3546        => [
            "Momus Reach"                     => "Momus Reach",
                "Nemesis"                         => "Momus Reach 1",
                    "Pandora"                         => "Momus Reach 1 a",
         ],
         
         // Akhenaten #3563
         3563        => [
            "Akhenaten"                       => "Akhenaten",
                "Jepochal-G Planet"               => "Akhenaten 1",
         ],
         
         // Sanna #3819
         3819        => [
            "Sanna"                           => "Sanna",
                "Erdogan-4"                       => "Sanna 1",
                    "Caher"                           => "Sanna 1 a",
         ],
         
         // LTT 11655 #3888
         3888        => [
                "LTT 11655"                       => "LTT 11655 A",
                "NN 3348 B"                       => "LTT 11655 B",
         ],
         
         // Viracocha #3926
         3926        => [
            "Viracocha"                       => "Viracocha",
                "Tampu"                           => "Viracocha 1",
                    "Aural"                           => "Viracocha 1 a",
         ],
         
         // Coelrind #3936
         3936        => [
                "Coelrind"                        => "Coelrind A",
                "Gliese 505 B"                    => "Coelrind B",
         ],
         
         // Michael Pantazis #3967
         3967        => [
            "Michael Pantazis"                => "Michael Pantazis",
                "Elizabeth Pantazis"              => "Michael Pantazis 1",
         ],
         
         // Exigus #3993
         3993        => [
            "Exigus"                          => "Exigus",
                "Walkerworld"                     => "Exigus 1",
         ],
         
         // LP 347-5 #4000
         4000        => [
                "LP 347-5"                        => "LP 347-5 A",
                "Gliese 905.2 B"                  => "LP 347-5 B",
         ],
         
         // Wolf 54 #4061
         4061        => [
            "Wolf 54"                         => "Wolf 54",
                "Gord'Ena"                        => "Wolf 54 1",
                    "Druman"                          => "Wolf 54 1 a",
         ],
         
         // 39 Leonis #4081
         4081        => [
                "39 Leonis"                       => "39 Leonis A",
                "Gl 387 B"                        => "39 Leonis B",
         ],
         
         // Ayethi #4113
         4113        => [
            "Ayethi"                          => "Ayethi",
                "Topaz"                           => "Ayethi 1",
                "Raven's Landing"                 => "Ayethi 2",
         ],
         
         // Anlave #4133
         4133        => [
            "Anlave"                          => "Anlave",
                "Jennings's Legacy"               => "Anlave 3",
                "Anderton's Mine"                 => "Anlave 5",
                "Jordan's Rock"                   => "Anlave 6",
                "Anderton"                        => "Anlave 7",
                "Denver"                          => "Anlave 8",
         ],
         
         // Brahma #4171
         4171        => [
                "Brahma"                          => "Brahma A",
                "Gliese 3782 B"                   => "Brahma B",
         ],
         
         // Delta Pavonis #4225
         4225        => [
            "Delta Pavonis"                   => "Delta Pavonis",
                "Camp Mitterand"                  => "Delta Pavonis 1",
                "Suzuki Reward"                   => "Delta Pavonis 2",
                "Reagan's Legacy"                 => "Delta Pavonis 3",
                    "Gold"                            => "Delta Pavonis 4 a",
         ],
         
         // 53 chi Ceti #4242
         4242        => [
                "53 chi Ceti"                     => "53 chi Ceti A",
                "Gliese 9061 B"                   => "53 chi Ceti B",
         ],
         
         // Prism #4243
         4243        => [
                "Prism"                           => "Prism A",
                "Ruby"                            => "Prism B",
                "Diamond"                         => "Prism C",
                "Sapphire"                        => "Prism D",
                    "Mestra"                          => "Prism A 1",
                    "Daedalion"                       => "Prism A 2",
                        "Chione"                          => "Prism A 2 a",
                    "Neaera"                          => "Prism A 3",
                    "Eurcyleia"                       => "Prism A 4",
                        "Anticlea"                        => "Prism A 4 a",
                    "Amphithea"                       => "Prism A 5",
         ],
         
         // LHS 1650 #4244
         4244        => [
            "LHS 1650"                        => "LHS 1650",
                "Trileukon"                       => "LHS 1650 1",
                    "Laila"                           => "LHS 1650 1 a",
         ],
         
         // Ekhi #4325
         4325        => [
            "Ekhi"                            => "Ekhi",
                "Proudhon's Property"             => "Ekhi 1",
                    "Kongur"                          => "Ekhi 1 a",
         ],
         
         // LHS 3921 #4337
         4337        => [
            "LHS 3921"                        => "LHS 3921",
                "Tilune"                          => "LHS 3921 1",
         ],
         
         // Shinrarta Dezhra #4345
         4345        => [
                "Shinrarta Dezhra"                => "Shinrarta Dezhra A",
                "LTT 4550"                        => "Shinrarta Dezhra B",
                    "Founders World"                  => "Shinrarta Dezhra A 4",
         ],
         
         // Ross 345 #4371
         4371        => [
            "Ross 345"                        => "Ross 345",
                "Brigantia"                       => "Ross 345 1",
         ],
         
         // Marduk #4690
         4690        => [
            "Marduk"                          => "Marduk",
                "Sippar"                          => "Marduk 1",
                    "Amar"                            => "Marduk 1 a",
         ],
         
         // LHS 1573 #4705
         4705        => [
            "LHS 1573"                        => "LHS 1573",
                "Dustbowl"                        => "LHS 1573 1",
         ],
         
         // LHS 2819 #4708
         4708        => [
            "LHS 2819"                        => "LHS 2819",
                "Suyus"                           => "LHS 2819 3",
         ],
         
         // Wasat #4822
         4822        => [
                "Wasat"                           => "Wasat A",
                "Gl 271 B"                        => "Wasat B",
         ],
         
         // Omicron Capricorni B #4827
         4827        => [
                "Omicron Capricorni B"            => "Omicron Capricorni B A",
                "Omicron Capricorni"              => "Omicron Capricorni B B",
         ],
         
         // Caicius #4926
         4926        => [
                "Caicius"                         => "Caicius A",
                "DENIS-P J1228.2-1547 B"          => "Caicius B",
         ],
         
         // Geras #4947
         4947        => [
                "Geras"                           => "Geras A",
                "Gliese 171.2 B"                  => "Geras B",
         ],
         
         // LHS 229 #4963
         4963        => [
                "LHS 229"                         => "LHS 229 A",
                "Gliese 275.2 B"                  => "LHS 229 B",
         ],
         
         // LFT 1421 #4965
         4965        => [
                "LFT 1421"                        => "LFT 1421 A",
                "Gliese 720 B"                    => "LFT 1421 B",
         ],
         
         // Procyon #4989
         4989        => [
                "Procyon"                         => "Procyon A",
                "Procyon B"                       => "Procyon B",
         ],
         
         // LTT 4150 #5013
         5013        => [
                "LTT 4150"                        => "LTT 4150 A",
                "Gliese 1143 B"                   => "LTT 4150 B",
         ],
         
         // Run #5061
         5061        => [
            "Run"                             => "Run",
                "Danny's World"                   => "Run 1",
         ],
         
         // Upsilon Andromedae #5067
         5067        => [
                "Upsilon Andromedae"              => "Upsilon Andromedae A",
                "Upsilon Andromedae B"            => "Upsilon Andromedae B",
         ],
         
         // Alkalurops #5078
         5078        => [
                "Alkalurops"                      => "Alkalurops A",
                "51 Mu-2 Bootis B"                => "Alkalurops B",
                "51 Mu-2 Bootis C"                => "Alkalurops C",
         ],
         
         // Akkadia #5110
         5110        => [
            "Akkadia"                         => "Akkadia",
                "Remo Burkhard"                   => "Akkadia 1",
                    "Cathkin"                         => "Akkadia 1 a",
         ],
         
         // Gwaelod #5135
         5135        => [
                "Gwaelod"                         => "Gwaelod A",
                "Gliese 2036 B"                   => "Gwaelod B",
         ],
         
         // LP 673-42 #5163
         5163        => [
                "LP 673-42"                       => "LP 673-42 A",
                "Gliese 452 B"                    => "LP 673-42 B",
         ],
         
         // Lalande 39866 #5275
         5275        => [
                "Lalande 39866"                   => "Lalande 39866 A",
                "Gl 795 B"                        => "Lalande 39866 B",
         ],
         
         // LHS 397 #5294
         5294        => [
            "LHS 397"                         => "LHS 397",
                "Cooper Rock"                     => "LHS 397 1",
                "Gold"                            => "LHS 397 2",
         ],
         
         // Kuk #5301
         5301        => [
                "Kuk"                             => "Kuk A",
                "NN 3742 B"                       => "Kuk B",
         ],
         
         // BD+55 1519 #5302
         5302        => [
                "BD+55 1519"                      => "BD+55 1519 A",
                "Gliese 458 B"                    => "BD+55 1519 B",
         ],
         
         // Gamma Coronae Austrinae #5311
         5311        => [
                "Gamma Coronae Austrinae"         => "Gamma Coronae Austrinae A",
                "Gl 743.1 B"                      => "Gamma Coronae Austrinae B",
         ],
         
         // Toci #5318
         5318        => [
            "Toci"                            => "Toci",
                "Tialli"                          => "Toci 1",
         ],
         
         // 36 Ophiuchi #5331
         5331        => [
                "36 Ophiuchi"                     => "36 Ophiuchi A",
                "36 Ophiuchi B"                   => "36 Ophiuchi B",
                "36 Ophiuchi C"                   => "36 Ophiuchi C",
         ],
         
         // Anayol #5347
         5347        => [
            "Anayol"                          => "Anayol",
                "Solo's Grave"                    => "Anayol 1",
                "Gold"                            => "Anayol 2",
                "Bush Reward"                     => "Anayol 3",
         ],
         
         // Nammu #5414
         5414        => [
                "Nammu"                           => "Nammu A",
                "Gliese 834 B"                    => "Nammu B",
         ],
         
         // Ackwada #5464
         5464        => [
            "Ackwada"                         => "Ackwada",
                "Lopez's Mine"                    => "Ackwada 1",
                "Biggs's Hole"                    => "Ackwada 2",
                "Thompson's Planet"               => "Ackwada 3",
         ],
         
         // Algreit #5527
         5527        => [
            "Algreit"                         => "Algreit",
                "Panmore"                         => "Algreit 1",
         ],
         
         // Minerva #5533
         5533        => [
            "Minerva"                         => "Minerva",
                "Eris"                            => "Minerva 1",
                "Peiste"                          => "Minerva 2",
         ],
         
         // LTT 5855 #5573
         5573        => [
                "LTT 5855"                        => "LTT 5855 A",
                "NN 3865 B"                       => "LTT 5855 B",
         ],
         
         // Aramzahd #5633
         5633        => [
            "Aramzahd"                        => "Aramzahd",
                "Guardinia"                       => "Aramzahd 1",
                    "Smade's Planet"                  => "Aramzahd 1 a",
         ],
         
         // Avalon #5642
         5642        => [
            "Avalon"                          => "Avalon",
                "Kipper's Retreat"                => "Avalon 1",
                "Grach"                           => "Avalon 2",
         ],
         
         // Sabik #5679
         5679        => [
                "Sabik"                           => "Sabik A",
                "Gl 656.1 BC"                     => "Sabik B",
         ],
         
         // BD+75 58 #5702
         5702        => [
            "BD+75 58"                        => "BD+75 58",
                "KevlinSyk - 82"                  => "BD+75 58 2",
         ],
         
         // LHS 1387 #5771
         5771        => [
            "LHS 1387"                        => "LHS 1387",
                "New Turkey"                      => "LHS 1387 1",
                    "Ararat"                          => "LHS 1387 1 a",
         ],
         
         // Artemis #5780
         5780        => [
            "Artemis"                         => "Artemis",
                "Laphria"                         => "Artemis 2",
                "Agrotera"                        => "Artemis 5",
                    "Agrotera a"                      => "Artemis 5 a",
                    "Agrotera b"                      => "Artemis 5 b",
                    "Agrotera c"                      => "Artemis 5 c",
         ],
         
         // HIP 106006 #5784
         5784        => [
            "HIP 106006"                      => "HIP 106006",
                "Rakus' Memorial"                 => "HIP 106006 1",
         ],
         
         // Wolf 225 #5954
         5954        => [
                "Wolf 225"                        => "Wolf 225 A",
                "GJ 1064 B"                       => "Wolf 225 B",
         ],
         
         // Luyten 674-15 #5964
         5964        => [
            "Luyten 674-15"                   => "Luyten 674-15",
                "Bell's World"                    => "Luyten 674-15 1",
                "Jordan's Hole"                   => "Luyten 674-15 2",
         ],
         
         // Cegreeth #5983
         5983        => [
            "Cegreeth"                        => "Cegreeth",
                "Morris's Planet"                 => "Cegreeth 1",
                    "Morris's Claim"                  => "Cegreeth 1 a",
         ],
         
         // Wolf 573 #5986
         5986        => [
                "Wolf 573"                        => "Wolf 573 A",
                "Gl 596.1 B"                      => "Wolf 573 B",
                    "Lupon"                           => "Wolf 573 A 1",
         ],
         
         // Lalande 4141 #6068
         6068        => [
            "Lalande 4141"                    => "Lalande 4141",
                "Nahtanoj"                        => "Lalande 4141 1",
         ],
         
         // Futhark #6115
         6115        => [
            "Futhark"                         => "Futhark",
                "Chuillin"                        => "Futhark 1",
                "Faereal Prime"                   => "Futhark 2",
         ],
         
         // Reynes #6116
         6116        => [
            "Reynes"                          => "Reynes",
                "Ohajiki"                         => "Reynes 1",
         ],
         
         // Princeps #6206
         6206        => [
                "Princeps"                        => "Princeps A",
                "Delta Bootis B"                  => "Princeps B",
         ],
         
         // Tau Ophiuchii #6346
         6346        => [
                "Tau Ophiuchii"                   => "Tau Ophiuchii A",
                "Tau Ophiuchii B"                 => "Tau Ophiuchii B",
         ],
         
         // Demeter #6408
         6408        => [
                "Demeter"                         => "Demeter A",
                "Gliese 659 B"                    => "Demeter B",
         ],
         
         // Morana #6411
         6411        => [
            "Morana"                          => "Morana",
                "Tellus Tertius"                  => "Morana 6",
                    "Nansen"                          => "Morana 6 a",
         ],
         
         // Xi Ophiuchi #6479
         6479        => [
                "Xi Ophiuchi"                     => "Xi Ophiuchi A",
                "Gl 670 B"                        => "Xi Ophiuchi B",
         ],
         
         // Alcor #6523
         6523        => [
                "Alcor"                           => "Alcor A",
                "Alcor B"                         => "Alcor B",
         ],
         
         // LHS 1951 #6596
         6596        => [
                "LHS 1951"                        => "LHS 1951 A",
                "GJ 1103 B"                       => "LHS 1951 B",
         ],
         
         // Asphodel #6603
         6603        => [
            "Asphodel"                        => "Asphodel",
                "Irving World"                    => "Asphodel 1",
                    "Irving's Moon"                   => "Asphodel 1 a",
         ],
         
         // 26 Draconis #6605
         6605        => [
                "26 Draconis"                     => "26 Draconis A",
                "26 Draconis B"                   => "26 Draconis B",
         ],
         
         // LDS 3768 #6621
         6621        => [
                "LDS 3768"                        => "LDS 3768 A",
                "NN 3469 B"                       => "LDS 3768 B",
         ],
         
         // Alexis Centauri #6625
         6625        => [
            "Alexis Centauri"                 => "Alexis Centauri",
                "Sophia"                          => "Alexis Centauri 1",
                    "Pumori"                          => "Alexis Centauri 1 a",
         ],
         
         // Alkaid #6626
         6626        => [
            "Alkaid"                          => "Alkaid",
                    "Ashfield's Wreck"                => "Alkaid 14 a",
                    "Strauss Rock"                    => "Alkaid 15 a",
                    "Green Mount"                     => "Alkaid 15 b",
                    "New Caledonia"                   => "Alkaid 16 a",
                    "Greenhill"                       => "Alkaid 16 b",
                    "Honda"                           => "Alkaid 16 c",
                    "Diamond's Rock"                  => "Alkaid 16 d",
         ],
         
         // Triton #6646
         6646        => [
                "Triton"                          => "Triton A",
                "NN 3361 B"                       => "Triton B",
         ],
         
         // Epsilon Monocerotis #6649
         6649        => [
                "Epsilon Monocerotis"             => "Epsilon Monocerotis A",
                "Epsilon Monocerotis B"           => "Epsilon Monocerotis B",
         ],
         
         // LHS 3531 #6651
         6651        => [
            "LHS 3531"                        => "LHS 3531",
                "LHS 3531-I"                      => "LHS 3531 2",
         ],
         
         // Trepin #6654
         6654        => [
                "Trepin"                          => "Trepin A",
                "Gliese 442 B"                    => "Trepin B",
         ],
         
         // Tangaroa #6674
         6674        => [
            "Tangaroa"                        => "Tangaroa",
                "Mirnipli"                        => "Tangaroa 1",
                    "Imishli"                         => "Tangaroa 1 a",
         ],
         
         // Delta Phoenicis #6704
         6704        => [
            "Delta Phoenicis"                 => "Delta Phoenicis",
                "DP I"                            => "Delta Phoenicis 1",
                "Anka"                            => "Delta Phoenicis 2",
                "Kerkes"                          => "Delta Phoenicis 3",
                    "Garuda"                          => "Delta Phoenicis 3 a",
         ],
         
         // Betel #6709
         6709        => [
            "Betel"                           => "Betel",
                "Kava"                            => "Betel 3",
         ],
         
         // 53 Aquarii #6733
         6733        => [
                "53 Aquarii"                      => "53 Aquarii A",
                "53 Aquarii B"                    => "53 Aquarii B",
                "53 Aquarii C"                    => "53 Aquarii C",
         ],
         
         // Ququve #6772
         6772        => [
                "Ququve"                          => "Ququve A",
                "NN 3179 B"                       => "Ququve B",
                    "New America"                     => "Ququve A 1",
                    "Gold"                            => "Ququve A 2",
         ],
         
         // Rudjer Boskovic #6797
         6797        => [
            "Rudjer Boskovic"                 => "Rudjer Boskovic",
                "New Serbia"                      => "Rudjer Boskovic 1",
         ],
         
         // Ninhursag #6800
         6800        => [
            "Ninhursag"                       => "Ninhursag",
                "Kerinci"                         => "Ninhursag 1",
         ],
         
         // VESPER-M4 #6801
         6801        => [
            "VESPER-M4"                       => "VESPER-M4",
                "Slough"                          => "VESPER-M4 7",
         ],
         
         // LTT 1345 #6834
         6834        => [
            "LTT 1345"                        => "LTT 1345",
                "Pod"                             => "LTT 1345 1",
         ],
         
         // Vargerson #6874
         6874        => [
            "Vargerson"                       => "Vargerson",
                "Miranda II"                      => "Vargerson 1",
         ],
         
         // Alpha Centauri #6903
         6903        => [
                "Alpha Centauri"                  => "Alpha Centauri A",
                "Alpha Centauri B"                => "Alpha Centauri B",
                "Proxima Centauri"                => "Alpha Centauri C",
                    "2045 PC2"                        => "Alpha Centauri AB 1",
                    "Lagrange"                        => "Alpha Centauri AB 2",
                        "2042 L1"                         => "Alpha Centauri AB 2 a",
                    "2071 AC3"                        => "Alpha Centauri AB 3",
                    "Eden"                            => "Alpha Centauri C 1",
         ],
         
         // Notus #6906
         6906        => [
                "Notus"                           => "Notus A",
                "NN 4238 B"                       => "Notus B",
         ],
         
         // Gliese 867.1 #6946
         6946        => [
                "Gliese 867.1"                    => "Gliese 867.1 A",
                "Gliese 867.1 B"                  => "Gliese 867.1 B",
                "Gliese 867.1 C"                  => "Gliese 867.1 C",
         ],
         
         // Carcinus #6949
         6949        => [
            "Carcinus"                        => "Carcinus",
                "New Babylon"                     => "Carcinus 4",
         ],
         
         // LTT 7669 #6964
         6964        => [
            "LTT 7669"                        => "LTT 7669",
                "Grüne Hölle"                   => "LTT 7669 1",
         ],
         
         // Phanes #7021
         7021        => [
            "Phanes"                          => "Phanes",
                "Wilde's World"                   => "Phanes 3",
                    "Muztagh"                         => "Phanes 3 a",
         ],
         
         // Struve 1321 #7029
         7029        => [
                "Struve 1321"                     => "Struve 1321 A",
                "Struve 1321 B"                   => "Struve 1321 B",
         ],
         
         // Facece #7060
         7060        => [
            "Facece"                          => "Facece",
                "Mathews's Hole"                  => "Facece 1",
                "Coates's Mine"                   => "Facece 2",
                "Peters's Wreck"                  => "Facece 3",
                "New America"                     => "Facece 4",
                "Topaz"                           => "Facece 5",
         ],
         
         // LTT 2952 #7096
         7096        => [
            "LTT 2952"                        => "LTT 2952",
                    "Burbidge"                        => "LTT 2952 1 a",
         ],
         
         // Crevit #7097
         7097        => [
            "Crevit"                          => "Crevit",
                "Dalraida"                        => "Crevit 1",
         ],
         
         // Aymiay #7225
         7225        => [
            "Aymiay"                          => "Aymiay",
                "Camp Diamond"                    => "Aymiay 1",
                "Cooperworld"                     => "Aymiay 2",
                    "Haynes's Wreck"                  => "Aymiay 2 a",
                "Baker"                           => "Aymiay 3",
         ],
         
         // Jotunheim #7330
         7330        => [
            "Jotunheim"                       => "Jotunheim",
                "Daisy"                           => "Jotunheim 3",
         ],
         
         // HERZ 10688 #7407
         7407        => [
            "HERZ 10688"                      => "HERZ 10688",
                "Melfort"                         => "HERZ 10688 5",
         ],
         
         // HIP 16712 #7408
         7408        => [
                "HIP 16712"                       => "HIP 16712 A",
                "ADS 2612 B"                      => "HIP 16712 B",
         ],
         
         // Hecate #7415
         7415        => [
            "Hecate"                          => "Hecate",
                "Harrison XIII"                   => "Hecate 2",
                "Tomie"                           => "Hecate 3",
         ],
         
         // Orerve #7421
         7421        => [
            "Orerve"                          => "Orerve",
                "Simpson's Eden"                  => "Orerve 1",
         ],
         
         // Moirai #7450
         7450        => [
            "Moirai"                          => "Moirai",
                "Thea Centauri"                   => "Moirai 1",
                    "Kangri"                          => "Moirai 1 a",
         ],
         
         // Wakea #7459
         7459        => [
            "Wakea"                           => "Wakea",
                "Robertson's Renown"              => "Wakea 1",
                    "Meru"                            => "Wakea 1 a",
         ],
         
         // 10 Arietis #7464
         7464        => [
                "10 Arietis"                      => "10 Arietis A",
                "10 Arietis B"                    => "10 Arietis B",
         ],
         
         // Ross 730 #7504
         7504        => [
                "Ross 730"                        => "Ross 730 A",
                "Ross 731"                        => "Ross 730 B",
         ],
         
         // Aganippe #7506
         7506        => [
            "Aganippe"                        => "Aganippe",
                "Boeotia"                         => "Aganippe 1",
                    "New Thebes"                      => "Aganippe 1 a",
         ],
         
         // Baker #7509
         7509        => [
            "Baker"                           => "Baker",
                "Paru"                            => "Baker 1",
         ],
         
         // CD-73 12 #7514
         7514        => [
            "CD-73 12"                        => "CD-73 12",
                "Delicious Cinnamon"              => "CD-73 12 5",
                "Scafell"                         => "CD-73 12 6",
         ],
         
         // Luyten 347-14 #7526
         7526        => [
            "Luyten 347-14"                   => "Luyten 347-14",
                "Rance's Wreck"                   => "Luyten 347-14 1",
         ],
         
         // Ross 905 #7539
         7539        => [
            "Ross 905"                        => "Ross 905",
                "Robert Kelley"                   => "Ross 905 1",
         ],
         
         // Riedquat #7540
         7540        => [
            "Riedquat"                        => "Riedquat",
                "Waterloo"                        => "Riedquat 1",
         ],
         
         // Flesk #7545
         7545        => [
            "Flesk"                           => "Flesk",
                "Gaia Mai"                        => "Flesk 1",
                    "Manod"                           => "Flesk 1 a",
         ],
         
         // Arque #7551
         7551        => [
            "Arque"                           => "Arque",
                "New Caledonia"                   => "Arque 1",
                    "Gold"                            => "Arque 1 a",
         ],
         
         // Thalarctos #7647
         7647        => [
            "Thalarctos"                      => "Thalarctos",
                "Stibium"                         => "Thalarctos 2",
         ],
         
         // LHS 2884 #7650
         7650        => [
            "LHS 2884"                        => "LHS 2884",
                "Conti"                           => "LHS 2884 1",
         ],
         
         // Gliese 3371 #7664
         7664        => [
                "Gliese 3371"                     => "Gliese 3371 A",
                "NN 3372 B"                       => "Gliese 3371 B",
         ],
         
         // LTT 135 #7706
         7706        => [
            "LTT 135"                         => "LTT 135",
                "Crocket"                         => "LTT 135 8",
                    "Tulaichean"                      => "LTT 135 8 a",
         ],
         
         // Zeaex #7729
         7729        => [
            "Zeaex"                           => "Zeaex",
                "Cambridge's Hole"                => "Zeaex 3",
                "Ashfield's World"                => "Zeaex 4",
                "Democracy"                       => "Zeaex 5",
                "Irvin's Wreck"                   => "Zeaex 6",
                    "Schmidt Rock"                    => "Zeaex 7 a",
                "Ulrich's Mine"                   => "Zeaex 8",
         ],
         
         // Dea Motrona #7788
         7788        => [
                "Dea Motrona"                     => "Dea Motrona A",
                "Gliese 9490 B"                   => "Dea Motrona B",
         ],
         
         // LDS 883 #7811
         7811        => [
                "LDS 883"                         => "LDS 883 A",
                "Gliese 118.2 B"                  => "LDS 883 B",
                "Gliese 118.2 C"                  => "LDS 883 C",
                    "Argovia"                         => "LDS 883 A 2",
         ],
         
         // Alexandrinus #7870
         7870        => [
            "Alexandrinus"                    => "Alexandrinus",
                "Londinium"                       => "Alexandrinus 5",
         ],
         
         // PLX 695 #7894
         7894        => [
            "PLX 695"                         => "PLX 695",
                "Secular I"                       => "PLX 695 1",
         ],
         
         // Paul-Friedrichs Star #7973
         7973        => [
            "Paul-Friedrichs Star"            => "Paul-Friedrichs Star",
                "Jakobs Hallowed Paradox"         => "Paul-Friedrichs Star 1",
         ],
         
         // Punraz #8039
         8039        => [
                "Punraz"                          => "Punraz A",
                "Gliese 140.1 B"                  => "Punraz B",
         ],
         
         // Summerland #8064
         8064        => [
            "Summerland"                      => "Summerland",
                "Henry O'Hare's Haven"            => "Summerland 6",
         ],
         
         // Cockaigne #8082
         8082        => [
            "Cockaigne"                       => "Cockaigne",
                "Goliard"                         => "Cockaigne 1",
                "Mytoses"                         => "Cockaigne 2",
         ],
         
         // HG 7-206 #8097
         8097        => [
                "HG 7-206"                        => "HG 7-206 A",
                "NN 3283 B"                       => "HG 7-206 B",
         ],
         
         // NLTT 21440 #8115
         8115        => [
                "NLTT 21440"                      => "NLTT 21440 A",
                "Gliese 1122 B"                   => "NLTT 21440 B",
         ],
         
         // LHS 448 #8140
         8140        => [
            "LHS 448"                         => "LHS 448",
                "Vivally"                         => "LHS 448 1",
         ],
         
         // Tegmen #8196
         8196        => [
                "Tegmen"                          => "Tegmen A",
                "Tegmen B"                        => "Tegmen B",
                "Tegmen C"                        => "Tegmen C",
         ],
         
         // LP 377-78 #8205
         8205        => [
                "LP 377-78"                       => "LP 377-78 A",
                "LP 377-79"                       => "LP 377-78 B",
         ],
         
         // Zeta Aquilae #8214
         8214        => [
                "Zeta Aquilae"                    => "Zeta Aquilae A",
                "Zeta Aquilae B"                  => "Zeta Aquilae B",
                "Zeta Aquilae C"                  => "Zeta Aquilae C",
         ],
         
         // Alioth #8218
         8218        => [
            "Alioth"                          => "Alioth",
                    "Wicca's World"                   => "Alioth 5 a",
                    "Turner's World"                  => "Alioth 5 b",
                    "Argent's Claim"                  => "Alioth 5 c",
                "Bifrost"                         => "Alioth 6",
                    "Mackenzie's Legacy"              => "Alioth 6 a",
                    "Ousey Rock"                      => "Alioth 6 b",
                    "Miller Rock"                     => "Alioth 6 c",
         ],
         
         // Altair #8228
         8228        => [
            "Altair"                          => "Altair",
                "Darkes Hollow"                   => "Altair 3",
                "Biggs Colony"                    => "Altair 4",
                "Lowing's Rock"                   => "Altair 5",
         ],
         
         // 17 Cygni #8254
         8254        => [
                "17 Cygni"                        => "17 Cygni A",
                "17 Cygni B"                      => "17 Cygni B",
         ],
         
         // Felkan #8269
         8269        => [
            "Felkan"                          => "Felkan",
                "Jesstopia"                       => "Felkan 1",
         ],
         
         // Epsilon Hydri #8317
         8317        => [
            "Epsilon Hydri"                   => "Epsilon Hydri",
                "Offield-Duan"                    => "Epsilon Hydri 5",
                    "Shan"                            => "Epsilon Hydri 5 a",
         ],
         
         // Tarach Tor #8350
         8350        => [
            "Tarach Tor"                      => "Tarach Tor",
                "Hanandroo"                       => "Tarach Tor 3",
                "Moel Sych"                       => "Tarach Tor 4",
         ],
         
         // Delta Equulei #8372
         8372        => [
                "Delta Equulei"                   => "Delta Equulei A",
                "Delta Equulei B"                 => "Delta Equulei B",
         ],
         
         // BD+31 434 #8375
         8375        => [
                "BD+31 434"                       => "BD+31 434 A",
                "Gliese 99 B"                     => "BD+31 434 B",
         ],
         
         // Fawaol #8468
         8468        => [
            "Fawaol"                          => "Fawaol",
                    "Tracy"                           => "Fawaol 1 a",
                    "Camp Rush"                       => "Fawaol 1 b",
                "Distat"                          => "Fawaol 2",
                "Griffiths Rock"                  => "Fawaol 3",
         ],
         
         // Ross 128 #8483
         8483        => [
            "Ross 128"                        => "Ross 128",
                "Grant's Claim"                   => "Ross 128 1",
         ],
         
         // Treima #8502
         8502        => [
            "Treima"                          => "Treima",
                "Haumod"                          => "Treima 1",
         ],
         
         // BD+26 2723 #8519
         8519        => [
                "BD+26 2723"                      => "BD+26 2723 A",
                "Gliese 596 B"                    => "BD+26 2723 B",
         ],
         
         // Annwn #8531
         8531        => [
            "Annwn"                           => "Annwn",
                "Arawn"                           => "Annwn 1",
         ],
         
         // LHS 1020 #8537
         8537        => [
                "LHS 1020"                        => "LHS 1020 A",
                "Gl 4.2 B"                        => "LHS 1020 B",
         ],
         
         // Baldr #8541
         8541        => [
            "Baldr"                           => "Baldr",
                "L.Meristo"                       => "Baldr 2",
         ],
         
         // 51 Arietis #8564
         8564        => [
            "51 Arietis"                      => "51 Arietis",
                "Uruk"                            => "51 Arietis 4",
                "Adab"                            => "51 Arietis 5",
         ],
         
         // Gyton's Hope #8589
         8589        => [
            "Gyton's Hope"                    => "Gyton's Hope",
                "Gyton's Landing"                 => "Gyton's Hope 1",
                "Pisani"                          => "Gyton's Hope 2",
         ],
         
         // 39 Tauri #8642
         8642        => [
                "39 Tauri"                        => "39 Tauri A",
                "39 Tauri B"                      => "39 Tauri B",
                    "Ad Pontes"                       => "39 Tauri A 1",
         ],
         
         // BD+31 2290 #8680
         8680        => [
            "BD+31 2290"                      => "BD+31 2290",
                "Jodi's Rest"                     => "BD+31 2290 1",
         ],
         
         // Andancan #8693
         8693        => [
            "Andancan"                        => "Andancan",
                "New Bactra"                      => "Andancan 1",
         ],
         
         // LHS 1071 #8708
         8708        => [
            "LHS 1071"                        => "LHS 1071",
                "Dr. Mitanek's Eternity"          => "LHS 1071 1",
                "Ugain"                           => "LHS 1071 2",
         ],
         
         // Kappa Fornacis #8920
         8920        => [
            "Kappa Fornacis"                  => "Kappa Fornacis",
                "Panem"                           => "Kappa Fornacis 3",
                    "Panes"                           => "Kappa Fornacis 3 a",
         ],
         
         // Jodrell #8939
         8939        => [
            "Jodrell"                         => "Jodrell",
                "Jodrell I"                       => "Jodrell 1",
                "Jodrell II"                      => "Jodrell 2",
                "Jodrell III"                     => "Jodrell 3",
         ],
         
         // Sumarr #8988
         8988        => [
                "Sumarr"                          => "Sumarr A",
                "Gliese 323 B"                    => "Sumarr B",
         ],
         
         // Sedna #9014
         9014        => [
            "Sedna"                           => "Sedna",
                    "Gayda"                           => "Sedna 1 a",
         ],
         
         // Caelottixa #9025
         9025        => [
                "Caelottixa"                      => "Caelottixa 1",
         ],
         
         // EQ Pegasi #9103
         9103        => [
                "EQ Pegasi"                       => "EQ Pegasi A",
                "BD+19 5116 B"                    => "EQ Pegasi B",
         ],
         
         // C Carinae #9104
         9104        => [
                "C Carinae"                       => "C Carinae A",
                "C Carinae B"                     => "C Carinae B",
         ],
         
         // Lansbury #9178
         9178        => [
            "Lansbury"                        => "Lansbury",
                "Lansbury - I"                    => "Lansbury 1",
                "Lansbury - II"                   => "Lansbury 2",
                "Lansbury - III"                  => "Lansbury 3",
                "Lansbury - IV"                   => "Lansbury 4",
                "Lansbury - V"                    => "Lansbury 5",
                "Lansbury - VI"                   => "Lansbury 6",
         ],
         
         // Soholia #9204
         9204        => [
            "Soholia"                         => "Soholia",
                "Simpson Hollow"                  => "Soholia 1",
                "Molotovworld"                    => "Soholia 2",
                "Bradley's Legacy"                => "Soholia 3",
         ],
         
         // LTT 606 #9210
         9210        => [
            "LTT 606"                         => "LTT 606",
                "Fraser"                          => "LTT 606 1",
                "Moel Lefn"                       => "LTT 606 6",
         ],
         
         // Tionisla #9216
         9216        => [
            "Tionisla"                        => "Tionisla",
                "New Caledonia"                   => "Tionisla 1",
         ],
         
         // CD-70 1960 #9239
         9239        => [
            "CD-70 1960"                      => "CD-70 1960",
                "Chonzie"                         => "CD-70 1960 1",
                "Brodie's Legacy"                 => "CD-70 1960 2",
         ],
         
         // Wolf 424 #9243
         9243        => [
                "Wolf 424"                        => "Wolf 424 A",
                "Wolf 424 B"                      => "Wolf 424 B",
         ],
         
         // Tamor #9254
         9254        => [
            "Tamor"                           => "Tamor",
                "Lukka"                           => "Tamor 4",
         ],
         
         // 12 Aquarii #9273
         9273        => [
                "12 Aquarii"                      => "12 Aquarii A",
                "12 Aquarii B"                    => "12 Aquarii B",
                "12 Aquarii C"                    => "12 Aquarii C",
         ],
         
         // Wolf 248 #9312
         9312        => [
            "Wolf 248"                        => "Wolf 248",
                "Balmhorn"                        => "Wolf 248 1",
         ],
         
         // LTT 1581 #9334
         9334        => [
            "LTT 1581"                        => "LTT 1581",
                "Grum"                            => "LTT 1581 1",
         ],
         
         // Ross 154 #9419
         9419        => [
            "Ross 154"                        => "Ross 154",
                "Aster"                           => "Ross 154 1",
                    "Merlin"                          => "Ross 154 1 a",
                "Dust Ball"                       => "Ross 154 2",
         ],
         
         // Ross 444 #9441
         9441        => [
            "Ross 444"                        => "Ross 444",
                "Hutton Prime"                    => "Ross 444 1",
         ],
         
         // Thule #9443
         9443        => [
            "Thule"                           => "Thule",
                "Frogspawn"                       => "Thule 2",
         ],
         
         // LHS 2541 #9460
         9460        => [
                "LHS 2541"                        => "LHS 2541 A",
                "Gliese 1155 B"                   => "LHS 2541 B",
         ],
         
         // V1581 Cygni #9535
         9535        => [
                "V1581 Cygni"                     => "V1581 Cygni A",
                "V1581 Cygni B"                   => "V1581 Cygni B",
         ],
         
         // Futhorc #9543
         9543        => [
            "Futhorc"                         => "Futhorc",
                "Graysonia"                       => "Futhorc 2",
                    "Boeth"                           => "Futhorc 2 a",
         ],
         
         // Phiince #9673
         9673        => [
            "Phiince"                         => "Phiince",
                "Kaptai"                          => "Phiince 1",
         ],
         
         // Mamaragan #9707
         9707        => [
                "Mamaragan"                       => "Mamaragan A",
                "NN 3019 B"                       => "Mamaragan B",
         ],
         
         // Eta Draconis #9732
         9732        => [
                "Eta Draconis"                    => "Eta Draconis A",
                "Gl 624.1 B"                      => "Eta Draconis B",
         ],
         
         // Firdaus #9776
         9776        => [
                "Firdaus"                         => "Firdaus A",
                "Firdaus B"                       => "Firdaus B",
                    "Borealis (HD 7199 b)"            => "Firdaus A 3",
         ],
         
         // Chaxiraxi #9801
         9801        => [
                "Chaxiraxi"                       => "Chaxiraxi A",
                "Wo 9448 B"                       => "Chaxiraxi B",
         ],
         
         // CD-41 359 #9802
         9802        => [
            "CD-41 359"                       => "CD-41 359",
                "Gem (HD 8535 b)"                 => "CD-41 359 1",
                    "Garthyre"                        => "CD-41 359 1 a",
         ],
         
         // Aku #9870
         9870        => [
            "Aku"                             => "Aku",
                "Kitsu's Rest"                    => "Aku 1",
         ],
         
         // Wolf 1509 #9875
         9875        => [
                "Wolf 1509"                       => "Wolf 1509 A",
                "Gliese 734 B"                    => "Wolf 1509 B",
         ],
         
         // Zeus #9933
         9933        => [
            "Zeus"                            => "Zeus",
                "Salisbury"                       => "Zeus 4",
                    "Mulanje"                         => "Zeus 4 a",
         ],
         
         // Ross 773 #9979
         9979        => [
                "Ross 773"                        => "Ross 773 A",
                "NN 4190 B"                       => "Ross 773 B",
         ],
         
         // Shangdi #9985
         9985        => [
                "Shangdi"                         => "Shangdi A",
                "Gl 40 B"                         => "Shangdi B",
         ],
         
         // Xi Ursae Majoris #10029
         10029       => [
                "Xi Ursae Majoris"                => "Xi Ursae Majoris A",
                "Xi Ursae Majoris B"              => "Xi Ursae Majoris B",
         ],
         
         // Phekda #10054
         10054       => [
            "Phekda"                          => "Phekda",
                    "Haynes's Hole"                   => "Phekda 1 a",
                    "Nirvana"                         => "Phekda 4 a",
                    "New California"                  => "Phekda 4 b",
                    "Topaz"                           => "Phekda 4 c",
                    "Ousey"                           => "Phekda 5 a",
                    "Francis's Wreck"                 => "Phekda 6 a",
         ],
         
         // Nortes #10133
         10133       => [
            "Nortes"                          => "Nortes",
                "Ash's Inferis"                   => "Nortes 1",
                    "Fach"                            => "Nortes 1 a",
         ],
         
         // 31 Arietis #10137
         10137       => [
                "31 Arietis"                      => "31 Arietis A",
                "31 Arietis B"                    => "31 Arietis B",
         ],
         
         // Arinack #10140
         10140       => [
            "Arinack"                         => "Arinack",
                "Lagdo"                           => "Arinack 1",
         ],
         
         // Epsilon Cygni #10155
         10155       => [
                "Epsilon Cygni"                   => "Epsilon Cygni A",
                "Gl 806.1 B"                      => "Epsilon Cygni B",
         ],
         
         // Deneb Algedi #10173
         10173       => [
                "Deneb Algedi"                    => "Deneb Algedi A",
                "Deneb Algedi B"                  => "Deneb Algedi B",
         ],
         
         // Wolf 1323 #10185
         10185       => [
            "Wolf 1323"                       => "Wolf 1323",
                "Karpo"                           => "Wolf 1323 1",
                "Rattus"                          => "Wolf 1323 2",
         ],
         
         // LTT 7509 #10193
         10193       => [
                "LTT 7509"                        => "LTT 7509 A",
                "Gl 737 B"                        => "LTT 7509 B",
         ],
         
         // LHS 1230 #10209
         10209       => [
                "LHS 1230"                        => "LHS 1230 A",
                "Gliese 56.3 B"                   => "LHS 1230 B",
         ],
         
         // Toor #10237
         10237       => [
            "Toor"                            => "Toor",
                "Tudras"                          => "Toor 1",
         ],
         
         // Zelada #10253
         10253       => [
            "Zelada"                          => "Zelada",
                "New Africa"                      => "Zelada 1",
                "Singh Hollow"                    => "Zelada 2",
         ],
         
         // LP 336-6 #10357
         10357       => [
                "LP 336-6"                        => "LP 336-6 A",
                "Gliese 747 B"                    => "LP 336-6 B",
         ],
         
         // G 65-9 #10358
         10358       => [
                "G 65-9"                          => "G 65-9 A",
                "NN 3809 B"                       => "G 65-9 B",
         ],
         
         // LHS 2789 #10368
         10368       => [
                "LHS 2789"                        => "LHS 2789 A",
                "NN 3803 B"                       => "LHS 2789 B",
         ],
         
         // Senlu #10374
         10374       => [
                "Senlu"                           => "Senlu A",
                "Gliese 853 B"                    => "Senlu B",
         ],
         
         // CD-46 12902 #10490
         10490       => [
                "CD-46 12902"                     => "CD-46 12902 A",
                "Gl 750 B"                        => "CD-46 12902 B",
         ],
         
         // Eta Cassiopeiae #10516
         10516       => [
                "Eta Cassiopeiae"                 => "Eta Cassiopeiae A",
                "Eta Cassiopeiae B"               => "Eta Cassiopeiae B",
                    "Rock"                            => "Eta Cassiopeiae A 1",
                    "Feynman"                         => "Eta Cassiopeiae A 2",
                    "Trojan"                          => "Eta Cassiopeiae A 3",
                        "New Moon"                        => "Eta Cassiopeiae A 3 a",
                    "Between"                         => "Eta Cassiopeiae A 4",
                        "Navy Central"                    => "Eta Cassiopeiae A 4 a",
         ],
         
         // 85 Pegasi #10521
         10521       => [
                "85 Pegasi"                       => "85 Pegasi A",
                "Gliese 914 B"                    => "85 Pegasi B",
         ],
         
         // Nat9481 #10527
         10527       => [
            "Nat9481"                         => "Nat9481",
                "Evelyn's Haven 1905"             => "Nat9481 5",
         ],
         
         // Liaedin #10533
         10533       => [
                "Liaedin"                         => "Liaedin A",
                "Liaedin B"                       => "Liaedin B",
                    "Ulrich's Rock"                   => "Liaedin A 1",
                    "Moore's World"                   => "Liaedin A 2",
                    "Schneider Colony"                => "Liaedin A 3",
                        "Camp Ashfield"                   => "Liaedin A 3 a",
         ],
         
         // LTT 6131 #10644
         10644       => [
                "LTT 6131"                        => "LTT 6131 A",
                "Gl 582.1 B"                      => "LTT 6131 B",
         ],
         
         // BD+19 2443 #10645
         10645       => [
                "BD+19 2443"                      => "BD+19 2443 A",
                "Gliese 426 B"                    => "BD+19 2443 B",
         ],
         
         // HR 7291 #10660
         10660       => [
            "HR 7291"                         => "HR 7291",
                    "Rick's Retreat"                  => "HR 7291 7 d",
                    "Annette's Paradise"              => "HR 7291 7 e",
         ],
         
         // Tiliala #10661
         10661       => [
            "Tiliala"                         => "Tiliala",
                "Valhalla"                        => "Tiliala 3",
                    "Saitoro"                         => "Tiliala 3 a",
                    "Democracy"                       => "Tiliala 3 b",
         ],
         
         // LFT 601 #10692
         10692       => [
                "LFT 601"                         => "LFT 601 A",
                "Gl 319 B"                        => "LFT 601 B",
                "Gl 319 C"                        => "LFT 601 C",
         ],
         
         // Delkar #10717
         10717       => [
            "Delkar"                          => "Delkar",
                "Savo"                            => "Delkar 4",
                    "Anamundi"                        => "Delkar 4 a",
         ],
         
         // Munfayl #10760
         10760       => [
            "Munfayl"                         => "Munfayl",
                "More"                            => "Munfayl 1",
                "Bondarek"                        => "Munfayl 2",
         ],
         
         // Isis #10762
         10762       => [
            "Isis"                            => "Isis",
                "Isis I"                          => "Isis 3",
                "Isis II"                         => "Isis 4",
                "Isis III"                        => "Isis 5",
                "Isis IV"                         => "Isis 6",
                "Isis V"                          => "Isis 7",
                "Isis VI"                         => "Isis 8",
                "Isis VII"                        => "Isis 9",
                "Isis VIII"                       => "Isis 10",
                "Isis IX"                         => "Isis 11",
                "Isis X"                          => "Isis 12",
         ],
         
         // Wolf 294 #10787
         10787       => [
            "Wolf 294"                        => "Wolf 294",
                "Jeffries Rock"                   => "Wolf 294 1",
         ],
         
         // LP 932-12 #10822
         10822       => [
                "LP 932-12"                       => "LP 932-12 A",
                "LP 932-13"                       => "LP 932-12 B",
         ],
         
         // Eulexia #10842
         10842       => [
            "Eulexia"                         => "Eulexia",
                "Eurydice"                        => "Eulexia 3",
                "Tiamoia"                         => "Eulexia 5",
         ],
         
         // LTT 4730 #10873
         10873       => [
                "LTT 4730"                        => "LTT 4730 A",
                "NN 3728 B"                       => "LTT 4730 B",
         ],
         
         // Aulis #10890
         10890       => [
            "Aulis"                           => "Aulis",
                "Chubei"                          => "Aulis 3",
                    "Khan"                            => "Aulis 3 a",
         ],
         
         // Lambda Horologii #10892
         10892       => [
            "Lambda Horologii"                => "Lambda Horologii",
                "Thorgill"                        => "Lambda Horologii 1",
         ],
         
         // Maausk #10899
         10899       => [
            "Maausk"                          => "Maausk",
                "Owain"                           => "Maausk 1",
                    "Kazbek"                          => "Maausk 1 a",
         ],
         
         // PW Hydrae #10912
         10912       => [
                "PW Hydrae"                       => "PW Hydrae A",
                "NN 3608 B"                       => "PW Hydrae B",
                "NN 3609 C"                       => "PW Hydrae C",
         ],
         
         // Zeessze #10980
         10980       => [
                "Zeessze"                         => "Zeessze A",
                "Gl 53 B"                         => "Zeessze B",
                    "Gonzalez's Grave"                => "Zeessze A 1",
                    "New America"                     => "Zeessze A 2",
                        "Macmillian's Hole"               => "Zeessze A 2 a",
         ],
         
         // Vega #11009
         11009       => [
            "Vega"                            => "Vega",
                "Popov Reward"                    => "Vega 1",
                "Tracy's Havan"                   => "Vega 3",
                    "Trikora"                         => "Vega 3 a",
         ],
         
         // Ross 780 #11074
         11074       => [
            "Ross 780"                        => "Ross 780",
                "Wireworld"                       => "Ross 780 2",
         ],
         
         // LP 581-36 #11117
         11117       => [
                "LP 581-36"                       => "LP 581-36 A",
                "NN 4305 B"                       => "LP 581-36 B",
         ],
         
         // Bragurom Du #11130
         11130       => [
            "Bragurom Du"                     => "Bragurom Du",
                    "Remlok's Claim"                  => "Bragurom Du 2 a",
         ],
         
         // Saffron #11142
         11142       => [
            "Saffron"                         => "Saffron",
                "Ectoplasm"                       => "Saffron 3",
         ],
         
         // 61 Cygni #11158
         11158       => [
                "61 Cygni"                        => "61 Cygni A",
                "61 Cygni B"                      => "61 Cygni B",
         ],
         
         // Sigma-2 Ursae Majoris #11165
         11165       => [
                "Sigma-2 Ursae Majoris"           => "Sigma-2 Ursae Majoris A",
                "Gl 335 B"                        => "Sigma-2 Ursae Majoris B",
         ],
         
         // Huh #11169
         11169       => [
                "Huh"                             => "Huh A",
                "Gliese 819 B"                    => "Huh B",
         ],
         
         // Liabeze #11255
         11255       => [
            "Liabeze"                         => "Liabeze",
                "Mitterand's World"               => "Liabeze 1",
                "New California"                  => "Liabeze 2",
         ],
         
         // CD-54 471 #11282
         11282       => [
            "CD-54 471"                       => "CD-54 471",
                "Brigsteer"                       => "CD-54 471 1",
         ],
         
         // Lauma #11283
         11283       => [
                "Lauma"                           => "Lauma A",
                "Gl 836.9 B"                      => "Lauma B",
         ],
         
         // Lugh #11288
         11288       => [
            "Lugh"                            => "Lugh",
                "Tir na Lugh"                     => "Lugh 6",
         ],
         
         // Azrael #11296
         11296       => [
            "Azrael"                          => "Azrael",
                "Rafferty's Paradise"             => "Azrael 2",
                    "Noshaq"                          => "Azrael 2 a",
         ],
         
         // Zeta-1 Reticuli #11333
         11333       => [
                "Zeta-1 Reticuli"                 => "Zeta-1 Reticuli A",
                "Zeta-2 Reticuli"                 => "Zeta-1 Reticuli B",
         ],
         
         // Sapill #11338
         11338       => [
                "Sapill A"                        => "Sapill A",
                "Sapill B"                        => "Sapill B",
                        "LAWMAN"                          => "Sapill A 3 a",
         ],
         
         // Guy #11353
         11353       => [
                "Guy"                             => "Guy A",
                "Gliese 432 B"                    => "Guy B",
         ],
         
         // 9 Aurigae #11371
         11371       => [
                "9 Aurigae B"                     => "9 Aurigae A",
                "9 Aurigae"                       => "9 Aurigae B",
                "9 Aurigae C"                     => "9 Aurigae D",
                "9 Aurigae E"                     => "9 Aurigae E",
         ],
         
         // LTT 15493 #11384
         11384       => [
            "LTT 15493"                       => "LTT 15493",
                "Sun Dancer"                      => "LTT 15493 1",
                "LTT 15493 - I"                   => "LTT 15493 2",
                "Jarek's Folly"                   => "LTT 15493 3",
                "LTT 15493 - III"                 => "LTT 15493 4",
                "LTT 15493 - IV"                  => "LTT 15493 5",
                "LTT 15493 - V"                   => "LTT 15493 6",
         ],
         
         // Uszaa #11436
         11436       => [
            "Uszaa"                           => "Uszaa",
                "Jameson's Pride"                 => "Uszaa 7",
         ],
         
         // Ithaca #11518
         11518       => [
            "Ithaca"                          => "Ithaca",
                "Huari"                           => "Ithaca 1",
         ],
         
         // m Tauri #11529
         11529       => [
                "m Tauri"                         => "m Tauri A",
                "Gl 188 B"                        => "m Tauri B",
         ],
         
         // Dinda #11542
         11542       => [
            "Dinda"                           => "Dinda",
                "Ravenclan's Settlement"          => "Dinda 1",
                    "Hood"                            => "Dinda 1 a",
         ],
         
         // RBS 1843 #11592
         11592       => [
                "RBS 1843"                        => "RBS 1843 A",
                "Gliese 852 B"                    => "RBS 1843 B",
         ],
         
         // Peregrina #11593
         11593       => [
            "Peregrina"                       => "Peregrina",
                "Eurynomus"                       => "Peregrina 2",
                    "Undine"                          => "Peregrina 2 a",
         ],
         
         // CD-65 76 #11655
         11655       => [
            "CD-65 76"                        => "CD-65 76",
                "Jessica's Folly"                 => "CD-65 76 1",
                    "Sheol"                           => "CD-65 76 1 a",
         ],
         
         // HR 1593 #11718
         11718       => [
                "HR 1593"                         => "HR 1593 A",
                "CCDM J05016+6105B"               => "HR 1593 B",
         ],
         
         // Hakili #11736
         11736       => [
                "Hakili"                          => "Hakili A",
                "Gliese 199 B"                    => "Hakili B",
         ],
         
         // Wolf 412 #11856
         11856       => [
            "Wolf 412"                        => "Wolf 412",
                "Haraiva"                         => "Wolf 412 6",
         ],
         
         // Vequess #11882
         11882       => [
            "Vequess"                         => "Vequess",
                "Halki"                           => "Vequess 1",
         ],
         
         // Andceeth #11924
         11924       => [
            "Andceeth"                        => "Andceeth",
                "Capitol"                         => "Andceeth 4",
                    "Mitre"                           => "Andceeth 4 a",
         ],
         
         // Thethys #11926
         11926       => [
            "Thethys"                         => "Thethys",
                "Sanssouci"                       => "Thethys 1",
                    "Dejen"                           => "Thethys 1 a",
         ],
         
         // Svass #11935
         11935       => [
            "Svass"                           => "Svass",
                "Rooney World"                    => "Svass 2",
                    "Moroto"                          => "Svass 2 a",
         ],
         
         // Omicron-2 Eridani #11971
         11971       => [
                "Omicron-2 Eridani"               => "Omicron-2 Eridani A",
                "Omicron Eridani B"               => "Omicron-2 Eridani B",
                "Omicron Eridani C"               => "Omicron-2 Eridani C",
                    "Scott's Mine"                    => "Omicron-2 Eridani A 1",
                    "Steven's Rock"                   => "Omicron-2 Eridani A 2",
         ],
         
         // LTT 9156 #12051
         12051       => [
                "LTT 9156"                        => "LTT 9156 A",
                "Gliese 871 B"                    => "LTT 9156 B",
         ],
         
         // EZ Aquarii #12065
         12065       => [
                "EZ Aquarii"                      => "EZ Aquarii A",
                "EZ Aquarii B"                    => "EZ Aquarii B",
         ],
         
         // HR 8061 #12090
         12090       => [
                "HR 8061"                         => "HR 8061 A",
                "Gliese 818.1 B"                  => "HR 8061 B",
         ],
         
         // LTT 2396 #12101
         12101       => [
            "LTT 2396"                        => "LTT 2396",
                "New Utah"                        => "LTT 2396 1",
         ],
         
         // Utgaroar #12128
         12128       => [
            "Utgaroar"                        => "Utgaroar",
                "Hamlet"                          => "Utgaroar 1",
         ],
         
         // EGM 823 #12129
         12129       => [
                "EGM 823"                         => "EGM 823 A",
                "Gliese 60 B"                     => "EGM 823 B",
                "Gliese 60 C"                     => "EGM 823 C",
         ],
         
         // Mat Zemlya #12136
         12136       => [
            "Mat Zemlya"                      => "Mat Zemlya",
                "Sonia's Haven"                   => "Mat Zemlya 2",
         ],
         
         // Luhman 16 #12209
         12209       => [
                "Luhman 16"                       => "Luhman 16 A",
                "Luhman 16 B"                     => "Luhman 16 B",
         ],
         
         // Te Uira #12229
         12229       => [
            "Te Uira"                         => "Te Uira",
                "Porsenna"                        => "Te Uira 5",
                "Labyrinthia"                     => "Te Uira 6",
         ],
         
         // Dijkstra #12253
         12253       => [
            "Dijkstra"                        => "Dijkstra",
                "Frisia"                          => "Dijkstra 4",
                    "Chembra"                         => "Dijkstra 4 a",
         ],
         
         // Sigma Hydri #12269
         12269       => [
            "Sigma Hydri"                     => "Sigma Hydri",
                "Realm"                           => "Sigma Hydri 1",
         ],
         
         // Tau-1 Eridani #12270
         12270       => [
            "Tau-1 Eridani"                   => "Tau-1 Eridani",
                "Paul's Folly"                    => "Tau-1 Eridani 3",
                    "Pomiu"                           => "Tau-1 Eridani 3 a",
         ],
         
         // Skardee #12348
         12348       => [
            "Skardee"                         => "Skardee",
                "Skardee I"                       => "Skardee 1",
                "Skardee II"                      => "Skardee 2",
                "Skardee III"                     => "Skardee 3",
                "Skardee IV"                      => "Skardee 4",
                "Skardee V"                       => "Skardee 5",
         ],
         
         // LFT 1504 #12352
         12352       => [
                "LFT 1504"                        => "LFT 1504 A",
                "Gl 773 B"                        => "LFT 1504 B",
         ],
         
         // Darahk #12358
         12358       => [
            "Darahk"                          => "Darahk",
                "Darahk II"                       => "Darahk 1",
                "Darahk III"                      => "Darahk 2",
                "Darahk IV"                       => "Darahk 3",
                "Darahk V"                        => "Darahk 4",
                "Darahk VI"                       => "Darahk 5",
                "Darahk VII"                      => "Darahk 6",
         ],
         
         // Amy-Charlotte #12372
         12372       => [
            "Amy-Charlotte"                   => "Amy-Charlotte",
                "Antissa"                         => "Amy-Charlotte 1",
         ],
         
         // 66 Ceti #12378
         12378       => [
                "66 Ceti"                         => "66 Ceti A",
                "Gl 87.1 B"                       => "66 Ceti B",
         ],
         
         // Beldarkri #12398
         12398       => [
            "Beldarkri"                       => "Beldarkri",
                "Kowden"                          => "Beldarkri 1",
                    "Koppen"                          => "Beldarkri 1 a",
         ],
         
         // Alpha Fornacis #12445
         12445       => [
                "Alpha Fornacis"                  => "Alpha Fornacis A",
                "Gl 127 B"                        => "Alpha Fornacis B",
         ],
         
         // Achenar #12523
         12523       => [
            "Achenar"                         => "Achenar",
                    "Achenar 4a"                      => "Achenar 4 a",
                    "Yamaha's Grave"                  => "Achenar 6 a",
                    "New World"                       => "Achenar 6 b",
                    "Conversion"                      => "Achenar 6 c",
                    "Capitol"                         => "Achenar 6 d",
         ],
         
         // LP 711-43 #12578
         12578       => [
                "LP 711-43"                       => "LP 711-43 A",
                "NN 3197 B"                       => "LP 711-43 B",
         ],
         
         // Cybele #12630
         12630       => [
                "Cybele"                          => "Cybele A",
                "Gliese 491 B"                    => "Cybele B",
         ],
         
         // Decima #12652
         12652       => [
            "Decima"                          => "Decima",
                "Fate's Gift"                     => "Decima 1",
                    "Nanda"                           => "Decima 1 a",
         ],
         
         // LHS 417 #12661
         12661       => [
            "LHS 417"                         => "LHS 417",
                "Nannan"                          => "LHS 417 3",
         ],
         
         // Nuakea #12674
         12674       => [
                "Nuakea"                          => "Nuakea A",
                "Gliese 678 B"                    => "Nuakea B",
                    "Maweke"                          => "Nuakea A 1",
                        "Korbu"                           => "Nuakea A 1 a",
         ],
         
         // Arcturus #12678
         12678       => [
            "Arcturus"                        => "Arcturus",
                "Major"                           => "Arcturus 2",
                "Richard's Rock"                  => "Arcturus 3",
                "Discovery"                       => "Arcturus 4",
                "Arcas"                           => "Arcturus 5",
                    "Masseyworld"                     => "Arcturus 5 a",
                    "Richardson's Mine"               => "Arcturus 6 a",
                    "Jeffries"                        => "Arcturus 6 b",
                    "Oliver's Mine"                   => "Arcturus 6 c",
         ],
         
         // Ross 193 #12724
         12724       => [
                "Ross 193"                        => "Ross 193 A",
                "Gliese 812 B"                    => "Ross 193 B",
         ],
         
         // Ferez #12751
         12751       => [
                "Ferez"                           => "Ferez A",
                "Gliese 421 B"                    => "Ferez B",
                "Gliese 421 C"                    => "Ferez C",
         ],
         
         // Dalfur #12752
         12752       => [
            "Dalfur"                          => "Dalfur",
                "Aquila"                          => "Dalfur 7",
         ],
         
         // Wolf 562 #12754
         12754       => [
            "Wolf 562"                        => "Wolf 562",
                "Luke Sears"                      => "Wolf 562 1",
                "Kenneos"                         => "Wolf 562 2",
                "Laila's Memory"                  => "Wolf 562 3",
         ],
         
         // Kamuy #12757
         12757       => [
                "Kamuy"                           => "Kamuy A",
                "Gliese 599 B"                    => "Kamuy B",
         ],
         
         // CU Cancri #12760
         12760       => [
                "CU Cancri"                       => "CU Cancri A",
                "CV Cancri"                       => "CU Cancri B",
         ],
         
         // BD+29 2405 #12761
         12761       => [
                "BD+29 2405"                      => "BD+29 2405 A",
                "Gl 509 B"                        => "BD+29 2405 B",
         ],
         
         // Ross 440 #12773
         12773       => [
                "Ross 440"                        => "Ross 440 A",
                "Gl 352 B"                        => "Ross 440 B",
         ],
         
         // e Geminorum #12825
         12825       => [
                "e Geminorum"                     => "e Geminorum A",
                "Wo 9220 B"                       => "e Geminorum B",
         ],
         
         // 61 Virginis #12861
         12861       => [
            "61 Virginis"                     => "61 Virginis",
                "Rubin's Discovery"               => "61 Virginis 1",
         ],
         
         // LTT 6774 #12864
         12864       => [
                "LTT 6774"                        => "LTT 6774 A",
                "Gl 646 B"                        => "LTT 6774 B",
         ],
         
         // Cibola #12869
         12869       => [
            "Cibola"                          => "Cibola",
                "Keytree"                         => "Cibola 1",
                    "Quivira"                         => "Cibola 1 a",
         ],
         
         // Stopover #12894
         12894       => [
                "Stopover"                        => "Stopover A",
                "Gl 783 B"                        => "Stopover B",
                    "Stopover Minor"                  => "Stopover A 1",
                    "Stopover Major"                  => "Stopover A 2",
         ],
         
         // Kruger 60 #12936
         12936       => [
                "Kruger 60"                       => "Kruger 60 A",
                "Kruger 60 B"                     => "Kruger 60 B",
         ],
         
         // Wolf 1301 #12955
         12955       => [
            "Wolf 1301"                       => "Wolf 1301",
                "Navia"                           => "Wolf 1301 1",
         ],
         
         // 21 Draco #12975
         12975       => [
                "21 Draco"                        => "21 Draco A",
                "Wo 9584 C"                       => "21 Draco B",
         ],
         
         // LHS 3447 #13153
         13153       => [
                "LHS 3447"                        => "LHS 3447 A",
                "Gliese 748.2 B"                  => "LHS 3447 B",
         ],
         
         // Ross 1051 #13169
         13169       => [
            "Ross 1051"                       => "Ross 1051",
                "Brace"                           => "Ross 1051 1",
         ],
         
         // Barnard's Star #13212
         13212       => [
            "Barnard's Star"                  => "Barnard's Star",
                "Cooke"                           => "Barnard's Star 3",
                "Birmingham World"                => "Barnard's Star 4",
         ],
         
         // 69 G. Carinae #13272
         13272       => [
                "69 G. Carinae"                   => "69 G. Carinae A",
                "Gliese 294 B"                    => "69 G. Carinae B",
                "Gliese 294 C"                    => "69 G. Carinae C",
         ],
         
         // LTT 8181 #13304
         13304       => [
                "LTT 8181"                        => "LTT 8181 A",
                "Gl 799 B"                        => "LTT 8181 B",
         ],
         
         // Bento #13311
         13311       => [
            "Bento"                           => "Bento",
                "GJ 86 b"                         => "Bento 1",
                "Makunouchi"                      => "Bento 2",
                    "Kyaraben"                        => "Bento 2 a",
         ],
         
         // La Rochelle #13352
         13352       => [
            "La Rochelle"                     => "La Rochelle",
                "Seymour Hollow (GJ 832 c)"       => "La Rochelle 1",
         ],
         
         // Chi Eridani #13353
         13353       => [
                "Chi Eridani"                     => "Chi Eridani A",
                "Gl 81 B"                         => "Chi Eridani B",
                    "Shirtuh"                         => "Chi Eridani A 8",
                        "Fansipan"                        => "Chi Eridani A 8 a",
         ],
         
         // Difu #13397
         13397       => [
            "Difu"                            => "Difu",
                "Jontyworld"                      => "Difu 1",
                "Etemmu"                          => "Difu 2",
         ],
         
         // Tomas #13412
         13412       => [
            "Tomas"                           => "Tomas",
                "Doubt"                           => "Tomas 1",
         ],
         
         // GCRV 52424 #13476
         13476       => [
                "GCRV 52424"                      => "GCRV 52424 A",
                "Gliese 81.1 B"                   => "GCRV 52424 B",
         ],
         
         // LTT 8517 #13513
         13513       => [
                "LTT 8517"                        => "LTT 8517 A",
                "Gliese 828 B"                    => "LTT 8517 B",
         ],
         
         // Isinor #13541
         13541       => [
            "Isinor"                          => "Isinor",
                "Maodun"                          => "Isinor 1",
         ],
         
         // 36 Andromedae #13552
         13552       => [
                "36 Andromedae"                   => "36 Andromedae A",
                "36 Andromedae B"                 => "36 Andromedae B",
         ],
         
         // Exbeur #13593
         13593       => [
            "Exbeur"                          => "Exbeur",
                "Campbellworld"                   => "Exbeur 4",
                "Sheehanworld"                    => "Exbeur 5",
         ],
         
         // Talitha #13640
         13640       => [
                "Talitha"                         => "Talitha A",
                "Gliese 331 B"                    => "Talitha B",
                "Gliese 331 C"                    => "Talitha C",
         ],
         
         // LP 121-41 #13641
         13641       => [
                "LP 121-41"                       => "LP 121-41 A",
                "NN 3407 B"                       => "LP 121-41 B",
         ],
         
         // Carthage #13765
         13765       => [
            "Carthage"                        => "Carthage",
                "New Carthage"                    => "Carthage 1",
                    "Cho"                             => "Carthage 1 a",
                "Belus"                           => "Carthage 2",
                "Archerbas"                       => "Carthage 3",
         ],
         
         // BD+29 3029 #13784
         13784       => [
                "BD+29 3029"                      => "BD+29 3029 A",
                "Gliese 677 B"                    => "BD+29 3029 B",
         ],
         
         // Leesti #13814
         13814       => [
                "Leesti"                          => "Leesti 3",
         ],
         
         // Brestla #13827
         13827       => [
                "Brestla A"                       => "Brestla A",
                "Brestla B"                       => "Brestla B",
         ],
         
         // LTT 4898 #13836
         13836       => [
                "LTT 4898"                        => "LTT 4898 A",
                "Gliese 1164 B"                   => "LTT 4898 B",
         ],
         
         // Dakvar #13854
         13854       => [
            "Dakvar"                          => "Dakvar",
                "Ebbe"                            => "Dakvar 1",
                "Naglo"                           => "Dakvar 3",
         ],
         
         // Epsilon Eridani #13892
         13892       => [
            "Epsilon Eridani"                 => "Epsilon Eridani",
                "Goldstein's Rock"                => "Epsilon Eridani 1",
                "New California"                  => "Epsilon Eridani 2",
                "Major's Mine"                    => "Epsilon Eridani 3",
         ],
         
         // LP 772-72 #14008
         14008       => [
                "LP 772-72"                       => "LP 772-72 A",
                "NN 3229 B"                       => "LP 772-72 B",
         ],
         
         // Wolf 25 #14054
         14054       => [
            "Wolf 25"                         => "Wolf 25",
                "Hishutash"                       => "Wolf 25 1",
                "Pagon"                           => "Wolf 25 1",
         ],
         
         // Stein 2051 #14073
         14073       => [
                "Stein 2051"                      => "Stein 2051 A",
                "Stein 2051 B"                    => "Stein 2051 B",
         ],
         
         // Lacaille 9352 #14157
         14157       => [
            "Lacaille 9352"                   => "Lacaille 9352",
                "Jennings's Rock"                 => "Lacaille 9352 1",
                "Camp Lawrence"                   => "Lacaille 9352 2",
         ],
         
         // V374 Andromedae #14214
         14214       => [
                "V374 Andromedae"                 => "V374 Andromedae A",
                "Gliese 84.2 B"                   => "V374 Andromedae B",
         ],
         
         // Gliese 384 #14222
         14222       => [
                "Gliese 384"                      => "Gliese 384 A",
                "Gliese 384 B"                    => "Gliese 384 B",
         ],
         
         // CD-35 9019 #14255
         14255       => [
                "CD-35 9019"                      => "CD-35 9019 A",
                "GJ 3806 B"                       => "CD-35 9019 B",
         ],
         
         // LP 245-17 #14264
         14264       => [
                "LP 245-17"                       => "LP 245-17 A",
                "LP 245-18"                       => "LP 245-17 B",
         ],
         
         // Indaol #14316
         14316       => [
            "Indaol"                          => "Indaol",
                "Graham's Rock"                   => "Indaol 1",
                "Morgan's Hole"                   => "Indaol 2",
         ],
         
         // Tethlon #14322
         14322       => [
                "Tethlon"                         => "Tethlon 1",
         ],
         
         // Pliny #14343
         14343       => [
                "Pliny"                           => "Pliny A",
                "Gliese 414 B"                    => "Pliny B",
         ],
         
         // Caelinus #14465
         14465       => [
            "Caelinus"                        => "Caelinus",
                "Caelinus I"                      => "Caelinus 1",
                "Caelinus II"                     => "Caelinus 2",
                "Caelinus III"                    => "Caelinus 3",
         ],
         
         // LHS 331 #14484
         14484       => [
                "LHS 331"                         => "LHS 331 A",
                "LHS 330"                         => "LHS 331 B",
         ],
         
         // Luyten 205-128 #14544
         14544       => [
            "Luyten 205-128"                  => "Luyten 205-128",
                "Kawasakiworld"                   => "Luyten 205-128 1",
                "Schmidt's Mine"                  => "Luyten 205-128 2",
         ],
         
         // G 239-25 #14552
         14552       => [
            "G 239-25"                        => "G 239-25",
                "Buyukkale"                       => "G 239-25 1",
         ],
         
         // Quiness #14620
         14620       => [
            "Quiness"                         => "Quiness",
                "Quy"                             => "Quiness 1",
         ],
         
         // G 126-31 #14622
         14622       => [
                "G 126-31"                        => "G 126-31 A",
                "NN 4215 B"                       => "G 126-31 B",
         ],
         
         // Thanatos #14711
         14711       => [
            "Thanatos"                        => "Thanatos",
                "The Land"                        => "Thanatos 1",
                    "Kamet"                           => "Thanatos 1 a",
         ],
         
         // Theta Indi #14724
         14724       => [
                "Theta Indi"                      => "Theta Indi A",
                "Wo 9733 B"                       => "Theta Indi B",
         ],
         
         // Ys #14731
         14731       => [
            "Ys"                              => "Ys",
                "Chroin"                          => "Ys 3",
                "Blob"                            => "Ys 4",
         ],
         
         // CT Tucanae #14797
         14797       => [
            "CT Tucanae"                      => "CT Tucanae",
                "Abona"                           => "CT Tucanae 3",
         ],
         
         // NLTT 9949 #14798
         14798       => [
            "NLTT 9949"                       => "NLTT 9949",
                "Aunios"                          => "NLTT 9949 1",
                    "Moco"                            => "NLTT 9949 1 a",
         ],
         
         // Atum #14816
         14816       => [
                "Atum"                            => "Atum A",
                "Gliese 1136 B"                   => "Atum B",
         ],
         
         // 12 Gamma-1 Delphini #14839
         14839       => [
                "12 Gamma-1 Delphini"             => "12 Gamma-1 Delphini A",
                "12 Gamma-2 Delphini"             => "12 Gamma-1 Delphini B",
         ],
         
         // Mamitu #14845
         14845       => [
                "Mamitu"                          => "Mamitu A",
                "Gliese 580 B"                    => "Mamitu B",
         ],
         
         // Bandua #14940
         14940       => [
                "Bandua"                          => "Bandua A",
                "Gl 452.5 B"                      => "Bandua B",
         ],
         
         // Zeta Tucanae #14942
         14942       => [
            "Zeta Tucanae"                    => "Zeta Tucanae",
                "Furths"                          => "Zeta Tucanae 5",
                "Darwyn"                          => "Zeta Tucanae 6",
         ],
         
         // Reddot #14954
         14954       => [
            "Reddot"                          => "Reddot",
                "Motherlode"                      => "Reddot 1",
         ],
         
         // h Draconis #15007
         15007       => [
            "h Draconis"                      => "h Draconis",
                "Gaalai"                          => "h Draconis 1",
                    "Makalu"                          => "h Draconis 1 a",
         ],
         
         // Bohmshohm #15108
         15108       => [
            "Bohmshohm"                       => "Bohmshohm",
                "Epirus"                          => "Bohmshohm 1",
                    "Kaliash"                         => "Bohmshohm 1 a",
         ],
         
         // Ratri #15175
         15175       => [
                "Ratri"                           => "Ratri A",
                "Gliese 433.2 B"                  => "Ratri B",
         ],
         
         // Manah #15227
         15227       => [
                "Manah"                           => "Manah A",
                "Gl 150.1 B"                      => "Manah B",
                    "Petra"                           => "Manah A 1",
         ],
         
         // Wolfberg #15254
         15254       => [
            "Wolfberg"                        => "Wolfberg",
                "Azille"                          => "Wolfberg 1",
         ],
         
         // Munshin #15277
         15277       => [
            "Munshin"                         => "Munshin",
                "Ocrinox's Opulence"              => "Munshin 5",
                    "Damavand"                        => "Munshin 5 a",
         ],
         
         // Anahit #15286
         15286       => [
            "Anahit"                          => "Anahit",
                "Irkalla"                         => "Anahit 4",
                    "Nergal"                          => "Anahit 4 a",
         ],
         
         // Olwain #15307
         15307       => [
                "Olwain"                          => "Olwain A",
                "Gl 431.1 B"                      => "Olwain B",
         ],
         
         // Kaun #15355
         15355       => [
            "Kaun"                            => "Kaun",
                "Kaunen"                          => "Kaun 1",
         ],
         
         // Gilgamesh #15367
         15367       => [
                "Gilgamesh"                       => "Gilgamesh A",
                "Gl 797 B"                        => "Gilgamesh B",
         ],
         
         // V780 Tauri #15385
         15385       => [
                "V780 Tauri"                      => "V780 Tauri A",
                "GJ 1083 B"                       => "V780 Tauri B",
         ],
         
         // Rho Geminorum #15408
         15408       => [
                "Rho Geminorum"                   => "Rho Geminorum A",
                "Gl 274 B"                        => "Rho Geminorum B",
         ],
         
         // LTT 464 #15442
         15442       => [
            "LTT 464"                         => "LTT 464",
                "El-Mariesh"                      => "LTT 464 1",
         ],
         
         // LTT 149 #15459
         15459       => [
            "LTT 149"                         => "LTT 149",
                "Noon"                            => "LTT 149 2",
                "Stardust"                        => "LTT 149 3",
         ],
         
         // Diso #15480
         15480       => [
            "Diso"                            => "Diso",
                "Birmingham"                      => "Diso 3",
         ],
         
         // LHS 3439 #15566
         15566       => [
            "LHS 3439"                        => "LHS 3439",
                "Mervon"                          => "LHS 3439 2",
         ],
         
         // Beta Hydri #15573
         15573       => [
            "Beta Hydri"                      => "Beta Hydri",
                "Camp Schmidt"                    => "Beta Hydri 3",
                "Camp Shepard"                    => "Beta Hydri 4",
                "Jordan's Legacy"                 => "Beta Hydri 5",
                "Homeland"                        => "Beta Hydri 6",
                "Endl"                            => "Beta Hydri 8",
         ],
         
         // Dubhe #15640
         15640       => [
                "Dubhe"                           => "Dubhe A",
                "Dubhe B"                         => "Dubhe B",
         ],
         
         // Rho Capricorni #15643
         15643       => [
                "Rho Capricorni"                  => "Rho Capricorni A",
                "Gl 791.1 B"                      => "Rho Capricorni B",
         ],
         
         // Aegaeon #15698
         15698       => [
                "Aegaeon"                         => "Aegaeon A",
                "NN 3474 B"                       => "Aegaeon B",
         ],
         
         // LTT 2151 #15751
         15751       => [
                "LTT 2151"                        => "LTT 2151 A",
                "Gl 185 B"                        => "LTT 2151 B",
         ],
         
         // 86 Mu Herculis #15776
         15776       => [
                "86 Mu Herculis"                  => "86 Mu Herculis A",
                "Gliese 695 B"                    => "86 Mu Herculis B",
         ],
         
         // LTT 11478 #15843
         15843       => [
                "LTT 11478"                       => "LTT 11478 A",
                "Gl 173.1 B"                      => "LTT 11478 B",
         ],
         
         // Mu Arae #15990
         15990       => [
            "Mu Arae"                         => "Mu Arae",
                "Dawlings Rest"                   => "Mu Arae 1",
         ],
         
         // LP 644-15 #16002
         16002       => [
            "LP 644-15"                       => "LP 644-15",
                "Alasdair's World"                => "LP 644-15 3",
         ],
         
         // Artumes #16013
         16013       => [
                "Artumes"                         => "Artumes A",
                "Gliese 392 B"                    => "Artumes B",
         ],
         
         // Pollux #16019
         16019       => [
            "Pollux"                          => "Pollux",
                    "Cambridge"                       => "Pollux 2 a",
         ],
         
         // Hazel #16101
         16101       => [
            "Hazel"                           => "Hazel",
                "Grove"                           => "Hazel 3",
         ],
         
         // BD+33 3582 #16117
         16117       => [
                "BD+33 3582"                      => "BD+33 3582 A",
                "Gliese 765.4 B"                  => "BD+33 3582 B",
         ],
         
         // Lausang #16144
         16144       => [
            "Lausang"                         => "Lausang",
                "Rheged"                          => "Lausang 8",
                    "Chappal"                         => "Lausang 8 a",
         ],
         
         // Carnoeck #16227
         16227       => [
            "Carnoeck"                        => "Carnoeck",
                "Macdara Peter Gamboni"           => "Carnoeck 2",
         ],
         
         // Calhuacan #16245
         16245       => [
            "Calhuacan"                       => "Calhuacan",
                "Stapled Peacock Flesh"           => "Calhuacan 1",
                    "Erebus"                          => "Calhuacan 1 a",
         ],
         
         // Laedla #16250
         16250       => [
            "Laedla"                          => "Laedla",
                "Swallowworld"                    => "Laedla 1",
                "Ford's Legacy"                   => "Laedla 2",
                "Mansfield Colony"                => "Laedla 3",
         ],
         
         // Cardea #16289
         16289       => [
            "Cardea"                          => "Cardea",
                "Raymo's Rendezvous"              => "Cardea 1",
                    "Xaubab"                          => "Cardea 1 a",
         ],
         
         // Tau-2 Gruis A #16384
         16384       => [
                "Tau-2 Gruis A"                   => "Tau-2 Gruis A A",
                "Tau-2 Gruis B"                   => "Tau-2 Gruis A B",
         ],
         
         // Capella #16411
         16411       => [
                "Capella"                         => "Capella A",
                "Capella B"                       => "Capella B",
                        "Duval's Grave"                   => "Capella A 6 a",
                        "Gold"                            => "Capella A 6 b",
                        "Nobleworld"                      => "Capella A 6 c",
                        "Molotov's Claim"                 => "Capella A 6 d",
                        "Lawrence's Grave"                => "Capella A 6 e",
         ],
         
         // Cet #16443
         16443       => [
            "Cet"                             => "Cet",
                "Marie-José Willems"             => "Cet 1",
                "Howard Martyn Wensley"           => "Cet 2",
         ],
         
         // Quator #16460
         16460       => [
            "Quator"                          => "Quator",
                "Camp Hooper"                     => "Quator 1",
                "Massey's World"                  => "Quator 2",
         ],
         
         // Brohman #16504
         16504       => [
            "Brohman"                         => "Brohman",
                "Villist"                         => "Brohman 4",
                    "Eden 13913"                      => "Brohman 4 a",
         ],
         
         // HDS 1065 #16516
         16516       => [
                "HDS 1065"                        => "HDS 1065 A",
                "NN 3448 B"                       => "HDS 1065 B",
         ],
         
         // Corbin #16523
         16523       => [
                "Corbin"                          => "Corbin A",
                "Gl 4 B"                          => "Corbin B",
         ],
         
         // BD+02 305 #16554
         16554       => [
                "BD+02 305"                       => "BD+02 305 A",
                "GJ 1041 B"                       => "BD+02 305 B",
         ],
         
         // Bugas #16565
         16565       => [
                "Bugas"                           => "Bugas A",
                "Gliese 1154 B"                   => "Bugas B",
         ],
         
         // Baltah'Sine #16600
         16600       => [
            "Baltah'Sine"                     => "Baltah'Sine",
                "Baltha'Sine"                     => "Baltah'Sine 1",
         ],
         
         // 37 Xi Bootis #16622
         16622       => [
                "37 Xi Bootis"                    => "37 Xi Bootis A",
                "Gl 566 B"                        => "37 Xi Bootis B",
         ],
         
         // Gurney Slade #16636
         16636       => [
            "Gurney Slade"                    => "Gurney Slade",
                "Gurney Slade One"                => "Gurney Slade 1",
                "Gurney Slade Two"                => "Gurney Slade 2",
                "Gurney Slade Three"              => "Gurney Slade 3",
                "Birmingham"                      => "Gurney Slade 4",
                "Gurney Slade Five"               => "Gurney Slade 5",
                "Gurney Slade Six"                => "Gurney Slade 6",
                "Gurney Slade Seven"              => "Gurney Slade 7",
         ],
         
         // LHS 1875 #16655
         16655       => [
                "LHS 1875"                        => "LHS 1875 A",
                "Gliese 250 B"                    => "LHS 1875 B",
         ],
         
         // Jotun #16680
         16680       => [
            "Jotun"                           => "Jotun",
                "Faner"                           => "Jotun 1",
         ],
         
         // Breamen #16710
         16710       => [
            "Breamen"                         => "Breamen",
                "Chia"                            => "Breamen 1",
                "Andromeda9"                      => "Breamen 2",
         ],
         
         // BU 741 #16751
         16751       => [
                "BU 741"                          => "BU 741 A",
                "Gliese 120.1 B"                  => "BU 741 B",
                "Gliese 120.1 C"                  => "BU 741 C",
                    "Darmen"                          => "BU 741 A 1",
         ],
         
         // Plutarch #16785
         16785       => [
                "Plutarch"                        => "Plutarch A",
                "Gliese 9680 B"                   => "Plutarch B",
         ],
         
         // LHS 115 #16812
         16812       => [
                "LHS 115"                         => "LHS 115 A",
                "Gliese 22 B"                     => "LHS 115 B",
                "Gliese 22 C"                     => "LHS 115 C",
         ],
         
         // BF Canis Venatici #16820
         16820       => [
                "BF Canis Venatici"               => "BF Canis Venatici A",
                "Gliese 490 B"                    => "BF Canis Venatici B",
         ],
         
         // HIP 112441 #16825
         16825       => [
            "HIP 112441"                      => "HIP 112441",
                "Scheffey's Solace"               => "HIP 112441 1",
         ],
         
         // G 116-72 #16873
         16873       => [
                "G 116-72"                        => "G 116-72 A",
                "NN 3578 B"                       => "G 116-72 B",
         ],
         
         // Wolf 1515 #16986
         16986       => [
            "Wolf 1515"                       => "Wolf 1515",
                "Gralmond"                        => "Wolf 1515 1",
         ],
         
         // CD-79 950 #16989
         16989       => [
            "CD-79 950"                       => "CD-79 950",
                "Hellvellyn"                      => "CD-79 950 2",
                    "Patterdale"                      => "CD-79 950 2 a",
         ],
         
         // LHS 449 #17034
         17034       => [
            "LHS 449"                         => "LHS 449",
                "Charles's Mine"                  => "LHS 449 1",
                "Haynes's Mine"                   => "LHS 449 2",
                "Gold"                            => "LHS 449 3",
                "Simpson's Mine"                  => "LHS 449 4",
         ],
         
         // LHS 1065 #17044
         17044       => [
                "LHS 1065"                        => "LHS 1065 A",
                "GJ 1010 B"                       => "LHS 1065 B",
         ],
         
         // LTT 911 #17079
         17079       => [
            "LTT 911"                         => "LTT 911",
                "Jokester's Planet"               => "LTT 911 1",
         ],
         
         // b Herculis #17123
         17123       => [
                "b Herculis"                      => "b Herculis A",
                "Gl 704 B"                        => "b Herculis B",
         ],
         
         // Beta Catonis #17153
         17153       => [
            "Beta Catonis"                    => "Beta Catonis",
                "Dalager"                         => "Beta Catonis 5",
         ],
         
         // LAWD 26 #17205
         17205       => [
                "LAWD 26"                         => "LAWD 26 A",
                "Gliese 293 B"                    => "LAWD 26 B",
         ],
         
         // BD-21 1074 #17250
         17250       => [
                "BD-21 1074"                      => "BD-21 1074 A",
                "NN 3332 BC"                      => "BD-21 1074 B",
         ],
         
         // LP 329-20 #17346
         17346       => [
                "LP 329-20"                       => "LP 329-20 A",
                "NN 3936 B"                       => "LP 329-20 B",
         ],
         
         // Miquich #17371
         17371       => [
            "Miquich"                         => "Miquich",
                "New California"                  => "Miquich 1",
                    "Pulag"                           => "Miquich 1 a",
         ],
         
         // LHS 3006 #17375
         17375       => [
            "LHS 3006"                        => "LHS 3006",
                "Vulcan"                          => "LHS 3006 1",
         ],
         
         // B'Titus #17406
         17406       => [
            "B'Titus"                         => "B'Titus",
                "Urus"                            => "B'Titus 2",
         ],
         
         // Epsilon Ceti #17416
         17416       => [
                "Epsilon Ceti"                    => "Epsilon Ceti A",
                "Gl 105.4 B"                      => "Epsilon Ceti B",
         ],
         
         // Tun #17430
         17430       => [
                "Tun"                             => "Tun A",
                "Ton"                             => "Tun B",
                    "TunTon"                          => "Tun A 1",
         ],
         
         // LTT 198 #17581
         17581       => [
            "LTT 198"                         => "LTT 198",
                "Dini"                            => "LTT 198 3",
                    "Skiddaw"                         => "LTT 198 3 a",
         ],
         
         // Tengri #17615
         17615       => [
            "Tengri"                          => "Tengri",
                "Keevals Retreat"                 => "Tengri 1",
                "Gokturk"                         => "Tengri 2",
         ],
         
         // Taevaisa #17625
         17625       => [
            "Taevaisa"                        => "Taevaisa",
                "Roque"                           => "Taevaisa 1",
                "Louannchar"                      => "Taevaisa 4",
         ],
         
         // LDS 2314 #17631
         17631       => [
                "LDS 2314"                        => "LDS 2314 A",
                "LDS 2314 B"                      => "LDS 2314 B",
         ],
         
         // 49 Serpentis #17669
         17669       => [
                "49 Serpentis"                    => "49 Serpentis A",
                "Gl 615.1 B"                      => "49 Serpentis B",
         ],
         
         // LP 542-33 #17704
         17704       => [
                "LP 542-33"                       => "LP 542-33 A",
                "LP 542-32"                       => "LP 542-33 B",
         ],
         
         // LHS 2263 #17720
         17720       => [
                "LHS 2263"                        => "LHS 2263 A",
                "NN 3601 B"                       => "LHS 2263 B",
         ],
         
         // Lidpar #17770
         17770       => [
                "Lidpar"                          => "Lidpar A",
                "Gl 904.1 B"                      => "Lidpar B",
         ],
         
         // Kalb #17815
         17815       => [
                "Kalb"                            => "Kalb A",
                "Gliese 9541 B"                   => "Kalb B",
         ],
         
         // van Maanen's Star #17834
         17834       => [
            "van Maanen's Star"               => "van Maanen's Star",
                "Major"                           => "van Maanen's Star 1",
         ],
         
         // Lalande 29917 #17856
         17856       => [
                "Lalande 29917"                   => "Lalande 29917 A",
                "Gliese 617 B"                    => "Lalande 29917 B",
         ],
         
         // LTT 2771 #17857
         17857       => [
            "LTT 2771"                        => "LTT 2771",
                "Tarlak"                          => "LTT 2771 1",
         ],
         
         // Persephone #17890
         17890       => [
            "Persephone"                      => "Persephone",
                "Kore"                            => "Persephone 1",
         ],
         
         // Zaonce #17892
         17892       => [
            "Zaonce"                          => "Zaonce",
                "Industry"                        => "Zaonce 3",
         ],
         
         // Ursitoare #17977
         17977       => [
            "Ursitoare"                       => "Ursitoare",
                "Elizabeth Young's World"         => "Ursitoare 2",
                "Beenkeragh"                      => "Ursitoare 3",
         ],
         
         // Tau Bootis #18041
         18041       => [
                "Tau Bootis"                      => "Tau Bootis A",
                "Tau Bootis B"                    => "Tau Bootis B",
         ],
         
         // Agwe #18056
         18056       => [
                "Agwe"                            => "Agwe A",
                "Gl 338.1 B"                      => "Agwe B",
         ],
         
         // Arexack #18058
         18058       => [
            "Arexack"                         => "Arexack",
                "Tracy's World"                   => "Arexack 1",
                "Peter's Eden"                    => "Arexack 2",
                "Maxwell Hollow"                  => "Arexack 3",
         ],
         
         // Fomalhaut #18062
         18062       => [
            "Fomalhaut"                       => "Fomalhaut",
                "Lawrence's Hole"                 => "Fomalhaut 1",
                "London's Legacy"                 => "Fomalhaut 2",
                "Biggs's Hole"                    => "Fomalhaut 3",
                "Conversion"                      => "Fomalhaut 4",
                    "Strauss"                         => "Fomalhaut 5 a",
         ],
         
         // Lalande 6320 #18108
         18108       => [
            "Lalande 6320"                    => "Lalande 6320",
                "Slieau Whallian"                 => "Lalande 6320 1",
                    "Elkins"                          => "Lalande 6320 1 a",
         ],
         
         // 9 Puppis #18168
         18168       => [
                "9 Puppis"                        => "9 Puppis A",
                "Gl 291 B"                        => "9 Puppis B",
         ],
         
         // LHS 380 #18170
         18170       => [
                "LHS 380"                         => "LHS 380 A",
                "Gliese 563.2 B"                  => "LHS 380 B",
         ],
         
         // Suddene #18210
         18210       => [
            "Suddene"                         => "Suddene",
                "New Rutland"                     => "Suddene 1",
                "Horn"                            => "Suddene 2",
         ],
         
         // Mullag #18243
         18243       => [
                "Mullag"                          => "Mullag A",
                "Gliese 400 B"                    => "Mullag B",
         ],
         
         // Exioce #18297
         18297       => [
            "Exioce"                          => "Exioce",
                "O'Rourke Colony"                 => "Exioce 1",
                    "Experiment"                      => "Exioce 1 a",
                "Democracy"                       => "Exioce 2",
                    "Boston's Wreck"                  => "Exioce 2 a",
         ],
         
         // Aztlan #18422
         18422       => [
            "Aztlan"                          => "Aztlan",
                "Nexus737"                        => "Aztlan 1",
         ],
         
         // Pachamama #18430
         18430       => [
                "Pachamama"                       => "Pachamama A",
                "Gliese 893.3 B"                  => "Pachamama B",
         ],
         
         // BD+26 2184 #18433
         18433       => [
            "BD+26 2184"                      => "BD+26 2184",
                "Kathy McBrayer"                  => "BD+26 2184 5",
         ],
         
         // LP 64-194 #18466
         18466       => [
            "LP 64-194"                       => "LP 64-194",
                "Gargarii"                        => "LP 64-194 1",
         ],
         
         // LP 734-11 #18477
         18477       => [
                "LP 734-11"                       => "LP 734-11 A",
                "LP 734-10"                       => "LP 734-11 B",
         ],
         
         // Lakota #18489
         18489       => [
            "Lakota"                          => "Lakota",
                "Teton"                           => "Lakota 1",
                    "Pada"                            => "Lakota 1 a",
         ],
         
         // Rho Cancri #18497
         18497       => [
                "Rho Cancri"                      => "Rho Cancri A",
                "55 Rho-1 Cancri B"               => "Rho Cancri B",
                    "Rho Cancri I (55 Cnc e)"         => "Rho Cancri A 1",
                    "Rho Cancri II (55 Cnc b)"        => "Rho Cancri A 2",
                    "Rho Cancri III (55 Cnc c)"       => "Rho Cancri A 3",
                    "Rho Cancri IV (55 Cnc f)"        => "Rho Cancri A 4",
                    "Rho Cancri V (55 Cnc d)"         => "Rho Cancri A 5",
                    "Rho Cancri VI"                   => "Rho Cancri A 6",
         ],
         
         // Orrere #18506
         18506       => [
            "Orrere"                          => "Orrere",
                "Grey"                            => "Orrere 1",
         ],
         
         // LTT 4376 #18551
         18551       => [
                "LTT 4376"                        => "LTT 4376 A",
                "Gl 444 B"                        => "LTT 4376 B",
         ],
         
         // Crowfor #18576
         18576       => [
                "Crowfor"                         => "Crowfor A",
                "NN 3409 B"                       => "Crowfor B",
         ],
         
         // Apam Napat #18629
         18629       => [
            "Apam Napat"                      => "Apam Napat",
                "Grahame"                         => "Apam Napat 5",
         ],
         
         // 49 G. Antlia #18643
         18643       => [
                "49 G. Antlia"                    => "49 G. Antlia A",
                "Gliese 379.1 B"                  => "49 G. Antlia B",
         ],
         
         // Tau Cygni #18714
         18714       => [
                "Tau Cygni"                       => "Tau Cygni A",
                "Gliese 822.1 B"                  => "Tau Cygni B",
         ],
         
         // Achlys #18772
         18772       => [
                "Achlys"                          => "Achlys A",
                "NN 3301 B"                       => "Achlys B",
         ],
         
         // Bast #18816
         18816       => [
            "Bast"                            => "Bast",
                "THFC-Est1882"                    => "Bast 1",
         ],
         
         // Athena #18934
         18934       => [
                "Athena"                          => "Athena A",
                "Gliese 321.3 B"                  => "Athena B",
         ],
         
         // Hors #18968
         18968       => [
            "Hors"                            => "Hors",
                "Colon"                           => "Hors 6",
         ],
         
         // Zephyrus #19003
         19003       => [
            "Zephyrus"                        => "Zephyrus",
                "Violet World"                    => "Zephyrus 2",
         ],
         
         // Mjolnir #19022
         19022       => [
            "Mjolnir"                         => "Mjolnir",
                "Sindri"                          => "Mjolnir 1",
                    "Brokkr"                          => "Mjolnir 1 a",
         ],
         
         // Gliese 683.2 #19024
         19024       => [
                "Gliese 683.2"                    => "Gliese 683.2 A",
                "Gl 683.2 B"                      => "Gliese 683.2 B",
         ],
         
         // Soma #19118
         19118       => [
                "Soma"                            => "Soma A",
                "Gliese 838.3 B"                  => "Soma B",
         ],
         
         // Medb #19138
         19138       => [
                "Medb"                            => "Medb A",
                "Gliese 620.1 B"                  => "Medb B",
         ],
         
         // Ao Qin #19204
         19204       => [
                "Ao Qin"                          => "Ao Qin A",
                "Wo 9582 B"                       => "Ao Qin B",
         ],
         
         // LFT 444 #19206
         19206       => [
                "LFT 444"                         => "LFT 444 A",
                "Gliese 225.2 B"                  => "LFT 444 B",
         ],
         
         // LP 431-71 #19214
         19214       => [
                "LP 431-71"                       => "LP 431-71 A",
                "Gliese 1141 B"                   => "LP 431-71 B",
         ],
         
         // LTT 9360 #19232
         19232       => [
                "LTT 9360"                        => "LTT 9360 A",
                "Gliese 889 B"                    => "LTT 9360 B",
         ],
         
         // LHS 1240 #19279
         19279       => [
                "LHS 1240"                        => "LHS 1240 A",
                "LHS 1241"                        => "LHS 1240 B",
         ],
         
         // Mata #19325
         19325       => [
                "Mata"                            => "Mata A",
                "Gl 428 B"                        => "Mata B",
         ],
         
         // Reorte #19328
         19328       => [
            "Reorte"                          => "Reorte",
                "Home"                            => "Reorte 4",
                    "Camp Nakamichi"                  => "Reorte 4 a",
         ],
         
         // Myrbat #19450
         19450       => [
            "Myrbat"                          => "Myrbat",
                "Babycures"                       => "Myrbat 1",
                "Munros"                          => "Myrbat 2",
         ],
         
         // Eme #19493
         19493       => [
                "Eme"                             => "Eme A",
                "Gliese 425 B"                    => "Eme B",
         ],
         
         // LFT 992 #19541
         19541       => [
                "LFT 992"                         => "LFT 992 A",
                "Gliese 507 B"                    => "LFT 992 B",
                    "Uwei"                            => "LFT 992 A 1",
         ],
         
         // Cocijo #19568
         19568       => [
            "Cocijo"                          => "Cocijo",
                "fragLANd"                        => "Cocijo 1",
                    "Moel Hebog"                      => "Cocijo 1 a",
         ],
         
         // CN Hydrus #19605
         19605       => [
                "CN Hydrus"                       => "CN Hydrus A",
                "CN Hydrus B"                     => "CN Hydrus B",
         ],
         
         // Bevan's Hope #19617
         19617       => [
            "Bevan's Hope"                    => "Bevan's Hope",
                "Ithica"                          => "Bevan's Hope 1",
         ],
         
         // Theta Ursae Majoris #19628
         19628       => [
                "Theta Ursae Majoris"             => "Theta Ursae Majoris A",
                "Gl 354 B"                        => "Theta Ursae Majoris B",
         ],
         
         // CM Draconis #19700
         19700       => [
                "CM Draconis"                     => "CM Draconis A",
                "CM Draconis Aa"                  => "CM Draconis B",
                "Gliese 630.1 B"                  => "CM Draconis C",
         ],
         
         // BPM 89444 #19735
         19735       => [
                "BPM 89444"                       => "BPM 89444 A",
                "Gliese 536.1 B"                  => "BPM 89444 B",
         ],
         
         // Miphifa #19743
         19743       => [
            "Miphifa"                         => "Miphifa",
                "Varangia"                        => "Miphifa 1",
         ],
         
         // CD-63 359 #19744
         19744       => [
                "CD-63 359"                       => "CD-63 359 A",
                "CD-63 359 B"                     => "CD-63 359 B",
         ],
         
         // Codorain #19762
         19762       => [
            "Codorain"                        => "Codorain",
                "Codorain I"                      => "Codorain 1",
                "Codorain II"                     => "Codorain 2",
                "Codorain III"                    => "Codorain 6",
                    "Farr's Landing"                  => "Codorain 6 a",
         ],
         
         // LHS 235 #19765
         19765       => [
                "LHS 235"                         => "LHS 235 A",
                "LHS 234"                         => "LHS 235 B",
         ],
         
         // LHS 214 #19766
         19766       => [
                "LHS 214"                         => "LHS 214 A",
                "NN 3374 B"                       => "LHS 214 B",
         ],
         
         // Euryale #19871
         19871       => [
            "Euryale"                         => "Euryale",
                "Wen"                             => "Euryale 3",
                "EG Prime"                        => "Euryale 4",
         ],
         
         // Gateway #19886
         19886       => [
            "Gateway"                         => "Gateway",
                "Hope"                            => "Gateway 1",
                    "Saunder's Rock"                  => "Gateway 1 a",
                    "de Gaulworld"                    => "Gateway 2 a",
                    "Wernerworld"                     => "Gateway 2 b",
                    "Machester's Claim"               => "Gateway 3 a",
                    "Graham's Claim"                  => "Gateway 4 a",
                    "Gupta's Rock"                    => "Gateway 4 b",
         ],
         
         // Pethes #19888
         19888       => [
            "Pethes"                          => "Pethes",
                "Van Lang"                        => "Pethes 1",
         ],
         
         // LP 340-547 #19892
         19892       => [
                "LP 340-547"                      => "LP 340-547 A",
                "LP 340-548"                      => "LP 340-547 B",
         ],
         
         // Ross 788 #19936
         19936       => [
            "Ross 788"                        => "Ross 788",
                "Galava"                          => "Ross 788 1",
                    "Ambleside"                       => "Ross 788 1 a",
         ],
         
         // LTT 12449 #19955
         19955       => [
                "LTT 12449"                       => "LTT 12449 A",
                "NN 3549 B"                       => "LTT 12449 B",
         ],
         
         // CE Bootis #19957
         19957       => [
                "CE Bootis"                       => "CE Bootis A",
                "Gliese 569 B"                    => "CE Bootis B",
         ],
         
         // CD-69 5 #19964
         19964       => [
            "CD-69 5"                         => "CD-69 5",
                "Clements Keep"                   => "CD-69 5 5",
                "Ardrain"                         => "CD-69 5 6",
         ],
         
         // Sirius #19974
         19974       => [
                "Sirius"                          => "Sirius A",
                "Sirius B"                        => "Sirius B",
                    "Waypoint"                        => "Sirius A 1",
                    "Lucifer"                         => "Sirius B 1",
         ],
         
         // Epsilon Indi #20029
         20029       => [
                "Epsilon Indi"                    => "Epsilon Indi A",
                "Epsilon Indi Ba"                 => "Epsilon Indi B",
                    "Edmond's Rock"                   => "Epsilon Indi A 1",
                    "Lee"                             => "Epsilon Indi A 2",
                    "New Africa"                      => "Epsilon Indi A 3",
                        "Mitterand Hollow"                => "Epsilon Indi A 3 a",
                    "Alisonworld"                     => "Epsilon Indi A 4",
         ],
         
         // V640 Cassiopeia #20051
         20051       => [
                "V640 Cassiopeia"                 => "V640 Cassiopeia A",
                "V640 Cassiopeia B"               => "V640 Cassiopeia B",
         ],
         
         // LHS 2887 #20065
         20065       => [
            "LHS 2887"                        => "LHS 2887",
                "Tambo"                           => "LHS 2887 3",
         ],
         
         // 59 Andromedae A #20158
         20158       => [
                "59 Andromedae A"                 => "59 Andromedae A A",
                "59 Andromedae B"                 => "59 Andromedae A B",
         ],
         
         // Adara #20170
         20170       => [
                "Adara"                           => "Adara A",
                "Adara B"                         => "Adara B",
         ],
         
         // Aditi #20171
         20171       => [
            "Aditi"                           => "Aditi",
                "Peylow"                          => "Aditi 6",
                    "Morrow Peek"                     => "Aditi 6 a",
         ],
         
         // Antares #20242
         20242       => [
                "Antares"                         => "Antares A",
                "Antares B"                       => "Antares B",
         ],
         
         // Caer Bran #20520
         20520       => [
                "Caer Bran"                       => "Caer Bran A",
                "LHS 461"                         => "Caer Bran B",
         ],
         
         // Canopus #20522
         20522       => [
            "Canopus"                         => "Canopus",
                "Maxwell's World"                 => "Canopus 1",
                "Rance's Wreck"                   => "Canopus 2",
         ],
         
         // CD-53 570 #20530
         20530       => [
                "CD-53 570"                       => "CD-53 570 A",
                "Gliese 114.1 B"                  => "CD-53 570 B",
         ],
         
         // Epsilon Arietis #21209
         21209       => [
                "Epsilon Arietis"                 => "Epsilon Arietis A",
                "48 Epsilon Arietis B"            => "Epsilon Arietis B",
         ],
         
         // Esege Malan #21212
         21212       => [
                "Esege Malan"                     => "Esege Malan A",
                "Gliese 1294 B"                   => "Esege Malan B",
         ],
         
         // Eta Carinae #21226
         21226       => [
                "Eta Carinae"                     => "Eta Carinae A",
                "Eta Carinae B"                   => "Eta Carinae B",
         ],
         
         // Gliese 534.1 #21244
         21244       => [
                "Gliese 534.1"                    => "Gliese 534.1 A",
                "Gliese 534.1 B"                  => "Gliese 534.1 B",
         ],
         
         // KX Librae #21913
         21913       => [
                "KX Librae"                       => "KX Librae A",
                "Gliese 570 B"                    => "KX Librae B",
         ],
         
         // Laka #21919
         21919       => [
            "Laka"                            => "Laka",
                "Kai-kapu"                        => "Laka 4",
                    "Puncak"                          => "Laka 4 a",
         ],
         
         // LFT 179 #21937
         21937       => [
                "LFT 179"                         => "LFT 179 A",
                "Gliese 84.1 B"                   => "LFT 179 B",
         ],
         
         // LHS 102 #21938
         21938       => [
                "LHS 102"                         => "LHS 102 A",
                "Gliese 1001 B"                   => "LHS 102 B",
         ],
         
         // LHS 501 #21973
         21973       => [
                "LHS 501"                         => "LHS 501 A",
                "LHS 500"                         => "LHS 501 B",
         ],
         
         // LHS 525 #21975
         21975       => [
                "LHS 525"                         => "LHS 525 A",
                "Gliese 863.1 B"                  => "LHS 525 B",
         ],
         
         // LTT 9587 #22013
         22013       => [
                "LTT 9587"                        => "LTT 9587 A",
                "Gliese 897 B"                    => "LTT 9587 B",
         ],
         
         // LTT 9846 #22015
         22015       => [
            "LTT 9846"                        => "LTT 9846",
                "Magna"                           => "LTT 9846 1",
         ],
         
         // m Centauri #22034
         22034       => [
                "m Centauri"                      => "m Centauri A",
                "M Centauri"                      => "m Centauri B",
         ],
         
         // Mug Ruith #22051
         22051       => [
                "Mug Ruith"                       => "Mug Ruith A",
                "Gliese 1183 B"                   => "Mug Ruith B",
         ],
         
         // NN 3086 A #22153
         22153       => [
                "NN 3086 A"                       => "NN 3086 A A",
                "NN 3087 B"                       => "NN 3086 A B",
         ],
         
         // Tiamat #22992
         22992       => [
                "Tiamat"                          => "Tiamat A",
                "Gliese 200 B"                    => "Tiamat B",
         ],
         
         // Wolf 630 #23095
         23095       => [
                "Wolf 630"                        => "Wolf 630 A",
                "Wolf 630 B"                      => "Wolf 630 B",
         ],
         
         // 11 Leonis Minoris #23361
         23361       => [
                "11 Leonis Minoris"               => "11 Leonis Minoris A",
                "Gl 356 B"                        => "11 Leonis Minoris B",
         ],
         
         // 128 Carinae #23365
         23365       => [
                "128 Carinae"                     => "128 Carinae A",
                "Gl 340.1 B"                      => "128 Carinae B",
         ],
         
         // 171 Puppis #23367
         23367       => [
                "171 Puppis"                      => "171 Puppis A",
                "Gl 288 B"                        => "171 Puppis B",
         ],
         
         // 212 Puppis #23371
         23371       => [
                "212 Puppis"                      => "212 Puppis A",
                "Gl 292 B"                        => "212 Puppis B",
         ],
         
         // 37 Theta Aurigae #23386
         23386       => [
                "37 Theta Aurigae"                => "37 Theta Aurigae A",
                "37 Theta Aurigae B"              => "37 Theta Aurigae B",
         ],
         
         // 41 G. Arae #23389
         23389       => [
                "41 G. Arae"                      => "41 G. Arae A",
                "Gliese 666 B"                    => "41 G. Arae B",
         ],
         
         // 48 Cassiopeiae #23395
         23395       => [
                "48 Cassiopeiae"                  => "48 Cassiopeiae A",
                "48 Cassiopeiae B"                => "48 Cassiopeiae B",
                "48 Cassiopeiae C"                => "48 Cassiopeiae C",
         ],
         
         // 52 Pi Aquilae #23396
         23396       => [
                "52 Pi Aquilae"                   => "52 Pi Aquilae A",
                "Pi Aquilae B"                    => "52 Pi Aquilae B",
         ],
         
         // 94 Aquarii #23404
         23404       => [
                "94 Aquarii"                      => "94 Aquarii A",
                "94 Aquarii B"                    => "94 Aquarii B",
                "94 Aquarii C"                    => "94 Aquarii C",
         ],
         
         // Agelasta #23412
         23412       => [
                "Agelasta"                        => "Agelasta A",
                "Gl 269 B"                        => "Agelasta B",
         ],
         
         // Aldebaran #23428
         23428       => [
                "Aldebaran"                       => "Aldebaran A",
                "Aldebaran B"                     => "Aldebaran B",
         ],
         
         // Alpha Circini #23433
         23433       => [
                "Alpha Circini"                   => "Alpha Circini A",
                "Gl 560 B"                        => "Alpha Circini B",
         ],
         
         // Alshain #23521
         23521       => [
                "Alshain"                         => "Alshain A",
                "Gl 771 B"                        => "Alshain B",
         ],
         
         // Artames #23586
         23586       => [
                "Artames"                         => "Artames A",
                "Gliese 319.1 B"                  => "Artames B",
         ],
         
         // Asellus Australis #23588
         23588       => [
                "Asellus Australis"               => "Asellus Australis A",
                "ADS 6967 Aa"                     => "Asellus Australis B",
         ],
         
         // Asellus Secondus #23589
         23589       => [
                "Asellus Secondus"                => "Asellus Secondus A",
                "Wo 9474 B"                       => "Asellus Secondus B",
         ],
         
         // Atanua #23593
         23593       => [
                "Atanua"                          => "Atanua A",
                "Gliese 153 B"                    => "Atanua B",
                "Gliese 153 C"                    => "Atanua C",
         ],
         
         // Avici #23598
         23598       => [
                "Avici"                           => "Avici A",
                "Gliese 528 B"                    => "Avici B",
         ],
         
         // Batara Kala #23601
         23601       => [
                "Batara Kala"                     => "Batara Kala A",
                "GJ 1023 B"                       => "Batara Kala B",
         ],
         
         // BD+01 2684 #23602
         23602       => [
                "BD+01 2684"                      => "BD+01 2684 A",
                "Gliese 461 B"                    => "BD+01 2684 B",
         ],
         
         // BD+22 4939 #23613
         23613       => [
            "BD+22 4939"                      => "BD+22 4939",
                "Badfort"                         => "BD+22 4939 1",
         ],
         
         // Beurex #23657
         23657       => [
                "Beurex"                          => "Beurex A",
                "Beurex B"                        => "Beurex B",
         ],
         
         // BoB #23662
         23662       => [
                "BoB"                             => "BoB A",
                "Gliese 165 B"                    => "BoB B",
         ],
         
         // Castor #23672
         23672       => [
                "Castor"                          => "Castor A",
                "Castor Ab"                       => "Castor B",
                "Castor B"                        => "Castor C",
                "Castor Bb"                       => "Castor D",
                "Castor C"                        => "Castor E",
                "Castor Cb"                       => "Castor F",
         ],
         
         // Cuspoor #24458
         24458       => [
                "Cuspoor"                         => "Cuspoor A",
                "Gliese 667 B"                    => "Cuspoor B",
                "Gliese 667 C"                    => "Cuspoor C",
         ],
         
         // Diadem #24468
         24468       => [
                "Diadem"                          => "Diadem A",
                "Gl 501 B"                        => "Diadem B",
         ],
         
         // Durga #24473
         24473       => [
                "Durga"                           => "Durga A",
                "Wo 9390 B"                       => "Durga B",
         ],
         
         // DX 1217 #24474
         24474       => [
                "DX 1217"                         => "DX 1217 A",
                "WISE 1217+1626 B"                => "DX 1217 B",
         ],
         
         // Dziban #24475
         24475       => [
                "Dziban"                          => "Dziban A",
                "31 Psi Draconis B"               => "Dziban B",
         ],
         
         // EI Cancri #24481
         24481       => [
                "EI Cancri"                       => "EI Cancri A",
                "LHS 2077"                        => "EI Cancri B",
         ],
         
         // Elphin #24485
         24485       => [
                "Elphin"                          => "Elphin A",
                "Gliese 909 B"                    => "Elphin B",
         ],
         
         // Erlaza #24492
         24492       => [
                "Erlaza"                          => "Erlaza A",
                "GJ 1177 B"                       => "Erlaza B",
         ],
         
         // FP Cancri #24501
         24501       => [
                "FP Cancri"                       => "FP Cancri A",
                "Gliese 1108 B"                   => "FP Cancri B",
         ],
         
         // G 203-51 #24508
         24508       => [
                "G 203-51"                        => "G 203-51 A",
                "Gl 661 B"                        => "G 203-51 B",
         ],
         
         // George Pantazis #24533
         24533       => [
                "George Pantazis A"               => "George Pantazis A",
                "George Pantazis B"               => "George Pantazis B",
                    "Anew"                            => "George Pantazis A 12",
         ],
         
         // Grannus #24544
         24544       => [
                "Grannus"                         => "Grannus A",
                "NN 4091 B"                       => "Grannus B",
         ],
         
         // Gweir #24546
         24546       => [
                "Gweir"                           => "Gweir A",
                "Gliese 423 B"                    => "Gweir B",
         ],
         
         // HR 266 #24742
         24742       => [
                "HR 266"                          => "HR 266 A",
                "ADS 784 B"                       => "HR 266 B",
         ],
         
         // HR 4758 #24747
         24747       => [
                "HR 4758"                         => "HR 4758 A",
                "Gl 469.2 B"                      => "HR 4758 B",
         ],
         
         // Kaffaljidhma #25038
         25038       => [
                "Kaffaljidhma"                    => "Kaffaljidhma A",
                "Gliese 106.1 B"                  => "Kaffaljidhma B",
         ],
         
         // KUI 47 #25041
         25041       => [
                "KUI 47"                          => "KUI 47 A",
                "Gl 379 B"                        => "KUI 47 B",
         ],
         
         // LAWD 74 #25063
         25063       => [
                "LAWD 74"                         => "LAWD 74 A",
                "Gliese 754.1 B"                  => "LAWD 74 B",
         ],
         
         // LDS 1503A #25069
         25069       => [
                "LDS 1503A"                       => "LDS 1503A A",
                "LDS 1503B"                       => "LDS 1503A B",
         ],
         
         // LDS 3195 #25070
         25070       => [
                "LDS 3195"                        => "LDS 3195 A",
                "Gliese 31.2 B"                   => "LDS 3195 B",
         ],
         
         // LFT 19 #25081
         25081       => [
                "LFT 19"                          => "LFT 19 A",
                "Gliese 11 B"                     => "LFT 19 B",
         ],
         
         // LFT 238 #25083
         25083       => [
                "LFT 238"                         => "LFT 238 A",
                "Gliese 118.1 B"                  => "LFT 238 B",
         ],
         
         // LFT 572 #25086
         25086       => [
                "LFT 572"                         => "LFT 572 A",
                "Gliese 301 B"                    => "LFT 572 B",
         ],
         
         // LFT 98 #25099
         25099       => [
                "LFT 98"                          => "LFT 98 A",
                "GJ 1026 B"                       => "LFT 98 B",
         ],
         
         // LHS 1409 #25103
         25103       => [
                "LHS 1409"                        => "LHS 1409 A",
                "Gliese 100 B"                    => "LHS 1409 B",
                "Gliese 100 C"                    => "LHS 1409 C",
         ],
         
         // LHS 1827 #25116
         25116       => [
                "LHS 1827"                        => "LHS 1827 A",
                "L 668-21 B"                      => "LHS 1827 B",
         ],
         
         // LHS 1955 #25123
         25123       => [
                "LHS 1955"                        => "LHS 1955 A",
                "NN 3466 B"                       => "LHS 1955 B",
         ],
         
         // LHS 2069 #25127
         25127       => [
                "LHS 2069"                        => "LHS 2069 A",
                "LHS 2070"                        => "LHS 2069 B",
         ],
         
         // LHS 222 #25136
         25136       => [
                "LHS 222"                         => "LHS 222 A",
                "Gliese 257 B"                    => "LHS 222 B",
         ],
         
         // LHS 247 #25144
         25144       => [
                "LHS 247"                         => "LHS 247 A",
                "Gliese 308 B"                    => "LHS 247 B",
         ],
         
         // LHS 256 #25149
         25149       => [
                "LHS 256"                         => "LHS 256 A",
                "LHS 257"                         => "LHS 256 B",
         ],
         
         // LHS 2610 #25150
         25150       => [
            "LHS 2610"                        => "LHS 2610",
                    "Evangeline's Grace"              => "LHS 2610 4 a",
         ],
         
         // LHS 2891 #25155
         25155       => [
                "LHS 2891"                        => "LHS 2891 A",
                "Gl 542.1 B"                      => "LHS 2891 B",
         ],
         
         // LHS 3405 #25175
         25175       => [
                "LHS 3405"                        => "LHS 3405 A",
                "Gliese 1230 B"                   => "LHS 3405 B",
         ],
         
         // LHS 3533 #25181
         25181       => [
                "LHS 3533"                        => "LHS 3533 A",
                "Gliese 784.2 B"                  => "LHS 3533 B",
         ],
         
         // LHS 362 #25184
         25184       => [
                "LHS 362"                         => "LHS 362 A",
                "Gliese 1179 B"                   => "LHS 362 B",
         ],
         
         // LHS 3686 #25186
         25186       => [
                "LHS 3686"                        => "LHS 3686 A",
                "LHS 3688"                        => "LHS 3686 B",
         ],
         
         // LHS 3717 #25187
         25187       => [
                "LHS 3717"                        => "LHS 3717 A",
                "Gliese 838.1 B"                  => "LHS 3717 B",
         ],
         
         // LHS 399 #25189
         25189       => [
                "LHS 399"                         => "LHS 399 A",
                "LHS 400"                         => "LHS 399 B",
         ],
         
         // LHS 415 #25192
         25192       => [
                "LHS 415"                         => "LHS 415 A",
                "Gliese 618 B"                    => "LHS 415 B",
         ],
         
         // LP 438-8 #25238
         25238       => [
                "LP 438-8"                        => "LP 438-8 A",
                "Gliese 516 B"                    => "LP 438-8 B",
         ],
         
         // LP 441-33 #25239
         25239       => [
                "LP 441-33"                       => "LP 441-33 A",
                "LP 441-34"                       => "LP 441-33 B",
         ],
         
         // LP 576-40 #25248
         25248       => [
                "LP 576-40"                       => "LP 576-40 A",
                "NN 4161 B"                       => "LP 576-40 B",
         ],
         
         // LP 672-2 #25258
         25258       => [
                "LP 672-2"                        => "LP 672-2 A",
                "Gliese 1142 B"                   => "LP 672-2 B",
         ],
         
         // LP 704-15 #25259
         25259       => [
                "LP 704-15"                       => "LP 704-15 A",
                "LP 704-14"                       => "LP 704-15 B",
         ],
         
         // LP 915-27 #25275
         25275       => [
                "LP 915-27"                       => "LP 915-27 A",
                "Gliese 2112 B"                   => "LP 915-27 B",
         ],
         
         // LTT 1479 #25298
         25298       => [
                "LTT 1479"                        => "LTT 1479 A",
                "GJ 1054 B"                       => "LTT 1479 B",
         ],
         
         // LTT 16470 #25301
         25301       => [
                "LTT 16470"                       => "LTT 16470 A",
                "NN 4258 B"                       => "LTT 16470 B",
         ],
         
         // LTT 3630 #25310
         25310       => [
                "LTT 3630"                        => "LTT 3630 A",
                "Gliese 1130 B"                   => "LTT 3630 B",
         ],
         
         // LTT 6947 #25324
         25324       => [
                "LTT 6947"                        => "LTT 6947 A",
                "Gliese 676 B"                    => "LTT 6947 B",
         ],
         
         // LTT 7072 #25325
         25325       => [
                "LTT 7072"                        => "LTT 7072 A",
                "LTT 7073"                        => "LTT 7072 B",
         ],
         
         // Mbombo #25345
         25345       => [
                "Mbombo"                          => "Mbombo A",
                "NN 3118 B"                       => "Mbombo B",
         ],
         
         // MCC 811 #25347
         25347       => [
                "MCC 811"                         => "MCC 811 A",
                "NN 4115 B"                       => "MCC 811 B",
         ],
         
         // MCC 813 #25348
         25348       => [
                "MCC 813"                         => "MCC 813 A",
                "Wo 9677 B"                       => "MCC 813 B",
         ],
         
         // NLTT 2224 #25377
         25377       => [
                "NLTT 2224"                       => "NLTT 2224 A",
                "GJ 1015 B"                       => "NLTT 2224 B",
         ],
         
         // NLTT 57506 #25385
         25385       => [
                "NLTT 57506"                      => "NLTT 57506 A",
                "NN 4357 B"                       => "NLTT 57506 B",
         ],
         
         // Omicron Aquilae #25396
         25396       => [
                "Omicron Aquilae"                 => "Omicron Aquilae A",
                "Omicron Aquilae B"               => "Omicron Aquilae B",
                "Omicron Aquilae C"               => "Omicron Aquilae C",
         ],
         
         // Pepper #25419
         25419       => [
                    "Pepper"                          => "Pepper A 1",
                "Gliese 105 B"                    => "Pepper B",
         ],
         
         // Porrima #25527
         25527       => [
                "Porrima"                         => "Porrima A",
                "Gl 482 B"                        => "Porrima B",
         ],
         
         // Psi Velorum #25532
         25532       => [
                "Psi Velorum"                     => "Psi Velorum A",
                "Gl 351 B"                        => "Psi Velorum B",
         ],
         
         // Rex #25599
         25599       => [
                "Rex"                             => "Rex A",
                "WISE 0458+6434 B"                => "Rex B",
         ],
         
         // Rigel #25601
         25601       => [
                "Rigel"                           => "Rigel A",
                "Rigel B"                         => "Rigel B",
         ],
         
         // Ross 439 #25615
         25615       => [
                "Ross 439"                        => "Ross 439 A",
                "Gliese 347 B"                    => "Ross 439 B",
         ],
         
         // Ross 52 #25619
         25619       => [
                "Ross 52"                         => "Ross 52 A",
                "Ross 52 B"                       => "Ross 52 B",
         ],
         
         // Ross 751 #25625
         25625       => [
                "Ross 751"                        => "Ross 751 A",
                "Gliese 800 B"                    => "Ross 751 B",
         ],
         
         // Ross 776 #25626
         25626       => [
                "Ross 776"                        => "Ross 776 A",
                "LP 341-14"                       => "Ross 776 B",
         ],
         
         // Ross 79 #25627
         25627       => [
                "Ross 79"                         => "Ross 79 A",
                "Gliese 228 B"                    => "Ross 79 B",
         ],
         
         // Ross 868 #25630
         25630       => [
                "Ross 868"                        => "Ross 868 A",
                "Gliese 669 B"                    => "Ross 868 B",
         ],
         
         // Sagittarius A* #25635
         25635       => [
                "Sagittarius A*"                  => "Sagittarius A* A",
                "Source 2"                        => "Sagittarius A* B",
         ],
         
         // SDSS J1416+1348 #25652
         25652       => [
                "SDSS J1416+1348"                 => "SDSS J1416+1348 A",
                "SDSS J1416+1348 B"               => "SDSS J1416+1348 B",
         ],
         
         // SHY 35 #25710
         25710       => [
                "SHY 35"                          => "SHY 35 A",
                "NN 3401 B"                       => "SHY 35 B",
         ],
         
         // Sliotar #25714
         25714       => [
                "Sliotar"                         => "Sliotar A",
                "Gliese 67 B"                     => "Sliotar B",
         ],
         
         // StKM 1-1379 #25723
         25723       => [
                "StKM 1-1379"                     => "StKM 1-1379 A",
                "Gliese 632.2 B"                  => "StKM 1-1379 B",
         ],
         
         // Struve 2398 #25725
         25725       => [
                "Struve 2398"                     => "Struve 2398 A",
                "Struve 2398 B"                   => "Struve 2398 B",
         ],
         
         // Talta #25770
         25770       => [
                "Talta"                           => "Talta A",
                "SCR 1845-6357 B"                 => "Talta B",
         ],
         
         // Tawhaki #25808
         25808       => [
                "Tawhaki"                         => "Tawhaki A",
                "Gliese 389 B"                    => "Tawhaki B",
         ],
         
         // Theta Persei #25817
         25817       => [
                "Theta Persei"                    => "Theta Persei A",
                "Theta Persei B"                  => "Theta Persei B",
         ],
         
         // Thor #25818
         25818       => [
                "Thor"                            => "Thor A",
                "Gliese 1126 B"                   => "Thor B",
         ],
         
         // UV Ceti #25850
         25850       => [
                "UV Ceti"                         => "UV Ceti A",
                "UV Ceti B"                       => "UV Ceti B",
         ],
         
         // V1396 Cygni #25852
         25852       => [
                "V1396 Cygni"                     => "V1396 Cygni A",
                "Gliese 815 B"                    => "V1396 Cygni B",
         ],
         
         // VV Lyncis #25860
         25860       => [
                "VV Lyncis"                       => "VV Lyncis A",
                "BL Lyncis"                       => "VV Lyncis B",
         ],
         
         // VW Cephi #25861
         25861       => [
                "VW Cephi"                        => "VW Cephi A",
                "VW Cephi B"                      => "VW Cephi B",
         ],
         
         // VY Canis Majoris #25862
         25862       => [
                "VY Canis Majoris"                => "VY Canis Majoris A",
                "VY Canis Major B"                => "VY Canis Majoris B",
         ],
         
         // Wolf 1225 #25882
         25882       => [
                "Wolf 1225"                       => "Wolf 1225 A",
                "Gliese 856 B"                    => "Wolf 1225 B",
         ],
         
         // Wolf 873 #25904
         25904       => [
                "Wolf 873"                        => "Wolf 873 A",
                "Gliese 783.2 B"                  => "Wolf 873 B",
         ],
         
         // Diyu #26055
         26055       => [
                "Diyu"                            => "Diyu A",
                "Gliese 732 B"                    => "Diyu B",
         ],
         
         // Exphiay #26056
         26056       => [
            "Exphiay"                         => "Exphiay",
                "Discovery"                       => "Exphiay 6",
                    "Rakhiot"                         => "Exphiay 6 a",
         ],
         
         // EZ Piscium #26057
         26057       => [
                "EZ Piscium"                      => "EZ Piscium A",
                "GJ 1006 B"                       => "EZ Piscium B",
         ],
         
         // 81 Cancri #26361
         26361       => [
                "81 Cancri"                       => "81 Cancri A",
                "81 Cancri B"                     => "81 Cancri B",
         ],
         
         // LFT 1277 #26498
         26498       => [
                "LFT 1277"                        => "LFT 1277 A",
                "Gl 627 B"                        => "LFT 1277 B",
         ],
         
         // 17 Draconis #26712
         26712       => [
                "17 Draconis"                     => "17 Draconis A",
                "17 Draconis B"                   => "17 Draconis B",
                "16 Draconis"                     => "17 Draconis C",
                "16 Draconis B"                   => "17 Draconis D",
                    "Limbo"                           => "17 Draconis A 1",
                    "Eo"                              => "17 Draconis A 2",
                        "Shepherd"                        => "17 Draconis A 2 a",
                        "Paradiso"                        => "17 Draconis A 2 b",
                    "Icemir"                          => "17 Draconis A 3",
         ],
         
         // Quince #26772
         26772       => [
            "Quince"                          => "Quince",
                "Kosmala Rewards"                 => "Quince 1",
                "New America"                     => "Quince 5",
         ],
         
         // Set #26934
         26934       => [
                "Set"                             => "Set A",
                "Shango"                          => "Set B",
                "Oya"                             => "Set C",
         ],
         
         // W Ursae Majoris #27237
         27237       => [
                "W Ursae Majoris"                 => "W Ursae Majoris A",
                "W Ursae Majoris B"               => "W Ursae Majoris B",
         ],
         
         // 37 Ceti #27595
         27595       => [
                "37 Ceti"                         => "37 Ceti A",
                "Gl 54.2 B"                       => "37 Ceti B",
         ],
         
         // BD+40 2905A #27603
         27603       => [
                "BD+40 2905A"                     => "BD+40 2905A A",
                "Gliese 593 B"                    => "BD+40 2905A B",
         ],
         
         // LTT 15229 #27978
         27978       => [
                "LTT 15229"                       => "LTT 15229 A",
                "Gliese 686.1 B"                  => "LTT 15229 B",
         ],
         
         // BC Arietis #28078
         28078       => [
                "BC Arietis"                      => "BC Arietis A",
                "Gl 113 C"                        => "BC Arietis B",
         ],
         
         // LP 356-14 #28477
         28477       => [
                "LP 356-14"                       => "LP 356-14 A",
                "Gliese 140 B"                    => "LP 356-14 B",
                "Gliese 140 C"                    => "LP 356-14 C",
         ],
         
         // Hotas #29261
         29261       => [
                "Hotas"                           => "Hotas A",
                "Wo 9155 B"                       => "Hotas B",
         ],
         
         // Albireo #29281
         29281       => [
                "Albireo"                         => "Albireo A",
                "6 Beta-2 Cygni"                  => "Albireo B",
         ],
         
         // HR 5346 #30413
         30413       => [
                "HR 5346"                         => "HR 5346 A",
                "BD+20 2954B"                     => "HR 5346 B",
         ],
         
         // UCAC3 70-2386 #30418
         30418       => [
                "UCAC3 70-2386"                   => "UCAC3 70-2386 B",
         ],
         
         // Xi Aquarii #30506
         30506       => [
                "Xi Aquarii"                      => "Xi Aquarii A",
                "Xi Aquarii B"                    => "Xi Aquarii B",
         ],
         
         // Mahakala #30922
         30922       => [
                "Mahakala"                        => "Mahakala A",
                "Gliese 499 B"                    => "Mahakala B",
         ],
         
         // Ross 45 #31334
         31334       => [
                "Ross 45"                         => "Ross 45 A",
                "Ross 45 B"                       => "Ross 45 B",
         ],
         
         // Fehu #31416
         31416       => [
            "Fehu"                            => "Fehu",
                "Likopo"                          => "Fehu 3",
                    "Doolhof"                         => "Fehu 3 a",
         ],
         
         // Herschel 36 #32972
         32972       => [
                "Herschel 36"                     => "Herschel 36 A",
                "Herschel 36 B"                   => "Herschel 36 B",
         ],
         
         // Graffias #33906
         33906       => [
                "Graffias"                        => "Graffias A",
                "8 Beta-2 Scorpii"                => "Graffias B",
         ],
         
         // QZ Carinae #34123
         34123       => [
                "QZ Carinae"                      => "QZ Carinae A",
                "QZ Carinae B"                    => "QZ Carinae B",
                "QZ Carinae C"                    => "QZ Carinae C",
         ],
         
         // CFBDSIR 1458+10 #35258
         35258       => [
                "CFBDSIR 1458+10"                 => "CFBDSIR 1458+10 A",
                "Alpha Arae"                      => "CFBDSIR 1458+10 B",
         ],
         
         // V375 Pavonis #35765
         35765       => [
                "V375 Pavonis"                    => "V375 Pavonis A",
                "Gliese 774 B"                    => "V375 Pavonis B",
         ],
         
         // California Sector HW-W c1-5 #36427
         36427       => [
                "California Sector HW-W c1-5 A"   => "California Sector HW-W c1-5 A",
                "California Sector HW-W c1-5 B"   => "California Sector HW-W c1-5 B",
                "California Sector HW-W c1-5 C"   => "California Sector HW-W c1-5 C",
                    "Emma's Hope"                     => "California Sector HW-W c1-5 A 3",
         ],
         
         // 100 Herculis A #36925
         36925       => [
                "100 Herculis A"                  => "100 Herculis A A",
                "100 Herculis B"                  => "100 Herculis A B",
         ],
         
         // Theta Serpentis #37357
         37357       => [
                "Theta Serpentis"                 => "Theta Serpentis A",
                "63 Theta-2 Serpentis"            => "Theta Serpentis B",
         ],
         
         // 19 Pi Canis Majoris #37731
         37731       => [
                "19 Pi Canis Majoris"             => "19 Pi Canis Majoris A",
                "19 Pi Canis Majoris B"           => "19 Pi Canis Majoris B",
         ],
         
         // 36 Psi Cassiopeiae #38441
         38441       => [
                "36 Psi Cassiopeiae"              => "36 Psi Cassiopeiae A",
                "36 Psi Cassiopeiae B"            => "36 Psi Cassiopeiae B",
         ],
         
         // Alshat #38444
         38444       => [
                "Alshat"                          => "Alshat A",
                "Nu Capricorni B"                 => "Alshat B",
         ],
         
         // Tseen Foo #39211
         39211       => [
                "Tseen Foo"                       => "Tseen Foo A",
                "Theta Aquilae B"                 => "Tseen Foo B",
         ],
         
         // LP 771-95 #39262
         39262       => [
                "LP 771-95"                       => "LP 771-95 A",
                "LP 771-96"                       => "LP 771-95 B",
         ],
         
         // Xi Pegasi #39596
         39596       => [
                "Xi Pegasi"                       => "Xi Pegasi A",
                "Gl 872 B"                        => "Xi Pegasi B",
         ],
         
         // LP 298-42 #39607
         39607       => [
            "LP 298-42"                       => "LP 298-42",
                "Coates Paradise"                 => "LP 298-42 1",
         ],
         
         // Phi Virginis #39793
         39793       => [
                "Phi Virginis"                    => "Phi Virginis A",
                "Gl 550.2 B"                      => "Phi Virginis B",
         ],
         
         // DX Leonis #40418
         40418       => [
                "DX Leonis"                       => "DX Leonis A",
                "Gl 354.1 B"                      => "DX Leonis B",
         ],
         
         // Freyr #40421
         40421       => [
                "Freyr"                           => "Freyr A",
                "Gl 340 B"                        => "Freyr B",
         ],
         
         // Ross 614 #40921
         40921       => [
                "Ross 614"                        => "Ross 614 A",
                "Ross 614 B"                      => "Ross 614 B",
         ],
         
         // Pangu #41860
         41860       => [
                "Pangu"                           => "Pangu A",
                "NN 3686 B"                       => "Pangu B",
         ],
         
         // LTT 5184 #42127
         42127       => [
                "LTT 5184"                        => "LTT 5184 A",
                "Gliese 511 B"                    => "LTT 5184 B",
         ],
         
         // LP 316-604 #42325
         42325       => [
                "LP 316-604"                      => "LP 316-604 A",
                "NN 3617 B"                       => "LP 316-604 B",
         ],
         
         // LFT 200 #42835
         42835       => [
                "LFT 200"                         => "LFT 200 A",
                "LFT 199"                         => "LFT 200 B",
         ],
         
         // LTT 751 #44083
         44083       => [
                "LTT 751"                         => "LTT 751 A",
                "NN 3092 B"                       => "LTT 751 B",
         ],
         
         // Cl Pismis 24 1 #45106
         45106       => [
                "Cl Pismis 24 1"                  => "Cl Pismis 24 1 A",
                "Cl Pismis 24 1 B"                => "Cl Pismis 24 1 B",
         ],
         
         // 30 Arietis #47422
         47422       => [
                "30 Arietis"                      => "30 Arietis A",
                "30 Arietis B"                    => "30 Arietis B",
         ],
         
         // LTT 9423 #48088
         48088       => [
                "LTT 9423"                        => "LTT 9423 A",
                "Gliese 2154 B"                   => "LTT 9423 B",
         ],
         
         // LP 298-7 #48476
         48476       => [
                "LP 298-7"                        => "LP 298-7 A",
                "NN 3170 B"                       => "LP 298-7 B",
         ],
         
         // Zibel #48827
         48827       => [
                "Zibel"                           => "Zibel A",
                "Gl 314 B"                        => "Zibel B",
         ],
         
         // Sheratan #49606
         49606       => [
                "Sheratan"                        => "Sheratan A",
                "Sheratan B"                      => "Sheratan B",
         ],
         
         // V380 Orionis #49931
         49931       => [
                "V380 Orionis"                    => "V380 Orionis A",
                "V380 Orionis B"                  => "V380 Orionis B",
                "V380 Orionis C"                  => "V380 Orionis C",
         ],
         
         // LTT 1772 #52404
         52404       => [
                "LTT 1772"                        => "LTT 1772 A",
                "Gliese 154.1 B"                  => "LTT 1772 B",
         ],
         
         // LHS 5027 #52745
         52745       => [
                "LHS 5027"                        => "LHS 5027 A",
                "Gl 53.1 B"                       => "LHS 5027 B",
         ],
         
         // 39 Omicron Ophiuchi #52964
         52964       => [
                "39 Omicron Ophiuchi"             => "39 Omicron Ophiuchi B",
         ],
         
         // Xi Scorpii #53294
         53294       => [
                "Xi Scorpii"                      => "Xi Scorpii A",
                "Xi Scorpii B"                    => "Xi Scorpii B",
                "Xi Scorpii C"                    => "Xi Scorpii C",
                "Xi Scorpii D"                    => "Xi Scorpii D",
                "Xi Scorpii E"                    => "Xi Scorpii E",
         ],
         
         // PSR J1709-4429 #53334
         53334       => [
                "PSR J1709-4429"                  => "PSR J1709-4429 A",
                "XTE J1118+480"                   => "PSR J1709-4429 B",
         ],
         
         // HL Lupis #53343
         53343       => [
                "HL Lupis"                        => "HL Lupis A",
                "IL Lupis"                        => "HL Lupis B",
         ],
         
         // GU Muscae #53351
         53351       => [
                "GU Muscae"                       => "GU Muscae A",
                "GRS 1124-684"                    => "GU Muscae B",
         ],
         
         // V1357 Cygni #53352
         53352       => [
                "V1357 Cygni"                     => "V1357 Cygni A",
                "Cygni X-1"                       => "V1357 Cygni B",
         ],
         
         // V1033 Scorpii #53353
         53353       => [
                "V1033 Scorpii"                   => "V1033 Scorpii A",
                "GRO J1655-40"                    => "V1033 Scorpii B",
         ],
         
         // V381 Normae #53396
         53396       => [
                "V381 Normae"                     => "V381 Normae A",
                "XTE J1550-564"                   => "V381 Normae B",
         ],
         
         // QZ Vulpeculae #53399
         53399       => [
                "QZ Vulpeculae"                   => "QZ Vulpeculae A",
                "GS 2000+25"                      => "QZ Vulpeculae B",
         ],
         
         // Eta Andromedae #54070
         54070       => [
                "Eta Andromedae"                  => "Eta Andromedae A",
                "Eta Andromedae B"                => "Eta Andromedae B",
         ],
         
         // Tohil #54218
         54218       => [
                "Tohil"                           => "Tohil A",
                "Gl 98 B"                         => "Tohil B",
         ],
         
         // HR 6946 #54745
         54745       => [
                "HR 6946"                         => "HR 6946 A",
                "HR 6946 B"                       => "HR 6946 B",
         ],
         
         // HR 3082 #54822
         54822       => [
                "HR 3082"                         => "HR 3082 A",
                "BD+79 265B"                      => "HR 3082 B",
         ],
         
         // 9 Lambda Arietis #55030
         55030       => [
                "9 Lambda Arietis"                => "9 Lambda Arietis A",
                "9 Lambda Arietis B"              => "9 Lambda Arietis B",
         ],
         
         // HIP 10680 #55116
         55116       => [
                "HIP 10680"                       => "HIP 10680 A",
                "HIP 10679"                       => "HIP 10680 B",
         ],
         
         // Sigma Coronae Borealis #56648
         56648       => [
                "Sigma Coronae Borealis"          => "Sigma Coronae Borealis A",
                "Sigma Coronae Borealis B"        => "Sigma Coronae Borealis B",
                "Sigma Coronae Borealis C"        => "Sigma Coronae Borealis C",
         ],
         
         // BrsO 14 #56919
         56919       => [
                "BrsO 14"                         => "BrsO 14 A",
                "BrsO 14 B"                       => "BrsO 14 B",
         ],
         
         // LFT 265 #57553
         57553       => [
                "LFT 265"                         => "LFT 265 A",
                "Gliese 130.1 B"                  => "LFT 265 B",
         ],
         
         // 13 Ceti #57976
         57976       => [
                "13 Ceti"                         => "13 Ceti A",
                "Gl 25 B"                         => "13 Ceti B",
         ],
         
         // Ranginui #58959
         58959       => [
                "Ranginui"                        => "Ranginui A",
                "NN 3405 B"                       => "Ranginui B",
         ],
         
         // V2149 Orionis #61127
         61127       => [
                "V2149 Orionis"                   => "V2149 Orionis A",
                "CT Chamaeleontis"                => "V2149 Orionis B",
         ],
         
         // HR 2251 #61289
         61289       => [
                "HR 2251"                         => "HR 2251 A",
                "Gliese 231.1 B"                  => "HR 2251 B",
         ],
         
         // BD+44 1353 #64677
         64677       => [
                "BD+44 1353"                      => "BD+44 1353 A",
                "NLTT 15983"                      => "BD+44 1353 B",
         ],
         
         // Spica #65699
         65699       => [
                "Spica"                           => "Spica A",
                "Spica B"                         => "Spica B",
         ],
         
         // WR 136 #67546
         67546       => [
                "WR 136"                          => "WR 136 A",
                "WR 136 B"                        => "WR 136 B",
         ],
         
         // Sigma Orionis #69413
         69413       => [
                "Sigma Orionis"                   => "Sigma Orionis A",
                "Sigma Orionis B"                 => "Sigma Orionis B",
                "Sigma Orionis C"                 => "Sigma Orionis C",
                "Sigma Orionis D"                 => "Sigma Orionis D",
                "Sigma Orionis E"                 => "Sigma Orionis E",
         ],
         
         // 30 Zeta Bootis #69824
         69824       => [
                "30 Zeta Bootis"                  => "30 Zeta Bootis A",
                "30 Zeta Bootis B"                => "30 Zeta Bootis B",
         ],
         
         // LTT 9310 #70574
         70574       => [
                "LTT 9310"                        => "LTT 9310 A",
                "NN 4309 B"                       => "LTT 9310 B",
         ],
         
         // ER Vulpeculae #73975
         73975       => [
                "ER Vulpeculae"                   => "ER Vulpeculae A",
                "ER Vulpeculae B"                 => "ER Vulpeculae B",
         ],
         
         // Mu-1 Crucis #81091
         81091       => [
                "Mu-1 Crucis"                     => "Mu-1 Crucis A",
                "Mu-2 Crucis"                     => "Mu-1 Crucis B",
         ],
         
         // AN Orionis #87106
         87106       => [
                "AN Orionis"                      => "AN Orionis A",
                "V1524 Orionis B"                 => "AN Orionis B",
         ],
         
         // LAWD 15 #88558
         88558       => [
                "LAWD 15"                         => "LAWD 15 A",
                "GJ 1060 B"                       => "LAWD 15 B",
         ],
         
         // LTT 6883 #90636
         90636       => [
                "LTT 6883"                        => "LTT 6883 A",
                "NN 4000 B"                       => "LTT 6883 B",
         ],
         
         // HR 1043 #94201
         94201       => [
                "HR 1043"                         => "HR 1043 A",
                "BD+58 608A"                      => "HR 1043 B",
         ],
         
         // HD 38563North #99240
         99240       => [
                "HD 38563North"                   => "HD 38563North A",
                "HD 38563B"                       => "HD 38563North B",
         ],
         
         // Eeaea #101504
         101504      => [
                "Eeaea"                           => "Eeaea A",
                "Gliese 282 B"                    => "Eeaea B",
         ],
         
         // Acubens #101921
         101921      => [
                "Acubens"                         => "Acubens A",
                "Acubens B"                       => "Acubens B",
         ],
         
         // BD+55 191 #101993
         101993      => [
                "BD+55 191"                       => "BD+55 191 A",
                "BD+55 191 B"                     => "BD+55 191 B",
                "BD+55 191 C"                     => "BD+55 191 C",
                "BD+55 191 D"                     => "BD+55 191 D",
         ],
         
         // HR 1504 #102478
         102478      => [
                "HR 1504"                         => "HR 1504 A",
                "Gl 175 B"                        => "HR 1504 B",
         ],
         
         // Avior #105913
         105913      => [
                "Avior"                           => "Avior A",
                "Avior B"                         => "Avior B",
         ],
         
         // Upsilon Carinae #105925
         105925      => [
                "Upsilon Carinae"                 => "Upsilon Carinae A",
                "Upsilon Carinae B"               => "Upsilon Carinae B",
         ],
         
         // V2436 Cygni #106229
         106229      => [
                "V2436 Cygni"                     => "V2436 Cygni A",
                "Gliese 816.1 B"                  => "V2436 Cygni B",
         ],
         
         // 26 Aquilae #107609
         107609      => [
                "26 Aquilae"                      => "26 Aquilae A",
                "26 Aquilae B"                    => "26 Aquilae B",
         ],
         
         // V773 Cassiopeiae #109089
         109089      => [
                "V773 Cassiopeiae"                => "V773 Cassiopeiae A",
                "TYC 3679-2209-2"                 => "V773 Cassiopeiae B",
         ],
         
         // Zhulong #120438
         120438      => [
                "Zhulong"                         => "Zhulong A",
                "Gliese 841 B"                    => "Zhulong B",
         ],
         
         // HR 4363 #120478
         120478      => [
                "HR 4363"                         => "HR 4363 A",
                "Gliese 421.1 B"                  => "HR 4363 B",
         ],
         
         // HR 5537 #126620
         126620      => [
                "HR 5537"                         => "HR 5537 A",
                "CCDM J14495+5122A"               => "HR 5537 B",
         ],
         
         // BD+15 1957 #128052
         128052      => [
                "BD+15 1957"                      => "BD+15 1957 A",
                "Gliese 1120 B"                   => "BD+15 1957 B",
         ],
         
         // LPM 806 #148855
         148855      => [
                "LPM 806"                         => "LPM 806 A",
                "Gliese 847 B"                    => "LPM 806 B",
         ],
         
         // LHS 2038 #150763
         150763      => [
                "LHS 2038 A"                      => "LHS 2038 A",
                "LHS 2038 B"                      => "LHS 2038 B",
                "LHS 2038 C"                      => "LHS 2038 C",
                    "Frauke"                          => "LHS 2038 C 1",
         ],
         
         // LDS 46 #153335
         153335      => [
                "LDS 46"                          => "LDS 46 A",
                "Gliese 57.1 B"                   => "LDS 46 B",
         ],
         
         // Zeta Aquarii #153366
         153366      => [
                "Zeta Aquarii"                    => "Zeta Aquarii A",
                "Zeta Aquarii B"                  => "Zeta Aquarii B",
         ],
         
         // Mesarthim #153383
         153383      => [
                "Mesarthim"                       => "Mesarthim A",
                "Mesarthim B"                     => "Mesarthim B",
         ],
         
         // 94 Ceti #156895
         156895      => [
                "94 Ceti"                         => "94 Ceti A",
                "Gl 128 B"                        => "94 Ceti B",
         ],
         
         // Psi-1 Aquarii #161757
         161757      => [
                "Psi-1 Aquarii"                   => "Psi-1 Aquarii A",
                "Psi-1 Aquarii B"                 => "Psi-1 Aquarii B",
         ],
         
         // NLTT 19993 #164657
         164657      => [
                "NLTT 19993"                      => "NLTT 19993 A",
                "NN 3511 B"                       => "NLTT 19993 B",
         ],
         
         // Herao #165979
         165979      => [
                "Herao"                           => "Herao A",
                "Gl 344 B"                        => "Herao B",
         ],
         
         // UBV 6193 #166859
         166859      => [
                "UBV 6193"                        => "UBV 6193 A",
                "NN 3431 B"                       => "UBV 6193 B",
         ],
         
         // Gliese 2030 #166860
         166860      => [
                "Gliese 2030"                     => "Gliese 2030 A",
                "Gliese 2030 B"                   => "Gliese 2030 B",
         ],
         
         // LHS 478 #167208
         167208      => [
                "LHS 478"                         => "LHS 478 A",
                "NLTT 48208"                      => "LHS 478 B",
         ],
         
         // Beta Apodis #171448
         171448      => [
                "Beta Apodis"                     => "Beta Apodis A",
                "Beta Apodis B"                   => "Beta Apodis B",
         ],
         
         // 215 G. Carinae #171498
         171498      => [
                "215 G. Carinae"                  => "215 G. Carinae A",
                "215 G. Carinae B"                => "215 G. Carinae B",
         ],
         
         // CD-35 2722 #171844
         171844      => [
                "CD-35 2722"                      => "CD-35 2722 A",
                "CD-35 2722 B"                    => "CD-35 2722 B",
         ],
         
         // CD-43 11917 #172050
         172050      => [
            "CD-43 11917"                     => "CD-43 11917",
                "Ares"                            => "CD-43 11917 1",
         ],
         
         // Gredi #172804
         172804      => [
                "Gredi"                           => "Gredi A",
                "Secunda Giedi BC"                => "Gredi B",
         ],
         
         // 127 G. Canis Majoris #180293
         180293      => [
                "127 G. Canis Major C"            => "127 G. Canis Majoris B",
         ],
         
         // Delta Aurigae #187571
         187571      => [
                "Delta Aurigae"                   => "Delta Aurigae A",
                "Delta Aurigae B"                 => "Delta Aurigae B",
         ],
         
         // 251 G. Carinae #187882
         187882      => [
                "251 G. Carinae"                  => "251 G. Carinae A",
                "251 G. Carinae B"                => "251 G. Carinae B",
         ],
         
         // CD-59 7256 #188526
         188526      => [
                "CD-59 7256"                      => "CD-59 7256 A",
                "Wo 9664 B"                       => "CD-59 7256 B",
         ],
         
         // LFT 1324 #189313
         189313      => [
                "LFT 1324"                        => "LFT 1324 A",
                "Gliese 660 B"                    => "LFT 1324 B",
         ],
         
         // LHS 3808 #190708
         190708      => [
                "LHS 3808"                        => "LHS 3808 A",
                "NN 4278 B"                       => "LHS 3808 B",
         ],
         
         // V1510 Orionis #192918
         192918      => [
                "V1510 Orionis"                   => "V1510 Orionis A",
                "V1510 Orionis B"                 => "V1510 Orionis B",
         ],
         
         // Epsilon Coronae Austrinae #202459
         202459      => [
                "Epsilon Coronae Austrinae"       => "Epsilon Coronae Austrinae A",
                "Epsilon Coronae Austrinae B"     => "Epsilon Coronae Austrinae B",
         ],
         
         // Omega-2 Aquarii #202728
         202728      => [
                "Omega-2 Aquarii"                 => "Omega-2 Aquarii A",
                "Wo 9836 B"                       => "Omega-2 Aquarii B",
         ],
         
         // NT Apodis #203440
         203440      => [
                "NT Apodis"                       => "NT Apodis A",
                "NT Apodis B"                     => "NT Apodis B",
         ],
         
         // LP 665-21 #217122
         217122      => [
                "LP 665-21"                       => "LP 665-21 A",
                "NN 3502 B"                       => "LP 665-21 B",
         ],
         
         // BE Sculptoris #218607
         218607      => [
                "BE Sculptoris"                   => "BE Sculptoris A",
                "BE Sculptoris B"                 => "BE Sculptoris B",
         ],
         
         // BD-01 2075 #229077
         229077      => [
            "BD-01 2075"                      => "BD-01 2075",
                    "KT-Lin"                          => "BD-01 2075 1 a",
         ],
         
         // V0402 Aurigae #248179
         248179      => [
                "V0402 Aurigae"                   => "V0402 Aurigae A",
                "V0402 Aurigae B"                 => "V0402 Aurigae B",
         ],
         
         // 5 Aurigae #250128
         250128      => [
                "5 Aurigae"                       => "5 Aurigae A",
                "5 Aurigae B"                     => "5 Aurigae B",
         ],
         
         // QW Telescopii #253973
         253973      => [
                "QW Telescopii"                   => "QW Telescopii A",
                "QW Telescopii B"                 => "QW Telescopii B",
         ],
         
         // II Ursae Majoris #308639
         308639      => [
                "II Ursae Majoris"                => "II Ursae Majoris A",
                "II Ursae Majoris B"              => "II Ursae Majoris B",
         ],
         
         // Synuefe MU-V c16-0 #311269
         311269      => [
                "Synuefe MU-V c16-0 A"            => "Synuefe MU-V c16-0 A",
                "Synuefe MU-V c16-0 B"            => "Synuefe MU-V c16-0 B",
                    "Rich"                            => "Synuefe MU-V c16-0 A 1",
                    "Aust"                            => "Synuefe MU-V c16-0 A 2",
         ],
         
         // 21 Arietis #359686
         359686      => [
                "21 Arietis"                      => "21 Arietis A",
                "21 Arietis B"                    => "21 Arietis B",
         ],
         
         // IS Canis Majoris #362873
         362873      => [
                "IS Canis Majoris"                => "IS Canis Majoris A",
                "IS Canis Majoris B"              => "IS Canis Majoris B",
         ],
         
         // 14 Lambda Cassiopeiae #372688
         372688      => [
                "14 Lambda Cassiopeiae"           => "14 Lambda Cassiopeiae A",
                "14 Lambda Cassiopeiae B"         => "14 Lambda Cassiopeiae B",
         ],
         
         // LEP 106 #378447
         378447      => [
                "LEP 106"                         => "LEP 106 A",
                "Gliese 857.1 B"                  => "LEP 106 B",
         ],
         
         // ADS 4229 ABC #414547
         414547      => [
                "ADS 4229 ABC"                    => "ADS 4229 ABC A",
                "26 Aurigae C"                    => "ADS 4229 ABC B",
         ],
         
         // 102 G. Carinae #433085
         433085      => [
                "102 G. Carinae"                  => "102 G. Carinae A",
                "102 G. Carinae B"                => "102 G. Carinae B",
         ],
         
         // YY Eridani #447595
         447595      => [
                "YY Eridani"                      => "YY Eridani A",
                "YY Eridani B"                    => "YY Eridani B",
         ],
         
         // 16 Camelopardalis #452590
         452590      => [
                "16 Camelopardalis"               => "16 Camelopardalis A",
                "16 Camelopardalis B"             => "16 Camelopardalis B",
         ],
         
         // BM Phoenicis #461843
         461843      => [
                "BM Phoenicis"                    => "BM Phoenicis A",
                "BM Phoenicis B"                  => "BM Phoenicis B",
         ],
         
         // CCDM J14234+0827A #467900
         467900      => [
                "CCDM J14234+0827A"               => "CCDM J14234+0827A A",
                "BD+09 2882B"                     => "CCDM J14234+0827A B",
                "BD+09 2882C"                     => "CCDM J14234+0827A C",
         ],
         
         // Deneb Okab #500926
         500926      => [
                "Deneb Okab"                      => "Deneb Okab A",
                "Xi Aquilae B"                    => "Deneb Okab B",
         ],
         
         // RZ Comae Berenices #506082
         506082      => [
                "RZ Comae Berenices"              => "RZ Comae Berenices A",
                "RZ Comae Berenices B"            => "RZ Comae Berenices B",
         ],
         
         // V651 Monoceros #526882
         526882      => [
                "V651 Monoceros"                  => "V651 Monoceros A",
                "V651 Monoceros B"                => "V651 Monoceros B",
         ],
         
         // EQ Tauri #538025
         538025      => [
                "EQ Tauri"                        => "EQ Tauri A",
                "EQ Tauri B"                      => "EQ Tauri B",
         ],
         
         // 25 Canum Venaticorum #553440
         553440      => [
                "25 Canum Venaticorum"            => "25 Canum Venaticorum A",
                "25 Canum Venaticorum B"          => "25 Canum Venaticorum B",
         ],
         
         // 6 G. Cancri #581769
         581769      => [
                "6 G. Cancri"                     => "6 G. Cancri A",
                "6 G. Cancri B"                   => "6 G. Cancri B",
         ],
         
         // Deneb el Okab #608667
         608667      => [
                "Deneb el Okab"                   => "Deneb el Okab A",
                "Epsilon Aquilae B"               => "Deneb el Okab B",
         ],
         
         // BX Pegasi #637886
         637886      => [
                "BX Pegasi"                       => "BX Pegasi A",
                "BX Pegasi B"                     => "BX Pegasi B",
         ],
         
         // TW Ceti #638324
         638324      => [
                "TW Ceti"                         => "TW Ceti A",
                "TW Ceti B"                       => "TW Ceti B",
         ],
         
         // KQ Orionis #647957
         647957      => [
                "KQ Orionis"                      => "KQ Orionis A",
                "CoRoT-12"                        => "KQ Orionis B",
         ],
         
         // V2380 Orionis #675637
         675637      => [
                "V2380 Orionis"                   => "V2380 Orionis A",
                "CoRoT-10"                        => "V2380 Orionis B",
         ],
         
         // V1487 Aquilae #702629
         702629      => [
                "V1487 Aquilae"                   => "V1487 Aquilae A",
                "GRS 1915+105"                    => "V1487 Aquilae B",
         ],
         
         // JW 566 #754459
         754459      => [
                "JW 566"                          => "JW 566 A",
                "JW 566 B"                        => "JW 566 B",
         ],
         
         // e-2 Carinae #767615
         767615      => [
                "e-2 Carinae"                     => "e-2 Carinae A",
                "e-2 Carinae B"                   => "e-2 Carinae B",
         ],
         
         // Hoedus I #1010901
         1010901     => [
                "Hoedus I"                        => "Hoedus I A",
                "Hoedus I B"                      => "Hoedus I B",
         ],
         
         // Al Anz #1010972
         1010972     => [
                "Al Anz"                          => "Al Anz A",
                "7 Epsilon Aurigae B"             => "Al Anz B",
         ],
         
         // Lalande 25224 #1011603
         1011603     => [
                "Lalande 25224"                   => "Lalande 25224 A",
                "PSR J2144-3933"                  => "Lalande 25224 B",
         ],
         
         // Kappa-1 Volantis #1029111
         1029111     => [
                "Kappa-1 Volantis"                => "Kappa-1 Volantis A",
                "Kappa-2 Volantis"                => "Kappa-1 Volantis B",
         ],
         
         // Theta Andromedae #1073455
         1073455     => [
                "Theta Andromedae"                => "Theta Andromedae A",
                "Theta Andromedae B"              => "Theta Andromedae B",
         ],
         
         // 60 Andromedae #1078973
         1078973     => [
                "60 Andromedae"                   => "60 Andromedae A",
                "60 Andromedae B"                 => "60 Andromedae B",
         ],
         
         // 17 Comae Berenices #1243605
         1243605     => [
                "17 Comae Berenices"              => "17 Comae Berenices A",
                "17 Comae Berenices B"            => "17 Comae Berenices B",
         ],
         
         // 1 Bootis #1243702
         1243702     => [
                "1 Bootis"                        => "1 Bootis A",
                "1 Bootis B"                      => "1 Bootis B",
         ],
         
         // V1524 Orionis #1304030
         1304030     => [
                "V1524 Orionis"                   => "V1524 Orionis A",
                "V1524 Orionis B"                 => "V1524 Orionis B",
         ],
         
         // Kappa-1 Sculptoris #1377067
         1377067     => [
                "Kappa-1 Sculptoris"              => "Kappa-1 Sculptoris A",
                "Kappa-2 Sculptoris"              => "Kappa-1 Sculptoris B",
         ],
         
         // 97 Aquarii #1378453
         1378453     => [
                "97 Aquarii"                      => "97 Aquarii A",
                "97 Aquarii B"                    => "97 Aquarii B",
         ],
         
         // GY Andromedae #1385417
         1385417     => [
                "GY Andromedae"                   => "GY Andromedae A",
                "GY Andromedae B"                 => "GY Andromedae B",
         ],
         
         // CC Comae Berenices #1412981
         1412981     => [
                "CC Comae Berenices"              => "CC Comae Berenices A",
                "CC Comae Berenices B"            => "CC Comae Berenices B",
         ],
         
         // HIP 44291 #1454017
         1454017     => [
            "HIP 44291"                       => "HIP 44291",
                "Karl-Heinz Lechtermann"          => "HIP 44291 1",
         ],
         
         // 64 Sigma-3 Cancri #1480752
         1480752     => [
                "64 Sigma-3 Cancri"               => "64 Sigma-3 Cancri A",
                "64 Sigma-3 Cancri B"             => "64 Sigma-3 Cancri B",
         ],
         
         // HR 250 #1481475
         1481475     => [
                "HR 250"                          => "HR 250 A",
                "BD+51 179B"                      => "HR 250 B",
         ],
         
         // HN Ursae Majoris #1481529
         1481529     => [
                "HN Ursae Majoris"                => "HN Ursae Majoris A",
                "HN Ursae Majoris B"              => "HN Ursae Majoris B",
         ],
         
         // V1458 Orionis #1599825
         1599825     => [
                "V1458 Orionis"                   => "V1458 Orionis A",
                "V1458 Orionis B"                 => "V1458 Orionis B",
         ],
         
         // XZ Fornacis #1695160
         1695160     => [
                "XZ Fornacis"                     => "XZ Fornacis A",
                "XZ Fornacis B"                   => "XZ Fornacis B",
         ],
         
         // 83 Aquarii #1759036
         1759036     => [
                "83 Aquarii"                      => "83 Aquarii A",
                "83 Aquarii B"                    => "83 Aquarii B",
         ],
         
         // VZ Piscium #1882063
         1882063     => [
                "VZ Piscium"                      => "VZ Piscium A",
                "VZ Piscium B"                    => "VZ Piscium B",
         ],
         
         // 4 Aurigae #1888391
         1888391     => [
                "4 Aurigae"                       => "4 Aurigae A",
                "Omega Aurigae B"                 => "4 Aurigae B",
         ],
         
         // Almach #1929964
         1929964     => [
                "Almach"                          => "Almach A",
                "Gamma Andromedae B"              => "Almach B",
         ],
         
         // AH Virginis #1933014
         1933014     => [
                "AH Virginis"                     => "AH Virginis A",
                "AH Virginis B"                   => "AH Virginis B",
         ],
         
         // HI Puppis #2116876
         2116876     => [
                "HI Puppis"                       => "HI Puppis A",
                "HI Puppis B"                     => "HI Puppis B",
         ],
         
         // 21 YZ Cassiopeiae #2144492
         2144492     => [
                "21 YZ Cassiopeiae"               => "21 YZ Cassiopeiae A",
                "21 YZ Cassiopeiae B"             => "21 YZ Cassiopeiae B",
         ],
         
         // Praea Euq WD-T c3-36 #2166337
         2166337     => [
                "Praea Euq WD-T c3-36 A"          => "Praea Euq WD-T c3-36 A",
                "Praea Euq WD-T c3-36 B"          => "Praea Euq WD-T c3-36 B",
                        "Miola"                           => "Praea Euq WD-T c3-36 B 9 a",
         ],
         
         // 186 G. Carinae #2295836
         2295836     => [
                "186 G. Carinae"                  => "186 G. Carinae A",
                "186 G. Carinae B"                => "186 G. Carinae B",
         ],
         
         // HR 3617 #2374375
         2374375     => [
                "HR 3617"                         => "HR 3617 A",
                "BD+23 2048B"                     => "HR 3617 B",
         ],
         
         // BD-08 1218 #2407833
         2407833     => [
            "BD-08 1218"                      => "BD-08 1218",
                    "Wolf's Claim"                    => "BD-08 1218 2 a",
         ],
         
         // Lono #2432249
         2432249     => [
                "Lono"                            => "Lono A",
                "Gl 518.2 B"                      => "Lono B",
         ],
         
         // 107 Aquarii #2458086
         2458086     => [
                "107 Aquarii"                     => "107 Aquarii A",
                "107 Aquarii B"                   => "107 Aquarii B",
         ],
         
         // AE Aurigae #2582080
         2582080     => [
                "AE Aurigae"                      => "AE Aurigae A",
                "AE Aurigae B"                    => "AE Aurigae B",
         ],
         
         // AO Cassiopeiae #2616419
         2616419     => [
                "AO Cassiopeiae"                  => "AO Cassiopeiae A",
                "AO Cassiopeiae B"                => "AO Cassiopeiae B",
         ],
         
         // FX Eridani #2656119
         2656119     => [
                "FX Eridani"                      => "FX Eridani A",
                "FX Eridani B"                    => "FX Eridani B",
         ],
         
         // Dabih Major #2719375
         2719375     => [
                "Dabih Major"                     => "Dabih Major A",
                "Beta Capricorni Ab"              => "Dabih Major B",
                "Beta Capricorni B"               => "Dabih Major C",
                "Beta Capricorni C"               => "Dabih Major D",
         ],
         
         // 135 G. Carinae #2728606
         2728606     => [
                "135 G. Carinae"                  => "135 G. Carinae A",
                "135 G. Carinae B"                => "135 G. Carinae B",
         ],
         
         // V404 Cygni #2779037
         2779037     => [
                "V404 Cygni"                      => "V404 Cygni A",
                "GS 2023+338"                     => "V404 Cygni B",
         ],
         
         // HIP 39607 #2881255
         2881255     => [
                "HIP 39607"                       => "HIP 39607 A",
                "ADS 6569 B"                      => "HIP 39607 B",
         ],
         
         // 6 Cassiopeiae #2887449
         2887449     => [
                "6 Cassiopeiae"                   => "6 Cassiopeiae A",
                "6 Cassiopeiae B"                 => "6 Cassiopeiae B",
         ],
         
         // 11 Camelopardalis #2913567
         2913567     => [
                "11 Camelopardalis"               => "11 Camelopardalis A",
                "12 Camelopardalis"               => "11 Camelopardalis B",
         ],
         
         // CPO 538 #2951232
         2951232     => [
                "CPO 538"                         => "CPO 538 A",
                "Wo 9593 B"                       => "CPO 538 B",
         ],
         
         // V0757 Centauri #2966589
         2966589     => [
                "V0757 Centauri"                  => "V0757 Centauri A",
                "V0757 Centauri B"                => "V0757 Centauri B",
         ],
         
         // HIP 1254 #3001251
         3001251     => [
            "HIP 1254"                        => "HIP 1254",
                "Laika"                           => "HIP 1254 1",
         ],
         
         // HR 1068 #3017269
         3017269     => [
                "HR 1068"                         => "HR 1068 A",
                "HIP 16584"                       => "HR 1068 B",
         ],
         
         // IR Librae #3029682
         3029682     => [
                "IR Librae"                       => "IR Librae A",
                "IR Librae B"                     => "IR Librae B",
         ],
         
         // 188 G. Carinae #3116545
         3116545     => [
                "188 G. Carinae"                  => "188 G. Carinae A",
                "188 G. Carinae B"                => "188 G. Carinae B",
         ],
         
         // 28 A Aquilae #3158267
         3158267     => [
                "28 A Aquilae"                    => "28 A Aquilae A",
                "28 A Aquilae B"                  => "28 A Aquilae B",
         ],
         
         // V1128 Tauri #3172472
         3172472     => [
                "V1128 Tauri"                     => "V1128 Tauri A",
                "V1128 Tauri B"                   => "V1128 Tauri B",
         ],
         
         // Izar #3200276
         3200276     => [
                "Izar"                            => "Izar A",
                "Izar B"                          => "Izar B",
         ],
         
         // S Antliae #3514150
         3514150     => [
                "S Antliae"                       => "S Antliae A",
                "S Antliae B"                     => "S Antliae B",
         ],
         
         // HT Virginis #3812800
         3812800     => [
                "HT Virginis"                     => "HT Virginis A",
                "HT Virginis B"                   => "HT Virginis B",
         ],
         
         // Hypuae Aim ZP-R b48-0 #3874235
         3874235     => [
            "Hypuae Aim ZP-R b48-0"           => "Hypuae Aim ZP-R b48-0",
                "Travis Green"                    => "Hypuae Aim ZP-R b48-0 1",
         ],
         
         // V616 Monocerotis #4012327
         4012327     => [
                "V616 Monocerotis"                => "V616 Monocerotis A",
                "N Mon 1975"                      => "V616 Monocerotis B",
         ],
         
         // V0776 Cassiopeiae #4059542
         4059542     => [
                "V0776 Cassiopeiae"               => "V0776 Cassiopeiae A",
                "V0776 Cassiopeiae B"             => "V0776 Cassiopeiae B",
         ],
         
         // 56 Andromedae #4107668
         4107668     => [
                "56 Andromedae"                   => "56 Andromedae A",
                "56 Andromedae B"                 => "56 Andromedae B",
         ],
         
         // AO Camelopardalis #4509550
         4509550     => [
                "AO Camelopardalis"               => "AO Camelopardalis A",
                "AO Camelopardalis B"             => "AO Camelopardalis B",
         ],
         
         // 14 Aquilae #4665614
         4665614     => [
                "14 Aquilae"                      => "14 Aquilae A",
                "14 Aquilae B"                    => "14 Aquilae B",
         ],
         
         // Kamba #4974219
         4974219     => [
                "Kamba"                           => "Kamba A",
                "Gl 32 B"                         => "Kamba B",
         ],
         
         // Gamma Arae #5985366
         5985366     => [
                "Gamma Arae"                      => "Gamma Arae A",
                "CPD-56 8225B"                    => "Gamma Arae B",
                "CPD-56 8225C"                    => "Gamma Arae C",
         ],
         
         // ADS 9338 AC #6037137
         6037137     => [
                "ADS 9338 AC"                     => "ADS 9338 AC A",
                "BD+17 2768 C"                    => "ADS 9338 AC B",
                "29 Bootis"                       => "ADS 9338 AC C",
                "29 Bootis B"                     => "ADS 9338 AC D",
         ],
         
         // XY Bootis #6266728
         6266728     => [
                "XY Bootis"                       => "XY Bootis A",
                "XY Bootis B"                     => "XY Bootis B",
         ],
         
         // BV Draconis #6374650
         6374650     => [
                "BV Draconis"                     => "BV Draconis A",
                "BV Draconis B"                   => "BV Draconis B",
         ],
         
         // MS Virginis #6414451
         6414451     => [
                "MS Virginis"                     => "MS Virginis A",
                "MS Virginis B"                   => "MS Virginis B",
         ],
         
         // V0361 Puppis #6450182
         6450182     => [
                "V0361 Puppis"                    => "V0361 Puppis A",
                "V0361 Puppis B"                  => "V0361 Puppis B",
         ],
         
         // V1073 Cygni #6547540
         6547540     => [
                "V1073 Cygni"                     => "V1073 Cygni A",
                "V1073 Cygni B"                   => "V1073 Cygni B",
         ],
         
         // AE Aquarii #6608902
         6608902     => [
                "AE Aquarii"                      => "AE Aquarii A",
                "AE Aquarii B"                    => "AE Aquarii B",
         ],
         
         // HR 4783 #6689422
         6689422     => [
                "HR 4783"                         => "HR 4783 A",
                "HR 5186"                         => "HR 4783 B",
         ],
         
         // 5 Aquilae #6946425
         6946425     => [
                "5 Aquilae"                       => "5 Aquilae A",
                "5 Aquilae Ab"                    => "5 Aquilae B",
                "5 Aquilae B"                     => "5 Aquilae C",
         ],
         
         // Kastra #6946460
         6946460     => [
                "Kastra"                          => "Kastra A",
                "Epsilon Capricorni B"            => "Kastra B",
         ],
         
         // DN Camelopardalis #7001906
         7001906     => [
                "DN Camelopardalis"               => "DN Camelopardalis A",
                "DN Camelopardalis B"             => "DN Camelopardalis B",
         ],
         
         // 41 Aquarii #7018683
         7018683     => [
                "41 Aquarii"                      => "41 Aquarii A",
                "41 Aquarii B"                    => "41 Aquarii B",
         ],
         
         // DX Aquarii #7375564
         7375564     => [
                "DX Aquarii"                      => "DX Aquarii A",
                "DX Aquarii B"                    => "DX Aquarii B",
         ],
         
         // HR 5433 #7375733
         7375733     => [
                "HR 5433"                         => "HR 5433 A",
                "BD+27 2388B"                     => "HR 5433 B",
         ],
         
         // V415 Canis Majoris #7474632
         7474632     => [
                "V415 Canis Majoris"              => "V415 Canis Majoris A",
                "V415 Canis Majoris B"            => "V415 Canis Majoris B",
         ],
         
         // PSR J1453-6413 #8066032
         8066032     => [
                "PSR J1453-6413"                  => "PSR J1453-6413 A",
                "GRO J0422+32"                    => "PSR J1453-6413 B",
         ],
         
         // 14 Aurigae #8180672
         8180672     => [
                "14 Aurigae"                      => "14 Aurigae A",
                "14 Aurigae C"                    => "14 Aurigae B",
         ],
         
         // HP Canis Majoris #8256544
         8256544     => [
                "HP Canis Majoris"                => "HP Canis Majoris A",
                "HP Canis Majoris B"              => "HP Canis Majoris B",
         ],
         
         // FI Bootis #8582138
         8582138     => [
                "FI Bootis"                       => "FI Bootis A",
                "FI Bootis B"                     => "FI Bootis B",
         ],
         
         // RW Comae Berenices #8816192
         8816192     => [
                "RW Comae Berenices"              => "RW Comae Berenices A",
                "RW Comae Berenices B"            => "RW Comae Berenices B",
         ],
         
         // 52 Arietis #8940212
         8940212     => [
                "52 Arietis"                      => "52 Arietis A",
                "52 Arietis B"                    => "52 Arietis B",
         ],
         
         // 232 G. Carinae #8957610
         8957610     => [
                "232 G. Carinae"                  => "232 G. Carinae A",
                "233 G. Carinae"                  => "232 G. Carinae B",
         ],
         
         // Nu Andromedae #9287035
         9287035     => [
                "Nu Andromedae"                   => "Nu Andromedae A",
                "Nu Andromedae B"                 => "Nu Andromedae B",
         ],
         
         // V375 Carinae #9653911
         9653911     => [
                "V375 Carinae"                    => "V375 Carinae A",
                "CD-62 329"                       => "V375 Carinae B",
         ],
         
         // T-2 Carinae #9763375
         9763375     => [
                "T-2 Carinae"                     => "T-2 Carinae A",
                "HD 92398"                        => "T-2 Carinae B",
         ],
         
         // HIP 3574 #9866976
         9866976     => [
            "HIP 3574"                        => "HIP 3574",
                "HD 4313 b"                       => "HIP 3574 1",
         ],
         
         // CD-30 19834 #9892820
         9892820     => [
                "CD-30 19834"                     => "CD-30 19834 A",
                "HD 91 B"                         => "CD-30 19834 B",
         ],
         
         // LHS 188 #10029811
         10029811    => [
            "LHS 188"                         => "LHS 188",
                "Aiden Collar"                    => "LHS 188 1",
                "Teayum"                          => "LHS 188 2",
         ],
         
         // Kepler-20 #10042398
         10042398    => [
            "Kepler-20"                       => "Kepler-20",
                "PER - G8XBE"                     => "Kepler-20 1",
                "Rob's Place"                     => "Kepler-20 2",
                "Maxine's World"                  => "Kepler-20 3",
         ],
         
         // MOA-2007-BLG-400L #10226428
         10226428    => [
            "MOA-2007-BLG-400L"               => "MOA-2007-BLG-400L",
                "MOA-2007-BLG-400L b"             => "MOA-2007-BLG-400L 1",
         ],
         
         // UV Lyncis #10320409
         10320409    => [
                "UV Lyncis"                       => "UV Lyncis A",
                "UV Lyncis B"                     => "UV Lyncis B",
         ],
         
         // HD 57593 #10965070
         10965070    => [
                "HD 57593"                        => "HD 57593 A",
                "HQ Canis Majoris B"              => "HD 57593 B",
         ],
         
         // 235 G. Carinae #11171654
         11171654    => [
                "235 G. Carinae"                  => "235 G. Carinae A",
                "235 G. Carinae B"                => "235 G. Carinae B",
         ],
         
         // Eowrairsts JA-P c19-0 #11246930
         11246930    => [
            "Eowrairsts JA-P c19-0"           => "Eowrairsts JA-P c19-0",
                    "Farwalker Point"                 => "Eowrairsts JA-P c19-0 7 a",
         ],
         
         // Zeta Antliae #11654948
         11654948    => [
                "Zeta Antliae"                    => "Zeta Antliae A",
                "Zeta Antliae B"                  => "Zeta Antliae B",
         ],
         
         // 74 Psi-1 Piscium #12257052
         12257052    => [
                "74 Psi-1 Piscium"                => "74 Psi-1 Piscium B",
         ],
         
         // Theta Antliae #12265164
         12265164    => [
                "Theta Antliae"                   => "Theta Antliae A",
                "Theta Antliae B"                 => "Theta Antliae B",
         ],
         
         // Phi Persei #12357814
         12357814    => [
                "Phi Persei"                      => "Phi Persei A",
                "Phi Persei B"                    => "Phi Persei B",
         ],
         
         // 21 Sigma Aurigae #12435368
         12435368    => [
                "21 Sigma Aurigae"                => "21 Sigma Aurigae A",
                "21 Sigma Aurigae B"              => "21 Sigma Aurigae B",
         ],
         
         // Struve 1694 #12734097
         12734097    => [
                "Struve 1694"                     => "Struve 1694 A",
                "Struve 1694 B"                   => "Struve 1694 B",
         ],
         
         // U Pegasi #13627996
         13627996    => [
                "U Pegasi"                        => "U Pegasi A",
                "U Pegasi B"                      => "U Pegasi B",
         ],
         
         // Eol Procul Centauri #13734568
         13734568    => [
            "Eol Procul Centauri"             => "Eol Procul Centauri",
                "Hutton Moon"                     => "Eol Procul Centauri 1",
         ],
         
         // b-1 Carinae #14245345
         14245345    => [
                "b-1 Carinae"                     => "b-1 Carinae A",
                "b-1 Carinae B"                   => "b-1 Carinae B",
         ],
         
         // TV Muscae #14246215
         14246215    => [
                "TV Muscae"                       => "TV Muscae A",
                "TV Muscae B"                     => "TV Muscae B",
         ],
         
         // AP Doradus #14348200
         14348200    => [
                "AP Doradus"                      => "AP Doradus A",
                "AP Doradus B"                    => "AP Doradus B",
         ],
         
         // VW Bootis #14369606
         14369606    => [
                "VW Bootis"                       => "VW Bootis A",
                "VW Bootis B"                     => "VW Bootis B",
         ],
         
         // AK Herculis #14477952
         14477952    => [
                "AK Herculis"                     => "AK Herculis A",
                "AK Herculis B"                   => "AK Herculis B",
         ],
         
         // V0410 Aurigae #14830102
         14830102    => [
                "V0410 Aurigae"                   => "V0410 Aurigae A",
                "V0410 Aurigae B"                 => "V0410 Aurigae B",
         ],
         
         // V486 Carinae #15549758
         15549758    => [
                "V486 Carinae"                    => "V486 Carinae A",
                "V486 Carinae B"                  => "V486 Carinae B",
         ],
         
         // 172 G. Carinae #16356777
         16356777    => [
                "172 G. Carinae"                  => "172 G. Carinae A",
                "172 G. Carinae B"                => "172 G. Carinae B",
         ],
         
         // 461 G. Carinae #16357896
         16357896    => [
                "461 G. Carinae"                  => "461 G. Carinae A",
                "461 G. Carinae B"                => "461 G. Carinae B",
         ],
         
         // AN Mensae #16385624
         16385624    => [
                "AN Mensae"                       => "AN Mensae A",
                "AN Mensae B"                     => "AN Mensae B",
         ],
         
         // VW Pictoris #17952537
         17952537    => [
                "VW Pictoris"                     => "VW Pictoris A",
                "VW Pictoris B"                   => "VW Pictoris B",
         ],
         
         // XY Pictoris #18025045
         18025045    => [
                "XY Pictoris"                     => "XY Pictoris A",
                "XY Pictoris B"                   => "XY Pictoris B",
         ],
         
         // HIP 24155 #18454428
         18454428    => [
                "HIP 24155"                       => "HIP 24155 A",
                "HIP 24155 B"                     => "HIP 24155 B",
         ],
         
         // FP Eridani #18818200
         18818200    => [
                "FP Eridani"                      => "FP Eridani A",
                "FP Eridani B"                    => "FP Eridani B",
         ],
         
         // IGR J17497-2821 #19343058
         19343058    => [
                "IGR J17497-2821"                 => "IGR J17497-2821 A",
                "IGR J17497-2821 X"               => "IGR J17497-2821 B",
         ],
         
    ];
}