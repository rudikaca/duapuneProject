<?php

$proffesionsData = [
    [
        "title" => "Informatike",
        "href" => "#",
    ],
    [
        "title" => "Hoteleri - Turizem",
        "href" => "#",
    ],
    [
        "title" => "Administrim Biznesi",
        "href" => "#",
    ],
    [
        "title" => "Shitje - Marketing",
        "href" => "#",
    ],
    [
        "title" => "Finance - Banke",
        "href" => "#",
    ],
];

foreach ($proffesionsData as $index => $proffesiondata) {
    include '../../partials/proffesions.php';
}

?>