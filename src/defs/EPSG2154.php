<?php

return [
    "EPSG:2154" => "+proj=lcc +lat_1=49 +lat_2=44 +lat_0=46.5 +lon_0=3 +x_0=700000 +y_0=6600000 +ellps=GRS80 +towgs84=0,0,0,0,0,0,0 +units=m +no_defs",
];

// How about supporting a structure like this too? Just a thought.
return [
    "EPSG:2154" => [
        "+proj"     => "lcc",
        "+lat_1"    => "49",
        "+lat_2"    => "44",
        "+lat_0"    => "46.5",
        "+lon_0"    => "3",
        "+x_0"      => "700000",
        "+y_0"      => "6600000",
        "+ellps"    => "GRS80",
        "+towgs84"  => "0,0,0,0,0,0,0",
        "+units"    => "m +no_defs",
    ],
];

