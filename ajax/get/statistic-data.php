<?php

include '../../db/db-connection.php';

//Pune Aktive
$SQL = 'SELECT
            COUNT( id ) AS total 
        FROM
            jobs 
        WHERE
            deleted = 0; ';
$activeJobsTotal = $conn->query($SQL)->fetch_assoc();

//Punekerkues
$SQL = 'SELECT
            COUNT( id ) AS total 
        FROM
            users 
        WHERE
            type_user = "punekerkues"
            AND deleted = 0;';
$punekerkuesTotal = $conn->query($SQL)->fetch_assoc();

//Punedhenes
$SQL = 'SELECT
            COUNT( id ) AS total 
        FROM
            users 
        WHERE
            type_user = "punedhenes"
            AND deleted = 0;';
$punedhenesTotal = $conn->query($SQL)->fetch_assoc();



echo json_encode([
    "puneAktive" => $activeJobsTotal['total'],
    "puneKerkues" => $punekerkuesTotal['total'],
    "puneDhenes" => $punedhenesTotal['total']
]);
?>