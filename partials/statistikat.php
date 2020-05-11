<?php

//Pune Aktive
$SQL = 'SELECT COUNT(id) as total FROM jobs;';
$activeJobs = $conn->query($SQL)->fetch_assoc();

//Punekerkues


//Punedhenes


?>


<!-- Statistikat-->
<div class="statistika col-12 mt-4" style="padding-left: 0px;padding-right: 0px;">
    <div class="btn-group btn-group-lg rounded-lg w-75 text-white" style="background-image: url('img/statistics.png');">

        <div class="btn-group-vertical w-75" >
            <button type="button" class="btn text-left" >
                <div><i><?php echo $activeJobs['total']; ?></i></div>
                <div><small><b>Pune aktive</b></small></div>
            </button>
            <button type="button" class="btn text-left"><div><i>10008901</i></div>
                <div><small><b>Punekerkues</b></small></div>
            </button>
            <button type="button" class="btn text-left">
                <div><i>8539</i></div>
                <div><small><b>Punedhenes</b></small></div>
            </button>
        </div>

        <button type="button" class="btn">Statistika</button>

    </div>
</div>