<?php


$conditions = '';
$searchId = isset($_GET['fjale']) ? $_GET['fjale'] : '';
$searchCompany = isset($_GET['company']) ? $_GET['company'] : '';
$searchCountry = isset($_GET['country']) ? $_GET['country'] : '';
$searchCity = isset($_GET['city']) ? $_GET['city'] : '';
$searchJobType = isset($_GET['job_type']) ? $_GET['job_type'] : '';
$searchCategory = isset($_GET['category']) ? $_GET['category'] : '';

if (!empty($searchId)) {
    $conditions .= ' AND (jobs.id = "' . $searchId . '" OR jobs.title LIKE "%' . $searchId . '%")  ';
}
if (!empty($searchCompany)) {
    $conditions .= ' AND companies.name LIKE "%' . $searchCompany . '%" ';
}
if (!empty($searchCountry) && is_numeric($searchCountry)) {
    $conditions .= ' AND cities.countryId = ' . $searchCountry . ' ';
}
if (!empty($searchCity) && is_numeric($searchCity)) {
    $conditions .= ' AND cities.id = ' . $searchCity . ' ';
}
if (!empty($searchJobType)) {
    $conditions .= ' AND jobs.type = "' . $searchJobType . '" ';
}
if (!empty($searchCategory) && is_numeric($searchCategory)) {
    $conditions .= ' AND jobs.job_categoryId = ' . $searchCategory . ' ';
}


$SQL = '
SELECT
	jobs.*, cities.`name` AS cityName , companies.`name` AS companyName, companies.`company_logo` AS companyLogo
FROM
	jobs
JOIN cities ON jobs.cityId = cities.id
JOIN companies ON jobs.companyId = companies.id
WHERE jobs.deleted = 0 '.$conditions.'
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
?>


