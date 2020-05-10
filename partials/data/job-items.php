<?php

$SQL = '
SELECT
	jobs.*, cities.`name` AS cityName
FROM
	jobs
JOIN cities ON jobs.cityId = cities.id
WHERE jobs.deleted = 0
ORDER BY jobs.id ASC
';
$jobItems = $conn->query($SQL)->fetch_all(MYSQLI_ASSOC);

foreach ($jobItems as $index => $jobItem) {
    $SQL = 'SELECT
                professions.*
            FROM
                job_professions
            JOIN professions ON job_professions.professionsId = professions.id
            WHERE
                jobId = '.$jobItem['id'].' 
            LIMIT 3
                ';
    $jobItems[$index]['proffesions'] = $conn->query($SQL)->fetch_all(MYSQLI_ASSOC);
    $jobItems[$index]['location'] = [
        "href" => "https://www.google.com/maps/place/Tirana+County,+Albania/@41.2584531,19.5554474,10z/data=!3m1!4b1!4m5!3m4!1s0x13503a9407e31c25:0x57de78a67346afff!8m2!3d41.2427598!4d19.8067916",
        "name" => $jobItem['cityName']
    ];
}

//echo json_encode($jobItems); die;

?>