<?php

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

?>


<!-- Statistikat-->
<div class="statistika col-12 mt-4" style="padding-left: 0px;padding-right: 0px;">
    <div class="btn-group btn-group-lg rounded-lg w-75 text-white" style="background-image: url('img/statistics.png');">

        <div class="btn-group-vertical w-75" >
            <button type="button" class="btn text-left" >
                <div><i><?php echo $activeJobsTotal['total']; ?></i></div>
                <div><small><b>Pune aktive</b></small></div>
            </button>
            <button type="button" class="btn text-left"><div><i><?php echo $punekerkuesTotal['total']; ?></i></div>
                <div><small><b>Punekerkues</b></small></div>
            </button>
            <button type="button" class="btn text-left">
                <div><i><?php echo $punedhenesTotal['total']; ?></i></div>
                <div><small><b>Punedhenes</b></small></div>
            </button>
        </div>

        <button type="button" class="btn">Statistika</button>

    </div>
</div>