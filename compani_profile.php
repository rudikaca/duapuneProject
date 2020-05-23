<!--te dhena personale-->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>duapune.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'partials/links.php'; ?>
    <?php include 'process/is_not_authenticated.php'; ?>

</head>
<body>

<?php

if (empty($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: single_job.php');
}
$id = $_GET['id'];

$SQL = "SELECT
	companies.*,
	cities.NAME AS cityName,
	countries.NAME AS countryName
FROM
	companies
	JOIN cities ON companies.cityId = cities.id
	JOIN countries ON cities.countryId = countries.id 
WHERE
	companies.id = $id 
	AND companies.deleted = 0";

$result = $conn->query($SQL);

if ($result->num_rows <= 0) {
    header('Location: index.php');
}
$companyDetail = $result->fetch_assoc();

$SQL = "SELECT
	jobs.*, cities.`name` AS cityName , companies.`name` AS companyName
FROM
	jobs
JOIN cities ON jobs.cityId = cities.id
JOIN companies ON jobs.companyId = companies.id
WHERE jobs.deleted = 0 AND jobs.companyId = $id
ORDER BY jobs.id ASC";

$companyJobs = $conn->query($SQL)->fetch_all(MYSQLI_ASSOC);


?>


<!-- start include data-->
<?php include 'partials/data/proffesion-data.php'; ?>
<!-- end include data-->

<!--Navbar -->
<?php include 'partials/header.php'; ?>

<div class="container-fluid" style=" background-color: #f4f8fa;">

    <?php include 'partials/header_search.php'; ?>

    <!--Kreu-->
    <div class="row">
        <div class="mb-0 col-md-12 container" style="font-family: Arial, Helvetica, sans-serif; background-color: #f4f8fa">

            <!--Kreu-->
            <div class="row">
                <div class="col-md-12 mt-5 text-center">
                    <h4><a style="color: #0056b3" href="index.php">Kreu</a> > <a style="color: #0056b3" href="">Kompanitë</a> > <?php echo $companyDetail['name']; ?></h4>
                </div>
            </div>

            <!--kolonat 3-6-3-->
            <div class="mb-3">
                <div class="row tex mx-auto">

                    <!--colona  1-->
                    <div class="col-md-3 mt-3">
                        <div class="card col-md-12 border-2 m-2 shadow-sm">
                            <div class="m-4">
                                <a class="text-center">
                                    <div class="mx-auto col-sm-12">
                                        <img src="img/202.jpg" class="card-img rounded-circle logo"
                                             style="width: 90px; height: 90px;
                                                    border-radius: 150px;
                                                    border: 1px solid #cecfcf;
                                                    background-repeat: no-repeat; "
                                             alt="foto">
                                    </div>
                                </a>
                                <hr>
                                <p><small><b>Statistika</b></small></p>
                                <div>
                                    <h5>
                                        <?php echo $companyDetail['company_size']; ?>
                                        <br>
                                        <small class="text-muted"><small>Numri i Punonjësve</small></small>
                                    </h5>
                                    <br>
                                    <h5>
                                        <?php echo count($companyJobs); ?>
                                        <br>
                                        <small class="text-muted"><small>Punë Aktive</small></small>
                                    </h5>
                                    <br>
                                    <h5>
                                        <?php echo $companyDetail['sector']; ?>
                                        <br>
                                        <small class="text-muted"><small>Sektori</small></small>
                                    </h5>
                                    <br>
                                    <h5>
                                        <?php echo $companyDetail['founded']; ?>
                                        <br>
                                        <small class="text-muted"><small>Themeluar</small></small>
                                    </h5>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--colona  2-->
                    <div class="col-md-9 mt-3">
                        <div class="card col-md-12 border-2 m-2 shadow-sm">
                            <div class="job-listing col-md-12 mt-5 mr-3">
                                <!--Kodi i punes-->
                                <div class="mb-5 mid-content">
                                    <h2>
                                        <strong><?php echo $companyDetail['name']; ?></strong>
                                    </h2>
                                    <br>
                                    <!--location-->
                                    <div class="job-details">
                                        <small>
                                            <span class="location"><i class="text-muted fa fa-location-arrow" aria-hidden="true"></i>
                                                <?php echo $companyDetail['cityName']; ?>,
                                                <?php echo $companyDetail['countryName']; ?>
                                            </span>
                                            <span class="expire"><i class="text-muted fa fa-folder-open" aria-hidden="true"></i>
                                            Shërbimet personale (individuale)
                                            </span>
                                            <span class="expire"><i class="text-muted fa fa-globe" aria-hidden="true"></i> <a href="#" target="_blank"><?php echo $companyDetail['website']; ?></a>
                                            </span>
                                        </small>
                                    </div>
                                    <br>
                                    <hr>
                                </div>

                                <!--Pershkrimi-->
                                <div class="main-content-wrap">
                                    <h3><strong>Përshkrimi i kompanisë</strong></h3>
                                    <?php echo $companyDetail['description']; ?>
                                    <hr>
                                    <br>
                                    <h3><strong>Çertifikime</strong></h3>
                                    <div class="container">
                                        <?php echo $companyDetail['certifications']; ?>
                                    </div>
                                    <hr>
                                    <br>
                                    <h3 class=""><strong>Punët aktive nga <?php echo $companyDetail['name']; ?></strong></h3>
                                    <br>

                                    <?php foreach ($companyJobs as $companyJob) {
                                        $SQL = 'SELECT
                                                    professions.*
                                                FROM
                                                    job_professions
                                                JOIN professions ON job_professions.professionsId = professions.id
                                                WHERE
                                                    jobId = '.$companyJob['id'].' 
                                                    ';
                                        $proffesions = $conn->query($SQL)->fetch_all(MYSQLI_ASSOC);

                                        ?>
                                        <div class="job-listing mid-content-mod col-md-12 second">
                                            <div class="  mb-1 job-item">
                                                <div class="container">
                                                    <div class="row no-gutters">

                                                        <!--Logo e kompanise-->
                                                        <div class="col-md-1 col-sm-12">
                                                            <img src="img/202.jpg" class="card-img rounded-circle logo" alt="foto">
                                                        </div>

                                                        <!--Te dhenat-->
                                                        <div class="col-md-7 col-sm-12">
                                                            <div class=" card-body">
                                                                <!--titulli profesionit-->
                                                                <div class="col-sm-12 card-text">
                                                                    <h4><?php echo $companyJob['title']; ?></h4>
                                                                </div>

                                                                <!--emri i kompanise-->
                                                                <div class="col-sm-12 card-text text-muted">
                                                                    <small class="text-muted"><?php echo $companyDetail['name']; ?></small>
                                                                </div>

                                                                <!--butonat profesione-->
                                                                <div class="col-sm-12 card-text mt-2">
                                                                        <?php
                                                                        foreach ($proffesions as $proffesion) {
                                                                        ?>
                                                                            <span class="p-1 mr-2 rounded bg-secondary">
                                                                                <a class="text-white" href="<?php echo $proffesion['id']; ?>"><?php echo $proffesion['name']; ?></a>
                                                                            </span>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--Data & location-->
                                                        <div class="col-md-3 col-sm-12">
                                                            <div class="col-sm-12 card-body">

                                                                <!--location-->
                                                                <div class="col-sm-12 card-text text-muted">
                                                                    <small class="text-muted">
                                                                        <a href="" target="_blank"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $companyDetail['cityName']; ?></a>
                                                                    </small>
                                                                </div>

                                                                <!--clock-->
                                                                <div class="col-sm-12 card-text text-muted">
                                                                    <small class="text-muted"><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $companyJob['expireDate']; ?></small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--Apliko-->
                                                        <div class="col-md-1 col-sm-12">
                                                            <div class="col-sm-12 card-text mt-5">
                                                                <a href="single_job.php?id=<?php echo $companyJob['id']; ?>" class="btn btn-outline-success">Apliko</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    <?php }?>

                                    <br>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php include 'partials/footer.php'; ?>

<script>
    <?php include 'partials/scripts.php'; ?>
</script>

</body>
